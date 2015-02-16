-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2015 at 02:32 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ppl_keep_taman`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `name`, `email`) VALUES
('gilang', 'gilang', 'gilang', 'gilang.9h@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
`id_pengaduan` int(11) NOT NULL,
  `nama_pelapor` varchar(75) NOT NULL,
  `email_pelapor` varchar(50) NOT NULL,
  `id_taman` int(11) NOT NULL,
  `waktu_lapor` date NOT NULL,
  `subjek_laporan` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `id_admin` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `nama_pelapor`, `email_pelapor`, `id_taman`, `waktu_lapor`, `subjek_laporan`, `isi`, `foto`, `status`, `id_admin`) VALUES
(43, 'Gilang', 'gilang.9h@gmail.com', 3, '2015-02-19', 'Test Laporan', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image/cabin.png', 0, ''),
(44, 'Windy', 'windyameliaa@gmail.com', 4, '2015-01-01', 'Test Laporan 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image/cake.png', 0, ''),
(46, 'gilang', 'asd@asd.asd', 4, '2015-02-16', 'asdsad', 'asdsadsad', 'image/Capture.PNG', 0, ''),
(47, 'sajd', 'dsjah@dasjk.asd', 4, '2015-02-16', 'sadas', 'djsakdjas', 'image/Capture.PNG', 0, ''),
(48, 'sadjsa', 'dsajh@ahdjk.asd', 5, '2015-02-16', 'dsad', 'sadhsakhdkj', 'image/Capture.PNG', 0, ''),
(49, 'asdjk', 'djskaa@as.asd', 4, '2015-02-16', 'asdsa', 'sajdaksd', 'image/Capture.PNG', 0, ''),
(50, 'salkdjas', 'lkjdsalk@jsdkal.asd', 5, '2015-02-16', 'dsadas', 'sdadas', 'image/Logo Ganesha.jpg', 0, ''),
(51, 'dsajd', 'jkhdsakjhd@hjkasd.asd', 3, '2015-02-16', 'dsadsa', 'sadasd', 'image/Logo Ganesha.jpg', 0, ''),
(52, 'sadjsak', 'kdlsjal@jkldas.asd', 6, '2015-02-16', 'dkslajdkla', 'dsajdkasj', 'image/Logo Ganesha.jpg', 0, ''),
(53, 'sakjdaks', 'ksjdajd@jkasd.asd', 4, '2015-02-16', 'dskajdkas', 'djsakdjask', 'image/Logo Ganesha.jpg', 0, ''),
(54, 'djsahd', 'jhdsakj@jkadh.asd', 4, '2015-02-16', 'sadasd', 'dsajdas', 'image/Capture.PNG', 0, ''),
(55, 'sajdhsa', 'jkdhsakj@jakhd.asd', 4, '2015-02-16', 'sadsa', 'dsadsad', 'image/Capture.PNG', 0, ''),
(56, 'sad', 'sjdka@JAHSD.ASD', 3, '2015-02-16', 'dsajhd', 'dsajdhsaj', 'image/Capture.PNG', 0, ''),
(57, 'asjkd', 'kjhdsa@Jkhad.asd', 3, '2015-02-16', 'dskajhdjk', 'asdsad', 'image/Capture.PNG', 0, ''),
(58, 'dskajdha', 'kjhsa@Kjhasd.asd', 4, '2015-02-16', 'dsajd', 'dsadas', 'image/diagram.png', 0, ''),
(59, 'sadjhsa', 'kjahsdkj@kajshd.ads', 4, '2015-02-16', 'dsadsad', 'sadsadsa', 'image/diagram2.png', 0, ''),
(60, 'sakjdsaj', 'jkhsajkd@kjasdh.ads', 4, '2015-02-16', 'sdadasd', 'sadasd', 'image/Capture.PNG', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan_terkirim`
--

CREATE TABLE IF NOT EXISTS `pengaduan_terkirim` (
  `id_pengaduan` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pihak_berwenang`
--

CREATE TABLE IF NOT EXISTS `pihak_berwenang` (
`id_lembaga` int(11) NOT NULL,
  `nama_lembaga` varchar(75) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taman`
--

CREATE TABLE IF NOT EXISTS `taman` (
`id_taman` int(11) NOT NULL,
  `nama_taman` varchar(100) NOT NULL,
  `alamat` varchar(75) NOT NULL,
  `geolokasi` varchar(50) NOT NULL,
  `username_admin` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taman`
--

INSERT INTO `taman` (`id_taman`, `nama_taman`, `alamat`, `geolokasi`, `username_admin`) VALUES
(3, 'Taman Lalu Lintas', 'Jl. Kalimantan Sumur Bandung', '-6.910663,107.613487', 'gilang'),
(4, 'Taman Pramuka', 'Cihapit Bandung Wetan', '-6.910366,107.626770', 'gilang'),
(5, 'Taman Lansia', 'Jl. Jalaprang Cibeunying Kaler', '-6.897686,107.631233', 'gilang'),
(6, 'Taman Musik', 'Jl. Sumbawa Sumur Bandung', '-6.911932,107.616059', 'gilang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
 ADD PRIMARY KEY (`id_pengaduan`), ADD KEY `pengaduan_ibfk_1` (`id_taman`);

--
-- Indexes for table `pengaduan_terkirim`
--
ALTER TABLE `pengaduan_terkirim`
 ADD PRIMARY KEY (`id_pengaduan`,`id_lembaga`), ADD KEY `id_lembaga` (`id_lembaga`);

--
-- Indexes for table `pihak_berwenang`
--
ALTER TABLE `pihak_berwenang`
 ADD PRIMARY KEY (`id_lembaga`);

--
-- Indexes for table `taman`
--
ALTER TABLE `taman`
 ADD PRIMARY KEY (`id_taman`), ADD KEY `taman_ibfk_1` (`username_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `pihak_berwenang`
--
ALTER TABLE `pihak_berwenang`
MODIFY `id_lembaga` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `taman`
--
ALTER TABLE `taman`
MODIFY `id_taman` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`id_taman`) REFERENCES `taman` (`id_taman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengaduan_terkirim`
--
ALTER TABLE `pengaduan_terkirim`
ADD CONSTRAINT `pengaduan_terkirim_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `pihak_berwenang` (`id_lembaga`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pengaduan_terkirim_ibfk_2` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taman`
--
ALTER TABLE `taman`
ADD CONSTRAINT `taman_ibfk_1` FOREIGN KEY (`username_admin`) REFERENCES `admin` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
