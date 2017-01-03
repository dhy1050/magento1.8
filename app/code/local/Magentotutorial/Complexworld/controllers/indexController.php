<? php

public function indexAction() {
    $weblog2 = Mage::getModel('complexworld/eavblogpost');
    $weblog2->load(1);
    var_dump($weblog2);
}