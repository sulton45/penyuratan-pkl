-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 04:36 PM
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
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `no_surat_balasan` varchar(100) NOT NULL,
  `jumlah_lampiran` varchar(100) NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `tujuan_daerah` varchar(100) NOT NULL,
  `tglsurat_pemohon` varchar(100) NOT NULL,
  `nama2` varchar(100) NOT NULL,
  `nim2` varchar(100) NOT NULL,
  `nama3` varchar(100) NOT NULL,
  `nim3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `instansi`, `prodi`, `no_telp`, `email`, `khs`, `semester`, `unit`, `ketentuan`, `no_surat`, `surat_magang`, `tanggal_masuk`, `tanggal_keluar`, `status`, `keterangan`, `no_surat_balasan`, `jumlah_lampiran`, `tgl_dibuat`, `kepada`, `tujuan_daerah`, `tglsurat_pemohon`, `nama2`, `nim2`, `nama3`, `nim3`) VALUES
(1512618078, 'Sulton Ibrahim', 'Universitas Negeri Jakarta', 'Pendidikan Informatika', '14045', 'sultonibrahim11@gmail.com', '302-949-1-PB.pdf', 6, 'Biro SDM dan Umum', 'Kerja Praktik', '1400044', 'Form_Pengisian_Permohonan_(Kelompok)_Observasi_dan_PKL.pdf', '2021-05-21', '2021-05-31', '', '', '1110/2211/bbbc', '-', '2021-05-21', 'Rektor UNJ', 'Jakarta', '2021-05-01', 'Sandi Pratama', '14045', 'Budi Pekerti', '14044'),
(1810512028, 'Nurul Aini', 'Universitas Pembangunan Nasional Veteran Jakarta', 'Sistem Informasi', '0813', 'nurula@upnvj.ac.id', 'KHS-1810512028-12022021.pdf', 6, 'Inspektorat', 'Kerja Praktik', 'B/268UN61/FIK/2021', 'SURAT_KP-NURUL_AINI_DAN_YULI_F.pdf', '2021-05-08', '2021-06-05', 'Terima', '', '1110/2211/bbbcasd', '-', '2021-05-12', 'Rektor UPN Jakarta', 'Jakarta', '2021-05-31', 'Sandi Pratama', '14045', 'Budi Pekerti', '14044');

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
  `tujuan_penelitian` varchar(100) NOT NULL,
  `metode_ambil_data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`id_penelitian`, `nama`, `nim`, `no_surat`, `instansi`, `prodi`, `no_telp`, `email`, `nama_dosen`, `no_telp_dosen`, `email_dosen`, `judul`, `abstrak`, `khs`, `no_surat_penelitian`, `surat_penelitian`, `jumlah_lampiran`, `tgl_dibuat`, `kepada`, `tujuan_daerah`, `tglsurat_pemohon`, `tujuan_penelitian`, `metode_ambil_data`) VALUES
(5, 'nuraini azizi', '456', '1110/2211/bbbc', 'Universitas Pembangunan Nasional Veteran Jakarta', 'Sistem Informasi', '085', 'nurula@upnvj.ac.id', 'Ati Zaidiah', '087', 'aininurul.agustus@gmail.com', 'bfndjisabfbjsdhbf', 'hhfityfyjyciycycytfyt', 'KHS-1810512028-1202202111.pdf', 'b089', 'SURAT_KP-NURUL_AINI_DAN_YULI_F1.pdf', '-', '2021-05-19', 'Rektor UNJ', 'Jakarta', '2021-06-05', 'Tugas Akhir', 'Kuisioner'),
(8, 'Sulton Ibrahim', '1512618078', '1222', 'Universitas Negeri Jakarta', 'Pendidikan Informatika', '082114045', 'sultonibrahim00@gmail.com', 'Sandi Pratama', '14045', 'sandipratama@gmail.com', 'Pengaruh dari', 'Belum ada', '588-1861-2-PB.pdf', 'B/114004', 'Form_Pengisian_Permohonan_(Kelompok)_Observasi_dan_PKL.pdf', '-', '0000-00-00', 'Rektor UNJ', 'Jakarta', '0000-00-00', 'Tugas Akhir', 'Kuisioner');

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
  MODIFY `id_penelitian` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
