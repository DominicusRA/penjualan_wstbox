/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - penjualan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`penjualan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `penjualan`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id_barang` int(20) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `ukuran` float DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`id_barang`,`tanggal`,`kode`,`nama`,`ukuran`,`keterangan`) values 
(6,'2022-10-15','BRG/001/2022','Kardus large',20.9,'tidak ada keterangan sama sekali\r\n'),
(7,'2022-10-15','BRG/002/2022','Kardus Medium',49.9,'tidak ada');

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id_customer` int(20) NOT NULL AUTO_INCREMENT,
  `kode` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `customer` */

insert  into `customer`(`id_customer`,`kode`,`nama`,`alamat`,`tanggal`) values 
(9,'CST/001/2022','PT Maju Bersama','Jl Mawar',NULL),
(10,'CST/002/2022','PT Hari Indah','Jl pagi cerah','2022-10-15');

/*Table structure for table `penjualan` */

DROP TABLE IF EXISTS `penjualan`;

CREATE TABLE `penjualan` (
  `id_penjualan` int(20) NOT NULL AUTO_INCREMENT,
  `id_customer` int(20) DEFAULT NULL,
  `id_barang` int(20) DEFAULT NULL,
  `id_user` int(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `no_transaksi` varchar(50) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total_harga` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_penjualan`),
  KEY `penjualan_customer` (`id_customer`),
  KEY `penjualan_brang` (`id_barang`),
  CONSTRAINT `penjualan_brang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  CONSTRAINT `penjualan_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `penjualan` */

insert  into `penjualan`(`id_penjualan`,`id_customer`,`id_barang`,`id_user`,`tanggal`,`no_transaksi`,`harga`,`jumlah`,`total_harga`) values 
(4,9,6,17,'2022-10-15','PNJL/001/2022',12000,1251,NULL),
(5,9,7,16,'2022-10-15','BLI/001/2022',12000,2,NULL),
(6,10,7,16,'2022-10-15','PNJL/002/2022',1200,1289,NULL),
(7,9,6,16,'2022-10-15','qqq',11000,3,NULL);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`,`nama`,`tanggal`) values 
(16,'admin','admin','admin','2022-10-15'),
(17,'admin2','admin2','admin2',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
