<?php

require_once 'model/Forum.php';
require_once 'Framework/Controller.php';

class ControllerForum extends Controller
{
    private $categoryTable = 'forum_category';
    private $topicTable = 'forum_topics';
    private $postTable = 'forum_posts';
    private $forum;


    public function __construct()
    {
        $this->forum = new Forum();
    }


    public function index() {
        $listCategory=$this->forum->getCategoryList();
        
        $this->generateView($listCategory);
    }


}