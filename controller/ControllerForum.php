<?php

require_once 'Model/Forum.php';
require_once 'Framework/Controller.php';
require_once 'Framework/Request.php';
require_once 'Controller/ControllerSecure.php';

class ControllerForum extends ControllerSecure
{

    private $forum;


    public function __construct()
    {
        $this->forum = new Forum();
        /*$this->listCategory = new ListCategory();*/

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
        $this->redirect("forum/post/$id");

    }

    public function newTopic(){
        $user_id=$this->session->getAttribute("user")['id'];
        $subject=$this->request->getParameter('subject');
        /*$message=$this->request->getParameter('message');*/
        $id_cat=$this->request->getParameter('category_id');
        $this->forum->insertTopic($subject, $id_cat, $user_id);





        $this->redirect("forum/topic/$id_cat");

    }
}