-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 04:56 PM
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
(3, 2, 5, 'wah wah wah\r\n\r\njangan lupakan sejarah terciptanya komputer\r\nberawal dari konsep matematis\r\n\r\nbegitupun dg pemograman\r\n\r\nkarena harus ada kepastian dlm perhitungan matematis nya\r\n\r\nsebutlah digit hebat : 0 dan 1\r\nyg pada akhirnya kita semua bisa posting dan respon di forum ini....\r\n\r\nilmu yg terpakai nanti cara kamu gunakan analisa jadi terbiasa terstuktur dan berguna untuk membuat program...', '2017-10-08 22:16:08.000000'),
(8, 9, 6, 'Open Source : Banyak tenaga (SDM) yang berperan mengerjakan proyek Kesalahan (bugs, error) lebih cepat ditemukan dan diperbaiki Kualitas hasil lebih terjamin karena komunitas melakukan evaluasi Lebih aman Hemat biaya Tidak mengulangi development Close Source : Kestabilan sistem terjamin karena ada penangung jawab resmi. Support langsung dari pemilik aplikasi /program. Mudah mendapatkan sertifikasi. Lebih mudah digunakan / dipelajari / dipahami karena mayoritas pengguna menggunakannya ( pada daerah tertentu ).', '2017-10-18 21:45:51.000000'),
(9, 7, 7, '- software engineering\r\n- data mining', '2017-10-18 21:46:28.000000'),
(10, 7, 3, '- Jaringan komputer \r\n- intelegensi buatan\r\n', '2017-10-18 21:47:04.000000'),
(11, 8, 5, 'css, php, html, umum nya sih itu...', '2017-10-18 21:48:06.000000'),
(12, 7, 5, 'makasih atas jawabannya teman2...', '2017-10-18 21:53:00.000000');

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
(7, 5, 'Fokus Jurusan', 'Apa saja fokus jurusan yang akan kita pelajari dalam bidang informatika? ', '2017-10-18 21:42:23.000000'),
(8, 6, 'Buat Website', 'Apa saja bahasa pemrograman yang kita gunakan saat membuat website ?', '2017-10-18 21:43:09.000000'),
(9, 7, 'Perbedaan aplikasi open source dan close source ', 'Apa perbedaan aplikasi open source dan close source?', '2017-10-18 21:43:50.000000');

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
(3, 'ari', '123', 'Ari Bambang', '02/10/1997', 'a@a.com', 'Laki-laki', '::1', '2017-10-18 21:46:49.000000'),
(5, 'rizqi', '456', 'Ahmad Rizqi Abdullah', '10/02/1997', 'a@a.com', 'Laki-laki', '::1', '2017-10-18 21:56:10.000000'),
(6, 'andrian', '321', 'Andrian Maulana', '04-10-2017', 'aa@a.com', 'Laki-laki', '::1', '2017-10-18 21:45:10.000000'),
(7, 'mega', '432', 'Mega Putri', '05/10/2017', 'user@gmail.com', 'Laki-laki', '::1', '2017-10-18 21:46:08.000000');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
