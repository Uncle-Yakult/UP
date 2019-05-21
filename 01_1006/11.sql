-- ----------------------------
-- Table structure for sp_user
-- ----------------------------
DROP TABLE IF EXISTS `sp_user`;
CREATE TABLE `sp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar (40) NOT NULL,
  `password` char(32) NOT NULL,
  `nickname` varchar(40) DEFAULT NULL,
  `truename` varchar(40) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `tel` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ---------------------------
-- Records of sp_user
-- ---------------------------
insert into `sp_user` values ('1','admin','12345','admin','管理员','1','男','2016-05-04','10000','1@itcast.cn','北京','1470000000','1');
insert into `sp_user` values ('2','gg','12345','wasd','奥斯丁','5','男','2016-05-04','10086','2@itcast.cn','上海','1470000001',null);
insert into `sp_user` values ('4','test','12345','test','测试员','6','女','2016-05-18','10011','4@itcast.cn','深圳','1470000003',null);
insert into `sp_user` values ('5','uername','12345','老张','张飒','4','男','2016-05-28','13800138000','baidu@yeah.net','1212','1464167073',null);
insert into `sp_user` values ('6','Y','12345','老杨','老杨','3','男','2016-05-06','13800138000','1@1.cn','123','1364167073','3');
insert into `sp_user` values ('7','aql3545','12345','萌萌哒','张三疯','7','男','2016-05-26','13913900012','fish@fish.com','','1464269883',null);

-- ---------------------------
-- Records of sp_dept
-- ---------------------------
insert into `sp_dept` values ('1','管理部','0','1','管理部门');
insert into `sp_dept` values ('2','技术部','0','4','技术部瞎辖程序部和设计部');
insert into `sp_dept` values ('3','总裁办','1','2','总裁办');
insert into `sp_dept` values ('4','财务部','0','3','财务部');
insert into `sp_dept` values ('5','程序部','2','5',null);
insert into `sp_dept` values ('6','设计部','0','6',null);
insert into `sp_dept` values ('7','运营部','0','7',null);
insert into `sp_dept` values ('8','人事部','0','8',null);
insert into `sp_dept` values ('9','行政部','0','9',null);
insert into `sp_dept` values ('10','运维部','0','77','运维部');
insert into `sp_dept` values ('11','竞价部','0','55','竞价部门');

-- ---------------------------
-- Records of sp_doc
-- ---------------------------
CREATE TABLE `sp_doc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT '公文标题',
  `filepath` varchar(255) DEFAULT NULL COMMENT '附件存储路径',
  `filename` varchar(255) DEFAULT NULL COMMENT '附件原名',
  `hasfile` smallint (1) DEFAULT '0' COMMENT '是否存在附件',
  `content` text COMMENT '公文内容',
  `author` varchar(40) NOT NULL COMMENT '作者',
  `addtime` int (11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
)ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;