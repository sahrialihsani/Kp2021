-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Apr 2021 pada 09.29
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_hash` varchar(100) NOT NULL,
  `status` enum('Admin','Fakultas') NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `email`, `password`, `password_hash`, `status`, `foto`) VALUES
(1, 'Admin UPT KSLI', 'sahrialishak@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'unib1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `id_kategori`, `judul`, `isi`, `gambar`, `tgl_posting`) VALUES
(5, 3, 'Pembakaran Masjid Dhirar', 'Jakarta - Membakar masjid sebagai rumah ibadah umat Islam kedengarannya sangat menyeramkan, akan tetapi kenyataan ini betul-betul pernah terjadi. Yang menarik ialah masjid yang pertama dibakar dalam sejarah dunia islam ternyata diinstruksikan oleh Nabi setelah mendapat petunjuk dari dua ayat Al-Qur\'an. Kedua ayat itu adalah sebagai berikut:\r\nDan (di antara orang-orang munafik itu) ada orang-orang yang mendirikan masjid untuk menimbulkan kemudaratan (pada orang-orang mukmin), untuk kekafiran dan untuk memecah belah antara orang-orang mukmin serta menunggu kedatangan orang-orang yang telah memerangi Allah dan Rasul-Nya sejak dahulu.\r\n\r\nMereka sesungguhnya bersumpah: \"Kami tidak menghendaki selain kebaikan.\" Dan Allah menjadi saksi bahwa sesungguhnya mereka itu adalah pendusta (dalam sumpahnya). Janganlah kamu shalat di dalam mesjid itu selama-lamanya. Sesungguhnya mesjid yang didirikan atas dasar takwa (mesjid Quba), sejak hari pertama adalah lebih patut kamu bersembahyang di dalamnya. Di dalamnya ada orang-orang yang ingin membersihkan diri. Dan Allah menyukai orang-orang yang bersih. (Q.S. al-Taubah/9:107).\r\n\r\nDalam Kitab Tafsir Ibnu Katsir, Juz 2, hala. 288-292 dikisahkan panjang lebar tentang latar belakang turunnya dua ayat tersebut di atas. Masjid Dhirar disebut sebagai masjid profokatif yang dikuasai oleh kaum munafik di bawah pimpinan seorang pendeta bernama Abu \'Amir al-Rahib.\r\n\r\nMasjid ini pada mulanya diakui oleh baginda Nabi Muhammad Saw ketika bersama para prajuritnya menuju ke medan Perang Tabuk, tetapi sekembalinya dari Tabuk Nabi mendengarkan informasi yang negatif tentang asjid itu. Akhirnya Nabi membentuk dan mengutus tim invetigasi untuk mengecek kebenaran informasi itu.\r\n\r\nDi antara anggota tim itu ialah Malik bin Dukhsyum, Ma\'an bin Adi,\' Amir bin As-Sakan dan Wahsyi. Setelah tim ini melaporkan kebenaran informasi tentang keberadaan masjid Dhirar betul-betul masjid yang berbahaya dan berpotensi memecah belah umat, maka Nabi menginstruksikan: Pergilah kalian ke masjid itu yang didirikan orang-orang dhalim kemudian hancurkan dan bakar\". Peristiwaitu terjadi pada bulan Oktober 630 Masehi.\r\n\r\nPembakaran Masjid Dhirar dilatar belakangi adanya niat busuk tersembunyi di balik pembangunan masjid itu. Kelompok munafiq berharap Masjid Dhirar bisa melemahkan umat Islam dari dalam seraya mereka mempersiapkan rencana penyerangan ke komunitas nabi Muhammad Saw.\r\n\r\nDalam riwayat disebutkan Amir al-Rahib sempat mendekati Raja Heraklius untuk berkolaborasi melawan kekuatan nabi Muhammad Saw. Ia juga tercatat pernah berada di dalam barisan kaum musyrikin melawan Nabi Muhammad saw dan pasukannya di Perang, yang satu-satunya perang di mana Nabi dan pasukannya dikalahkan.\r\n\r\nPada mulanya Nabi sudah memiliki rencana untuk mengunjungi masjid itu karena informasi yang sampai kepadanya masjid itu dibangun utnuk orang-orang sakit, oarng-orang tua dan lemah tidak sanggup pergi ke Masid Quba, masjid yang dibina langsung oleh Nai Muhammad Saw. Sebelum Nabi berkunjung ke masjid itu Allah swt menurunkan wahyu sebagaimana dikemukakan di atas (Q.S. al-Taubah/9:107-108), yang mengingatkan bahwa masjid itu bukan masjid biasa tetapi masjid yang didirikan untuk memecah belah umat Islam.\r\n\r\nPerintah Nabi untuk membakar Masjid Dhirar yang mendapatkan dukungan dari dua ayat dalam surah al-Taubah di atas, mengingatkan kita agar umat tidak boleh terkecoh dengan kehadiran simbol-simbol agama seperti masjid, karena ternyata tidak semua simbol-simbol suci itu dimaksudkan untuk tujuan-tujuan suci. Kita harus memelihara dan menjunjung tinggi simbol-simbol keagamaan Islam. Akan tetapi jika ternyata kehadiran simbol itu bukannya untuk memperkuat posisi dan keberadaan umat tetapi malah melemahkan maka keberadaa simbol dan atribut keagamaan itu perlu ditinjau keberadaannya.', 'nasaruddin-umar_1691.jpeg', '2021-04-20'),
(6, 3, 'Pemerintah Dorong Implementasi Energi Baru Terbarukan di Aceh', 'Merdeka.com - Provinsi Aceh merupakan salah satu kota yang masuk dalam fokus percepatan pembangunan infrastruktur dan pengembangan wilayah. Dalam rapat yang diadakan pada Selasa (20/04/2021), Menteri Koordinator Bidang Kemaritiman dan Investasi (Menko Marves) Luhut Pandjaitan yang didampingi oleh Deputi Bidang Koordinasi Infrastruktur dan Transportasi Ayodhia Kalake menyampaikan tentang kesempatan Aceh untuk mengembangkan energi baru terbarukan (EBT). \"Aceh memiliki potensi pengembangan EBT yang besar, yaitu mencapai 27,7 megawatt (MW)\".\r\n\r\nDalam kesempatan tersebut, Menteri Energi dan Sumber Daya Mineral (ESDM) Arifin Tasrif pun menjelaskan secara lebih rinci tentang peluang pengoptimalan EBT di Aceh, yaitu sebesar 25,31 gigawatt (GW). Jumlah ini terdiri dari 1,2 GW energi panas bumi, 16,4 GW energi surya, 6,6 GW energi hidro, 0,89 GW energi angin, dan 0,22 GW bioenergi.\r\n\r\nSalah satu lokasi yang akan difokuskan untuk EBT adalah Kawasan Industri (KI) Ladong dengan lahan seluas 67 hektar yang 2.500 hektar diantaranya akan dikembangkan. Ditargetkan nantinya Aceh dapat menjadi kawasan percontohan green industrial park. Selain itu, KI Ladong akan mampu menjadi magnet penggerak perekonomian di wilayah Aceh.', 'pemerintah-dorong-implementasi-energi-baru-terbarukan-di-aceh.jpg', '2021-04-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_faq`
--

CREATE TABLE `tb_faq` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_faq`
--

INSERT INTO `tb_faq` (`id`, `pertanyaan`, `jawaban`) VALUES
(3, 'Bagaimana kiranya?', 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.'),
(4, 'Kapan kah?', 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.'),
(5, 'Dimana kah?', 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `kategori`) VALUES
(3, 'Edukasi'),
(4, 'Aplikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kerjasama`
--

CREATE TABLE `tb_kerjasama` (
  `id` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `nama_kerjasama` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `jenis` enum('Universitas','Pemerintahan','Swasta') NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `file` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mitra`
--

CREATE TABLE `tb_mitra` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `institusi` varchar(30) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `status` enum('Menunggu','Ditolak','Diterima') NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mitra`
--

INSERT INTO `tb_mitra` (`id`, `nama`, `email`, `institusi`, `pesan`, `status`, `gambar`) VALUES
(20, 'Sahrial Ihsani', 'sahrialishak@gmail.com', 'sahabatpsikologi', 'Halo saya', 'Menunggu', 'pemerintah-dorong-implementasi-energi-baru-terbarukan-di-aceh.jpg'),
(21, 'adminsp', 'sp@gmail.com', 'asas', 'asa', 'Menunggu', 'nasaruddin-umar_1693.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mobility`
--

CREATE TABLE `tb_mobility` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` enum('Dosen','Tendik','Mahasiswa') NOT NULL,
  `berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mobility`
--

INSERT INTO `tb_mobility` (`id`, `nama`, `email`, `status`, `berkas`) VALUES
(4, 'Sahabat Psikologi', 'sp@gmail.com', 'Mahasiswa', 'Abstraction_for_ILT.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_organisasi`
--

CREATE TABLE `tb_organisasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_organisasi`
--

INSERT INTO `tb_organisasi` (`id`, `nama`, `tahun`) VALUES
(2, 'asas', 2021);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan_pengguna`
--

CREATE TABLE `tb_pertanyaan_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `institusi` varchar(30) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_program`
--

CREATE TABLE `tb_program` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `tahun` int(4) NOT NULL,
  `berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_program`
--

INSERT INTO `tb_program` (`id`, `nama`, `keterangan`, `tahun`, `berkas`) VALUES
(4, 'UPT KSLI', 'sadasa', 2020, 'Abstraction_for_ILT.pdf'),
(5, 'Tes Kepolisian (Kecerdasan)', 'sasa', 2022, 'Bangkit_Academy_-_Guideline2.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_staf`
--

CREATE TABLE `tb_staf` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_staf`
--

INSERT INTO `tb_staf` (`id`, `nip`, `nama`, `jabatan`, `foto`) VALUES
(1, '19201902910290', 'Dedi Suryadi', 'Head of KSLI', 'pakdedi.jpg'),
(2, '19090910901212', 'Agus Suyanto', 'Head of Sub-Division KSLI', 'pakagus.jpg'),
(3, '19090910901212', 'Naga Tondi Hasibuan', 'Administrative Staff', 'paknaga.jpg'),
(4, '19090910901212', 'Faisal Ikhsan', 'Administrative Staff', 'pakfaisal.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tb_faq`
--
ALTER TABLE `tb_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kerjasama`
--
ALTER TABLE `tb_kerjasama`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indeks untuk tabel `tb_mitra`
--
ALTER TABLE `tb_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mobility`
--
ALTER TABLE `tb_mobility`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pertanyaan_pengguna`
--
ALTER TABLE `tb_pertanyaan_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_program`
--
ALTER TABLE `tb_program`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_staf`
--
ALTER TABLE `tb_staf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_faq`
--
ALTER TABLE `tb_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kerjasama`
--
ALTER TABLE `tb_kerjasama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_mitra`
--
ALTER TABLE `tb_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_mobility`
--
ALTER TABLE `tb_mobility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pertanyaan_pengguna`
--
ALTER TABLE `tb_pertanyaan_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_program`
--
ALTER TABLE `tb_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_staf`
--
ALTER TABLE `tb_staf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kerjasama`
--
ALTER TABLE `tb_kerjasama`
  ADD CONSTRAINT `tb_kerjasama_ibfk_1` FOREIGN KEY (`id_mitra`) REFERENCES `tb_mitra` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
