-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 12:40 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `no` varchar(5) NOT NULL,
  `id_anggota` int(12) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `jk_anggota` enum('Laki-laki','Perempuan','','') NOT NULL,
  `fak_anggota` varchar(30) NOT NULL,
  `alamat_anggota` varchar(50) NOT NULL,
  `foto_upload` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`no`, `id_anggota`, `nama_anggota`, `jk_anggota`, `fak_anggota`, `alamat_anggota`, `foto_upload`) VALUES
('', 2147483641, 'Nur Ikhlas Dwi Amiruddin', 'Perempuan', 'Sains dan Teknologi', 'Antang', '21.jpg'),
('', 2147483642, 'Khaerul Isnadi', 'Laki-laki', 'Ekonomi dan Bisnis Islam', 'Pallangga', 'dhsj.jpg'),
('', 2147483643, 'Nur Iihsan', 'Laki-laki', 'Kedokteran dan Ilmu Kesehatan', 'Manuruki', 'sjd3.jpg'),
('', 2147483644, 'Irwan Sayid Abdullah', 'Laki-laki', 'Tarbiah dan Keguruan', 'Samata', '12.jpg'),
('', 2147483645, 'Yusrina Yusuf', 'Perempuan', 'Sains dan Teknologi', 'Makassar', '141.jpg'),
('', 2147483647, 'Kurniawan', 'Perempuan', 'Sains dan Teknologi', 'Makassar', '1113.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `no` varchar(5) NOT NULL,
  `kd_buku` int(5) NOT NULL,
  `judul_buku` varchar(40) NOT NULL,
  `pengarang_buku` varchar(40) NOT NULL,
  `thn_terbit` year(4) NOT NULL,
  `penerbit_buku` varchar(40) NOT NULL,
  `foto_upload` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`no`, `kd_buku`, `judul_buku`, `pengarang_buku`, `thn_terbit`, `penerbit_buku`, `foto_upload`) VALUES
('', 1001, 'Pemrograman Web', 'Nur Ihsan', 2010, 'Erlangga', 'web1.jpg'),
('', 1002, 'Struktur Data', 'Satya Nirmala', 2011, 'Ganesha', 'struda1.jpg'),
('', 1003, 'Filsafat Hukum', 'Fachry A', 2010, 'Tiga Serangkai', 'filsafat_hukum2.jpg'),
('', 1004, 'Kesehatan Masyarakat', 'Satya Nirmala', 2012, 'Erlangga', 'metode_penelitian_kesehatan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'ikhlas', 'ikhlasdwia');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no` varchar(11) NOT NULL,
  `kd_pinjam` int(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `kd_buku` int(8) NOT NULL,
  `judul_buku` varchar(40) NOT NULL,
  `nama_anggota` varchar(40) NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`no`, `kd_pinjam`, `tgl_pinjam`, `kd_buku`, `judul_buku`, `nama_anggota`, `tgl_kembali`) VALUES
('', 6, '2018-01-01', 1001, 'Struktur Data', 'Nur Ikhlas Dwi Amiruddin', '2018-01-04'),
('', 7, '2018-01-15', 1001, 'Pemrograman Web', 'Yusrina Yusuf', '2018-01-19'),
('', 8, '2018-01-15', 1004, 'Kesehatan Masyarakat', 'Kurniawan', '2018-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `no` int(11) NOT NULL,
  `kd_pinjam` int(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `kd_buku` varchar(20) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_di_kembalikan` date NOT NULL,
  `denda` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`no`, `kd_pinjam`, `tgl_pinjam`, `kd_buku`, `judul_buku`, `nama_anggota`, `tgl_kembali`, `tgl_di_kembalikan`, `denda`) VALUES
(0, 6, '2018-01-01', '1001', 'Struktur Data', 'Nur Ikhlas Dwi Amiruddin', '2018-01-04', '2018-01-04', '-'),
(0, 7, '2018-01-15', '1001', 'Pemrograman Web', 'Yusrina Yusuf', '2018-01-19', '2018-01-20', '3.000'),
(0, 8, '2018-01-15', '1004', 'Kesehatan Masyarakat', 'Kurniawan', '2018-01-19', '2018-01-19', '-');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_transaksi`
-- (See below for the actual view)
--
CREATE TABLE `view_transaksi` (
`no` varchar(11)
,`kd_pinjam` int(20)
,`tgl_pinjam` date
,`kd_buku` int(8)
,`judul_buku` varchar(40)
,`nama_anggota` varchar(40)
,`tgl_kembali` date
,`tgl_di_kembalikan` date
,`denda` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `view_transaksi`
--
DROP TABLE IF EXISTS `view_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_transaksi`  AS  select `a`.`no` AS `no`,`a`.`kd_pinjam` AS `kd_pinjam`,`a`.`tgl_pinjam` AS `tgl_pinjam`,`a`.`kd_buku` AS `kd_buku`,`a`.`judul_buku` AS `judul_buku`,`a`.`nama_anggota` AS `nama_anggota`,`a`.`tgl_kembali` AS `tgl_kembali`,`b`.`tgl_di_kembalikan` AS `tgl_di_kembalikan`,`b`.`denda` AS `denda` from (`peminjaman` `a` join `pengembalian` `b`) where (`a`.`kd_pinjam` = `b`.`kd_pinjam`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`kd_pinjam`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`kd_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `kd_pinjam` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `kd_pinjam` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`kd_pinjam`) REFERENCES `peminjaman` (`kd_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
