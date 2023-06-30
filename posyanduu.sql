-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2023 pada 19.04
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
-- Database: `posyanduu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblbayi`
--

CREATE TABLE `tblbayi` (
  `kode` int(11) NOT NULL,
  `nama_anak` varchar(30) NOT NULL,
  `jeniskelamin` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `berat_badan` varchar(20) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblbayi`
--

INSERT INTO `tblbayi` (`kode`, `nama_anak`, `jeniskelamin`, `tanggal_lahir`, `berat_badan`, `nama_ayah`, `nama_ibu`) VALUES
(2, 'ee', 'ee', '0000-00-00', '88', 'ee', 'ee'),
(788, 'Torik', '0', '1444-04-13', '2,9 Kg', 'Tirik', 'Torokkk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblibu`
--

CREATE TABLE `tblibu` (
  `kode` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_anak` varchar(30) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `beratbadan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblibu`
--

INSERT INTO `tblibu` (`kode`, `tanggal`, `nama_ibu`, `nama_ayah`, `nama_anak`, `umur`, `beratbadan`) VALUES
(2, '1212-12-12', '1', '1', '1', '10', '20kg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_laporan`
--

CREATE TABLE `tbl_laporan` (
  `id_laporan` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `jml_ibuhamil` int(100) NOT NULL,
  `diperiksa` int(11) NOT NULL,
  `ibu_menyusui` int(11) NOT NULL,
  `jml_balita` int(11) NOT NULL,
  `jml_btimbang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`id_laporan`, `bulan`, `jml_ibuhamil`, `diperiksa`, `ibu_menyusui`, `jml_balita`, `jml_btimbang`) VALUES
(123, 'september', 5, 5, 5, 5, 5),
(786, 'November', 45, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'bahri', 'admin'),
(2, 'pembeli', 'pembeli', 'buyer', 'pembeli');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblbayi`
--
ALTER TABLE `tblbayi`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tblibu`
--
ALTER TABLE `tblibu`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblbayi`
--
ALTER TABLE `tblbayi`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=789;

--
-- AUTO_INCREMENT untuk tabel `tblibu`
--
ALTER TABLE `tblibu`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2022070537;

--
-- AUTO_INCREMENT untuk tabel `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=787;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
