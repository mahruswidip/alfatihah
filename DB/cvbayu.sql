-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 20 Mar 2023 pada 01.34
-- Versi server: 5.7.34
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvbayu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `fk_id_kategori` varchar(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `fk_id_kategori`, `nama_barang`, `jumlah`, `satuan`, `keterangan`) VALUES
(1, '2', 'PENSIL', 11, 'BOX', 'HITAM'),
(2, '2', 'PENGGARIS', 19, 'BOX', 'TRANSPARAN'),
(5, '33', 'ESCAVATOR MINI', 37, 'UNIT', 'ORANYE'),
(8, '7', 'KAPAS', 2, 'BOX', 'PUTIH'),
(10, '31', 'IPONE 7', 2, 'UNIT', 'WAD'),
(11, '31', 'IPONE 8', 21, 'UNIT', 'MERAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_pesanan`
--

CREATE TABLE `barang_pesanan` (
  `id_barang_pesanan` int(11) NOT NULL,
  `fk_id_pesanan` varchar(20) NOT NULL,
  `fk_id_barang` varchar(20) NOT NULL,
  `jumlah_pesanan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_pesanan`
--

INSERT INTO `barang_pesanan` (`id_barang_pesanan`, `fk_id_pesanan`, `fk_id_barang`, `jumlah_pesanan`) VALUES
(7, '1', '5', '7'),
(9, '2', '11', '0'),
(10, '2', '5', '0');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamaah`
--

CREATE TABLE `jamaah` (
  `id_jamaah` int(11) NOT NULL,
  `fk_user_id` varchar(200) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_jamaah` varchar(255) NOT NULL,
  `nomor_telepon` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat` text NOT NULL,
  `nomor_paspor` varchar(11) NOT NULL,
  `jamaah_img` varchar(40) NOT NULL,
  `qr_code` varchar(50) NOT NULL,
  `kehadiran` enum('Hadir','Tidak Hadir / Belum Hadir','','') NOT NULL DEFAULT 'Tidak Hadir / Belum Hadir',
  `created_by` int(5) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uuid` text,
  `qr_code_benar` varchar(80) NOT NULL,
  `is_user` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'ALAT BERAT'),
(2, 'ALAT TULIS'),
(3, 'KENDARAAN'),
(7, 'ALAT RINGAN'),
(16, 'HP'),
(31, 'IPONE'),
(33, 'MAINAN KENDARAAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keberangkatan`
--

CREATE TABLE `keberangkatan` (
  `id_keberangkatan` int(100) NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `is_aktif` int(11) NOT NULL DEFAULT '0',
  `tanggal_manasik` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `fk_id_jamaah` varchar(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_jamaah` varchar(255) NOT NULL,
  `kehadiran` enum('Hadir','Tidak Hadir / Belum Hadir','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `fk_id_keberangkatan` varchar(100) NOT NULL,
  `kategori` enum('Umroh','Haji','Tour','') NOT NULL,
  `nama_program` varchar(100) NOT NULL,
  `paket` enum('Ekonomi','Hemat','Semi VIP','VIP','Standard','VVIP Business Class','VIP Business Class') NOT NULL DEFAULT 'Ekonomi',
  `hotel_mekkah` varchar(100) NOT NULL,
  `hotel_madinah` varchar(100) NOT NULL,
  `bintang_mekkah` varchar(2) NOT NULL,
  `bintang_madinah` varchar(2) NOT NULL,
  `lama_hari` int(10) NOT NULL,
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `fk_id_pesanan` varchar(20) NOT NULL,
  `fk_id_barang` varchar(20) NOT NULL,
  `jumlah_kirim` varchar(20) NOT NULL,
  `tanggal_kirim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `fk_id_pesanan`, `fk_id_barang`, `jumlah_kirim`, `tanggal_kirim`) VALUES
(8, '2', '5', '8', '2023-03-21'),
(10, '2', '11', '2', '2023-03-21'),
(11, '2', '11', '1', '2023-03-23'),
(12, '2', '11', '1', '2023-03-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nomor_pesanan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_pesanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nomor_pesanan`, `nama_pelanggan`, `alamat`, `tanggal_pesanan`) VALUES
(1, 'PCVB001', 'PT. MAYORA 2', 'KEJAYAN', '2023-03-19'),
(2, 'PCVB002', 'PT. AMERTA INDAH', 'KEJAYAN', '2023-03-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `record_keberangkatan`
--

CREATE TABLE `record_keberangkatan` (
  `id_record` int(11) NOT NULL,
  `id_jamaah` varchar(100) NOT NULL,
  `id_paket` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pengiriman`
--

CREATE TABLE `riwayat_pengiriman` (
  `id_riwayat_pengiriman` int(11) NOT NULL,
  `fk_id_pengiriman` varchar(20) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `pass` varchar(90) NOT NULL,
  `is_jamaah` int(5) DEFAULT '0',
  `fk_id_jamaah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `created_at`, `created_by`, `pass`, `is_jamaah`, `fk_id_jamaah`) VALUES
(1, 'Admin Super Power', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '0000-00-00', '0', '123456', 0, ''),
(2, 'Kantor Cabang Malang', 'cabang.malang', '430e1ddc2127505b756fe2c3807e6dfa', '2', '0000-00-00', '1', 'cabangmalang205', 0, ''),
(9, 'DIDIK HADI PRAYITNO', '351412090373700001', 'e10adc3949ba59abbe56e057f20f883e', '3', '0000-00-00', '1', '123456', 1, '139');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `barang_pesanan`
--
ALTER TABLE `barang_pesanan`
  ADD PRIMARY KEY (`id_barang_pesanan`);

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
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `keberangkatan`
--
ALTER TABLE `keberangkatan`
  ADD PRIMARY KEY (`id_keberangkatan`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `record_keberangkatan`
--
ALTER TABLE `record_keberangkatan`
  ADD PRIMARY KEY (`id_record`);

--
-- Indeks untuk tabel `riwayat_pengiriman`
--
ALTER TABLE `riwayat_pengiriman`
  ADD PRIMARY KEY (`id_riwayat_pengiriman`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `barang_pesanan`
--
ALTER TABLE `barang_pesanan`
  MODIFY `id_barang_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `img_dropzone`
--
ALTER TABLE `img_dropzone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  MODIFY `id_jamaah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `keberangkatan`
--
ALTER TABLE `keberangkatan`
  MODIFY `id_keberangkatan` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `record_keberangkatan`
--
ALTER TABLE `record_keberangkatan`
  MODIFY `id_record` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `riwayat_pengiriman`
--
ALTER TABLE `riwayat_pengiriman`
  MODIFY `id_riwayat_pengiriman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
