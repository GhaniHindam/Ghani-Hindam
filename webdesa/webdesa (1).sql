-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 06:47 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penulis`, `isi`) VALUES
(1, 'Profil Desa', 'Dwiki Bayu', '\r\nSejarah Desa : <br>Pembentukan Desa Masaran sejauh ini belum dapat diungkap secara pasti, namun sebenarnya Desa Masaran sudah dikenal sejak sebelum tahun 1800-an sebelum pecahnya perang Diponegoro. Masyarakatnya dikenal Heroik dan memiliki patriotisme yang tinggi, hal ini dapat ditelusuri lewat catatan sejarah berdirinya Kabupaten Banjarnegara, bahwa antara tahun 1825 – 1830 masyarakat Masaran telah ikut memperkuat pasukan Diponegoro diwilayah Banjarnegara yang dipimpin oleh R Ng. Mangun Yudha II Bupati Banjar Watulembu ke 2 (Banjar Watulembu sekarang bernama Banjarnegara)\r\n<br>\r\nKeadaan Geografis : <br>Desa Masaran terletak di pegunungan Serayu selatan pada ketinggian 149 dari permukaan laut dan di jalur tengah sudut timur laut wilayah Kecamatan Bawang, dengan batas-batas :<br>\r\nsebelah Utara   : Desa Gemuruh Kecamatan Bawang<br>\r\nsebelah timur   : Desa Gentansari Kecamatan Pagedongan<br>\r\nsebelah Selatan : Desa Gentansari Kecamatan Pagedongan<br>\r\nsebelah Barat   : Desa Serang dan Desa Mantrianom Kec. Bawang<br>\r\n\r\na. Luas wilayah<br>\r\n  Desa Masaran memiliki luas wilayah  321,255 Ha terdiri dari :<br>\r\n1.persawahan   : 82,089 Ha<br>\r\n2.Lahan Kering : 119,043 Ha<br>\r\n3.Bangunan     : 21,055 Ha<br>\r\n4.Lain-Lain    : 29,871 Ha<br>\r\nb. Adiministratif<br>\r\nSecara administratif Desa Masaran terdiri dari 4 (empat) RW/Dusun, 15 RT dan 18 Pedukuhan.\r\n<br>\r\nPemerintahan<br>\r\nDengan diterbitkannya Undang-Undang  06 Tahun 2014 tentang Desa, maka penyelenggara pemerintahan desa Masaran Terdiri dari 3 (tiga) komponen yaitu Pemerintah Desa yang terdiri dari Kepala Desa dan Perangkat Desa, Badan Permusyawaratan Desa ( BPD) merupakan lembaga perwujudan demokrasi dalam penyelenggaraan pemerintahan desa, dan LP3M merupakan lembaga kemasyarakatan sebagai mitra pemerintah desa dalam pemberdayaan masyarakat.'),
(8, 'Galeri', 'Dwiki Bayu', '  <style media=\"screen\"> .kertas{   padding:30px;   background:white; }  .cover{   padding:50px; }  .video{   padding-top:30px;   padding-left: 25%; }  .subjudul{   padding-top: 10px; }      </style>     <div class=\"cover\">       <div class=\"kertas\">         <h3>1. Lomba Agustusan Makan Krupuk</h3>         <div class=\"video\">           <video controls height=\"400px\" width=\"400px\">             <source src=\"krupuk.mp4\" type=\"video/mp4\">           </video>         </div>         <div class=\"subjudul\">           <h3>2. Lomba Agustusan Dance Sajojo</h3>         </div>         <div class=\"video\">           <video controls width=\"400\" height=\"400\">             <source src=\"sajojo.mp4\" type=\"video/mp4\">           </video>         </div>         <div class=\"subjudul\">           <h3>3. Lomba Agustusan Narik Mobil</h3>         </div>         <div class=\"video\">           <img src=\"mobil.jpg\" width=\"400px\" height=\"250px\">         </div>         <div class=\"subjudul\">           <h3>4. Peksi Moi</h3>         </div>         <div class=\"video\">           <img src=\"moi.jpg\" width=\"400px\" height=\"250px\">         </div>       </div>     </div>'),
(9, 'Profil Penulis', 'Dwiki Bayu', '  <img src=\"20180114_134929A_snap.jpg\" alt=\"\" style=\"width:250px; display:inine; height:200px;  padding-left:40%;\"><br><br>         Nama &nbsp: Dwiki Bayu Ardiansyah<br>         Kelas&nbsp : X RPL 1<br>         No &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 08<br><br><br>         Hai perkenalkan nama saya Dwiki Bayu Ardiansyah Saya Siswa SMKN 1 Bawang sekolah yang           sangat menakjubkan. Baiklah saya akan menceritakan pengalaman saya selama saya berada di           SMKN 1 BAWANG. Selama saya di smkn 1 bawang saya mendapatkan banyak teman baru yang tentu           saja memiliki siifat-sifat yang berbeda. Dan saya juga bertemu dengan kawan lama dan juga           guru-guru baru yang luar biasa. Selama saya di SMKN 1 BAWANG saya mendapat banyak pengalaman           yang menakjubkan dan pengalaman yang akan sulit hilang menurut saya yaitu saat perjusa, karena           disana saya mendapat banyak ilmu saya juga mendapat beberapa kata motifasi yang memotifasi           saya untuk menjadi lebih baik'),
(11, 'Wawancara', 'Dwiki Bayu', '<style> .audio{   padding-left: 40%;   display: inline-block;   padding-top: 30px; } </style> Wawancara kepada bapak lurah tentang desa masaran<br><br> <div class=\"audio\">           <audio controls loop>             <source src=\"REC001.mp3\" type=\"audio/mp3\">           </audio> </div> <br> Just Learn');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`ID`, `Nama`, `Email`, `Password`) VALUES
(19, 'admin', 'admin', 'admin'),
(20, 'jibol', 'jibol@gmail.com', '1234'),
(22, 'jibol', 'jibol@gmail.com', '1234'),
(23, 'Faqih', 'Faqih@gmail.com', 'faqih');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
