-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2021 pada 13.26
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nid` char(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id`, `nid`, `nama`, `email`, `telepon`) VALUES
(1, '045342219', 'Marcell Bintang Setiawan', 'bintangsetiawan900@gmail.com', '08883469294'),
(2, '045342218', 'Candra Kurniawan', 'candra@example.com', '088813452102'),
(3, '045342216', 'Sigit Prasetyo Setiawan', 'sigit@example.com', '085648663566'),
(4, '045342217', 'Muhammad Anugerah Zakaria', 'muhammad@example.com', '089123427865');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `idn` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `negara` varchar(110) NOT NULL,
  `markas` varchar(110) NOT NULL,
  `est` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `partners`
--

INSERT INTO `partners` (`id`, `idn`, `nama`, `negara`, `markas`, `est`) VALUES
(1, 'V13302020', 'Marvel Studios', 'Amerika Serikat', 'Burbank, California', '1994'),
(2, 'V13302010', 'Rapi Films', 'Indonesia', 'Bandung, Jawa Barat', '2001'),
(3, 'V13302012', 'Screenplay Films', 'Indonesia', 'Senayan City, Jakarta Pusat', '2015'),
(4, 'V13302001', 'Ufotable, Inc.', 'Jepang', 'Nakano, Tokyo', '2000'),
(5, 'V13302002', 'Aniplex Inc.', 'Jepang', 'Chiyoda, Tokyo', '1995'),
(6, 'V13302011', 'MAPPA Studio', 'Jepang', 'Tokyo', '2011'),
(7, 'V13302043', 'Pixar Animation Studios', 'Amerika Serikat', 'Richmond, California', '1986');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'bintang', '$2y$10$90T7oRXs.YIqbGQRPfgZYezTFc86vEsgDe.XEWNrgcfBMJcgkA0a.'),
(3, 'admin', '$2y$10$OdQilUIYfwXpGgTlpHvLeOthxztGZHo4QlNuLOJzzSL64rtKV2nBO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
