<?php

require_once('Post.php');

$db=new Post();
 
//select
var_dump($db->getPost());
var_dump($db->getPostById(1));
 
//insert
$data=['title'=>'This is Third Record','content'=>'Dive deep into OOPS'];
$db->addPost($data);
var_dump($db->getPost());

//update
$data=['id'=>1,'title'=>'This is Last Record','content'=>'Enjoying the php OOP'];
$db->updatePost($data);
var_dump($db->getPost());

//delete
$db->deletePost(3);
var_dump($db->getPost());

?>

