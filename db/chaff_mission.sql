-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 06:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chaff_mission`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive , 1=active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `created_by`, `slug`, `heading`, `image`, `short_description`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'about', 'ABOUT', '22-04-27-213529.png', 'CHAFF MISSIONS LLC', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>', '1', NULL, '2022-04-27 16:35:29', '2022-04-28 12:25:06'),
(2, 1, 'welcome-to-company', 'WELCOME TO COMPANY', '22-05-04-220334.png', 'ABOUT CHAFF MISSION', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>', '1', NULL, '2022-05-04 17:03:34', '2022-05-04 17:03:34'),
(3, 1, 'duis-aute-irure-dolor', 'Duis aute irure dolor', '22-05-04-220440.png', 'SED UT PERSPICIATIS', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>', '1', NULL, '2022-05-04 17:04:40', '2022-05-04 17:04:40'),
(4, 1, '', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>', '1', NULL, '2022-05-04 17:08:38', '2022-05-04 17:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_free` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `created_by`, `category_slug`, `title`, `slug`, `description`, `post`, `paid_free`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, 'destiny-jarvis', 'test', 'test', '<p>test</p>', '22-04-2022-175647.php', 1, 1, '2022-04-22 17:56:52', '2022-04-22 12:56:47', '2022-04-22 12:56:52'),
(3, 1, 'destiny-jarvis', 'tests', 'tests', '<p>test22</p>', '22-04-2022-175647.php', 1, 1, NULL, '2022-04-22 12:56:47', '2022-04-22 13:07:48'),
(4, 1, 'quinn-burt', 'Aliquip ad ratione s', 'aliquip-ad-ratione-s', '<p>xxcxcxc</p>', '23-04-2022-003254.png', 1, 1, NULL, '2022-04-22 19:32:54', '2022-04-22 19:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `created_by`, `name`, `slug`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aiko Skinner', 'aiko-skinner', 'Et necessitatibus perferendis ea doloremque quia molestias dolore itaque dolor sed', 1, NULL, '2022-05-09 14:11:11', '2022-05-09 14:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive , 1=active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_by`, `name`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Property', 'property', '1', NULL, '2022-05-13 19:05:59', '2022-05-13 19:05:59'),
(2, 1, 'Rental', 'rental', '1', NULL, '2022-05-13 19:07:57', '2022-05-13 19:07:57'),
(3, 1, 'R.V', 'R.V', '1', NULL, '2022-05-13 19:09:25', '2022-05-13 19:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `deal_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deal_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive , 1=active',
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `created_by`, `deal_name`, `category`, `deal_product`, `price`, `status`, `start_date`, `end_date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'deal1', '1', '2', '80', '1', '16/05/2022', '25/05/2022', NULL, '2022-05-13 12:53:56', '2022-05-13 12:53:56'),
(2, 1, 'deal2', '1', '4', '80', '1', '16/05/2022', '26/05/2022', NULL, '2022-05-13 12:54:13', '2022-05-13 12:54:13'),
(3, 1, 'deal3', '1', '6', '80', '1', '17/05/2022', '27/05/2022', NULL, '2022-05-13 12:54:29', '2022-05-13 12:54:29'),
(4, 1, 'deal1', '2', '1', '90', '1', '18/05/2022', '25/05/2022', NULL, '2022-05-13 12:54:55', '2022-05-13 12:54:55'),
(5, 1, 'deal2', '2', '2', '90', '1', '18/05/2022', '25/05/2022', NULL, '2022-05-13 12:55:14', '2022-05-13 12:55:14'),
(6, 1, 'deal3', '2', '4', '90', '1', '18/05/2022', '25/05/2022', NULL, '2022-05-13 12:55:36', '2022-05-13 12:55:36'),
(7, 1, 'deal1', '3', '1', '70', '1', '18/05/2022', '30/05/2022', NULL, '2022-05-13 12:55:54', '2022-05-13 12:55:54'),
(8, 1, 'deal2', '3', '3', '70', '1', '15/05/2022', '28/05/2022', NULL, '2022-05-13 12:56:15', '2022-05-13 12:56:15'),
(9, 1, 'deal3', '3', '5', '70', '1', '16/05/2022', '28/05/2022', NULL, '2022-05-13 12:56:35', '2022-05-13 12:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive , 1=active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `created_by`, `category_id`, `slug`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'property1', '22-05-09-231120.png', '1', NULL, '2022-05-09 18:11:20', '2022-05-09 18:11:20'),
(2, 1, 1, 'property2', '22-05-09-231131.png', '1', NULL, '2022-05-09 18:11:31', '2022-05-09 18:11:31'),
(3, 1, 1, 'property3', '22-05-09-231140.png', '1', NULL, '2022-05-09 18:11:40', '2022-05-09 18:11:40'),
(4, 1, 1, 'property4', '22-05-09-231155.png', '1', NULL, '2022-05-09 18:11:55', '2022-05-09 18:11:55'),
(5, 1, 1, 'property5', '22-05-09-231207.png', '1', NULL, '2022-05-09 18:12:07', '2022-05-09 18:12:07'),
(6, 1, 1, 'property6', '22-05-09-231217.png', '1', NULL, '2022-05-09 18:12:17', '2022-05-09 18:12:17'),
(7, 1, 2, 'rental1', '22-05-09-231308.png', '1', NULL, '2022-05-09 18:13:08', '2022-05-09 18:13:08'),
(8, 1, 2, 'rental2', '22-05-09-231324.png', '1', NULL, '2022-05-09 18:13:24', '2022-05-09 18:13:24'),
(9, 1, 2, 'rental3', '22-05-09-231336.png', '1', NULL, '2022-05-09 18:13:36', '2022-05-09 18:13:36'),
(10, 1, 2, 'rental4', '22-05-09-231349.png', '1', NULL, '2022-05-09 18:13:49', '2022-05-09 18:13:49'),
(11, 1, 2, 'rental5', '22-05-09-231404.png', '1', NULL, '2022-05-09 18:14:04', '2022-05-09 18:14:04'),
(12, 1, 2, 'rental6', '22-05-09-231421.png', '1', NULL, '2022-05-09 18:14:21', '2022-05-09 18:14:21'),
(13, 1, 3, 'rvs1', '22-05-09-231541.jpg', '1', NULL, '2022-05-09 18:15:41', '2022-05-09 18:15:41'),
(14, 1, 3, 'rvs2', '22-05-09-231600.jpg', '1', NULL, '2022-05-09 18:16:00', '2022-05-09 18:16:00'),
(15, 1, 3, 'rvs3', '22-05-09-231634.jpg', '1', NULL, '2022-05-09 18:16:34', '2022-05-09 18:16:34'),
(16, 1, 3, 'rvs4', '22-05-09-231650.jpg', '1', NULL, '2022-05-09 18:16:50', '2022-05-09 18:16:50'),
(17, 1, 3, 'rvs5', '22-05-09-231703.jpg', '1', NULL, '2022-05-09 18:17:03', '2022-05-09 18:17:03'),
(18, 1, 3, 'rvs6', '22-05-09-231718.jpg', '1', NULL, '2022-05-09 18:17:18', '2022-05-09 18:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_06_183800_create_permission_tables', 1),
(6, '2014_10_12_000000_create_users_table', 2),
(8, '2022_04_07_181713_create_products_table', 3),
(12, '2022_04_20_195848_create_properties_table', 5),
(13, '2022_04_19_205847_create_vehicles_table', 6),
(14, '2022_03_09_150353_create_categories_table', 7),
(15, '2022_03_09_150337_create_blogs_table', 8),
(16, '2022_02_03_082236_create_testimonials_table', 9),
(18, '2022_04_25_174651_create_r_v_s_table', 10),
(19, '2022_04_25_211456_create_virtual_tours_table', 11),
(23, '2022_04_27_183505_create_about_us_table', 13),
(24, '2022_04_27_220336_create_car_rents_table', 14),
(25, '2022_04_27_220336_create_steps_of_rent_table', 15),
(26, '2022_02_03_080357_create_settings_table', 16),
(27, '2022_05_04_171218_create_news_letters_table', 17),
(29, '2022_05_09_174141_create_cetagories_table', 19),
(32, '2022_03_09_150353_create_blogcategories_table', 21),
(34, '2022_05_09_190227_blog_categories', 22),
(35, '2022_05_09_174141_create_categories_table', 23),
(36, '2022_04_26_181343_create_galleries_table', 24),
(40, '2022_05_11_213649_create_deals_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive , 1=active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_letters`
--

INSERT INTO `news_letters` (`id`, `name`, `email`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'ahmed@gmail.com', '1', NULL, '2022-05-04 17:44:15', '2022-05-04 17:44:15'),
(2, NULL, 'muzammil@gmail.com', '1', NULL, '2022-05-09 10:57:00', '2022-05-09 10:57:00'),
(3, NULL, 'MohammadMuzammil1810c@gmail.com', '1', NULL, '2022-05-09 11:56:20', '2022-05-09 11:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `permission`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'permission-list', 'web', 'list', NULL, '2022-04-22 14:29:13', '2022-04-22 14:29:13'),
(2, 'permission-create', 'web', 'create', NULL, '2022-04-22 14:29:13', '2022-04-22 14:29:13'),
(3, 'permission-edit', 'web', 'edit', NULL, '2022-04-22 14:29:13', '2022-04-22 14:29:13'),
(4, 'permission-delete', 'web', 'delete', NULL, '2022-04-22 14:29:13', '2022-04-22 14:29:13'),
(5, 'role-list', 'web', 'list', NULL, '2022-04-22 14:29:41', '2022-04-22 14:29:41'),
(6, 'role-create', 'web', 'create', NULL, '2022-04-22 14:29:41', '2022-04-22 14:29:41'),
(7, 'role-edit', 'web', 'edit', NULL, '2022-04-22 14:29:41', '2022-04-22 14:29:41'),
(8, 'role-delete', 'web', 'delete', NULL, '2022-04-22 14:29:41', '2022-04-22 14:29:41'),
(9, 'car-list', 'web', 'list', NULL, '2022-04-22 14:31:01', '2022-04-22 14:31:01'),
(10, 'car-create', 'web', 'create', NULL, '2022-04-22 14:31:01', '2022-04-22 14:31:01'),
(11, 'car-edit', 'web', 'edit', NULL, '2022-04-22 14:31:01', '2022-04-22 14:31:01'),
(12, 'car-delete', 'web', 'delete', NULL, '2022-04-22 14:31:01', '2022-04-22 14:31:01'),
(13, 'property-list', 'web', 'list', NULL, '2022-04-22 14:31:18', '2022-04-22 14:31:18'),
(14, 'property-create', 'web', 'create', NULL, '2022-04-22 14:31:18', '2022-04-22 14:31:18'),
(15, 'property-edit', 'web', 'edit', NULL, '2022-04-22 14:31:18', '2022-04-22 14:31:18'),
(16, 'property-delete', 'web', 'delete', NULL, '2022-04-22 14:31:18', '2022-04-22 14:31:18'),
(17, 'blog-list', 'web', 'list', NULL, '2022-04-22 14:33:20', '2022-04-22 14:33:20'),
(18, 'blog-create', 'web', 'create', NULL, '2022-04-22 14:33:20', '2022-04-22 14:33:20'),
(19, 'blog-edit', 'web', 'edit', NULL, '2022-04-22 14:33:20', '2022-04-22 14:33:20'),
(20, 'blog-delete', 'web', 'delete', NULL, '2022-04-22 14:33:20', '2022-04-22 14:33:20'),
(21, 'blog category-list', 'web', 'list', NULL, '2022-04-22 14:33:37', '2022-04-22 14:33:37'),
(22, 'blog category-create', 'web', 'create', NULL, '2022-04-22 14:33:37', '2022-04-22 14:33:37'),
(23, 'blog category-edit', 'web', 'edit', NULL, '2022-04-22 14:33:37', '2022-04-22 14:33:37'),
(24, 'blog category-delete', 'web', 'delete', NULL, '2022-04-22 14:33:37', '2022-04-22 14:33:37'),
(25, 'testimonial-list', 'web', 'list', NULL, '2022-04-22 19:35:59', '2022-04-22 19:35:59'),
(26, 'testimonial-create', 'web', 'create', NULL, '2022-04-22 19:35:59', '2022-04-22 19:35:59'),
(27, 'testimonial-edit', 'web', 'edit', NULL, '2022-04-22 19:35:59', '2022-04-22 19:35:59'),
(28, 'testimonial-delete', 'web', 'delete', NULL, '2022-04-22 19:35:59', '2022-04-22 19:35:59'),
(29, 'rv-list', 'web', 'list', NULL, '2022-04-25 12:36:36', '2022-04-25 12:36:36'),
(30, 'rv-create', 'web', 'create', NULL, '2022-04-25 12:36:37', '2022-04-25 12:36:37'),
(31, 'rv-edit', 'web', 'edit', NULL, '2022-04-25 12:36:37', '2022-04-25 12:36:37'),
(32, 'rv-delete', 'web', 'delete', NULL, '2022-04-25 12:36:37', '2022-04-25 12:36:37'),
(33, 'virtualtour-list', 'web', 'list', NULL, '2022-04-25 17:14:23', '2022-04-25 17:14:23'),
(34, 'virtualtour-create', 'web', 'create', NULL, '2022-04-25 17:14:23', '2022-04-25 17:14:23'),
(35, 'virtualtour-edit', 'web', 'edit', NULL, '2022-04-25 17:14:23', '2022-04-25 17:14:23'),
(36, 'virtualtour-delete', 'web', 'delete', NULL, '2022-04-25 17:14:23', '2022-04-25 17:14:23'),
(37, 'gallery-list', 'web', 'list', NULL, '2022-04-26 15:59:02', '2022-04-26 15:59:02'),
(38, 'gallery-create', 'web', 'create', NULL, '2022-04-26 15:59:02', '2022-04-26 15:59:02'),
(39, 'gallery-edit', 'web', 'edit', NULL, '2022-04-26 15:59:02', '2022-04-26 15:59:02'),
(40, 'gallery-delete', 'web', 'delete', NULL, '2022-04-26 15:59:02', '2022-04-26 15:59:02'),
(41, 'about-list', 'web', 'list', NULL, '2022-04-27 15:28:41', '2022-04-27 15:28:41'),
(42, 'about-create', 'web', 'create', NULL, '2022-04-27 15:28:41', '2022-04-27 15:28:41'),
(43, 'about-edit', 'web', 'edit', NULL, '2022-04-27 15:28:41', '2022-04-27 15:28:41'),
(44, 'about-delete', 'web', 'delete', NULL, '2022-04-27 15:28:41', '2022-04-27 15:28:41'),
(45, 'car_rent-list', 'web', 'list', NULL, '2022-04-27 19:44:23', '2022-04-27 19:44:23'),
(46, 'car_rent-create', 'web', 'create', NULL, '2022-04-27 19:44:23', '2022-04-27 19:44:23'),
(47, 'car_rent-edit', 'web', 'edit', NULL, '2022-04-27 19:44:23', '2022-04-27 19:44:23'),
(48, 'car_rent-delete', 'web', 'delete', NULL, '2022-04-27 19:44:23', '2022-04-27 19:44:23'),
(49, 'page-list', 'web', 'list', NULL, '2022-04-28 20:12:47', '2022-04-28 20:12:47'),
(50, 'page-create', 'web', 'create', NULL, '2022-04-28 20:12:47', '2022-04-28 20:12:47'),
(51, 'page-edit', 'web', 'edit', NULL, '2022-04-28 20:12:47', '2022-04-28 20:12:47'),
(52, 'page-delete', 'web', 'delete', NULL, '2022-04-28 20:12:47', '2022-04-28 20:12:47'),
(53, 'newsletter-list', 'web', 'list', NULL, '2022-05-04 13:24:30', '2022-05-04 13:24:30'),
(54, 'newsletter-create', 'web', 'create', NULL, '2022-05-04 13:24:30', '2022-05-04 13:24:30'),
(55, 'newsletter-edit', 'web', 'edit', NULL, '2022-05-04 13:24:30', '2022-05-04 13:24:30'),
(56, 'newsletter-delete', 'web', 'delete', NULL, '2022-05-04 13:24:30', '2022-05-04 13:24:30'),
(57, 'categories-list', 'web', 'list', NULL, '2022-05-09 14:39:47', '2022-05-09 14:39:47'),
(58, 'categories-create', 'web', 'create', NULL, '2022-05-09 14:39:47', '2022-05-09 14:39:47'),
(59, 'categories-edit', 'web', 'edit', NULL, '2022-05-09 14:39:47', '2022-05-09 14:39:47'),
(60, 'categories-delete', 'web', 'delete', NULL, '2022-05-09 14:39:47', '2022-05-09 14:39:47'),
(61, 'deals-list', 'web', 'list', NULL, '2022-05-11 17:01:54', '2022-05-11 17:01:54'),
(62, 'deals-create', 'web', 'create', NULL, '2022-05-11 17:01:54', '2022-05-11 17:01:54'),
(63, 'deals-edit', 'web', 'edit', NULL, '2022-05-11 17:01:54', '2022-05-11 17:01:54'),
(64, 'deals-delete', 'web', 'delete', NULL, '2022-05-11 17:01:54', '2022-05-11 17:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `draw_ends` date NOT NULL,
  `min_competition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_competition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_winners` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive,1= active,2= sold out',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bathroom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` bigint(20) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive , 1=active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `created_by`, `slug`, `name`, `image`, `short_description`, `description`, `room`, `bed`, `bathroom`, `price`, `rating`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'lorem-ipsum-dolor-sit-amet', 'Lorem Ipsum Dolor Sit Amet', '20220511193205.png', 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '4', '4', '2', '100', NULL, '1', NULL, '2022-05-11 14:32:05', '2022-05-11 14:32:05'),
(2, 1, 'lorem-ipsum-dolor-sit-amet', 'Lorem Ipsum Dolor Sit Amet', '20220511193235.png', 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', '4', '4', '2', '100', NULL, '1', NULL, '2022-05-11 14:32:35', '2022-05-11 14:32:35'),
(3, 1, 'lorem-ipsum-dolor-sit-amet', 'Lorem Ipsum Dolor Sit Amet', '20220511193316.png', 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '4', '4', '2', '100', NULL, '1', NULL, '2022-05-11 14:33:16', '2022-05-11 14:33:16'),
(4, 1, 'lorem-ipsum-dolor-sit-amet', 'Lorem Ipsum Dolor Sit Amet', '20220511193355.png', 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '4', '4', '2', '100', NULL, '1', NULL, '2022-05-11 14:33:55', '2022-05-11 14:33:55'),
(5, 1, 'lorem-ipsum-dolor-sit-amet', 'Lorem Ipsum Dolor Sit Amet', '20220511193423.png', 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '4', '4', '2', '100', NULL, '1', NULL, '2022-05-11 14:34:23', '2022-05-11 14:34:23'),
(6, 1, 'lorem-ipsum-dolor-sit-amet', 'Lorem Ipsum Dolor Sit Amet', '20220511193455.png', 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '4', '4', '2', '100', NULL, '1', NULL, '2022-05-11 14:34:55', '2022-05-11 14:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seat` bigint(20) DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive, 1= active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `created_by`, `slug`, `name`, `image`, `rent`, `seat`, `short_description`, `description`, `color`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'range-rover', 'Range Rover', '20220511195331.png', '100', 5, 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', NULL, '1', NULL, '2022-05-11 14:51:26', '2022-05-11 14:53:31'),
(2, 1, 'range-rover', 'Range Rover', '20220511195148.png', '100', 5, 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', NULL, '1', NULL, '2022-05-11 14:51:48', '2022-05-11 14:51:48'),
(3, 1, 'range-rover', 'Range Rover', '20220511195225.png', '100', 5, 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', NULL, '1', NULL, '2022-05-11 14:52:25', '2022-05-11 14:52:25'),
(4, 1, 'range-rover', 'Range Rover', '20220511195315.png', '100', 5, 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', NULL, '1', NULL, '2022-05-11 14:53:15', '2022-05-11 14:53:15'),
(5, 1, 'range-rover', 'Range Rover', '20220511195357.png', '100', 5, 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', NULL, '1', NULL, '2022-05-11 14:53:57', '2022-05-11 14:53:57'),
(6, 1, 'range-rover', 'Range Rover', '20220511195429.png', '100', 5, 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', NULL, '1', NULL, '2022-05-11 14:54:29', '2022-05-11 14:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', NULL, NULL, '2022-04-06 14:41:39', '2022-04-06 14:41:39'),
(2, 'User', 'web', NULL, NULL, '2022-04-22 14:46:54', '2022-04-22 14:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1);

-- --------------------------------------------------------

--
-- Table structure for table `r_v_s`
--

CREATE TABLE `r_v_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat` int(11) DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive, 1= active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `r_v_s`
--

INSERT INTO `r_v_s` (`id`, `created_by`, `slug`, `name`, `price`, `seat`, `short_description`, `description`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'range-rover', 'Range Rover', '100', 5, 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '11-05-2022-201337.jpg', '1', NULL, '2022-05-11 15:13:37', '2022-05-11 15:13:37'),
(2, 1, 'range-rover', 'Range Rover', '100', 5, 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '11-05-2022-201405.jpg', '1', NULL, '2022-05-11 15:14:05', '2022-05-11 15:14:05'),
(3, 1, 'range-rover', 'Range Rover', '100', 5, 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<div class=\"dealz-box-description\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n</div>', '11-05-2022-201441.jpg', '1', NULL, '2022-05-11 15:14:41', '2022-05-11 15:14:41'),
(4, 1, 'range-rover', 'Range Rover', '100', 5, 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<div class=\"dealz-box-description\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n</div>', '11-05-2022-201615.jpg', '1', NULL, '2022-05-11 15:16:15', '2022-05-11 15:16:15'),
(5, 1, 'range-rover', 'Range Rover', '100', 5, 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '11-05-2022-201813.jpg', '1', NULL, '2022-05-11 15:18:13', '2022-05-11 15:18:13'),
(6, 1, 'range-rover', 'Range Rover', '100', 5, 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '11-05-2022-201842.jpg', '1', NULL, '2022-05-11 15:18:42', '2022-05-11 15:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_bar_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_bar_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_col1_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_col2_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_col3_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_col4_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_copyright` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_recent_news_item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_recent_portfolio_item` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsletter_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_button_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_button_url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_background_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_email_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_email_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_total_recent_post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_news_heading_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_news_heading_recent_post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_total_upcoming_event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_total_past_event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_event_heading_upcoming` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_event_heading_past` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_service_heading_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_service_heading_quick_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_portfolio_heading_project_detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_portfolio_heading_quick_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_end_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `steps_of_rents`
--

CREATE TABLE `steps_of_rents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive , 1=active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `steps_of_rents`
--

INSERT INTO `steps_of_rents` (`id`, `created_by`, `slug`, `heading`, `image`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, 'date-location', 'Date & location', '22-04-28-182510.png', '<p>Pick the location &amp; the needed rent date</p>', '1', NULL, '2022-04-28 13:25:10', '2022-04-28 13:25:10'),
(3, 1, 'chose-a-car', 'Chose a car', '22-04-28-182540.png', '<p>Select the vehcle using over catogeus</p>', '1', NULL, '2022-04-28 13:25:40', '2022-04-28 13:25:40'),
(4, 1, 'make-a-booking', 'Make a booking', '22-04-28-182622.png', '<p>Enter your name &amp; booking deatial</p>', '1', NULL, '2022-04-28 13:26:22', '2022-04-28 13:26:22'),
(5, 1, 'enjoy-your-rides', 'Enjoy your rides!', '22-04-28-182709.png', '<p>Enter your trip and our good services</p>', '1', NULL, '2022-04-28 13:27:09', '2022-04-28 13:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `slug`, `designation`, `image`, `comment`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'JOHN SMITH', 'john-smith', 'CLIENT', '27-04-2022-010605.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesettingi s industry. dummy text ever since the 1500</p>', 1, NULL, '2022-04-26 20:06:05', '2022-04-26 20:06:05'),
(2, 'JOHN SMITH', 'john-smith', 'CLIENT', '27-04-2022-010644.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesettingi s industry. dummy text ever since the 1500</p>', 1, NULL, '2022-04-26 20:06:44', '2022-04-26 20:06:44'),
(3, 'JOHN SMITH', 'john-smith', 'CLIENT', '27-04-2022-010718.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesettingi s industry. dummy text ever since the 1500</p>', 1, NULL, '2022-04-26 20:07:18', '2022-04-26 20:07:18'),
(4, 'JOHN SMITH', 'john-smith', 'CLIENT', '27-04-2022-010739.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesettingi s industry. dummy text ever since the 1500</p>', 1, NULL, '2022-04-26 20:07:39', '2022-04-26 20:07:39'),
(5, 'JOHN SMITH', 'john-smith', 'CLIENT', '27-04-2022-010802.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesettingi s industry. dummy text ever since the 1500</p>', 1, NULL, '2022-04-26 20:08:02', '2022-04-26 20:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Hardik', 'admin@gmail.com', NULL, '$2y$10$gsLTUkAldg8nh.d3O57i1uldcyFs1gTT/gDFFE.MrJmAoS4JG6api', NULL, NULL, '2022-04-06 14:56:13', '2022-04-06 14:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `virtual_tours`
--

CREATE TABLE `virtual_tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive, 1= active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `virtual_tours`
--

INSERT INTO `virtual_tours` (`id`, `created_by`, `slug`, `name`, `description`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'discover-a-virtual-tour', 'DISCOVER A VIRTUAL TOUR', '<p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type scrambled standard dummy text ever since the<br />1500, when an unknown printer took a galley of</p>', NULL, '1', NULL, '2022-04-26 17:11:29', '2022-04-26 17:11:29'),
(2, 1, '', NULL, NULL, '26-04-2022-222122.png', '1', NULL, '2022-04-26 17:21:22', '2022-04-26 17:21:22'),
(3, 1, '', NULL, NULL, '26-04-2022-222147.png', '1', NULL, '2022-04-26 17:21:47', '2022-04-26 17:21:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `r_v_s`
--
ALTER TABLE `r_v_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steps_of_rents`
--
ALTER TABLE `steps_of_rents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `virtual_tours`
--
ALTER TABLE `virtual_tours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `r_v_s`
--
ALTER TABLE `r_v_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `steps_of_rents`
--
ALTER TABLE `steps_of_rents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `virtual_tours`
--
ALTER TABLE `virtual_tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
