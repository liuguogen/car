create table sdb_thumb (
	id int unsigned not null key auto_increment,
	one_img varchar(100) default null comment '第一张轮播图',
	one_url varchar(100) default null comment '第一张轮播图URL',
	two_img varchar(100) default null comment '第二张轮播图',
	two_url varchar(100) default null comment '第二张轮播图URL',
	three_img varchar(100) default null comment '第三张轮播图',
	three_url varchar(100) default null comment '第三张轮播图URL',
	four_img varchar(100) default null comment '第四张轮播图',
	four_url varchar(100) default null comment '第四张轮播图URL'
)engine=innodb default charset=utf8;