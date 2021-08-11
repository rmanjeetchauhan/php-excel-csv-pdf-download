-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 12:14 PM
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
-- Database: `testing_xl_pdf`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `address` text COLLATE utf8mb4_bin NOT NULL,
  `city` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '-1-deleted, 0-deactive, 1-active',
  `creation_date` datetime DEFAULT NULL,
  `modification_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `phone`, `address`, `city`, `status`, `creation_date`, `modification_date`) VALUES
(2, 'Manjeet kr', 'manjeetkrkumar', 'kr.manjeet319@gmail.com', '9711136319', 'Plot no 111, Vidhayak Colony Nyay khand-1 Indirapuram Ghaziabad', 'Ghaziabad', 1, '2020-03-04 06:03:23', '2020-11-03 14:09:33'),
(3, 'Chauhan', 'chauhanmanjeet', 'kr.manjeet3190@gmail.com', '', '', NULL, 0, '2020-03-04 06:03:48', '2020-09-16 11:11:10'),
(4, 'Chauhan', 'chauhanmanjeet1', 'rmanjeetchuhan@gmail.com', '+919711136319', 'Plot no 111, Vidhayak Colony Nyay khand-1 Indirapuram Ghaziabad\r\n22', 'Ghaziabad', 1, '2020-05-25 16:42:03', '2020-05-25 19:47:45'),
(5, 'Chauhan', 'chauhanmanjeet2', 'rmanjeetchuhan01@gmail.com', '9711136319', 'Plot no 111, Vidhayak Colony Nyay khand-1 Indirapuram Ghaziabad\r\n22', 'Ghaziabad', 1, '2020-05-25 17:58:02', '2020-05-25 17:58:02'),
(6, 'SHANKAR', 'shankardev', 'gs@gmail.com', '1234567890', 'chiranjiv vihar,ghaziabad', 'ghaziabad', 1, '2020-09-10 11:38:39', '2020-09-10 11:38:39'),
(7, 'agent', 'agent007', 'aaaa@aaa.com', 'aaaaa', 'hbjhb', 'g', 1, '2020-11-24 15:13:34', '2020-11-24 15:13:34'),
(8, 'abhishek', 'abhishektyagi', 'abhishek5157@gmail.com', '07302674080', '428 gali no.1 shivpuri niwari road\r\nmodinagar', 'Modinagar', 1, '2020-11-25 14:32:27', '2020-11-25 14:32:27'),
(9, 'Amresh', 'AmreshKumar', 'amreshkumar.com@gmail.com', '8096428275', 'new ashok nagar, new delhi-96', 'delhi', 1, NULL, '2020-12-24 20:49:02'),
(10, 'Manjeet', 'ManjeetKumar', 'manjeet.com@gmail.com', '9711111', 'indirapuram', 'up', 1, NULL, '2020-12-24 20:49:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
