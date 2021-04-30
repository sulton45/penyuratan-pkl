-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 07:22 PM
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
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `lampiran` varchar(3) NOT NULL,
  `hal_surat` varchar(255) NOT NULL,
  `tglsurat_dibuat` varchar(255) NOT NULL,
  `kepada_surat` varchar(255) NOT NULL,
  `institusi_surat` varchar(255) NOT NULL,
  `daerah_surat` varchar(255) NOT NULL,
  `no_surat_pemohon` varchar(255) NOT NULL,
  `jenis_siswa` varchar(255) NOT NULL,
  `tglsurat_pemohon` varchar(255) NOT NULL,
  `masa_magang` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `nama2` varchar(255) NOT NULL,
  `nim2` varchar(255) NOT NULL,
  `program_studi2` varchar(255) NOT NULL,
  `nama3` varchar(255) NOT NULL,
  `nim3` varchar(255) NOT NULL,
  `program_studi3` varchar(255) NOT NULL,
  `nama4` varchar(255) NOT NULL,
  `nim4` varchar(255) NOT NULL,
  `program_studi4` varchar(255) NOT NULL,
  `nama5` varchar(255) NOT NULL,
  `nim5` varchar(255) NOT NULL,
  `program_studi5` varchar(255) NOT NULL,
  `nama6` varchar(255) NOT NULL,
  `nim6` varchar(255) NOT NULL,
  `program_studi6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `no_surat`, `lampiran`, `hal_surat`, `tglsurat_dibuat`, `kepada_surat`, `institusi_surat`, `daerah_surat`, `no_surat_pemohon`, `jenis_siswa`, `tglsurat_pemohon`, `masa_magang`, `nama`, `nim`, `program_studi`, `nama2`, `nim2`, `program_studi2`, `nama3`, `nim3`, `program_studi3`, `nama4`, `nim4`, `program_studi4`, `nama5`, `nim5`, `program_studi5`, `nama6`, `nim6`, `program_studi6`) VALUES
(1, '1110/2211/bbbc', '-', 'Magang', '12 Maret 2021', 'Rektor UNJ', 'Universitas Negeri Jakarta', 'Jakarta', '2580/UNJ/00', 'Siswa', '20 Maret 2021', '1 April 2021 - 1 Mei 2021', 'Sulton Ibrahim', '1512618078', 'Informatika', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '1110/2211/bbbc', '-', 'Magang', '12 Maret 2021', 'Rektor UNJ', 'Universitas Negeri Jakarta', 'Jakarta', '2580/UNJ/00', '', '20 Maret 2021', '1 April 2021 - 1 Mei 2021', 'Sulton Ibrahim', '1512618078', 'Informatika', 'Sandi Pratama', '1512618046', 'Informatika', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '1110/2211/bbbc', '-', 'Magang', '12 Maret 2021', 'Rektor UNJ', 'Universitas Negeri Jakarta', 'Jakarta', '2580/UNJ/00', '', '20 Maret 2021', '1 April 2021 - 1 Mei 2021', 'Bambang Cahyadi', '1512618078', 'Informatika', 'Hehe Gini', '14045', 'Informatika', 'Jaja', '14044', 'Informatika', '', '', '', '', '', '', '', '', ''),
(4, '1110/2211/bbbc', '-', 'Magang', '12 Maret 2021', 'Rektor UNJ', 'Universitas Negeri Jakarta', 'Jakarta', '2580/UNJ/00', '', '20 Maret 2021', '1 April 2021 - 1 Mei 2021', 'Bambang Cahyadi', '1512618078', 'Informatika', 'Hehe Gini', '14045', 'Informatika', 'Jaja', '14044', 'Informatika', 'Hehe', '14022', 'Informatika', '', '', '', '', '', ''),
(5, '1110/2211/bbbc', '-', 'Magang', '12 Maret 2021', 'Rektor UNJ', 'Universitas Negeri Jakarta', 'Jakarta', '2580/UNJ/00', '', '20 Maret 2021', '1 April 2021 - 1 Mei 2021', 'Bambang Cahyadi', '1512618078', 'Informatika', 'Hehe Gini', '14045', 'Informatika', 'Jaja', '14044', 'Informatika', 'Asep', '111', 'Informatika', 'Hoho', '1122', 'Informatika', '', '', ''),
(6, '1110/2211/bbbc', '-', 'Magang', '12 Maret 2021', 'Rektor UNJ', 'Universitas Negeri Jakarta', 'Jakarta', '2580/UNJ/00', '', '20 Maret 2021', '1 April 2021 - 1 Mei 2021', 'Bambang Cahyadi', '1512618078', 'Informatika', 'Hehe Gini', '14045', 'Informatika', 'Jaja', '14044', 'Informatika', 'Hehe', '14022', 'Informatika', 'Hoho', '1122', 'Informatika', 'Juju', '1133', 'Informatika'),
(7, '1110/2211/bbbc', '-', 'Magang', '12 Maret 2021', 'Rektor UNJ', 'Universitas Negeri Jakarta', 'Jakarta', '2580/UNJ/00', 'Mahasiswa', '20 Maret 2021', '1 April 2021 - 1 Mei 2021', 'Bambang Cahyadi', '1512618078', 'Informatika', 'Hehe Gini', '14045', 'Informatika', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

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
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
