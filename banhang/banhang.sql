-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 04, 2019 lúc 09:44 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `phone` char(15) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `level` tinyint(4) DEFAULT '1',
  `avatar` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `email`, `password`, `phone`, `status`, `level`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'nguyễn quốc đạt', 'barcelona', 'kudatnguyen1997@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0354065353', 1, 1, NULL, NULL, '2019-04-03 09:36:59'),
(3, 'Đạt công tử', 'Đà Nẵng', 'congtu@gmail.com', 'bd2ff9f0c1e8cbee67b4f8fd676f5fd2', '0909976765', 1, 1, NULL, NULL, NULL),
(4, 'quốc đạt', 'dádf', 'dat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '780-0-90-', 1, 1, NULL, NULL, '2019-04-03 09:37:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `images` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `banner` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `home` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `images`, `banner`, `home`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Thời Trang Nam', 'thoi-trang-nam', NULL, NULL, 1, 1, '2019-03-19 07:01:59', '2019-04-03 15:11:11'),
(7, 'Giày lười', 'giay-luoi', NULL, NULL, 1, 1, '2019-03-22 07:51:26', '2019-04-04 06:05:10'),
(8, 'Áo Sơ mi', 'ao-so-mi', NULL, NULL, 1, 1, '2019-03-22 08:38:25', '2019-04-04 06:05:11'),
(9, 'Quần Tây', 'quan-tay', NULL, NULL, 0, 1, '2019-03-28 02:36:30', '2019-04-04 06:19:36'),
(10, 'Thời Trang Nữ', 'thoi-trang-nu', NULL, NULL, 0, 1, '2019-04-03 15:15:05', '2019-04-04 06:19:35'),
(11, 'Phụ kiện thời trang', 'phu-kien-thoi-trang', NULL, NULL, 0, 1, '2019-04-03 15:15:43', '2019-04-04 06:19:35'),
(12, 'Thể thao & du lịch', 'the-thao-du-lich', NULL, NULL, 0, 1, '2019-04-03 15:15:58', '2019-04-04 06:19:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` tinyint(4) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `transaction_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(7, 12, 2, 1, 990000, '2019-04-02 15:59:50', '2019-04-02 15:59:50'),
(8, 12, 7, 1, 495000, '2019-04-02 15:59:50', '2019-04-02 15:59:50'),
(9, 13, 2, 1, 990000, '2019-04-02 16:35:04', '2019-04-02 16:35:04'),
(10, 14, 3, 1, 700000, '2019-04-02 17:29:51', '2019-04-02 17:29:51'),
(11, 15, 4, 1, 198000, '2019-04-02 18:18:46', '2019-04-02 18:18:46'),
(12, 16, 2, 1, 990000, '2019-04-02 18:26:23', '2019-04-02 18:26:23'),
(13, 16, 4, 1, 198000, '2019-04-02 18:26:23', '2019-04-02 18:26:23'),
(14, 16, 3, 2, 700000, '2019-04-02 18:26:23', '2019-04-02 18:26:23'),
(15, 17, 4, 1, 198000, '2019-04-04 07:03:11', '2019-04-04 07:03:11'),
(16, 17, 1, 2, 494, '2019-04-04 07:03:11', '2019-04-04 07:03:11'),
(17, 17, 2, 1, 990000, '2019-04-04 07:03:11', '2019-04-04 07:03:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` tinyint(4) DEFAULT '1',
  `thunbar` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_vietnamese_ci,
  `number` int(11) NOT NULL DEFAULT '0',
  `head` int(11) DEFAULT '0',
  `view` int(11) DEFAULT '0',
  `hot` tinyint(4) DEFAULT '0',
  `pay` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `price`, `sale`, `thunbar`, `category_id`, `content`, `number`, `head`, `view`, `hot`, `pay`, `created_at`, `updated_at`) VALUES
(1, 'Áo sơ mi kẻ sọc', 'ao-so-mi-ke-soc', 499, 1, 'men3.jpg', 3, 'đẹp', 2, 0, 0, 0, 0, NULL, '2019-04-04 06:07:22'),
(2, 'forboss', 'forboss', 1000000, 1, 'shope-add2.jpg', 3, 'ok', -1, 0, 0, 0, 2, NULL, '2019-04-03 14:16:49'),
(3, 'Dành cho quý ông', 'danh-cho-quy-ong', 700000, 0, 'cart-image3.jpg', 7, 'beautyful', 3, 0, 0, 0, 2, NULL, '2019-04-03 14:18:06'),
(4, 'Giày đôi', 'giay-doi', 200000, 1, 'cart-image1.jpg', 7, 'xinh', 3, 0, 0, 0, 2, NULL, '2019-04-03 14:18:16'),
(5, 'giày valentine', 'giay-valentine', 250000, 1, 'cart-image2.jpg', 7, 'xinh xinh', 2, 0, 0, 0, 0, NULL, '2019-04-03 14:20:42'),
(6, 'giày trắng', 'giay-trang', 350000, 1, '4.jpg', 7, 'cute', 4, 0, 0, 0, 0, NULL, '2019-04-03 14:20:53'),
(8, 'Áo khoác', 'ao-khoac', 10000000, 10, 'men2.jpg', 3, 'Áo đẹp siêu bền ', 100, 0, 0, 0, 0, NULL, '2019-04-04 06:11:28'),
(10, 'Giày lười ', 'giay-luoi', 300000, 1, '9.jpg', 3, 'Phong cách đàn ông', 100, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `note` text CHARACTER SET utf8,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`id`, `amount`, `users_id`, `status`, `note`, `created_at`, `updated_at`) VALUES
(12, 1633500, 11, 1, 'Giao hàng đúng hẹn', '2019-04-02 15:59:50', '2019-04-02 18:24:33'),
(13, 1089000, 11, 0, 'Rất nhanh ', '2019-04-02 16:35:04', '2019-04-02 18:01:50'),
(14, 770000, 11, 1, 'OK', '2019-04-02 17:29:51', '2019-04-02 18:24:36'),
(15, 217800, 11, 1, 'Đẹp', '2019-04-02 18:18:46', '2019-04-02 18:26:29'),
(16, 2846800, 11, 1, 'Tuyệt ', '2019-04-02 18:26:23', '2019-04-02 18:26:28'),
(17, 1307887, 15, 0, '', '2019-04-04 07:03:11', '2019-04-04 07:03:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `phone` char(15) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `token` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `avatar`, `status`, `token`, `created_at`, `update_at`) VALUES
(10, 'Đạt công tử', 'congtuphonui@gmail.com', '0908675743', 'Quận Hải Châu, 151 Lê Duẩn, Đà Nẵng', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 1, NULL, NULL, NULL),
(11, 'Đạt cute', 'baby@gmail.com', '098807867', 'k151', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 1, NULL, NULL, NULL),
(12, 'Quốc Đạt', 'hai@gmail.com', '234567890', 'New York', '93279e3308bdbbeed946fc965017f67a', NULL, 1, NULL, NULL, NULL),
(13, 'dfaf', 'abc@gmail.com', '2456', 'k151', '4555f4235cacc864424fbda0ecf106d5', NULL, 1, NULL, NULL, NULL),
(14, 'Đạt cute', 'kudatnguyen1997@gmail.com', '345678', 'New York', '6c87d90ab6e0ef2f18780a30aa185580', NULL, 1, NULL, NULL, NULL),
(15, 'dat', 'acc@gmail.com', '1234234', 'VN', '93279e3308bdbbeed946fc965017f67a', NULL, 1, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
