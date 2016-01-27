<?php
$installer = $this;
$installer->startSetup();
$installer->run("
DROP TABLE IF EXISTS {$this->getTable('hello')};
CREATE TABLE {$this->getTable('hello')} (
`hello_id` int(11) unsigned NOT NULL auto_increment,
`hello_name` varchar(255) NOT NULL default '',
`hello_description` text NOT NULL default '',
`hello_location` varchar(255) NOT NULL default '',
`status` smallint(6) NOT NULL default '0',
`created_time` datetime NULL,
`update_time` datetime NULL,
PRIMARY KEY (`hello_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");
$installer->endSetup();