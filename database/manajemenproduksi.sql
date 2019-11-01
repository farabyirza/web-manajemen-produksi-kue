-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Okt 2019 pada 11.14
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemenproduksi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `grafik_produksi`
--

CREATE TABLE `grafik_produksi` (
  `id` int(5) NOT NULL,
  `jumlah_produksi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `grafik_produksi`
--

INSERT INTO `grafik_produksi` (`id`, `jumlah_produksi`) VALUES
(1, 0),
(2, 3),
(3, 0),
(4, 3),
(5, 10),
(6, 12),
(7, 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pengambilan`
--

CREATE TABLE `jadwal_pengambilan` (
  `id` int(10) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `so` varchar(10) NOT NULL,
  `pst_tgl` varchar(20) NOT NULL,
  `rencana_tb` int(10) NOT NULL,
  `tgl_ambil_tb` varchar(20) NOT NULL,
  `rata_ori` int(10) NOT NULL,
  `rata_cho` int(10) NOT NULL,
  `rata_che` int(10) NOT NULL,
  `rata` int(10) NOT NULL,
  `rata_kk` int(10) NOT NULL,
  `rata_kv` int(10) NOT NULL,
  `rata_tc` int(10) NOT NULL,
  `rata_pb` int(10) NOT NULL,
  `pengambilan` int(10) NOT NULL,
  `tgl_produksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_produksi`
--

CREATE TABLE `jadwal_produksi` (
  `id` int(10) NOT NULL,
  `sisa_ori` int(10) NOT NULL,
  `sisa_cho` int(10) NOT NULL,
  `sisa_che` int(10) NOT NULL,
  `sisa_tb` int(10) NOT NULL,
  `sisa_kk` int(10) NOT NULL,
  `sisa_kv` int(10) NOT NULL,
  `sisa_tc` int(10) NOT NULL,
  `tgl_ambil_tb` varchar(20) NOT NULL,
  `tgl_produksi` varchar(20) NOT NULL,
  `rata_ori` int(10) NOT NULL,
  `rata_cho` int(10) NOT NULL,
  `rata_che` int(10) NOT NULL,
  `rata_tb` int(10) NOT NULL,
  `rata_kk` int(10) NOT NULL,
  `rata_kv` int(10) NOT NULL,
  `rata_tc` int(10) NOT NULL,
  `produksi_ori` int(11) NOT NULL,
  `produksi_cho` int(10) NOT NULL,
  `produksi_che` int(10) NOT NULL,
  `produksi_tb` int(10) NOT NULL,
  `produksi_kk` int(10) NOT NULL,
  `produksi_kv` int(10) NOT NULL,
  `produksi_tc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(1, 'operationcoordinator', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_produksi`
--

CREATE TABLE `nama_produksi` (
  `id` int(5) NOT NULL,
  `nama_produksi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nama_produksi`
--

INSERT INTO `nama_produksi` (`id`, `nama_produksi`) VALUES
(1, 'Original'),
(2, 'Stroberi'),
(3, 'Coklat'),
(4, 'Total Kue'),
(5, 'Krim Kacang'),
(6, 'Krim Pisang'),
(7, 'Total Krim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales_outlet`
--

CREATE TABLE `sales_outlet` (
  `id` int(5) NOT NULL,
  `so` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_jalan`
--

CREATE TABLE `surat_jalan` (
  `id` int(10) NOT NULL,
  `so` varchar(20) NOT NULL,
  `tgl_ambil_tb` varchar(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `pic` varchar(20) NOT NULL,
  `rata_ori` int(10) NOT NULL,
  `rata_cho` int(10) NOT NULL,
  `rata_che` int(10) NOT NULL,
  `rata` int(10) NOT NULL,
  `rata_kk` int(10) NOT NULL,
  `rata_kv` int(10) NOT NULL,
  `rata_tc` int(10) NOT NULL,
  `rata_pb` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_daily`
--

CREATE TABLE `tbl_daily` (
  `id` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `so` varchar(10) NOT NULL,
  `soa_ori` int(10) NOT NULL,
  `soa_cho` int(10) NOT NULL,
  `soa_che` int(10) NOT NULL,
  `soa_tb` int(10) NOT NULL,
  `soa_pb` int(10) NOT NULL,
  `soa_kk` int(10) NOT NULL,
  `soa_kv` int(10) NOT NULL,
  `soa_tc` int(10) NOT NULL,
  `pen_ori` int(10) NOT NULL,
  `pen_cho` int(10) NOT NULL,
  `pen_che` int(10) NOT NULL,
  `pen_tb` int(10) NOT NULL,
  `pen_pb` int(10) NOT NULL,
  `pen_kk` int(10) NOT NULL,
  `pen_kv` int(10) NOT NULL,
  `pen_tc` int(10) NOT NULL,
  `pst_tgl` date NOT NULL,
  `pst_ori` int(10) NOT NULL,
  `pst_cho` int(10) NOT NULL,
  `pst_che` int(10) NOT NULL,
  `pst_tb` int(10) NOT NULL,
  `pst_kk` int(10) NOT NULL,
  `pst_kv` int(10) NOT NULL,
  `pst_tc` int(10) NOT NULL,
  `pst_pb` int(10) NOT NULL,
  `rencana_tb` int(10) NOT NULL,
  `akhir_ori` int(10) NOT NULL,
  `akhir_cho` int(10) NOT NULL,
  `akhir_che` int(10) NOT NULL,
  `akhir_tb` int(10) NOT NULL,
  `akhir_kk` int(10) NOT NULL,
  `akhir_kv` int(10) NOT NULL,
  `akhir_tc` int(10) NOT NULL,
  `akhir_pb` int(10) NOT NULL,
  `rata_ori` int(10) NOT NULL,
  `rata_cho` int(10) NOT NULL,
  `rata_che` int(10) NOT NULL,
  `rata` int(10) NOT NULL,
  `rata_kk` int(10) NOT NULL,
  `rata_kv` int(10) NOT NULL,
  `rata_tc` int(10) NOT NULL,
  `rata_pb` int(10) NOT NULL,
  `tgl_ambil_tb` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grafik_produksi`
--
ALTER TABLE `grafik_produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_pengambilan`
--
ALTER TABLE `jadwal_pengambilan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_produksi`
--
ALTER TABLE `jadwal_produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nama_produksi`
--
ALTER TABLE `nama_produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_outlet`
--
ALTER TABLE `sales_outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_daily`
--
ALTER TABLE `tbl_daily`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grafik_produksi`
--
ALTER TABLE `grafik_produksi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jadwal_pengambilan`
--
ALTER TABLE `jadwal_pengambilan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jadwal_produksi`
--
ALTER TABLE `jadwal_produksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sales_outlet`
--
ALTER TABLE `sales_outlet`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_daily`
--
ALTER TABLE `tbl_daily`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
