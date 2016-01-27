<?php
class App_Hello_BlogController extends Mage_Core_Controller_Front_Action { 
public function indexAction() 
{ 
$params = $this->getRequest()->getParams(); 
$blogpost = Mage::getModel('hello/blogpost'); 
echo("Loading the blogpost with an ID of ".$params['id']."<br />"); 
$blogpost->load($params['id']); 
$data = $blogpost->getData(); 
var_dump($data);	
} 

public function createNewPostAction() { 
$blogpost = Mage::getModel('hello/blogpost'); 
$blogpost->setTitle('Code Post 2!'); 
$blogpost->setPost('This post was created from code!'); 
$blogpost->save(); 
echo 'post created'; 
}
public function editFirstPostAction() { 
$blogpost = Mage::getModel('hello/blogpost'); 
$blogpost->load(1); 
$blogpost->setTitle("The First post!"); 
$blogpost->save(); 
echo 'post edited'; 
}
public function deleteFirstPostAction() { 
$blogpost = Mage::getModel('hello/blogpost'); 
$blogpost->load(1); 
$blogpost->delete(); 
echo 'post removed'; 
}
public function showAllBlogPostsAction() { 
$posts = Mage::getModel('hello/blogpost')->getCollection(); 
foreach($posts as $blog_post){ 
echo '<h3>'.$blog_post->getTitle().'</h3>'; 
echo nl2br($blog_post->getPost()); 
} 
}
public function eavReadAction(){
$eavModel = Mage::getModel('hello/eavblogpost');
echo get_class($eavModel)."<br />";
	
}

}
