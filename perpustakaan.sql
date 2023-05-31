-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2021 pada 09.59
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `buku`
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
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`) VALUES
(19, 'Mantappu Jiwa', 'Jerome Polin', 'Gramedia', '2018', '909-808-707', 1),
(20, 'Belarar Matematika', 'yudisthira', 'Gramedia', '1995', '980-765-347', 3),
(24, 'Tanah Air', 'Rasjidi', 'Elekmedia', '2011', '980-765-345', 0),
(28, 'Belajar Biologi', 'Yudisthira', 'Gramedia', '2013', '976-802-334', 4),
(30, 'Belajar Kimia', 'Yudisthira', 'Gramedia', '2012', '978-900-876', 3),
(34, 'Belarar Pemrograman', 'Abang IT', 'Gramedia', '2019', '980-765-340', 1),
(36, 'Cara Menjadi Ganteng', 'Abang Ganteng', 'GantengMedia', '2020', '189-222-345', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`, `level`, `foto`) VALUES
(3, 'admin', 'adminganteng', 'admin', 'admin', 'aceng.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `kelas`, `alamat`, `jurusan`) VALUES
(19201034, 'Arip', 'X', 'Cebeel', 'Multimedia'),
(181910003, 'Udin', 'XI', 'Mangunjaya', 'RPL'),
(181910005, 'Bambang', 'XI', 'Tambelang', 'RPL'),
(181910007, 'Mia', 'XII', 'Mangunjaya 1', 'Telkom'),
(181910009, 'Angel', 'XI', 'bekasi timur', 'RPL'),
(1819100018, 'JoJo', 'XI', 'Tarumajaya', 'RPL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(30) NOT NULL,
  `tgl_kembali` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `judul`, `nis`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(20, 'Belajar Kimia', '1181910008', 'Tiw', '07-11-2020', '2020-11-14', 'pinjam'),
(66, 'Belarar Pemrograman', '181910005', 'Bambang', '23-11-2020', '2020-11-14', 'kembali'),
(68, 'Belarar Pemrograman', '181910005', 'Bambang', '24-11-2020', '2020-11-30', 'kembali'),
(69, 'Tanah Air', '181910005', 'Bambang', '24-11-2020', '2020-12-01', 'kembali'),
(70, 'Mantappu Jiwa', '181910005', 'Bambang', '25-11-2020', '2020-11-30', 'kembali'),
(71, 'Mantappu Jiwa', '181910005', 'Bambang', '26-11-2020', '2020-12-03', 'kembali'),
(72, 'Belajar Biologi', '181910007', 'Mia', '26-11-2020', '2020-12-03', 'kembali'),
(74, 'Cara Menjadi Ganteng', '1819100018', 'JoJo', '12-12-2020', '2020-12-30', 'kembali'),
(75, 'Tanah Air', '181910007', 'Mia', '17-12-2020', '2020-12-25', 'pinjam'),
(76, 'Tanah Air', '181910005', 'Bambang', '17-12-2020', '2020-12-24', 'kembali'),
(77, 'Mantappu Jiwa', '1819100018', 'JoJo', '17-12-2020', '2020-12-24', 'pinjam'),
(78, 'Cara Menjadi Ganteng', '181910003', 'Udin', '17-12-2020', '2020-12-24', 'pinjam'),
(79, 'Mantappu Jiwa', '181910009', 'Angel', '19-12-2020', '2020-12-26', 'kembali'),
(80, 'Tanah Air', '19201034', 'Arip', '19-12-2020', '2020-12-26', 'pinjam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1819100019;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
