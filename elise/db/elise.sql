-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 01, 2020 lúc 04:14 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `elise`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `adminEmail` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `adminUser` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `adminPass` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminID`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(2, 'Dat ciute', 'dat@gmail.com', 'quocdat', '827ccb0eea8a706c4c34a16891f84e7b', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandID` int(11) NOT NULL,
  `brandName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandID`, `brandName`) VALUES
(1, 'Gucci'),
(2, 'Chanel'),
(3, 'dior'),
(4, 'VERSACE');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `sID` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `productName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartID`, `productID`, `sID`, `productName`, `price`, `quantity`, `image`) VALUES
(10, 10, 'bv5fkb44ph0og0d306942i3f26', 'AK káº» sá»oc', '999000', 1, '482443f7cb.jpg'),
(14, 13, '8o7hcu1h4q9jii7rv9etfieled', 'ak dáº¡ nÃ¢u', '2789000', 1, 'a9b904620a.jpg'),
(15, 12, '8o7hcu1h4q9jii7rv9etfieled', 'VÃ¡y Ä‘i liá»n', '599000', 1, 'e3db81348d.jpg'),
(16, 12, 'a86jorrb66tuiasueerbsoq6m7', 'VÃ¡y Ä‘i liá»n', '599000', 1, 'e3db81348d.jpg'),
(17, 12, 'a86jorrb66tuiasueerbsoq6m7', 'VÃ¡y Ä‘i liá»n', '599000', 1, 'e3db81348d.jpg'),
(18, 13, 'a86jorrb66tuiasueerbsoq6m7', 'ak dáº¡ nÃ¢u', '2789000', 1, 'a9b904620a.jpg'),
(19, 13, 'a86jorrb66tuiasueerbsoq6m7', 'ak dáº¡ nÃ¢u', '2789000', 1, 'a9b904620a.jpg'),
(20, 2, 'uesganerahjr15c4q8c2mep3ll', 'Äáº§m in Ä‘Ã­nh Ä‘Ã¡', '999000', 1, '06a628a3f6.jpg'),
(21, 2, 'uesganerahjr15c4q8c2mep3ll', 'Äáº§m in Ä‘Ã­nh Ä‘Ã¡', '999000', 1, '06a628a3f6.jpg'),
(22, 13, 'uesganerahjr15c4q8c2mep3ll', 'ak dáº¡ nÃ¢u', '2789000', 1, 'a9b904620a.jpg'),
(23, 13, 'uesganerahjr15c4q8c2mep3ll', 'ak dáº¡ nÃ¢u', '2789000', 1, 'a9b904620a.jpg'),
(24, 12, 'rqf7r8k7d6p1egt0q7petl9h9h', 'VÃ¡y Ä‘i liá»n', '599000', 1, 'e3db81348d.jpg'),
(25, 12, 'b813g5d3623kcjhie782tb6urq', 'VÃ¡y Ä‘i liá»n', '599000', 1, 'e3db81348d.jpg'),
(26, 12, 'b813g5d3623kcjhie782tb6urq', 'VÃ¡y Ä‘i liá»n', '599000', 1, 'e3db81348d.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catID` int(11) NOT NULL,
  `catName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`catID`, `catName`) VALUES
(1, 'Elise woman'),
(2, 'Elise Bags'),
(3, 'Elise shoes'),
(4, 'Elise cosmetis');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productID` int(11) NOT NULL,
  `productName` tinytext COLLATE utf8_vietnamese_ci NOT NULL,
  `catID` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `product_desc` text COLLATE utf8_vietnamese_ci NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productID`, `productName`, `catID`, `brandID`, `product_desc`, `type`, `price`, `image`) VALUES
(2, 'Äáº§m in Ä‘Ã­nh Ä‘Ã¡', 1, 2, '<p>Xinh láº¯m</p>\r\nThiết kế', 0, '999000', '06a628a3f6.jpg'),
(3, 'Äáº§m len Ä‘á»', 1, 1, '<p>Kiá»ƒu d&aacute;ng sáº¯c xáº£o&nbsp;</p>\r\n', 1, '7000899', '68a930be4b.jpg'),
(4, 'ak dáº¡ káº» tÃ­m', 2, 2, '<p>váº» Ä‘áº¹p qu&yacute; ph&aacute;i</p>\r\n', 1, '2999.000', '5d65844f9c.jpg'),
(12, 'VÃ¡y Ä‘i liá»n', 3, 2, '<p>Kiá»ƒu d&aacute;ng há»£p thá»i trang</p>\r\n', 0, '599000', 'e3db81348d.jpg'),
(13, 'ak dáº¡ nÃ¢u', 1, 4, '<p>tinh xáº£o Ä‘áº¹p máº¯t</p>\r\n', 0, '2789000', 'a9b904620a.jpg'),
(15, 'Äáº§m vÃ ng ly tay', 1, 4, '<p>chuáº©n thiáº¿t káº¿ thá»i trang</p>\r\n', 0, '449000', '8d6b21abc4.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandID`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catID`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
