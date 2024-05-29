-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2024 pada 09.36
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nim` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES
(2, 'Park Shin Hye', '1915042016', 'shinhye@gmail.com', 'Pendidikan Geografi', '6512d348c4c92.jpeg'),
(39, 'Willy Salim', '1915041001', 'willy@gmail.com', 'Pendidikan Geografi', '6512d3abad2b0.jpeg'),
(40, 'Kaesang', '1915041004', 'kaesang@gmail.com', 'Pendidikan geografi', '6512d2b897e57.jpg'),
(41, 'Kim Jong Un', '1715442006', 'kimjongun@gmail.com', 'Pendidikan Geografi', '6512d3016cfe9.jpg'),
(42, 'Siapa aku', '1815041003', 'siapa@gmail.com', 'Pendidikan Geografi', '6512d3b3bb6e1.jpeg'),
(43, 'Ririn Safitri S.Pd', '1915040011', 'ririn@gmail.com', 'Pendidikan Geografi', '6512d289315aa.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'ummuzainab', '$2y$10$NUlwutGZ.wN5wVF2QMYsC.dX0onRkWhfWiWlUOflCZ4wyymk1JcxC'),
(2, 'ayu', '$2y$10$jjc89cf8FNM0tJX9ggeSAOlPXQwXHMD81XSO/DhbE3gUyP99TqTLy'),
(3, 'ririn', '$2y$10$wqrA4XKEriE4V3HP0pHKC.ZSSZDbQzMGYAAhoah9YkDIQptiyMK7y'),
(4, '', '$2y$10$7baCp297BD.HO3Rdc0P2HObcUtSp2h2iU9T6RG65LZfA8qFu5Hn3C');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
