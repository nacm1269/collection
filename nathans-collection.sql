# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: nathans-collection
# Generation Time: 2021-03-31 14:00:32 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table football-jerseys
# ------------------------------------------------------------

DROP TABLE IF EXISTS `football-jerseys`;

CREATE TABLE `football-jerseys` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `team` varchar(25) NOT NULL DEFAULT '',
  `year` int(11) NOT NULL,
  `kit_type` varchar(20) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `football-jerseys` WRITE;
/*!40000 ALTER TABLE `football-jerseys` DISABLE KEYS */;

INSERT INTO `football-jerseys` (`id`, `team`, `year`, `kit_type`, `image`)
VALUES
	(1,'Arsenal',2005,'Home','images/arsenalHome05.png'),
	(2,'Arsenal',2003,'Away','images/arsenalAway03.png'),
	(3,'Arsenal',1992,'Away','images/arsenalAway92.png'),
	(4,'Chelsea',1995,'Away','images/chelseaAway95.png'),
	(5,'Liverpool',1991,'Home','images/liverpoolHome91.png'),
	(6,'Man Utd',1997,'Home','images/manutdHome97.png'),
	(7,'France',1998,'Home','images/franceHome98.png'),
	(8,'Brazil',2002,'Home','images/brazilHome02.png'),
	(9,'Mexico',1998,'Home','images/mexicoHome98.png'),
	(10,'Arsenal',2002,'Away','images/arsenalAway02.png'),
	(11,'Arsenal',2000,'Home','images/arsenalHome00.png'),
	(12,'Arsenal',1993,'Away','images/arsenalAway93.png');

/*!40000 ALTER TABLE `football-jerseys` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
