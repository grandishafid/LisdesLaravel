-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 03:39 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_keamanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pengujian`
--

CREATE TABLE `data_pengujian` (
  `id_apk` int(10) UNSIGNED NOT NULL,
  `nama_apk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fungsi_apk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PIC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pengujian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_selesai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pengujian`
--

INSERT INTO `data_pengujian` (`id_apk`, `nama_apk`, `fungsi_apk`, `PIC`, `tanggal_pengujian`, `tanggal_selesai`, `referensi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'nama2', 'fungsi2', 'PIC2', '2018-07-09', '2018-07-10', 'ref2', '1', '2018-07-08 23:10:28', '2018-07-10 00:09:49'),
(2, 'nama1', 'fungsi1', 'PIC1', '2018-08-01', '2018-08-02', 'ref1', '2', '2018-07-10 00:10:15', '2018-07-10 00:10:22'),
(3, 'nama3', 'fung3', 'pic3', '2018-07-26', '2018-07-28', 'ref3', '3', '2018-07-10 00:10:45', '2018-07-10 00:10:45'),
(4, 'nam4', 'fung4', 'pic4', '2018-08-04', '2018-07-08', 'ref4', '4', '2018-07-10 00:11:04', '2018-07-10 00:11:04'),
(5, 'nama5', 'fung5', 'pic5', '2018-07-19', '2018-07-27', 'ref5', '4', '2018-07-10 18:06:11', '2018-07-10 18:06:11'),
(6, 'nama6', 'fung6', 'pic6', '2018-07-26', '2018-07-27', 'ref6', '3', '2018-07-10 18:31:45', '2018-07-10 18:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2018_07_07_040222_buat_data_pengujian', 1),
(7, '2018_07_07_095522_ubah_kolom_pengujian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yolanda', 'olanrevada1@gmail.com', '$2y$10$oM9eVLuFmQP9On1KHm2aeehPiLnBkuEv2D/RK/2allNNs6JTHwbj2', 'V0zh6quP3213vz2o2NFy919kvimJ45e2LK9CrGaqyH936Aci9zLBvLvFy2S5', '2018-07-04 07:42:27', '2018-07-04 07:42:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pengujian`
--
ALTER TABLE `data_pengujian`
  ADD PRIMARY KEY (`id_apk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pengujian`
--
ALTER TABLE `data_pengujian`
  MODIFY `id_apk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
