<?php
class Post{
    private $post = "";
    public function setPost($post) {
        $this->post=$post;
    }
    public function getPost():string {
        return $this->post;

    }
    }

$post1=new Post();
$post1->setPost("This is a text post") ;
echo $post1->getPost() . PHP_EOL;