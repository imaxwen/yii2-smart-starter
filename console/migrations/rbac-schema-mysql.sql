# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.6.26)
# Database: yii2advanced
# Generation Time: 2016-09-09 06:04:08 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table yii_auth_assignment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yii_auth_assignment`;

CREATE TABLE `yii_auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `yii_auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `yii_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `yii_auth_assignment` WRITE;
/*!40000 ALTER TABLE `yii_auth_assignment` DISABLE KEYS */;

INSERT INTO `yii_auth_assignment` (`item_name`, `user_id`, `created_at`)
VALUES
	('超级管理员','2',1473239157);

/*!40000 ALTER TABLE `yii_auth_assignment` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table yii_auth_item
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yii_auth_item`;

CREATE TABLE `yii_auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `yii_auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `yii_auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `yii_auth_item` WRITE;
/*!40000 ALTER TABLE `yii_auth_item` DISABLE KEYS */;

INSERT INTO `yii_auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`)
VALUES
	('/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/assignment/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/assignment/assign',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/assignment/index',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/assignment/revoke',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/assignment/view',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/default/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/default/index',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/menu/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/menu/create',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/menu/delete',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/menu/index',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/menu/update',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/menu/view',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/permission/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/permission/assign',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/permission/create',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/permission/delete',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/permission/index',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/permission/remove',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/permission/update',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/permission/view',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/role/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/role/assign',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/role/create',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/role/delete',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/role/index',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/role/remove',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/role/update',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/role/view',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/route/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/route/assign',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/route/create',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/route/index',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/route/refresh',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/route/remove',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/rule/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/rule/create',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/rule/delete',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/rule/index',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/rule/update',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/rule/view',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/user/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/user/activate',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/user/change-password',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/user/delete',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/user/index',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/user/login',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/user/logout',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/user/request-password-reset',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/user/reset-password',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/user/signup',2,NULL,NULL,NULL,1473238434,1473238434),
	('/auth/user/view',2,NULL,NULL,NULL,1473238434,1473238434),
	('/debug/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/debug/default/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/debug/default/db-explain',2,NULL,NULL,NULL,1473238434,1473238434),
	('/debug/default/download-mail',2,NULL,NULL,NULL,1473238434,1473238434),
	('/debug/default/index',2,NULL,NULL,NULL,1473238434,1473238434),
	('/debug/default/toolbar',2,NULL,NULL,NULL,1473238434,1473238434),
	('/debug/default/view',2,NULL,NULL,NULL,1473238434,1473238434),
	('/gii/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/gii/default/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/gii/default/action',2,NULL,NULL,NULL,1473238434,1473238434),
	('/gii/default/diff',2,NULL,NULL,NULL,1473238434,1473238434),
	('/gii/default/index',2,NULL,NULL,NULL,1473238434,1473238434),
	('/gii/default/preview',2,NULL,NULL,NULL,1473238434,1473238434),
	('/gii/default/view',2,NULL,NULL,NULL,1473238434,1473238434),
	('/site/*',2,NULL,NULL,NULL,1473238434,1473238434),
	('/site/error',2,NULL,NULL,NULL,1473238434,1473238434),
	('/site/index',2,NULL,NULL,NULL,1473238434,1473238434),
	('/site/login',2,NULL,NULL,NULL,1473238434,1473238434),
	('/site/logout',2,NULL,NULL,NULL,1473238434,1473238434),
	('Gii组件',2,NULL,NULL,NULL,1473238643,1473240857),
	('权限管理',2,'Rbac system management',NULL,NULL,1473238683,1473238683),
	('超级管理员',1,'super administrator',NULL,NULL,1473238527,1473238739);

/*!40000 ALTER TABLE `yii_auth_item` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table yii_auth_item_child
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yii_auth_item_child`;

CREATE TABLE `yii_auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `yii_auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `yii_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `yii_auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `yii_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `yii_auth_item_child` WRITE;
/*!40000 ALTER TABLE `yii_auth_item_child` DISABLE KEYS */;

INSERT INTO `yii_auth_item_child` (`parent`, `child`)
VALUES
	('权限管理','/auth/*'),
	('权限管理','/auth/assignment/*'),
	('权限管理','/auth/assignment/assign'),
	('权限管理','/auth/assignment/index'),
	('权限管理','/auth/assignment/revoke'),
	('权限管理','/auth/assignment/view'),
	('权限管理','/auth/default/*'),
	('权限管理','/auth/default/index'),
	('权限管理','/auth/menu/*'),
	('权限管理','/auth/menu/create'),
	('权限管理','/auth/menu/delete'),
	('权限管理','/auth/menu/index'),
	('权限管理','/auth/menu/update'),
	('权限管理','/auth/menu/view'),
	('权限管理','/auth/permission/*'),
	('权限管理','/auth/permission/assign'),
	('权限管理','/auth/permission/create'),
	('权限管理','/auth/permission/delete'),
	('权限管理','/auth/permission/index'),
	('权限管理','/auth/permission/remove'),
	('权限管理','/auth/permission/update'),
	('权限管理','/auth/permission/view'),
	('权限管理','/auth/role/*'),
	('权限管理','/auth/role/assign'),
	('权限管理','/auth/role/create'),
	('权限管理','/auth/role/delete'),
	('权限管理','/auth/role/index'),
	('权限管理','/auth/role/remove'),
	('权限管理','/auth/role/update'),
	('权限管理','/auth/role/view'),
	('权限管理','/auth/route/*'),
	('权限管理','/auth/route/assign'),
	('权限管理','/auth/route/create'),
	('权限管理','/auth/route/index'),
	('权限管理','/auth/route/refresh'),
	('权限管理','/auth/route/remove'),
	('权限管理','/auth/rule/*'),
	('权限管理','/auth/rule/create'),
	('权限管理','/auth/rule/delete'),
	('权限管理','/auth/rule/index'),
	('权限管理','/auth/rule/update'),
	('权限管理','/auth/rule/view'),
	('权限管理','/auth/user/*'),
	('权限管理','/auth/user/activate'),
	('权限管理','/auth/user/change-password'),
	('权限管理','/auth/user/delete'),
	('权限管理','/auth/user/index'),
	('权限管理','/auth/user/login'),
	('权限管理','/auth/user/logout'),
	('权限管理','/auth/user/request-password-reset'),
	('权限管理','/auth/user/reset-password'),
	('权限管理','/auth/user/signup'),
	('权限管理','/auth/user/view'),
	('Gii组件','/gii/*'),
	('Gii组件','/gii/default/*'),
	('Gii组件','/gii/default/action'),
	('Gii组件','/gii/default/diff'),
	('Gii组件','/gii/default/index'),
	('Gii组件','/gii/default/preview'),
	('Gii组件','/gii/default/view'),
	('超级管理员','Gii组件'),
	('超级管理员','权限管理');

/*!40000 ALTER TABLE `yii_auth_item_child` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table yii_auth_menu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yii_auth_menu`;

CREATE TABLE `yii_auth_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `yii_auth_menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `yii_auth_menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `yii_auth_menu` WRITE;
/*!40000 ALTER TABLE `yii_auth_menu` DISABLE KEYS */;

INSERT INTO `yii_auth_menu` (`id`, `name`, `parent`, `route`, `order`, `data`)
VALUES
	(4,'权限管理',10,'/auth/default/index',100,NULL),
	(5,'系统路由',4,'/auth/route/index',1,NULL),
	(6,'菜单管理',4,'/auth/menu/index',4,NULL),
	(7,'用户角色',4,'/auth/role/index',2,NULL),
	(8,'权限定义',4,'/auth/permission/index',3,NULL),
	(9,'权限分配',4,'/auth/assignment/index',4,NULL),
	(10,'系统设置',NULL,'/auth/default/index',100,X'7B2269636F6E223A202266612066612D6765617273222C202276697369626C65223A20747275657D'),
	(11,'后台管理员',10,'/auth/user/index',NULL,NULL);

/*!40000 ALTER TABLE `yii_auth_menu` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table yii_auth_rule
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yii_auth_rule`;

CREATE TABLE `yii_auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table yii_auth_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yii_auth_user`;

CREATE TABLE `yii_auth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `yii_auth_user` WRITE;
/*!40000 ALTER TABLE `yii_auth_user` DISABLE KEYS */;

INSERT INTO `yii_auth_user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'admin','qI6gaefFxh8J5euTaIJJ4aJZ2F8cfzCx','$2y$13$AxYOaSSdU088BWfGkQQRUOCTPfqc.LR3dDeZicstp0F1z2a8FQCu6',NULL,'1max.wen@qq.com',10,1473215182,1473215182);

/*!40000 ALTER TABLE `yii_auth_user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
