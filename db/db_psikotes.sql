-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 02:42 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_psikotes`
--

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE IF NOT EXISTS `judul` (
  `id_judul` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `batas_waktu` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul`
--

INSERT INTO `judul` (`id_judul`, `judul`, `batas_waktu`) VALUES
(1, 'Soal Gambar', '01:15:10'),
(2, 'Soal Boulevard', '01:00:00'),
(3, 'Soal Garis', '12:15:10'),
(4, 'Soal Persamaan', '01:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `id` int(11) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level`) VALUES
(1, 'Admin'),
(2, 'Novice'),
(3, 'SuperAdmin'),
(4, 'Peserta');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `tanggal_aktif` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama`, `pin`, `tanggal_daftar`, `tanggal_aktif`) VALUES
(1, 'dodi', '123456', '2018-08-01 07:11:30', '2018-08-24 09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE IF NOT EXISTS `soal` (
  `id_soal` int(11) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `pilihan_1` varchar(100) NOT NULL,
  `pilihan_2` varchar(100) NOT NULL,
  `pilihan_3` varchar(100) NOT NULL,
  `pilihan_4` varchar(100) NOT NULL,
  `pilihan_5` varchar(100) NOT NULL,
  `pilihan_6` varchar(100) NOT NULL,
  `id_judul` int(11) NOT NULL,
  `jawaban` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`, `pilihan_1`, `pilihan_2`, `pilihan_3`, `pilihan_4`, `pilihan_5`, `pilihan_6`, `id_judul`, `jawaban`) VALUES
(1, 'Askes (seketen) Konsisten\r\n\r\nGemar (â€¦.) polemik', 'kamrim', 'armmik', 'mikram', 'irkam', 'karmim', 'ikrma', 2, 'armmik'),
(2, 'Analogi adalah suatu analisa yang logis tentang sebuah hubungan antara sebab akibat, proses, perbandingan yang dihubungkan dengan lainnya yang memiliki sistematika sejenis.\r\n\r\nMotor: Roda', 'Buku: Bolpoin', 'Rumah: Pintu', 'Rumah:Pondasi', 'Sandal:Karet', 'Gigi:Geraham', 'Burung:Terbang', 3, 'Rumah:Pondasi'),
(3, 'Garis mana yang tidak salah', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 3, 'lima'),
(21, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti a similique ab quis. Iste sed aspernatur fugiat officiis culpa distinctio, quas corporis werd suscipit dolorem iusto, optio enim, illo magnam!', 'weirdo', 'werd', 'arsin', 'ardan', 'arbam', 'arkam', 2, 'werd'),
(23, 'Whic pictures tells you about stories', 'IMG-20180922-WA0001.jpg', 'IMG-20180926-WA0000.jpg', 'IMG-20180926-WA0005.jpg', 'IMG-20180926-WA0006.jpg', 'IMG-20180926-WA0007.jpg', 'IMG-20180927-WA0000.jpg', 1, 'IMG-20180927-WA0000.jpg'),
(24, 'Persamaan APORISMA', 'Apriori', 'Bentuk', 'Kesesuaian', 'Pendekatan', 'Prima', 'Proficient', 4, 'Apriori');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `level`) VALUES
(1, 'ardid', 'b623a7cebe', 'Admin'),
(9, 'Ditad', '97282b278e', 'Admin'),
(10, 'Ripki', 'be23b3b9b0', 'SuperAdmin'),
(11, 'Miera', 'd5ca322453', 'Admin'),
(13, 'Indah', 'f3385c508c', 'Peserta'),
(16, 'Supri', 'bc47f7492d', 'Admin'),
(18, 'Redi', '5b99cd6b0f', 'Peserta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `judul`
--
ALTER TABLE `judul`
  MODIFY `id_judul` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
