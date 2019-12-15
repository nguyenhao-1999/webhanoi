-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2019 lúc 09:36 AM
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
-- Cơ sở dữ liệu: `webanthinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_option`
--

CREATE TABLE `db_option` (
  `option_id` int(11) NOT NULL,
  `option_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `option_value` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `option_updatedat` datetime NOT NULL,
  `option_updatedby` int(11) NOT NULL DEFAULT 1,
  `option_createdat` datetime NOT NULL,
  `option_createdby` int(11) NOT NULL DEFAULT 1,
  `option_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_option`
--

INSERT INTO `db_option` (`option_id`, `option_name`, `option_value`, `option_updatedat`, `option_updatedby`, `option_createdat`, `option_createdby`, `option_status`) VALUES
(1, 'phone', '0913 14 1368', '2019-12-14 00:00:00', 1, '2019-12-14 00:00:00', 1, 1),
(3, 'address', '358 Hoàng Văn Thụ, P.4, Q Tân Bình', '2019-12-14 00:00:00', 1, '2019-12-14 00:00:00', 1, 1),
(5, 'showroom', '(Giới thiệu về showroom)', '2019-12-14 00:00:00', 1, '2019-12-14 00:00:00', 1, 1),
(7, 'email', 'phuong97nhp@gmail.com', '2019-12-15 00:00:00', 1, '2019-12-15 00:00:00', 1, 1),
(8, 'notification', '4', '2019-12-15 09:14:48', 1, '2019-12-15 09:14:48', 1, 1),
(9, 'notification_of', 'Bạn có nhận được email: mailedr1sse@gmail.com', '2019-12-15 02:54:34', 1, '2019-12-15 02:54:34', 1, 1),
(10, 'notification_of', 'Bạn có nhận được email: mailedr1sse@gmail.com', '2019-12-15 02:55:22', 1, '2019-12-15 02:55:22', 1, 1),
(11, 'notification_of', 'Bạn có nhận được email: mailedr1sse@gmail.com', '2019-12-15 02:56:32', 1, '2019-12-15 02:56:32', 1, 1),
(12, 'notification_of', 'Bạn có nhận được email: mailedr1sse@gmail.com', '2019-12-15 02:56:41', 1, '2019-12-15 02:56:41', 1, 1),
(13, 'notification_of', 'Bạn có nhận được email: mailedr1sse@gmail.com', '2019-12-15 02:57:04', 1, '2019-12-15 02:57:04', 1, 1),
(14, 'notification_of', 'Bạn có nhận được email: mailedr1sse@gmail.com', '2019-12-15 02:57:13', 1, '2019-12-15 02:57:13', 1, 1),
(15, 'notification_of', 'Bạn có nhận được email: mailedr1sse@gmail.com', '2019-12-15 02:57:19', 1, '2019-12-15 02:57:19', 1, 1),
(16, 'notification_of', 'Bạn có nhận được email: mailedr1ssegggg@gmail.com', '2019-12-15 02:59:00', 1, '2019-12-15 02:59:00', 1, 1),
(17, 'notification_of', 'Bạn có nhận được email: dsfsdfsd@gmail.com', '2019-12-15 03:28:17', 1, '2019-12-15 03:28:17', 1, 1),
(18, 'notification_of', 'Bạn có nhận được email: asdadad@sfsdfdsf.com', '2019-12-15 04:12:50', 1, '2019-12-15 04:12:50', 1, 1),
(19, 'notification_of', 'Bạn có nhận được email: d@f.com', '2019-12-15 04:40:40', 1, '2019-12-15 04:40:40', 1, 1),
(20, 'notification_of', 'Bạn có nhận được email: ds@f.com', '2019-12-15 04:41:09', 1, '2019-12-15 04:41:09', 1, 1),
(21, 'notification_of', 'Bạn có nhận được email: helllo@gmail.com', '2019-12-15 09:14:48', 1, '2019-12-15 09:14:48', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_option`
--
ALTER TABLE `db_option`
  ADD PRIMARY KEY (`option_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_option`
--
ALTER TABLE `db_option`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
