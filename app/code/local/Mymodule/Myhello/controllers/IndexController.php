<?php
class Mymodule_Myhello_IndexController extends Mage_Core_Controller_Front_Action{

	public function indexAction(){
		$block = new Mage_Core_Block_Text();
		$block->setText("Hello World");
		echo $block->toHtml();
	}
	public function twoAction(){
		$blocks = new Mage_Core_Block_Template();
		$blocks->setTemplate('myhello.phtml');
		var_dump($blocks->getTemplateFile());
	}
	public function showAction(){
		$block = new Mage_Core_Block_Template();
		$block->setTemplate("myhello.phtml");
		echo $block->toHtml();
	}
}
