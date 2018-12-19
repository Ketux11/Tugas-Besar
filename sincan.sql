-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2018 pada 15.01
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sincan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`email`, `password`, `nama_lengkap`, `alamat`, `kota`, `negara`, `kodepos`, `level`) VALUES
('amin@uii.ac.id', '21232f297a57a5a743894a0e4a801fc3', 'Amin Nur Rohim', 'Jalan Kaliurang Km 13', 'Sleman', 'Indonesia', 55584, 2),
('ari@uii.ac.id', '21232f297a57a5a743894a0e4a801fc3', 'Ari Satrio Putra', 'Jalan Kaliurang Km 14', 'Sleman', 'Indonesia', 55584, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kirim_berita`
--

CREATE TABLE `kirim_berita` (
  `id` int(15) NOT NULL,
  `admin` varchar(25) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `provinsi` text NOT NULL,
  `kota` text NOT NULL,
  `kecamatan` text NOT NULL,
  `status` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `lokasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kirim_berita`
--

INSERT INTO `kirim_berita` (`id`, `admin`, `judul`, `tanggal`, `waktu`, `provinsi`, `kota`, `kecamatan`, `status`, `deskripsi`, `gambar`, `lokasi`) VALUES
(6, 'default', 'Gempa ', '2010-10-30', '17:00:00', 'Sumatera Barat', 'Pariaman', 'tidak diketahui', 'Bahaya', 'not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     not found     ', '', 'tidak diketahui'),
(7, 'default', 'Tsunami', '2018-09-20', '08:00:00', 'Nusa Tenggara', 'Palu', 'Donggala', 'Bahaya', 'kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     ', '', 'tidak diketahui'),
(8, 'default', 'Tsunami', '2004-12-23', '09:00:00', 'Aceh', 'Palu', 'tidak diketahui', 'Bahaya', 'kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     kosong     ', '', 'tidak diketahui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(10) NOT NULL,
  `no_laporan` int(11) DEFAULT NULL,
  `jenis_bencana` text NOT NULL,
  `waktu` date NOT NULL,
  `kota` text NOT NULL,
  `provinsi` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` blob NOT NULL,
  `status_validasi` varchar(50) DEFAULT NULL,
  `nama` text,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `no_laporan`, `jenis_bencana`, `waktu`, `kota`, `provinsi`, `deskripsi`, `gambar`, `status_validasi`, `nama`, `email`) VALUES
(7, NULL, 'Gempa Bumi', '2010-10-30', 'Padang', 'Sumatera Barat', 'not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      not found      ', 0x312e706e67, NULL, NULL, NULL),
(8, NULL, 'Tsunami', '2018-09-20', 'Palu', 'Aceh', 'kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        kosong        ', '', NULL, NULL, NULL),
(9, NULL, 'Tsunami', '2004-12-23', 'Palu', 'Aceh', 'tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             tidak diketahui             ', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `kodepos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`email`, `password`, `nama_lengkap`, `alamat`, `kota`, `negara`, `kodepos`) VALUES
('a@gmail.com', 'a', 'a', 's', 'a', 's', 123),
('amin@gmail.com', '123abc', 'Amin Nur Rohim', 'Ngaglik', 'Sleman', 'Indonesia', 55581),
('anonim1@gmail.com', 'anonim', 'AnonimSatu', 'kosong', 'kosong', 'kosong', 12345),
('anonim2@gmail.com', 'anonim', 'Anonim2', 'kosong2', 'kosong2', 'kosong2', 12345);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `kirim_berita`
--
ALTER TABLE `kirim_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kirim_berita`
--
ALTER TABLE `kirim_berita`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
