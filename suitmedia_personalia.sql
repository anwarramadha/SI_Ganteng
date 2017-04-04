-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2017 at 05:56 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.17-2+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suitmedia_personalia`
--

-- --------------------------------------------------------

--
-- Table structure for table `Partisipasi`
--

CREATE TABLE `Partisipasi` (
  `id_pegawai` int(11) NOT NULL,
  `id_pelatihan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `nilai_pelatihan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Pegawai`
--

CREATE TABLE `Pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `gaji_pegawai` int(11) NOT NULL DEFAULT '0',
  `jenis_kelamin` varchar(9) NOT NULL,
  `jabatan` varchar(16) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `username_pegawai` varchar(255) NOT NULL,
  `password_pegawai` varchar(16) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Pelatihan`
--

CREATE TABLE `Pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `nama_trainer` varchar(50) NOT NULL,
  `waktu_pelaksanaan` date NOT NULL,
  `deskripsi_pelatihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Pengerjaan`
--

CREATE TABLE `Pengerjaan` (
  `id_pegawai` int(11) NOT NULL,
  `id_proyek` int(11) NOT NULL,
  `peran` int(11) NOT NULL,
  `keternagan_pengerjaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Proyek`
--

CREATE TABLE `Proyek` (
  `id_proyek` int(11) NOT NULL,
  `waktu_pengerjaan` date NOT NULL,
  `deskripsi_proyek` date NOT NULL,
  `skala_proyek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Pegawai`
--
ALTER TABLE `Pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_pegawai_2` (`id_pegawai`);

--
-- Indexes for table `Pelatihan`
--
ALTER TABLE `Pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`),
  ADD KEY `id_pelatihan` (`id_pelatihan`);

--
-- Indexes for table `Proyek`
--
ALTER TABLE `Proyek`
  ADD PRIMARY KEY (`id_proyek`),
  ADD KEY `id_proyek` (`id_proyek`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Pegawai`
--
ALTER TABLE `Pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Pelatihan`
--
ALTER TABLE `Pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Proyek`
--
ALTER TABLE `Proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
