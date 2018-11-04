-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

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
(27,	'教职人员',	25,	'/jzry/index',	NULL,	NULL),
(28,	'新社会阶层人士',	21,	'/xjcrs/index',	NULL,	NULL),
(29,	'统计',	21,	'/xjcrs/statistics',	NULL,	NULL);

-- 2017-10-23 23:27:52
