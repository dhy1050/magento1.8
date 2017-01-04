<?php
class Magentotutorial_Weblog_IndexController extends Mage_Core_Controller_Front_Action {
	public function testModelAction() {
	    $params = $this->getRequest()->getParams();
	    $blogpost = Mage::getModel('weblog/blogpost');
	    echo("Loading the blogpost with an ID of ".$params['id']);
	    $blogpost->load($params['id']);
	   // $blogpost->setBlogpostId(50);
	    $data = $blogpost->getOrigData();
	    var_dump($data);
	    $data = $blogpost->getData();

	    var_dump($data);
	    $blogpost->setTitle("hahaha");
	    $blogpost->setPost("I change the post to be hahahahahahahahaha");
	    $blogpost->save();
	    echo 'post with ID ' . $blogpost->getId() . ' created';
	    $data = $blogpost->getData();
	    var_dump($data);
	}
}