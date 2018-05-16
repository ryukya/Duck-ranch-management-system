-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2015 at 03:59 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dr_isis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_analisa_pakan`
--

CREATE TABLE IF NOT EXISTS `tb_analisa_pakan` (
  `id_jenis_bebek` varchar(10) NOT NULL,
  `bekatul` float NOT NULL,
  `tepung_jagung` float NOT NULL,
  `daun` float NOT NULL,
  `konsentrat` float NOT NULL,
  `Broiler` float NOT NULL,
  `berat` float NOT NULL,
  PRIMARY KEY (`id_jenis_bebek`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_analisa_pakan`
--

INSERT INTO `tb_analisa_pakan` (`id_jenis_bebek`, `bekatul`, `tepung_jagung`, `daun`, `konsentrat`, `Broiler`, `berat`) VALUES
('Grower', 0.6, 0.2, 0.1, 0.1, 0, 104),
('Indukan', 0.6, 0.2, 0, 0.2, 0, 150),
('Starter', 0, 0, 0, 0, 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_grower`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal_grower` (
  `id_grower` int(5) NOT NULL AUTO_INCREMENT,
  `id_kandang` varchar(7) NOT NULL,
  `id_jenis_jadwal` varchar(3) NOT NULL,
  `deadline` datetime NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_grower`),
  KEY `id_kandang` (`id_kandang`,`id_jenis_jadwal`),
  KEY `id_jenis_jadwal` (`id_jenis_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tb_jadwal_grower`
--

INSERT INTO `tb_jadwal_grower` (`id_grower`, `id_kandang`, `id_jenis_jadwal`, `deadline`, `status`) VALUES
(11, 'g03', 'cln', '2016-01-03 07:00:00', 0),
(12, 'g03', 'pkn', '2015-12-21 07:00:00', 0),
(13, 'gr11', 'cln', '2016-01-02 07:00:00', 0),
(14, 'gr11', 'pkn', '2015-12-20 07:00:00', 0),
(15, 'degr01', 'pkn', '2015-12-21 07:00:00', 0),
(16, 'degr01', 'cln', '2016-01-03 07:00:00', 0),
(17, 'degr01', 'klt', '2016-03-19 07:00:00', 0),
(18, 'degr01', 'vks', '2016-01-29 07:00:00', 0),
(19, 'g03', 'vks', '2016-03-19 07:00:00', 0),
(20, 'STR1', 'klt', '2016-03-20 07:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_indukan`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal_indukan` (
  `id_indukan` int(5) NOT NULL AUTO_INCREMENT,
  `id_kandang` varchar(7) NOT NULL,
  `id_jenis_jadwal` varchar(3) NOT NULL,
  `deadline` datetime NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_indukan`),
  KEY `id_kandang` (`id_kandang`,`id_jenis_jadwal`),
  KEY `id_jenis_jadwal` (`id_jenis_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_jadwal_indukan`
--

INSERT INTO `tb_jadwal_indukan` (`id_indukan`, `id_kandang`, `id_jenis_jadwal`, `deadline`, `status`) VALUES
(1, 'ggA01', 'cln', '2015-11-17 00:00:00', 0),
(2, 'i01', 'cln', '2016-01-10 07:00:00', 0),
(4, 'i01', 'klt', '2018-07-22 07:00:00', 0),
(5, 'i01', 'pkn', '2015-12-21 07:00:00', 0),
(6, 'i01', 'vks', '2016-01-29 07:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_stater`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal_stater` (
  `id_starter` int(5) NOT NULL AUTO_INCREMENT,
  `id_kandang` varchar(7) NOT NULL,
  `id_jenis_jadwal` varchar(3) NOT NULL,
  `deadline` datetime NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_starter`),
  KEY `id_kandang` (`id_kandang`,`id_jenis_jadwal`),
  KEY `id_jenis_jadwal` (`id_jenis_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tb_jadwal_stater`
--

INSERT INTO `tb_jadwal_stater` (`id_starter`, `id_kandang`, `id_jenis_jadwal`, `deadline`, `status`) VALUES
(1, 's02', 'pkn', '2015-12-20 07:00:00', 0),
(3, 's01', 'shu', '2015-12-27 07:00:00', 0),
(4, 's01', 'vks', '2016-01-09 07:00:00', 0),
(6, 's01', 'cln', '2016-01-03 07:00:00', 0),
(7, 's01', 'pkn', '2015-12-20 07:00:00', 0),
(9, 's01', 'klt', '2016-02-18 07:00:00', 0),
(11, 'stra01', 'cln', '2016-01-03 07:00:00', 0),
(12, 'stra01', 'jln', '2015-11-17 00:00:00', 0),
(13, 'sgo01', 'cln', '2016-01-04 07:00:00', 0),
(14, 'sgo01', 'jln', '2015-11-17 00:00:00', 0),
(15, 'KDI01', 'jln', '2015-11-17 00:00:00', 0),
(16, 'gs01', 'cln', '2015-11-17 00:00:00', 0),
(17, 'gs01', 'jln', '2015-11-17 00:00:00', 0),
(19, 's01', 'klt', '2016-02-18 07:00:00', 0),
(20, 's02', 'cln', '2016-01-03 07:00:00', 0),
(21, 'kos01', 'cln', '2016-01-03 07:00:00', 0),
(22, 'kos01', 'klt', '2016-02-18 07:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_jadwal`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_jadwal` (
  `id_jenis_jadwal` varchar(3) NOT NULL,
  `jenis_jadwal` varchar(20) NOT NULL,
  `hari` varchar(3) NOT NULL,
  PRIMARY KEY (`id_jenis_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_jadwal`
--

INSERT INTO `tb_jenis_jadwal` (`id_jenis_jadwal`, `jenis_jadwal`, `hari`) VALUES
('cln', 'pembersihan kandang', '14'),
('jln', 'jadwal jalan-jalan', '21'),
('klt', 'pergantian kloter', '90'),
('pkn', 'jadwal pakan', '1'),
('shu', 'penurunan suhu', '7'),
('vks', 'pemberian vaksin', '60');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kandang`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_kandang` (
  `id_jenis_kandang` varchar(1) NOT NULL,
  `nama_jenis_kandang` varchar(10) NOT NULL,
  PRIMARY KEY (`id_jenis_kandang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_kandang`
--

INSERT INTO `tb_jenis_kandang` (`id_jenis_kandang`, `nama_jenis_kandang`) VALUES
('G', 'Grower'),
('I', 'Indukan'),
('S', 'Starter');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kandang`
--

CREATE TABLE IF NOT EXISTS `tb_kandang` (
  `id_kandang` varchar(7) NOT NULL,
  `id_peternakan` varchar(10) NOT NULL,
  `id_jenis_kandang` varchar(1) NOT NULL,
  `isi_kandang` int(3) NOT NULL,
  PRIMARY KEY (`id_kandang`),
  KEY `id_peternakan` (`id_peternakan`),
  KEY `id_jenis_kandang` (`id_jenis_kandang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kandang`
--

INSERT INTO `tb_kandang` (`id_kandang`, `id_peternakan`, `id_jenis_kandang`, `isi_kandang`) VALUES
('degr01', 'dede', 'G', 45),
('dein01', 'dede', 'I', 30),
('desr01', 'dede', 'S', 75),
('g03', 'ibal', 'G', 30),
('g04', 'ibal', 'G', 20),
('ggA01', 'a', 'I', 21),
('go1', 'ibal', 'G', 50),
('gr11', 'a', 'G', 150),
('gs01', 'polo', 'S', 20),
('i01', 'ibal', 'I', 80),
('indk', 'a', 'I', 70),
('KDI01', 'MIMI', 'S', 100),
('kos01', 'koala', 'S', 20),
('s01', 'ibal', 'S', 100),
('s02', 'ibal', 'S', 75),
('sgo01', 'bebekgo', 'S', 210),
('sr23', 'a', 'S', 200),
('STR1', 'BEB1', 'G', 20),
('stra01', 'a', 'S', 200);

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE IF NOT EXISTS `tb_karyawan` (
  `id_karyawan` varchar(20) NOT NULL,
  `nama_karyawan` varchar(25) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  `id_peternakan` varchar(4) NOT NULL,
  PRIMARY KEY (`id_karyawan`),
  KEY `id_peternakan` (`id_peternakan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nama_karyawan`, `no_telp`, `pass`, `status`, `id_peternakan`) VALUES
('asas', 's', '', 'sdd', 0, ''),
('bdo1', 'Budiono', '02133021', 'bdo1', 1, 'ibal'),
('BOBO', 'BOBO', '', 'PASS1', 0, 'MIMI'),
('Bruno', 'Bruno Soo', '081565456', '1', 0, 'dede'),
('dodo', 'dodo maknyus', '', 'kukumala', 0, 'ibal'),
('helma', 'helma daniar', '085755456377', '123', 0, 'BEB1'),
('Ismi', 'nono', '', 'nono', 0, 'bebe'),
('Jones', 'Jones Mark', '', 'jones', 0, 'a'),
('Joni', 'Joni nege', '', 'rara', 0, 'ibal'),
('kuku', 'kuku malu', '', 'buah', 0, 'ibal'),
('llil', 'limas', '', 'a', 0, 'ibal'),
('lolo', 'wordpress', '', '1234', 0, 'ibal'),
('Lula', 'Lula Sese', '234323432', '1', 0, 'dede'),
('mimi', 'mimi', '0124535434', '1', 0, 'koal'),
('Uryu', 'Lunal Uryu', '', '1234', 0, 'polo'),
('usus', 'Usil Benar', '', '1234', 0, 'ibal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembagian`
--

CREATE TABLE IF NOT EXISTS `tb_pembagian` (
  `id_pembagian` int(4) NOT NULL AUTO_INCREMENT,
  `id_kandang` varchar(7) NOT NULL,
  `id_karyawan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pembagian`),
  KEY `id_kandang` (`id_kandang`,`id_karyawan`),
  KEY `id_karyawan` (`id_karyawan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tb_pembagian`
--

INSERT INTO `tb_pembagian` (`id_pembagian`, `id_kandang`, `id_karyawan`) VALUES
(12, 'degr01', 'Bruno'),
(13, 'dein01', 'Lula'),
(7, 'g04', 'usus'),
(3, 'go1', 'bdo1'),
(11, 'gs01', 'Uryu'),
(10, 'KDI01', 'BOBO'),
(14, 'kos01', 'mimi'),
(1, 's01', 'bdo1'),
(5, 's01', 'kuku'),
(6, 's01', 'llil'),
(2, 's02', 'bdo1'),
(9, 'sgo01', 'Ismi'),
(15, 'STR1', 'helma'),
(8, 'stra01', 'Jones');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemberian_pakan`
--

CREATE TABLE IF NOT EXISTS `tb_pemberian_pakan` (
  `id_pemberian` int(1) NOT NULL,
  `Nama_method` varchar(25) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id_pemberian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemberian_pakan`
--

INSERT INTO `tb_pemberian_pakan` (`id_pemberian`, `Nama_method`, `info`) VALUES
(1, 'Cara Pemberian Basah', 'Pakan Bebek yang bercampur Konsentrat dicampur dengan air. Hal ini membuat bebek lebih mudah mencerna makanan. \r\nPada metode ini frekuensi pemberian pakannya  harus ditingkatakan dan volumenya kecil (langsung habis).Alasannya agar pakan yang tersisa tidak mengundang penyakit.'),
(2, 'Cara Pemberian Kering ', 'Pakan konsentrat atau racikan langsung diberikan secara langsung. Hal ini aman dan praktis. Namun sisi negatifnya banyak pakan terbuang dan  kurang mudah dicerna (dinikmati) oleh bebek.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peternakan`
--

CREATE TABLE IF NOT EXISTS `tb_peternakan` (
  `id_peternakan` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_pemilik` varchar(25) NOT NULL,
  `nama_peternakan` varchar(20) NOT NULL,
  `tanggal_berdiri` date NOT NULL,
  `jumlah_kandang_stater` int(3) NOT NULL,
  `luas_kandang_stater` int(5) NOT NULL,
  `jumlah_kandang_grower` int(3) NOT NULL,
  `luas_kandang_grower` int(5) NOT NULL,
  `jumlah_kandang_indukan` int(3) NOT NULL,
  `luas_kandang_indukan` int(5) NOT NULL,
  `luas_halaman` int(5) NOT NULL,
  `jarak_perumahan` int(5) NOT NULL,
  `jarak_pabrik` int(5) NOT NULL,
  `jarak_pasar` int(5) NOT NULL,
  `jumlah_sumber_air` int(2) NOT NULL,
  `userLevel` int(11) NOT NULL,
  PRIMARY KEY (`id_peternakan`),
  KEY `id_pemilik` (`nama_pemilik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peternakan`
--

INSERT INTO `tb_peternakan` (`id_peternakan`, `password`, `nama_pemilik`, `nama_peternakan`, `tanggal_berdiri`, `jumlah_kandang_stater`, `luas_kandang_stater`, `jumlah_kandang_grower`, `luas_kandang_grower`, `jumlah_kandang_indukan`, `luas_kandang_indukan`, `luas_halaman`, `jarak_perumahan`, `jarak_pabrik`, `jarak_pasar`, `jumlah_sumber_air`, `userLevel`) VALUES
('a', 'aa', 'asasa', 'addaad', '2013-02-03', 3, 10, 5, 20, 4, 20, 0, 0, 0, 0, 0, 0),
('barujadi', 'barujadi2', 'Baru Asma', 'Baru Fresh Ranch', '2015-02-09', 2, 30, 4, 20, 5, 20, 0, 0, 0, 0, 0, 0),
('BEB1', '123', 'mamong', 'Bebek Super Mamong', '2001-02-06', 2, 6, 3, 8, 2, 10, 0, 0, 0, 0, 0, 0),
('bebekgo', 'bebek', 'Tuan A', 'Bebek Goes', '1998-02-20', 2, 20, 3, 30, 4, 20, 0, 0, 0, 0, 0, 0),
('burjo', 'buburijo', 'Bubur Hijau', 'Burjo Ranch', '1990-02-15', 4, 20, 5, 30, 3, 30, 0, 0, 0, 0, 0, 0),
('dede', 'd', 'Denden MushiNya', 'dede', '2015-02-01', 3, 5, 4, 7, 4, 10, 0, 0, 0, 0, 0, 0),
('Gumbal', 'abcd', 'Gumbal Nya', 'Gumbal duck R', '2010-02-24', 3, 20, 5, 30, 3, 20, 0, 0, 0, 0, 0, 0),
('ibal', 'pass1', 'Ibnu Alian', 'Bebek Super Ali', '2014-06-25', 6, 10, 3, 8, 5, 8, 200, 1, 3, 2, 2, 1),
('koala', 'a', 'koala', 'koala', '2011-12-01', 5, 8, 6, 7, 3, 8, 0, 0, 0, 0, 0, 0),
('Kurupa', 'a', 'Kuru Para', 'Kuru Parara', '2012-12-25', 5, 8, 6, 4, 7, 6, 0, 0, 0, 0, 0, 0),
('MIMI', 'M', 'MIMI MASSS', 'MIMI dr', '2010-01-04', 3, 20, 5, 20, 3, 20, 0, 0, 0, 0, 0, 0),
('polo', 'a', 'George', 'Polo Duck Ranch', '2000-02-23', 5, 3, 5, 4, 7, 4, 0, 0, 0, 0, 0, 0),
('porta', 'a', 'Leo Porta', 'Ranch Youth', '2010-02-03', 2, 20, 3, 30, 4, 20, 0, 0, 0, 0, 0, 0),
('Ruran Duck', '130295', 'Ruran Minare', 'Ruran Duck Ranch', '2002-12-30', 4, 12, 6, 8, 5, 10, 0, 0, 0, 0, 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_jadwal_grower`
--
ALTER TABLE `tb_jadwal_grower`
  ADD CONSTRAINT `tb_jadwal_grower_ibfk_2` FOREIGN KEY (`id_jenis_jadwal`) REFERENCES `tb_jenis_jadwal` (`id_jenis_jadwal`),
  ADD CONSTRAINT `tb_jadwal_grower_ibfk_3` FOREIGN KEY (`id_kandang`) REFERENCES `tb_kandang` (`id_kandang`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_jadwal_indukan`
--
ALTER TABLE `tb_jadwal_indukan`
  ADD CONSTRAINT `tb_jadwal_indukan_ibfk_2` FOREIGN KEY (`id_jenis_jadwal`) REFERENCES `tb_jenis_jadwal` (`id_jenis_jadwal`),
  ADD CONSTRAINT `tb_jadwal_indukan_ibfk_3` FOREIGN KEY (`id_kandang`) REFERENCES `tb_kandang` (`id_kandang`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_jadwal_stater`
--
ALTER TABLE `tb_jadwal_stater`
  ADD CONSTRAINT `tb_jadwal_stater_ibfk_1` FOREIGN KEY (`id_jenis_jadwal`) REFERENCES `tb_jenis_jadwal` (`id_jenis_jadwal`),
  ADD CONSTRAINT `tb_jadwal_stater_ibfk_2` FOREIGN KEY (`id_kandang`) REFERENCES `tb_kandang` (`id_kandang`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_kandang`
--
ALTER TABLE `tb_kandang`
  ADD CONSTRAINT `tb_kandang_ibfk_2` FOREIGN KEY (`id_jenis_kandang`) REFERENCES `tb_jenis_kandang` (`id_jenis_kandang`),
  ADD CONSTRAINT `tb_kandang_ibfk_3` FOREIGN KEY (`id_peternakan`) REFERENCES `tb_peternakan` (`id_peternakan`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_pembagian`
--
ALTER TABLE `tb_pembagian`
  ADD CONSTRAINT `tb_pembagian_ibfk_3` FOREIGN KEY (`id_kandang`) REFERENCES `tb_kandang` (`id_kandang`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pembagian_ibfk_4` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
