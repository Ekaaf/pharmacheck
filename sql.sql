/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.17-MariaDB : Database - pharmacheck
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pharmacheck` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

/*Table structure for table `guest_users` */

DROP TABLE IF EXISTS `guest_users`;

CREATE TABLE `guest_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `guest_users` */

insert  into `guest_users`(`id`,`name`,`email`,`mobile`,`address`,`created_at`) values 
(1,'test2','mahmudul.hasan@northsouth.edu','01766833859','test','2022-01-17 18:10:02'),
(2,'test2','mahmudul.hasan@northsouth.edu','01766833859','test','2022-01-17 18:10:13'),
(3,'admission_result_approval','mahmudul.hasan@northsouth.edu','01766833859','test','2022-01-17 18:10:46'),
(4,'admission_result_approval','mahmudul.hasan@northsouth.edu','01766833859','test','2022-01-17 18:10:57'),
(5,'admission_result_approval','mahmudul.hasan@northsouth.edu','01766833859','test','2022-01-17 18:12:34'),
(6,'admission_result_approval','mahmudul.hasan@northsouth.edu','01766833859','test','2022-01-17 18:13:02'),
(7,'admission_result_approval','mahmudul.hasan@northsouth.edu','01766833859','test','2022-01-17 18:13:33'),
(8,'','','','','2022-01-17 18:17:09'),
(9,'test','test@gmail.com','01766833859','adsad','2022-01-23 23:23:07'),
(10,'','','','1111','2022-01-24 01:00:29');

/*Table structure for table `medicine_pharmacy` */

DROP TABLE IF EXISTS `medicine_pharmacy`;

CREATE TABLE `medicine_pharmacy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `med_id` int(11) DEFAULT NULL,
  `pharm_id` int(11) DEFAULT NULL,
  `available` int(11) DEFAULT NULL,
  `sold` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `medicine_pharmacy` */

insert  into `medicine_pharmacy`(`id`,`med_id`,`pharm_id`,`available`,`sold`) values 
(1,1,1,10,NULL);

/*Table structure for table `medicines` */

DROP TABLE IF EXISTS `medicines`;

CREATE TABLE `medicines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `medicine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(22) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_arrival` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `medicines` */

insert  into `medicines`(`id`,`medicine`,`brand`,`description`,`price`,`image`,`new_arrival`) values 
(1,'Napadol','Square2.0','Paracetamol','222','public/3.PNG',1),
(2,'Napadol','Square2.0','Paracetamol 1111','22','public/1.PNG',1);

/*Table structure for table `order_medicines` */

DROP TABLE IF EXISTS `order_medicines`;

CREATE TABLE `order_medicines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `med_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `order_medicines` */

insert  into `order_medicines`(`id`,`order_id`,`med_id`,`created_at`) values 
(7,5,1,'2022-01-25 13:38:52');

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` datetime DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `delivery_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `delivery_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `orders` */

insert  into `orders`(`id`,`order_date`,`total`,`delivery_date`,`delivery_address`,`user_id`,`delivery_type`,`payment_method`) values 
(5,'2022-01-25 08:38:52',222,'2022-01-25 14:25:00','1111',5,'Home Delivery','Card');

/*Table structure for table `pharmacies` */

DROP TABLE IF EXISTS `pharmacies`;

CREATE TABLE `pharmacies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL,
  `delivery_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `pharmacies` */

insert  into `pharmacies`(`id`,`name`,`address`,`opening_time`,`closing_time`,`delivery_type`) values 
(1,'Tamanna Pharmacy','Bashundhara Residential','07:00:00','01:00:00','Home Delivery');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` smallint(2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`mobile`,`address`,`role`,`created_at`,`updated_at`) values 
(1,NULL,'admin@gmail.com','123',NULL,NULL,1,'2022-01-17 15:32:09',NULL),
(3,'ishmam','ishmam.ekaf@gmail.com','1111','1111','11111',NULL,NULL,NULL),
(4,'abcd','abcd@gmail.com','1111','1111','1111',NULL,NULL,NULL),
(5,'aaaa','aaaa@gmail.com','1111','1111','1111',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
