-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2025 at 02:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kesehatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bornout`
--

CREATE TABLE `bornout` (
  `id_bornout` int(11) NOT NULL,
  `id_user` int(12) DEFAULT NULL,
  `skor` int(3) NOT NULL,
  `tgl_buat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `depresi`
--

CREATE TABLE `depresi` (
  `id_depresi` int(11) NOT NULL,
  `id_user` int(12) DEFAULT NULL,
  `skor` int(3) NOT NULL,
  `tgl_buat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `penanganan` varchar(255) NOT NULL,
  `harga_min` int(11) NOT NULL,
  `harga_max` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kecemasan`
--

CREATE TABLE `kecemasan` (
  `id_kecemasan` int(11) NOT NULL,
  `id_user` int(12) DEFAULT NULL,
  `skor` int(3) NOT NULL,
  `tgl_buat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `k_tidur`
--

CREATE TABLE `k_tidur` (
  `id_k_tidur` int(11) NOT NULL,
  `id_user` int(12) DEFAULT NULL,
  `skor` int(3) NOT NULL,
  `tgl_buat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stres`
--

CREATE TABLE `stres` (
  `id_stres` int(11) NOT NULL,
  `id_user` int(12) NOT NULL,
  `skor` int(3) NOT NULL,
  `tgl_buat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(12) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `no_hp` int(20) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `no_hp`, `gender`, `tanggal_lahir`, `role`) VALUES
(1, 'jakii', 'jaki', 'scienceninja9@gmail.com', 2147483647, 'Laki-laki', '2005-01-24', 'user'),
(2, 'spada', 'lins', 'dzakymuamm@gmail.com', 2147483647, 'Laki-laki', '2005-09-30', 'user'),
(3, 'spada', '$2y$10$t', 'jakiinajah@gmail.com', 2147483647, 'Laki-laki', '2004-01-24', 'user'),
(4, 'atmin19jt', '123', 'wowok@konoha.com', NULL, '', '0000-00-00', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bornout`
--
ALTER TABLE `bornout`
  ADD PRIMARY KEY (`id_bornout`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `depresi`
--
ALTER TABLE `depresi`
  ADD PRIMARY KEY (`id_depresi`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `kecemasan`
--
ALTER TABLE `kecemasan`
  ADD PRIMARY KEY (`id_kecemasan`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `k_tidur`
--
ALTER TABLE `k_tidur`
  ADD PRIMARY KEY (`id_k_tidur`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `stres`
--
ALTER TABLE `stres`
  ADD PRIMARY KEY (`id_stres`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bornout`
--
ALTER TABLE `bornout`
  MODIFY `id_bornout` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `depresi`
--
ALTER TABLE `depresi`
  MODIFY `id_depresi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecemasan`
--
ALTER TABLE `kecemasan`
  MODIFY `id_kecemasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `k_tidur`
--
ALTER TABLE `k_tidur`
  MODIFY `id_k_tidur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stres`
--
ALTER TABLE `stres`
  MODIFY `id_stres` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bornout`
--
ALTER TABLE `bornout`
  ADD CONSTRAINT `bornout_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `depresi`
--
ALTER TABLE `depresi`
  ADD CONSTRAINT `depresi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kecemasan`
--
ALTER TABLE `kecemasan`
  ADD CONSTRAINT `kecemasan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `k_tidur`
--
ALTER TABLE `k_tidur`
  ADD CONSTRAINT `k_tidur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
