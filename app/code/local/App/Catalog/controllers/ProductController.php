<?php
require_once 'Mage/Catalog/controllers/ProductController.php';

/**
* Product controller
*
* @category Mage
* @package Mage_Catalog
*/
class App_Catalog_ProductController extends Mage_Catalog_ProductController
{
/**
* View product action
*/
public function viewAction()
{
echo 'ธฒธวนýตฤ....';
parent::viewAction();
}
}
