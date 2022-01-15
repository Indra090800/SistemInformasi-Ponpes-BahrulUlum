-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 11:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bu`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
`id` int(11) NOT NULL,
  `keterangan` mediumtext NOT NULL,
  `Foto` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `keterangan`, `Foto`) VALUES
(6, 'Penambangan', '6_1.PNG'),
(7, 'aa', '13.PNG'),
(8, 'a', '31.PNG'),
(9, 'sa', 'DSC_0355_JPG.jpg'),
(10, 'as', 'DSC_0356_JPG.jpg'),
(11, 'asa', 'DSC_0356_JPG-1.jpg'),
(12, 'asda', 'IMG-20190906-WA0006.jpg'),
(13, 'asd', 'IMG-20190924-WA00251.jpg'),
(14, 'asd', 'IMG-20191014-WA0070.jpg'),
(15, 'dasd', 'IMG-20191014-WA0067.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `pesan` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
`id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(2, 'Indra Maulana', 'Indra09', 'Admin', 2),
(3, 'Indra', 'Admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE IF NOT EXISTS `tb_berita` (
`id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` mediumtext NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `aktif` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `nama`, `keterangan`, `Foto`, `deskripsi`, `aktif`) VALUES
(20, 'Perlombaan LKBB ke VIII Se-Jawa Barat', 'Juara Lomba 2', 'IMG-20191014-WA0066.jpg', 'Anak anak SD di desa Mekar Jaya, Kabupaten Muara enim jika pasca turun hujan harus berjuang lebih keras dalam menuntut ilmu, mereka harus berjalan kaki tanpa menggunakan sepatu dalam kondisi lumpur dan becek dengan jarak tempuh mencapai 5 km untuk belajar di sekolah dan menggapai cita cita mereka.  Selain akses jalan yang rusak, kondisi sekolah juga sangat mengkhawatirkan. minimnya pelajar di wilayah desa tersebut ditambah bangunan kelas dalam kondisi rusak, membuat sejumlah siswa sekolah dasar negeri 12 ini terpaksa digabung dengan siswa kelas lain.  Hingga kini, sarana dan prasarana  sangat minim, seperti kelas yang rusak dan perpustakaan yang kurang buku, selain itu sekolah ini hanya mempunyai tenaga pengajar 8 orang.  Menurut pihak sekolah, mereka sudah sering melaporkan kondisi sekolahnya ke dinas pendidikan kabupaten empat lawang, namun sampai saat ini belum ada perhatian sedikitpun dari pemerintah setempat.  Gempa bumi berkekuatan 7 skala lichter kembali mengguncang Lombok. warga panik dan menyelamatkan diri ke dataran tinggi karena ada informasi peringtan dini tsunami.  Kepanikan melanda warga setelah gempa kembali mengguncang Lombok utara, Nusa Tenggara Barat. Jalanan dipenuhi kendaraan yang hendak menuju ke arah dataran yang lebih tinggi, karena gempa dikabarkan berpotensi tsunami.  Gempa bumi berkekuatan 7,0 skala richter mengguncang lombok utara pada pukul delapan belas lewat empat puluh enam (18.46) waktu Indonesia tengah, gempa terjadi 18 km barat laut lombok timur dengan kedalaman 15 kilometer.  Gempa yang mengguncang Lombok membuat warga panik dan berhamburan keluar rumah, listrik yang mati total semakin menambah kepanikan. Informasi peringartan dirni tsunami juga dikeluarkan pihak BMKG yang membuat warga langsung berinisiatif mengungsi ke dataran tinggi.  Namun, selang satu jam kemudian peringatan dini tsunami akhirnya dicabut. Menurut data yang dikeluarkan pihak BMKG, selain meruntuhkan bangunan gempa juga menyebabkan air laut terpantau naik di 3 wilayah, yakni di pelabuhan carik Lombok utara, pelabuhan bada Sumbawa dan lembar Lombok barat. Sementara hingga berita ini diturunkan gempa susulan masih terus terjadi.', ''),
(21, 'Perlombaan Hacking Rally ke-32', 'Juara Lomba 1', 'IMG-20191027-WA00091.jpg', 'Banjir yang terjadi sejak senin kemarin mengakibatkan hampir seluruh akses masuk menuju kabupaten Pacitan terendam banjir. Dari data sementara ada 4000 warga yang diungsikan di beberapa tempat.  Banjir masih menggenangi hampir semua titik di Pacitan, Jawa Timur. Di hari ketiga, jalur masuk menuju Pacitan masih terkendala banjir dan longsor meski di beberapa tempat ketinggian air sudah mulai surut.  Salah satunya dikawasan yang mulai surut adalah Simpang empat penceng yang merupakan jalur penghubung daerah Trenggalek Solo Ponorogo dan Yogyakarta. Sementara daerah terparah seperti Sernoboyo masih terendam banjir setinggi 2 meter.  Banyak kendaraan baik roda dua dan roda 4 yang terpaksa berbalik arah. Kondisi ini mengakibatkan aktivitas warga lumpuh. BPBD pacitan mencatat tidak ada korban jiwa sementara empat lainnya masih dinyatakan hilang akibat banjir dan longsor di Pacitan.', ''),
(23, 'Perlombaan LKBB ke IX Se-Jawa Barat', 'Juara Lomba 1', 'FB_IMG_15483419309009735.jpg', 'Sebanyak 5 orang luka bakar karena kapal tanker terbakar di Pelabuhan Belawan, Medan. Mereka bagian dari puluhan ABK atau anak buah kapal yang terjebak Kapal Tanker Waruna yang meledak di Pelabuhan Belawan, Medan.\r\n\r\nMereka semua sudah dievakuasi dalam kodisi hidup. Kapal tanker itu meledak, Senin (11/5/2020).\r\n\r\nJumlah ABK di dalam kapal sekira 50 orang. Mereka dievakuasi oleh pemadam kebakaran lewat tangga darurat di samping badan kapal. \r\n\r\nKomandan Regu (Danru) Damkar UPT Wilayah IV Belawan, Sadakata Ginting menyebutkan tidak ada korban jiwa dari kejadian kebakaran tersebut.\r\n\r\nDia menyebutkan ada 5 orang yang mengalami luka bakar ringan. Mereka tidak dibawa ke rumah sakit. \r\n\r\n"Enggak ada yang dibawa ke rumah sakit, hanya luka bakar sedikit saja. Ada ABK, ada juga tim pembetulan kapal dari Belawan ini. Luka-luka sedikitnya paling kurang lebih ada 5 orang. Total Kurang lebih ada 50 orang, dan puji syukur selamat semua," tuturnya saat dihubungi, Senin siang.\r\n\r\nKapal tanker meledak dan terbakar di Pelabuhan Belawan, Medan, Sumatera Utara, Senin (11/5/2020). Kapal itu milik PT Waruna.\r\n\r\nPuluhan anak buah kapal atau ABK kapal tersebut sebelumnya terjebak di dalam kapal. Anum, salah satu warga Belawan mengatakan, pagi itu hendak belanja tiba-tiba mendengar suara ledakan keras. Setelah itu muncul kepulan asap hitam pekat disertai kobaran api.\r\n\r\n"Heboh karena tiba-tiba suara dentuman keras kemudian muncul api dari kapal," katanya.', ''),
(25, 'Apam aja', 'asd', 'IMG-20191027-WA0014.jpg', 'Anak anak SD di desa Mekar Jaya, Kabupaten Muara enim jika pasca turun hujan harus berjuang lebih keras dalam menuntut ilmu, mereka harus berjalan kaki tanpa menggunakan sepatu dalam kondisi lumpur dan becek dengan jarak tempuh mencapai 5 km untuk belajar di sekolah dan menggapai cita cita mereka. Selain akses jalan yang rusak, kondisi sekolah juga sangat mengkhawatirkan. minimnya pelajar di wilayah desa tersebut ditambah bangunan kelas dalam kondisi rusak, membuat sejumlah siswa sekolah dasar negeri 12 ini terpaksa digabung dengan siswa kelas lain. Hingga kini, sarana dan prasarana sangat minim, seperti kelas yang rusak dan perpustakaan yang kurang buku, selain itu sekolah ini hanya mempunyai tenaga pengajar 8 orang. Menurut pihak sekolah, mereka sudah sering melaporkan kondisi sekolahnya ke dinas pendidikan kabupaten empat lawang, namun sampai saat ini belum ada perhatian sedikitpun dari pemerintah setempat. Gempa bumi berkekuatan 7 skala lichter kembali mengguncang Lombok. warga panik dan menyelamatkan diri ke dataran tinggi karena ada informasi peringtan dini tsunami. Kepanikan melanda warga setelah gempa kembali mengguncang Lombok utara, Nusa Tenggara Barat. Jalanan dipenuhi kendaraan yang hendak menuju ke arah dataran yang lebih tinggi, karena gempa dikabarkan berpotensi tsunami. Gempa bumi berkekuatan 7,0 skala richter mengguncang lombok utara pada pukul delapan belas lewat empat puluh enam (18.46) waktu Indonesia tengah, gempa terjadi 18 km barat laut lombok timur dengan kedalaman 15 kilometer. Gempa yang mengguncang Lombok membuat warga panik dan berhamburan keluar rumah, listrik yang mati total semakin menambah kepanikan. Informasi peringartan dirni tsunami juga dikeluarkan pihak BMKG yang membuat warga langsung berinisiatif mengungsi ke dataran tinggi. Namun, selang satu jam kemudian peringatan dini tsunami akhirnya dicabut. Menurut data yang dikeluarkan pihak BMKG, selain meruntuhkan bangunan gempa juga menyebabkan air laut terpantau naik di 3 wilayah, yakni di pelabuhan carik Lombok utara, pelabuhan bada Sumbawa dan lembar Lombok barat. Sementara hingga berita ini diturunkan gempa susulan masih terus terjadi.', ''),
(26, 'Yayasan AL-QOMAR CIPANGSOR', 'AWIPARI, TASIKMALAYA', 'home.jpeg', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_santri`
--

CREATE TABLE IF NOT EXISTS `tb_santri` (
`id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_santri`
--

INSERT INTO `tb_santri` (`id`, `nama`, `alamat`, `ttl`, `pendidikan`, `asal_sekolah`, `no_telp`, `nama_ortu`, `no_hp`) VALUES
(1, 'Indra Maulana', 'Cimenyan 2', 'Ciamis, 09 Agustus 2000', 'SMA/MA Sederajat', 'SMK Negeri 1 Banjar', '082118471055', 'Hermin', '082118471055');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sejarah`
--

CREATE TABLE IF NOT EXISTS `tb_sejarah` (
`id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` mediumtext NOT NULL,
  `tanggal` date NOT NULL,
  `Foto` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sejarah`
--

INSERT INTO `tb_sejarah` (`id`, `nama`, `keterangan`, `tanggal`, `Foto`) VALUES
(4, 'Berdirinya Pesantren', 'Anak anak SD di desa Mekar Jaya, Kabupaten Muara enim jika pasca turun hujan harus berjuang lebih keras dalam menuntut ilmu, mereka harus berjalan kaki tanpa menggunakan sepatu dalam kondisi lumpur dan becek dengan jarak tempuh mencapai 5 km untuk belajar di sekolah dan menggapai cita cita mereka. Selain akses jalan yang rusak, kondisi sekolah juga sangat mengkhawatirkan. minimnya pelajar di wilayah desa tersebut ditambah bangunan kelas dalam kondisi rusak, membuat sejumlah siswa sekolah dasar negeri 12 ini terpaksa digabung dengan siswa kelas lain. Hingga kini, sarana dan prasarana sangat minim, seperti kelas yang rusak dan perpustakaan yang kurang buku, selain itu sekolah ini hanya mempunyai tenaga pengajar 8 orang. Menurut pihak sekolah, mereka sudah sering melaporkan kondisi sekolahnya ke dinas pendidikan kabupaten empat lawang, namun sampai saat ini belum ada perhatian sedikitpun dari pemerintah setempat. Gempa bumi berkekuatan 7 skala lichter kembali mengguncang Lombok. warga panik dan menyelamatkan diri ke dataran tinggi karena ada informasi peringtan dini tsunami. Kepanikan melanda warga setelah gempa kembali mengguncang Lombok utara, Nusa Tenggara Barat. Jalanan dipenuhi kendaraan yang hendak menuju ke arah dataran yang lebih tinggi, karena gempa dikabarkan berpotensi tsunami. Gempa bumi berkekuatan 7,0 skala richter mengguncang lombok utara pada pukul delapan belas lewat empat puluh enam (18.46) waktu Indonesia tengah, gempa terjadi 18 km barat laut lombok timur dengan kedalaman 15 kilometer. Gempa yang mengguncang Lombok membuat warga panik dan berhamburan keluar rumah, listrik yang mati total semakin menambah kepanikan. Informasi peringartan dirni tsunami juga dikeluarkan pihak BMKG yang membuat warga langsung berinisiatif mengungsi ke dataran tinggi. Namun, selang satu jam kemudian peringatan dini tsunami akhirnya dicabut. Menurut data yang dikeluarkan pihak BMKG, selain meruntuhkan bangunan gempa juga menyebabkan air laut terpantau naik di 3 wilayah, yakni di pelabuhan carik Lombok utara, pelabuhan bada Sumbawa dan lembar Lombok barat. Sementara hingga berita ini diturunkan gempa susulan masih terus terjadi.', '2020-03-19', 'andri2.jpg'),
(5, 'Boleh', 'Anak anak SD di desa Mekar Jaya, Kabupaten Muara enim jika pasca turun hujan harus berjuang lebih keras dalam menuntut ilmu, mereka harus berjalan kaki tanpa menggunakan sepatu dalam kondisi lumpur dan becek dengan jarak tempuh mencapai 5 km untuk belajar di sekolah dan menggapai cita cita mereka. Selain akses jalan yang rusak, kondisi sekolah juga sangat mengkhawatirkan. minimnya pelajar di wilayah desa tersebut ditambah bangunan kelas dalam kondisi rusak, membuat sejumlah siswa sekolah dasar negeri 12 ini terpaksa digabung dengan siswa kelas lain. Hingga kini, sarana dan prasarana sangat minim, seperti kelas yang rusak dan perpustakaan yang kurang buku, selain itu sekolah ini hanya mempunyai tenaga pengajar 8 orang. Menurut pihak sekolah, mereka sudah sering melaporkan kondisi sekolahnya ke dinas pendidikan kabupaten empat lawang, namun sampai saat ini belum ada perhatian sedikitpun dari pemerintah setempat. Gempa bumi berkekuatan 7 skala lichter kembali mengguncang Lombok. warga panik dan menyelamatkan diri ke dataran tinggi karena ada informasi peringtan dini tsunami. Kepanikan melanda warga setelah gempa kembali mengguncang Lombok utara, Nusa Tenggara Barat. Jalanan dipenuhi kendaraan yang hendak menuju ke arah dataran yang lebih tinggi, karena gempa dikabarkan berpotensi tsunami. Gempa bumi berkekuatan 7,0 skala richter mengguncang lombok utara pada pukul delapan belas lewat empat puluh enam (18.46) waktu Indonesia tengah, gempa terjadi 18 km barat laut lombok timur dengan kedalaman 15 kilometer. Gempa yang mengguncang Lombok membuat warga panik dan berhamburan keluar rumah, listrik yang mati total semakin menambah kepanikan. Informasi peringartan dirni tsunami juga dikeluarkan pihak BMKG yang membuat warga langsung berinisiatif mengungsi ke dataran tinggi. Namun, selang satu jam kemudian peringatan dini tsunami akhirnya dicabut. Menurut data yang dikeluarkan pihak BMKG, selain meruntuhkan bangunan gempa juga menyebabkan air laut terpantau naik di 3 wilayah, yakni di pelabuhan carik Lombok utara, pelabuhan bada Sumbawa dan lembar Lombok barat. Sementara hingga berita ini diturunkan gempa susulan masih terus terjadi.', '2020-05-07', 'IMG-20190924-WA00252.jpg'),
(6, 'Apa we', 'Anak anak SD di desa Mekar Jaya, Kabupaten Muara enim jika pasca turun hujan harus berjuang lebih keras dalam menuntut ilmu, mereka harus berjalan kaki tanpa menggunakan sepatu dalam kondisi lumpur dan becek dengan jarak tempuh mencapai 5 km untuk belajar di sekolah dan menggapai cita cita mereka. Selain akses jalan yang rusak, kondisi sekolah juga sangat mengkhawatirkan. minimnya pelajar di wilayah desa tersebut ditambah bangunan kelas dalam kondisi rusak, membuat sejumlah siswa sekolah dasar negeri 12 ini terpaksa digabung dengan siswa kelas lain. Hingga kini, sarana dan prasarana sangat minim, seperti kelas yang rusak dan perpustakaan yang kurang buku, selain itu sekolah ini hanya mempunyai tenaga pengajar 8 orang. Menurut pihak sekolah, mereka sudah sering melaporkan kondisi sekolahnya ke dinas pendidikan kabupaten empat lawang, namun sampai saat ini belum ada perhatian sedikitpun dari pemerintah setempat. Gempa bumi berkekuatan 7 skala lichter kembali mengguncang Lombok. warga panik dan menyelamatkan diri ke dataran tinggi karena ada informasi peringtan dini tsunami. Kepanikan melanda warga setelah gempa kembali mengguncang Lombok utara, Nusa Tenggara Barat. Jalanan dipenuhi kendaraan yang hendak menuju ke arah dataran yang lebih tinggi, karena gempa dikabarkan berpotensi tsunami. Gempa bumi berkekuatan 7,0 skala richter mengguncang lombok utara pada pukul delapan belas lewat empat puluh enam (18.46) waktu Indonesia tengah, gempa terjadi 18 km barat laut lombok timur dengan kedalaman 15 kilometer. Gempa yang mengguncang Lombok membuat warga panik dan berhamburan keluar rumah, listrik yang mati total semakin menambah kepanikan. Informasi peringartan dirni tsunami juga dikeluarkan pihak BMKG yang membuat warga langsung berinisiatif mengungsi ke dataran tinggi. Namun, selang satu jam kemudian peringatan dini tsunami akhirnya dicabut. Menurut data yang dikeluarkan pihak BMKG, selain meruntuhkan bangunan gempa juga menyebabkan air laut terpantau naik di 3 wilayah, yakni di pelabuhan carik Lombok utara, pelabuhan bada Sumbawa dan lembar Lombok barat. Sementara hingga berita ini diturunkan gempa susulan masih terus terjadi.', '2020-05-21', 'IMG-20191027-WA0001.jpg'),
(7, 'Saya ', 'Anak anak SD di desa Mekar Jaya, Kabupaten Muara enim jika pasca turun hujan harus berjuang lebih keras dalam menuntut ilmu, mereka harus berjalan kaki tanpa menggunakan sepatu dalam kondisi lumpur dan becek dengan jarak tempuh mencapai 5 km untuk belajar di sekolah dan menggapai cita cita mereka. Selain akses jalan yang rusak, kondisi sekolah juga sangat mengkhawatirkan. minimnya pelajar di wilayah desa tersebut ditambah bangunan kelas dalam kondisi rusak, membuat sejumlah siswa sekolah dasar negeri 12 ini terpaksa digabung dengan siswa kelas lain. Hingga kini, sarana dan prasarana sangat minim, seperti kelas yang rusak dan perpustakaan yang kurang buku, selain itu sekolah ini hanya mempunyai tenaga pengajar 8 orang. Menurut pihak sekolah, mereka sudah sering melaporkan kondisi sekolahnya ke dinas pendidikan kabupaten empat lawang, namun sampai saat ini belum ada perhatian sedikitpun dari pemerintah setempat. Gempa bumi berkekuatan 7 skala lichter kembali mengguncang Lombok. warga panik dan menyelamatkan diri ke dataran tinggi karena ada informasi peringtan dini tsunami. Kepanikan melanda warga setelah gempa kembali mengguncang Lombok utara, Nusa Tenggara Barat. Jalanan dipenuhi kendaraan yang hendak menuju ke arah dataran yang lebih tinggi, karena gempa dikabarkan berpotensi tsunami. Gempa bumi berkekuatan 7,0 skala richter mengguncang lombok utara pada pukul delapan belas lewat empat puluh enam (18.46) waktu Indonesia tengah, gempa terjadi 18 km barat laut lombok timur dengan kedalaman 15 kilometer. Gempa yang mengguncang Lombok membuat warga panik dan berhamburan keluar rumah, listrik yang mati total semakin menambah kepanikan. Informasi peringartan dirni tsunami juga dikeluarkan pihak BMKG yang membuat warga langsung berinisiatif mengungsi ke dataran tinggi. Namun, selang satu jam kemudian peringatan dini tsunami akhirnya dicabut. Menurut data yang dikeluarkan pihak BMKG, selain meruntuhkan bangunan gempa juga menyebabkan air laut terpantau naik di 3 wilayah, yakni di pelabuhan carik Lombok utara, pelabuhan bada Sumbawa dan lembar Lombok barat. Sementara hingga berita ini diturunkan gempa susulan masih terus terjadi.', '2020-05-29', 'IMG-20191014-WA00661.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_santri`
--
ALTER TABLE `tb_santri`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_santri`
--
ALTER TABLE `tb_santri`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
