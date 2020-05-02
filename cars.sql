-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 07 Jan 2020 pada 09.49
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_type`, `image`, `hire_cost`, `capacity`, `status`) VALUES
(1, 'Sepeda Ontel', 'Batayus', 'sepeda-ontel.jpg', 20000, 2, 'Tersedia'),
(2, 'Sepeda BMX', 'Scott', 'sepeda-bmx.jpeg', 12500, 1, 'Tersedia'),
(3, 'Sepeda Gunung', 'Trex\r\n', 'sepeda-gunung.jpg', 14000, 1, 'Tersedia'),
(5, 'Sepeda Onta', 'Phonix', 'sepeda-onta.jpg', 15000, 1, 'Tersedia'),
(6, 'Sepeda santai', 'Intense', 'sepeda-santai.jpg', 9000, 1, 'Tersedia'),
(7, 'ideal', 'Sepeda dengan dua Kursi', 'sepeda-dua.jpg', 11000, 2, 'Tersedia'),
(8, 'Becak', 'Phonix', 'becak.jpg', 15000, 3, 'Tersedia'),
(9, 'Sepeda Ban Besar', 'Piago', 'sepeda-banbesar.jpg', 13000, 1, 'Tersedia'),
(10, 'Sepeda Fixie', 'fixie', 'sepeda-fixie.jpg', 12000, 1, 'Tersedia'),
(11, 'Sepeda Goyang', 'Buatan Sendiri', 'sepeda-goyang.jpg', 13000, 1, 'Tersedia'),
(12, 'Sepeda Lipat', 'Sepeda Lipat', 'sepeda-lipat.jpg', 10000, 2, 'Tersedia'),
(13, 'Sepeda listrik', 'Megathon', 'sepeda-listrik.jpg', 20000, 2, 'Tersedia'),
(14, 'Sepeda Roda Satu', 'Buatan Sendiri', 'sepeda-roda-satu.jpg', 15000, 1, 'Tersedia'),
(15, 'Sepeda Roda Tiga', 'Dodo', 'sepeda-roda-tiga.jpg', 12000, 1, 'Tersedia'),
(16, 'Sepeda susah di buat sendiri', 'sepeda unik', 'sepeda-susah.jpg', 1000, 1, 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mpesa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`client_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `car_id`, `status`, `mpesa`) VALUES
(2, 'Naufal Islam', 'pale@pale.com', 1, 705053484, 'Tegal', 'Laki-Laki', 1, 'Disetujui', '62'),
(3, 'Muhammad A Muiz', 'muiz@gmail.com', 1, 707403614, 'Pemalang', 'Laki-Laki', 2, 'Disetujui', '62'),
(9, 'iru', 'ngasal@gmail.com', 1, 2147483647, 'tegal', 'Laki-Laki', 2, 'Disetujui', '62'),
(10, 'jepri', 'jepri@gmail.com', 1, 900987, 'Tegal', 'Laki-Laki', 1, 'Pending', '62'),
(11, 'Naufal Islam', 'iru@mugen.jav', 1010, 25432, 'Pemalang', 'Laki-Laki', 1, 'Pending', '09864527'),
(12, 'Naufal Islam', 'pale@pale.com', 1, 2147483647, 'tegal', 'Laki-Laki', 1, 'apa', '62'),
(13, 'apa', 'siapa@siapa.com', 234, 22222, 'sunter', 'Laki-Laki', 1, 'Pending', ''),
(14, 'Naufal', 'palepale@gmail.com', 123, 2147483647, 'Tegal', 'Laki-Laki', 0, 'Available', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`msg_id`, `client_id`, `message`, `status`, `time`) VALUES
(6, 0, 'saya merasa senang dengan pelayanan anda', 'Unread', '2019-06-25 13:14:45'),
(7, 0, 'hay', 'Unread', '2020-01-06 22:35:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indeks untuk tabel `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indeks untuk tabel `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
