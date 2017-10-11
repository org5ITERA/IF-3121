-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2017 at 05:18 PM
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
-- Database: `tugas-besar`
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

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `id_question`, `id_user`, `answer`, `waktu`) VALUES
(1, 2, 3, 'Pernahkah anda bermain gem?\r\nBagaimana anda berbelok, menghindari hujanan peluru, tabrakan, tumbukan, berhenti, dll.\r\nMisalkan kamu bermain gem balapan mobil. Ketika rem diinjak, mobil tdk akan langsung berhenti, bukan? Malah ada tambahan efek slip, jumping, getaran?\r\nBagaimana menghitung efek ini jika kecepatan mobil sekian, tikungan sekian derajat, jalanan tdk beraspal, kondisi mesin 75%, kecepatan angin arah sekian, dll.\r\nBukankah perhitungan kalkulus sangat diperlukan? Dan perhitungan probabilitas sangat diperhatikan?\r\nMengapa?\r\nGem diciptakan agar pemain benar-benar mengalami balapan yg sesungguhnya.\r\nBagaimana jika pembuat gem tdk memperhatikan hal demikian? Tentu saja ketika mobil direm. Langsung berhenti begitu saja dan tidak ada efek yg lain. Apakah gem tersebut akan laku di pasaran?\r\n\r\nTentu saja tdk hanya aplikasi gem. Banyak aplikasi lain yg membutuhkan perhitungan kalkulus dan probabilitas. Ini hanya satu contoh saja. ', '0000-00-00 00:00:00.000000'),
(2, 2, 7, 'Tetap ada mata kuliah dasar, spt agama, bahasa, kewarganegaraan, tp tdk banyak!\r\nMata kuliah dasar yg berabe, spt fisika, kalkulus, pengantin (pengantar teknologi informasi, :)). Ini banyak!\r\nNah, yg paling capek: statistik! Ini banyak!\r\nAda lagi yg bikin puyeng: aplikasi dr matematika terapan: analisa numerik, udah banyak = menjijikkan!\r\n\r\nSelebihnya keahlian ttg teknik digital, arsitektur komputer, jaringan, sistem pemrograman, dll yg berhubungan dengan sistem informasi. Walau tdk saling menyambung, tapi berkaitan.\r\nJangan dikira banyak tentang pendalaman bahasa pemrograman. DIKIT!\r\n\r\nYg paling sedikit tentang manajemen.\r\n\r\nJika kamu ingin memperdalam tentang pemrograman, pilihan = teknik komputer. Beti (beda tipis).\r\n\r\nSebaiknya kamu cari di google: silabus;teknik;informatika (ttk koma buat biar gampang)', '0000-00-00 00:00:00.000000'),
(3, 2, 5, 'wah wah wah\r\n\r\njangan lupakan sejarah terciptanya komputer\r\nberawal dari konsep matematis\r\n\r\nbegitupun dg pemograman\r\n\r\nkarena harus ada kepastian dlm perhitungan matematis nya\r\n\r\nsebutlah digit hebat : 0 dan 1\r\nyg pada akhirnya kita semua bisa posting dan respon di forum ini....\r\n\r\nilmu yg terpakai nanti cara kamu gunakan analisa jadi terbiasa terstuktur dan berguna untuk membuat program...', '2017-10-08 22:16:08.000000');

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
(2, 3, 'Mata kuliah teknik informatika? ', 'mata kuliah logika matematika,matriks dan transformasi linier,kalkulus 1 & 2,stratistik probabilitas...\r\n\r\nkoq aneh ya,di jur. TI ada itung2an matematika segala...mang nanti 5 matkul tersebut klo udah lulus TI berguna untuk apa? mohon untuk para master2 IT menjawabnya.....', '2017-10-05 14:55:04.000000'),
(3, 3, 'res', 'tes', '2017-10-05 14:55:55.000000'),
(4, 7, 'fgd', 'dscsd', '2017-10-07 23:46:08.000000'),
(5, 7, 'sdgfhj', 'dfghjk', '2017-10-08 00:14:44.000000'),
(6, 7, 'sdgfhj', 'dfghjk', '2017-10-08 00:14:53.000000');

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
(5, 'bambang', '', 'ari bambang', '10/02/1997', 'a@a.com', 'Laki-laki', '::1', '2017-10-08 22:13:08.000000'),
(6, 'aa', '', 'aaa', '04-10-2017', 'aa@a.com', 'Laki-laki', NULL, NULL),
(7, 'username', 'user', 'username', '05/10/2017', 'user@gmail.com', 'Laki-laki', '::1', '2017-10-08 19:51:01.000000');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
