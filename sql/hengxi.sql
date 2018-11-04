-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('普通管理员',	'1',	1482894956),
('权限管理-分配',	'2',	1508575360),
('权限管理-权限',	'2',	1508575360),
('权限管理-菜单',	'2',	1508575360),
('权限管理-角色',	'2',	1508575360),
('权限管理-路由',	'2',	1508575360),
('超级管理员',	'2',	1482908075);

DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*',	2,	NULL,	NULL,	NULL,	1482800318,	1482800318),
('/admin/*',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/assignment/*',	2,	NULL,	NULL,	NULL,	1482800314,	1482800314),
('/admin/assignment/assign',	2,	NULL,	NULL,	NULL,	1482800314,	1482800314),
('/admin/assignment/index',	2,	NULL,	NULL,	NULL,	1482800314,	1482800314),
('/admin/assignment/revoke',	2,	NULL,	NULL,	NULL,	1482800314,	1482800314),
('/admin/assignment/view',	2,	NULL,	NULL,	NULL,	1482800314,	1482800314),
('/admin/create',	2,	NULL,	NULL,	NULL,	1482800317,	1482800317),
('/admin/default/*',	2,	NULL,	NULL,	NULL,	1482800314,	1482800314),
('/admin/default/index',	2,	NULL,	NULL,	NULL,	1482800314,	1482800314),
('/admin/delete',	2,	NULL,	NULL,	NULL,	1482800317,	1482800317),
('/admin/index',	2,	NULL,	NULL,	NULL,	1482800317,	1482800317),
('/admin/menu/*',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/menu/create',	2,	NULL,	NULL,	NULL,	1482800314,	1482800314),
('/admin/menu/delete',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/menu/index',	2,	NULL,	NULL,	NULL,	1482800314,	1482800314),
('/admin/menu/update',	2,	NULL,	NULL,	NULL,	1482800314,	1482800314),
('/admin/menu/view',	2,	NULL,	NULL,	NULL,	1482800314,	1482800314),
('/admin/permission/*',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/permission/assign',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/permission/create',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/permission/delete',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/permission/index',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/permission/remove',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/permission/update',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/permission/view',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/role/*',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/role/assign',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/role/create',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/role/delete',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/role/index',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/role/remove',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/role/update',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/role/view',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/route/*',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/route/assign',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/route/create',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/route/index',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/route/refresh',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/route/remove',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/rule/*',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/rule/create',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/rule/delete',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/rule/index',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/rule/update',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/rule/view',	2,	NULL,	NULL,	NULL,	1482800315,	1482800315),
('/admin/update',	2,	NULL,	NULL,	NULL,	1482800317,	1482800317),
('/admin/user/*',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/user/activate',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/user/change-password',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/user/delete',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/user/index',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/user/login',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/user/logout',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/user/request-password-reset',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/user/reset-password',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/user/signup',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/user/view',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/admin/view',	2,	NULL,	NULL,	NULL,	1482800317,	1482800317),
('/common/*',	2,	NULL,	NULL,	NULL,	1482800317,	1482800317),
('/debug/*',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/debug/default/*',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/debug/default/db-explain',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/debug/default/download-mail',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/debug/default/index',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/debug/default/toolbar',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/debug/default/view',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/dwrs/index',	2,	NULL,	NULL,	NULL,	1508585678,	1508585678),
('/gii/*',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/gii/default/*',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/gii/default/action',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/gii/default/diff',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/gii/default/index',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/gii/default/preview',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/gii/default/view',	2,	NULL,	NULL,	NULL,	1482800316,	1482800316),
('/jzry/index',	2,	NULL,	NULL,	NULL,	1508585766,	1508585766),
('/nyrbt/index',	2,	NULL,	NULL,	NULL,	1508585723,	1508585723),
('/sh/index',	2,	NULL,	NULL,	NULL,	1508585467,	1508585467),
('/shdy/index',	2,	NULL,	NULL,	NULL,	1508585806,	1508585806),
('/shhy/*',	2,	NULL,	NULL,	NULL,	1508584433,	1508584433),
('/shhy/delete',	2,	NULL,	NULL,	NULL,	1508584441,	1508584441),
('/shhy/index',	2,	NULL,	NULL,	NULL,	1508584427,	1508584427),
('/site/*',	2,	NULL,	NULL,	NULL,	1482713637,	1482713637),
('/site/about',	2,	NULL,	NULL,	NULL,	1482800318,	1482800318),
('/site/captcha',	2,	NULL,	NULL,	NULL,	1482800318,	1482800318),
('/site/contact',	2,	NULL,	NULL,	NULL,	1482800318,	1482800318),
('/site/error',	2,	NULL,	NULL,	NULL,	1482800318,	1482800318),
('/site/index',	2,	NULL,	NULL,	NULL,	1482717789,	1482717789),
('/site/login',	2,	NULL,	NULL,	NULL,	1482800318,	1482800318),
('/site/logout',	2,	NULL,	NULL,	NULL,	1482717789,	1482717789),
('/ssmz/index',	2,	NULL,	NULL,	NULL,	1508585739,	1508585739),
('/sydy/index',	2,	NULL,	NULL,	NULL,	1508585661,	1508585661),
('/user/*',	2,	NULL,	NULL,	NULL,	1482804358,	1482804358),
('/user/create',	2,	NULL,	NULL,	NULL,	1482804433,	1482804433),
('/user/delete',	2,	NULL,	NULL,	NULL,	1482804433,	1482804433),
('/user/index',	2,	NULL,	NULL,	NULL,	1482804433,	1482804433),
('/user/signup',	2,	NULL,	NULL,	NULL,	1508575705,	1508575705),
('/user/update',	2,	NULL,	NULL,	NULL,	1482804433,	1482804433),
('/user/view',	2,	NULL,	NULL,	NULL,	1482804433,	1482804433),
('/xjcrs/index',	2,	NULL,	NULL,	NULL,	1508585689,	1508585689),
('/zjcs/index',	2,	NULL,	NULL,	NULL,	1508585752,	1508585752),
('基本权限',	2,	'包括登录登出，debug等',	NULL,	NULL,	1482912322,	1482912466),
('普通管理员',	1,	'普通管理员',	NULL,	NULL,	1482825695,	1482912224),
('权限管理-分配',	2,	'权限管理-分配',	NULL,	NULL,	1482807128,	1482807128),
('权限管理-权限',	2,	'权限管理-权限',	NULL,	NULL,	1482806754,	1482806899),
('权限管理-菜单',	2,	'权限管理-菜单',	NULL,	NULL,	1482806774,	1482806881),
('权限管理-角色',	2,	'权限管理-角色',	NULL,	NULL,	1482806575,	1482806858),
('权限管理-路由',	2,	'权限管理-路由',	NULL,	NULL,	1482806734,	1482806914),
('用户管理',	2,	'用户管理',	NULL,	NULL,	1482835089,	1482835089),
('超级管理员',	1,	'创建了 admin角色、部门、权限组',	NULL,	NULL,	1482479247,	1508575263);

DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('超级管理员',	'/*'),
('权限管理-分配',	'/admin/assignment/*'),
('权限管理-菜单',	'/admin/menu/*'),
('权限管理-权限',	'/admin/permission/*'),
('权限管理-角色',	'/admin/role/*'),
('权限管理-路由',	'/admin/route/*'),
('基本权限',	'/debug/*'),
('基本权限',	'/site/*'),
('用户管理',	'/user/*'),
('普通管理员',	'基本权限'),
('超级管理员',	'权限管理-分配'),
('超级管理员',	'权限管理-权限'),
('超级管理员',	'权限管理-菜单'),
('超级管理员',	'权限管理-角色'),
('超级管理员',	'权限管理-路由');

DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


SET NAMES utf8mb4;

DROP TABLE IF EXISTS `dict`;
CREATE TABLE `dict` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL COMMENT '字典编码',
  `name` varchar(50) DEFAULT NULL COMMENT '字典名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='字典表';

INSERT INTO `dict` (`id`, `code`, `name`) VALUES
(1,	'mz',	'民族'),
(2,	'dp',	'党派'),
(3,	'xl',	'学历'),
(4,	'xw',	'学位');

DROP TABLE IF EXISTS `dictcontent`;
CREATE TABLE `dictcontent` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dictid` bigint(20) unsigned DEFAULT NULL COMMENT '关联字典表id',
  `code` varchar(50) DEFAULT NULL COMMENT '字典项编码',
  `name` varchar(50) DEFAULT NULL COMMENT '字典项名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='字典表详情表';

INSERT INTO `dictcontent` (`id`, `dictid`, `code`, `name`) VALUES
(1,	1,	'hz',	'汉族'),
(2,	1,	'mgz',	'蒙古族'),
(3,	1,	'huiz',	'回族'),
(4,	2,	'01',	'中国共产党'),
(5,	2,	'02',	'中国国民党革命委员会'),
(6,	2,	'03',	'中国民主同盟'),
(7,	2,	'04',	'中国民主建国会'),
(8,	2,	'05',	'中国民主促进会'),
(9,	2,	'06',	'中国农工民主党'),
(10,	3,	'01',	'小学'),
(11,	3,	'02',	'初中'),
(12,	3,	'03',	'高中'),
(13,	3,	'04',	'技工'),
(14,	3,	'05',	'职高'),
(15,	3,	'07',	'中专'),
(16,	3,	'08',	'大专'),
(17,	3,	'09',	'大学'),
(18,	3,	'10',	'硕士'),
(19,	3,	'11',	'博士'),
(20,	3,	'90',	'其他'),
(21,	4,	'01',	'学士'),
(22,	4,	'02',	'硕士'),
(23,	4,	'03',	'博士');

DROP TABLE IF EXISTS `dwrs`;
CREATE TABLE `dwrs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '姓名',
  `gender` tinyint(2) unsigned DEFAULT NULL COMMENT '性别 0：女 1：男',
  `birthday` date DEFAULT NULL COMMENT '出生年月',
  `nation` varchar(50) DEFAULT NULL COMMENT '民族数据字典MZ',
  `education` varchar(50) DEFAULT NULL COMMENT '学历数据字典XL',
  `region` varchar(50) DEFAULT NULL COMMENT '籍贯',
  `party` varchar(50) DEFAULT NULL COMMENT '党派数据字典DP',
  `company` varchar(255) DEFAULT NULL COMMENT '单位',
  `duties` varchar(255) DEFAULT NULL COMMENT '职务',
  `tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `community` varchar(50) DEFAULT NULL COMMENT '所属社区字典SQ',
  `isCPPCC` tinyint(2) unsigned DEFAULT NULL COMMENT '是否政协委员 0否1是 ',
  `isNPC` tinyint(2) unsigned DEFAULT NULL COMMENT '是否人大代表 0否1是 ',
  `remark` varchar(1000) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='党外人士信息';


DROP TABLE IF EXISTS `jzry`;
CREATE TABLE `jzry` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '姓名',
  `alias` varchar(50) DEFAULT NULL COMMENT '教（法）名',
  `gender` tinyint(2) unsigned DEFAULT NULL COMMENT '性别 0：女 1：男',
  `birthday` date DEFAULT NULL COMMENT '出生年月',
  `nation` varchar(50) DEFAULT NULL COMMENT '民族数据字典MZ',
  `religion` varchar(50) DEFAULT NULL COMMENT '教别数据字典JB',
  `faculty` varchar(50) DEFAULT NULL COMMENT '教职',
  `idcard` varchar(50) DEFAULT NULL COMMENT '身份证号码',
  `addr` varchar(255) DEFAULT NULL COMMENT '通信地址',
  `residence` varchar(255) DEFAULT NULL COMMENT '户口所在地',
  `tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `certificateno` varchar(50) DEFAULT NULL COMMENT '证书编号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='教职人员信息表';


DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES
(9,	'权限管理',	NULL,	'/admin/default/index',	8,	NULL),
(10,	'路由',	9,	'/admin/route/index',	5,	NULL),
(11,	'权限',	9,	'/admin/permission/index',	1,	NULL),
(12,	'角色',	9,	'/admin/role/index',	2,	NULL),
(13,	'分配',	9,	'/admin/assignment/index',	3,	NULL),
(14,	'菜单',	9,	'/admin/menu/index',	4,	NULL),
(15,	'用户管理',	9,	'/user/index',	NULL,	'{\"icon\": \"fa fa-user\", \"visible\": true}'),
(16,	'商会会员',	NULL,	NULL,	NULL,	NULL),
(17,	'商会会员',	16,	'/shhy/index',	1,	NULL),
(18,	'商会',	16,	'/sh/index',	NULL,	NULL),
(19,	'商会党员',	NULL,	'/shdy/index',	2,	NULL),
(20,	'党外人士',	NULL,	'/dwrs/index',	3,	NULL),
(21,	'新社会阶层人士',	NULL,	'/xjcrs/index',	4,	NULL),
(22,	'民族工作',	NULL,	NULL,	5,	NULL),
(23,	'牛羊肉补贴名单',	22,	'/nyrbt/index',	NULL,	NULL),
(24,	'少数民族',	22,	'/ssmz/index',	NULL,	NULL),
(25,	'宗教工作',	NULL,	NULL,	6,	NULL),
(26,	'宗教场所',	25,	'/zjcs/index',	NULL,	NULL),
(27,	'教职人员',	25,	'/jzry/index',	NULL,	NULL);

DROP TABLE IF EXISTS `nyrbt`;
CREATE TABLE `nyrbt` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '姓名',
  `gender` tinyint(2) unsigned DEFAULT NULL COMMENT '性别 0：女 1：男',
  `nation` varchar(50) DEFAULT NULL COMMENT '民族数据字典MZ',
  `community` varchar(50) DEFAULT NULL COMMENT '所属社区字典SQ',
  `idcard` varchar(50) DEFAULT NULL COMMENT '身份证号码',
  `tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `workstatus` varchar(1000) DEFAULT NULL COMMENT '工作现状',
  `remark` varchar(1000) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='牛羊肉补贴名单';


DROP TABLE IF EXISTS `sh`;
CREATE TABLE `sh` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '商会编号',
  `nane` varchar(255) DEFAULT NULL COMMENT '商会名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='商会表';

INSERT INTO `sh` (`id`, `nane`) VALUES
(1,	'街道商会'),
(2,	'石塘农家乐商会'),
(3,	'陶吴社区商会');

DROP TABLE IF EXISTS `shdy`;
CREATE TABLE `shdy` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '姓名',
  `gender` tinyint(2) unsigned DEFAULT NULL COMMENT '性别 0：女 1：男',
  `nation` varchar(50) DEFAULT NULL COMMENT '民族数据字典MZ',
  `idcard` varchar(50) DEFAULT NULL COMMENT '身份证号码',
  `birthday` date DEFAULT NULL COMMENT '出生年月',
  `education` varchar(50) DEFAULT NULL COMMENT '学历数据字典XL',
  `category` tinyint(2) unsigned DEFAULT NULL COMMENT '人员类别 0：预备党员 1：正式党员',
  `partytime` datetime DEFAULT NULL COMMENT '加入党组织日期',
  `formalpartytime` datetime DEFAULT NULL COMMENT '转为正式党员日期',
  `tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `addr` varchar(255) DEFAULT NULL COMMENT '家庭住址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='商会党员信息';


DROP TABLE IF EXISTS `shhy`;
CREATE TABLE `shhy` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '姓名',
  `gender` tinyint(2) unsigned DEFAULT NULL COMMENT '性别 0：女 1：男',
  `birthday` date DEFAULT NULL COMMENT '出生年月',
  `nation` varchar(50) DEFAULT NULL COMMENT '民族数据字典MZ',
  `region` varchar(50) DEFAULT NULL COMMENT '籍贯',
  `party` varchar(50) DEFAULT NULL COMMENT '党派数据字典DP',
  `education` varchar(50) DEFAULT NULL COMMENT '学历数据字典XL',
  `degree` varchar(50) DEFAULT NULL COMMENT '学位数据字典XW',
  `title` varchar(50) DEFAULT NULL COMMENT '职称',
  `idcard` varchar(50) DEFAULT NULL COMMENT '身份证号码',
  `company` varchar(255) DEFAULT NULL COMMENT '单位',
  `duties` varchar(255) DEFAULT NULL COMMENT '职务',
  `addr` varchar(255) DEFAULT NULL COMMENT '通讯地址',
  `tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `wxid` varchar(100) DEFAULT NULL COMMENT '微信号',
  `email` varchar(255) DEFAULT NULL COMMENT '电子邮箱',
  `shid` int(11) unsigned DEFAULT NULL COMMENT '隶属商会，关联SH表',
  `shtime` datetime DEFAULT NULL COMMENT '加入商会时间',
  `majorduties` varchar(100) DEFAULT NULL COMMENT '主要社会职务',
  `majorhonors` varchar(1000) DEFAULT NULL COMMENT '主要荣誉',
  `resume` varchar(1000) DEFAULT NULL COMMENT '个人简历',
  `e_name` varchar(255) DEFAULT NULL COMMENT '企业名称',
  `e_legalrepre` varchar(50) DEFAULT NULL COMMENT '企业法人代表',
  `e_registrationaddr` varchar(255) DEFAULT NULL COMMENT '企业注册地点',
  `e_establishdate` datetime DEFAULT NULL COMMENT '企业成立时间',
  `e_registno` varchar(100) DEFAULT NULL COMMENT '企业工商登记号',
  `e_industry` varchar(255) DEFAULT NULL COMMENT '企业所属行业',
  `e_employeno` int(10) unsigned DEFAULT NULL COMMENT '企业员工人数',
  `e_addr` varchar(255) DEFAULT NULL COMMENT '企业地址',
  `e_contactname` varchar(50) DEFAULT NULL COMMENT '企业联系人姓名',
  `e_contactduties` varchar(255) DEFAULT NULL COMMENT '企业联系人职务',
  `e_contactemail` varchar(255) DEFAULT NULL COMMENT '企业联系人电子邮件',
  `e_contacttel` varchar(50) DEFAULT NULL COMMENT '企业联系人联系方式',
  `e_contactfax` varchar(255) DEFAULT NULL COMMENT '企业联系人传真',
  `isestablishparty` tinyint(2) unsigned DEFAULT NULL COMMENT '是否建立党组织 0未建立1建立 ',
  `partymemberno` int(10) unsigned DEFAULT NULL COMMENT '党员人数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='商会会员';

INSERT INTO `shhy` (`id`, `name`, `gender`, `birthday`, `nation`, `region`, `party`, `education`, `degree`, `title`, `idcard`, `company`, `duties`, `addr`, `tel`, `wxid`, `email`, `shid`, `shtime`, `majorduties`, `majorhonors`, `resume`, `e_name`, `e_legalrepre`, `e_registrationaddr`, `e_establishdate`, `e_registno`, `e_industry`, `e_employeno`, `e_addr`, `e_contactname`, `e_contactduties`, `e_contactemail`, `e_contacttel`, `e_contactfax`, `isestablishparty`, `partymemberno`) VALUES
(4,	'安达市多',	1,	'2017-10-18',	'hz',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	1,	NULL,	'',	'',	'',	'',	'',	'',	NULL,	'',	'',	NULL,	'',	'',	'',	'',	'',	'',	NULL,	NULL);

DROP TABLE IF EXISTS `ssmz`;
CREATE TABLE `ssmz` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '姓名',
  `gender` tinyint(2) unsigned DEFAULT NULL COMMENT '性别 0：女 1：男',
  `birthday` date DEFAULT NULL COMMENT '出生年月',
  `nation` varchar(50) DEFAULT NULL COMMENT '民族数据字典MZ',
  `region` varchar(50) DEFAULT NULL COMMENT '籍贯',
  `addr` varchar(255) DEFAULT NULL COMMENT '家庭住址',
  `company` varchar(255) DEFAULT NULL COMMENT '单位',
  `tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `ispoor` tinyint(2) unsigned DEFAULT NULL COMMENT '是否为贫困户 0否1是',
  `income` int(10) unsigned DEFAULT NULL COMMENT '家庭年收入',
  `familydetail` varchar(255) DEFAULT NULL COMMENT '家庭其他人员情况',
  `poordetail` varchar(255) DEFAULT NULL COMMENT '家庭贫困原因说明',
  `remark` varchar(1000) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='少数民族人员信息';


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL COMMENT '真实姓名',
  `username` varchar(32) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(256) NOT NULL,
  `password_reset_token` varchar(256) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `name`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2,	'admin',	'admin',	'im8kCm12TXRHHJZtMoc7_5z5cT_yDdr8',	'$2y$13$YuFSSmVJOkTbVRMnFh.R9egV.TIBAOJ8UJ..GZ5H6q9SdP7qFIFZi',	NULL,	'admin@163.com',	10,	2016,	2016);

DROP TABLE IF EXISTS `xjcrs`;
CREATE TABLE `xjcrs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '姓名',
  `gender` tinyint(2) unsigned DEFAULT NULL COMMENT '性别 0：女 1：男',
  `nation` varchar(50) DEFAULT NULL COMMENT '民族数据字典MZ',
  `region` varchar(50) DEFAULT NULL COMMENT '籍贯',
  `birthday` date DEFAULT NULL COMMENT '出生年月',
  `penname` varchar(50) DEFAULT NULL COMMENT '笔名',
  `education` varchar(50) DEFAULT NULL COMMENT '学历数据字典XL',
  `degree` varchar(50) DEFAULT NULL COMMENT '学位数据字典XW',
  `place` varchar(50) DEFAULT NULL COMMENT '出生地',
  `party` varchar(50) DEFAULT NULL COMMENT '党派数据字典DP',
  `title` varchar(50) DEFAULT NULL COMMENT '技术职称',
  `idcard` varchar(50) DEFAULT NULL COMMENT '身份证号码',
  `company` varchar(255) DEFAULT NULL COMMENT '单位',
  `duties` varchar(255) DEFAULT NULL COMMENT '职务',
  `group` varchar(50) DEFAULT NULL COMMENT '所属群体字典QROUP',
  `addr` varchar(255) DEFAULT NULL COMMENT '通讯地址',
  `tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `email` varchar(255) DEFAULT NULL COMMENT '电子邮箱',
  `avatar` varchar(255) DEFAULT NULL COMMENT '照片地址',
  `detail` varchar(255) DEFAULT NULL COMMENT '何时何处参加社会团体及任职情况',
  `isCPPCC` tinyint(2) unsigned DEFAULT NULL COMMENT '是否政协委员 0否1是 ',
  `isNPC` tinyint(2) unsigned DEFAULT NULL COMMENT '是否人大代表 0否1是 ',
  `resume` varchar(1000) DEFAULT NULL COMMENT '个人简历',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='新的社会阶层人士信息';


DROP TABLE IF EXISTS `zjcs`;
CREATE TABLE `zjcs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `palcename` varchar(50) DEFAULT NULL COMMENT '场所名称',
  `religion` varchar(50) DEFAULT NULL COMMENT '教别数据字典JB',
  `leader` varchar(50) DEFAULT NULL COMMENT '负责人',
  `gender` tinyint(2) unsigned DEFAULT NULL COMMENT '性别 0：女 1：男',
  `idcard` varchar(50) DEFAULT NULL COMMENT '身份证号码',
  `tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `partytime` date DEFAULT NULL COMMENT '聚会时间',
  `partymember` int(10) unsigned DEFAULT NULL COMMENT '聚会人数',
  `community` varchar(50) DEFAULT NULL COMMENT '所属社区字典SQ',
  `liaison` varchar(50) DEFAULT NULL COMMENT '社区联络员',
  `liaisontel` varchar(20) DEFAULT NULL COMMENT '联络员电话',
  `monitors` int(10) unsigned DEFAULT NULL COMMENT '监控数量',
  `extinguishers` int(10) unsigned DEFAULT NULL COMMENT '灭火器数目',
  `certificatenumber` varchar(50) DEFAULT NULL COMMENT '登记证号',
  `people` varchar(500) DEFAULT NULL COMMENT '主要教职人员',
  `placearea` varchar(500) DEFAULT NULL COMMENT '场所占地面积',
  `buildarea` varchar(500) DEFAULT NULL COMMENT '场所建筑面积',
  `memberno` int(10) unsigned DEFAULT NULL COMMENT '场所教徒总数',
  `photo` varchar(255) DEFAULT NULL COMMENT '场所照片',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='宗教场所信息表';


-- 2017-10-22 12:17:54
