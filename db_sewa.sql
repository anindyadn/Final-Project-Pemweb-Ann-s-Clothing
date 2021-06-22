-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 12:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password`) VALUES
(1, 'admin', 'admin_1@gmail.com', 'admin1234'),
(2, 'nindy', 'nindy_2@gmail.com', 'nindy1234'),
(3, 'fanni', 'fanni_3@gmail.com', 'fanni1234');

-- --------------------------------------------------------

--
-- Table structure for table `detail_sewa`
--

CREATE TABLE `detail_sewa` (
  `id_sewa` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `no_ktp` bigint(16) NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `no_telp` bigint(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `jumlah_sewa` int(11) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_sewa`
--

INSERT INTO `detail_sewa` (`id_sewa`, `kategori`, `nama_produk`, `nama_user`, `no_ktp`, `jenkel`, `no_telp`, `alamat`, `ukuran`, `jumlah_sewa`, `tgl_sewa`, `tgl_kembali`) VALUES
(7, 'Tradisional / Adat', 'Sadariah (DKI Jakarta)', 'Anindya', 1006902658231234, 'Perempuan', 81334659252, 'Jl. Pakis Gelora 2 no.18', 'S', 1, '2021-04-19', '2021-04-22'),
(8, 'Tradisional / Adat', 'Kebaya (Jawa Tengah)', 'Bella', 1234567891234567, 'Perempuan', 81259595825, 'jl. Balong 123', 'L', 1, '2021-04-19', '2021-04-22'),
(9, 'Tradisional / Adat', 'Bedahan (Jawa Barat)', 'Cici Maelani', 1006902658829835, 'Perempuan', 81347685927, 'jl. baleendah 123', 'M', 1, '2021-05-14', '2021-05-17'),
(10, 'Modern', 'Empire Waist Dress', 'Liese', 1002783558231255, 'Perempuan', 8123148185, 'Jl. Mawar Gg2 no 5', 'XS', 1, '2021-05-21', '2021-05-23'),
(11, 'Modern', 'Lace Dress', 'Lily', 1006283658239283, 'Perempuan', 8123625859, 'Jl. Melati Gg 1 no. 5', 'S', 1, '2021-06-11', '2021-06-14'),
(12, 'Modern', 'Cocktail Dress', 'Rin', 1007293558239258, 'Perempuan', 8128618829, 'Jl. Anggrek no 9', 'M', 1, '2021-01-01', '2021-01-03'),
(13, 'Tradisional / Adat', 'Kebaya (Jawa Tengah)', 'Via', 1005295637533874, 'Perempuan', 8129868459, 'Jl. Surabayan', 'L', 1, '2021-02-19', '2021-02-22'),
(14, 'Tradisional / Adat', 'Bodo (Sulawesi Selatan)', 'Reyna', 1007298358272899, 'Perempuan', 8129248568, 'Jl. Teratai gg 5 no.89', 'M', 1, '2021-04-08', '2021-04-10'),
(15, 'Tradisional / Adat', 'Kebaya Kesatrian (DI Yogyakarta)', 'Putra', 1004789658823872, 'Laki - Laki', 8128568779, 'Jl. Kesatrian 74', 'L', 1, '2021-04-20', '2021-04-23'),
(16, 'Modern', 'Kaftan Dres', 'Riri', 1008245658828248, 'Perempuan', 8124519256, 'Jl. Arifa 2c no 35', 'M', 1, '2021-03-19', '2021-03-22'),
(17, 'Modern', 'Wrap Dress', 'Anya', 1005682658237385, 'Perempuan', 8123418255, 'Jl. Irama 56', 'S', 1, '2021-03-26', '2021-03-29'),
(18, 'Tradisional / Adat', 'Kebaya (Jawa Tengah)', 'Nisa', 1004927458235782, 'Perempuan', 8122415728, 'Jl. Ngagel Jaya 18', 'L', 1, '2021-05-28', '2021-05-31'),
(19, 'Modern', 'Empire Waist Dress', 'Naomi', 1008245658239824, 'Perempuan', 8124179824, 'Jl. London 46', 'S', 1, '2021-07-10', '2021-07-12'),
(20, 'Tradisional / Adat', 'Pesa’an (Jawa Timur)', 'Keil', 1004253558238743, 'Laki - Laki', 8112317293, 'Jl. Kodam 77', 'L', 1, '2021-08-15', '2021-08-18'),
(21, 'Tradisional / Adat', 'Sadariah (DKI Jakarta)', 'Rara', 1006542558238635, 'Perempuan', 8125288239, 'Jl. Istimewa 52', 'M', 1, '2021-08-15', '2021-08-18'),
(22, 'Tradisional / Adat', 'Payas Agung (Bali)', 'Tya', 1008235558236396, 'Perempuan', 8126658628, 'Jl. Bali 123', 'S', 1, '2021-09-12', '2021-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'tradisional / adat'),
(2, 'modern dress');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `id_kategori` int(20) NOT NULL,
  `harga_sewa` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `id_kategori`, `harga_sewa`) VALUES
(1, 'Ulee Balang (Aceh)', 1, 200000),
(2, 'Ulos (Sumatra Utara)', 1, 150000),
(3, 'Bundo Kanduang (Sumatra Barat)', 1, 150000),
(4, 'Teluk Belanga / Kebaya Labuh (Riau)', 1, 100000),
(5, 'Baju Kurung Tanggung (Jambi)', 1, 200000),
(6, 'Rejang Lenong (Bengkulu)', 1, 200000),
(7, 'Aesan Gede (Sumatera Selatan)', 1, 200000),
(8, 'Paksian (Bangka Belitung)', 1, 150000),
(9, 'Tulang Bawang (Lampung)', 1, 200000),
(10, 'Pangsi (Banten)', 1, 150000),
(11, 'Bedahan (Jawa Barat)', 1, 100000),
(12, 'Sadariah (DKI Jakarta)', 1, 100000),
(13, 'Kebaya (Jawa Tengah)', 1, 150000),
(14, 'Kebaya Kesatrian (DI Yogyakarta)', 1, 200000),
(15, 'Pesa’an (Jawa Timur)', 1, 100000),
(16, 'Payas Agung (Bali)', 1, 150000),
(17, 'Lamung (Nusa Tenggara Barat)', 1, 150000),
(18, 'Rote (Nusa Tenggara Timur)', 1, 150000),
(19, 'King Tompang (Kalimantan Barat)', 1, 150000),
(20, 'Sangkarut (Kalimantan tengah)', 1, 150000),
(21, 'Kustin (Kalimantan Timur)', 1, 150000),
(22, 'Ta’a / Sapei Sapaq (Kalimantan Utara)', 1, 150000),
(23, 'Babaju Kun Galung Pacinan (Kalimantan Selatan)', 1, 200000),
(24, 'Pattuqduq Towaine (Sulawesi Barat)', 1, 100000),
(25, 'Laku Tepu (Sulawesi Utara)', 1, 150000),
(26, 'Nggembe (Sulawesi Tengah)', 1, 100000),
(27, 'Bodo (Sulawesi Selatan)', 1, 100000),
(28, 'Babu Nggawi (Sulawesi Tenggara)', 1, 150000),
(29, 'Biliu / Makuta (Gorontalo)', 1, 200000),
(30, 'Cele (Maluku)', 1, 150000),
(31, 'Manteren Lamo / Kimun Gia (Maluku Utara)', 1, 100000),
(32, 'Ewer (Papua)', 1, 150000),
(33, 'Mermaid Dress', 2, 1200000),
(34, 'Ball Gown Dress', 2, 1500000),
(35, 'Blouson Dress', 2, 150000),
(36, 'Boho Dress', 2, 200000),
(37, 'Cocktail Dress', 2, 200000),
(38, 'Empire Waist Dress', 2, 150000),
(39, 'Kaftan Dress', 2, 150000),
(40, 'Lace Dress', 2, 350000),
(41, 'Kimono Batik Dress', 2, 400000),
(42, 'Wrap Dress', 2, 500000),
(43, 'Pink Ball Gown Dress', 2, 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `password`) VALUES
(1, 'user', 'user_1@gmail.com', 'user1234'),
(2, 'fanni', 'fanni_2@gmail.com', 'fanni1234'),
(3, 'Berliana', 'bella_3@gmail.com', 'bella1234'),
(5, 'Cici', 'cicimel.fle@gmail.com', 'cici1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_sewa`
--
ALTER TABLE `detail_sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_sewa`
--
ALTER TABLE `detail_sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
