-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 30 Bulan Mei 2024 pada 13.35
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brainteaserdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kata`
--

CREATE TABLE `master_kata` (
  `id` int(11) NOT NULL,
  `kata` varchar(255) NOT NULL,
  `clue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_kata`
--

INSERT INTO `master_kata` (`id`, `kata`, `clue`) VALUES
(1, 'MAGICCOM', 'Aku alat untuk memasak nasi?'),
(2, 'JAMTANGAN', 'Aku alat untuk mengukur waktu yang portable?'),
(3, 'KEMANGI', 'Aku tanaman yang digunakan sebagai bumbu dapur dan memiliki aroma kuat?'),
(4, 'TELEPON', 'Aku benda yang digunakan untuk menghubungi orang lain?'),
(5, 'LEMARI', 'Aku tempat menyimpan pakaian?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `point_game`
--

CREATE TABLE `point_game` (
  `id_point` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `total_poin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `point_game`
--

INSERT INTO `point_game` (`id_point`, `nama_user`, `total_poin`) VALUES
(1, 'dasdasd', -2),
(2, 'heru', 50),
(3, 'User Test', 12),
(4, 'das', -14);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `master_kata`
--
ALTER TABLE `master_kata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `point_game`
--
ALTER TABLE `point_game`
  ADD PRIMARY KEY (`id_point`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `master_kata`
--
ALTER TABLE `master_kata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `point_game`
--
ALTER TABLE `point_game`
  MODIFY `id_point` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
