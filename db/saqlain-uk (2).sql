-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 06:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saqlain-uk`
--

-- --------------------------------------------------------

--
-- Table structure for table `express_shippings`
--

CREATE TABLE `express_shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notify_party` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notify_party_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_recpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_of_loading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vessel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voy_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_delivery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seal_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numbers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_pkg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_of_good` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gross_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `measurments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_no_of_pkg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_board_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `B_L_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freight_prepaid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_recpt_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carrier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive , 1=active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `express_shippings`
--

INSERT INTO `express_shippings` (`id`, `shipper`, `consignee`, `notify_party`, `notify_party_2`, `place_of_recpt`, `port_of_loading`, `vessel`, `voy_no`, `place_of_delivery`, `item_no`, `container_no`, `seal_no`, `marks`, `numbers`, `number_of_pkg`, `desc_of_good`, `gross_weight`, `measurments`, `total_no_of_pkg`, `shipped_board_date`, `place_of_issue`, `date_of_issue`, `B_L_no`, `freight_prepaid`, `place_of_recpt_2`, `carrier`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Cumque modi corporis123', 'Enim odit rem consec123', 'Reprehenderit aut r123', 'Velit voluptatem Qu123', 'Omnis reiciendis dui123', 'Officiis adipisci co 123', 'Repudiandae sunt aut123', 'Architecto quae alia123', 'Accusamus soluta del123', 'Ipsam in quaerat sun123', 'Eveniet minima volu123', 'Delectus deleniti m123', 'Dignissimos id duis123', '365123', 'Inventore accusantiu123', 'In autem officia ass 123', 'Natus nobis voluptat123', 'Consequatur Unde ut123', 'Excepteur quae id i123', '05-11-2023', 'Adipisci proident v', '05-12-2023', 'Qui velit molestiae123', 'Voluptates est sit123', 'Quibusdam et veniam123', 'Reprehenderit earum123', '1', '2023-05-22 17:44:19', '2023-05-22 11:52:37', '2023-05-22 12:44:19'),
(2, 'Cillum blanditiis co', 'Labore quasi rerum e', 'Nisi animi ipsum a', 'Error vel laborum I', 'Neque dignissimos cu', 'Nihil rerum impedit', 'Maiores officia cumq', 'Est sed sint dolorem', 'Enim repudiandae adi', 'Ut iste facere aliqu', 'Quia fugiat veritati', 'Quos quia aut porro', 'Blanditiis sint est', '318', 'Id temporibus quasi', 'Est numquam ratione', 'Est ut nostrum molli', 'Reprehenderit at qui', 'Iusto laboriosam qu', '08-10-2023', 'Laborum Illo deleni', '01-01-3025', 'Libero repellendus', 'Aut sunt minima ad s', 'Temporibus et archit', 'Possimus duis quaer', '1', '2023-05-22 20:38:45', '2023-05-22 12:35:42', '2023-05-22 15:38:45'),
(3, 'Ab quaerat eius moledfdsgf34234', 'Commodo quaerat quidfgdf234234', 'Culpa vitae repudia234234', 'Temporibus magnam su234234', 'Enim dolor laboriosa234', 'Et veniam fuga Aut 234234', 'Quam cupidatat aperi234234', 'Nihil debitis quae s234', 'Deserunt laborum et234234', 'Consequat Adipisci234', 'Autem eaque officiis234', 'Molestias dolorum do234234', 'Obcaecati ut ullamco234', '446234', 'Ad sint omnis earum23423', 'Voluptatum sed eaque 23424', 'Voluptates amet et234', 'Sapiente deleniti m234a234', 'Ipsum aut necessita234234', '01-21-1970', 'Reprehenderit elit234', '01-27-1970', 'Ut aperiam molestiae234', 'Nostrud veritatis es234', 'Dolor eu rerum in do234', 'Quia nemo veniam vo234234', '1', NULL, '2023-05-22 15:37:54', '2023-05-22 15:38:35');

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
-- Table structure for table `mass_shippings`
--

CREATE TABLE `mass_shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notify_party` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notify_party_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vessel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_recpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_of_loading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `B_L_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_of_discharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_delivery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numbers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_pkg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_of_good` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gross_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `measurments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_container_or_pkg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_cont_isnt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_board_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_orignal_B_L` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_term` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signed_carrier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive , 1=active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mass_shippings`
--

INSERT INTO `mass_shippings` (`id`, `shipper`, `consignee`, `notify_party`, `notify_party_2`, `delivery_agent`, `vessel`, `place_of_recpt`, `port_of_loading`, `B_L_no`, `port_of_discharge`, `place_of_delivery`, `numbers`, `number_of_pkg`, `desc_of_good`, `gross_weight`, `measurments`, `total_container_or_pkg`, `temp_cont_isnt`, `shipped_board_date`, `no_of_orignal_B_L`, `payment_term`, `date_of_issue`, `place_of_issue`, `total_amount`, `signed_carrier`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Et quia velit sequi', 'Iste eaque facilis p', 'Provident deserunt', 'Dolorem blanditiis v', 'Doloribus aut non de', 'Dolores illo ea maxi', 'Est esse ut non occa', 'Qui earum quia fugit', 'Ut aut sed cumque es', 'Aspernatur cumque de', 'Vel odio quis commod', 'Velit est incididun', 'Non odit autem natus', 'Ut voluptatem unde', 'Dolor expedita ut vo', 'Odio accusantium ani', 'Fugiat anim cillum', 'Voluptatibus dolor d', NULL, 'Quis modi quo velit', 'Eius esse deserunt v', '01-01-1970', 'Ipsum nesciunt eaqu', 'Pariatur A iure off', 'Voluptates natus tem', '1', '2023-05-23 16:38:13', '2023-05-23 11:37:23', '2023-05-23 11:38:13'),
(2, 'Illum velit volupta', 'Numquam irure dolor', 'Earum ipsam quaerat', 'Sint Nam quis aliqua', 'Veniam qui sunt eli', 'Lorem reprehenderit', 'Consequatur Et anim', 'Suscipit id quis per', 'Suscipit tenetur nat', 'Vitae excepteur maxi', 'Saepe consectetur m', 'Aut voluptas volupta', 'Dicta beatae maiores', 'Ut beatae aut pariat', 'Ipsum temporibus ir', 'Id quia doloribus e', 'Dolorum suscipit tem', 'Autem cillum enim co', '24-Jul-1972', 'Odit consequatur lor', 'Eum minus quis iure', '12-17-1987', 'Ipsum error dolorem', 'Mollit excepturi qua', 'Eos quas voluptatib', '1', '2023-05-23 16:42:15', '2023-05-23 11:38:22', '2023-05-23 11:42:15'),
(3, 'Nulla facilis iusto', 'Odio esse eum volup', 'Dolores veritatis eu', 'Aut commodi inventor', 'Est quam do quia ab', 'Id quam Nam reprehen', 'Sit qui et est magn', 'Est eu tenetur quide', 'Porro a reprehenderi', 'Quia quis dolores es', 'Ab quae in vel sed c', 'Natus asperiores qui', 'Necessitatibus culpa', 'Inventore commodo co', 'Ut accusamus rerum i', 'Non quis cupiditate', 'Labore dignissimos n', 'Accusamus qui possim', '28-Nov-1996', 'Omnis veniam fugit', 'Beatae et veniam ev', '11-02-2015', 'Quibusdam quos eu qu', 'Nulla modi qui quo m', 'Similique ullamco ve', '1', NULL, '2023-05-23 11:38:28', '2023-05-23 11:38:28'),
(4, 'Eos ut corporis veli', 'Officia non odio cul', 'Sapiente sit ut qui', 'Distinctio Sint ut', 'Dolore nihil totam q', 'Aliquid culpa nulla', 'Quo dolore ipsa qui', 'Nam unde magni animi', 'Ut ad magni laboris', 'Lorem adipisicing ve', 'Ut aut voluptates te', 'Quis neque repudiand', 'Possimus et ipsam p', 'Reprehenderit aut el', 'Est qui officia eum', 'Iste iste enim incid', 'Culpa et molestiae', 'Aut eius nisi eiusmo', '09-Jul-2017', 'Saepe delectus comm', 'Deserunt magni volup', '12-26-2002', 'Exercitationem recus', 'Voluptates debitis u', 'Magna quasi sunt sin', '1', NULL, '2023-05-23 11:38:34', '2023-05-23 11:38:34'),
(5, 'Harum perspiciatis', 'Est inventore eos au', 'Explicabo Sunt sit', 'Ad doloremque delect', 'Ipsam excepteur quis', 'Voluptatem expedita', 'Repellendus Sed omn', 'Expedita harum in ve', 'Minima quo in eaque', 'Est velit fugit et', 'Voluptas labore exce', 'Sed ab aute est ea e', 'Omnis voluptatem ni', 'Optio fuga Quis di', 'Quis modi cumque ill', 'Quidem odit quae vel', 'Cillum harum iure vo', 'Nihil est reprehend', '12-May-1989', 'Omnis sed mollitia e', 'Ullamco elit fugiat', '09-17-1972', 'Magna quae voluptas', 'Mollit sunt sed sapi', 'Facere qui blanditii', '1', NULL, '2023-05-23 11:38:40', '2023-05-23 11:38:40'),
(6, 'Assumenda commodo el', 'Voluptate laboris la', 'Ipsa quisquam lauda', 'Dolor fugit nihil n', 'Qui omnis dolor sapi', 'Enim quia odit lauda', 'Reiciendis laudantiu', 'Nemo rerum voluptas', 'Et sit ut earum rati', 'Ea reiciendis nihil', 'Aute dolores debitis', 'Quia sint repudiand', 'Sed unde amet delec', 'Ea voluptas consequa', 'Autem velit deleniti', 'Quia est sunt deser', 'Do modi nobis non et', 'Voluptatibus dolorum', '03-Apr-1973', 'Qui ut vel delectus', 'Itaque quasi magna e', '09-29-1997', 'Excepteur non sed no', 'Minima autem esse v', 'Obcaecati pariatur', '1', NULL, '2023-05-23 11:38:46', '2023-05-23 11:38:46'),
(7, 'Nostrum perspiciatis', 'Ex praesentium ut ei', 'Mollitia commodi ips', 'Et et atque sed pari', 'Nobis repudiandae es', 'Ex dolor ad doloribu', 'Laborum reprehenderi', 'Quae excepteur incid', 'Sit aut perspiciati', 'Numquam doloremque o', 'Dicta voluptas ab al', 'Est consequatur Qu', 'Non magnam a illum', 'Deserunt anim nulla', 'Aute aliqua Quos do', 'Praesentium quas ess', 'Aut Nam sunt veniam', 'Sapiente illum nisi', '15-Mar-2001', 'Sapiente ipsum ut s', 'Laborum Molestiae a', '06-09-2006', 'Eveniet amet sint', 'Laborum Ut quas fac', 'Quisquam corrupti i', '1', NULL, '2023-05-23 11:38:53', '2023-05-23 11:38:53'),
(8, 'Est excepturi delec', 'Possimus ducimus t', 'Consequatur Volupta', 'Labore in adipisci q', 'Enim excepteur iusto', 'Consequat Non enim', 'Fugiat et qui recus', 'Aliquip quia sunt no', 'Maxime illum reicie', 'Ullamco amet sit m', 'Duis quia ut quis vo', 'Et voluptatibus exce', 'Illum natus ipsum a', 'Similique sit asper', 'Velit et in adipisc', 'Quisquam nihil labor', 'Laboriosam aperiam', 'Quis deleniti recusa', '02-Jun-1983', 'Autem expedita et mo', 'Tenetur eum aliquam', '03-15-2013', 'Unde earum proident', 'Iure error debitis s', 'Quia cum sed nihil b', '1', NULL, '2023-05-23 11:38:58', '2023-05-23 11:38:58'),
(9, 'Voluptatum laboriosa', 'Sed id molestiae vo', 'Inventore eius delec', 'Aut sint iste venia', 'Qui ut tempor enim c', 'Fugiat sunt earum', 'Quas eum nulla do ra', 'Aspernatur ut est ad', 'Vitae debitis dicta', 'Et qui assumenda com', 'Quo in sit laudantiu', 'Cupiditate laudantiu', 'Fuga Temporibus nos', 'Voluptas laboriosam', 'Reiciendis quaerat s', 'Nam sapiente laborum', 'Culpa et ab officia', 'Rerum quaerat possim', '24-Aug-2004', 'Sapiente dolor perfe', 'Consequatur ea cons', '04-24-1995', 'Nostrud in quia in p', 'Accusantium temporib', 'Molestiae optio omn', '1', NULL, '2023-05-23 11:39:04', '2023-05-23 11:39:04'),
(10, 'Adipisci quis enim p', 'Vitae adipisci sint', 'Quo ea irure reprehe', 'Dignissimos eaque er', 'Deserunt lorem aliqu', 'Velit dolorem invent', 'Labore anim nostrud', 'Magnam eaque magni c', 'Necessitatibus conse', 'Aliquid impedit eni', 'Ipsam non iure conse', 'Quia eos proident', 'Irure sit autem nesc', 'Nulla inventore dele', 'Duis in aspernatur p', 'Exercitationem dolor', 'Exercitationem ullam', 'Tempor cum sit sit', '06-Oct-1996', 'Aut impedit autem v', 'Aut molestias asperi', '01-25-2012', 'Aliquid est consequa', 'Facere voluptate pro', 'Est amet voluptatum', '1', NULL, '2023-05-23 11:39:11', '2023-05-23 11:39:11'),
(11, 'Alias voluptatem des', 'Ullam doloremque rer', 'Laudantium occaecat', 'Exercitation officii', 'In maiores amet rer', 'Dolores et nostrum v', 'Exercitation amet n', 'In quis veritatis ea', 'Et voluptas exercita', 'Non ut atque quo ame', 'Non consequuntur com', 'Voluptatem facere u', 'Quo in occaecat ea i', 'Qui tempora nisi cor', 'Labore ad quisquam a', 'Accusantium providen', 'Autem nisi minim mol', 'Elit repudiandae om', '05-May-2001', 'Sit et qui est aute', 'Sit aut explicabo D', '02-03-1975', 'Quis nulla recusanda', 'Et tempora et vitae', 'Quia pariatur Expli', '1', NULL, '2023-05-23 11:39:29', '2023-05-23 11:39:29'),
(12, 'Error rerum rem nihi123', 'Inventore consequat123', 'Soluta nostrum iste123', 'Cum eiusmod dolores123', 'In dolorum ut magni123', 'Totam vel aut enim d123', 'Dolorem ut et eum nu123', 'Sint voluptate qui s 123', 'Harum laboris reicie123', 'Aut nemo duis volupt123', 'Nam expedita qui nos123', 'Elit quis qui tempo123', 'Deserunt similique d123', 'Velit a voluptatum e123', 'Illum suscipit dese123', 'Consequatur est cum123', 'Culpa id rem offici123', 'Labore sed quod dolo123', '10-08-2025', 'Perspiciatis necess123', 'Fugiat nulla blandit123', '10-08-2026', 'Et vel quam nihil ve123', 'Blanditiis velit ut123', 'Dolor perferendis au123', '0', '2023-05-23 20:56:52', '2023-05-23 11:39:37', '2023-05-23 15:56:52'),
(13, 'Qui quia aliquid dol', 'Velit sit esse exce', 'Laboris voluptatum v', 'Laborum Qui officia', 'Dignissimos exercita', 'Quia sunt ut est qu', 'Laboriosam rem aute', 'Praesentium praesent', 'Est commodi cupidat', 'Consequatur labore p', 'Doloribus autem dolo', 'Atque laboris quas i', 'Aut laborum enim lab', 'Quo sit voluptas do', 'Atque illo adipisci', 'Omnis vero et quasi', 'Officiis quia volupt', 'Optio esse quam la', '05-11-1971', 'Assumenda Nam adipis', 'Aut quas nisi ut acc', '11-08-1981', 'Voluptate voluptas e', 'Cum ipsum libero qu', 'Consequuntur rerum o', '1', NULL, '2023-05-23 17:09:16', '2023-05-23 17:09:16');

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
(40, '2022_05_11_213649_create_deals_table', 25),
(45, '2022_03_14_084656_create_pages_table', 30),
(46, '2022_03_14_143426_create_page_settings_table', 31),
(49, '2022_05_17_200135_create_products_table', 34),
(50, '2022_05_17_200819_create_product_details_table', 35),
(52, '2022_05_17_201443_create_product_images_table', 36),
(54, '2022_05_09_174141_create_categories_table', 38),
(55, '2022_05_09_174141_create_car_types_table', 39),
(56, '2022_04_27_220336_create_how_to_rents_table', 40),
(57, '2022_05_18_192740_create_cities_table', 41),
(58, '2022_05_18_193028_create_states_table', 42),
(61, '2022_05_17_184901_create_bookings_table', 44),
(62, '2022_05_18_203240_create_appointments_table', 45),
(63, '2022_05_18_194530_create_pick_drop_locations_table', 46),
(66, '2022_05_16_180452_create_payments_table', 47),
(67, '2022_05_23_172759_create_payment_details_table', 48),
(68, '2022_06_10_230308_create_our_locations_table', 49),
(70, '2022_04_20_195848_create_properties_table', 50),
(72, '2022_08_02_154123_create_properties_details_table', 52),
(79, '2022_07_30_003954_create_agents_table', 54),
(80, '2014_10_12_000000_create_users_table', 55),
(82, '2022_08_12_164939_create_properties_areas_table', 56),
(84, '2022_05_18_190010_create_contacts_table', 57),
(85, '2022_08_22_183555_create_client_contacts_table', 58),
(93, '2022_09_06_170412_create_home_browse_table', 59),
(94, '2022_10_06_161808_create_home_sliders_table', 60),
(95, '2022_10_07_205942_create_our_services_table', 61),
(96, '2022_04_26_181343_create_galleries_table', 62),
(97, '2022_05_30_171946_create_gallery_details_table', 63),
(98, '2022_10_24_181813_create_bookings_table', 64),
(99, '2022_10_26_160340_create_packages_table', 65),
(100, '2022_09_20_164856_create_leeds_table', 66),
(103, '2023_05_18_231449_create_paragon_logistics_table', 67),
(104, '2023_05_19_233156_create_express_shippings_table', 68),
(105, '2023_05_22_211211_create_skyway_shippings_table', 69),
(106, '2023_05_22_205237_create_mass_shippings_table', 70),
(107, '2023_05_22_205953_create_six_star_logistics_table', 71);

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
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 11),
(2, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 17),
(2, 'App\\Models\\User', 18),
(2, 'App\\Models\\User', 19),
(2, 'App\\Models\\User', 20),
(2, 'App\\Models\\User', 21),
(2, 'App\\Models\\User', 22),
(2, 'App\\Models\\User', 23),
(2, 'App\\Models\\User', 24),
(2, 'App\\Models\\User', 25),
(2, 'App\\Models\\User', 26),
(2, 'App\\Models\\User', 27),
(2, 'App\\Models\\User', 28),
(2, 'App\\Models\\User', 29),
(2, 'App\\Models\\User', 30),
(2, 'App\\Models\\User', 31),
(2, 'App\\Models\\User', 32),
(2, 'App\\Models\\User', 33),
(2, 'App\\Models\\User', 34),
(2, 'App\\Models\\User', 35);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `created_by`, `title`, `slug`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Header', 'header', '<p>header</p>', NULL, NULL, NULL, 1, NULL, '2022-06-03 18:22:30', '2022-06-03 18:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `page_settings`
--

CREATE TABLE `page_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_settings`
--

INSERT INTO `page_settings` (`id`, `parent_slug`, `key`, `value`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'header', '_token', 'xEi2jZ3Kr1YPMfDlXuClmqFqa1bzdcXjay8JAo4b', NULL, '2022-06-03 18:31:33', '2023-05-18 17:47:07'),
(2, 'header', 'parent_slug', 'header', NULL, '2022-06-03 18:31:33', '2022-06-03 18:31:33'),
(3, 'header', 'form_blog', NULL, NULL, '2022-06-03 18:31:33', '2022-06-03 18:31:33'),
(4, 'header', 'header_favicon', '18052023224707.gif', NULL, '2022-06-03 18:31:33', '2023-05-18 17:47:07'),
(5, 'header', 'header_logo', '18052023224832.webp', NULL, '2022-06-03 18:31:33', '2023-05-18 17:48:32'),
(6, 'footer', '_token', 'xEi2jZ3Kr1YPMfDlXuClmqFqa1bzdcXjay8JAo4b', NULL, '2022-06-03 18:41:30', '2023-05-18 17:45:43'),
(7, 'footer', 'parent_slug', 'footer', NULL, '2022-06-03 18:41:30', '2022-06-03 18:41:30'),
(8, 'footer', 'footer_description', '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>', NULL, '2022-06-03 18:41:30', '2022-06-03 18:41:30'),
(9, 'footer', 'footer_whatsapp', 'https://web.whatsapp.com/', NULL, '2022-06-03 18:41:30', '2022-06-03 18:41:30'),
(10, 'footer', 'footer_facebook', 'https://www.facebook.com/', NULL, '2022-06-03 18:41:30', '2022-06-03 18:41:30'),
(11, 'footer', 'footer_youtube', 'https://www.youtube.com/', NULL, '2022-06-03 18:41:30', '2022-06-03 18:41:30'),
(12, 'footer', 'footer_instagram', 'https://www.instagram.com/', NULL, '2022-06-03 18:41:30', '2022-06-03 18:41:30'),
(13, 'footer', 'footer_copy_right_right_side', '<p style=\"margin-bottom:0\">Site Design and Developed by <a href=\"https://pixelslogo.com/\" target=\"_blank\" style=\"color: #ffffff;\">Pixels Logo</a></p>', NULL, '2022-06-03 18:41:30', '2022-10-07 11:39:10'),
(14, 'footer', 'footer_copy_right_left_side', '© 2022 CARMALITA M MCQUEENAll Rights Reserved', NULL, '2022-06-03 18:41:30', '2022-10-07 11:31:45'),
(15, 'footer', 'form_blog', NULL, NULL, '2022-06-03 18:41:30', '2022-06-03 18:41:30'),
(16, 'footer', 'footer_image', '18052023224610.png', NULL, '2022-06-03 18:41:30', '2023-05-18 17:46:10'),
(17, 'privacy-policy', '_token', '82dfeZpiFjxHDPqgysPMaPkzUl1oawSchT9wNuXk', NULL, '2022-06-11 00:27:29', '2022-08-03 15:26:11'),
(18, 'privacy-policy', 'parent_slug', 'privacy-policy', NULL, '2022-06-11 00:27:29', '2022-06-11 00:27:29'),
(19, 'privacy-policy', 'mt_service', 'CHAFF MISSION', NULL, '2022-06-11 00:27:29', '2022-06-11 00:27:29'),
(20, 'privacy-policy', 'mk_service', 'WELCOME TO COMPANY', NULL, '2022-06-11 00:27:29', '2022-06-11 00:27:29'),
(21, 'privacy-policy', 'md_service', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.', NULL, '2022-06-11 00:44:47', '2022-06-11 00:44:47'),
(22, 'privacy-policy', 'service_heading', 'SED UT PERSPICIATIS', NULL, '2022-06-11 00:44:47', '2022-06-11 00:44:47'),
(23, 'privacy-policy', 'service_content', '<div class=\"row about-row-first flex-row-reverse\">\r\n<div class=\"col-md-12\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>\r\n</div>\r\n</div>\r\n<div class=\"row last-para\">\r\n<div class=\"col-md-12\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>\r\n</div>\r\n</div>', NULL, '2022-06-11 00:45:21', '2022-06-11 00:45:21'),
(24, 'privacy-policy', 'form_service', NULL, NULL, '2022-06-11 00:45:21', '2022-06-11 00:45:21'),
(25, 'terms-conditions', '_token', 'hhgxtxQppQrKlX9z6avTd3VmmZsRHIdv7E2Sy7mR', NULL, '2022-06-11 00:46:41', '2022-08-30 05:00:18'),
(26, 'terms-conditions', 'parent_slug', 'terms-conditions', NULL, '2022-06-11 00:46:41', '2022-06-11 00:46:41'),
(27, 'terms-conditions', 'mt_service', 'CHAFF MISSION', NULL, '2022-06-11 00:46:41', '2022-06-11 00:46:41'),
(28, 'terms-conditions', 'mk_service', 'WELCOME TO COMPANY', NULL, '2022-06-11 00:46:41', '2022-06-11 00:46:41'),
(29, 'terms-conditions', 'md_service', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.', NULL, '2022-06-11 00:46:41', '2022-06-11 00:46:41'),
(30, 'terms-conditions', 'service_heading', 'SED UT PERSPICIATIS', NULL, '2022-06-11 00:46:41', '2022-06-11 00:46:41'),
(31, 'terms-conditions', 'service_content', '<div class=\"row about-row-first flex-row-reverse\">\r\n<div class=\"col-md-12\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>\r\n</div>\r\n</div>\r\n<div class=\"row last-para\">\r\n<div class=\"col-md-12\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>\r\n</div>\r\n</div>', NULL, '2022-06-11 00:46:41', '2022-06-11 00:46:41'),
(32, 'terms-conditions', 'form_service', NULL, NULL, '2022-06-11 00:46:41', '2022-06-11 00:46:41'),
(79, 'privacy-policy', 'mt_privacy', 'DGT PROPERTIES', NULL, '2022-06-14 17:01:12', '2022-08-03 15:32:25'),
(80, 'privacy-policy', 'mk_privacy', 'WELCOME TO COMPANY', NULL, '2022-06-14 17:01:12', '2022-06-14 17:01:12'),
(81, 'privacy-policy', 'md_privacy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.', NULL, '2022-06-14 17:01:12', '2022-06-14 17:01:12'),
(82, 'privacy-policy', 'privacy_heading', 'SED UT PERSPICIATIS', NULL, '2022-06-14 17:01:12', '2022-06-14 17:01:12'),
(83, 'privacy-policy', 'privacy_content', '<div class=\"row about-row-first flex-row-reverse\">\r\n<div class=\"col-md-12\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>\r\n</div>\r\n</div>', NULL, '2022-06-14 17:01:12', '2022-08-03 15:32:25'),
(84, 'terms-conditions', 'mt_term', 'DGT PROPERTIES', NULL, '2022-06-14 17:13:09', '2022-08-03 15:55:06'),
(85, 'terms-conditions', 'mk_term', 'WELCOME TO COMPANY', NULL, '2022-06-14 17:13:09', '2022-08-30 05:00:30'),
(86, 'terms-conditions', 'md_term', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.', NULL, '2022-06-14 17:13:09', '2022-06-14 17:13:09'),
(87, 'terms-conditions', 'term_heading', 'SED UT PERSPICIATIS', NULL, '2022-06-14 17:13:09', '2022-06-14 17:13:09'),
(88, 'terms-conditions', 'term_content', '<div class=\"row about-row-first flex-row-reverse\">\r\n<div class=\"col-md-12\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>\r\n</div>\r\n</div>\r\n<div class=\"row last-para\">\r\n<div class=\"col-md-12\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n</div>\r\n</div>', NULL, '2022-06-14 17:13:09', '2022-08-03 15:57:12'),
(105, 'home', '_token', 'gMYos8lEZeZjK34FBjZqhCprNmOXqqi7nsuHo3DV', NULL, '2022-06-14 18:23:16', '2022-09-06 11:36:57'),
(106, 'home', 'parent_slug', 'home', NULL, '2022-06-14 18:23:16', '2022-06-14 18:23:16'),
(107, 'home', 'banner_heading', NULL, NULL, '2022-06-14 18:23:16', '2022-06-14 18:23:16'),
(108, 'home', 'location_title', 'OUR LOCATION', NULL, '2022-06-14 18:23:16', '2022-06-14 18:23:16'),
(109, 'home', 'location_keyword', 'CLICK THE PIN TO FIND', NULL, '2022-06-14 18:23:16', '2022-06-14 18:23:16'),
(110, 'home', 'location_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, '2022-06-14 18:23:16', '2022-06-14 18:23:16'),
(111, 'home', 'form_home_blog', NULL, NULL, '2022-06-14 18:23:16', '2022-06-14 18:23:16'),
(112, 'footer', 'footer_twitter', 'https://twitter.com/', NULL, '2022-07-29 17:06:58', '2022-07-29 17:06:58'),
(113, 'footer', 'footer_linkedin', 'https://www.linkedin.com/', NULL, '2022-07-29 17:06:58', '2022-07-29 17:06:58'),
(114, 'header', 'header_call_us_now', '+0112345678', NULL, '2022-07-29 17:27:09', '2022-07-29 18:04:35'),
(115, 'header', 'header_email', 'Info@ourinfomail.com', NULL, '2022-07-29 17:27:09', '2022-07-29 18:04:35'),
(116, 'footer', 'footer_address', 'Office # 123, Street 123, Country Xyz.', NULL, '2022-07-29 17:58:12', '2022-07-29 17:58:12'),
(117, 'about-us', '_token', 'otQTHPRlVALxIr4ETRqaxbh9VuCdN7y35ZfojWLj', NULL, '2022-08-15 11:45:13', '2022-10-10 12:15:30'),
(118, 'about-us', 'parent_slug', 'about-us', NULL, '2022-08-15 11:45:13', '2022-08-15 11:45:13'),
(119, 'about-us', 'about_heading', 'More About Us', NULL, '2022-08-15 11:45:13', '2022-08-23 13:50:45'),
(120, 'about-us', 'about_head_description', '<p>We are an upcoming real estate company, and we want you to grow and partner with us. With a solid foundation in the word of God in everything we do, our main focus is to treat everyone with integrity, compassion, care and to always put others interest above our own. Regardless of race, color, national origin, religion, or sexual orientation, we are here to help and to put every customer in a home of there choice. &nbsp;&nbsp;&nbsp;</p>', NULL, '2022-08-15 11:45:13', '2022-08-23 13:01:51'),
(121, 'about-us', 'title_one', 'Our Mission', NULL, '2022-08-15 11:45:13', '2022-08-15 11:45:13'),
(122, 'about-us', 'about_title_one_description', '<p>To be there when you need us. You can trust, believe, and count on us. We will always be driving the distance for you.</p>', NULL, '2022-08-15 11:45:13', '2022-08-23 13:00:31'),
(123, 'about-us', 'title_two', 'Our Vision', NULL, '2022-08-15 11:45:13', '2022-08-15 11:45:13'),
(124, 'about-us', 'about_title_two_description', '<p>Always looking forward to finding and building an authentic and lasting relationship with every customer, agent, and employee by being a faithful steward and with devotion to helping others.</p>', NULL, '2022-08-15 11:45:13', '2022-08-23 13:00:31'),
(125, 'about-us', 'title_three', 'Our Values', NULL, '2022-08-15 11:45:13', '2022-08-15 11:45:13'),
(126, 'about-us', 'about_title_three_description', '<p>We stand on the word of God which instills Integrity, Compassion, and Respect in all that we do. Managers, agents, and employees put our customers first above all else to help them find their Dream Home. &nbsp;&nbsp;</p>', NULL, '2022-08-15 11:45:13', '2022-08-23 13:00:31'),
(127, 'about-us', 'title_four', NULL, NULL, '2022-08-15 11:45:13', '2022-08-23 11:41:48'),
(128, 'about-us', 'about_title_four_description', NULL, NULL, '2022-08-15 11:45:13', '2022-08-23 11:41:48'),
(129, 'about-us', 'about_status', '1', NULL, '2022-08-15 11:45:13', '2022-08-15 12:15:38'),
(130, 'about-us', 'form_about', NULL, NULL, '2022-08-15 11:45:13', '2022-08-15 11:45:13'),
(131, 'faqs', '_token', 'nyT5Y8lJ7rVQmsPPP174ncnUhmWdREYx7eSSEELA', NULL, '2022-08-23 13:56:40', '2022-08-23 13:56:40'),
(132, 'faqs', 'parent_slug', 'faqs', NULL, '2022-08-23 13:56:40', '2022-08-23 13:56:40'),
(133, 'faqs', 'faqs_title', 'LOREM IPSUM DOLOR SIT AMET', NULL, '2022-08-23 13:56:40', '2022-08-23 13:56:40'),
(134, 'faqs', 'faqs_description', 'FREQUENTLY ASKED QUESTIONS', NULL, '2022-08-23 13:56:40', '2022-08-23 13:56:40'),
(135, 'faqs', 'faqs_question', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', NULL, '2022-08-23 13:56:40', '2022-08-23 13:56:40'),
(136, 'faqs', 'faqs_answer', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, '2022-08-23 13:56:40', '2022-08-23 13:56:40'),
(137, 'faqs', 'form_service', NULL, NULL, '2022-08-23 13:56:40', '2022-08-23 13:56:40'),
(138, 'header', 'footer_facebook', 'https://www.facebook.com/', NULL, '2022-08-29 18:03:41', '2022-08-29 18:03:41'),
(139, 'header', 'footer_twitter', 'https://twitter.com/', NULL, '2022-08-29 18:03:41', '2022-08-29 18:07:07'),
(140, 'header', 'footer_instagram', 'https://www.instagram.com/', NULL, '2022-08-29 18:03:41', '2022-08-29 18:03:41'),
(141, 'header', 'footer_linkedin', 'https://www.linkedin.com/', NULL, '2022-08-29 18:03:41', '2022-08-29 18:03:41'),
(142, 'home', 'browse_title', 'Browse Listings by Category', NULL, '2022-09-06 11:36:57', '2022-09-06 11:36:57'),
(143, 'home', 'browse_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum\r\nfugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\r\nsunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, '2022-09-06 11:36:57', '2022-09-06 11:38:24'),
(144, 'listing', '_token', 'R5kzP3maR6L8pAgC96dKKzANab6RkQdCBpp7VN4h', NULL, '2022-09-07 12:11:46', '2022-09-07 12:11:46'),
(145, 'listing', 'parent_slug', 'listing', NULL, '2022-09-07 12:11:46', '2022-09-07 12:11:46'),
(146, 'listing', 'for_sale_title', 'For Sale', NULL, '2022-09-07 12:11:46', '2022-09-07 13:00:38'),
(147, 'listing', 'for_sale_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, '2022-09-07 12:11:46', '2022-09-07 13:00:38'),
(148, 'listing', 'for_rent_title', 'For Rent', NULL, '2022-09-07 12:11:46', '2022-09-07 13:01:07'),
(149, 'listing', 'for_rent_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, '2022-09-07 12:11:46', '2022-09-07 13:01:07'),
(150, 'listing', 'form_blog', NULL, NULL, '2022-09-07 12:11:46', '2022-09-07 12:11:46'),
(151, 'listing', 'for_sale', '07092022171146.jfif', NULL, '2022-09-07 12:11:46', '2022-09-07 12:11:46'),
(152, 'listing', 'for_rent', '07092022171146.png', NULL, '2022-09-07 12:11:46', '2022-09-07 12:11:46'),
(153, 'listing', 'image_for_sale', '07092022180038.png', NULL, '2022-09-07 12:27:33', '2022-09-07 13:00:38'),
(154, 'listing', 'image_for_rent', '07092022180139.png', NULL, '2022-09-07 12:37:09', '2022-09-07 13:01:39'),
(155, 'contact-us', '_token', 'RDorzeuLM1QZzwM75QJtEj30punMWHaZNMxbrMff', NULL, '2022-09-07 16:02:46', '2022-10-24 16:24:32'),
(156, 'contact-us', 'parent_slug', 'contact-us', NULL, '2022-09-07 16:02:46', '2022-09-07 16:02:46'),
(157, 'contact-us', 'contact_map', '<iframe src=\"https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', NULL, '2022-09-07 16:02:46', '2022-10-24 16:24:32'),
(158, 'contact-us', 'form_contact', NULL, NULL, '2022-09-07 16:02:46', '2022-09-07 16:02:46'),
(159, 'home-about', '_token', 'BMbTSiusxUNjI6iKXSbJiLbwoQspZUBAgIU9k6if', NULL, '2022-10-06 18:22:20', '2022-10-06 18:22:20'),
(160, 'home-about', 'parent_slug', 'home-about', NULL, '2022-10-06 18:22:20', '2022-10-06 18:22:20'),
(161, 'home-about', 'home_about_title', 'About Us', NULL, '2022-10-06 18:22:20', '2022-10-06 18:29:58'),
(162, 'home-about', 'home_about_heading', 'We Plan The Most Beautiful Event And Organized That Event', NULL, '2022-10-06 18:22:20', '2022-10-06 18:29:58'),
(163, 'home-about', 'home_about_description', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>', NULL, '2022-10-06 18:22:20', '2022-10-06 18:29:58'),
(164, 'home-about', 'form_about', NULL, NULL, '2022-10-06 18:22:20', '2022-10-06 18:22:20'),
(165, 'home-about', 'short_description', 'Carmalita M Mcqueen', NULL, '2022-10-06 18:28:24', '2022-10-06 18:29:58'),
(166, 'about-us', 'aboutus_heading', 'ABOUT ME', NULL, '2022-10-10 12:15:30', '2022-10-10 14:17:00'),
(167, 'about-us', 'aboutus_description', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. &nbsp;amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. &nbsp;amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>', NULL, '2022-10-10 12:15:30', '2022-10-10 14:17:00'),
(168, 'about-us', 'aboutus_title', 'Carmalita M Mcqueen', NULL, '2022-10-10 12:15:30', '2022-10-10 12:15:30'),
(169, 'about-us', 'heading_two', 'We Plan The Most Beautiful Event And Organized That Event', NULL, '2022-10-10 12:15:30', '2022-10-10 14:05:09'),
(170, 'about-us', 'about_description_two', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. &nbsp;amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. &nbsp;amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus comm odo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Risus commodo vivrra maecenas accumsan lacus vel facilisis. &nbsp;amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>', NULL, '2022-10-10 12:15:30', '2022-10-10 12:20:34'),
(171, 'about-us', 'about_first_image', '10102022183751.png', NULL, '2022-10-10 12:15:30', '2022-10-10 13:37:51'),
(172, 'about-us', 'about_second_image', '10102022171530.png', NULL, '2022-10-10 12:15:30', '2022-10-10 12:15:30'),
(173, 'wedding-packages', '_token', 'otQTHPRlVALxIr4ETRqaxbh9VuCdN7y35ZfojWLj', NULL, '2022-10-10 13:26:31', '2022-10-10 13:26:31'),
(174, 'wedding-packages', 'parent_slug', 'wedding-packages', NULL, '2022-10-10 13:26:31', '2022-10-10 13:26:31'),
(178, 'wedding-packages', 'wedding_heading', 'Wedding Packages', NULL, '2022-10-10 13:31:00', '2022-10-10 13:54:11'),
(179, 'wedding-packages', 'wedding_description', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo&nbsp; viverra maecenas accumsan lacus vel facilisis.</p>', NULL, '2022-10-10 13:31:00', '2022-10-10 13:54:11'),
(180, 'contact-us', 'contact_heading', 'Feel Free To Contact Us', NULL, '2022-10-24 16:24:32', '2022-10-24 16:24:32'),
(181, 'contact-us', 'contact_address', 'Office # 123, Street 123, Country Xyz.', NULL, '2022-10-24 16:24:32', '2022-10-24 16:24:32'),
(182, 'contact-us', 'contact_phone', '+0112345678', NULL, '2022-10-24 16:24:32', '2022-10-24 16:24:32'),
(183, 'contact-us', 'contact_email', 'Info@ourinfomail.com', NULL, '2022-10-24 16:24:32', '2022-10-24 16:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `paragon_logistics`
--

CREATE TABLE `paragon_logistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notify_party` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notify_party_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_carriage_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_recpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vessel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voy_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `B_L_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_of_loading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_of_discharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_delivery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final_destination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seal_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numbers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_or_pkg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gross_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `measurments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kind_of_pkg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_of_good` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_container_or_pkg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_declared_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freight_charges` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revenue_tons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepaid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exchange_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepaid_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payable_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_prepaid_local_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_orignal_B_L` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `as_carrier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freight_prepaid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive , 1=active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paragon_logistics`
--

INSERT INTO `paragon_logistics` (`id`, `shipper`, `consignee`, `notify_party`, `notify_party_2`, `pre_carriage_by`, `place_of_recpt`, `vessel`, `voy_no`, `B_L_no`, `port_of_loading`, `port_of_discharge`, `place_of_delivery`, `final_destination`, `container_no`, `seal_no`, `marks`, `numbers`, `container_or_pkg`, `gross_weight`, `measurments`, `kind_of_pkg`, `desc_of_good`, `total_container_or_pkg`, `merchant_declared_value`, `freight_charges`, `revenue_tons`, `rate`, `per`, `prepaid`, `collect`, `exchange_rate`, `prepaid_2`, `payable_at`, `total_prepaid_local_currency`, `no_of_orignal_B_L`, `place_of_issue`, `date_of_issue`, `as_carrier`, `freight_prepaid`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Earum aliqua Nam ut', 'Velit dolorem cillu', 'Explicabo Sunt omn', 'Aliquam facilis amet', 'Sed ipsa aut asperi', 'Aperiam aut illo dol', 'Dolor Nam quidem qui', 'Tempore beatae id', 'Aspernatur dolorem i', 'Est tempora consequ', 'Consequuntur labore', 'Porro qui et nobis u', 'Labore odit amet as', 'Dolore ea placeat e', 'Rerum deserunt excep', 'Minus laborum volupt', '14', 'Cupidatat voluptates', 'Maxime cupiditate ma', 'Non et consequuntur', 'Distinctio Ut vel v', 'Enim anim nisi conse', 'Fuga Vero qui sint', 'In dolorum quisquam', 'Minim aliquid est ne', 'Eligendi dolores ea', 'Sunt aute laboriosa', 'Vitae vel cumque vol', 'Voluptas quae ipsa', 'Sunt occaecat dolor', 'Ipsam sit eveniet o', 'Aut pariatur Magni', 'Quod in quos volupta', 'Et quisquam numquam', 'Qui consectetur ani', 'Et voluptatem volup', '04-27-1970', 'Aut nostrud providen', 'Accusamus id aliquam', '1', NULL, '2023-05-19 11:47:43', '2023-05-19 11:47:43'),
(2, 'In distinctio Fugacgdfgfg dfg dfg sdfgdfg dfgdfg dfg dgfdfgdg fgsdgdfgdfgdg dfgd gdfg d gdfgfgfg dfgsdfgsdfgdfgdfg dfgdf gdfg sdfgdfg dgf dfgd', 'Non est minus aut edfgfgfgdfgfggggggggggs dffffffffffffffffffffffffffffsg sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfg sdrrrrgfsdf sdfg sdfgdsfgdfgs', 'Et suscipit est ass', 'A aute impedit veni', 'Rem molestiae error', 'Facilis sint consect', 'Corporis adipisicing', 'Ipsum in deserunt s', 'Qui optio eligendi', 'Aute ex vel est tem', 'Cumque omnis laborio', 'Facere delectus rer', 'Quo et expedita hic', 'Sit dolorem officia', 'Minima et velit nemo', 'Tempor mollitia quas', '570', 'Ipsum autem autem au', 'Non expedita ut ut m', 'Praesentium minima a', 'Aliquid consequatur', 'Assumenda aperiam cu', 'Veniam ipsa blandi', 'Mollit laboris a ips', 'Proident duis aliqu', 'Quibusdam qui illo u', 'Deserunt rerum omnis', 'Eveniet corporis si', 'Est fugiat molestia', 'Cum esse Nam ea itaq', 'Velit consectetur e', 'Aut amet id nostru', 'Qui nobis ipsam veli', 'Elit enim aperiam d', 'Molestiae et dolore', 'Incididunt qui moles', '12-12-2016', 'Minima laudantium l', 'Omnis aspernatur vol', '1', '2023-05-19 17:05:51', '2023-05-19 11:53:05', '2023-05-19 12:05:51'),
(3, 'Quidem dicta ad reru', 'Debitis delectus ad', 'In ullamco ducimus', 'Est enim veritatis d', 'Rerum facilis adipis', 'Consequatur similiqu', 'Vel unde est est sap', 'Cillum sint tempore', 'Magni sit veniam mo', 'Voluptas quam rerum', 'Cillum molestiae eaq', 'Amet atque nobis co', 'Sed proident tempor', 'Iure et at ea cillum', 'Dolor ut nostrud cup', 'Qui expedita molesti', '529', 'Sunt eveniet harum', 'Mollit sed inventore', 'Incididunt consequat', 'Magna magnam error u', 'Totam et sed et quid', 'Assumenda molestiae', 'Voluptatem aut numqu', 'Ullamco repudiandae', 'Consequatur ex commo', 'Similique blanditiis', 'Qui cupiditate qui a', 'Officia ea iure cupi', 'Velit asperiores dol', 'Incidunt adipisicin', 'Est sint similique', 'Ut qui iure cumque a', 'Est assumenda adipis', 'Itaque doloribus adi', 'Nobis pariatur Qui', '06-11-2019', 'Sunt architecto impe', 'Laborum est eum max', '1', '2023-05-19 18:02:59', '2023-05-19 11:56:26', '2023-05-19 13:02:59'),
(4, 'Adipisicing cumque e123', 'Et elit ut debitis123', 'Architecto deserunt123', 'Est dolorem sapiente123', 'Anim non quia nulla123', 'Et fuga Et odio ess123', 'Molestiae commodo se123', 'Quia sequi adipisici123', 'Aut nulla consectetu123', 'Esse dolor autem asp 123', 'Vel sed quibusdam an123', 'Itaque voluptas dolo123', 'Et est et magni volu123', 'Aut laboriosam nece123', 'Assumenda proident123', 'Autem et possimus m123', '666123', 'Ab omnis magni ad du123', 'Exercitationem volup123', 'Voluptatem Libero i123', 'Modi doloremque quas123', 'Quo magna quo consec123', 'Ut qui debitis fugia123', 'Accusantium aut et q123', 'Consequatur ullam o123', 'Pariatur Adipisicin123', 'Id esse sed minus q123', 'Adipisci ea obcaecat123', 'Aliquam similique pl123', 'Eiusmod a obcaecati123', 'Quis nisi inventore123', 'Magnam magnam conseq123', 'Quo non cupiditate v123', 'Aspernatur sequi nis123', 'Voluptate nostrud ve123', 'Labore velit perspic123', '01-10-2035', 'Dolore in autem cons123', 'Et quis aperiam offi123', '1', NULL, '2023-05-19 11:56:51', '2023-05-23 12:21:30'),
(5, 'Cumque sit fugiat', 'Quis cum voluptatem', 'Voluptatibus asperio', 'Alias necessitatibus', 'Ipsa do ad fugiat', 'Id harum iure ut co', 'Incididunt enim aute', 'Sed sequi lorem culp', 'Veritatis laborum S', 'Autem accusamus est', 'Eius ad ex adipisici', 'Facere voluptatem do', 'Voluptatibus nihil c', 'Iste quis officia ni', 'Consequatur Id quis', 'Vel et id rerum quo', '932', 'Quas sunt minus und', 'Cillum officia dolor', 'Omnis laboriosam ex', 'In et vel facilis ul', 'Fugit nostrum est n', 'Reprehenderit duis c', 'Libero in aliquip en', 'Consectetur duis mol', 'Impedit laudantium', 'In aliqua In dolor', 'Est est minim quis r', 'Ullamco dolor laudan', 'Sapiente nesciunt p', 'Animi vel fugiat c', 'Delectus omnis Nam', 'Iste sit totam repu', 'Dolore sint sed sit', 'Accusamus enim delec', 'Tempore magnam quis', '03-10-1978', 'Amet qui ducimus e', 'Necessitatibus et mo', '1', '2023-05-19 17:05:43', '2023-05-19 11:58:18', '2023-05-19 12:05:43'),
(6, 'Omnis qui aute asper', 'Qui qui unde facere', 'Alias consectetur ut', 'Non odio ratione a q', 'Sunt natus illum es', 'Sint odit ut eiusmod', 'Adipisicing corrupti', 'Cum repudiandae aut', 'Cupidatat magnam cup', 'Et rerum ut quia dis', 'Sunt aliqua Autem', 'Temporibus qui minus', 'Voluptates repudiand', 'Ipsam eum earum aspe', 'Vel voluptatem irure', 'Consequatur est ten', '522', 'Qui ex rerum vero et', 'Cupidatat rem recusa', 'Laborum magna corrup', 'Neque eiusmod omnis', 'Magni temporibus dol', 'Enim sit sunt quo cu', 'Doloribus perferendi', 'Recusandae Aliquid', 'Fugiat ipsum minima', 'Pariatur Voluptate', 'Beatae corrupti occ', 'Officiis voluptatem', 'Ut sed suscipit in d', 'Ducimus unde labori', 'Voluptatem Laborum', 'Vel tenetur aute ali', 'Dolores nihil totam', 'Fuga Quasi earum mo', 'Labore dicta eligend', '04-26-2003', 'Exercitationem ea vo', 'Saepe rerum minus es', '1', '2023-05-19 21:40:53', '2023-05-19 13:52:19', '2023-05-19 16:40:53'),
(7, 'Quo fugiat recusanda', 'Quibusdam voluptas m', 'Aliquam exercitation', 'Deserunt elit quod', 'Qui libero dignissim', 'Nisi amet id aliqui', 'Fugit nesciunt ut', 'Et enim et fugiat v', 'Neque dolore maiores', 'Dolores reprehenderi', 'Quis doloremque beat', 'Deleniti rerum rerum', 'Ea ipsa expedita eo', 'Voluptate repudianda', 'Sit accusamus quam', 'Nihil voluptas ullam', '85', 'Id et sit quis vel t', 'Eius qui et consecte', 'Ut in est do aut aut', 'Laborum Placeat sa', 'At lorem accusamus e', 'Quia ad et enim eos', 'Officia pariatur Cu', 'Cupidatat est sed i', 'In sequi ut irure mo', 'Dolore qui dolor ape', 'Nulla quos soluta am', 'Vitae dignissimos mo', 'Sapiente soluta dolo', 'Tenetur doloribus mo', 'Repudiandae esse vo', 'Amet dolore commodi', 'Quam vitae unde est', 'Voluptatem In tempo', 'Error aspernatur sae', '03-13-1993', 'Ex culpa enim ipsam', 'Quis id ipsum conse', '1', '2023-05-19 21:05:35', '2023-05-19 13:52:46', '2023-05-19 16:05:35'),
(8, 'Deleniti vel molesti', 'Est asperiores provi', 'Voluptatibus ullamco', 'Porro et quis est al', 'Sint eveniet autem', 'Et qui assumenda cor', 'Asperiores nihil dol', 'Maxime beatae volupt', 'Vero commodo nulla p', 'Nesciunt explicabo', 'Sint assumenda aliq', 'Ut minima officiis i', 'Est sit illum a id', 'Elit ratione non ev', 'Veniam sint et labo', 'Libero beatae distin', '308', 'Quo similique natus', 'Ad magnam eveniet d', 'Explicabo Omnis dol', 'Perspiciatis vel in', 'Quas at in id volupt', 'Aperiam cillum quae', 'Et natus quia quod m', 'Quo possimus odit a', 'Sed in magni vero nu', 'Molestiae fugit seq', 'Id voluptates aut qu', 'Aperiam quo commodi', 'Voluptatem est impe', 'Nihil deleniti magna', 'Autem et eum sint to', 'Sapiente facilis rep', 'Magni cum molestiae', 'Ratione sequi quis f', 'Quam sit qui alias', '01-10-2023', 'Sint facilis ducimus', 'Laudantium qui labo', '1', NULL, '2023-05-19 18:20:23', '2023-05-23 12:20:40');

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
(49, 'page-list', 'web', 'list', NULL, '2022-04-28 20:12:47', '2022-04-28 20:12:47'),
(50, 'page-create', 'web', 'create', NULL, '2022-04-28 20:12:47', '2022-04-28 20:12:47'),
(51, 'page-edit', 'web', 'edit', NULL, '2022-04-28 20:12:47', '2022-04-28 20:12:47'),
(52, 'page-delete', 'web', 'delete', NULL, '2022-04-28 20:12:47', '2022-04-28 20:12:47'),
(57, 'categories-list', 'web', 'list', NULL, '2022-05-09 14:39:47', '2022-05-09 14:39:47'),
(58, 'categories-create', 'web', 'create', NULL, '2022-05-09 14:39:47', '2022-05-09 14:39:47'),
(59, 'categories-edit', 'web', 'edit', NULL, '2022-05-09 14:39:47', '2022-05-09 14:39:47'),
(60, 'categories-delete', 'web', 'delete', NULL, '2022-05-09 14:39:47', '2022-05-09 14:39:47'),
(105, 'user-list', 'web', 'list', NULL, '2022-06-06 16:59:05', '2022-06-06 16:59:05'),
(106, 'user-create', 'web', 'create', NULL, '2022-06-06 16:59:05', '2022-06-06 16:59:05'),
(107, 'user-edit', 'web', 'edit', NULL, '2022-06-06 16:59:05', '2022-06-06 16:59:05'),
(108, 'user-delete', 'web', 'delete', NULL, '2022-06-06 16:59:05', '2022-06-06 16:59:05'),
(149, 'paragon-list', 'web', 'list', NULL, '2023-05-19 11:30:55', '2023-05-19 11:30:55'),
(150, 'paragon-create', 'web', 'create', NULL, '2023-05-19 11:30:55', '2023-05-19 11:30:55'),
(151, 'paragon-edit', 'web', 'edit', NULL, '2023-05-19 11:30:55', '2023-05-19 11:30:55'),
(152, 'paragon-delete', 'web', 'delete', NULL, '2023-05-19 11:30:55', '2023-05-19 11:30:55'),
(153, 'express-list', 'web', 'list', NULL, '2023-05-22 11:53:53', '2023-05-22 11:53:53'),
(154, 'express-create', 'web', 'create', NULL, '2023-05-22 11:53:53', '2023-05-22 11:53:53'),
(155, 'express-edit', 'web', 'edit', NULL, '2023-05-22 11:53:53', '2023-05-22 11:53:53'),
(156, 'express-delete', 'web', 'delete', NULL, '2023-05-22 11:53:53', '2023-05-22 11:53:53'),
(161, 'mass-list', 'web', 'list', NULL, '2023-05-22 15:55:02', '2023-05-22 15:55:02'),
(162, 'mass-create', 'web', 'create', NULL, '2023-05-22 15:55:02', '2023-05-22 15:55:02'),
(163, 'mass-edit', 'web', 'edit', NULL, '2023-05-22 15:55:02', '2023-05-22 15:55:02'),
(164, 'mass-delete', 'web', 'delete', NULL, '2023-05-22 15:55:02', '2023-05-22 15:55:02'),
(165, 'six_star-list', 'web', 'list', NULL, '2023-05-22 16:05:32', '2023-05-22 16:05:32'),
(166, 'six_star-create', 'web', 'create', NULL, '2023-05-22 16:05:32', '2023-05-22 16:05:32'),
(167, 'six_star-edit', 'web', 'edit', NULL, '2023-05-22 16:05:32', '2023-05-22 16:05:32'),
(168, 'six_star-delete', 'web', 'delete', NULL, '2023-05-22 16:05:32', '2023-05-22 16:05:32'),
(169, 'skyway-list', 'web', 'list', NULL, '2023-05-22 16:14:04', '2023-05-22 16:14:04'),
(170, 'skyway-create', 'web', 'create', NULL, '2023-05-22 16:14:04', '2023-05-22 16:14:04'),
(171, 'skyway-edit', 'web', 'edit', NULL, '2023-05-22 16:14:04', '2023-05-22 16:14:04'),
(172, 'skyway-delete', 'web', 'delete', NULL, '2023-05-22 16:14:04', '2023-05-22 16:14:04');

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
(2, 'Agent', 'web', 'Normal agent from website.', NULL, '2022-04-22 14:46:54', '2022-08-15 17:29:35');

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
(6, 1),
(7, 1),
(8, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(170, 1),
(171, 1),
(172, 1);

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
-- Table structure for table `six_star_logistics`
--

CREATE TABLE `six_star_logistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notify_party` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notify_party_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_carriage_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_recpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BL_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_of_BL` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_of_landing_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vessel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voyage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_of_loading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_of_discharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_delivery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kind_of_pkg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_of_good` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gross_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `measurments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive , 1=active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `six_star_logistics`
--

INSERT INTO `six_star_logistics` (`id`, `shipper`, `consignee`, `notify_party`, `notify_party_2`, `delivery_agent`, `pre_carriage_by`, `place_of_recpt`, `freight`, `BL_status`, `num_of_BL`, `bill_of_landing_no`, `vessel`, `voyage`, `port_of_loading`, `port_of_discharge`, `place_of_delivery`, `date_of_issue`, `marks`, `kind_of_pkg`, `desc_of_good`, `gross_weight`, `measurments`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Occaecat in officia', 'Pariatur Anim quibu', 'Totam labore rerum i', 'Eaque obcaecati veni', 'Pariatur Minus dolo', 'Aspernatur laborum', 'Aliquid consequuntur', 'Architecto minim ame', 'Molestiae nisi labor', 'Ut velit culpa dol', 'Quos ipsam sint a di', 'Voluptatem consecte', 'Est occaecat illum', 'Perspiciatis aliqui', 'Facilis exercitation', 'Dignissimos in offic', '11-22-1976', 'Minima omnis nulla i', 'Deleniti amet eos', 'Veniam voluptatem', 'Aliquid veniam quis', 'Sit cillum culpa con', '1', '2023-05-24 00:10:34', '2023-05-23 17:10:31', '2023-05-23 19:10:34'),
(2, 'Qui labore nihil qui123', 'Consequatur harum et123', 'Odio eu voluptate et123', 'Numquam qui autem eu123', 'Ullamco eos quia la123', 'Eveniet eligendi el123', 'Nulla quas ratione t123', 'Dolorem enim consect123', 'Eum reprehenderit m123', 'Incididunt eaque sap123', 'Mollitia aliquid et123', 'Illum dolor corpori123', 'Excepteur maxime tot123', 'Quia accusantium eni231', 'Voluptates anim aper123', 'Doloremque consequa123t', '07-29-2004', 'Aut minim consequatu123', 'Sint voluptatem vol123', 'Ad dolorem qui volup1234', 'Quia exercitation vo123', 'Qui autem ea volupta123', '1', '2023-05-24 00:10:23', '2023-05-23 17:12:33', '2023-05-23 19:10:23'),
(3, 'Pariatur Sit in ut123', 'Nam ab explicabo As123', 'Dolor nihil sapiente123', 'Beatae sint exercita123', 'Soluta ipsum pariat123', 'Maiores officia mini123', 'Voluptates et quis n123', 'Ratione qui architec123', 'Adipisicing maiores123', 'Numquam hic nesciunt123', 'Libero non laborum123', 'Dicta minim dolores123', 'Labore enim culpa et123', 'Facilis enim culpa123', 'Dolor provident rep123', 'Minima sint aut con123', '01-01-2025', 'Sint eum quia omnis123', 'Ullamco quibusdam qu123', 'Ipsum beatae quaera123', 'Illum laboris paria123', 'Nihil nulla consequu123', '1', NULL, '2023-05-23 19:01:10', '2023-05-23 19:05:55'),
(4, 'Labore repudiandae v', 'Ea perferendis ipsum', 'Eius dolore molestia', 'Dolore qui ullamco e', 'Illo ipsam dolores a', 'Maxime id aliqua Ne', 'Eiusmod unde sit ul', 'Et saepe blanditiis', 'Perferendis alias am', 'Esse aliquid quia i', 'Sit tempora dolor q', 'Possimus excepteur', 'Nihil qui in nulla s', 'Quos qui quam conseq', 'Quo consequatur eli', 'Esse cumque adipisc', '04-11-2018', 'Et duis asperiores e', 'Ut laboriosam aut q', 'Ullamco omnis natus', 'Sit ut at placeat a', 'Porro incididunt eiu', '1', NULL, '2023-05-24 11:05:50', '2023-05-24 11:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `skyway_shippings`
--

CREATE TABLE `skyway_shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notify_party` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notify_party_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_carriage_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_recpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vessel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voy_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `B_L_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_of_loading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_of_discharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_delivery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seal_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numbers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_pkg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_of_good` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gross_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `measurments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kind_of_pkg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_orignal_B_L` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carrier_receipt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signed_carrier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freight_prepaid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive , 1=active',
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skyway_shippings`
--

INSERT INTO `skyway_shippings` (`id`, `shipper`, `consignee`, `notify_party`, `notify_party_2`, `pre_carriage_by`, `place_of_recpt`, `vessel`, `voy_no`, `B_L_no`, `port_of_loading`, `port_of_discharge`, `place_of_delivery`, `container_no`, `seal_no`, `marks`, `numbers`, `number_of_pkg`, `desc_of_good`, `gross_weight`, `measurments`, `kind_of_pkg`, `no_of_orignal_B_L`, `place_of_issue`, `date_of_issue`, `carrier_receipt`, `signed_carrier`, `freight_prepaid`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Quia iure aliquam qu', 'Modi recusandae Est', 'Modi et et nihil lab', 'Expedita qui porro f', 'Omnis labore placeat', 'Quis delectus fugia', 'Quo earum repellendu', 'Iure quo qui consect', 'Dolorem modi sint q', 'Assumenda do vitae a', 'Incidunt distinctio', 'Sed voluptatibus nos', 'Quae aspernatur est', 'Tempora id obcaecat', 'Molestiae sunt conse', '457', 'Consequatur sit earu', 'Reprehenderit qui ut', 'Quia beatae neque an', 'Iure harum cupidatat', 'Quia cupiditate moll', 'Anim aut quos fugiat', 'Et repudiandae proid', '06-03-1989', 'Ut neque et enim iur', 'Necessitatibus volup', 'Id et aut animi ea', '1', '2023-05-22 22:56:47', '2023-05-22 17:35:59', '2023-05-22 17:56:47'),
(2, 'Veniam sit quis deb', 'Dolor sed ut modi de', 'In et maxime repudia', 'Velit consequatur v', 'Eos voluptatum dolo', 'Et incidunt eos do', 'Accusamus ut sapient', 'Rerum reprehenderit', 'Fugiat rerum ipsa', 'Nam harum excepturi', 'Maxime nulla eu reic', 'Aut modi ipsum volup', 'Sit saepe sed dolor', 'In ab excepteur hic', 'Ut temporibus adipis', '614', 'Fuga Dolore delenit', 'Id minima pariatur', 'Accusamus blanditiis', 'Est officia sint be', 'Quidem incididunt vo', 'Rerum ut tenetur sit', 'Quis velit omnis vol', '06-29-2023', 'Voluptatem illum ap', 'Nulla sed harum arch', 'Sit adipisci accusa', '1', NULL, '2023-05-22 17:57:26', '2023-05-22 17:57:26'),
(3, 'Aut distinctio Ulla', 'Ex exercitationem id', 'Velit adipisci esse', 'Ea nostrud sit elig', 'Doloribus ratione ei', 'Do proident itaque', 'Dolores natus ipsam', 'Sed ducimus minus a', 'Occaecat laboriosam', 'Inventore magna in d', 'Aut sed elit id ea', 'Excepteur debitis si', 'Dicta harum expedita', 'Eum tenetur placeat', 'Et sit voluptas exce', '470', 'Asperiores delectus', 'Voluptas voluptas si', 'Sed non aut excepteu', 'Ea et et commodo sit', 'Atque aut aut earum', 'Ipsam sunt sapiente', 'Error aliqua Sunt i', '04-19-1988', 'Recusandae In qui a', 'Nemo autem ut dolore', 'Ipsa distinctio Qu', '1', NULL, '2023-05-22 17:57:53', '2023-05-22 17:57:53'),
(4, 'A commodo minus dolo', 'Numquam voluptatem e', 'Quis provident repr', 'Ullam pariatur Ipsa', '439', '970', '715', '892', '815', '61', '681', '183', '319', '890', '225', '773', 'Irure tenetur illum', 'Dolor vero dolores e', '105', '941', 'Molestiae saepe qui', '874', '359', '01-01-1970', '414', '174', 'Iusto occaecat eum m', '1', '2023-05-22 23:32:21', '2023-05-22 18:30:55', '2023-05-22 18:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_rated` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0' COMMENT '0=inactive, 1= active	',
  `our_team` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0' COMMENT '0=inactive, 1= active	',
  `about_me` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) DEFAULT NULL,
  `state_id` bigint(20) DEFAULT NULL,
  `zip_code` bigint(20) DEFAULT NULL,
  `license` bigint(20) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=inactive, 1= active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `middle_name`, `last_name`, `designation`, `phone`, `email`, `address`, `top_rated`, `our_team`, `about_me`, `city_id`, `state_id`, `zip_code`, `license`, `image`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'User', NULL, 'Admin', NULL, NULL, 'admin@gmail.com', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$QowHn04SUEIx8Lo.kQahTehd1cmYS2NnLkwDlqRARD7bVtpnNg/mi', NULL, NULL, '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `express_shippings`
--
ALTER TABLE `express_shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mass_shippings`
--
ALTER TABLE `mass_shippings`
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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_settings`
--
ALTER TABLE `page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paragon_logistics`
--
ALTER TABLE `paragon_logistics`
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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `six_star_logistics`
--
ALTER TABLE `six_star_logistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skyway_shippings`
--
ALTER TABLE `skyway_shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `express_shippings`
--
ALTER TABLE `express_shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mass_shippings`
--
ALTER TABLE `mass_shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `page_settings`
--
ALTER TABLE `page_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `paragon_logistics`
--
ALTER TABLE `paragon_logistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `six_star_logistics`
--
ALTER TABLE `six_star_logistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skyway_shippings`
--
ALTER TABLE `skyway_shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
