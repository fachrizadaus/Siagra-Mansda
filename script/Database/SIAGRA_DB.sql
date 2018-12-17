-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 08:40 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrasi ujian`
--

CREATE TABLE `administrasi ujian` (
  `Nis` int(20) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Kegiatan` varchar(20) NOT NULL,
  `Biaya` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `Nis` int(20) NOT NULL,
  `Nama` int(40) NOT NULL,
  `TTL` date NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Nama Wali` varchar(30) NOT NULL,
  `Tahun Masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar ulang`
--

CREATE TABLE `daftar ulang` (
  `Nis` int(20) NOT NULL,
  `Nama` varchar(40) DEFAULT NULL,
  `Jurusan` varchar(15) DEFAULT NULL,
  `Biaya` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e-literasi`
--

CREATE TABLE `e-literasi` (
  `Jurnal` varchar(50) NOT NULL,
  `Laporan Kegiatan` varchar(50) NOT NULL,
  `Inovasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `Nip` int(15) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `TTL` date NOT NULL,
  `Jabatan` varchar(30) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `Kd_jadwal` int(7) NOT NULL,
  `Mapel` varchar(20) NOT NULL,
  `Guru` varchar(40) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `Nis` int(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `UTS` int(3) NOT NULL,
  `UAS` int(3) NOT NULL,
  `Rapot` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `Kd_buku` int(7) NOT NULL,
  `Jenis Buku` varchar(10) NOT NULL,
  `Judul Buku` varchar(50) NOT NULL,
  `Pengarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `Nis` int(20) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Bulan` date NOT NULL,
  `Total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi ujian`
--
ALTER TABLE `administrasi ujian`
  ADD PRIMARY KEY (`Nis`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`Nis`);

--
-- Indexes for table `daftar ulang`
--
ALTER TABLE `daftar ulang`
  ADD PRIMARY KEY (`Nis`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`Nip`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`Kd_jadwal`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`Nis`);

--
-- Indexes for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`Kd_buku`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`Nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
