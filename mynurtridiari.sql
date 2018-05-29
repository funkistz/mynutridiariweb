/*
SQLyog Community v12.2.4 (32 bit)
MySQL - 5.6.40 : Database - mynutridiari
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mynutridiari` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mynutridiari`;

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

/*Data for the table `bul` */

insert  into `bul`(`id`,`title`,`summary`,`create_dt`,`update_dt`,`create_by`,`status`,`cat`,`hits`,`pub_cat`) values 
(133,'xx','<p>xx</p>\r\n','2014-07-26 00:21:06','2014-08-08 17:50:58',NULL,'y','1',NULL,NULL),
(134,'About Us','<p>test</p>\r\n','2014-08-06 12:05:24','2014-08-26 11:16:45',NULL,'y','1',NULL,NULL),
(135,'Contact Us','<p>test</p>\r\n','2014-08-06 12:17:39','2014-08-26 11:11:40',NULL,'y','1',NULL,NULL);

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

/*Data for the table `bul_comment` */

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

/*Data for the table `bul_content` */

insert  into `bul_content`(`id`,`bul_id`,`page`,`content`,`contentx`) values 
(196,133,1,'<p style=\"background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><img alt=\"\" src=\"images/phonegap.png\" /></p>\r\n\r\n<hr />\r\n<p><img alt=\"\" src=\"images/angularjs.png\" /></p>\r\n\r\n<hr />\r\n<p><img alt=\"\" src=\"images/phpfw.png\" /></p>\r\n',NULL),
(197,134,1,'<legend>About Us</legend>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>At the Favourite Trainer, we have been helping businesses become more competitive for over 14 years.</p>\r\n\r\n<h3>A wealth of expertise</h3>\r\n\r\n<p>As the training arm of Opensoft Technologies Sdn Bhd, a complete IT company dedicated to transforming skills across the hospitality, passenger transport, travel and tourism industries, our programmes are based on world-class research into the skills and training needs of service-centred businesses.</p>\r\n\r\n<p>When you invest in our training, the profits are reinvested into developing great training programmes for your industry &ndash; not paid in shareholder dividends or bonuses as in many private companies.<br />\r\n&nbsp;</p>\r\n\r\n<h3>Outstanding reputation and value</h3>\r\n\r\n<p>We specialise in trainer training, management development and training for customer-facing staff. All of our trainers are quality assured, and have been tested on their ability to deliver top-quality training programmes.</p>\r\n\r\n<p>Not only have we gained an exceptional reputation for delivering the best nationally-recognised trainer training programmes in the UK, but recent competitor analysis shows that we are one of the best value providers for our industries</p>\r\n\r\n<p>We are totally committed to quality, value for money and flexibility &ndash; that&rsquo;s at the heart of everything that we do.<br />\r\n&nbsp;</p>\r\n\r\n<h3>Flexible approach to training</h3>\r\n\r\n<p>Our flexible approach to training will help you meet your specific training needs and deliver maximum return on investment.</p>\r\n\r\n<p>Whether it&rsquo;s sending your staff on an open programme through our network of licensed trainers, delivering in-company training or developing a bespoke programme that fits perfectly with your existing in-house training, we will make sure that our training works for you.</p>\r\n\r\n<p>If you would like find out more about how our internationally-recognised training programmes could help your business, we would love to hear from you.</p>\r\n',NULL),
(198,135,1,'<div class=\"span6 contact\">\r\n<h2>Contact us</h2>\r\n\r\n<address class=\"postal\"><b>Favourite Trainer Sdn Bhd</b><br />\r\nNo 8A, Taman Kinrara,<br />\r\n47100 Puchong,<br />\r\nselangor</address>\r\n\r\n<address class=\"tel\"><b>T:</b> 603 - 58807209</address>\r\n\r\n<address class=\"email\"><b>E:</b> <a href=\"mailto:enquiries@people1sttraining.co.uk?subject=\">enquiries@favouritetrainer.com</a></address>\r\n</div>\r\n',NULL);

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
  `cartdate` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `updated` int(11) NOT NULL DEFAULT '20150101',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `cart` */

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

/*Data for the table `cat` */

insert  into `cat`(`id`,`title`,`parent_id`,`level`,`published`,`access`,`sort`,`img_src`,`cat_type`,`menu_loc`,`target`) values 
(1,'Utama',NULL,0,'p','',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` varchar(100) DEFAULT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `category_icon` varchar(100) DEFAULT NULL,
  `category_info` varchar(100) DEFAULT NULL,
  `category_type` varchar(100) DEFAULT '1',
  `category_icon_done` varchar(100) DEFAULT NULL,
  `category_position` int(11) DEFAULT '100',
  `updated` int(10) DEFAULT '20150101',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

insert  into `categories`(`id`,`category_id`,`category_name`,`category_icon`,`category_info`,`category_type`,`category_icon_done`,`category_position`,`updated`) values 
(1,'1','\"Pengenalan MyNutriDiari\"|\"Intro to MyNutriDiari\"','/images/menu/menu-1.png',NULL,'1',NULL,1,20150101),
(2,'2','\"Panduan MyNutriDiari\"|\"MyNutriDiari Tutorial\"','/images/menu/menu-2.png',NULL,'2',NULL,2,20150101),
(3,'5','\"Resipi Sihat \"|\"Healthy Recipes\"','/images/menu/menu-5.png',NULL,'5',NULL,9,20150101),
(4,'12','\"Profil Ku \"|\"My Profile\"','/images/menu/menu-12.png',NULL,'12','/images/menu/menu-12-done.png',4,20150101),
(5,'3','\"Pengiraan BMI\"|\"BMI Calculator\"','/images/menu/menu-3.png',NULL,'3','/images/menu/menu-3-done.png',5,20150101),
(6,'4','\"Keperluan Kalori\"|\"Calorie Requirement\"','/images/menu/menu-4.png',NULL,'4','/images/menu/menu-4-done.png',6,20150101),
(7,'6','\"Aktiviti Pemakanan\"|\"Nutrition Activities\"','/images/menu/menu-6.png',NULL,'6',NULL,12,20150101),
(8,'7','\"Panduan Diet Malaysia\"|\"Malaysian Dietary Guidelines\"','/images/menu/menu-7.png',NULL,'7',NULL,7,20150101),
(9,'8','\"Pembakaran Kalori\"|\"Calorie Burning\"','/images/menu/menu-8.png',NULL,'8',NULL,10,20150101),
(10,'9','\"Fakta Makanan\"|\"Food Facts\"','/images/menu/menu-9.png',NULL,'9',NULL,11,20150101),
(11,'10','\"Menu Sihat\"|\"Healthy Menu\"','/images/menu/menu-10.png',NULL,'10\n',NULL,8,20150101),
(12,'11','\"Video Sihat\"|\"Healthy Videos\"','/images/menu/menu-11.png',NULL,'11',NULL,13,20150101),
(13,'13','\"Video Cara Penggunaan\"|\"Tutorial Videos\"','/images/menu/menu-11.png',NULL,'13',NULL,3,20150101);

/*Table structure for table `content` */

DROP TABLE IF EXISTS `content`;

CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_title` varchar(100) DEFAULT NULL,
  `content_intro` varchar(100) DEFAULT NULL,
  `content_full` varchar(100) DEFAULT NULL,
  `content_datetime` varchar(100) DEFAULT NULL,
  `updated` int(10) DEFAULT '20150101',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `content` */

insert  into `content`(`id`,`content_title`,`content_intro`,`content_full`,`content_datetime`,`updated`) values 
(1,'About Us','<p>ABout Us</p>',NULL,'2014-03-12 15:46:51',20150101),
(2,'FAQ',NULL,NULL,'2014-03-12 15:48:10',20150101);

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `code` varchar(10) DEFAULT NULL,
  `cat` varchar(10) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `od` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `course` */

insert  into `course`(`code`,`cat`,`title`,`tags`,`od`) values 
('PHP001','PHP','PHP Basic','php,programming',1),
('PHP002','PHP','PHP Advanced',NULL,2),
('PHP003','PHP','PHP Security',NULL,3),
('PHP004','PHP','Yii Framework',NULL,7),
('PHP005','PHP','Laravel Framework (Basic)',NULL,5),
('PHP006','PHP','Laravel Framework (Advanced)',NULL,6),
('PHP007','PHP','Yii Framework Advanced',NULL,8),
('PHP008','PHP','Codeigniter Basic',NULL,9),
('PHP009','PHP','Codeigniter Advanced',NULL,10),
('PHP010','PHP','Zend Framework Basic',NULL,11),
('PHP011','PHP','Zend Framework Advanced',NULL,12),
('JAVA001','JAVA','Java Standard Edition (Basic)',NULL,NULL),
('JAVA002','JAVA','java Standard Edition (Advanced)',NULL,NULL),
('JAVA003','JAVA','Java Enterprise Edition (Basic)',NULL,NULL),
('JAVA004','JAVA','Java Enterprise Edition (Advanced)',NULL,NULL),
('JAVA005','JAVA','Stripes Framework (Basic)',NULL,NULL),
('JAVA006','JAVA','Stripes Framework (Advanced)',NULL,NULL),
('JAVA007','JAVA','Spring Framework (Basic)',NULL,NULL),
('JAVA008','JAVA','Spring Framework (Advanced)',NULL,NULL),
('MUL001','MUL','Adobe Photoshop',NULL,NULL);

/*Table structure for table `diaridata` */

DROP TABLE IF EXISTS `diaridata`;

CREATE TABLE `diaridata` (
  `diaridata_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` bigint(20) DEFAULT NULL,
  `type` varchar(100) DEFAULT 'NONE',
  `info1` varchar(100) DEFAULT NULL,
  `info2` varchar(100) DEFAULT NULL,
  `info3` varchar(100) DEFAULT NULL,
  `info4` varchar(100) DEFAULT NULL,
  `info5` varchar(100) DEFAULT NULL,
  `diaridate` varchar(100) DEFAULT NULL,
  `diaritime` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `diaridatevalue` int(11) DEFAULT NULL,
  `updated` bigint(20) DEFAULT '201501010101',
  PRIMARY KEY (`diaridata_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `diaridata` */

insert  into `diaridata`(`diaridata_id`,`id`,`type`,`info1`,`info2`,`info3`,`info4`,`info5`,`diaridate`,`diaritime`,`username`,`diaridatevalue`,`updated`) values 
(1,1,'CALORIE','1950.0','1900','50','300','5','24-01-2015','10:00:00','hezlym@yahoo.com',20150124,201501010101),
(2,2,'CALORIE','1950.0','2100','-150','100','4','22-01-2015','10:00:00','hezlym@yahoo.com',20150122,201501010101),
(3,3,'CALORIE','1950.0','1850','100','200','8','19-01-2015','10:00:00','hezlym@yahoo.com',20150119,201501010101),
(4,4,'WEIGHT','65.0\n','1.55','27.1',NULL,NULL,'15-09-2014','10:00:00','hezlym@yahoo.com',20140915,201501010101),
(5,5,'WEIGHT','67.0','1.55','27.9',NULL,NULL,'23-12-2014','10:00:00','hezlym@yahoo.com',20141223,201501010101),
(6,6,'WEIGHT','66.0','1.55','27.5',NULL,NULL,'21-01-2015','10:00:00','hezlym@yahoo.com',20150121,201501010101),
(7,7,'CALORIE','1950.0','1900','50','0','2','09-01-2015','10:00:00','hezlym@yahoo.com',20150109,201501010101),
(8,8,'CALORIE','1950.0','2000','-50','100','5','23-01-2015','10:00:00','hezlym@yahoo.com',20150123,201501010101),
(9,9,'WEIGHT','68','1.55','27.8',NULL,NULL,'29-01-2015','10:00:00','hezlym@yahoo.com',20150129,201501010101),
(10,10,'WEIGHT','65.5','1.55','27.1',NULL,NULL,'01-02-2015','10:00:00','hezlym@yahoo.com\n',20150201,201501010101),
(11,11,'WEIGHT','65','155','27.1',NULL,NULL,'02-02-2015','10:00:00','hezlym@yahoo.com',20150202,201501010101);

/*Table structure for table `excercise` */

DROP TABLE IF EXISTS `excercise`;

CREATE TABLE `excercise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `excercise` */

/*Table structure for table `exercise` */

DROP TABLE IF EXISTS `exercise`;

CREATE TABLE `exercise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_name` varchar(100) DEFAULT NULL,
  `exercise_info` varchar(100) DEFAULT NULL,
  `exercise_calories` varchar(100) DEFAULT NULL,
  `exercise_icon` varchar(100) DEFAULT NULL,
  `updated` int(10) DEFAULT '20150101',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `exercise` */

insert  into `exercise`(`id`,`exercise_name`,`exercise_info`,`exercise_calories`,`exercise_icon`,`updated`) values 
(1,'\"Berjalan Perlahan\"|\"Slow Walking\"','\"[2.0 x 3.5 x berat badan] / 200 x masa senaman\"|\"[2.0 x 3.5 x weight] / 200 x exercise time\"','0.035','/images/activity/walking.png',20150101),
(2,'\"Berjalan Laju\"|\"Fast Walking\"','\"[4.3 x 3.5 x berat badan] / 200 x masa senaman\"|\"[4.3 x 3.5 x weight] / 200 x exercise time\"','0.07525','/images/activity/walking.png',20150101),
(3,'\"Berlari atau Joging\"|\"Running or Jogging\"','\"[8.0 x 3.5 x berat badan] / 200 x masa senaman\"|\"[8.0 x 3.5 x weight] / 200 x exercise time\"','0.14','/images/activity/running.png',20150101),
(4,'\"Berbasikal\"|\"Cycling\"','\"[7.5 x 3.5 x berat badan] / 200 x masa senaman\"|\"[7.5 x 3.5 x weight] / 200 x exercise time\"','0.13125','/images/activity/cycling.png',20150101),
(5,'\"Berenang\"|\"Swimming\"','\"[6.0 x 3.5 x berat badan] / 200 x masa senaman\"|\"[6.0 x 3.5 x weight] / 200 x exercise time\"','0.105','/images/activity/swimming.png',20150101),
(6,'\"Senamrobik\"|\"Aerobic Exercise\"','\"[7.3 x 3.5 x berat badan] / 200 x masa senaman\"|\"[7.3 x 3.5 x weight] / 200 x exercise time\"','0.12775','/images/activity/aerobic.png',20150101),
(7,'\"Bermain Badminton\"|\"Playing Badminton\"','\"[5.5 x 3.5 x berat badan] / 200 x masa senaman\"|\"5.5 x 3.5 x weight] / 200 x exercise time\"','0.09625','/images/activity/badminton.png',20150101),
(8,'\"Bermain Bola Sepak\"|\"Playing Soccer\"','\"[4.0 x 3.5 x berat badan] / 200 x masa senaman\"|\"[4.0 x 3.5 x weight] / 200 x exercise time\"','0.07','/images/activity/soccer.png',20150101),
(9,'\"Yoga\"|\"Yoga\"','\"[3.3 x 3.5 x berat badan] / 200 x masa senaman\"|\"[3.3 x 3.5 x weight] / 200 x exercise time\"','0.05775','/images/activity/yoga.png',20150101),
(10,'\"Melakukan Kerja Rumah\"|\"Doing House Work\"','\"[3.5 x 3.5 x berat badan] / 200 x masa senaman\"|\"[3.5 x 3.5 x weight] / 200 x exercise time\"','0.06125','/images/activity/housework.png',20150101);

/*Table structure for table `food` */

DROP TABLE IF EXISTS `food`;

CREATE TABLE `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `brand_icon` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `calorie` decimal(4,1) DEFAULT NULL,
  `carb` decimal(4,1) DEFAULT NULL,
  `protein` decimal(4,1) DEFAULT NULL,
  `fat` decimal(4,1) DEFAULT NULL,
  `sat` decimal(4,1) DEFAULT NULL,
  `pufa` decimal(4,1) DEFAULT NULL,
  `mufa` decimal(4,1) DEFAULT NULL,
  `chol` decimal(4,1) DEFAULT NULL,
  `sodium` decimal(4,1) DEFAULT NULL,
  `sugar` decimal(4,1) DEFAULT NULL,
  `fiber` decimal(4,1) DEFAULT NULL,
  `vb` decimal(4,1) DEFAULT NULL,
  `vc` decimal(4,1) DEFAULT NULL,
  `calcium` decimal(4,1) DEFAULT NULL,
  `iron` decimal(4,1) DEFAULT NULL,
  `salt` decimal(4,1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `food` */

/*Table structure for table `food_malaysia` */

DROP TABLE IF EXISTS `food_malaysia`;

CREATE TABLE `food_malaysia` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(100) DEFAULT NULL,
  `food_info` varchar(100) DEFAULT NULL,
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
  `updated` int(10) DEFAULT '20150101',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=330 DEFAULT CHARSET=latin1;

/*Data for the table `food_malaysia` */

insert  into `food_malaysia`(`id`,`food_name`,`food_info`,`food_measurement`,`food_weight`,`food_calorie`,`food_carbo`,`food_protein`,`food_fat`,`food_cholesterol`,`food_sugar`,`food_salt`,`food_type`,`food_calorie_level`,`food_icon`,`updated`) values 
(1,'Bubur ayam',NULL,'1 mangkuk','500','190',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(2,'Bubur daging',NULL,'1 mangkuk','500','190',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(3,'Bubur ikan',NULL,'1 mangkuk','500','180',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(4,'Ketupat nasi',NULL,'8 kiub kecil','50','80',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(5,'Ketupat pulut',NULL,'1 biji','50','130',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(6,'Lemang',NULL,'1 potong','30','100',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(7,'Lontong',NULL,'1 mangkuk','250','260',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(8,'Nasi ayam',NULL,'1 pinggan','480','440',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','3',NULL,NULL),
(9,'Nasi beriani',NULL,'2 senduk','150','270',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(10,'Nasi beriyani',NULL,'1 set','245','440',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','3',NULL,NULL),
(11,'Nasi dagang',NULL,'1 pinggan','250','510',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','3',NULL,NULL),
(12,'Nasi goreng',NULL,'1 pinggan','330','640',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','4',NULL,NULL),
(13,'Nasi goreng kampung',NULL,'1 pinggan','325','630',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','4',NULL,NULL),
(14,'Nasi goreng paprik',NULL,'1 pinggan','300','390',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(15,'Nasi goreng pattaya',NULL,'1 pinggan','320','605',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','4',NULL,NULL),
(16,'Nasi goreng USA',NULL,'1 pinggan','415','670',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','4',NULL,NULL),
(17,'Nasi kerabu',NULL,'1 pinggan (set)','260','310',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(18,'Nasi lemak',NULL,'1 pinggan','260','475',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','3',NULL,NULL),
(19,'Nasi minyak',NULL,'1 pinggan (set)','200','365',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(20,'Nasi ponggal',NULL,'2 senduk','150','165',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(21,'Nasi putih',NULL,'2 senduk','150','200','45','3.5','0.19',NULL,NULL,'9.4','Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(22,'Nasi tomato',NULL,'1 pinggan','240','420',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','3',NULL,NULL),
(23,'Oat dalam tin',NULL,'1 sudu makan','6','21','4.1','0.7','0.2',NULL,NULL,'0','Nasi/ Bubur Nasi/ Oat','1',NULL,NULL),
(24,'Oat digelek (Rolled oat)',NULL,'1 sudu makan','6','23','4.5','0.6','0.2',NULL,NULL,'0','Nasi/ Bubur Nasi/ Oat','1',NULL,NULL),
(25,'Pulut kuning',NULL,'1 senduk','50','130',NULL,NULL,NULL,NULL,NULL,NULL,'Nasi/ Bubur Nasi/ Oat','2',NULL,NULL),
(26,'Bihun goreng',NULL,'1 pinggan','170','295',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(27,'Bihun goreng putih',NULL,'1 pinggan','190','320',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(28,'Bihun sup',NULL,'1 mangkuk','375','275',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(29,'Bihun tom yam',NULL,'1 mangkuk','375','230',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(30,'Char kuetiau',NULL,'1 pinggan','220','420',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','3',NULL,NULL),
(31,'Kuetiau goreng',NULL,'1 pinggan','170','320',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(32,'Kuetiau sup',NULL,'1 mangkuk','320','180',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(33,'Laksa Johor',NULL,'1 mangkuk','250','330',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(34,'Laksa Penang',NULL,'1 mangkuk','250','240',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(35,'Laksam',NULL,'1 mangkuk','250','300',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(36,'Mi bandung',NULL,'1 mangkuk','450','550',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','3',NULL,NULL),
(37,'Mi goreng',NULL,'1 pinggan','380','480',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','3',NULL,NULL),
(38,'Mi goreng (Cheong sow mien)',NULL,'2 senduk','100','180',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(39,'Mi goreng mamak',NULL,'1 pinggan','420','550',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','3',NULL,NULL),
(40,'Mi hailam',NULL,'1 mangkuk','250','340',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(41,'Mi kari',NULL,'1 mangkuk','360','460',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','3',NULL,NULL),
(42,'Mi kung fu',NULL,'1 mangkuk','250','220',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(43,'Mi rebus',NULL,'1 mangkuk','320','420',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','3',NULL,NULL),
(44,'Mi sup',NULL,'1 mangkuk','560','390',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(45,'Mi tom yam',NULL,'1 mangkuk','400','278',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(46,'Mi wantan',NULL,'1 mangkuk','450','240',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(47,'Rojak mi',NULL,'1 pinggan','330','750',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','4',NULL,NULL),
(48,'Spageti bersama sos',NULL,'1 pinggan','230','395',NULL,NULL,NULL,NULL,NULL,NULL,'Mi/ Kuetiau/ Bihun dan Lain-lain','2',NULL,NULL),
(49,'Ban kelapa',NULL,'1 biji','45','231','21.6','6.1','13.4',NULL,NULL,'34','Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(50,'Ban manis',NULL,'1 biji','35','100',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(51,'Bijirin sarapan',NULL,'1 mangkuk','35','135',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(52,'Capati bersama kuah dhal',NULL,'1 keping','90','190',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','3',NULL,NULL),
(53,'Capati',NULL,'1 keping','50','150',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(54,'Idiappam (putu mayam)',NULL,'1 keping','50','70',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(55,'Idli',NULL,'1 keping','75','85',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(56,'Pastri',NULL,'1 biji','50','180',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','3',NULL,NULL),
(57,'Poori',NULL,'1 keping','40','105',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(58,'Puttu',NULL,'1 keping','70','145',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(59,'Putu mayam bersama gula',NULL,'1 keping','55','90',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(60,'Ragi thosai',NULL,'1 keping','45','85',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(61,'Rasam',NULL,'1 mangkuk kecil','50','25',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','1',NULL,NULL),
(62,'Rava thosai',NULL,'1 keping','80','180',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','3',NULL,NULL),
(63,'Rava upma',NULL,'1 senduk','50','65',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(64,'Roti canai kosong',NULL,'1 keping','95','300',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','3',NULL,NULL),
(65,'Roti gandum penuh',NULL,'2 keping','60','140',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(66,'Roti jala',NULL,'3 keping','50','70',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(67,'Roti naan',NULL,'1 set','170','420',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','3',NULL,NULL),
(68,'Roti mil penuh (wholemeal)',NULL,'1 keping','25','60','12.6','2.1','0.2',NULL,NULL,'78','Pastri/ Roti dan Hidangan Sampingan','1',NULL,NULL),
(69,'Roti mil rai (ryemeal)',NULL,'1 keping','30','78','15.3','3.2','0.5',NULL,NULL,'121','Pastri/ Roti dan Hidangan Sampingan','1',NULL,NULL),
(70,'Roti putih',NULL,'2 keping','60','150',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(71,'Tosai',NULL,'1 keping','80','120',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','2',NULL,NULL),
(72,'Waffle',NULL,'1 keping','75','220',NULL,NULL,NULL,NULL,NULL,NULL,'Pastri/ Roti dan Hidangan Sampingan','3',NULL,NULL),
(73,'Ayam goreng',NULL,'1 ketul','90','190',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(74,'Ayam kukus bersama kulit',NULL,'2 keping','50','80',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(75,'Ayam masak kari',NULL,'1 ketul','120','290',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(76,'Ayam masak kicap',NULL,'1 ketul','110','200',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(77,'Ayam masak kurma',NULL,'1 ketul','120','180',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(78,'Ayam masak merah',NULL,'1 ketul','100','210',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(79,'Ayam panggang (dengan kulit)',NULL,'2 keping','50','100',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(80,'Ayam percik',NULL,'1 ketul','80','140',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(81,'Ba Kut Teh',NULL,'1 mangkuk','460','350',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(82,'Braised pork in soy with egg',NULL,'2 sudu makan','50','90',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(83,'Braised slices of abalone',NULL,'3 keping','20','20',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(84,'Chicken chop',NULL,'1 set','170','490',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','3',NULL,NULL),
(85,'Daging masak black pepper',NULL,'2 ketul','100','190',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(86,'Daging masak kari',NULL,'2 ketul','100','150',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(87,'Daging masak kicap',NULL,'2 ketul','100','150',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(88,'Daging masak rendang',NULL,'2 ketul','100','200',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(89,'Fish maw soup',NULL,'1 mangkuk kecil','80','40',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(90,'Gulai ayam bersama kuah',NULL,'1 ketul','130','310',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(91,'Gulai kambing bersama kuah',NULL,'2 senduk','90','155',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(92,'Hati ayam masak kicap',NULL,'2 ketul','65','180',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(93,'Ikan bakar',NULL,'1 ekor','120','90',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(94,'Ikan goreng',NULL,'1 keping','80','200',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(95,'Ikan kukus',NULL,'2 sudu Cina','20','30',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(96,'Ikan masak asam pedas',NULL,'1 keping','70','130',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(97,'Ikan masak kari',NULL,'1 keping','80g','70',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(98,'Ikan masak kicap',NULL,'1 keping','60','120',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(99,'Ikan masak sambal',NULL,'1 keping','60','130',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(100,'Itik panggang (dengan kulit)',NULL,'2 keping','50','110',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(101,'Kambing masak kari',NULL,'1 ketul','80','135',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(102,'Ketam masak cili',NULL,'2 ekor','100','140',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(103,'Kupang masak sambal',NULL,'1 senduk','60','95',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(104,'Lala masak masam manis',NULL,'1 senduk','55','50',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(105,'Lamb chop',NULL,'1 set','100','305',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(106,'Lidah itik',NULL,'1 ketul','10','195',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(107,'Paru goreng berlada',NULL,'1 senduk','60','270',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(108,'Peratal ayam',NULL,'1 ketul','40','70',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(109,'Rendang tok',NULL,'2 ketul','60','80',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(110,'Rendidih gamat bersama cendawan',NULL,'2 sudu Cina','40','40',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(111,'Rendidih tiram kering bersama black sea moss dan cendawan',NULL,'2 sudu Cina','40','50',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(112,'Roasted pork belly',NULL,'3 keping','30','120',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(113,'Roasted suckling pig',NULL,'2 keping','80','300',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(114,'Sate',NULL,'5 cucuk','80','200',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(115,'Serunding daging',NULL,'1 sudu makan','30','80',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(116,'Siput masak cili api',NULL,'1 senduk','55','60',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(117,'Sosej Cina  Lap cheong',NULL,'4 keping sosej','20','110',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(118,'Sotong goreng tepung',NULL,'1 senduk','60','150',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(119,'Sotong masak sambal',NULL,'1 senduk','50','60',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(120,'Sup ayam atau daging',NULL,'1 mangkuk','150','85',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(121,'Sup ekor',NULL,'1 mangkuk','150','120',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(122,'Sup tulang',NULL,'1 mangkuk','150','75',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(123,'Tom yam campur',NULL,'1 mangkuk','150','100',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','1',NULL,NULL),
(124,'Udang goreng mentega',NULL,'3 ketul','60','120',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(125,'Udang kukus bersama wain putih',NULL,'3 ekor','140','235',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(126,'Udang masak sambal',NULL,'1 senduk','50','120',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(127,'Udang tempura',NULL,'3 ekor','60','120',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(128,'Waxed duck',NULL,'2 keping','50','125',NULL,NULL,NULL,NULL,NULL,NULL,'Ayam/ Daging/ Ikan/ Makanan Laut','2',NULL,NULL),
(129,'Telur separuh masak',NULL,'1 biji','50','80',NULL,NULL,NULL,NULL,NULL,NULL,'Telur','1',NULL,NULL),
(130,'Telur asin',NULL,'1 biji','50','95',NULL,NULL,NULL,NULL,NULL,NULL,'Telur','1',NULL,NULL),
(131,'Telur dadar',NULL,'1 potong','65','190',NULL,NULL,NULL,NULL,NULL,NULL,'Telur','2',NULL,NULL),
(132,'Telur goreng',NULL,'1 biji','50','100',NULL,NULL,NULL,NULL,NULL,NULL,'Telur','1',NULL,NULL),
(133,'Telur hancur',NULL,'2 biji','90','195',NULL,NULL,NULL,NULL,NULL,NULL,'Telur','2',NULL,NULL),
(134,'Telur rebus',NULL,'1 biji','50','75',NULL,NULL,NULL,NULL,NULL,NULL,'Telur','1',NULL,NULL),
(135,'Acar jelatah',NULL,'1 senduk','50','80',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(136,'Acar sayur-sayuran',NULL,'1 sudu makan','15','10',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(137,'Bayam goreng',NULL,'1 senduk','40','40',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(138,'Cendawan tiram goreng',NULL,'1 senduk','40','40',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(139,'Chap chye Zhai choy',NULL,'2 sudu Cina','40','35',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(140,'Dalca sayur',NULL,'1 senduk','40','70',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(141,'Daun bawang Cina goreng bersama udang',NULL,'2 sudu Cina','40','45',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(142,'Kacang bendi goreng',NULL,'1 senduk','40','40',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(143,'Kacang buncis goreng',NULL,'1 senduk','40','40',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(144,'Kacang panjang goreng ala India',NULL,'1 sudu makan','15','20',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(145,'Kailan goreng ikan masin',NULL,'1 senduk','40','60',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(146,'Kangkung goreng',NULL,'1 senduk','40','40',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(147,'Kari dhal',NULL,'1 sudu makan','10','25',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(148,'Kari sayur',NULL,'1 senduk','40','50',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(149,'Keladi masak asam rebus',NULL,'1 senduk','50','30',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(150,'Kerabu',NULL,'1 cawan','60','20',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(151,'Kobis goreng',NULL,'1 senduk','40','40',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(152,'Kobis goreng bersama lobak merah',NULL,'1 sudu makan','15','10',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(153,'Papadam',NULL,'1 keping','5','40',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(154,'Peria goreng',NULL,'3 keping','10','10',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(155,'Peria goreng telur',NULL,'1 senduk','40','70',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(156,'Rasam',NULL,'1 mangkuk','50','25',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(157,'Rendidih sayur campur  Luo han zhai',NULL,'2 sudu Cina','40','95',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(158,'Salad sayur-sayuran',NULL,'1 sudu makan','15','10',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(159,'Sambal tempe, tauhu',NULL,'1 senduk','80','200',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','2',NULL,NULL),
(160,'Sambhar',NULL,'1 sudu makan','10','10',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(161,'Sawi goreng',NULL,'1 senduk','40','40',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(162,'Sayur campur',NULL,'1 senduk','40','40',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(163,'Sup sayur',NULL,'1 mangkuk','150','50',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(164,'Sup ubi teratai bersama kacang tanah dan kurma merah',NULL,'1 mangkuk kecil','80','40',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(165,'Tauhu, fucuk, suhun tumis air',NULL,'1 senduk','50','40',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(166,'Ulam',NULL,'1 cawan','30','10',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(167,'Yee sang',NULL,'2 sudu Cina','40','60',NULL,NULL,NULL,NULL,NULL,NULL,'Sayur-sayuran/ Kekacang','1',NULL,NULL),
(168,'Adhirasam(kuih peneram)',NULL,'1 keping','20','90',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(169,'Apam',NULL,'1 biji','30','60',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(170,'Bahulu',NULL,'3 biji','25','100',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(171,'Bak kwa ayam mini',NULL,'1 keping','40','150',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(172,'Bak kwa, pork',NULL,'1 keping','90','370',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(173,'Biskut bentuk abjad/Biskut ABC',NULL,'10 keping','10','32','6','0.5','0.7',NULL,NULL,'13','Snek','1',NULL,NULL),
(174,'Biskut bijan',NULL,'3 keping','15','66','12','1.2','1.2',NULL,NULL,'3','Snek','2',NULL,NULL),
(175,'Biskut Empingan Jagung (Cornflakes)',NULL,'3 keping','20','117','12','1.5','6.9',NULL,NULL,'60','Snek','2',NULL,NULL),
(176,'Biskut gajus',NULL,'3 keping','20','108','12','1.5','6',NULL,NULL,'60','Snek','2',NULL,NULL),
(177,'Biskut gandum penuh',NULL,'3 keping','35','120',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(178,'Biskut jejari berkrim',NULL,'3 keping','35','155','25.3','1.6','5.3',NULL,NULL,'59.4','Snek','3',NULL,NULL),
(179,'Biskut kacang dan kelapa',NULL,'1 keping','20','96','14.4','2','3.3',NULL,NULL,'34','Snek','2',NULL,NULL),
(180,'Biskut kacang',NULL,'2 keping','20','98','1.2','4.8','12.4',NULL,NULL,'2','Snek','2',NULL,NULL),
(181,'Biskut kacang hijau',NULL,'1 keping','20','79','19.2','0.5','0',NULL,NULL,'2','Snek','2',NULL,NULL),
(182,'Biskut kelapa',NULL,'1 keping','30','176','10.5','6.7','11.9',NULL,NULL,'9.3','Snek','3',NULL,NULL),
(183,'Biskut kraker tawar',NULL,'3 keping','28','115','20.7','2.4','2.5',NULL,NULL,'123.6','Snek','2',NULL,NULL),
(184,'Biskut krim kraker',NULL,'3 keping','28','121','18.1','2.2','3.2',NULL,NULL,'27.7','Snek','2',NULL,NULL),
(185,'Biskut \"lemon puff\"',NULL,'3 keping','35','164','25.6','1.5','6.2',NULL,NULL,'50.4','Snek','3',NULL,NULL),
(186,'Biskut marie/Biskut manis',NULL,'3 keping','20','96','17.1','1.5','2.4',NULL,NULL,'54','Snek','2',NULL,NULL),
(187,'Biskut oat',NULL,'1 keping','15','67','8.1','1','3.4',NULL,NULL,'44','Snek','2',NULL,NULL),
(188,'Biskut sultana',NULL,'3 keping','20','85.8','16.3','1.3','1.7',NULL,NULL,'39','Snek','2',NULL,NULL),
(189,'Buah jeruk',NULL,'1 biji','140','70',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(190,'Buah melaka (Onde-onde)',NULL,'3 biji','45','90',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(191,'Cantonese peanut puffs/ Kok chai',NULL,'4 biji','90','420',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','4',NULL,NULL),
(192,'Coconut candy',NULL,'1 potong','20','75',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(193,'Cucur udang',NULL,'1 ketul','50','130',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(194,'Dadih berperisa',NULL,'1 bekas','170','140',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(195,'Deep fried arrow head',NULL,'1 mangkuk kecil','30','140',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(196,'Dodol',NULL,'1 potong','20','70',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(197,'Donat',NULL,'1 biji','55','200',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(198,'Fortune cookies',NULL,'2 biji','10','38',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(199,'Ghee urundai',NULL,'1 biji','10','50',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(200,'Ghulab jamun',NULL,'1 biji','60','180',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(201,'Glutinous rice ball/ tang yuan',NULL,'1 mangkuk kecil','80','100',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(202,'Halwa',NULL,'1 potong kecil','40','200',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(203,'Jagung (dalam cawan)',NULL,'1 cawan','100','370',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','4',NULL,NULL),
(204,'Jagung rebus',NULL,'1 tongkol','120','110',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(205,'Jilebi',NULL,'1 keping','20','40',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(206,'Kacang gajus (panggang dengan minyak)',NULL,'1 mangkuk kecil','40','230',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(207,'Kacang kuda',NULL,'? cawan','60','125',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(208,'Kacang pea',NULL,'1 sudu makan','10','35',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(209,'Kacang pistachio (panggang)',NULL,'1 mangkuk kecil','30','160',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(210,'Kacang Shandong',NULL,'1 sudu makan','10','40',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(211,'Kacang tanah (panggang)',NULL,'1 mangkuk kecil','30','170',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(212,'Kadalai urundai',NULL,'1 biji','10','50',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(213,'Karipap',NULL,'1 ketul','40','130',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(214,'Kek buah',NULL,'1 potong','40','130',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(215,'Kek cawan',NULL,'1 biji','40','160',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(216,'Kek coklat',NULL,'1 potong','105','580',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','4',NULL,NULL),
(217,'Kek keju',NULL,'1 potong','120','400',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','4',NULL,NULL),
(218,'Kek span',NULL,'1 potong','15','70',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(219,'Kekacang campuran (panggang)',NULL,'1 mangkuk kecil','40','220',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(220,'Kerepek kentang',NULL,'3 keping','10','50',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(221,'Kerepek pisang',NULL,'1 piring','50','260',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(222,'Kerepek ubi masin',NULL,'1 piring','50','220',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(223,'Kerepek ubi pedas',NULL,'1 piring','50','300',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(224,'Keropok ikan',NULL,'5 keping','30','150',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(225,'Keropok lekor',NULL,'3 ketul','70','210',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(226,'Keropok udang',NULL,'2 keping besar','40','170',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(227,'Kesari',NULL,'1 keping','40','110',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(228,'Kua-ci',NULL,'1 mangkuk kecil','60','135',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(229,'Kuih bakul goreng/ Zha nian gao',NULL,'1 keping','50','220',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(230,'Kuih bakul/ Nian gao',NULL,'1 biji','300','690',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','4',NULL,NULL),
(231,'Kuih bangkit',NULL,'4 biji','20','90',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(232,'Kuih bom',NULL,'1 biji besar','40','135',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(233,'Kuih kacang',NULL,'4 biji','40','200',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(234,'Kuih kapit',NULL,'4 keping','50','210',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(235,'Kuih lapis',NULL,'1 potong','60','90',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(236,'Kuih lobak putih',NULL,'1 potong','80','160',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(237,'Kuih loyang',NULL,'3 keping','30','150',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(238,'Kuih talam',NULL,'1 potong','35','75',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(239,'Ladoo',NULL,'1 biji','40','180',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(240,'Longan with sea coconut',NULL,'1 mangkuk kecil','80','40',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(241,'Longan, magnolia petals, red dates and snow fungus dessert',NULL,'1 mangkuk kecil','80','40',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(242,'Masala peanuts',NULL,'1 sudu makan','10','50',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(243,'Masala vadai',NULL,'1 keping','30','100',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(244,'Murtabak',NULL,'1 keping','145','230',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(245,'Muruku',NULL,'1 keping','20','120',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(246,'Muruku campur',NULL,'1 sudu makan','10','50',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(247,'Mysore Pak',NULL,'1 keping','90','345',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','4',NULL,NULL),
(248,'Omapodi',NULL,'1 keping','10','40',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(249,'Paal appam',NULL,'1 keping','80','60',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(250,'Paal kova',NULL,'1 potong','40','40',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(251,'Pakoda',NULL,'1 ketul','40','280',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(252,'Pau kukus',NULL,'1 ketul','60','150',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(253,'Pisang goreng',NULL,'3 keping','70','130',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(254,'Pop corn berperisa durian',NULL,'1 paket','30','114','25.9','2.1','0.2',NULL,NULL,'85','Snek','2',NULL,NULL),
(255,'Popiah basah',NULL,'1 ketul','40','70',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(256,'Popiah goreng',NULL,'1 ketul','40','110',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(257,'Popiah udang mini',NULL,'1 mangkuk kecil','40','200',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(258,'Puding roti',NULL,'1 potong','70','85',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(259,'Rawa ladoo',NULL,'1 biji','40','180',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(260,'Rempeyek',NULL,'1 keping','20','60',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(261,'Ribbon pakoda',NULL,'5 keping','10','30',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','1',NULL,NULL),
(262,'Samosa sayur',NULL,'1 ketul','40','120',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(263,'Sandwic',NULL,'1 keping','30','80',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(264,'Snek jagung berperisa ayam',NULL,'1paket','45','227','27.9','2.8','11.5',NULL,NULL,'316','Snek','3',NULL,NULL),
(265,'Snek jagung berperisa coklat',NULL,'1 paket kecil','15','79','9.2','0.8','4.3',NULL,NULL,'3','Snek','2',NULL,NULL),
(266,'Snek jagung berperisa keju',NULL,'1paket','45','225','27.6','4.2','10.8',NULL,NULL,'217','Snek','3',NULL,NULL),
(267,'Snek mi berperisa ayam, Mamee Monster',NULL,'1 paket','30','137','20.4','3.3','4.7',NULL,NULL,'184','Snek','2',NULL,NULL),
(268,'Tat nenas',NULL,'4 biji','30','140',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(269,'The Six Combination Dessert',NULL,'1 mangkuk kecil','80','60',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(270,'Twisted cookies',NULL,'3 keping','30','200',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(271,'Ulunthu vadai',NULL,'1 keping','40','165',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','3',NULL,NULL),
(272,'Vadai',NULL,'1 keping','30','100',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(273,'Yogurt',NULL,'1 bekas','135','115',NULL,NULL,NULL,NULL,NULL,NULL,'Snek','2',NULL,NULL),
(274,'Burger',NULL,'1 set','180','400',NULL,NULL,NULL,NULL,NULL,NULL,'Makanan Barat','3',NULL,NULL),
(275,'Kacang panggang',NULL,'2 sudu makan','50','40',NULL,NULL,NULL,NULL,NULL,NULL,'Makanan Barat','1',NULL,NULL),
(276,'Kentang goreng (French fries)',NULL,'1 cawan','90','290',NULL,NULL,NULL,NULL,NULL,NULL,'Makanan Barat','2',NULL,NULL),
(277,'Nugget',NULL,'5 ketul','90','250',NULL,NULL,NULL,NULL,NULL,NULL,'Makanan Barat','2',NULL,NULL),
(278,'Piza',NULL,'1 keping','53','155',NULL,NULL,NULL,NULL,NULL,NULL,'Makanan Barat','2',NULL,NULL),
(279,'Sosej',NULL,'1 ketul','30','100',NULL,NULL,NULL,NULL,NULL,NULL,'Makanan Barat','1',NULL,NULL),
(280,'Betik',NULL,'1 potong','150','50',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','1',NULL,NULL),
(281,'Buah lai',NULL,'1 biji','170','50',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','1',NULL,NULL),
(282,'Buah limau mandarin',NULL,'1 biji','100','50',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','1',NULL,NULL),
(283,'Epal',NULL,'1 biji','110','60',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','1',NULL,NULL),
(284,'Jambu batu',NULL,'1 potong','60','30',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','1',NULL,NULL),
(285,'Limau bali',NULL,'1 keping','40','10',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','1',NULL,NULL),
(286,'Limau Mandarin',NULL,'1 biji','100','50',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','1',NULL,NULL),
(287,'Oren',NULL,'1 biji','130','40',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','1',NULL,NULL),
(288,'Pisang',NULL,'1 biji','80','60',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','1',NULL,NULL),
(289,'Pisang kaki (Persimmons)',NULL,'1 biji','140','90',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','1',NULL,NULL),
(290,'Pisang kaki kering',NULL,'1 keping','80','195',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','2',NULL,NULL),
(291,'Salad buah-buahan',NULL,'1 sudu makan','15','15',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','1',NULL,NULL),
(292,'Tembikai',NULL,'1 potong','150','40',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','1',NULL,NULL),
(293,'Tembikai susu',NULL,'1 potong','90','40',NULL,NULL,NULL,NULL,NULL,NULL,'Buah-buahan','1',NULL,NULL),
(294,'Air kosong',NULL,'1 gelas','250','0',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','1',NULL,NULL),
(295,'Air Tebu',NULL,'1 gelas','250','184','44.9','1','0',NULL,NULL,'3','Minuman','3',NULL,NULL),
(296,'Bir',NULL,'1 tin','320','106',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(297,'Brandi atau whisky atau rumatau gin atau Vodka',NULL,'1 hidangan (35ml)','35','114',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(298,'Cendol',NULL,'1 gelas','200','215',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','3',NULL,NULL),
(299,'Jus buah',NULL,'1 gelas','250','135',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(300,'Kordial',NULL,'1 gelas','250','140',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(301,'Lai ci kang',NULL,'1 mangkuk','150','110',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(302,'Lassi',NULL,'1 gelas','250','100',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(303,'Minuman  berperisa berkarbonat',NULL,'1 tin','325','130',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(304,'Minuman bercoklat',NULL,'1 gelas','250','105',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(305,'Minuman berkarbonat',NULL,'1 gelas','250','105',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(306,'Minuman berkultur berperisa',NULL,'1 bekas','125','60',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(307,'Minuman bermalta',NULL,'1 gelas','250','110',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(308,'Minuman isotonik',NULL,'1 gelas','250','70',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(309,'Minuman kotak berperisa',NULL,'1 kotak','200','90',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(310,'Minuman perisa berkarbonat',NULL,'1 tin','325','170',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','3',NULL,NULL),
(311,'Minuman soya',NULL,'1 gelas','250','55',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(312,'Minuman susu bermalt, bungkus',NULL,'1 paket','230','234','11.3','4.8','18.8',NULL,NULL,'24','Minuman','3',NULL,NULL),
(313,'Serbuk kopi campuran',NULL,'1 sudu makan','7','28','4.9','0.8','0.6',NULL,NULL,'29','Minuman','2',NULL,NULL),
(314,'Serbuk kopi segera',NULL,'1 sudu teh','1','4','0.9','0.1','0',NULL,NULL,'1','Minuman','2',NULL,NULL),
(315,'Serbuk minuman berperisa oren',NULL,'1 sudu makan','10','44','11','0','0',NULL,NULL,'10','Minuman','2',NULL,NULL),
(316,'Susu penuh krim',NULL,'1 gelas','250','155',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(317,'susu rendah lemak',NULL,'1 gelas','250','130',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(318,'Susu segar',NULL,'1 gelas','250','175',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','3',NULL,NULL),
(319,'Susu skim',NULL,'1 gelas','250','110',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(320,'Syandi',NULL,'1 tin','320','130',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(321,'Teh atau Kopi O',NULL,'1 cawan','200','20',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','1',NULL,NULL),
(322,'Teh atau Kopi susu',NULL,'1 cawan','200','65',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(323,'Teh Cina',NULL,'1 gelas','250','0',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','1',NULL,NULL),
(324,'Teh halia',NULL,'1 cawan','200','25',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','1',NULL,NULL),
(325,'Teh tarik',NULL,'1 gelas','250','125',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(326,'Wain atau tuak',NULL,'1 hidangan (140ml)','140','108',NULL,NULL,NULL,NULL,NULL,NULL,'Minuman','2',NULL,NULL),
(327,'Chutney kelapa',NULL,'1 sudu makan','10','15',NULL,NULL,NULL,NULL,NULL,NULL,'Sos','1',NULL,NULL),
(328,'Kuah kacang',NULL,'1 senduk','50','130',NULL,NULL,NULL,NULL,NULL,NULL,'Sos','2',NULL,NULL),
(329,'Kuah dhal',NULL,'1 senduk','40','60',NULL,NULL,NULL,NULL,NULL,NULL,'Sos','2',NULL,NULL);

/*Table structure for table `food_moh` */

DROP TABLE IF EXISTS `food_moh`;

CREATE TABLE `food_moh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) DEFAULT NULL,
  `BARCODE` varchar(100) DEFAULT NULL,
  `PLACE_BOUGHT` varchar(100) DEFAULT NULL,
  `MANUFACTURER` varchar(100) DEFAULT NULL,
  `INGREDIENTS` varchar(100) DEFAULT NULL,
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
  `updated` int(10) DEFAULT '20150101',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=193 DEFAULT CHARSET=latin1;

/*Data for the table `food_moh` */

insert  into `food_moh`(`id`,`NAME`,`BARCODE`,`PLACE_BOUGHT`,`MANUFACTURER`,`INGREDIENTS`,`MEASUREMENT`,`WEIGHT`,`CALORIES`,`CARBOHYDRATE`,`PROTEIN`,`FAT`,`MUFA`,`PUFA`,`CHOLESTEROL`,`SAT`,`TRANS`,`FIBER`,`SUGAR`,`SODIUM`,`VITA`,`VITC`,`CALCIUM`,`IRON`,`ICON`,`DATE`,`updated`) values 
(1,'Khong Guan Extra light family crackers','8450148031',NULL,NULL,NULL,'1 keping','7.2','36','4.2','0.8','1.8','0',NULL,'0','0.8',NULL,'0.2','0.2','38','0','0','0',NULL,NULL,NULL,20150101),
(2,'Pepperidge Farm Milano Mint Chocolate','14100079477',NULL,NULL,NULL,'1 keping','8.3','43.3','5.3','0.3','2.3',NULL,NULL,'1.6','1.3',NULL,'0.3','3.0','11.7',NULL,NULL,NULL,'0.3',NULL,NULL,20150101),
(3,'Soft Baked Captiva Dark ChocolateBrownie','14100082033',NULL,NULL,NULL,'1 keping','31','140','22','1','6',NULL,NULL,'10','3',NULL,'0','10','75','0','0','0','1.72',NULL,NULL,20150101),
(4,'Barbecue Prawn Flavour Stick Biscuits','29173004107',NULL,NULL,NULL,'1 paket','18','89.6','12.4','1.2','3.9',NULL,NULL,'0.0','1.7',NULL,'0.0','0.5','106.7','0.0','0.0','0.0','0.0',NULL,NULL,20150101),
(5,'Vegetable  Stick Biscuits','29173006084',NULL,NULL,NULL,'1 paket','18','86.4','14.4','1.8','2.4',NULL,NULL,'0.0','1.2',NULL,'0.0','0.5','108.0',NULL,NULL,'0.0','0.0',NULL,NULL,20150101),
(6,'EGO Tomato Flavour Stick Biscuit','29173006091',NULL,NULL,NULL,'1 paket','24','126.5','17.6','3.2','4.8','1.6',NULL,NULL,NULL,NULL,NULL,'0.7','144.0',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(7,'EGO Plum Biscuits','29173092452',NULL,NULL,NULL,'3 keping / 1 paket','22','102.5','15.4','1.3','4.0',NULL,NULL,'0.0','2.2',NULL,'0.3','5.1','37.4','0.0','3.1','0.0','0.1',NULL,NULL,20150101),
(8,'EGO  Oat Digestive Crackers Black sesame Flavour','29173092612',NULL,NULL,NULL,'2 keping','24','120.0','14.8','2.1','5.8',NULL,NULL,'0.0','2.3',NULL,'0.4','4.6','94.8',NULL,NULL,'1.0','1.0',NULL,NULL,20150101),
(9,'EGO Cream Filled Biscuits Chocolate Filling','29173094555',NULL,NULL,NULL,'1 paket','18','16.2','2.16','0.18','0.9',NULL,NULL,'2.88','0.36',NULL,'0','0.9','12.6','0','0','2.88','0',NULL,NULL,20150101),
(10,'EGO Taro Sandwich Crackers','29173095149',NULL,NULL,NULL,'2 keping','25','114.75','13.25','3.25','7.25',NULL,NULL,NULL,'1.9',NULL,'0.8','2.3','141',NULL,NULL,'4',NULL,NULL,NULL,20150101),
(11,'Merba Apple Pie Cookies','46214220209',NULL,NULL,NULL,'2 keping','17','30','11.3','0.7','3.6',NULL,NULL,NULL,'1.7',NULL,NULL,'5.7','96.9',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(12,'Hawai Bakery Roti Gado Panjang','955126501845',NULL,NULL,NULL,'2 keping','18','73','14.5','2.2','0.7',NULL,NULL,NULL,NULL,NULL,'0.4',NULL,'53',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(13,'Want Want Seaweed Rice Crackers','4710144802779',NULL,NULL,NULL,'2 keping','30','151','20.7','1.7','6.8',NULL,NULL,NULL,'3',NULL,NULL,'2.8','245',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(14,'Jack \'n Jill Cream-o Oat (Oat Sandwich Cookies with Yam cream)','6928626360220',NULL,NULL,NULL,'2 keping','24','121','15.6','1.8','5.8',NULL,NULL,NULL,'0',NULL,NULL,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(15,'Tiger Biskuat NutriFruit Banana Choc','7622210239655',NULL,NULL,NULL,'2 keping','24','110','18.1','1.6','3.2',NULL,NULL,NULL,NULL,NULL,NULL,'5.9',NULL,'46.8',NULL,'69.6','0.9',NULL,NULL,20150101),
(16,'Colussi Crackers Integrali Wholewheat','8002590017538',NULL,NULL,NULL,'1 keping','6','25','4.1','0.7','0.6',NULL,NULL,NULL,'0.3',NULL,'0.3','0.1','0.04',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(17,'Hellema SunBest Fruit Biscuits Raisins & Apple','8710508551141',NULL,NULL,NULL,'1 keping','14.5','57','10.8','0.7','1.1','0.4','0.1',NULL,'0.6',NULL,'0.7','5.8','40',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(18,'Jack n Jill Magic Cracker Sandwich Twin Butter Flavored Cream','8850309202573',NULL,NULL,NULL,'1 keping','15','74','9.8','1.1','3.4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(19,'Jack n Jill Magic Cracker Sandwich Twin Chocolate Flavoured Cream','8850309202597',NULL,NULL,NULL,'1 keping','15','74','10','1.1','3.3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(20,'Jack n Jill Magic Cracker Sandwich Twin Butter Flavored Cream & Strawberry Flavoured Jam','8850309204942',NULL,NULL,NULL,'1 keping','15','70','10.6','1.1','2.6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(21,'Meiji Plain Crackers','8888077103389',NULL,NULL,NULL,'1 paket / 6 keping','26','112','20.4','2.9','2',NULL,NULL,NULL,'0',NULL,NULL,NULL,'136.8',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(22,'Meiji Plain Crackers with Oat','8888077103396',NULL,NULL,NULL,'1 paket / 6 keping','26','112','20.1','2.8','2.2',NULL,NULL,NULL,'0',NULL,NULL,NULL,'142',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(23,'Ahh Richeese Triple Cheese','8993175532297',NULL,NULL,NULL,'1 paket','8','40','5','0','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'35','3.225',NULL,NULL,NULL,NULL,NULL,20150101),
(24,'Roma Biskut Kelapa','8996001301142',NULL,NULL,NULL,'4 keping','22','110','15','2','4',NULL,NULL,NULL,NULL,NULL,NULL,'5',NULL,NULL,NULL,'48',NULL,NULL,NULL,20150101),
(25,'Mayora Coffee Joy','8996001301661',NULL,NULL,NULL,'8 keping','24','117','17','2','5',NULL,NULL,NULL,NULL,NULL,NULL,'4','90',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(26,'Mayora Wonder Wheat Whole Wheat Biscuit','8996001302248',NULL,NULL,NULL,'3 keping','19.5','97','13','2','4',NULL,NULL,NULL,NULL,NULL,NULL,'2','54',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(27,'MAYORA Slai O\'lai Milk Biscuit Filled with Pineapple Jam','8996001304709',NULL,NULL,NULL,'4 keping','32','140','24','2','4',NULL,NULL,NULL,NULL,NULL,NULL,'10','85',NULL,NULL,'48',NULL,NULL,NULL,20150101),
(28,'Mayora Wonder Wheat Chocolate Sandwich','8996001304990',NULL,NULL,NULL,'3 keping','29','144','20','2','6',NULL,NULL,NULL,NULL,NULL,NULL,'5','131',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(29,'Arnott\'s Scoth Fingers (Half coated in Arnott\'s Real Chocolate','9310072009544',NULL,NULL,NULL,'2 keping','22.7','113.29','14.7','1.4','5.3',NULL,NULL,NULL,'3.2',NULL,NULL,'6','95',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(30,'Butterfingers Shortbread Bites Macadamia','9311005100031',NULL,NULL,NULL,'1 keping','5.5','29.97','3','0.43','1.8',NULL,NULL,NULL,'1.23',NULL,NULL,'1.09','13.7',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(31,'Tuckers Natural Multifibre Snacks Tomato & Basil','9320823003257',NULL,NULL,NULL,'1 paket','25','97','12','3.2','2.9','1.1','1.1',NULL,'0.7',NULL,'5.1','1.3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(32,'Tuckers Natural Multifibre Snacks Quinoa','9320823003677',NULL,NULL,NULL,'1 paket','25','93','13.1','2.6','2.4','0.9','0.9',NULL,'0.6',NULL,'4','1.2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(33,'Butter Round','9554100041742',NULL,NULL,NULL,'2 keping','25','20.3','16.7','2.5','4.8',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(34,'GPR Royal British Coconut Cookies','9555161009573',NULL,NULL,NULL,'1 keping','21.6','129.2','11','0.8','9',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'74.3',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(35,'Kuih Ciki','9555221200537',NULL,NULL,NULL,'3 keping','36','143','29','1.2','0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(36,'Win2 Baked Potato Crisp','9555319109605',NULL,NULL,NULL,'3 keping','20','98','14','1.4','4',NULL,NULL,'0','1.8',NULL,'0.3','2.6','96',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(37,'____ charboil hiong piah brown sugar','9555333500273',NULL,NULL,NULL,'1 biji','35','151','23.1','2.1','5.6',NULL,NULL,NULL,'2.8',NULL,'1.4','4.2','3.5','0','0','40','1.74',NULL,NULL,20150101),
(38,'Charboil Recipe Hiong Piah Original','9555333501232',NULL,NULL,NULL,'1 biji','35','147','21.2','1.8','4.9',NULL,NULL,NULL,'2.5',NULL,NULL,NULL,'3.9',NULL,NULL,NULL,'1.4',NULL,NULL,20150101),
(39,'Kuih Makmur Kelapa','9555701701011',NULL,NULL,NULL,'1 biji','15','63','10','0.7','2.2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(40,'Jacob\'s Cream Cracker','9556068023716',NULL,NULL,NULL,'3 keping','30','125','18.5','2.1','4.9',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'94',NULL,'72','1.3',NULL,NULL,20150101),
(41,'Jacob\'s Low Salt Hi-Fibre','9556068024911',NULL,NULL,NULL,'3 keping','26.2','115','17.2','2.5','4.5',NULL,NULL,NULL,NULL,NULL,'1.8',NULL,'34','87',NULL,'67','1.2',NULL,NULL,20150101),
(42,'Jacob\'s Hi-cal Original','9556068602638',NULL,NULL,NULL,'3 keping','20','88','13','1.6','3.5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'62',NULL,'138','0.8',NULL,NULL,20150101),
(43,'Hup Seng Cream Crackers','9556085303914',NULL,NULL,NULL,'3 keping','23','110','15','2','5',NULL,NULL,'0','3',NULL,'1',NULL,'135','0','0','0','2.58',NULL,NULL,20150101),
(44,'Cap Ping Pong Biskut mil penuh','9556085304904',NULL,NULL,NULL,'3 keping','23','121','14.2','1.9','6.3',NULL,NULL,'0','3.5',NULL,'<1','1','100','0','0',NULL,'0.645',NULL,NULL,20150101),
(45,'Kerk Naturel Royal Crackers','9556085331429',NULL,NULL,NULL,'4 keping','28','140','20','3','5',NULL,NULL,NULL,NULL,NULL,'<1','6','170',NULL,NULL,'8','0.43',NULL,NULL,20150101),
(46,'PING PONG Coconut Biscuit','9556085577810',NULL,NULL,NULL,'3 keping','29','144','20','1.9','6.1',NULL,NULL,'0','3',NULL,'<1','7','40','0','0','0','0.43',NULL,NULL,20150101),
(47,'Julie\'s Choco More Sandwich','9556121002344',NULL,NULL,NULL,'3 keping','32','150','23','2','7',NULL,NULL,NULL,'3.4',NULL,'<1','11','110',NULL,NULL,NULL,'1.72',NULL,NULL,20150101),
(48,'Julie\'s Marie chocolate flavour','9556121020324',NULL,NULL,NULL,'3 keping','21.2','90','17','1','2.5',NULL,NULL,'0','1',NULL,'0','6','75','0','0','0','0.58',NULL,NULL,20150101),
(49,'Julie\'s Cheese Sandwich','9556121024025',NULL,NULL,NULL,'4 keping','28','150','18','2','8',NULL,NULL,NULL,'3.5',NULL,'0','5','140',NULL,NULL,'<16','<0.43',NULL,NULL,20150101),
(50,'Rice Cracker Original','9556124511058',NULL,NULL,NULL,'1 paket','25','124.5','17.1','1.2','5.7',NULL,NULL,NULL,'2.6',NULL,NULL,'3.1','220',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(51,'Hwa Tai Banana Treat','9556167230022',NULL,NULL,NULL,'2 keping','20','101','13.7','1.4','4.5',NULL,NULL,'0','2.5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(52,'Hwa Tai Choc Treat','9556167230039',NULL,NULL,NULL,'2 keping','20','94','14.7','1.4','3.3',NULL,NULL,'0','1.9',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(53,'Hwa Tai Lemon Treat','9556167230046',NULL,NULL,NULL,'2 keping','20','98','13.9','1.4','4.1',NULL,NULL,'0','2.4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(54,'Hwa Tai Melky Biscuit Blueberry Flavor','9556167230657',NULL,NULL,NULL,'6 keping','20','99.4','14.14','1.02','4.3',NULL,NULL,'0','2.42',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(55,'Luxury original crackers','9556167340059',NULL,NULL,NULL,'5 keping','18.5','90','12.9','1.3','3.7',NULL,NULL,'0','1.8',NULL,NULL,NULL,NULL,'56,425 ug',NULL,'39.59','0.8325',NULL,NULL,20150101),
(56,'Luxury cereal cracker','9556167340097',NULL,NULL,NULL,'5 keping','18.5','90','12.9','7.1','3.7',NULL,NULL,'0','1.8',NULL,NULL,NULL,NULL,'56.425 ug',NULL,'39.59','0.83',NULL,NULL,20150101),
(57,'Hwa Tai Royal Snap Sesame Crispy Snap','9556167780497',NULL,NULL,NULL,'4 keping','22.2','123','13.1','1.6','7.1','3','1','0','3.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(58,'Quaker oat cookies with chocolate chips','9556175966050',NULL,NULL,NULL,'3 keping','27','126.4','19','2','4.7','1.5','0.7','1.5','2.3',NULL,'1.1','9','122.2',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(59,'Shoon Fatt Veggie Crackers','9556184036034',NULL,NULL,NULL,'3 keping','25','122','16.3','2.7','5.1',NULL,NULL,'0','3',NULL,'2','1','118','0','0','8','0.43',NULL,NULL,20150101),
(60,'Shoon Fatt Sugar Crackers','9556184500023',NULL,NULL,NULL,'2 keping','25','117','19','2','4',NULL,NULL,'0','2',NULL,'1','4','150','0','0','8','10.43',NULL,NULL,20150101),
(61,'Casanova Castle Chocolate Wafer Stick','9556261113375',NULL,NULL,NULL,'2 keping','11','54','7.9','0.7','2.1',NULL,NULL,NULL,'1.8',NULL,NULL,'4.4','6.2',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(62,'LEE Butter Coconut Flavored Biscuits','9556390005787',NULL,NULL,NULL,'4 keping','25','122','18','2','5',NULL,NULL,'0','3',NULL,'1','6','65','0','2','2','0',NULL,NULL,20150101),
(63,'Lee Small Marie Biscuits','9556390098604',NULL,NULL,NULL,'12 keping','25','112','19.6','1.8','3',NULL,NULL,NULL,'1.5',NULL,'0.5','5','58',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(64,'Munchy\'s Choco coated Wafer Bars','9556439887381',NULL,NULL,NULL,'1 keping','11','60','7','0','3',NULL,NULL,'0','3',NULL,'0','4','15','0','0','0','0',NULL,NULL,20150101),
(65,'IKO Hi fibre oat cracker with  9 grains','9556562002972',NULL,NULL,NULL,'3 keping','22.3','107','14.5','1.9','4.6',NULL,NULL,'0','2.8',NULL,'1.9','3.4','66.4','0','0','20','1.16',NULL,NULL,20150101),
(66,'ORI Biskut berkrim White Coffee','9556562003313',NULL,NULL,NULL,'2 keping','30','150','20.1','1.8','6.9',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(67,'Castle Wholemeal cracker','9556565128303',NULL,NULL,NULL,'7 keping','30','140','20','4','5',NULL,NULL,'0','2.5',NULL,'3','1','145','44','2.8','16','1.5',NULL,NULL,20150101),
(68,'Mini Pillow Chocolate Cream Filled Rice Crackers','9556863900328',NULL,NULL,NULL,'1 paket','25','119','17','3','5',NULL,NULL,NULL,'16',NULL,'1','5','17',NULL,NULL,'16','0.645',NULL,NULL,20150101),
(69,'Roti Kok','9556996777880',NULL,NULL,NULL,'1 keping','30','130','22.2','4.2','2.7',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(70,'Majerin Roti Kok','9557214101623',NULL,NULL,NULL,'1 keping','27','114','20','2.7','2.6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(71,'Daily\'s Biskut Gaga','9557755561115',NULL,NULL,NULL,'4 keping','30','131.4','23.3','2.9','3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(72,'McVities Digestive Original','50001680011427',NULL,NULL,NULL,'1 keping','15','71','1.97','1.1','3.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(73,'Kjeldsens Butter Cookies','7733001231',NULL,NULL,NULL,'4 keping','30','160','19','2','9',NULL,NULL,'25','5','0','1','55','8','20','0','0','0.38',NULL,NULL,20150101),
(74,'Julie\'s Wheat Crackers','9556121000357',NULL,NULL,NULL,'3 keping/ 1 paket','25','136','14.5','2','7.6','5','1.4','0','3.5','0','1','1','160','0','0','16','0.44',NULL,NULL,20150101),
(75,'IKO Blackcurrant Shorties','9556562001029',NULL,NULL,NULL,'1 paket / 2 keping','36','187','22.7','2.7','9.3',NULL,NULL,'4','5.3',NULL,'0.7','90.7','4','15','0','24','0.19',NULL,NULL,20150101),
(76,'Ayam brand cream cracker',NULL,NULL,NULL,NULL,'4 keping','28','192','25.6','4.8','7.8',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(77,'Biscuit Soda (saltine flavour)',NULL,NULL,NULL,NULL,'3 keping','25','157.5','17.2','2.4','4.6',NULL,NULL,NULL,'2.1',NULL,NULL,'0.3','100',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(78,'Biskut cream crackers cap ing pong',NULL,NULL,NULL,NULL,'4 keping','33','170','21','3','9',NULL,NULL,'0','4.5',NULL,'<1','1','230',NULL,NULL,NULL,'0.86',NULL,NULL,20150101),
(79,'Biskut Kelapa',NULL,NULL,NULL,NULL,'1 keping','14','5.6','0.4','0.3','0.3',NULL,NULL,'0.0','0.1',NULL,'0.2','0.2','1.8','0.0','0.0','0.4','0.0',NULL,NULL,20150101),
(80,'Biskut marie',NULL,NULL,NULL,NULL,'3 keping','21.2','90','17','1','2.5',NULL,NULL,'0','1',NULL,'0','5','95','0','0','0','0.58',NULL,NULL,20150101),
(81,'Biskut marie',NULL,NULL,NULL,NULL,'4 keping','40','172','31','4','3.6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(82,'Biskut Marie Besar Pesta',NULL,NULL,NULL,NULL,'5 keping','25','112','18.6','2','3.3','1','0.2','0','2.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(83,'Biskut marie Big',NULL,NULL,NULL,NULL,'5 keping','29','130','23','2','4',NULL,NULL,'0','2',NULL,'0','6','75','0','0','8','0.43',NULL,NULL,20150101),
(84,'Biskut Marie Cap ping pong',NULL,NULL,NULL,NULL,'5 keping','29','130','23','2','4',NULL,NULL,'0','2',NULL,'<1','6','75',NULL,NULL,NULL,'0.43',NULL,NULL,20150101),
(85,'Biskut Marie Khong Guan',NULL,NULL,NULL,NULL,'4 keping','30','140','24','2','3.5',NULL,NULL,'0','2',NULL,'0','9','95','44',NULL,'48','0.86',NULL,NULL,20150101),
(86,'Biskut tiger',NULL,NULL,NULL,NULL,'4 keping','25','109','17.6','2.7','3.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'48',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(87,'Cap Kubah Roti Kok Istimewa',NULL,NULL,NULL,NULL,'3 keping','45','162','31.3','5.7','1.6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(88,'Cap Kubah Roti Marjerin',NULL,NULL,NULL,NULL,'4 keping','45','185','35.2','6.2','2.2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(89,'Charboil Recipe Hiong Piah Brown Sugar',NULL,NULL,NULL,NULL,'1 keping','35','151','23.1','2.1','5.6',NULL,NULL,NULL,'2.8',NULL,NULL,'11.2','4.2',NULL,NULL,NULL,'1.4',NULL,NULL,20150101),
(90,'Eggs Roll cream biscuit',NULL,NULL,NULL,NULL,'1 paket','10','59.2','5.05','0.4','4.16',NULL,NULL,'4.5',NULL,NULL,'0.2','1','18','0','0','0','0',NULL,NULL,20150101),
(91,'EGO Strawberry Flavor Tart Cookies',NULL,NULL,NULL,NULL,'3 keping','22','94.6','13.2','1.1','4.4',NULL,NULL,NULL,'1.3',NULL,'0','3.5','92.4','0','0','0','0',NULL,NULL,20150101),
(92,'Hawai Bakery Roti Kok',NULL,NULL,NULL,NULL,'2 keping','44','178','28.2','5.5','4.8',NULL,NULL,NULL,'1.5',NULL,'2.7',NULL,'196.5',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(93,'Hneoh Pneah',NULL,NULL,NULL,NULL,'1 keping','21','89','15.2','1.2','2.6',NULL,NULL,NULL,'1.2',NULL,'0.9','4.9','12',NULL,NULL,NULL,'0.645',NULL,NULL,20150101),
(94,'Hwa Tai Biskut Naiyu (Classic)',NULL,NULL,NULL,NULL,'4 keping','27.5','120','20','2.4','3.4','1.1','0.4','0','2',NULL,NULL,NULL,NULL,'95',NULL,'73','1.1',NULL,NULL,20150101),
(95,'Hwa Tai Siang Siang Cream Crackers',NULL,NULL,NULL,NULL,'3 keping','21','100','13.8','1.9','4.1','1.7','0.5',NULL,'1.9',NULL,NULL,NULL,NULL,'60',NULL,'59','0.9',NULL,NULL,20150101),
(96,'Jack n Jill Magic Cracker Sandwich with Cheese Cream',NULL,NULL,NULL,NULL,'2 keping','30','144','20.82','2','5.9',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(97,'Jacob\'s Original Cream Cracker',NULL,NULL,NULL,NULL,'3 keping','30','143','20.1','2.1','5','2','0.6','0','2.4',NULL,'1.2','0.7','171','45',NULL,NULL,NULL,NULL,NULL,20150101),
(98,'Julie\'s Butter cracker',NULL,NULL,NULL,NULL,'4 keping','34','190','20','3','11',NULL,NULL,'0','5',NULL,NULL,'3',NULL,NULL,NULL,NULL,'0.43',NULL,NULL,20150101),
(99,'Julie\'s Cream Crackers',NULL,NULL,NULL,NULL,'4 keping','27','130','18','2','5',NULL,NULL,NULL,'2.5',NULL,'<1','1','160',NULL,NULL,NULL,'<0.43',NULL,NULL,20150101),
(100,'Julie\'s Fruits More Sultana Biscuits- Soft VARCHAR(100)ure',NULL,NULL,NULL,NULL,'3 keping','20','100','15','1','3.5',NULL,NULL,'0','1.5',NULL,'1','5','25','0','0','0','0.58',NULL,NULL,20150101),
(101,'Julie\'s Golden Crackers',NULL,NULL,NULL,NULL,'4 keping','32','180 g','19','3','10',NULL,NULL,'0',NULL,NULL,'<1','1','200',NULL,NULL,NULL,'<0.43',NULL,NULL,20150101),
(102,'Julie\'s Oat 25',NULL,NULL,NULL,NULL,'3 keping','25','129','16.3','1.6','6.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0.43',NULL,NULL,20150101),
(103,'Lee Cream Crackers',NULL,NULL,NULL,NULL,'3 keping','22','107','14','2','5',NULL,NULL,NULL,NULL,NULL,'<2','1','156',NULL,'2.8','80',NULL,NULL,NULL,20150101),
(104,'Lee Marie oiled biscuit',NULL,NULL,NULL,NULL,'6 keping','30','144','21','2','6',NULL,NULL,'0','3',NULL,'1','6','105','0','0','3','0',NULL,NULL,20150101),
(105,'Lee Nutri Multi grain original biscuits',NULL,NULL,NULL,NULL,'3 keping','15','75','10','1','3',NULL,NULL,'0','2',NULL,'1','2','53','150',NULL,'44','0.6',NULL,NULL,20150101),
(106,'Lee Original Crackers',NULL,NULL,NULL,NULL,'3 keping','22','94','16','2','3',NULL,NULL,'<2','1',NULL,'<1','0.5','123','33','0.7','88','1.29',NULL,NULL,20150101),
(107,'Lee Special Crackers',NULL,NULL,NULL,NULL,'3 keping','22','110','15','2','2',NULL,NULL,NULL,NULL,NULL,'<1','3','154',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(108,'Munchy\'s Classic Cream Crackers',NULL,NULL,NULL,NULL,'3 keping','30','140','19','3','6',NULL,NULL,NULL,'3',NULL,'1',NULL,'220',NULL,NULL,NULL,'0.645',NULL,NULL,20150101),
(109,'Munchy\'s Cream crackers',NULL,NULL,NULL,NULL,'3 keping','25','134','15.7','1.5','7.3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(110,'Munchy\'s Oat Crunch (Coklat Gelap)',NULL,NULL,NULL,NULL,'2 keping','26','123','18','2','4.8',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(111,'Munchy\'s Topmix',NULL,NULL,NULL,NULL,'2 keping','30','140','22','2','6',NULL,NULL,NULL,'3',NULL,'2','8','105',NULL,'7','32',NULL,NULL,NULL,20150101),
(112,'Pesta Biskut Lemak',NULL,NULL,NULL,NULL,'3 keping','22.5','106','15.2','1.9','4.2','1.6','0.5','0','2.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(113,'Pesta powerful Assorted Biscuits',NULL,NULL,NULL,NULL,'3 keping','25','123','18.3','1.3','4.9','1.8','0.5',NULL,'2.6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(114,'Premium Gold Prosperity Cookies',NULL,NULL,NULL,NULL,'1 keping','5','19','4.2','0.3','0.4',NULL,NULL,NULL,NULL,NULL,NULL,'1.8','4.4',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(115,'Roti pong',NULL,NULL,NULL,NULL,'1 keping','15','51','12','1','0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(116,'Roti pong  Taste of memories',NULL,NULL,NULL,NULL,'1 keping','10','51','12','1','0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(117,'Roti pong Cap Kucing',NULL,NULL,NULL,NULL,'2 keping','26','103','24.5','2','0.2',NULL,NULL,'0','0',NULL,'0.1','11.7','14.4',NULL,NULL,'24','0.86',NULL,NULL,20150101),
(118,'Tau Sar Pneah',NULL,NULL,NULL,NULL,'1 biji','21','82','13.1','1.6','2.6',NULL,NULL,NULL,'1.2',NULL,'1.1','5','50',NULL,NULL,NULL,'0.43',NULL,NULL,20150101),
(119,'Tesco Everyday Value Biskut Cream Crackers',NULL,NULL,NULL,NULL,'1 keping','7','33','4.7','0.6','1.3','0.5','0.1',NULL,'0.1',NULL,NULL,'1.3','32',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(120,'Tiger Biskuat Susu',NULL,NULL,NULL,NULL,'5 keping','30','139','21.2','2.2','5',NULL,NULL,NULL,NULL,NULL,NULL,'26.4','111','45',NULL,'116','0.9',NULL,NULL,20150101),
(121,'Tiger Cream Crackers',NULL,NULL,NULL,NULL,'3 keping','25','120','15.5','2.3','10.4',NULL,NULL,NULL,NULL,NULL,NULL,'6.7','100','45',NULL,'45','0.8',NULL,NULL,20150101),
(122,'Jacob\'s Hi-Fibre wheat Cracker Containing Actimix','9556068024904',NULL,NULL,NULL,'3 keping','30','133','20.6','3','4.8','1.7','0.6','0','2.5','0','1.8','1.2','138','45',NULL,'45','0.9',NULL,NULL,20150101),
(123,'Marigold Low Fat Yogurt Peach','9557305000408',NULL,NULL,NULL,'1 bekas','150','159','27','6.5','2.9',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'240',NULL,NULL,NULL,20150101),
(124,'Marigold 0% Fat Yogurt Aloe Vera','9557305003133',NULL,NULL,NULL,'1 bekas','150','143','28.5','6.3','0',NULL,NULL,NULL,NULL,NULL,'4.5',NULL,NULL,NULL,NULL,'210',NULL,NULL,NULL,20150101),
(125,'Dutch Lady Low Fat Natural Yoghurt','9556166045016',NULL,NULL,NULL,'1 bekas','150','91','11','6.9','2.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'270',NULL,NULL,NULL,20150101),
(126,'F & N Evaporated Full Cream Milk','9556040160033',NULL,NULL,NULL,'2 sudu makan','20','29','2.2','1.5','1.7',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'48',NULL,NULL,NULL,NULL,NULL,20150101),
(127,'Nespray Fortified Full Cream Milk Powder','9556001036872',NULL,NULL,NULL,'4 sudu makan','33','165','12.2','8.4','9.2',NULL,NULL,NULL,NULL,NULL,NULL,'115',NULL,'175','16','303','3.3',NULL,NULL,20150101),
(128,'F & N Magnolia Full Cream Hi-Cal Milk','9556040455504',NULL,NULL,NULL,'1 gelas','220','132.0','9.2','6.6','7.7',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'396.0',NULL,'264.0',NULL,NULL,NULL,20150101),
(129,'Dutch Lady Pure Farm','9556166058368',NULL,NULL,NULL,'1 gelas','225','140.0','10.8','7.2','7.4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'142.0',NULL,'248.0',NULL,NULL,NULL,20150101),
(130,'Mainland Chesdale Rich in Calcium (Slice Cheese)','9414957178001',NULL,NULL,NULL,'1 keping','21','64.0','0.7','3.6','5.2',NULL,NULL,NULL,NULL,NULL,'0.0',NULL,'330.0',NULL,NULL,'290.0',NULL,NULL,NULL,20150101),
(131,'Anchor Cheddar Cheese Slices (Rich in Calcium)','9415007016908',NULL,NULL,NULL,'1 keping','17','50','0.5','2.9','4.1',NULL,NULL,NULL,'2.8',NULL,NULL,'0.4','262',NULL,NULL,'227',NULL,NULL,NULL,20150101),
(132,'Nestle Koko Krunch','4800361002851',NULL,NULL,NULL,'1 cawan','30','115','23.5','2.4','1.3','0.45','0.3','0','0.54','0','1.5','58.5','11.4',NULL,'18','80.1','4.2',NULL,NULL,20150101),
(133,'Nestle Fitness The Low Fat Whole Wheat Cereal','4800361333337',NULL,NULL,NULL,'1 cawan','30','109','23.9','2.4','0.4','0.06','0.18','0','0.12',NULL,'1.5','150','5.2',NULL,'12.6','180','1.8',NULL,NULL,20150101),
(134,'Fiona Brown Rice, cooked','9556582681812',NULL,NULL,NULL,'1 cawan','210','227','53.1','5.7','0.4',NULL,NULL,'0','0.1',NULL,'0.7',NULL,'9.9',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(135,'Jasmine VitaGrain Extra Long Parboiled Basmathi Rice, cooked','9556563008706',NULL,NULL,NULL,'1 cawan','210','253.4','55.6','5.8','0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'240.8',NULL,NULL,'20.2','7.4',NULL,NULL,20150101),
(136,'Thai King Thai Brown Rice, cooked','9556582222145',NULL,NULL,NULL,'1 cawan','210','180','39','4','1',NULL,NULL,'0','0','0','1','0','15','22','0','64','1.8',NULL,NULL,20150101),
(137,'Kawan Tandoori Naan','9556074988634',NULL,NULL,NULL,'1 keping','50','202.0','46.4','5.3','1.9','0.4','0.7','0.0','0.8','0.0','11.0','2.5','225.0','0.0','0.0','16.0','0.7',NULL,NULL,20150101),
(138,'Kart\'s Original Roti Canai','9556084000050',NULL,NULL,NULL,'1 keping','58','163.6','26.5','3.9','4.4','1.6','0.4','0.2','2.4','0.0','1.1','15.5','254.0',NULL,NULL,'7.0','0.3',NULL,NULL,20150101),
(139,'Top Valu Paratha (Plain)','9556587103043',NULL,NULL,NULL,'1 keping','80','279.0','34.8','4.6','14.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(140,'Passion Bake Original Pita','9556587100226',NULL,NULL,NULL,'1 keping','30','90','17.3','2.5','1.5','0.4','0.1','0','1',NULL,'1.1','2.9','134.5','0','1.4','16','0.4',NULL,NULL,20150101),
(141,'Megah Mee Wanton Noodle, cooked','9555034809101',NULL,NULL,NULL,'1 hidangan','140','214','44.7','8.6','0.2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(142,'Lo Sam Spinach Wantan Noodle, cooked','9555046900384',NULL,NULL,NULL,'1 hidangan','140','214','44.7','8.6','0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(143,'Mighty white Enriched Sandwich Bread','9556996111189',NULL,NULL,NULL,'2 keping','62','162','29.3','6.5','2.1',NULL,NULL,'0','0','0','1.4',NULL,'238','34.1',NULL,'162','1.5',NULL,NULL,20150101),
(144,'Gardenia 100%  Whole Grain Bread (Roti Gandum Penuh)','9556231111134',NULL,NULL,NULL,'2 keping','61.5','146','21.9','8.9','1.4','0.3','0.5','0','0.6','0','5',NULL,'287','194',NULL,'168','3.4',NULL,NULL,20150101),
(145,'Massimo 100% Whole Wheat Loaf','9556755510079',NULL,NULL,NULL,'2 keping','70','188','33.7','7.6','2.5','0.7','0.5','0','1.3','0','5.6',NULL,'300',NULL,NULL,'140','4.2',NULL,NULL,20150101),
(146,'Gardenia Delicia Bun Sambal Bilis','9556641320096',NULL,NULL,NULL,'1 biji','60','190','25.3','5.7','7','2.7','0.6',NULL,'3.7','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(147,'Massimo Roti Krim Favorito Coklat','9556755530046',NULL,NULL,NULL,'1  biji','55','181','27.7','4.2','5.9','1.9','0.6','0','3.3','0','1',NULL,NULL,NULL,NULL,'90','2.7',NULL,NULL,20150101),
(148,'Mission Wraps Wholegrain','9555615900012',NULL,NULL,NULL,'1 keping','45','169','30.7','3.5','4.1','1.4','0.5','0','2.1','0','1.8','2.2','410',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(149,'Eka Bihun Fatima, soaked','9557681220025',NULL,NULL,NULL,'1 cawan','100','159','39','3','0',NULL,NULL,NULL,NULL,NULL,NULL,'0','10',NULL,'0','80','4.8',NULL,NULL,20150101),
(150,'Jasmine Biorice Parboiled (Beras Ponni), cooked','9556563009710',NULL,NULL,NULL,'1 cawan','210','248.3','54.5','6.7','0.4',NULL,NULL,NULL,NULL,NULL,'0.7','0.98','4.9',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(151,'Bihun Kampung Premiere Brown Rice Vermicelli, soaked','9555064200640',NULL,NULL,NULL,'1 cawan','100','178','42.3','2','0.1',NULL,NULL,'0','0.05',NULL,'2.3',NULL,'15.05',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(152,'Kellogg\'s Special K Original Light Crisp Flakes of rice & wheat','9310055416246',NULL,NULL,NULL,'1 cawan','25','97.8','21.2','2.8','1.5','0.08','0.2','0','0.1','0','0.6','4.6','127.8','66.5','8.8',NULL,'1.5',NULL,NULL,20150101),
(153,'Nestle Corn Flakes','4800361002844',NULL,NULL,NULL,'1 cawan','25','92.5','20.2','1.7','0.6',NULL,NULL,'0',NULL,NULL,'1.8','2.3','143.8',NULL,NULL,'175','3',NULL,NULL,20150101),
(154,'Nestle Milo Fuze with Cereals','9556001035462',NULL,NULL,NULL,'1 paket','35','130','23.3','5.1','1.9',NULL,NULL,NULL,NULL,NULL,'1.7','120',NULL,NULL,'29','323','4.9',NULL,NULL,20150101),
(155,'Cactus Natural Mineral Water','9556135015002',NULL,NULL,NULL,'1 botol','500','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'6.8',NULL,NULL,'19',NULL,NULL,NULL,20150101),
(156,'Cactus Natural Mineral Water','9556135082301',NULL,NULL,NULL,'1 cawan','230','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5',NULL,NULL,'12',NULL,NULL,NULL,20150101),
(157,'Spritzer Naturel Mineral water','9556145116058',NULL,NULL,NULL,'1 botol','600','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'7.8',NULL,NULL,'32',NULL,NULL,NULL,20150101),
(158,'F & N Flashy Fruitade','9556570105078',NULL,NULL,NULL,'1 tin','325','143','36.1','0','0',NULL,NULL,NULL,NULL,NULL,NULL,'36.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(159,'Yeo\'s Grass Jelly Drink','9556156003385',NULL,NULL,NULL,'1 tin','300','111.0','27.9','0.0','0.0',NULL,NULL,NULL,NULL,NULL,NULL,'26.4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(160,'Diet A & W Cream Soda Low Sodium','07826900',NULL,NULL,NULL,'1 tin','355','0.0','0.0','0.0','0.0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100.0',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(161,'7iup Diet Low Sodium','07807905',NULL,NULL,NULL,'1 tin','355','0.0','0.0','0.0','0.0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'45.0',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(162,'F & N 100 Plus','9556570311134',NULL,NULL,NULL,'1 gelas','500','130','33','0','0',NULL,NULL,NULL,NULL,NULL,NULL,'33',NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(163,'Coca-cola','9555589200385',NULL,NULL,NULL,'1 tin','325','137','34.5','0','0',NULL,NULL,NULL,NULL,NULL,NULL,'34.5','2',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(164,'Coca-cola with Cherry Flavor & Other Natural Flavors (Very Low Sodium)','04905004',NULL,NULL,NULL,'1 tin','355','150','42','0','0',NULL,NULL,NULL,NULL,NULL,NULL,'42','35',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(165,'Pepsi','9556404001033',NULL,NULL,NULL,'1 tin','325','130','34.8','0','0',NULL,NULL,NULL,NULL,NULL,NULL,'34.8',NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(166,'Revive Isotonic','9556404062034',NULL,NULL,NULL,'1 tin','325','88','22.4','0','0',NULL,NULL,NULL,NULL,NULL,NULL,'22.4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(167,'Teen Seong Teen Baked Beans (___)','9556191020422',NULL,NULL,NULL,'1 senduk','50','49','10.8','2','0.15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(168,'Teen Seong Teen Baked Beans (___)','9556191020118',NULL,NULL,NULL,'1 senduk','50','49','10.8','2','0.15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(169,'Ayam Brand Baked Beans in Tomato Sauce - Light (50% Sugar Reduced)','9556041601887',NULL,NULL,NULL,'1 senduk','50','46','8.2','1.9','0.2',NULL,NULL,NULL,NULL,NULL,NULL,'1.6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(170,'Top Valu Egg Tofu (Smooth)','9555046901282',NULL,NULL,NULL,'3 keping','50','24.4','2.1','2.9','0.4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(171,'CF Tofu Keras','9556343688319',NULL,NULL,NULL,'1 keping','50','42','4.4','5.8','0.06',NULL,NULL,'0','0.06',NULL,'0.5','0.4','2.6',NULL,NULL,'38.3',NULL,NULL,NULL,20150101),
(172,'King Cup Sardines in Tomato Sauce','9556198199114',NULL,NULL,NULL,'1 ketul','51','54','1','7.1','2.4',NULL,'0.1','5.6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'78',NULL,NULL,NULL,20150101),
(173,'Yeo\'s Sardines In Tomato Sauces','9556156010253',NULL,NULL,NULL,'1 ketul','50','39.5','0.9','8','0.5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(174,'Ayam Brand Mackerel In Tomato Sauce','95500522',NULL,NULL,NULL,'1 ketul','51','97','0.9','6.5','7.3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(175,'Nutrico Abalone Mushrooms','9556830000501',NULL,NULL,NULL,'1 senduk','50','7.5','1.2','0.8','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(176,'Hosen Mushroom Whole','8888192815419',NULL,NULL,NULL,'1 senduk','50 g','7.7','1.5','0.4','0',NULL,NULL,'0','0',NULL,'0.8','0.8','126.9','0','0','0','1.3',NULL,NULL,20150101),
(177,'Nature First Harvest Enoki Mushroom','9555232003486',NULL,NULL,NULL,'1 senduk','60','27','4.8','1.2','0',NULL,NULL,'0','0',NULL,'1.8','1.2','0','5.5','14','8','1.3',NULL,NULL,20150101),
(178,'Eryngii Bunch Mushroom','9555232000881',NULL,NULL,NULL,'1 senduk','50','17.5','2.5','1.5','0.25',NULL,NULL,'0','0','0','0.5','0.5','7.5','0','0','0','0',NULL,NULL,20150101),
(179,'Sri Meenatchi Pickle - Mango Pickle','9555139606018',NULL,NULL,NULL,'1 senduk','22','20','2','0','1.5',NULL,NULL,'0','1',NULL,'1','1','393','22','2.8','0','0.4',NULL,NULL,20150101),
(180,'Alagappa\'s Serbuk Kari Daging','9556717009801',NULL,NULL,NULL,'1 sudu makan','7','26.9','3.1','1.0','1.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(181,'Alagappa\'s Serbuk Kari Ikan','9556717009573',NULL,NULL,NULL,'1 sudu makan','7','26.7','3.2','1.1','1.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(182,'Baba\'s Serbuk Jintan Putih  (Cumin Powder)','9556065000123',NULL,NULL,NULL,'1 sudu makan','7','30','1.4','1.3','1.9',NULL,NULL,NULL,NULL,NULL,'0.8',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(183,'Baba\'s Serbuk Jintan Manis (Fennel Powder)','9556065000130',NULL,NULL,NULL,'1 sudu makan','7','29','1.7','1.2','1.7',NULL,NULL,NULL,NULL,NULL,'1.5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(184,'Brahim\'s Kuah Kari Ikan','9556022160068',NULL,NULL,NULL,'1 paket','45','85','4.8','0.9','6.8','2.8','0.8',NULL,'3.3',NULL,'2','3','600',NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(185,'Adami Perencah Mee Rebus Muar','9555244900032',NULL,NULL,NULL,'1 sudu makan','33','202.7','13.5','2.1','15.9',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(186,'Yummy House Fish Bladder with Assorted Mushroom Soup, cooked','873453004082',NULL,NULL,NULL,'1 mangkuk','245','115','20','6','1',NULL,NULL,'16','0','0','2','2','280','0','0','24','3.1',NULL,NULL,20150101),
(187,'Nutrigracia Organic Red Dates','9555342400380',NULL,NULL,NULL,'4 biji','23','63.7','17.3','0.5','0',NULL,NULL,'0',NULL,NULL,NULL,NULL,'0.23','10.3','0','14.7','0.2',NULL,NULL,20150101),
(188,'Alagappa\'s Atta Flour (Whole wheat flour)','9556717009221',NULL,NULL,NULL,'1 sajian','25','106.5','19.9','9.4','0.375',NULL,NULL,NULL,NULL,NULL,'8.2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(189,'Alagappa\'s Rava Thosai Mix (salt added)','9556717009207',NULL,NULL,NULL,'1 sajian','25','80','9.5','3.5','1.5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101),
(190,'Alagappa\'s Suji Flour','9556717009436',NULL,NULL,NULL,'1 sajian','10','33.3','8.1','1.2','0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20150101);

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

/*Data for the table `menu` */

insert  into `menu`(`id`,`menu_txt`,`menu_loc`,`menu_parent_id`,`default_menu`,`sort`,`icon_name`,`balloon_title`,`module_ind`,`remarks`) values 
(6,'Pengurusan Artikel','cmsBulletin/admin',46,'0',2,'','',0,''),
(47,'E-Aduan','Eaduan/admin',68,'0',1,'','',1,''),
(70,'Tip','cmsTip/admin',46,'0',4,'','',0,''),
(71,'Album','cmsAlbum/admin',46,'0',5,'','',0,''),
(72,'Video','cmsVideo/admin',46,'0',6,'','',0,''),
(46,'Selenggara','',NULL,'0',60,'','',1,''),
(45,'Pentadbir','',NULL,'0',50,'','',1,''),
(64,'Selenggara Pengguna','utilitiPengguna/admin',45,'0',6,'','',0,''),
(63,'Selenggara Peranan','ostRoleMapping/admin',45,'0',5,'','',0,''),
(62,'Selenggara Menu','OstMenu/Admin',45,'0',4,'','',1,''),
(61,'Log Keluar','site/logout',NULL,'0',80,'','',1,''),
(66,'Kategori','admin/categories/catList',NULL,'0',5,'','',0,''),
(74,'Undian','undian/index',46,'0',8,'','',0,''),
(48,'Koleksi Gambar','gambar/index',46,'0',1,'','',0,''),
(67,'Tukang Paip','plumber/admin',68,'0',2,'','',0,''),
(68,'Extension','',NULL,'0',90,'','',1,''),
(65,'Selenggara Parameter','ostRef/admin',45,'0',7,'','',0,''),
(76,'Popup','cmsPopup/admin',46,'0',8,'','',0,''),
(58,'Pengurusan Kategori','categoriesxx/admin',46,'0',2,'','',0,''),
(60,'Portal','home',NULL,'1',40,'','',1,'');

/*Table structure for table `menudata` */

DROP TABLE IF EXISTS `menudata`;

CREATE TABLE `menudata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_type` varchar(100) DEFAULT '0',
  `menudata_title` varchar(100) DEFAULT NULL,
  `menudata_info1` varchar(100) DEFAULT NULL,
  `menudata_info2` varchar(100) DEFAULT NULL,
  `menudata_url` varchar(100) DEFAULT NULL,
  `menudata_icon` varchar(100) DEFAULT NULL,
  `updated` int(10) DEFAULT '20150101',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

/*Data for the table `menudata` */

insert  into `menudata`(`id`,`menu_type`,`menudata_title`,`menudata_info1`,`menudata_info2`,`menudata_url`,`menudata_icon`,`updated`) values 
(1,'11','\"Aplikasi Pemakanan Sihat (MyNutri)\"|\"MyNutri Healthy Lifestyle Application\"','\"Video pengenalan kepada aplikasi MyNutri yang boleh digunakan melalui web dan app\"|\"Introduction vi','pt-2hJSH4hI',NULL,NULL,20150101),
(2,'11','\"Panduan Makan Kanak-Kanak\"|\"Children Eating Guide\"','\"Panduan untuk ibubapa dan penjaga  untuk memberi pemakanan yang terbaik untuk kanak-kanak.\"|\"A guid','5ASoNhRymR0',NULL,'/images/temp/yt1.jpg',20150101),
(3,'1','\"Pengenalan Ke MyNutriApps II: MynutriDiari\"|\"Introduction to MyNutriApps II: MynutriDiari\"','\"MyNutriDiari bertujuan untuk memupuk kesedaran dan menggalakkan masyarakat merekod pengambilan maka','/images/general/back2.png',NULL,'/images/general/nutri.jpg',20150101),
(4,'2','\"\"|\"\"','\"/images/general/tutorial/page-1-bm.jpg\"|\"/images/general/tutorial/page-1-bm.jpg\"','/images/general/back1.png',NULL,NULL,20150101),
(5,'5','\"Sate Ayam\"|\"Chicken Satay\"','\'<p>Bahan:</p>\n<p>\n  - 5 biji bawang merah - dikisar halus<br />- 2 batang serai- dikisar halus<br /','/images/recipe/satayayam-top.jpg','VVSNWy7g4K8','/images/recipe/satayayam.png',20150101),
(6,'6','\"Minggu Pemakanan Malaysia 2015\"|\"Nutrition Month Malaysia 2015\"','\"\"|\"\"','/images/general/foodactivities/nutrimonth2015.jpg','2.0',NULL,20150101),
(7,'7','\"\"|\"\"','\"/images/general/foodguide/poster1.jpg\"|\"/images/general/foodguide/poster1.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(8,'8','\"\"|\"\"','\"/images/general/calorieburning/poster1.jpg\"|\"/images/general/calorieburning/poster1.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(9,'8','\"\"|\"\"','\"/images/general/calorieburning/poster2.jpg\"|\"/images/general/calorieburning/poster2.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(10,'10','\"\"|\"\"','\"/images/general/healthymenu/poster1.jpg\"|\"/images/general/healthymenu/poster1.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(11,'10','\"\"|\"\"','\"/images/general/healthymenu/poster2.jpg\"|\"/images/general/healthymenu/poster2.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(12,'10','\"\"|\"\"','\"/images/general/healthymenu/poster3.jpg\"|\"/images/general/healthymenu/poster3.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(13,'10','\"\"|\"\"','\"/images/general/healthymenu/poster4.jpg\"|\"/images/general/healthymenu/poster4.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(14,'9','\"\"|\"\"','\"/images/general/foodfacts/fact1.png\"|\"/images/general/foodfacts/fact1.png\"','/images/general/back3.jpg',NULL,NULL,20150101),
(15,'9','\"\"|\"\"','\"/images/general/foodfacts/fact2.png\"|\"/images/general/foodfacts/fact2.png\"','/images/general/back3.jpg',NULL,NULL,20150101),
(16,'9','\"\"|\"\"','\"/images/general/foodfacts/fact3.png\"|\"/images/general/foodfacts/fact3.png\"','/images/general/back3.jpg',NULL,NULL,20150101),
(17,'9','\"\"|\"\"','\"/images/general/foodfacts/fact4.png\"|\"/images/general/foodfacts/fact4.png\"','/images/general/back3.jpg',NULL,NULL,20150101),
(18,'9','\"\"|\"\"','\"/images/general/foodfacts/fact5.png\"|\"/images/general/foodfacts/fact5.png\"','/images/general/back3.jpg',NULL,NULL,20150101),
(19,'9','\"\"|\"\"','\"/images/general/foodfacts/fact6.png\"|\"/images/general/foodfacts/fact6.png\"','/images/general/back3.jpg',NULL,NULL,20150101),
(20,'9','\"\"|\"\"','\"/images/general/foodfacts/fact7.png\"|\"/images/general/foodfacts/fact7.png\"','/images/general/back3.jpg',NULL,NULL,20150101),
(21,'9','\"\"|\"\"','\"/images/general/foodfacts/fact8.png\"|\"/images/general/foodfacts/fact8.png\"','/images/general/back3.jpg',NULL,NULL,20150101),
(22,'9','\"\"|\"\"','\"/images/general/foodfacts/fact9.png\"|\"/images/general/foodfacts/fact9.png\"','/images/general/back3.jpg',NULL,NULL,20150101),
(23,'9','\"\"|\"\"','\"/images/general/foodfacts/fact10.png\"|\"/images/general/foodfacts/fact10.png\"','/images/general/back3.jpg',NULL,NULL,20150101),
(24,'7','\"\"|\"\"','\"/images/general/foodguide/poster2.jpg\"|\"/images/general/foodguide/poster2.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(25,'7','\"\"|\"\"','\"/images/general/foodguide/poster3.jpg\"|\"/images/general/foodguide/poster3.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(26,'7','\"\"|\"\"','\"/images/general/foodguide/poster4.jpg\"|\"/images/general/foodguide/poster4.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(27,'7','\"\"|\"\"','\"/images/general/foodguide/poster5.jpg\"|\"/images/general/foodguide/poster5.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(28,'7','\"\"|\"\"','\"/images/general/foodguide/poster6.jpg\"|\"/images/general/foodguide/poster6.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(29,'7','\"\"|\"\"','\"/images/general/foodguide/poster7.jpg\"|\"/images/general/foodguide/poster7.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(30,'7','\"\"|\"\"','\"/images/general/foodguide/poster8.jpg\"|\"/images/general/foodguide/poster8.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(31,'7','\"\"|\"\"','\"/images/general/foodguide/poster9.jpg\"|\"/images/general/foodguide/poster9.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(32,'7','\"\"|\"\"','\"/images/general/foodguide/poster10.jpg\"|\"/images/general/foodguide/poster10.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(33,'7','\"\"|\"\"','\"/images/general/foodguide/poster11.jpg\"|\"/images/general/foodguide/poster11.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(34,'7','\"\"|\"\"','\"/images/general/foodguide/poster12.jpg\"|\"/images/general/foodguide/poster12.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(35,'7','\"\"|\"\"','\"/images/general/foodguide/poster13.jpg\"|\"/images/general/foodguide/poster13.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(36,'7','\"\"|\"\"','\"/images/general/foodguide/poster14.jpg\"|\"/images/general/foodguide/poster14.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(37,'7','\"\"|\"\"','\"/images/general/foodguide/poster15.jpg\"|\"/images/general/foodguide/poster15.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(38,'7','\"\"|\"\"','\"/images/general/foodguide/poster16.jpg\"|\"/images/general/foodguide/poster16.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(39,'7','\"\"|\"\"','\"/images/general/foodguide/poster17.jpg\"|\"/images/general/foodguide/poster17.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(40,'7','\"\"|\"\"','\"/images/general/foodguide/poster19.jpg\"|\"/images/general/foodguide/poster19.jpg\"','/images/general/back3.jpg',NULL,NULL,20150101),
(41,'2','\"\"|\"\"','\"/images/general/tutorial/page-2-bm.jpg\"|\"/images/general/tutorial/page-2-bm.jpg\"','/images/general/back1.png',NULL,NULL,20150101),
(42,'2','\"\"|\"\"','\"/images/general/tutorial/page-3-bm.jpg\"|\"/images/general/tutorial/page-3-bm.jpg\"','/images/general/back1.png',NULL,NULL,20150101),
(43,'2','\"\"|\"\"','\"/images/general/tutorial/page-4-bm.jpg\"|\"/images/general/tutorial/page-4-bm.jpg\"','/images/general/back1.png',NULL,NULL,20150101),
(44,'2','\"\"|\"\"','\"/images/general/tutorial/page-5-bm.jpg\"|\"/images/general/tutorial/page-5-bm.jpg\"','/images/general/back1.png',NULL,NULL,20150101),
(45,'2','\"\"|\"\"','\"/images/general/tutorial/page-6-bm.jpg\"|\"/images/general/tutorial/page-6-bm.jpg\"','/images/general/back1.png',NULL,NULL,20150101),
(46,'2','\"\"|\"\"','\"/images/general/tutorial/page-7-bm.jpg\"|\"/images/general/tutorial/page-7-bm.jpg\"','/images/general/back1.png',NULL,NULL,20150101),
(47,'2','\"\"|\"\"','\"/images/general/tutorial/page-8-bm.jpg\"|\"/images/general/tutorial/page-8-bm.jpg\"','/images/general/back1.png',NULL,NULL,20150101),
(48,'2','\"\"|\"\"','\"/images/general/tutorial/page-9-bm.jpg\"|\"/images/general/tutorial/page-9-bm.jpg\"','/images/general/back1.png',NULL,NULL,20150101),
(49,'2','\"\"|\"\"','\"/images/general/tutorial/page-10-bm.jpg\"|\"/images/general/tutorial/page-10-bm.jpg\"','/images/general/back1.png',NULL,NULL,20150101),
(50,'2','\"\"|\"\"','\"/images/general/tutorial/page-11-bm.jpg\"|\"/images/general/tutorial/page-11-bm.jpg\"','/images/general/back1.png',NULL,NULL,20150101),
(51,'2','\"\"|\"\"','\"/images/general/tutorial/page-12-bm.jpg\"|\"/images/general/tutorial/page-12-bm.jpg\"','/images/general/back1.png',NULL,NULL,20150101),
(52,'6','\"7th Diabetes Complications Conference & Grand Rounds\"|\"7th Diabetes Complications Conference & Gran','\"\"|\"\"','/images/general/foodactivities/diabetes.jpg','0.7',NULL,20150101),
(53,'6','\"11th National Symposium on Adolescent Health Malaysia 2015\"|\"11th National Symposium on Adolescent ','\"\"|\"\"','/images/general/foodactivities/adolescent.jpg','0.71',NULL,20150101),
(54,'6','\"30th Annual Scientific Conference NSM 2015\nOptimal Nutrition for Future Generations\"|\"30th Annual S','\"\"|\"\"','/images/general/foodactivities/nsm.jpg','1.98',NULL,20150101),
(55,'6','\"APHM International Healthcare Conference & Exhibition 2015\"|\"APHM International Healthcare Conferen','\"\"|\"\"','/images/general/foodactivities/aphm.jpg','0.94',NULL,20150101),
(56,'6','\"Diabetes Asia Conference 2015\"|\"Diabetes Asia Conference 2015\"','\"\"|\"\"','/images/general/foodactivities/diabetesasia.jpg','1.41',NULL,20150101),
(57,'6','\"5th International Public Health Conference\"|\"5th International Public Health Conference\"','\"\"|\"\"','/images/general/foodactivities/publichealth.jpg','0.70',NULL,20150101);

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_title` varchar(100) DEFAULT NULL,
  `product_info` varchar(100) DEFAULT NULL,
  `product_price` varchar(100) DEFAULT NULL,
  `product_currency` varchar(100) DEFAULT 'RM',
  `product_category` varchar(100) DEFAULT NULL,
  `product_options` varchar(100) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `updated` int(10) DEFAULT '20150101',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`id`,`product_title`,`product_info`,`product_price`,`product_currency`,`product_category`,`product_options`,`product_image`,`updated`) values 
(1,'\"Healthy Living, Recipes For Healthy Living\"|\"Healthy Living, Recipes For Healthy Living\"','\"\"|\"\"','0','RM','ebook',NULL,'/images/products/product1.png',20150101),
(2,'\"Healthy Eating During Deepavali Festival\"|\"Healthy Eating During Deepavali Festival\"','\"\"|\"\"','0','RM','ebook',NULL,'/images/products/product2.png',20150101),
(3,'\"Makan Sihat Di Hari Raya\"|\"Eat Healthily During Hari Raya\"','\"\"|\"\"','0','RM','ebook','[{language:[\"Bahasa Melayu\",\"English]}]','/images/products/product3.png',20150101);

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

/*Data for the table `ref` */

insert  into `ref`(`id`,`code`,`descr`,`cat`,`sort`,`param1`) values 
(1,'M','Male','GEN',NULL,NULL),
(2,'F','Female','GEN',NULL,NULL),
(46,'1','Belum Selesai','Status',NULL,NULL),
(9,'adm','Administrator','usr',NULL,NULL),
(10,'pub','Public','usr',NULL,NULL),
(11,'aut','Author','usr',NULL,NULL),
(12,'mgr','Manager','usr',NULL,NULL),
(57,'ADM','Admin','role',NULL,NULL),
(15,'y','Yes','yn',NULL,NULL),
(16,'n','No','yn',NULL,NULL),
(56,'MUL','Multimedia','course',NULL,NULL),
(54,'PHP','PHP','course',NULL,NULL),
(55,'JAVA','JAVA','course',NULL,NULL),
(45,'2','Selesai','Status',NULL,NULL),
(58,'TNI','Trainee','role',NULL,NULL),
(59,'TNR','Trainer','role',NULL,NULL),
(60,'PUB','Public','role',NULL,NULL);

/*Table structure for table `social` */

DROP TABLE IF EXISTS `social`;

CREATE TABLE `social` (
  `social_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `imagepath` varchar(100) DEFAULT NULL,
  `question` varchar(100) DEFAULT NULL,
  `reply` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `updated` int(10) DEFAULT '20150101',
  PRIMARY KEY (`social_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `social` */

insert  into `social`(`social_id`,`date`,`time`,`imagepath`,`question`,`reply`,`username`,`updated`) values 
(2,'05-02-2015','10:00:00','/images/social/social1.png','hi just testing','hi back','hezlym@yahoo.com',20150101),
(3,'03-02-2015','10:00:00','/images/social/social2.png','hello','hello back','hezlym@yahoo.com',20150101);

/*Table structure for table `sys_user` */

DROP TABLE IF EXISTS `sys_user`;

CREATE TABLE `sys_user` (
  `user_id` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(5) DEFAULT NULL,
  `create_dt` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `sys_user` */

insert  into `sys_user`(`user_id`,`password`,`role`,`create_dt`) values 
('azman','azman','adm','2015-02-12');

/*Table structure for table `system` */

DROP TABLE IF EXISTS `system`;

CREATE TABLE `system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `system_version` varchar(100) NOT NULL DEFAULT '1.0.0',
  `system_languageid` varchar(100) NOT NULL DEFAULT '1',
  `updated` int(10) NOT NULL DEFAULT '20150101',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `system` */

insert  into `system`(`id`,`system_version`,`system_languageid`,`updated`) values 
(1,'1.0.0','1',20150101);

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
  `sync` int(11) NOT NULL DEFAULT '20150101',
  `updated` int(10) NOT NULL DEFAULT '20150101',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`user_id`,`user_fullname`,`username`,`password`,`login_date`,`login_time`,`user_languageid`,`dob`,`gender`,`height`,`weight`,`bmi`,`activitylevel`,`program`,`needcalorie`,`sync`,`updated`) values 
(1,'azman','azman zakaria','azman','azman','2015',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,20150101,20150101),
(3,'730105075549','Hezly Mohamed','hezlym@yahoo.com','xxxx',NULL,NULL,'1','05-01-1973','1','180','100','30.2','2','2','1950',20150101,20150101);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `login_dt` datetime DEFAULT NULL,
  `lang` varchar(5) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `height` decimal(4,1) DEFAULT NULL,
  `weight` decimal(4,1) DEFAULT NULL,
  `bmi` decimal(3,1) DEFAULT NULL,
  `act_level` varchar(5) DEFAULT NULL,
  `program` varchar(5) DEFAULT NULL,
  `need_calorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
