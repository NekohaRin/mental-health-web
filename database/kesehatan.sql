-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2025 pada 09.08
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

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
-- Struktur dari tabel `bornout`
--

CREATE TABLE `bornout` (
  `id_bornout` int(11) NOT NULL,
  `id_user` int(12) DEFAULT NULL,
  `skor` int(3) NOT NULL,
  `tgl_buat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `depresi`
--

CREATE TABLE `depresi` (
  `id_depresi` int(11) NOT NULL,
  `id_user` int(12) DEFAULT NULL,
  `skor` int(3) NOT NULL,
  `tgl_buat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecemasan`
--

CREATE TABLE `kecemasan` (
  `id_kecemasan` int(11) NOT NULL,
  `id_user` int(12) DEFAULT NULL,
  `skor` int(3) NOT NULL,
  `tgl_buat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_tidur`
--

CREATE TABLE `k_tidur` (
  `id_k_tidur` int(11) NOT NULL,
  `id_user` int(12) DEFAULT NULL,
  `skor` int(3) NOT NULL,
  `tgl_buat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stres`
--

CREATE TABLE `stres` (
  `id_stres` int(11) NOT NULL,
  `id_user` int(12) DEFAULT NULL,
  `skor` int(3) NOT NULL,
  `tgl_buat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(12) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `no_hp` int(20) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bornout`
--
ALTER TABLE `bornout`
  ADD PRIMARY KEY (`id_bornout`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `depresi`
--
ALTER TABLE `depresi`
  ADD PRIMARY KEY (`id_depresi`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `kecemasan`
--
ALTER TABLE `kecemasan`
  ADD PRIMARY KEY (`id_kecemasan`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `k_tidur`
--
ALTER TABLE `k_tidur`
  ADD PRIMARY KEY (`id_k_tidur`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `stres`
--
ALTER TABLE `stres`
  ADD PRIMARY KEY (`id_stres`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bornout`
--
ALTER TABLE `bornout`
  MODIFY `id_bornout` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `depresi`
--
ALTER TABLE `depresi`
  MODIFY `id_depresi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kecemasan`
--
ALTER TABLE `kecemasan`
  MODIFY `id_kecemasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `k_tidur`
--
ALTER TABLE `k_tidur`
  MODIFY `id_k_tidur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `stres`
--
ALTER TABLE `stres`
  MODIFY `id_stres` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bornout`
--
ALTER TABLE `bornout`
  ADD CONSTRAINT `bornout_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `depresi`
--
ALTER TABLE `depresi`
  ADD CONSTRAINT `depresi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kecemasan`
--
ALTER TABLE `kecemasan`
  ADD CONSTRAINT `kecemasan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `k_tidur`
--
ALTER TABLE `k_tidur`
  ADD CONSTRAINT `k_tidur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `stres`
--
ALTER TABLE `stres`
  ADD CONSTRAINT `stres_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
