-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 08:05 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lc_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `lc_commercial`
--

CREATE TABLE `lc_commercial` (
  `id` int(11) NOT NULL,
  `sl_no` varchar(100) NOT NULL,
  `lcaf_no` varchar(100) NOT NULL,
  `importer_name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `irc_no` varchar(100) NOT NULL,
  `year_of_renewal` year(4) NOT NULL,
  `share_basis_amount` float NOT NULL,
  `lc_amount` float NOT NULL,
  `sof_cash` varchar(50) NOT NULL,
  `sof_barter` varchar(50) NOT NULL,
  `sof_loan` varchar(50) NOT NULL,
  `sof_credit` varchar(50) NOT NULL,
  `sof_other` varchar(50) NOT NULL,
  `description_of_item_imported` longtext NOT NULL,
  `itc_number` varchar(100) NOT NULL,
  `description_of_items` longtext NOT NULL,
  `itc_no` varchar(100) NOT NULL,
  `beneficiary_name` varchar(100) NOT NULL,
  `beneficiary_address` varchar(1000) NOT NULL,
  `openers_name` varchar(100) NOT NULL,
  `openers_address` varchar(1000) NOT NULL,
  `draft_amount` float NOT NULL,
  `at_sight` varchar(50) NOT NULL,
  `days_da_dp` varchar(50) NOT NULL,
  `cif` varchar(50) NOT NULL,
  `cfr` varchar(50) NOT NULL,
  `fob` varchar(50) NOT NULL,
  `drawn_on_us` varchar(50) NOT NULL,
  `drawn_on_them` varchar(50) NOT NULL,
  `country_origin` varchar(50) NOT NULL,
  `commodities` longtext NOT NULL,
  `hs_code` varchar(50) NOT NULL,
  `shipment_from` varchar(100) NOT NULL,
  `shipment_to` varchar(100) NOT NULL,
  `insurance_cover_no` varchar(50) NOT NULL,
  `ins_date` date NOT NULL,
  `ins_amount` float NOT NULL,
  `ins_part_shipment` varchar(50) NOT NULL,
  `ins_allowed` varchar(50) NOT NULL,
  `ins_prohibited` varchar(50) NOT NULL,
  `last_shipment_date` date NOT NULL,
  `name_of_ins` varchar(100) NOT NULL,
  `ins_address` varchar(1000) NOT NULL,
  `ins_co_transhipment` varchar(50) NOT NULL,
  `ins_co_allowed` varchar(50) NOT NULL,
  `ins_co_prohibited` varchar(50) NOT NULL,
  `last_neg_date` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lc_commercial`
--

INSERT INTO `lc_commercial` (`id`, `sl_no`, `lcaf_no`, `importer_name`, `address`, `irc_no`, `year_of_renewal`, `share_basis_amount`, `lc_amount`, `sof_cash`, `sof_barter`, `sof_loan`, `sof_credit`, `sof_other`, `description_of_item_imported`, `itc_number`, `description_of_items`, `itc_no`, `beneficiary_name`, `beneficiary_address`, `openers_name`, `openers_address`, `draft_amount`, `at_sight`, `days_da_dp`, `cif`, `cfr`, `fob`, `drawn_on_us`, `drawn_on_them`, `country_origin`, `commodities`, `hs_code`, `shipment_from`, `shipment_to`, `insurance_cover_no`, `ins_date`, `ins_amount`, `ins_part_shipment`, `ins_allowed`, `ins_prohibited`, `last_shipment_date`, `name_of_ins`, `ins_address`, `ins_co_transhipment`, `ins_co_allowed`, `ins_co_prohibited`, `last_neg_date`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(16, 'LCM-001', '113812', 'Saif Powertec Ltd', '72, Mohakhali-C/A, Dhaka', '260326111622820', 2020, 0, 164000, '', '', '', '', '', 'Trailer', '8716.39.00', 'Trailer', '8716.39.00', 'Dutch Lanka Trailer Manufacturers ltd', '575, Nawala Road, Rajagiriya, Srilanka', 'Saif Powertec Ltd', '72, Mohakhali-C/A, Dhaka', 164000, '', '', '', '', '', '', '', 'Srilanka', 'Quality, Quantity, Unit Price, Total. Price & other details as per Proforma Invoice No: 192PIE153Rev07A. Dated: 11-05-2020\r\n', '8716.39.00', 'Any Sea port of Srilanka', 'Chottagong Sea Port', '0', '0000-00-00', 0, '', '', '1', '2020-10-01', 'N/A', 'N/A', '', '1', '', '2020-11-21', '', NULL, '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `lc_industrial`
--

CREATE TABLE `lc_industrial` (
  `id` int(11) NOT NULL,
  `sl_no` varchar(100) NOT NULL,
  `lcaf_no` varchar(100) NOT NULL,
  `applicant_name` varchar(100) NOT NULL,
  `applicant_address` varchar(1000) NOT NULL,
  `irc_no` varchar(100) NOT NULL,
  `year_of_renewal` year(4) NOT NULL,
  `lc_amount` float NOT NULL,
  `sof_cash` varchar(50) NOT NULL,
  `sof_barter` varchar(50) NOT NULL,
  `sof_loan` varchar(50) NOT NULL,
  `sof_credit` varchar(50) NOT NULL,
  `sof_other` varchar(50) NOT NULL,
  `description_of_item_imported` longtext NOT NULL,
  `restricted_items` longtext NOT NULL,
  `beneficiary_name` varchar(100) NOT NULL,
  `beneficiary_address` varchar(1000) NOT NULL,
  `openers_name` varchar(100) NOT NULL,
  `openers_address` varchar(1000) NOT NULL,
  `draft_amount` float NOT NULL,
  `at_sight` varchar(50) NOT NULL,
  `days_da_dp` varchar(50) NOT NULL,
  `cif` varchar(50) NOT NULL,
  `cfr` varchar(50) NOT NULL,
  `fob` varchar(50) NOT NULL,
  `drawn_on_us` varchar(50) NOT NULL,
  `drawn_on_them` varchar(50) NOT NULL,
  `country_origin` varchar(50) NOT NULL,
  `commodities` longtext NOT NULL,
  `hs_code` varchar(50) NOT NULL,
  `shipment_from` varchar(100) NOT NULL,
  `shipment_to` varchar(100) NOT NULL,
  `insurance_cover_no` varchar(50) NOT NULL,
  `ins_date` date NOT NULL,
  `ins_amount` float NOT NULL,
  `ins_part_shipment` varchar(50) NOT NULL,
  `ins_allowed` varchar(50) NOT NULL,
  `ins_prohibited` varchar(50) NOT NULL,
  `last_shipment_date` date NOT NULL,
  `name_of_ins` varchar(100) NOT NULL,
  `ins_address` varchar(1000) NOT NULL,
  `ins_co_transhipment` varchar(50) NOT NULL,
  `ins_co_allowed` varchar(50) NOT NULL,
  `ins_co_prohibited` varchar(50) NOT NULL,
  `last_neg_date` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lc_industrial`
--

INSERT INTO `lc_industrial` (`id`, `sl_no`, `lcaf_no`, `applicant_name`, `applicant_address`, `irc_no`, `year_of_renewal`, `lc_amount`, `sof_cash`, `sof_barter`, `sof_loan`, `sof_credit`, `sof_other`, `description_of_item_imported`, `restricted_items`, `beneficiary_name`, `beneficiary_address`, `openers_name`, `openers_address`, `draft_amount`, `at_sight`, `days_da_dp`, `cif`, `cfr`, `fob`, `drawn_on_us`, `drawn_on_them`, `country_origin`, `commodities`, `hs_code`, `shipment_from`, `shipment_to`, `insurance_cover_no`, `ins_date`, `ins_amount`, `ins_part_shipment`, `ins_allowed`, `ins_prohibited`, `last_shipment_date`, `name_of_ins`, `ins_address`, `ins_co_transhipment`, `ins_co_allowed`, `ins_co_prohibited`, `last_neg_date`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(19, 'LCI-001', 'DBL-148260', 'Saif Powertec Limited', 'Bashugaon, Pubail, Gazipur', 'L-40051411045-H', 2020, 105350, '', '', '', '', '', 'Forklift', '8247.20.00', 'Doosan Corporation Industrial Vehicle BG', '21nd Floor, Doosan Tower,18-21, Euljiro 6-Ga, Jung-Gu, Seol, Korea', 'Saif Powertec Ltd', '72, Mohakhali-C/A, Dhaka', 105350, '1', '1', '1', '1', '1', '', '', 'China', 'Quality, Quantity, Unit Price, Total. Price & all other terms as per proforma invoice no: SAIF11912A, Date: 09-12-2019. H.S Code: 8247.20.00', '8247.20.00', 'Any Sea port of China', 'Chottagong Sea Port', '0', '0000-00-00', 0, '', '', '1', '2020-03-31', 'N/A', 'N/A', '', '1', '', '2020-04-21', '', NULL, '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id2` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warehouse_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `is_term_accept` tinyint(1) NOT NULL DEFAULT 0 COMMENT ' 0 = not accepted,1 = accepted',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id2`, `first_name`, `last_name`, `user_type`, `project_id`, `warehouse_id`, `email`, `password`, `status`, `confirmation_code`, `confirmed`, `is_term_accept`, `remember_token`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Admin', 'Saif', 'admin', '2', '13', 'admin@admin.com', 'bfb1e4e7ace6d70c18b69a2a6cf4a415', 1, 'b1970adb3f301c8440c81e45b526060c', 1, 0, 'PCgsDtfHhHDhADntGcj7D97A9e4U0gtx0hlLn2heuaMyQBq5Gaa2sP55BPGr', 1, 1, '2019-01-14 00:17:02', '2019-01-20 20:36:38', NULL),
(4, 4, 'Super', 'Admin', 'superAdmin', '2', '7', 'superadmin@admin.com', 'be05977add575832dc52655d4ad5c42e', 1, 'b1970adb3f301c8440c81e45b526060c', 1, 0, 'PCgsDtfHhHDhADntGcj7D97A9e4U0gtx0hlLn2heuaMyQBq5Gaa2sP55BPGr', 4, 4, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lc_commercial`
--
ALTER TABLE `lc_commercial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc_industrial`
--
ALTER TABLE `lc_industrial`
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
-- AUTO_INCREMENT for table `lc_commercial`
--
ALTER TABLE `lc_commercial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lc_industrial`
--
ALTER TABLE `lc_industrial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
