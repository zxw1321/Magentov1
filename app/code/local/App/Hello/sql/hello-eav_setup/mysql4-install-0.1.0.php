<?php

$installer->createEntityTables(
$this->getTable('hello-eav/blogpost')
);

$installer = $this;
$installer->addEntityType('hello_eavblogpost',Array(
//entity_mode is the URL you'd pass into a Mage::getModel() call
'entity_model' =>'hello-eav/eavblogpost',
//blank for now
'attribute_model' =>'',
//table refers to the resource URI helloworld-eav/blogpost
//<helloworld -eav_mysql4>бн<blogpost><table>eavblog_posts</table>
'table' =>'hello-eav/blogpost',
//blank for now, but can also be eav/entity_increment_numeric
'increment_model' =>'',
//appears that this needs to be/can be above "1" if we're using eav/entity_increment_numeric
'increment_per_store' =>'0'
));




