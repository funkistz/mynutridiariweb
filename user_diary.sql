USE `mynutridiariv2`;

/*Table structure for table `user_diary` */

DROP TABLE IF EXISTS `user_diary`;

CREATE TABLE `user_diary` (
  `username` varchar(255) NOT NULL,
  `diary` text,
  `exercise` text,
  `last_sync` datetime DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
