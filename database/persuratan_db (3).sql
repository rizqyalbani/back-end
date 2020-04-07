-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2020 pada 04.30
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persuratan_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_disposisi`
--

CREATE TABLE `tbl_disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_penyelesaian` date NOT NULL,
  `no_agenda` varchar(11) NOT NULL,
  `id_jenis_disposisi` int(11) NOT NULL,
  `instruksi` varchar(225) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_jenis_surat` int(11) NOT NULL,
  `id_surat_masuk` int(11) NOT NULL,
  `postedTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_disposisi`
--

INSERT INTO `tbl_disposisi` (`id_disposisi`, `tanggal`, `tanggal_penyelesaian`, `no_agenda`, `id_jenis_disposisi`, `instruksi`, `id_user`, `id_status`, `id_jenis_surat`, `id_surat_masuk`, `postedTime`) VALUES
(19, '2020-04-01', '2020-04-03', '0001', 2, 'penandatanganan', 12, 2, 1, 12, '2020-04-01 17:28:05'),
(20, '2020-04-09', '2020-04-16', '0002', 3, 'Dinas ke Asanka', 12, 2, 1, 12, '2020-04-01 17:28:26'),
(21, '2020-04-29', '2020-04-30', '0003', 1, 'ke pemerintahan', 20, 1, 1, 13, '2020-04-01 17:28:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_disposisi`
--

CREATE TABLE `tbl_jenis_disposisi` (
  `id_jenis_disposisi` int(11) NOT NULL,
  `jenis_disposisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenis_disposisi`
--

INSERT INTO `tbl_jenis_disposisi` (`id_jenis_disposisi`, `jenis_disposisi`) VALUES
(1, 'Rahasia'),
(2, 'Penting'),
(3, 'Rutin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_surat`
--

CREATE TABLE `tbl_jenis_surat` (
  `id_jenis_surat` int(11) NOT NULL,
  `jenis_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenis_surat`
--

INSERT INTO `tbl_jenis_surat` (`id_jenis_surat`, `jenis_surat`) VALUES
(1, 'Disposisi Surat Masuk'),
(2, 'Disposisi Surat Keluar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_serah_terima_dokumen`
--

CREATE TABLE `tbl_serah_terima_dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `id_surat_masuk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `status`) VALUES
(1, 'belum diterima'),
(2, 'diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_surat_keluar`
--

CREATE TABLE `tbl_surat_keluar` (
  `id_surat_keluar` int(255) NOT NULL,
  `lampiran_surat_keluar` varchar(255) NOT NULL,
  `alamat_tujuan` varchar(255) NOT NULL,
  `tanggal_surat_keluar` date NOT NULL,
  `nomor_surat_keluar` varchar(255) NOT NULL,
  `perihal_surat_keluar` varchar(255) NOT NULL,
  `nama_instansi_surat_keluar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_surat_keluar`
--

INSERT INTO `tbl_surat_keluar` (`id_surat_keluar`, `lampiran_surat_keluar`, `alamat_tujuan`, `tanggal_surat_keluar`, `nomor_surat_keluar`, `perihal_surat_keluar`, `nama_instansi_surat_keluar`) VALUES
(5, 'SOP Pengecekan', 'Jl Waturenggong', '2020-03-25', '15/MJS/ITB/XXI/2020', 'Pengecekan', 'PT Bucin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_surat_masuk`
--

CREATE TABLE `tbl_surat_masuk` (
  `id_surat_masuk` int(255) NOT NULL,
  `lampiran_surat_masuk` varchar(255) NOT NULL,
  `alamat_pengirim` varchar(255) NOT NULL,
  `tanggal_surat_masuk` date NOT NULL,
  `nomor_surat_masuk` varchar(255) NOT NULL,
  `perihal_surat_masuk` varchar(255) NOT NULL,
  `nama_instansi_surat_masuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_surat_masuk`
--

INSERT INTO `tbl_surat_masuk` (`id_surat_masuk`, `lampiran_surat_masuk`, `alamat_pengirim`, `tanggal_surat_masuk`, `nomor_surat_masuk`, `perihal_surat_masuk`, `nama_instansi_surat_masuk`) VALUES
(12, 'semoga', 'Jl. Gunung Agung', '2020-03-25', 'XI/1122/231/2020', 'testing', 'PT. ASANKA'),
(13, 'jualan', 'Jl. Gunung Agung', '2020-03-26', 'XI/1122/231/2020', 'jual', 'Circle K');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(255) NOT NULL,
  `id_role` int(255) NOT NULL,
  `nip` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_role`, `nip`, `nama`, `password`) VALUES
(12, 2, 13123, 'andrea', 'user1'),
(13, 1, 34234234, 'admin', 'admin'),
(20, 2, 12345, 'ripanjul', 'sanitizer'),
(22, 1, 2312312, 'admin2', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  ADD PRIMARY KEY (`id_disposisi`),
  ADD KEY `jenis_disposisi` (`id_jenis_disposisi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_surat_masuk` (`id_surat_masuk`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_jenis_surat` (`id_jenis_surat`);

--
-- Indeks untuk tabel `tbl_jenis_disposisi`
--
ALTER TABLE `tbl_jenis_disposisi`
  ADD PRIMARY KEY (`id_jenis_disposisi`);

--
-- Indeks untuk tabel `tbl_jenis_surat`
--
ALTER TABLE `tbl_jenis_surat`
  ADD PRIMARY KEY (`id_jenis_surat`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `tbl_serah_terima_dokumen`
--
ALTER TABLE `tbl_serah_terima_dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `id_surat_masuk` (`id_surat_masuk`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status` (`id_status`);

--
-- Indeks untuk tabel `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indeks untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_disposisi`
--
ALTER TABLE `tbl_jenis_disposisi`
  MODIFY `id_jenis_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_surat`
--
ALTER TABLE `tbl_jenis_surat`
  MODIFY `id_jenis_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id_role` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_serah_terima_dokumen`
--
ALTER TABLE `tbl_serah_terima_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id_status` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  MODIFY `id_surat_keluar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  MODIFY `id_surat_masuk` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  ADD CONSTRAINT `tbl_disposisi_ibfk_2` FOREIGN KEY (`id_surat_masuk`) REFERENCES `tbl_surat_masuk` (`id_surat_masuk`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_disposisi_ibfk_3` FOREIGN KEY (`id_jenis_disposisi`) REFERENCES `tbl_jenis_disposisi` (`id_jenis_disposisi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_disposisi_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_disposisi_ibfk_5` FOREIGN KEY (`id_status`) REFERENCES `tbl_status` (`id_status`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_disposisi_ibfk_6` FOREIGN KEY (`id_jenis_surat`) REFERENCES `tbl_jenis_surat` (`id_jenis_surat`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_serah_terima_dokumen`
--
ALTER TABLE `tbl_serah_terima_dokumen`
  ADD CONSTRAINT `tbl_serah_terima_dokumen_ibfk_3` FOREIGN KEY (`id_surat_masuk`) REFERENCES `tbl_surat_masuk` (`id_surat_masuk`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id_role`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
