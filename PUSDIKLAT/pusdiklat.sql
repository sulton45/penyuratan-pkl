-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 10:23 AM
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` enum('root','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `role`) VALUES
('01', 'root', 'root', 'root'),
('02', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(13) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `khs` varchar(75) NOT NULL,
  `semester` int(2) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `ketentuan` varchar(100) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `surat_magang` varchar(100) NOT NULL,
  `tanggal_masuk` varchar(100) NOT NULL,
  `tanggal_keluar` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `no_surat_balasan` varchar(255) NOT NULL,
  `jumlah_lampiran` varchar(255) NOT NULL,
  `hal_surat` varchar(255) NOT NULL,
  `tanggal_dibuat` varchar(255) NOT NULL,
  `kepada` varchar(255) NOT NULL,
  `tujuan_daerah` varchar(255) NOT NULL,
  `tglsurat_pemohon` varchar(255) NOT NULL,
  `masa_magang` varchar(255) NOT NULL,
  `nama2` varchar(255) NOT NULL,
  `nim2` varchar(255) NOT NULL,
  `nama3` varchar(255) NOT NULL,
  `nim3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `instansi`, `prodi`, `no_telp`, `email`, `khs`, `semester`, `unit`, `ketentuan`, `no_surat`, `surat_magang`, `tanggal_masuk`, `tanggal_keluar`, `status`, `no_surat_balasan`, `jumlah_lampiran`, `hal_surat`, `tanggal_dibuat`, `kepada`, `tujuan_daerah`, `tglsurat_pemohon`, `masa_magang`, `nama2`, `nim2`, `nama3`, `nim3`) VALUES
(1512618078, 'Sulton Ibrahim', 'Universitas Negeri Jakarta', 'Pendidikan Informatika', '14045', 'sultonibrahin089@gmail.com', 'Permohonan_icon_Penelitian_An_Ikawati_Lestari.pdf', 6, 'Pusat Pengembangan Perpustakaan Umum dan Khusus', 'Kerja Praktik', '2580/UNJ/00', 'Permohonan_icon_Penelitian_An_Ikawati_Lestari_(1).pdf', '', '', '', '1110/2211/bbbc', '-', 'Magang', '12 Maret 2021', 'Rektor UNJ', 'Jakarta', '20 Maret 2021', '1 April 2021 - 1 Mei 2021', 'Sandi Pratama', '14045', 'Jaja', '14044'),
(1810512028, 'Nurul Aini', 'Universitas Pembangunan Nasional Veteran Jakarta', 'Sistem Informasi', '0813', 'nurula@upnvj.ac.id', 'KHS-1810512028-12022021.pdf', 6, 'Inspektorat', 'Kerja Praktik', 'B/268UN61/FIK/2021', 'SURAT_KP-NURUL_AINI_DAN_YULI_F.pdf', '2021-05-08', '2021-06-05', 'Tolak', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` int(4) NOT NULL,
  `nim` int(13) NOT NULL,
  `nama` varchar(255) NOT NULL,
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
  `surat_penelitian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`id_penelitian`, `nim`, `nama`, `instansi`, `prodi`, `no_telp`, `email`, `nama_dosen`, `no_telp_dosen`, `email_dosen`, `judul`, `abstrak`, `khs`, `no_surat_penelitian`, `surat_penelitian`) VALUES
(3, 1810512025, 'Rania Ramadhina', 'Universitas Pembangunan Nasional Veteran Jakarta', 'Sistem Informasi', '085', 'raniarupnvj@ac.id', 'Ati Zaidiah', '089', 'aininurul.agustus@gmail.com', 'bfndjisabfbjsdhbf', 'dsfbjasdfnijaefn 0293nr8', 'KHS-1810512028-12022021.pdf', '4r43f', 'Surat_Pernyataan_Magang_Nurul_Yuli.pdf'),
(4, 345, 'Yuli Febyola', 'univ', 'Sistem Informasi', '089', 'yuli@gmail.com', 'Ati Zaidiah', '089', 'aininurul.agustus@gmail.com', 'iubibibpbp', 'bihbhuhluhuhuhjiu', 'KHS-1810512028-12022021.pdf', '7YH8UH8H8', 'SURAT_KP-NURUL_AINI_DAN_YULI_F.pdf'),
(5, 456, 'nuraini azizi', 'Universitas Pembangunan Nasional Veteran Jakarta', 'Sistem Informasi', '085', 'nurula@upnvj.ac.id', 'Ati Zaidiah', '087', 'aininurul.agustus@gmail.com', 'bfndjisabfbjsdhbf', 'hhfityfyjyciycycytfyt', 'KHS-1810512028-1202202111.pdf', 'b089', 'SURAT_KP-NURUL_AINI_DAN_YULI_F1.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

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
