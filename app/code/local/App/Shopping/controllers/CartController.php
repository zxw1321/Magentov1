<?php
# �����������Զ����أ�����������Ҫ�����ļ�������������(Block)��һ��
require_once 'Mage/Checkout/controllers/CartController.php';
class App_Shopping_CartController extends Mage_Checkout_CartController
{
#��дindexAction����
public function indexAction()
{
# Just to make sure
error_log('Ү���ɹ���д���ﳵ��');
parent::indexAction();
}
}
