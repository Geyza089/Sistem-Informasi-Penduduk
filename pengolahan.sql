-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2026 at 09:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengolahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `kelamin` varchar(30) NOT NULL,
  `ayah` varchar(100) NOT NULL,
  `ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`id`, `nama`, `tanggal`, `kelamin`, `ayah`, `ibu`) VALUES
(4, 'Citra Lestari', '2024-01-09', 'Perempuan', 'Andi Wijaya', 'Dewi Kartika'),
(5, 'Dimas Saputra', '2024-01-11', 'Laki-laki', 'Agus Salim', 'Yuni Astuti'),
(6, 'Eka Wulandari', '2024-01-13', 'Perempuan', 'Rudi Hartono', 'Maya Sari'),
(7, 'Fajar Nugroho', '2024-01-15', 'Laki-laki', 'Hendra Gunawan', 'Lilis Komala'),
(8, 'Gina Oktavia', '2024-01-17', 'Perempuan', 'Tono Supriyadi', 'Nina Handayani'),
(9, 'Hafiz Ramadhan', '2024-01-19', 'Laki-laki', 'Yusuf Maulana', 'Anisa Rahma'),
(10, 'Indah Permata', '2024-01-21', 'Perempuan', 'Slamet Riyadi', 'Fitri Yuliana'),
(11, 'Joko Susanto', '2024-01-23', 'Laki-laki', 'Wawan Setiawan', 'Rika Damayanti'),
(12, 'Kartika Dewi', '2024-01-25', 'Perempuan', 'Asep Hidayat', 'Linda Sari'),
(13, 'Lukman Hakim', '2024-01-27', 'Laki-laki', 'Maman Suherman', 'Siska Melati'),
(14, 'Mira Anjani', '2024-01-29', 'Perempuan', 'Teguh Prakoso', 'Reni Aprilia'),
(15, 'Nanda Saputri', '2024-02-01', 'Perempuan', 'Eko Prasetyo', 'Desi Anggraini'),
(16, 'Oki Setiawan', '2024-02-03', 'Laki-laki', 'Bambang Irawan', 'Tuti Alawiyah'),
(17, 'Putra Mahendra', '2024-02-05', 'Laki-laki', 'Rizal Fahmi', 'Novi Yanti'),
(18, 'Qonita Zahra', '2024-02-07', 'Perempuan', 'Ilham Akbar', 'Dina Puspita'),
(19, 'Raka Firmansyah', '2024-02-09', 'Laki-laki', 'Heri Kurniawan', 'Lina Marlina'),
(20, 'Salsa Nabila', '2024-02-11', 'Perempuan', 'Jajang Nurjaman', 'Wati Susanti'),
(21, 'Tegar Saputra', '2024-02-13', 'Laki-laki', 'Dadang Suhendra', 'Euis Komalasari'),
(22, 'Ulfah Rahma', '2024-02-15', 'Perempuan', 'Yayan Mulyana', 'Ani Nurhayati'),
(23, 'Vino Prakoso', '2024-02-17', 'Laki-laki', 'Kusnadi', 'Sri Wahyuni'),
(24, 'Winda Lestari', '2024-02-19', 'Perempuan', 'Cecep Maulana', 'Nani Karlina'),
(25, 'Yoga Pratama', '2024-02-21', 'Laki-laki', 'Usep Ruhimat', 'Rohani'),
(26, 'Zahra Amelia', '2024-02-23', 'Perempuan', 'Darmawan', 'Mimin Mintarsih'),
(27, 'Alif Ramadhan', '2024-02-25', 'Laki-laki', 'Joko Widodo', 'Rina Wati'),
(28, 'Bella Maharani', '2024-02-27', 'Perempuan', 'Suryadi', 'Lela Nurlela'),
(29, 'Cahyo Nugraha', '2024-03-01', 'Laki-laki', 'Ujang Solihin', 'Neneng Hasanah'),
(30, 'Dewi Safitri', '2024-03-03', 'Perempuan', 'Aang Kurnia', 'Tati Hartati'),
(31, 'Egi Saprudin', '2024-03-05', 'Laki-laki', 'Solehudin', 'Ai Maesaroh'),
(32, 'Fitriani Putri', '2024-03-07', 'Perempuan', 'Asep Suhendar', 'Lilis Suryani'),
(33, 'Galih Prasetya', '2024-03-09', 'Laki-laki', 'Rohman', 'Iis Dahlia'),
(34, 'Hani Nuraini', '2024-03-11', 'Perempuan', 'Yudi Hermawan', 'Sari Wulandari'),
(35, 'Iqbal Maulana', '2024-03-13', 'Laki-laki', 'Dani Firmansyah', 'Mira Susanti'),
(36, 'Jihan Aulia', '2024-03-15', 'Perempuan', 'Fauzan', 'Rika Oktaviani'),
(37, 'Kevin Saputra', '2024-03-17', 'Laki-laki', 'Ramdani', 'Yuliawati'),
(38, 'Laila Nurhaliza', '2024-03-19', 'Perempuan', 'Asep Rohman', 'Nurjanah'),
(39, 'Muhammad Rizki', '2024-03-21', 'Laki-laki', 'Endang Sujana', 'Erniwati'),
(40, 'Nabila Putri', '2024-03-23', 'Perempuan', 'Hidayatullah', 'Wina Marlina'),
(41, 'Omar Faruq', '2024-03-25', 'Laki-laki', 'Ade Gunawan', 'Dewi Sartika'),
(42, 'Putri Ayuningtyas', '2024-03-27', 'Perempuan', 'Roni Saputra', 'Tika Ramadhani'),
(43, 'Qori Azzahra', '2024-03-29', 'Perempuan', 'Mulyadi', 'Ratna Dewi'),
(44, 'Rendi Kurniawan', '2024-03-31', 'Laki-laki', 'Suhardi', 'Yayah Rokayah'),
(45, 'Siti Khadijah', '2024-04-02', 'Perempuan', 'Aep Saepudin', 'Nengsih'),
(46, 'Taufik Hidayat', '2024-04-04', 'Laki-laki', 'Rachmat', 'Imas Komariah'),
(47, 'Ulfa Maulida', '2024-04-06', 'Perempuan', 'Kamaludin', 'Reni Nuraeni'),
(48, 'Vira Oktaviani', '2024-04-08', 'Perempuan', 'Sopian', 'Lina Nuraini'),
(49, 'Wahyu Firmansyah', '2024-04-10', 'Laki-laki', 'Dede Yusuf', 'Mila Karmila'),
(50, 'Xavier Adrian', '2024-04-12', 'Laki-laki', 'Rangga Pratama', 'Dian Puspitasari'),
(51, 'Yasmin Azzahra', '2024-04-14', 'Perempuan', 'Gunawan', 'Novianti'),
(52, 'Zidan Alfarizi', '2024-04-16', 'Laki-laki', 'Hermawan', 'Rina Fitriani'),
(53, 'Aulia Rahman', '2024-04-18', 'Laki-laki', 'Tatang Sutisna', 'Nina Rosdiana'),
(54, 'Bintang Saputri', '2024-04-20', 'Perempuan', 'Dadan Ramdani', 'Lilis Nurhayati');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kec` varchar(100) NOT NULL,
  `kab` varchar(100) NOT NULL,
  `prov` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id`, `no_kk`, `kk`, `alamat`, `kec`, `kab`, `prov`) VALUES
(1, '21121', 'Agus', 'Ranjeng', 'Merak', 'Serang', 'Banten'),
(2, '121212', 'dda', 'dasads', 'dsa', 'dsa', 'da');

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `kelamin` varchar(30) NOT NULL,
  `wafat` date NOT NULL,
  `sebab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`id`, `nama`, `nik`, `tempat`, `tanggal`, `agama`, `kelamin`, `wafat`, `sebab`) VALUES
(1, 'Amar Yakuf', '13313', 'Purworejo', '2026-05-07', 'Islam', 'Perempuan', '2026-05-08', 'dsad'),
(2, 's', '1212', 's', '2026-05-03', 's', 'Laki-laki', '2026-05-09', 'DAS');

-- --------------------------------------------------------

--
-- Table structure for table `pendatang`
--

CREATE TABLE `pendatang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `asal` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('Menetap','Kost','Sementara') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendatang`
--

INSERT INTO `pendatang` (`id`, `nama`, `nik`, `tempat`, `tanggal`, `agama`, `kelamin`, `asal`, `alamat`, `status`) VALUES
(2, 'das', 'das', 'das', '2026-05-06', 'dad', 'Laki-laki', 'das', 'das', 'Sementara');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `nik`, `tempat`, `ttl`, `jenis_kelamin`, `alamat`, `agama`, `status`, `pekerjaan`, `kewarganegaraan`) VALUES
(46, 'Irfan Maulana', '3201010101010035', 'Jakarta', '1991-01-09', 'Laki-laki', 'Jl. Dahlia No. 35', 'Islam', 'Menikah', 'Wiraswasta', 'WNI'),
(47, 'Julia Rahma', '3201010101010036', 'Bogor', '1999-04-04', 'Perempuan', 'Jl. Flamboyan No. 36', 'Islam', 'Menikah', 'HRD', 'WNI'),
(52, 'Opik Taufik', '3201010101010041', 'Cirebon', '1993-05-15', 'Laki-laki', 'Jl. Mawar No. 41', 'Islam', 'Menikah', 'Buruh', 'WNI'),
(53, 'Puspita Dewi', '3201010101010042', 'Majalengka', '1997-09-29', 'Perempuan', 'Jl. Melati No. 42', 'Islam', 'Belum Menikah', 'Kasir', 'WNI'),
(54, 'Qomarudin', '3201010101010043', 'Subang', '1986-07-17', 'Laki-laki', 'Jl. Kenanga No. 43', 'Islam', 'Menikah', 'Tentara', 'WNI'),
(55, 'Rani Oktaviani', '3201010101010044', 'Bandung', '1995-11-06', 'Perempuan', 'Jl. Anggrek No. 44', 'Islam', 'Menikah', 'Dokter', 'WNI'),
(56, 'Sandi Permana', '3201010101010045', 'Purwakarta', '1992-01-24', 'Laki-laki', 'Jl. Dahlia No. 45', 'Islam', 'Belum Menikah', 'Driver', 'WNI'),
(57, 'Tari Ayu', '3201010101010046', 'Karawang', '1998-04-18', 'Perempuan', 'Jl. Flamboyan No. 46', 'Islam', 'Belum Menikah', 'Admin', 'WNI'),
(58, 'Umar Dani', '3201010101010047', 'Cianjur', '1989-12-27', 'Laki-laki', 'Jl. Cempaka No. 47', 'Islam', 'Menikah', 'Pedagang', 'WNI'),
(59, 'Vera Lestari', '3201010101010048', 'Bandung', '1999-10-10', 'Perempuan', 'Jl. Teratai No. 48', 'Islam', 'Belum Menikah', 'Content Creator', 'WNI'),
(60, 'Wawan Gunawan', '3201010101010049', 'Tasikmalaya', '1991-06-06', 'Laki-laki', 'Jl. Sakura No. 49', 'Islam', 'Menikah', 'Satpam', 'WNI'),
(61, 'Yuliana Sari', '3201010101010050', 'Garut', '2000-08-20', 'Perempuan', 'Jl. Kamboja No. 50', 'Islam', 'Belum Menikah', 'Pelajar', 'WNI'),
(62, 'Zaki Mubarak', '3201010101010051', 'Bandung', '1993-01-11', 'Laki-laki', 'Jl. Merpati No. 51', 'Islam', 'Menikah', 'Teknisi', 'WNI'),
(63, 'Anisa Fitri', '3201010101010052', 'Bogor', '1997-02-12', 'Perempuan', 'Jl. Rajawali No. 52', 'Islam', 'Belum Menikah', 'Admin', 'WNI'),
(64, 'Bayu Saputra', '3201010101010053', 'Bekasi', '1994-03-13', 'Laki-laki', 'Jl. Elang No. 53', 'Islam', 'Menikah', 'Programmer', 'WNI'),
(65, 'Cindy Maharani', '3201010101010054', 'Depok', '1999-04-14', 'Perempuan', 'Jl. Camar No. 54', 'Islam', 'Belum Menikah', 'Kasir', 'WNI'),
(66, 'Dadan Kurnia', '3201010101010055', 'Garut', '1988-05-15', 'Laki-laki', 'Jl. Kenari No. 55', 'Islam', 'Menikah', 'Petani', 'WNI'),
(67, 'Elsa Putri', '3201010101010056', 'Bandung', '2001-06-16', 'Perempuan', 'Jl. Nuri No. 56', 'Islam', 'Belum Menikah', 'Mahasiswa', 'WNI'),
(68, 'Fikri Hidayat', '3201010101010057', 'Ciamis', '1990-07-17', 'Laki-laki', 'Jl. Kakaktua No. 57', 'Islam', 'Menikah', 'Guru', 'WNI'),
(69, 'Gita Permata', '3201010101010058', 'Jakarta', '1998-08-18', 'Perempuan', 'Jl. Pipit No. 58', 'Islam', 'Belum Menikah', 'Perawat', 'WNI'),
(70, 'Hilman Fauzi', '3201010101010059', 'Bogor', '1992-09-19', 'Laki-laki', 'Jl. Kutilang No. 59', 'Islam', 'Menikah', 'Karyawan Swasta', 'WNI'),
(71, 'Intan Sari', '3201010101010060', 'Tasikmalaya', '2000-10-20', 'Perempuan', 'Jl. Merak No. 60', 'Islam', 'Belum Menikah', 'Desainer', 'WNI'),
(72, 'Jajang Nurjaman', '3201010101010061', 'Subang', '1987-11-21', 'Laki-laki', 'Jl. Elang No. 61', 'Islam', 'Menikah', 'Satpam', 'WNI'),
(73, 'Kartika Dewi', '3201010101010062', 'Bandung', '1996-12-22', 'Perempuan', 'Jl. Camar No. 62', 'Islam', 'Belum Menikah', 'Admin', 'WNI'),
(74, 'Lukman Hakim', '3201010101010063', 'Bekasi', '1991-01-23', 'Laki-laki', 'Jl. Nuri No. 63', 'Islam', 'Menikah', 'Teknisi', 'WNI'),
(75, 'Mira Oktavia', '3201010101010064', 'Depok', '1999-02-24', 'Perempuan', 'Jl. Kenari No. 64', 'Islam', 'Belum Menikah', 'Mahasiswa', 'WNI'),
(76, 'Nandang Suhendar', '3201010101010065', 'Garut', '1989-03-25', 'Laki-laki', 'Jl. Pipit No. 65', 'Islam', 'Menikah', 'Wiraswasta', 'WNI'),
(77, 'Ovina Lestari', '3201010101010066', 'Ciamis', '2002-04-26', 'Perempuan', 'Jl. Merpati No. 66', 'Islam', 'Belum Menikah', 'Pelajar', 'WNI'),
(78, 'Pandu Pratama', '3201010101010067', 'Jakarta', '1995-05-27', 'Laki-laki', 'Jl. Rajawali No. 67', 'Islam', 'Menikah', 'Kurir', 'WNI'),
(79, 'Qonita Zahra', '3201010101010068', 'Bandung', '1998-06-28', 'Perempuan', 'Jl. Kakaktua No. 68', 'Islam', 'Belum Menikah', 'Barista', 'WNI'),
(80, 'Rendi Saputra', '3201010101010069', 'Bogor', '1993-07-29', 'Laki-laki', 'Jl. Kutilang No. 69', 'Islam', 'Menikah', 'Programmer', 'WNI'),
(81, 'Salsa Nabila', '3201010101010070', 'Tasikmalaya', '2001-08-30', 'Perempuan', 'Jl. Merak No. 70', 'Islam', 'Belum Menikah', 'Mahasiswa', 'WNI'),
(82, 'Teguh Firmansyah', '3201010101010071', 'Bandung', '1990-09-01', 'Laki-laki', 'Jl. Elang No. 71', 'Islam', 'Menikah', 'Driver', 'WNI'),
(83, 'Ulfa Rahma', '3201010101010072', 'Garut', '1999-10-02', 'Perempuan', 'Jl. Camar No. 72', 'Islam', 'Belum Menikah', 'Admin', 'WNI'),
(84, 'Vicky Maulana', '3201010101010073', 'Bekasi', '1994-11-03', 'Laki-laki', 'Jl. Nuri No. 73', 'Islam', 'Menikah', 'Teknisi', 'WNI'),
(85, 'Wina Marlina', '3201010101010074', 'Depok', '1997-12-04', 'Perempuan', 'Jl. Kenari No. 74', 'Islam', 'Belum Menikah', 'Perawat', 'WNI'),
(86, 'Yoga Saputra', '3201010101010075', 'Subang', '1988-01-05', 'Laki-laki', 'Jl. Pipit No. 75', 'Islam', 'Menikah', 'Petani', 'WNI'),
(87, 'Zahra Amelia', '3201010101010076', 'Bandung', '2000-02-06', 'Perempuan', 'Jl. Merpati No. 76', 'Islam', 'Belum Menikah', 'Mahasiswa', 'WNI'),
(88, 'Andri Gunawan', '3201010101010077', 'Bogor', '1991-03-07', 'Laki-laki', 'Jl. Rajawali No. 77', 'Islam', 'Menikah', 'Polisi', 'WNI'),
(89, 'Bella Ramadhani', '3201010101010078', 'Tasikmalaya', '1998-04-08', 'Perempuan', 'Jl. Kakaktua No. 78', 'Islam', 'Belum Menikah', 'Kasir', 'WNI'),
(90, 'Cahyo Nugroho', '3201010101010079', 'Garut', '1992-05-09', 'Laki-laki', 'Jl. Kutilang No. 79', 'Islam', 'Menikah', 'Buruh', 'WNI'),
(91, 'Dina Safitri', '3201010101010080', 'Bandung', '2001-06-10', 'Perempuan', 'Jl. Merak No. 80', 'Islam', 'Belum Menikah', 'Pelajar', 'WNI'),
(92, 'Egi Prasetyo', '3201010101010081', 'Bekasi', '1993-07-11', 'Laki-laki', 'Jl. Elang No. 81', 'Islam', 'Menikah', 'Guru', 'WNI'),
(93, 'Fani Oktavia', '3201010101010082', 'Depok', '1999-08-12', 'Perempuan', 'Jl. Camar No. 82', 'Islam', 'Belum Menikah', 'Desainer', 'WNI'),
(94, 'Guntur Saputra', '3201010101010083', 'Subang', '1987-09-13', 'Laki-laki', 'Jl. Nuri No. 83', 'Islam', 'Menikah', 'Tentara', 'WNI'),
(95, 'Hilda Maharani', '3201010101010084', 'Bandung', '1996-10-14', 'Perempuan', 'Jl. Kenari No. 84', 'Islam', 'Belum Menikah', 'HRD', 'WNI'),
(96, 'Iqbal Ramadhan', '3201010101010085', 'Bogor', '1990-11-15', 'Laki-laki', 'Jl. Pipit No. 85', 'Islam', 'Menikah', 'Programmer', 'WNI'),
(97, 'Juwita Sari', '3201010101010086', 'Garut', '2002-12-16', 'Perempuan', 'Jl. Merpati No. 86', 'Islam', 'Belum Menikah', 'Mahasiswa', 'WNI'),
(98, 'Kamaludin', '3201010101010087', 'Tasikmalaya', '1989-01-17', 'Laki-laki', 'Jl. Rajawali No. 87', 'Islam', 'Menikah', 'Pedagang', 'WNI'),
(99, 'Lestari Ayu', '3201010101010088', 'Bandung', '1997-02-18', 'Perempuan', 'Jl. Kakaktua No. 88', 'Islam', 'Belum Menikah', 'Admin', 'WNI'),
(100, 'Miftah Fauzan', '3201010101010089', 'Bekasi', '1994-03-19', 'Laki-laki', 'Jl. Kutilang No. 89', 'Islam', 'Menikah', 'Kurir', 'WNI'),
(101, 'Nabila Putri', '3201010101010090', 'Depok', '2000-04-20', 'Perempuan', 'Jl. Merak No. 90', 'Islam', 'Belum Menikah', 'Mahasiswa', 'WNI'),
(102, 'Oman Supriatna', '3201010101010091', 'Garut', '1988-05-21', 'Laki-laki', 'Jl. Elang No. 91', 'Islam', 'Menikah', 'Satpam', 'WNI'),
(103, 'Prita Amelia', '3201010101010092', 'Bandung', '1998-06-22', 'Perempuan', 'Jl. Camar No. 92', 'Islam', 'Belum Menikah', 'Perawat', 'WNI'),
(104, 'Raka Firmansyah', '3201010101010093', 'Bogor', '1991-07-23', 'Laki-laki', 'Jl. Nuri No. 93', 'Islam', 'Menikah', 'Teknisi', 'WNI');

-- --------------------------------------------------------

--
-- Table structure for table `pindah`
--

CREATE TABLE `pindah` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `kelamin` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tujuan` text NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pindah`
--

INSERT INTO `pindah` (`id`, `nama`, `nik`, `tempat`, `tanggal`, `agama`, `kelamin`, `alamat`, `tujuan`, `alasan`) VALUES
(1, 'Khoirul Dwi Hakiki', '212121', 'SDAJI', '2026-04-29', 'da', 'Laki-laki', 'da', 'da', 'da'),
(2, 'Imanuel Ramdani Naibaho', '3604091802030001', 'Purworejo', '2026-05-06', 'Islam', 'Perempuan', 'Ranjeng', 'rere', 'sssss'),
(3, 'sa', '12121', 'sa', '2026-05-08', 'sa', 'Perempuan', 'sa', 'as', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'aldi', 'jrjrnil@gmail.com', '967c81d0b07ef4e49d3007d7c969a3ee'),
(2, 'Silvana', 'sipaa089@gmail.com', '9904fd42e4977d5815b5d5679a935ed5'),
(3, 'Ajay', 'ajay12@gmail.com', '9904fd42e4977d5815b5d5679a935ed5'),
(4, 'RANGGAAAAA', 'an@gmail.com', '9904fd42e4977d5815b5d5679a935ed5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendatang`
--
ALTER TABLE `pendatang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pindah`
--
ALTER TABLE `pindah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendatang`
--
ALTER TABLE `pendatang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `pindah`
--
ALTER TABLE `pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
