-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 09:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnsp_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gmap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `alamat`, `telepon`, `email`, `gmap`) VALUES
(1, 'Jl. Indigo Raya Jl. Pahlawan, RT.05/RW.12, Mulyaharja, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16132', '(0251) 8200300', 'astonhotel@gmail.com', 'https://maps.google.com/maps?q=ASTON Bogor Hotel & Resort, Jalan Indigo Raya Jalan Pahlawan, RT.05/RW.12, Mulyaharja, Kota Bogor, Jawa Barat&t=&z=10&ie=UTF8&iwloc=&output=embed');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `harga`) VALUES
(1, 'standar', 1000000),
(2, 'deluxe', 2000000),
(3, 'exclusive', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tipe_kamar` varchar(255) NOT NULL,
  `harga` int(100) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `durasi_menginap` int(11) NOT NULL,
  `breakfast` tinyint(1) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama_pemesan`, `jk`, `nik`, `tipe_kamar`, `harga`, `hari`, `tgl_pesan`, `durasi_menginap`, `breakfast`, `total_bayar`) VALUES
(11, 'damar', 'Laki-laki', '4444422222222222', 'exclusive', 3000000, '', '0000-00-00', 4, 1, 10880000),
(12, 'damar', 'Laki-laki', '1222222222222222', 'exclusive', 3000000, '', '0000-00-00', 30, 1, 81080000),
(13, 'damar', 'Laki-laki', '1333333333333333', 'exclusive', 3000000, '', '2023-03-26', 15, 1, 40580000),
(14, 'NALENDRA BAWANA AJI', 'Laki-laki', '2309005', 'exclusive', 3000000, '', '2023-03-29', 2, 1, 6080000),
(15, 'Muhmad damar', 'Laki-laki', '2309005323222222', 'exclusive', 3000000, '', '2023-03-27', 11, 1, 29780000),
(16, 'Damar Syabani', 'Laki-laki', '4332311111111111', 'exclusive', 3000000, 'Monday', '2023-03-27', 12, 1, 33360000),
(17, 'Muhmad damar', 'Laki-laki', '2111111111111111', 'standar', 1000000, 'Friday', '2023-03-31', 11, 1, 10780000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `yt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `tipe`, `image`, `harga`, `deskripsi`, `yt`) VALUES
(1, 'One Bedroom', '1bedroom.webp', 1000000, 'Enjoy a comfortable stay in our One Bedroom. These rooms are equipped with a comfortable bed and all the basic amenities you need during your stay, such as a television, private bathroom, and air conditioning. There is also a comfortable work desk and chair, making our standard rooms suitable for both business and leisure travelers who are looking for an affordable place to stay.', 'https://www.youtube.com/embed/6OQrEGWLGmc'),
(2, 'Deluxe Room', 'deluxe.webp', 2000000, 'Our deluxe rooms offer a more luxurious and elegant stay. Equipped with a larger and more comfortable bed, these rooms also come with modern amenities such as a flat-screen TV, air conditioning, and a work desk. The private bathroom is also equipped with a shower and complete toiletries to fulfill all your needs during your stay.', 'https://www.youtube.com/embed/Y9xe1NwKv5c'),
(3, 'Exclusive Room', 'deluxe2.webp', 3000000, 'Our exclusive rooms offer unparalleled luxury and comfort. These rooms are equipped with a comfortable king-size bed, spacious living area, and premium amenities such as a large flat-screen TV, coffee machine, and mini fridge. The private bathroom comes with a separate bathtub and shower, as well as luxurious toiletries to provide an unforgettable stay.', 'https://www.youtube.com/embed/dbp6Qcf38w8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
