-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 01:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation_type`
--

CREATE TABLE `accomodation_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accomodation_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accomodation_type`
--

INSERT INTO `accomodation_type` (`id`, `accomodation_type`, `created_at`, `updated_at`) VALUES
(1, 'Guest Room', '2023-11-25 23:49:54', '2023-11-26 07:58:37'),
(3, 'Suite', '2023-11-26 00:13:25', '2023-11-26 00:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `bed_type`
--

CREATE TABLE `bed_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bedType` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bed_type`
--

INSERT INTO `bed_type` (`id`, `bedType`, `created_at`, `updated_at`) VALUES
(3, 'King Size', '2023-11-26 01:38:29', '2023-11-26 01:38:29'),
(4, 'Twin Bed', '2023-11-26 01:38:32', '2023-12-04 00:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `booked_rooms`
--

CREATE TABLE `booked_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_request_code` int(11) NOT NULL,
  `bed_type` varchar(255) NOT NULL,
  `accomodation_type` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `member_number` varchar(255) DEFAULT NULL,
  `adult_no` int(11) NOT NULL,
  `children_no` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `requests` varchar(255) DEFAULT NULL,
  `special_requests` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booked_rooms`
--

INSERT INTO `booked_rooms` (`id`, `book_request_code`, `bed_type`, `accomodation_type`, `amount`, `first_name`, `last_name`, `email`, `member_number`, `adult_no`, `children_no`, `rooms`, `check_in`, `check_out`, `requests`, `special_requests`, `created_at`, `updated_at`) VALUES
(2, 314437648, 'King Size', 'Guest Room', 8100, 'eris', 'Peña', 'eris@gmail.com', NULL, 1, 0, 1, '2023-11-01', '2023-11-03', '[\"Extra Feather Pillows\",\"Foam Pillows\",\"Extra Towels\"]', NULL, '2023-11-28 17:52:07', '2023-11-28 17:52:07'),
(3, 555237785, 'King Size', 'Guest Room', 8100, 'Mark', 'angelo', 'mark@gmail.com', NULL, 3, 4, 2, '2023-12-12', '2023-12-14', '[\"Extra Feather Pillows\",\"Extra Foam Pillows\",\"Extra Towels\"]', NULL, '2023-12-05 05:49:01', '2023-12-05 05:49:01'),
(4, 758441402, 'Twin Bed', 'Guest Room', 7650, 'jose', 'marichan', 'jose@gmail.com', NULL, 1, 1, 1, '2023-12-14', '2023-12-15', '[\"Extra Feather Pillows\",\"Extra Foam Pillows\",\"Feather Free Room\",\"Extra Towels\"]', NULL, '2023-12-05 05:52:17', '2023-12-05 05:52:17'),
(5, 596959230, 'King Size', 'Guest Room', 8100, 'jay', 'dolfo', 'jay@gmail.com', '876654', 2, 1, 1, '2023-12-01', '2023-12-04', '[\"Extra Feather Pillows\",\"Foam Pillows\",\"Extra Towels\"]', NULL, '2023-12-06 11:13:26', '2023-12-06 11:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `dining`
--

CREATE TABLE `dining` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dining_facility` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `date_available` varchar(255) NOT NULL,
  `time_open` time NOT NULL,
  `time_close` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dining`
--

INSERT INTO `dining` (`id`, `dining_facility`, `description`, `date_available`, `time_open`, `time_close`, `created_at`, `updated_at`) VALUES
(2, 'Mandra Kitchen', 'Mandra Kitchen is where flavors and stories gather, featuring a carefully crafted a la carte menu and buffet selection showcasing local signatures and delectable cuisine inspired by flavors from Asia and around the world.', 'Everyday', '06:30:00', '22:00:00', '2023-12-05 07:40:51', '2023-12-05 07:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `dining_images`
--

CREATE TABLE `dining_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dining_id` bigint(20) UNSIGNED NOT NULL,
  `dining_images` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dining_images`
--

INSERT INTO `dining_images` (`id`, `dining_id`, `dining_images`, `created_at`, `updated_at`) VALUES
(2, 2, 'uploads/dining/17017908511.jpg', '2023-12-05 07:40:51', '2023-12-05 07:40:51'),
(3, 2, 'uploads/dining/17017908512.jpg', '2023-12-05 07:40:51', '2023-12-05 07:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `dining_reservation`
--

CREATE TABLE `dining_reservation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dining_facility` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occasional` varchar(255) DEFAULT NULL,
  `special_request` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `no_people` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dining_reservation`
--

INSERT INTO `dining_reservation` (`id`, `dining_facility`, `first_name`, `last_name`, `phone_number`, `email`, `occasional`, `special_request`, `date`, `time`, `no_people`, `created_at`, `updated_at`) VALUES
(2, 'Mandra Kitchen', 'Eris', 'Pena', 9385839432, 'eris@gmail.com', 'None', 'make it special', '2023-12-07', '12:00 pm', '2 People', '2023-12-06 05:31:18', '2023-12-06 05:31:18'),
(3, 'Mandra Kitchen', 'jay-ar', 'dolfo', 93434323, 'dolfo@gmail.com', 'None', 'make it speial', '2023-12-05', '10:30 am', '2 People', '2023-12-06 09:56:17', '2023-12-06 09:56:17'),
(4, 'Mandra Kitchen', 'jay', 'dolfo', 93434232, 'dolfo@gmail.com', 'None', 'make it special', '2023-12-07', '10:30 am', '2 People', '2023-12-06 15:21:19', '2023-12-06 15:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_26_071736_create_accomodation_type_table', 1),
(6, '2023_11_26_082442_create_bed_type_table', 2),
(10, '2023_11_26_103831_create_room_table', 5),
(11, '2023_11_26_105453_create_room_images_table', 6),
(17, '2023_11_27_164340_create_booked_rooms_table', 7),
(18, '2023_12_04_063233_create_table_product', 8),
(19, '2023_12_04_072350_create_product_table', 9),
(20, '2023_12_05_143830_create_dining_table', 10),
(21, '2023_12_05_145849_create_dining_images_table', 10),
(24, '2023_12_06_114259_create_dining_reservation_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `member_discount` int(11) NOT NULL,
  `bed_type` varchar(255) NOT NULL,
  `accomodation_type` varchar(255) NOT NULL,
  `bedding` longtext NOT NULL,
  `room_feature` longtext NOT NULL,
  `bathroom_features` longtext NOT NULL,
  `furnitures` longtext NOT NULL,
  `kitchen_features` longtext NOT NULL,
  `internet_phones` longtext NOT NULL,
  `entertainment` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `price`, `member_discount`, `bed_type`, `accomodation_type`, `bedding`, `room_feature`, `bathroom_features`, `furnitures`, `kitchen_features`, `internet_phones`, `entertainment`, `created_at`, `updated_at`) VALUES
(1, 9000, 10, 'King Size', 'Guest Room', 'Maximum occupancy: 3\r\nRollaway beds permitted: 1\r\nCribs permitted: 1\r\nMaximum cribs/rollaway beds permitted: 1\r\nPillowtop mattress, and Duvet', '32sqm/344sqft\r\nAir-conditioned\r\nThis room is non-smoking\r\nConnecting rooms are available (for some rooms)\r\nWalk-in closet\r\nWindows, floor-to-ceiling\r\nHooks\r\nUSB outlets', 'Separate bathtub and shower\r\nWhirlpool fits 1\r\nBidet\r\nHair dryer\r\nRobe\r\nSlippers', 'Chair, with ottoman\r\nAlarm clock\r\nSafe, in room\r\nDual voltage outlets\r\nDesk, writing/work, with ergonomic chair, and electrical outlet\r\nIron and ironing board\r\nTrouser press', 'Mini fridge', 'Phones: 2\r\nPhone features: voicemail, and speaker phone\r\nHigh-speed internet, complimentary\r\nWireless internet, complimentary', '55in/140cm LED TV\r\nCable/satellite\r\nCNN\r\nRadio\r\nChromecast', '2023-11-27 02:35:59', '2023-11-27 02:35:59'),
(2, 8500, 10, 'Twin Bed', 'Guest Room', 'Maximum occupancy: 3\r\nRollaway beds permitted: 1\r\nCribs permitted: 1\r\nMaximum cribs/rollaway beds permitted: 1\r\nPillowtop mattress, and Duvet', '32sqm/344sqft\r\nAir-conditioned\r\nThis room is non-smoking\r\nConnecting rooms are available (for some rooms)\r\nWalk-in closet\r\nWindows, floor-to-ceiling\r\nHooks\r\nUSB outlets', 'Marble bathroom\r\nSeparate bathtub and shower\r\nBidet\r\nHair dryer\r\nRobes: 2\r\nSlippers', 'Chair, with ottoman\r\nAlarm clock\r\nSafe, in room\r\nDual voltage outlets\r\nDesk, writing/work, with ergonomic chair, and electrical outlet\r\nIron and ironing board\r\nTrouser press', 'Mini fridge', 'Phones: 2\r\nPhone features: voicemail, and speaker phone\r\nHigh-speed internet, complimentary\r\nWireless internet, complimentary\r\nWi-Fi is always free for Mandra members', '55in/140cm LED TV\r\nCable/satellite\r\nCNN\r\nRadio\r\nChromecast', '2023-11-27 02:38:13', '2023-11-27 02:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `room_images`
--

CREATE TABLE `room_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `room_images` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_images`
--

INSERT INTO `room_images` (`id`, `room_id`, `room_images`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/rooms/17010813591.webp', '2023-11-27 02:36:00', '2023-11-27 02:36:00'),
(2, 1, 'uploads/rooms/17010813602.webp', '2023-11-27 02:36:00', '2023-11-27 02:36:00'),
(3, 1, 'uploads/rooms/17010813603.webp', '2023-11-27 02:36:00', '2023-11-27 02:36:00'),
(4, 1, 'uploads/rooms/17010813604.webp', '2023-11-27 02:36:00', '2023-11-27 02:36:00'),
(5, 2, 'uploads/rooms/17010814931.webp', '2023-11-27 02:38:13', '2023-11-27 02:38:13'),
(6, 2, 'uploads/rooms/17010814932.webp', '2023-11-27 02:38:13', '2023-11-27 02:38:13'),
(7, 2, 'uploads/rooms/17010814933.webp', '2023-11-27 02:38:13', '2023-11-27 02:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$Xdk3fUHg7FNcu/9j/F.h6.SXIKV5edMbFSAUIuc3Xae3DapqtN1Ji', 'admin', NULL, '2023-11-25 23:49:00', '2023-11-25 23:49:00'),
(2, 'eris', 'eris@gmail.com', NULL, '$2y$12$eStpHO2OU1cXMbZ8w55B9eweQZqC5CprWzjrB1ib9zkVG7XJIZmlC', 'admin', NULL, '2023-11-26 23:50:12', '2023-11-26 23:50:12'),
(3, 'jay', 'jay@gmail.com', NULL, '$2y$12$gkWJtld8LgJaZcTj6vw5netBvW6TdxseZwGQPA4IMsJbF9WElGdt2', 'user', NULL, '2023-12-06 11:11:01', '2023-12-06 11:11:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation_type`
--
ALTER TABLE `accomodation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed_type`
--
ALTER TABLE `bed_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked_rooms`
--
ALTER TABLE `booked_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dining`
--
ALTER TABLE `dining`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dining_images`
--
ALTER TABLE `dining_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dining_images_dining_id_foreign` (`dining_id`);

--
-- Indexes for table `dining_reservation`
--
ALTER TABLE `dining_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_images`
--
ALTER TABLE `room_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_images_room_id_foreign` (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodation_type`
--
ALTER TABLE `accomodation_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bed_type`
--
ALTER TABLE `bed_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booked_rooms`
--
ALTER TABLE `booked_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dining`
--
ALTER TABLE `dining`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dining_images`
--
ALTER TABLE `dining_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dining_reservation`
--
ALTER TABLE `dining_reservation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_images`
--
ALTER TABLE `room_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dining_images`
--
ALTER TABLE `dining_images`
  ADD CONSTRAINT `dining_images_dining_id_foreign` FOREIGN KEY (`dining_id`) REFERENCES `dining` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `room_images`
--
ALTER TABLE `room_images`
  ADD CONSTRAINT `room_images_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
