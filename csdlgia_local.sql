-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2016 at 03:24 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csdlgia_local`
--

-- --------------------------------------------------------

--
-- Table structure for table `dmhhtn`
--

CREATE TABLE `dmhhtn` (
  `id` int(10) UNSIGNED NOT NULL,
  `masoloai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mahh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenhh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dacdiemkt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dvt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nsx` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thoidiem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmhhtn`
--

INSERT INTO `dmhhtn` (`id`, `masoloai`, `mahh`, `masp`, `tenhh`, `dacdiemkt`, `dvt`, `nsx`, `gc`, `thoidiem`, `created_at`, `updated_at`) VALUES
(4, '01.01.20', 'MHH', '', 'TenHH', 'DDKT', 'DVT', 'NSX', 'GC', '', '2016-03-22 02:11:46', '2016-03-22 02:11:46'),
(5, '02.01.90', 'HHN2PN1L1', '', 'Tên HH', 'Đ', 'Đ', 'SX', 'GC', '', '2016-03-22 02:12:44', '2016-03-22 02:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `dmloaigia`
--

CREATE TABLE `dmloaigia` (
  `id` int(10) UNSIGNED NOT NULL,
  `maloaigia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenloaigia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sapxep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dmloaihh`
--

CREATE TABLE `dmloaihh` (
  `id` int(10) UNSIGNED NOT NULL,
  `maloaihh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenloaihh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmloaihh`
--

INSERT INTO `dmloaihh` (`id`, `maloaihh`, `tenloaihh`, `gc`, `created_at`, `updated_at`) VALUES
(1, 'q1', '2ư', 'e3', '2016-03-16 08:49:55', '2016-03-16 08:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `dmthoidiem`
--

CREATE TABLE `dmthoidiem` (
  `id` int(10) UNSIGNED NOT NULL,
  `mathoidiem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenthoidiem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tungay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `denngay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nhom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmthoidiem`
--

INSERT INTO `dmthoidiem` (`id`, `mathoidiem`, `tenthoidiem`, `tungay`, `denngay`, `nhom`, `created_at`, `updated_at`) VALUES
(1, 'TU01-T1', 'Tuần 01 Tháng 01', '01/01', '31/1', '', '2016-03-16 09:11:34', '2016-03-21 07:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `giahhtn`
--

CREATE TABLE `giahhtn` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maloaigia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thitruong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mathoidiem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giaden` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nguontin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idtg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaitn`
--

CREATE TABLE `loaitn` (
  `id` int(10) UNSIGNED NOT NULL,
  `manhom` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mapnhom` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenloai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masoloai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maloai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `masopnhom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaitn`
--

INSERT INTO `loaitn` (`id`, `manhom`, `mapnhom`, `tenloai`, `masoloai`, `maloai`, `masopnhom`, `created_at`, `updated_at`) VALUES
(1, '01', '01', 'Nhóm 1- Pnhoms 1- Loại 1', '01.01.20', '20', '01.01', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '02', '01', 'Nhóm 2- phân nhóm2- Loại 1', '02.01.90', '90', '02.01', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_03_14_111208_create_users_table', 1),
('2016_03_16_143738_create_dmloaigia_table', 2),
('2016_03_16_153155_create_dmloaihh_table', 3),
('2016_03_16_160000_create_dmthoidiem_table', 4),
('2016_03_16_201520_create_giahhtn_table', 5),
('2016_03_17_100636_create_tggiahhtn_table', 6),
('2016_03_18_094732_create_nhom_table', 7),
('2016_03_18_095020_create_pnhom_table', 8),
('2016_03_18_095040_create_loai_table', 8),
('2016_03_18_100155_create_nhomtn_table', 9),
('2016_03_18_100309_create_pnhomtn_table', 9),
('2016_03_18_100557_create_loaitn_table', 9),
('2016_03_18_104555_create_dmhhtn_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `nhomtn`
--

CREATE TABLE `nhomtn` (
  `id` int(10) UNSIGNED NOT NULL,
  `manhom` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tennhom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhomtn`
--

INSERT INTO `nhomtn` (`id`, `manhom`, `tennhom`, `created_at`, `updated_at`) VALUES
(1, '01', 'N1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '02', 'N2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pnhomtn`
--

CREATE TABLE `pnhomtn` (
  `id` int(10) UNSIGNED NOT NULL,
  `manhom` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mapnhom` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenpnhom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masopnhom` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pnhomtn`
--

INSERT INTO `pnhomtn` (`id`, `manhom`, `mapnhom`, `tenpnhom`, `masopnhom`, `created_at`, `updated_at`) VALUES
(1, '01', '01', 'Nhóm 1- P Nhóm 1', '01.01', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '02', '01', 'Nhóm 2 -P NHóm 1', '02.01', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tggiahhtn`
--

CREATE TABLE `tggiahhtn` (
  `id` int(10) UNSIGNED NOT NULL,
  `mathoidiem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgnhap` date NOT NULL,
  `thitruong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tggiahhtn`
--

INSERT INTO `tggiahhtn` (`id`, `mathoidiem`, `tgnhap`, `thitruong`, `created_at`, `updated_at`) VALUES
(9, 'TU01-T1', '2016-01-21', 'Chợ', '2016-03-21 08:17:20', '2016-03-21 08:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sadmin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `phone`, `email`, `status`, `level`, `sadmin`, `permission`, `created_at`, `updated_at`) VALUES
(3, 'Hưởng Vũ', 'huongvu', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 'Kích hoạt', NULL, 'ssa', NULL, '0000-00-00 00:00:00', '2016-03-16 13:48:41'),
(4, 'Dũng Hoàng', 'dunghoang', 'e10adc3949ba59abbe56e057f20f883e', '', '', 'Kích hoạt', NULL, NULL, NULL, '2016-03-16 07:20:24', '2016-03-16 13:48:41'),
(5, 'Minh Trần', 'minhtran', '107e8cf7f2b4531f6b2ff06dbcf94e10', NULL, NULL, 'Kích hoạt', NULL, 'ssa', NULL, '0000-00-00 00:00:00', '2016-03-16 13:03:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dmhhtn`
--
ALTER TABLE `dmhhtn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dmloaigia`
--
ALTER TABLE `dmloaigia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dmloaihh`
--
ALTER TABLE `dmloaihh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dmthoidiem`
--
ALTER TABLE `dmthoidiem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giahhtn`
--
ALTER TABLE `giahhtn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaitn`
--
ALTER TABLE `loaitn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhomtn`
--
ALTER TABLE `nhomtn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pnhomtn`
--
ALTER TABLE `pnhomtn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tggiahhtn`
--
ALTER TABLE `tggiahhtn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dmhhtn`
--
ALTER TABLE `dmhhtn`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dmloaigia`
--
ALTER TABLE `dmloaigia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dmloaihh`
--
ALTER TABLE `dmloaihh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dmthoidiem`
--
ALTER TABLE `dmthoidiem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `giahhtn`
--
ALTER TABLE `giahhtn`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loaitn`
--
ALTER TABLE `loaitn`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nhomtn`
--
ALTER TABLE `nhomtn`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pnhomtn`
--
ALTER TABLE `pnhomtn`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tggiahhtn`
--
ALTER TABLE `tggiahhtn`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
