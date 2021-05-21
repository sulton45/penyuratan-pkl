-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 03:04 PM
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
-- Database: `pusdiklat`
--

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` int(4) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `no_telp_dosen` varchar(13) NOT NULL,
  `email_dosen` varchar(100) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `abstrak` text NOT NULL,
  `khs` varchar(500) NOT NULL,
  `no_surat_penelitian` varchar(100) NOT NULL,
  `surat_penelitian` varchar(100) NOT NULL,
  `jumlah_lampiran` varchar(100) NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `tujuan_daerah` varchar(100) NOT NULL,
  `tglsurat_pemohon` date NOT NULL,
  `tujuan_penelitian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`id_penelitian`, `nama`, `nim`, `no_surat`, `instansi`, `prodi`, `no_telp`, `email`, `nama_dosen`, `no_telp_dosen`, `email_dosen`, `judul`, `abstrak`, `khs`, `no_surat_penelitian`, `surat_penelitian`, `jumlah_lampiran`, `tgl_dibuat`, `kepada`, `tujuan_daerah`, `tglsurat_pemohon`, `tujuan_penelitian`) VALUES
(3, 'Rania Ramadhinaaaaa', '1810512025', '99999999', 'Universitas Pembangunan Nasional Veteran Jakarta', 'Sistem Informasi', '085', 'raniarupnvj@ac.id', 'Ati Zaidiah', '089', 'aininurul.agustus@gmail.com', 'Pengaruh pengaruh', 'dsfbjasdfnijaefn 0293nr8', 'KHS-1810512028-12022021.pdf', '4r43f', 'Surat_Pernyataan_Magang_Nurul_Yuli.pdf', '-', '2021-05-15', 'Rektor UPN Jakarta', 'Jakarta', '2021-05-01', 'Untuk tugas'),
(4, 'Yuli Febyola', '345', '', 'univ', 'Sistem Informasi', '089', 'yuli@gmail.com', 'Ati Zaidiah', '089', 'aininurul.agustus@gmail.com', 'iubibibpbp', 'bihbhuhluhuhuhjiu', 'KHS-1810512028-12022021.pdf', '7YH8UH8H8', 'SURAT_KP-NURUL_AINI_DAN_YULI_F.pdf', '', '0000-00-00', '', '', '0000-00-00', ''),
(5, 'nuraini azizi', '456', '', 'Universitas Pembangunan Nasional Veteran Jakarta', 'Sistem Informasi', '085', 'nurula@upnvj.ac.id', 'Ati Zaidiah', '087', 'aininurul.agustus@gmail.com', 'bfndjisabfbjsdhbf', 'hhfityfyjyciycycytfyt', 'KHS-1810512028-1202202111.pdf', 'b089', 'SURAT_KP-NURUL_AINI_DAN_YULI_F1.pdf', '', '0000-00-00', '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
