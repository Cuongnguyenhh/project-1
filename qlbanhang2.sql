-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2022 lúc 10:17 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

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
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cms_color`
--

INSERT INTO `cms_color` (`ID`, `color`) VALUES
(1, 'đen'),
(2, 'xám'),
(3, 'đỏ'),
(4, 'trắng');

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
  `sell_date` date NOT NULL,
  `price` double NOT NULL,
  `total_prd` int(11) NOT NULL,
  `prd_id` int(10) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_product`
--

CREATE TABLE `cms_product` (
  `ID` int(10) NOT NULL,
  `id_prd_group` int(10) NOT NULL,
  `id_pro_manufacture` int(10) NOT NULL,
  `prd_img` varchar(50) NOT NULL,
  `prd_status` int(11) NOT NULL DEFAULT 1,
  `create` date NOT NULL,
  `prd_sell_price` float NOT NULL,
  `prd_price` float NOT NULL,
  `prd_name` varchar(100) DEFAULT NULL,
  `quaility` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `id_color` int(10) NOT NULL,
  `id_sort` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cms_product`
--

INSERT INTO `cms_product` (`ID`, `id_prd_group`, `id_pro_manufacture`, `prd_img`, `prd_status`, `create`, `prd_sell_price`, `prd_price`, `prd_name`, `quaility`, `description`, `id_color`, `id_sort`) VALUES
(1, 0, 0, '', 1, '0000-00-00', 200000, 150000, 'TRIBU', 1200, '', 0, 0),
(2, 0, 0, '', 1, '0000-00-00', 300000, 250000, 'CRAZY', 3000, '', 0, 0),
(3, 0, 0, '', 1, '0000-00-00', 400000, 350000, 'VAHI', 3200, '', 0, 0),
(4, 0, 0, '', 1, '0000-00-00', 600000, 550000, 'XAVIER', 2500, '', 0, 0),
(5, 0, 0, '', 1, '0000-00-00', 340000, 300000, 'SOFA', 2400, '', 0, 0),
(6, 0, 0, '', 1, '0000-00-00', 450000, 400000, 'CHAIRS', 4600, '', 0, 0),
(7, 0, 0, '', 1, '0000-00-00', 120000, 100000, 'LAMPS', 1600, '', 0, 0),
(8, 0, 0, '', 1, '0000-00-00', 670000, 650000, 'BEDS', 0, '', 0, 0),
(9, 0, 0, '', 1, '0000-00-00', 770000, 700000, 'MIN', 2000, '', 0, 0),
(10, 0, 0, '', 1, '0000-00-00', 470000, 450000, 'HANO', 1900, '', 0, 0),
(11, 0, 0, '', 1, '0000-00-00', 690000, 650000, 'CHIN', 100, '', 0, 0),
(12, 0, 0, '', 1, '0000-00-00', 340000, 250000, 'POD', 230, '', 0, 0),
(13, 0, 0, '', 1, '0000-00-00', 430000, 350000, 'HOBU', 900, '', 0, 0),
(14, 0, 0, '', 1, '0000-00-00', 500000, 400000, 'JOHY', 600, '', 0, 0),
(15, 0, 0, '', 1, '0000-00-00', 140000, 100000, 'KATY', 700, '', 0, 0),
(16, 0, 0, '', 1, '0000-00-00', 780000, 700000, 'LEHI', 900, '', 0, 0);

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
(1, 'Kitchen Things', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Furniture', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Decor Art', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Illumination', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'New Products', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `display_name` varchar(120) NOT NULL,
  `user_status` tinyint(4) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cms_users`
--

INSERT INTO `cms_users` (`id`, `username`, `password`, `email`, `display_name`, `user_status`, `group_id`, `created`, `updated`) VALUES
(2, 'admin', 'acafabfb3b45089f905b5c8c0698f63c', 'admin@admin.com', 'admin', 1, 1, '2017-09-25 23:01:53', '2019-06-14 08:38:30'),
(8, '000000', 'b7ba4f82e63748b31419f9ea47d7b72f', 'namit@admin.com', 'namit', 0, 1, '2019-06-14 08:39:27', '0000-00-00 00:00:00'),
(9, '000001', '8277e745d10dd789d80c250e9e86b69d', 'quanly01@gmail.com', 'Lên Anh Tài', 1, 2, '2019-06-14 08:40:00', '2019-06-14 08:45:14'),
(10, '000002', '529553addffab250295d0595badcee11', 'quanly02@gmail.com', 'Lương Tài Em', 1, 2, '2019-06-14 08:40:12', '2019-06-14 08:45:36'),
(11, '000003', '5e4670efb7fe2ae0464f7b440a9d7923', 'quanly03@gmail.com', 'Phạm Quỳnh Ánh', 1, 2, '2019-06-14 08:40:23', '2019-06-14 08:45:47'),
(12, '000004', 'b6f311a380b5092207be17128491516d', 'quanly04@gmail.com', 'Lý Thành Nam', 1, 2, '2019-06-14 08:40:34', '2019-06-14 08:46:12'),
(13, '000005', '9c2ac0725fb24f301c21bebc7692f6c9', 'quanly05@gmail.com', 'Lê Thành Tâm', 1, 2, '2019-06-14 08:40:49', '2019-06-14 08:47:07'),
(14, '000006', '84fc146d13b9aed879b7967264363609', '000006@gmail.com', 'Nguyễn Văn An', 1, 3, '2019-06-14 08:41:41', '2019-06-14 08:47:32'),
(15, '000007', '02554771dc6ba1a0fa6704fd5476c45b', '000007@gmail.com', 'Nguyễn Văn Bình', 1, 3, '2019-06-14 08:42:02', '2019-06-14 08:47:36'),
(16, '000008', 'cb838e3226df20a3631e5dbd28e3d157', '000008@gmail.com', 'Lê Thị Yến', 1, 3, '2019-06-14 08:42:14', '2019-06-14 08:47:39'),
(17, '000009', '8cb3b0ebc60ced476e91f2ed073f0df1', '000009@gmail.com', 'Nguyễn Thị Linh', 1, 3, '2019-06-14 08:42:30', '2019-06-14 08:47:41'),
(18, '000010', '24d1ac241a699c9c1b47ce571e63a935', '000010@gmail.com', 'Lương Văn Tài', 1, 3, '2019-06-14 08:42:46', '2019-06-14 08:47:44'),
(19, '000011', 'bf1b32a0c3fe64a3e04c3661e925749d', '000011@gmail.com', 'Nguyễn Tuấn Anh', 1, 3, '2019-06-14 08:43:03', '2019-06-14 08:47:47'),
(20, '000012', 'e8a4f0c25ea6ded073459f7ca4c9ce36', '000012@gmail.com', 'Nguyễn Thị Lan Anh', 1, 3, '2019-06-14 08:43:17', '2019-06-14 08:47:49'),
(21, '000013', '4589b7fd990e5515ebe236ea8217d204', '000013@gmail.com', 'Nguyễn Thị Ánh', 1, 3, '2019-06-14 08:43:48', '2019-06-14 08:47:51'),
(22, '000014', '1fc7c3237037d104fb72998e535781b5', '000014@gmail.com', 'Phạm Thị Quỳnh', 1, 3, '2019-06-14 08:44:08', '2019-06-14 08:47:53'),
(23, '000015', '1a0239cec22d18eaca2a55d45e1b46d8', '000015@gmail.com', 'Phạm Thị Quỳnh Anh', 1, 3, '2019-06-14 08:44:25', '2019-06-14 08:47:56');

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
-- Chỉ mục cho bảng `cms_product`
--
ALTER TABLE `cms_product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_color` (`id_color`),
  ADD KEY `id_sort` (`id_sort`);

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
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cms_users_group`
--
ALTER TABLE `cms_users_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cms_color`
--
ALTER TABLE `cms_color`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `cms_customers`
--
ALTER TABLE `cms_customers`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `cms_order`
--
ALTER TABLE `cms_order`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cms_product`
--
ALTER TABLE `cms_product`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `cms_products_group`
--
ALTER TABLE `cms_products_group`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `cms_users_group`
--
ALTER TABLE `cms_users_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
