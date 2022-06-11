-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 05:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2022_b_213040064`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `npm` char(4) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `npm`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(0, '2130', 'putri legiana', 'putrilegi@gmail.com', 'Teknik Pangan', 'audi.jpg'),
(1, '2130', 'Salma Salsabila', 'salmasalsabila073@gmail.com', 'Teknik Informatika', 'cb0.jpg'),
(3, '2130', 'Diva', 'divaa@gmail.com', 'Teknik Informatika', 'cewe1.jpg'),
(4, '2130', 'Revina Bella', 'Revinaa@gmail.com', 'Teknik Informatika', 'cewe2.jpg'),
(5, '2130', 'Muhammad Priamitra nur alif', 'priamitranuralip@gmail.com', 'Teknik Informatika', 'cowo1.jpg'),
(6, '2130', 'Najwa ', 'najwaa@gmail.com', 'Teknik informatika', 'cowo2.jpg'),
(7, '2130', 'Adawiyah Ajriah', 'Adawiyah17@gmail.com', 'Teknik informatika', 'cowo3.jpg'),
(8, '2130', 'Rahma Alia Putri', 'rahmaa@gmail.com', 'Teknik Informatika', 'cowo4.jpg'),
(9, '2130', 'LIta ', 'Litaa@gmail.com', 'Teknik Informatika', 'faisal.jpg'),
(10, '2130', 'Putri', 'Putriiii@gmail.com', 'Teknik Informatika', 'juan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `musik`
--

CREATE TABLE `musik` (
  `Id` int(11) NOT NULL,
  `nama_musik` varchar(50) NOT NULL,
  `pencipta` varchar(50) NOT NULL,
  `penyanyi` text NOT NULL,
  `gendre` varchar(50) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musik`
--

INSERT INTO `musik` (`Id`, `nama_musik`, `pencipta`, `penyanyi`, `gendre`, `gambar`) VALUES
(3, 'Merasa Indah', 'Yovie Widiyanto', 'Lyodra', 'Pop', 'tiara andini.jpg'),
(4, 'Pesan Terakhir', 'Mario G Klau', 'Lyodra', 'Pop', 'lyodra.jpg'),
(5, 'Tak ingin usai', 'Mario G klau', 'Tulus', 'Pop', 'Keisya.jpg'),
(6, 'Cinta Tak harus memiliki', 'Adya Ninggar', 'ST12', 'Pop', 'ST12.jpg'),
(7, 'Pudar', 'Hendra Nurcahyo', 'Rossa', 'Pop', 'Rossa.jpg'),
(8, 'Tegar', 'Melly Goeslaw', 'Rossa', 'Pop', 'Rossa.jpg'),
(9, 'Tabu', 'Melly Goeslaw', 'Brisia jodie', 'Pop', 'Brisia jodie.jpg'),
(10, 'Hati-Hati di jalan', 'Tulus', 'Tulus', 'Pop', 'Tulus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `username`, `password`) VALUES
(1, '', '$2y$10$RSmUaCZ0Bk44N34Bq8YbseRcnstU5Aq2wWycEX9BvgMgPkmXLfvwq'),
(2, '21salmasalsabila', '$2y$10$N0Ag0vfxg4EQn3w1TZTFzOI7wqpR9tSM4cRojEX7gy1Nhrd7wvo4e'),
(3, 'admin', '$2y$10$UB8jS7MC8bdHRiMaryDXbecKsqg1TaRJI9rpxxaA84cTXkXnqB48G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musik`
--
ALTER TABLE `musik`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `musik`
--
ALTER TABLE `musik`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
