<?php

require_once 'model/Forum.php';
require_once 'Framework/Controller.php';
require_once 'Framework/Request.php';

class ControllerForum extends Controller
{
    private $categoryTable = 'forum_category';
    private $topicTable = 'forum_topics';
    private $postTable = 'forum_posts';
    private $forum;
    private $listCategory;

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
        $id=$this->request->getParameter('id');
        $catTopics=$this->forum->getTopicList($id);
        $this->generateView(array(
            "listTopics"=>$catTopics,
        ));
    }

    public function post()
    {
        $id=$this->request->getParameter('id');
        /*$id=1;*/
        $subjectTopic=$this->forum->getTopicSubject($id);
        $topPosts=$this->forum->getPostList($id);
        $this->generateView(array(
            "subject"=>$subjectTopic,
            "listPosts"=>$topPosts,
        ));
    }
}