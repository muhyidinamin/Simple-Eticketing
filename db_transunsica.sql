-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2016 at 11:30 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_transunsica`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES
(2, 'admin', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_confirm`
--

CREATE TABLE `tb_confirm` (
  `No` varchar(8) NOT NULL DEFAULT '',
  `NamaRek` varchar(50) DEFAULT NULL,
  `NoRek` varchar(30) DEFAULT NULL,
  `Bank` varchar(10) DEFAULT NULL,
  `Harga` varchar(9) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_confirm`
--

INSERT INTO `tb_confirm` (`No`, `NamaRek`, `NoRek`, `Bank`, `Harga`, `Status`) VALUES
('BZVU7BP2', 'M Muhyidin Amin', '122112211', 'Permata Ba', '150000', 'Terkonfirmasi'),
('VK6BUT8G', 'Agus Wibawa', '98892738232', 'BNI', '150000', 'Terkonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `No` int(11) NOT NULL,
  `Kelas` varchar(10) DEFAULT NULL,
  `Tgl` date DEFAULT NULL,
  `Asal` varchar(20) DEFAULT NULL,
  `Tujuan` varchar(20) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Kapasitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`No`, `Kelas`, `Tgl`, `Asal`, `Tujuan`, `Harga`, `Kapasitas`) VALUES
(18, 'Bisnis', '2016-06-17', 'Karawang', 'Solo', 150000, 20),
(19, 'Eksekutif', '2016-06-17', 'Karawang', 'Solo', 200000, 20),
(20, 'Ekonomi', '2016-06-17', 'Karawang', 'Solo', 100000, 50),
(21, 'Ekonomi', '2016-06-17', 'Karawang', 'Bandung', 45000, 20),
(22, 'Bisnis', '2016-06-17', 'Karawang', 'Bandung', 50000, 30),
(23, 'Eksekutif', '2016-06-17', 'Karawang', 'Bandung', 70000, 20),
(25, 'Bisnis', '2016-06-17', 'Karawang', 'Jakarta', 60000, 15),
(26, 'Ekonomi', '2016-06-17', 'Karawang', 'Jakarta', 40000, 12),
(27, 'Eksekutif', '2016-06-17', 'Karawang', 'Jakarta', 80000, 30),
(29, 'Bisnis', '2016-06-17', 'Karawang', 'Semarang', 450000, 30),
(30, 'Eksekutif', '2016-06-17', 'Karawang', 'Semarang', 500000, 25),
(31, 'Ekonomi', '2016-06-17', 'Karawang', 'Yogyakarta', 600000, 40),
(32, 'Bisnis', '2016-06-17', 'Karawang', 'Yogyakarta', 650000, 30),
(34, 'Eksekutif', '2016-06-17', 'Karawang', 'Yogyakarta', 700000, 30),
(35, 'Ekonomi', '2016-06-17', 'Karawang', 'Surabaya', 800000, 40),
(37, 'Eksekutif', '2016-06-17', 'Karawang', 'Surabaya', 900000, 25),
(38, 'Eksekutif', '2016-06-17', 'Jakarta', 'Bandung', 750000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penumpang`
--

CREATE TABLE `tb_penumpang` (
  `No` varchar(8) NOT NULL DEFAULT '',
  `Nama` varchar(50) DEFAULT NULL,
  `NoKtp` int(16) DEFAULT NULL,
  `Telp` varchar(12) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penumpang`
--

INSERT INTO `tb_penumpang` (`No`, `Nama`, `NoKtp`, `Telp`, `Email`) VALUES
('3PMIJBHM', 'Agus Wibawa', 2147483647, '087865615454', 'agus.wibawa@gmail.com'),
('A7IPELJQ', 'Much Maskur', 2147483647, '087654322469', 'ali.Maskur@gmail.com'),
('BZVU7BP2', 'Muhamad Muhyidin Amin', 2147483647, '083865614484', 'muhyidinxiitkj3@gmail.com'),
('GHC8LC9W', 'lkjhgfds', 2323, '2323', '2323'),
('VK6BUT8G', 'Agus Wibawa', 2147483647, '087656472881', 'agus.wibawa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `No` varchar(8) NOT NULL DEFAULT '',
  `Kelas` varchar(20) DEFAULT NULL,
  `Tgl` date DEFAULT NULL,
  `Asal` varchar(30) DEFAULT NULL,
  `Tujuan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`No`, `Kelas`, `Tgl`, `Asal`, `Tujuan`) VALUES
('BZVU7BP2', 'Bisnis', '2016-05-30', 'Karawang', 'Solo'),
('3PMIJBHM', 'Eksekutif', '2016-05-30', 'Karawang', 'Solo'),
('A7IPELJQ', 'Eksekutif', '2016-05-30', 'Jakarta', 'Bandung'),
('VK6BUT8G', 'Ekonomi', '2016-05-30', 'Karawang', 'Solo'),
('GHC8LC9W', 'Bisnis', '2016-05-30', 'Karawang', 'Jakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tb_penumpang`
--
ALTER TABLE `tb_penumpang`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
