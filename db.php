/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.16 : Database - mvcshop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mvcshop` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `mvcshop`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `category` */

insert  into `category`(`id`,`name`,`sort_order`,`status`) values (1,'Брюки',NULL,NULL),(2,'Сорочки',NULL,NULL),(3,'Футболки',NULL,NULL);

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `availability` int(11) DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `is_new` int(11) DEFAULT NULL,
  `is_recomended` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `product` */

insert  into `product`(`id`,`name`,`category_id`,`code`,`price`,`availability`,`brand`,`image`,`description`,`is_new`,`is_recomended`,`status`) values (1,'Футболка',1,NULL,12,NULL,NULL,NULL,NULL,0,NULL,1),(2,'Брюки',2,NULL,10,NULL,NULL,NULL,NULL,0,NULL,1),(3,'Майки',1,NULL,5,NULL,NULL,NULL,NULL,0,NULL,1),(4,'Обувь',1,NULL,25,NULL,NULL,NULL,NULL,0,NULL,1),(5,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(6,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(7,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(8,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(9,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(10,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(11,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(12,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(13,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(14,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(15,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(16,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(17,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(18,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(19,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(20,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(21,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(22,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(23,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(24,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(25,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(26,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(27,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(28,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(29,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(30,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1),(31,'Джинсы',1,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,1);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`name`,`email`,`password`) values (1,'FM','mfayziev@eskhata.tj','123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
