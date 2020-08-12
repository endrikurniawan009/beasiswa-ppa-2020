-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2020 at 08:50 PM
-- Server version: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(5, 'dasda', 'fasfasf', '2020-08-05', '09878993838', 'lak', 'bantul', 'cadca', '5', 'manajemeninformatika', 'Yogyakarata', 1, '', 0, '', '', 'banguntapan', '', 0, '', '', 'banguntapan');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;