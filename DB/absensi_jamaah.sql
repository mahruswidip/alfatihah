-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2022 pada 10.46
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi_jamaah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) DEFAULT NULL,
  `berita_isi` text,
  `berita_image` varchar(40) DEFAULT NULL,
  `berita_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `img_dropzone`
--

CREATE TABLE `img_dropzone` (
  `id` int(11) NOT NULL,
  `nama` varchar(51) NOT NULL,
  `tipe` varchar(5) NOT NULL,
  `ukuran` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `img_dropzone`
--

INSERT INTO `img_dropzone` (`id`, `nama`, `tipe`, `ukuran`) VALUES
(17, 'IMG-20171125-WA0051.jpg', 'image', '14655'),
(22, 'WhatsApp Image 2019-10-30 at 22.26.09.jpeg', 'image', '13809'),
(40, 'WhatsApp Image 2019-10-15 at 09.23.49.jpeg', 'image', '16749'),
(41, 'WhatsApp Image 2019-10-15 at 09.28.04(10).jpeg', 'image', '14774'),
(51, 'IMG-20190221-WA0105.jpg', 'image', '14149'),
(52, 'IMG-20190221-WA0128.jpg', 'image', '97211'),
(53, 'IMG-20190221-WA0190.jpg', 'image', '14318'),
(54, 'IMG-20190221-WA0138.jpg', 'image', '19939'),
(55, 'WhatsApp Image 2018-11-04 at 12.57.09.jpeg', 'image', '15802'),
(56, 'IMG-20190221-WA0036.jpg', 'image', '15523'),
(57, 'WhatsApp Image 2018-11-04 at 13.18.06 (1).jpeg', 'image', '12369'),
(58, 'WhatsApp Image 2018-11-04 at 13.18.06 (2).jpeg', 'image', '13448'),
(59, 'WhatsApp Image 2018-11-04 at 14.14.21 (4).jpeg', 'image', '69639'),
(60, 'WhatsApp Image 2018-11-04 at 14.14.21.jpeg', 'image', '11773'),
(61, 'WhatsApp Image 2018-11-04 at 14.14.21 (6).jpeg', 'image', '77488'),
(62, 'WhatsApp Image 2019-10-15 at 09.33.35(6).jpeg', 'image', '10811'),
(63, 'WhatsApp Image 2019-10-15 at 09.33.35(8).jpeg', 'image', '16804');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamaah`
--

CREATE TABLE `jamaah` (
  `id_jamaah` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_jamaah` varchar(255) NOT NULL,
  `nomor_telepon` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat` text NOT NULL,
  `nomor_paspor` varchar(11) NOT NULL,
  `grup_keberangkatan` varchar(50) NOT NULL,
  `paket` varchar(11) NOT NULL,
  `lama_hari` int(10) NOT NULL,
  `hotel_madinah` varchar(100) NOT NULL,
  `hotel_mekkah` varchar(100) NOT NULL,
  `jamaah_img` varchar(40) NOT NULL,
  `qr_code` varchar(50) NOT NULL,
  `kehadiran` enum('Hadir','Tidak Hadir / Belum Hadir','','') NOT NULL DEFAULT 'Tidak Hadir / Belum Hadir',
  `created_by` int(5) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uuid` text,
  `qr_code_benar` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jamaah`
--

INSERT INTO `jamaah` (`id_jamaah`, `nik`, `nama_jamaah`, `nomor_telepon`, `jenis_kelamin`, `alamat`, `nomor_paspor`, `grup_keberangkatan`, `paket`, `lama_hari`, `hotel_madinah`, `hotel_mekkah`, `jamaah_img`, `qr_code`, `kehadiran`, `created_by`, `created_at`, `updated_at`, `uuid`, `qr_code_benar`) VALUES
(4, '3575026706590001', 'ALFIYAH MUHAYIN SAMIN', '081242290008', 'Perempuan', 'PERUM KEBON CANDI BLOK H-18 RT 001 RW 012, KEL. KARANGSENTUL, KEC. GONDANG WETAN, KAB. PASURUAN', 'C3015193', '2022-10-11', 'VIP', 13, '', '', 'b3f4220539fa725f99523bbaefd32d8c.jpg', '3575026706590001.png', 'Hadir', 7, '2022-09-19 00:00:00', '2022-09-30 08:16:28', '1a17abc1-3ab1-11ed-8d7e-c81f66b925de', '1a17abc1-3ab1-11ed-8d7e-c81f66b925de.png'),
(5, '3575026407680002', 'ANITA ERNA YULIARTI', '082230036742', 'Perempuan', 'JL. UNTUNG SUROPATI RT 003 RW 001 , KEL. PURUT REJO, KEC. PURWOREJO, KOTA PASURUAN', 'E0411259', '2022-10-11', 'VIP', 13, '', '', '700108993d389c40590807d768c6494e.jpeg', '3575026407680002.png', 'Hadir', 7, '2022-09-19 00:00:00', '2022-09-30 08:16:33', '1a17ad34-3ab1-11ed-8d7e-c81f66b925de', '1a17ad34-3ab1-11ed-8d7e-c81f66b925de.png'),
(6, '3575022205600001', 'ADI WALUYO WALIJO', '081331343307', 'Laki-Laki', 'JL. UNTUNG SUROPATI RT 003 RW 001 , KEL. PURUT REJO, KEC. PURWOREJO, KOTA PASURUAN', 'E0411260', '2022-10-11', 'VIP', 13, '', '', '9d9a0dea6e8f7a306894f2a3b848cd9d.jpeg', '3575022205600001.png', 'Hadir', 7, '2022-09-19 00:00:00', '2022-09-30 08:16:36', '1a17adc7-3ab1-11ed-8d7e-c81f66b925de', '1a17adc7-3ab1-11ed-8d7e-c81f66b925de.png'),
(8, '3574011703600001', 'SUKATMAN', '081386378020', 'Laki-Laki', 'JL RINJANI 76 RT/RW 001/005, TRIWUNG KIDUL, KADEMANGAN, PROBOLINGGO', 'E0193950', '2022-10-01', '16 H', 16, '', '', 'c35d46521e4b7b77a2ee205840ec4296.jpg', '3574011703600001.png', 'Hadir', 3, '2022-09-19 00:00:00', '2022-09-30 08:16:25', '1a17b072-3ab1-11ed-8d7e-c81f66b925de', '1a17b072-3ab1-11ed-8d7e-c81f66b925de.png'),
(9, '3574016512570001', 'WARSINI', '081386378020', 'Perempuan', 'JL RINJANI 76 RT/RW 001/005, TRIWUNG KIDUL, KADEMANGAN, PROBOLINGGO', 'E0193952', '2022-10-01', '16 H', 0, '', '', '570dfd489e4c2a5bdd8dceef4daca705.jpg', '3574016512570001.png', 'Hadir', 3, '2022-09-19 00:00:00', '2022-09-30 08:14:32', '1a17b0eb-3ab1-11ed-8d7e-c81f66b925de', '1a17b0eb-3ab1-11ed-8d7e-c81f66b925de.png'),
(10, '3514142504810008', 'ISWANTORO', '081235221007', 'Laki-Laki', 'JL. KALITELUH RT004/RW002 KEL. LATEK, KEC. BANGIL KAB. PASURUAN', 'C0410659', '2022-10-11', 'VIP', 13, '', '', '212db966bd76a18c7d5e3a6a38e7b5c8.jpeg', '3514142504810008.png', 'Hadir', 7, '2022-09-19 00:00:00', '2022-09-30 08:16:43', '1a17b15b-3ab1-11ed-8d7e-c81f66b925de', '1a17b15b-3ab1-11ed-8d7e-c81f66b925de.png'),
(11, '3514145307800008', 'IIS YULIATININGSIH', '082231412926', 'Perempuan', 'JL. KALITELUH RT004/RW002 KEL. LATEK KEC. BANGIL KAB. PASURUAN', 'E0410662', '2022-10-11', 'VIP', 13, '', '', '53c717b7b227339808d538b13f79036b.jpeg', '3514145307800008.png', 'Hadir', 7, '2022-09-19 00:00:00', '2022-09-30 08:16:52', '1a17b23c-3ab1-11ed-8d7e-c81f66b925de', '1a17b23c-3ab1-11ed-8d7e-c81f66b925de.png'),
(12, '3574021412570001', 'AHMAD RAFIUDIN', '', 'Laki-Laki', 'JL LUMAJANG GG MANGGIS 117 RT004 RW001, SUMBER TAMAN, WONOASIH, PROBOLINGGO', 'C7851677', '2022-10-01', '16 H', 0, '', '', '2e60afd0d2d222bf782f8464bb99b19a.jpg', '3574021412570001.png', 'Hadir', 3, '2022-09-19 00:00:00', '2022-09-30 08:14:24', '1a17b4c1-3ab1-11ed-8d7e-c81f66b925de', '1a17b4c1-3ab1-11ed-8d7e-c81f66b925de.png'),
(13, '3574024706580001', 'NUR IZZAH FARIDAH', '', 'Perempuan', 'JL LUMAJANG GG MANGGIS 117 RT004 RW001, SUMBER TAMAN, WONOASIH, PROBOLINGGO', 'C7851676', '2022-10-01', '16 H', 0, '', '', 'e1807a6c5972235748a60ebe9cbb77a6.jpg', '3574024706580001.png', 'Hadir', 3, '2022-09-19 00:00:00', '2022-09-30 08:14:22', '1a17b544-3ab1-11ed-8d7e-c81f66b925de', '1a17b544-3ab1-11ed-8d7e-c81f66b925de.png'),
(14, '3574013107620002', 'BAMBANG WAHYUDI', '', 'Laki-Laki', 'JL SUKARNO HATTA GG DELIMA 9 RT001 RW001, PILANG, KADEMANGAN, PROBOLINGGO', 'C9820756', '2022-10-01', '16 H', 0, '', '', 'ef3c8f307c4d6f2d6a731f7390c25f5d.jpg', '3574013107620002.png', 'Hadir', 3, '2022-09-19 00:00:00', '2022-09-30 08:14:19', '1a17b5b1-3ab1-11ed-8d7e-c81f66b925de', '1a17b5b1-3ab1-11ed-8d7e-c81f66b925de.png'),
(15, '3514210808750002', 'SOLIHIN PURNOMO M SAFII', '081231836034', 'Laki-Laki', 'DUSUN GUNUNGAN RT.01 RW.13 KEL. NGULING KEC. NGULING KAB. PASURUAN', 'E0411179', '2022-10-11', 'Ekonomi', 13, '', '', '6282aa645ee7c1f2ca4230433cef79de.jpeg', '3514210808750002.png', 'Hadir', 1, '2022-09-19 00:00:00', '2022-09-30 08:17:11', '1a17b792-3ab1-11ed-8d7e-c81f66b925de', '1a17b792-3ab1-11ed-8d7e-c81f66b925de.png'),
(17, '3514215707780002', 'WIWIK SUMAWATI', '081231836034', 'Perempuan', 'DUSUN GUNUNGAN RT.01 RW.13 KEL. NGULING KEC. NGULING KAB. PASURUAN', 'E0411215', '2022-10-11', 'Ekonomi', 13, '', '', '2ce2ff0a91e99753c2480db76c48ed64.jpeg', '3514215707780002.png', 'Hadir', 1, '2022-09-19 00:00:00', '2022-09-30 08:17:15', '1a17b80b-3ab1-11ed-8d7e-c81f66b925de', '1a17b80b-3ab1-11ed-8d7e-c81f66b925de.png'),
(19, '3574015209620002', 'SUSANA', '', 'Perempuan', 'JL SUKARNO HATTA GG DELIMA 9 RT001 RW001, PILANG, KADEMANGAN, PROBOLINGGO', 'C9820903', '2022-10-01', '16 H', 16, '', '', 'f06f6a0c6eab5d0455ebca25cb824143.jpg', '3574015209620002.png', 'Hadir', 3, '2022-09-19 12:57:09', '2022-09-30 08:17:31', '1a17b87f-3ab1-11ed-8d7e-c81f66b925de', '1a17b87f-3ab1-11ed-8d7e-c81f66b925de.png'),
(20, '3574024309620002', 'HANIFAH', '', 'Perempuan', 'PRUM STI JL TAMAN MELATI III NO.7 RT004 RW007, SUMBER TAMAN, WONOASIH, PROBOLINGGO', 'C9820904', '2022-10-01', '16 H', 16, '', '', 'cc3879c0ee83b73d6e7d60d8e1e0df3f.jpg', '3574024309620002.png', 'Hadir', 3, '2022-09-19 13:10:14', '2022-09-30 08:17:35', '1a17ba5a-3ab1-11ed-8d7e-c81f66b925de', '1a17ba5a-3ab1-11ed-8d7e-c81f66b925de.png'),
(21, '3574026709620001', 'SUZANIK', '', 'Perempuan', 'JL TAMAN MELATI VII/1 STI RT004 RW007, SUMBER TAMAN, WONOASIH, PROBOLINGGO', 'C9820902', '2022-10-01', '16 H', 0, '', '', '2b2fd961293a58ebaccf830384cae62c.jpg', '.png', 'Hadir', 3, '2022-09-19 13:11:33', '2022-09-30 08:14:02', '1a17bad1-3ab1-11ed-8d7e-c81f66b925de', '1a17bad1-3ab1-11ed-8d7e-c81f66b925de.png'),
(22, '3513185602570002', 'SURIYA', '', 'Perempuan', 'DSN PASAR RT003 RW001 PAJURANGAN, GENDING, PROBOLINGGO', 'E0407150', '2022-10-01', '16 H', 0, '', '', '787c1661ee2a073d7cd6af4fd2559ef5.jpg', '.png', 'Hadir', 3, '2022-09-19 13:30:55', '2022-09-30 08:13:59', '1a17bb4e-3ab1-11ed-8d7e-c81f66b925de', '1a17bb4e-3ab1-11ed-8d7e-c81f66b925de.png'),
(23, '3529025711730003', 'SAIDA', '', 'Perempuan', 'DSN JENENGAN RT003 RW005 MARENGAN LAOK, KALIANGET, SUMENEP', 'E0407154', '2022-10-01', '16 H', 0, '', '', '79f63bf22344b154f23693642faaae97.jpg', '.png', 'Hadir', 3, '2022-09-19 13:33:33', '2022-09-30 08:13:57', '1a17bd56-3ab1-11ed-8d7e-c81f66b925de', '1a17bd56-3ab1-11ed-8d7e-c81f66b925de.png'),
(25, '3528121408910001', 'MISBAHUDDIN DWI PRSETYO', '082234421229', 'Laki-Laki', 'JL. AHMAD DAHLAN II/3 KEL. KEBONSARI WETAN , KEC.KANIGARAN - KOTA PROBOLINGGO', 'C3968099', '2022-10-01', '16 H', 0, '', '', '5fb7f507afc2f076d8644382c12ee7c3.jpg', '3528121408910001.png', 'Hadir', 3, '2022-09-19 14:19:19', '2022-09-30 08:13:55', '1a17bdd3-3ab1-11ed-8d7e-c81f66b925de', '1a17bdd3-3ab1-11ed-8d7e-c81f66b925de.png'),
(26, '3574045112920003', 'DEVI RAHMAWATI', '082234479388', 'Perempuan', 'JL. AHMAD DAHLAN II/3 KEL. KEBONSARI WETAN , KEC.KANIGARAN - KOTA PROBOLINGGO', 'E0408525', '2022-10-01', '16 H', 0, '', '', 'd9c84ec8ca10aed7a4256015497aee9d.jpg', '3574045112920003.png', 'Hadir', 3, '2022-09-19 14:27:07', '2022-09-30 08:13:53', '1a17bff7-3ab1-11ed-8d7e-c81f66b925de', '1a17bff7-3ab1-11ed-8d7e-c81f66b925de.png'),
(27, '3574045011650013', 'SITI AISA JANATI', '082234479388', 'Perempuan', 'JL. AHMAD DAHLAN II/3 KEL. KEBONSARI WETAN , KEC.KANIGARAN - KOTA PROBOLINGGO', 'C4906582', '2022-10-01', '16 H', 0, '', '', '4d620a5c1bff6d8c25bb247cf18a6085.jpg', '3574045011650013.png', 'Hadir', 3, '2022-09-19 14:31:08', '2022-09-30 08:13:49', '1a17c063-3ab1-11ed-8d7e-c81f66b925de', '1a17c063-3ab1-11ed-8d7e-c81f66b925de.png'),
(28, '3574046306000002', 'SILVIA AYU', '082234479388', 'Perempuan', 'JL. AHMAD DAHLAN II/3 KEL. KEBONSARI WETAN , KEC.KANIGARAN - KOTA PROBOLINGGO', 'C4908536', '2022-10-01', '16 H', 0, '', '', '022a0d085f70d7eef1771d70ba1ffc2f.jpg', '3574046306000002.png', 'Hadir', 3, '2022-09-19 14:34:41', '2022-09-30 08:13:47', '1a17c219-3ab1-11ed-8d7e-c81f66b925de', '1a17c219-3ab1-11ed-8d7e-c81f66b925de.png'),
(29, '3574040605830002', 'AFANDI ACHMAD', '082234421229', 'Laki-Laki', 'JL. AHMAD DAHLAN 2/17 KEL. KEBONSARI WETAN , KEC.KANIGARAN - KOTA PROBOLINGGO', 'E0408527', '2022-10-01', '16 H', 0, '', '', '6d6f3675834d8406803367296b3c2814.jpg', '3574040605830002.png', 'Hadir', 3, '2022-09-19 14:37:42', '2022-09-30 08:13:44', '1a17c43c-3ab1-11ed-8d7e-c81f66b925de', '1a17c43c-3ab1-11ed-8d7e-c81f66b925de.png'),
(30, '35704045212850007', 'ANIS SANJAYA', '082234479388', 'Perempuan', 'JL. AHMAD DAHLAN 2/17 KEL. KEBONSARI WETAN , KEC.KANIGARAN - KOTA PROBOLINGGO', 'E0408524', '2022-10-01', '16 H', 0, '', '', 'be19e700ffcfdb857649fdccf793cb96.jpg', '35704045212850007.png', 'Hadir', 3, '2022-09-19 14:38:30', '2022-09-30 08:13:39', '1a17c632-3ab1-11ed-8d7e-c81f66b925de', '1a17c632-3ab1-11ed-8d7e-c81f66b925de.png'),
(32, '3509190806590001', 'SUGENG ADI WIYONO', '085604650255', 'Laki-Laki', 'PERUM KEBONAGUNG INDAH 15/20 LINGK. GERBANGWARU RT.003 RW.005 KEL. KEBONAGUNG KEC. KALIWATES JEMBER', 'C9986978', '2022-10-11', '13 HARI', 13, '', '', '44b2e5188c3325d3422e517816e23c4b.jpg', '3509190806590001.png', 'Hadir', 5, '2022-09-19 14:41:13', '2022-09-30 08:17:22', '1a17c824-3ab1-11ed-8d7e-c81f66b925de', '1a17c824-3ab1-11ed-8d7e-c81f66b925de.png'),
(33, '3574041604700001', 'MOCH SUBAKRI', '082234421229', 'Laki-Laki', 'JL. PRIKSAN GANG JERAPA KEL. KEBONSARI KULON , KEC.KANIGARAN - KOTA PROBOLINGGO', 'E0408621', '2022-10-01', '16 H', 0, '', '', '7efd03c8d43588b3cf5a3ef876835349.jpg', '3574041604700001.png', 'Hadir', 3, '2022-09-19 14:43:14', '2022-09-30 08:13:29', '1a17ca19-3ab1-11ed-8d7e-c81f66b925de', '1a17ca19-3ab1-11ed-8d7e-c81f66b925de.png'),
(34, '3509195805600003', 'ENDANG SUGIHARTINI', '085103189852', 'Perempuan', 'PERUM KEBONAGUNG INDAH 15/20 LINGK. GERBANGWARU RT.003 RW.005 KEL. KEBONAGUNG KEC. KALIWATES JEMBER', 'C9986610', '2022-10-11', '13 HARI', 0, '', '', '62bb3cc220242ade78fc490058c94648.jpg', '3509195805600003.png', 'Hadir', 5, '2022-09-19 14:43:32', '2022-09-30 08:13:27', '1a17cc0e-3ab1-11ed-8d7e-c81f66b925de', '1a17cc0e-3ab1-11ed-8d7e-c81f66b925de.png'),
(36, '3574044107740004', 'NUR HALIMAH', '082234421229', 'Perempuan', 'JL. PRIKSAN GANG JERAPA KEL. KEBONSARI KULON , KEC.KANIGARAN - KOTA PROBOLINGGO', 'E0408526', '2022-10-01', '16 H', 0, '', '', 'd1c42e6e3f7523592cf9a3655062d202.jpg', '3574044107740004.png', 'Hadir', 3, '2022-09-19 14:43:56', '2022-09-30 08:13:25', '1a17cdff-3ab1-11ed-8d7e-c81f66b925de', '1a17cdff-3ab1-11ed-8d7e-c81f66b925de.png'),
(37, '3511140903650001', 'MAHRUS SYAMSUL', '085230507623', 'Laki-Laki', 'KRAJAN 02 RT 006 RW 002 KEL. BESUK KEC. KLABANG KAB. BONDOWOSO JAWA TIMUR', 'C8883350', '2022-10-11', '13 HARI (EK', 0, '', '', 'efd25c3e5638720093057ddd0025a952.jpeg', '3511140903650001.png', 'Hadir', 5, '2022-09-19 15:34:38', '2022-09-30 08:13:21', '1a17cff5-3ab1-11ed-8d7e-c81f66b925de', '1a17cff5-3ab1-11ed-8d7e-c81f66b925de.png'),
(38, '3511145309650001', 'LILIK SUGIARTI', '085236646220', 'Perempuan', 'KRAJAN 02 RT 006 RW 002 KEL. BESUK KEC. KLABANG KAB. BONDOWOSO JAWA TIMUR', 'C1542010', '2022-10-11', '13 HARI (EK', 0, '', '', 'c354c86edc4120be6d405c9e9fc2e1ea.jpg', '3511145309650001.png', 'Hadir', 5, '2022-09-19 15:42:37', '2022-09-30 08:13:19', '1a17d460-3ab1-11ed-8d7e-c81f66b925de', '1a17d460-3ab1-11ed-8d7e-c81f66b925de.png'),
(39, '3575030705740002', 'MOKHAMMAD HASAN BISRI', '081336885808', 'Laki-Laki', 'Jl. Ir H Juanda RT 003 RW 004, Kel. Tapa\'an, Kec. Bugul Kidul, Kota. Pasuruan', 'C8898054', '2022-10-01', '16 Hari', 0, '', '', 'd545ff256b162c67c7cc5cdbe79aae7a.jpg', '3575030705740002.png', 'Hadir', 2, '2022-09-20 08:19:36', '2022-09-30 08:13:08', '1a17d4e4-3ab1-11ed-8d7e-c81f66b925de', '1a17d4e4-3ab1-11ed-8d7e-c81f66b925de.png'),
(40, '3575035005820001', 'ROQOYYAH', '081336885808', 'Perempuan', 'Jl. Ir H Juanda RT 003 RW 004, Kel. Tapa\'an, Kec. Bugul Kidul, Kota. Pasuruan', 'C8898055', '2022-10-01', '16 Hari', 0, '', '', '411fc65f3c2c1947ef0b665e727652d2.jpg', '3575035005820001.png', 'Hadir', 2, '2022-09-20 08:23:57', '2022-09-30 08:13:06', '1a17d54e-3ab1-11ed-8d7e-c81f66b925de', '1a17d54e-3ab1-11ed-8d7e-c81f66b925de.png'),
(41, '3575036905010002', 'USAELAH JANNAH', '081336885808', 'Perempuan', 'Jl. Ir H Juanda RT 003 RW 004, Kel. Tapa\'an, Kec. Bugul Kidul, Kota. Pasuruan', 'C8898028', '2022-10-01', '16 Hari', 0, '', '', '4d817d23ee0ba9292061142b2cc806db.jpg', '3575036905010002.png', 'Hadir', 2, '2022-09-20 08:27:30', '2022-09-30 08:13:05', '1a17d5c2-3ab1-11ed-8d7e-c81f66b925de', '1a17d5c2-3ab1-11ed-8d7e-c81f66b925de.png'),
(42, '3575032802060001', 'SAFRIZAL NIDHOM', '081336885808', 'Laki-Laki', 'Jl. Ir H Juanda RT 003 RW 004, Kel. Tapa\'an, Kec. Bugul Kidul, Kota. Pasuruan', 'C8898026', '2022-10-01', '16 Hari', 0, '', '', 'da7957bf972856bbae47076bafa4752f.jpg', '3575032802060001.png', 'Hadir', 2, '2022-09-20 08:30:10', '2022-09-30 08:13:02', '1a17d80e-3ab1-11ed-8d7e-c81f66b925de', '1a17d80e-3ab1-11ed-8d7e-c81f66b925de.png'),
(43, '3507165910570001', 'ZAENAP', '081216516959', 'Perempuan', 'Dusun Panggung Sari RT 025 RW 004, Kel. Kambingan, Kec. Tumpang, Kab. Malang', 'C7850988', '2022-10-01', '16 Hari', 0, '', '', 'b301265d3c3bfd37befe0bb1d932ae65.jpg', '3507165910570001.png', 'Hadir', 2, '2022-09-20 08:38:35', '2022-09-30 08:12:57', '1a17d88e-3ab1-11ed-8d7e-c81f66b925de', '1a17d88e-3ab1-11ed-8d7e-c81f66b925de.png'),
(44, '3576011506780002', 'MULYO HUDIYONO', '082330691798', 'Laki-Laki', 'Sinoman VI Swadaya No 34 RT 003 RW 002, Kel. Miji, Kec. Kranggan, Kota. Mojokerto', 'C6424701', '2022-10-10', '16 Hari', 0, '', '', '9fbef525b34e7dd4ef31e91a6097e2d1.jpeg', '3576011506780002.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-20 08:45:06', '2022-09-30 08:12:52', '1a17d8fc-3ab1-11ed-8d7e-c81f66b925de', '1a17d8fc-3ab1-11ed-8d7e-c81f66b925de.png'),
(45, '3515141908650001', 'MULYO UTOMO', '082234906641', 'Laki-Laki', 'Perum Graha Mutiara B4 No. 4 RT 042 RW 009, Kel. Kebonagung, Kec. Sukodono, Kab. Sidoarjo', 'C6012977', '2022-10-10', '16 Hari', 0, '', '', '057b74505b6563820a9f22fcc7c2efb0.jpeg', '3515141908650001.png', 'Hadir', 2, '2022-09-20 08:50:38', '2022-09-30 08:12:50', '1a17d96a-3ab1-11ed-8d7e-c81f66b925de', '1a17d96a-3ab1-11ed-8d7e-c81f66b925de.png'),
(47, '3507250909720001', 'NANANG WAHYUDI', '082333421633', 'Laki-Laki', 'Jl. Ketindan 19 RT 003 RW 003, Kel. Ketindan, Kec. Lawang, Kab. Malang', 'E0408390', '2022-10-10', '9 Hari', 0, '', '', '872e75c5b9e49990590155d6dcf124e2.jpg', '3507250909720001.png', 'Hadir', 2, '2022-09-20 09:11:54', '2022-09-30 08:12:48', '1a17d9d3-3ab1-11ed-8d7e-c81f66b925de', '1a17d9d3-3ab1-11ed-8d7e-c81f66b925de.png'),
(48, '3507256009740001', 'ENDRIYANI', '082333421633', 'Perempuan', 'Jl. Ketindan 19 RT 003 RW 003, Kel. Ketindan, Kec. Lawang, Kab. Malang', 'E0409044', '2022-10-10', '9 Hari', 0, '', '', '1e7d697ae55a39a385bb5c3411efb15c.jpg', '3507256009740001.png', 'Hadir', 2, '2022-09-20 09:15:05', '2022-09-30 08:12:46', '1a17da3b-3ab1-11ed-8d7e-c81f66b925de', '1a17da3b-3ab1-11ed-8d7e-c81f66b925de.png'),
(49, '3529011903550001', 'RM FATAH EFFENDI', '082139355557', 'Laki-Laki', 'Jl. Melati Perum BSA RT 003 RW 010, Kel. Kolor, Kec. Kota Sumenep, Kab. Sumenep', '', '2022-10-10', '9 Hari', 0, '', '', 'a7e33f860c4c2cb926e7e602a64a4bff.jpg', '3529011903550001.png', 'Hadir', 2, '2022-09-20 09:19:23', '2022-09-30 08:12:44', '1a17daf7-3ab1-11ed-8d7e-c81f66b925de', '1a17daf7-3ab1-11ed-8d7e-c81f66b925de.png'),
(50, '3507190607780004', 'RUDI KUSWOYO', '081233452324', 'Laki-Laki', 'Jl. Pesantren RT 002 RW 010, Kel. Genengan, Kec. Pakisaji, Kab. Malang', 'E0411272', '2022-10-10', '9 Hari', 0, '', '', '396cf9e0a3b2aee0a539b67c3f3329e8.jpeg', '3507190607780004.png', 'Hadir', 2, '2022-09-20 09:25:29', '2022-09-30 08:12:42', '1a17db6b-3ab1-11ed-8d7e-c81f66b925de', '1a17db6b-3ab1-11ed-8d7e-c81f66b925de.png'),
(51, '3507196110800001', 'SRI HANDAYANI', '081233452324', 'Perempuan', 'Jl. Pesantren RT 002 RW 010, Kel. Genengan, Kec. Pakisaji, Kab. Malang', 'E0411309', '2022-10-10', '9 Hari', 0, '', '', '7bfb392fa96be1cbcbdca4ea7f8cd277.jpeg', '3507196110800001.png', 'Hadir', 2, '2022-09-20 09:28:52', '2022-09-30 08:12:40', '1a17dbd4-3ab1-11ed-8d7e-c81f66b925de', '1a17dbd4-3ab1-11ed-8d7e-c81f66b925de.png'),
(52, '3507094409530003', 'SUPRAPTINI', '081233452324', 'Perempuan', 'Jl. Gunung Ceneng 1 RT 002 RW 003, Kel. Turen, Kec. Turen, Kab. Malang', 'E0406823', '2022-10-10', '9 Hari', 0, '', '', 'affee7d8f9a60035a67240590e55899d.jpeg', '3507094409530003.png', 'Hadir', 2, '2022-09-20 09:33:13', '2022-09-30 08:12:38', '1a17dc3d-3ab1-11ed-8d7e-c81f66b925de', '1a17dc3d-3ab1-11ed-8d7e-c81f66b925de.png'),
(53, '3507092002430001', 'ISMAIL ', '081233452324', 'Laki-Laki', 'Jl. Gunung Ceneng 1 RT 002 RW 003, Kel. Turen, Kec. Turen, Kab. Malang', 'E0195609', '2022-10-10', '9 Hari', 0, '', '', 'abf6015e2b44afa90ee80dd721845ec3.jpeg', '3507092002430001.png', 'Hadir', 2, '2022-09-20 09:35:55', '2022-09-30 08:12:36', '1a17dca0-3ab1-11ed-8d7e-c81f66b925de', '1a17dca0-3ab1-11ed-8d7e-c81f66b925de.png'),
(54, '3507194805590001', 'MUJI TRISMITI', '081233452324', 'Perempuan', 'Jl. Kampungbaru RT 001 RW 001, Kel. Pakisaji, Kec. Pakisaji, Kab. Malang', 'E0195621', '2022-10-10', '9 Hari', 0, '', '', 'e8d15359df23a52fee762ca3505b02d8.jpeg', '3507194805590001.png', 'Hadir', 2, '2022-09-20 09:39:02', '2022-09-30 08:12:34', '1a17dd06-3ab1-11ed-8d7e-c81f66b925de', '1a17dd06-3ab1-11ed-8d7e-c81f66b925de.png'),
(55, '3575024811700001', 'AMINING ASTUTI', '08223496355', 'Perempuan', 'Jl. Tenaga Dusun Turi RT 027 RW 010, Kel. Kepuharjo, Kec. Karang Ploso, Kab. Malang', 'E0410800', '2022-10-11', '13 Hari', 0, '', '', '893dfdf1c5fec63673b235c7c03a09f6.jpg', '3575024811700001.png', 'Hadir', 2, '2022-09-20 09:46:21', '2022-09-30 08:12:28', '1a17dd6f-3ab1-11ed-8d7e-c81f66b925de', '1a17dd6f-3ab1-11ed-8d7e-c81f66b925de.png'),
(57, '3573011309930002', 'ALGA BAYU SATRIA KINASIH', '081217290469', 'Laki-Laki', 'Dusun Cangar RT 002 RW 001, Kel. Bulukerto, Kec. Bumiaji, Kota. Batu', 'C3966445', '2022-10-10', '9 Hari', 0, '', '', 'b72fe5a839eea432ddd365843cc42b95.jpg', '3573011309930002.png', 'Hadir', 2, '2022-09-21 14:14:15', '2022-09-30 08:12:22', '1a17dddc-3ab1-11ed-8d7e-c81f66b925de', '1a17dddc-3ab1-11ed-8d7e-c81f66b925de.png'),
(60, '3508151201750001', 'ANDOKO', '081234505180', 'Laki-Laki', 'JL. SUNANDAR PRIYO SUDARMO RT 005 RW 002 KEL. KUTORENON KEC. SUKODONO KABUPATEN LUMAJANG', 'C6416659', '2022-11-25', 'VIP 12H ROS', 0, '', '', '6b45ee090ccae2dd03187a9fbb32fafe.jpg', '3508151201750001.png', 'Tidak Hadir / Belum Hadir', 7, '2022-09-22 10:39:13', '2022-09-30 08:12:18', '1a17de43-3ab1-11ed-8d7e-c81f66b925de', '1a17de43-3ab1-11ed-8d7e-c81f66b925de.png'),
(61, '3508155908780003', 'SETYORINI', '', 'Perempuan', 'JL. SUNANDAR PRIYO SUDARMO RT 005 RW 002 KEL. KUTORENON KEC. SUKODONO KABUPATEN LUMAJANG', 'C6416661', '2022-11-06', 'VIP 12H ROS', 0, '', '', '537285563df1af3ca313bfe970023708.jpg', '3508155908780003.png', 'Tidak Hadir / Belum Hadir', 7, '2022-09-22 10:40:06', '2022-09-30 08:12:13', '1a17dea9-3ab1-11ed-8d7e-c81f66b925de', '1a17dea9-3ab1-11ed-8d7e-c81f66b925de.png'),
(62, '3579020711740001', 'BUDIONO', '081246811935', 'Laki-Laki', 'Dusun Wonorejo RT 005 RW 015, Kel. Tulungrejo, Kec. Bumiaji, Kota. Batu', '', '2022-10-25', '16 Hari', 0, '', '', '4bed363422b1d506e3cdcee99e0ade98.jpg', '3579020711740001.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 14:41:39', '2022-09-30 08:12:06', '1a17df0e-3ab1-11ed-8d7e-c81f66b925de', '1a17df0e-3ab1-11ed-8d7e-c81f66b925de.png'),
(63, '3579026810000002', 'RIZKI AWALIYA', '081246811935', 'Perempuan', 'Dusun Wonorejo RT 005 RW 015, Kel. Tulungrejo, Kec. Bumiaji, Kota. Batu', '', '2022-10-25', '16 Hari', 0, '', '', '07a1bfb83dea971fcb71212000f32d6b.jpg', '3579026810000002.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 14:44:58', '2022-09-30 08:12:04', '1a17df74-3ab1-11ed-8d7e-c81f66b925de', '1a17df74-3ab1-11ed-8d7e-c81f66b925de.png'),
(64, '3579027105020002', 'RIZKA ADELIA ANGGRAENI', '081246811935', 'Perempuan', 'Dusun Wonorejo RT 005 RW 015, Kel. Tulungrejo, Kec. Bumiaji, Kota. Batu', '', '2022-10-25', '16 Hari', 0, '', '', '15283d652299e7d020e4d927ab8d6b6d.jpg', '3579027105020002.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 14:48:24', '2022-09-30 08:12:02', '1a17dfda-3ab1-11ed-8d7e-c81f66b925de', '1a17dfda-3ab1-11ed-8d7e-c81f66b925de.png'),
(65, '3579025508810002', 'SUSIANA WATI', '081246811935', 'Perempuan', 'Dusun Wonorejo RT 005 RW 015, Kel. Tulungrejo, Kec. Bumiaji, Kota. Batu', '', '2022-10-25', '16 Hari', 0, '', '', '9b7ddfc3d421c82745d84a9c121aa83c.jpeg', '3579025508810002.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 14:51:37', '2022-09-30 08:12:00', '1a17e03f-3ab1-11ed-8d7e-c81f66b925de', '1a17e03f-3ab1-11ed-8d7e-c81f66b925de.png'),
(66, '3579024204500002', 'TUKINI', '081246811935', '', 'Dusun Wonorejo RT 005 RW 015, Kel. Tulungrejo, Kec. Bumiaji, Kota. Batu', '', '2022-10-25', '16 Hari', 0, '', '', 'ea1f63c356f9f9f30464fc3672712cd6.jpg', '3579024204500002.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 14:53:05', '2022-09-30 08:11:57', '1a17e0a2-3ab1-11ed-8d7e-c81f66b925de', '1a17e0a2-3ab1-11ed-8d7e-c81f66b925de.png'),
(67, '3579021304550001', 'BUSERI', '08121744867', 'Laki-Laki', 'Dusun Krajan RT 002 RW 003, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu', 'C3011275', '2022-10-25', '16 Hari', 0, '', '', 'db8bf5e59bf80ea0e540eda734a93f14.jpg', '3579021304550001.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 14:56:10', '2022-09-30 08:11:55', '1a17e105-3ab1-11ed-8d7e-c81f66b925de', '1a17e105-3ab1-11ed-8d7e-c81f66b925de.png'),
(68, '3579024310580001', 'WARSIAH HJ', '08121744867', 'Perempuan', 'Dusun Krajan RT 002 RW 003, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu', 'C3011319', '2022-10-25', '16 Hari', 0, '', '', '2ceee31474666d269204c59d25def4fa.jpg', '3579024310580001.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 14:58:15', '2022-09-30 08:11:53', '1a17e169-3ab1-11ed-8d7e-c81f66b925de', '1a17e169-3ab1-11ed-8d7e-c81f66b925de.png'),
(69, '3579022408870001', 'HENDRI KISWANTO', '08121744867', 'Laki-Laki', 'Dusun Jurang Kuwali RT 001 RW 005, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu RW', 'C0560860', '2022-10-25', '16 Hari', 0, '', '', '5d9d5b55fe31d1de57628357c90064a9.jpeg', '3579022408870001.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:03:09', '2022-09-30 08:11:51', '1a17e243-3ab1-11ed-8d7e-c81f66b925de', '1a17e243-3ab1-11ed-8d7e-c81f66b925de.png'),
(70, '3579025511890001', 'IRIN INDRA PUJI LESTARI', '08121744867', 'Perempuan', 'Dusun Jurang Kuwali RT 001 RW 005, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu RW', 'C0560848', '2022-10-25', '16 Hari', 0, '', '', 'fbc6076acd9f76f6af77730e5215be73.jpeg', '3579025511890001.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:05:27', '2022-09-30 08:11:49', '1a17e2b4-3ab1-11ed-8d7e-c81f66b925de', '1a17e2b4-3ab1-11ed-8d7e-c81f66b925de.png'),
(71, '3579020110760002', 'SARIADI', '081554880310', 'Laki-Laki', 'Dusun Krajan RT 002 RW 004, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu', '', '2022-10-25', '16 Hari', 0, '', '', '044465bef018ef29a164c6f5e40f0d43.jpg', '3579020110760002.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:08:19', '2022-09-30 08:11:46', '1a17e42b-3ab1-11ed-8d7e-c81f66b925de', '1a17e42b-3ab1-11ed-8d7e-c81f66b925de.png'),
(72, '3579024608820003', 'NURUL FATONAH', '081554880310', 'Perempuan', 'Dusun Krajan RT 002 RW 004, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu', '', '2022-10-25', '16 Hari', 0, '', '', '60d85f4f2b9f9cb1cbf476b5b96dcece.jpg', '3579024608820003.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:10:22', '2022-09-30 08:11:43', '1a17e49c-3ab1-11ed-8d7e-c81f66b925de', '1a17e49c-3ab1-11ed-8d7e-c81f66b925de.png'),
(73, '3579020701660003', 'SUPARMAN', '08121744867', 'Laki-Laki', 'Dusun Krajan RT 004 RW 003, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu', '', '2022-10-25', '16 Hari', 0, '', '', '2fea8bed1a6e1ab70ac09474193f7b9a.jpeg', '3579020701660003.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:14:08', '2022-09-30 08:11:41', '1a17e50f-3ab1-11ed-8d7e-c81f66b925de', '1a17e50f-3ab1-11ed-8d7e-c81f66b925de.png'),
(74, '3579020212660003', 'SUPRIANTO', '08121744867', 'Laki-Laki', 'Dusun Lemah Putih RT 006 RW 002, Kel. Sumberbrantas, Kec. Bumiaji, Kota Batu', '', '2022-10-25', '16 Hari', 0, '', '', '12b46e1d8f3076ea66374e7177d4941c.jpeg', '3579020212660003.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:17:06', '2022-09-30 08:11:39', '1a17e5a5-3ab1-11ed-8d7e-c81f66b925de', '1a17e5a5-3ab1-11ed-8d7e-c81f66b925de.png'),
(75, '3579024101700049', 'RUBA\'ATIN', '08121744867', 'Perempuan', 'Dusun Lemah Putih RT 006 RW 002, Kel. Sumberbrantas, Kec. Bumiaji, Kota Batu', '', '2022-10-25', '16 Hari', 0, '', '', '6b3242c7586da8a6fbaa028f2173c31b.jpeg', '3579024101700049.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:18:41', '2022-09-30 08:11:35', '1a17e690-3ab1-11ed-8d7e-c81f66b925de', '1a17e690-3ab1-11ed-8d7e-c81f66b925de.png'),
(76, '3579025908040002', 'TRIA AYU WIDYASARI', '08121744867', 'Perempuan', 'Dusun Lemah Putih RT 006 RW 002, Kel. Sumberbrantas, Kec. Bumiaji, Kota Batu', '', '2022-10-25', '16 Hari', 0, '', '', '0c480ac89d3bd71d27695197cde85175.jpeg', '3579025908040002.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:20:46', '2022-09-30 08:11:33', '1a17e6fa-3ab1-11ed-8d7e-c81f66b925de', '1a17e6fa-3ab1-11ed-8d7e-c81f66b925de.png'),
(77, '3579016310810003', 'RIRIN PANCA PUTRI', '08121744867', 'Perempuan', 'Jl. Raya Sumberbrantas RT 003 RW 006, Kel. Sumberbrantas, Kec. Bumiaji, Kota Malang', '', '2022-10-25', '16 Hari', 0, '', '', 'aafdf204cd158801bd3e8ac3fc1b02dc.jpg', '3579016310810003.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:23:55', '2022-09-30 08:11:31', '1a17e75e-3ab1-11ed-8d7e-c81f66b925de', '1a17e75e-3ab1-11ed-8d7e-c81f66b925de.png'),
(78, '3579024703480001', 'SIJATI', '08121744867', 'Perempuan', 'Dusun Krajan RT 003 RW 004, Kel. Sumberbrantas, Kec. Bumiaji, Kota Batu', '', '2022-10-25', '16 Hari', 0, '', '', '87fb3f52e75a76e187ee2807f25edbaa.jpg', '3579024703480001.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:26:17', '2022-09-30 08:11:29', '1a17e7c5-3ab1-11ed-8d7e-c81f66b925de', '1a17e7c5-3ab1-11ed-8d7e-c81f66b925de.png'),
(79, '3579020507410003', 'TAMAR', '08121744867', '', 'Dusun Krajan RT 003 RW 004, Kel. Sumberbrantas, Kec. Bumiaji, Kota Batu', '', '2022-10-25', '16 Hari', 0, '', '', '85a7dddd15c5c12e91429fcdc6d27d31.jpg', '3579020507410003.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:28:20', '2022-09-30 08:11:26', '1a17e82a-3ab1-11ed-8d7e-c81f66b925de', '1a17e82a-3ab1-11ed-8d7e-c81f66b925de.png'),
(80, '3579026702010003', 'NINDI AVILIANI NATASHA ', '08121744867', 'Perempuan', 'Dusun Jurang Kuali RT 001 RW 005, Kel. Sumberbrantas, Kec Bumiaji, Kota Batu', 'C8951320', '2022-10-25', '16 Hari', 0, '', '', '41647176a1fbd2ba2f12c3272088ee54.jpg', '3579026702010003.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:30:56', '2022-09-30 08:11:23', '1a17e892-3ab1-11ed-8d7e-c81f66b925de', '1a17e892-3ab1-11ed-8d7e-c81f66b925de.png'),
(81, '3579025209760002', 'SUMIAH', '08121744867', 'Perempuan', 'Dusun Jurang Kuali RT 001 RW 005, Kel. Sumberbrantas, Kec Bumiaji, Kota Batu', 'C8951349', '2022-10-25', '16 Hari', 0, '', '', 'fb1f916055befe35ae48e7457efd2643.jpeg', '3579025209760002.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:34:30', '2022-09-30 08:11:21', '1a17e8f9-3ab1-11ed-8d7e-c81f66b925de', '1a17e8f9-3ab1-11ed-8d7e-c81f66b925de.png'),
(82, '3579021606730001', 'AHMAD ZAINURI', '08121744867', 'Laki-Laki', 'Dusun Jurang Kuali RT 001 RW 005, Kel. Sumberbrantas, Kec Bumiaji, Kota Batu', 'C8951366', '2022-10-25', '16 Hari', 0, '', '', '6249953a2cf555b1f9541964215f51ef.jpg', '3579021606730001.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:38:59', '2022-09-30 08:11:16', '1a17e960-3ab1-11ed-8d7e-c81f66b925de', '1a17e960-3ab1-11ed-8d7e-c81f66b925de.png'),
(83, '3579026510550001', 'SUKATIN', '08121744867', 'Perempuan', 'Dusun Jurang Kuali RT 001 RW 005, Kel. Sumberbrantas, Kec Bumiaji, Kota Batu', 'C3011334', '2022-10-25', '16 Hari', 0, '', '', '2cf89f300122b4b3e1bedbbb0f681129.jpeg', '3579026510550001.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-22 15:44:41', '2022-09-30 08:11:12', '1a17e9c7-3ab1-11ed-8d7e-c81f66b925de', '1a17e9c7-3ab1-11ed-8d7e-c81f66b925de.png'),
(84, '3514110708830001', 'NUR LAMBANG BARLIAN ', '', 'Laki-Laki', 'DUSUN KARANGKEPUH RT 001 RW 001 KELURAHAN KARANGJATI KECAMATAN PANDAAN KABUPATEN PASURUAN', 'C9824347', '2022-10-11', 'VIP 13 HARI', 0, '', '', 'f65c741faf3a01020450454519360b55.jpeg', '3514110708830001.png', 'Hadir', 7, '2022-09-23 08:43:44', '2022-09-30 08:11:05', '1a4976c9-3ae9-11ed-8d7e-c81f66b925de', '1a4976c9-3ae9-11ed-8d7e-c81f66b925de.png'),
(85, '3573046904860002', 'KARTIKA DEWI WULANSARI', '085649863545', 'Perempuan', 'DUSUN KARANGKEPUH RT 001 RW 001 KELURAHAN KARANGJATI KECAMATAN PANDAAN KABUPATEN PASURUAN', 'C9824346', '2022-10-11', 'VIP 13 HARI', 0, '', '', 'd5ebbdc726cbfef8552eb468b5809ac2.jpeg', '3573046904860002.png', 'Hadir', 7, '2022-09-23 08:45:51', '2022-09-30 08:11:01', '3d89ca5c-3ae9-11ed-8d7e-c81f66b925de', '3d89ca5c-3ae9-11ed-8d7e-c81f66b925de.png'),
(86, '3514114209140002', 'AYU GENDIS DHAKIYA RIYANTI', '', 'Perempuan', 'DUSUN KARANGKEPUH RT 001 RW 001 KELURAHAN KARANGJATI KECAMATAN PANDAAN KABUPATEN PASURUAN', 'C9824344', '2022-10-11', 'VIP 13 HARI', 0, '', '', 'f4d4e801c3e54c3fbce9b6e0aa567736.jpeg', '3514114209140002.png', 'Hadir', 7, '2022-09-23 08:48:15', '2022-09-30 08:10:59', '3d8b01ec-3ae9-11ed-8d7e-c81f66b925de', '3d8b01ec-3ae9-11ed-8d7e-c81f66b925de.png'),
(87, '3514114902130002', 'CALLA GADIS DZAKIYAH ARTANTI', '', 'Perempuan', 'DUSUN KARANGKEPUH RT 001 RW 001 KELURAHAN KARANGJATI KECAMATAN PANDAAN KABUPATEN PASURUAN', 'C9824345', '2022-10-11', 'VIP 13 HARI', 0, '', '', 'a52e38c14139122ccbde9699550bf7fc.jpeg', '3514114902130002.png', 'Hadir', 7, '2022-09-23 08:49:27', '2022-09-30 08:10:53', '3d8b7ca1-3ae9-11ed-8d7e-c81f66b925de', '3d8b7ca1-3ae9-11ed-8d7e-c81f66b925de.png'),
(88, '3514095010520001', 'HJ MASRIFAH', '081233355506', 'Perempuan', 'SUKOREJO RT 001 RW 003 KEL. SUKOREJO KEC. SUKOREJO KABUPATEN PASURUAN', 'X1656469', '2022-10-25', 'VIP 13 HARI', 0, '', '', '470c485c876fd3d4d02f9a985d7e68e6.png', '3514095010520001.png', 'Hadir', 7, '2022-09-23 08:53:21', '2022-09-30 08:10:45', '3d8bf391-3ae9-11ed-8d7e-c81f66b925de', '3d8bf391-3ae9-11ed-8d7e-c81f66b925de.png'),
(89, '3514095208540001', 'RUQOYYAH', '', 'Perempuan', 'DUSUN GENENGAN TIMUR RT 005 RW 003 KEL. GLAGAHSARI KEC. SUKOREJO KABUPATEN PASURUAN', 'C3964463', '2022-10-25', 'VIP 13 HARI', 0, '', '', 'b6e6f6c7fc4b2157d1eb866365f93478.png', '3514095208540001.png', 'Hadir', 7, '2022-09-23 08:54:51', '2022-09-30 08:10:41', '3d8c652c-3ae9-11ed-8d7e-c81f66b925de', '3d8c652c-3ae9-11ed-8d7e-c81f66b925de.png'),
(91, '3579024405810003', 'NIKMATUR ROHMAH', '08121744867', 'Perempuan', 'Dusun Krajan RT 002 RW 004, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu', 'C3011549', '2022-10-25', '16 Hari', 0, '', '', 'dfedfa467083d0b113caca27f5176523.JPG', '3579024405810003.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-23 09:20:52', '2022-09-30 08:10:38', '5da6aead-3ae6-11ed-8d7e-c81f66b925de', '5da6aead-3ae6-11ed-8d7e-c81f66b925de.png'),
(93, '3579020306100001', 'ZAIN ZINEDINE YAZID WAJENDRA', '08121744867', 'Laki-Laki', 'Dusun Krajan RT 002 RW 004, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu', 'E0733939', '2022-10-25', '16 Hari', 0, '', '', 'c4d0163085c301e399ccda55183c94b8.JPG', '3579020306100001.png', 'Tidak Hadir / Belum Hadir', 2, '2022-09-23 09:29:36', '2022-09-30 08:10:35', '95c952cb-3ae7-11ed-8d7e-c81f66b925de', '95c952cb-3ae7-11ed-8d7e-c81f66b925de.png'),
(94, '3579024606130002', 'ZIDNIE SHIDQIA HUMAIRO', '08121744867', 'Perempuan', 'Dusun Krajan RT 002 RW 004, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu', 'E0733944', '2022-10-25', '16 Hari', 0, '', '', 'bc31380a6f9b08db169e7b224eddaaa6.JPG', '', 'Tidak Hadir / Belum Hadir', 2, '2022-09-23 09:37:31', '2022-09-30 08:10:29', 'b0f51fb7-3ae8-11ed-8d7e-c81f66b925de', 'b0f51fb7-3ae8-11ed-8d7e-c81f66b925de.png'),
(97, '3525111107510001', 'ABDUL CHOLID AMRY KAMIAJI', '081370815707', 'Laki-Laki', 'TAMBAK BERAS RT.003 RW.002 KEL. TAMBAKBERAS KEC. CERME KAB. GRESIK', 'C7114053', '2022-10-01', '16 Hari', 0, '', '', '300506b92218f76fb7a0532d076fd527.jpg', '', 'Hadir', 7, '2022-09-23 09:53:45', '2022-09-30 08:10:25', 'f5107491-3aea-11ed-8d7e-c81f66b925de', 'f5107491-3aea-11ed-8d7e-c81f66b925de.png'),
(98, '3525116809910005', 'ASMAUL HUSNAH SAHLAN', '081332781717', 'Perempuan', 'TAMBAK BERAS RT.003 RW.002 KEL. TAMBAKBERAS KEC. CERME KAB. GRESIK', 'E0081767', '2022-10-01', '16 Hari - E', 0, '', '', '5c2715c615adef4b8e77e77d500740e9.jpg', '', 'Tidak Hadir / Belum Hadir', 7, '2022-09-23 09:56:22', '2022-09-30 08:10:23', '52b8bf3c-3aeb-11ed-8d7e-c81f66b925de', '52b8bf3c-3aeb-11ed-8d7e-c81f66b925de.png'),
(99, '3525162708670001', 'IMAM SUKEMI CHUSBININ', '081332744524', 'Laki-Laki', 'JL. BANJAR BARU IV NO.04 GKB RT.002 RW.009 KEL. SUKOMULYO KEC. MANYAR KAB. GRESIK', 'E0076543', '2022-10-01', '16 Hari - E', 0, '', '', '042a88de87b3144dfe721aebb0e31964.JPG', '', 'Hadir', 7, '2022-09-23 09:58:41', '2022-09-30 08:10:21', 'a5a9b680-3aeb-11ed-8d7e-c81f66b925de', 'a5a9b680-3aeb-11ed-8d7e-c81f66b925de.png'),
(100, '3525165903710122', 'ELFI YULIAH MOCH ARIFIN', '082233039187', 'Perempuan', 'JL. BANJAR BARU IV NO.04 GKB RT.002 RW.009 KEL. SUKOFULYO KEC. FANYAR KAB. GRESIK', 'E0076544', '2022-10-01', '16 Hari - E', 0, '', '', 'c9c1b4b388433ecee9d9384ed8155874.jpeg', '', 'Hadir', 7, '2022-09-23 10:00:25', '2022-09-30 08:10:17', 'e3af92bc-3aeb-11ed-8d7e-c81f66b925de', 'e3af92bc-3aeb-11ed-8d7e-c81f66b925de.png'),
(101, '3514244201630001', 'SITI FATIMAH ', '081554139468', 'Perempuan', 'Dsn Tosari RT 003 RW 003 Tosari kab Pasuruan', 'C9822224', '2022-10-01', 'Ekonomi', 0, '', '', '4cce8c16990be216f804902fd1c44636.jpeg', '', 'Hadir', 7, '2022-09-23 10:00:34', '2022-09-30 08:10:14', 'e8ff7ad9-3aeb-11ed-8d7e-c81f66b925de', 'e8ff7ad9-3aeb-11ed-8d7e-c81f66b925de.png'),
(102, '3525112808530001', 'ALI HASAN PONIDAH', '0882009663926', 'Laki-Laki', 'PADEG RT.01 RW.02 KEL. PADEG KEC. CERME KAB. GRESIK', 'C1488998', '2022-10-01', '16 Hari - E', 0, '', '', 'be1908d14de2e55cb3a86c858f6b8246.jpg', '', 'Hadir', 7, '2022-09-23 10:02:42', '2022-09-30 08:10:12', '3585a003-3aec-11ed-8d7e-c81f66b925de', '3585a003-3aec-11ed-8d7e-c81f66b925de.png'),
(103, '3525115204580003', 'SITI ROMAH WONDO', '0882009663926', 'Perempuan', 'PADEG RT.01 RW.02 KEL. PADEG KEC. CERME KAB. GRESIK', 'C1488999', '2022-10-01', '16 Hari - E', 0, '', '', 'cb103ff16ffa198fcc43e64c31434ae7.jpg', '', 'Hadir', 7, '2022-09-23 10:04:07', '2022-09-30 08:10:10', '682029a0-3aec-11ed-8d7e-c81f66b925de', '682029a0-3aec-11ed-8d7e-c81f66b925de.png'),
(104, '3525110504530021', 'SUHARDI IDRIS WONADI', '0882009663926', 'Laki-Laki', 'PADEG RT.01 RW.02 KEL. PADEG KEC. CERME KAB. GRESIK', 'C9300905', '2022-10-01', '16 Hari - E', 0, '', '', 'ea2a39ca468443b28a26be8e9a82acf7.jpg', '', 'Hadir', 7, '2022-09-23 10:06:10', '2022-09-30 08:10:03', 'b19b8384-3aec-11ed-8d7e-c81f66b925de', 'b19b8384-3aec-11ed-8d7e-c81f66b925de.png'),
(105, '3514205503700001', 'ENY MARTININGSIH ', '085236108957', 'Perempuan', 'BEBEKAN LOR RT 01 RW 05 RANUKLINDUNGAN GRATI ', 'C5563560', '2022-10-10', 'SEMI VIP', 0, '', '', '814be575b3c8bc0b6cded3cb34f8e630.jpg', '', 'Tidak Hadir / Belum Hadir', 7, '2022-09-23 10:07:39', '2022-09-30 08:09:58', 'e64e59ad-3aec-11ed-8d7e-c81f66b925de', 'e64e59ad-3aec-11ed-8d7e-c81f66b925de.png'),
(106, '3525115911570001', 'SULASIH RADI RASMIN', '0882009663926', 'Perempuan', 'PADEG RT.01 RW.02 KEL. PADEG KEC. CERME KAB. GRESIK', 'C9300906', '2022-10-01', '16 Hari - E', 0, '', '', '31e5ffeebd6f4b372455bbcf3b387b3d.jpg', '', 'Hadir', 7, '2022-09-23 10:08:32', '2022-09-30 08:09:52', '05f22e53-3aed-11ed-8d7e-c81f66b925de', '05f22e53-3aed-11ed-8d7e-c81f66b925de.png'),
(108, '3514020507570006', 'SUSILOWADI', '085233158155', 'Laki-Laki', 'KRAJAN RT 003 RW 002 GENDRO TUTUR', 'E0191427', '2022-10-11', 'Ekonomi', 0, '', '', 'af6e88c6478444b2433cd61245d0d64a.jpeg', '', 'Hadir', 7, '2022-09-23 10:11:32', '2022-09-30 08:09:47', '71883d8c-3aed-11ed-8d7e-c81f66b925de', '71883d8c-3aed-11ed-8d7e-c81f66b925de.png'),
(109, '3525165206750002', 'ANISATUL FIKRIYAH SAMIRUN', '085748477680', 'Perempuan', 'KH WAKHID HASYIM 5-A/29 RT.02 RW.01 KEL. PEKAUMAN KEC. GRESIK KAB. GRESIK', 'C9655002', '2022-10-01', '16 Hari - E', 0, '', '', '0063d9bf7d1bc803374dcdb2ff522ab3.jpeg', '', 'Hadir', 7, '2022-09-23 10:11:57', '2022-09-30 08:09:41', '803bc129-3aed-11ed-8d7e-c81f66b925de', '803bc129-3aed-11ed-8d7e-c81f66b925de.png'),
(110, '3578195304770001', 'ELLY SARIYAH SYAHRIL', '085100832393', 'Perempuan', 'ROMOKALISARI 36 RT.003 RW.001 KEL. ROMOKALISARI KEC. BENOWO KOTA SURABAYA', 'C9655003', '2022-10-01', '16 Hari - E', 0, '', '', '92c1378837e9b57c1597425978af5b17.jpeg', '', 'Hadir', 7, '2022-09-23 10:13:36', '2022-09-30 08:09:37', 'bb156208-3aed-11ed-8d7e-c81f66b925de', 'bb156208-3aed-11ed-8d7e-c81f66b925de.png'),
(111, '3525145608640021', 'MINATUN KARNO', '081333747986', 'Perempuan', 'PERUM GKGA BLOK D/1 RT.002 RW.006 KEL. KEDANYANG KEC. KEBOMAS KAB. GRESIK', 'E0076542', '2022-10-01', '16 Hari - E', 0, '', '', '988314ff60ba5ec2e67f71c7ef557d5c.jpeg', '', 'Hadir', 7, '2022-09-23 10:15:45', '2022-09-30 08:09:33', '084e78be-3aee-11ed-8d7e-c81f66b925de', '084e78be-3aee-11ed-8d7e-c81f66b925de.png'),
(112, '3514240707650001', 'JULIONO', '085706604645', 'Laki-Laki', 'GEMBOYO DESA MOROREJO RT 002 RW 001 MOROREJO TOSARI', 'C6009683', '2022-10-11', 'VIP', 0, '', '', 'aa4c73419cf58e10f1bd5aed6b768952.jpg', '', 'Hadir', 7, '2022-09-23 10:16:29', '2022-09-30 08:09:21', '22451950-3aee-11ed-8d7e-c81f66b925de', '22451950-3aee-11ed-8d7e-c81f66b925de.png'),
(113, '3514025504790001', 'HARMANI', '085706604645', 'Perempuan', 'GEMBOYO DESA MOROREJO RT 002 RW 001 MOROREJO TOSARI', 'E4049398', '2022-10-11', 'VIP', 0, '', '', '3f513565806020c66e1ea5ffb119c683.jpg', '', 'Hadir', 7, '2022-09-23 10:17:52', '2022-09-30 08:09:19', '5410af36-3aee-11ed-8d7e-c81f66b925de', '5410af36-3aee-11ed-8d7e-c81f66b925de.png'),
(114, '3575031202820003', 'LAILUL UDIN ALZA', '081333222902', 'Laki-Laki', 'JL SULTAN AGUNG GG III NO 8 RT 005 RW 004 PURUTREJO ', 'C6833088', '2022-10-25', 'VIP - 13 HA', 0, '', '', '22022e7b39912dd4869ba69a3f48c079.jpeg', '', 'Hadir', 7, '2022-09-23 10:26:08', '2022-09-30 08:09:14', '7b38cf4d-3aef-11ed-8d7e-c81f66b925de', '7b38cf4d-3aef-11ed-8d7e-c81f66b925de.png'),
(115, '3575036712830002', 'DIAN EKA SHUKMA', '081333222902', 'Perempuan', 'JL SULTAN AGUNG GG III NO 8 RT 005 RW 004 PURUTREJO ', 'C6833072', '2022-10-25', 'VIP - 13 HA', 0, '', '', 'b8dc9231dfd94a31016c8c3a4f3c5311.jpeg', '', 'Hadir', 7, '2022-09-23 10:28:08', '2022-09-30 08:09:10', 'c2fde7dc-3aef-11ed-8d7e-c81f66b925de', 'c2fde7dc-3aef-11ed-8d7e-c81f66b925de.png'),
(117, '3575015010600001', 'MASROCHANAH MACHFUDZ RAJAK', '085646384441', 'Perempuan', 'JL. HASANUDIN GG.17 NO.41 RT.004 RW.002 KEL. KARANGANYAR KEC. PANGGUNGREJO KOTA PASURUAN', 'C8310561', '2022-10-01', '16 Hari - E', 0, '', '', 'dd39f6164f99d5db0c3b3b1f4a65fbe2.jpg', '', 'Hadir', 7, '2022-09-23 10:55:20', '2022-09-30 08:09:05', '8fbc5f0f-3af3-11ed-8d7e-c81f66b925de', '8fbc5f0f-3af3-11ed-8d7e-c81f66b925de.png'),
(118, '3575022908650002', 'AGUS PRIYANTONO', '085608226498', 'Laki-Laki', 'JL URIP SUMOHARJO RT 007 RW 001 POHJENTREK ', '', '2022-10-25', 'VIP - 13 HA', 0, '', '', 'd2e3841b3185e3799b63121d4b68b2b1.jpeg', '', 'Hadir', 7, '2022-09-23 10:59:43', '2022-09-30 08:09:00', '2c6584c3-3af4-11ed-8d7e-c81f66b925de', '2c6584c3-3af4-11ed-8d7e-c81f66b925de.png'),
(119, '3575026709650002', 'FATICHAH ', '085646422188', 'Perempuan', 'JL URIP SUMOHARJO RT 007 RW 001 POHJENTREK ', '', '2022-10-25', 'VIP - 13 HA', 0, '', '', '704b8616c8744d1f3b9c928f84e32c03.jpeg', '', 'Hadir', 7, '2022-09-23 11:06:29', '2022-09-30 08:08:56', '1e5cf2ee-3af5-11ed-8d7e-c81f66b925de', '1e5cf2ee-3af5-11ed-8d7e-c81f66b925de.png'),
(120, '3575010101530024', 'M NAWAWI MADRAWI', '085646384441', 'Laki-Laki', 'JL. HASANUDIN GG.17 NO.41 RT.004 RW.002 KEL. KARANGANYAR KEC. PANGGUNGREJO KOTA PASURUAN', 'C8310562', '2022-10-01', '16 Hari - E', 0, '', '', 'f4ee2da5ca021d7f0e96c091f8488ef3.jpeg', '', 'Hadir', 7, '2022-09-23 11:12:39', '2022-09-30 08:07:10', 'fb003e20-3af5-11ed-8d7e-c81f66b925de', 'fb003e20-3af5-11ed-8d7e-c81f66b925de.png'),
(121, '3514145601740003', 'ANI', '08123218224', 'Perempuan', 'JL RA KARTINI 115 RT 002 RW 002 BANGIL ', 'C2795670', '2022-10-11', 'VIP', 0, '', '', '3a4d302eb5408ee79d36eb72bc465966.jpeg', '', 'Hadir', 7, '2022-09-23 11:17:23', '2022-09-30 08:07:03', 'a483541f-3af6-11ed-8d7e-c81f66b925de', 'a483541f-3af6-11ed-8d7e-c81f66b925de.png'),
(122, '3509034107710425', 'BUA', '08123218224', 'Perempuan', 'DUSUN PACI RT 001 RW 002 GELANG SUMBER BARU JEMBER', 'C9187342', '2022-10-11', 'VIP', 0, '', '', 'd754d11805457061d3ecdcf8236f659c.jpg', '', 'Hadir', 7, '2022-09-23 11:19:07', '2022-09-30 08:07:00', 'e263859c-3af6-11ed-8d7e-c81f66b925de', 'e263859c-3af6-11ed-8d7e-c81f66b925de.png'),
(123, '3575025704770001', 'MARIYATUL QIBTIYAH ', '082232886112', 'Perempuan', 'SULTAN AGUNG 4/5 RT 005 RW 005 PURUTREJO PURWOREJO PASURUAN', 'C9154024', '2022-10-10', 'VIP', 0, '', '', 'c65a499cefe84d377e8484217b33f4dc.jpeg', '', 'Hadir', 7, '2022-09-23 11:25:17', '2022-09-30 08:06:53', 'beb6c7b2-3af7-11ed-8d7e-c81f66b925de', 'beb6c7b2-3af7-11ed-8d7e-c81f66b925de.png'),
(124, '6371044412810006', 'PAIZAH, S, PD', '081348098058', 'Perempuan', 'JL PANGERAN NO 7 RT 012 RW 001 BANJARMASIN ', 'E0330912', '2022-10-25', 'VVIP', 0, '', '', '5d700ff8b29ae288e7e7d39ae2713a27.jpeg', '', 'Hadir', 7, '2022-09-23 11:35:17', '2022-09-30 08:06:43', '24b2cd6f-3af9-11ed-8d7e-c81f66b925de', '24b2cd6f-3af9-11ed-8d7e-c81f66b925de.png'),
(125, '3514146206660001', 'HJ. SULISTYOWATI ', '081348098058', 'Perempuan', 'JL RA KARTINI 293 RT 001 RW 001 DERMO BANGIL', 'C6428579', '2022-10-25', 'VVIP', 0, '', '', '1d2a87d22ad69ab4c279bb0274a8d59c.jpeg', '', 'Hadir', 7, '2022-09-23 11:38:22', '2022-09-30 08:06:41', '92d83d03-3af9-11ed-8d7e-c81f66b925de', '92d83d03-3af9-11ed-8d7e-c81f66b925de.png'),
(126, '3514140608540002', 'H. MURDJANI ', '081348098058', 'Laki-Laki', 'JL RA KARTINI 293 RT 001 RW 001 DERMO BANGIL', 'C2792071', '2022-10-25', 'VVIP', 0, '', '', 'e9fcefef9e03ab434dc9559a73a305ba.jpeg', '', 'Hadir', 7, '2022-09-23 11:40:01', '2022-09-30 08:06:38', 'cd8c14a3-3af9-11ed-8d7e-c81f66b925de', 'cd8c14a3-3af9-11ed-8d7e-c81f66b925de.png'),
(127, '3575025002830003', 'SRI MULYANI ', '081348098058', 'Perempuan', 'PERUM KEBONAGUNG MAS BLOK A9 RT 002 RW 007 KEBONAGUNG PASURUAN', 'X1161979', '2022-10-25', 'VVIP', 0, '', '', 'c4817b9b8114c1843375699293ca48ee.jpeg', '', 'Hadir', 7, '2022-09-23 11:42:56', '2022-09-30 08:06:36', '3631a05f-3afa-11ed-8d7e-c81f66b925de', '3631a05f-3afa-11ed-8d7e-c81f66b925de.png'),
(128, '3579023010810001', 'BAMBANG SUHERI', '08121744867', 'Laki-Laki', 'Dusun Krajan RT 002 RW 004, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu', 'C3011550', '2022-10-25', 'VIP', 16, '', '', '3d906693a2c659b2093633cdbe708e13.jpeg', '', 'Tidak Hadir / Belum Hadir', 2, '2022-09-23 12:26:12', '2022-09-30 08:15:38', '419230f7-3b00-11ed-8d7e-c81f66b925de', '419230f7-3b00-11ed-8d7e-c81f66b925de.png'),
(129, '3579025004020004', 'DIVA ZAULIA WANDHITA', '08121744867', 'Perempuan', 'Dusun Krajan RT 002 RW 004, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu', 'E0733921', '2022-10-25', 'VIP', 16, '', '', '1408ee584b85980a4b84c76034210b76.jpg', '', 'Tidak Hadir / Belum Hadir', 2, '2022-09-23 12:28:32', '2022-09-30 08:15:33', '94deb604-3b00-11ed-8d7e-c81f66b925de', '94deb604-3b00-11ed-8d7e-c81f66b925de.png'),
(131, '3579026906720001', 'SUYATI', '08121744867', 'Perempuan', 'Dusun Jurang Kuali RT 003 RW 005, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu', 'C3967322', '2022-10-25', 'VIP', 16, '', '', '5a9932610ab6e903d3f0b1d2383d54e6.jpeg', '', 'Tidak Hadir / Belum Hadir', 2, '2022-09-23 12:32:41', '2022-09-30 08:15:29', '292f7ea7-3b01-11ed-8d7e-c81f66b925de', '292f7ea7-3b01-11ed-8d7e-c81f66b925de.png'),
(132, '3575020708830004', 'ADITYA NARWANTO', '081234331898', 'Laki-Laki', 'PERUM KEBONAGUNG MAS BLOK A9 RT 002 RW 007 KEBONAGUNG PASURUAN', 'X1161976', '2022-10-25', 'VIP', 0, '', '', '4e7360bf2edba86b93d1e7308c6d77c4.jpg', '', 'Hadir', 7, '2022-09-23 13:20:42', '2022-09-30 08:06:18', 'de459cc7-3b07-11ed-8d7e-c81f66b925de', 'de459cc7-3b07-11ed-8d7e-c81f66b925de.png'),
(133, '', 'CINDY KAMILA ANDJANI', '082232886112', 'Perempuan', 'JL SULTAN AGUNG GG III NO 8 RT 005 RW 004 PURUTREJO ', 'C9154025', '2022-10-10', 'VIP', 0, '', '', 'e7100b939bf542eb678821d63de85747.jpeg', '', 'Hadir', 7, '2022-09-23 13:22:41', '2022-09-30 08:06:14', '2560fa00-3b08-11ed-8d7e-c81f66b925de', '2560fa00-3b08-11ed-8d7e-c81f66b925de.png'),
(135, '3579020810640002', 'KASIL SUNARYO BASUKI', '08121744867', 'Laki-Laki', 'Dusun Jurang Kuali RT 003 RW 005, Kel. Sumberbrantas, Kec. Bumiaji, Kota. Batu', 'C3967327', '2022-10-25', 'VIP', 16, '', '', 'cc93cb0ff572c5c96385ccb45475f51a.jpeg', '', 'Tidak Hadir / Belum Hadir', 2, '2022-09-23 19:59:13', '2022-09-30 08:15:10', '8aa1e978-3b3f-11ed-8d7e-c81f66b925de', '8aa1e978-3b3f-11ed-8d7e-c81f66b925de.png'),
(136, '3528134107510047', 'SIYA', '082301729626', 'Perempuan', 'DSN PADHEK KEL TLONTO RAJA PASEAN PAMEKASAN', 'E0844496', '2022-10-10', 'VIP', 0, '', '', '8f7e5a8b0aaba6c1d50bca04dfce168e.jpeg', '', 'Hadir', 7, '2022-09-23 20:19:27', '2022-09-30 08:06:01', '5ddbea1f-3b42-11ed-8d7e-c81f66b925de', '5ddbea1f-3b42-11ed-8d7e-c81f66b925de.png'),
(137, '3528134107710108', 'FATIMA', '082301729629', 'Perempuan', 'DSN PADEK TLONTO RAJA PASEAN PAMEKASAN', 'E0844570', '2022-10-10', 'VIP', 0, '', '', 'a25de92bd805b9f07098e2207ba29def.jpeg', '', 'Hadir', 7, '2022-09-23 20:21:19', '2022-09-30 08:05:57', 'a0ddcabb-3b42-11ed-8d7e-c81f66b925de', 'a0ddcabb-3b42-11ed-8d7e-c81f66b925de.png'),
(139, '351412090373700001', 'DIDIK HADI PRAYITNO', '082230441435', 'Laki-Laki', 'Jl. Kecicang RT 004 RW 004, Kel. Ngerong, Kec. Gempol, Kab. Pasuruan', 'C9653203', '2022-10-01', 'VIP', 16, '', '', '2db649bc808860e38a40363640b33dc8.jpeg', '', 'Tidak Hadir / Belum Hadir', 2, '2022-09-29 10:44:03', '2022-09-30 08:05:51', 'f5dc0f5a-3fa8-11ed-9617-c81f66b925de', 'f5dc0f5a-3fa8-11ed-9617-c81f66b925de.png'),
(140, '35750211059900022', 'Abdul Mutholib', '08123456773453', 'Laki-Laki', 'Jl. Bengawan Solo No. 119 Pasuruan', 'C678345', '2022-09-30', 'Semi VIP', 9, 'Hilton Conventional', 'Fairmont Hotel', '05460c4bf62478811a00b9a6caf9c4f1.jpg', '', 'Tidak Hadir / Belum Hadir', 1, '2022-09-29 14:48:04', '2022-09-29 07:57:39', '99981547301502976', '99981547301502976.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `id_jamaah` varchar(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_jamaah` varchar(255) NOT NULL,
  `kehadiran` enum('Hadir','Tidak Hadir / Belum Hadir','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kehadiran`
--

INSERT INTO `kehadiran` (`id_kehadiran`, `id_jamaah`, `nik`, `nama_jamaah`, `kehadiran`) VALUES
(43, '12', '35750211059900022', 'Abdul Mutholib', 'Tidak Hadir / Belum Hadir'),
(44, '5', '3575021105990002', 'Abu Tholib', 'Tidak Hadir / Belum Hadir'),
(45, '3', '3575021105990004', 'Mahrus Widi Pratama', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `kategori` enum('Umroh','Haji','Tour','') NOT NULL,
  `nama_program` varchar(100) NOT NULL,
  `paket` enum('Ekonomi','Hemat','Semi VIP','VIP') NOT NULL DEFAULT 'Ekonomi',
  `hotel_mekkah` varchar(100) NOT NULL,
  `hotel_madinah` varchar(100) NOT NULL,
  `bintang_mekkah` varchar(2) NOT NULL,
  `bintang_madinah` varchar(2) NOT NULL,
  `matauang` enum('Rp','USD','','') NOT NULL DEFAULT 'Rp',
  `uang_muka` varchar(50) NOT NULL,
  `matauangall` enum('Rp','USD','','') NOT NULL DEFAULT 'Rp',
  `harga_paket` varchar(50) NOT NULL,
  `sudah_termasuk` text NOT NULL,
  `belum_termasuk` text NOT NULL,
  `paket_img` varchar(40) NOT NULL,
  `tampilan` enum('Uang Muka','Harga','','') NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `kategori`, `nama_program`, `paket`, `hotel_mekkah`, `hotel_madinah`, `bintang_mekkah`, `bintang_madinah`, `matauang`, `uang_muka`, `matauangall`, `harga_paket`, `sudah_termasuk`, `belum_termasuk`, `paket_img`, `tampilan`, `created_by`) VALUES
(12, 'Umroh', 'Umroh Nifsu Sya\'ban', 'Hemat', 'Fairmont Hotel', 'Hilton Conventional', '5', '2', 'Rp', '10000000', 'Rp', '28900000', 'ini', 'ini', 'fbfbce87f57e0998859b646d22e690f7.jpg', 'Uang Muka', 1),
(16, 'Haji', 'Haji Eksklusif Arbain Tanpa Antri', 'VIP', 'Fairmont Hotel', 'Hilton Conventional', '5', '5', 'USD', '10000', 'Rp', '2890000000', 'ini', 'itu', '720342097ca6668bdfdd1707da0a36b9.jpg', 'Harga', 1),
(18, 'Tour', 'Tour Turki Holiday', 'VIP', 'Fairmont Hotel', 'Hilton Conventional', '5', '3', 'Rp', '5000000', 'Rp', '11900000', 'ini', 'itu', '294003a9be02d0cc374c3e886ad793d5.jpg', 'Uang Muka', 1),
(20, 'Umroh', 'Cuti Hari Raya', 'VIP', 'Fairmont Hotel', 'Hilton Conventional', '3', '3', 'Rp', '5000000', 'Rp', '30000000', 'ini', 'itu', '715ca5c9015dc88414469e18e5e902e6.jpg', 'Uang Muka', 1),
(21, 'Umroh', 'Syawal Akhir', 'VIP', 'Fairmont Hotel', 'Hilton Conventional', '5', '3', 'Rp', '5000000', 'Rp', '11900000', 'ini', 'itu', 'f4d3026e34eb12c5339dd4d90b0649bd.jpg', 'Uang Muka', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `scan`
--

CREATE TABLE `scan` (
  `id_scan` int(11) NOT NULL,
  `nik_terscan` varchar(100) NOT NULL,
  `id_jamaah` varchar(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_level` varchar(3) DEFAULT NULL,
  `created_at` date NOT NULL,
  `created_by` varchar(11) NOT NULL,
  `pass` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `created_at`, `created_by`, `pass`) VALUES
(1, 'Admin Super Power', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '0000-00-00', '0', '123456'),
(2, 'Kantor Cabang Malang', 'cabang.malang', '430e1ddc2127505b756fe2c3807e6dfa', '2', '0000-00-00', '1', 'cabangmalang205'),
(3, 'Kantor Cabang Probolinggo', 'cabang.probolinggo', 'ebc35d9c6b0ee27816e366e5b3dd6af8', '2', '0000-00-00', '1', 'cabangprobolinggo012'),
(4, 'Kantor Cabang Situbondo', 'cabang.situbondo', 'e55f6ebe9e737b0fc2e6bc10ff2f4d40', '2', '0000-00-00', '1', 'cabangsitubondo407'),
(5, 'Kantor Cabang Jember', 'cabang.jember', '3e6d9b89d64abffdccce5db08e5ca432', '2', '0000-00-00', '1', 'cabangjember611'),
(6, 'Kantor Jakarta', 'office.jakarta', '62fa4af43a22bb044b369c5fcf64bbdf', '2', '0000-00-00', '1', 'officejakarta110'),
(7, 'Kantor Pusat Pasuruan', 'pusat.pas', '5ec4dd8bf2e93b327fb5e72fb08f50ae', '1', '0000-00-00', '1', 'pusatpasuruan01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `img_dropzone`
--
ALTER TABLE `img_dropzone`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`id_jamaah`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `scan`
--
ALTER TABLE `scan`
  ADD PRIMARY KEY (`id_scan`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `img_dropzone`
--
ALTER TABLE `img_dropzone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  MODIFY `id_jamaah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `scan`
--
ALTER TABLE `scan`
  MODIFY `id_scan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
