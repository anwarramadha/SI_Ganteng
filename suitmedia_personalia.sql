-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2017 at 03:46 PM
-- Server version: 5.7.17-0ubuntu0.16.04.2
-- PHP Version: 7.0.17-3+deb.sury.org~xenial+1

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
  `nilai_pelatihan` int(11) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Partisipasi`
--

INSERT INTO `Partisipasi` (`id_pegawai`, `id_pelatihan`, `keterangan`, `nilai_pelatihan`) VALUES
(3, 1, 'Pelatihan untuk keamanan jaringan', 70),
(3, 2, 'Pelatihan untuk sistem terdistribusi', -1),
(3, 3, 'Pelatihan untuk enkripsi data', 85);

-- --------------------------------------------------------

--
-- Table structure for table `Pegawai`
--

CREATE TABLE `Pegawai` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gaji_pegawai` int(11) NOT NULL DEFAULT '0',
  `jenis_kelamin` varchar(9) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `username_pegawai` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Pegawai`
--

INSERT INTO `Pegawai` (`id`, `name`, `gaji_pegawai`, `jenis_kelamin`, `jabatan`, `tanggal_masuk`, `email`, `username_pegawai`, `password`, `tanggal_lahir`, `remember_token`, `role`) VALUES
(1, 'Ade Surya Ramadhani', 9000000, 'L', 'Web Developer', '2017-04-04', 'adesu@gmail.com', 'adesu', 'root', '1996-05-03', '', 'teknikal'),
(2, 'Gaudensius Dimas ', 9500000, 'L', 'IOS Developer', '2017-04-04', 'gauden@gmail.com', 'gauden', 'root', '1996-04-05', '', 'teknikal'),
(3, 'Anwar Ramadha', 10000000, 'L', 'Android Developer', '2017-04-04', 'anwar.ramadha@gmail.com', 'anwarramadha', '$2y$10$E0RFR2RnqB0Pfv6HKWDWsulzfgamxziyL/Ay/kXUaZZGhbkK.NrUi', '1996-01-22', 'cJqTywtR9nebbSRmpgORluQzvZlXBBDhBi8aarI8sJzk7fUcQ1Vk034lz82g', 'teknikal'),
(4, 'Ikhwanul Muslimin', 10000000, 'L', 'MSDM', '2017-04-04', 'ikhwan@gmail.com', 'ikhwan', '$2y$10$E0RFR2RnqB0Pfv6HKWDWsulzfgamxziyL/Ay/kXUaZZGhbkK.NrUi', '2017-04-01', 'XvqxbWYjKeuUQ5NjYXo2tDafpDGe30xbeDJObtzUDSOvqkGNDK0cNitRDg9T', 'msdm');

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

--
-- Dumping data for table `Pelatihan`
--

INSERT INTO `Pelatihan` (`id_pelatihan`, `nama_trainer`, `waktu_pelaksanaan`, `deskripsi_pelatihan`) VALUES
(1, 'Yudhistira Ansar', '2017-04-05', 'Pelatihan untuk keamanan jaringan'),
(2, 'Awang Manaf', '2017-04-26', 'Pelatihan untuk sistem terdistribusi'),
(3, 'Rinaldi Munir', '2017-04-27', 'Pelatihan untuk enkripsi data');

-- --------------------------------------------------------

--
-- Table structure for table `Pengerjaan`
--

CREATE TABLE `Pengerjaan` (
  `id_pegawai` int(11) NOT NULL,
  `id_proyek` int(11) NOT NULL,
  `peran` varchar(255) NOT NULL,
  `keterangan_pengerjaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Pengerjaan`
--

INSERT INTO `Pengerjaan` (`id_pegawai`, `id_proyek`, `peran`, `keterangan_pengerjaan`) VALUES
(1, 1, 'Mobile Developer', 'blabla'),
(1, 2, 'Quality Assurance', 'bla bla');

-- --------------------------------------------------------

--
-- Table structure for table `Proyek`
--

CREATE TABLE `Proyek` (
  `id_proyek` int(11) NOT NULL,
  `waktu_pengerjaan` date NOT NULL,
  `deskripsi_proyek` text NOT NULL,
  `skala_proyek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Proyek`
--

INSERT INTO `Proyek` (`id_proyek`, `waktu_pengerjaan`, `deskripsi_proyek`, `skala_proyek`) VALUES
(1, '2017-04-03', 'mobile app project', 3),
(2, '2017-04-17', 'web project', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Pegawai`
--
ALTER TABLE `Pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id`),
  ADD KEY `id_pegawai_2` (`id`),
  ADD KEY `id` (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Pelatihan`
--
ALTER TABLE `Pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Proyek`
--
ALTER TABLE `Proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
