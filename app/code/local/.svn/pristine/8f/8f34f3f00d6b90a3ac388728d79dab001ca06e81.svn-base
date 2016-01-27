<?php
$installer = $this; 
$installer->startSetup(); 
$installer->run(" 
ALTER TABLE `{$installer->getTable('hello/blogpost')}` 
CHANGE post post text not null; 
"); 
$installer->endSetup();

