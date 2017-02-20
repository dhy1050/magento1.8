<?php
class Mymodule_Myhello_IndexController extends Mage_Core_Controller_Front_Action{

	public function indexAction(){
		
		$block_1 = new Mage_Core_Block_Text();
		$block_1->setText('Original Text');

		$block_2 = new Mage_Core_Block_Text();
		$block_2->setText('The second sentence.');

		$main_block = new Mage_Core_Block_Template();
		$main_block->setTemplate('myhello.phtml');

		$main_block->setChild('the_first', $block_1);
		$main_block->setChild('the_second', $block_2);

		$block_1->setText('Wait, I want this text instead.');
		echo $main_block->toHtml();
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
	public function childAction(){
		$paragraph_block =  new Mage_Core_Block_Text();
		$paragraph_block->setText("One paragraph to rule them all.");
		$main_block = new Mage_Core_Block_Texmplate();
		$main_block = setTemplate('myhello.phtml');

		$main_block->setChild('the_first',$paragraph_block);
		echo $main_block->toHtml();
	}

	public function helloblockAction(){
		$block_1 = new Mage_Core_Block_Text();
		$block_1->setText('The first sentence.');

		$block_2 = new Mage_Core_Block_Text();
		$block_2->setText('The second sentence.');

		$main_block = new Mymodule_Myhello_Block_Myhello();
		// $main_block->setTemplate('myhello.phtml');

		$main_block->setChild('the_first', $block_1);
		$main_block->setChild('the_second', $block_2);

		echo $main_block->toHtml();
	}
}
