-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 10:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Sơ lược',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Mô tả',
  `type` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `image`, `summary`, `description`, `type`, `position`, `status`, `url`, `is_active`, `user_id`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Săn hàng siêu rẻ: Smartphone giảm giá cả triệu đồng', '', 'upload/article/1609038334_mua-giay-Nike-Air-Huarache-“Legion-Green”.jpg', '<p>Trong tầm gi&aacute; chỉ 3 triệu đồng, bạn lăn tăn kh&ocirc;ng biết liệu c&oacute; chiếc m&aacute;y t&iacute;nh bảng n&agrave;o đủ tốt để đ&aacute;p ứng được nhu cầu sử dụng h&agrave;ng ng&agrave;y của m&igrave;nh? Một số người m&aacute;ch bạn về những sản phẩm&nbsp;</p>', '<p>Săn h&agrave;ng si&ecirc;u rẻ: Smartphone giảm gi&aacute; cả triệu đồng</p>', 1, 1, NULL, NULL, 1, NULL, NULL, NULL, '2020-05-23 20:33:02', '2020-12-26 20:05:34'),
(2, 'Mua iPad uy tín – Hãy tới ngay Di Động Thông Minh – 1 đổi 1 trong 45 ngày.', '', 'upload/article/1609038324_big-2-.jpg', '<p>Bạn đang gặp phải vấn để mắt th&acirc;m quầng do d&ugrave;ng điện thoại nhiều? Đừng lo lắng, hiện nay, đ&atilde; c&oacute; giải ph&aacute;p kem mắt vi kim IDENEL cực hiệu quả d&agrave;nh cho bạn. Sản phẩm đang được giảm gi&aacute; shock k&egrave;m qu&agrave; tặng cực khủng d&agrave;nh ri&ecirc;ng cho kh&aacute;ch h&agrave;ng Di Động Th&ocirc;ng Minh.&nbsp;</p>', '<p>Mua iPad uy t&iacute;n &ndash; H&atilde;y tới ngay Di Động Th&ocirc;ng Minh &ndash; 1 đổi 1 trong 45 ng&agrave;y.</p>', 1, NULL, NULL, NULL, 1, NULL, 'Mua iPad uy tín – Hãy tới ngay Di Động Thông Minh – 1 đổi 1 trong 45 ngày.', 'Mua iPad uy tín – Hãy tới ngay Di Động Thông Minh – 1 đổi 1 trong 45 ngày.', '2020-05-23 20:33:29', '2020-12-26 20:05:24'),
(4, 'Realme X3 SuperZoom: Smartphone khuynh đảo phân khúc tầm trung', '', 'upload/article/1609038314_mua-giay-Nike-Flyknit-cho-nam.jpg', '<p>iPhone 11 Pro Max hiện vẫn đang l&agrave; một trong những chiếc smartphone tốt nhất thế giới ở thời điểm hiện tại. Trong b&agrave;i viết n&agrave;y, m&igrave;nh sẽ chia sẻ cho c&aacute;c bạn một chiếc iPhone 11 Pro Max gi&aacute; rẻ m&agrave; nếu mua n&oacute;,&nbsp;</p>', '<h2><a href=\"https://didongthongminh.vn/ban-tin-cong-nghe/realme-x3-superzoom-smartphone-khuynh-dao-phan-khuc-tam-trung\">Realme X3 SuperZoom: Smartphone khuynh đảo ph&acirc;n kh&uacute;c tầm trung</a>asdasdasdasdad</h2>', 1, NULL, NULL, 'https://www.youtube.com/watch?v=DsMm_rQW1bk', 0, NULL, NULL, NULL, '2020-05-23 22:00:30', '2021-01-26 02:10:37'),
(5, 'Lời 7 triệu khi mua iPhone 11 Pro Max bản quốc tế này?', '', 'upload/article/1609038305_dswh03401hod__7__ead78fcb663a44fd8b3a073831021d67_1024x1024.jpg', '<p>Khi thị trường sản phẩm c&ocirc;ng nghệ trở n&ecirc;n b&atilde;o h&ograve;a, nhu cầu sở hữu smartphone của người d&ugrave;ng kh&ocirc;ng đơn thuần chỉ l&agrave; một thiết bị đ&aacute;p ứng tốt mục đ&iacute;ch sử dụng thường ng&agrave;y m&agrave; họ cần nhiều hơn <strong>thế.&nbsp;</strong></p>', '<p>Ch&agrave;o mừng mọi người đ&atilde; quay trở lại với bản tin dNews tr&ecirc;n website của didongthongminh.com, ch&uacute;ng ta h&atilde;y c&ugrave;ng điểm lại những th&ocirc;ng tin th&uacute; vị nhất trong 24h của thế giới c&ocirc;ng nghệ. H&ocirc;m nay l&agrave; ng&agrave;y 31 th&aacute;ng 07.</p>\r\n\r\n<h2><strong>Samsung Galaxy Z Fold 2 5G lộ ảnh thiết kế m&agrave;n h&igrave;nh đục lỗ v&ocirc; c&ugrave;ng &ldquo;sexy&rdquo;&nbsp;</strong></h2>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.didongthongminh.vn/upload_images/2020/07/samsung-galaxy-fold-2_800x450.jpg\" /></p>\r\n\r\n<p><em>H&igrave;nh ảnh minh họa Samsung Galaxy Z Fold 2</em></p>\r\n\r\n<p>Theo website MySmartprice vừa c&ocirc;ng bố loạt ảnh render của Samsung Galaxy Z Fold 2 5G với chất lượng tin cậy, tiết lộ tổng thể thiết kế của smartphone m&agrave;n h&igrave;nh gập mới n&agrave;y. Cũng theo website n&agrave;y th&igrave; mẫu m&aacute;y năm nay sẽ c&oacute; hai m&agrave;u ch&iacute;nh đ&oacute; l&agrave;: Mystic Black v&agrave; Mystic Bronze.</p>\r\n\r\n<p><img alt=\"\" src=\"https://lh6.googleusercontent.com/Rl6y2hxpFAkLCFmmLMo2aHIPXZuSkbPV_xmntA64q80ON8Amgwq15gxScffkVAjpbt5jiyfamVG33euNMZR0QPd6gRPsFBKG0671XpINNnABA8xwVWZJjhXSEqBSMZNMMJuisqD4\" /></p>\r\n\r\n<p><em>M&agrave;u sắc của Samsung Galaxy Z Fold 2 được tiết lộ</em></p>\r\n\r\n<p>Galaxy Z Fold 2 5G sẽ c&oacute; cơ chế gập kiểu quyển s&aacute;ch v&agrave; m&agrave;n h&igrave;nh ch&iacute;nh sẽ nằm b&ecirc;n trong. Tuy nhi&ecirc;n sẽ c&oacute; một ch&uacute;t thay đổi, đ&aacute;ng n&oacute;i ở đ&acirc;y sẽ l&agrave; m&aacute;y sẽ chuyển sang m&agrave;n h&igrave;nh đục lỗ b&ecirc;n trong v&agrave; b&ecirc;n ngo&agrave;i. Viền m&agrave;n h&igrave;nh b&ecirc;n ngo&agrave;i sẽ được chế t&aacute;c mỏng hơn.</p>\r\n\r\n<p>Cơ chế bản lề mặc d&ugrave; tr&ocirc;ng sẽ hơi d&agrave;y nhưng sẽ đảm bảo sự chắc chắn hơn c&aacute;c model trước. Ch&uacute;ng ta c&oacute; thể thấy rằng ba camera sau sẽ chuyển sang nằm dọc v&agrave; k&egrave;m theo đ&oacute; l&agrave; cụm đ&egrave;n flash LED.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://lh6.googleusercontent.com/A_G0NJhlbdh4zHfoKuy8IbvBAB8BpYsZnxrDLNwhF58mPZDCUhhWO_9vYjvXjCW58pjl7w7ZzNqNr7F-oR06eU1a2CwTVWGjRcfG5Fx30483fyD5l7FVjoWxjAKpEDkLOj-DF566\" /></p>\r\n\r\n<p><em>M&agrave;u sắc của Samsung Galaxy Z Fold 2 được tiết lộ</em></p>\r\n\r\n<p>Galaxy Z Fold 2 5G sẽ l&agrave; sản phẩm được ra mắt đ&uacute;ng v&agrave;o sự kiện Unpacked diễn ra v&agrave;o ng&agrave;y 05/08/2020. Gi&aacute; b&aacute;n model n&agrave;y sẽ l&agrave; 1.980 USD tương đương với 45.8 triệu đồng.</p>\r\n\r\n<h2><strong>Ra mắt Huawei TalkBand B6: V&ograve;ng tay th&ocirc;ng minh ki&ecirc;m tai nghe Bluetooth t&iacute;ch hợp t&iacute;nh năng v&ocirc; c&ugrave;ng th&uacute; vị</strong></h2>\r\n\r\n<p>Huawei vừa ch&iacute;nh thức ra mắt TalkBand B6 tại Trung Quốc, chiếc v&ograve;ng tay theo d&otilde;i ki&ecirc;m tai nghe Bluetooth. Mẫu v&ograve;ng đeo tay th&ocirc;ng minh n&agrave;y sẽ c&oacute; ba phi&ecirc;n bản: Thể thao, Thời trang v&agrave; Độc quyền với mức gi&aacute; lần lượt khoảng 3,3 triệu đồng; 3,9 triệu đồng v&agrave; 4,9 triệu đồng.</p>\r\n\r\n<p>M&aacute;y sẽ trang bị AMOLED cong 1.53 inch với độ ph&acirc;n giải 460&times;188 pixels, mật độ điểm ảnh l&agrave; 326 ppi v&agrave; trang bị con chip HiSilicon Kirin A1.</p>\r\n\r\n<p><img alt=\"\" src=\"https://lh5.googleusercontent.com/qW1CWUQnc7wdpEO4OSuz0JenpgWIYsefRTCYPymwkUmVa8TGGTEPUIUTUnarClH7OmrwS0QV2H7RlkhN1WhmliOhnZK8YdcxFXvq2YYeA2_UreT5WkOFuuY6it4dbcAGd8uuuVnF\" /></p>\r\n\r\n<p><em>H&igrave;nh ảnh của Huawei TalkBand B6</em></p>\r\n\r\n<p>L&agrave; một thiết bị về sức khỏe, Huawei TalkBand B6 sẽ được t&iacute;ch hợp c&aacute;c cảm biến như gia tốc kế, con quay hồi chuyển, cảm biến nhịp tim, cảm biến SpO2, cảm biến xung quanh v&agrave; cảm biến Hall. Thiết bị cũng sẽ được trang bị Bluetooth 5.2 v&agrave; c&oacute; thể kết nối với smartphone tối đa l&agrave; 150m hỗ trợ Android 4.4 v&agrave; iOS 9.0 trở l&ecirc;n.</p>\r\n\r\n<p>Thiết kế của Huawei TalkBand B6 l&agrave; một điểm đ&aacute;ng khen ngợi khi chiếc v&ograve;ng tay n&agrave;y sẽ được chế t&aacute;c bởi th&eacute;p kh&ocirc;ng gỉ v&agrave; sẽ c&oacute; c&aacute;c loại d&acirc;y đeo để người d&ugrave;ng lựa chọn như: Silicon, da, kim loại. M&agrave;u sắc của v&ograve;ng tay sẽ c&oacute; 2 phi&ecirc;n bản đ&oacute; l&agrave; Obsidian Black v&agrave; Coral Red cho v&ograve;ng tay được l&agrave;m bằng silicon ngược lại v&ograve;ng tay kim loại sẽ c&oacute; m&agrave;u Titanium v&agrave; m&agrave;u Silver Grey.</p>\r\n\r\n<p><img alt=\"\" src=\"https://lh5.googleusercontent.com/DBiVILesSf1GyMCYMbp3SwPiTStOc5ASXRd01eGo03l-BKk7SeY_eEVwOjuDSBovFiDkBuDW2DGnMqJh7D4KXP03bnSrh8Hd-AWqI2HLNWkmLi7ntyGw0yzi_JBoQM4aKqMVlJ7b\" /></p>\r\n\r\n<p><em>Huawei TalkBand B6</em></p>\r\n\r\n<p>Một số t&iacute;nh năng nổi bật của Huawei TalkBand B6 c&oacute; thể kể tới như: Hỗ trợ theo d&otilde;i tập thể dục, cảnh b&aacute;o ứng dụng, thời tiết, điều khiển nhạc, theo d&otilde;i chu kỳ kinh nguyệt,&hellip; Ngo&agrave;i ra, TalkBand B6 sẽ đạt chứng nhận IP57 về khả năng chống bụi v&agrave; nước nhưng kh&ocirc;ng &aacute;p dụng cho d&acirc;y đeo bằng da. M&aacute;y sẽ được trang bị vi&ecirc;n pin 120mAh v&agrave; được sạc qua cổng USB Type-C.</p>\r\n\r\n<h2><strong>Nokia lần lượt c&ocirc;ng bố smartphone mới tại IFA 2020, Nokia 2.4 l&agrave; ph&aacute;t s&uacute;ng đầu ti&ecirc;n</strong></h2>\r\n\r\n<p>Một trong số ba sản phẩm được mong chờ của Nokia sẽ ra mắt v&agrave;o cuối năm nay đ&atilde; lộ diện. Một leaker chia sẻ phi&ecirc;n bản Nokia 2.4 sẽ l&agrave; sản phẩm Nokia Wolverine sẽ được giới thiệu tại IFA 2020 v&agrave; dự kiến ra mắt v&agrave;o th&aacute;ng 9/2020.</p>', 1, NULL, NULL, NULL, 1, NULL, 'Lời 7 triệu khi mua iPhone 11 Pro Max bản quốc tế này?', 'Lời 7 triệu khi mua iPhone 11 Pro Max bản quốc tế này?', '2020-05-23 22:00:59', '2020-12-26 20:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `image`, `url`, `target`, `description`, `type`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(21, 'Nike', 'nike', 'upload/banner/1611203360_Nike-Air-Max-97-Silver-Bullett.jpg', 'https://www.youtube.com/watch?v=DsMm_rQW1bk', '_blank', '<p>Nike</p>', 1, 1, 1, '2020-12-16 19:53:04', '2021-01-20 21:30:10'),
(23, 'Balenciaga', 'balenciaga', 'upload/banner/1611203730_balenciaga-triple-s-nsss.jpg', 'https://www.youtube.com/watch?v=DsMm_rQW1bk', '_blank', '<p>Balenciaga</p>', 1, 3, 1, '2020-12-16 20:00:25', '2021-01-20 21:35:30'),
(24, 'Biti\'s Hunter', 'bitis-hunter', 'upload/banner/1611202692_Bitis-Hunter-x-Sơn-Tùng-33.jpg', 'https://www.youtube.com/watch?v=DsMm_rQW1bk', '_blank', '<p><a href=\"https://www.bitis.com.vn/pages/outlet-2020\" rel=\"noopener\" target=\"_blank\" title=\"Biti\'s Hunter Canvas\">Biti&#39;s Hunter</a></p>', 1, 2, 1, '2020-12-18 00:15:22', '2021-01-20 21:30:01'),
(27, 'Adidas', 'adidas', 'upload/banner/1611204030_UB 3_0-44.jpg', 'https://www.youtube.com/watch?v=DsMm_rQW1bk', '_blank', '<p>abc</p>', 1, 4, 1, '2020-12-18 00:26:00', '2021-01-20 21:40:30'),
(28, 'Giày Nike', 'giay-nike', 'upload/banner/1611203298_Nike-Air-Max-97-Silver-Bullet.jpg', 'https://www.youtube.com/watch?v=DsMm_rQW1bk', '_blank', '<p>sadad</p>', 5, 6, 1, '2020-12-28 22:47:02', '2021-01-20 21:28:18'),
(29, 'Giày Adidas', 'giay-adidas', 'upload/banner/1609223787_adidas_quang-cao.jpg', 'https://www.youtube.com/watch?v=DsMm_rQW1bk', '_blank', '<p>fsdf</p>', 5, 5, 1, '2020-12-28 23:02:04', '2020-12-28 23:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `image`, `website`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 'Balenciaga', 'balenciaga', 'upload/brand/1609751483_ad4610e944909f9a3be64eaacc088627.jpg', 'https://www.samsung.com/vn/', 4, 1, '2020-03-04 06:47:49', '2021-01-04 02:11:23'),
(6, 'Nike', 'nike', 'upload/brand/1609751466_unnamed.jpg', 'apple.com', 3, 1, '2020-03-05 05:00:48', '2021-01-04 02:11:06'),
(9, 'Adidas', 'adidas', 'upload/brand/1609751361_3 lá.png', 'https://www.oppo.com/vn/', 2, 1, '2020-03-22 20:58:58', '2021-01-04 02:09:21'),
(10, 'Biti\'s', 'bitis', 'upload/brand/1609751225_1521190718-brasol.vn-he-thong-nhan-dien-thuong-hieu-bitis-bestplus-vn-logo-bitis.jpg', 'https://www.sony.com/', 1, 1, '2020-03-22 21:00:29', '2021-01-04 02:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `type` tinyint(4) DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `parent_id`, `position`, `is_active`, `type`, `summary`, `created_at`, `updated_at`) VALUES
(51, 'Balenciaga', 'balenciaga', 'upload/category/1608280166_Anh-danh-muc-balenciaga.jpg', 0, 4, 1, 4, NULL, '2020-11-23 06:33:56', '2021-01-22 19:48:02'),
(71, 'Nike', 'nike', 'upload/category/1608280089_Anh-dunh-muc-nike.jpg', 0, 3, 1, 3, NULL, '2020-11-24 04:28:30', '2021-01-22 19:47:57'),
(72, 'Adidas', 'adidas', 'upload/category/1608280023_Anh-dunh-muc-adidas.jpg', 0, 1, 1, 2, NULL, '2020-11-24 04:28:57', '2021-01-22 19:47:29'),
(73, 'Bitis', 'bitis', 'upload/category/1608279587_Anh-danh-muc-bitishunter.jpg', 0, 2, 1, 1, NULL, '2020-11-24 04:47:08', '2021-01-22 19:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `content`, `created_at`, `updated_at`) VALUES
(9, 'Thao', '0987689993', 'thao@gmail.com', 'Chao ban', '2020-08-03 07:02:48', '2020-08-03 07:02:48'),
(10, 'Khanh', '0900909999', 'khang@gmail.com', 'Chao ban afasdfsd', '2020-08-14 05:51:58', '2020-08-14 05:51:58'),
(13, 'Ngô Văn Giang', '0336546633', 'giang22111998@gmail.com', '<p>&aacute;dsadasdaa</p>\r\n\r\n<p>đấ132123313131232312</p>', '2020-12-01 00:48:58', '2020-12-01 00:54:38'),
(15, NULL, '0336546633', NULL, 'âfsafasdfs', '2020-12-10 06:06:07', '2020-12-10 06:06:07'),
(16, NULL, '0336546633', NULL, 'adsadad', '2020-12-10 06:06:54', '2020-12-10 06:06:54'),
(17, 'Ngô Văn lam12354', '0336546633', 'giang22111998@gmail.com', 'adsadad', '2020-12-10 06:12:49', '2020-12-10 06:12:49'),
(18, 'cfhhfgjhfgjh', '578575757857', 'dfgdg@sdfsfsdf', 'bghdfgdf', '2020-12-10 21:21:18', '2020-12-10 21:21:18'),
(19, 'Ngô Văn Hùng', '0336546633', 'hung22111998@gmail.com', 'adsdsa', '2020-12-11 01:07:23', '2020-12-11 01:07:23'),
(20, 'Ngô Văn Giang', '0336546633', 'giang22111998@gmail.com', 'ioh', '2020-12-11 01:15:42', '2020-12-11 01:15:42'),
(21, 'Ngô Văn Giang', '0336546633', 'giang22111998@gmail.com', 'guyyu', '2020-12-11 01:34:57', '2020-12-11 01:34:57'),
(22, 'Ngô Văn Giang', '0336546633', 'giang22111998@gmail.com', 'ghji', '2020-12-11 01:36:37', '2020-12-11 01:36:37'),
(23, 'Ngô Văn Giang', '0336546633', 'giang22111998@gmail.com', 'dsadasd', '2020-12-11 01:41:24', '2020-12-11 01:41:24'),
(24, 'Ngô Văn Giang', '0336546633', 'giang22111998@gmail.com', 'dsfgdsfg', '2020-12-15 04:56:33', '2020-12-15 04:56:33'),
(25, 'Ngô Văn tuaans', '0336546633', 'giang22111998@gmail.com', 'dsadasd', '2020-12-15 05:02:22', '2020-12-15 05:02:22'),
(26, 'Ngô Văn Giangsddasdsad', '0336546633', 'giang22111998@gmail.com', 'dasdasd', '2020-12-15 05:05:24', '2020-12-15 05:05:24'),
(27, 'Ngô Văn Giangsdadasd', '0336546633', 'giang22111998@gmail.com', 'adsada', '2020-12-15 05:27:05', '2020-12-15 05:27:05'),
(28, 'Ngô Văn Giang', '0336546633', 'giang22111998@gmail.com', 'ádasda', '2020-12-15 18:06:47', '2020-12-15 18:06:47'),
(29, 'Ngô Văn Giang', '0336546633', 'giang22111998@gmail.com', 'rêtr', '2020-12-15 18:07:32', '2020-12-15 18:07:32'),
(30, 'Ngô Văn Giang', '0336546633', 'giang22111998@gmail.com', 'fdgdfg', '2020-12-15 18:08:05', '2020-12-15 18:08:05'),
(31, 'Ngô Văn Giang', '0336546633', 'giang22111998@gmail.com', 'ádad', '2020-12-15 18:08:42', '2020-12-15 18:08:42'),
(32, 'Ngô Văn Giang', '0336546633', 'giang22111998@gmail.com', 'sfdsfs', '2020-12-15 18:09:40', '2020-12-15 18:09:40'),
(33, NULL, NULL, 'wsefwsfgsfgsdfgs@gmail.com', 'adasdasd', '2021-01-19 19:41:11', '2021-01-19 19:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `percent`, `created_at`, `updated_at`) VALUES
(1, 'SHOP-KM1', 1, 50000, 30, '2020-05-19 16:50:32', '2020-05-19 16:50:32'),
(2, 'SHOP-K2', 2, NULL, 50, '2020-05-19 16:52:27', '2020-05-19 16:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2020_01_07_122649_create_categories_table', 1),
(10, '2020_01_09_113851_create_products_table', 1),
(11, '2020_02_06_031728_create_banners_table', 2),
(12, '2020_02_06_032831_create_banners_table', 3),
(13, '2020_02_06_125433_create_vendors_table', 4),
(14, '2020_02_06_125734_create_brands_table', 5),
(15, '2020_03_04_083632_create_products_table', 6),
(17, '2020_03_05_122445_create_contacts_table', 7),
(20, '2020_07_13_130015_create_member_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) DEFAULT 0,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `total` int(11) DEFAULT 0,
  `user_id` int(11) DEFAULT 0,
  `order_status_id` int(11) DEFAULT 0,
  `payment_id` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `fullname`, `email`, `address`, `address2`, `phone`, `discount`, `note`, `coupon`, `total`, `user_id`, `order_status_id`, `payment_id`, `created_at`, `updated_at`) VALUES
(9, NULL, 'Hoàng Công Dũng', 'dungthuy2109@gmail.com', 'HN', NULL, '0986346007', 0, NULL, '0', 25970000, 0, 4, 0, '2020-05-19 12:18:21', '2020-05-19 12:18:21'),
(10, NULL, 'Hoàng Công Dũng', 'hcdung2109@gmail.com', 'HN', NULL, '0986346006', 11395000, 'AB', 'SHOP-K2', 22790000, 0, 1, 0, '2020-05-20 09:55:45', '2020-05-20 09:55:45'),
(11, 'DH-11-20052020', 'Trần Thuỷ', 'thuthuy@gmail.com', 'Long Biên , Hà nội', NULL, '0986346008', 3995000, 'ko', 'SHOP-K2', 7990000, 0, 1, 0, '2020-05-20 11:01:38', '2020-05-20 11:01:38'),
(12, 'DH-12-21052020', 'Trần Thuỷ', 'dungthuy2109@gmail.com', 'HN', NULL, '0986346008', 0, NULL, NULL, 15980000, 0, 1, 0, '2020-05-21 07:41:24', '2020-05-21 07:41:24'),
(13, 'DH-13-21052020', 'Trần Thuỷ', 'dungthuy2109@gmail.com', 'HN', NULL, '0986346008', 0, NULL, NULL, 15980000, 0, 2, 0, '2020-05-21 07:42:09', '2020-05-21 07:42:09'),
(14, 'DH-14-23052020', 'Trần Thuỷ', 'hcdung2109@gmail.com', 'Bắc Ninh', 'Hà nội', '0986346008', 0, 'kfdsfsdf', NULL, 23390000, 0, 3, 0, '2020-05-23 00:30:46', '2020-05-25 23:46:41'),
(15, 'DH-15-26052020', 'HCDUNG', 'hcdung2109@gmail.com', 'Tầng 6, Tòa CT Building , Đống Đa , HN', NULL, '0986346008', 0, 'Giao hàng ngoài 17h', NULL, 7990000, 0, 2, 0, '2020-05-25 23:59:42', '2020-05-26 00:05:38'),
(16, 'DH--21082020-1598017675', 'dung', 'hcdung2109@gmail.com', 'HN', NULL, '098793332', 50000, 'N', 'SHOP-KM1', -67400000, 0, 1, 0, '2020-08-21 06:47:55', '2020-08-21 06:47:55'),
(17, 'DH-21082020-1598018495', 'dung', 'admin@gmail.com', 'HN', NULL, '0986468888', 0, 'dag giao hang', NULL, 15980000, 0, 1, 0, '2020-08-21 07:01:35', '2021-01-19 05:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `name`, `image`, `sku`, `user_id`, `order_id`, `product_id`, `price`, `qty`) VALUES
(2, NULL, NULL, '', NULL, 9, 43, 17980000, 2),
(3, NULL, NULL, '', NULL, 9, 30, 7990000, 1),
(4, NULL, NULL, '', NULL, 10, 30, 7990000, 1),
(5, NULL, NULL, '', NULL, 10, 44, 14800000, 2),
(6, NULL, NULL, '', NULL, 11, 30, 7990000, 1),
(7, 'Iphone 7 Plus 32GB - NEW', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', NULL, 0, 13, 30, 15980000, 2),
(8, 'Apple Watch S5 LTE 40mm viền nhôm dây cao su', 'uploads/product/1586667604_apple-watch-s5-lte-40mm-vien-nhom-day-cao-su-ava-400x400.jpg', NULL, 0, 14, 50, 2900000, 1),
(9, 'ASUS ROG Phone 2 512GB', 'uploads/product/1584948535__600x600__crop_600_asus_rog_phone2_min_1.jpg', NULL, 0, 14, 28, 20490000, 1),
(10, 'Iphone 7 Plus 32GB - NEW', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', NULL, 0, 15, 30, 7990000, 1),
(11, 'Iphone 7 Plus 32GB - NEW', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', NULL, 0, 16, 30, 47940000, 6),
(12, 'ASUS ROG Phone 2 512GB', 'uploads/product/1584948535__600x600__crop_600_asus_rog_phone2_min_1.jpg', NULL, 0, 16, 28, 20490000, 1),
(13, 'Oppo Reno 2F', 'uploads/product/1584946658_oppo-reno2-f-400x460.png', NULL, 0, 17, 12, 15980000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Mới'),
(2, 'Đang Xử Lý'),
(3, 'Hoàn Thành'),
(4, 'Hủy');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL DEFAULT 0,
  `sale` int(11) NOT NULL DEFAULT 0,
  `position` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_hot` int(11) NOT NULL DEFAULT 0 COMMENT 'Tiêu đề',
  `views` int(11) NOT NULL DEFAULT 0,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` int(11) NOT NULL DEFAULT 0,
  `vendor_id` int(11) NOT NULL DEFAULT 0,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `image`, `stock`, `price`, `sale`, `position`, `is_active`, `is_hot`, `views`, `category_id`, `url`, `sku`, `color`, `memory`, `brand_id`, `vendor_id`, `summary`, `description`, `meta_title`, `meta_description`, `user_id`, `created_at`, `updated_at`) VALUES
(15, 'BALENCIAGA TRIPLE S BLACK RED NAM NỮ', 'balenciaga-triple-s-black-red-nam-nu', 'uploads/product/1611372390_balenciaga-triple-s-black-red-nam-nu-2019.jpg', 28, 1900000, 1700000, 15, 1, 1, 0, 51, NULL, NULL, NULL, NULL, 5, 10, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:08:48', '2021-01-22 20:26:30'),
(29, 'BALENCIAGA TRIPLE S 3.0 WHITE RED CLEAR SOLE', 'balenciaga-triple-s-30-white-red-clear-sole', 'uploads/product/1611372282_balenciaga-triple-s-3-0-white-red-clear-sole-pk-god-1.jpg', 10, 3400000, 2900000, 29, 1, 0, 0, 51, NULL, NULL, NULL, NULL, 5, 10, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:35:43', '2021-01-22 20:26:53'),
(30, 'Giày Adidas Nam Chính Hãng - ULTRABOOST 20 “Core Black”', 'giay-adidas-nam-chinh-hang-ultraboost-20-core-black', 'uploads/product/1611370774_adidas-ultraboost-20-ef1043-01.jpg', 50, 5100000, 2750000, 30, 1, 0, 0, 72, NULL, NULL, NULL, NULL, 9, 0, '<p>TH&Ocirc;NG SỐ</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Vừa vặn như một đ&ocirc;i tất</p>\r\n	</li>\r\n	<li>\r\n	<p>C&oacute; d&acirc;y buộc</p>\r\n	</li>\r\n	<li>\r\n	<p>Th&acirc;n gi&agrave;y bằng vải dệt c&ocirc;ng nghệ adidas Primeknit+</p>\r\n	</li>\r\n	<li>\r\n	<p>Thiết kế &ocirc;m ch&acirc;n cố định với c&ocirc;ng nghệ Tailored Fibre Placement</p>\r\n	</li>\r\n	<li>\r\n	<p>Gi&agrave;y chạy hiệu năng cao</p>\r\n	</li>\r\n	<li>\r\n	<p>Đế giữa c&ocirc;ng nghệ Boost đ&agrave;n hồi</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Trọng lượng: 310 g (cỡ Anh 8,5)</p>\r\n	</li>\r\n	<li>\r\n	<p>Ch&ecirc;nh lệch độ cao đế giữa: 10 mm (g&oacute;t gi&agrave;y 22 mm / mũi gi&agrave;y 12 mm)</p>\r\n	</li>\r\n	<li>\r\n	<p>Đế ngo&agrave;i c&ocirc;ng nghệ Stretchweb l&agrave;m từ cao su Continental&trade;</p>\r\n	</li>\r\n	<li>\r\n	<p>M&agrave;u sản phẩm: Core Black / Night Metallic / Cloud White</p>\r\n	</li>\r\n	<li>\r\n	<p>M&atilde; sản phẩm: EF1043</p>\r\n	</li>\r\n</ul>', '<p><strong>Adidas&nbsp;ULTRABOOST 20&nbsp;EF1043</strong></p>\r\n\r\n<p>KIỂM SO&Aacute;T LỰC KHI CHẠM ĐẤT, THOẢI M&Aacute;I TRONG TỪNG BƯỚC CHẠY.</p>\r\n\r\n<p>Mỗi ng&agrave;y mới. Mỗi buổi chạy mới. H&atilde;y tận dụng tối đa. Đ&ocirc;i gi&agrave;y hiệu năng cao n&agrave;y c&oacute; th&acirc;n gi&agrave;y bằng vải dệt kim &ocirc;m ch&acirc;n. C&aacute;c đường may trong trợ lực được bố tr&iacute; chuẩn x&aacute;c để tạo độ n&acirc;ng đỡ ở đ&uacute;ng những vị tr&iacute; cần thiết. G&oacute;t gi&agrave;y l&agrave;m từ chất liệu elastane mềm mại cho độ &ocirc;m thoải m&aacute;i hơn. Lớp đệm đ&agrave;n hồi ho&agrave;n trả năng lượng cho từng sải bước tạo cảm gi&aacute;c như c&oacute; thể chạy m&atilde;i m&atilde;i.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/347/092/files/adidas-ultraboost-20-ef1043-01.jpg?v=1610768365818\" /></p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, 0, '2020-03-23 00:37:45', '2021-01-22 19:59:34'),
(42, 'Giày Nike Chính Hãng - Air Zoom Pegasus 37 - Black', 'giay-nike-chinh-hang-air-zoom-pegasus-37-black', 'uploads/product/1611371689_nike-air-zoom-pegasus-37-bq9646-010-01.jpg', 10, 3680000, 2350000, 0, 1, 0, 0, 71, NULL, NULL, NULL, NULL, 6, 0, '<p>tt</p>', '<p><strong>Nike Air Zoom Pegasus 37&nbsp;BQ9646 010</strong></p>\r\n\r\n<p>H&atilde;y n&acirc;ng qu&aacute; tr&igrave;nh luyện tập của bạn l&ecirc;n một tầm cao mới, với Nike Air Zoom Pegasus 37. Với đệm React đ&aacute;ng kinh ngạc v&agrave; bộ phận Air b&agrave;n ch&acirc;n mới, ch&uacute;ng giống như một chất tăng cường caffeine cho đ&ocirc;i ch&acirc;n của bạn. Phần tr&ecirc;n nhẹ cung cấp khả năng thở đ&aacute;ng kinh ngạc. Lớp đệm được đặt ho&agrave;n hảo gi&uacute;p loại bỏ c&aacute;c điểm n&oacute;ng. V&agrave; đế ngo&agrave;i si&ecirc;u hấp dẫn? V&acirc;ng, h&atilde;y cứ n&oacute;i rằng bạn phải đứng thẳng để chạy. Đ&acirc;y l&agrave; để cho b&ugrave;n bay v&agrave; đường phố biến mất sau lưng bạn.</p>\r\n\r\n<p>M&agrave;u sắc hiển thị: Đen / Anthracite / Trắng / Mango s&aacute;ng</p>\r\n\r\n<p>M&atilde; sản phẩm:&nbsp;BQ9646-010</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/347/092/files/nike-air-zoom-pegasus-37-bq9646-010-01.jpg?v=1610707294590\" /></p>', NULL, NULL, 0, '2020-04-11 21:43:53', '2021-01-22 20:14:49'),
(43, 'Giày Nike Nữ Chính Hãng - AIR MAX 97 - Grey Light Thistle', 'giay-nike-nu-chinh-hang-air-max-97-grey-light-thistle', 'uploads/product/1611371530_nike-air-max-97-cw5588-001-01.jpg', 20, 4800000, 2550000, 0, 1, 0, 0, 71, NULL, NULL, NULL, NULL, 6, 0, '<p>tt</p>', '<p><strong>Nike Ch&iacute;nh H&atilde;ng - Gi&agrave;y Nike Nữ Nike AIR MAX 97 CW5588-001</strong></p>\r\n\r\n<p>Với thiết kế gợn s&oacute;ng tương tự của OG được lấy cảm hứng từ t&agrave;u cao tốc Nhật Bản, Nike Air Max 97 cho ph&eacute;p bạn đẩy hết tốc độ phong c&aacute;ch của m&igrave;nh l&ecirc;n ph&iacute;a trước. Sử dụng bộ m&aacute;y Max Air c&oacute; chiều d&agrave;i đầy đủ mang t&iacute;nh c&aacute;ch mạng đ&atilde; l&agrave;m rung chuyển thế giới chạy v&agrave; th&ecirc;m m&agrave;u sắc tươi mới v&agrave; c&aacute;c chi tiết sắc n&eacute;t, n&oacute; cho ph&eacute;p bạn đi xe trong sự thoải m&aacute;i hạng nhất.</p>\r\n\r\n<p>M&agrave;u sắc:Grey/White/Neptune Green/Light Thistle</p>\r\n\r\n<p>M&atilde; sản phẩm: CW5588-001</p>\r\n\r\n<p>Nước sản xuất: Vietnam.&nbsp;</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/347/092/files/nike-air-max-97-cw5588-001-01.jpg?v=1608628871843\" /></p>', NULL, NULL, 0, '2020-04-11 21:45:00', '2021-01-22 20:12:10'),
(48, 'Giày Adidas Chính Hãng - Ultraboost - Black/Grey', 'giay-adidas-chinh-hang-ultraboost-blackgrey', 'uploads/product/1611371341_adidas-ultraboost-fx8933-01.jpg', 15, 5100000, 2550000, 0, 1, 0, 0, 72, NULL, NULL, NULL, NULL, 9, 11, '<p>TH&Ocirc;NG SỐ KỸ THUẬT<br />\r\nPh&ugrave; hợp thường xuy&ecirc;n<br />\r\nĐ&oacute;ng ren<br />\r\nadidas Primeknit tr&ecirc;n<br />\r\nCảm gi&aacute;c đăng nhập<br />\r\nGi&agrave;y chạy bộ năng động, th&iacute;ch ứng<br />\r\nĐế giữa của Responsive Boost<br />\r\nTrọng lượng: 312 g (cỡ UK 8.5)<br />\r\nĐộ rơi của đế giữa: 10 mm (g&oacute;t: 29 mm, b&agrave;n ch&acirc;n trước: 19 mm)<br />\r\nĐế ngo&agrave;i Stretchweb bằng Cao su Continental &trade;<br />\r\nM&agrave;u sắc<br />\r\nM&atilde; sản phẩm: FX8933</p>', '<p><strong>Adidas&nbsp;Ultraboost&nbsp;FX8933</strong></p>\r\n\r\n<p>NHỮNG NGƯỜI CHẠY THEO HIỆU SUẤT RỒI TRẢ LẠI NĂNG LƯỢNG CHO D&Acirc;Y CHUYỀN CỦA BẠN.<br />\r\nPhần g&oacute;t v&agrave; lồng lấy cảm hứng từ da rắn mang đến cho đ&ocirc;i gi&agrave;y chạy bộ adidas n&agrave;y một kiểu d&aacute;ng đẹp v&agrave; phong c&aacute;ch. Được thiết kế để mang lại sự thoải m&aacute;i hiệu suất cao khi chạy d&agrave;i hoặc ngắn, ch&uacute;ng c&oacute; lớp đệm đan ph&iacute;a tr&ecirc;n &ocirc;m s&aacute;t ch&acirc;n v&agrave; đ&aacute;p ứng.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/347/092/files/adidas-ultraboost-fx8933-01.jpg?v=1610169822908\" /></p>', NULL, NULL, 0, '2020-04-11 21:55:10', '2021-01-22 20:09:01'),
(49, 'Giày Adidas Nữ Chính Hãng - Ultraboost 4.0 DNA - Black/Gold', 'giay-adidas-nu-chinh-hang-ultraboost-40-dna-blackgold', 'uploads/product/1611371204_adidas-ultraboost-4-0-dna-fu7437-01.jpg', 20, 5100000, 2450000, 0, 1, 0, 0, 72, NULL, NULL, NULL, NULL, 9, 0, '<p>tt</p>', '<p><strong>Adidas&nbsp;Ultraboost 4.0 DNA&nbsp;FU7437&nbsp;</strong></p>\r\n\r\n<p>Được x&acirc;y dựng như một vận động vi&ecirc;n chạy hiệu suất cao, t&aacute;c động của Ultraboost c&ograve;n vượt xa việc chạy đến thế giới &acirc;m nhạc v&agrave; thời trang. Đ&ocirc;i gi&agrave;y adidas Ultraboost DNA n&agrave;y kết hợp kiểu d&aacute;ng đẹp, phong c&aacute;ch với những c&ocirc;ng nghệ ti&ecirc;n tiến để tạo ra một đ&ocirc;i gi&agrave;y bạn c&oacute; thể mang ở bất cứ đ&acirc;u. M&agrave;u đen đặc trưng Lớp đệm tăng cường mang đến cho ch&uacute;ng một bảng m&agrave;u đơn sắc v&agrave; 3 sọc kim loại lấp l&aacute;nh ở phần tr&ecirc;n đan co gi&atilde;n.<br />\r\nGi&agrave;y chạy h&agrave;ng ng&agrave;y với tinh thần của Ultraboost.<br />\r\nPh&ugrave; hợp thường xuy&ecirc;n<br />\r\nĐ&oacute;ng ren<br />\r\nadidas Primeknit tr&ecirc;n<br />\r\nCảm gi&aacute;c đăng nhập<br />\r\nGi&agrave;y chạy bộ th&iacute;ch ứng, trả lại năng lượng<br />\r\nĐế giữa của Tăng cường đ&aacute;p ứng<br />\r\nĐộ rơi của đế giữa: 10 mm (g&oacute;t: 29 mm, b&agrave;n ch&acirc;n trước: 19 mm)<br />\r\nĐế ngo&agrave;i Stretchweb bằng Cao su Continental &trade;<br />\r\nGi&agrave;y Ultraboost DNA.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/347/092/files/adidas-ultraboost-4-0-dna-fu7437-01.jpg?v=1610521374108\" /></p>', NULL, NULL, 0, '2020-04-11 21:56:11', '2021-01-22 20:06:44'),
(50, 'Giày Adidas Chính Hãng - UltraBOOST \"Triple Black Gold\" - Black', 'giay-adidas-chinh-hang-ultraboost-triple-black-gold-black', 'uploads/product/1611370976_adidas-ultraboost-f36123-01.jpg', 100, 5100000, 2980000, 0, 1, 0, 0, 72, NULL, NULL, NULL, NULL, 9, 0, '<p>TH&Ocirc;NG SỐ KỸ THUẬT</p>\r\n\r\n<p>Ph&ugrave; hợp thường xuy&ecirc;n</p>\r\n\r\n<p>Đ&oacute;ng ren adidas Primeknit dệt tr&ecirc;n</p>\r\n\r\n<p>Đế ngo&agrave;i Stretchweb linh hoạt;</p>\r\n\r\n<p>Đế ngo&agrave;i bằng cao su Continental &trade; cho lực k&eacute;o đặc biệt trong điều kiện kh&ocirc; v&agrave; ướt;</p>\r\n\r\n<p>Lồng b&agrave;n ch&acirc;n Đế giữa của Responsive Boost;</p>\r\n\r\n<p>Ổn định hệ thống xoắn Nhẹ v&agrave; th&iacute;ch ứng</p>\r\n\r\n<p>Trọng lượng: 266 g (cỡ UK 5.5)</p>\r\n\r\n<p>Độ rơi của đế giữa: 10 mm (g&oacute;t: 27,5 mm / b&agrave;n ch&acirc;n trước: 17,5 mm)</p>\r\n\r\n<p>Kiểu v&ograve;m: B&igrave;nh thường;</p>\r\n\r\n<p>G&oacute;t v&ograve;i để ph&ugrave; hợp kh&ocirc;ng hạn chế</p>\r\n\r\n<p>M&agrave;u sản phẩm: Đen l&otilde;i / Đen l&otilde;i / V&agrave;ng kim loại</p>\r\n\r\n<p>M&atilde; sản phẩm: F36123</p>', '<p><strong>Adidas&nbsp;UltraBOOST &quot;Triple Black Gold&quot;&nbsp;F36123</strong></p>\r\n\r\n<p>GI&Agrave;Y Đ&Aacute;P ỨNG ĐƯỢC CHO C&Aacute;C CUỘC CHẠY D&Agrave;I TR&Ecirc;N C&Aacute;C ĐƯỜNG TH&Agrave;NH PHỐ. H&atilde;y tận hưởng cảm gi&aacute;c tuyệt vời nhất tr&ecirc;n mỗi lần chạy. Đ&ocirc;i gi&agrave;y m&agrave;u trung t&iacute;nh n&agrave;y c&oacute; phần tr&ecirc;n đan co gi&atilde;n với hệ thống th&ocirc;ng gi&oacute; ở c&aacute;c v&ugrave;ng tiết mồ h&ocirc;i ch&iacute;nh gi&uacute;p bạn lu&ocirc;n m&aacute;t mẻ. Đệm ho&agrave;n trả năng lượng v&agrave; đế ngo&agrave;i linh hoạt kết hợp với nhau để mang đến cho bạn một chuyến đi &ecirc;m &aacute;i từ khi chạm v&agrave;o đến khi ho&agrave;n th&agrave;nh.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/347/092/files/adidas-ultraboost-f36123-01.jpg?v=1610772789635\" /></p>', NULL, NULL, 0, '2020-04-11 22:00:04', '2021-01-22 20:02:56'),
(51, 'Sandal Si Nam Biti\'s (Xám)', 'sandal-si-nam-bitis-xam', 'uploads/product/1609645665_dym007900xam__3__61a6593cd15549e0954cb62854437bfb_1024x1024.jpg', 10, 499000, 395000, 6, 1, 0, 0, 73, NULL, 'BS02', NULL, NULL, 0, 0, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 22:01:28', '2021-01-22 19:50:12'),
(53, 'Sandal Nam Biti\'s Hunter Blueberry (Trắng)', 'sandal-nam-bitis-hunter-blueberry-trang', 'uploads/product/1609645583_00400trg__5__035d98de1d4b421b8f9bcb82a826a284_1024x1024.jpg', 30, 600000, 456000, 7, 1, 0, 0, 73, NULL, 'BS01', NULL, NULL, 5, 0, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 22:04:50', '2021-01-22 19:50:03'),
(54, 'Giày Thể Thao Cao Cấp Nam Biti\'s Hunter Layered Upper (Trắng)', 'giay-the-thao-cao-cap-nam-bitis-hunter-layered-upper-trang', 'uploads/product/1609645443_02800trg__2__cbeb1cd1c19544dfa6c6ed7b8507f77f_1024x1024.jpg', 15, 990000, 899000, 5, 1, 0, 0, 73, 'https://www.youtube.com/watch?v=DsMm_rQW1bk', 'BH05', NULL, NULL, 15, 11, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 22:06:03', '2021-01-02 20:44:03'),
(55, 'Giày Thể Thao Nam Biti\'s Hunter Street x Vietmax 2020 - BST HaNoi Culture Patchwork Lake Turquoise DSMH02504XNG (Xanh Ngọc)', 'giay-the-thao-nam-bitis-hunter-street-x-vietmax-2020-bst-hanoi-culture-patchwork-lake-turquoise-dsmh02504xng-xanh-ngoc', 'uploads/product/1609644545_4_8e93f0ee3eac46fe90eb3800d0cc767a_1024x1024.jpg', 30, 1000000, 920000, 4, 1, 1, 0, 73, 'https://www.youtube.com/watch?v=DsMm_rQW1bk', 'BH04', NULL, NULL, 15, 0, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 22:06:55', '2021-01-02 20:29:05'),
(56, 'Giày Thể Thao Nam Biti\'s Hunter Street x Vietmax 2020 - BST HaNoi Culture Patchwork Old Wall Yellow DSMH02503NAU (Nâu)', 'giay-the-thao-nam-bitis-hunter-street-x-vietmax-2020-bst-hanoi-culture-patchwork-old-wall-yellow-dsmh02503nau-nau', 'uploads/product/1609644434_9_4af2a89ef6a8461184dda8b5339a0787_1024x1024.jpg', 20, 1100000, 899000, 3, 1, 1, 0, 73, NULL, 'BH03', NULL, NULL, 6, 11, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 22:07:48', '2021-01-02 20:27:25'),
(58, 'Giày Thể Thao Nam Biti\'s Hunter X Matcha DSMH03400XMN (Xanh Mi Nơ)', 'giay-the-thao-nam-bitis-hunter-x-matcha-dsmh03400xmn-xanh-mi-no', 'uploads/product/1609644185_dsmh03400xmn_2__9a0d374f3951459ea026f9e045694a39_1024x1024.jpg', 50, 1200000, 990000, 2, 1, 1, 0, 73, 'https://www.youtube.com/watch?v=DsMm_rQW1bk', 'BH02', NULL, NULL, 11, 8, '<p>fs</p>', '<p>fsd</p>', NULL, NULL, 0, '2020-09-18 05:27:05', '2021-01-02 20:23:05'),
(59, 'Giày Thể Thao Nam Biti\'s Hunter X Festive Aurora Black (xanh Dương)', 'giay-the-thao-nam-bitis-hunter-x-festive-aurora-black-xanh-duong', 'uploads/product/1609644031_dswh03401hod__7__ead78fcb663a44fd8b3a073831021d67_1024x1024.jpg', 100, 1100000, 999000, 1, 1, 1, 0, 73, 'https://www.youtube.com/watch?v=DsMm_rQW1bk', 'BH01', NULL, NULL, 7, 8, '<p>46456456</p>', '<p>4645645</p>', '4564645', '13123131', 0, '2020-12-02 07:42:56', '2021-01-02 20:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Manager'),
(2, 'Admin'),
(3, 'Guest'),
(4, 'Orthers');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company`, `address`, `address2`, `image1`, `phone`, `hotline`, `tax`, `facebook`, `email`, `introduce`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Công Ty TNHH Hoàng Vinh .co,ltd.', '68 Hai Bà Trưng, Trần Hưng Đạo, Hoàn Kiếm, Hà Nội', '180 Ngô Gia Tự, Đức Giang,Q.Long Biên, Hà Nội', 'uploads/setting/1606995841_79646497_1166494013544016_350024102158794752_n.jpg', '0886686728', '18001166', '000010', 'https://www.facebook.com/didongthongminh.vn/', 'admin@gmail.com', '13257467477', NULL, NULL, '2021-01-19 19:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `avatar`, `is_active`) VALUES
(2, 'Ngọc Hà', 'ngocha18082407@gmail.com', '2345678', '2345678', '2020-04-10 21:25:55', '2020-11-27 02:56:36', 1, 'upload/user/1606470996_79646497_1166494013544016_350024102158794752_n.jpg', 1),
(3, 'admin', 'admin@gmail.com', '$2y13213165', '$2y13213165', '2020-05-19 12:32:27', '2020-12-07 20:50:52', 1, 'upload/user/1607399452_79646497_1166494013544016_350024102158794752_n.jpg', 1),
(5, 'Ngô Văn Giang', 'giang22111998@gmail.com', '$2y$10$7naoxsB4sNU6Dk4zSuv8kO9H9Dwhl4sfFylYKqDMsMVgRG/XJlYEu', 'giang2211', '2020-12-07 19:33:47', '2020-12-07 19:33:47', 1, 'upload/user/1607394827_79646497_1166494013544016_350024102158794752_n.jpg', 0),
(17, 'Ngô Văn Toản', 'toan22111998@gmail.com', '$2y$10$PNiB2myA3kEPByU1DC7R0.6KuCqnJWwvfH4q9NtwwJB12TgiR1EXy', '$2y$10$FnJHe40mC3pYFBlh/YG7uOmJ8cMtVSnIEHfXha10e0b9c0YQDZh6a', '2020-12-07 20:08:21', '2020-12-07 20:08:21', 2, 'upload/user/1607396901_79646497_1166494013544016_350024102158794752_n.jpg', 0),
(18, 'Ngô Văn Tùng', 'tung22111998@gmail.com', '$2y$10$.so5IHUqGE4sncU.ncQmp.NX5iPvH7OzzaM0zL/dG4oFt/DXU7k0u', '$2y$10$LPpVogh6BRgn4U4n8u5OcOWN9i6CRIBJJQAMB6d.eb8C51Ewkb.VS', '2020-12-07 20:12:32', '2020-12-14 02:04:55', 2, 'upload/user/1607397152_110902579_1360971550762927_6170917337498932797_n.jpg', 0),
(19, 'Ngô Văn Tuấn', 'tuan22111998@gmail.com', '$2y$10$YHc0aDGLvtZUC9f0jxknh.Q214lYXdMq2lbkGyBqc/c6olrj5n54e', '$2y$10$9m.mFh0UcNsxtIrp7b5paeardLJoMeNbpu.vQLdeS/Ct3/5G4iMnW', '2020-12-07 21:09:30', '2020-12-07 21:09:30', 2, 'upload/user/1607400570_110902579_1360971550762927_6170917337498932797_n.jpg', 0),
(20, 'Ngô Văn Long', 'long22111998@gmail.com', '$2y$10$RR8X07IKVoYCcx5E6yoy3epAWIeCMnLBvblHcZDtjvFzyyDL5h/tm', 'giang1998', '2020-12-07 21:10:56', '2020-12-14 02:04:48', 2, 'upload/user/1607400656_110902579_1360971550762927_6170917337498932797_n.jpg', 0),
(22, 'Ngô Văn Gianggvdfgdfg', 'hao22111998@gmail.com', '$2y$10$0fpRXKSklAjSlciW/Ng7suWLlJ7q/tl.n9S/reyJdDqYemlip8kXe', NULL, '2020-12-07 23:42:58', '2020-12-14 02:04:37', 2, 'upload/user/1607409778_79646497_1166494013544016_350024102158794752_n.jpg', 0),
(23, 'Admin Chim Sẻ', 'giang1998@gmail.com', '$2y$10$2yWEJf0HTBR53Jy2NcPp/.BPashKZqf5O7JpusKXDZUbPQRgbJB/2', 'aGQzo57u25LJAvEqPJuj3yaw96CHezxhYrKwgTna70j95irDTlcNYeq5cEEQ', '2020-12-08 05:31:24', '2020-12-14 02:04:18', 1, 'upload/user/1607430684_79646497_1166494013544016_350024102158794752_n.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `slug`, `email`, `phone`, `image`, `website`, `address`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(7, 'Di Động Thông Minh', 'di-dong-thong-minh', NULL, '0945.722.268', NULL, 'https://didongthongminh.vn/', '119 Thái Thịnh, Thịnh Quang, Đống Đa, Hà Nội', 4, 1, '2020-03-22 20:54:05', '2020-03-22 20:54:05'),
(8, 'FPT Shop', 'fpt-shop', 'fptshop@fpt.com.vn', '1800 6601', 'uploads/vendor/1584935728_637133160350737542_201407171129187887_1378267132_fptshop-ver1-0-logo-color-bg-black.jpg', 'https://fptshop.com.vn/', 'Việt Nam', 5, 1, '2020-03-22 20:55:28', '2020-03-22 20:55:28'),
(9, 'Mac One', 'mac-one', 'lienhe@macone.vn', '0936096900', 'uploads/vendor/1584947052_xLogo-MacOne.png.pagespeed.ic.vtZRQ1sWEu.jpg', 'https://macone.vn/', '113 Hoàng Cầu, Q. Đống Đa, Hà Nội ( 68 Hoàng Cầu)', 6, 1, '2020-03-23 00:04:12', '2020-03-23 00:04:12'),
(10, 'Tiki', 'tiki', 'marketing@tiki.vn', '19006035', NULL, 'https://tiki.vn/', 'Ho Chi Minh City', 7, 1, '2020-03-23 00:31:28', '2020-03-23 00:31:28'),
(11, 'Khác', 'khac', NULL, NULL, NULL, NULL, NULL, 5, 1, '2020-04-11 21:53:06', '2020-04-11 21:53:06'),
(12, 'Samsung', 'samsung', 'admin@gmail.com', '0986468888', 'uploads/banner/1595254395_66zgg.png', 'samsung.com', 'Hàn Quốc', 0, 1, '2020-07-20 07:13:15', '2020-07-20 07:13:15'),
(13, 'Ngô Văn Giang', 'ngo-van-giang', 'giang22111998@gmail.com', '0336546633', 'upload/vendor/1605793972_79646497_1166494013544016_350024102158794752_n.jpg', 'https://laravel.com/docs/5.6/controllers', 'Cao Xá Thượng, Đức Thượng, Hoài Đức', 1, 1, '2020-11-19 06:52:52', '2020-11-26 04:40:59'),
(17, 'Ngô Văn Giang1', 'ngo-van-giang1', 'giang22111998@gmail.com', '0334383798', 'upload/vendor/1605794420_79646497_1166494013544016_350024102158794752_n.jpg', 'https://laravel.com/docs/5.6/controllers', 'Cao Xá Thượng, Đức Thượng, Hoài Đức', 1, 1, '2020-11-19 07:00:20', '2020-11-19 07:00:20'),
(18, 'Ngô Văn Giang1231231313', 'ngo-van-giang1231231313', 'giang22111998@gmail.com', '0334383798', 'upload/vendor/1606136161_79646497_1166494013544016_350024102158794752_n.jpg', 'https://laravel.com/docs/5.6/controllers', 'Cao Xá Thượng, Đức Thượng, Hoài Đức', 1, 1, '2020-11-23 05:56:01', '2020-11-23 05:56:01'),
(19, 'Ngô Văn Giangdáeqeqeqwewqweqweq', 'ngo-van-giangdaeqeqeqwewqweqweq', 'giang22111998@gmail.com', '0334383798', 'upload/vendor/1606224121_79646497_1166494013544016_350024102158794752_n.jpg', 'https://laravel.com/docs/5.6/controllers', 'Cao Xá Thượng, Đức Thượng, Hoài Đức', 1, 1, '2020-11-24 06:22:01', '2020-11-24 06:22:01'),
(21, 'Ngô Văn Giang2222222', 'ngo-van-giang2222222', 'giang22111998@gmail.com', '0336546633', 'upload/vendor/1606317694_79646497_1166494013544016_350024102158794752_n.jpg', 'https://laravel.com/docs/5.6/controllers', 'Số 5, Ngõ 63/9, Cao Xá 2, Đức Thượng, Hoài Đức, Hà Nội', 1, 1, '2020-11-25 08:15:23', '2020-11-25 08:22:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `banners_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `brands_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `categories_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `products_slug_index` (`slug`) USING BTREE,
  ADD KEY `name` (`name`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `vendors_slug_unique` (`slug`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
