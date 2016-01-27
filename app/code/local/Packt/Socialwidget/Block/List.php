<?php
class Packt_Socialwidget_Block_List extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{
	protected $_serializer = null;
	protected function _construct()
	{
		$this->_serializer = new Varien_Object();
		parent::_construct();
	}
	protected function _toHtml()
	{
		$html = '';
		$config = $this->getData('enabled_services');
		if (empty($config)) {
			return $html;
		}
		$services = explode(',', $config);
		$list = array();
		foreach ($services as $service) {
			$item = $this->_generateServiceLink($service);
			if ($item) {
				$list[] = $item;
			}
		}
		$this->assign('list', $list);
		return parent::_toHtml();
	}
	protected function _generateServiceLink($service)
	{
		$pageTitle = '';
		$headBlock = $this->getLayout()->getBlock('head');
		if ($headBlock) {
			$pageTitle = $headBlock->getTitle();
		}
		$currentUrl = $this->getUrl('*/*/*', array('_current' =>
		true, '_use_rewrite' => true));
		$attributes = array();
		$icon = '';
		switch ($service) {
			case 'buzz':
				$attributes = array(
'href' => 'http://www.google.com/buzz/post?message='
. $pageTitle
.'&url='.rawurlencode($currentUrl),
'title' => ucfirst($service),
'target' => '_blank'
);
$icon = 'buzz.png';
break;
			case 'facebook':
				$attributes = array(
'href' => 'http://www.facebook.com/sharer.php?u='
. rawurlencode($currentUrl)
.'&t='.$pageTitle.'%26s+website',
'title' => ucfirst($service),
'target' => '_blank'
);
$icon = 'facebook.png';
break;
			case 'twitter':
				$attributes = array(
'href' => 'http://twitter.com/home?status='
. rawurlencode('Check it out ' . $pageTitle . ' at ' .
$currentUrl),
'title' => ucfirst($service),
'target' => '_blank'
);
$icon = 'twitter.png';
break;
			case 'digg':
				$attributes = array(
'href' => 'http://www.digg.com/submit?url=' .
				rawurlencode($currentUrl) . '&amp;phase=2',
'title' => ucfirst($service),
'target' => '_blank'
);
$icon = 'digg.png';
break;
			case 'delicious':
				$attributes = array(
'href' => 'http://del.icio.us/post?url=' .rawurlencode($currentUrl),'title' => ucfirst($service),
'onclick' => 'window.open(\'http://del.icio.us/post?v=4&amp;noui&amp;jump=close&amp;url='. rawurlencode($currentUrl) . "&amp;title=" .rawurlencode($pageTitle)
				. "','delicious', 'toolbar=no,width=700,height=400');return false;",
				);
				$icon = 'delicious.png';
				break;
			default:
				return array();
				break;
		}
		$item = array(
'text' => $attributes['title'],
'attributes' => $this->_serializer->setData($attributes)->serialize(),
'image' => $this->getSkinUrl("images/socialwidget/" .$icon),
		);
		return $item;
	}
}
