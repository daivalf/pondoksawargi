-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 05:27 AM
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
('A01', 'Tipe A', 9500000, 'Tersedia'),
('A02', 'Tipe A', 9500000, 'Tersedia'),
('A03', 'Tipe A', 9500000, 'Tersedia'),
('A04', 'Tipe A', 9500000, 'Tersedia'),
('A05', 'Tipe A', 9500000, 'Tersedia'),
('A06', 'Tipe A', 9500000, 'Tersedia'),
('A07', 'Tipe A', 9500000, 'Tersedia'),
('A08', 'Tipe A', 9500000, 'Tersedia'),
('B01', 'Tipe B', 10500000, 'Tersedia'),
('B02', 'Tipe B', 10500000, 'Tersedia'),
('B03', 'Tipe B', 10500000, 'Tersedia'),
('B04', 'Tipe B', 10500000, 'Tersedia'),
('B05', 'Tipe B', 10500000, 'Tersedia'),
('B06', 'Tipe B', 10500000, 'Tersedia'),
('B07', 'Tipe B', 10500000, 'Tersedia'),
('B08', 'Tipe B', 10500000, 'Tersedia'),
('B09', 'Tipe B', 10500000, 'Tersedia'),
('B10', 'Tipe B', 10500000, 'Tersedia'),
('B11', 'Tipe B', 10500000, 'Tersedia'),
('B12', 'Tipe B', 10500000, 'Tersedia');

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
('PA012020', 'Zulhaqi', '089632019762', 'Jalan Pabean No. 29, Rt. 06, Rw. 07, Indramayu', '2001-01-11', 'Pria', '3175808098743621', '089632019876', 'Asep', 'Aktif'),
('PB082021', 'Rifki', '082218081639', 'Jalan Pangestu No. 93, Rt. 10, Rw. 12, Tasik', '2001-09-12', 'Pria', '3174898937468019', '082218083521', 'Kautsar', 'Aktif'),
('PB102020', 'Akmal', '081394802341', 'Jalan Sukaratu No. 02, Rt. 06, Rw. 08, Indihiang', '2001-11-15', 'Pria', '3178984728289890', '081394804637', 'Rizqulloh', 'Aktif'),
('PB122020', 'Diaz', '081322508258', 'Jalan Arthamulya VII No. 15, Rt. 05, Rw. 02, Tasik', '2001-06-09', 'Pria', '3176983890902746', '081322507364', 'Nugraha', 'Aktif');

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
('sawargi29c', 'Cucu Husdiana', '085222243899', 'cucu29c');

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
('PB102020', 'B10', 'sawargi29c', '2020-03-18', '2022-03-18', 'Lunas'),
('PB122020', 'B12', 'sawargi29c', '2020-05-20', '2022-05-20', 'Lunas'),
('PA012020', 'A01', 'sawargi29c', '2020-07-05', '2022-07-05', 'Lunas'),
('PB082021', 'B08', 'sawargi29c', '2021-11-24', '2022-11-24', 'Lunas');

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
  ADD CONSTRAINT `sewa_ibfk_3` FOREIGN KEY (`id_penjaga`) REFERENCES `penjaga` (`id_penjaga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
