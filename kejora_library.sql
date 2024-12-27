-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2024 at 04:41 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.26
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kejora_library`
--
-- --------------------------------------------------------
--
-- Table structure for table `buku`
--
CREATE TABLE
  `buku` (
    `cover` varchar(255) NOT NULL,
    `id_buku` varchar(20) NOT NULL,
    `kategori` varchar(255) NOT NULL,
    `judul` varchar(255) NOT NULL,
    `pengarang` varchar(255) NOT NULL,
    `penerbit` varchar(255) NOT NULL,
    `tahun_terbit` date NOT NULL,
    `jumlah_halaman` int NOT NULL,
    `buku_deskripsi` text NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `buku`
--
INSERT INTO
  `buku` (
    `cover`,
    `id_buku`,
    `kategori`,
    `judul`,
    `pengarang`,
    `penerbit`,
    `tahun_terbit`,
    `jumlah_halaman`,
    `buku_deskripsi`
  )
VALUES
  (
    '654e505d7eda4.jpg',
    'bis01',
    'Bisnis',
    'Bussiness is fun',
    'Coach yohannes g pauly',
    'Rejove',
    '2016-11-10',
    500,
    '7 strategi untuk membangun bisnis'
  ),
  (
    '654e4dc4dc0c6.jpg',
    'fil01',
    'Filsafat',
    'Filosofi Teras',
    'Henry Manampiring ',
    'Kompas',
    '2018-11-26',
    320,
    'Filosofi Teras adalah sebuah buku pengantar filsafat Stoa yang dibuat khusus sebagai panduan moral anak muda. Buku ini ditulis untuk menjawab permasalahan tentang tingkat kekhawatiran yang cukup tinggi dalam skala nasional, terutama yang dialami oleh anak muda.'
  ),
  (
    '654e48e1a1680.jpg',
    'inf01',
    'Informatika',
    'Dasar dasar pemrogramman web',
    'Sandhika Galih ',
    'Inkara',
    '2023-10-18',
    414,
    'Website di era sekarang sudah menjadi kebutuhan utama yang tidak bisa diabaikan. Seluruh sektor bisnis atau edukasi dapat memanfaatkan website sebagai alat untuk promosi, tukar informasi, dan lainnya. Berdasarkan data dari World Wide Web Technology Surveys, dari seluruh website yang aktif, 88.2% menggunakan HTML dan 95.6% menggunakan CSS. Buku ini membahas tuntas mengenai HTML dan CSS sebagai fondasi dalam pembuatan website serta dilengkapi dengan Studi Kasus yang Relevan dan sesuai trend.'
  ),
  (
    '654e4b44d4d0e.png',
    'inf03',
    'Informatika',
    'Pemrogramman Javascript Dan NodeJS untuk teknologi web',
    'Budi Raharjo',
    'Informatika',
    '2022-09-16',
    500,
    'Panduan membuat sistem aplikasi berbasis web dengan javascript dan nodeJs'
  ),
  (
    '654e402a8ad79.jpg',
    'nov02',
    'Novel',
    'Perahu Kertas',
    'Dewi Lestari',
    'Bentang Pustaka',
    '2003-11-10',
    444,
    'Perahu Kertas bercerita tentang dua orang yang sama-sama unik bernama Kugy dan Keenan. '
  ),
  (
    '654e456c2e275.jpg',
    'nov04',
    'Novel',
    'Surat Kecil Untuk Tuhan',
    'Agnes Danovar',
    'Inandra Publised',
    '2008-11-10',
    200,
    'Surat kecil untuk Tuhan adalah sebuah buku yang diangkat dari kisah nyata perjuangan gadis remaja bernama Gita Sesa Wanda Cantika alias Keke melawan kanker ganas.'
  ),
  (
    '654e63b7841f5.jpg',
    'sai01',
    'Sains',
    'Cosmos',
    'Karl sagan',
    '-',
    '2016-12-18',
    488,
    'Buku â€œKOSMOSâ€ adalah salah satu buku sains yang paling laris sepanjang sejarah. Dengan prosa jernih yang memukau, ahli astronomi Carl Sagan mengungkapkan alam semesta yang dihuni oleh suatu bentuk kehidupan yang baru saja mulai berpetualang menjelajahi luasnya antariksa.'
  );

-- --------------------------------------------------------
--
-- Table structure for table `kategori_buku`
--
CREATE TABLE
  `kategori_buku` (`kategori` varchar(255) NOT NULL) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `kategori_buku`
--
INSERT INTO
  `kategori_buku` (`kategori`)
VALUES
  ('Bisnis'),
  ('Filsafat'),
  ('Informatika'),
  ('Novel'),
  ('Sains');

-- --------------------------------------------------------
--
-- Table structure for table `peminjaman`
--
CREATE TABLE
  `peminjaman` (
    `id_peminjaman` int NOT NULL,
    `id_buku` varchar(20) NOT NULL,
    `user_id` int NOT NULL,
    `id_admin` int NOT NULL,
    `tgl_peminjaman` date NOT NULL,
    `tgl_pengembalian` date NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- --------------------------------------------------------
--
-- Table structure for table `pengembalian`
--
CREATE TABLE
  `pengembalian` (
    `id_pengembalian` int NOT NULL,
    `id_peminjaman` int NOT NULL,
    `id_buku` varchar(20) NOT NULL,
    `user_id` int NOT NULL,
    `id_admin` int NOT NULL,
    `buku_kembali` date NOT NULL,
    `keterlambatan` enum ('YA', 'TIDAK') NOT NULL,
    `denda` int NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- --------------------------------------------------------
--
-- Table structure for table `users`
--
CREATE TABLE
  `users` (
    `user_id` int NOT NULL,
    `email` varchar(100) DEFAULT NULL,
    `username` varchar(255) CHARACTER
    SET
      latin1 COLLATE latin1_swedish_ci NOT NULL,
      `nama` varchar(255) NOT NULL,
      `password` varchar(255) NOT NULL,
      `jenis_kelamin` varchar(20) NOT NULL,
      `no_tlp` varchar(15) NOT NULL,
      `tgl_pendaftaran` date NOT NULL,
      `role` enum ('ADMIN', 'USER') NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `users`
--
INSERT INTO
  `users` (
    `user_id`,
    `email`,
    `username`,
    `nama`,
    `password`,
    `jenis_kelamin`,
    `no_tlp`,
    `tgl_pendaftaran`,
    `role`
  )
VALUES
  (
    1,
    'admin@gmail.com',
    'admin',
    'Administrator',
    '1234',
    'Laki laki',
    '081383877025',
    '2023-10-22',
    'ADMIN'
  ),
  (
    2,
    'admin2@gmail.com',
    'admin2',
    'Admin Peminjaman',
    '1234',
    'Laki laki',
    '081383877025',
    '2023-10-22',
    'ADMIN'
  ),
  (
    3,
    'user@gmail.com',
    'user',
    'user',
    '1234',
    'Laki laki',
    '081383877025',
    '2023-10-22',
    'USER'
  );

--
-- Indexes for dumped tables
--
--
-- Indexes for table `buku`
--
ALTER TABLE `buku` ADD PRIMARY KEY (`id_buku`),
ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku` ADD PRIMARY KEY (`kategori`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman` ADD PRIMARY KEY (`id_peminjaman`),
ADD KEY `id_buku` (`id_buku`),
ADD KEY `nisn` (`user_id`),
ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian` ADD PRIMARY KEY (`id_pengembalian`),
ADD KEY `id_peminjaman` (`id_peminjaman`),
ADD KEY `id_buku` (`id_buku`),
ADD KEY `nisn` (`user_id`),
ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `users`
--
ALTER TABLE `users` ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman` MODIFY `id_peminjaman` int NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 1;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian` MODIFY `id_pengembalian` int NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 1;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users` MODIFY `user_id` int NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 4;

--
-- Constraints for dumped tables
--
--
-- Constraints for table `buku`
--
ALTER TABLE `buku` ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori_buku` (`kategori`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman` ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian` ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
ADD CONSTRAINT `pengembalian_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;