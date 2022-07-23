-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 12:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siumpar`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `no_agenda` varchar(5) NOT NULL,
  `sifat` enum('Penting','Segera','Rahasia') NOT NULL,
  `diteruskan` enum('Sekretaris DPMD','Kabid Pemerintahan Desa','Kabid Penataan dan Kerjasama Desa','Kabid Pembangunan dan Pemberdayaan Desa') NOT NULL,
  `hormat` enum('Tanggapan dan Saran','Proses Lebih Lanjut','Koordinasi/Konfirmasi') NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `asal_surat`, `no_surat`, `tgl_surat`, `tgl_diterima`, `no_agenda`, `sifat`, `diteruskan`, `hormat`, `catatan`, `file`) VALUES
(1, 'Polnep', 'Polnep/2022', '2022-06-22', '2022-06-23', '001', 'Penting', 'Sekretaris DPMD', 'Proses Lebih Lanjut', 'Sudah diterima sekretaris', 'polnep.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `kepaladinas`
--

CREATE TABLE `kepaladinas` (
  `id_kepaladinas` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepaladinas`
--

INSERT INTO `kepaladinas` (`id_kepaladinas`, `nama`, `jabatan`, `nip`) VALUES
(1, 'Ir. Yuslinda', 'Pembina Utama Muda', '19630706 198910 2 001');

-- --------------------------------------------------------

--
-- Table structure for table `sktim`
--

CREATE TABLE `sktim` (
  `id_sktim` int(11) NOT NULL,
  `no_agenda` varchar(5) NOT NULL,
  `no_sk` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tentang` varchar(30) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sktim`
--

INSERT INTO `sktim` (`id_sktim`, `no_agenda`, `no_sk`, `tgl_surat`, `tentang`, `tujuan`, `file`) VALUES
(1, '001', '001/DPMD', '2022-06-22', 'dpmd', 'Sekda', 'dpmd.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `sppd`
--

CREATE TABLE `sppd` (
  `id_sppd` int(11) NOT NULL,
  `no_agenda` varchar(5) NOT NULL,
  `tgl_surat` date NOT NULL,
  `no_sppd` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `lama` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sppd`
--

INSERT INTO `sppd` (`id_sppd`, `no_agenda`, `tgl_surat`, `no_sppd`, `nama`, `tujuan`, `kegiatan`, `lama`, `file`) VALUES
(1, '001', '2022-06-23', 'sppd/dpmd', 'pegawai', 'bali', 'seminar', '2 hari', 'seminar.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `spt`
--

CREATE TABLE `spt` (
  `id_spt` int(11) NOT NULL,
  `no_agenda` varchar(5) NOT NULL,
  `tgl_surat` date NOT NULL,
  `no_spt` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `lama` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spt`
--

INSERT INTO `spt` (`id_spt`, `no_agenda`, `tgl_surat`, `no_spt`, `nama`, `tujuan`, `kegiatan`, `lama`, `file`) VALUES
(1, '001', '2022-06-23', 'spt/dpmd', 'pegawai', 'bali', 'seminar', '2 hari', 'spt.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id_suratkeluar` int(11) NOT NULL,
  `no_agenda` varchar(5) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratkeluar`
--

INSERT INTO `suratkeluar` (`id_suratkeluar`, `no_agenda`, `no_surat`, `tgl_surat`, `perihal`, `tujuan`, `file`) VALUES
(1, '001', '1', '2022-06-20', 'penerima surat pkl', 'polnep', 'dpmd.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id_suratmasuk` int(11) NOT NULL,
  `no_agenda` varchar(5) NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `no_tgl_surat` varchar(50) NOT NULL,
  `tgl_terima` date NOT NULL,
  `tgl_naik` date NOT NULL,
  `tgl_turun` date NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `file` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratmasuk`
--

INSERT INTO `suratmasuk` (`id_suratmasuk`, `no_agenda`, `asal_surat`, `perihal`, `no_tgl_surat`, `tgl_terima`, `tgl_naik`, `tgl_turun`, `bidang`, `file`) VALUES
(25, '001', 'polnep mantapfdsa', 'hola', 'gfsdgsd', '2022-07-08', '2022-07-20', '2022-07-07', 'umpar', 'pngwing.com (9).png');

-- --------------------------------------------------------

--
-- Table structure for table `suratundangan`
--

CREATE TABLE `suratundangan` (
  `id_suratundangan` int(11) NOT NULL,
  `no_agenda` varchar(5) NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `no_tgl_surat` varchar(50) NOT NULL,
  `tgl_terima` date NOT NULL,
  `tgl_naik` date NOT NULL,
  `tgl_turun` date NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratundangan`
--

INSERT INTO `suratundangan` (`id_suratundangan`, `no_agenda`, `asal_surat`, `perihal`, `no_tgl_surat`, `tgl_terima`, `tgl_naik`, `tgl_turun`, `bidang`, `file`) VALUES
(1, '001', 'Polnep', 'Undangan\r\nHari : Senin, 22 Juni 2022', 'Polnep/2022', '2022-06-22', '2022-06-22', '2022-06-22', 'sekretariat', 'undangan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `level` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `bidang`, `level`) VALUES
(18, 'admin', 'admin', 'umpar', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indexes for table `kepaladinas`
--
ALTER TABLE `kepaladinas`
  ADD PRIMARY KEY (`id_kepaladinas`);

--
-- Indexes for table `sktim`
--
ALTER TABLE `sktim`
  ADD PRIMARY KEY (`id_sktim`);

--
-- Indexes for table `sppd`
--
ALTER TABLE `sppd`
  ADD PRIMARY KEY (`id_sppd`);

--
-- Indexes for table `spt`
--
ALTER TABLE `spt`
  ADD PRIMARY KEY (`id_spt`);

--
-- Indexes for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id_suratkeluar`);

--
-- Indexes for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id_suratmasuk`);

--
-- Indexes for table `suratundangan`
--
ALTER TABLE `suratundangan`
  ADD PRIMARY KEY (`id_suratundangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kepaladinas`
--
ALTER TABLE `kepaladinas`
  MODIFY `id_kepaladinas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sktim`
--
ALTER TABLE `sktim`
  MODIFY `id_sktim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sppd`
--
ALTER TABLE `sppd`
  MODIFY `id_sppd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spt`
--
ALTER TABLE `spt`
  MODIFY `id_spt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id_suratkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id_suratmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `suratundangan`
--
ALTER TABLE `suratundangan`
  MODIFY `id_suratundangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
