-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2024 pada 13.59
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_puskesmas_2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `paramedik`
--

CREATE TABLE `paramedik` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gender` char(1) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kategori` enum('umum','spesialis') NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `unit_kerja_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paramedik`
--

INSERT INTO `paramedik` (`id`, `nama`, `gender`, `tmp_lahir`, `tgl_lahir`, `kategori`, `telpon`, `alamat`, `unit_kerja_id`) VALUES
(2, 'Drg.Fathia', 'p', 'Bojong Gede', '1984-03-14', 'umum', '082250982351', 'Jl. Padang No. 17, RT.04/RW.02,', 1),
(3, 'dr. Suci rahmadani', 'p', 'jakarta', '1995-02-16', 'spesialis', '082157492394', 'Jl. Raya Condet No. 99, RT.07/RW.05,', 2),
(6, 'Dr. Insiatun', 'p', 'Depok', '1991-02-07', 'umum', '082250498761', 'Jl. Koperasi No. 45A, RT.07/RW.09,', 5),
(7, 'Dr. Fathur mudzakar', 'l', 'Bogor', '1990-01-01', 'umum', '082234210978', 'Gg. Masjid No. 32, RT.01/RW.03,', 6),
(8, 'Dr. Sudan', 'l', 'jakarta Barat', '1991-07-28', 'umum', '082912437865', 'Jl. Abadi Raya No. 55, RT.04/RW.03,452', 7),
(9, 'Drg. Rio', 'l', 'Bojong Gede', '1993-07-22', 'umum', '087654132537', 'Jl. Gdc No. 345, RT.02/RW.06,', 8),
(10, 'Dr. Vasudave', 'l', 'Jakrta Timur', '1989-05-18', 'spesialis', '089827455049', 'Jl. Ps rebo No. 12, RT.01/RW.05,', 9),
(25, 'Dr. Rahmanda', 'p', 'Cibubur', '2001-09-11', 'spesialis', '082216550610', 'jl. Kemang', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
