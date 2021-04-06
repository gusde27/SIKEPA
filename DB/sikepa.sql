-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 11:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikepa`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(100) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `deskripsi`, `gambar`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Selamat Hari Raya Nyepi', 'KOMPAS.com – Tahun ini, Hari Raya Nyepi berlangsung pada Minggu (14/3/2021). Jika menilik sejumlah artikel di internet, banyak ucapan Hari Raya Nyepi yang menggunakan Bahasa Bali. Namun, Guru Besar Pariwisata Universitas Udayana I Gede Pitana menyarankan agar orang-orang tetap menggunakan Bahasa Indonesia saat memberikan ucapan Hari Raya Nyepi. Baca juga: 4 Rangkaian Hari Raya Nyepi Beserta Makna di Baliknya “Paling bagus mengucapkan dengan Bahasa Indonesia. Kenapa? Untuk mengurangi kesalahan pengertian,” ujarnya kepada Kompas.com, Selasa (9/3/2021). Saat mengirimkan ucapan Hari Raya Nyepi dalam Bahasa Bali, belum tentu penulisannya benar, atau pengirim benar-benar paham artinya. Baca juga: Perang Api, Tradisi Turun-Temurun Umat Hindu Lombok Sambut Nyepi “Nanti jadi ada masalah di pihak penerima. Jadi, penggunaan Bahasa Indonesia untuk mengurangi kesalahan yang tidak perlu,” kata Pitana. Dalam ucapan Hari Raya Nyepi, Pitana mengatakan bahwa komponennya terdiri dari pengucapan selamat dan harapan. Sebagai contoh, kamu bisa menulisnya sebagai berikut: “Selamat Hari Raya Nyepi. Semoga kebaikan-kebaikan akan terjadi di masa yang akan datang. Semoga perayaan ini membawa hal yang baik, dan semoga makna Hari Raya Nyepi dapat dilaksanakan dalam kehidupan sehari-hari.” Kapan waktu yang tepat untuk mengirim ucapan Hari Raya Nyepi? Dalam melaksanakan Nyepi, ada empat hal yang dilarang yang bernama Catur Brata Penyepian. Adapun, empat larangan tersebut adalah amati karya, amati lelungan, amati lelanguan, dan amati geni. Artinya adalah tidak bekerja, tidak bepergian, tidak bersenang-senang, dan tidak menyalakan api. Untuk amati lelanguan, Pitana mengatakan bahwa umat Hindu tidak boleh menghibur atau membuat hiburan. Baca juga: Bagaimana Perayaan Nyepi di Tengah Virus Corona? “Tidak boleh menghibur atau membuat hiburan seperti nonton televisi, video, bermain game, menyalakan musik, bernyanyi, dan sebagainya,” kata Pitana dalam wawancara pada Selasa (24/3/2020). Oleh karena itu, ada beberapa orang yang tidak menyalakan gawai saat Hari Raya Nyepi. Agar ucapanmu sampai dan dibaca oleh orang yang dituju, kamu bisa mengirimnya sebelum, saat, atau sesudah Nyepi. Namun jika kamu mengirim ucapan Hari Raya Nyepi saat perayaan sedang berlangsung, jangan heran jika pesanmu belum dibalas atau belum dikirim.\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"Ucapan Hari Raya Nyepi, Pakai Bahasa Indonesia atau Bahasa Bali?\", Klik untuk baca: https://travel.kompas.com/read/2021/03/13/150700727/ucapan-hari-raya-nyepi-pakai-bahasa-indonesia-atau-bahasa-bali-.\r\nPenulis : Nabilla Ramadhian\r\nEditor : Ni Luh Made Pertiwi F.\r\n\r\nDownload aplikasi Kompas.com untuk akses berita lebih mudah dan cepat:\r\nAndroid: https://bit.ly/3g85pkA\r\niOS: https://apple.co/3hXWJ0L', 'adads.jpg', 'selamat-hari-raya-nyepi', '2021-03-19 10:39:26', '2021-03-19 12:22:39'),
(3, 'Sepak Terjang Bapak Sampah Desa Korleko untuk Kegemilangan Desa', '\"Bumi ini adalah titipan Allah. Karena  titipan, maka harus dijaga kestabilannya dengan menjaga lingkungan\" Ucap Selpin Riawan di hadapan puluhan anak SD, sesekali melantangkan \"zero waste...zero waste... zero waste\" bersambut teriakan anak- anak dengan jari- jari tangan membentuk angka nol dan hurup W.  Itulah gambaran suasana  sosialisasi Zero Waste oleh Selpin Riawan di Sekolah Dasar Islam Korleko, Rabu, (02/10/19).\r\n\r\nPergantian pucuk pimpinan NTB membawa arah baru, penyempurnaan kemajuan yang dilakukan Gubernur sebelumnya, Dr. M. Zainul Majid, atau akrab disapa publik dengan  Tuan Guru Bajang. Melalui Tagline terkenal, \"NTB Gemilang\" semua langkah digerakkan pemerintah ZulRohmi, untuk mewujudkan kegemilangan NTB di banyak sektor: wisata, pendidikan, kesehatan, kebersihan lingkungan, industrialisasi, dan lain- lain.\r\n\r\nSejalan dengan program pemerintah daerah dan pusat, hajatan baik ini disambut baik seorang pemuda desa,asal Korleko, Selpin Riawan. Bergerak dari lingkungan dan desanya, ia mulai berusaha dan berjuang, menyongsong kegemilangan NTB dari lingkup terkecil. \r\n\r\nTentu, detak- pacu pergerakannya tidak mudah, apalagi berhadapan dengan masyarakat, sindiran, sikap sinis, nyinyiran, sudah banyak didapat.\r\n\r\nPencicip  Pendidikan Kota Yang Tinggalkan Gengsi\r\n\r\n Sebelum fokus bergerak di desa, Selpin Riawan dikenal sebagai lulusan S2 di salah satu Universitas di Jakarta. Usai S2, ia sempat bekerja di Kantor BAPPEDA Provinsi NTB. \r\n\r\nIa juga mengajar di salah satu kampus di Lombok Timur. Pekerjaan ini membuatnya tidak memiliki banyak waktu di desa, karena harus masuk kantor di Mataram dan mengajar di Pancor.\r\n\r\nJalan hidup cepat sekali berubah, disebabkan alasan tertentu, ia berhenti dari BAPPEDA, pun begitu, ia diberhentikan dari dunia dosen. Benar kata mutiara, di balik semua kejadian selalu ada hikmahnya. Kini ia fokus bergerak membangun desa tercinta.\r\n\r\nIa benar- benar mulai dari bawah, gerakan penanggulangan sampah menjadi hal pertama yang dilakukan. Hal ini menimbulkan banyak ujaran sinis, sindiran dan tekanan. Baik dari masyarakat bahkan keluarga. \r\n\r\nTidak mudah, namun ia tetap bergerak, mengedukasi mulai dari lingkungan sekitar. \"melawan gengsi\" dengan  gelar pendidikan kota dan dosen yang telah diraih menjadi tantangan awal yang harus dirobohkan.\r\n\r\nKemaslahatan Umat Menjadi Titik Gerak', 'Sepak Terjang Bapak Sampah Desa Korleko untuk Kegemilangan Desa.jpg', 'sepak-terjang-bapak-sampah-desa-korleko-untuk-kegemilangan-desa', '2021-03-19 23:27:44', '2021-03-19 23:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(100) NOT NULL,
  `pertanyaan` varchar(1000) NOT NULL,
  `jawaban` varchar(1000) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(2, 'Apa itu SIKEPA?', 'Sistem Informasi Kelurahan Pagesangan', '2021-03-30 07:59:05', '2021-03-30 07:59:05'),
(3, 'Apa Manfaat SIKEPA?', 'Membantu Masyarat mengetahui profil maupun Pelayanan dan berita terbaru di kelurahan pagesangan\r\n', '2021-03-30 07:59:45', '2021-03-30 07:59:45'),
(4, 'Keunggulan SIKEPA?', 'Bisa diakses disegala macam teknologi informasi (Website)', '2021-03-30 08:00:50', '2021-03-30 08:00:50'),
(5, 'Siapa Pembuatan SIKEPA?', 'I Gede Bagus WIrawan', '2021-03-30 08:01:24', '2021-03-30 08:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(3, '1616988453_ccd837e98482554d8a75.png', '2021-03-28 22:27:33', '2021-03-28 22:27:33'),
(4, '1616989408_0aa77d63cefa728f2b11.jpg', '2021-03-28 22:43:28', '2021-03-28 22:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id` int(100) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id`, `misi`, `created_at`, `updated_at`) VALUES
(1, 'Mewujudkan masyarakat Kelurahan Pagesangan sebagai Kelurahan yang merupakan nama Ibu kota Mataram dan Nama Ibu Kota Provinsi NTB sebagai kota yang indah (MISI No 1).', '2021-03-28 09:50:50', '2021-03-28 09:51:20'),
(2, 'Meningkatkan kualitas pelayanan publik berdasarkan prinsip tata pemerintahan yang baik dalam bentuk penataan administrasi, pemerintahan, pembangunan dan pelayanan (MISI No 2)', '2021-03-28 09:57:29', '2021-03-28 09:57:29'),
(3, 'Mewujudkan masyarakat Kelurahan Pagesangan yang penduduknya haterogen untuk tetap memelihara keamanan, ketentraman, ketertiban dan kedamaian ditengah masyarakat dan saling berketerima ( toleransi ) yang dijiwai oleh nilai-nilai agama/religi dan kearifan l', '2021-03-28 09:57:45', '2021-03-28 09:57:45'),
(4, ' Meningkatkan kwalitas SDM yang handal untuk mendorong daya saing daerah (MISI No 4)', '2021-03-28 09:57:58', '2021-03-28 09:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id` int(100) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `syarat` mediumtext NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `slug` varchar(300) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id`, `nama`, `syarat`, `deskripsi`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Surat Keterangan Kelahiran dan Akta', 'KTP\r\nKK', 'Mantap', 'surat-keterangan-kelahiran-dan-akta', '2021-03-19 05:14:58', '2021-03-19 23:22:22'),
(4, 'Surat Keterangan Rahasia', 'KTP\r\nKK', 'Nice', 'surat-keterangan-rahasia', '2021-03-19 23:22:44', '2021-03-19 23:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(11) NOT NULL,
  `isi` mediumtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'Gambar_Struktur.jpg', NULL, '2021-04-06 03:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin SIKEPA', 'admin', '$2y$10$3moGs6pwdvnbz0ZAmpOzIeuoI3ezI3oDEYKyAdMnShAsva1L41sqO', 'admin', '2021-03-18 20:18:26', '2021-03-30 07:50:09'),
(2, 'Ni Nyoman Berlianda', 'andak', '$2y$10$.JQA73IhwlvaecdeM1NHYOZasNwUTcHFbavnnluRA3eIA1d1XcTfC', 'operator', '2021-03-18 22:31:40', '2021-03-19 23:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id` int(100) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id`, `visi`, `created_at`, `updated_at`) VALUES
(1, 'Mewujudkan Kelurahan Pagesangan Yang Terang Benderang (VISI No 1).', '2021-03-28 09:26:09', '2021-03-28 09:32:21'),
(2, 'Mataram Indah, tertata, Aman, Damai, Maju dan Religius (VISI No 2).', '2021-03-28 09:26:44', '2021-03-28 09:32:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
