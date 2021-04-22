-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 06:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `nopen` char(5) NOT NULL,
  `nama` char(20) NOT NULL,
  `telp` char(15) NOT NULL,
  `alamat` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`nopen`, `nama`, `telp`, `alamat`) VALUES
('P0001', 'NAHIYAH', '77886293', 'DEPOK'),
('P0002', 'ZAHRAH', '98688181', 'JAKARTA'),
('P0003', 'SAFITRI', '45678888', 'DEPOK');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `nokw` char(5) NOT NULL,
  `tglsewa` date NOT NULL,
  `kdmobil` char(5) NOT NULL,
  `nopen` char(5) NOT NULL,
  `lama` int(11) NOT NULL,
  `bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`nokw`, `tglsewa`, `kdmobil`, `nopen`, `lama`, `bayar`) VALUES
('KW001', '2010-03-12', 'SDH01', 'P0001', 3, 900000),
('KW002', '2010-03-16', 'AVP01', 'P0001', 2, 800000),
('KW003', '2010-05-03', 'SDS01', 'P0003', 2, 700000);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `lampiran` varchar(3) NOT NULL,
  `hal_surat` varchar(255) NOT NULL,
  `tglsurat_dibuat` varchar(255) NOT NULL,
  `tujuan_surat` varchar(255) NOT NULL,
  `no_surat_pemohon` varchar(255) NOT NULL,
  `tglsurat_pemohon` varchar(255) NOT NULL,
  `masa_magang` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `program_studi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `no_surat`, `lampiran`, `hal_surat`, `tglsurat_dibuat`, `tujuan_surat`, `no_surat_pemohon`, `tglsurat_pemohon`, `masa_magang`, `nama`, `nim`, `program_studi`) VALUES
(1, '1110/2211/bbbc', '-', 'Magang', '12 Maret 2021', 'Rektor UNJ', '2580/UNJ/00', '20 Maret 2021', 'bbbbbbb', 'Sulton Ibrahim', '1512618078', 'Informatika'),
(2, '1110/2211/bbbc', '-', 'Magang', '12312321', 'aaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '20 Maret 2021', 'aaaa', 'Bambang Cahyadi', '14045', '1111111111'),
(3, '1110/2211/bbbc', '999', 'Magang', '12 Maret 2021', 'aaaaaaaaa', '2580/UNJ/00asd', '20 Maret 2021', 'bbbbbbb', 'hehe', 'bbbbbbb', 'aaaaaaaaaaaaaaaaa'),
(4, 'ssss', '-', 'Magang', '12312321', 'Rektor UNJ', 'aaaaa', '11111111', 'aaaa', 'hehe', 'aaaaa', 'aaaaaaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`nopen`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`nokw`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
