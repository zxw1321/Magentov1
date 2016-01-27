<?php
class Packt_News_Helper_Data extends Mage_Core_Helper_Abstract
{
  public function getNewsUrl()
    {
        return $this->_getUrl('news');
    }
	
}