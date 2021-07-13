-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2021 pada 11.29
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
-- Stand-in struktur untuk tampilan `berita_filter`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `berita_filter` (
`id` int(11)
,`id_kategori` int(11)
,`judul` text
,`isi` text
,`gambar` text
,`tgl_posting` date
,`kategori` varchar(30)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password_hash` varchar(50) NOT NULL,
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
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `id_kategori`, `judul`, `isi`, `gambar`, `tgl_posting`) VALUES
(15, 16, 'Universitas Bengkulu dan Universitas PGRI Palembang Siap Bersinergi dalam Pengembangan Tridharma Perguruan Tinggi', 'Universitas Bengkulu jalin kerja sama dengan Universitas PGRI Palembang dalam upaya pengembangan Tri Dharma Perguruan Tinggi. Kerja Sama ini tertuang dalam naskah Kesepahaman Bersama yang telah ditandatangani Senin (19/4) di ruang Rapat III Rektorat Universitas Bengkulu. Dalam sambutannya, Rektor Universitas Negeri Palembang Dr. H. Bukman Lian, M.M.,M.Si.CIQaR  mengatakan,  pihaknya ingin belajar banyak dengan Universitas Bengkulu terutama dalam peningkatan sumber daya manusia. “Kamin ingin mengejar peningkatan SDM seperti percepatan guru besar dan lektor kepala dan kami juga ingin berkolaborasi dalam jurnal.”\r\n\r\nMenyambut hal itu, Rektor Universitas Bengkulu Prof. Dr. Ridwan Nurazi, S.E., M.Sc. mengatakan, Universitas Bengkulu tentunya menyambut baik niat dari Universitas PGRI Palembang untuk bekerja sama dengan UNIB, “Kami tentunya menerima dengan baik kerja sama ini karena zaman sekarang ini bukan zamannya lagi berkompetisi, tetapi zamannya kita bersinergi. Sinergitas itu diperlukan saat ini agar kita sama-sama maju. InsyaAllah kerja sama ini terus berlanjut dan kita akan terbang bersama-sama” ungkap Rektor.\r\n\r\nAcara Penandatanganan Nota Kesepahaman ini dihadiri oleh sejumlah Pimpinan Universitas Bengkulu dan Universitas Negeri Palembang, tampak hadir dari Unib yakni Wakil rektor bidang Akademik Prof. Lizar Alfansi, S.E., MBA., Ph.D, Wakil Rektor bidang Kemahasiswaan Dr. Drs. Syahrial, MA., M.Phil, Wakil Rektor bidang Perencanaan dan Kerja Sama Dr. Ardilafiza, S.H., M.Hum, kemudian hadir pula Ketua Lembaga Penjaminan Mutu dan Pengembangan Pembelajaran Dr. Drs. I Wayan Dharmayana, M.Psi, Kepala UPT Kerja Sama dan Layanan Internasional Dr. Eng. Dedi Supriyadi, St., MT, Wakil Dekan bidang Akademik Fakultas Ekonomi dan Bisnis Dr. Fachruzzaman, S.E., MDM.Ak, dan Koordinator Program Pascasarjana Doktor Ilmu Pendidikan Prof. Dr. Wachidi, M.Pd.', '41.jpg', '2021-04-21'),
(16, 3, 'Sosialisasi Program Fast Track 3+2', 'UPT KSLI melaksanakan Sosialisasi Program Fast Track 3+2 kepada 60 Mahasiswa dari Fakultas Ekonomi dan Bisnis dan Fakultas Teknik.  Kegiatan sosialisasi ini dilaksanakan guna menjawab pertanyaan-pertanyaan mahasiswa seputar program 3+2 yang ingin diketahui sebelum mendaftar pada seleksi program Fast Track 3+2 di tahun 2021 ini.', '2.jpg', '2021-03-19'),
(17, 6, 'Implementasi Kampus Merdeka, UNIB dan MCUT adakan Artificial Intelligence Online Workshop', 'Dalam rangka menyiapkan mahasiswa menghadapi perubahan sosial, budaya, dunia kerja dan kemajuan teknologi yang pesat, kompetensi mahasiswa harus disiapkan untuk lebih gayut dengan kebutuhan zaman. Link and match tidak saja dengan dunia industri dan dunia kerja tetapi juga dengan masa depan yang berubah dengan cepat. Oleh karena itu Perguruan Tinggi dituntut untuk dapat merancang dan melaksanakan proses pembelajaran yang inovatif agar mahasiswa dapat meraih capaian pembelajaran mencakup aspek sikap, pengetahuan, dan keterampilan secara optimal dan selalu relevan sebagaimana tujuan dari kebijakan Kampus Merdeka.\r\n\r\nDalam upaya menjawab tuntutan itu, Universitas Bengkulu melalui Unit Pelaksana Teknis Kerja sama dan Layanan Internasional (UPT KSLI) bergerak cepat mengimplementasikan kebijakan kampus merdeka dengan memfasilitasi mahasiswa untuk dapat mengambil mata kuliah di kampus mitra di luar negeri. Kolaborasi Universitas Bengkulu bersama Ming Chi University of Technology, Taiwan telah membuka kesempatan bagi 25 orang Mahasiswa dari Fakultas Teknik untuk mengambil mata kuliah secara daring bersama Ming Chi University of Technology, Taiwan selama satu semester.\r\n\r\nKepala UPT KSLI, Dr. Eng. Dedi Suryadi, ST., MT. mengatakan “25 orang mahasiswa yang yang mengikuti Artificial Intelligence Online Workshop ini berasal dari tiga program studi yang ada di Fakultas Teknik, yaitu prodi Informatika, Teknik elektro dan Teknik Mesin. Mereka telah melewati tahap seleksi yang sudah dilaksanakan di fakultas Teknik. Mereka akan mengikuti kelas secara daring yang materinya diisi oleh lima dosen dari MCUT dan empat dosen dari Unib, selama delapan belas kali pertemuan dan setara 4 SKS. Untuk jadwal perkuliahan, akan kita mulai tanggal 13 Oktober ini”.\r\n\r\nLebih lanjut, Kepala UPT KLSI menjelaskan, bahwa pelaksanaan perkuliahan serupa juga akan dilaksanakan di fakultas Ekonomi dan Bisnis, karena implementasi kerja sama dengan MCUT baru bisa mencakup dua fakultas ini. Namun Universitas Bengkulu pastinya segera mempersiapkan perkuliahan serupa untuk dilaksanakan diseluruh fakultas. Bukan hanya dengan MCUT saja tetapi dengan seluruh mitra Unib. Sebagaimana selama ini kita mengirim mahasiswa ke kampus-kampus mitra kita di Luar Negeri melalui student mobility program.\r\n\r\nq\r\n\r\nw\r\n\r\nSejauh ini, persiapan yang dilakukan oleh UPT KSLI dan Fakultas Teknik telah selesai 100%. Universitas Bengkulu dan Ming Chi University juga telah beberapa kali melakukan diskusi mengenai kesiapan kedua belah pihak. Kemarin, Selasa (29/10), kedua belah pihak juga melaksanakan pertemuan guna melakukan koordinasi terkait jadwal perkuliahan dan dosen-dosen yang akan mengisi perkuliahan.\r\n\r\nBerdasarkah hasil pertemuan, perkuliahan ini akan diisi oleh lima dosen dari MCUT dan lima orang dosen dari Unib dan berikut daftar Dosen yang mengisi Artificial Intelligence Online Workshop.\r\n\r\nNo	Nama	Universitas\r\n1	Prof. C.-S. (Vince) Tsou, Ph.D	MCUT\r\n2	Prof. M.-J. Youh, Ph.D	MCUT\r\n3	Asst. Prof. C.-J. Chang, Ph.D	MCUT\r\n4	Asst.Prof. Y.-H. Lun, Ph.D	MCUT\r\n5	Asst.Prof. J.-W. Liou, Ph.D	MCUT\r\n6	Hendy Sentosa, Ph.D	UNIB\r\n7	Arie Vatresia, Ph.D	UNIB\r\n8	Novalio Dharata, Ph.D	UNIB\r\n9	Ruvita Faurina, M.Kom	UNIB\r\nKerja sama Universitas Bengkulu dengan Ming Chi University sebelumnya juga telah menyelenggarakan program 3+2 dan beasiswa S2 di Ming Chi University, namun untuk pelaksanaan program 3+2 tahun 2020 terpaksa ditunda hingga pandemi covid-19 berakhir. Kedepannya Unib akan terus membangun Kerja sama dengan mitra-mitra Unib guna mengimplementasikan semangat “Kampus Merdeka” dengan mempersiapkan program-program perkuliahan diluar kampus, baik itu dengan Perguruan Tinggi maupun dengan Lembaga dan perusahaan yang bermitra dengan Universitas Bengkulu. (ksli)', '41.png', '2020-09-30'),
(18, 3, 'ONLINE SHARING SESSION: Spektrum Luas Kesempatan Studi dan Beasiswa di Taiwan', 'Kebijakan pemerintah yang responsif diiringi perilaku masyarakat yang melaksanakan protokol kesehatan telah menjadikan Taiwan sebagai salah satu negara yang berhasil memutus mata rantai penyebaran Covid-19. Ditambah lagi, kuatnya sinergi yang dibangun antara Kementrian Kesehatan, Universitas, dan Lembaga Penelitian di negara Taiwan menjadi perhatian tersendiri terhadap negara ini.\r\n\r\nPada Jumat, 28 Agustus 2020 UPT Kerja Sama dan Layanan Internasional Universitas Bengkulu bersama Taiwan Education Center dan Taiwan Economic and Trade Office mengadakan Online Sharing Session dengan tema: Spektrum Luas Kesempatan Studi dan Beasiswa di Taiwan. Kegiatan ini dipandu oleh Lia sebagai moderator dan Tirta Amerta sebagai narasumber dari Manajer Taiwan Education Center Jakarta. Agenda dikhususkan hanya untuk civitas akademik Universitas Bengkulu.\r\n\r\nNarasumber mengupas tuntas perihal studi dan beasiswa di Taiwan, mulai dari sistem, masa studi, syarat umum, cara mendaftar beasiswa, tips mendapatkan beasiswa, syarat khusus hingga situs yang dapat dijadikan sumber informasi utama perihal studi dan beasiswa di Taiwan.\r\n\r\nAdapun beasiswa yang dinilai paling bergengsi dan diberikan oleh Pemerintahan Taiwan adalah MOE Taiwan Scholarship. Beasiswa yang terbuka bagi semua jurusan dan seluruh strata ini diyakini hanya mampu didapatkan oleh mahasiswa yang luar biasa. Di samping itu, banyak pula universitas di Taiwan yang menawarkan program beasiswa tersendiri. Info mengenai beasiswa tersebut dapat diakses pada laman universitas tujuan yang diminati oleh para pejuang beasiswa. Terdapat pula beasiswa pendidikan, program magang, dan program lainnya.\r\n\r\nNarasumber mengatakan pentingnya menyiapkan CV dan study plan yang bernilai jual tinggi sehingga mampu meyakinkan pihak pemberi beasiswa. Salah satu tips yang juga disebutkan adalah agar pejuang beasiswa sudah sedari dini menghubungi atau mencari academic advisor sebelum mendaftar di universitas tujuan. Hal ini diyakini mampu memberi peluang yang cukup besar untuk mendapatkan beasiswa tersebut.\r\n\r\nPada akhir kegiatan, Kepala UPT Kerja Sama dan Layanan Internasional Universitas Bengkulu, Dr. Eng. Dedi Suryadi, berharap peluang studi dan beasiswa di Taiwan ini mampu dimanfaatkan sebesar-besarnya oleh civitas akademika Universitas Bengkulu. Diharapkan pula agar pihak Taiwan Education Center turut membantu para pemburu beasiswa di Universitas Bengkulu untuk meraih beasiswa.(SA)', '5.png', '2020-08-31'),
(19, 7, '1st Southeast Asia Academic Leaders’ Forum (1st SAALFor) & Multilateral Memorandum of Understanding ', 'Pada Kamis, 21 November 2019 telah dilaksanakan kegiatan 1st Southeast Asia Academic Leaders’ Forum (1st SAALFor) & Multilateral Memorandum of Understanding (MoU) Signing Ceremony di Kampus University College Of Yayasan Pahang (UCYP), Kuantan Malaysia. MoU ini adalah antara University College Of Yayasan Pahang (UCYP) – Malaysia, Politeknik Negeri Malanag (POLINEMA) – Indonesia Phetcha Buri Rajabhat University (PBRU) – Thailand, Universitas Negeri Medan (UNIMED) – Indonesia And Universitas Bengkulu (UNIB) – Indonesia.\r\n\r\nMoU ini bertujuan untuk peningkatan kerja sama antara universitas yang terlibat. Kegiatan pertama yang akan dilangsungkan adalah collaborative research. Sebelum penandatangan MoU ini, Vice Chancellor of UCYP, Prof. Emeritus Dato’ Dr. Ahmad Bin Haji Zainuddin, menyampaikan kata sambutan. Kemudian Chief Minister of Pahang State, Dato’ Wan Rosdy Bin Wan Ismail, menyampaikan pidato kunci.\r\n\r\n76972169_2495408113903661_1009769892443848704_o\r\n\r\nSetelah itu dilaksanakan Southeast Asia Academic Leaders’ Forum (1st SAALFor) dengan tema “Education and Societal Innovation for Rural Development”. Perwakilan masing-masing universitas menyampaikan pokok pikiran terkait kerja sama dan juga topik yang diangkat. Dalam kesempatan ini, UNIB diwaikili oleh Wakil Rektor Bidang Kemahasiswaan, Dr Syahrial.\r\n\r\n78665745_2495408057237000_1500737770237198336_o78061372_2495408203903652_8986918779946532864_o\r\n\r\nSetelah itu, kegiatan dilanjutkan dengan Discussion for MoA Planning on Research, Training and Publication. Sebelum diskusi dimulai, Manager of Reseach Management Centre – University College of Yayasan Pahang menyampaikan hal-hal terkait rencana collaborative research yang akan dilakukan. Semoga kerja sama universitas ini berlangsung dengan baik dan menghasilkan output yang diharapkan.', '4.jpg', '2019-11-22'),
(20, 8, 'Internasional Webinar ASEAN Learning Network', 'Universitas Bengkulu sebagai anggota aktif ASEAN Learning Network (ALN) telah berhasil menjadi tuan rumah penyelenggara seminar Internasional dengan tema Developing SEED (Social Entrepreneurship for Economic Development) Program as an Adaptive and Collaborative Learning Model. Kegiatan tersebut diselenggarakan pada hari Selasa, 25 Agustus 2020 secara virtual daring bertempat di ruang rapat UPT KSLI Universitas Bengkulu. Agenda ini dibuka oleh Wakil Rektor bidang Akademik Universitas Bengkulu, Prof. Lizar Alfansi Ph.D. dengan keynote speaker Prof. Tita Evasco-Branzuela, Ph.D (San Beda University) dan Assoc. Prof. Dr. Wee Yu Ghee (Universiti Malaysia Kelantan). Selain itu, juga mengundang dua pembicara lainnya yakni Nadya Aprilianti (Universitas Bengkulu) dan Yehan Migasira Lazuardi (Universitas Katolik Parahyangan) yang pernah menjadi penerima program SEED di Malaysia. Pertemuan daring tersebut juga dihadiri oleh peserta dari berbagai negara ASEAN diantaranya Thailand, Vietnam, Malaysia, dan Filipina.\r\n\r\nProf lIZAR234\r\n\r\nDalam pertemuan yang berdurasi 2 jam ini, masing-masing pembicara menyampaikan kegiatan-kegiatan yang telah dilaksanakan oleh negara anggota ASEAN Learning Network (ALN) dan bagaimana mereka mengintegrasikan pengembangan program SEED sebagai pembelajaran adaptif dan model pembelajaran kolaboratif di negara masing-masing. Alumni penerima program SEED juga turut menyampaikan berbagai pengalaman yang telah dilewati ketika mengikuti program tersebut.\r\n\r\nDijelaskan oleh Prof. Tita Evasco-Branzuela, Ph.D bahwa kegiatan dalam program SEED yang dilaksanakan pada umumnya berfokus pada masyarakat pedesaan. Kegiatan tersebut berupa program mata pencaharian, pengembangan usaha, manajemen, kepemimpinan organisasi, koperasi (petani, perempuan, lansia, kelompok / asosiasi pemuda, dan lain-lain. Nadya, alumni penerima program SEED tahun 2019 menjelaskan beberapa pengalaman yang sempat ia dapatkan dalam program tersebut. Pengalaman tersebut diantaranya, mengikuti lokakarya dan seminar, diskusi grup terpumpun yang membahas seputar proyek sosial kepada masyarakat, dan juga melaksanakan pemetaan sosial dan pengumpulan data usaha masyarakat.\r\n\r\nProgram SEED secara garis besar merupakan kegiatan pertukaran budaya antar negara yang akan memperluas perspektif pribadi, meningkatkan kemampuan dan mempertajam ilmu pengetahuan. Melalui budaya baru yang diterima para peserta program SEED, diharapkan mampu memacu kesadaran sosial dan tanggung jawab sosial terhadap masyarakat.\r\n\r\nProf. Tita\r\n\r\nHasil dari seminar daring tersebut ialah agar negara anggota ALN berupaya memunculkan kemungkinan-kemungkinan lain yang serupa dengan program SEED yang tidak hanya berfokus di bidang bisnis/usaha. Hal tersebut dapat bertitik pada bidang hukum, bahasa, ilmu kesehatan, teknologi, dan sebagainya dengan menggunakan model kegaiatan SEED. Ditambah lagi perlunya pembaharuan seperti memberikan kegiatan istimewa dalam rangka memfasilitasi pengalaman dan pembelajaran mahasiswa khususnya di era pandemi saat ini.(SA)', '5.jpg', '2020-08-26'),
(22, 3, '6th Executive Committee and 3rd Annual General Meeting University of Bengkulu on ASEAN Learning Network', 'Universitas Bengkulu menjadi tuan rumah pelaksanaan 6th ASEAN Learning Network (ALN) Executive Committee Meeting dan 3th Annual General Meeting  pada hari Senin tanggal 24 Agustus kemarin. Acara ini dibuka oleh Rektor Universitas Bengkulu Prof. Dr. Ridwan Nurazi, S.E., M.Sc. dan dan dihadiri oleh sejumlah Rektor dari perguruan tinggi anggota ALN yang berasal dari sejumlah negara-negara ASEAN seperti Thailand, Malaysia, Vietnam dan Filipina.\r\n\r\nIMG_9537\r\n\r\nKepala UPT Kerja Sama dan Layanan Internasional (KSLI) Universitas Bengkulu, Dr. Eng. Dedi Suryadi mengatakan, pada pertemuan kali ini, Dr. Titiek Kartika yang merupakan dosen Fakultas Ilmu sosial dan Ilmu Politik Universitas Bengkulu kembali menjadi Auditor dalam kepengurusan ASEAN Learning Network 2020/2021 dan rencananya, Universitas Bengkulu akan menyelenggarakan program Mini SEED pada tahun 2021 mendatang. “Mini SEED itu akan diikuti oleh sejumlah perguruan tinggi dari negara-negara anggota ALN seperti Malaysia, Thailand, Vietnam dan Filipina”. Pelaksanaan 6th ASEAN Learning Network (ALN) Executive Committee Meeting dan 3rd Annual General Meeting ini dilaksanakan di ruang rapat UPT KSLI dengan mematuhi protokol pencegahan Covid-19.\r\n\r\nIMG-20190818-WA0006-768x501\r\n\r\nASEAN Learning Network diprakarsai pertama kali di Indonesia pada tahun 2009 melalui International Conference di Institut Teknologi Bandung (ITB) Indonesia. Saat ini, 16 universitas dari Vietnam, Filipina, Brunei Darussalam, Indonesia, Malaysia, dan Thailand telah menjadi member ASEAN Learning Network. Melalui SEED programnya, ALN memiliki tujuan untuk menerapkan project dengan menjadi kawan masyarakat pedesaan ‘tuk menyelesaikan permasalahan warga melalui program enterpreneurship.\r\n\r\nss\r\n\r\nPada SEED program, mahasiswa terpilih dari universitas member ALN akan membantu menyelesaikan permasalahan masyarakat pedesaan dengan salah satunya menawarkan alternatif langkah lebih baik dalam mencari inovasi penyelesaian permasalahan. SEED program sendiri telah dilaksanakan di Malaysia, Indonesia, Vietnam, Thailand, dan Filipina. Di bawah bimbingan fasilitatornya, mahasiswa bekerja dengan masyarakat untuk membantu usaha perekonomian warga. Presiden Republik Indonesia saat itu, Susilo Bambang Yudhoyono pada 2008, mengunjungi desa pertama SEED program di pedesaan wilayah Bandung.\r\n\r\nSaat ini, ASEAN Learning Network dengan 16 member universitas dimungkinkan untuk melaksanakan program mobility antaruniversitas, kolaborasi antaruniversitas, hingga konferensi internasional. Dengan misi mengembangkan dan menerapkan proyek kerja sama berbasis riset, ALN berpartisipasi untuk menghasilkan member yang bertanggung jawab dan berkompeten secara sosial dan budaya dalam perkembangan kehidupan masyarakat di Asia. (RA)', '63.png', '2020-08-26'),
(23, 10, 'Tim Ahli Unib Percepat Deteksi Cov-19 di Provinsi Bengkulu', 'Menghadapi pemberlakuan New Normal dan dalam upaya mempercepat deteksi penyebaran covid-19 di Bengkulu, Universitas Bengkulu telah mengambil langkah-langkah strategis guna memberikan edukasi dan sosialisasi kepada masyarakat kampus dan masyarakat diluar kampus agar berperan serta memutus mata rantai penyebaran virus yang menjadi pandemi ini. Bukan hanya itu saja Universitas Bengkulu juga telah menugaskan sejumlah Tenaga Ahlinya untuk melakukan pendeteksian Virus Sars-cov 2 di Provinsi Bengkulu. Penugasan ini sebagaimana tertuang dalam surat tugas Nomor 6461/UN30/KP/2020 tanggal 18 Mei 2020 yang langsung ditandatangani oleh Rektor Universitas Bengkulu Prof. Dr. Ridwan Nurazi, S.E., M.Sc.\r\n\r\nuntitled 3\r\n\r\nTim ahli tersebut terdiri dari delapan orang dosen yang berasal dari Fakultas MIPA dan Fakultas Kedokteran dan Ilmu Kesehatan Universitas Bengkulu, mereka adalah (1) dr. Ahmad Azmi Nasution, M.Biomed., (2) dr. Enny Nugraheni Sulistyorini, M.Biomed., (3) Mardhatillah Sariyanti, S.Si., M.Biomed. (4) Dr. Sipriyadi, S.Si., M.Biomed., (5) Nikki Aldi Massardi, S.Si., M.Biomed., (6) dr.Novriantika Lestari, S.Ked., M.Biomed. (7) Elvira Yunita, S.Si., M.Biomed., dan (8) Liya Agustin Umar, S.Si., M.Biomed.\r\n\r\n \r\n\r\nSebagaimana telah diberitakan sebelumnya oleh sejumlah media massa beberapa waktu yang lalu bahwa labortorium BSL-2 yang telah dipersiapkan oleh Pemerintah Provinsi Bengkulu bersama Unib dan Balai POM saat ini sudah dapat melakukan pemeriksaan swab sendiri. Universitas Bengkulu sendiri sudah mempersiapkan Sumber Daya Manusia yang kompeten dalam melakukan pemeriksaan RT-PCR, biosafety dan biosecurity. saat dikonfirmasi, dr. Ahmad Azmi Nasution kepada KSLI membenarkan bahwa Tim Ahli kita telah melakukan pemeriksaan RT-PCR disana.\r\n\r\n4\r\n\r\nUpaya mempercepat pendeteksian sebaran virus sars-cov 2 ini merupakan kerja sama Universitas Bengkulu bersama Pemerintah Provinsi Bengkulu dan Balai POM Bengkulu yang tertuang dalam Perjanjian Kerja Sama Nomor: 5858/UN30/KS/2020. tentang Pemanfaatan Laboratorium BSL-2 (Biosafety Level-2) Dalam Rangka Percepatan Deteksi Covid-19 di Provinsi Bengkulu. Kepala UPT Kerja Sama dan Layanan Internasional Universitas Bengkulu Dr. Eng. Dedi Suryadi juga menegaskan bahwa  Tim Ahli Universitas Bengkulu telah melakukan pemeriksaan RT-PCR (Reverse Transcription– Polymerase Chain Reaction) di Laboratorium BSL-2 Rumah Sakit M. Yunus. Selain Tim Ahli, Universitas Bengkulu juga meminjamkan peralatan penuntang pemeriksaan PCR milik Universitas Bengkulu untuk digunakan disana.', '6.jpg', '2020-06-04'),
(24, 3, '5 Alumni Universitas Bengkulu Raih Beasiswa S2 MCUT Taiwan', 'Setelah melalui sejumlah tes yang dilaksanakan pada bulan Februari lalu di Universitas Bengkulu. Empat alumni Universitas Bengkulu dinyatakan lulus untuk melanjutkan studi S2 di Ming Chi University of Technology di Taiwan. Kelima Alumni tersebut adalah Aji Pemungkas Trinurcahyo, ST., Dimas Trio Putro, ST., Heru Syah Putra, S. Kom., Rispandi, ST., dan Mukti Trio Putra, SE.\r\n\r\nKepala UPT Kerja Sama dan Layanan Internasional Unib, Dr. Eng. Dedi Suryadi, S.T., M.T. menjelaskan bahwa Dimas Trio Putro dan Rispandi diterima di program master Mechanical and Electro-Mechanical Engineering, kemudian Aji Pamungkas Trinurcahyo dan Heru Syah Putra diterima di program master Electronic Engineering. Sedangkan untuk Mukti Trio Putra diterima di program master Business Administration.\r\n\r\nKelima alumni Unib ini juga menambah daftar alumni Unib yang telah mendapatkan beasiswa serupa dari Ming Chi University. Sebelumnya pada tahun 2019 lalu dua alumni Unib juga telah memperoleh beasiswa yang sama, mereka adalah Haryanto dan Rika Permata Sari. “tahun ini ada 18 Mahasiswa Indonesia yang mendapatkan beasiswa ini dan Lima alumni Unib berhasil merebutnya” ungkap Kepala UPT KSLI.\r\n\r\nSalah satu penerima beasiswa, Mukti Trio Putra ketika dihubungi UPT KSLI mengatakan, “saya mengucapkan terima kasih kepada seluruh pihak khususnya kepada Universitas Bengkulu yang telah membuka peluang ini kepada saya. Karena melalui program student mobility program dari KSLI saya jadi tahu informasi program ini”. Mukti sendiri merupakan alumni Student Mobility Program tahun 2018 lalu. Ia bersama Rika Permata Sari melaksanakan short term study selama dua minggu di MCUT. Menurutnya melalui program itulah ia menjadi percaya diri untuk ikut seleksi S2 di MCUT.\r\n\r\nProgram Beasiswa S2 Ming Chi University of Technology (MCUT) sendiri merupakan hasil kerja sama antara Universitas Bengkulu dan MCUT yang telah dimulai sejak tahun 2017 silam. Selain Beasiswa S2 bagi alumni Unib ini ada juga Program fast track 3+2 yang sebentar lagi juga akan diumumkan oleh MCUT. Program 3+2 ini merupakan program percepatan penyelesaian studi S1 dan S2 secara langsung.\r\n\r\nMahasiswa Unib yang lolos seleksi program ini akan menyelesaikan perkuliahan selama 3 tahun di Unib, kemudian selama satu tahun mengambil beberapa mata kuliah serta melakukan penelitian di Taiwan, dan kembali ke Unib untuk mendapatkan gelar S1 dari Universitas Bengkulu kemudian melanjutkan studi berikutnya di MCUT selama satu tahun dan memperoleh gelar S2 disana. Mahasiswa yang lolos seleksi akan mendapatkan dua gelar yakni S1 dari Unib dan S2 dari MCUT. ', '7.jpg', '2020-05-19'),
(25, 3, 'Peniadaan kegiatan International Student Mobility Program Tahun 2020', 'Untuk para mahasiswa Universitas Bengkulu yang sudah mendaftar International Student Mobility Program Tahun 2020\r\n\r\nTerkait dengan kegiatan International Student Mobility Program Tahun 2020, bersama ini kami sampaikan bahwa jumlah mahasiswa yang mendaftar untuk mengikuti International Student Mobility Program tahun 2020 adalah sebanyak 213 Mahasiswa dari 8 Fakultas.\r\n\r\nNamun berdasarkan perkembangan situasi saat ini maka kami menyampaikan beberapa hal sebagai berikut:\r\n\r\na. Pada saat ini, Indonesia dan negara-negara lainnya dalam kondisi tanggap darurat pandemi Covid-19.\r\n\r\nb. Sebagian besar kegiatan International Student Mobility Program diagendakan dilaksanakan pada masa libur semester pada Juli – Agustus. Pada Bulan Juli – Agustus 2020, kondisi dunia akibat pandemi Covid-19 diperkirakan belum kembali normal seperti sediakala.\r\n\r\nc. Hasil komunikasi dengan pihak mitra/universitas tujuan di luar negeri, para mitra tersebut saat ini juga dalam kondisi meniadakan aktifitas student mobility.\r\n\r\nKarena itu, dengan pertimbangan mendalam, kami sampaikan bahwa proses seleksi kegiatan International Student Mobility Program Tahun 2020 tidak dilanjutkan dan kegiatan ini akan ditiadakan untuk tahun 2020. Untuk informasi lebih lanjut, mahasiswa dapat menghubungi UPT KSLI.\r\n\r\nKami mengucapkan maaf yang sebesarnya dan terima kasih atas pengertiannya.', '8.jpg', '2020-04-13'),
(27, 12, 'Social Innovation and Entrepreneurship Student Bootcamp', 'Faculty of Economics and Business University of Bengkulu is organizing a Social Innovation and Entrepreneurship Student Bootcamp from 17 to 22 July 2020. This bootcamp is organized under Beehive Network Association and in cooperation with University Malaysia Kelantan and Prince of Songkla University Thailand.\r\n\r\nTherefore, we would like to INVITE students to attend this one-week student bootcamp.\r\n\r\nRegistration is via this link http://bit.ly/studentbootcampUNIB2020\r\n\r\nThe deadline for registration is 5 May 2020.\r\n\r\nThe registration fee as follow:\r\n\r\nLocal participants:\r\n– Students of University of Bengkulu: IDR 700.000,-\r\n– Students of other universities: IDR 750.000,-\r\n\r\nInternational participants:\r\n– The registration fee is USD 60, If registering before 5 April 2020,\r\n– The registration fee is USD 75, if registering between 6 April to 5 May 2020.\r\n\r\nAccommodation, local transport and meals for the duration of the program will be covered.\r\n\r\nFor further information, please see the attached flyer. Any query could be forwarded to Ms Seprianti Eka Putri, email: seprianti.ep@unib.ac.id.\r\n\r\nLETS JOIN US!', 'BOOTCAMP-FLYER-web-197x3002.jpg', '2020-03-05'),
(31, 3, 'Sosialisasi program Fasttrack 3 + 2 di Fakultas Teknik, Kerja Sama Unib dan MCUT', 'Mengawali Tahun 2019, Universitas Bengkulu dengan cepat melaksanakan sosialisasi kepada mahasiswa Fakultas Ekonomi dan Bisnis dan Fakultas Teknik yang telah siap untuk melaksanakan program Fasttrack 3+2.\r\n\r\nDihadapan puluhan Mahasiswa Fakultas Teknik, Kepala UPT KSLI Yansen, PhD. Bersama Dekan dan Sejumlah Dosen menerangkan bahwa Program 3+2 ini nantinya mahasiswa yang lolos akan melanjutkan perkuliahan di MCUT, Taiwan. Setelah menyelesaikan perkuliahan selama 3 tahun di Unib kemudian selama satu tahun mengambil beberapa mata kuliah serta melakukan penelitian di taiwan dan kembali ke Unib untuk mendapatkan gelar S1 dari Universitas Bengkulu dan melanjutkan studi berikutnya di MCUT dan memperoleh gelar S2 disana.\r\n\r\nIMG_3797IMG_3795\r\n\r\nDr. Eng. Dedi Suryadi, S.T., M.T. dari Prodi Teknik Mesin juga menambahkan bahwa Fakultas Teknik sendiri rencanya pada pekan depan akan melaksanakan seleksi bersama pihak MCUT. Pihaknya akan melakukan seleksi kepada mahasiswa yang telah mendaftar untuk ikut program ini.\r\n\r\nProgram 3+2 ini merupakan hasil kolaborasi Kerja Sama Universitas Bengkulu dan Ming Chi University of Technology, Taiwan. Tahun ini Program 3+2 ini diselenggarakan di Fakultas Teknik dan Fakultas Ekonomi dan Bisnis.(naga)', 'IMG_3793-768x462.jpg', '2020-01-24'),
(32, 3, 'FACTSHEET AKTIVITAS DAN KOLABORASI INTERNASIONAL UNIVERSITAS BENGKULU 2019', 'Aktivitas internasional yang diadakan di Universitas Bengkulu pada tahun 2019 mencapai 23 kegiatan. Kegiatan ini meliputi international conference, public lecture, seminar, sharing session, meeting dan workshops dengan pembicara dan/atau peserta dari berbagai negara. Kegiatan-kegiatan ini dilaksanakan baik di tingkat universitas, maupun dilakukan fakultas, lembaga atau unit lainnya. Dengan meningkatnya aktivitas akademik internasional diharapkan berkontribusi pada peningkatan atmosfir akademik dan internasionalisasi Universitas Bengkulu. Sebagai bagian dari membangun jejaring internasional (international networks), UNIB juga terlibat aktif dan menjadi bagian dari 7 regional networks, yakni Association of Agricultural Technology in Southeast Asia (AATSEA), ASEAN Learning Networking (ALN), Association of Southeast Asian Institution of Higher Learning (ASAIHL), Indonesia, Malaysia, Thailand – Growth Triangle – University Network (IMT-GT UNINET), Malaysia-Indonesia International Conference on Economics, Management and Accounting (MIICEMA), Regional Network on Poverty Eradication (RENPER) dan Sustainable Agriculture, Food, and Energy (SAFE). Jumlah kolaborasi internasional yang sudah dibangun dengan perguruan tinggi di luar negeri sampai tahun 2019 mencapai 56 institusi.\r\n\r\nPerguruan tinggi dimana Universitas Bengkulu memiliki kerja sama berasal dari 19 negara. Dari kolaborasi internasional Universitas Bengkulu dengan perguruan-perguruan tinggi di luar negeri tersebut, 13 diantaranya masih berbentuk Letter of Intent (LoI). Sedangkan Memorandum of Understanding (MoU) berjumlah 37. Baru 6 institusi berbentuk Memorandum of Agreement (MoA). Namun, perlu diakui bahwa implementasi kolaborasi ini masih perlu ditingkatkan. Hanya kesepakatan kerja sama dengan 21 institusi aktif diisi dengan kegiatan, antara lain pertukaran dosen/staff, pertukaran mahasiswa, riset bersama dan lainnya. Peningkatan aktivitas bersama dalam mengisi kolaborasi yang sudah ada perlu menjadi perhatian.', '101.jpg', '2020-01-20'),
(33, 7, 'Kementerian Kominfo Gandeng Unib dalam Program DTS 2020', 'Kementerian Komunikasi dan Informatika Bersinergi bersama Universitas Bengkulu dalam pelaksanaan program Beasiswa Pelatihan Digital Talent Scholarship (DTS) Tahun 2020 guna melatih dan menyiapkan talenta digital yang kompeten di era industri 4.0.\r\n\r\nSinerginas itu tertuang dalam nota kesepahaman dan Perjanjian Kerja Sama tentang Sinergitas dan Pengembangan Penyelenggaraan Program-Program di Bidang Pendidikan, Komunikasi dan Informatika, yang telah ditandatangani oleh Rektor Universitas Bengkulu yang diwakili oleh Wakil Rektor Bidang Perencanaan dan Kerja Sama, Dr. Ardi Lafiza, S.H.,M.Hum. dan Menteri Komunikasi dan Informatika Johnny G. Plate pada Selasa (17/12/2019) di Jakarta.\r\n\r\nPelaksanaan program ini nantinya akan dilaksanakan oleh Fakultas Teknik Universitas Bengkulu. Beberapa tema pelatihan yang ditawarkan Mulai dari Artificial Intelligence, Big Data Analytics, Cloud Computing, Cybersecurity, Internet of Things, dan Machine Learning. Ada juga Programming, Graphic Design, Multimedia and Animation, dan Network Administration. Selain itu ada pelatihan Digital Policy, Digital Entrepreneurship, Digital Communication, Business Intelligence, Financial Technology, serta Blockchain.\r\n\r\nKerja sama ini bertujuan untuk meningkatkan pelaksanaan program-program nasional di bidang komunikasi dan informatika serta untuk meningkatkan mutu pendidikan, penelitian, dan pengabdian kepada masyarakat dalam bentuk pengkajian dan penerapan teknologi informasi dan komunikasi. Untuk tahun 2020 Program DTS rencananya akan memberikan beasiswa untuk 60.000 orang peserta di 88 Perguruan Tinggi se Indonesia.', 'dts.png', '2019-12-18'),
(34, 15, 'Perpanjangan penerimaan berkas Staff Mobility Program 2020', 'Terlampir disampaikan pengunduran penerimaan berkas Staff Mobility Program sampai 10 Mei. Karena kegiatan dapat dilakukan sampai akhir Oktober 2020, proses seleksi Staff Mobility Program masih akan dilanjutkan.\r\n\r\nBerkas dapat dikumpulkan dalam bentuk softcopy ke email international@unib.ac.id dengan subject: “Staff Mobility Program 2020 – NAMA”.\r\n\r\nMohon dapat diteruskan ke dosen dan tendik yang memerlukan.\r\n\r\nTerima kasih\r\nUPT KSLI', 'Perpanjangan-staff-mobility-247x3001.jpg', '2020-04-13'),
(35, 15, 'Pendaftaran International Student Mobilty Program 2020', 'Overview\r\n\r\n“International Student Mobility” merupakan program tahunan UPT Kerja Sama dan Layanan Internasional (UPT – KSLI) Universitas Bengkulu. Program ini bertujuan untuk memberikan pengalaman internasional kepada mahasiswa UNIB yang memenuhi kriteria dan lolos seleksi untuk mengunjungi dan belajar di Perguruan Tinggi luar negeri yang menjadi mitra UNIB. Hal ini untuk mendukung program internasionalisasi UNIB serta peningkatan kapasitas dan kompetensi mahasiswa. Melalui kegiatan ini diharapkan mahasiswa akan merasakan atmosfir akademik internasional dan mendapatkan pengalaman berinteraksi dengan masyarakat internasional yang berbeda budaya sehingga akan membentuk karakter positif mahasiswa yang lebih baik.\r\n\r\nEligibility\r\n\r\nMahasiswa UNIB aktif, minimal semester 4 dan maksimal semester 8\r\nIPK paling rendah 2,75\r\nMampu berbahasa Inggris dengan baik\r\nBerbadan sehat\r\nBelum pernah mengikuti program serupa dengan biaya UNIB\r\nDestination Universities\r\n\r\nUniversity Malaysia Kelantan\r\nUniversiti Sains Malaysia\r\nUniversiti Malaya, Malaysia\r\nUniversiti Sultan Zainal Abidin, Malaysia\r\nUniversity College of Yayasan Pahang, Malaysia\r\nPoliteknik Nilai, Malaysia\r\nRajamangala University of Technology Srivijaya, Thailand\r\nThaksin University, Thailand\r\nPrincess of Naradhiwas University, Thailand\r\nKasetsart University, Thailand\r\nWalailak University, Thailand\r\nUniversity of Battambang, Cambodia\r\nSan Beda College, Philippines\r\nBanking University of Ho Chi Minh City, Vietnam\r\nGIFU University, Jepang\r\nOkayama University, Jepang\r\nNanyang Technological University, Singapore\r\nMing Chi University of Technology, Taiwan\r\nUniversity of New England, Australia\r\nUniversity of Dundee, UK\r\nSrivenkateswara University, India\r\nAmity University Haryana, India\r\nForman Christian College, Pakistan\r\nPrograms\r\n\r\nProgram yang dapat dilakukan dalam kegiatan ini adalah credit transfer, internship, research, community service, short-term study atau cultural exchange\r\n\r\n— Credit Transfer\r\n\r\nCredit transfer (program perkuliahan) ditujukan bagi mahasiswa UNIB yang ingin mengambil mata kuliah dan mengikuti proses pembelajaran/perkuliahan di universitas lura negeri yang memiliki MoU dengan UNIB.\r\n\r\n— Internship\r\n\r\nInternship (program magang atau kerja/praktik lapangan) ditujukan bagi mahasiswa UNIB yang memiliki mata kuliah magang/kerja lapangan/kerja praktik/PPL/PKL.\r\n\r\n— Research\r\n\r\nResearch (program penelitian) ditujukan mahasiswa UNIB yang ingin melakukan penelitian di universitas luar negeri untuk menyelesaikan tugas akhir/skripsi.\r\n\r\n— Community Services\r\n\r\nCommunity services (Kuliah Kerja Nyata/KKN) adalah kegiatan pelayanan/pengabdian kepada masyarakat yang disetarakan dengan KKN reguler UNIB, atau disebut juga KKN Internasional.\r\n\r\n— Short-term study\r\n\r\nShort-term study ditujukan untuk mahasiswa UNIB yang ingin mengikuti perkuliahan singkat, misalnya mengikuti short-course, atau mengikuti pembelajaran yang disepakati bersama dengan universitas tujuan.\r\n\r\n— Cultural Exchange\r\n\r\nCultural exchange (Program pertukaran budaya) ditujukan bagi mahasiswa UNIB yang memiliki kemampuan dan keterampilan seni budaya Indonesia, berupa tari tradisional, instrumen musik tradisional, seni suara lagu-lagu tradisional dan teater cerita tradisional yang dapat ditampilkan di depan khalayak umum.\r\n\r\nRegistration\r\n\r\nPeserta melakukan registrasi online pada halaman: ly/studentmobilityprogram2020\r\nForm registrasi yang sudah diisi secara online dicetak (print) sebelum di-submit.\r\nDownload dan isi formulir pada “file download” sesuai dengan program yang akan dipilih. File tersebut dapat di-download di http://bit.ly/filedownloadstudentmobility2020.\r\nForm ditandatangani sesuai dengan yang diminta pada form masing-masing, yakni peserta, orang tua/wali, dan pejabat yang berwenang.\r\nBerkas pendaftaran yang terdiri dari form pendaftaran online, fotokopi KTM, fotokopi transkrip nilai, fotokopi skor TOEFL, surat keterangan sehat dari dokter, serta sertifikat prestasi (jika ada) dan beberapa borang (sesuai program yang akan diambil) ke UPT KSLI sesuai dengan jadwal yang telah ditentukan.\r\nImportant Dates\r\n\r\nPendaftaran dan pengumpulan berkas: 24 Februari – 13 Maret 2020\r\nSeleksi berkas: 16 – 27 Maret 2020\r\nWawancara: 6 – 10 April 2020\r\nPengumuman akhir: 20 April 2020\r\nFinancial Support (Scholarship)\r\n\r\nMahasiswa yang terpilih untuk mendapatkan beasiswa akan mendapatkan fasilitas berupa tiket PP, asuransi dan bantuan biaya hidup selama program. Sebanyak 20 orang direncanakan mendapatkan beasiswa ini.\r\n\r\nNamun, mahasiswa dapat memilih pembiayaan secara Self Funded (Mandiri). Jika memilih Self Funded, maka hasil akhir akan ditentukan dari penilaian kesiapan mahasiswa untuk melaksanakan program.\r\n\r\nContacts\r\n\r\nPertanyaan lebih jauh dapat ditanyakan langsung ke Kantor UPT KSLI di Gedung Rektorat Universitas Bengkulu, atau melalui saluran di bawah:\r\n\r\nFacebook page:  Office of Partnership and International Affairs, University of Bengkulu\r\nEmail: international@unib.ac.id\r\nTelepon: 0736 – 21170 ext. 190\r\nFaizal: 082280274117\r\nNaga: 085709739366', 'poster-studex-2020-2mb2.jpg', '2020-02-20'),
(36, 17, 'Collaborative Meeting between University of Bengkulu and Ming Chi University of Technology Taiwan', 'Kerja sama UNIB dengan Ming Chi University of Technology (MCUT) Taiwan telah berjalan dengan baik dalam beberapa tahun terakhir. Setelah penandantangan MoU pada 2017, kegiatan bersama pada 2018 dan 2019 telah dilaksanakan. Beberapa kegiatan yang telah berlangsung seperti student exchange.\r\n\r\nPada tahun 2018, empat mahasiswa Fakultas Teknik melaksanakan magang di MCUT selama 3 bulan. Kemudian empat mahasiswa (dari FEB dan FMIPA) mengikuti Program Cultural Camp di MCUT. Di samping itu, pada 2018, empat mahasiswa MCUT mengikuti Summer Course di Universitas Bengkulu. Pada 2019, 2 orang mahasiswa UNIB (dari FKIP) mengikuti Cultural Camp di MCUT. Mahasiswa UNIB yang mengikuti program Cultural Camp di MCUT adalah bagian dari kegiatan Student Mobility Program yang dilaksanakan oleh UNIB melalui UPT KSLI.\r\n\r\n76930059_2479580648819741_5004921666292154368_o\r\n\r\nPada Hari Rabu 13 November 2019, delegasi MCUT mengunjungi UNIB untuk pembicaraan peningkatan kerja sama. Delegasi MCUT ini terdiri dari:\r\n\r\nDr. Thu-Hua Liu, President\r\nDr. Fong-Jui (Kevin) Liu, Dean, Office of Research and Development\r\nDr. Chieh-Lan (Winnie) Li, Director, Center of International Affairs\r\nDr. Meng-Jey Youh, Professor, Department of Mechanical Engineering\r\nDr. Jau-Rong (Kelly) Chen, Associate Professor, Department of Business and Management\r\nDr. Miao-Hsien (Joyce) Chuang, Assistant Professor, Department of Visual Communication Design\r\nDr. Tsung-Yu (Kyle) Huang, Assistant Professor, Department of Materials Engineering\r\nMs. Yi-Chun (Krystal) Liu, Assistant, Center of International Affairs\r\n\r\nRombongan ini diterima oleh Rektor Universitas Bengkulu, Prof Ridwan Nurazi bersama jajaran UNIB. Hadir dalam pertemuan ini para Wakil Rektor, Biro, Lembaga, UPT KSLI, Dekan Fakultas Ekonomi dan Bisnis dan Dekan Fakultas Engineering, beberapa Wakil Dekan dan dari beberapa Prodi yang akan melaksanakan program bersama dengan MCUT.\r\n\r\n75407791_2479580502153089_4812191197932027904_o\r\n\r\nSetelah penyampaian sambutan dari Rektor UNIB dan Presiden MCUT, Director, Center of International Affairs menjelaskan lebih jauh terkait MCUT. Setelah itu dilanjutkan presentasi dari beberapa Department yang ada di MCUT.\r\n\r\nSetelah presentasi, dua belah pihak melaksanakan Focused Discussion untuk membicarakan lebih detail rencana program dua belah pihak. Diskusi terfokus ini dipimpin oleh Dr Yansen, Kepala UPT KSLI UNIB.\r\n\r\nDari pertemuan ini, UNIB dan MCUT akan melaksanakan beberapa program bersama, antara lain program 3 + 2 antara beberapa Prodi di UNIB dengan MCUT, pengembangan kerja sama riset dan staff exchange.\r\n\r\n75199773_2479580118819794_6078087552357629952_o\r\n\r\nDalam rencana program 3 + 2 ini direncanakan mahasiswa UNIB pada beberapa Program Studi akan melaksanakan perkuliahan selama 3 tahun pertama di UNIB dan melaksanakan kuliah tahun keempat di MCUT untuk mengambil mata kuliah dan tesis. Mahasiswa kemudian akan menyelesaikan perkuliahan S1 di UNIB. Pada tahun kelima, mahasiswa yang telah menyelesaikan S1 akan ditawarkan untuk melanjutkan pendidikan S2. Beberapa Program Studi di UNIB menyatakan siap melaksanakan program tersebut. Untuk saat ini, Program studi yang direncanakan akan menjalankan program ini adalah Prodi Manajemen, Prodi Teknik Mesin dan Prodi Teknik Elektro, Prodi Teknologi Informasi dan Prodi Kimia. Dari pihak MCUT akan memfasilitasi melalui Department yang sesuai yang ada di MCUT.\r\n\r\nIMG_3455\r\n\r\nMahasiswa UNIB yang akan melaksanakan kuliah tahun keempat di MCUT akan mendapatkan fasilitas berupa bebas biaya kuliah dan akomodasi. Sedangkan pada saat berkuliah 1 tahun lagi pada Program Master, mahasiswa UNIB akan mendapatkan full Scholarship\r\n\r\n@UPT KSLI UNIB\r\n\r\n“Conveying Better Future”', '74166091_2479580488819757_2161596979254132736_o.jpg', '2019-11-14'),
(37, 16, 'Kolaborasi Penelitian Universitas Bengkulu dan Universitas Chulalongkorn', 'Research Collaboration between University of Bengkulu and Chulalongkorn University\r\n\r\nDr. Heri Suhartoyo and Dr. Lindung Zalbuin Mase from the University of Bengkulu, Indonesia visited the Department of Civil Engineering, Faculty of Engineering, Chulalongkorn University on 12 Nov 2019. The purpose of this visit is for discussion on the intensive collaboration research between the University of Bengkulu and Chulalongkorn University. The University of Bengkulu also would like to establish the centre of excellence in Geotechnical Hazard in the future by the guidance of the Centre of Excellence in Geotechnical and Geoenvironmental Engineering (CEGGE), Chulalongkorn University.\r\n\r\nDr Heri Suhartoyo and Dr Lindung Zalbuin Mase met with Prof. Dr. Suched Likitlersuang and Prof. Dr. Teerapong Senjuntichai, Prof. Dr. Suched is the Head of CEGGE-Centre of Excellence in Geotechnical and Geoenvironmental Engineering (CEGGE) and Prof. Dr. Teerapong is the Head of Department of Civil Engineering, Dept of Civil Engineering, Chulalongkorn University, Bangkok.\r\n\r\nDr Lindung Zalbuin Mase is currently also conducting collaborative research with Prof Suched. The research is supported by scheme from Office of Research University of Bengkulu. The research focuses on liquefaction vulnerability of the soil.\r\n\r\n—————\r\n\r\nDosen UNIB kolaborasi penelitian dengan Chulalongkorn University Thailand\r\n\r\nDr. Heri Suhartoyo (Sekretaris LPPM Unib) dan Dr. Lindung Zalbuin Mase (dosen FT Unib) melakukan pertemuan dengan Department of Civil Engineering, Faculty of Engineering, Chulalongkorn University on 12 Nov 2019. Tujuan pertemuan ini adalah untuk mendiskusikan kolaborasi riset intensif antara Unib dan Chulalongkorn University. Unib akan mendirikan Pusat Unggulan terkait Geotechnical Hazard dan akan berkerjasama dengan Centre of Excellence in Geotechnical and Geoenvironmental Engineering (CEGGE), Chulalongkorn University.\r\n\r\nDr Heri Suhartoyo dan Dr Lindung Zalbuin Mase bertemu dengan Prof. Dr. Suched Likitlersuang dan Prof. Dr. Teerapong Senjuntichai, Prof. Dr. Suched adalah Kepala CEGGE-Centre of Excellence in Geotechnical and Geoenvironmental Engineering (CEGGE) dan Prof. Dr. Teerapong adalah Kepala Department of Civil Engineering, Dept of Civil Engineering, Chulalongkorn University.\r\n\r\nDr Lindung Zalbuin Mase saat ini juga menjalankan riset kolaborasi dengan Prof Suched. Penelitian ini didukung oleh support dari lembaga Penelitian dan Pengabdian Unib. Riset yang kami kolaborasikan bersama Chulalongkorn University adalah mengusulkan metode pemetaan kerentanan likuifaksi yang mengacu pada parameter utama penentu likuifaksi yaitu tekanan air pori akibat beban gempa dari hasil analisis perambatan gelombang seismik dari metode elemen hingga. Metode ini sebelumnya secara intensif telah dikembangkan oleh Dr. Lindung Zalbuin Mase bersama Prof. Suched Likitlersuang (Chulalongkorn University) dan Associate Professor. Tetsuo Tobita (Kansai University). Saat ini proses zonasi kerentanan sedang berlangsung. Kedepannya zonasi kerentanan likuifaksi di wilayah Bengkulu akan dapat diketahui dan menjadi rujukan dalam perencanaan tata ruang dan wilayah di Kota Bengkulu.', '123.jpg', '2019-11-14'),
(38, 19, 'Dosen Unib ikuti Peace Forum San Beda University', 'Beberapa orang dosen UNIB dari FISIP, FKIP dan FH mengikuti kegiatan PEACE FORUM yang diselenggarakan oleh San Beda Unibersity the Phillipines melalui sambungan Teleconference. Seminar yang disampaikan di Hall San Beda University disambungkan ke Ruang Rapat UPT KSLI UNIB. Pembicara pada kegiatan ini adalah Hon. Carlito Galvez, Jr, yang merupakan Cabinet Secretary of the Office of Presidential Adviser on the Peace Process (OPAPP).\r\n\r\nKegiatan ini merupakan bagian dari International Linkages Week San Beda University. Kegiatan E-Forum atau teleconference ini merupakan bentuk implementasi kerja sama antara UNIB dan SBU dan sudah beberapa kali dilaksanakan.', '72912669_10157778012633159_909918950853181440_n.jpg', '2019-11-14'),
(39, 15, '2 Tendik UNIB Mengikuti Program Pertukaran ke Luar Negeri', 'Setelah sukses melaksanakan program pertukaran staf tenaga kependidikan ke luar Negeri tahun 2017 dan 2018, Universitas Bengkulu tahun ini kembali mengirimkan dua staf tenaga kependidikan ke luar negeri untuk melaksanakan magang di Universiti Sains Malaysia (USM). Keduanya yakni Yudha Prawira dari unit Satuan Pengawas Internal dan Estty Oktarina dari Jurusan Kimia Fakultas Matematika dan Ilmu Pengetahuan Alam.\r\n\r\nMereka dinyatakan lolos oleh UPT Kerja Sama dan layanan Internasional setelah melalui proses seleksi administrasi dan seleksi wawancara yang dilaksanakan pada bulan April lalu. Yudha dam Estty telah memaparkan proposal rencana kegiatannya dalam bahasa Inggris didepan tim seleksi yang terdiri dari Prof. Lizar Alfansi, Ph.D., Yansen Ph.D, dan Heri Dwi Putranto, Ph.D. sebagaimana disampaikan Agus Suyanto selaku Kepala Subbagian Tata Usaha UPT KSLI.\r\n\r\n“tahun ini kami mengirimkan Yudha untuk melaksanakan magang di Unit Audit Dalam USM dan Estty di unit School of Pharmaceutical Sciences USM”. “untuk Yudha, dia telah melaksanakan magangnya pada 17-20 September lalu sedangkan Essty kita kirim tanggal 30 September kemarin dan akan selesai sampai tanggal 4 Oktober besok”, jelas Agus.\r\n\r\nDitempat terpisah, Yudha menyampaikan bahwa Ia sangat bersyukur mendapatkan kesempatan magang disana karena banyak sekali pengalaman dan pengetahuan baru yang Ia dapatkan. “Saya memperoleh arahan yang baik serta ilmu dan pengalaman baru terkait bidang auditing langsung dari auditor–auditor yang telah memiliki pengalaman selama puluhan tahun di bidang auditing”.\r\n\r\nLebih lanjut Yudha menceritakan bagaimana pihak Unit Audit Dalam USM juga mengajarkan cara pembuatan Kertas Kerja Audit serta Pelaporan Audit yang yang diterapkan di sana. “Laporan Audit yang dibuat oleh Unit Audit Dalam dilaporkan langsung kepada Audit Commite yang mana Audit Commite ini dipilih langsung oleh Board of Governor sehingga Independensi mereka benar benar terjaga,”. “Unit Audit Dalam juga sangat mengutamakan keamanan, jadi kantor Unit Audit Dalam menggunakan sistem kunci numeric yang membutuhkan kombinasi angka sebagai passwordnya, jadi tidak sembarang orang yang bisa masuk kedalam kantor ini, selain itu dengan menerapkan model ini maka data audit yang ada dalam kantor akan menjadi lebih aman” tutur Yudha.(ksli)', '6_(1).png', '2019-10-13'),
(40, 18, 'Peningkatan kerja sama UNIB – UniSZA melalui MoA dan pelaksanaan Student Mobility Program International Community Service', 'Pada April 2019, Universitas Bengkulu telah menandantangani Nota Kesepahaman (MoU) dengan Universiti Sultan Zainal Abidin di Terengganu Malaysia. Penandatangan tersebut dilakukan oleh Rektor UNIB Dr Ridwan Nurazi dan Vice Chancellor UniSZA Prof Hassan Basri.\r\n\r\nSetelah MoU tersebut ditandantangi, pada Bulan Juli – Agustus ini, satu kelompok mahasiswa UNIB sejumlah 8 orang melaksanakan kegiatan mobility di UniSZA.\r\n\r\nDalam rangka peningkatan kerja sama antara UNIB – UniSZA, pada 6 Agustus 2019 telah dilaksanakan pertemuan lanjutan antara pihak UNIB dan UniSZA di kampus UniSZA Kuala Nerus Terengganu.\r\n\r\nDalam kesempatan ini, Kepala Kerja Sama dan Layanan Internasional – KSLI UNIB mengadakan pertemuan intensif dengan beberapa pihak di UniSZA. Untuk pelaksanaan kegiatan mobility, pihak UnisZA diwakili oleh Dean Faculty of Applied Social Sciences, Prof Wan Abdul Azis. Faculty of Applied Social Sciences salah satunya akan menjadi tempat pelaksanaan program mobility Internastional Community Services mahasiswa UNIB. Pelaksanaannya dapat diikuti oleh mahasiswa dari berbagai fakultas.\r\n\r\nDi samping itu, peningkatan kerja sama akan dilaksanakan dalam bentuk kerja sama riset serta pertukaran dosen. Dua belah pihak setuju untuk memperoses Agreement lebih lanjut untuk menjadi payung kegiatan-kegiatan yang akan dilaksanakan bersama.\r\n\r\nDi samping itu, dalam kesempatan ini, Kepala KSLI berkesempatan untuk mengunjungi mahasiswa UNIB yang sedang melaksanakan International Community Services di Terengganu. Kegiatan-kegiatan terlaksana dengan lancar. Para mahasiswa mendapatkan support, bantuan dan bimbingan dari UniSZA secara penuh.', '67752014_2297616330349508_6410464248077484032_o.jpg', '2019-08-27');
INSERT INTO `tb_berita` (`id`, `id_kategori`, `judul`, `isi`, `gambar`, `tgl_posting`) VALUES
(41, 6, 'Peningkatan kerja sama UNIB – UMK', 'Kerja sama Universitas Bengkulu (UNIB) dan Universitas Malaysia Kelantan (UMK) sudah berjalan dengan sangat baik. Beberapa highlight pelaksanaan kerja sama UNIB – UMK selama 2018 – 2019 antara lain:\r\n\r\nAktivitas utama: Networks, student exchange, staff exchange and research collaboration\r\n\r\nNETWORKS: UNIB and UMK are both active in Regional Network on Poverty Eradication (RENPER) and ASEAN Learning Network (ALN)\r\n\r\nRENPER The network was launched by the Minister of Higher Education, Malaysia, in October 2010 in conjunction with the UNESCO World Decades of Poverty Eradication. An inaugural seminar was organized by UMK. RENPER aims at strategizing, energizing, and synergizing ideas and efforts by academicians, individually or institutionally, in poverty eradication within the region. UNIB Rector, Dr Ridwan Nurazi is a current President of RENPER ASIA.\r\n\r\nSTUDENTS EXCHANGES/MOBILITY PROGRAM\r\nUNIB are regularly sending students to UMK for exchange program, mainly for Community Srvices Program and Short-term study.\r\nUMK students also came to UNIB for short-programs\r\n\r\nStudent mobility In 2019:\r\n– 8 students of UNIB are conducting Community Services Program” for one month\r\n– 6 students of UNIB were joining boot-camp in entrepreneurship at UMK and Prince of Songkla University (PSU), with program “One Tambun (area) One Product”\r\n– 4 students of UNIB were joining SEED (Social Enterprise for Economic Development) at UMK\r\n\r\nStudent mobility In 2018:\r\n– 6 students of UNIB are conducting Community Services Program” for one month\r\n– 5 students of UNIB were conducting a short-term study with one main activity was designing Business Plan.\r\n\r\nSTAFF VISIT\r\n– UMK staff visiting and giving lectures at UNIB in many occasions\r\n– UNIB staff were conducting visiting and lecturing at UMK\r\n–\r\nRESEARCH COLLABORATION\r\n– In 2019, UNIB and UMK signed a MoA for research collaboration (between Dr Yohan Kurniawan at UMK and Dr Titiek Kartika (Social Sciences))\r\n\r\nOTHER\r\n– E-student colloquium\r\n\r\nPada tanggal 7 Agustus 2019, Rektor UNIB, Dr Ridwan Nurazi, secara khusus diundang ke UMK untuk pembicaraan lebih mendalam terkait kerja sama. Di samping itu, dalam pertemuan ini, pihak UMK mengundang 8 universitas lain dari Indonesia. Karena itu, pihak UMK mengharapkan UNIB dapat berbagi pengalaman pelaksanaan kegiatan selama ini.\r\n\r\nDalam pertemuan ini pembicaraan, pihak UMK dipimpin langsung oleh Vice Chancellor Prof Noor Azizi. Kerja sama dibahas lebih jauh. Pihak UMK menyiapkan matching fund untuk pelaksaaan penelitian bersama.\r\n\r\nDi sela-sela pertemuan, Rektor UNIB berkesempatan bertemu dengan 8 orang mahasiswa UNIB yang sedang melaksanakan Program Mobility – International Community Service di UMK. Program yang dilaksanakan berjalan dengan baik.', '67981222_2297637747014033_3418976761424117760_o.jpg', '2019-08-21');

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
(3, 'Scholarship'),
(6, 'Workshop'),
(7, 'MOU'),
(8, 'Webinar'),
(9, 'Networks'),
(10, 'Covid-19'),
(12, 'Bootcamp'),
(14, 'FactSheet'),
(15, 'Mobility-Program'),
(16, 'Kerjasama-Universitas'),
(17, 'Berita-Universitas'),
(18, 'MoA'),
(19, 'Forum');

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
  `mou_or_pks` enum('MOU','PKS') NOT NULL,
  `file` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kerjasama`
--

INSERT INTO `tb_kerjasama` (`id`, `id_mitra`, `nama_kerjasama`, `isi`, `jenis`, `status`, `mou_or_pks`, `file`, `tgl_mulai`, `tgl_akhir`) VALUES
(43, 62, 'Kerjasama UNIB dan Universitas PGRI Palembang', 'Kerja Sama Tentang Pendidikan, Penelitian, Pengabdian Kepada Masyarakat dan Pengembangan Sumber Daya Manusia', 'Universitas', 'Aktif', 'MOU', 'MoU_antara_Univ_PGRI_Plg_dan_UNIB1.pdf', '2021-04-19', '2026-04-19'),
(44, 82, 'Kerjasama UNIB dan STIKES TRI MANDIRI SAKTI', 'Kerja Sama Pengembangan Tri Dharma Perguruan Tinggi', 'Universitas', 'Aktif', 'MOU', 'MoU_UNIB_dan_TMS.pdf', '2021-04-12', '2026-04-12'),
(45, 84, 'Kerjasama UNIB dan Cukurova Universitesi, Imamoglu Vocational', 'Develop an Academic Exchange and Cooperation Program in Education and Research', 'Universitas', 'Aktif', 'MOU', 'MoU_CUIVS_turki_dan_UNIB.pdf', '2021-03-30', '2026-03-30'),
(46, 87, 'Kerjasama UNIB dan Universitas Negeri Padang', 'Kerja Sama di Bidang Tri Dharma Perguruan Tinggi', 'Universitas', 'Aktif', 'MOU', 'MoU_UNP_dan_UNIB.pdf', '2021-02-09', '2026-02-09'),
(47, 89, 'Kerjasama UNIB dan UNILA', 'Kerja Sama Dalam Rangka Implementasi Kurikulum Merdeka Belajar Kampus Merdeka', 'Universitas', 'Aktif', 'PKS', 'PKS_Fakultas_Pertanian_UNIB_dan_UNILA.pdf', '2020-11-30', '2024-11-30'),
(48, 100, 'Kerjasama UNIB dan Universitas Islam Bandung', 'Kerja Sama Pengembangan Tri Dharma Perguruan Tinggi', 'Universitas', 'Aktif', 'MOU', 'MoU_antara_UNISBA_dan_UNIB.pdf', '2020-11-26', '2025-11-26'),
(49, 101, 'Kerjasama UNIB dengan Universitas Jenderal Soedirman', 'Kerja Sama Tentang Pelaksanaan Tri Dharma Perguruan Tinggi', 'Universitas', 'Aktif', 'MOU', 'MoU_UNSOED-UNIB.pdf', '2020-11-24', '2024-11-24'),
(50, 102, 'Kerjasama UNIB dengan Universitas Andalas', 'Kerja Sama Dalam Rangka Implementasi Kurikulum Merdeka Belajar Kampus Merdeka', 'Universitas', 'Aktif', 'PKS', 'PKS_Fakultas_Pertanian_UNIB_dan_UNAND.pdf', '2020-11-20', '2022-11-20'),
(51, 103, 'Kerjasama UNIB dengan Universitas Negeri Sebelas Maret', 'Kerja Sama Dalam Rangka Implementasi Kurikulum Merdeka Belajar Kampus Merdeka', 'Universitas', 'Aktif', 'PKS', 'PKS_Fakultas_Pertanian_UNIB_dan_UNS.pdf', '2020-11-17', '2022-11-17'),
(52, 104, 'Kerjasama UNIB dengan FKIP Universitas Jember', 'Kerja sama tentang Pengembangan Tri Dharma Perguruan Tinggi', 'Universitas', 'Aktif', 'PKS', '_FKIP_UNIB_dan_FKIP_UNJEMBER.pdf', '2020-11-03', '2023-11-03'),
(53, 180, 'Kerjasama UNIB dan Balai Pengawas Obat dan Makanan (BPOM) di Bengkulu', 'Kerja Sama di Bidang Pendidikan, Penelitian, dan Pengembangan Masyarakat', 'Pemerintahan', 'Aktif', 'MOU', 'MoU_BPOM_dan_UNIB.pdf', '2021-06-09', '2026-06-09'),
(54, 181, 'Kerjasama UNIB dan Perjanjian Kerja Sama Program Magang Mahasiswa Bersertifikat', 'Perjanjian Kerja Sama Program Magang Mahasiswa Bersertifikat', 'Pemerintahan', 'Aktif', 'PKS', 'PKS_UNIB_dan_Bulog_2021_opt1.pdf', '2021-03-30', '2021-09-30'),
(55, 182, 'Kerjasama UNIB dan Perwakilan Badan Kependudukan dan Keluarga Berencana Nasional Prov. Bengkulu', 'Kerja Sama tentang Peningkatan Program Kependudukan dan Keluarga Berencana Nasional Melalui Fasilitas Pengintegrasian Pendidikan Kependudukan di Universitas Bengkulu', 'Pemerintahan', 'Aktif', 'MOU', 'MoU_UNIB_dan_BKKBN.pdf', '2021-03-25', '2026-03-25'),
(56, 183, 'Kerjasama UNIB dan Kejaksaan Tinggi Bengkulu', 'Tri Dharma Perguruan Tinggi dan Penanganan Masalah Hukum Bidang Perdata dan Tata Usaha Negara', 'Pemerintahan', 'Aktif', 'MOU', 'MoU_UNIB_dan_Kejati_2020.pdf', '2021-02-04', '2024-02-04'),
(57, 184, 'Kerjasama UNIB dan Lembaga Pemasyarakatan Perempuan Kelas IIB Bengkulu', 'Kerja Sama tentang Pembinaan Kepribadian dan Kemandirian Bagi Warga Binaan Pemasyarakatan Pada Lembaga Pemasyarakatan Perempuan Kelas IIB Bengkulu', 'Pemerintahan', 'Aktif', 'PKS', 'Lapas_perempuan_kelas_IIb_dan_FKIP_UNIB.pdf', '2020-11-26', '2022-11-26'),
(58, 185, 'Kerjasama UNIB dan Balai Pengkajian Teknologi Pertanian (BPTP)', 'Kerja Sama Tentang Pendidikan, Penelitian, Pengabdian Kepada Masyarakat, Pertemuan Ilmiah, Pelatihan dan Pertukaran Data Serta Informasi', 'Pemerintahan', 'Aktif', 'PKS', 'PKS_Fakultas_Pertanian_UNIB_dan_BPTP.pdf', '2020-11-23', '2023-11-23'),
(59, 186, 'Kerjasama UNIB dan Pemerintahan Kabupaten Lampung Barat', 'Kerja Sama tentang Pendidikan, Penelitian, Pengabdian Kepada Masyarakat, Pengembangan Sumber Daya dan Pelayanan Kesehatan', 'Pemerintahan', 'Aktif', 'MOU', 'MoU_PemKab_Lampung_Barat_dan_UNIB.pdf', '2020-11-09', '2025-11-09'),
(60, 187, 'Kerjasama UNIB dan Dinas Perindustrian dan Perdagangan Kabupaten Musi Rawas', 'Kerja Sama Swakelola Pekerjaan Penyusunan Rencana Peraturan Daerah Kabupaten Musi Rawas tentang Retribusi Tarif Biaya Tera                                        \r\n                                                                              \r\n                                      ', 'Pemerintahan', 'Aktif', 'MOU', 'MoU_antara_Disperindag_Kab_Musi_Rawas_dan_UNIB.pdf', '2020-09-28', '2021-09-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mitra`
--

CREATE TABLE `tb_mitra` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `institusi` varchar(100) NOT NULL,
  `id_negara` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `status` enum('Menunggu','Ditolak','Diterima') NOT NULL,
  `gambar` text DEFAULT NULL,
  `berkas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mitra`
--

INSERT INTO `tb_mitra` (`id`, `email`, `institusi`, `id_negara`, `pesan`, `status`, `gambar`, `berkas`) VALUES
(62, '', 'Universitas PGRI Palembang', 100, '', 'Diterima', 'Universitas PGRI Palembang.jpg', 'Universitas PGRI Palembang.pdf'),
(82, '', 'STIKES TRI MANDIRI SAKTI', 100, '', 'Diterima', 'STIKES TRI MANDIRI SAKTI.jpg', 'STIKES TRI MANDIRI SAKTI.pdf'),
(84, '', 'Cukurova Universitesi, Imamoglu Vocational', 218, '', 'Diterima', 'Cukurova Universitesi, Imamoglu Vocational.jpg', 'Cukurova Universitesi, Imamoglu Vocational.pdf'),
(87, '', 'Universitas Negeri Padang', 100, '', 'Diterima', 'Universitas Negeri Padang.jpg', 'Universitas Negeri Padang.pdf'),
(88, '', 'Poltekkes Kemenkes Bengkulu', 100, '', 'Diterima', 'Poltekkes Kemenkes Bengkulu.jpg', 'Poltekkes Kemenkes Bengkulu.pdf'),
(89, '', 'Universitas Lampung', 100, '', 'Diterima', 'Universitas Lampung.jpg', 'Universitas Lampung.pdf'),
(91, '', 'Universitas Teuku Umar', 100, '', 'Diterima', 'Universitas Teuku Umar.jpg', 'Universitas Teuku Umar.pdf'),
(93, '', 'Universitas Dehasen', 100, '', 'Diterima', 'Universitas Dehasen.jpg', 'Universitas Dehasen.pdf'),
(100, '', 'Universitas Islam Bandung', 100, '', 'Diterima', 'Universitas Islam Bandung.jpg', 'Universitas Islam Bandung.pdf'),
(101, '', 'Universitas Jenderal Soedirman', 100, '', 'Diterima', 'Universitas Jenderal Soedirman.jpg', 'Universitas Jenderal Soedirman.pdf'),
(102, '', 'Universitas Andalas', 100, '', 'Diterima', 'Universitas Andalas.jpg', 'Universitas Andalas.pdf'),
(103, '', 'Universitas Negeri Sebelas Maret', 100, '', 'Diterima', 'Universitas Negeri Sebelas Maret.jpg', 'Universitas Negeri Sebelas Maret.pdf'),
(104, '', 'FKIP Universitas Jember', 100, '', 'Diterima', 'FKIP Universitas Jember.jpg', 'FKIP Universitas Jember.pdf'),
(105, '', 'Fakultas Ekonomi Universitas Negeri Surabaya', 100, '', 'Diterima', 'Fakultas Ekonomi Universitas Negeri Surabaya.jpg', 'Fakultas Ekonomi Universitas Negeri Surabaya.pdf'),
(106, '', 'Fakultas Ekonomi dan Bisnis Universitas Jambi', 100, '', 'Diterima', 'Fakultas Ekonomi dan Bisnis Universitas Jambi.jpg', 'Fakultas Ekonomi dan Bisnis Universitas Jambi.pdf'),
(107, '', 'Universitas Negeri Makassar', 100, '', 'Diterima', 'Universitas Negeri Makassar.jpg', 'Universitas Negeri Makassar.pdf'),
(108, '', 'Universitas Pendidikan Ganesha', 100, '', 'Diterima', 'Universitas Pendidikan Ganesha.jpg', 'Universitas Pendidikan Ganesha.pdf'),
(109, '', 'Universitas Jember', 100, '', 'Diterima', 'Universitas Jember.jpg', 'Universitas Jember.pdf'),
(110, '', 'Universitas Tidar', 100, '', 'Diterima', 'Universitas Tidar.jpg', 'Universitas Tidar.pdf'),
(111, '', 'Universitas Muhammadiyah Palembang', 100, '', 'Diterima', 'Universitas Muhammadiyah Palembang.jpg', 'Universitas Muhammadiyah Palembang.pdf'),
(112, '', 'Universitas Syiah Kuala', 100, '', 'Diterima', 'Universitas Syiah Kuala.jpg', 'Universitas Syiah Kuala.pdf'),
(113, '', '	Universitas Brawijaya', 100, '', 'Diterima', '	Universitas Brawijaya.jpg', '	Universitas Brawijaya.pdf'),
(114, '', 'UIN Syarif Hidayatullah', 100, '', 'Diterima', 'UIN Syarif Hidayatullah.jpg', 'UIN Syarif Hidayatullah.pdf'),
(115, '', '	Universitas Negeri Malang', 100, '', 'Diterima', '	Universitas Negeri Malang.jpg', '	Universitas Negeri Malang.pdf'),
(116, '', 'Universitas Sultan Ageng Tirtayasa', 100, '', 'Diterima', '	Universitas Sultan Ageng Tirtayasa.jpg', 'Universitas Sultan Ageng Tirtayasa.pdf'),
(117, '', 'Universitas Mataram', 100, '', 'Diterima', 'Universitas Mataram.jpg', 'UUniversitas Mataram.pdf'),
(118, '', 'Universitas Halu Oleo', 100, '', 'Diterima', 'Universitas Halu Oleo.jpg', 'Universitas Halu Oleo.pdf'),
(119, '', 'Universitas Halu Oleo', 100, '', 'Diterima', 'Universitas Halu Oleo.jpg', 'Universitas Halu Oleo.pdf'),
(120, '', 'Universitas Negeri Surabaya', 100, '', 'Diterima', 'Universitas Negeri Surabaya.jpg', 'Universitas Negeri Surabaya.pdf'),
(121, '', 'Institut Sains & Teknologi APKRIND', 100, '', 'Diterima', 'Institut Sains & Teknologi APKRIND.jpg', 'Institut Sains & Teknologi APKRIND.pdf'),
(122, '', 'Warren Wilson Collage', 226, '', 'Diterima', 'Warren Wilson Collage.jpg', 'Warren Wilson Collage.pdf'),
(123, '', '	Forman Cristian Collage', 162, '', 'Diterima', '	Forman Cristian Collage.jpg', '	Forman Cristian Collage.pdf'),
(124, '', 'Amity University Haryana', 99, '', 'Diterima', 'Amity University Haryana.jpg', 'Amity University Haryana.pdf'),
(125, '', 'Fakultas Teknik Universitas Negeri Yogyakarta', 100, '', 'Diterima', 'Fakultas Teknik Universitas Negeri Yogyakarta.jpg', 'Fakultas Teknik Universitas Negeri Yogyakarta.pdf'),
(126, '', 'Universiti Sains Malaysia', 129, '', 'Diterima', 'Universiti Sains Malaysia.jpg', 'Universiti Sains Malaysia.pdf'),
(127, '', 'Institute of Tropical Aquacultere and Fisheries (AKUATROP)', 129, '', 'Diterima', 'Institute of Tropical Aquacultere and Fisheries (AKUATROP).jpg', 'Institute of Tropical Aquacultere and Fisheries (AKUATROP).pdf'),
(128, '', 'Lincoln University Collage Malaysia', 129, '', 'Diterima', 'Lincoln University Collage Malaysia.jpg', 'Lincoln University Collage Malaysia.pdf'),
(129, '', 'Oxford University', 225, '', 'Diterima', 'Oxford University.jpg', 'Oxford University.pdf'),
(130, '', 'Ming Chi University of Technology', 208, '', 'Diterima', 'Ming Chi University of Technology.jpg', 'Ming Chi University of Technology.pdf'),
(131, '', 'Fakultas Ilmu Sosial dan Ilmu Politik Dharmawangsa Medan', 100, '', 'Diterima', 'Fakultas Ilmu Sosial dan Ilmu Politik Dharmawangsa Medan.jpg', 'Fakultas Ilmu Sosial dan Ilmu Politik Dharmawangsa Medan.pdf'),
(132, '', 'Institut Seni Indonesia Padangpanjang', 100, '', 'Diterima', 'Institut Seni Indonesia Padangpanjang.jpg', 'Institut Seni Indonesia Padangpanjang.pdf'),
(133, '', 'University Utara Malaysia', 129, '', 'Diterima', 'Universitas Negeri Surabaya.jpg', 'Universitas Negeri Surabaya.pdf'),
(134, '', 'Faculty of Communication Sciences Prince of Songkla University', 211, '', 'Diterima', 'Faculty of Communication Sciences Prince of Songkla University.jpg', 'Faculty of Communication Sciences Prince of Songkla University.pdf'),
(135, '', '	Universitas Pat Petulai', 100, '', 'Diterima', '	Universitas Pat Petulai.jpg', 'Universitas Pat Petulai.pdf'),
(136, '', 'Universitas Tarumanegara', 100, '', 'Diterima', 'Universitas Tarumanegara.jpg', 'Universitas Tarumanegara.pdf'),
(137, '', 'Universitas Budi Luhur', 100, '', 'Diterima', 'Universitas Budi Luhur.jpg', 'Universitas Budi Luhur.pdf'),
(138, '', 'Columbus State University', 226, '', 'Diterima', 'Columbus State University.jpg', 'Columbus State University.pdf'),
(139, '', 'Dongguk University', 112, '', 'Diterima', 'Dongguk University.jpg', 'Dongguk University.pdf'),
(140, '', 'IAIN Curup', 100, '', 'Diterima', 'IAIN Curup.jpg', 'IAIN Curup.pdf'),
(141, '', 'University New England', 13, '', 'Diterima', 'University New England.jpg', 'University New England.pdf'),
(142, '', 'Universiti Sultan Zainal Abidin', 129, '', 'Diterima', 'Universiti Sultan Zainal Abidin.jpg', 'Universiti Sultan Zainal Abidin.pdf'),
(143, '', 'Kasersart University', 211, '', 'Diterima', 'Kasersart University.jpg', 'Kasersart University.pdf'),
(144, '', 'Pasca Sarjana Universitas PGRI Palembang', 100, '', 'Diterima', 'Pasca Sarjana Universitas PGRI Palembang.jpg', 'Pasca Sarjana Universitas PGRI Palembang.pdf'),
(145, '', 'Universitas Jambi', 100, '', 'Diterima', 'Universitas Jambi.jpg', 'Universitas Jambi.pdf'),
(146, '', 'Universitas Riau', 100, '', 'Diterima', 'Universitas Riau.jpg', 'Universitas Riau.pdf'),
(147, '', 'Universitas Palangkaraya', 100, '', 'Diterima', 'Universitas Palangkaraya.jpg', 'Universitas Palangkaraya.pdf'),
(148, '', 'Universitas Palangkaraya', 100, '', 'Diterima', 'Universitas Palangkaraya.jpg', 'Universitas Palangkaraya.pdf'),
(149, '', 'Universitas Sriwijaya', 100, '', 'Diterima', 'Universitas Sriwijaya.jpg', 'Universitas Sriwijaya.pdf'),
(150, '', 'Universiti Malaysia Kelantan', 100, '', 'Diterima', 'Universiti Malaysia Kelantan.jpg', 'Universiti Malaysia Kelantan.pdf'),
(151, '', 'Politeknik Pelayaran Sumatra Barat', 100, '', 'Diterima', 'Politeknik Pelayaran Sumatra Barat.jpg', 'Politeknik Pelayaran Sumatra Barat.pdf'),
(152, '', 'Kansas University', 226, '', 'Diterima', 'Kansas University.jpg', 'Kansas University.pdf'),
(153, '', 'Universitas Negeri Yogyakarta', 100, '', 'Diterima', 'Universitas Negeri Yogyakarta.jpg', 'Universitas Negeri Yogyakarta.pdf'),
(154, '', 'The University of Dundee', 150, '', 'Diterima', 'The University of Dundee.jpg', 'The University of Dundee.pdf'),
(155, '', 'Perpustakaan IAIN Bengkulu', 100, '', 'Diterima', 'Perpustakaan IAIN Bengkulu.jpg', 'Perpustakaan IAIN Bengkulu.pdf'),
(156, '', 'Perpustakaan Stain Curup', 100, '', 'Diterima', 'Perpustakaan Stain Curup.jpg', 'Perpustakaan Stain Curup.pdf'),
(157, '', 'Perpustakaan Universitas Muhammadiyah Bengkulu', 100, '', 'Diterima', 'Perpustakaan Universitas Muhammadiyah Bengkulu.jpg', 'Perpustakaan Universitas Muhammadiyah Bengkulu.pdf'),
(158, '', 'Perpustakaan Universitas Surabaya', 100, '', 'Diterima', 'Perpustakaan Universitas Surabaya.jpg', 'Perpustakaan Universitas Surabaya.pdf'),
(159, '', 'Leiden Law School (Leiden University)', 150, '', 'Diterima', 'Leiden Law School (Leiden University).jpg', 'Leiden Law School (Leiden University).pdf'),
(160, '', 'Erasmus School of Law (Erasmus University Rotterdam)', 150, '', 'Diterima', '	Erasmus School of Law (Erasmus University Rotterdam).jpg', 'Erasmus School of Law (Erasmus University Rotterdam).pdf'),
(161, '', 'Unit Perpustakaan Poltekkes Kemenkes Bengkulu', 100, '', 'Diterima', 'Unit Perpustakaan Poltekkes Kemenkes Bengkulu.jpg', 'Unit Perpustakaan Poltekkes Kemenkes Bengkulu.pdf'),
(162, '', 'Universitas Warmadewa', 100, '', 'Diterima', 'Universitas Warmadewa.jpg', 'Universitas Warmadewa.pdf'),
(163, '', 'Gifu University Japan', 107, '', 'Diterima', 'Gifu University Japan.jpg', 'Gifu University Japan.pdf'),
(164, '', 'Fakultas Bahasa dan Seni Universitas Negeri Jakarta', 100, '', 'Diterima', 'Fakultas Bahasa dan Seni Universitas Negeri Jakarta.jpg', 'Fakultas Bahasa dan Seni Universitas Negeri Jakarta.pdf'),
(165, '', 'Fakultas Bahasa dan Seni Universitas Negeri Medan', 100, '', 'Diterima', 'Fakultas Bahasa dan Seni Universitas Negeri Medan.jpg', 'Fakultas Bahasa dan Seni Universitas Negeri Medan.pdf'),
(166, '', 'Fakultas Bahasa dan Seni Universitas Negeri Padang', 100, '', 'Diterima', 'Fakultas Bahasa dan Seni Universitas Negeri Padang.jpg', 'Universitas Sriwijaya.pdf'),
(167, '', 'Fakultas Ilmu Budaya Universitas Andalas', 100, '', 'Diterima', 'Fakultas Ilmu Budaya Universitas Andalas.jpg', 'Fakultas Ilmu Budaya Universitas Andalas.pdf'),
(168, '', 'Fakultas Ilmu Budaya Universitas Jambi', 100, '', 'Diterima', 'Fakultas Ilmu Budaya Universitas Jambi.jpg', 'Fakultas Ilmu Budaya Universitas Jambi.pdf'),
(169, '', 'Universitas Terbuka', 100, '', 'Diterima', 'Universitas Terbuka.jpg', 'Universitas Terbuka.pdf'),
(170, '', 'FKIP Universitas Pasir Pangaraian', 100, '', 'Diterima', 'FKIP Universitas Pasir Pangaraian.jpg', 'FKIP Universitas Pasir Pangaraian.pdf'),
(171, '', 'Institute of Social Walfare and Research, University of Dhaka', 18, '', 'Diterima', 'Institute of Social Walfare and Research, University of Dhaka.jpg', 'Institute of Social Walfare and Research, University of Dhaka.pdf'),
(172, '', 'Tainan University of Technology', 208, '', 'Diterima', 'Universitas Sriwijaya.jpg', 'Universitas Sriwijaya.pdf'),
(173, '', 'National Formosa University', 208, '', 'Diterima', 'National Formosa University.jpg', 'National Formosa University.pdf'),
(174, '', 'Sekolah Tinggi Penyuluhan Pertanian', 100, '', 'Diterima', 'Sekolah Tinggi Penyuluhan Pertanian.jpg', 'Sekolah Tinggi Penyuluhan Pertanian.pdf'),
(175, '', 'Fakultas Pertanian Universitas Muhammadiyah Bengkulu', 100, '', 'Diterima', 'Fakultas Pertanian Universitas Muhammadiyah Bengkulu.jpg', 'Fakultas Pertanian Universitas Muhammadiyah Bengkulu.pdf'),
(180, '', 'Balai Pengawas Obat dan Makanan (BPOM) di Bengkulu', 100, '', 'Diterima', NULL, NULL),
(181, '', 'Perum Bulog', 100, '', 'Diterima', NULL, NULL),
(182, '', 'Perwakilan Badan Kependudukan dan Keluarga Berencana Nasional Prov. Bengkulu', 100, '', 'Diterima', NULL, NULL),
(183, '', 'Kejaksaan Tinggi Bengkulu', 100, '', 'Diterima', NULL, NULL),
(184, '', 'Lembaga Pemasyarakatan Perempuan Kelas IIB Bengkulu', 100, '', 'Diterima', NULL, NULL),
(185, '', 'Balai Pengkajian Teknologi Pertanian (BPTP)', 100, '', 'Diterima', NULL, NULL),
(186, '', 'Pemerintahan Kabupaten Lampung Barat', 100, '', 'Diterima', NULL, NULL),
(187, '', 'Dinas Perindustrian dan Perdagangan Kabupaten Musi Rawas', 100, '', 'Diterima', NULL, NULL),
(188, '', 'BALITBANG SDM Pusat Pengembangan Profesi san Sertifikasi, Kemenkominfo', 100, '', 'Diterima', NULL, NULL),
(189, '', 'Dinas Kesehatan Kabupaten Rejang Lebong', 100, '', 'Diterima', NULL, NULL),
(190, '', 'RSUD Argamakmur', 100, '', 'Diterima', NULL, NULL),
(191, '', 'RSUD Curup', 100, '', 'Diterima', NULL, NULL),
(192, '', 'Rumah Sakit Tk IV. 02.07.01 Zainul Arifin', 100, '', 'Diterima', NULL, NULL),
(193, '', 'PemKab Musi Rawas Utara', 100, '', 'Diterima', NULL, NULL),
(194, '', '	RSKJ Soeprapto', 100, '', 'Diterima', NULL, NULL),
(195, '', 'Kejaksaan Negeri Bengkulu Tengah', 100, '', 'Diterima', NULL, NULL),
(196, '', 'Polres Lebong', 100, '', 'Diterima', NULL, NULL),
(197, '', 'Badan Pusat Statistik Provinsi Bengkulu', 100, '', 'Diterima', NULL, NULL),
(198, '', 'Badan Pengkajian dan Pengembangan Kebijakan Kementerian Luar Negeri Republik Indonesia', 100, '', 'Diterima', NULL, NULL),
(199, '', 'Pusat Pendidikan Sumberdaya Manusia Kesehatan Badan Pengembangan dan Pemberdayaan Sumber Daya Manusi', 100, '', 'Diterima', NULL, NULL),
(200, '', 'Badan Standarisasi Nasional', 100, '', 'Diterima', NULL, NULL),
(201, '', 'RSUD TAIS', 100, '', 'Diterima', NULL, NULL),
(202, '', 'Pemerintah Kabupaten Bengkulu Selatan', 100, '', 'Diterima', NULL, NULL),
(203, '', 'Pemerintah Kabupaten Kaur', 100, '', 'Diterima', NULL, NULL),
(204, '', 'Pemerintah Kabupaten Bengkulu Tengah', 100, '', 'Diterima', NULL, NULL),
(205, '', 'PT. Gans Energi Indonesia', 100, '', 'Diterima', NULL, NULL),
(206, '', '	Bank Bengkulu', 100, '', 'Diterima', NULL, NULL),
(207, '', 'Kantor Akuntan Publik Hari Purnomo dan Jaswadi', 100, '', 'Diterima', NULL, NULL),
(208, '', 'PT. Laut Biru', 100, '', 'Diterima', NULL, NULL),
(209, '', 'Bengkulu Express Media Group', 100, '', 'Diterima', NULL, NULL),
(210, '', 'Imani-Prokami', 100, '', 'Diterima', NULL, NULL),
(211, '', 'Kelompok Swadaya Masyarakat Sejahtera Bentiring', 100, '', 'Diterima', NULL, NULL),
(212, '', 'PT. Pusat Layanan Tes Indonesia', 100, '', 'Diterima', NULL, NULL),
(213, '', 'Rumah Sakit Umum UMMI', 100, '', 'Diterima', NULL, NULL),
(214, '', 'Rumah Sakit Mutiara Bunda Lampung Kelas D', 100, '', 'Diterima', NULL, NULL),
(215, '', 'Forum Human Capital Indonesia', 100, '', 'Diterima', NULL, NULL),
(216, '', 'Masyarakat Anti Fitnah Indonesia (Mafindo)', 100, '', 'Diterima', NULL, NULL),
(217, '', 'Rakyat Bengkulu Televisi (RBTV)', 100, '', 'Diterima', NULL, NULL),
(218, '', 'Aliansi Jurnais Independen (AJI) perwakilan Bengkulu', 100, '', 'Diterima', NULL, NULL),
(219, '', 'Bengkulu Ekspress Televisi (BETV)', 100, '', 'Diterima', NULL, NULL),
(220, '', 'PT Agung Automall Bengkulu', 100, '', 'Diterima', NULL, NULL),
(221, '', 'PTPN 7', 100, '', 'Diterima', NULL, NULL),
(222, '', 'PT PLN (Persero)', 100, '', 'Diterima', NULL, NULL),
(223, '', 'International Development center of Japan INC', 107, '', 'Diterima', NULL, NULL),
(224, '', 'Islamic Culture Center', 100, '', 'Diterima', NULL, NULL),
(225, '', 'Laznas Bangun Sejahtera Mitra Umat', 100, '', 'Diterima', NULL, NULL),
(226, '', 'FIG DIRECT Sdn. Bhd', 129, '', 'Diterima', NULL, NULL),
(227, '', 'Panti Sosial Tresna Werdha', 100, '', 'Diterima', NULL, NULL),
(228, '', 'PT Bank BNI', 100, '', 'Diterima', NULL, NULL),
(229, '', 'Perusahaan Listrik Negara (PLN)', 100, '', 'Diterima', NULL, NULL),
(230, '', 'Bank Muamalat', 100, '', 'Diterima', NULL, NULL),
(234, '', 'Telkomsel', 100, '', 'Diterima', NULL, NULL),
(235, '', 'Agratec Bio', 177, '', 'Diterima', NULL, NULL),
(236, '', 'Lembaga Pengembangan Jasa Konstruksi Provinsi Bengkulu', 100, '', 'Diterima', NULL, NULL),
(237, '', 'PT. Rama Cipta Mandiri', 100, '', 'Diterima', NULL, NULL),
(238, '', 'Bank Indonesia', 100, '', 'Diterima', NULL, NULL),
(239, '', 'PT Penjamin Infrastruktur Indonesia', 100, '', 'Diterima', NULL, NULL),
(240, '', 'Rumah Sakit Hasan Sadikin', 100, '', 'Diterima', NULL, NULL),
(241, '', 'PT Bank Mandiri TASPEN', 100, '', 'Diterima', NULL, NULL),
(242, '', 'Bank Mandiri Taspen', 100, '', 'Diterima', NULL, NULL),
(243, '', 'PT Jagung Indonesia', 100, '', 'Diterima', NULL, NULL),
(244, '', 'Transformasi Untuk Keadilan Indonesia', 100, '', 'Diterima', NULL, NULL),
(245, '', 'Bank BNI 46', 100, '', 'Diterima', NULL, NULL),
(246, '', 'PT Pupuk Sriwidjaja', 100, '', 'Diterima', NULL, NULL),
(247, '', 'Bank Mandiri', 100, '', 'Diterima', NULL, NULL),
(248, '', 'Bank BRI', 100, '', 'Diterima', NULL, NULL),
(249, '', 'PT. Pusat Layanan Tes Indonesia', 100, '', 'Diterima', NULL, NULL),
(250, '', 'PT. Pelindo II', 100, '', 'Diterima', NULL, NULL),
(251, '', 'PT Pupuk Sriwidjaja Palembang', 100, '', 'Diterima', NULL, NULL),
(252, '', 'ASEAN NETWORK LEARNING', 100, '', 'Diterima', NULL, NULL);

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
(4, 'Sahrial Ihsani Ishak', 'sp@gmail.com', 'Mahasiswa', 'MCUT_Application_Form_of_International_Students.doc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_negara`
--

CREATE TABLE `tb_negara` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_negara`
--

INSERT INTO `tb_negara` (`id`, `name`, `nicename`) VALUES
(1, 'AFGHANISTAN', 'Afghanistan'),
(2, 'ALBANIA', 'Albania'),
(3, 'ALGERIA', 'Algeria'),
(4, 'AMERICAN SAMOA', 'American Samoa'),
(5, 'ANDORRA', 'Andorra'),
(6, 'ANGOLA', 'Angola'),
(7, 'ANGUILLA', 'Anguilla'),
(8, 'ANTARCTICA', 'Antarctica'),
(9, 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda'),
(10, 'ARGENTINA', 'Argentina'),
(11, 'ARMENIA', 'Armenia'),
(12, 'ARUBA', 'Aruba'),
(13, 'AUSTRALIA', 'Australia'),
(14, 'AUSTRIA', 'Austria'),
(15, 'AZERBAIJAN', 'Azerbaijan'),
(16, 'BAHAMAS', 'Bahamas'),
(17, 'BAHRAIN', 'Bahrain'),
(18, 'BANGLADESH', 'Bangladesh'),
(19, 'BARBADOS', 'Barbados'),
(20, 'BELARUS', 'Belarus'),
(21, 'BELGIUM', 'Belgium'),
(22, 'BELIZE', 'Belize'),
(23, 'BENIN', 'Benin'),
(24, 'BERMUDA', 'Bermuda'),
(25, 'BHUTAN', 'Bhutan'),
(26, 'BOLIVIA', 'Bolivia'),
(27, 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina'),
(28, 'BOTSWANA', 'Botswana'),
(29, 'BOUVET ISLAND', 'Bouvet Island'),
(30, 'BRAZIL', 'Brazil'),
(31, 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory'),
(32, 'BRUNEI DARUSSALAM', 'Brunei Darussalam'),
(33, 'BULGARIA', 'Bulgaria'),
(34, 'BURKINA FASO', 'Burkina Faso'),
(35, 'BURUNDI', 'Burundi'),
(36, 'CAMBODIA', 'Cambodia'),
(37, 'CAMEROON', 'Cameroon'),
(38, 'CANADA', 'Canada'),
(39, 'CAPE VERDE', 'Cape Verde'),
(40, 'CAYMAN ISLANDS', 'Cayman Islands'),
(41, 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic'),
(42, 'CHAD', 'Chad'),
(43, 'CHILE', 'Chile'),
(44, 'CHINA', 'China'),
(45, 'CHRISTMAS ISLAND', 'Christmas Island'),
(46, 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands'),
(47, 'COLOMBIA', 'Colombia'),
(48, 'COMOROS', 'Comoros'),
(49, 'CONGO', 'Congo'),
(50, 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the'),
(51, 'COOK ISLANDS', 'Cook Islands'),
(52, 'COSTA RICA', 'Costa Rica'),
(53, 'COTE D\'IVOIRE', 'Cote D\'Ivoire'),
(54, 'CROATIA', 'Croatia'),
(55, 'CUBA', 'Cuba'),
(56, 'CYPRUS', 'Cyprus'),
(57, 'CZECH REPUBLIC', 'Czech Republic'),
(58, 'DENMARK', 'Denmark'),
(59, 'DJIBOUTI', 'Djibouti'),
(60, 'DOMINICA', 'Dominica'),
(61, 'DOMINICAN REPUBLIC', 'Dominican Republic'),
(62, 'ECUADOR', 'Ecuador'),
(63, 'EGYPT', 'Egypt'),
(64, 'EL SALVADOR', 'El Salvador'),
(65, 'EQUATORIAL GUINEA', 'Equatorial Guinea'),
(66, 'ERITREA', 'Eritrea'),
(67, 'ESTONIA', 'Estonia'),
(68, 'ETHIOPIA', 'Ethiopia'),
(69, 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)'),
(70, 'FAROE ISLANDS', 'Faroe Islands'),
(71, 'FIJI', 'Fiji'),
(72, 'FINLAND', 'Finland'),
(73, 'FRANCE', 'France'),
(74, 'FRENCH GUIANA', 'French Guiana'),
(75, 'FRENCH POLYNESIA', 'French Polynesia'),
(76, 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories'),
(77, 'GABON', 'Gabon'),
(78, 'GAMBIA', 'Gambia'),
(79, 'GEORGIA', 'Georgia'),
(80, 'GERMANY', 'Germany'),
(81, 'GHANA', 'Ghana'),
(82, 'GIBRALTAR', 'Gibraltar'),
(83, 'GREECE', 'Greece'),
(84, 'GREENLAND', 'Greenland'),
(85, 'GRENADA', 'Grenada'),
(86, 'GUADELOUPE', 'Guadeloupe'),
(87, 'GUAM', 'Guam'),
(88, 'GUATEMALA', 'Guatemala'),
(89, 'GUINEA', 'Guinea'),
(90, 'GUINEA-BISSAU', 'Guinea-Bissau'),
(91, 'GUYANA', 'Guyana'),
(92, 'HAITI', 'Haiti'),
(93, 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands'),
(94, 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)'),
(95, 'HONDURAS', 'Honduras'),
(96, 'HONG KONG', 'Hong Kong'),
(97, 'HUNGARY', 'Hungary'),
(98, 'ICELAND', 'Iceland'),
(99, 'INDIA', 'India'),
(100, 'INDONESIA', 'Indonesia'),
(101, 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of'),
(102, 'IRAQ', 'Iraq'),
(103, 'IRELAND', 'Ireland'),
(104, 'ISRAEL', 'Israel'),
(105, 'ITALY', 'Italy'),
(106, 'JAMAICA', 'Jamaica'),
(107, 'JAPAN', 'Japan'),
(108, 'JORDAN', 'Jordan'),
(109, 'KAZAKHSTAN', 'Kazakhstan'),
(110, 'KENYA', 'Kenya'),
(111, 'KIRIBATI', 'Kiribati'),
(112, 'SOUTH KOREA', 'South Korea'),
(113, 'NORTH KOREA', 'NORTH KOREA'),
(114, 'KUWAIT', 'Kuwait'),
(115, 'KYRGYZSTAN', 'Kyrgyzstan'),
(116, 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic'),
(117, 'LATVIA', 'Latvia'),
(118, 'LEBANON', 'Lebanon'),
(119, 'LESOTHO', 'Lesotho'),
(120, 'LIBERIA', 'Liberia'),
(121, 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya'),
(122, 'LIECHTENSTEIN', 'Liechtenstein'),
(123, 'LITHUANIA', 'Lithuania'),
(124, 'LUXEMBOURG', 'Luxembourg'),
(125, 'MACAO', 'Macao'),
(126, 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of'),
(127, 'MADAGASCAR', 'Madagascar'),
(128, 'MALAWI', 'Malawi'),
(129, 'MALAYSIA', 'Malaysia'),
(130, 'MALDIVES', 'Maldives'),
(131, 'MALI', 'Mali'),
(132, 'MALTA', 'Malta'),
(133, 'MARSHALL ISLANDS', 'Marshall Islands'),
(134, 'MARTINIQUE', 'Martinique'),
(135, 'MAURITANIA', 'Mauritania'),
(136, 'MAURITIUS', 'Mauritius'),
(137, 'MAYOTTE', 'Mayotte'),
(138, 'MEXICO', 'Mexico'),
(139, 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of'),
(140, 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of'),
(141, 'MONACO', 'Monaco'),
(142, 'MONGOLIA', 'Mongolia'),
(143, 'MONTSERRAT', 'Montserrat'),
(144, 'MOROCCO', 'Morocco'),
(145, 'MOZAMBIQUE', 'Mozambique'),
(146, 'MYANMAR', 'Myanmar'),
(147, 'NAMIBIA', 'Namibia'),
(148, 'NAURU', 'Nauru'),
(149, 'NEPAL', 'Nepal'),
(150, 'NETHERLANDS', 'Netherlands'),
(151, 'NETHERLANDS ANTILLES', 'Netherlands Antilles'),
(152, 'NEW CALEDONIA', 'New Caledonia'),
(153, 'NEW ZEALAND', 'New Zealand'),
(154, 'NICARAGUA', 'Nicaragua'),
(155, 'NIGER', 'Niger'),
(156, 'NIGERIA', 'Nigeria'),
(157, 'NIUE', 'Niue'),
(158, 'NORFOLK ISLAND', 'Norfolk Island'),
(159, 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands'),
(160, 'NORWAY', 'Norway'),
(161, 'OMAN', 'Oman'),
(162, 'PAKISTAN', 'Pakistan'),
(163, 'PALAU', 'Palau'),
(164, 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied'),
(165, 'PANAMA', 'Panama'),
(166, 'PAPUA NEW GUINEA', 'Papua New Guinea'),
(167, 'PARAGUAY', 'Paraguay'),
(168, 'PERU', 'Peru'),
(169, 'PHILIPPINES', 'Philippines'),
(170, 'PITCAIRN', 'Pitcairn'),
(171, 'POLAND', 'Poland'),
(172, 'PORTUGAL', 'Portugal'),
(173, 'PUERTO RICO', 'Puerto Rico'),
(174, 'QATAR', 'Qatar'),
(175, 'REUNION', 'Reunion'),
(176, 'ROMANIA', 'Romania'),
(177, 'RUSSIAN', 'Russian'),
(178, 'RWANDA', 'Rwanda'),
(179, 'SAINT HELENA', 'Saint Helena'),
(180, 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis'),
(181, 'SAINT LUCIA', 'Saint Lucia'),
(182, 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon'),
(183, 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines'),
(184, 'SAMOA', 'Samoa'),
(185, 'SAN MARINO', 'San Marino'),
(186, 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe'),
(187, 'SAUDI ARABIA', 'Saudi Arabia'),
(188, 'SENEGAL', 'Senegal'),
(189, 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro'),
(190, 'SEYCHELLES', 'Seychelles'),
(191, 'SIERRA LEONE', 'Sierra Leone'),
(192, 'SINGAPORE', 'Singapore'),
(193, 'SLOVAKIA', 'Slovakia'),
(194, 'SLOVENIA', 'Slovenia'),
(195, 'SOLOMON ISLANDS', 'Solomon Islands'),
(196, 'SOMALIA', 'Somalia'),
(197, 'SOUTH AFRICA', 'South Africa'),
(198, 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands'),
(199, 'SPAIN', 'Spain'),
(200, 'SRI LANKA', 'Sri Lanka'),
(201, 'SUDAN', 'Sudan'),
(202, 'SURINAME', 'Suriname'),
(203, 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen'),
(204, 'SWAZILAND', 'Swaziland'),
(205, 'SWEDEN', 'Sweden'),
(206, 'SWITZERLAND', 'Switzerland'),
(207, 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic'),
(208, 'TAIWAN', 'Taiwan'),
(209, 'TAJIKISTAN', 'Tajikistan'),
(210, 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of'),
(211, 'THAILAND', 'Thailand'),
(212, 'TIMOR-LESTE', 'Timor-Leste'),
(213, 'TOGO', 'Togo'),
(214, 'TOKELAU', 'Tokelau'),
(215, 'TONGA', 'Tonga'),
(216, 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago'),
(217, 'TUNISIA', 'Tunisia'),
(218, 'TURKEY', 'Turkey'),
(219, 'TURKMENISTAN', 'Turkmenistan'),
(220, 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands'),
(221, 'TUVALU', 'Tuvalu'),
(222, 'UGANDA', 'Uganda'),
(223, 'UKRAINE', 'Ukraine'),
(224, 'UNITED ARAB EMIRATES', 'United Arab Emirates'),
(225, 'UNITED KINGDOM', 'United Kingdom'),
(226, 'UNITED STATES', 'United States'),
(227, 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands'),
(228, 'URUGUAY', 'Uruguay'),
(229, 'UZBEKISTAN', 'Uzbekistan'),
(230, 'VANUATU', 'Vanuatu'),
(231, 'VENEZUELA', 'Venezuela'),
(232, 'VIET NAM', 'Viet Nam'),
(233, 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British'),
(234, 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.'),
(235, 'WALLIS AND FUTUNA', 'Wallis and Futuna'),
(236, 'WESTERN SAHARA', 'Western Sahara'),
(237, 'YEMEN', 'Yemen'),
(238, 'ZAMBIA', 'Zambia'),
(239, 'ZIMBABWE', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_organisasi`
--

CREATE TABLE `tb_organisasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tahun` int(4) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_organisasi`
--

INSERT INTO `tb_organisasi` (`id`, `nama`, `tahun`, `keterangan`, `gambar`) VALUES
(2, 'SAFE NETWORK', 2013, 'Formed in 2013,  Asia Pacific Network for  Sustainable Agriculture,  Food and Energy  (SAFE-Network) has the SAFE conference series Amazon shares price which is established  as the principal international conference on sustainable agriculture, food and energy in Asia Pacific. International Conference on Sustainable Agriculture,  Food and Energy (SAFE2014)  are important events to share common experiences and the premier forum for the presentation of technological advances and research results in the fields of Sustainable Agriculture, Food and Energy.  This conference is the second conference after the 1st International Conference on Sustainable Agriculture, Food, and Energy (SAFE2013) in Padang, Indonesia (12-14 May 2013).\r\n\r\nThe objective of the conference are: (1) To exchange and share the experiences,new ideas, sustainability concepts and research results on sustainable agriculture, foods cience & technology and energy; (2) To promote collaboration in research on sustainable agriculture, foods and energy production; (3) To establish a regional network on sustainable agriculture, food science & technology and energy; (4) To how to invest in Amazon shares promote global action for sustainable agriculture, food and energy\r\n\r\nPapers presented at SAFE2014 will be published in International Journal on  Advanced Science, Engineering and Information Technology (IJASEIT) | ISSN : 2088-5334 and Asia Pacific J. Sus. Agri. Food & Energy ISSN 2338-1345 . The papers from Plenary Speaker will be published in book entitled Sustainable Agriculture,  Food and Energy: A Guide for Global Action.\r\n\r\nThe theme of SAFE2014 is “Global Action For Sustainable Agriculture, Food and Energy” With the said major themes this conference  invites research papers on the following sub-themes and topics: (1)  Sustainability of food in science and technology (2)  Sustanable Bioenergy Sources and Management. (3)  Sustainable Agriculture and food production (4)  Sustainability assessment of food, bioenergy how to buy Amazon shares in the South Africa and agricultural development (5)  Policy development and guidelines to support global action for sustainable agriculture, food and energy in Asia Pacific.  \r\n\r\nRegistration and submission\r\n\r\nWe are looking forward to welcoming you in Bali!\r\n\r\nDr. Novizar Nazir\r\nExecutive Chairman SAFE-Network Coordinator', 'ALN-Certificate1.jpg'),
(3, 'Association of Agricultural Technology in Southeast Asia (AATSEA)', 2021, 'AATSEA is non-profitable organization and dedicated to a mission of long-term research, education and outreach related to the modern agricultural technology in Southeast Asia.\r\n\r\nMission. The primary mission of AATSEA is to conduct and stimulate long-term research on the relationships between members in Southeast Asia.\r\n\r\nOperation. The ranch is managed at full production levels to collaborate for research purposes. Revenues from modern agricultural technology support research activities. This provides staff and visiting scientists a unique opportunity to visit each other both sides.\r\n\r\nResearch. Research at AATSEA has provided the research programs in advanced agricultural technology and has addressed various aspects of agriculture concern in environmental friendly.\r\n\r\nResearchers include the on-site and visiting scientists among members’ laboratory and field work. Current projects include environmental friendly research for Organic Agriculture to meet world standard.\r\n\r\nCooperative Projects. AATSEA would appreciate to set up co—operative research laboratory among life member and honour members to do collaboration.', 'aatseatran94x118.png'),
(4, 'ASEAN Learning Network (ALN)', 2019, 'University of Bengkulu has officially accepted as an “institutional member” of ALN. Individuals who are interested could apply for “individual members”. Staff of University of Bengkulu who are interested could contact Dr Yansen, Office of Partnership and International Affairs, UNIB.\r\n\r\nUNIB ALN institutional membership was initiated last year when ALN council meeting was conducted at UNIB, organized and supported by Fac of Social and Political Science and also back up by University level. After formal registration in mid-2018, UNIB has been formally accepted as institutional member.\r\n\r\nMore explanation of ALN, taken from workplan of ALN, prepared by Executive Director and Secretary of ALN, as below.\r\n\r\nAs is consistent with the Articles of Association of the ALN and our past activities, including the SEED (Social Entrepreneurship for Economic Development) programs, research and training seminars, training workshops, publications and conferences, as well as opportunities for inter-university and international exchanges and other collaborations, the ALN will continue to focus on capacity building (in relation to “Context-based research and practice”) of its members (both individual and institutional members) as well as the communities we engaged with, such as in our SEED programs.\r\n\r\nALN also focus on 2 Inter-related Work Clusters. These activities can be conveniently divided into two distinct but inter-related clusters, each with 2 distinct but all mutually reinforcing work areas within the ALN: (1) Context-based Research, Practice, Training and Development, including Knowledge Dissemination (for example, SEED programs, seminars,workshops, conferences and publications), and (2) Inter-university and International Exchanges and Collaborations, including all kinds of meaningful, developmental and value-adding collaborative activities, the SEED programsbeing currently the most visible and valuable of such activities in the ALN.\r\n\r\nAs the current flagship activity of the ALN, the SEED program is an extremely valuable and a highly visible product of both these sets of activities, namely (1) Context-based Research and Development, and (2) Inter-university and International Exchanges and Collaborations. In addition, the development of new ALN country chapters, which must involve “win-win” collaborations for participating member universities, would also come under this group. More and better programs could be developed, better coordinated, publicized and supported through these 2 proposed work clusters (4 proposed work areas).\r\n\r\nFor more information on ALN or interested to become individual members of ALN, please contact us UPT KSLI UNIB. More information about ALN can be accessed at http://aseanlearningnetwork.org.', 'ALN-Certificate.jpg'),
(5, 'IMT-GT (Indonesia, Malaysia, Thailand – Growth Triangle) University Network (UNINET).', 1993, 'Indonesia-Malaysia-Thailand Growth Triangle (IMT-GT) idea was initiated by former Prime Minister of Malaysia, H.E. Tun Dr. Mahathir Mohammad. In 1993, the former President of Indonesia, H.E. Suharto, Prime Minister of Thailand, H.E. Chuan Leekpai and HE. Tun Dr. Mahathir Mohammad was endorsed the formalisation of IMT-GT in Langkawi, Malaysia.\r\n\r\nIMT-GT provides a sub-regional framework for accelerating economic cooperation and integration of the member states and provinces in the three countries.\r\n\r\nThe IMT-GT promotes private-sector led economic growth and facilitates the development of the sub-region as a whole by exploiting the underlying complementarities and comparative advantages of the member countries.', 'IMTGT-LOGO-on0y4cl8o8gdgq0rz4dxsolqg055o2evqh4cc942rk.png'),
(6, 'ASAIHL: Association of Southeast Asian Institution of Higher Learning.', 1956, 'The Association of Southeast Asian Institutions of Higher Learning (ASAIHL) is a non-governmental organization (NGO). Its aim is to assist member institutions to strengthen themselves through mutual self-help to achieve distinction in teaching, research, and public service, thereby contributing to their respective nations and beyond. Established in Bangkok in January 1955, it is one of the oldest regional organizations in Southeast Asia. As of 2016 the ASAIHL Secretary-General is Dr Ninnat Olanvoravuth of Chulalongkorn University.', 'XD0164.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendapatan`
--

CREATE TABLE `tb_pendapatan` (
  `id` int(11) NOT NULL,
  `id_kerjasama` int(11) NOT NULL,
  `pendapatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tahun` int(4) NOT NULL,
  `berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_program`
--

INSERT INTO `tb_program` (`id`, `nama`, `keterangan`, `tahun`, `berkas`) VALUES
(4, 'International Student Mobility Program', 'OVERVIEW\r\n\r\n“International Student Mobility” merupakan program tahunan UPT Kerja Sama dan Layanan Internasional (UPT – KSLI) Universitas Bengkulu untuk memberikan pengalaman internasional kepada mahasiswa UNIB yang memenuhi kriteria dan lolos seleksi untuk mengunjungi dan belajar di Perguruan Tinggi luar negeri yang menjadi mitra UNIB. Hal ini untuk mendukung Visi UNIB menjadi universitas kelas dunia tahun 2025. Melalui kegiatan ini diharapkan mahasiswa akan merasakan atmosfir akademik internasional dan mendapatkan pengalaman berinteraksi dengan masyarakat internasional yang berbeda budaya sehingga akan membentuk karakter positif mahasiswa yang lebih baik.\r\n\r\nELIGIBILITY\r\n\r\na. Mahasiswa UNIB aktif, minimal semester 4 dan maksimal semester 8\r\nb. IPK minimum 2,75 skala 4\r\nc. Mampu berbahasa Inggris dengan baik\r\nd. Berbadan sehat\r\ne. Belum pernah mengikuti program serupa dengan biaya UNIB\r\n\r\nPARTNER UNIVERSITIES\r\n\r\na. University of New England, Australia\r\nb. University of Battambang, Cambodia\r\nc. Manitoba Institute of Trades and Technology, Canada\r\nd. Nanjing Forestry University, China\r\ne. Srivenkateswara University, India\r\nf. GIFU University, Jepang\r\ng. Okayama University, Jepang\r\nh. JEI University, Korea\r\ni. Politeknik Nilai, Malaysia\r\nj. University of Malaya, Malaysia\r\nk. University Malaysia Kelantan, Malaysia\r\nl. San Beda College, Philippines\r\nm. Nanyang Technological University, Singapore\r\nn. Ming Chi Technology, Taiwan\r\no. Rajamangala University of Technology Srivijaya, Thailand\r\np. Thaksin University, Thailand\r\nq. Princess of Naradhiwas University, Thailand\r\nr. Yalova University, Turkey\r\ns. Banking University of Ho Chi Minh City, Vietnam\r\n\r\nEXCHANGE OPTIONS\r\n\r\nA. Credit Transfer\r\nCredit Transfer (Program Perkuliahan) ditujukan bagi mahasiswa UNIB yang ingin mengambil matakuliah dan mengikuti proses pembelajaran/perkuliahan di Universitas Luar Negeri yang memiliki MoU dengan UNIB.\r\n\r\nB. Internship\r\nInternship (Program Magang dan Kerja/Praktik Lapangan) ditujukan bagi mahasiswa UNIB yang memiliki mata kuliah magang/kerja lapangan/kerja praktik/PPL/PKL.\r\n\r\nC. Research\r\nResearch (Program Penelitian) ditujukan bagi mahasiswa UNIB yang ingin melakukan penelitan di Universitas Luar Negeri untuk menyelesaikan tugas akhir/skripsi.\r\n\r\nD. Community Services\r\nCommunity Services (KKN Luar Negeri) dadalah kegiatan pelayanan/pengabdian kepada Masyarakat yang memiliki kredit stara dengan KKN reguler UNIB.\r\n\r\nE. Cultural Exchange\r\nCultural Exchange (Program Pertukaran Budaya) ditujukan bagi mahasiswa UNIB yang memiliki kemampuan dan keterampilan seni budaya Indonesia berupa tari tradisional, instrumen musik tradisional, seni suara lagu-lagu tradisional, dan teater cerita tradisional yang dapat ditampilkan di depan khalayak umum.\r\n\r\nREGISTRATION\r\n\r\na. Peserta melakukan registrasi online pada halaman: s.id/the2018studentmobilityprogram\r\nb. Form Registrasi yang sudah diisi dengan lengkap secara online kemudian dicetak, kemudian ditandatangani oleh Peserta, Orang Tua/wali, dan Pejabat yang berwenang.\r\nc. Berkas pendaftran yang terdiri dari form pendaftaran online, Fotokopi KTM, Fotokopi Transkrip Nilai, Fotokopi skor TOEFL, serta sertifikat prestasi (jika ada), diserahkan ke BAGIAN KEMAHASISWAAN Fakultas masing-masing sesuai jadwal.\r\nd. Waktu pendaftaran online dan pengumpulan berkas di Fakultas 15 Februari sampai 15 Maret 2018.\r\n\r\nIMPORTANT DATES\r\n\r\nRegistrasi Online : 15 Februari – 15 Maret 2018\r\nSeleksi Berkas : 15 Maret – 16 April 2018\r\nInterview : 23 – 27 April 2018\r\nPengumuman Akhir : 1 Mei 2018\r\n\r\nContact Person\r\nFB : International Office of The University of Bengkulu Website: ksli.unib.ac.id\r\nWebsite : ksli.unib.ac.id\r\nE-mail : international@unib.ac.id\r\nFaizal : 085788767274\r\nNaga : 081274730486m A', 2018, ''),
(5, 'International Joint Summer Course on Biodiversity', 'UPT Kerja Sama dan Layanan Internasional, Universitas Bengkulu, bekerja sama dengan UPT Kerja Sama dan Layanan Internasional, Universitas Andalas, mengadakan Joint Summer Course on Biodiversity: Exploring Animal and Plant Diversities of Tropical Ecosystem to Enhance Academic Partnerships, tanggal 6 – 17 Agustus 2018, di Bengkulu dan Padang. Kegiatan ini didukung oleh Kementerian Riset. Teknologi dan Pendidikan Tinggi.\r\n\r\nKami memberi kesempatan bagi mahasiswa UNIVERSITAS BENGKULU (UNIB) untuk mengikuti kegiatan tersebut dengan persyaratan sebagai berikut:\r\n\r\nTertarik dengan tema Course, yang dinyatakan dalam “Statement of Motivation” pada saat registrasi di link yang disediakan\r\nMahasiswa UNIB aktif minimal telah menempuh 4 Semester\r\nDapat berkomunikasi menggunakan Bahasa Inggris dengan baik\r\nBersedia mengikuti kegiatan secara penuh\r\nPENDAFTARAN paling lambat tanggal 20 Juli 2018 pada link berikut:\r\n\r\nhttp://bit.ly/2whgDRp.\r\n\r\nMahasiswa yang dinyatakan lolos akan dihubungi melalui email resmi dari UPT KSLI UNIB. Jumlah peserta terbatas.\r\n\r\nSelain mahasiswa Universitas Bengkulu, Course ini akan diikuti oleh mahasiswa dari Universitas Andalas, Universitas Malaysia Kelantan, Ming Chi Univ of Technology Taiwan, Sun Yat-Sen Univ of China.\r\n\r\nLocal transport, akomodasi, makan dan asuransi lokal akan disediakan. Termasuk transport darat dari Bengkulu ke Padang PP.\r\n\r\nInfo detail kegiatan dapat dilihat pada brosur terlampir.\r\n\r\nTerima kasih\r\nUPT KSLI UNIB', 2018, ''),
(7, 'EURAXESS ASEAN', 'Berbagai peluang kerja sama penelitian dengan mitra dari universitas-universitas di Eropa tersedia dengan dukungan dari berbagai lembaga. Salah satu lembaga yang menyediakan informasi terkait peluang kerja sama dengan mitra di Eropa adalah EURAXESS. Lembaga ini memberikan dan menyampaikan informasi dan layanan dukungan bagi para peneliti profesional dalam bernagai level karir mereka. Lembaga ini didukung penuh oleh European Union dan anggota negaranya. Lembaga ini mendukung mobilitas dan pengembangan karir peneliti, dan pada saat yang sama meningkatkan kolaborasi scientific Eropa dengan negara-negara lain. Informasi tentang Euraxess dapat diakses di asean.euraxess.org.\r\n\r\nAda banyak skema yang dapat mendukung mobilitas dan kolaborasi peneliti di negara-negara Eropa dengan negara lainnya. Skema tersebut antara lain DAAD, Erasmus plus, Newton Fund, Marie Skłodowska Curie Actions, Nuffic-Neso dan lainnya. Skema-skema tersebut memungkinkan peneliti dari negara lain bekerjasama dengan peneliti-peneliti di Eropa.\r\n\r\nDi bawah ini beberapa bahan pendukung yang dapat dicermati untuk menpersiapkan proposal penelitian serta mencari, menginisiasi dan membangun kolaborasi riset dengan mitra di Eropa:', 2019, 'Guide-to-research-funding-and-fellowship-opportunities-in-Europe-20191.pdf'),
(8, 'Pendaftaran Student Mobilty Program 2019', 'Overview\r\n\r\n“International Student Mobility” merupakan program tahunan UPT Kerja Sama dan Layanan Internasional (UPT – KSLI) Universitas Bengkulu untuk memberikan pengalaman internasional kepada mahasiswa UNIB yang memenuhi kriteria dan lolos seleksi untuk mengunjungi dan belajar di Perguruan Tinggi luar negeri yang menjadi mitra UNIB. Hal ini untuk mendukung Visi UNIB menjadi universitas kelas dunia tahun 2025. Melalui kegiatan ini diharapkan mahasiswa akan merasakan atmosfir akademik internasional dan mendapatkan pengalaman berinteraksi dengan masyarakat internasional yang berbeda budaya sehingga akan membentuk karakter positif mahasiswa yang lebih baik.\r\n\r\nMahasiswa yang lolos seleksi dan terpilih akan mendapatkan fasilitas berupa tiket PP, asuransi dan bantuan biaya hidup selama program.\r\n\r\nEligibility\r\n\r\nMahasiswa UNIB aktif, minimal semester 4 dan maksimal semester 8\r\nIPK paling rendah 2,75\r\nMampu berbahasa Inggris dengan baik\r\nBerbadan sehat\r\nBelum pernah mengikuti program serupa dengan biaya UNIB\r\nDestination Universities\r\n\r\nUniversity Malaysia Kelantan\r\nUniversiti Sains Malaysia\r\nUniversiti Malaya, Malaysia\r\nPoliteknik Nilai, Malaysia\r\nRajamangala University of Technology Srivijaya, Thailand\r\nThaksin University, Thailand\r\nPrincess of Naradhiwas University, Thailand\r\nKasetsart University, Thailand\r\nWalailak University, Thailand\r\nUniversity of Battambang, Cambodia\r\nSrivenkateswara University, India\r\nSan Beda College, Philippines\r\nGIFU University, Jepang\r\nOkayama University, Jepang\r\nBanking University of Ho Chi Minh City, Vietnam\r\nNanyang Technological University, Singapore\r\nMing Chi University of Technology, Taiwan\r\nUniversity of New England, Australia\r\nJEI University, Korea\r\nNanjing Forestry University, China\r\nMaastricht University, Belanda\r\nCredit Transfer\r\n\r\nCredit transfer (program perkuliahan) ditujukan bagi mahasiswa UNIB yang ingin mengambil mata kuliah dan mengikuti proses pembeljaran/perkuliahan di universitas lura negeri yang memiliki MoU dengan UNIB.\r\n\r\nInternship\r\n\r\nInternship (program magang atau kerja/praktik lapangan) ditujukan bagi mahasiswa UNIB yang memiliki mata kuliah magang/kerja lapangan/kerja praktik/PPL/PKL.\r\n\r\nResearch\r\n\r\nResearch (program penelitian) ditujukan mahasiswa UNIB yang ingin melakukan penelitian di universitas luar negeri untuk menyelesaikan tugas akhir/skripsi.\r\n\r\nCommunity Services\r\n\r\nCommunity services (Kuliah Kerja Nyata/KKN) adalah kegiatan pelayanan/pengabdian kepada masyarakat yang disetarakan dengan KKN reguler UNIB, atau disebut juga KKN Internasional.\r\n\r\nCultural Exchange\r\n\r\nCultural exchange (Program pertukaran budaya) ditujukan bagi mahasiswa UNIB yang memiliki kemampuan dan keterampilan seni budaya Indonesia, berupa tari tradisional, instrumen musik tradisional, seni suara lagu-lagu tradisional dan teater cerita tradisional yang dapat ditampilkan di depan khalayak umum.\r\n\r\nRegistration\r\n\r\nPeserta melakukan registrasi online pada halaman: ly/studentmobilityprogram2019\r\nForm registrasi yang sudah diisi secara online dicetak (print) sebelum di-submit.\r\nDownload dan isi formulir pada “file download” sesuai dengan program yang akan dipilih.\r\nForm ditandatangani sesuai dengan yang diminta pada form masing-masing, yakni peserta, orang tua/wali, dan pejabat yang berwenang.\r\nBerkas pendaftaran yang terdiri dari form pendaftaran online, fotokopi KTM, fotokopi transkrip nilai, fotokopi skor TOEFL, surat keterangan sehat dari dokter, serta sertifikat prestasi (jika ada) ke UPT KSLI sesuai dengan jadwal yang telah ditentukan.\r\nImportant Dates\r\n\r\nPendaftaran dan pengumpulan berkas: 4 Februari – 8 Maret 2019\r\nSeleksi berkas: 11 – 22 Maret 2019\r\nWawancara: 25 Maret – 5 April 2019\r\nPengumuman akhir: 10 April 2019\r\nContacts\r\n\r\nFacebook page:  Office of Partnership and International Affairs, University of Bengkulu\r\nEmail: international@unib.ac.id\r\nFaizal: 082280274117\r\nNaga: 085709739366', 2019, ''),
(9, 'Pendaftaran International Staff Mobility Program 2019', 'Bengkulu, 11 Februari 2019\r\n\r\nYth.\r\n\r\nDekan\r\nKepala Biro\r\nKetua Lembaga\r\nKepala UPT\r\nKepala SPI\r\nDosen dan tenaga kependidikan\r\nSelingkung Universitas Bengkulu\r\n\r\ndi Bengkulu\r\n\r\nBersama ini kami sampaikan informasi mengenai penawaran International Staff Mobility Program 2019 untuk Dosen dan Tenaga Kependidikan Universitas Bengkulu. Pendaftaran dibuka 12 Februari – 29 Maret 2019. Informasi lebih lanjut mengenai prosedur pendaftaran dan  persyaratan dapat dilihat pada panduan kegiatan terlampir. Borang-borang yang diperlukan juga dapat diunduh pada tautan terlampir di bawah.\r\n\r\nMohon informasi ini dapat disebarluaskan kepada Dosen dan Tenaga Kependidikan selingkung Universitas Bengkulu.\r\n\r\nAtas perhatian dan kerja samanya, kami ucapkan terima kasih.\r\n\r\nKepala UPT KSLI UNIB,\r\n\r\nYansen, Ph.D\r\n\r\n', 2019, ''),
(10, 'Pembukaan Beasiswa Pendidikan Doktoral (S3) di Luar Negeri (BPP-LN) bagi dosen Tahun 2019', 'Sebagai upaya meningkatkan kualifikasi dosen tetap di lingkungan Kementerian Riset, Teknologi, dan Pendidikan Tinggi, Direktorat Jenderal Sumber Daya Iptek dan Dikti, melalui Direktorat Kualifikasi Sumber Daya Manusia membuka pendaftaran Beasiswa Pendidikan Pascasarjana Luar Negeri (BPP-LN) untuk alokasi tahun 2019. Program beasiswa ini diperuntukkan bagi dosen tetap pada Perguruan Tinggi di lingkungan Kementerian Riset, Teknologi, dan Pendidikan Tinggi yang akan melanjutkan studi ke jenjang pendidikan Doktor (S3).\r\n\r\nPendaftaran secara online dan pengunggahan berkas paling lama 30 April 2019.\r\n\r\nAdapun syarat dan ketentuan program serta buku panduan beasiswa dapat dilihat di tautan berikut ini:\r\nhttp://sumberdaya.ristekdikti.go.id/index.php/2019/03/22/pembukaan-beasiswa-pendidikan-pascasarjana-luar-negeri-bpp-ln-tahun-2019/', 2019, ''),
(11, 'Pendaftaran International Student Mobilty Program 2020', 'Overview\r\n\r\n“International Student Mobility” merupakan program tahunan UPT Kerja Sama dan Layanan Internasional (UPT – KSLI) Universitas Bengkulu. Program ini bertujuan untuk memberikan pengalaman internasional kepada mahasiswa UNIB yang memenuhi kriteria dan lolos seleksi untuk mengunjungi dan belajar di Perguruan Tinggi luar negeri yang menjadi mitra UNIB. Hal ini untuk mendukung program internasionalisasi UNIB serta peningkatan kapasitas dan kompetensi mahasiswa. Melalui kegiatan ini diharapkan mahasiswa akan merasakan atmosfir akademik internasional dan mendapatkan pengalaman berinteraksi dengan masyarakat internasional yang berbeda budaya sehingga akan membentuk karakter positif mahasiswa yang lebih baik.\r\n\r\nEligibility\r\n\r\nMahasiswa UNIB aktif, minimal semester 4 dan maksimal semester 8\r\nIPK paling rendah 2,75\r\nMampu berbahasa Inggris dengan baik\r\nBerbadan sehat\r\nBelum pernah mengikuti program serupa dengan biaya UNIB\r\nDestination Universities\r\n\r\nUniversity Malaysia Kelantan\r\nUniversiti Sains Malaysia\r\nUniversiti Malaya, Malaysia\r\nUniversiti Sultan Zainal Abidin, Malaysia\r\nUniversity College of Yayasan Pahang, Malaysia\r\nPoliteknik Nilai, Malaysia\r\nRajamangala University of Technology Srivijaya, Thailand\r\nThaksin University, Thailand\r\nPrincess of Naradhiwas University, Thailand\r\nKasetsart University, Thailand\r\nWalailak University, Thailand\r\nUniversity of Battambang, Cambodia\r\nSan Beda College, Philippines\r\nBanking University of Ho Chi Minh City, Vietnam\r\nGIFU University, Jepang\r\nOkayama University, Jepang\r\nNanyang Technological University, Singapore\r\nMing Chi University of Technology, Taiwan\r\nUniversity of New England, Australia\r\nUniversity of Dundee, UK\r\nSrivenkateswara University, India\r\nAmity University Haryana, India\r\nForman Christian College, Pakistan\r\nPrograms\r\n\r\nProgram yang dapat dilakukan dalam kegiatan ini adalah credit transfer, internship, research, community service, short-term study atau cultural exchange\r\n\r\n— Credit Transfer\r\n\r\nCredit transfer (program perkuliahan) ditujukan bagi mahasiswa UNIB yang ingin mengambil mata kuliah dan mengikuti proses pembelajaran/perkuliahan di universitas lura negeri yang memiliki MoU dengan UNIB.\r\n\r\n— Internship\r\n\r\nInternship (program magang atau kerja/praktik lapangan) ditujukan bagi mahasiswa UNIB yang memiliki mata kuliah magang/kerja lapangan/kerja praktik/PPL/PKL.\r\n\r\n— Research\r\n\r\nResearch (program penelitian) ditujukan mahasiswa UNIB yang ingin melakukan penelitian di universitas luar negeri untuk menyelesaikan tugas akhir/skripsi.\r\n\r\n— Community Services\r\n\r\nCommunity services (Kuliah Kerja Nyata/KKN) adalah kegiatan pelayanan/pengabdian kepada masyarakat yang disetarakan dengan KKN reguler UNIB, atau disebut juga KKN Internasional.\r\n\r\n— Short-term study\r\n\r\nShort-term study ditujukan untuk mahasiswa UNIB yang ingin mengikuti perkuliahan singkat, misalnya mengikuti short-course, atau mengikuti pembelajaran yang disepakati bersama dengan universitas tujuan.\r\n\r\n— Cultural Exchange\r\n\r\nCultural exchange (Program pertukaran budaya) ditujukan bagi mahasiswa UNIB yang memiliki kemampuan dan keterampilan seni budaya Indonesia, berupa tari tradisional, instrumen musik tradisional, seni suara lagu-lagu tradisional dan teater cerita tradisional yang dapat ditampilkan di depan khalayak umum.\r\n\r\nRegistration\r\n\r\nPeserta melakukan registrasi online pada halaman: ly/studentmobilityprogram2020\r\nForm registrasi yang sudah diisi secara online dicetak (print) sebelum di-submit.\r\nDownload dan isi formulir pada “file download” sesuai dengan program yang akan dipilih. File tersebut dapat di-download di http://bit.ly/filedownloadstudentmobility2020.\r\nForm ditandatangani sesuai dengan yang diminta pada form masing-masing, yakni peserta, orang tua/wali, dan pejabat yang berwenang.\r\nBerkas pendaftaran yang terdiri dari form pendaftaran online, fotokopi KTM, fotokopi transkrip nilai, fotokopi skor TOEFL, surat keterangan sehat dari dokter, serta sertifikat prestasi (jika ada) dan beberapa borang (sesuai program yang akan diambil) ke UPT KSLI sesuai dengan jadwal yang telah ditentukan.\r\nImportant Dates\r\n\r\nPendaftaran dan pengumpulan berkas: 24 Februari – 13 Maret 2020\r\nSeleksi berkas: 16 – 27 Maret 2020\r\nWawancara: 6 – 10 April 2020\r\nPengumuman akhir: 20 April 2020\r\nFinancial Support (Scholarship)\r\n\r\nMahasiswa yang terpilih untuk mendapatkan beasiswa akan mendapatkan fasilitas berupa tiket PP, asuransi dan bantuan biaya hidup selama program. Sebanyak 20 orang direncanakan mendapatkan beasiswa ini.\r\n\r\nNamun, mahasiswa dapat memilih pembiayaan secara Self Funded (Mandiri). Jika memilih Self Funded, maka hasil akhir akan ditentukan dari penilaian kesiapan mahasiswa untuk melaksanakan program.\r\n\r\nContacts\r\n\r\nPertanyaan lebih jauh dapat ditanyakan langsung ke Kantor UPT KSLI di Gedung Rektorat Universitas Bengkulu, atau melalui saluran di bawah:\r\n\r\nFacebook page:  Office of Partnership and International Affairs, University of Bengkulu\r\nEmail: international@unib.ac.id\r\nTelepon: 0736 – 21170 ext. 190\r\nFaizal: 082280274117\r\nNaga: 085709739366', 2020, ''),
(12, 'Pendaftaran International Staff Mobility Program 2020', 'Universitas Bengkulu melalui UPT Kerja Sama dan Layanan Internasional (UPT KSLI) kembali membuka pendaftaran untuk International Staff Mobility Program. Program ini ditujukan untuk Dosen dan Tenaga Kependidikan di lingkungan Universitas Bengkulu. Pendaftaran dibuka 24 Februari – 10 April 2020. Jadwal pelaksanaan kegiatan adalah seperti di bawah:\r\n\r\n24 Feb – 10 April 2020	:	Pengumpulan berkas\r\n13 – 16 April 2020	:	Seleksi berkas\r\n17 April 2020	:	Pemanggilan seleksi wawancara bagi shortlisted calon peserta program\r\n21 – 23 April 2020	:	Seleksi wawancara dan presentasi\r\n30 April 2020	:	Pengumuman peserta yang dinyatakan lulus seleksi dan dibiayai\r\nMei – Oktober 2020	:	Pelaksanaan program\r\nMei – Nov 2020	:	Laporan kegiatan peserta ke UPT KSLI UNIB\r\n \r\n\r\nInformasi lebih lanjut mengenai prosedur pendaftaran dan  persyaratan dapat dilihat pada panduan kegiatan terlampir.\r\n\r\nBorang-borang yang diperlukan juga dapat diunduh pada tautan terlampir di bawah.\r\n\r\nJika ada pertanyaan, dapat menghubungi UPT KSLI UNIB secara langsung, melalui saluran di bawah:\r\n\r\nTelepon: (0736) 21170, Ext 190\r\nWebsite: http://ksli.unib.ac.id\r\ne-mail: international@unib.ac.id', 2020, '');

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
(1, '19090910901212', 'Dedi Suryadi', 'Head of KSLI', 'pakdedi1.jpg'),
(2, '19090910901212', 'Agus Suyanto', 'Head of Sub-Division KSLI', 'pakagus.jpg'),
(3, '19090910901212', 'Naga Tondi Hasibuan', 'Administrative Staff', 'paknaga.jpg'),
(13, '12222232132', ' Faizal Ikhsan', 'Administrative Staff', 'pakfaisal1.jpg');

-- --------------------------------------------------------

--
-- Struktur untuk view `berita_filter`
--
DROP TABLE IF EXISTS `berita_filter`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `berita_filter`  AS SELECT `a`.`id` AS `id`, `a`.`id_kategori` AS `id_kategori`, `a`.`judul` AS `judul`, `a`.`isi` AS `isi`, `a`.`gambar` AS `gambar`, `a`.`tgl_posting` AS `tgl_posting`, `b`.`kategori` AS `kategori` FROM (`tb_berita` `a` join `tb_kategori` `b` on(`a`.`id_kategori` = `b`.`id`)) ;

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_negara` (`id_negara`);

--
-- Indeks untuk tabel `tb_mobility`
--
ALTER TABLE `tb_mobility`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_negara`
--
ALTER TABLE `tb_negara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pendapatan`
--
ALTER TABLE `tb_pendapatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kerjasama` (`id_kerjasama`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_kerjasama`
--
ALTER TABLE `tb_kerjasama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `tb_mitra`
--
ALTER TABLE `tb_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT untuk tabel `tb_mobility`
--
ALTER TABLE `tb_mobility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_negara`
--
ALTER TABLE `tb_negara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT untuk tabel `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pendapatan`
--
ALTER TABLE `tb_pendapatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_pertanyaan_pengguna`
--
ALTER TABLE `tb_pertanyaan_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_program`
--
ALTER TABLE `tb_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_staf`
--
ALTER TABLE `tb_staf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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

--
-- Ketidakleluasaan untuk tabel `tb_mitra`
--
ALTER TABLE `tb_mitra`
  ADD CONSTRAINT `tb_mitra_ibfk_1` FOREIGN KEY (`id_negara`) REFERENCES `tb_negara` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pendapatan`
--
ALTER TABLE `tb_pendapatan`
  ADD CONSTRAINT `tb_pendapatan_ibfk_1` FOREIGN KEY (`id_kerjasama`) REFERENCES `tb_kerjasama` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
