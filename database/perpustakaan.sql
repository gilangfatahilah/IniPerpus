-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 06:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`) VALUES
(19, 'Aku, Engkau dan Rembulan', 'Gilang Fatahilah', 'Gilangmedia', '2022', '978-623-9763-2', 50),
(20, 'The Psychology of Money', 'Morgan Housel', 'BACA', '2016', '978-602-6486-57-8', 30),
(24, 'Your Name', 'Makoto Shinkai', 'Penerbit Haru', '2017', '978-613-7436-2', 30),
(28, 'Atomic Habits', 'James Clear', 'Gramedia', '2018', '979-602-06-3318-3', 30),
(30, 'Rich Dad Poor Dad', 'Robert T. Kiyosaki', 'Gramedia', '2015', '979-611-07-3123-4', 29),
(34, 'How to Think like Sherlock Holmes', 'Peter Holins', 'Gramedia', '2018', '978-602-6477-6', 30),
(36, 'Filosofi Teras', 'Henry Manampiring', 'Kompas', '2020', '978-612-9865-5', 30),
(37, 'Weathering on You', 'Makoto Shinkai', 'Penerbit Haru', '2020', '979-611-07-3123-5', 29),
(38, 'Sebuah Seni untuk bersikap Bodo Amat', 'Mark Manson', 'Gramedia', '2016', '978-612-9353-8', 30),
(39, 'The Gardens of Words', 'Makoto Shinkai', 'Penerbit Haru', '2013', '979-623-6532-8', 30),
(40, 'Hujan Bulan Juli', 'Gilang Fatahilah', 'Gilangmedia', '2021', '979-611-07-3123-4', 30),
(41, 'Rembulan malam Senin', 'Gilang Fatahilah', 'Gilangmedia', '2022', '979-611-07-3123-99', 30),
(42, 'Ferris Wheel at Night', 'Minato Kanae', 'Penerbit Haru', '2021', '978-613-9065-5', 30),
(43, 'Penance', 'Minato Kanae', 'Penerbit Haru', '2016', '978-602-6477-91', 30),
(44, 'Confession', 'Minato Kanae', 'Penerbit Haru', '2012', '978-623-9799-20', 30),
(45, 'Terima Kasih Sudah Mengatakannya', 'Gilang Fatahilah', 'Gilangmedia', '2022', '978-623-9991-8', 30),
(46, 'Teruntuk Lirih Suaramu', 'Gilang Fatahilah', 'Gilangmedia', '2022', '1210-03-1112-02', 30);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`, `jenkel`, `nohp`, `alamat`, `level`) VALUES
(2, 'admin', 'admin', 'administrator', 'laki laki', '08782121372', 'Karawang', 'admin'),
(12, 'user', 'user', 'Pai Ganteng', 'Laki - Laki', '086152411664', 'Bulak Kapal', 'user'),
(13, 'santi', '123456', 'Santii', 'Perempuan', '087654120998', 'Harapan Indah', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(30) NOT NULL,
  `tgl_kembali` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `judul`, `nama`, `nohp`, `alamat`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(4, 'Aku, Engkau dan Rembulan', 'Pai Ganteng', '086152411664', 'Bulak Kapal', '03-08-2022', '2022-08-06', 'kembali'),
(5, 'Teruntuk Lirih Suaramu', 'Santi', '087162154887', 'Bekasi Barat', '04-08-2022', '2022-08-09', 'kembali'),
(6, 'Rich Dad Poor Dad', 'Santi', '087654120998', 'Harapan Indah', '04-08-2022', '2022-08-12', 'pinjam'),
(7, 'Weathering on You', 'Pai Ganteng', '085236578381', 'BULAK KAPAL', '24-05-2023', '2023-05-25', 'pinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
