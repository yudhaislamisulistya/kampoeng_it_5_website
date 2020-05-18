-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 04:03 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampoengit5`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_lombas`
--

CREATE TABLE `list_lombas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_lomba` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `po` int(11) NOT NULL DEFAULT 0,
  `pob` int(11) NOT NULL DEFAULT 0,
  `pv` int(11) NOT NULL DEFAULT 0,
  `poa` int(11) NOT NULL DEFAULT 0,
  `pp` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_lombas`
--

INSERT INTO `list_lombas` (`id`, `code`, `name_lomba`, `po`, `pob`, `pv`, `poa`, `pp`, `created_at`, `updated_at`) VALUES
(1, 'MHSUIUXCKIT5', 'UI UX Competition', 0, 0, 0, 0, 0, NULL, NULL),
(2, 'SWANCCKIT5', 'Network Competition', 0, 0, 0, 0, 0, NULL, NULL),
(3, 'MHSNCCKIT5', 'Network Competition', 0, 0, 0, 0, 0, NULL, NULL),
(4, 'MHSIOTCOMPETITIONKIT5', 'IOT Competition', 0, 0, 0, 0, 0, NULL, NULL),
(5, 'MHSCPKIT5', 'Competitive Programming', 0, 0, 0, 0, 0, NULL, NULL),
(6, 'SWADGKIT5', 'Desain Grafis', 0, 0, 0, 0, 0, NULL, NULL),
(7, 'UMUMDGKIT5', 'Desain Grafis', 0, 0, 0, 0, 0, NULL, NULL),
(8, 'SWALFKIT5', 'Line Followers', 0, 0, 0, 0, 0, NULL, NULL),
(9, 'UMUMLKTIKIT5', 'Lomba Karya Tulis Ilmiah', 0, 0, 0, 0, 0, NULL, NULL),
(10, 'UMUMSKIT5', 'Sinematografi', 0, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lombas`
--

CREATE TABLE `lombas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `code_undangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_lomba` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Aktif',
  `bukti` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2020_02_13_161941_create_posts_table', 1),
(22, '2020_02_13_181240_create_lombas_table', 1),
(23, '2020_02_13_181637_create_list_lombas_table', 1),
(24, '2020_02_13_182101_create_teams_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Ada Apa Saja Di Kampoeng IT 5 ?', '<p>1. Pameran IT<br>Tujuan utama pameran IT adalah sebagai wadah untuk menyajikan suatu  karya khususnya karya tentang teknologi kepada khalayak serta mendapatkan opini atau apresiasi dari masyarakat luas terhadap produk atau karya yang dipamerkan. Dengan mengundang mahasiswa dan komunitas-komunitas yang bergelut dibidang teknologi.</p><p>2. Seminar Nasional IT<br>Tujuan kegiatan seminar IT adalah untuk menambah wawasan baru khususnya di bidang IT kepada para peserta. Dengan begitu, para peserta seminar mendapatkan pengetahuan maupun hal-hal baru yang dapat dikembangkan menjadi sesuatu yang lebih luas kepada masyarakat umum.</p><p>3. Lomba IT<br>Tujuan dari kegiatan lomba IT adalah sebagai wadah bagi mahasiswa atau siswa untuk mengimplementasikan ilmu yang mereka miliki terkhusus dalam bidang IT dan pemberian apresiasi kepada peserta bagi yang berprestasi dalam lomba serta dapat memberikan pengaruh besar bagi masyarakat dan negara. Adapun kategori lomba yang akan dilaksanakan yaitu :</p><p>1. Pelajar SMA/SMK/MA<br>a. Robotica (Line Follower)<br>Merupakan jenis robot yang termasuk dalam kategori robot mobile yang di desain untuk bekerja secara autonomous atau tanpa dikendalikan dan memiliki kemampuan untuk mendeteksi dan bergerak mengikuti (follows) garis yang ada di permukaan. Sistem kendali yang digunakan dalam robot ini dirancang untuk bisa mendeteksi jalur (garis yang berwarna hitam) yang ada dan melakukan gerakan agar tetap berada dalam jalur.</p><p>b. Network Competition<br>Tujuan dari kompetisi ini ialah untuk menguji kemampuan analisa dan troubleshooting peserta mengenai jaringan komputer dengan simulasi Packet Tracer.</p><p>c. Desain Poster<br>Poster adalah media informasi untuk mengomunikasikan suatu pesan, baik dalam konteks mempersuasikan pesan sosial, kultural, dan edukasi maupun mempromosikan produk berupa barang dan jasa.</p><p>d. Akustik<br>Perlombaan ini bertujuan untuk meningkatkan kreativitas dalam bermusik,</p><p>2.  Mahasiswa<br>a. IoT (Internet of Things)<br>Internet of Thing (IoT) adalah sebuah konsep dimana suatu objek yang memiliki kemampuan untuk mentransfer data melalui jaringan tanpa memerlukan interaksi manusia ke manusia atau manusia ke komputer. IoT telah berkembang dari konvergensi teknologi nirkabel, micro-electromechanical systems (MEMS), dan internet.</p><p>b. UI/UX<br>UX atau User Experience adalah Proses meningkatkan kepuasan pengguna (pengguna aplikasi, pengunjung website) dalam interaksi antara pengguna dan produk. Tujuan paling penting dari setiap aplikasi seluler adalah interaksi yang lancar antara pengguna dan aplikasi. Sedangkan, UI atau User Interface lebih kepada tampilan perangkat lunak, seperti komputer, peralatan rumah tangga, perangkat mobile, dan perangkat elektronik lainnya, dengan fokus pada memaksimalkan pengalaman pengguna.</p><p>c. Competition Programming<br>Kompetisi programing dalah kompetisi untuk menguji kemampuan pemrograman dan logika.</p><p>d. Network Competition<br>Tujuan dari kompetisi ini ialah untuk menguji kemampuan analisa dan troubleshooting peserta mengenai jaringan komputer dengan simulasi Packet Tracer.</p><p>3. Umum<br>a. Sinematografi<br>Sinematografi adalah bidang ilmu yang membahas teknik penangkapan dan atau penggabungan gambar sehingga rangkaiannya memiliki gagasan ide yang ingin tersampaikan.</p><p>b. Desain Poster<br>Poster adalah media informasi untuk mengomunikasikan suatu pesan, baik dalam konteks mempersuasikan pesan sosial, kultural, dan edukasi maupun mempromosikan produk berupa barang dan jasa.</p><p>c. LKTI (Lomba Karya Tulis Ilmiah)<br>Lomba Karya Tulis Ilmiah merupakan ajang kompetisi untuk menciptakan suatu karya ilmiah yang bersifat objektif, sederhana, kreatif dan berguna bagi kehidupan masyarakat. Dibuat dengan ide yang kreatif dan memiliki sebuah konsep yang baru (original) atau bisa juga berbentuk pengembangan dari ide yang telah dipublikasikan sebelumnya sebagai upaya dari penelitian lanjutan.<br> </p><p>4. Talk Show<br>Talk show adalah sebuah kegiatan temu wicara atau diskusi interaktif seseorang ataupun sekelompok orang berkumpul bersama untuk mendiskusikan berbagai hal topik dengan suasana santai tapi serius, yang dipandu oleh seorang moderator. Dalam Talk show sendiri Kampoeng IT 5 mengangkat tema “Menakar Kekuatan Cyber Security Nasional”.</p><p>5. Milad KABAMAFIKOM UMI<br>Tujuan diadakannya milad KABAMAFIKOM tidak lepas dari memperingati hari lahir organisasi kita yaitu KABAMAFIKOM UMI, sekaligus sebagai sarana untuk mempererat tali silaturahmi antar anggota KABAMAFIKOM.</p><p>6. Video Mapping<br>Video Mapping (Pemetaan video) merupakan sebuah teknik yang menggunakan pencahayaan dan proyeksi sehingga dapat menciptakan ilusi optis pada objek - objek. Objek – objek tersebut secara visual akan berubah dari bentuk biasanya menjadi bentuk baru yang berbeda dan sangat fantastis. Perubahan visual tersebut terjadi dari sebuah proyeksi yang menampilkan grafis video digital kepada suatu objek, benda, atau bidang.</p>', 'Asset 1.png', '2020-02-14 01:10:20', '2020-02-14 01:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id_user` bigint(20) NOT NULL,
  `code_undangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Muhammad Trisnandar', 'nandar@gmail.com', NULL, '$2y$10$4b0xWpaoGwN5PrBxLBM2kuWIRkLPyPtLQDkr5fOAfm2HM.4btdDvK', '2', NULL, '2020-02-13 11:49:49', '2020-02-13 11:49:49'),
(3, 'Kasmira', 'ira@gmail.com', NULL, '$2y$10$hah2/KlU7u7Xf/eMsGupf.9wHhriAJRqlawoZRlJyaAl86reh3816', '2', NULL, '2020-02-13 11:50:16', '2020-02-13 11:50:16'),
(4, 'Yudha Islami Sulistya', 'yudhamaster77@gmail.com', NULL, '$2y$10$l38Ov9EydR8Yc4rn79mMX..mM/Vt.VW.5UT2pGsHvxak.BF0NnOta', '1', NULL, '2020-02-13 19:15:00', '2020-02-13 19:15:00'),
(5, 'Ikram', 'ikram@gmail.com', NULL, '$2y$10$jG7ij8kJjbNkEsBxWCD7KeTGc2eX8Up04XiTexi1ScrSwNlx./VjG', '2', NULL, '2020-02-13 21:29:10', '2020-02-13 21:29:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_lombas`
--
ALTER TABLE `list_lombas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lombas`
--
ALTER TABLE `lombas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`,`code_undangan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id_user`,`code_undangan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_lombas`
--
ALTER TABLE `list_lombas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lombas`
--
ALTER TABLE `lombas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
