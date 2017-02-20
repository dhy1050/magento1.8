<?php

class Mymodule_Myhello_Block_Myhello extends Mage_Core_Block_Template{
	public function _construct(){
		$this->setTemplate('myhello.phtml');
		return parent::_construct();
	}
}