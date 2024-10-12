-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 07:41 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joki_pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `nama_diskon` varchar(100) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `nomor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` int(255) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `no_telp`, `password`) VALUES
(0, 'naufal', 'lala', 'taufikmaulan507@gmail.com', 2, '$2y$10$jEyWCy/0KuLIgNY9pzbKNejg7RiLCj4sYWu6FjZdGQQGoj1PN/qa.'),
(0, 'naufal', 'kj', 'taufikmaulan507@gmail.com', 12345, '$2y$10$RJFerD8q6wxWaLVQdRqIseDxLRLdXLKiHkXcyoFWbnIBEz9O7cZlO'),
(0, 'naufal', 'jk', 'taufikmaulan507@gmail.com', 12345, '$2y$10$.PK7qh1zZTZn6Jtyaxnr7uTmc.Cc2JOI6EZi5OkkCqOp/k0NlkRMG'),
(0, 'naufal', 'jk', 'taufikmaulan507@gmail.com', 12345, '$2y$10$BCn1nmlcZ9lNUf/nus.kdOz3se3jpA1Oj1Q4FOjLBIgTaUw1OK6xm'),
(0, 'naufal', 'jk', 'taufikmaulan507@gmail.com', 12345, '$2y$10$8ew0t0rPijEgUcW7F8XwLuoDhGzgd2b.LreZEyYFQFVj5wnYGBHcO'),
(0, 'naufal', 'kocap', 'kocap@gmail.com', 8776, '$2y$10$bPFd2JdNOsSu8ITWcgaw1Om1F.V6QwgjrTUNENAgslh6Z602JwmWS'),
(0, 'naufal', 'admin', 'naufalk217@gmail.com', 8776, '$2y$10$KDYQ4KGzQjhm1ov1HTXSq.nnHTzCdHeHuYDV5WripxDUCtKvaBmpa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
