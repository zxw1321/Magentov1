<?php
class App_Hello_Model_Resource_Eav_Mysql4_Blogpost extends Mage_Eav_Model_Entity_Abstract
{
public function _construct()
{
$resource = Mage::getSingleton('core/resource');
$this->setType('hello_eavblogpost');
$this->setConnection(
$resource->getConnection('hello-eav_read'),
$resource->getConnection('hello-eav_write')
);
}
}
