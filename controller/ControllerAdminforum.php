<?php

require_once 'Model/Forum.php';
require_once 'Framework/Controller.php';
require_once 'Framework/Request.php';
require_once 'Controller/ControllerAdmin.php';

class ControllerAdminforum extends ControllerAdmin
{

    private $forum;


    public function __construct()
    {
        $this->forum = new Forum();


    }


    public function index() {

        $listCategory=$this->forum->getCategoryList();
        $totalTopics=$this->forum->getCategoryTopicsCount();
        $totalDesc=$this->forum->getCategoryCount();
        $this->generateView(array(
                        "listCat"=>$listCategory,
                        "totalTop"=>$totalTopics,
                        "totalDesc"=>$totalDesc,


            ));
    }

    public function topic()
    {
        if(!$this->request->isParameterSet('id')) {
            http_response_code(404);
            throw new Exception('Page Not Found');
        } else {
            $id=$this->request->getParameter('id');
            $catTopics=$this->forum->getTopicList($id);
            $this->generateView(array(
                "listTopics"=>$catTopics,
                "refCat"=>$id,

            ));
        }

    }

    public function post()
    {
        if(!$this->request->isParameterSet('id')) {
            http_response_code(404);
            throw new Exception('Page Not Found');
        } else {
            $id=$this->request->getParameter('id');
            $subjectTopic=$this->forum->getTopicSubject($id);
            $topPosts=$this->forum->getPostList($id);

            $this->generateView(array(
                "subject"=>$subjectTopic,
                "listPosts"=>$topPosts,
                "refTopic"=>$id,

            ));
        }

    }

    public function postmessage(){
        $user_id=$this->session->getAttribute("user")['id'];
        $message=$this->request->getParameter('message');
        $id=$this->request->getParameter('topic_id');
        $this->forum->insertPost($message, $id, $user_id);
        $this->redirect("adminforum/post/$id");

    }

    public function newTopic(){
        $user_id=$this->session->getAttribute("user")['id'];
        $subject=$this->request->getParameter('subject');
        /*$message=$this->request->getParameter('message');*/
        $id_cat=$this->request->getParameter('category_id');
        $this->forum->insertTopic($subject, $id_cat, $user_id);


        $this->redirect("adminforum/topic/$id_cat");

    }

    public function newCategory(){
        $name=$this->request->getParameter('cat_name');
        $description=$this->request->getParameter('description');
        $this->forum->insertCategory($name,$description);


        $this->redirect("adminforum");

    }

    public function deleteCategory(){
        $catId=$this->request->getParameter("id");

        $this->forum->deleteCategory($catId);
        $this->redirect("adminforum");
    }

    public function deleteMessage(){
        $postId=$this->request->getParameter("id");

        $this->forum->deletePost($postId);
        $this->redirect("adminforum");
    }

    public function deleteTopic(){
        $topicId=$this->request->getParameter("id");

        $this->forum->deleteTopic($topicId);
        $this->redirect("adminforum");
    }
}