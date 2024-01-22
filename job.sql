-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 10:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezjob`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL DEFAULT 'none',
  `salary` varchar(255) NOT NULL,
  `subsidize` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 10,
  `requirement` varchar(255) NOT NULL DEFAULT 'none',
  `exp` varchar(255) NOT NULL DEFAULT 'none',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `jobTypeId` bigint(20) UNSIGNED NOT NULL,
  `categoriesId` bigint(20) UNSIGNED NOT NULL,
  `shiftId` bigint(20) UNSIGNED NOT NULL,
  `companyId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `name`, `desc`, `salary`, `subsidize`, `quantity`, `requirement`, `exp`, `status`, `jobTypeId`, `categoriesId`, `shiftId`, `companyId`, `created_at`, `updated_at`) VALUES
(1, 'Sản xuất dây sạc', 'none', '3950000', '600000', 20, 'none', 'none', 1, 2, 1, 1, 8, '2024-01-10 21:22:45', '2024-01-10 21:22:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_jobtypeid_foreign` (`jobTypeId`),
  ADD KEY `job_categoriesid_foreign` (`categoriesId`),
  ADD KEY `job_shiftid_foreign` (`shiftId`),
  ADD KEY `job_companyid_foreign` (`companyId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_categoriesid_foreign` FOREIGN KEY (`categoriesId`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `job_companyid_foreign` FOREIGN KEY (`companyId`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `job_jobtypeid_foreign` FOREIGN KEY (`jobTypeId`) REFERENCES `job_type` (`id`),
  ADD CONSTRAINT `job_shiftid_foreign` FOREIGN KEY (`shiftId`) REFERENCES `shift` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
