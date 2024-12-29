-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2024 at 02:24 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


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

CREATE TABLE `buku` (
  `cover` varchar(255) NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `jumlah_halaman` int NOT NULL,
  `buku_deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`cover`, `id_buku`, `kategori`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `jumlah_halaman`, `buku_deskripsi`) VALUES
('654e505d7eda4.jpg', 'bis01', 'Komik', 'Bussiness is fun', 'Coach yohannes g pauly', 'Rejove', '2016-11-10', 500, '7 strategi untuk membangun bisnis'),
('654e4dc4dc0c6.jpg', 'fil01', 'Filsafat', 'Filosofi Teras', 'Henry Manampiring ', 'Kompas', '2018-11-26', 320, 'Filosofi Teras adalah sebuah buku pengantar filsafat Stoa yang dibuat khusus sebagai panduan moral anak muda. Buku ini ditulis untuk menjawab permasalahan tentang tingkat kekhawatiran yang cukup tinggi dalam skala nasional, terutama yang dialami oleh anak muda.'),
('677043da680f1.jpg', 'fil02', 'Filsafat', 'How To Be Stoic', 'Massimo Pigliucci', 'Ebury Publishing', '2017-05-04', 288, 'Kapan pun kita khawatir tentang apa yang harus kita makan, bagaimana cara mencintai, atau sekadar bagaimana menjadi bahagia, itu berarti kita tengah khawatir dengan bagaimana cara menjalani kehidupan yang baik. Dalam How to Be a Stoic, filsuf Massimo Pigliucci menawarkan Stoicism, filosofi kuno yang menginspirasi kaisar besar Marcus Aurelius, sebagai cara terbaik untuk mendapatkan kehidupan tersebut. Stoicisme adalah filsafat pragmatis yang memusatkan perhatian kita pada apa yang mungkin dan memberi kita perspektif tentang apa yang tidak penting. Dengan memahami Stoicism, kita dapat belajar menjawab pertanyaan-pertanyaan esensial: Haruskah kita menikah atau berpisah? Atau bagaimana seharusnya kita menangani uang kita di dunia yang hampir hancur oleh krisis finansial? Atau bagaimana kita dapat selamat dari sebuah tragedi? Siapapun kita, Stoicism memiliki sesuatu untuk kita - dan How to Be a Stoic adalah buku panduannya yang utama.'),
('654e48e1a1680.jpg', 'inf01', 'Informatika', 'Dasar dasar pemrogramman web', 'Sandhika Galih ', 'Inkara', '2023-10-18', 414, 'Website di era sekarang sudah menjadi kebutuhan utama yang tidak bisa diabaikan. Seluruh sektor bisnis atau edukasi dapat memanfaatkan website sebagai alat untuk promosi, tukar informasi, dan lainnya. Berdasarkan data dari World Wide Web Technology Surveys, dari seluruh website yang aktif, 88.2% menggunakan HTML dan 95.6% menggunakan CSS. Buku ini membahas tuntas mengenai HTML dan CSS sebagai fondasi dalam pembuatan website serta dilengkapi dengan Studi Kasus yang Relevan dan sesuai trend.'),
('654e4b44d4d0e.png', 'inf03', 'Informatika', 'Pemrogramman Javascript Dan NodeJS untuk teknologi web', 'Budi Raharjo', 'Informatika', '2022-09-16', 500, 'Panduan membuat sistem aplikasi berbasis web dengan javascript dan nodeJs'),
('6770489c38ee6.jpg', 'kom01', 'Komik', 'Jujutsu Kaisen Vol.01', 'Gege Akutami', 'Elex Media Komputindo', '2021-01-28', 200, 'Yuji Itadori seorang murid SMA dengan kemampuan atletik yang luar biasa. Kesehariannya adalah menjenguk kakeknya yang terbaring di rumah sakit. Suatu hari, segel &quot;objek terkutuk&quot; yang berada di sekolahnya terlepas, monster-monster pun mulai bermunculan. Yuji menyusup ke dalam gedung sekolah demi menolong senior di klubnya, akan tetapi...!?'),
('6770499e6143e.jpg', 'kom02', 'Komik', 'Chainsaw Man Vol. 01', 'Tatsuki Fujimoto', 'm&amp;c!', '2023-02-06', 192, 'Denji, pemuda super miskin yang dikejar banyak utang, bekerja sebagai pemburu iblis bersama iblis bernama Pochita. Hari-harinya sebagai manusia kasta terbawah berubah total setelah sebuah pengkhianatan brutal. Meski Denji menyimpan iblis dalam tubunya setelah insiden tersebut, dia tetap harus memburu iblis agar bisa bertahan hidup!?'),
('67704a9fe5b4d.jpg', 'kom03', 'Komik', 'Fuit Basket Vol.01', 'Natsuki Takaya', 'Yen Press', '1999-12-01', 400, 'Setelah tragedi keluarga mengubah hidupnya, Tohru Honda, seorang siswa SMA pemberani, mengambil tindakan sendiri dan pindah... ke dalam tenda! Sayangnya baginya, ia mendirikan rumah barunya di tanah pribadi milik klan Sohma yang misterius, dan tidak lama kemudian pemiliknya mengetahui rahasianya. Namun, seperti yang segera diketahui Tohru ketika keluarganya menawarkan untuk menampungnya, keluarga Sohma memiliki rahasia mereka sendiri--ketika disentuh oleh lawan jenis, mereka berubah menjadi hewan Zodiak Cina! '),
('67704bbf73fe4.jpg', 'kom04', 'Komik', 'Your Name Vol.01', 'Makoto Shinkai', 'Yen Press', '2017-05-27', 222, 'Mitsuha Miyamizu adalah seorang siswi SMA yang tinggal di kota pedesaan Itomori. Ia mendambakan kehidupan di Tokyo, karena ia sudah muak tinggal di pedesaan. Di saat yang sama, Taki Tachibana, seorang siswi SMA, tinggal di Tokyo dan memiliki minat besar pada arsitektur, dan bercita-cita menjadi perencana kota dalam waktu dekat.\r\n\r\nSuatu hari, Mitsuha bermimpi menjadi seorang anak laki-laki yang tinggal di ibu kota yang padat, sementara Taki bermimpi hidup sebagai seorang gadis di kota pedesaan Itomori. Seiring berjalannya waktu, keduanya menyadari bahwa ini bukan sekadar mimpi, tetapi mereka benar-benar bertukar tubuh saat tertidur! Kimi no Na wa. berkisah tentang Mitsuha dan Taki saat mereka mengalami hal-hal gaib. Dengan keduanya bekerja sama untuk menghadapi fenomena aneh tersebut, bagaimana hal ini akan memengaruhi kehidupan sehari-hari mereka?'),
('67704d07c246f.jpeg', 'kom05', 'Komik', 'Frieren', 'Kanehito Yamada', 'm&amp;c!', '2022-04-22', 112, 'Raja iblis telah dikalahkan, dan kelompok pahlawan yang menang kembali ke rumah sebelum bubar. Keempatnya—penyihir Frieren, pahlawan Himmel, pendeta Heiter, dan prajurit Eisen—mengenang perjalanan selama satu dekade mereka saat saat untuk mengucapkan selamat tinggal satu sama lain tiba. Tapi berlalunya waktu berbeda untuk elf, jadi Frieren menyaksikan teman-temannya perlahan-lahan meninggal satu per satu.\r\n\r\nSebelum kematiannya, Heiter berhasil memasukkan seorang magang manusia muda bernama Fern ke Frieren. Didorong oleh hasrat peri untuk mengumpulkan segudang mantra sihir, pasangan itu memulai perjalanan yang tampaknya tanpa tujuan, mengunjungi kembali tempat-tempat yang pernah dikunjungi para pahlawan dahulu kala. Sepanjang perjalanan mereka, Frieren perlahan menghadapi penyesalannya atas kesempatan yang hilang untuk membentuk ikatan yang lebih dalam dengan rekan-rekannya yang sudah meninggal.\r\n\r\nSetelah mengalahkan Demon King, Frieren, seorang elf penyihir memutuskan berpisah dengan ketiga rekannya dan berpetualang sendiri. Di dunia “baru”, Frieren menelusuri kembali kehidupan seperti apa yang mereka jalani, apa yang mereka rasakan, apa yang mereka relakan, dan pemakaman seperti apa yang menanti…'),
('67703ffaca5c9.jpeg', 'nov01', 'Novel', 'Laut Bercerita', 'Leila S. Chudori', 'Gramedia', '2017-10-23', 379, 'Diceritakan dari sudut pandang Biru Laut. Ia adalah seorang mahasiswa program studi Sastra Inggris di Universitas Gadjah Mada, Yogyakarta.\r\n\r\nLaut memiliki ketertarikan terhadap dunia sastra dan tulisan karena turun dari ayahnya yang merupakan seorang wartawan Harian Solo. Laut memiliki banyak koleksi buku sastra klasik, baik dalam bahasa Indonesia maupun bahasa Inggris.\r\n\r\nSaat itu, beberapa buku sempat dilarang peredarannya oleh pemerintah karena dianggap membahayakan, termasuk buku-buku karya penulis Pramoedya Ananta Toer.\r\n\r\nRasa penasaran Laut terhadap buku karya Pramoedya membuatnya nekat untuk memfotokopi buku-buku tersebut secara diam-diam.\r\n\r\nDi tempat fotokopi langganannya, Laut bertemu dengan Kasih Kinanti. Ia adalah senior Fakultas Politik yang memiliki minat bacaan yang sama dengan Laut.\r\n\r\nPertemuannya dengan Kinan, memperkenalkan Laut pada organisasi Winatra. Dari organisasi ini Laut semakin aktif dalam kegiatan diskusi buku bersama anggota lainnya.\r\n\r\nTidak hanya membahas buku-buku berhaluan &quot;kiri&quot;, organisasi Winatra sering melakukan kegiatan aktivis dan bahkan sempat merencanakan sebuah pergerakan untuk terbebas dari rezim baru dan melawan doktrin pemerintah.'),
('654e402a8ad79.jpg', 'nov02', 'Novel', 'Perahu Kertas', 'Dewi Lestari', 'Bentang Pustaka', '2003-11-10', 444, 'Perahu Kertas bercerita tentang dua orang yang sama-sama unik bernama Kugy dan Keenan. '),
('67704148b1480.jpg', 'nov03', 'Novel', 'The Midnight Library', 'Matt Haig', 'Canongate Books', '2020-08-13', 368, 'Novel ini menceritakan mengenai seorang gadis bernama Nora. Pada malam dia ingin mengakhiri hidupnya, tiba-tiba dia berada di &quot;The Midnight Library&quot;, yaitu perpustakaan antara hidup dan mati, dengan jutaan buku yang berisi kisah hidupnya jika dia mampu membuat keputusan yang berbeda. Di perpustakaan ini, Nora mencoba menemukan kehidupan baru yang paling dia harapkan dan dia sukai.'),
('654e456c2e275.jpg', 'nov04', 'Novel', 'Surat Kecil Untuk Tuhan', 'Agnes Danovar', 'Inandra Publised', '2008-11-10', 200, 'Surat kecil untuk Tuhan adalah sebuah buku yang diangkat dari kisah nyata perjuangan gadis remaja bernama Gita Sesa Wanda Cantika alias Keke melawan kanker ganas.'),
('6770426d5e490.jpg', 'nov05', 'Novel', 'Di Tanah Lada', 'Ziggy Zezsyazeoviennazabrizkie', 'Gramedia', '2021-04-07', 244, 'Namanya Salva. Panggilannya Ava. Namun papanya memanggil dia Saliva atau ludah karena menganggapnya tidak berguna. Ava sekeluarga pindah ke Rusun Nero setelah Kakek Kia meninggal. Kakek Kia, ayahnya Papa, pernah memberi Ava kamus sebagai hadiah ulang tahun yang ketiga. Sejak itu Ava menjadi anak yang pintar berbahasa Indonesia. Sayangnya, kebanyakan orang dewasa lebih menganggap penting anak yang pintar berbahasa Inggris. Setelah pindah ke Rusun Nero, Ava bertemu dengan anak laki-laki bernama P. Iya, namanya hanya terdiri dari satu huruf P. Dari pertemuan itulah, petualangan Ava dan P bermula hingga sampai pada akhir yang mengejutkan.'),
('654e63b7841f5.jpg', 'sai01', 'Sains', 'Cosmos', 'Karl sagan', '-', '2016-12-18', 488, 'Buku â€œKOSMOSâ€ adalah salah satu buku sains yang paling laris sepanjang sejarah. Dengan prosa jernih yang memukau, ahli astronomi Carl Sagan mengungkapkan alam semesta yang dihuni oleh suatu bentuk kehidupan yang baru saja mulai berpetualang menjelajahi luasnya antariksa.'),
('6770456bc8287.jpg', 'sai02', 'Sains', 'Sapiens', 'Yuval Noah Harari', 'Dvir Publishing House Ltd', '2021-09-02', 443, 'Sejarah manusia telah dibentuk oleh tiga revolusi besar: Revolusi Kognitif (70.000 tahun lalu), Revolusi Pertanian (10.000 tahun lalu), dan Revolusi Ilmiah (500 tahun lalu). Revolusi-revolusi ini telah memberdayakan manusia untuk melakukan sesuatu yang belum pernah dilakukan oleh bentuk kehidupan lain, yaitu menciptakan dan menghubungkan ide-ide yang tidak ada secara fisik (misalnya agama, kapitalisme, dan politik). “Mitos-mitos” yang sama ini telah memungkinkan manusia untuk menguasai dunia dan telah menempatkan umat manusia di ambang batas untuk mengatasi kekuatan seleksi alam.'),
('6770468199fa0.jpg', 'sai03', 'Sains', 'Why the Sea?', 'Yearim Dang', 'Elex Media Komputindo', '2017-04-30', 160, 'Laut yang luas dan biru memberi harapan baru bagi manusia untuk menempatinya. Memberikan hasrat bagi orang-orang untuk berwisata ke seluruh pelosok tanpa batas, karena kehidupan di laut bagaikan kampung halaman yang ditinggal ibu. Semua kehidupan berawal dari laut sejak ratusan ribu tahun yang lalu, dan berbagai jenis kehidupan ada di laut yang sangat mengagumkan. Laut merupakan sumber kehidupan, karena kehidupan berawal di laut. Selain menjadi jalur lalu lintas utama yang menghubungkan daratan, laut juga menyimpan kekayaan alam. Ikan, mineral, minyak, dan sumber pangan lain tersimpan melimpah di laut. Di dasar laut juga banyak ditemukan sumber gas. Apa saja yang ada di dalam laut, dan seberapa luasnya? Yuk, kita gali pengetahuan kita di lautan.');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`kategori`) VALUES
('Filsafat'),
('Informatika'),
('Komik'),
('Novel'),
('Sains');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `user_id` int NOT NULL,
  `id_admin` int NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_buku`, `user_id`, `id_admin`, `tgl_peminjaman`, `tgl_pengembalian`) VALUES
(2, 'fil01', 3, 1, '2024-12-28', '2025-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int NOT NULL,
  `id_peminjaman` int NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `user_id` int NOT NULL,
  `id_admin` int NOT NULL,
  `buku_kembali` date NOT NULL,
  `keterlambatan` enum('YA','TIDAK') NOT NULL,
  `denda` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_peminjaman`, `id_buku`, `user_id`, `id_admin`, `buku_kembali`, `keterlambatan`, `denda`) VALUES
(1, 1, 'bis01', 3, 1, '2024-12-26', 'TIDAK', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `role` enum('ADMIN','USER') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `nama`, `password`, `jenis_kelamin`, `no_tlp`, `tgl_pendaftaran`, `role`) VALUES
(1, 'admin@gmail.com', 'admin', 'Administrator', '1234', 'Laki laki', '081383877025', '2023-10-22', 'ADMIN'),
(2, 'admin2@gmail.com', 'admin2', 'Admin Peminjaman', '1234', 'Laki laki', '081383877025', '2023-10-22', 'ADMIN'),
(3, 'user@gmail.com', 'user', 'user', '1234', 'Laki laki', '081383877025', '2023-10-22', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`kategori`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `nisn` (`user_id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `nisn` (`user_id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori_buku` (`kategori`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `pengembalian_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
