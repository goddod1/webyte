-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2023 at 07:22 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dangkydangnhap`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(27) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `fullname` varchar(28) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mamay` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `macode` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `status`, `fullname`, `mobile`, `address`, `email`, `mamay`, `macode`) VALUES
(8, 'tungquan2003', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', ''),
(9, 'tungquan2003', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', ''),
(10, 'tungquan2003', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', ''),
(11, 'tungquan2003', 'fcea920f7412b5da7be0cf42b8c93759', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', ''),
(12, 'tungquan2003', 'fcea920f7412b5da7be0cf42b8c93759', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', ''),
(13, 'tungquan0910', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', ''),
(14, 'tungquan0910', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', ''),
(15, 'tungquan0910', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', ''),
(16, 'abcd', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', ''),
(17, 'tungquan0910', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', ''),
(18, 'asdas', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', ''),
(19, 'tungquan0910', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', 'tungquan0910.png'),
(20, 'asdasd', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', 'asdasd.png'),
(21, 'asdasd', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', 'asdasd.jpg'),
(22, 'abcd', 'c20ad4d76fe97759aa27a0c99bff6710', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', 'abcd.jpg'),
(23, 'abcd', '25d55ad283aa400af464c76d713c07ad', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', 'abcd.png'),
(24, 'tungquan2003', 'e2fc714c4727ee9395f324cd2e7f331f', 1, 'Nguyen Tung Quan', 333783865, 'Ha Noi', 'tungquan0910@gmail.com', '', 'kkukuj');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `id` int(11) NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mamay` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `macode` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`id`, `username`, `mamay`, `macode`, `status`) VALUES
(101, 'a', '1', 'g7cti', 1),
(102, 'a', '2', 'IIDIu', 1),
(103, 'as', 'ma 10', 'h6gyF', 1),
(104, 'ab', '2', 'bJwMT', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
