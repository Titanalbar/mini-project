-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 01:11 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokolaptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_nama` varchar(50) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `customer_alamat` text NOT NULL,
  `customer_total_belanja` int(11) NOT NULL,
  `bank` enum('BCA','BNI','BRI','Mandiri') NOT NULL,
  `jasa_pengiriman` enum('TIKI','JNE','GoJek','Grab','JT') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`customer_id`, `customer_nama`, `customer_email`, `customer_alamat`, `customer_total_belanja`, `bank`, `jasa_pengiriman`) VALUES
(2, 'Jun', 'jun@gmail.com', 'jl aja', 24000000, 'BCA', 'TIKI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(50) NOT NULL,
  `produk_type` enum('terbaik','bukan terbaik') NOT NULL,
  `produk_desc` text NOT NULL,
  `produk_merk` enum('Asus','Acer','HP','MacBook') NOT NULL,
  `produk_harga` varchar(15) NOT NULL,
  `produk_stok` int(4) NOT NULL,
  `produk_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`produk_id`, `produk_nama`, `produk_type`, `produk_desc`, `produk_merk`, `produk_harga`, `produk_stok`, `produk_gambar`) VALUES
(1, 'Acer Predator', 'terbaik', 'Lorem ipsum dolor sit amet.', 'Acer', '11000000', 3, 'acer-best.jpg'),
(2, 'Asus ROG', 'terbaik', 'Lorem ipsum dolor sit amet.', 'Asus', '13000000', 2, 'asus-best.jpg'),
(3, 'HP Omen', 'terbaik', 'Lorem ipsum dolor sit amet.', 'HP', '10000000', 5, 'hp-best.jpg'),
(4, 'MacBook Air', 'terbaik', 'Lorem ipsum dolor sit amet.', 'MacBook', '17000000', 2, 'macbook-best.jpg'),
(5, 'Asus 1', 'bukan terbaik', 'Lorem ipsum dolor sit amet.', 'Asus', '5500000', 12, 'asus1.jpg'),
(6, 'Asus 2', 'bukan terbaik', 'Lorem ipsum dolor sit amet.', 'Asus', '4500000', 19, 'asus2.jpg'),
(7, 'Acer 1', 'bukan terbaik', 'Lorem ipsum dolor sit amet.', 'Acer', '3900000', 12, 'acer1.jpg'),
(8, 'HP 1', 'bukan terbaik', 'Lorem ipsum dolor sit amet.', 'HP', '5200000', 9, 'hp1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
