-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2023 at 01:18 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apollo`
--

-- --------------------------------------------------------

--
-- Table structure for table `section_1`
--

CREATE TABLE `section_1` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_1`
--

INSERT INTO `section_1` (`id`, `title`, `text`) VALUES
(13, 'My Apollo Project', 'Project text'),
(14, 'saklmaklsm', 'lkmdclkmdclksmc');

-- --------------------------------------------------------

--
-- Table structure for table `section_2`
--

CREATE TABLE `section_2` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_general_ci,
  `instagram` text COLLATE utf8mb4_general_ci,
  `twitter` text COLLATE utf8mb4_general_ci,
  `pinterest` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_2`
--

INSERT INTO `section_2` (`id`, `title`, `text`, `image`, `facebook`, `instagram`, `twitter`, `pinterest`) VALUES
(17, 'Section 2 title', 'This is section 2 text', 'Ekran şəkli 2023-03-31 153634.png', 'jnd', 'nd', 'njc', 'jcnd');

-- --------------------------------------------------------

--
-- Table structure for table `section_3`
--

CREATE TABLE `section_3` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_3`
--

INSERT INTO `section_3` (`id`, `title`, `text`, `image`) VALUES
(1, 'SECTION 3 TITLE', 'Section 3 text', 'Ekran şəkli 2023-03-31 153217.png');

-- --------------------------------------------------------

--
-- Table structure for table `section_4`
--

CREATE TABLE `section_4` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_4`
--

INSERT INTO `section_4` (`id`, `title`, `text`) VALUES
(2, 'salam', 'necesen balam');

-- --------------------------------------------------------

--
-- Table structure for table `section_4_form`
--

CREATE TABLE `section_4_form` (
  `id` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_4_form`
--

INSERT INTO `section_4_form` (`id`, `email`, `subject`, `message`) VALUES
(5, 'staghi@bk.ru', 'asasasas', 'hepinizin ramazan kutlybuybyt');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `type`) VALUES
(1, 'Ekran şəkli 2023-03-31 153634.png', 2),
(2, 'dsn.png', 2),
(3, 'Ekran şəkli 2023-03-31 155436.png', 1),
(4, 'Ekran şəkli 2023-03-31 153217.png', 2),
(5, 'Ekran şəkli 2023-03-31 153217.png', 1),
(6, 'cat-2.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `section_1`
--
ALTER TABLE `section_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_2`
--
ALTER TABLE `section_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_3`
--
ALTER TABLE `section_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_4`
--
ALTER TABLE `section_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_4_form`
--
ALTER TABLE `section_4_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `section_1`
--
ALTER TABLE `section_1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `section_2`
--
ALTER TABLE `section_2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `section_3`
--
ALTER TABLE `section_3`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_4`
--
ALTER TABLE `section_4`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_4_form`
--
ALTER TABLE `section_4_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
