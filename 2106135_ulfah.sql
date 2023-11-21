-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2023 pada 22.39
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2106135_ulfah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pendaftaran_puskesmas`
--

CREATE TABLE `data_pendaftaran_puskesmas` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` enum('laki laki','perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_pendaftaran_puskesmas`
--

INSERT INTO `data_pendaftaran_puskesmas` (`id`, `nama_pasien`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `nomor_telepon`) VALUES
(3, 'Ulfah Nurhasanah', 'perempuan', '2003-03-05', 'kp.kandang kidul', '085554331222'),
(4, 'Ulfah Nurhasanah', 'perempuan', '2003-03-05', 'kp.kandang kidul', '085554331222');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pendaftaran_puskesmas`
--
ALTER TABLE `data_pendaftaran_puskesmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pendaftaran_puskesmas`
--
ALTER TABLE `data_pendaftaran_puskesmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
