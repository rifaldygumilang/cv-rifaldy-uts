-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2025 at 09:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `ringkasan_diri` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama_lengkap`, `posisi`, `email`, `telepon`, `alamat`, `ringkasan_diri`) VALUES
(1, 'Rifaldy Gumilang M.', 'Jurusan Teknik Informatika', 'rifaldygumilang@gmail.com', '08156406743', 'Jl.Kp sayang rt01/rw01', ' Saya merupakan mahasiswa Teknik Informatika di Universitas Muhammadiyah Sukabumi yang memiliki ketertarikan di bidang teknologi informasi, pengembangan sistem, dan pemrograman web.di sini Saya masih dalam proses belajar mengelola data dan membuat aplikasi berbasis web');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) DEFAULT NULL,
  `nama_keahlian` varchar(50) NOT NULL,
  `tingkat` enum('Dasar','Menengah','Mahir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id`, `biodata_id`, `nama_keahlian`, `tingkat`) VALUES
(2, 1, 'PHP', 'Dasar'),
(3, 1, ' Pemograman Web', 'Menengah'),
(4, 1, ' Penggunaan XAMPP', 'Menengah'),
(5, 1, 'Pemahaman Database (MySQL)', 'Dasar'),
(6, 1, 'HTML/CSS', 'Menengah'),
(7, 1, 'JavaScript (Dasar)', 'Menengah'),
(8, 1, 'Jaringan Komputer', 'Dasar'),
(9, 1, 'Microsoft Office (Word, Excel, PowerPoint)  ', 'Menengah');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) DEFAULT NULL,
  `institusi` varchar(100) NOT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `tahun_mulai` year(4) DEFAULT NULL,
  `tahun_selesai` year(4) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `biodata_id`, `institusi`, `jurusan`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(1, 1, ' Universitas Muhammadiyah Sukabumi\r\n ', 'Teknik Informatika', '2023', '2027', ''),
(2, 1, 'SMK Negeri 1 Sukabumi', 'Ilmu Pengatahuan Sosial (ips)', '2020', '2023', ''),
(3, 1, 'MTS Nurul Islam Yasni', 'Tentang Keislaman', '2016', '2019', ''),
(4, 1, 'SDN BATUKARUT', '', '2012', '2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) DEFAULT NULL,
  `jenis` enum('Organisasi','Magang','Proyek','Pekerjaan') NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tahun_mulai` year(4) DEFAULT NULL,
  `tahun_selesai` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `biodata_id`, `jenis`, `judul`, `deskripsi`, `tahun_mulai`, `tahun_selesai`) VALUES
(1, 1, 'Organisasi', 'Anggota OSIS MTS NURUL ISLAM YASNI\r\n', 'Saya pernah menjadi anggota OSIS di MTs Nurul Islam/SMP. Dalam peran ini, saya ikut berkontribusi dalam perencanaan dan pelaksanaan berbagai kegiatan sekolah, baik di bidang akademik maupun non-akademik. Saya berperan aktif dalam membantu penyelenggaraan acara seperti peringatan hari besar nasional, kegiatan lomba antar kelas, serta program sosial dan keagamaan sekolah.', '2016', '2019'),
(2, 1, 'Organisasi', 'Panitia Masa Orientasi Teknik Informatika (MOTIF 2024)', 'Saya pernah menjadi anggota Divisi Transportasi pada kegiatan Motif. Dalam peran ini, saya membantu mengoordinasikan dan melaksanakan pengaturan transportasi untuk panitia, Maba, Tugas saya meliputi memastikan ketersediaan kendaraan, membantu penyusunan jadwal keberangkatan dan kepulangan, serta mendukung kelancaran mobilitas selama kegiatan berlangsung.', '2024', '2024'),
(3, 1, 'Organisasi', 'Anggota himpunan mahasiswa teknik informatika (Febuary2024-Agustus 2025)', 'Menjaga nama baik himpunan. Setiap tindakan di dalam maupun di luar kampus mencerminkan citra organisasi. Mematuhi aturan dan AD/ART. Ini termasuk tata tertib, kode etik, serta mekanisme kerja yang telah disepakati. Aktif dalam kegiatan. Hadir di rapat,dan mengikuti program kerja,', '2024', '2025'),
(4, 1, 'Organisasi', 'Panitia Hari Teknik Informatika ( Penanggung Jawab Acara TI CUP', 'Saya pernah menjadi Panitia Hari Teknik Informatika dengan peran sebagai Penanggung Jawab Acara TI CUP. Dalam peran ini, saya bertanggung jawab atas perencanaan, pelaksanaan, dan evaluasi keseluruhan kegiatan TI CUP. Saya mengoordinasikan tim panitia untuk memastikan jalannya pertandingan dan acara pendukung berjalan lancar, tertib, dan sesuai jadwal. Selain itu, saya juga berperan dalam menjalin komunikasi dengan peserta, wasit, dan pihak terkait lainnya agar seluruh rangkaian kegiatan dapat terlaksana dengan baik dan mencapai tujuan yang telah ditetapkan.', '2024', '2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD CONSTRAINT `keahlian_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`);

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`);

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
