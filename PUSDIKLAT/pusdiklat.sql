-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 00.07
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

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
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` enum('root','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `role`) VALUES
('01', 'Rina_Wahyuni', 'rina123', 'root'),
('02', 'PUSDIKLAT', 'pusdiklat', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
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
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `instansi`, `prodi`, `no_telp`, `email`, `khs`, `semester`, `unit`, `ketentuan`, `no_surat`, `surat_magang`, `tanggal_masuk`, `tanggal_keluar`, `status`, `keterangan`, `no_surat_balasan`, `jumlah_lampiran`, `tgl_dibuat`, `kepada`, `tujuan_daerah`, `tglsurat_pemohon`, `nama2`, `nim2`, `nama3`, `nim3`) VALUES
(1512618046, 'Sandi Pratama', 'Universitas Negeri Jakarta', 'Pendidikan Teknik Informatika dan Komputer', '0895372485447', 'sansan00668@gmail.com', 'KHSsandi113.pdf', 6, 'Pusat Data dan Informasi', 'Kerja Praktik', '3137/8/pkp.03/4.2021', 'PKL_2580_Sandi_Pratama.pdf', '2021-05-25', '2021-06-29', 'Terima', 'Memenuhi kriteria yang dibutuhkan pada unit yang dituju', '123456789', '-', '2021-05-25', 'Rektor UNJ', 'Jakarta', '2021-05-25', 'Sulton Ibrahim', '1512618078', '', ''),
(1810512028, 'Nurul Aini', 'Universitas Pembangunan Nasional Veteran Jakarta', 'Sistem Informasi', '0813', 'nurula@upnvj.ac.id', 'KHS-1810512028-12022021.pdf', 6, 'Inspektorat', 'Kerja Praktik', 'B/268UN61/FIK/2021', 'SURAT_KP-NURUL_AINI_DAN_YULI_F.pdf', '2021-05-08', '2021-06-05', 'Terima', '', '1110/2211/bbbcasd', '-', '2021-05-12', 'Rektor UPN Jakarta', 'Jakarta', '2021-05-31', 'Hehe Gini', '14045', 'sss', '14044');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian`
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
-- Dumping data untuk tabel `penelitian`
--

INSERT INTO `penelitian` (`id_penelitian`, `nama`, `nim`, `no_surat`, `instansi`, `prodi`, `no_telp`, `email`, `nama_dosen`, `no_telp_dosen`, `email_dosen`, `judul`, `abstrak`, `khs`, `no_surat_penelitian`, `surat_penelitian`, `jumlah_lampiran`, `tgl_dibuat`, `kepada`, `tujuan_daerah`, `tglsurat_pemohon`, `tujuan_penelitian`, `metode_ambil_data`) VALUES
(5, 'nuraini azizi', '456', '3137/8/pkp.03/4.2021', 'Universitas Pembangunan Nasional Veteran Jakarta', 'Sistem Informasi', '085', 'nurula@upnvj.ac.id', 'Ati Zaidiah', '087', 'aininurul.agustus@gmail.com', 'bfndjisabfbjsdhbf', 'hhfityfyjyciycycytfyt', 'KHS-1810512028-1202202111.pdf', 'b089', 'SURAT_KP-NURUL_AINI_DAN_YULI_F1.pdf', '-', '2021-05-19', 'Rektor Upn', 'Jakarta', '2021-06-05', 'Tugas Akhir Skripsi', 'Kuisoner menggunakan Link aaaaaa'),
(8, 'Sandi Pratama', '1512618001', '3137/8/pkp.03/4.2021', 'Universitas Negeri Jakarta', 'Pendidikan Teknik Informatika dan Komputer', '0895372485447', 'sansan00668@gmail.com', 'M. Adiyatma andika suryana', '123456789', 'M.AdiyatmaUNJ@gmail.com', 'Pengaruh Jaklinko Pada Masyarakat Jakarta Utara', 'hehehehehehehehehehehe', 'Surat_jawaban_magan_UNJ2.pdf', '12345', 'Surat_jawaban_magan_UNJ.pdf', '-', '2021-05-24', 'Rektor UNJ', 'Jakarta', '2021-05-31', 'Tugas Akhir Skripsi', 'Kuisoner menggunakan Link aaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
