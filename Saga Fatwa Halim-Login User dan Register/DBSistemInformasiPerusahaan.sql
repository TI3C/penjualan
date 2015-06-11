-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2015 at 04:44 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `DBSistemInformasiPerusahaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblAbsensi`
--

CREATE TABLE IF NOT EXISTS `tblAbsensi` (
  `Kd_Absensi` char(12) CHARACTER SET utf8 NOT NULL,
  `Kd_Pegawai` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Tgl` date DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `Shift` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblAdmin`
--

CREATE TABLE IF NOT EXISTS `tblAdmin` (
  `IdAdmin` int(11) NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblAlat`
--

CREATE TABLE IF NOT EXISTS `tblAlat` (
  `Kd_Alat` char(12) CHARACTER SET utf8 NOT NULL,
  `Tgl_Beli` date DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblBahanKeluar`
--

CREATE TABLE IF NOT EXISTS `tblBahanKeluar` (
  `Kd_BahanKeluar` char(12) CHARACTER SET utf8 NOT NULL,
  `Tgl_Keluar` varchar(50) DEFAULT NULL,
  `Kd_Pegawai` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Kd_JenisBahan` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblBeliBahan`
--

CREATE TABLE IF NOT EXISTS `tblBeliBahan` (
  `Kd_Bahan` char(12) CHARACTER SET utf8 NOT NULL,
  `Tgl_Beli` date DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL,
  `Satuan` varchar(50) DEFAULT NULL,
  `Kd_JenisBahan` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `kd_pemasok` char(12) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblDetailMaintenance`
--

CREATE TABLE IF NOT EXISTS `tblDetailMaintenance` (
  `Kd_DetMaintenance` char(12) CHARACTER SET utf8 NOT NULL,
  `Keterangan_Kerusakan` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `Biaya` int(11) DEFAULT NULL,
  `Kd_Maintenance` char(12) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblDetailPenjualan`
--

CREATE TABLE IF NOT EXISTS `tblDetailPenjualan` (
  `Kd_Penjualan` char(12) CHARACTER SET utf8 NOT NULL,
  `Kd_Barang` char(12) CHARACTER SET utf8 NOT NULL,
  `Harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblGaji`
--

CREATE TABLE IF NOT EXISTS `tblGaji` (
  `Kd_Gaji` char(12) CHARACTER SET utf8 NOT NULL,
  `Kd_Pegawai` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Periode` varchar(20) DEFAULT NULL,
  `Tgl_Ambil` date DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblHutang`
--

CREATE TABLE IF NOT EXISTS `tblHutang` (
  `Kd_Hutang` char(12) CHARACTER SET utf8 NOT NULL,
  `Tgl_Masuk` date DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL,
  `Keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblJenis`
--

CREATE TABLE IF NOT EXISTS `tblJenis` (
  `Kd_Jenis` char(12) CHARACTER SET utf8 NOT NULL,
  `Keterangan` text,
  `Foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblJenisBahan`
--

CREATE TABLE IF NOT EXISTS `tblJenisBahan` (
  `Kd_JenisBahan` char(12) CHARACTER SET utf8 NOT NULL,
  `Keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblKepentingan`
--

CREATE TABLE IF NOT EXISTS `tblKepentingan` (
  `Kd_Kepentingan` char(12) CHARACTER SET utf8 NOT NULL,
  `Keterangan` char(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblMaintenance`
--

CREATE TABLE IF NOT EXISTS `tblMaintenance` (
  `Kd_Maintenance` char(12) CHARACTER SET utf8 NOT NULL,
  `Tgl_Perbaikan` date DEFAULT NULL,
  `Kd_Alat` char(12) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblPegawai`
--

CREATE TABLE IF NOT EXISTS `tblPegawai` (
  `Kd_Pegawai` char(12) CHARACTER SET utf8 NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Jenis_Kelamin` bit(1) DEFAULT NULL,
  `Telpon` varchar(15) DEFAULT NULL,
  `Alamat` text,
  `Status` bit(1) DEFAULT NULL,
  `Foto` text,
  `Bagian` int(11) DEFAULT NULL,
  PRIMARY KEY (`Kd_Pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblPemasok`
--

CREATE TABLE IF NOT EXISTS `tblPemasok` (
  `kd_pemasok` char(12) CHARACTER SET utf8 NOT NULL,
  `nama_pemasok` varchar(50) DEFAULT NULL,
  `telpon` varchar(15) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblPembiayaanDivisi`
--

CREATE TABLE IF NOT EXISTS `tblPembiayaanDivisi` (
  `Kd_Pembiayaan` char(12) CHARACTER SET utf8 NOT NULL,
  `Divisi` int(11) DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL,
  `Kd_Kepentingan` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Keterangan_Lain` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblPengiriman`
--

CREATE TABLE IF NOT EXISTS `tblPengiriman` (
  `Kd_Pengiriman` char(12) CHARACTER SET utf8 NOT NULL,
  `Kd_Penjualan` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Tgl_Pengiriman` date DEFAULT NULL,
  `Alamat_Pengiriman` text,
  `Atas_Nama` varchar(50) DEFAULT NULL,
  `Telpon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblPenjualan`
--

CREATE TABLE IF NOT EXISTS `tblPenjualan` (
  `Kd_Penjualan` char(12) CHARACTER SET utf8 NOT NULL,
  `Tgl_Penjualan` date DEFAULT NULL,
  `Atas_Nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblPenjualanMasuk`
--

CREATE TABLE IF NOT EXISTS `tblPenjualanMasuk` (
  `Kd_PenjualanMasuk` varchar(12) CHARACTER SET utf8 NOT NULL,
  `Kd_Penjualan` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Tgl_PenjualanMasuk` date DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblRegistrasiProduk`
--

CREATE TABLE IF NOT EXISTS `tblRegistrasiProduk` (
  `Kd_Barang` char(12) CHARACTER SET utf8 NOT NULL,
  `Kd_Jenis` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Kualitas` int(11) DEFAULT NULL,
  `Tgl_Registrasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
