-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 04:34 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pondoksawargi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` varchar(10) NOT NULL,
  `tipe` enum('Tipe A','Tipe B') NOT NULL,
  `harga_tahunan` double NOT NULL,
  `status_ketersediaan` enum('Tersedia','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `tipe`, `harga_tahunan`, `status_ketersediaan`) VALUES
('LNT1B1', 'Tipe B', 9500000, 'Tidak'),
('LNT2A10', 'Tipe A', 10500000, 'Tersedia'),
('LNT2A12', 'Tipe A', 10500000, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `id_penghuni` varchar(10) NOT NULL,
  `nama_penghuni` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat_asal` varchar(150) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `no_telp_wali` varchar(15) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `status_aktif` enum('Aktif','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penghuni`
--

INSERT INTO `penghuni` (`id_penghuni`, `nama_penghuni`, `no_telp`, `alamat_asal`, `tanggal_lahir`, `jenis_kelamin`, `no_ktp`, `no_telp_wali`, `nama_wali`, `status_aktif`) VALUES
('101Z', 'Zaqi', '089632099762', 'Jalan kampung cina no.55 kabupaten indramayu', '2001-02-22', 'Pria', '11122202010004', '0819928851991', 'Asep balon', 'Aktif'),
('210A', 'Akmal Rizkulloh', '08122344122', 'baturaden no.99 kabupaten tasikmalaya', '2001-11-15', 'Pria', '1314041511010005', '087332557677', 'Angela Chan', 'Tidak'),
('212D', 'Diaz Nugraha', '081223341543', 'kampung durian runtuh kota tasik no.69', '2001-06-09', 'Pria', '1314020906010013', '08532551299', 'Ayaneru wangi', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `penjaga`
--

CREATE TABLE `penjaga` (
  `id_penjaga` varchar(10) NOT NULL,
  `nama_penjaga` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjaga`
--

INSERT INTO `penjaga` (`id_penjaga`, `nama_penjaga`, `no_telp`, `password`) VALUES
('Admin1', 'Cucu Husdiana', '085222243899', 'cucu29c');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_penghuni` varchar(10) NOT NULL,
  `id_kamar` varchar(10) NOT NULL,
  `id_penjaga` varchar(10) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_perpanjangan` date NOT NULL,
  `status_lunas` enum('Lunas','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_penghuni`, `id_kamar`, `id_penjaga`, `tanggal_sewa`, `tanggal_perpanjangan`, `status_lunas`) VALUES
('212D', 'LNT2A12', 'Admin1', '2021-01-16', '2022-01-16', 'Lunas'),
('101Z', 'LNT1B1', 'Admin1', '2021-01-20', '2022-01-20', 'Belum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`id_penghuni`);

--
-- Indexes for table `penjaga`
--
ALTER TABLE `penjaga`
  ADD PRIMARY KEY (`id_penjaga`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `id_penghuni` (`id_penghuni`),
  ADD KEY `id_penjaga` (`id_penjaga`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sewa_ibfk_2` FOREIGN KEY (`id_penghuni`) REFERENCES `penghuni` (`id_penghuni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sewa_ibfk_3` FOREIGN KEY (`id_penjaga`) REFERENCES `penjaga` (`id_penjaga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
