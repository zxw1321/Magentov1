<?php
# 控制器不会自动加载，所以我们需要包含文件，这里与区块(Block)不一样
require_once 'Mage/Checkout/controllers/CartController.php';
class App_Shopping_CartController extends Mage_Checkout_CartController
{
#覆写indexAction方法
public function indexAction()
{
# Just to make sure
error_log('耶～成功重写购物车！');
parent::indexAction();
}
}
