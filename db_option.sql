-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 17, 2019 lúc 10:03 PM
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
  `option_value` text COLLATE utf8_unicode_ci NOT NULL,
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
(8, 'notification', '4', '2019-12-16 04:43:18', 1, '2019-12-16 04:43:18', 1, 1),
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
(21, 'notification_of', 'Bạn có nhận được email: helllo@gmail.com', '2019-12-15 09:14:48', 1, '2019-12-15 09:14:48', 1, 1),
(22, 'notification_of', 'Bạn có nhận được email: helldsfsfsflo@gmaisfl.com', '2019-12-15 09:44:22', 1, '2019-12-15 09:44:22', 1, 1),
(23, 'notification_of', 'Bạn có nhận được email: adada@dfsdf.com', '2019-12-15 15:27:02', 1, '2019-12-15 15:27:02', 1, 1),
(24, 'notification_of', 'Bạn có nhận được email: adgad@mail.com', '2019-12-15 15:29:23', 1, '2019-12-15 15:29:23', 1, 1),
(25, 'notification_of', 'Bạn có nhận được email: asfasdadada@c.com', '2019-12-15 16:16:55', 1, '2019-12-15 16:16:55', 1, 1),
(26, 'notification_of', 'Bạn có nhận được email: asfasdadada@c.coms', '2019-12-15 16:17:17', 1, '2019-12-15 16:17:17', 1, 1),
(27, 'notification_of', 'Bạn có nhận được email: dfdsfdsf@gmai.com', '2019-12-15 16:33:19', 1, '2019-12-15 16:33:19', 1, 1),
(28, 'notification_of', 'Bạn có nhận được email: dfdsfcdsf@gmai.com', '2019-12-15 16:33:29', 1, '2019-12-15 16:33:29', 1, 1),
(29, 'notification_of', 'Bạn có nhận được email: nguyen@f.com', '2019-12-15 19:29:15', 1, '2019-12-15 19:29:15', 1, 1),
(30, 'notification_of', 'Bạn có nhận được email: nguyen@f.coms', '2019-12-15 19:29:34', 1, '2019-12-15 19:29:34', 1, 1),
(31, 'notification_of', 'Bạn có nhận được email: o@f.c', '2019-12-15 20:12:32', 1, '2019-12-15 20:12:32', 1, 1),
(32, 'notification_of', 'Bạn có nhận được email: helooo@g.com', '2019-12-15 20:20:46', 1, '2019-12-15 20:20:46', 1, 1),
(33, 'notification_of', 'Bạn có nhận được email: hhhhhhhhhh@h.com', '2019-12-15 20:32:02', 1, '2019-12-15 20:32:02', 1, 1),
(34, 'home', 'http://localhost:81/webhanoi/', '2019-12-15 16:33:29', 1, '2019-12-15 16:33:29', 1, 1),
(35, 'logo', 'logo.png', '2019-12-15 16:33:29', 1, '2019-12-15 16:33:29', 1, 1),
(36, 'notification_of', 'Bạn có nhận được email: sddddddd2424242@fdd.com', '2019-12-16 04:43:18', 1, '2019-12-16 04:43:18', 1, 1),
(37, 'header_get_post', '[1,9,10,8]', '2019-12-15 16:33:29', 1, '2019-12-15 16:33:29', 1, 1),
(38, 'title', 'BẾP AN THỊNH - THIẾT BỊ BẾP NHẬP KHẨU', '2019-12-15 16:33:29', 1, '2019-12-15 16:33:29', 1, 1),
(39, 'home_url', 'http://localhost:81/webhanoi/', '2019-12-15 16:33:29', 1, '2019-12-15 16:33:29', 1, 1),
(41, 'copyrighter', 'Công ty TNHH Thương Mại & XNK An Thịnh Phát Số ĐKKD: 0106515217 – Cấp bởi Sở Kế Hoạch Đầu Tư Thành phố Hà Nội', '2019-12-15 02:59:00', 1, '2019-12-15 02:59:00', 1, 1),
(42, 'home_product', '[1,9,10,8]', '2019-12-15 16:33:29', 1, '2019-12-15 16:33:29', 1, 1),
(43, 'zalo', '#', '2019-12-15 03:28:17', 1, '2019-12-15 03:28:17', 1, 1),
(44, 'facebook', '#', '2019-12-15 03:28:17', 1, '2019-12-15 03:28:17', 1, 1),
(45, 'youtube', '#', '2019-12-15 03:28:17', 1, '2019-12-15 03:28:17', 1, 1),
(46, 'messenger', '#', '2019-12-15 03:28:17', 1, '2019-12-15 03:28:17', 1, 1),
(47, 'gmail', '#', '2019-12-15 03:28:17', 1, '2019-12-15 03:28:17', 1, 1),
(48, 'cuongthuong', '#', '2019-12-15 03:28:17', 1, '2019-12-15 03:28:17', 1, 1),
(49, 'customer_reviews', 'Với phương châm làm nghề bằng tất cả “Cái tâm” và “Sự tử tế” - Bếp An Thịnh cam kết đem tới cho Quý khách sản phẩm chất lượng tốt nhất với giá cạnh tranh nhất cùng dịch vụ hậu mãi hoàn hảo. Sự hài lòng của khách hàng là tiêu chí phát triển hàng đầu của chúng tôi!', '2019-12-15 15:27:02', 1, '2019-12-15 15:27:02', 1, 1),
(50, 'customer_reviews_author', 'Nguyễn Thùy Dung - CEO Bếp Quang Vinh', '2019-12-15 15:27:02', 1, '2019-12-15 15:27:02', 1, 1),
(51, 'servics', '[{\"title\":\"100% CHÍNH HÃNG\",\"content\":\"An Thịnh là đối tác số 1 của hàng trăm thương hiệu thiết bị nhà bếp hàng đầu thế giới như Bosch,Teka, Fagor, Cata, Munchen, Bauknecht... Cam kết đền 1 tỷ đồng nếu phát hiện hàng giả, hàng nhái.\"},{\"title\":\"100% CHÍNH HÃNG\",\"content\":\"An Thịnh là đối tác số 1 của hàng trăm thương hiệu thiết bị nhà bếp hàng đầu thế giới như Bosch,Teka, Fagor, Cata, Munchen, Bauknecht... Cam kết đền 1 tỷ đồng nếu phát hiện hàng giả, hàng nhái.\"},{\"title\":\"100% CHÍNH HÃNG\",\"content\":\"An Thịnh là đối tác số 1 của hàng trăm thương hiệu thiết bị nhà bếp hàng đầu thế giới như Bosch,Teka, Fagor, Cata, Munchen, Bauknecht... Cam kết đền 1 tỷ đồng nếu phát hiện hàng giả, hàng nhái.\"}]', '2019-12-15 15:27:02', 1, '2019-12-15 15:27:02', 1, 1),
(52, 'bannerTuvan', 'public/upload/images/bannerTuvan/ads1_03.png', '2019-12-15 16:17:17', 1, '2019-12-15 16:17:17', 1, 1),
(53, 'city', 'Thành phố hồ chí minh', '2019-12-15 03:28:17', 1, '2019-12-15 03:28:17', 1, 1),
(54, 'partner', '[10,8]', '2019-12-15 16:33:29', 1, '2019-12-15 16:33:29', 1, 1),
(55, 'icon', 'icon.png', '2019-12-15 16:33:29', 1, '2019-12-15 16:33:29', 1, 1),
(56, 'position', '[{\"position\":\"HÀ NỘI\",\"name\":\"Nguyễn văn A\",\"phone\":\"097777152320\",\"image\":\"public\\/images\\/icon-sp1.png\"},{\"position\":\"HÀ NỘI\",\"name\":\"Nguyễn văn A\",\"phone\":\"097777152320\",\"image\":\"public\\/images\\/icon-sp1.png\"},{\"position\":\"HÀ NỘI\",\"name\":\"Nguyễn văn A\",\"phone\":\"097777152320\",\"image\":\"public\\/images\\/icon-sp1.png\"}]', '2019-12-15 19:29:34', 1, '2019-12-15 19:29:34', 1, 1),
(57, 'topic1', '1', '2019-12-15 19:29:34', 1, '2019-12-15 19:29:34', 1, 1),
(58, 'topic2', '1', '2019-12-15 19:29:34', 1, '2019-12-15 19:29:34', 1, 1),
(59, 'videos', '[{\"link_youtube\":\"https:\\/\\/www.youtube.com\\/embed\\/T4ZcLOj94qs\",\"image\":\"public\\/upload\\/files\\/anh%20dai%20dien%20video\\/h%c3%acnh%20%c4%91%e1%ba%a1i%20di%e1%bb%87n%20tm01%20750x500.png\",\"title\":\"Review chi tiết Hút mùi Arber TM01\\/TM02\\/TM03\",\"view\":\"2\"},{\"link_youtube\":\"https:\\/\\/www.youtube.com\\/embed\\/T4ZcLOj94qs\",\"image\":\"public\\/upload\\/files\\/anh%20dai%20dien%20video\\/h%c3%acnh%20%c4%91%e1%ba%a1i%20di%e1%bb%87n%20tm01%20750x500.png\",\"title\":\"Review chi tiết Hút mùi Arber TM01\\/TM02\\/TM03\",\"view\":\"2\"},{\"link_youtube\":\"https:\\/\\/www.youtube.com\\/embed\\/T4ZcLOj94qs\",\"image\":\"public\\/upload\\/files\\/anh%20dai%20dien%20video\\/h%c3%acnh%20%c4%91%e1%ba%a1i%20di%e1%bb%87n%20tm01%20750x500.png\",\"title\":\"Review chi tiết Hút mùi Arber TM01\\/TM02\\/TM03\",\"view\":\"2\"},{\"link_youtube\":\"https:\\/\\/www.youtube.com\\/embed\\/T4ZcLOj94qs\",\"image\":\"public\\/upload\\/files\\/anh%20dai%20dien%20video\\/h%c3%acnh%20%c4%91%e1%ba%a1i%20di%e1%bb%87n%20tm01%20750x500.png\",\"title\":\"Review chi tiết Hút mùi Arber TM01\\/TM02\\/TM03\",\"view\":\"2\"},{\"link_youtube\":\"https:\\/\\/www.youtube.com\\/embed\\/T4ZcLOj94qs\",\"image\":\"public\\/upload\\/files\\/anh%20dai%20dien%20video\\/h%c3%acnh%20%c4%91%e1%ba%a1i%20di%e1%bb%87n%20tm01%20750x500.png\",\"title\":\"Review chi tiết Hút mùi Arber TM01\\/TM02\\/TM03\",\"view\":\"2\"}]\r\n', '2019-12-15 19:29:34', 1, '2019-12-15 19:29:34', 1, 1),
(60, 'actual_products', '22', '2019-12-15 19:29:34', 1, '2019-12-15 19:29:34', 1, 1);

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
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
