-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 22, 2022 lúc 08:44 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id_nameAtribute` int(11) NOT NULL auto_increment,
  `adminname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `sex` varchar(255) CHARACTER SET utf8 NOT NULL CHECK (`sex` = 'nữ' or `sex` = 'nam' or `sex` = 'khác'),
  `avt` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `datecreate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id_nameAtribute`, `adminname`, `email`, `pass`, `sex`, `avt`, `address`, `datecreate`) VALUES
(2, 'khoa', 'khoa@gmail.com', 'khoa', 'Nam', '', 'HCM', '2022-04-20 22:36:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `image`, `quantity`) VALUES
(28, 0, 'Bò Lá Lost', '15', 'bll.jpg', 8),
(29, 0, 'Bún Boà Yòur Hell', '11', 'bbgh.jpg', 3),
(30, 0, 'Hamburger', '4', 'hbg.jpg', 1),
(31, 0, 'Bánh Mì', '2', 'banhmi.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `checkout`
--

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE `checkout` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` int(100) NOT NULL,
  `total_products` int(100) NOT NULL,
  `total_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `checkout`
--

INSERT INTO `checkout` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(47, 'khang', 12312, 'khang@gmail.com', 'paypal', 'Quan 2 ba Trung', 'ABC', 'HCM', 'Tan Phu', 'India', 10000, 0, 16),
(48, 'Khoa', 2173183, 'khoa@gmail.com', 'paypal', 'Phu Tho Hoa', 'ABC', 'HCM', 'Tan Phu', 'VietNam', 10000, 0, 29),
(49, 'NAM', 2132132, 'khoa@gmail.com', 'cash on delivery', 'Phu Tho Hoa', 'ABC', 'HCM', 'Tan Phu', 'Colombia', 10000, 0, 20),
(50, 'Nu', 12321, 'priushitachi113@gmail.com', 'cash on delivery', 'Phu Tho Hoa', 'ABC', 'HCM', 'Tan Phu', 'India', 10000, 0, 20),
(51, 'Nu', 12321, 'priushitachi113@gmail.com', 'cash on delivery', 'Phu Tho Hoa', 'ABC', 'HCM', 'Tan Phu', 'India', 10000, 0, 20),
(52, 'Nu', 12321, 'priushitachi113@gmail.com', 'cash on delivery', 'Phu Tho Hoa', 'ABC', 'HCM', 'Tan Phu', 'India', 10000, 0, 20),
(53, 'Nu', 12321, 'priushitachi113@gmail.com', 'cash on delivery', 'Phu Tho Hoa', 'ABC', 'HCM', 'Tan Phu', 'India', 10000, 0, 20),
(54, 'Phu', 2131231, 'abc@gmail.com', 'credit cart', 'Phu Tho Hoa', '1231212', 'HCM', 'Tan Phu', 'VietNam', 10000, 0, 20),
(55, 'khang', 12312321, 'khoa@gmail.com', 'cash on delivery', 'Phu Tho Hoa', '213213213', 'HCM', 'Tan Phu', 'VietNam', 10000, 0, 159);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(8, 'Bún Boà Yòur Hell', '11', 'bbgh.jpg'),
(9, 'Hamburger', '4', 'hbg.jpg'),
(10, 'Bánh Mì', '2', 'banhmi.jpg'),
(11, 'Bánh Cèll', '3', 'bx.jpg'),
(12, 'Trà Sữa Full Topping', '10', 'ts.jpeg'),
(13, 'Trà Tắc', '6', 'tt.jpg'),
(14, 'Trà Chanh', '5', 'tc.jpg'),
(15, 'Bún Real Cua', '13', 'br.jpg'),
(16, 'Vịt Way Parking', '20', 'vqbk.jpg'),
(17, 'Bò Lá Lost', '15', 'bll.jpg'),
(18, 'Cơm Range', '5', 'cr.jpg'),
(19, 'Bánh Pound', '3', 'bb.jpg'),
(20, 'Mì Sòund thập cẩm', '3', 'mx.jpg'),
(21, 'Bún Down Mắm Tomb', '12', 'bd.jpg'),
(22, 'Chả Name', '4', 'cn.jpg'),
(23, 'Xiên Where', '20', 'xq.jpg'),
(24, 'Four Mai Where', '5', 'pmq.jpg'),
(25, 'Bò Luck Lag', '7', 'boluclac.jpg'),
(26, 'Trứng Could Lộn', '6', 'tcl.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_nameAtribute` int(11) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `avt` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_nameAtribute`, `username`, `email`, `pass`, `sex`, `avt`, `address`) VALUES
(1, 'khang', 'khang@yahoo.com.vn', 'khang', 'Nam', '', 'HCM');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_nameAtribute`),
  ADD UNIQUE KEY `adminname` (`adminname`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_nameAtribute`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id_nameAtribute` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_nameAtribute` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
