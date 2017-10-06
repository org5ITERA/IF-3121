-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 10:31 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(255) NOT NULL,
  `id_question` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `waktu` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `question` varchar(1000) NOT NULL,
  `waktu` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `id_user`, `judul`, `question`, `waktu`) VALUES
(2, 1, 'aaa', 'aaa', '2017-10-05 14:55:04.000000'),
(3, 3, 'res', 'tes', '2017-10-05 14:55:55.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `TanggalLahir` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `ip_add` varchar(100) DEFAULT NULL,
  `lastlogin` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `TanggalLahir`, `Email`, `jk`, `ip_add`, `lastlogin`) VALUES
(3, 'ari', '123', 'ari', '02/10/1997', 'a@a.com', 'Laki-laki', '::1', '2017-10-05 14:55:48.000000'),
(5, 'bambang', '', 'ari bambang', '10/02/1997', 'a@a.com', 'Laki-laki', NULL, NULL),
(6, 'aa', '', 'aaa', '04-10-2017', 'aa@a.com', 'Laki-laki', NULL, NULL),
(7, 'username', 'user', 'username', '05/10/2017', 'user@gmail.com', 'Laki-laki', '::1', '2017-10-05 08:15:04.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
