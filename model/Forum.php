<?php
require_once("Framework/Model.php");

/**
 * Class Forum
 */
class Forum extends Model
{
    public function getCategoryList(){
        $sql = "SELECT * FROM ".$this->categoryTable." ORDER BY category_id DESC";
        $resultCategory = $this->executeRequest($sql);
        return $resultCategory;
    }

    public function getCategory(){
        if($this->category_id) {
            $sql = "
				SELECT name
				FROM ".$this->categoryTable." 
				WHERE category_id = ".$this->category_id;

            $categoryDetails = $this->executeRequest($sql);
            return $categoryDetails;
        }
    }

    public function getCategoryTopicsCount(){
        if($this->category_id) {
            $sql = "
				SELECT count(*) as total_topic
				FROM ".$this->topicTable." 
				WHERE category_id = ".$this->category_id;

            $result = $this->executeRequest($sql);
            $categoryDetails = $result->fetch_assoc();
            return $categoryDetails['total_topic'];
        }
    }

    public function getCategorypostsCount(){
        if($this->category_id) {
            $sql = "
				SELECT count(p.post_id) as total_posts
				FROM ".$this->postTable." as p
				LEFT JOIN ".$this->topicTable." as t ON p.topic_id = t.topic_id
				LEFT JOIN ".$this->categoryTable." as c ON t.category_id = c.category_id				
				WHERE c.category_id = ".$this->category_id;

            $result = $this->executeRequest($sql);
            $categoryDetails = $result->fetch_assoc();
            return $categoryDetails['total_posts'];
        }
    }


    public function getPost(){
        $sql = "
			SELECT *
			FROM ".$this->postTable." ORDER BY post_id DESC LIMIT 3";

        $result = $this->executeRequest($sql);
        return $result;
    }


    public function insert(){
        echo "===message===".$this->message."===topic id===".$this->topic_id."===userid==".$this->user_id;
        if($this->message && $this->topic_id && $this->user_id) {

            $stmt = $this->conn->prepare("
				INSERT INTO ".$this->postTable."(`message`, `topic_id`, `user_id`)
				VALUES(?, ?, ?)");

            $stmt->bind_param("sii", $this->message, $this->topic_id, $this->user_id);

            if($stmt->execute()){
                $lastPid = $stmt->insert_id;
                $sqlQuery = "
					SELECT post_id, message, topic_id, user_id, DATE_FORMAT(created,'%d %M %Y %H:%i:%s') AS post_date
					FROM ".$this->postTable." WHERE post_id = '$lastPid'";
                $stmt2 = $this->conn->prepare($sqlQuery);
                $stmt2->execute();
                $result = $stmt2->get_result();
                $record = $result->fetch_assoc();
                echo json_encode($record);
            }
        }
    }

    public function update(){

        if($this->post_id && $this->message) {

            $stmt = $this->conn->prepare("
				UPDATE ".$this->postTable." SET message = ? 
				WHERE post_id = ?");

            $stmt->bind_param("si", $this->message, $this->post_id);

            if($stmt->execute()){
                $sqlQuery = "
					SELECT post_id, message, user_id, DATE_FORMAT(created,'%d %M %Y %H:%i:%s') AS post_date
					FROM ".$this->postTable." WHERE post_id = '".$this->post_id."'";
                $stmt2 = $this->conn->prepare($sqlQuery);
                $stmt2->execute();
                $result = $stmt2->get_result();
                $record = $result->fetch_assoc();
                echo json_encode($record);
            }
        }
    }


    public function getTopicList(){
        if($this->category_id) {
            $sql = "
				SELECT c.name, c.category_id, t.subject, t.topic_id, t.user_id, t.created 			
				FROM ".$this->topicTable." as t 
				LEFT JOIN ".$this->categoryTable." as c ON t.category_id = c.category_id
				WHERE t.category_id = ".$this->category_id."
				ORDER BY t.topic_id DESC";

            $result = $this->executeRequest($sql);
            return $result;
        }
    }

    public function getTopic(){
        if($this->topic_id) {
            $sql = "
				SELECT subject, category_id
				FROM ".$this->topicTable." 
				WHERE topic_id = ".$this->topic_id;

            $result = $this->executeRequest($sql);
            $topicDetails = $result->fetch_assoc();
            return $topicDetails;
        }
    }

    public function getPosts(){
        if($this->topic_id) {
            $sql= "
				SELECT t.topic_id, p.post_id, p.message, p.topic_id, p.user_id, p.created, u.username			
				FROM ".$this->topicTable." as t 
				LEFT JOIN ".$this->postTable." as p ON t.topic_id = p.post_id
				LEFT JOIN ".$this->userTable." as u ON p.user_id = u.user_id
				WHERE p.topic_id = ".$this->topic_id."
				ORDER BY p.post_id ASC";

            $result = $this->executeRequest($sql);
            return $result;
        }
    }

    public function getTopicPostCount(){
        if($this->topic_id) {
            $sql = "
				SELECT count(*) as total_posts
				FROM ".$this->postTable." 
				WHERE topic_id = ".$this->topic_id;

            $result = $this->executeRequest($sql);
            $categoryDetails = $result->fetch_assoc();
            return $categoryDetails['total_posts'];
        }
    }


}