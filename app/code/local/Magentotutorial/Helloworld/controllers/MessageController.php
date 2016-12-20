<?php
class Magentotutorial_Helloworld_MessageController extends Mage_Core_Controller_Front_Action {

	public function messageAction(){
		echo 'hey, leave a message here!';
	}
	public function indexAction(){
		echo 'this guy is so lazy, he leave onthing here!';
	}
}