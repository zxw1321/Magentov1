<?php
class MagentoBook_PaymentModule_Model_PaymentMethod extends Mage_Payment_Model_Method_Cc{
protected $_code = 'paymentmodule';
protected $_isGateway = true;
protected $_canAuthorize = true;
protected $_canCapture = true;
protected $_canCapturePartial = false;
protected $_canRefund = true;
protected $_canVoid = true;
protected $_canUseInternal = true;
protected $_canUseCheckout = true;
protected $_canUseForMultishipping = true;
protected $_canSaveCc = false;
public function authorize(Varien_Object $payment, $amount)
{
$data = $payment->getData();
/*
$data = array(
store_id,
customer_payment_id,
method,
additional_data,
po_number,
cc_type,
cc_number_enc,
This material is copyright and is licensed for the sole use by Betty Vaughan-Pope on 1st February 2010
Chapter 5
[ 91 ]
cc_last4,
cc_owner,
cc_exp_month,
cc_exp_year,
cc_number,
cc_cid,
cc_ss_issue,
cc_ss_start_month,
cc_ss_start_year,
parent_id,
amount_ordered,
base_amount_ordered,
shipping_amount,
base_shipping_amount,
method_instance)
*/
}
public function capture(Varien_Object $payment, $amount)
{
// Grab stored payment data array for processing
$paymentData = unserialize($payment->getAdditionalData());
}
public function void(Varien_Object $payment)
{
// actions when order is voided occur here
}
public function refund(Varien_Object $payment, $amount)
{
// actions when order is refunded occur here
}
}