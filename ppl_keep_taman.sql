-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2015 at 11:30 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

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
MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
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
