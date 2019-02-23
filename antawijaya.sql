-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 03:10 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antawijaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `title` text NOT NULL,
  `jenis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `deskripsi`, `title`, `jenis`) VALUES
('ABT00001', 'didirikan di atas fondasi keahlian, pengalaman, dan pemahaman yang mendalam atas pertumbuhan dan perkembangan bisnis, baik domestik maupun global. Tujuan utama kami adalah menciptakan nilai bagi para pelaku bisnis di tanah air. Kami melakukannya melalui penyediaan jasa konsultansi bisnis, seminar dan workshop, serta berbagai jenis in-house training. Kami juga menyediakan jasa bagi penyusunan perencanaan dan pengembangan bisnis, serta kami siap melakukan pendampingan konsultasi pada perusahaan-perusahaan di tanah air untuk menyelesaikan suatu proyek tertentu hingga mencapai misinya. \r\n', 'Antawijaya', 'Profil');

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id_misi` varchar(10) DEFAULT NULL,
  `isi_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk_jasa`
--

CREATE TABLE `produk_jasa` (
  `id_produk_jasa` varchar(10) NOT NULL,
  `judul` text NOT NULL,
  `sub_judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` enum('produk','jasa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_jasa`
--

INSERT INTO `produk_jasa` (`id_produk_jasa`, `judul`, `sub_judul`, `deskripsi`, `jenis`) VALUES
('PJ00001', 'Seminar & Workshop', 'Business Owner Summit', 'Business Owner Summit adalah seminar satu hari dimana satu atau dua orang expert akan membagikan informasi-informasi penting yang berhubungan dengan sebuah topik. Kemudian para peserta juga akan diberikan kesempatan bertanya langsung di sesi tanya jawab', 'produk'),
('PJ000010', 'HUMAN RESOURCE TRAINING\r\n', 'Penyelenggara Training Workshop', '<li> Strategic Human Resource Planning <br> </li> \r\n<li> Developing Human Resource Policy <br> </li>\r\n<li> Employee Engagement and Retention <br> </li>\r\n<li> Designing Compansation and Benefit <br> </li>\r\n<li> Learning and Developmentin Human <br> </li>\r\n<li> Resources Department <br> </li>\r\n<li> Building Skills for Leaders <br> </li>\r\n<li> Preparing Corporate University <br> </li>\r\n', ''),
('PJ00002', 'Seminar & Workshop', 'Organization Development', 'Event ini berfokus pada topik Organization Development atau yang dikenal sebagai OD', 'produk'),
('PJ00003', 'Seminar & Workshop\r\n', 'CEO Power Lunch\r\n', 'Event ini cocok bagi anda yang akan menyelenggarakan rapat tahunan, acara pemberian reward ke karyawan, dan juga termasuk pelatihan berkala.', 'produk'),
('PJ00004', 'In-House Training', '', 'Dengan Inhouse Training para pemilik bisnis bisa menyediakan sebuah sarana pelatihan untuk meningkatkan kinerja karyawannya tanpa harus mengeluarkan biaya berkala\r\n\r\nMateri yang akan dibawakan bisa disesuaikan, bisa dimodifikasi disesuaikan kebutuhan perusahaan. Kurikulum bisa diatur sesuai dengan kebutuhan karyawan pada saat itu juga dan nanti untuk meningkatkan kinerja perusahaan\r\n\r\nUntuk materi yang disesuaikan, anda harus menjelaskan kultur perusahaan anda, agar pelatihan tepat sasaran.', 'produk'),
('PJ00005', 'Konsultasi Bisnis', '', 'Konsutasi Bisnis cocok bagi para pemilik bisnis yang ingin mencari soluasi atas sebuah kendala atau tantanga baru dengan efektif dan efisien', 'produk'),
('PJ00006', 'Pelatihan Bisnis', '', 'Business Coaching atau Pelatihan Bisnis bisa membantu pemilik bisnis dalam menemukan solusi atas tantangan bisnis yang dialami serta strategi untuk mencapai goal yang diinginkan', 'produk'),
('PJ00007', 'STRATEGIC MANAGEMENT TRAINING', 'Penyelenggara Training Workshop', '<li> Value Networking for Strategic <br> </li>\r\n<li> Partnership <br> </li>\r\n<li> Strategic Planning for Business <br> </li>\r\n<li> Implementing Business Strategy <br> </li>\r\n<li> Business Model Canvas <br> </li>\r\n<li> Merger and Acquisition <br> </li>\r\n<li> Feasibility Study <br> </li>\r\n<li> Managing Corporate Transformation <br> </li>\r\n<li> Management For Bisnis Development <br> </li>\r\n<li> Project Management <br> </li>', 'jasa'),
('PJ00008', 'OPERATIONAL EXCELLENCE TRAINING', 'Penyelenggara Training Workshop', '<li> Blueprint for Operational Excellence <br> </li>\r\n<li> Value Stream Mapping <br> </li>\r\n<li> Design for Lean Six Sigma <br> </li>\r\n<li> Operational Excellence in Supply Chain <br> </li>\r\n<li> Management <br> </li>\r\n<li> Project Planning and COntrol <br> </li>\r\n<li> Production/Operation Planning and Control <br> </li>\r\n<li> Logistic Management <br> </li>', 'jasa'),
('PJ00009', 'MARKETING TRAINING\r\n', 'Penyelenggara Training Workshop', '<li> Marketing Strategy <br> <li>\r\n<li> Marketing Action Plan <br> </li>\r\n<li> Digital Marketing <br> </li>\r\n<li> Integrated Marketing <br> </li>\r\n<li> Marketing Management <br> </li>\r\n<li> Customer Engagement <br> </li>\r\n<li> Sales Managemen Enterpreneur <br> </li>\r\n\r\n', 'jasa'),
('PJ00010', 'HUMAN RESOURCE TRAINING\r\n', 'Penyelenggara Training Workshop', '<li> Strategic Human Resource Planning <br> </li>\r\n<li> Developing Human Resource Policy <br> </li>\r\n<li> Employee Engagement and Retention <br> </li>\r\n<li> Designing Compansation and Benefit <br> </li>\r\n<li> Learning and Developmentin Human Resources Department <br> </li>\r\n<li> Building Skills for Leaders <br> </li>\r\n<li> Preparing Corporate University <br> </li>\r\n', 'jasa'),
('PJ00011', 'GCG AND MANAGEMENT CONTROL TRAINING\r\n', 'Penyelenggara Training Workshop', '<li> Implementasi Good Corporate Governance <br> </li>\r\n<li> Advanced GCG Workshop <br> </li>\r\n<li> Management Planning and Control Systems <br> </li>\r\n<li> Internal Control over Financial Reporting <br> </li>\r\n<li> Fraud Management <br> </li>\r\n<li> Internal Audit <br> </li>\r\n<li> Risk Management and Corporate Control <br> </li>\r\n', 'jasa'),
('PJ00012', 'PENDAMPINGAN, PENELITIAN DAN SURVEI\r\n', '', '<li> IMPLEMENTASI MODEL BISNIS <br> </li>\r\n<li> PENDAMPINGAN PROYEK KERJASAMA  <br> </li>\r\n<li> PENELITIAN PELANGGAN  <br> </li>\r\n<li> SURVEI PASAR  <br> </li>\r\n<li> OLAH DATA BISNIS  <br> </li>\r\n', 'jasa');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
('11', 'Aceh'),
('12', 'Sumatera Utara'),
('13', 'Sumatera Barat'),
('14', 'Riau'),
('15', 'Jambi'),
('16', 'Sumatera Selatan'),
('17', 'Bengkulu'),
('18', 'Lampung'),
('19', 'Kepulauan Bangka Belitung'),
('21', 'Kepulauan Riau'),
('31', 'D.K.I. Jakarta'),
('32', 'Jawa Barat'),
('33', 'Jawa Tengah'),
('34', 'D.I. Yogyakarta'),
('35', 'Jawa Timur'),
('36', 'Banten'),
('51', 'Bali'),
('52', 'Nusa Tenggara Barat'),
('53', 'Nusa Tenggara Timur'),
('61', 'Kalimantan Barat'),
('62', 'Kalimantan Tengah'),
('63', 'Kalimantan Selatan'),
('64', 'Kalimantan Timur'),
('65', 'Kalimantan Utara'),
('71', 'Sulawesi Utara'),
('72', 'Sulawesi Tengah'),
('73', 'Sulawesi Selatan'),
('74', 'Sulawesi Tenggara'),
('75', 'Gorontalo'),
('76', 'Sulawesi Barat'),
('81', 'Maluku'),
('82', 'Maluku Utara'),
('91', 'Papua Barat'),
('94', 'Papua');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id_visi` varchar(10) NOT NULL,
  `isi_visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id_visi`, `isi_visi`) VALUES
('V001', 'Menjadi perusahaan training provider terdepan untuk menciptakan sumber daya manusia yang unggul, memiliki kompentensi dan kemampuan berinovasi sesuai perkembangan jaman.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `produk_jasa`
--
ALTER TABLE `produk_jasa`
  ADD PRIMARY KEY (`id_produk_jasa`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id_visi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
