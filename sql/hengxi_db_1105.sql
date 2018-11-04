/*
Navicat MySQL Data Transfer

Source Server         : pc_jiangfw
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : hengxi

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-11-05 17:55:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('宗教工作', '4', '1509852648');
INSERT INTO `auth_assignment` VALUES ('超级管理员', '2', '1482908075');

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
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

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('/*', '2', null, null, null, '1482800318', '1482800318');
INSERT INTO `auth_item` VALUES ('/admin/*', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/assignment/*', '2', null, null, null, '1482800314', '1482800314');
INSERT INTO `auth_item` VALUES ('/admin/assignment/assign', '2', null, null, null, '1482800314', '1482800314');
INSERT INTO `auth_item` VALUES ('/admin/assignment/index', '2', null, null, null, '1482800314', '1482800314');
INSERT INTO `auth_item` VALUES ('/admin/assignment/revoke', '2', null, null, null, '1482800314', '1482800314');
INSERT INTO `auth_item` VALUES ('/admin/assignment/view', '2', null, null, null, '1482800314', '1482800314');
INSERT INTO `auth_item` VALUES ('/admin/create', '2', null, null, null, '1482800317', '1482800317');
INSERT INTO `auth_item` VALUES ('/admin/default/*', '2', null, null, null, '1482800314', '1482800314');
INSERT INTO `auth_item` VALUES ('/admin/default/index', '2', null, null, null, '1482800314', '1482800314');
INSERT INTO `auth_item` VALUES ('/admin/delete', '2', null, null, null, '1482800317', '1482800317');
INSERT INTO `auth_item` VALUES ('/admin/index', '2', null, null, null, '1482800317', '1482800317');
INSERT INTO `auth_item` VALUES ('/admin/menu/*', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/menu/create', '2', null, null, null, '1482800314', '1482800314');
INSERT INTO `auth_item` VALUES ('/admin/menu/delete', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/menu/index', '2', null, null, null, '1482800314', '1482800314');
INSERT INTO `auth_item` VALUES ('/admin/menu/update', '2', null, null, null, '1482800314', '1482800314');
INSERT INTO `auth_item` VALUES ('/admin/menu/view', '2', null, null, null, '1482800314', '1482800314');
INSERT INTO `auth_item` VALUES ('/admin/permission/*', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/permission/assign', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/permission/create', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/permission/delete', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/permission/index', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/permission/remove', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/permission/update', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/permission/view', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/role/*', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/role/assign', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/role/create', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/role/delete', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/role/index', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/role/remove', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/role/update', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/role/view', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/route/*', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/route/assign', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/route/create', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/route/index', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/route/refresh', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/route/remove', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/rule/*', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/rule/create', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/rule/delete', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/rule/index', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/rule/update', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/rule/view', '2', null, null, null, '1482800315', '1482800315');
INSERT INTO `auth_item` VALUES ('/admin/update', '2', null, null, null, '1482800317', '1482800317');
INSERT INTO `auth_item` VALUES ('/admin/user/*', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/user/activate', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/user/change-password', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/user/delete', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/user/index', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/user/login', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/user/logout', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/user/request-password-reset', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/user/reset-password', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/user/signup', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/user/view', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/admin/view', '2', null, null, null, '1482800317', '1482800317');
INSERT INTO `auth_item` VALUES ('/common/*', '2', null, null, null, '1482800317', '1482800317');
INSERT INTO `auth_item` VALUES ('/debug/*', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/debug/default/*', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/debug/default/db-explain', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/debug/default/download-mail', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/debug/default/index', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/debug/default/toolbar', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/debug/default/view', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/dwrs/*', '2', null, null, null, '1509806022', '1509806022');
INSERT INTO `auth_item` VALUES ('/dwrs/create', '2', null, null, null, '1509806022', '1509806022');
INSERT INTO `auth_item` VALUES ('/dwrs/delete', '2', null, null, null, '1509806022', '1509806022');
INSERT INTO `auth_item` VALUES ('/dwrs/index', '2', null, null, null, '1508585678', '1508585678');
INSERT INTO `auth_item` VALUES ('/dwrs/update', '2', null, null, null, '1509806022', '1509806022');
INSERT INTO `auth_item` VALUES ('/dwrs/view', '2', null, null, null, '1509806022', '1509806022');
INSERT INTO `auth_item` VALUES ('/gii/*', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/gii/default/*', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/gii/default/action', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/gii/default/diff', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/gii/default/index', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/gii/default/preview', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/gii/default/view', '2', null, null, null, '1482800316', '1482800316');
INSERT INTO `auth_item` VALUES ('/jzry/*', '2', null, null, null, '1509806357', '1509806357');
INSERT INTO `auth_item` VALUES ('/jzry/create', '2', null, null, null, '1509806357', '1509806357');
INSERT INTO `auth_item` VALUES ('/jzry/delete', '2', null, null, null, '1509806357', '1509806357');
INSERT INTO `auth_item` VALUES ('/jzry/index', '2', null, null, null, '1508585766', '1508585766');
INSERT INTO `auth_item` VALUES ('/jzry/update', '2', null, null, null, '1509806357', '1509806357');
INSERT INTO `auth_item` VALUES ('/jzry/view', '2', null, null, null, '1509806357', '1509806357');
INSERT INTO `auth_item` VALUES ('/nyr/index', '2', null, null, null, '1508585723', '1508585723');
INSERT INTO `auth_item` VALUES ('/nyrbt/*', '2', null, null, null, '1509806272', '1509806272');
INSERT INTO `auth_item` VALUES ('/nyrbt/create', '2', null, null, null, '1509806272', '1509806272');
INSERT INTO `auth_item` VALUES ('/nyrbt/delete', '2', null, null, null, '1509806272', '1509806272');
INSERT INTO `auth_item` VALUES ('/nyrbt/index', '2', null, null, null, '1509806272', '1509806272');
INSERT INTO `auth_item` VALUES ('/nyrbt/update', '2', null, null, null, '1509806272', '1509806272');
INSERT INTO `auth_item` VALUES ('/nyrbt/view', '2', null, null, null, '1509806272', '1509806272');
INSERT INTO `auth_item` VALUES ('/sh/*', '2', null, null, null, '1509805799', '1509805799');
INSERT INTO `auth_item` VALUES ('/sh/create', '2', null, null, null, '1509805763', '1509805763');
INSERT INTO `auth_item` VALUES ('/sh/delete', '2', null, null, null, '1509805770', '1509805770');
INSERT INTO `auth_item` VALUES ('/sh/index', '2', null, null, null, '1508585467', '1508585467');
INSERT INTO `auth_item` VALUES ('/sh/update', '2', null, null, null, '1509805776', '1509805776');
INSERT INTO `auth_item` VALUES ('/sh/view', '2', null, null, null, '1509805795', '1509805795');
INSERT INTO `auth_item` VALUES ('/shdy/*', '2', null, null, null, '1509805930', '1509805930');
INSERT INTO `auth_item` VALUES ('/shdy/create', '2', null, null, null, '1509805930', '1509805930');
INSERT INTO `auth_item` VALUES ('/shdy/delete', '2', null, null, null, '1509805930', '1509805930');
INSERT INTO `auth_item` VALUES ('/shdy/index', '2', null, null, null, '1508585806', '1508585806');
INSERT INTO `auth_item` VALUES ('/shdy/update', '2', null, null, null, '1509805930', '1509805930');
INSERT INTO `auth_item` VALUES ('/shdy/view', '2', null, null, null, '1509805930', '1509805930');
INSERT INTO `auth_item` VALUES ('/shhy/*', '2', null, null, null, '1508584433', '1508584433');
INSERT INTO `auth_item` VALUES ('/shhy/create', '2', null, null, null, '1509805632', '1509805632');
INSERT INTO `auth_item` VALUES ('/shhy/delete', '2', null, null, null, '1508584441', '1508584441');
INSERT INTO `auth_item` VALUES ('/shhy/index', '2', null, null, null, '1508584427', '1508584427');
INSERT INTO `auth_item` VALUES ('/shhy/update', '2', null, null, null, '1509805650', '1509805650');
INSERT INTO `auth_item` VALUES ('/shhy/view', '2', null, null, null, '1509805657', '1509805657');
INSERT INTO `auth_item` VALUES ('/site/*', '2', null, null, null, '1482713637', '1482713637');
INSERT INTO `auth_item` VALUES ('/site/about', '2', null, null, null, '1482800318', '1482800318');
INSERT INTO `auth_item` VALUES ('/site/captcha', '2', null, null, null, '1482800318', '1482800318');
INSERT INTO `auth_item` VALUES ('/site/contact', '2', null, null, null, '1482800318', '1482800318');
INSERT INTO `auth_item` VALUES ('/site/error', '2', null, null, null, '1482800318', '1482800318');
INSERT INTO `auth_item` VALUES ('/site/index', '2', null, null, null, '1482717789', '1482717789');
INSERT INTO `auth_item` VALUES ('/site/login', '2', null, null, null, '1482800318', '1482800318');
INSERT INTO `auth_item` VALUES ('/site/logout', '2', null, null, null, '1482717789', '1482717789');
INSERT INTO `auth_item` VALUES ('/ssmz/*', '2', null, null, null, '1509806250', '1509806250');
INSERT INTO `auth_item` VALUES ('/ssmz/create', '2', null, null, null, '1509806250', '1509806250');
INSERT INTO `auth_item` VALUES ('/ssmz/delete', '2', null, null, null, '1509806250', '1509806250');
INSERT INTO `auth_item` VALUES ('/ssmz/index', '2', null, null, null, '1508585739', '1508585739');
INSERT INTO `auth_item` VALUES ('/ssmz/update', '2', null, null, null, '1509806250', '1509806250');
INSERT INTO `auth_item` VALUES ('/ssmz/view', '2', null, null, null, '1509806250', '1509806250');
INSERT INTO `auth_item` VALUES ('/sydy/index', '2', null, null, null, '1508585661', '1508585661');
INSERT INTO `auth_item` VALUES ('/user/*', '2', null, null, null, '1482804358', '1482804358');
INSERT INTO `auth_item` VALUES ('/user/create', '2', null, null, null, '1482804433', '1482804433');
INSERT INTO `auth_item` VALUES ('/user/delete', '2', null, null, null, '1482804433', '1482804433');
INSERT INTO `auth_item` VALUES ('/user/index', '2', null, null, null, '1482804433', '1482804433');
INSERT INTO `auth_item` VALUES ('/user/signup', '2', null, null, null, '1508575705', '1508575705');
INSERT INTO `auth_item` VALUES ('/user/update', '2', null, null, null, '1482804433', '1482804433');
INSERT INTO `auth_item` VALUES ('/user/view', '2', null, null, null, '1482804433', '1482804433');
INSERT INTO `auth_item` VALUES ('/xjcrs/*', '2', null, null, null, '1509806105', '1509806105');
INSERT INTO `auth_item` VALUES ('/xjcrs/create', '2', null, null, null, '1509805345', '1509805345');
INSERT INTO `auth_item` VALUES ('/xjcrs/delete', '2', null, null, null, '1509806105', '1509806105');
INSERT INTO `auth_item` VALUES ('/xjcrs/delete2', '2', null, null, null, '1509806105', '1509806105');
INSERT INTO `auth_item` VALUES ('/xjcrs/index', '2', null, null, null, '1508585689', '1508585689');
INSERT INTO `auth_item` VALUES ('/xjcrs/statistics', '2', null, null, null, '1508770278', '1508770278');
INSERT INTO `auth_item` VALUES ('/xjcrs/update', '2', null, null, null, '1509805352', '1509805352');
INSERT INTO `auth_item` VALUES ('/xjcrs/upload', '2', null, null, null, '1509806105', '1509806105');
INSERT INTO `auth_item` VALUES ('/xjcrs/view', '2', null, null, null, '1509805359', '1509805359');
INSERT INTO `auth_item` VALUES ('/xjcrs/view2', '2', null, null, null, '1509806105', '1509806105');
INSERT INTO `auth_item` VALUES ('/zjcs/*', '2', null, null, null, '1509806347', '1509806347');
INSERT INTO `auth_item` VALUES ('/zjcs/create', '2', null, null, null, '1509806347', '1509806347');
INSERT INTO `auth_item` VALUES ('/zjcs/delete', '2', null, null, null, '1509806347', '1509806347');
INSERT INTO `auth_item` VALUES ('/zjcs/delete2', '2', null, null, null, '1509806347', '1509806347');
INSERT INTO `auth_item` VALUES ('/zjcs/index', '2', null, null, null, '1508585752', '1508585752');
INSERT INTO `auth_item` VALUES ('/zjcs/update', '2', null, null, null, '1509806347', '1509806347');
INSERT INTO `auth_item` VALUES ('/zjcs/upload', '2', null, null, null, '1509806347', '1509806347');
INSERT INTO `auth_item` VALUES ('/zjcs/view', '2', null, null, null, '1509806347', '1509806347');
INSERT INTO `auth_item` VALUES ('/zjcs/view2', '2', null, null, null, '1509806347', '1509806347');
INSERT INTO `auth_item` VALUES ('主任', '1', null, null, null, '1509852779', '1509852779');
INSERT INTO `auth_item` VALUES ('党外人士', '2', null, null, null, '1509796976', '1509806035');
INSERT INTO `auth_item` VALUES ('商会党员', '2', null, null, null, '1509805953', '1509805953');
INSERT INTO `auth_item` VALUES ('商会权限', '2', null, null, null, '1509805904', '1509805904');
INSERT INTO `auth_item` VALUES ('基本权限', '2', '包括登录登出，debug等', null, null, '1482912322', '1509800894');
INSERT INTO `auth_item` VALUES ('宗教工作', '2', '宗教工作', null, null, '1509806402', '1509806402');
INSERT INTO `auth_item` VALUES ('新阶层人士权限', '2', null, null, null, '1509806073', '1509806599');
INSERT INTO `auth_item` VALUES ('权限管理-分配', '2', '权限管理-分配', null, null, '1482807128', '1482807128');
INSERT INTO `auth_item` VALUES ('权限管理-权限', '2', '权限管理-权限', null, null, '1482806754', '1482806899');
INSERT INTO `auth_item` VALUES ('权限管理-菜单', '2', '权限管理-菜单', null, null, '1482806774', '1482806881');
INSERT INTO `auth_item` VALUES ('权限管理-角色', '2', '权限管理-角色', null, null, '1482806575', '1482806858');
INSERT INTO `auth_item` VALUES ('权限管理-路由', '2', '权限管理-路由', null, null, '1482806734', '1482806914');
INSERT INTO `auth_item` VALUES ('民族工作权限', '2', null, null, null, '1509806202', '1509806299');
INSERT INTO `auth_item` VALUES ('用户管理', '2', '用户管理', null, null, '1482835089', '1482835089');
INSERT INTO `auth_item` VALUES ('超级管理员', '1', '创建了 admin角色、部门、权限组', null, null, '1482479247', '1508575263');

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/*');
INSERT INTO `auth_item_child` VALUES ('权限管理-分配', '/admin/assignment/*');
INSERT INTO `auth_item_child` VALUES ('权限管理-菜单', '/admin/menu/*');
INSERT INTO `auth_item_child` VALUES ('权限管理-权限', '/admin/permission/*');
INSERT INTO `auth_item_child` VALUES ('权限管理-角色', '/admin/role/*');
INSERT INTO `auth_item_child` VALUES ('权限管理-路由', '/admin/route/*');
INSERT INTO `auth_item_child` VALUES ('基本权限', '/debug/*');
INSERT INTO `auth_item_child` VALUES ('党外人士', '/dwrs/*');
INSERT INTO `auth_item_child` VALUES ('党外人士', '/dwrs/create');
INSERT INTO `auth_item_child` VALUES ('党外人士', '/dwrs/delete');
INSERT INTO `auth_item_child` VALUES ('党外人士', '/dwrs/index');
INSERT INTO `auth_item_child` VALUES ('党外人士', '/dwrs/update');
INSERT INTO `auth_item_child` VALUES ('党外人士', '/dwrs/view');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/jzry/*');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/jzry/create');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/jzry/delete');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/jzry/index');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/jzry/update');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/jzry/view');
INSERT INTO `auth_item_child` VALUES ('民族工作权限', '/nyr/index');
INSERT INTO `auth_item_child` VALUES ('民族工作权限', '/nyrbt/*');
INSERT INTO `auth_item_child` VALUES ('民族工作权限', '/nyrbt/create');
INSERT INTO `auth_item_child` VALUES ('民族工作权限', '/nyrbt/delete');
INSERT INTO `auth_item_child` VALUES ('民族工作权限', '/nyrbt/index');
INSERT INTO `auth_item_child` VALUES ('民族工作权限', '/nyrbt/update');
INSERT INTO `auth_item_child` VALUES ('民族工作权限', '/nyrbt/view');
INSERT INTO `auth_item_child` VALUES ('商会权限', '/sh/*');
INSERT INTO `auth_item_child` VALUES ('商会权限', '/sh/create');
INSERT INTO `auth_item_child` VALUES ('商会权限', '/sh/delete');
INSERT INTO `auth_item_child` VALUES ('商会权限', '/sh/index');
INSERT INTO `auth_item_child` VALUES ('商会权限', '/sh/update');
INSERT INTO `auth_item_child` VALUES ('商会权限', '/sh/view');
INSERT INTO `auth_item_child` VALUES ('商会党员', '/shdy/*');
INSERT INTO `auth_item_child` VALUES ('商会党员', '/shdy/create');
INSERT INTO `auth_item_child` VALUES ('商会党员', '/shdy/delete');
INSERT INTO `auth_item_child` VALUES ('商会党员', '/shdy/index');
INSERT INTO `auth_item_child` VALUES ('商会党员', '/shdy/update');
INSERT INTO `auth_item_child` VALUES ('商会党员', '/shdy/view');
INSERT INTO `auth_item_child` VALUES ('基本权限', '/site/*');
INSERT INTO `auth_item_child` VALUES ('民族工作权限', '/ssmz/*');
INSERT INTO `auth_item_child` VALUES ('民族工作权限', '/ssmz/create');
INSERT INTO `auth_item_child` VALUES ('民族工作权限', '/ssmz/delete');
INSERT INTO `auth_item_child` VALUES ('民族工作权限', '/ssmz/index');
INSERT INTO `auth_item_child` VALUES ('民族工作权限', '/ssmz/update');
INSERT INTO `auth_item_child` VALUES ('民族工作权限', '/ssmz/view');
INSERT INTO `auth_item_child` VALUES ('用户管理', '/user/*');
INSERT INTO `auth_item_child` VALUES ('新阶层人士权限', '/xjcrs/*');
INSERT INTO `auth_item_child` VALUES ('新阶层人士权限', '/xjcrs/create');
INSERT INTO `auth_item_child` VALUES ('新阶层人士权限', '/xjcrs/delete');
INSERT INTO `auth_item_child` VALUES ('新阶层人士权限', '/xjcrs/delete2');
INSERT INTO `auth_item_child` VALUES ('新阶层人士权限', '/xjcrs/index');
INSERT INTO `auth_item_child` VALUES ('新阶层人士权限', '/xjcrs/statistics');
INSERT INTO `auth_item_child` VALUES ('新阶层人士权限', '/xjcrs/update');
INSERT INTO `auth_item_child` VALUES ('新阶层人士权限', '/xjcrs/upload');
INSERT INTO `auth_item_child` VALUES ('新阶层人士权限', '/xjcrs/view');
INSERT INTO `auth_item_child` VALUES ('新阶层人士权限', '/xjcrs/view2');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/zjcs/*');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/zjcs/create');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/zjcs/delete');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/zjcs/delete2');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/zjcs/index');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/zjcs/update');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/zjcs/upload');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/zjcs/view');
INSERT INTO `auth_item_child` VALUES ('宗教工作', '/zjcs/view2');
INSERT INTO `auth_item_child` VALUES ('主任', '党外人士');
INSERT INTO `auth_item_child` VALUES ('主任', '商会党员');
INSERT INTO `auth_item_child` VALUES ('主任', '商会权限');
INSERT INTO `auth_item_child` VALUES ('主任', '基本权限');
INSERT INTO `auth_item_child` VALUES ('主任', '宗教工作');
INSERT INTO `auth_item_child` VALUES ('主任', '新阶层人士权限');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '权限管理-分配');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '权限管理-权限');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '权限管理-菜单');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '权限管理-角色');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '权限管理-路由');

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for dict
-- ----------------------------
DROP TABLE IF EXISTS `dict`;
CREATE TABLE `dict` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL COMMENT '字典编码',
  `name` varchar(50) DEFAULT NULL COMMENT '字典名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='字典表';

-- ----------------------------
-- Records of dict
-- ----------------------------
INSERT INTO `dict` VALUES ('1', 'mz', '民族');
INSERT INTO `dict` VALUES ('2', 'dp', '党派');
INSERT INTO `dict` VALUES ('3', 'xl', '学历');
INSERT INTO `dict` VALUES ('4', 'xw', '学位');
INSERT INTO `dict` VALUES ('5', 'sq', '社区');
INSERT INTO `dict` VALUES ('6', 'group', '新阶层群体');
INSERT INTO `dict` VALUES ('7', 'jb', '教别');

-- ----------------------------
-- Table structure for dictcontent
-- ----------------------------
DROP TABLE IF EXISTS `dictcontent`;
CREATE TABLE `dictcontent` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dictid` bigint(20) unsigned DEFAULT NULL COMMENT '关联字典表id',
  `code` varchar(50) DEFAULT NULL COMMENT '字典项编码',
  `name` varchar(50) DEFAULT NULL COMMENT '字典项名称',
  PRIMARY KEY (`id`),
  UNIQUE KEY `dictid_code` (`dictid`,`code`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='字典表详情表';

-- ----------------------------
-- Records of dictcontent
-- ----------------------------
INSERT INTO `dictcontent` VALUES ('1', '1', 'hz', '汉族');
INSERT INTO `dictcontent` VALUES ('2', '1', 'mgz', '蒙古族');
INSERT INTO `dictcontent` VALUES ('3', '1', 'huiz', '回族');
INSERT INTO `dictcontent` VALUES ('4', '2', '01', '中国共产党');
INSERT INTO `dictcontent` VALUES ('5', '2', '02', '中国国民党革命委员会');
INSERT INTO `dictcontent` VALUES ('6', '2', '03', '中国民主同盟');
INSERT INTO `dictcontent` VALUES ('7', '2', '04', '中国民主建国会');
INSERT INTO `dictcontent` VALUES ('8', '2', '05', '中国民主促进会');
INSERT INTO `dictcontent` VALUES ('9', '2', '06', '中国农工民主党');
INSERT INTO `dictcontent` VALUES ('10', '2', '07', '群众');
INSERT INTO `dictcontent` VALUES ('11', '3', '01', '小学');
INSERT INTO `dictcontent` VALUES ('12', '3', '02', '初中');
INSERT INTO `dictcontent` VALUES ('13', '3', '03', '高中');
INSERT INTO `dictcontent` VALUES ('14', '3', '04', '技工');
INSERT INTO `dictcontent` VALUES ('15', '3', '05', '职高');
INSERT INTO `dictcontent` VALUES ('16', '3', '07', '中专');
INSERT INTO `dictcontent` VALUES ('17', '3', '08', '大专');
INSERT INTO `dictcontent` VALUES ('18', '3', '09', '大学');
INSERT INTO `dictcontent` VALUES ('19', '3', '10', '硕士');
INSERT INTO `dictcontent` VALUES ('20', '3', '11', '博士');
INSERT INTO `dictcontent` VALUES ('21', '3', '90', '其他');
INSERT INTO `dictcontent` VALUES ('22', '4', '01', '学士');
INSERT INTO `dictcontent` VALUES ('23', '4', '02', '硕士');
INSERT INTO `dictcontent` VALUES ('50', '4', '03', '博士');
INSERT INTO `dictcontent` VALUES ('51', '6', '01', '民营企业管理技术人员');
INSERT INTO `dictcontent` VALUES ('52', '6', '02', '外商投资企业管理技术人员');
INSERT INTO `dictcontent` VALUES ('53', '6', '03', '中介组织从业人员');
INSERT INTO `dictcontent` VALUES ('54', '6', '04', '社会组织从业人员');
INSERT INTO `dictcontent` VALUES ('55', '6', '05', '自由职业人员');
INSERT INTO `dictcontent` VALUES ('56', '6', '06', '新媒体从业人员');
INSERT INTO `dictcontent` VALUES ('57', '5', '001', '横溪社区');
INSERT INTO `dictcontent` VALUES ('58', '5', '002', '新杨社区');
INSERT INTO `dictcontent` VALUES ('59', '5', '003', '丹阳社区');
INSERT INTO `dictcontent` VALUES ('60', '5', '004', '西岗社区');
INSERT INTO `dictcontent` VALUES ('61', '5', '005', '陶吴社区');
INSERT INTO `dictcontent` VALUES ('62', '5', '006', '新杭社区');
INSERT INTO `dictcontent` VALUES ('63', '5', '007', '甘西社区');
INSERT INTO `dictcontent` VALUES ('64', '5', '008', '西泉社区');
INSERT INTO `dictcontent` VALUES ('65', '5', '009', '西阳社区');
INSERT INTO `dictcontent` VALUES ('66', '5', '010', '甘泉湖社区');
INSERT INTO `dictcontent` VALUES ('67', '5', '021', '官长村');
INSERT INTO `dictcontent` VALUES ('68', '5', '022', '红旗村');
INSERT INTO `dictcontent` VALUES ('69', '5', '023', '云台村');
INSERT INTO `dictcontent` VALUES ('70', '5', '024', '安民村');
INSERT INTO `dictcontent` VALUES ('71', '5', '025', '许呈村');
INSERT INTO `dictcontent` VALUES ('72', '5', '026', '横山村');
INSERT INTO `dictcontent` VALUES ('73', '5', '027', '勇跃村');
INSERT INTO `dictcontent` VALUES ('74', '5', '028', '宁光村');
INSERT INTO `dictcontent` VALUES ('75', '5', '029', '山景村');
INSERT INTO `dictcontent` VALUES ('76', '5', '030', '许高村');
INSERT INTO `dictcontent` VALUES ('77', '7', '01', '基督教');
INSERT INTO `dictcontent` VALUES ('78', '7', '02', '伊斯兰教');
INSERT INTO `dictcontent` VALUES ('79', '7', '03', '佛教');
INSERT INTO `dictcontent` VALUES ('80', '7', '04', '天主教');

-- ----------------------------
-- Table structure for dwrs
-- ----------------------------
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

-- ----------------------------
-- Records of dwrs
-- ----------------------------

-- ----------------------------
-- Table structure for jzry
-- ----------------------------
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='教职人员信息表';

-- ----------------------------
-- Records of jzry
-- ----------------------------
INSERT INTO `jzry` VALUES ('1', '蒋凤卫', '蒋凤卫', '0', '2017-10-07', 'hz', '02', '啊啊', '3322', '发大发', '发大发', '232323', '2323232');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('9', '权限管理', null, null, '8', '{\"icon\": \"fa fa-folder\", \"visible\": true}');
INSERT INTO `menu` VALUES ('10', '路由', '9', '/admin/route/index', '5', null);
INSERT INTO `menu` VALUES ('11', '权限', '9', '/admin/permission/index', '1', null);
INSERT INTO `menu` VALUES ('12', '角色', '9', '/admin/role/index', '2', null);
INSERT INTO `menu` VALUES ('13', '分配', '9', '/admin/assignment/index', '3', null);
INSERT INTO `menu` VALUES ('14', '菜单', '9', '/admin/menu/index', '4', null);
INSERT INTO `menu` VALUES ('15', '用户管理', '9', '/user/index', null, '{\"icon\": \"fa fa-user\", \"visible\": true}');
INSERT INTO `menu` VALUES ('16', '商会会员', null, null, null, '{\"icon\": \"fa fa-folder\", \"visible\": true}');
INSERT INTO `menu` VALUES ('17', '商会会员', '16', '/shhy/index', '1', null);
INSERT INTO `menu` VALUES ('18', '商会名称', '16', '/sh/index', null, null);
INSERT INTO `menu` VALUES ('19', '商会党员', null, '/shdy/index', '2', null);
INSERT INTO `menu` VALUES ('20', '党外人士', null, '/dwrs/index', '3', null);
INSERT INTO `menu` VALUES ('21', '新社会阶层人士', null, null, '4', '{\"icon\": \"fa fa-folder\", \"visible\": true}');
INSERT INTO `menu` VALUES ('22', '民族工作', null, null, '5', '{\"icon\": \"fa fa-folder\", \"visible\": true}');
INSERT INTO `menu` VALUES ('23', '牛羊肉补贴名单', '22', '/nyrbt/index', null, null);
INSERT INTO `menu` VALUES ('24', '少数民族', '22', '/ssmz/index', null, null);
INSERT INTO `menu` VALUES ('25', '宗教工作', null, null, '6', '{\"icon\": \"fa fa-folder\", \"visible\": true}');
INSERT INTO `menu` VALUES ('26', '宗教场所', '25', '/zjcs/index', null, null);
INSERT INTO `menu` VALUES ('27', '教职人员', '25', '/jzry/index', null, null);
INSERT INTO `menu` VALUES ('28', '新社会阶层人士', '21', '/xjcrs/index', null, null);
INSERT INTO `menu` VALUES ('29', '统计', '21', '/xjcrs/statistics', null, null);

-- ----------------------------
-- Table structure for nyrbt
-- ----------------------------
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='牛羊肉补贴名单';

-- ----------------------------
-- Records of nyrbt
-- ----------------------------
INSERT INTO `nyrbt` VALUES ('1', '张三', '1', 'huiz', '002', '320121198707062917', '13814045112', '是是是', '顶顶顶顶');

-- ----------------------------
-- Table structure for sh
-- ----------------------------
DROP TABLE IF EXISTS `sh`;
CREATE TABLE `sh` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '商会编号',
  `nane` varchar(255) DEFAULT NULL COMMENT '商会名称',
  `e_show` tinyint(4) DEFAULT '0' COMMENT '显示企业详情',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='商会表';

-- ----------------------------
-- Records of sh
-- ----------------------------
INSERT INTO `sh` VALUES ('1', '街道商会', '1');
INSERT INTO `sh` VALUES ('2', '石塘农家乐商会', '0');
INSERT INTO `sh` VALUES ('3', '陶吴社区商会', '0');

-- ----------------------------
-- Table structure for shdy
-- ----------------------------
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

-- ----------------------------
-- Records of shdy
-- ----------------------------

-- ----------------------------
-- Table structure for shhy
-- ----------------------------
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COMMENT='商会会员';

-- ----------------------------
-- Records of shhy
-- ----------------------------
INSERT INTO `shhy` VALUES ('4', '安达市多', '1', '2017-10-18', 'hz', '', '07', '01', '02', '多大', '23', '33', '333333', '333333', '33', '3', '3', '2', null, '3', '3', '3', '3', '3', '3', '2017-10-28 00:00:00', '', '', null, '', '', '', '', '', '', null, null);

-- ----------------------------
-- Table structure for ssmz
-- ----------------------------
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
  `community` varchar(50) DEFAULT NULL COMMENT '所属社区字典SQ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='少数民族人员信息';

-- ----------------------------
-- Records of ssmz
-- ----------------------------
INSERT INTO `ssmz` VALUES ('1', '蒋凤卫', '0', '2017-10-13', 'huiz', '南京', '答复', '答复', '322 ', '1', '323', '电放费', '放到', '方式发', null);
INSERT INTO `ssmz` VALUES ('2', '蒋凤卫', '0', '2017-12-01', 'hz', '发发发', '第三方', '范德萨发生', '32423311', '1', '12344', '反反复复', '打发打发', '师傅的说法', '007');

-- ----------------------------
-- Table structure for user
-- ----------------------------
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('2', 'admin', 'admin', 'im8kCm12TXRHHJZtMoc7_5z5cT_yDdr8', '$2y$13$YuFSSmVJOkTbVRMnFh.R9egV.TIBAOJ8UJ..GZ5H6q9SdP7qFIFZi', null, 'admin@163.com', '10', '2016', '2016');
INSERT INTO `user` VALUES ('4', 'test12', 'test', 'yn5XZj3cjTJhRBHcackkLhMC1tQopUx1', '$2y$13$t/Bf/QViuKtE9PhyfuV4u.bALlBgldX80BrVvH9Aehe4ClLaaRw5C', null, '70962450@qq.com', '10', '1509807397', '1509807397');

-- ----------------------------
-- Table structure for xjcrs
-- ----------------------------
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='新的社会阶层人士信息';

-- ----------------------------
-- Records of xjcrs
-- ----------------------------
INSERT INTO `xjcrs` VALUES ('1', '蒋凤卫', '1', 'huiz', '南京', '2017-10-26', '啊', '03', '', '南京', '01', '专家', '32323232', '南京单位', '打', '06', '啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊', '32323232', 'jiangfengwei_2@126.com', '1/Ujmd_6Mc0v5mt8JB5yO4ol4QXie8_Aqd.png', '啊打发', '0', '0', '打法是否');
INSERT INTO `xjcrs` VALUES ('2', '张三', '0', 'huiz', '南京', '2017-08-03', '李四', '07', '', '新疆', '03', '技术', '232342324323', '南京公司', '对对对', '04', '66666666666666', '2353453455345', 'jijij@323.com', '1/aJj3gj9w1dRYU3ou8Z071mIuKREees4Q.png', 'wewewewe', '1', null, 'weeeeeeeeeeeeeeeeeeeeeeeeeeeeeee');
INSERT INTO `xjcrs` VALUES ('3', '王五', '1', 'mgz', '南京', '2017-11-04', '多大', '09', '', '南京', '05', '高级', '3233232323', '付费方式', '专家', '05', '南京', '23232323', 'mail@123.com', '1/H5kWgsxLaaLoJYfr7QoIGYq9OEqIMdOR.png', '大大', '0', '0', '答复');

-- ----------------------------
-- Table structure for zjcs
-- ----------------------------
DROP TABLE IF EXISTS `zjcs`;
CREATE TABLE `zjcs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `palcename` varchar(50) DEFAULT NULL COMMENT '场所名称',
  `religion` varchar(50) DEFAULT NULL COMMENT '教别数据字典JB',
  `leader` varchar(50) DEFAULT NULL COMMENT '负责人',
  `gender` tinyint(2) unsigned DEFAULT NULL COMMENT '性别 0：女 1：男',
  `idcard` varchar(50) DEFAULT NULL COMMENT '身份证号码',
  `tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `partytime` varchar(255) DEFAULT NULL COMMENT '聚会时间',
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
  `remark` varchar(1000) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='宗教场所信息表';

-- ----------------------------
-- Records of zjcs
-- ----------------------------
INSERT INTO `zjcs` VALUES ('2', '啊啊', '02', '大大大', '1', '3223', '3233', '周一,周日', '100', '003', '2323', '23232', '32', '32', '323', '发发发', '23', '333', '3333', '1/ExOx18Wvxf4pwlooaOpVZfbN5PA_k8ds.png', '驱蚊器无群无群无群无');
INSERT INTO `zjcs` VALUES ('3', '将三', '01', '多大', '1', '32323', '43434', '周三', '34', '003', '4444', '43434', '43', '43', '44', '刚刚', '34', '个', '34', '1/Xg8QE7ExUWPF9MK9HIS54WE8oIXpWfAq.png', null);
INSERT INTO `zjcs` VALUES ('4', '啊啊', '02', '22', '1', '22', '22', '周日', '2', '006', '2', '2', '2', '2', '2', '2', '2', '2', '2', '1/3SnnDew51xrRN7n-Gnensv1nm7VsAd7i.png', null);
