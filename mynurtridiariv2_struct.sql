/*
SQLyog Community v12.2.4 (32 bit)
MySQL - 5.6.40 : Database - mynutridiariv2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mynutridiariv2` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mynutridiariv2`;

/*Table structure for table `bul` */

DROP TABLE IF EXISTS `bul`;

CREATE TABLE `bul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `summary` text,
  `create_dt` datetime DEFAULT NULL,
  `update_dt` datetime DEFAULT NULL,
  `create_by` varchar(25) DEFAULT NULL,
  `status` char(2) DEFAULT NULL,
  `cat` varchar(5) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `pub_cat` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

/*Table structure for table `bul_comment` */

DROP TABLE IF EXISTS `bul_comment`;

CREATE TABLE `bul_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) DEFAULT NULL,
  `date_post` date DEFAULT NULL,
  `bul_id` int(11) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Table structure for table `bul_content` */

DROP TABLE IF EXISTS `bul_content`;

CREATE TABLE `bul_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bul_id` int(11) DEFAULT NULL,
  `page` int(11) DEFAULT NULL,
  `content` text,
  `contentx` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=199 DEFAULT CHARSET=latin1;

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `info1` varchar(100) DEFAULT NULL,
  `info2` varchar(100) DEFAULT NULL,
  `info3` varchar(100) DEFAULT NULL,
  `info4` varchar(100) DEFAULT NULL,
  `info5` varchar(100) DEFAULT NULL,
  `info6` varchar(100) DEFAULT NULL,
  `info7` varchar(100) DEFAULT NULL,
  `info8` varchar(100) DEFAULT NULL,
  `info9` varchar(100) DEFAULT NULL,
  `info10` varchar(100) DEFAULT NULL,
  `info11` varchar(100) DEFAULT NULL,
  `info12` varchar(100) DEFAULT NULL,
  `info13` varchar(100) DEFAULT NULL,
  `info14` varchar(100) DEFAULT NULL,
  `info15` varchar(100) DEFAULT NULL,
  `info16` varchar(100) DEFAULT NULL,
  `info17` varchar(100) DEFAULT NULL,
  `info18` varchar(100) DEFAULT NULL,
  `info19` varchar(100) DEFAULT NULL,
  `info20` varchar(100) DEFAULT NULL,
  `cartdate` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `updated` bigint(20) NOT NULL DEFAULT '201501010101',
  `server_id` varchar(100) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1802096 DEFAULT CHARSET=latin1;

/*Table structure for table `cat` */

DROP TABLE IF EXISTS `cat`;

CREATE TABLE `cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `published` char(1) DEFAULT NULL,
  `access` varchar(5) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `img_src` varchar(100) DEFAULT NULL,
  `cat_type` int(11) DEFAULT NULL COMMENT '1-Menu,2-div',
  `menu_loc` varchar(255) DEFAULT NULL,
  `target` varchar(100) DEFAULT NULL COMMENT '_blank',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` varchar(100) DEFAULT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `category_icon` varchar(100) DEFAULT NULL,
  `category_info` varchar(255) DEFAULT NULL,
  `category_type` varchar(100) DEFAULT '1',
  `category_icon_done` varchar(100) DEFAULT NULL,
  `category_position` int(11) DEFAULT '100',
  `updated` bigint(20) DEFAULT '201501010101',
  `status` varchar(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Table structure for table `content` */

DROP TABLE IF EXISTS `content`;

CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_title` varchar(100) DEFAULT NULL,
  `content_intro` varchar(255) DEFAULT NULL,
  `content_full` text,
  `content_datetime` varchar(100) DEFAULT NULL,
  `updated` bigint(20) DEFAULT '201501010101',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `code` varchar(10) DEFAULT NULL,
  `cat` varchar(10) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `od` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `exercise` */

DROP TABLE IF EXISTS `exercise`;

CREATE TABLE `exercise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_name` varchar(100) DEFAULT NULL,
  `exercise_info` varchar(100) DEFAULT NULL,
  `exercise_calories` varchar(100) DEFAULT NULL,
  `exercise_icon` varchar(100) DEFAULT NULL,
  `updated` bigint(20) DEFAULT '201501010101',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Table structure for table `food_malaysia` */

DROP TABLE IF EXISTS `food_malaysia`;

CREATE TABLE `food_malaysia` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(255) DEFAULT NULL,
  `food_info` varchar(255) DEFAULT NULL,
  `food_measurement` varchar(100) DEFAULT NULL,
  `food_weight` varchar(100) DEFAULT NULL,
  `food_calorie` varchar(100) DEFAULT NULL,
  `food_carbo` varchar(100) DEFAULT NULL,
  `food_protein` varchar(100) DEFAULT NULL,
  `food_fat` varchar(100) DEFAULT NULL,
  `food_cholesterol` varchar(100) DEFAULT NULL,
  `food_sugar` varchar(100) DEFAULT NULL,
  `food_salt` varchar(100) DEFAULT NULL,
  `food_type` varchar(100) DEFAULT NULL,
  `food_calorie_level` varchar(100) DEFAULT NULL,
  `food_icon` varchar(100) DEFAULT NULL,
  `updated` bigint(20) DEFAULT '201501010101',
  `server_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2309 DEFAULT CHARSET=latin1;

/*Table structure for table `food_malaysia_01012016` */

DROP TABLE IF EXISTS `food_malaysia_01012016`;

CREATE TABLE `food_malaysia_01012016` (
  `id` int(10) NOT NULL DEFAULT '0',
  `food_name` varchar(255) DEFAULT NULL,
  `food_info` varchar(255) DEFAULT NULL,
  `food_measurement` varchar(100) DEFAULT NULL,
  `food_weight` varchar(100) DEFAULT NULL,
  `food_calorie` varchar(100) DEFAULT NULL,
  `food_carbo` varchar(100) DEFAULT NULL,
  `food_protein` varchar(100) DEFAULT NULL,
  `food_fat` varchar(100) DEFAULT NULL,
  `food_cholesterol` varchar(100) DEFAULT NULL,
  `food_sugar` varchar(100) DEFAULT NULL,
  `food_salt` varchar(100) DEFAULT NULL,
  `food_type` varchar(100) DEFAULT NULL,
  `food_calorie_level` varchar(100) DEFAULT NULL,
  `food_icon` varchar(100) DEFAULT NULL,
  `updated` bigint(20) DEFAULT '201501010101',
  `server_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `food_moh` */

DROP TABLE IF EXISTS `food_moh`;

CREATE TABLE `food_moh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) DEFAULT NULL,
  `BARCODE` varchar(100) DEFAULT NULL,
  `PLACE_BOUGHT` varchar(255) DEFAULT NULL,
  `MANUFACTURER` varchar(255) DEFAULT NULL,
  `INGREDIENTS` text,
  `MEASUREMENT` varchar(100) DEFAULT NULL,
  `WEIGHT` varchar(100) DEFAULT NULL,
  `CALORIES` varchar(100) DEFAULT NULL,
  `CARBOHYDRATE` varchar(100) DEFAULT NULL,
  `PROTEIN` varchar(100) DEFAULT NULL,
  `FAT` varchar(100) DEFAULT NULL,
  `MUFA` varchar(100) DEFAULT NULL,
  `PUFA` varchar(100) DEFAULT NULL,
  `CHOLESTEROL` varchar(100) DEFAULT NULL,
  `SAT` varchar(100) DEFAULT NULL,
  `TRANS` varchar(100) DEFAULT NULL,
  `FIBER` varchar(100) DEFAULT NULL,
  `SUGAR` varchar(100) DEFAULT NULL,
  `SODIUM` varchar(100) DEFAULT NULL,
  `VITA` varchar(100) DEFAULT NULL,
  `VITC` varchar(100) DEFAULT NULL,
  `CALCIUM` varchar(100) DEFAULT NULL,
  `IRON` varchar(100) DEFAULT NULL,
  `ICON` varchar(100) DEFAULT NULL,
  `DATE` varchar(100) DEFAULT NULL,
  `updated` bigint(20) DEFAULT '201501010101',
  `server_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2189 DEFAULT CHARSET=latin1;

/*Table structure for table `food_moh_06042016` */

DROP TABLE IF EXISTS `food_moh_06042016`;

CREATE TABLE `food_moh_06042016` (
  `id` int(11) NOT NULL DEFAULT '0',
  `NAME` varchar(100) DEFAULT NULL,
  `BARCODE` varchar(100) DEFAULT NULL,
  `PLACE_BOUGHT` varchar(255) DEFAULT NULL,
  `MANUFACTURER` varchar(255) DEFAULT NULL,
  `INGREDIENTS` text,
  `MEASUREMENT` varchar(100) DEFAULT NULL,
  `WEIGHT` varchar(100) DEFAULT NULL,
  `CALORIES` varchar(100) DEFAULT NULL,
  `CARBOHYDRATE` varchar(100) DEFAULT NULL,
  `PROTEIN` varchar(100) DEFAULT NULL,
  `FAT` varchar(100) DEFAULT NULL,
  `MUFA` varchar(100) DEFAULT NULL,
  `PUFA` varchar(100) DEFAULT NULL,
  `CHOLESTEROL` varchar(100) DEFAULT NULL,
  `SAT` varchar(100) DEFAULT NULL,
  `TRANS` varchar(100) DEFAULT NULL,
  `FIBER` varchar(100) DEFAULT NULL,
  `SUGAR` varchar(100) DEFAULT NULL,
  `SODIUM` varchar(100) DEFAULT NULL,
  `VITA` varchar(100) DEFAULT NULL,
  `VITC` varchar(100) DEFAULT NULL,
  `CALCIUM` varchar(100) DEFAULT NULL,
  `IRON` varchar(100) DEFAULT NULL,
  `ICON` varchar(100) DEFAULT NULL,
  `DATE` varchar(100) DEFAULT NULL,
  `updated` bigint(20) DEFAULT '201501010101',
  `server_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `food_moh_29012016` */

DROP TABLE IF EXISTS `food_moh_29012016`;

CREATE TABLE `food_moh_29012016` (
  `id` int(11) NOT NULL DEFAULT '0',
  `NAME` varchar(100) DEFAULT NULL,
  `BARCODE` varchar(100) DEFAULT NULL,
  `PLACE_BOUGHT` varchar(255) DEFAULT NULL,
  `MANUFACTURER` varchar(255) DEFAULT NULL,
  `INGREDIENTS` text,
  `MEASUREMENT` varchar(100) DEFAULT NULL,
  `WEIGHT` varchar(100) DEFAULT NULL,
  `CALORIES` varchar(100) DEFAULT NULL,
  `CARBOHYDRATE` varchar(100) DEFAULT NULL,
  `PROTEIN` varchar(100) DEFAULT NULL,
  `FAT` varchar(100) DEFAULT NULL,
  `MUFA` varchar(100) DEFAULT NULL,
  `PUFA` varchar(100) DEFAULT NULL,
  `CHOLESTEROL` varchar(100) DEFAULT NULL,
  `SAT` varchar(100) DEFAULT NULL,
  `TRANS` varchar(100) DEFAULT NULL,
  `FIBER` varchar(100) DEFAULT NULL,
  `SUGAR` varchar(100) DEFAULT NULL,
  `SODIUM` varchar(100) DEFAULT NULL,
  `VITA` varchar(100) DEFAULT NULL,
  `VITC` varchar(100) DEFAULT NULL,
  `CALCIUM` varchar(100) DEFAULT NULL,
  `IRON` varchar(100) DEFAULT NULL,
  `ICON` varchar(100) DEFAULT NULL,
  `DATE` varchar(100) DEFAULT NULL,
  `updated` bigint(20) DEFAULT '201501010101',
  `server_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_txt` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `menu_loc` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `menu_parent_id` int(11) DEFAULT NULL,
  `default_menu` char(1) CHARACTER SET latin1 DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `icon_name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `balloon_title` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `module_ind` int(11) DEFAULT '0',
  `remarks` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Table structure for table `menudata` */

DROP TABLE IF EXISTS `menudata`;

CREATE TABLE `menudata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_type` varchar(100) DEFAULT '0',
  `menudata_title` varchar(100) DEFAULT NULL,
  `menudata_info1` text,
  `menudata_info2` text,
  `menudata_url` varchar(100) DEFAULT NULL,
  `menudata_icon` varchar(100) DEFAULT NULL,
  `updated` bigint(20) DEFAULT '201501010101',
  `status` varchar(1) NOT NULL DEFAULT 'A',
  `position` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

/*Table structure for table `old_users` */

DROP TABLE IF EXISTS `old_users`;

CREATE TABLE `old_users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `activation` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `activation` (`activation`)
) ENGINE=MyISAM AUTO_INCREMENT=1304 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_title` varchar(255) DEFAULT NULL,
  `product_info` varchar(255) DEFAULT NULL,
  `product_price` varchar(100) DEFAULT NULL,
  `product_currency` varchar(100) DEFAULT 'RM',
  `product_category` varchar(100) DEFAULT NULL,
  `product_options` varchar(100) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `updated` bigint(20) DEFAULT '201501010101',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Table structure for table `received` */

DROP TABLE IF EXISTS `received`;

CREATE TABLE `received` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `dbtable` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `content1` varchar(50) DEFAULT NULL,
  `content2` varchar(50) DEFAULT NULL,
  `content3` varchar(50) DEFAULT NULL,
  `content4` varchar(50) DEFAULT NULL,
  `content5` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `updated` bigint(20) DEFAULT NULL,
  `receiveddate` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13684931 DEFAULT CHARSET=latin1;

/*Table structure for table `ref` */

DROP TABLE IF EXISTS `ref`;

CREATE TABLE `ref` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) DEFAULT NULL,
  `descr` varchar(50) DEFAULT NULL,
  `cat` varchar(10) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `param1` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

/*Table structure for table `social` */

DROP TABLE IF EXISTS `social`;

CREATE TABLE `social` (
  `social_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `imagepath` varchar(100) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `reply` varchar(255) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `socialid` varchar(50) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `updated` bigint(20) DEFAULT '201501010101',
  `remotefile` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`social_id`)
) ENGINE=MyISAM AUTO_INCREMENT=907 DEFAULT CHARSET=latin1;

/*Table structure for table `sys_user` */

DROP TABLE IF EXISTS `sys_user`;

CREATE TABLE `sys_user` (
  `user_id` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(5) DEFAULT NULL,
  `create_dt` date DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Table structure for table `system` */

DROP TABLE IF EXISTS `system`;

CREATE TABLE `system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `system_version` int(10) NOT NULL DEFAULT '100',
  `content_version` int(10) NOT NULL DEFAULT '100',
  `library_version` int(10) NOT NULL DEFAULT '100',
  `system_languageid` varchar(100) NOT NULL DEFAULT '1',
  `updated` bigint(20) NOT NULL DEFAULT '201501010101',
  `status` varchar(1) NOT NULL DEFAULT '0',
  `message_frontview` text,
  `message_login` text,
  `message_menu` text,
  `canclick_frontview` varchar(1) NOT NULL DEFAULT '1',
  `canclick_login` varchar(1) NOT NULL DEFAULT '1',
  `canclick_menu` varchar(1) NOT NULL DEFAULT '1',
  `server1` varchar(100) DEFAULT NULL,
  `server2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) DEFAULT NULL,
  `user_fullname` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `login_date` varchar(100) DEFAULT NULL,
  `login_time` varchar(100) DEFAULT NULL,
  `user_languageid` varchar(100) DEFAULT '1',
  `dob` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT '1',
  `height` varchar(100) DEFAULT NULL,
  `weight` varchar(100) DEFAULT NULL,
  `bmi` varchar(100) DEFAULT NULL,
  `activitylevel` varchar(100) DEFAULT NULL,
  `program` varchar(100) DEFAULT NULL,
  `needcalorie` varchar(100) DEFAULT NULL,
  `sync` bigint(20) NOT NULL DEFAULT '201501010101',
  `updated` bigint(20) NOT NULL DEFAULT '201501010101',
  `activation` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Table structure for table `userdata` */

DROP TABLE IF EXISTS `userdata`;

CREATE TABLE `userdata` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT '1',
  `height` varchar(100) DEFAULT NULL,
  `weight` varchar(100) DEFAULT NULL,
  `bmi` varchar(100) DEFAULT NULL,
  `activitylevel` varchar(100) DEFAULT NULL,
  `program` varchar(100) DEFAULT NULL,
  `needcalorie` varchar(100) DEFAULT NULL,
  `updated` bigint(20) NOT NULL DEFAULT '201501010101',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36078 DEFAULT CHARSET=latin1;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `activation` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `activation` (`activation`)
) ENGINE=MyISAM AUTO_INCREMENT=51455 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
