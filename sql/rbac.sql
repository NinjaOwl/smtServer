/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.5.53 : Database - mhealth_sales
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mhealth_sales` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mhealth_sales`;

/*Table structure for table `auth_assignment` */

DROP TABLE IF EXISTS `auth_assignment`;

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_assignment` */

insert  into `auth_assignment`(`item_name`,`user_id`,`created_at`) values ('普通管理员','1',1482894956),('超级管理员','2',1482908075),('销售经理','3',1482903248);

/*Table structure for table `auth_item` */

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

/*Data for the table `auth_item` */

insert  into `auth_item`(`name`,`type`,`description`,`rule_name`,`data`,`created_at`,`updated_at`) values ('/*',2,NULL,NULL,NULL,1482800318,1482800318),('/admin/*',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/assignment/*',2,NULL,NULL,NULL,1482800314,1482800314),('/admin/assignment/assign',2,NULL,NULL,NULL,1482800314,1482800314),('/admin/assignment/index',2,NULL,NULL,NULL,1482800314,1482800314),('/admin/assignment/revoke',2,NULL,NULL,NULL,1482800314,1482800314),('/admin/assignment/view',2,NULL,NULL,NULL,1482800314,1482800314),('/admin/create',2,NULL,NULL,NULL,1482800317,1482800317),('/admin/default/*',2,NULL,NULL,NULL,1482800314,1482800314),('/admin/default/index',2,NULL,NULL,NULL,1482800314,1482800314),('/admin/delete',2,NULL,NULL,NULL,1482800317,1482800317),('/admin/index',2,NULL,NULL,NULL,1482800317,1482800317),('/admin/menu/*',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/menu/create',2,NULL,NULL,NULL,1482800314,1482800314),('/admin/menu/delete',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/menu/index',2,NULL,NULL,NULL,1482800314,1482800314),('/admin/menu/update',2,NULL,NULL,NULL,1482800314,1482800314),('/admin/menu/view',2,NULL,NULL,NULL,1482800314,1482800314),('/admin/permission/*',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/permission/assign',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/permission/create',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/permission/delete',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/permission/index',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/permission/remove',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/permission/update',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/permission/view',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/role/*',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/role/assign',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/role/create',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/role/delete',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/role/index',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/role/remove',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/role/update',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/role/view',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/route/*',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/route/assign',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/route/create',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/route/index',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/route/refresh',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/route/remove',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/rule/*',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/rule/create',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/rule/delete',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/rule/index',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/rule/update',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/rule/view',2,NULL,NULL,NULL,1482800315,1482800315),('/admin/update',2,NULL,NULL,NULL,1482800317,1482800317),('/admin/user/*',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/user/activate',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/user/change-password',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/user/delete',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/user/index',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/user/login',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/user/logout',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/user/request-password-reset',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/user/reset-password',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/user/signup',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/user/view',2,NULL,NULL,NULL,1482800316,1482800316),('/admin/view',2,NULL,NULL,NULL,1482800317,1482800317),('/channel-outbound-order/*',2,NULL,NULL,NULL,1482713293,1482713293),('/channel-outbound-order/create',2,NULL,NULL,NULL,1482800317,1482800317),('/channel-outbound-order/delete',2,NULL,NULL,NULL,1482800317,1482800317),('/channel-outbound-order/index',2,NULL,NULL,NULL,1482713281,1482713281),('/channel-outbound-order/searchchannelname',2,NULL,NULL,NULL,1482800317,1482800317),('/channel-outbound-order/update',2,NULL,NULL,NULL,1482800317,1482800317),('/channel-outbound-order/view',2,NULL,NULL,NULL,1482800317,1482800317),('/channel-sales-order/*',2,NULL,NULL,NULL,1482713300,1482713300),('/channel-sales-order/activedevice',2,NULL,NULL,NULL,1482717772,1482717772),('/channel-sales-order/create',2,NULL,NULL,NULL,1482717772,1482717772),('/channel-sales-order/delete',2,NULL,NULL,NULL,1482717772,1482717772),('/channel-sales-order/index',2,NULL,NULL,NULL,1482717772,1482717772),('/channel-sales-order/update',2,NULL,NULL,NULL,1482717772,1482717772),('/channel-sales-order/view',2,NULL,NULL,NULL,1482717772,1482717772),('/channel-salesman/*',2,NULL,NULL,NULL,1482717773,1482717773),('/channel-salesman/create',2,NULL,NULL,NULL,1482800317,1482800317),('/channel-salesman/delete',2,NULL,NULL,NULL,1482800317,1482800317),('/channel-salesman/download',2,NULL,NULL,NULL,1482800317,1482800317),('/channel-salesman/import',2,NULL,NULL,NULL,1482800317,1482800317),('/channel-salesman/import-ok',2,NULL,NULL,NULL,1482800317,1482800317),('/channel-salesman/index',2,NULL,NULL,NULL,1482717772,1482717772),('/channel-salesman/update',2,NULL,NULL,NULL,1482800317,1482800317),('/channel-salesman/view',2,NULL,NULL,NULL,1482800317,1482800317),('/channel/*',2,NULL,NULL,NULL,1482713288,1482713288),('/channel/create',2,NULL,NULL,NULL,1482717755,1482717755),('/channel/delete',2,NULL,NULL,NULL,1482800317,1482800317),('/channel/index',2,NULL,NULL,NULL,1482717748,1482717748),('/channel/update',2,NULL,NULL,NULL,1482717752,1482717752),('/channel/view',2,NULL,NULL,NULL,1482717750,1482717750),('/common/*',2,NULL,NULL,NULL,1482800317,1482800317),('/common/citylist',2,NULL,NULL,NULL,1482800317,1482800317),('/common/provincelist',2,NULL,NULL,NULL,1482800317,1482800317),('/debug/*',2,NULL,NULL,NULL,1482800316,1482800316),('/debug/default/*',2,NULL,NULL,NULL,1482800316,1482800316),('/debug/default/db-explain',2,NULL,NULL,NULL,1482800316,1482800316),('/debug/default/download-mail',2,NULL,NULL,NULL,1482800316,1482800316),('/debug/default/index',2,NULL,NULL,NULL,1482800316,1482800316),('/debug/default/toolbar',2,NULL,NULL,NULL,1482800316,1482800316),('/debug/default/view',2,NULL,NULL,NULL,1482800316,1482800316),('/faq/*',2,NULL,NULL,NULL,1482713623,1482713623),('/faq/create',2,NULL,NULL,NULL,1482800317,1482800317),('/faq/delete',2,NULL,NULL,NULL,1482800317,1482800317),('/faq/index',2,NULL,NULL,NULL,1482717859,1482717859),('/faq/next',2,NULL,NULL,NULL,1482800317,1482800317),('/faq/prev',2,NULL,NULL,NULL,1482800317,1482800317),('/faq/update',2,NULL,NULL,NULL,1482800317,1482800317),('/faq/upload',2,NULL,NULL,NULL,1482800317,1482800317),('/faq/view',2,NULL,NULL,NULL,1482800317,1482800317),('/feedback/*',2,NULL,NULL,NULL,1482713628,1482713628),('/feedback/create',2,NULL,NULL,NULL,1482800317,1482800317),('/feedback/delete',2,NULL,NULL,NULL,1482800317,1482800317),('/feedback/index',2,NULL,NULL,NULL,1482717780,1482717780),('/feedback/update',2,NULL,NULL,NULL,1482800317,1482800317),('/feedback/view',2,NULL,NULL,NULL,1482800317,1482800317),('/gii/*',2,NULL,NULL,NULL,1482800316,1482800316),('/gii/default/*',2,NULL,NULL,NULL,1482800316,1482800316),('/gii/default/action',2,NULL,NULL,NULL,1482800316,1482800316),('/gii/default/diff',2,NULL,NULL,NULL,1482800316,1482800316),('/gii/default/index',2,NULL,NULL,NULL,1482800316,1482800316),('/gii/default/preview',2,NULL,NULL,NULL,1482800316,1482800316),('/gii/default/view',2,NULL,NULL,NULL,1482800316,1482800316),('/region/*',2,NULL,NULL,NULL,1482800318,1482800318),('/region/create',2,NULL,NULL,NULL,1482800318,1482800318),('/region/delete',2,NULL,NULL,NULL,1482800318,1482800318),('/region/index',2,NULL,NULL,NULL,1482800318,1482800318),('/region/update',2,NULL,NULL,NULL,1482800318,1482800318),('/region/view',2,NULL,NULL,NULL,1482800318,1482800318),('/role1/*',2,NULL,NULL,NULL,1482800318,1482800318),('/role1/adminreg',2,NULL,NULL,NULL,1482800318,1482800318),('/role1/role',2,NULL,NULL,NULL,1482800318,1482800318),('/role1/rolecreate',2,NULL,NULL,NULL,1482800318,1482800318),('/role1/roledelete',2,NULL,NULL,NULL,1482800318,1482800318),('/role1/roleindex',2,NULL,NULL,NULL,1482800318,1482800318),('/role1/roleupdate',2,NULL,NULL,NULL,1482800318,1482800318),('/site/*',2,NULL,NULL,NULL,1482713637,1482713637),('/site/about',2,NULL,NULL,NULL,1482800318,1482800318),('/site/captcha',2,NULL,NULL,NULL,1482800318,1482800318),('/site/contact',2,NULL,NULL,NULL,1482800318,1482800318),('/site/error',2,NULL,NULL,NULL,1482800318,1482800318),('/site/index',2,NULL,NULL,NULL,1482717789,1482717789),('/site/login',2,NULL,NULL,NULL,1482800318,1482800318),('/site/logout',2,NULL,NULL,NULL,1482717789,1482717789),('/user/*',2,NULL,NULL,NULL,1482804358,1482804358),('/user/create',2,NULL,NULL,NULL,1482804433,1482804433),('/user/delete',2,NULL,NULL,NULL,1482804433,1482804433),('/user/index',2,NULL,NULL,NULL,1482804433,1482804433),('/user/update',2,NULL,NULL,NULL,1482804433,1482804433),('/user/view',2,NULL,NULL,NULL,1482804433,1482804433),('/users/*',2,NULL,NULL,NULL,1482713579,1482713579),('/users/create',2,NULL,NULL,NULL,1482800318,1482800318),('/users/delete',2,NULL,NULL,NULL,1482800318,1482800318),('/users/index',2,NULL,NULL,NULL,1482487975,1482487975),('/users/pass',2,NULL,NULL,NULL,1482800318,1482800318),('/users/regionadd',2,NULL,NULL,NULL,1482800318,1482800318),('/users/regiondel',2,NULL,NULL,NULL,1482800318,1482800318),('/users/regionset',2,NULL,NULL,NULL,1482800318,1482800318),('/users/unpass',2,NULL,NULL,NULL,1482800318,1482800318),('/users/update',2,NULL,NULL,NULL,1482800318,1482800318),('/users/view',2,NULL,NULL,NULL,1482800318,1482800318),('/v1/*',2,NULL,NULL,NULL,1482800311,1482800311),('/v1/api/*',2,NULL,NULL,NULL,1482800311,1482800311),('/v1/api/check-invite-code',2,NULL,NULL,NULL,1482800311,1482800311),('/wx/*',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/api/*',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/api/index',2,NULL,NULL,NULL,1482800311,1482800311),('/wx/api/logout',2,NULL,NULL,NULL,1482800311,1482800311),('/wx/api/notallow',2,NULL,NULL,NULL,1482800311,1482800311),('/wx/api/portal',2,NULL,NULL,NULL,1482800311,1482800311),('/wx/base/*',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/base/logout',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/base/notallow',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/common/*',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/common/citylist',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/common/jssdkload',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/common/logout',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/common/notallow',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/common/provincelist',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/error/*',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/error/logout',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/error/notallow',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/error/notfound',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/order/*',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/order/active',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/order/bind',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/order/clerkdetail',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/order/detail',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/order/doctordetail',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/order/doctorqr',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/order/getdoctorinfo',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/order/index',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/order/listpage',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/order/logout',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/order/notallow',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/order/salecenter',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/products/*',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/products/intro',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/products/logout',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/products/notallow',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/products/operate',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/products/scene',2,NULL,NULL,NULL,1482800312,1482800312),('/wx/register/*',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/register/agent',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/register/citylist',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/register/group',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/register/index',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/register/logout',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/register/mhealth',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/register/notallow',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/register/searchagentbyname',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/register/searchstorebyname',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/register/sendmsg',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/register/store',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/register/valid-msg',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/sales/*',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/sales/download',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/sales/faq',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/sales/faqdetail',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/sales/faqdetailpop',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/sales/index',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/sales/logout',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/sales/notallow',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/sales/resource',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/test/*',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/test/index',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/test/logout',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/test/notallow',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/users/*',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/audit',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/auditpass',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/auditunpass',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/bind',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/contact',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/copefeedback',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/donecopefeedback',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/feedback',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/index',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/users/info',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/logout',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/notallow',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/register',2,NULL,NULL,NULL,1482800313,1482800313),('/wx/users/submitfeedback',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/tips',2,NULL,NULL,NULL,1482800314,1482800314),('/wx/users/tipspass',2,NULL,NULL,NULL,1482800314,1482800314),('/wxmenu/*',2,NULL,NULL,NULL,1482713583,1482713583),('/wxmenu/create',2,NULL,NULL,NULL,1482717839,1482717839),('/wxmenu/delete',2,NULL,NULL,NULL,1482800318,1482800318),('/wxmenu/index',2,NULL,NULL,NULL,1482717839,1482717839),('/wxmenu/reset-menu',2,NULL,NULL,NULL,1482717839,1482717839),('/wxmenu/update',2,NULL,NULL,NULL,1482717839,1482717839),('/wxmenu/view',2,NULL,NULL,NULL,1482717839,1482717839),('FAQ',2,'FAQ',NULL,NULL,1482740328,1482740328),('出货记录',2,'出货记录',NULL,NULL,1482740250,1482740267),('基本权限',2,'包括登录登出，debug等',NULL,NULL,1482912322,1482912466),('客户反馈',2,'客户反馈',NULL,NULL,1482740303,1482740303),('微信菜单',2,'微信菜单',NULL,NULL,1482740278,1482740291),('普通管理员',1,'普通管理员',NULL,NULL,1482825695,1482912224),('权限管理-分配',2,'权限管理-分配',NULL,NULL,1482807128,1482807128),('权限管理-权限',2,'权限管理-权限',NULL,NULL,1482806754,1482806899),('权限管理-菜单',2,'权限管理-菜单',NULL,NULL,1482806774,1482806881),('权限管理-角色',2,'权限管理-角色',NULL,NULL,1482806575,1482806858),('权限管理-路由',2,'权限管理-路由',NULL,NULL,1482806734,1482806914),('渠道管理',2,'渠道管理',NULL,NULL,1482739905,1482806615),('用户管理',2,'用户管理',NULL,NULL,1482835089,1482835089),('超级管理员',1,'创建了 admin角色、部门、权限组',NULL,NULL,1482479247,1482912254),('销售人员管理',2,'销售人员管理',NULL,NULL,1482735218,1482735321),('销售经理',1,'销售经理',NULL,NULL,1482887768,1482912298),('销售订单',2,'销售订单',NULL,NULL,1482740216,1482740216);

/*Table structure for table `auth_item_child` */

DROP TABLE IF EXISTS `auth_item_child`;

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_item_child` */

insert  into `auth_item_child`(`parent`,`child`) values ('超级管理员','/*'),('权限管理-分配','/admin/assignment/*'),('权限管理-菜单','/admin/menu/*'),('权限管理-权限','/admin/permission/*'),('权限管理-角色','/admin/role/*'),('权限管理-路由','/admin/route/*'),('出货记录','/channel-outbound-order/*'),('销售订单','/channel-sales-order/*'),('渠道管理','/channel/*'),('基本权限','/debug/*'),('销售经理','/debug/*'),('FAQ','/faq/*'),('客户反馈','/feedback/*'),('基本权限','/site/*'),('用户管理','/user/*'),('销售人员管理','/users/*'),('基本权限','/v1/*'),('基本权限','/v1/api/*'),('基本权限','/wx/*'),('微信菜单','/wxmenu/*'),('普通管理员','FAQ'),('超级管理员','FAQ'),('普通管理员','出货记录'),('超级管理员','出货记录'),('普通管理员','基本权限'),('普通管理员','客户反馈'),('超级管理员','客户反馈'),('普通管理员','微信菜单'),('超级管理员','微信菜单'),('超级管理员','权限管理-分配'),('超级管理员','权限管理-权限'),('超级管理员','权限管理-菜单'),('超级管理员','权限管理-角色'),('超级管理员','权限管理-路由'),('普通管理员','渠道管理'),('超级管理员','渠道管理'),('超级管理员','用户管理'),('普通管理员','销售人员管理'),('超级管理员','销售人员管理'),('销售经理','销售人员管理'),('普通管理员','销售订单'),('超级管理员','销售订单'),('销售经理','销售订单');

/*Table structure for table `auth_rule` */

DROP TABLE IF EXISTS `auth_rule`;

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_rule` */

/*Table structure for table `user` */

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`name`,`username`,`auth_key`,`password_hash`,`password_reset_token`,`email`,`status`,`created_at`,`updated_at`) values (1,'lee','lee','6O5lUfW0SSjDa34ex8KaoOHCk2lLKFZC','$2y$13$jvciVlo1nH9s/JbVnhObSe4uBDFEYPOhVAgGfM/rPEL5b1s/tR4Y6',NULL,'lee@gmail.com',10,2016,2016),(2,'admin','admin','im8kCm12TXRHHJZtMoc7_5z5cT_yDdr8','$2y$13$YuFSSmVJOkTbVRMnFh.R9egV.TIBAOJ8UJ..GZ5H6q9SdP7qFIFZi',NULL,'admin@163.com',10,2016,2016),(3,'测试','test','iT3rBHhQRb8jQs3P0G3jEdQwRfinj42i','$2y$13$3n492vyF7JqXtfLHiXndwOwc.PtxN1pEvCYSDsrVn3LYe97K0HukG',NULL,'test@126.com',10,2016,2016),(4,NULL,'test2','nDEdvitqCd70-fJfu8Ba1UBqqOto5U3q','$2y$13$9BI2XTu7Ml7FlDfUbXXBZeGPWSWaCky7LJrwZA8o1q8bEzz2cPJni',NULL,'test2@mail.com',10,2016,2016),(5,'测试3','test3','vscV-i9Wmq84i8E3jteCN7l8gCftZ9iV','$2y$13$6OH/lTGLD6p6AyI1lTYoX.1QoFXnV2od7WfKSqcRNLrrTucAdTZkG',NULL,'test3@mail.com',10,2016,2016);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
