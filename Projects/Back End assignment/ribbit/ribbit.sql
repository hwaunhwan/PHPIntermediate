# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: ribbit.ccoefbt2lfct.us-east-1.rds.amazonaws.com (MySQL 5.6.23-log)
# Database: ribbit
# Generation Time: 2015-09-15 04:34:02 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table profile
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `profile_pic_url` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_user_id` (`user_id`),
  CONSTRAINT `profile_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;

INSERT INTO `profile` (`id`, `user_id`, `first_name`, `last_name`, `profile_pic_url`)
VALUES
	(0,0,'Austin','Coding Academy','http://i.imgur.com/oseSh7x.jpg'),
	(1,1,'Joe','McCullough','http://i.imgur.com/wY2sVGA.jpg'),
	(2,3,'Kermit',NULL,'http://i.imgur.com/aGsL8C2.jpg'),
	(3,2,'Silent','Bob','http://i.imgur.com/4UZzCsY.jpg');

/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ribbit
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ribbit`;

CREATE TABLE `ribbit` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `content` varchar(140) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `ribbit_user_id` (`user_id`),
  CONSTRAINT `ribbit_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `ribbit` WRITE;
/*!40000 ALTER TABLE `ribbit` DISABLE KEYS */;

INSERT INTO `ribbit` (`id`, `user_id`, `content`, `created`)
VALUES
	(0,0,'Enjoy your back end assignment!','2015-06-12 22:02:36'),
	(1,1,'Today I played too much street fighter. Today was a good day.','2015-03-23 18:02:55'),
	(2,1,'Check out my site! http://joequery.me','2015-04-13 18:03:55'),
	(3,1,'I\'ve been working on my github profile today. It\'s coming along! https://github.com/joequery','2015-01-02 18:05:08'),
	(4,0,'Practice coding every day. It\'s a skill that takes both time and effort.','2015-01-30 18:05:51'),
	(5,0,'Check out Hacker News for programming news: https://news.ycombinator.com/','2015-06-13 18:06:17'),
	(6,0,'Even if you\'re a back end student, you should try to become familiar with the front end too.','2015-02-17 18:07:58'),
	(7,3,'Well, you see, I\'m not a sailor, I\'m a frog. ','2015-01-09 18:09:23'),
	(8,3,' It\'s too bad the dancing girls are on vacation; this crowd\'s getting ugly. ','2015-05-29 18:10:13'),
	(9,1,'Dude, coding AI is like...creating the creation of thought...holy shit.','2015-04-20 18:10:48');

/*!40000 ALTER TABLE `ribbit` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `username`, `email`, `password`)
VALUES
	(0,'austincoding','info@austincodingacademy.com','HOEBueoutnhOEuthOEurKXBOEush23'),
	(1,'joequery','joe@austincodingacademy.com','234928oeuhtnonsehu230423nobawmbk'),
	(2,'silentbob','silentbob@shhh.com','ekokohentohu23OEUHONTEHUHH'),
	(3,'kermit','kermit@kermitthefrog.com','oOEUHXTnhoeruXZOEUSTNHOEU98982');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
