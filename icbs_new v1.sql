-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2018 at 05:27 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_agama`
--

CREATE TABLE `tabel_agama` (
  `kd_agama` varchar(5) NOT NULL,
  `nama_agama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_agama`
--

INSERT INTO `tabel_agama` (`kd_agama`, `nama_agama`) VALUES
('01', 'ISLAM'),
('02', 'KRISTEN / PROTESTAN'),
('03', 'KATHOLIK'),
('04', 'BUDHA'),
('05', 'HINDU'),
('06', 'KHONG HU CHU'),
('99', 'LAIN-LAIN');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

CREATE TABLE `tabel_menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_main_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_menu`
--

INSERT INTO `tabel_menu` (`id`, `nama_menu`, `link`, `icon`, `is_main_menu`) VALUES
(2, 'Menu', 'menu', 'clip-menu-4', 100),
(3, 'Hak Akses', 'users_sekolah/rule', 'fa fa-universal-access', 100),
(5, 'Dashboard', 'home', 'clip-home-2', 0),
(6, 'Santri', '#', 'clip-user-3', 0),
(7, 'Data Pribadi', 'users_santri', 'clip-pencil-3', 6),
(8, 'Data Presensi', '', 'clip-book', 6),
(9, 'Karyawan', '#', 'clip-user-5', 0),
(10, 'Data Pribadi', 'users_sekolah', 'clip-pencil-3', 9),
(11, 'Rekap Kehadiran', '', 'clip-book', 9),
(12, 'Data Pemasukan', '#', 'fa fa-money', 0),
(13, 'Dari Santri', '', 'fa fa-plus', 12),
(14, 'Sumber Lain', '', 'fa fa-plus', 12),
(15, 'Data Pengeluaran', '#', 'fa fa-money', 0),
(16, 'Laporan Keuangan', '#', 'clip-note', 0),
(17, 'Pemasukan', '', 'clip-file-plus', 16),
(18, 'Pengeluaran', '', 'clip-file-minus', 16),
(19, 'Laporan Pesan', '', 'fa fa-comments-o', 0),
(20, 'Dari Santri', '', 'fa fa-paper-plane-o', 19),
(100, 'Pengaturan', '#', 'clip-settings', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level_user`
--

CREATE TABLE `tbl_level_user` (
  `id_level_user` int(11) NOT NULL,
  `nama_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level_user`
--

INSERT INTO `tbl_level_user` (`id_level_user`, `nama_level`) VALUES
(0, ''),
(1, 'Admin'),
(2, 'Sekolah'),
(3, 'Santri');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_rule`
--

CREATE TABLE `tbl_user_rule` (
  `id_rule` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_rule`
--

INSERT INTO `tbl_user_rule` (`id_rule`, `id_menu`, `id_level_user`) VALUES
(6, 100, 1),
(7, 2, 1),
(8, 1, 1),
(9, 3, 1),
(10, 1, 2),
(11, 5, 2),
(12, 6, 2),
(13, 9, 2),
(14, 12, 2),
(15, 15, 2),
(16, 16, 2),
(18, 19, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_santri`
--

CREATE TABLE `tbl_user_santri` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kd_agama` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `id_rombel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_sekolah`
--

CREATE TABLE `tbl_user_sekolah` (
  `id_user_sekolah` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_sekolah`
--

INSERT INTO `tbl_user_sekolah` (`id_user_sekolah`, `nama_lengkap`, `username`, `password`, `id_level_user`, `foto`) VALUES
(1, 'Risman Hidayatulloh', 'risman', '2baaf365922ec505a0ff39ccf34a77f1', 1, 'logo.png'),
(15, 'ICBS Ponpes', 'ponpes', '44115cdffaa851462e627d408018696f', 2, 'logo1.png');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tbl_user_sekolah`
-- (See below for the actual view)
--
CREATE TABLE `v_tbl_user_sekolah` (
`id_user_sekolah` int(11)
,`nama_lengkap` varchar(255)
,`username` varchar(255)
,`PASSWORD` varchar(255)
,`id_level_user` int(11)
,`foto` text
,`nama_level` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `v_tbl_user_sekolah`
--
DROP TABLE IF EXISTS `v_tbl_user_sekolah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tbl_user_sekolah`  AS  select `tbl_user_sekolah`.`id_user_sekolah` AS `id_user_sekolah`,`tbl_user_sekolah`.`nama_lengkap` AS `nama_lengkap`,`tbl_user_sekolah`.`username` AS `username`,`tbl_user_sekolah`.`password` AS `PASSWORD`,`tbl_user_sekolah`.`id_level_user` AS `id_level_user`,`tbl_user_sekolah`.`foto` AS `foto`,`tbl_level_user`.`nama_level` AS `nama_level` from (`tbl_user_sekolah` join `tbl_level_user`) where (`tbl_level_user`.`id_level_user` = `tbl_user_sekolah`.`id_level_user`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_agama`
--
ALTER TABLE `tabel_agama`
  ADD PRIMARY KEY (`kd_agama`);

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  ADD PRIMARY KEY (`id_level_user`);

--
-- Indexes for table `tbl_user_rule`
--
ALTER TABLE `tbl_user_rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- Indexes for table `tbl_user_santri`
--
ALTER TABLE `tbl_user_santri`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_user_sekolah`
--
ALTER TABLE `tbl_user_sekolah`
  ADD PRIMARY KEY (`id_user_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  MODIFY `id_level_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user_rule`
--
ALTER TABLE `tbl_user_rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_user_sekolah`
--
ALTER TABLE `tbl_user_sekolah`
  MODIFY `id_user_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
