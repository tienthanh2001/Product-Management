-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 03:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webat`
--

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '123456', 2),
(2, 'Tien Thanh', '1004', 2),
(4, 'Phạm Tiến Thành', '12340987', 2),
(5, 'NguyenVanQuyet', '1234567', 2),
(6, 'toilathanh', '1234567890', 2),
(7, 'toilatuan', '1234567890', 2);

-- --------------------------------------------------------

--
-- Table structure for table `webbanat`
--

CREATE TABLE `webbanat` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `warranty` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `webbanat`
--

INSERT INTO `webbanat` (`id`, `name`, `image`, `price`, `warranty`) VALUES
(7, 'Anti-Phytop', 'at7.jpg', 120000, 'Chế phẩm sinh học trừ nấm bệnh trị thối rễ, xì mủ, chảy nhựa trên sầu riêng, mít, bưởi,...'),
(8, 'AT Bio-decomposer', 'at8.jpg', 111000, 'Xử lý nhanh rơm rạ tại ruộng trong 7 ngày, chống ngộ độc hữu cơ, tiết kiệm phân'),
(9, 'AT Padave', 'at9.jpg', 115000, 'Thuốc đặc trị tuyến trùng triệt để từ trứng và ấu trùng, không ảnh hưởng đến giun đất'),
(11, 'Nano Cu', 'at21.jpg', 122000, 'Nano đồng AT sát khuẩn, diệt nấm, tẩy sạch rong rêu, rửa vườn phục hồi nhanh sau thu hoạch'),
(12, '  Nano Bạc', 'at25.jpg', 190000, '  Nano Bạc diệt khuẩn sát khuẩn diệt nấm, rửa vườn, tẩy sạch rong rêu, kháng virus'),
(13, 'Padave', 'at19.jpg', 180000, 'Đặc trị tuyến trùng khôi phục bộ rễ cải tạo đất tơi xốp không ảnh hưởng đến giun đất'),
(14, 'AT Vô Gạo', 'at13.jpg', 140000, 'Phân bón hữu cơ AT chuyên dụng cho cây lúa Dinh dưỡng nuôi hạt, hạt chắc, vỏ dày, màu sáng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webbanat`
--
ALTER TABLE `webbanat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `webbanat`
--
ALTER TABLE `webbanat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
