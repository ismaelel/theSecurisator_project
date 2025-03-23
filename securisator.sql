-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2025 at 10:22 PM
-- Server version: 8.0.40
-- PHP Version: 8.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `securisator`
--

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `category` varchar(15) NOT NULL,
  `time_spent` int NOT NULL,
  `party_number` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `user_id`, `category`, `time_spent`, `party_number`) VALUES
(3, 8, 'Electricité', 193, 1),
(4, 5, 'Electricité', 1, 1),
(5, 8, 'Electricité', 19, 1),
(6, 5, 'Electricité', 19, 1),
(7, 8, 'Electricité', 19, 1),
(8, 5, 'Electricité', 19, 1),
(9, 8, 'Electricité', 19, 1),
(10, 5, 'Electricité', 19, 1),
(11, 9, 'Electricité', 63, 1),
(12, 9, 'Incendie', 100, 1),
(13, 9, 'Incendie', 59, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `level` int NOT NULL,
  `party` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `party`) VALUES
(5, 'ismo', '01e501a712234b7b1683c230e41db6e9f32ce3ad96b3a159cbc08b749574eaf3', 1, 0),
(7, 'cci', '84584567b595f78146cc4c4b9229d3bd64c6b7c002ac068336ead73672cbb152', 1, 1),
(8, 'ismael', '7132fe635f6e982683a62d90761f4c66698221c8a5e225a0bdbba16b64312ec3', 2, 1),
(9, 'adrien', '51fc178c3b35d5500b623576f1d834a57c6e10353f6c6d27cd8340020b2e30c5', 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
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
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
