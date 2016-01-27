<?php
class App_HelloModel_Mysql4_Hello_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
	public function _construct()
	{
		$this->_init('hello/hello');
	}
}