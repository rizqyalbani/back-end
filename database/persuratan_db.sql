-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2020 pada 06.26
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
  `id_surat_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_disposisi`
--

INSERT INTO `tbl_disposisi` (`id_disposisi`, `tanggal`, `tanggal_penyelesaian`, `no_agenda`, `id_jenis_disposisi`, `instruksi`, `id_user`, `id_surat_masuk`) VALUES
(1, '2020-03-17', '2020-03-20', '1', 2, 'Perlombaan asanka', 2, 2),
(2, '2020-03-17', '2020-03-20', '2', 2, 'Perlombaan asanka', 2, 2),
(3, '2020-03-17', '2020-03-20', '0055', 3, 'Bersih Bersih sekolah', 3, 2);

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
(1, 'diterima'),
(2, 'belum diterima');

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
  `disposisi_surat_keluar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_surat_keluar`
--

INSERT INTO `tbl_surat_keluar` (`id_surat_keluar`, `lampiran_surat_keluar`, `alamat_tujuan`, `tanggal_surat_keluar`, `nomor_surat_keluar`, `perihal_surat_keluar`, `disposisi_surat_keluar`) VALUES
(1, 'Himbauan untuk tidak mengecek barang', 'Jl MANo', '2020-03-04', '15/MJS/ITB/XXI/2020', 'Pemberian barang istimewa', ''),
(2, 'Himbauan untuk tidak mengecek barang', 'Jl MAN', '2020-03-04', '15/MJS/ITB/XXI/2020', 'Pemberian barang istimewa', ''),
(3, '-', 'Jl. Waturenggong sebelah tokio barber', '0000-00-00', '15/MJS/ITB/XXI/2020', 'Undangan untuk bertemu', '');

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
  `disposisi_surat_masuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_surat_masuk`
--

INSERT INTO `tbl_surat_masuk` (`id_surat_masuk`, `lampiran_surat_masuk`, `alamat_pengirim`, `tanggal_surat_masuk`, `nomor_surat_masuk`, `perihal_surat_masuk`, `disposisi_surat_masuk`) VALUES
(1, ':LAMPIRAN_SURAT_MASUK', ':ALAMAT_PENGIRIM', '0000-00-00', ':NOMOR_SURAT_MASUK', ':PERIHAL_SURAT_MASUK', ':DISPOSISI_SURAT_MASUK'),
(2, 'Tata cara menghikuti Lomba', 'Jl. Yacaranda,Sekip Unit IV, Bulaksumur, Yogyakarta', '2020-03-19', '14/PU/MF/DTMSV-UGM/XII/2019', 'Undangan Lomba Mechanical Fair UGM 2020', ''),
(3, 'Tata cara menghikuti Lomba', 'Jl. Yacaranda,Sekip Unit IV, Bulaksumur, Yogyakarta', '2020-03-19', '14/PU/MF/DTMSV-UGM/XII/2019', 'Undangan Lomba Mechanical Fair UGM 2020', ''),
(4, 'Tata cara menghikuti Lomba', 'Jl. Yacaranda,Sekip Unit IV, Bulaksumur, Yogyakarta', '2020-03-19', '14/PU/MF/DTMSV-UGM/XII/2019', 'Undangan Lomba Mechanical Fair UGM 2020', ''),
(5, 'Hal hal yang harus dipersiapkan', 'Jl. Dago selatan', '2020-03-04', '15/MJS/ITB/XXI/2020', 'Undangan masuk universitas, siswa Rizqy Albani', ''),
(6, 'Petunjul Olimpiade', 'Jl. Gatot Subroto Timur', '2020-03-04', '15/MJS/ITB/XXI/2020', 'Undangan Olimpiade Komputer', ''),
(7, 'Petunjul Olimpiade', 'Jl. Gatot Subroto Timur', '2020-03-04', '15/MJS/ITB/XXI/2020', 'Undangan Olimpiade Komputer', ''),
(8, 'Petunjul Olimpiade', 'Jl. Gatot Subroto Timur', '2020-03-04', '15/MJS/ITB/XXI/2020', 'Undangan Olimpiade Komputer', ''),
(9, 'Waktu dan detail pengambilan', 'Jl. Padang Asri', '2020-03-04', '15/MJS/ITB/XXI/2020', 'Pengambilan Sparepart', ''),
(10, 'Tata cara menghikuti Lomba', 'Jl. Padang Asri', '2020-03-04', '14/PU/MF/DTMSV-UGM/XII/2019', 'Pengambilan Sparepart', '');

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
(2, 2, 23495453, 'Muhammad hasyim', 'user1'),
(3, 2, 812313321, 'Suryana Alip Geni', 'user2');

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
  ADD KEY `id_surat_masuk` (`id_surat_masuk`);

--
-- Indeks untuk tabel `tbl_jenis_disposisi`
--
ALTER TABLE `tbl_jenis_disposisi`
  ADD PRIMARY KEY (`id_jenis_disposisi`);

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
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_disposisi`
--
ALTER TABLE `tbl_jenis_disposisi`
  MODIFY `id_jenis_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id_role` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_surat_keluar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  MODIFY `id_surat_masuk` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  ADD CONSTRAINT `tbl_disposisi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_disposisi_ibfk_2` FOREIGN KEY (`id_surat_masuk`) REFERENCES `tbl_surat_masuk` (`id_surat_masuk`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_disposisi_ibfk_3` FOREIGN KEY (`id_jenis_disposisi`) REFERENCES `tbl_jenis_disposisi` (`id_jenis_disposisi`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_serah_terima_dokumen`
--
ALTER TABLE `tbl_serah_terima_dokumen`
  ADD CONSTRAINT `tbl_serah_terima_dokumen_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `tbl_status` (`id_status`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_serah_terima_dokumen_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_serah_terima_dokumen_ibfk_3` FOREIGN KEY (`id_surat_masuk`) REFERENCES `tbl_surat_masuk` (`id_surat_masuk`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id_role`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
