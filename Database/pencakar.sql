-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 03:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pencakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(11) NOT NULL,
  `nama_jalan` varchar(225) NOT NULL,
  `rt_rw` varchar(50) NOT NULL,
  `desa_kelurahan` varchar(200) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `kota_kabupaten` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `kodepos` varchar(150) NOT NULL,
  `id_rl_perusahaan` int(11) NOT NULL,
  `id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id_alamat`, `nama_jalan`, `rt_rw`, `desa_kelurahan`, `kecamatan`, `kota_kabupaten`, `provinsi`, `kodepos`, `id_rl_perusahaan`, `id_cv`) VALUES
(2, 'Kali Setail', '09/08', 'Semvu', 'Semvu', 'Banyuwangi', 'Jawa Timur', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `tanggal_blog` varchar(100) NOT NULL,
  `judul_blog` varchar(200) NOT NULL,
  `uraian_blog` varchar(225) NOT NULL,
  `gambar_blog` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `butuh_bantuan`
--

CREATE TABLE `butuh_bantuan` (
  `id_butuh_bantuan` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isi_pesan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id_cv` int(11) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `agama` varchar(100) NOT NULL,
  `golongan_darah` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(150) NOT NULL,
  `keahlian` varchar(150) NOT NULL,
  `tentang_saya` varchar(225) NOT NULL,
  `foto_3x4` varchar(225) NOT NULL,
  `foto_ijazah` varchar(225) NOT NULL,
  `foto_ktp` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id_cv`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `golongan_darah`, `email`, `status`, `keahlian`, `tentang_saya`, `foto_3x4`, `foto_ijazah`, `foto_ktp`) VALUES
(5, 'Banyuwangi', '2020-12-31', 'Perempuan', 'Icelamp', 'o', 'sendi@gmail.com', 'kawin Sirih', 'Colie', 'Aku Suka Hujan', 'file_1584179961.jpg', 'file_1584179961.jpg', 'file_1584179961.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `index`
--

CREATE TABLE `index` (
  `id_index` int(11) NOT NULL,
  `background_foto` varchar(225) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `subjudul` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE `keterangan` (
  `id_keterangan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `uraian` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `alamat_website` varchar(225) NOT NULL,
  `telepon_website` varchar(100) NOT NULL,
  `email_website` varchar(100) NOT NULL,
  `instagram_website` varchar(100) NOT NULL,
  `twitter_website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `jenjang` varchar(100) NOT NULL,
  `gelar` varchar(100) NOT NULL,
  `id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendiri`
--

CREATE TABLE `pendiri` (
  `id_pendiri` int(11) NOT NULL,
  `nama_pendiri` varchar(100) NOT NULL,
  `email_pendiri` varchar(100) NOT NULL,
  `quotes_pendiri` varchar(100) NOT NULL,
  `foto_pendiri` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman_kerja`
--

CREATE TABLE `pengalaman_kerja` (
  `id_pengalaman_kerja` int(11) NOT NULL,
  `nama_perusahaan` varchar(225) NOT NULL,
  `lama_kerja` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengalaman_kerja`
--

INSERT INTO `pengalaman_kerja` (`id_pengalaman_kerja`, `nama_perusahaan`, `lama_kerja`, `posisi`, `id_cv`) VALUES
(1, 'dsa', 'sda', 'sada', 0),
(2, 'Gudang Garam', '9 Tahun', ' Distributor Ciu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengunduran_diri`
--

CREATE TABLE `pengunduran_diri` (
  `id_pengunduran_diri` int(11) NOT NULL,
  `alasan` varchar(225) NOT NULL,
  `id_pengalaman_kerja` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan_interview`
--

CREATE TABLE `pesan_interview` (
  `id_pesan_interview` int(11) NOT NULL,
  `isi_pesan` varchar(225) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `tempat` varchar(225) NOT NULL,
  `id_rl_perusahaan` int(11) NOT NULL,
  `id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rl_karyawan`
--

CREATE TABLE `rl_karyawan` (
  `id_rl_karyawan` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nomor_telepon` varchar(50) NOT NULL,
  `kata_sandi` varchar(100) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rl_karyawan`
--

INSERT INTO `rl_karyawan` (`id_rl_karyawan`, `nama_lengkap`, `nomor_telepon`, `kata_sandi`, `status`) VALUES
(8, 'faiz', '123', 'aku', 'karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `rl_perusahaan`
--

CREATE TABLE `rl_perusahaan` (
  `id_rl_perusahaan` int(11) NOT NULL,
  `logo_perusahaan` varchar(225) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `email_perusahaan` varchar(100) NOT NULL,
  `telepon_perusahaan` varchar(100) NOT NULL,
  `katasandi_perusahaan` varchar(100) NOT NULL,
  `alamatlengkap_perusahaan` varchar(225) NOT NULL,
  `keterangan_perusahaan` varchar(225) NOT NULL,
  `foto_perusahaan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rl_perusahaan`
--

INSERT INTO `rl_perusahaan` (`id_rl_perusahaan`, `logo_perusahaan`, `nama_perusahaan`, `email_perusahaan`, `telepon_perusahaan`, `katasandi_perusahaan`, `alamatlengkap_perusahaan`, `keterangan_perusahaan`, `foto_perusahaan`) VALUES
(1, '', 'cv hummasoft', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id_tentang_kami` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `subjudul` varchar(225) NOT NULL,
  `foto_team` varchar(225) NOT NULL,
  `id_keterangan` int(11) NOT NULL,
  `id_pendiri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `foto_testi_karyawan` varchar(225) NOT NULL,
  `foto_testi_perusahaan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `butuh_bantuan`
--
ALTER TABLE `butuh_bantuan`
  ADD PRIMARY KEY (`id_butuh_bantuan`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id_cv`);

--
-- Indexes for table `index`
--
ALTER TABLE `index`
  ADD PRIMARY KEY (`id_index`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id_keterangan`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `pendiri`
--
ALTER TABLE `pendiri`
  ADD PRIMARY KEY (`id_pendiri`);

--
-- Indexes for table `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  ADD PRIMARY KEY (`id_pengalaman_kerja`);

--
-- Indexes for table `pengunduran_diri`
--
ALTER TABLE `pengunduran_diri`
  ADD PRIMARY KEY (`id_pengunduran_diri`);

--
-- Indexes for table `pesan_interview`
--
ALTER TABLE `pesan_interview`
  ADD PRIMARY KEY (`id_pesan_interview`);

--
-- Indexes for table `rl_karyawan`
--
ALTER TABLE `rl_karyawan`
  ADD PRIMARY KEY (`id_rl_karyawan`);

--
-- Indexes for table `rl_perusahaan`
--
ALTER TABLE `rl_perusahaan`
  ADD PRIMARY KEY (`id_rl_perusahaan`);

--
-- Indexes for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`id_tentang_kami`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `butuh_bantuan`
--
ALTER TABLE `butuh_bantuan`
  MODIFY `id_butuh_bantuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id_cv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `index`
--
ALTER TABLE `index`
  MODIFY `id_index` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id_keterangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendiri`
--
ALTER TABLE `pendiri`
  MODIFY `id_pendiri` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  MODIFY `id_pengalaman_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengunduran_diri`
--
ALTER TABLE `pengunduran_diri`
  MODIFY `id_pengunduran_diri` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan_interview`
--
ALTER TABLE `pesan_interview`
  MODIFY `id_pesan_interview` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rl_karyawan`
--
ALTER TABLE `rl_karyawan`
  MODIFY `id_rl_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rl_perusahaan`
--
ALTER TABLE `rl_perusahaan`
  MODIFY `id_rl_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id_tentang_kami` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
