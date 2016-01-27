<?php
class App_Hello_Block_Hello extends Mage_Core_Block_Template
{
public function _prepareLayout()
{
return parent::_prepareLayout();
}
public function getHello()
{
return 'Hello world';
}
}