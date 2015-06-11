-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2015 at 10:12 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barang`
--
CREATE DATABASE IF NOT EXISTS `barang` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `barang`;

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE IF NOT EXISTS `data_produk` (
  `kode_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(30) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `stok` varchar(3) NOT NULL,
  `picture` text NOT NULL,
  PRIMARY KEY (`kode_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`kode_produk`, `nama_produk`, `warna`, `stok`, `picture`) VALUES
(1, 'bola plastik', 'merah', '5', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
