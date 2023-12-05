-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 07:27 AM
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
-- Database: `pendaftaran_sma_kencana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `no_id` varchar(8) DEFAULT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password_admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `no_id`, `nama_admin`, `email`, `username`, `password_admin`) VALUES
(1, '12345678', 'Reza Asep Adi Purnomo', 'rezaasep31@gmail.com', 'admin01', 'admin01');

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `alamat` varchar(400) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `jurusan` varchar(5) DEFAULT NULL,
  `mtk` varchar(5) DEFAULT NULL,
  `bing` varchar(5) DEFAULT NULL,
  `bind` varchar(5) DEFAULT NULL,
  `sekolah_asal` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama`, `nik`, `alamat`, `jenis_kelamin`, `agama`, `jurusan`, `mtk`, `bing`, `bind`, `sekolah_asal`, `tanggal`) VALUES
(1, 'Reza Asep Adi Purnomo', '3172020303050509', 'Jl.Sunter Muara 2, RT 17 RW 05, Sunter Agung, Tanjung Priok, Jakarta Utara', 'Male', 'Islam', 'IPS', '90', '91', '89', 'SMPN 221 Jakarta', '2021-06-26'),
(2, 'Muhammad Parel', '3172020303050588', 'Jl. Kacang no 12 RT 18 RW 03, Sunter Jaya, Kemayoran, Jakarta Pusat', 'Male', 'Islam', 'MIPA', '80', '80', '78', 'SMP Satya Kusuma', '2021-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `no_id` varchar(8) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `topic` varchar(50) DEFAULT NULL,
  `pesan` varchar(600) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `nama_admin`, `no_id`, `email`, `topic`, `pesan`, `tanggal`) VALUES
(1, 'Rizki Adrianto', '22113331', 'rizki00099@gmail.com', 'Error', 'Ini Bro ada error', '2021-06-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
