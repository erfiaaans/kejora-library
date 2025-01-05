-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2025 at 02:49 PM
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
('654e4dc4dc0c6.jpg', 'fil01', 'Filsafat', 'Filosofi Teras', 'Henry Manampiring ', 'Kompas', '2018-11-26', 320, 'Filosofi Teras adalah sebuah buku pengantar filsafat Stoa yang dibuat khusus sebagai panduan moral anak muda. Buku ini ditulis untuk menjawab permasalahan tentang tingkat kekhawatiran yang cukup tinggi dalam skala nasional, terutama yang dialami oleh anak muda.'),
('677043da680f1.jpg', 'fil02', 'Filsafat', 'How To Be Stoic', 'Massimo Pigliucci', 'Ebury Publishing', '2017-05-04', 288, 'Kapan pun kita khawatir tentang apa yang harus kita makan, bagaimana cara mencintai, atau sekadar bagaimana menjadi bahagia, itu berarti kita tengah khawatir dengan bagaimana cara menjalani kehidupan yang baik. Dalam How to Be a Stoic, filsuf Massimo Pigliucci menawarkan Stoicism, filosofi kuno yang menginspirasi kaisar besar Marcus Aurelius, sebagai cara terbaik untuk mendapatkan kehidupan tersebut. Stoicisme adalah filsafat pragmatis yang memusatkan perhatian kita pada apa yang mungkin dan memberi kita perspektif tentang apa yang tidak penting. Dengan memahami Stoicism, kita dapat belajar menjawab pertanyaan-pertanyaan esensial: Haruskah kita menikah atau berpisah? Atau bagaimana seharusnya kita menangani uang kita di dunia yang hampir hancur oleh krisis finansial? Atau bagaimana kita dapat selamat dari sebuah tragedi? Siapapun kita, Stoicism memiliki sesuatu untuk kita - dan How to Be a Stoic adalah buku panduannya yang utama.'),
('677946156e372.jpg', 'fil03', 'Filsafat', 'Madilog : Materialisme, Dialektika, dan Logika', 'Tan Malaka', 'Anak Hebat Indonesia', '2024-11-02', 480, 'Bila kaum muda yang telah belajar di sekolah dan menganggap dirinya terlalu tinggi dan pintar untuk melebur dengan masyarakat yang bekerja dengan cangkul dan hanya memiliki cita-cita yang sederhana maka lebih baik pendidikan itu tidak diberikan sama sekali.\r\n\r\nDi dalam karya besarnya ini, Tan Malaka mendorong bangsa Indonesia agar menguasai ilmu filsafat. Namun, bukan sembarang filsafat, melainkan filsafat yang didasarkan pada bukti nyata (ilmiah atau saintis). Ia meyakini bangsa Indonesia (dan bangsa-bangsa lain di dunia) lama terkungkung dalam penjajahan karena terbelenggu oleh pemikiran rohani bercampur mistis. Sebagai solusi, baginya sains adalah cara berpikir paling jitu, tepat, cemerlang untuk keluar dari “penjajahan” baru, yakni dominasi kapitalisme, feodalisme, dan antek-anteknya.\r\n\r\nHarus diakui, Madilog adalah karya Tan Malaka yang brilian sekaligus orisinal meski isi bahasannya mendatangkan pro dan kontra. Madilog adalah bukti kecerdasan Tan Malaka dalam meramu secara lengkap gagasannya yang revolusioner, didasarkan pada paradigma materialistis Barat, tetapi dipadukan dengan pergolakan dan pergulatan pemikirannya di dunia Timur.\r\n\r\n\r\nTahun Terbit : Cetakan Pertama, 2024\r\n\r\nPernahkah Anda terpikir betapa menariknya dunia yang terbuka lebar lewat lembaran buku? Membaca bukan hanya kegiatan rutin, tetapi juga petualangan tak terbatas ke dalam imajinasi dan pengetahuan.\r\n\r\nMembaca mengasah pikiran, membuka wawasan, dan memperkaya kosakata. Ini adalah pintu menuju dunia di luar kita yang tak terbatas.\r\n\r\nTetapkan waktu khusus untuk membaca setiap hari. Dari membaca sebelum tidur hingga menyempatkan waktu di pagi hari, kebiasaan membaca dapat dibentuk dengan konsistensi.\r\n\r\nPilih buku sesuai minat dan level literasi. Mulailah dengan buku yang sesuai dengan keinginan dan kemampuan membaca.\r\n\r\nTemukan tempat yang tenang dan nyaman untuk membaca. Lampu yang cukup, kursi yang nyaman, dan sedikit musik pelataran bisa menciptakan pengalaman membaca yang lebih baik.\r\n\r\nBuat catatan atau jurnal tentang buku yang telah Anda baca. Tuliskan pemikiran, kesan, dan pelajaran yang Anda dapatkan.'),
('677946270e826.jpg', 'fil04', 'Filsafat', 'Marcus Aurelius Berpikir Stoic ala Kaisar Roma', 'Donald Robertson', 'Bentang Pustaka', '2024-12-20', 312, 'Marcus Aurelius dikenal sebagai Kaisar Romawi sekaligus filsuf Stoa termasyhur di dunia. The Meditations, jurnal pribadinya, hingga kini masih menjadi salah satu buku klasik spiritual penolong hidup yang paling dicintai sepanjang masa. Donald Robertson, psikoterapis kognitif, membedah kisah hidup Marcus untuk menunjukkan bagaimana ketertarikannya terhadap Stoik bermula. Buku ini juga mengungkap setiap peristiwa yang menjadi latar belakang Marcus kala menulis The Meditations.\r\n\r\nLebih jauh lagi, Robertson mengeksplorasi cara Marcus menggunakan doktrin filosofis dan praktik terapeutik untuk membangun ketahanan emosional dan menanggung kesulitan yang luar biasa berat. Tak hanya menyajikan kisah sejarah, buku ini juga memberikan serangkaian panduan keseharian yang bisa kita praktikkan di dunia modern.\r\n\r\n\r\nTahun Terbit : Cetakan Pertama, Desember 2024\r\n\r\nPernahkah Anda terpikir betapa menariknya dunia yang terbuka lebar lewat lembaran buku? Membaca bukan hanya kegiatan rutin, tetapi juga petualangan tak terbatas ke dalam imajinasi dan pengetahuan.\r\n\r\nMembaca mengasah pikiran, membuka wawasan, dan memperkaya kosakata. Ini adalah pintu menuju dunia di luar kita yang tak terbatas.\r\n\r\nTetapkan waktu khusus untuk membaca setiap hari. Dari membaca sebelum tidur hingga menyempatkan waktu di pagi hari, kebiasaan membaca dapat dibentuk dengan konsistensi.\r\n\r\nPilih buku sesuai minat dan level literasi. Mulailah dengan buku yang sesuai dengan keinginan dan kemampuan membaca.\r\n\r\nTemukan tempat yang tenang dan nyaman untuk membaca. Lampu yang cukup, kursi yang nyaman, dan sedikit musik pelataran bisa menciptakan pengalaman membaca yang lebih baik.\r\n\r\nBuat catatan atau jurnal tentang buku yang telah Anda baca. Tuliskan pemikiran, kesan, dan pelajaran yang Anda dapatkan.'),
('67794632f251c.jpg', 'fil05', 'Filsafat', 'Zarathustra', 'Friedrich Nietzsche', 'Cakrawala Sketsa Mandiri Cv', '2024-08-24', 260, '&quot;Jangan pernah menguburkan kepalamu dalam pasir surgawi, tapi bawalah dengan bebas, sebuah kepala membumi yang menciptakan makna bagi bumi!&quot;\r\n(Friedrich Nietzsche dalam Sabda Zarathustra)\r\n\r\nZarathustra adalah karya klasik Friedrich Nietzsche, yang berisi esai panjang. Mengisahkan seorang tokoh bernama Zarathustra dalam pengembaraannya mencari &quot;manusia unggul&quot;. Pencarian ini dilatarbelakangi oleh kemunduran religiusitas, moralitas, dan intelektualitas manusia-manusia lama.\r\n\r\nZarathustra berjalan dengan sabdanya. Sabda Zarathustra bercerita banyak hal mengenai kehidupan; cinta, nilai-nilai kebajikan, persahabatan, kegembiraan, dan kesedihan. Nietzsche juga berbicara tentang budaya, politik, dan negara, di mana banyak &#039;dosa&#039; besar di dalamnya.\r\n\r\nNietzsche adalah pemikir Barat terbesar pada abad ke-19 yang karyanya masih relevan hingga saat ini. Kendati ia dihujat sebagai orang gila yang telah memproklamirkan dirinya sebagai insan yang tak bertuhan, dan bahkan seolah-olah menuhankan dirinya. Namun sejatinya Nietzsche mengajarkan kasih sayang, mengamalkan cinta secara lebih manusiawi dan lebih nyata. Baginya, manusia bebas memiliki visi misi, memegang teguh tujuan dan berkehendak kuat dalam meraihnya.\r\n\r\nTahun Terbit : Cetakan Kedua, 2024\r\n\r\nPernahkah Anda terpikir betapa menariknya dunia yang terbuka lebar lewat lembaran buku? Membaca bukan hanya kegiatan rutin, tetapi juga petualangan tak terbatas ke dalam imajinasi dan pengetahuan. Membaca mengasah pikiran, membuka wawasan, dan memperkaya kosakata. Ini adalah pintu menuju dunia di luar kita yang tak terbatas. Tetapkan waktu khusus untuk membaca setiap hari.\r\n\r\nDari membaca sebelum tidur hingga menyempatkan waktu di pagi hari, kebiasaan membaca dapat dibentuk dengan konsistensi. Pilih buku sesuai minat dan level literasi. Mulailah dengan buku yang sesuai dengan keinginan dan kemampuan membaca. Temukan tempat yang tenang dan nyaman untuk membaca. Lampu yang cukup, kursi yang nyaman, dan sedikit musik pelataran bisa menciptakan pengalaman membaca yang lebih baik. Bergabunglah dalam kelompok membaca atau forum literasi. Diskusikan buku yang Anda baca dan dapatkan rekomendasi dari sesama pembaca. Buat catatan atau jurnal tentang buku yang telah Anda baca.\r\n\r\nTuliskan pemikiran, kesan, dan pelajaran yang Anda dapatkan. Libatkan keluarga dalam kegiatan membaca. Bacakan cerita untuk anak-anak atau ajak mereka membaca bersama. Ini menciptakan ikatan keluarga yang erat melalui kegiatan positif. Jangan ragu untuk menjelajahi genre baru. Terkadang, kejutan terbaik datang dari buku yang tidak pernah Anda bayangkan akan Anda nikmati. Manfaatkan teknologi dengan membaca buku digital atau bergabung dalam komunitas literasi online. Ini membuka peluang untuk terhubung dengan pembaca dari seluruh dunia.'),
('654e48e1a1680.jpg', 'inf01', 'Informatika', 'Dasar dasar pemrogramman web', 'Sandhika Galih ', 'Inkara', '2023-10-18', 414, 'Website di era sekarang sudah menjadi kebutuhan utama yang tidak bisa diabaikan. Seluruh sektor bisnis atau edukasi dapat memanfaatkan website sebagai alat untuk promosi, tukar informasi, dan lainnya. Berdasarkan data dari World Wide Web Technology Surveys, dari seluruh website yang aktif, 88.2% menggunakan HTML dan 95.6% menggunakan CSS. Buku ini membahas tuntas mengenai HTML dan CSS sebagai fondasi dalam pembuatan website serta dilengkapi dengan Studi Kasus yang Relevan dan sesuai trend.'),
('677946498dc24.jpg', 'inf02', 'Informatika', 'Python For Machine Learning (Edisi Revisi)', 'Teguh Wahyono', 'Gava Media', '2021-12-18', 156, 'Machine learning menjadi salah satu hal yang banyak dibicarakan seiring dengan perkembangan ilmu data science. Machine learning sendiri merupakan bagian dari kecerdasan buatan atau artificial intelligence, di mana tujuannya adalah membuat mesin dapat berpikir layaknya manusia.\r\nMachine learning merupakan bagian dari artificial intelligence (AI) dan juga ilmu komputer, di mana berfokus pada pemanfaatan data dan penggunaan algoritma agar dapat meniru cara berpikir manusia, dari mulai proses pembelajaran hingga secara bertahap meningkatkan akurasinya. Machine learning menjadi komponen penting dalam perkembangan data science. Melalui penggunaan metode statistik, algoritma dilatih untuk membuat klasifikasi atau prediksi, mengungkap wawasan utama dalam proyek penambangan data. Kemampuan akan machine learning ini kemudian menambah wawasan akan data sehingga proses pengambilan keputusan menjadi lebih akurat.\r\nArtificial intelligence (AI) dan machine learning saat ini kembali memasuki fase booming setelah beberapa dekade mengalami pasang surut. Kecerdasan Buatan kembali digandrungi, dimana penerapannya dilakukan secara masif pada aplikasi-aplikasi bisnis dan social media jaman now seperti Facebook, Twitter, Google, Amazon, dan bahkan berbagai aplikasi besar dari Indonesia seperti Go-jek, Tokopedia, dan sebagainya.\r\n\r\nDari sisi bahasa pemrograman, Python menjadi salah satu pilihan terbaik untuk mengimplementasikan machine learning, mengingat kelengkapan library yang dibutuhkan untuk metode tersebut. Sejak di-release pada tahun 1991 bahasa pemrograman inipun berkembang pesat dan bahkan menjadi 3 besar most wanted bahasa pemrograman bersama Java dan C.'),
('654e4b44d4d0e.png', 'inf03', 'Informatika', 'Pemrogramman Javascript Dan NodeJS untuk teknologi web', 'Budi Raharjo', 'Informatika', '2022-09-16', 500, 'Panduan membuat sistem aplikasi berbasis web dengan javascript dan nodeJs'),
('6779465e85458.jpg', 'inf04', 'Informatika', 'Pemrograman Berorientasi Objek Menggunakan Java', 'Adam Mukharil Bachtiar', 'Informatika', '2018-08-09', 262, 'Java merupakan salah satu bahasa pemrograman yang paling populer saat ini. Java sendiri dipelopori oleh James Gosling yang merupakan engineer di Sun Microsystem. Java mulai dibangun pada tahun 1991 dan dirilis pada tahun 1995, yaitu 4 tahun setelah project Java diinisiasi. Per Januari 2018, Java sudah mencapai versi Java SE9.\r\n\r\nBuku “Pemrograman Berorientasi Objek Menggunakan Java” ini ditujukan untuk pengembang perangkat lunak pemula, mahasiswa, dosen, atau siapapun yang ingin mempelajari tentang pemrograman yang berorientasi objek dengan menggunakan Java.\r\nAdapun pembahasan di dalam buku ini meliputi:\r\n- Halo Java\r\n- Struktur Kontrol, Method, dan Struktur Data Sederhana\r\n- Pemrograman Berorientasi Objek\r\n- Implementasi Pemrograman Berorientasi Objek\r\n- Generic Programming dan Collection\r\n- Relasi Pada Diagram Kelas dan juga Penerapannya\r\n- Exception dan Error Handling\r\n- Concurrent Programming\r\n- Ekspresi Lambda\r\n- Membuat Program yang GUI dengan Menggunakan JAVAFX\r\n\r\nTidak hanya itu saja, dalam buku ini juga telah dilengkapi dengan deret contoh-contoh kasus yang menarik dan juga pengimplementasian kelas diagram menjadi baris kode, ini bertujuan agar para pembaca menjadi lebih mudah dalam memahami materi yang telah disampaikan di dalam buku ini.'),
('677946775efea.jpg', 'inf05', 'Informatika', 'Aplikasi Database Dengan Sqlite Dan Php 7', 'Betha Sidik', 'Informatika', '2020-11-12', 308, 'Aplikasi Database Dengan Sqlite Dan Php 7'),
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
('677a886da36c7.jpg', 'nov06', 'Novel', 'Funiculi Funicula (Before the Coffee Gets Cold)', 'Toshikazu Kawaguchi', 'Gramedia Pustaka Utama', '2021-04-21', 224, 'Kafe tua yang berada di gang kecil Tokyo terletak di bawah gedung lain, tidak butuh pendingin untuk mendinginkan Kafe tersebut. Tidak begitu ramai, namun terkenal karena bisa membawa pengunjungnya menjelajahi waktu. Keajaiban kafe itu menarik seorang wanita yang ingin memutar waktu untuk berbaikan dengan kekasihnya, seorang perawat yang ingin membaca surat yang tak sempat diberikan suaminya yang sakit, seorang kakak yang ingin menemui adiknya untuk terakhir kali, dan seorang ibu yang ingin bertemu dengan anak yang mungkin takkan pernah dikenalnya. Namun ada banyak peraturan yang harus diingat. Satu, mereka harus tetap duduk di kursi yang telah ditentukan. Dua, apapun yang mereka lakukan di masa yang didatangi takkan mengubah kenyataan di masa kini. Tiga, mereka harus menghabiskan kopi khusus yang disajikan sebelum kopi itu dingin. Rentetan peraturan lainnya tak menghentikan orang-orang itu untuk menjelajahi waktu. Akan tetapi, jika kepergian mereka tak mengubah satu hal pun di masa kini, layakkah semua itu dijalani?'),
('654e63b7841f5.jpg', 'sai01', 'Sains', 'Cosmos', 'Karl sagan', '-', '2016-12-18', 488, 'Buku â€œKOSMOSâ€ adalah salah satu buku sains yang paling laris sepanjang sejarah. Dengan prosa jernih yang memukau, ahli astronomi Carl Sagan mengungkapkan alam semesta yang dihuni oleh suatu bentuk kehidupan yang baru saja mulai berpetualang menjelajahi luasnya antariksa.'),
('6770456bc8287.jpg', 'sai02', 'Sains', 'Sapiens', 'Yuval Noah Harari', 'Dvir Publishing House Ltd', '2021-09-02', 443, 'Sejarah manusia telah dibentuk oleh tiga revolusi besar: Revolusi Kognitif (70.000 tahun lalu), Revolusi Pertanian (10.000 tahun lalu), dan Revolusi Ilmiah (500 tahun lalu). Revolusi-revolusi ini telah memberdayakan manusia untuk melakukan sesuatu yang belum pernah dilakukan oleh bentuk kehidupan lain, yaitu menciptakan dan menghubungkan ide-ide yang tidak ada secara fisik (misalnya agama, kapitalisme, dan politik). “Mitos-mitos” yang sama ini telah memungkinkan manusia untuk menguasai dunia dan telah menempatkan umat manusia di ambang batas untuk mengatasi kekuatan seleksi alam.'),
('6770468199fa0.jpg', 'sai03', 'Sains', 'Why the Sea?', 'Yearim Dang', 'Elex Media Komputindo', '2017-04-30', 160, 'Laut yang luas dan biru memberi harapan baru bagi manusia untuk menempatinya. Memberikan hasrat bagi orang-orang untuk berwisata ke seluruh pelosok tanpa batas, karena kehidupan di laut bagaikan kampung halaman yang ditinggal ibu. Semua kehidupan berawal dari laut sejak ratusan ribu tahun yang lalu, dan berbagai jenis kehidupan ada di laut yang sangat mengagumkan. Laut merupakan sumber kehidupan, karena kehidupan berawal di laut. Selain menjadi jalur lalu lintas utama yang menghubungkan daratan, laut juga menyimpan kekayaan alam. Ikan, mineral, minyak, dan sumber pangan lain tersimpan melimpah di laut. Di dasar laut juga banyak ditemukan sumber gas. Apa saja yang ada di dalam laut, dan seberapa luasnya? Yuk, kita gali pengetahuan kita di lautan.'),
('6779469c67906.jpg', 'sai04', 'Sains', 'Why Series: The Universe ', 'Kwang Woong Lee', 'Elex Media Komputindo', '2008-12-31', 120, 'Alam semesta adalah seluruh ruang waktu kontinu tempat kita berada, dengan energi dan materi yang dimilikinya. Usaha untuk memahami pengertian alam semesta dalam lingkup ini pada skala terbesar yang memungkinkan, ada pada kosmologi, ilmu pengetahuan yang berkembang dari fisika dan astronomi.\r\nMenurut definisi dan pemahaman kita, Semesta terdiri dari tiga unsur: ruang dan waktu, yang dikenal sebagai ruang-waktu atau vakum, materi dan berbagai bentuk energi dan momentum menempati ruang-waktu dan hukum-hukum alam yang mengatur semesta raya. Alam semesta yang terlihat seperti planet, bintang, galaksi, semua itu terbuat dari proton, neutron, dan elektron digabung menjadi atom. Penemuan abad ke-20 menemukan bahwa materi biasa atau barion, kurang dari 5 persen massa alam semesta.\r\nSINOPSIS\r\nTahukah kalian, mengapa bila siang tiba matahari menyinari dunia dan bila malam datang, binatang-binatang menyulam langit malam hari dengan indahnya.\r\nSeberapa besar dan luaskah alam semesta, berapakah umur alam semesta, dengan aturan apa seluruh benda-benda di langit bergerak, dan lain-lain. Berkat perkembangan ilmu pengetahuan yang begitu pesatnya, teka-teki mengenai alam semesta satu persatu mulai terkuak. Saat ini, manusia telah mengirimkan pesawat luar angkasa ke berbagai planet. Berwisata ke Bulan sampai dengan mengumpulkan berbagai material luar angkasa dan menganalisisnya. Kini alam semesta bukan lagi dunia mimpi bagi kita.'),
('677946aecbdf5.jpg', 'sai05', 'Sains', 'Why Science In The Living', 'Lee Doowon', 'Elex Media Komputindo', '2011-07-18', 120, 'Mereka yang tertarik pada pengetahuan sains, percaya bahwa kemajuan sains akan bermanfaat bagi generasi mendatang (59 persen); sains akan menyelesaikan masalah utama dunia (42 persen); dan sains akan membantu mereka hidup lebih lama dan lebih sehat (40 persen). State of Science Index mengambil kesimpulan dan saran untuk terus mengaitkan sains terhadap dampak positifnya akan kemanusiaan, sehingga dapat mendorong minat dan dukungan untuk perkembangan sains.\r\nSashidharan Sridharan, President Director 3M Indonesia, menyebutkan pentingnya Sains dalam kehidupan. “Ketika kita berpikir tentang terobosan bagaimana mengkomunikasi sains yang lebih baik, potensi serta dampak positifnya, kita juga perlu fokus pada manfaat sains bagi umat manusia dan menunjukkan bagaimana ilmu pengetahuan dan teknologi dapat meningkatkan kualitas kehidupan. Sains menjanjikan kita dapat mengatasi tantangan global yang paling sulit – dan dengan melakukan itu, kita menciptakan masa depan yang lebih cerah, lebih produktif, dan lebih sehat untuk generasi berikutnya.\r\nSebenarnya, benda-benda yang kita pakai dalam kehidupan sehari-hari penuh dengan ilmu pengetahuan. Kamera digital, microwave, vacuum cleaner, mesin cuci, setrika, handphone, dan lainnya. Ilmu pengetahuan selalu ada di sekitar kita. Dengan kata lain, kita dapat memahami dunia dengan ilmu pengetahuan. Ilmu pengetahuan bermula dari rasa ingin tahu atas segala permasalahan yang ditemui dalam kehidupan sehari-hari. Kita dapat mengembangkan ilmu dengan mengetahui prinsip dasarnya. Di masa depan, ilmu pengetahuan akan lebih berkembang dan kalianlah yang akan menjadi pemeran utamanya!');

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
(2, 'fil01', 3, 1, '2024-12-28', '2025-01-04'),
(3, 'fil01', 4, 2, '2024-12-29', '2025-01-05'),
(4, 'kom04', 6, 2, '2025-01-04', '2025-01-11'),
(6, 'fil01', 7, 2, '2025-01-04', '2025-01-11'),
(9, 'fil01', 5, 2, '2025-01-05', '2025-01-12');

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
(2, 5, 'fil04', 5, 2, '2025-01-04', 'TIDAK', 0);

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
(2, 'admin2@gmail.com', 'Edy', 'Edy Bambang', '1234', 'Laki laki', '081383877025', '2023-10-22', 'ADMIN'),
(3, 'user@gmail.com', 'user', 'user', '1234', 'Laki laki', '081383877025', '2023-10-22', 'USER'),
(4, 'erfianadia05@gmail.com', 'erfia', 'erfia nadia safari', 'jimin', 'Perempuan', '081615149500', '2024-12-29', 'USER'),
(5, 'yoongi@gmail.com', 'yoongi_ive', 'min yoongi', 'minholy', 'Laki laki', '0987654234', '2025-01-04', 'USER'),
(6, 'luckyvicky@gmail.com', 'izgone_wonyoung', 'jang wonyoung', 'panorama', 'Perempuan', '027363826', '2025-01-04', 'USER'),
(7, 'chaechae@yahoo.com', 'eunchaewon', 'eunchae', 'antifragile', 'Perempuan', '0987336221', '2025-01-04', 'USER'),
(8, 'ryujinstayc@gmail.com', 'ryujin', 'shin ryujin', 'tetehbandung', 'Perempuan', '087264531', '2025-01-05', 'USER'),
(9, 'orangjelek@gmail.com', 'jelek', 'orang jelek', '1234', 'Laki laki', '085143422807', '2025-01-05', 'USER');

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
  MODIFY `id_peminjaman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
