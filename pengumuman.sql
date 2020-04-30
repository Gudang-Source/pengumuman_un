-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2020 at 05:34 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengumuman`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `no` int(5) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nis` varchar(5) NOT NULL,
  `nama_siswa` varchar(225) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ortu` varchar(225) NOT NULL,
  `p_agama` varchar(4) NOT NULL,
  `ppkn` varchar(4) NOT NULL,
  `b_indo` varchar(4) NOT NULL,
  `mtk` varchar(4) NOT NULL,
  `sejarah` varchar(4) NOT NULL,
  `b_inggr` varchar(4) NOT NULL,
  `seni_budaya` varchar(4) NOT NULL,
  `pjok` varchar(4) NOT NULL,
  `c` varchar(4) NOT NULL,
  `c1` varchar(4) NOT NULL,
  `1` varchar(4) NOT NULL,
  `2` varchar(4) NOT NULL,
  `3` varchar(4) NOT NULL,
  `4` varchar(4) NOT NULL,
  `c2` varchar(4) NOT NULL,
  `c3` varchar(4) NOT NULL,
  `rata_rata` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `program_keahlian` varchar(180) NOT NULL,
  `kompetensi_keahlian` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no`, `nisn`, `nis`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `nama_ortu`, `p_agama`, `ppkn`, `b_indo`, `mtk`, `sejarah`, `b_inggr`, `seni_budaya`, `pjok`, `c`, `c1`, `1`, `2`, `3`, `4`, `c2`, `c3`, `rata_rata`, `program_keahlian`, `kompetensi_keahlian`) VALUES
(1, '00908989', '1200', 'Bahrudin', 'Jepara', '2002-02-22', 'Udin', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', 'TEKNIK KOMPUTER DAN INFORMATIKA', 'REKAYASA PERANGKAT LUNAK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
