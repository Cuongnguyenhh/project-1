-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2022 lúc 07:01 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbanhang2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_color`
--

CREATE TABLE `cms_color` (
  `ID` int(10) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_customers`
--

CREATE TABLE `cms_customers` (
  `ID` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_code` varchar(10) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_addr` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `customer_birthday` date NOT NULL,
  `customer_gender` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `user_upd` int(11) NOT NULL,
  `img_customer` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cms_customers`
--

INSERT INTO `cms_customers` (`ID`, `customer_name`, `customer_code`, `customer_phone`, `customer_email`, `customer_addr`, `notes`, `customer_birthday`, `customer_gender`, `created`, `updated`, `user_upd`, `img_customer`) VALUES
(34, 'Lê Thành Tâm', 'KH000001', '0987654321', 'KH000001@gmail.com', 'Thái Nguyên', 'Khách hàng lớn', '1990-01-18', 0, '2019-06-14 09:02:48', '0000-00-00 00:00:00', 0, ''),
(35, 'Lê Thái Thành', 'KH000002', '0123456789', 'KH000002@gmail.com', 'Thanh Hóa', '', '1989-01-11', 0, '2019-06-14 09:03:23', '0000-00-00 00:00:00', 0, ''),
(36, 'Nguyễn Thúy Quỳnh', 'KH000003', '0123456799', 'KH000003@gmail.com', 'Định Hóa', '', '1989-01-18', 0, '2019-06-14 09:04:09', '0000-00-00 00:00:00', 0, ''),
(38, 'Lê Thuận Khánh', 'KH000004', '01234567888', 'KH000004@gmail.com', 'Hoàng Văn Thụ, TP Thái Nguyên, Thái Nguyên', '', '1988-01-20', 0, '2019-06-14 09:38:56', '0000-00-00 00:00:00', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_inventory`
--

CREATE TABLE `cms_inventory` (
  `store_id` int(5) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_init` int(11) NOT NULL,
  `user_upd` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cms_inventory`
--

INSERT INTO `cms_inventory` (`store_id`, `product_id`, `quantity`, `user_init`, `user_upd`, `created`, `updated`) VALUES
(1, 81, 62, 16, 2, '2017-09-25 22:41:27', '2017-11-24 02:52:56'),
(1, 82, 22, 16, 2, '2017-09-25 22:42:15', '2017-11-24 07:03:02'),
(1, 83, 13, 16, 2, '2017-09-25 22:42:48', '2017-11-21 15:40:16'),
(1, 84, 9, 16, 2, '2017-09-25 22:43:22', '2017-11-21 03:36:07'),
(2, 81, -9, 16, 2, '2017-09-25 22:51:28', '2017-12-01 01:10:17'),
(2, 82, -96, 16, 2, '2017-09-25 22:51:28', '2017-10-31 23:47:14'),
(2, 83, 7, 16, 2, '2017-09-25 22:51:28', '2017-10-18 09:23:02'),
(2, 84, 4, 16, 0, '2017-09-25 22:51:28', '2017-10-04 18:54:07'),
(2, 85, 3000, 0, NULL, '2017-09-27 19:41:59', NULL),
(2, 86, 222, 0, NULL, '2017-09-27 19:54:36', NULL),
(2, 87, 121221312, 0, NULL, '2017-09-27 19:54:47', NULL),
(2, 88, 0, 0, 0, '2017-09-27 19:54:53', '2017-10-15 17:44:26'),
(2, 89, 0, 0, NULL, '2017-09-27 19:54:56', NULL),
(2, 90, 0, 0, NULL, '2017-09-27 19:54:59', NULL),
(2, 91, 0, 0, NULL, '2017-09-27 19:55:06', NULL),
(1, 92, 3, 0, NULL, '2017-10-03 01:08:07', NULL),
(1, 93, 995, 0, 2, '2017-10-03 01:08:24', '2017-11-24 02:52:56'),
(1, 94, 3, 0, NULL, '2017-10-03 01:08:50', NULL),
(1, 95, 2147483647, 0, NULL, '2017-10-03 01:09:00', NULL),
(1, 96, 777, 0, NULL, '2017-10-03 01:09:11', NULL),
(1, 97, 4, 0, 2, '2017-10-03 01:09:19', '2017-11-04 18:16:18'),
(1, 87, 0, 0, 0, '2017-10-13 22:04:05', '2017-10-14 02:02:16'),
(1, 89, -1, 0, NULL, '2017-10-13 22:34:06', NULL),
(1, 88, -1, 0, NULL, '2017-10-16 21:52:52', NULL),
(1, 85, -9, 0, 0, '2017-10-17 19:18:28', '2017-10-17 22:10:09'),
(1, 98, 32, 0, 0, '2017-10-17 21:54:43', '2017-10-18 03:11:33'),
(1, 99, 100, 2, NULL, '2017-10-19 10:04:49', NULL),
(6, 81, -2, 2, 2, '2017-10-20 14:07:14', '2017-11-05 18:08:39'),
(1, 100, 0, 2, NULL, '2017-10-23 17:22:06', NULL),
(1, 101, 0, 2, NULL, '2017-10-23 17:22:22', NULL),
(1, 102, 0, 2, 2, '2017-10-25 10:18:03', '2017-10-25 10:19:51'),
(6, 103, 10, 2, NULL, '2017-10-29 11:14:52', NULL),
(1, 103, -5, 2, NULL, '2017-10-29 13:23:15', NULL),
(2, 93, 205, 2, 2, '2017-10-31 10:27:40', '2017-12-01 01:10:17'),
(2, 104, 996, 2, 2, '2017-10-31 10:32:14', '2017-10-31 23:47:14'),
(1, 105, 5030, 2, 2, '2017-11-01 11:44:27', '2017-11-01 11:45:47'),
(1, 104, 20, 2, NULL, '2017-11-01 11:45:47', NULL),
(1, 106, 100, 2, NULL, '2017-11-04 09:51:06', NULL),
(6, 104, -1, 2, NULL, '2017-11-05 18:08:39', NULL),
(2, 107, 10, 2, NULL, '2017-11-28 06:16:39', NULL),
(2, 106, 1, 2, NULL, '2017-11-29 00:37:14', NULL),
(2, 108, -26, 2, 2, '2017-12-01 01:08:53', '2017-12-06 17:15:02'),
(2, 109, -18, 2, 2, '2017-12-01 01:09:17', '2017-12-01 06:46:41'),
(2, 110, 11, 2, 2, '2017-12-01 02:00:30', '2017-12-06 18:47:26'),
(1, 111, 0, 2, NULL, '2017-12-06 07:32:15', NULL),
(1, 108, 10, 2, NULL, '2017-12-06 07:33:51', NULL),
(2, 111, -2, 2, NULL, '2017-12-06 18:52:55', NULL),
(2, 112, 8, 2, 2, '2017-12-08 04:29:00', '2017-12-08 04:35:27'),
(1, 112, -3, 2, NULL, '2017-12-13 16:54:16', NULL),
(6, 112, -2, 2, 2, '2017-12-14 01:39:58', '2017-12-14 01:40:58'),
(6, 111, -4, 2, 2, '2017-12-14 01:39:58', '2017-12-14 01:40:58'),
(1, 113, 197, 2, 2, '2019-06-14 17:29:09', '2019-06-14 20:09:30'),
(1, 114, 1200, 2, 2, '2019-06-14 23:13:05', '2019-06-14 23:32:33'),
(1, 115, 349, 2, 2, '2019-06-14 23:15:00', '2019-06-14 23:24:59'),
(1, 116, 275, 2, 2, '2019-06-14 23:18:33', '2019-06-14 23:25:47'),
(1, 117, 53, 2, 2, '2019-06-14 23:20:07', '2019-06-14 23:26:20'),
(1, 118, 29, 2, 2, '2019-06-14 23:21:55', '2019-06-14 23:27:05'),
(1, 119, 1997, 2, 2, '2019-06-14 23:24:03', '2019-06-14 23:27:05'),
(1, 120, 2342, 2, NULL, '2022-11-05 01:45:34', NULL),
(1, 121, 2342, 2, NULL, '2022-11-05 01:45:37', NULL),
(1, 122, 2342, 2, NULL, '2022-11-05 01:45:40', NULL),
(1, 123, 2342, 2, NULL, '2022-11-05 01:45:43', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_order`
--

CREATE TABLE `cms_order` (
  `ID` int(10) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `name_cus` varchar(150) NOT NULL,
  `sell_date` date NOT NULL,
  `shipping` int(11) NOT NULL DEFAULT 0,
  `payment` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL,
  `phone_num` int(11) NOT NULL,
  `adr_cus` varchar(2000) NOT NULL,
  `totol_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cms_order`
--

INSERT INTO `cms_order` (`ID`, `customer_id`, `name_cus`, `sell_date`, `shipping`, `payment`, `status`, `phone_num`, `adr_cus`, `totol_price`) VALUES
(201460425, 25, 'Cuong nguyen', '0000-00-00', 0, 0, 1, 0, '985/62 lac long quan', 62000000),
(542497925, 25, 'Cuong nguyen', '0000-00-00', 0, 0, 1, 0, '985/62 lac long quan', 62000000),
(727994625, 25, 'Cuong nguyen', '0000-00-00', 0, 0, 1, 0, '985/62 lac long quan', 62000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_order_detail`
--

CREATE TABLE `cms_order_detail` (
  `ID` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `prd_name` varchar(1500) NOT NULL,
  `quailyti` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_product`
--

CREATE TABLE `cms_product` (
  `ID` int(10) NOT NULL,
  `id_prd_group` int(10) NOT NULL,
  `id_pro_manufacture` int(10) NOT NULL,
  `prd_img` varchar(150) DEFAULT NULL,
  `prd_status` int(11) NOT NULL DEFAULT 1,
  `create` date NOT NULL,
  `prd_sell_price` float NOT NULL,
  `prd_price` float NOT NULL,
  `prd_name` varchar(100) DEFAULT NULL,
  `quaility` int(11) NOT NULL,
  `prd_description` varchar(255) NOT NULL,
  `id_color` int(10) NOT NULL,
  `id_sort` int(10) NOT NULL,
  `id_cmt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cms_product`
--

INSERT INTO `cms_product` (`ID`, `id_prd_group`, `id_pro_manufacture`, `prd_img`, `prd_status`, `create`, `prd_sell_price`, `prd_price`, `prd_name`, `quaility`, `prd_description`, `id_color`, `id_sort`, `id_cmt`) VALUES
(38, 2, 0, 'moana.webp', 1, '0000-00-00', 9855000, 9000000, 'Sofa MOANA', 2, 'Đây chính là mô tả sản phẩm đấy ạ', 0, 0, 0),
(39, 2, 0, 'hiro.webp', 1, '0000-00-00', 12105000, 1100000, 'Sofa HIRO', 1800, '', 0, 0, 0),
(40, 2, 0, 'anna.webp', 1, '0000-00-00', 13365000, 12000000, 'Sofa ANNA', 2000, '', 0, 0, 0),
(41, 2, 0, 'lam.webp', 1, '0000-00-00', 1344000, 1000000, 'Tủ quần áo LAM', 1300, '', 0, 0, 0),
(42, 2, 0, 'ez.webp', 1, '0000-00-00', 2800000, 2000000, 'Tủ quần áo EZ', 1500, '', 0, 0, 0),
(43, 2, 0, 'johy.webp', 1, '0000-00-00', 12480000, 12000000, 'Tủ quần áo JOHY', 1700, '', 0, 0, 0),
(44, 2, 0, 'quada.webp', 1, '0000-00-00', 18870000, 17000000, 'Tủ quần áo QUADA', 1900, '', 0, 0, 0),
(46, 2, 0, 'Doer.webp', 1, '0000-00-00', 1317500, 1000000, 'Bàn DOER', 0, '', 0, 0, 0),
(47, 0, 0, 'victor.webp', 1, '0000-00-00', 1960000, 1500000, 'Bàn VICTOR', 2500, '', 0, 0, 0),
(48, 0, 0, 'fighter.webp', 1, '0000-00-00', 1960000, 1500000, 'Bàn FIGHTER', 2700, '', 0, 0, 0),
(49, 0, 0, 'builder.webp', 1, '0000-00-00', 2422500, 2000000, 'Bàn BUILDER', 0, '', 0, 0, 0),
(50, 2, 0, 'doer plus.webp', 1, '0000-00-00', 1720000, 1300000, 'Bàn DOER Plus', 2200, '', 0, 0, 0),
(51, 2, 0, 'latu.webp', 1, '0000-00-00', 962500, 900000, 'Ghế LATU', 2400, '', 0, 0, 0),
(52, 2, 0, 'to-be.webp', 1, '0000-00-00', 3612500, 3000000, 'Ghế TO-BE', 2800, '', 0, 0, 0),
(53, 0, 0, 'noven.webp', 1, '0000-00-00', 742500, 650000, 'Ghế NOVEN', 3000, '', 0, 0, 0),
(54, 0, 0, 'astu.webp', 1, '0000-00-00', 466650, 350000, 'Ghế ASTU', 3200, '', 0, 0, 0),
(55, 2, 0, 'shape.webp', 1, '0000-00-00', 841500, 750000, 'Ghế SHAPE', 0, '', 0, 0, 0),
(56, 0, 0, 'tu ez.webp', 1, '0000-00-00', 416500, 350000, 'Tủ EZ', 3800, '', 0, 0, 0),
(57, 1, 0, 'ke tapi.webp', 1, '0000-00-00', 864000, 700000, 'Kệ TAPI', 4000, '', 0, 0, 0),
(58, 1, 0, 'ke pamiti.webp', 1, '0000-00-00', 578000, 400000, 'Kệ PAMITI', 3300, '', 0, 0, 0),
(59, 1, 0, 'ke vita.webp', 1, '0000-00-00', 1032000, 900000, 'Kệ VITA', 3500, '', 0, 0, 0),
(60, 1, 0, 'ke hobu.webp', 1, '0000-00-00', 1351500, 1000000, 'Kệ HOBU', 3700, '', 0, 0, 0),
(61, 1, 0, 'guong duka.webp', 1, '0000-00-00', 1160000, 900000, 'Gương DUKA', 1200, '', 0, 0, 0),
(62, 1, 0, 'guong haso.webp', 1, '0000-00-00', 1317500, 1000000, 'Gương HASO', 4600, '', 0, 0, 0),
(63, 2, 0, 'moana.webp', 1, '2022-12-07', 9855000, 9000000, 'Sofa MOANA', 2, 'test 1234455 sss', 0, 0, 0),
(64, 2, 0, 'moana.webp', 1, '0000-00-00', 9855000, 9000000, 'Sofa MOANA', 2, 'kjshfiu hqhfui qfiuf wf', 0, 0, 0),
(65, 2, 0, 'moana.webp', 1, '0000-00-00', 9855000, 9000000, 'Sofa MOANA', 2, 'adasdsa dasdasdasd', 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_products_group`
--

CREATE TABLE `cms_products_group` (
  `ID` int(10) UNSIGNED NOT NULL,
  `prd_group_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cms_products_group`
--

INSERT INTO `cms_products_group` (`ID`, `prd_group_name`, `created`, `updated`) VALUES
(1, 'Trang Trí', '2022-11-18 13:24:51', '2022-11-18 13:24:51'),
(2, 'Nội Thất', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Nhà Bếp', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Ánh Sáng', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Giảm Giá', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_products_manufacture`
--

CREATE TABLE `cms_products_manufacture` (
  `ID` int(10) UNSIGNED NOT NULL,
  `prd_manuf_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `user_init` int(11) NOT NULL,
  `user_upd` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `cms_products_manufacture`
--

INSERT INTO `cms_products_manufacture` (`ID`, `prd_manuf_name`, `created`, `updated`, `user_init`, `user_upd`) VALUES
(12, 'Samsung', '2019-06-14 23:07:16', '0000-00-00 00:00:00', 2, 0),
(13, 'LV Mobile', '2019-06-14 23:07:23', '0000-00-00 00:00:00', 2, 0),
(14, 'Apple', '2019-06-14 23:07:28', '0000-00-00 00:00:00', 2, 0),
(15, 'OPPO', '2019-06-14 23:07:33', '0000-00-00 00:00:00', 2, 0),
(16, 'ASUS', '2019-06-14 23:07:38', '0000-00-00 00:00:00', 2, 0),
(17, 'MASSTEL', '2019-06-14 23:07:47', '0000-00-00 00:00:00', 2, 0),
(18, 'Kingta', '2019-06-14 23:07:51', '0000-00-00 00:00:00', 2, 0),
(19, 'Fujitsu', '2019-06-14 23:08:03', '0000-00-00 00:00:00', 2, 0),
(20, 'Sony', '2019-06-14 23:08:26', '0000-00-00 00:00:00', 2, 0),
(21, 'Xiaomi', '2019-06-14 23:08:32', '0000-00-00 00:00:00', 2, 0),
(22, 'Remax', '2019-06-14 23:08:37', '0000-00-00 00:00:00', 2, 0),
(23, 'UGREEN', '2019-06-14 23:08:44', '0000-00-00 00:00:00', 2, 0),
(24, 'PKCB', '2019-06-14 23:08:49', '0000-00-00 00:00:00', 2, 0),
(25, 'ANCOM GL', '2019-06-14 23:08:59', '0000-00-00 00:00:00', 2, 0),
(26, 'Everest', '2019-06-14 23:09:24', '0000-00-00 00:00:00', 2, 0),
(27, 'CIRINO', '2019-06-14 23:09:32', '0000-00-00 00:00:00', 2, 0),
(28, 'DODACO', '2019-06-14 23:09:38', '0000-00-00 00:00:00', 2, 0),
(29, 'Thivi', '2019-06-14 23:09:43', '0000-00-00 00:00:00', 2, 0),
(30, 'Zenko', '2019-06-14 23:09:47', '0000-00-00 00:00:00', 2, 0),
(31, 'Trần Doanh', '2019-06-14 23:09:53', '0000-00-00 00:00:00', 2, 0),
(32, 'T&D', '2019-06-14 23:09:59', '0000-00-00 00:00:00', 2, 0),
(33, 'BT Fashion', '2019-06-14 23:10:08', '0000-00-00 00:00:00', 2, 0),
(34, 'TNG', '2019-06-14 23:10:23', '2019-06-14 23:10:33', 2, 2),
(35, 'Adidass', '2019-06-14 23:10:44', '0000-00-00 00:00:00', 2, 0),
(36, 'Nike', '2019-06-14 23:10:48', '0000-00-00 00:00:00', 2, 0),
(37, 'Kingman', '2019-06-14 23:11:11', '0000-00-00 00:00:00', 2, 0),
(38, 'Biti\'s', '2019-06-14 23:14:51', '0000-00-00 00:00:00', 2, 0),
(39, 'Sunhouse', '2019-06-14 23:18:18', '0000-00-00 00:00:00', 2, 0),
(40, 'Dell', '2019-06-14 23:20:33', '0000-00-00 00:00:00', 2, 0),
(41, 'HP', '2019-06-14 23:20:36', '0000-00-00 00:00:00', 2, 0),
(42, 'Lenovo', '2019-06-14 23:20:39', '0000-00-00 00:00:00', 2, 0),
(43, 'Casio', '2019-06-14 23:22:24', '0000-00-00 00:00:00', 2, 0),
(44, 'Bewatch', '2019-06-14 23:22:34', '0000-00-00 00:00:00', 2, 0),
(45, 'Julius', '2019-06-14 23:22:39', '0000-00-00 00:00:00', 2, 0),
(46, 'Kezzi', '2019-06-14 23:22:45', '0000-00-00 00:00:00', 2, 0),
(47, 'Sunrise', '2019-06-14 23:22:51', '0000-00-00 00:00:00', 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_sort`
--

CREATE TABLE `cms_sort` (
  `ID` int(10) NOT NULL,
  `sortby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cms_sort`
--

INSERT INTO `cms_sort` (`ID`, `sortby`) VALUES
(1, 'Default sorting'),
(2, 'Best Selling'),
(3, 'Alphabetically, A-Z'),
(4, 'Alphabetically, Z-A'),
(5, 'Price, low to high'),
(6, 'Price, high to low'),
(7, 'Date, new to old'),
(8, 'Date, old to new');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_suppliers`
--

CREATE TABLE `cms_suppliers` (
  `ID` int(10) UNSIGNED NOT NULL,
  `supplier_code` varchar(10) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_phone` varchar(30) NOT NULL,
  `supplier_email` varchar(150) NOT NULL,
  `supplier_addr` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cms_suppliers`
--

INSERT INTO `cms_suppliers` (`ID`, `supplier_code`, `supplier_name`, `supplier_phone`, `supplier_email`, `supplier_addr`, `notes`, `created`, `updated`) VALUES
(21, 'NCC000001', 'ASUS', '0123456777', 'NCC000001@gmail.com', 'Hoàn Kiếm, Hà Nội', 'Nhà phân phối link kiện điện tử USUS', '2019-06-14 09:59:45', '0000-00-00 00:00:00'),
(22, 'NCC000002', 'Công Ty Siêu Thị Hà Nội', '02083656789', 'NCC000002@gmail.com', 'Phường Hoàng Văn Thụ, Thành phố Thái Nguyên, Thái Nguyên', '', '2019-06-14 10:01:56', '0000-00-00 00:00:00'),
(23, 'NCC000003', 'Công Ty TNHH Mỹ Kim', '02081234567', 'NCC000003@gmail.com', 'Hương Sơn, Thành phố Thái Nguyên, Thái Nguyên', '', '2019-06-14 10:02:59', '0000-00-00 00:00:00'),
(24, 'NCC000004', 'Công ty Cổ phần Cơ điện tử ASO', '02083645669', 'NCC000004@gmail.com', 'Thị xã Sông Công, Cải Đan, Sông Công, Thái Nguyên', '', '2019-06-14 10:04:05', '0000-00-00 00:00:00'),
(25, 'NCC000005', 'Điện Tử Thái Nguyên', '0987654333', 'NCC000005@gmail.com', 'Tân Thịnh, Thành phố Thái Nguyên, Thái Nguyên', '', '2019-06-14 10:04:54', '0000-00-00 00:00:00'),
(26, 'NCC000006', 'Công ty TNHH Young Jin Hi-tech Việt Nam', '0987654222', 'NCC000006@gmail.com', 'Điềm Thụy, Phú Bình, Thái Nguyên', '', '2019-06-14 10:05:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_users`
--

CREATE TABLE `cms_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(120) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `display_name` varchar(120) NOT NULL,
  `display_img` varchar(250) NOT NULL,
  `user_status` tinyint(4) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `adr_user` varchar(1500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cms_users`
--

INSERT INTO `cms_users` (`id`, `email`, `phone`, `password`, `display_name`, `display_img`, `user_status`, `group_id`, `created`, `updated`, `adr_user`) VALUES
(2, 'admin@admin.com', 0, 'acafabfb3b45089f905b5c8c0698f63c', 'admin', '', 1, 1, '2017-09-25 23:01:53', '2019-06-14 08:38:30', ''),
(8, 'namit@admin.com', 0, 'b7ba4f82e63748b31419f9ea47d7b72f', 'namit', '', 0, 1, '2019-06-14 08:39:27', '0000-00-00 00:00:00', ''),
(9, 'quanly01@gmail.com', 0, '8277e745d10dd789d80c250e9e86b69d', 'Lên Anh Tài', '', 1, 2, '2019-06-14 08:40:00', '2019-06-14 08:45:14', ''),
(10, 'quanly02@gmail.com', 0, '529553addffab250295d0595badcee11', 'Lương Tài Em', '', 1, 2, '2019-06-14 08:40:12', '2019-06-14 08:45:36', ''),
(11, 'quanly03@gmail.com', 0, '5e4670efb7fe2ae0464f7b440a9d7923', 'Phạm Quỳnh Ánh', '', 1, 2, '2019-06-14 08:40:23', '2019-06-14 08:45:47', ''),
(12, 'quanly04@gmail.com', 0, 'b6f311a380b5092207be17128491516d', 'Lý Thành Nam', '', 1, 2, '2019-06-14 08:40:34', '2019-06-14 08:46:12', ''),
(13, 'quanly05@gmail.com', 0, '9c2ac0725fb24f301c21bebc7692f6c9', 'Lê Thành Tâm', '', 1, 2, '2019-06-14 08:40:49', '2019-06-14 08:47:07', ''),
(14, '000006@gmail.com', 0, '84fc146d13b9aed879b7967264363609', 'Nguyễn Văn An', '', 1, 3, '2019-06-14 08:41:41', '2019-06-14 08:47:32', ''),
(15, '000007@gmail.com', 0, '02554771dc6ba1a0fa6704fd5476c45b', 'Nguyễn Văn Bình', '', 1, 3, '2019-06-14 08:42:02', '2019-06-14 08:47:36', ''),
(16, '000008@gmail.com', 0, 'cb838e3226df20a3631e5dbd28e3d157', 'Lê Thị Yến', '', 1, 3, '2019-06-14 08:42:14', '2019-06-14 08:47:39', ''),
(17, '000009@gmail.com', 0, '8cb3b0ebc60ced476e91f2ed073f0df1', 'Nguyễn Thị Linh', '', 1, 3, '2019-06-14 08:42:30', '2019-06-14 08:47:41', ''),
(18, '000010@gmail.com', 0, '24d1ac241a699c9c1b47ce571e63a935', 'Lương Văn Tài', '', 1, 3, '2019-06-14 08:42:46', '2019-06-14 08:47:44', ''),
(19, '000011@gmail.com', 0, 'bf1b32a0c3fe64a3e04c3661e925749d', 'Nguyễn Tuấn Anh', '', 1, 3, '2019-06-14 08:43:03', '2019-06-14 08:47:47', ''),
(20, '000012@gmail.com', 0, 'e8a4f0c25ea6ded073459f7ca4c9ce36', 'Nguyễn Thị Lan Anh', '', 1, 3, '2019-06-14 08:43:17', '2019-06-14 08:47:49', ''),
(21, '000013@gmail.com', 0, '4589b7fd990e5515ebe236ea8217d204', 'Nguyễn Thị Ánh', '', 1, 3, '2019-06-14 08:43:48', '2019-06-14 08:47:51', ''),
(22, '000014@gmail.com', 0, '1fc7c3237037d104fb72998e535781b5', 'Phạm Thị Quỳnh', '', 1, 3, '2019-06-14 08:44:08', '2019-06-14 08:47:53', ''),
(23, '000015@gmail.com', 0, '1a0239cec22d18eaca2a55d45e1b46d8', 'Phạm Thị Quỳnh Anh', '', 1, 3, '2019-06-14 08:44:25', '2019-06-14 08:47:56', ''),
(24, 'test@test.com', 0, '202cb962ac59075b964b07152d234b70', 'test', 'admin.jpg', 1, 1, '2022-12-04 12:16:56', '2022-12-04 12:16:56', ''),
(25, 'admin@gmail.com', 1900571535, '202cb962ac59075b964b07152d234b70', 'Cuong nguyen', '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '985/62 lac long quan'),
(26, 'phucuong2@gmail.com', 0, '202cb962ac59075b964b07152d234b70', 'Phu Cuong', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(27, '\"\"@asdas.com', 0, 'ec32620eb35230a3d620b3af5e523b0b', 'ád ád', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_users_group`
--

CREATE TABLE `cms_users_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `group_permission` varchar(255) NOT NULL,
  `group_registered` datetime NOT NULL,
  `group_updated` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cms_users_group`
--

INSERT INTO `cms_users_group` (`id`, `group_name`, `group_permission`, `group_registered`, `group_updated`) VALUES
(3, 'Nhân viên', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', '2017-09-08 19:20:45', '0000-00-00 00:00:00'),
(1, 'Admin', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', '2016-01-22 02:58:58', '2016-06-15 21:42:04'),
(2, 'Quản lý', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', '2016-01-22 03:00:40', '2016-06-15 21:42:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `commet` varchar(1500) DEFAULT NULL,
  `prd_id` int(11) NOT NULL,
  `create` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`ID`, `commet`, `prd_id`, `create`, `user_id`) VALUES
(17, 'Chán lắm thành ơiiiiiiiiii', 38, '0000-00-00', 24);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cms_color`
--
ALTER TABLE `cms_color`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `cms_customers`
--
ALTER TABLE `cms_customers`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `cms_inventory`
--
ALTER TABLE `cms_inventory`
  ADD PRIMARY KEY (`store_id`,`product_id`);

--
-- Chỉ mục cho bảng `cms_order`
--
ALTER TABLE `cms_order`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `cms_order_detail`
--
ALTER TABLE `cms_order_detail`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `cms_product`
--
ALTER TABLE `cms_product`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `cms_products_group`
--
ALTER TABLE `cms_products_group`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `cms_products_manufacture`
--
ALTER TABLE `cms_products_manufacture`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `cms_sort`
--
ALTER TABLE `cms_sort`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `cms_suppliers`
--
ALTER TABLE `cms_suppliers`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `cms_users`
--
ALTER TABLE `cms_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `cms_users_group`
--
ALTER TABLE `cms_users_group`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `tk_comment` (`prd_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cms_color`
--
ALTER TABLE `cms_color`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cms_customers`
--
ALTER TABLE `cms_customers`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `cms_order`
--
ALTER TABLE `cms_order`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=798511026;

--
-- AUTO_INCREMENT cho bảng `cms_order_detail`
--
ALTER TABLE `cms_order_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `cms_product`
--
ALTER TABLE `cms_product`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `cms_products_group`
--
ALTER TABLE `cms_products_group`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT cho bảng `cms_products_manufacture`
--
ALTER TABLE `cms_products_manufacture`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `cms_sort`
--
ALTER TABLE `cms_sort`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `cms_suppliers`
--
ALTER TABLE `cms_suppliers`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `cms_users`
--
ALTER TABLE `cms_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `cms_users_group`
--
ALTER TABLE `cms_users_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cms_order_detail`
--
ALTER TABLE `cms_order_detail`
  ADD CONSTRAINT `cms_order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `cms_order` (`ID`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `tk_comment` FOREIGN KEY (`prd_id`) REFERENCES `cms_product` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
