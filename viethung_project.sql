-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 11, 2019 lúc 02:31 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `viethung_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `bil_id` int(10) UNSIGNED NOT NULL,
  `bil_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bil_price` int(11) NOT NULL,
  `bil_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categorys`
--

CREATE TABLE `categorys` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_status` tinyint(4) NOT NULL,
  `cate_parent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categorys`
--

INSERT INTO `categorys` (`cate_id`, `cate_name`, `cate_status`, `cate_parent`, `created_at`, `updated_at`) VALUES
(1, 'Khoa Nội', 0, 0, NULL, '2019-03-19 02:55:07'),
(2, 'Khoa Ngoại', 1, 0, NULL, '2019-02-27 10:33:39'),
(3, 'Khoa tai mũi họng', 0, 0, NULL, '2019-02-28 08:46:10'),
(4, 'Nha Khoa', 1, 0, NULL, '2019-02-27 10:34:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_drug`
--

CREATE TABLE `category_drug` (
  `catedru_id` int(10) UNSIGNED NOT NULL,
  `catedru_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `catedru_status` tinyint(4) NOT NULL,
  `catedru_parent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_drug`
--

INSERT INTO `category_drug` (`catedru_id`, `catedru_name`, `catedru_status`, `catedru_parent`, `created_at`, `updated_at`) VALUES
(1, 'Thuốc Vắc Xin', 1, 0, NULL, '2019-04-10 01:14:39'),
(2, 'Thuốc Thần Kinh', 0, 0, NULL, '2019-04-10 01:14:34'),
(3, 'Thuốc tiêu hóa', 1, 0, NULL, '2019-02-28 09:15:05'),
(4, 'Thuốc Kháng Sinh', 1, 0, NULL, '2019-02-28 09:16:17'),
(5, 'Thuốc ngoại', 1, 0, '2019-02-28 08:16:53', '2019-02-28 08:16:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `client`
--

CREATE TABLE `client` (
  `cli_id` int(10) UNSIGNED NOT NULL,
  `cli_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cli_age` int(11) NOT NULL,
  `cli_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cli_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cli_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cli_sex` int(11) NOT NULL,
  `cli_level` tinyint(4) NOT NULL,
  `cli_status` tinyint(4) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `client`
--

INSERT INTO `client` (`cli_id`, `cli_name`, `cli_age`, `cli_phone`, `cli_email`, `cli_address`, `cli_sex`, `cli_level`, `cli_status`, `cate_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'nguyenvana', 20, '0123456789', 'vana@gmail.com', 'Ha Noi', 1, 1, 1, 1, 1, NULL, NULL),
(2, 'nguyenvanb', 21, '0123456789', 'vanb@gmail.com', 'Ha Noi', 1, 1, 1, 1, 1, NULL, NULL),
(4, 'nguyenvana', 20, '0123456789', 'vana@gmail.com', 'Ha Noi', 1, 1, 1, 1, 1, NULL, NULL),
(5, 'nguyenvanb', 21, '0123456789', 'vanb@gmail.com', 'Ha Noi', 1, 1, 1, 1, 1, NULL, NULL),
(6, 'nguyenthit', 29, '0123456789', 'thit@gmail.com', 'Ha Noi', 2, 0, 0, 1, 1, NULL, NULL),
(8, 'nguyenvana', 20, '0123456789', 'phucphu9x@gmail.com', 'Ha Noi', 1, 0, 0, 1, 1, NULL, NULL),
(10, 'levanthach', 20, '0123456789', 'levanthach2103@gmail.com', 'Ha Noi', 1, 0, 0, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cost`
--

CREATE TABLE `cost` (
  `cos_id` int(10) UNSIGNED NOT NULL,
  `cos_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cos_date` date NOT NULL,
  `cos_price` int(11) NOT NULL,
  `cos_int` int(11) NOT NULL,
  `cos_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drug`
--

CREATE TABLE `drug` (
  `drug_id` int(10) UNSIGNED NOT NULL,
  `drug_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drug_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drug_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drug_distrebution` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `drug_warranty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drug_status` tinyint(4) NOT NULL,
  `catedrug_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `drug`
--

INSERT INTO `drug` (`drug_id`, `drug_name`, `drug_image`, `drug_from`, `drug_distrebution`, `drug_warranty`, `drug_status`, `catedrug_id`, `created_at`, `updated_at`) VALUES
(2, 'arcalia', '14.jpg', 'Việt nam', 'Nhà thuốc ngô chung', '1/12/2021', 0, 2, NULL, '2019-05-09 08:28:20'),
(5, 'rocket 1h', '17.jpg', 'canada', 'Nhà thuốc phú', '1/1/2022', 1, 3, '2019-03-11 02:51:42', '2019-03-11 02:51:42'),
(6, 'Monola', '17.jpg', 'Viet Nam', 'Nhà thuốc Phúc phú', '12/2/2020', 1, 4, '2019-03-26 09:17:00', '2019-03-26 09:17:00'),
(7, 'Thuốc pop', '17.jpg', 'Việt nam', 'Nhà thuốc Phúc phú', '12/2/2020', 1, 1, '2019-05-09 08:42:02', '2019-05-09 08:42:02'),
(8, 'Thuốc poputy', '17.jpg', 'Việt nam', 'Nhà thuốc Phúc phú', '12/2/2020', 1, 1, '2019-05-09 08:44:04', '2019-05-09 08:44:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `his_id` int(10) UNSIGNED NOT NULL,
  `cli_id` int(11) NOT NULL,
  `his_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `his_cate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `his_doctor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `his_cost` int(11) NOT NULL,
  `his_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_24_041309_create_bill_table', 1),
(4, '2019_01_24_063019_create_user_table', 1),
(5, '2019_01_24_064737_create_categorys_table', 1),
(6, '2019_01_25_071251_create_category_drug_table', 1),
(7, '2019_01_25_071831_create_cost_table', 1),
(8, '2019_01_25_072403_create_statistical_table', 1),
(9, '2019_01_25_073716_create_drug_table', 1),
(10, '2019_01_25_074237_create_history_table', 1),
(11, '2019_01_25_074620_create_client_table', 1),
(12, '2019_01_25_075300_create_service_table', 1),
(13, '2019_02_16_031806_create_user_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Điều Dưỡng', NULL, '2019-02-27 04:42:43'),
(4, 'Bác Sĩ', '2019-03-03 10:10:01', '2019-03-03 10:10:01'),
(5, 'Admin', '2019-03-09 07:08:45', '2019-03-09 07:08:45'),
(7, 'y tá', '2019-03-09 07:09:02', '2019-03-09 07:09:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `ser_id` int(10) UNSIGNED NOT NULL,
  `ser_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ser_price` int(11) NOT NULL,
  `ser_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ser_voucher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ser_datetime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ser_status` tinyint(4) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`ser_id`, `ser_name`, `ser_price`, `ser_content`, `ser_voucher`, `ser_datetime`, `ser_status`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 'Khuyen mai thang 3', 5000000, 'dich vu kham rang', 'Giam 50%', '1/03/2019', 0, 1, NULL, NULL),
(2, 'Khuyen mai thang 5', 500000, 'dich vu kham suc khoe', 'Giảm 30%', '1/05/2019', 1, 2, NULL, NULL),
(3, 'Khuyen mai thang 4', 5000000, 'dich vu kham ', 'Giảm 20%', '10/04/2019', 1, 1, NULL, NULL),
(4, 'Khuyen mai thang 5', 200000, 'dich vu kham noi soi', 'Giảm 30%', '3/05/2019', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statistical`
--

CREATE TABLE `statistical` (
  `his_id` int(11) NOT NULL,
  `sta_main` int(11) NOT NULL,
  `sta_revenue` int(11) NOT NULL,
  `sta_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `age`, `phone`, `email`, `password`, `address`, `sex`, `avatar`, `level`, `cate_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'Trương Đức Nam', 22, 122344543, 'nam@gmail.com', '$2y$10$Qnnowdjf1dCgY6a2rkqrXeXIKSsOuYF9dWFae5ge4SpEgFISTxWYO', 'Cầu Giấy, Hà Nội', 'Nam', '12961557_950054441780154_5934107844338996705_n.jpg', 3, 3, NULL, '2019-02-27 03:10:24', '2019-02-28 05:17:38'),
(15, 'Ngô Chung', 22, 15465898, 'chung@gmail.com', '$2y$10$jmOjLeoG5WMxwOf6zCvm5eZg.oYccpUTRRpC8QvT5eiAlcAI4WxO.', 'Bắc Giang', 'Nam', '12961557_950054441780154_5934107844338996705_n.jpg', 4, 3, NULL, '2019-03-10 23:53:40', '2019-03-10 23:57:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bil_id`);

--
-- Chỉ mục cho bảng `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `category_drug`
--
ALTER TABLE `category_drug`
  ADD PRIMARY KEY (`catedru_id`);

--
-- Chỉ mục cho bảng `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cli_id`);

--
-- Chỉ mục cho bảng `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`cos_id`);

--
-- Chỉ mục cho bảng `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`drug_id`);

--
-- Chỉ mục cho bảng `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`his_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ser_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `bil_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categorys`
--
ALTER TABLE `categorys`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category_drug`
--
ALTER TABLE `category_drug`
  MODIFY `catedru_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `client`
--
ALTER TABLE `client`
  MODIFY `cli_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `cost`
--
ALTER TABLE `cost`
  MODIFY `cos_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `drug`
--
ALTER TABLE `drug`
  MODIFY `drug_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `his_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `ser_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
