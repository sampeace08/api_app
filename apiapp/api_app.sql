-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 07:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'Technology', '2021-11-01 09:54:28'),
(2, 'Gaming', '2021-11-01 09:54:28'),
(3, 'Auto', '2021-11-01 09:54:28'),
(4, 'Entertainment', '2021-11-01 09:54:28'),
(5, 'Books', '2021-11-01 09:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `body`, `author`, `created_at`) VALUES
(8, 1, 'Bitcoin', 'Every word about bitcoin out there is not true but there are alot of information that goes with it', 'Sam Peace', '2022-01-06 23:48:41'),
(21, 2, 'JSON Created Post', 'The post has been made through JSON Posting. The Process is tedious but fulfilling  ', 'Sam Peace', '2022-01-26 00:17:16'),
(22, 2, 'IOT', 'IOT means, internet of things. It is the new technology advancement in networks (data communication) where you will have your mouse having an IP address.', 'Sam Peace', '2022-01-26 00:24:46'),
(23, 1, 'Blockchain Update', 'Blockchain is today frontier in technology seeking to solve major IT data issues. It will solve major computing problems', 'Sam Peace', '2022-01-27 18:57:32'),
(28, 4, 'IoT', 'IoT the internet of things', 'Sam Peace', '2022-06-30 14:29:55'),
(29, 4, 'Machine Learning and Data Science', 'Machine Learning is the ability of a machine to improve performance with experience as human do. ', 'Ndirangu', '2022-08-22 18:27:02'),
(30, 3, 'Computer Studies', 'Computer Studies is learning how computers work', 'Anthony', '2023-02-11 09:37:00'),
(31, 2, 'REST API', 'REST API at the best', 'James', '2023-03-17 18:23:03'),
(32, 4, 'Show Case REST API', 'This is how API is used', 'James', '2023-04-05 10:16:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
