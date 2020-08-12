-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 01:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_beasiswa_ppa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(10) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL,
  `bobot_kriteria` int(10) NOT NULL,
  `aksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama_kriteria`, `bobot_kriteria`, `aksi`) VALUES
(1, 'semester', 3, ''),
(2, 'ipk', 4, ''),
(3, 'pekerjaan_orangtua', 5, ''),
(4, 'jum_tanggungan_ortu', 5, ''),
(5, 'penghasilan_ortu', 5, ''),
(6, 'aktif_organisasi', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama_lenkap` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` char(13) NOT NULL,
  `jk` char(3) NOT NULL,
  `alamat_asal` varchar(200) NOT NULL,
  `nim` char(15) NOT NULL,
  `smester` char(2) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `alamat_sekarang` varchar(200) NOT NULL,
  `aktif` tinyint(1) NOT NULL,
  `nama_ayah` varchar(200) NOT NULL,
  `umur_ayah` int(11) NOT NULL,
  `pekerjaan_ayah` varchar(200) NOT NULL,
  `status_ayah` varchar(10) NOT NULL,
  `alamat_ayah` varchar(200) NOT NULL,
  `nama_ibu` varchar(200) NOT NULL,
  `umur_ibu` int(11) NOT NULL,
  `pekerjaan_ibu` varchar(200) NOT NULL,
  `status_ibu` varchar(10) NOT NULL,
  `alamat_ibu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama_lenkap`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `jk`, `alamat_asal`, `nim`, `smester`, `fakultas`, `alamat_sekarang`, `aktif`, `nama_ayah`, `umur_ayah`, `pekerjaan_ayah`, `status_ayah`, `alamat_ayah`, `nama_ibu`, `umur_ibu`, `pekerjaan_ibu`, `status_ibu`, `alamat_ibu`) VALUES
(1, 'panji', 'mana', '2020-08-19', '09878993838', '', 'bantul', '12131', '2', 'sisteminformasi', 'Yogyakarata', 0, '', 0, '', '', '', '', 0, '', '', ''),
(2, 'dasda', 'fasfasf', '2020-08-05', '09878993838', 'lak', 'bantul', 'cadca', '5', 'manajemeninformatika', 'Yogyakarata', 0, '', 0, '', '', '', '', 0, '', '', ''),
(3, 'dasda', 'fasfasf', '2020-08-05', '09878993838', 'lak', 'bantul', 'cadca', '5', 'manajemeninformatika', 'Yogyakarata', 1, '', 0, '', '', '', '', 0, '', '', ''),
(4, 'dasda', 'fasfasf', '2020-08-05', '09878993838', 'lak', 'bantul', 'cadca', '5', 'manajemeninformatika', 'Yogyakarata', 1, '', 0, '', '', 'banguntapan', '', 0, '', '', 'banguntapan'),
(5, 'dasda', 'fasfasf', '2020-08-05', '09878993838', 'lak', 'bantul', 'cadca', '5', 'manajemeninformatika', 'Yogyakarata', 1, '', 0, '', '', 'banguntapan', '', 0, '', '', 'banguntapan'),
(6, 'a', 'a', '2020-08-01', '2', 'lak', 'a', '135610000', '5', 'teknikinformatika', 'a', 1, 'aa', 0, 'a', 'hidup', 'a', 'a', 0, 'a', 'hidup', 'a'),
(7, 'Endri', 'Bangko', '2010-11-11', '+628952409990', 'lak', 'Bangko', '155610058', '6', 'sisteminformasi', 'KarangJambe', 1, 'Sitam', 60, 'PNS', 'meninggal', 'Bangko', 'Nuriah', 60, 'IRT', 'hidup', 'Bangko');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `nama_organisasi` varchar(200) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `aktivitas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id`, `id_mahasiswa`, `nama_organisasi`, `jabatan`, `aktivitas`) VALUES
(3, 7, 'Ada', 'Ketua', 'PH');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `penghargaan` varchar(200) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `deskripsi_penghargaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `id_mahasiswa`, `penghargaan`, `tahun`, `deskripsi_penghargaan`) VALUES
(3, 7, 'Campion', '2020', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `role`) VALUES
(1, 'Admin', 'Admin', 'Admin', 'Admin'),
(2, 'Mahasiswa', 'Mahasiswa', 'Mahasiswa', 'Mahasiswa'),
(3, 'Bagian Kemahasiswaan', 'Bagian Kemahasiswaan', 'Bagian Kemahasiswaan', 'Bagian Kemahasiswaan'),
(5, 'Endri Kurniawan', 'Endri Kurniawan', 'Endri Kurniawan', 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
