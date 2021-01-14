<?php
require_once("Framework/Model.php");

/**
 * Class Forum
 */
class Forum extends Model
{
    /*Supprimer getCategoryList et getCategoryTopicsCount si getCategoryCount fonctionne*/
    public function getCategoryList(){
        $sql = "SELECT * 
                FROM forum_category 
                ORDER BY category_id";
        $response = $this->executeRequest($sql);
        $dataArr = array();
        while($data = $response->fetch()) {
            $dataArr[$data['category_id']] = $data;
        }

        return $dataArr;
    }


    public function getCategoryTopicsCount()
    {
        $sql = "
				SELECT count(*) as total_topic
				FROM forum_topics 
				GROUP BY category_id 
				ORDER BY category_id";

        $response = $this->executeRequest($sql);

        $dataArr = array();
        while ($data = $response->fetch()) {
            $dataArr[$data['total_topic']] = $data;
        }

        return $dataArr;
    }


    public function getCategoryCount()
    {
        $sql = "
				SELECT c.name, c.category_id, c.description, count(t.topic_id) as total_topics
				FROM forum_category as c
				LEFT JOIN forum_topics as t ON c.category_id = t.category_id				
				GROUP BY c.category_id
				";

        $response = $this->executeRequest($sql);

        $dataArr = array();
        while ($data = $response->fetch()) {
            $dataArr[$data['category_id']] = $data;
        }

        return $dataArr;
    }


    public function getTopicList($id){

        $sql = "
                SELECT t.topic_id, t.subject, t.user_id, t.created, u.nom, u.prenom, count(t.topic_id) as total_topics, t.created	
				FROM forum_topics as t
				LEFT JOIN user as u ON t.user_id = u.id
				LEFT JOIN forum_posts as p ON t.topic_id = p.topic_id
				WHERE category_id = ".$id."
				GROUP BY t.topic_id
				ORDER BY t.topic_id DESC";

        $response = $this->executeRequest($sql);

        $dataArr = array();
        while ($data = $response->fetch()) {
            $dataArr[$data['topic_id']] = $data;
        }

        return $dataArr;

    }


    public function getPostList($id){

        $sql = "
                SELECT p.post_id, p.message, p.user_id, p.created, u.nom, u.prenom, s.nom as role 		
				FROM forum_posts as p
				LEFT JOIN user as u ON p.user_id = u.id
				LEFT JOIN statut as s ON u.statut = s.id
				WHERE p.topic_id = ".$id."
				";

        $response = $this->executeRequest($sql);

        $dataArr = array();
        while ($data = $response->fetch()) {
            $dataArr[$data['post_id']] = $data;
        }

        return $dataArr;

    }

    public function getTopicSubject($id){
        $sql = "
                SELECT subject, topic_id
                FROM forum_topics
                WHERE topic_id =".$id."
                GROUP BY topic_id";

        $response = $this->executeRequest($sql);

        $dataArr = array();
        while ($data = $response->fetch()) {
            $dataArr[$data['topic_id']] = $data;
        }

        return $dataArr;
    }

    public function insertPost($message, $topic_id, $user_id) {
        $sql = "INSERT INTO forum_posts(message, topic_id, user_id, created)
                VALUES (?, ?, ?, current_timestamp)";

        $values = array($message, $topic_id, $user_id) ;

        $this->executeRequest($sql, $values);
    }

    public function insertTopic($subject,$category_id, $user_id) {
        $sql = "INSERT INTO forum_topics(subject, category_id, user_id, created)
                VALUES (?, ?, ?, current_timestamp)";

        $values = array($subject, $category_id, $user_id) ;

        $this->executeRequest($sql, $values);
    }

    public function getTopicIdBySubject ($subject){
        $sql = "
                SELECT topic_id
                FROM forum_topics
                WHERE subject = '".$subject."'
        ";
        $response = $this->executeRequest($sql);

        $dataArr = array();
        while ($data = $response->fetch()) {
            $dataArr[$data['top']] = $data;
        }

        return $dataArr;

    }
}