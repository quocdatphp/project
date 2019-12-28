-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 28, 2019 lúc 09:23 AM
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
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
