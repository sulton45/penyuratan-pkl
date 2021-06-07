-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 11:20 AM
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
('01', 'Rina_Wahyuni', 'rina123', 'root'),
('02', 'PUSDIKLAT', 'pusdiklat', 'admin');

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
  `hal_surat` varchar(255) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `surat_magang` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `no_surat_balasan` varchar(100) NOT NULL,
  `jumlah_lampiran` varchar(100) NOT NULL,
  `tgl_dibuat` date NOT NULL DEFAULT current_timestamp(),
  `kepada` varchar(100) NOT NULL,
  `tujuan_daerah` varchar(100) NOT NULL,
  `tglsurat_pemohon` varchar(100) NOT NULL,
  `nama2` varchar(100) NOT NULL,
  `nim2` varchar(100) NOT NULL,
  `nama3` varchar(100) NOT NULL,
  `nim3` varchar(100) NOT NULL,
  `tembusan1` varchar(255) NOT NULL,
  `tembusan2` varchar(255) NOT NULL,
  `tembusan3` varchar(255) NOT NULL,
  `tembusan4` varchar(255) NOT NULL,
  `tembusan5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `instansi`, `prodi`, `no_telp`, `email`, `khs`, `semester`, `unit`, `ketentuan`, `hal_surat`, `no_surat`, `surat_magang`, `tanggal_masuk`, `tanggal_keluar`, `status`, `keterangan`, `no_surat_balasan`, `jumlah_lampiran`, `tgl_dibuat`, `kepada`, `tujuan_daerah`, `tglsurat_pemohon`, `nama2`, `nim2`, `nama3`, `nim3`, `tembusan1`, `tembusan2`, `tembusan3`, `tembusan4`, `tembusan5`) VALUES
(1512618046, 'Sandi Pratama', 'Universitas Negeri Jakarta', 'Pendidikan Teknik Informatika dan Komputer', '0895372485447', 'sansan00668@gmail.com', 'KHSsandi1131.pdf', 6, 'Pusat Pendidikan dan Pelatihan', 'Kerja Praktik', 'Permohonan Magang/PKL', '3137/8/pkp.03/4.2021', 'PKL_2580_Sandi_Pratama1.pdf', '2021-06-01', '2021-07-02', 'Terima', 'Memenuhi Kriteria yang dibutuhkan', '12345', '-', '0000-00-00', 'Rektor UNJ', 'Jakarta', '2021-05-31', 'Sulton Ibrahim', '1512618078', '', '', 'Kepala Perpustakaan Nasional RI', 'Sekretaris Utama', 'Deputi Bidang Pengembangan Bahan Pustaka dan Jasa Informasi', 'Deputi Bidang Pengembangan Sumber Daya Perpustakaan', 'Tembusan ke 5 ini');

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
  `hal_surat` varchar(255) NOT NULL,
  `no_surat_penelitian` varchar(100) NOT NULL,
  `surat_penelitian` varchar(100) NOT NULL,
  `jumlah_lampiran` varchar(100) NOT NULL,
  `tgl_dibuat` date NOT NULL DEFAULT current_timestamp(),
  `kepada` varchar(100) NOT NULL,
  `tujuan_daerah` varchar(100) NOT NULL,
  `tglsurat_pemohon` date NOT NULL,
  `tujuan_penelitian` varchar(100) NOT NULL,
  `metode_ambil_data` varchar(200) NOT NULL,
  `tembusan1` varchar(255) NOT NULL,
  `tembusan2` varchar(255) NOT NULL,
  `tembusan3` varchar(255) NOT NULL,
  `tembusan4` varchar(255) NOT NULL,
  `tembusan5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`id_penelitian`, `nama`, `nim`, `no_surat`, `instansi`, `prodi`, `no_telp`, `email`, `nama_dosen`, `no_telp_dosen`, `email_dosen`, `judul`, `abstrak`, `khs`, `hal_surat`, `no_surat_penelitian`, `surat_penelitian`, `jumlah_lampiran`, `tgl_dibuat`, `kepada`, `tujuan_daerah`, `tglsurat_pemohon`, `tujuan_penelitian`, `metode_ambil_data`, `tembusan1`, `tembusan2`, `tembusan3`, `tembusan4`, `tembusan5`) VALUES
(12, 'Sandi Pratama', '1512618046', '3137/8/pkp.03/4.2021', 'Universitas Negeri Jakarta', 'Pendidikan Teknik Informatika dan Komputer', '0895372485447', 'sansan00668@gmail.com', 'M. Adiyatma andika suryana', '089123388772', 'M.AdiyatmaUNJ@gmail.com', 'Pengaruh Jaklinko Pada Masyarakat Jakarta Utara', 'Ini Abstrak', 'KHSsandi1132.pdf', 'Permohonan Melakukan Penelitian', '123654647818', 'PKL_2580_Sandi_Pratama.pdf', '-', '2021-05-31', 'Rektor UNJ', 'Jakarta', '2021-05-31', 'Tugas Akhir Skripsi', 'Kuisoner menggunakan Link aaaaaa', 'Kepala Perpustakaan Nasional RI', 'Sekretaris Utama', 'Deputi Bidang Pengembangan Bahan Pustaka dan Jasa Informasi', 'Deputi Bidang Pengembangan Sumber Daya Perpustakaan', 'Tembusan ke 5 ini');

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
  MODIFY `id_penelitian` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
