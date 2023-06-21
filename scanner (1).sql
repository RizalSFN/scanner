-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2023 pada 08.34
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scanner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anteraja`
--

CREATE TABLE `anteraja` (
  `id` int(11) NOT NULL,
  `kode_anteraja` varchar(255) NOT NULL,
  `scan_pada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anteraja`
--

INSERT INTO `anteraja` (`id`, `kode_anteraja`, `scan_pada`) VALUES
(2, '10007355219433', '18/06/2023'),
(3, '10007375975508', '19/06/2023'),
(4, '10007375429546', '19/06/2023'),
(5, 'TAA-000003D569F', '19/06/2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `idexpress`
--

CREATE TABLE `idexpress` (
  `id` int(11) NOT NULL,
  `kode_idexpress` varchar(50) NOT NULL,
  `scan_pada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jne`
--

CREATE TABLE `jne` (
  `id` int(11) NOT NULL,
  `kode_jne` varchar(255) NOT NULL,
  `scan_pada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jne`
--

INSERT INTO `jne` (`id`, `kode_jne`, `scan_pada`) VALUES
(3, 'JY97365115033', '18/06/2023'),
(5, 'JY97365115099', '2023-06-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jnt`
--

CREATE TABLE `jnt` (
  `id` int(11) NOT NULL,
  `kode_jnt` varchar(255) NOT NULL,
  `scan_pada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jnt`
--

INSERT INTO `jnt` (`id`, `kode_jnt`, `scan_pada`) VALUES
(3, 'JP8930945064', '19/06/2023'),
(4, 'JP8481445699', '19/06/2023'),
(5, 'JP3986735959', '19/06/2023'),
(6, 'JP0409768059', '19/06/2023'),
(7, 'JP6958464308', '19/06/2023'),
(8, 'JP0432853492', '19/06/2023'),
(9, 'JP9565293820', '19/06/2023'),
(10, 'JP5259113782', '19/06/2023'),
(11, 'JP1390701349', '19/06/2023'),
(12, 'JP7079224504', '19/06/2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ninjaexpress`
--

CREATE TABLE `ninjaexpress` (
  `id` int(11) NOT NULL,
  `kode_ninjaexpress` varchar(255) NOT NULL,
  `scan_pada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos`
--

CREATE TABLE `pos` (
  `id` int(11) NOT NULL,
  `kode_pos` varchar(255) NOT NULL,
  `scan_pada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pos`
--

INSERT INTO `pos` (`id`, `kode_pos`, `scan_pada`) VALUES
(1, '323061200004', '18/06/2023'),
(2, '323061900022', '19/06/2023'),
(3, '323061900010', '19/06/2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shopeexp`
--

CREATE TABLE `shopeexp` (
  `id` int(11) NOT NULL,
  `kode_shopeexp` varchar(255) NOT NULL,
  `scan_pada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `shopeexp`
--

INSERT INTO `shopeexp` (`id`, `kode_shopeexp`, `scan_pada`) VALUES
(15, 'SPXID032248146196', '18/06/2023'),
(19, 'SPXID030369481976', '19/06/2023'),
(20, 'SPXID033403635566', '19/06/2023'),
(21, 'SPXID035961227586', '19/06/2023'),
(22, 'SPXID038146015986', '19/06/2023'),
(23, 'SPXID033464865436', '19/06/2023'),
(24, 'SPXID032883505786', '19/06/2023'),
(25, 'SPXID031285611126', '19/06/2023'),
(26, 'SPXID032570344486', '19/06/2023'),
(27, 'SPXID038597673906', '19/06/2023'),
(28, 'SPXID033247092756', '19/06/2023'),
(29, 'SPXID036353611726', '19/06/2023'),
(30, 'SPXID039797118406', '19/06/2023'),
(31, 'SPXID036155843246', '19/06/2023'),
(32, 'SPXID037683128426', '19/06/2023'),
(33, 'SPXID034537346506', '19/06/2023'),
(34, 'SPXID039585085696', '19/06/2023'),
(35, 'SPXID031790010196', '19/06/2023'),
(36, 'SPXID037916629746', '19/06/2023'),
(37, 'SPXID036274542616', '19/06/2023'),
(38, 'SPXID039529617846', '19/06/2023'),
(39, 'SPXID039445152986', '19/06/2023'),
(41, 'SPXID037375540896', '19-06-2023'),
(42, 'SPXID034328003416', '19-06-2023'),
(43, 'SPXID030634466356', '19-06-2023'),
(44, 'SPXID034199804856', '19-06-2023'),
(45, 'SPXID039057021556', '19-06-2023'),
(46, 'SPXID036204928996', '19-06-2023'),
(47, 'SPXID033419635576', '19-06-2023'),
(48, 'SPXID030583988166', '19-06-2023'),
(49, 'SPXID036353611711', '2023-06-21'),
(50, 'SPXID7238784324', '2023-06-18'),
(51, 'SPXID827389713132', '2023-06-20'),
(53, 'SPXID28391868331', '2023-06-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sicepat`
--

CREATE TABLE `sicepat` (
  `id` int(11) NOT NULL,
  `kode_sicepat` varchar(255) NOT NULL,
  `scan_pada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sicepat`
--

INSERT INTO `sicepat` (`id`, `kode_sicepat`, `scan_pada`) VALUES
(3, 'TKSC-0000038N1TM', '18/06/2023'),
(5, '004216697078', '19/06/2023'),
(6, 'TKSC-000003D30XX', '19/06/2023'),
(7, '004216916951', '19/06/2023'),
(8, 'TKSC-0000038N1TK', '2023-06-21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anteraja`
--
ALTER TABLE `anteraja`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_anter` (`kode_anteraja`);

--
-- Indeks untuk tabel `idexpress`
--
ALTER TABLE `idexpress`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_id` (`kode_idexpress`);

--
-- Indeks untuk tabel `jne`
--
ALTER TABLE `jne`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_jne` (`kode_jne`);

--
-- Indeks untuk tabel `jnt`
--
ALTER TABLE `jnt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_jnt` (`kode_jnt`);

--
-- Indeks untuk tabel `ninjaexpress`
--
ALTER TABLE `ninjaexpress`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_ninja` (`kode_ninjaexpress`);

--
-- Indeks untuk tabel `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_pos` (`kode_pos`);

--
-- Indeks untuk tabel `shopeexp`
--
ALTER TABLE `shopeexp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_shope` (`kode_shopeexp`);

--
-- Indeks untuk tabel `sicepat`
--
ALTER TABLE `sicepat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_sicepat` (`kode_sicepat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anteraja`
--
ALTER TABLE `anteraja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `idexpress`
--
ALTER TABLE `idexpress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jne`
--
ALTER TABLE `jne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jnt`
--
ALTER TABLE `jnt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `ninjaexpress`
--
ALTER TABLE `ninjaexpress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pos`
--
ALTER TABLE `pos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `shopeexp`
--
ALTER TABLE `shopeexp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `sicepat`
--
ALTER TABLE `sicepat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
