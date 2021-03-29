/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 5.7.32-0ubuntu0.18.04.1 : Database - tutorial
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `tutorial`;

/*Table structure for table `cuti_izin` */

DROP TABLE IF EXISTS `cuti_izin`;

CREATE TABLE `cuti_izin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `departement` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `cuti_izin` */

insert  into `cuti_izin`(`id`,`nik`,`nama`,`departement`,`tanggal`,`keterangan`,`status`) values 
(1,2012321456,'huda','GA','2021-03-29','acara keluarga','menunggu approval'),
(2,2012321457,'jaynuri','GA','2021-03-30','acara keluarga','menunggu approval'),
(3,2012321458,'lia','Finance','2021-03-31','acara keluarga','reject'),
(4,2012321459,'siren','Finance','2021-03-31','acara keluarga','approved');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
