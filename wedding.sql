-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Agu 2015 pada 18.55
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dekorasi`
--

CREATE TABLE IF NOT EXISTS `dekorasi` (
  `id` int(11) DEFAULT NULL,
`iddekorasi` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `cp` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgldipakai` date NOT NULL,
  `jamdipakai` time NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `dekorasi`
--

INSERT INTO `dekorasi` (`id`, `iddekorasi`, `harga`, `alamat`, `jenis`, `photo`, `cp`, `nama`, `tgldipakai`, `jamdipakai`, `deskripsi`) VALUES
(NULL, 4, 145000, 'Jalan Simalakama', 'Silver', 'Lighthouse.jpg', '0987', 'Dekorasi Jawa', '0000-00-00', '00:00:00', 'aaa'),
(NULL, 5, 11, 'aa', 'aa', 'Desert.jpg', '11', 'aa', '0000-00-00', '00:00:00', 'ff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE IF NOT EXISTS `gedung` (
`idgedung` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis` varchar(1200) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `cp` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `tgldipakai` date NOT NULL,
  `jamdipakai` time NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`idgedung`, `alamat`, `harga`, `jenis`, `kapasitas`, `photo`, `cp`, `nama`, `id`, `tgldipakai`, `jamdipakai`) VALUES
(7, 'Jalan Soetta 119', 200000000, 'Silver', 987, 'Desert.jpg', '09876543', 'Gedung Indah', NULL, '0000-00-00', '00:00:00'),
(8, 'a', 908908, 'Silver', 98, 'Koala.jpg', '0898080', 'coba', NULL, '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katerinng`
--

CREATE TABLE IF NOT EXISTS `katerinng` (
`idkatering` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `cp` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `tgldipakai` date NOT NULL,
  `jamdipakai` time NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `katerinng`
--

INSERT INTO `katerinng` (`idkatering`, `alamat`, `harga`, `photo`, `jenis`, `cp`, `nama`, `id`, `tgldipakai`, `jamdipakai`, `deskripsi`) VALUES
(3, 'Jalan Delanggu', 500000, '632d703d96e39fffb944bff9c391c522_t.jpg', 'Silver', '098765', 'Katering Rizky', NULL, '0000-00-00', '00:00:00', ''),
(4, 'aaa', 123123, 'Chrysanthemum.jpg', 'aa', '121', 'aa', NULL, '0000-00-00', '00:00:00', ''),
(5, 'aa', 11, 'Chrysanthemum.jpg', 'aa', '11', 'aa', NULL, '0000-00-00', '00:00:00', ''),
(9, 'a', 1, 'Koala.jpg', 'a', '1', 'a', NULL, '0000-00-00', '00:00:00', 'aa'),
(10, 'a', 11, 'Koala.jpg', 'a', '11', 'a', NULL, '0000-00-00', '00:00:00', 'aasdsa'),
(11, 'sss', 1111, 'Jellyfish.jpg', 'ss', '11111', 'sss', NULL, '0000-00-00', '00:00:00', '<ul><li>type 1</li><li><span style="font-weight: bold;">type 1</span></li></ul>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif`
--

CREATE TABLE IF NOT EXISTS `notif` (
`id` int(11) NOT NULL,
  `text` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `notif`
--

INSERT INTO `notif` (`id`, `text`, `status`, `id_user`) VALUES
(1, 'Pemesanan anda telah di approve', 'read', 2),
(2, 'Pemesanan anda telah di approve', 'read', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `nomor` int(11) NOT NULL,
`id` int(11) NOT NULL,
  `id_user` int(30) NOT NULL,
  `tgldipakai` date NOT NULL,
  `tglbayar_awal` date NOT NULL,
  `tglbayar_akhir` date NOT NULL,
  `jmlbayar_awal` int(100) NOT NULL,
  `jmlbayar_akhir` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nohp` int(15) NOT NULL,
  `idgedung` int(11) NOT NULL,
  `idkatering` int(11) NOT NULL,
  `idsalon` int(11) NOT NULL,
  `iddekorasi` int(11) NOT NULL,
  `idundangan` int(11) NOT NULL,
  `jamdipakai` time NOT NULL,
  `gedung` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`nomor`, `id`, `id_user`, `tgldipakai`, `tglbayar_awal`, `tglbayar_akhir`, `jmlbayar_awal`, `jmlbayar_akhir`, `total`, `alamat`, `email`, `nohp`, `idgedung`, `idkatering`, `idsalon`, `iddekorasi`, `idundangan`, `jamdipakai`, `gedung`, `status`) VALUES
(0, 8, 2, '2015-08-31', '0000-00-00', '0000-00-00', 100772883, 100772882, 201545765, '', '', 0, 7, 3, 3, 4, 22, '23:59:00', '', 'approve'),
(0, 10, 2, '2015-08-31', '0000-00-00', '0000-00-00', 100772506, 100772505, 201545011, '', '', 0, 7, 3, 3, 4, 23, '23:00:00', '', 'approve');

-- --------------------------------------------------------

--
-- Struktur dari tabel `salon`
--

CREATE TABLE IF NOT EXISTS `salon` (
`idsalon` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis` varchar(12) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `cp` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `tgldipakai` date NOT NULL,
  `jamdipakai` time NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `salon`
--

INSERT INTO `salon` (`idsalon`, `alamat`, `harga`, `jenis`, `photo`, `cp`, `nama`, `id`, `tgldipakai`, `jamdipakai`, `deskripsi`) VALUES
(3, 'Jalan BJS No 45 Blok B2', 900000, 'Gold', 'Lighthouse.jpg', '0876543', 'Salon Permana Indra', NULL, '0000-00-00', '00:00:00', 'aaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `undangan`
--

CREATE TABLE IF NOT EXISTS `undangan` (
`idundangan` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis` varchar(12) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `cp` varchar(11) NOT NULL,
  `tgldipakai` date NOT NULL,
  `jamdipakai` time NOT NULL,
  `id` int(11) DEFAULT NULL,
  `dskripsi` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `undangan`
--

INSERT INTO `undangan` (`idundangan`, `alamat`, `nama`, `harga`, `jenis`, `photo`, `cp`, `tgldipakai`, `jamdipakai`, `id`, `dskripsi`) VALUES
(22, 'Jalan BJS No 45 Blok B2', 'Undangan Cinco', 765, 'Gold', 'Tulips.jpg', '0987', '0000-00-00', '00:00:00', NULL, 'ddd'),
(23, 'a', 'a', 11, 'a', 'Hydrangeas.jpg', '11', '0000-00-00', '00:00:00', NULL, 'aaaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `user_tipe` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `user_tipe`, `username`, `password`, `nama`, `alamat`, `nohp`, `email`) VALUES
(1, 'admin', 'rosyid', 'rosyid', '', '', '0', ''),
(2, 'user', 'adit', 'adit', '', '', '0', ''),
(3, '0', '0', '0', '0', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dekorasi`
--
ALTER TABLE `dekorasi`
 ADD PRIMARY KEY (`iddekorasi`), ADD KEY `jamdipakai` (`id`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
 ADD PRIMARY KEY (`idgedung`), ADD KEY `fk_gedung` (`id`);

--
-- Indexes for table `katerinng`
--
ALTER TABLE `katerinng`
 ADD PRIMARY KEY (`idkatering`), ADD KEY `fk_katering` (`id`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_pemesanan_undangan` (`idundangan`), ADD KEY `fk_pemesanan_user` (`id_user`), ADD KEY `fk_pemesanan_salon` (`idsalon`), ADD KEY `fk_pemesanan_gedung` (`idgedung`), ADD KEY `fk_pemesanan_katering` (`idkatering`), ADD KEY `fk_pemesanan_dekor` (`iddekorasi`);

--
-- Indexes for table `salon`
--
ALTER TABLE `salon`
 ADD PRIMARY KEY (`idsalon`), ADD KEY `fk_salon` (`id`);

--
-- Indexes for table `undangan`
--
ALTER TABLE `undangan`
 ADD PRIMARY KEY (`idundangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dekorasi`
--
ALTER TABLE `dekorasi`
MODIFY `iddekorasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
MODIFY `idgedung` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `katerinng`
--
ALTER TABLE `katerinng`
MODIFY `idkatering` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `salon`
--
ALTER TABLE `salon`
MODIFY `idsalon` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `undangan`
--
ALTER TABLE `undangan`
MODIFY `idundangan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dekorasi`
--
ALTER TABLE `dekorasi`
ADD CONSTRAINT `fk_dekorasi` FOREIGN KEY (`id`) REFERENCES `pemesanan` (`id`);

--
-- Ketidakleluasaan untuk tabel `gedung`
--
ALTER TABLE `gedung`
ADD CONSTRAINT `fk_gedung` FOREIGN KEY (`id`) REFERENCES `pemesanan` (`id`);

--
-- Ketidakleluasaan untuk tabel `katerinng`
--
ALTER TABLE `katerinng`
ADD CONSTRAINT `fk_katering` FOREIGN KEY (`id`) REFERENCES `pemesanan` (`id`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
ADD CONSTRAINT `fk_pemesanan_dekor` FOREIGN KEY (`iddekorasi`) REFERENCES `dekorasi` (`iddekorasi`),
ADD CONSTRAINT `fk_pemesanan_gedung` FOREIGN KEY (`idgedung`) REFERENCES `gedung` (`idgedung`),
ADD CONSTRAINT `fk_pemesanan_katering` FOREIGN KEY (`idkatering`) REFERENCES `katerinng` (`idkatering`),
ADD CONSTRAINT `fk_pemesanan_salon` FOREIGN KEY (`idsalon`) REFERENCES `salon` (`idsalon`),
ADD CONSTRAINT `fk_pemesanan_undangan` FOREIGN KEY (`idundangan`) REFERENCES `undangan` (`idundangan`),
ADD CONSTRAINT `fk_pemesanan_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `salon`
--
ALTER TABLE `salon`
ADD CONSTRAINT `fk_salon` FOREIGN KEY (`id`) REFERENCES `pemesanan` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
