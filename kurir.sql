-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Nov 2018 pada 13.24
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kurir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `resi` int(11) NOT NULL,
  `nama_pengirim` varchar(20) NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `telp_pengirim` varchar(20) NOT NULL,
  `nama_penerima` varchar(20) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `telp_penerima` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `berat` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal_kirim` datetime NOT NULL,
  `tanggal_terima` datetime NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`resi`, `nama_pengirim`, `alamat_pengirim`, `telp_pengirim`, `nama_penerima`, `alamat_penerima`, `telp_penerima`, `jenis`, `berat`, `harga`, `tanggal_kirim`, `tanggal_terima`, `lokasi`, `status`, `keterangan`) VALUES
(2, 'Oji', 'mangga dua, jakarta', '087783888383', 'Rama', 'karawang', '09777788734', 'Barang Umum', 2, 20000, '0000-00-00 00:00:00', '2018-11-30 09:09:23', 'Jakarta', 'Return', ''),
(3, 'Rizal', 'Jakarta', '92304293487979', 'rrrr', 'ttttt', '23427', 'Dokumen', 1, 10000, '0000-00-00 00:00:00', '2018-11-29 03:22:39', 'Jakarta', 'Diterima', ''),
(4, 'Ria Widianti', 'Ds Ciampel', '089766542211', 'Diah Permatasari', 'Jakarta', '08881123123', 'Dokumen', 1, 10000, '2018-11-30 09:02:03', '2018-11-30 09:03:41', 'Surabaya', 'Delivered', 'diterima oleh ratih'),
(5, 'romi', 'cipinang', '081219196443', 'diana', 'kemayoran', '08881123123', 'Barang Umum', 2, 10000, '2018-11-30 01:16:34', '0000-00-00 00:00:00', 'Jakarta', 'Delivered', 'done');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `level_user` varchar(150) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `level_user`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'oji', 'oji', '54b2aa1988fc565e35c6c8155a28d2ec', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`resi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `resi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
