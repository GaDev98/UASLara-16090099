-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 14.39
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mangakomik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2019_06_13_041840_create_tbl_mangas_table', 1),
(10, '2019_06_13_042046_create_tbl_komiks_table', 1),
(11, '2019_06_13_042127_create_tbl_komentars_table', 1),
(12, '2019_06_13_042204_create_tbl_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentars`
--

CREATE TABLE `tbl_komentars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dikomentar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_komentar` enum('Manga','Komik') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_komen` date NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_komentars`
--

INSERT INTO `tbl_komentars` (`id`, `nama`, `dikomentar`, `jenis_komentar`, `tgl_komen`, `komentar`, `gambar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(21, 'Ghofir', 'Haikyuu!!; High Kyuu!!; HQ!!', 'Komik', '2019-07-10', 'asdasdadsaasd', 'tumnail2.png', '2019-07-01 17:09:35', '2019-07-01 17:09:35', NULL),
(22, 'Dian', 'ドラゴンボール超〈スーパー〉, Dragon Ball Chou', 'Komik', '2019-07-02', 'weh', 'user.jpg', '2019-07-02 20:49:08', '2019-07-04 19:57:55', '2019-07-05 02:57:55'),
(23, 'Dian', 'Dr. Stone', 'Manga', '2019-07-09', 'asdw....', 'user.jpg', '2019-07-04 20:22:25', '2019-07-04 20:22:25', NULL),
(24, 'Dian', 'Dr. Stone', 'Manga', '2019-07-17', 'top banget gan', 'user.jpg', '2019-07-05 01:56:56', '2019-07-05 01:56:56', NULL),
(25, 'Ghofir', 'Magi: Sinbad no Bouken (TV)', 'Manga', '2019-07-09', 'coba gan', 'tumnail2.png', '2019-07-05 01:59:45', '2019-07-05 01:59:45', NULL),
(26, 'Dian', 'First Rate Master', 'Manga', '2019-07-08', 'jkjshkdfhsdfkjsdkjfksdfsdf', 'user.jpg', '2019-07-13 16:07:53', '2019-07-13 16:07:53', NULL),
(27, 'Dian', 'First Rate Master', 'Komik', '2019-07-18', 'wehruweiruewuiuiuiiuweeww', 'user.jpg', '2019-07-13 16:09:13', '2019-07-13 16:09:13', NULL),
(28, 'nazil', 'Magi: Sinbad no Bouken (TV)', 'Manga', '2019-07-12', 'sadsdadasdasd', 'IMG-20180830-WA0000.jpg', '2019-07-14 04:55:26', '2019-07-14 04:55:26', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komiks`
--

CREATE TABLE `tbl_komiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `buatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `pengarang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_komiks`
--

INSERT INTO `tbl_komiks` (`id`, `judul`, `sinopsis`, `buatan`, `genre`, `tanggal_rilis`, `pengarang`, `skor`, `gambar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Tales of Demons and Gods', 'Nie Lie, Demon Spiritist yang terkuat dikehidupan masa lalunya yang berdiri di puncak dunia persilatan, namun dia kehilangan nyawanya saat pertarungan dengan Sage Emperor dan keenam dewa berperingkat binatang, jiwanya kemudian terlahir kembali saat dia masih berumur 13 tahun. Meskipun dia yang paling lemah di kelasnya dengan bakat terendah hanya diranah Red soul, tapi dengan bantuan pengetahuan yang luas yang dia akumulasi dari kehidupan sebelumnya, dia terlatih begitu cepat dari pada siapapun. Mencoba untuk melindungi kota di masa mendatang sedang diserang oleh binatang dan akhirnya hancur, serta melindungi kekasihnya, teman-temannya dan keluarganya yang meninggal karena serangan binatang. Dan untuk menghancurkan keluarga Sacred yang meninggalkan tugas mereka dan kota yang dikhianati dalam kehidupan masa lalunya. Ikuti update Komik Tales of Demons and Gods terbaru bahasa Indonesia hanya disini!', 'Otakuindo.co', 'Action, Fantasy, Shounen', '2016-06-09', 'Mad Snail', '7', 'TalesofDemonsandGods4-1-1.jpg', '2019-06-24 05:08:49', '2019-06-24 05:08:49', NULL),
(3, 'Rebirth Of The Urban Immortal Cultivator', 'Chen Fanyu meninggal di tengah kesengsaraan ilahi, setelah mencapai puncak dunia kultivasi dalam waktu kurang dari 500 tahun. Entah bagaimana, terlepas dari kehilangan basis kultivasinya, ia dapat kembali ke masa mudanya sebagai mahasiswa yang tinggal di Bumi. Dia memutuskan untuk sekali lagi menapaki jalan menuju keabadian, dipersenjatai dengan pengetahuan yang telah dia kumpulkan di kehidupan masa lalunya, untuk menimpa kesalahan masa lalunya, menghilangkan penyesalannya yang tersisa, dan menetapkan fondasi spiritual yang kuat yang akan menjamin keberhasilan dalam upayanya yang tak terelakkan untuk sekali lagi naik ke bidang keberadaan lain. Ikuti update Komik Rebirth Of The Urban Immortal Cultivator terbaru bahasa Indonesia hanya disini!', 'Otakuindo.co', 'Drama, Fantasy, Magic School, life Seinen', '2017-05-30', 'Shiu jianshen', '7', 'Rebirth.jpg', '2019-06-24 05:15:04', '2019-06-24 05:15:04', NULL),
(4, 'First Rate Master', 'Dia tidak memiliki keterampilan khusus, tetapi dia menguasai kung fu. Master seni bela diri, Duan Yun, datang ke sebuah kota, dan memukuli orang-orang kaya, menghukum gangster. Dia juga memberikan kasih sayang kepada seorang gadis berkualitas tinggi, seorang polisi bersemangat panas, dan wanita bisnis dingin ... Ikuti update Komik First Rate Master terbaru bahasa Indonesia hanya disini!', 'Otakuindo.co', 'Action, Adventure, Ecchi, Martial Arts', '2015-06-10', 'Tao Le Si', '7', '6S.iWCvoeDY-1.jpg', '2019-06-24 05:17:44', '2019-06-24 05:17:44', NULL),
(5, 'asdasdasd', 'asdasdasdasd', 'asdasdasd', 'asdasdasd', '2019-07-20', 'sadasdadas', 'adasdada', 'tumnail.png', '2019-07-04 19:54:43', '2019-07-04 19:54:46', '2019-07-05 02:54:46'),
(6, 'ASas', 'assdadad', 'aweqeqwe', 'wrqwrwer', '2019-07-13', 'dsadasd', '7', '19113859_476025519405885_7151024010953631075_n.jpg', '2019-07-14 04:14:13', '2019-07-14 04:14:17', '2019-07-14 11:14:17'),
(7, 'asdsadsadasd', 'asdasdasdaasdasdasd', 'asdasdasd', 'asdasdasdasd', '2019-07-17', 'asdasdasd', '7', 'Untitled-3.png', '2019-07-14 04:29:24', '2019-07-14 04:41:59', '2019-07-14 11:41:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `id` int(11) NOT NULL,
  `id_user` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `aktivitas` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mangas`
--

CREATE TABLE `tbl_mangas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `musim` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `status` enum('Ungoing','Completed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_mangas`
--

INSERT INTO `tbl_mangas` (`id`, `judul`, `sinopsis`, `genre`, `musim`, `tanggal_rilis`, `status`, `pengarang`, `skor`, `gambar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'ドラゴンボール超〈スーパー〉, Dragon Ball Chou', 'Setelah Majin Boo dikalahkan, bumi kembali damai dan Goku bercocok tanam di sekitar kediamannya. Sanak keluarganya pun menikmati keadaan damai tersebut dengan melakukan aktivitas masing-masing. Kali ini datang dari sosok yang bernama Beerus, God of Destruction. Beerus boleh dikatakan sosok menakutkan dan kuat di galaksi “Dragon Ball“. Dia berniat melawan ksatria legenda yang terlihat dalam sebuah ramalan yang dikenal sebagai Super Saiyan God.', 'Action ,  Comedy ,  Martial Arts ,  Shounen', 'Gugur', '2015-06-20', 'Ungoing', 'Akira Toriyama', '8', 'dragon ball.jpg', '2019-06-22 23:57:26', '2019-06-22 23:57:26', NULL),
(3, 'Moshi Fanren, 末世凡人, Mortal in the Doom', 'Zuo Tianchen adalah manusia terakhir yang hidup di kota yang terinfeksi zombi. Ketika dia akan mati, jiwanya kembali ke waktu tepat sebelum bencana yang ditakdirkan itu terjadi 10 tahun yang lalu. Dia bersumpah, kali ini dia akan melindungi orang-orang yang harus dia lindungi dan bertemu lagi dengan kekasihnya di masa lalu. Saksikanlah perjuangannya untuk terus bertahan hidup disenjatai dengan ingatannya akan 10 tahun yang akan terjadi!', 'Action ,  Comedy ,  Horror ,  School Life', 'GuGur', '2018-01-01', 'Ungoing', 'Amazing Works', '8', 'faren.jpg', '2019-06-23 00:07:29', '2019-06-23 00:07:29', NULL),
(4, 'Haikyuu!!; High Kyuu!!; HQ!!', 'Terinspirasi setelah menonton ace bola voli yang dijuluki \"Raksasa Kecil\" beraksi, Shouyou Hinata yang berperawakan kecil menghidupkan kembali klub bola voli di sekolah menengahnya. Tim yang baru dibentuk bahkan berhasil mencapai turnamen; Namun, pertandingan pertama mereka ternyata menjadi yang terakhir ketika mereka secara brutal terjepit oleh \"Raja Pengadilan,\" Tobio Kageyama. Hinata bersumpah untuk melampaui Kageyama, dan setelah lulus dari sekolah menengah, ia bergabung dengan tim bola voli SMA Karasuno — hanya untuk mengetahui bahwa saingannya yang bersumpah, Kageyama, sekarang adalah rekan setimnya.\r\n\r\nBerkat tingginya yang pendek, Hinata berjuang untuk menemukan perannya di tim, bahkan dengan kekuatan lompatnya yang unggul. Anehnya, Kageyama memiliki masalah sendiri yang hanya dapat dibantu oleh Hinata, dan belajar untuk bekerja sama tampaknya menjadi satu-satunya cara bagi tim untuk menjadi sukses. Berdasarkan manga shounen populer Haruichi Furudate dengan nama yang sama, Haikyuu !! adalah komedi olahraga yang menggembirakan dan emosional setelah dua atlet bertekad saat mereka berusaha untuk mengatasi persaingan sengit untuk membuat tim bola voli sekolah menengah mereka yang terbaik di Jepang.', 'Comedy ,  Drama ,  School Life ,  Shounen ,  Sports', 'Semi', '2007-01-01', 'Ungoing', 'Furudate Haruichi', '8', 'Haikyuu!!.png', '2019-06-23 01:42:51', '2019-06-23 01:42:51', NULL),
(5, 'Kimetsu no Yaiba', 'Disetting pada era Taisho Jepang. Tanjirou adalah seorang anak muda yang baik hati yang hidup damai dengan keluarganya sebagai penjual batubara. kehidupan normal mereka berubah sepenuhnya ketika keluarganya dibantai oleh setan. salah satu yang selamat lainnya, adik Tanjirou ini Nezuko, telah menjadi setan ganas. Dalam rangka untuk kembali Nezuko normal dan membalas dendam pada setan yang membunuh keluarga mereka, mereka berdua berangkat pada perjalanan. Dari bakat muda, kisah petualangan darah dan pedang dimulai!', 'Action ,  Historical ,  Shounen ,  Supernatural', 'Semi', '2016-02-15', 'Ungoing', 'Gotouge Koyoharu', '7', 'demon.png', '2019-06-23 01:51:23', '2019-06-23 01:51:23', NULL),
(6, 'Dr. Stone', 'Ketika cahaya misterius tiba-tiba menelan Bumi, umat manusia dibiarkan membatu, membeku di batu. Ribuan tahun kemudian, dunia penuh dengan vegetasi, dan hutan telah mengambil tempat-tempat kota yang pernah berdiri dengan bangga. Salah satu yang paling pertama muncul dari penjara batu mereka adalah Taiju Ooki, yang menemukan bahwa sahabat baiknya, seorang ilmuwan muda yang cerdas bernama Senkuu, telah mempersiapkan kebangkitannya. Sementara Taiju ingin menyelamatkan gadis yang dicintainya, Senkuu bertekad untuk mencari tahu penyebab di balik fenomena aneh dan mengembalikan dunia ke kejayaannya sebelumnya.\r\n\r\nTetapi ketika mereka membebaskan Tsukasa Shishiou yang sangat kuat dan terkenal untuk mengatasi bahaya di dunia yang tidak dikenal, mereka menyadari bahwa kawan baru mereka memiliki rencana lain. Tsukasa melihat kesulitan mereka sebagai kesempatan untuk memulai kembali; bebas dari korupsi dan kehancuran yang ditimbulkan oleh teknologi, ia tidak akan berhenti untuk mencapai tujuannya. Dengan kedua belah pihak tidak dapat melihat mata ke mata, Senkuu dan pengabdiannya pada ilmu pengetahuan akan berbenturan dengan Tsukasa dan sifat dasarnya dalam apa yang benar-benar akan menjadi pertarungan zaman.', 'Adventure ,  Romance ,  Shounen', 'Gugur', '2017-03-06', 'Ungoing', 'Riichiro Inagaki', '7', '973017.png', '2019-06-23 02:13:42', '2019-06-23 02:17:00', NULL),
(7, 'Magi: Sinbad no Bouken (TV)', 'Spin-off Magi yang menceritakan tentang masa lalu Sinbad. Pertemuan Sinbad dengan Yunan. Serta penaklukkan Dungeon yang pertama.\r\nMagi: Sinbad no Bouken adalah salah satu dari seri anime Magi. Anime ini menceritakan tentang perjalanan Sinbad menaklukkan \"Dungeon\" dan awal mula membentuk maskapai dagang Sindria.', 'Action, Adventure, Fantasy, Magic, Shounen', 'Gugur', '2013-05-08', 'Ungoing', 'Ohtaka, Shinobu (Story)', '7', 'magi.jpg', '2019-06-24 04:58:12', '2019-06-24 04:58:12', NULL),
(8, 'asd', 'asd', 'asd', 'asd', '2019-07-06', 'Ungoing', 'asdads', '8', 'Untitled-3.png', '2019-07-04 19:45:43', '2019-07-04 19:50:27', '2019-07-05 02:50:27'),
(9, 'Dr. Stone', 'hgfghfhgfhgfghfhffh', 'sadasdasda', 'saddasdad', '2019-07-12', 'Completed', 'dasdadasd', '7', '1.png', '2019-07-14 04:13:32', '2019-07-14 04:13:38', '2019-07-14 11:13:38'),
(11, 'asdasdasdsad', 'sadasdasdsadasd', 'asdasd', 'sadasd', '2019-07-11', 'Completed', 'asdasd', '7', 'Untitled-2.png', '2019-07-14 04:27:01', '2019-07-14 04:27:30', '2019-07-14 11:27:30'),
(12, 'kjhkkhsadasd', 'sadsadsadsadasd', 'sadasd', 'sadasdsa', '2019-07-05', 'Completed', 'sadsadsad', '8', 'emoji.png', '2019-07-14 04:40:29', '2019-07-14 04:41:07', '2019-07-14 11:41:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `Status_Sekolah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `nama`, `email`, `alamat`, `password`, `tgl_lahir`, `Status_Sekolah`, `gambar`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Dian', 'Dian@gmail.com', 'jl.kidullor', '$2y$10$sNtOfS8Gv9OVgL2oZENg4.5cBls2rq3rijx8I1nCbKPSyr7wLdC2W', '1999-02-12', 'pelajar', 'user.jpg', NULL, '2019-06-29 23:09:02', '2019-06-29 23:09:02', NULL),
(4, 'Ghofir', 'isekaigame98@gmail.com', 'tegalandong', '$2y$10$Ri.T2Cwvg6icf8lUjLDaF.MDbBO5INUza3kybaqnXqGEhi4W2AqEC', '2019-07-25', 'Mahasiswa', 'tumnail2.png', NULL, '2019-07-01 16:13:51', '2019-07-01 16:13:51', NULL),
(5, 'nazil', 'klibyte@gmail.com', 'Bumijawa', '$2y$10$EBlJb.tz6z1MFSIY117NXuZzyvtpCq6etPyG2ndSPpwu3g1uZFsly', '2019-07-09', 'Mahasiswa', 'IMG-20180830-WA0000.jpg', NULL, '2019-07-14 04:52:54', '2019-07-14 04:52:54', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_komentars`
--
ALTER TABLE `tbl_komentars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_komentars_id_unique` (`id`);

--
-- Indeks untuk tabel `tbl_komiks`
--
ALTER TABLE `tbl_komiks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_komiks_id_unique` (`id`);

--
-- Indeks untuk tabel `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_mangas`
--
ALTER TABLE `tbl_mangas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_mangas_id_unique` (`id`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_users_id_unique` (`id`),
  ADD UNIQUE KEY `tbl_users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentars`
--
ALTER TABLE `tbl_komentars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_komiks`
--
ALTER TABLE `tbl_komiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_mangas`
--
ALTER TABLE `tbl_mangas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
