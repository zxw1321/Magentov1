<?php
class App_Hello_Model_Words
{
public function toOptionArray()
{
return array(
array('value'=>1, 'label'=>Mage::helper('hello')->__('Hello')),
array('value'=>2, 'label'=>Mage::helper('hello')->__('Goodbye')),
array('value'=>3, 'label'=>Mage::helper('hello')->__('Yes')),
array('value'=>4, 'label'=>Mage::helper('hello')->__('No')),
);
}
}
