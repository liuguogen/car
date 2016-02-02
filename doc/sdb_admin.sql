create table sdb_admin (
	id int unsigned not null key auto_increment,
	username varchar(50) not null comment '用户名',
	password varchar(50) not null comment '密码',
	ip varchar(100) default null comment '注册ip',
	login_type varchar(30)  default null comment '账户类型',
	createtime int(10) default null comment '创建时间',
	disabled enum('false','true') not null default 'false' comment '是否禁用',
	juri longtext comment '权限',
	UNIQUE KEY (username)
	)engine=innodb default charset=utf8;
insert into `sdb_admin` (username,password,login_type,createtime) VALUES ('admin','d033e22ae348aeb5660fc2140aec35850c4da997','shopadmin',1454235333)
-- CREATE TABLE `sdb_ome_orders` (
--   `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
--   `order_bn` varchar(32) NOT NULL,
--   `o_bn` varchar(32) NOT NULL,
--   `is_out` enum('0','1') DEFAULT '1',
--   `archive` tinyint(3) unsigned NOT NULL DEFAULT '0',
--   `member_id` int(10) unsigned DEFAULT NULL,
--   `confirm` enum('Y','N') NOT NULL DEFAULT 'N',
--   `process_status` enum('unconfirmed','confirmed','splitting','splited','cancel','remain_cancel','is_retrial','is_declare') NOT NULL DEFAULT 'unconfirmed',
--   `status` enum('active','dead','finish') NOT NULL DEFAULT 'active',
--   `order_types` enum('0','1') DEFAULT '0',
--   `pay_status` enum('0','1','2','3','4','5','6','7','8') NOT NULL DEFAULT '0',
--   `ship_status` enum('0','1','2','3','4') NOT NULL DEFAULT '0',
--   `is_delivery` enum('Y','N') NOT NULL DEFAULT 'Y',
--   `shipping` varchar(100) DEFAULT NULL,
--   `pay_bn` varchar(255) DEFAULT NULL,
--   `payment` varchar(100) DEFAULT NULL,
--   `weight` decimal(20,3) DEFAULT NULL,
--   `tostr` longtext,
--   `itemnum` mediumint(8) unsigned DEFAULT NULL,
--   `createtime` int(10) unsigned DEFAULT NULL,
--   `download_time` int(10) unsigned DEFAULT NULL,
--   `up_time` int(10) unsigned DEFAULT NULL,
--   `last_modified` int(10) unsigned DEFAULT NULL,
--   `outer_lastmodify` int(10) unsigned DEFAULT NULL,
--   `shop_id` varchar(32) DEFAULT NULL,
--   `shop_type` varchar(50) DEFAULT NULL,
--   `ip` varchar(15) DEFAULT NULL,
--   `ship_name` varchar(50) DEFAULT NULL,
--   `ship_area` varchar(255) DEFAULT NULL,
--   `ship_addr` varchar(100) DEFAULT NULL,
--   `ship_zip` varchar(20) DEFAULT NULL,
--   `ship_tel` varchar(30) DEFAULT NULL,
--   `ship_email` varchar(150) DEFAULT NULL,
--   `ship_time` varchar(50) DEFAULT NULL,
--   `ship_mobile` varchar(50) DEFAULT NULL,
--   `spare_mobile` varchar(50) DEFAULT NULL,
--   `consigner_name` varchar(50) DEFAULT NULL,
--   `consigner_area` varchar(255) DEFAULT NULL,
--   `consigner_addr` varchar(100) DEFAULT NULL,
--   `consigner_zip` varchar(20) DEFAULT NULL,
--   `consigner_email` varchar(150) DEFAULT NULL,
--   `consigner_mobile` varchar(50) DEFAULT NULL,
--   `consigner_tel` varchar(30) DEFAULT NULL,
--   `cost_item` decimal(20,3) NOT NULL DEFAULT '0.000',
--   `is_tax` enum('true','false') NOT NULL DEFAULT 'false',
--   `cost_tax` decimal(20,3) NOT NULL DEFAULT '0.000',
--   `tax_company` varchar(255) DEFAULT NULL,
--   `cost_freight` decimal(20,3) NOT NULL DEFAULT '0.000',
--   `is_protect` enum('true','false') NOT NULL DEFAULT 'false',
--   `cost_protect` decimal(20,3) NOT NULL DEFAULT '0.000',
--   `is_cod` enum('true','false') NOT NULL DEFAULT 'false',
--   `is_fail` enum('true','false') NOT NULL DEFAULT 'false',
--   `edit_status` enum('true','false') NOT NULL DEFAULT 'false',
--   `cost_payment` decimal(20,3) DEFAULT NULL,
--   `currency` varchar(8) DEFAULT NULL,
--   `cur_rate` decimal(10,4) DEFAULT '1.0000',
--   `score_u` decimal(20,3) NOT NULL DEFAULT '0.000',
--   `score_g` decimal(20,3) NOT NULL DEFAULT '0.000',
--   `discount` decimal(20,3) NOT NULL DEFAULT '0.000',
--   `pmt_goods` decimal(20,3) NOT NULL DEFAULT '0.000',
--   `pmt_order` decimal(20,3) NOT NULL DEFAULT '0.000',
--   `total_amount` decimal(20,3) DEFAULT '0.000',
--   `final_amount` decimal(20,3) NOT NULL DEFAULT '0.000',
--   `payed` decimal(20,3) DEFAULT '0.000',
--   `custom_mark` longtext,
--   `mark_text` longtext,
--   `disabled` enum('true','false') NOT NULL DEFAULT 'false',
--   `mark_type` varchar(3) DEFAULT NULL,
--   `tax_no` varchar(50) DEFAULT NULL,
--   `dt_begin` int(10) unsigned DEFAULT NULL,
--   `is_anti` enum('true','false') NOT NULL DEFAULT 'false',
--   `group_id` mediumint(8) unsigned DEFAULT NULL,
--   `op_id` mediumint(8) unsigned DEFAULT NULL,
--   `dispatch_time` int(10) unsigned DEFAULT NULL,
--   `order_limit_time` int(10) unsigned DEFAULT NULL,
--   `coupons_name` varchar(255) DEFAULT NULL,
--   `refer_id` varchar(50) DEFAULT NULL,
--   `refer_url` varchar(200) DEFAULT NULL,
--   `refer_time` int(10) unsigned DEFAULT NULL,
--   `c_refer_id` varchar(50) DEFAULT NULL,
--   `c_refer_url` varchar(200) DEFAULT NULL,
--   `c_refer_time` int(10) unsigned DEFAULT NULL,
--   `abnormal` enum('true','false') DEFAULT 'false',
--   `print_finish` enum('true','false') NOT NULL DEFAULT 'false',
--   `source` varchar(50) DEFAULT 'matrix',
--   `pause` enum('true','false') DEFAULT 'false',
--   `is_modify` enum('true','false') DEFAULT 'false',
--   `old_amount` decimal(20,3) DEFAULT '0.000',
--   `order_type` enum('normal','sale') DEFAULT 'normal',
--   `order_job_no` varchar(16) DEFAULT NULL,
--   `order_combine_idx` bigint(13) DEFAULT NULL,
--   `order_combine_hash` char(32) DEFAULT NULL,
--   `auto_status` bigint(20) DEFAULT '0',
--   `abnormal_status` bigint(20) DEFAULT '0',
--   `refund_status` int(11) DEFAULT '0',
--   `print_status` tinyint(4) NOT NULL DEFAULT '0',
--   `logi_id` mediumint(8) unsigned DEFAULT NULL,
--   `logi_no` varchar(50) DEFAULT NULL,
--   `sync` enum('none','run','fail','succ') DEFAULT 'none',
--   `paytime` int(10) unsigned DEFAULT NULL,
--   `modifytime` int(10) unsigned DEFAULT NULL,
--   `is_auto` enum('true','false') NOT NULL DEFAULT 'false',
--   `self_delivery` enum('true','false') NOT NULL DEFAULT 'true',
--   `order_source` varchar(50) DEFAULT 'direct',
--   `relate_order_bn` varchar(32) DEFAULT NULL,
--   `item_type` varchar(50) DEFAULT NULL,
--   `createway` enum('matrix','local','import','after') NOT NULL DEFAULT 'matrix',
--   `is_artificial` enum('0','1') DEFAULT '0',
--   `is_since` enum('0','1') DEFAULT '0',
--   `sync_fail_type` enum('none','shipped','unbind','params') DEFAULT 'none',
--   PRIMARY KEY (`order_id`),
--   UNIQUE KEY `ind_order_bn_shop` (`order_bn`,`shop_id`),
--   KEY `ind_order_bn` (`order_bn`),
--   KEY `ind_archive` (`archive`),
--   KEY `ind_ship_status` (`ship_status`),
--   KEY `ind_pay_status` (`pay_status`),
--   KEY `ind_status` (`status`),
--   KEY `ind_process_status` (`process_status`),
--   KEY `ind_shop_type` (`shop_type`),
--   KEY `ind_is_cod` (`is_cod`),
--   KEY `ind_createtime` (`createtime`),
--   KEY `ind_order_job_no` (`order_job_no`),
--   KEY `ind_pay_bn` (`pay_bn`),
--   KEY `ind_is_auto` (`is_auto`),
--   KEY `ind_is_tax` (`is_tax`),
--   KEY `ind_outer_lastmodify` (`outer_lastmodify`),
--   KEY `ind_pause` (`pause`),
--   KEY `ind_abnormal` (`abnormal`),
--   KEY `idx_c_member_id` (`member_id`),
--   KEY `idx_c_shop_id` (`shop_id`),
--   KEY `idx_c_group_id` (`group_id`),
--   KEY `idx_c_op_id` (`op_id`),
--   KEY `idx_c_logi_id` (`logi_id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8