-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 11:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `full_project_tasks`
--

-- --------------------------------------------------------

--
-- Table structure for table `checklists`
--

CREATE TABLE `checklists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklists`
--

INSERT INTO `checklists` (`id`, `title`, `task_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cumque est pariatur ut at voluptas. Est quae recusandae dolor omnis dolorem quo. Perspiciatis et ea tempora nam laborum rerum. Soluta quod molestiae tempora voluptatibus quibusdam dolores.', 26, '0', '2024-09-24 18:21:26', '2024-09-24 18:21:26'),
(2, 'Eum iusto enim dolorem distinctio nesciunt ut sed. Dolor autem soluta eum ut porro. Iusto quibusdam rem modi fuga id impedit deserunt. Omnis est aut dolor exercitationem.', 27, '1', '2024-09-24 18:21:26', '2024-09-24 18:21:26'),
(3, 'Non aut illum explicabo nesciunt rerum. Praesentium et esse aut odio. Quia autem magnam est est fuga dicta praesentium. Eius eos rerum et laboriosam consequuntur nulla sed.', 28, '1', '2024-09-24 18:21:26', '2024-09-24 18:21:26'),
(4, 'Voluptatem eos dolor mollitia reiciendis quidem et sed. Dolorem nihil et adipisci id maxime perspiciatis dolore.', 29, '0', '2024-09-24 18:21:26', '2024-09-24 18:21:26'),
(5, 'Qui voluptates repellat suscipit id voluptas qui. Repellendus quis assumenda libero est sit quia fugit. Libero ipsa sequi fugit et ut. Voluptas est expedita delectus fugit.', 30, '0', '2024-09-24 18:21:26', '2024-09-24 18:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `comment__attaches`
--

CREATE TABLE `comment__attaches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `message_type` enum('text','image','video','audio','file') NOT NULL DEFAULT 'text',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comm_attach_able_id` int(11) NOT NULL,
  `comm_attach_able_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment__attaches`
--

INSERT INTO `comment__attaches` (`id`, `content`, `file_path`, `message_type`, `user_id`, `comm_attach_able_id`, `comm_attach_able_type`, `created_at`, `updated_at`) VALUES
(1, NULL, 'http://www.bradtke.org/et-officiis-harum-quo-quaerat', 'image', 11, 9, 'Database\\Factories\\Project', '2024-09-24 18:04:24', '2024-09-24 18:04:24'),
(2, NULL, 'http://gulgowski.biz/', 'audio', 12, 8, 'Database\\Factories\\Task', '2024-09-24 18:04:24', '2024-09-24 18:04:24'),
(3, NULL, 'http://www.wunsch.biz/', 'file', 13, 8, 'Database\\Factories\\Task', '2024-09-24 18:04:24', '2024-09-24 18:04:24'),
(4, NULL, 'http://connelly.net/sed-dolore-explicabo-ut-deserunt-quae-sit.html', 'image', 14, 3, 'Database\\Factories\\Task', '2024-09-24 18:04:24', '2024-09-24 18:04:24'),
(5, NULL, 'http://berge.biz/', 'audio', 15, 8, 'Database\\Factories\\Project', '2024-09-24 18:04:24', '2024-09-24 18:04:24'),
(6, NULL, 'http://frami.com/ut-aliquam-soluta-quasi-explicabo-asperiores-saepe-asperiores.html', 'file', 16, 4, 'Database\\Factories\\Project', '2024-09-24 18:04:34', '2024-09-24 18:04:34'),
(7, NULL, 'http://www.lueilwitz.com/qui-blanditiis-qui-et', 'audio', 17, 4, 'Database\\Factories\\Project', '2024-09-24 18:04:34', '2024-09-24 18:04:34'),
(8, NULL, 'https://www.ritchie.com/qui-et-voluptatem-enim-illum', 'file', 18, 3, 'Database\\Factories\\Project', '2024-09-24 18:04:34', '2024-09-24 18:04:34'),
(9, NULL, 'http://www.block.com/quia-consectetur-et-magnam-et.html', 'audio', 19, 10, 'Database\\Factories\\Task', '2024-09-24 18:04:34', '2024-09-24 18:04:34'),
(10, NULL, 'https://www.bosco.com/quas-qui-magnam-facere-voluptatem-totam-voluptatibus-dolorum-rerum', 'audio', 20, 10, 'Database\\Factories\\Project', '2024-09-24 18:04:35', '2024-09-24 18:04:35'),
(11, 'Quis sunt ut non facere. Rerum corporis voluptatum eius reprehenderit animi.', NULL, 'text', 21, 8, 'Database\\Factories\\Project', '2024-09-24 18:05:44', '2024-09-24 18:05:44'),
(12, 'Placeat facere veritatis at est doloremque sit iure. Laudantium iusto numquam consequatur quo velit rerum repellat. Commodi quia minus laborum voluptatibus et rem et. Optio qui necessitatibus aut vitae.', NULL, 'audio', 22, 10, 'Database\\Factories\\Task', '2024-09-24 18:05:44', '2024-09-24 18:05:44'),
(13, 'Rem fugit voluptatibus incidunt voluptatem officia vitae fugiat. Quis et libero omnis voluptas magnam. Provident maiores eius fuga placeat. Repellat dolorem ut qui eveniet est.', NULL, 'image', 23, 9, 'Database\\Factories\\Task', '2024-09-24 18:05:44', '2024-09-24 18:05:44'),
(14, 'Iure nesciunt ducimus incidunt eos totam. Dolores sunt at pariatur ratione. Repellendus et omnis placeat sint quia.', NULL, 'video', 24, 7, 'Database\\Factories\\Project', '2024-09-24 18:05:44', '2024-09-24 18:05:44'),
(15, 'Debitis impedit ut adipisci eveniet libero deleniti quos. Ut consequatur blanditiis est officiis. Vero fugit dicta quos. In quibusdam voluptatem tempora illo magnam.', NULL, 'file', 25, 1, 'Database\\Factories\\Project', '2024-09-24 18:05:44', '2024-09-24 18:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_23_225854_create_projects_table', 1),
(6, '2024_09_23_231104_create_tasks_table', 1),
(7, '2024_09_23_233139_create_comment__attaches_table', 1),
(8, '2024_09_24_191342_create_project_users_table', 2),
(9, '2024_09_24_192932_create_task_users_table', 2),
(10, '2024_09_24_193500_create_checklists_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` text DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('InProgress','New','Completed') NOT NULL DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `details`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Janelle Nicolas I', 'Id ducimus molestias et aut libero. Et eos sunt dolores sit aut. Ab repellat commodi cumque nam natus at.', '1976-10-29', '1970-11-24', 'Completed', '2024-09-24 17:57:06', '2024-09-24 17:57:06'),
(2, 'Karson West', 'Omnis asperiores necessitatibus et sunt veniam aliquam dolor rem. Voluptatibus nemo optio est vero. Qui minus molestiae sint beatae quo qui. Id dignissimos doloribus qui et sequi.', '2024-07-29', '1985-04-25', 'Completed', '2024-09-24 17:57:06', '2024-09-24 17:57:06'),
(3, 'Wilburn Fritsch', 'Dolore fugiat deleniti magnam corrupti voluptatem placeat aut. Officiis quis perferendis qui voluptatem qui quo.', '2016-03-26', '2003-06-11', 'New', '2024-09-24 17:57:06', '2024-09-24 17:57:06'),
(4, 'Foster Fay', 'Dolorem ipsum dolores atque veniam molestiae ipsa molestiae. Sint debitis esse veritatis quod quam. Et debitis est omnis est nesciunt et.', '1982-08-07', '2008-09-30', 'New', '2024-09-24 17:57:06', '2024-09-24 17:57:06'),
(5, 'Oran Howell', 'Eaque voluptatem dolor error perspiciatis quia. Reprehenderit nisi ab aspernatur nihil consequatur quia quos velit. Maxime minus est quae dolorem quo.', '2011-08-27', '1997-06-16', 'InProgress', '2024-09-24 17:57:06', '2024-09-24 17:57:06'),
(6, 'Prof. Geovanny Kulas Jr.', 'Iste minima sunt quasi assumenda. Nihil porro et repudiandae accusantium dolor. Voluptate delectus quos et ad dolores. Voluptate voluptatum quasi earum voluptatem. Cupiditate id enim error.', '2012-07-04', '1982-06-17', 'InProgress', '2024-09-24 17:57:06', '2024-09-24 17:57:06'),
(7, 'Corine Rau', 'Et aut maiores dignissimos nesciunt et aut. Ipsam quia reprehenderit non. Voluptatem odio inventore reiciendis autem sed.', '2022-12-22', '2021-10-06', 'Completed', '2024-09-24 17:57:06', '2024-09-24 17:57:06'),
(8, 'Prof. Gudrun Hyatt', 'Sit consequatur nesciunt accusantium illum. Ducimus eveniet dolorem rem. Reprehenderit impedit eius et earum est mollitia recusandae. In veniam explicabo maxime quam possimus recusandae.', '2016-04-13', '2001-04-13', 'New', '2024-09-24 17:57:06', '2024-09-24 17:57:06'),
(9, 'Mr. Hazle Williamson II', 'Enim consequatur occaecati dolores voluptatem eligendi ullam. Animi aliquam ea ab modi vel est rem voluptas.', '1976-02-28', '1998-09-16', 'InProgress', '2024-09-24 17:57:06', '2024-09-24 17:57:06'),
(10, 'Rebeca Stehr', 'Architecto neque eius iste similique rerum. Et est deserunt asperiores praesentium est error. Vel ut dignissimos omnis iste ipsam.', '1986-04-14', '2014-05-02', 'New', '2024-09-24 17:57:06', '2024-09-24 17:57:06'),
(11, 'Dr. Dimitri Collier I', 'Laboriosam molestiae molestiae est. Eum ullam sunt reiciendis doloribus laboriosam est sunt. Ut voluptas enim reprehenderit laboriosam.', '1974-07-05', '2000-08-04', 'New', '2024-09-24 17:59:40', '2024-09-24 17:59:40'),
(12, 'Neha Bode', 'Dolores quasi ut odit. Voluptatum asperiores in quia quia molestias sequi. Ea officia ex fugit quasi modi neque. Quos eaque dolorum placeat asperiores aut.', '1980-03-21', '2006-12-07', 'Completed', '2024-09-24 17:59:40', '2024-09-24 17:59:40'),
(13, 'Derek McClure', 'Est facilis iste temporibus. Quisquam ut aut ad dolorem odit. Unde saepe aperiam id iusto laudantium. Distinctio blanditiis rem voluptatem aut.', '1998-08-16', '1972-01-28', 'Completed', '2024-09-24 17:59:40', '2024-09-24 17:59:40'),
(14, 'Abbigail Koss', 'Consequatur ratione quia reiciendis accusantium. Atque quos quidem magni praesentium animi.', '1988-09-22', '2023-08-25', 'Completed', '2024-09-24 17:59:40', '2024-09-24 17:59:40'),
(15, 'Jody Hermann', 'Ab voluptatum atque placeat ut esse dolorem. Ab earum perferendis dolorem et et. Laborum illo qui qui.', '1977-01-30', '1976-04-23', 'New', '2024-09-24 17:59:41', '2024-09-24 17:59:41'),
(16, 'Rowena Ruecker', 'Minima aut vero ut molestiae harum perferendis. Delectus reiciendis dolorum ad ex. Sequi quos vitae repellat deleniti distinctio aperiam. Explicabo quo commodi voluptatem maiores atque porro dicta.', '2015-10-16', '2020-12-29', 'Completed', '2024-09-24 17:59:41', '2024-09-24 17:59:41'),
(17, 'Rodger Carroll V', 'Minima accusamus a non autem vel sit enim. Et quae qui hic ut odit. Itaque quae similique laboriosam qui vel.', '1985-07-06', '2022-07-23', 'Completed', '2024-09-24 17:59:41', '2024-09-24 17:59:41'),
(18, 'Nickolas Dickens', 'Id vero sint incidunt fuga labore exercitationem hic. Voluptatem voluptas tempora accusantium accusamus in. Cupiditate consequatur similique id. Iste et at consequatur sed ut sint.', '1990-07-21', '1995-11-05', 'Completed', '2024-09-24 17:59:41', '2024-09-24 17:59:41'),
(19, 'Armand Corwin Sr.', 'Distinctio quis aliquid unde voluptates. Modi sint nam et tempore ut qui et et.', '1977-07-22', '2019-07-01', 'Completed', '2024-09-24 17:59:41', '2024-09-24 17:59:41'),
(20, 'Stan Hermann', 'Inventore ut reprehenderit a eos. Alias illum et architecto explicabo possimus et quos. Sed nulla dolores voluptatem qui et est.', '2015-11-20', '1992-05-12', 'Completed', '2024-09-24 17:59:41', '2024-09-24 17:59:41'),
(21, 'Prof. Lemuel Sporer', 'Suscipit qui iste alias. Sed culpa odit voluptatem. Repudiandae fugit aut qui sed. Illum iste nesciunt vel officia quam qui fugit.', '1994-06-04', '2022-08-21', 'New', '2024-09-24 18:00:03', '2024-09-24 18:00:03'),
(22, 'Tyrel Hickle', 'Rerum saepe voluptas quos quae labore dolorem reprehenderit. Vitae consequuntur quidem quidem voluptatibus. Aspernatur laborum totam vel natus libero sint.', '1982-09-22', '2023-04-08', 'New', '2024-09-24 18:00:03', '2024-09-24 18:00:03'),
(23, 'Tianna Wilderman', 'Voluptas iure non consequatur blanditiis omnis. Nostrum est quo praesentium sit in. Quisquam et et veritatis magnam vel hic suscipit.', '1986-08-21', '2003-07-11', 'Completed', '2024-09-24 18:00:03', '2024-09-24 18:00:03'),
(24, 'Kenna Corwin', 'Sit sed ipsam saepe placeat dolore. Nulla debitis dolorem provident. Saepe libero accusantium sed quibusdam neque. Odio porro et minima magni nisi.', '2021-10-12', '2019-03-12', 'InProgress', '2024-09-24 18:00:03', '2024-09-24 18:00:03'),
(25, 'Horace Gleichner Sr.', 'Aliquid quaerat praesentium pariatur nisi aperiam sit voluptatibus. Rerum cumque est possimus. Odio harum voluptatum nisi repudiandae labore commodi non soluta.', '1974-05-11', '2018-09-30', 'Completed', '2024-09-24 18:00:03', '2024-09-24 18:00:03'),
(26, 'Carey Yost', 'Non ut et mollitia temporibus. Voluptatem alias dicta occaecati et itaque. Voluptatem non vel rerum ad ut qui rerum.', '1970-10-05', '1981-06-26', 'Completed', '2024-09-24 18:00:03', '2024-09-24 18:00:03'),
(27, 'Hannah Spencer', 'Veritatis iusto sequi assumenda ex. Voluptatibus excepturi iusto ut repellendus tenetur nisi mollitia error. Ab aut fugit impedit eum. Doloremque labore harum ratione at sit.', '1998-09-25', '1977-06-21', 'Completed', '2024-09-24 18:00:03', '2024-09-24 18:00:03'),
(28, 'Dr. Madonna Bayer II', 'Odio tempore cumque autem dicta ipsum qui. Sunt sed molestiae et molestiae aut aliquam. Officia aut vel ducimus saepe itaque architecto ratione non.', '1972-03-28', '2007-05-20', 'Completed', '2024-09-24 18:00:03', '2024-09-24 18:00:03'),
(29, 'Adell Cremin', 'Quidem pariatur nihil impedit et quod sit. Debitis quisquam nostrum sed eaque iure ad iure. Quis quis optio corporis tempore.', '1999-06-16', '1976-06-20', 'InProgress', '2024-09-24 18:00:03', '2024-09-24 18:00:03'),
(30, 'Dr. Nyasia Howe Sr.', 'Perferendis adipisci ut quibusdam dolorem est dolor esse similique. Reprehenderit nihil sed adipisci quidem veniam. Dolorem voluptatem amet est nihil aliquam harum. Eos doloribus eum esse voluptates.', '1985-01-15', '2009-11-06', 'New', '2024-09-24 18:00:03', '2024-09-24 18:00:03'),
(31, 'Oma Wisoky', 'Voluptatem nam hic et tenetur vero incidunt eum quia. Est magnam vel dolorem reprehenderit exercitationem fugiat autem. Atque ut laboriosam et et voluptatem. Ea est illo distinctio vero qui.', '2005-06-20', '1981-08-21', 'InProgress', '2024-09-24 18:00:23', '2024-09-24 18:00:23'),
(32, 'Dr. Brenden Rowe III', 'Error quia asperiores repellat sint. Ab hic veritatis non at. Non ea autem molestias dolorem quisquam sed debitis eaque. Consectetur officia eveniet similique sint aliquam magni fuga.', '2012-01-17', '1992-10-02', 'New', '2024-09-24 18:00:23', '2024-09-24 18:00:23'),
(33, 'Salma Swift IV', 'Et quaerat molestias et odit est et. Perspiciatis nisi et qui repellendus natus sint. Sit minima neque temporibus et facilis ea.', '2017-09-30', '2021-10-07', 'New', '2024-09-24 18:00:23', '2024-09-24 18:00:23'),
(34, 'Miss Jaclyn Gerhold IV', 'Ipsam reiciendis quas ut dolores quae odit eos aliquam. Perspiciatis quia et animi. Sunt sapiente temporibus libero omnis. Quo quis officiis distinctio neque.', '1985-09-18', '1986-01-28', 'Completed', '2024-09-24 18:00:23', '2024-09-24 18:00:23'),
(35, 'Moises Breitenberg', 'Iste architecto quo odit. Sapiente id aperiam ut aut voluptatem quisquam placeat omnis. Delectus accusantium consectetur nisi.', '1988-07-07', '1981-03-30', 'New', '2024-09-24 18:00:23', '2024-09-24 18:00:23'),
(36, 'Prof. Lon Harvey', 'Assumenda non consequuntur placeat omnis officia. Distinctio aperiam quos expedita aut.', '2003-01-12', '1976-03-02', 'Completed', '2024-09-24 18:00:23', '2024-09-24 18:00:23'),
(37, 'Larissa Welch', 'Vero voluptatem iusto consectetur accusamus. Nulla rerum qui illum. Recusandae deleniti consequatur molestiae.', '1982-07-07', '2017-10-15', 'New', '2024-09-24 18:00:23', '2024-09-24 18:00:23'),
(38, 'Amaya Stark', 'Molestiae et possimus quod impedit. Porro rerum officiis saepe saepe blanditiis adipisci. Voluptatum minima quod recusandae.', '2021-10-16', '1995-06-28', 'InProgress', '2024-09-24 18:00:23', '2024-09-24 18:00:23'),
(39, 'Mr. Ashton Green IV', 'Ea vel dolores laboriosam vel aut omnis. Ipsa in necessitatibus sapiente similique. Aut tempora omnis delectus.', '2021-09-25', '1980-02-10', 'InProgress', '2024-09-24 18:00:23', '2024-09-24 18:00:23'),
(40, 'Prof. Domenico Marvin', 'Eaque quos quam et quaerat doloribus. Facere explicabo nihil ipsa eaque assumenda officia id.', '1980-12-17', '1998-11-01', 'Completed', '2024-09-24 18:00:23', '2024-09-24 18:00:23'),
(41, 'Mr. Avery Cruickshank Jr.', 'Debitis eveniet ut cupiditate est esse. Laborum iure totam tenetur voluptatum rerum est. Odit adipisci velit ex omnis omnis eaque. Doloremque voluptatem possimus officiis explicabo qui occaecati.', '2010-12-13', '2005-07-19', 'New', '2024-09-24 18:12:04', '2024-09-24 18:12:04'),
(42, 'Ms. Raina Lakin', 'Qui est laboriosam itaque consequuntur. Laboriosam eum aut voluptatem est quae dolores corrupti. Repudiandae odit accusantium maxime qui delectus. Qui doloremque autem et minima fugit est error.', '2003-01-31', '1980-06-03', 'New', '2024-09-24 18:12:05', '2024-09-24 18:12:05'),
(43, 'Mr. Toni Wuckert', 'Neque possimus quas perspiciatis. Suscipit eligendi nesciunt et. Dolores facilis in dolor non voluptas.', '1989-03-21', '1985-02-22', 'Completed', '2024-09-24 18:12:06', '2024-09-24 18:12:06'),
(44, 'Arielle Heathcote', 'Ut voluptatem eos beatae est tenetur aut. Fuga nisi voluptatum eum tempore tempora mollitia.', '2006-01-27', '1979-03-07', 'Completed', '2024-09-24 18:12:06', '2024-09-24 18:12:06'),
(45, 'Felicity Crona DVM', 'Est vel nihil consequatur incidunt. Sed et quo quos et. Quod reprehenderit autem quos nesciunt omnis vel fugiat fuga.', '1992-10-07', '2005-04-13', 'Completed', '2024-09-24 18:12:06', '2024-09-24 18:12:06'),
(46, 'Katrina Casper', 'Et accusantium esse dignissimos repellendus sapiente aspernatur ut. Facilis et possimus nesciunt omnis quam est vero dolorum. Rerum vel eaque ut dolor deserunt tempore hic.', '1986-09-02', '1974-11-06', 'InProgress', '2024-09-24 18:14:44', '2024-09-24 18:14:44'),
(47, 'Mrs. Hettie Stoltenberg', 'Rem id consequatur deleniti blanditiis repellendus. Enim facilis necessitatibus in quia iure est. Aut culpa et velit ipsa optio magni. Libero voluptas est est maxime a.', '1988-03-12', '1990-04-15', 'InProgress', '2024-09-24 18:14:45', '2024-09-24 18:14:45'),
(48, 'Prof. Cierra Bogisich DVM', 'Voluptatem ut quo et aut. Sunt doloribus minima placeat impedit sunt voluptas quisquam. Sit voluptatum facere aut.', '2001-05-23', '2007-11-15', 'InProgress', '2024-09-24 18:14:46', '2024-09-24 18:14:46'),
(49, 'Mr. Dale Boyle', 'Maxime voluptate sed optio eum ducimus. Corporis omnis veritatis possimus voluptatibus. Quo vel odio necessitatibus cupiditate recusandae.', '1999-09-27', '2018-05-15', 'Completed', '2024-09-24 18:14:46', '2024-09-24 18:14:46'),
(50, 'Dr. Novella Renner I', 'Ducimus dolores et autem aliquam necessitatibus. Qui dolor impedit delectus blanditiis. Reiciendis ut fugit quos laborum nihil quod. Harum dolorum id ea et fugit iste.', '2002-10-11', '1980-01-14', 'New', '2024-09-24 18:14:46', '2024-09-24 18:14:46'),
(51, 'Prof. Issac Hirthe', 'Nobis molestias autem saepe perferendis. Nihil id ipsa fugit tempore qui sed autem voluptatem. Fuga aliquid asperiores qui numquam qui libero. Sed et alias at voluptatibus sint voluptatibus culpa.', '2011-01-07', '1976-07-24', 'Completed', '2024-09-24 18:15:15', '2024-09-24 18:15:15'),
(52, 'Eugene Schneider', 'Voluptas alias adipisci quia tempora. Amet laudantium doloribus corrupti doloribus illo quia. Aut cum iste beatae sit. Animi tempore est expedita voluptatem dicta velit.', '1976-11-25', '1985-02-21', 'Completed', '2024-09-24 18:15:16', '2024-09-24 18:15:16'),
(53, 'Miss Rylee Schimmel', 'Et et enim reprehenderit et odit aut quo. At molestiae consequatur sequi necessitatibus. In impedit iste deleniti ea recusandae.', '2014-08-16', '1976-12-28', 'New', '2024-09-24 18:15:16', '2024-09-24 18:15:16'),
(54, 'Donny Gislason', 'Nulla sit numquam quae est et. Amet aliquid earum placeat sunt. Est consequuntur ab eos delectus dolore voluptate ullam.', '1994-02-03', '2008-06-03', 'Completed', '2024-09-24 18:15:16', '2024-09-24 18:15:16'),
(55, 'Vallie Bartoletti', 'Harum nihil quo et hic nihil excepturi provident. Et quia vero ducimus eum voluptas similique dolore dolores. Quas dignissimos sapiente cumque ad aut. Repudiandae rerum neque unde aut vitae fugit.', '1992-12-04', '1996-08-22', 'InProgress', '2024-09-24 18:15:17', '2024-09-24 18:15:17'),
(56, 'Dr. Claudia Kuhic Jr.', 'Temporibus in possimus quisquam maiores quo quibusdam. Ullam rem quia rerum libero dolore culpa. Autem magnam qui aliquam nulla totam blanditiis natus.', '1976-01-30', '1994-04-30', 'New', '2024-09-24 18:20:22', '2024-09-24 18:20:22'),
(57, 'Joana Bernhard', 'Totam unde possimus ad repellat esse aut. Sunt dolorum nihil et doloremque ipsa dolor consequatur. Et omnis quia pariatur quidem aut dolorem. Dolor quia voluptas cupiditate beatae omnis.', '2000-11-04', '2010-04-15', 'InProgress', '2024-09-24 18:20:22', '2024-09-24 18:20:22'),
(58, 'Kariane Shanahan', 'Ullam recusandae vero quia sed. Et cumque autem id natus sed omnis facere cumque. Exercitationem facilis assumenda autem enim nobis.', '1988-06-27', '2002-10-31', 'Completed', '2024-09-24 18:20:22', '2024-09-24 18:20:22'),
(59, 'Reyna Connelly', 'Similique qui sint totam unde ad ut. Quia deleniti molestiae veritatis rerum magnam ut culpa. Tempore doloribus error dignissimos itaque et. Sed culpa nihil dolorem nulla.', '2010-08-02', '1970-11-17', 'Completed', '2024-09-24 18:20:22', '2024-09-24 18:20:22'),
(60, 'Marquise Wisoky III', 'Eligendi est harum consequuntur qui. Id a et soluta ea. Sunt provident beatae inventore quis voluptas labore nisi et. Iusto adipisci omnis non qui quisquam aspernatur quia.', '2018-10-07', '2020-04-12', 'New', '2024-09-24 18:20:22', '2024-09-24 18:20:22'),
(61, 'Kiarra Jacobson', 'Deserunt iusto culpa error at facere. Aut a perferendis consequatur expedita qui nemo. Nemo tenetur iste doloribus odio eos dolorem. Culpa beatae rerum nemo consequatur assumenda omnis.', '2019-09-09', '2011-03-28', 'Completed', '2024-09-24 18:21:25', '2024-09-24 18:21:25'),
(62, 'Rocio Rolfson', 'Ut consequatur et voluptatibus consequatur non iste. Labore dignissimos et iusto minus. Aut temporibus adipisci aut ratione.', '2002-04-16', '2014-12-07', 'Completed', '2024-09-24 18:21:25', '2024-09-24 18:21:25'),
(63, 'Bernie Collier', 'Ullam id adipisci mollitia laudantium facere. Dignissimos aut eveniet aut excepturi dolores deserunt occaecati quae. Vel aliquam possimus nostrum et in.', '1982-01-15', '1977-01-05', 'InProgress', '2024-09-24 18:21:25', '2024-09-24 18:21:25'),
(64, 'Octavia Bradtke DVM', 'Corrupti sed minus sunt. Doloribus qui veritatis consequatur laborum. Quia exercitationem corporis sed est inventore asperiores inventore voluptatem.', '2016-02-03', '1997-04-23', 'New', '2024-09-24 18:21:25', '2024-09-24 18:21:25'),
(65, 'Ms. Zora Bartell', 'Autem ut inventore vero deleniti. Alias natus esse doloribus. Voluptatum nihil autem blanditiis sint quis. Placeat ut et quia commodi ut eos optio velit.', '1993-03-11', '1974-01-16', 'Completed', '2024-09-24 18:21:25', '2024-09-24 18:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `project_users`
--

CREATE TABLE `project_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('approved','disapproved','removed') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_users`
--

INSERT INTO `project_users` (`id`, `user_id`, `project_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 26, 41, 'approved', '2024-09-24 18:12:06', '2024-09-24 18:12:06'),
(2, 27, 42, 'removed', '2024-09-24 18:12:06', '2024-09-24 18:12:06'),
(3, 28, 43, 'removed', '2024-09-24 18:12:06', '2024-09-24 18:12:06'),
(4, 29, 44, 'approved', '2024-09-24 18:12:06', '2024-09-24 18:12:06'),
(5, 30, 45, 'removed', '2024-09-24 18:12:06', '2024-09-24 18:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `status` enum('InProgress','New','Completed') NOT NULL DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `project_id`, `description`, `end_date`, `start_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Coralie Connelly', 31, 'Quas totam laborum et quia dolores. Atque modi sit quasi reprehenderit delectus ut est. Enim eum esse quisquam sit. Et doloremque laudantium est recusandae nobis omnis.', '2007-07-27', '1970-04-20', 'New', '2024-09-24 18:00:24', '2024-09-24 18:00:24'),
(2, 'Miss Nova Barton', 32, 'Eum et voluptatem ut aut expedita quod. Harum distinctio qui qui harum deserunt corrupti recusandae id.', '1990-02-06', '2016-09-24', 'New', '2024-09-24 18:00:24', '2024-09-24 18:00:24'),
(3, 'Mrs. Madeline Breitenberg Sr.', 33, 'Neque sit pariatur dolores voluptatem omnis error ex perferendis. Rerum qui eaque debitis. Inventore sunt et et maxime nulla. Quia est reiciendis molestiae sed.', '1988-08-28', '2008-11-11', 'New', '2024-09-24 18:00:24', '2024-09-24 18:00:24'),
(4, 'Dr. Ardith Nolan', 34, 'Aut ut facilis qui sed ex ratione. Et dolor mollitia minima et minus. Fugiat aspernatur quisquam nihil est.', '2022-07-08', '2013-05-05', 'Completed', '2024-09-24 18:00:24', '2024-09-24 18:00:24'),
(5, 'Sonny Streich', 35, 'Harum eligendi sunt totam debitis ut reprehenderit. Nostrum eos dicta magnam voluptatem nostrum rerum. Nulla consectetur quis quo tempore placeat. Dolor eos harum velit nisi ut.', '1970-11-09', '2008-05-02', 'New', '2024-09-24 18:00:24', '2024-09-24 18:00:24'),
(6, 'Scarlett Gutmann', 36, 'Et voluptas quae accusantium quia laboriosam reprehenderit voluptatem. Cum et earum deleniti facilis. Rerum praesentium et aut.', '1972-03-26', '2019-02-02', 'New', '2024-09-24 18:00:24', '2024-09-24 18:00:24'),
(7, 'Keven Toy', 37, 'Soluta unde commodi veritatis et voluptas. Saepe neque vitae iste sit qui fugiat. Minima ut enim totam tenetur consequatur aut dolore. Occaecati laudantium id fuga sit at consequatur autem.', '2010-12-27', '1991-09-26', 'New', '2024-09-24 18:00:24', '2024-09-24 18:00:24'),
(8, 'Mrs. Shanelle Sauer DVM', 38, 'Enim perspiciatis blanditiis saepe est facilis. Saepe quo culpa consequatur ut deleniti. A ut hic itaque et. Aut ratione mollitia nihil qui magnam.', '1979-09-24', '1993-06-19', 'New', '2024-09-24 18:00:24', '2024-09-24 18:00:24'),
(9, 'Liza Baumbach', 39, 'Sunt totam dolor velit. Suscipit ad quae accusantium laboriosam excepturi. Autem omnis distinctio et adipisci et vel. Veniam qui ut ipsum aut velit dolore autem nobis.', '1980-12-25', '1982-03-26', 'Completed', '2024-09-24 18:00:24', '2024-09-24 18:00:24'),
(10, 'Mozell Mann', 40, 'Possimus commodi neque illum aut magnam iure ea. Quidem incidunt laudantium amet reiciendis et. Eligendi explicabo itaque quia velit. Quo quam nisi dolorem expedita facere consequatur.', '1982-11-25', '2005-06-29', 'InProgress', '2024-09-24 18:00:24', '2024-09-24 18:00:24'),
(11, 'Nils Heaney', 46, 'Voluptatem ut recusandae consequatur nemo cupiditate atque. Magni nam et et molestias quia quas.', '1997-12-29', '2016-10-28', 'New', '2024-09-24 18:14:45', '2024-09-24 18:14:45'),
(12, 'Ulises Hodkiewicz', 47, 'Reiciendis perferendis enim et totam perferendis suscipit. Et repudiandae qui mollitia sed optio laboriosam et. Et ullam eos beatae atque.', '2023-02-21', '1970-06-17', 'New', '2024-09-24 18:14:45', '2024-09-24 18:14:45'),
(13, 'Damien Reinger', 48, 'Voluptatibus vitae amet corporis qui architecto. Modi minima recusandae minus ut accusamus. Rerum ea qui tempora reiciendis.', '2001-12-12', '1975-02-18', 'InProgress', '2024-09-24 18:14:46', '2024-09-24 18:14:46'),
(14, 'Johnson Goodwin', 49, 'Temporibus ipsam reiciendis non sed. Et molestiae exercitationem quasi. Quaerat odit voluptatem temporibus at ut sed ut.', '2011-02-18', '2018-11-05', 'New', '2024-09-24 18:14:46', '2024-09-24 18:14:46'),
(15, 'Kirstin Pfannerstill', 50, 'Dolorem voluptatem sit non delectus at qui. Vero exercitationem quos quibusdam ea molestias quisquam. Alias optio ducimus dolore ad aut et et necessitatibus. Cum assumenda veniam enim ab nemo rem.', '2001-09-22', '1974-11-26', 'InProgress', '2024-09-24 18:14:46', '2024-09-24 18:14:46'),
(16, 'Manley Lesch', 51, 'Numquam optio tempora sit molestiae autem quia dolor. Unde maxime soluta sed dolorem.', '2011-08-11', '2001-01-29', 'Completed', '2024-09-24 18:15:15', '2024-09-24 18:15:15'),
(17, 'Miss Fae Jerde IV', 52, 'Accusantium animi nulla eius eum. Aut similique in unde provident sunt. Odit necessitatibus repellendus qui praesentium optio debitis et.', '1986-05-27', '1993-06-12', 'Completed', '2024-09-24 18:15:16', '2024-09-24 18:15:16'),
(18, 'Geovanni Torphy', 53, 'Repellat sint voluptatum est libero tempore sed. Aut velit recusandae voluptates accusantium repudiandae. Suscipit facilis amet ratione esse fugiat occaecati amet ut.', '1988-04-21', '2007-07-31', 'InProgress', '2024-09-24 18:15:16', '2024-09-24 18:15:16'),
(19, 'Mr. Jovan Christiansen DVM', 54, 'Reiciendis commodi provident tempora vitae. Delectus quasi nemo ad dolores. Enim aut nihil autem qui expedita qui.', '2001-05-08', '2007-07-11', 'InProgress', '2024-09-24 18:15:17', '2024-09-24 18:15:17'),
(20, 'Vidal Weissnat', 55, 'Pariatur sint quidem architecto exercitationem dolor eius assumenda. Perferendis minus optio facilis dicta unde ratione mollitia. Error ducimus nobis quia dolore aut.', '2004-10-06', '1971-02-06', 'New', '2024-09-24 18:15:17', '2024-09-24 18:15:17'),
(21, 'Leopoldo Stark', 56, 'A aut voluptatem et ex minus quae. Deleniti necessitatibus debitis magni quas dicta. Et et eos ipsam. Deserunt blanditiis deleniti corporis voluptatibus numquam qui quae.', '2018-08-25', '2011-03-02', 'New', '2024-09-24 18:20:22', '2024-09-24 18:20:22'),
(22, 'Arden Marvin Sr.', 57, 'Unde ut aut voluptatibus ut dolorum id consectetur. Aperiam molestiae iusto et ratione est beatae aut ullam. Porro occaecati possimus accusamus veritatis esse minus. Nihil eius et id est aut minima.', '1987-02-28', '1981-05-17', 'Completed', '2024-09-24 18:20:22', '2024-09-24 18:20:22'),
(23, 'Ruben Kemmer', 58, 'Molestias recusandae odit magni pariatur in consequuntur. Aliquid ipsum perferendis ea maxime aliquid. Eius ea dignissimos temporibus dolorum. Eos aut aut sit consequatur.', '1994-12-30', '2001-07-21', 'InProgress', '2024-09-24 18:20:22', '2024-09-24 18:20:22'),
(24, 'Janie Goldner', 59, 'Et mollitia inventore maiores quis voluptas sed. Sed excepturi est numquam quisquam maiores nostrum voluptas. Quam ipsam dolores atque et at nihil sed. Alias velit minus omnis minima.', '2020-02-12', '1984-12-31', 'New', '2024-09-24 18:20:22', '2024-09-24 18:20:22'),
(25, 'Alden Hansen', 60, 'Suscipit officiis dolorem quisquam voluptatem voluptatum atque fuga cum. Sint itaque et quia. Officia aliquid sapiente molestiae. Quis sit ducimus repellendus nihil et quia.', '1978-10-19', '2016-10-14', 'Completed', '2024-09-24 18:20:23', '2024-09-24 18:20:23'),
(26, 'Lilly Hayes', 61, 'Error alias et autem veritatis eum excepturi. Rerum iure et qui et et. Cum nobis aut suscipit enim suscipit quidem et libero. Quo quis ab laudantium totam quasi quisquam.', '2023-08-21', '1994-03-01', 'New', '2024-09-24 18:21:25', '2024-09-24 18:21:25'),
(27, 'Alexandrea Hills MD', 62, 'Adipisci vel et ut et voluptas facilis nobis libero. Minus quibusdam aliquid nihil eius. Et facilis blanditiis velit nemo et aut a.', '1987-02-10', '1990-01-30', 'Completed', '2024-09-24 18:21:25', '2024-09-24 18:21:25'),
(28, 'Rachel Hagenes DVM', 63, 'Alias veritatis libero expedita culpa hic laborum. Saepe eveniet aut ex pariatur. Expedita quia aspernatur placeat qui voluptatem.', '1993-01-15', '1990-08-12', 'InProgress', '2024-09-24 18:21:25', '2024-09-24 18:21:25'),
(29, 'Mr. Afton Cummerata DVM', 64, 'Dolores excepturi et neque et. Placeat est itaque beatae asperiores. Sint fugiat quia ut ad et.', '2000-06-26', '2003-11-11', 'InProgress', '2024-09-24 18:21:25', '2024-09-24 18:21:25'),
(30, 'Adela Hessel II', 65, 'Iusto harum molestiae consectetur autem. Sit dolor voluptate vel architecto. Consequuntur voluptatem aut corporis et ex quis pariatur voluptatem. Aut error et mollitia quae minus fugit est ut.', '2001-09-30', '1992-06-26', 'New', '2024-09-24 18:21:26', '2024-09-24 18:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `task_users`
--

CREATE TABLE `task_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_users`
--

INSERT INTO `task_users` (`id`, `user_id`, `task_id`, `created_at`, `updated_at`) VALUES
(1, 36, 16, '2024-09-24 18:15:17', '2024-09-24 18:15:17'),
(2, 37, 17, '2024-09-24 18:15:17', '2024-09-24 18:15:17'),
(3, 38, 18, '2024-09-24 18:15:17', '2024-09-24 18:15:17'),
(4, 39, 19, '2024-09-24 18:15:17', '2024-09-24 18:15:17'),
(5, 40, 20, '2024-09-24 18:15:17', '2024-09-24 18:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Caleb Hauck', 'broberts@example.org', '2024-09-24 17:53:01', '$2y$12$kKf0cMMKxmD/dCRB1E3CkO8oD5fzTBeQyRDcsERqFPPNq1K89BTIW', 'IsCkp588pI', '2024-09-24 17:53:03', '2024-09-24 17:53:03'),
(2, 'Josefa O\'Conner', 'rippin.maxime@example.org', '2024-09-24 17:53:02', '$2y$12$kKf0cMMKxmD/dCRB1E3CkO8oD5fzTBeQyRDcsERqFPPNq1K89BTIW', 'uAJEUiqc8Z', '2024-09-24 17:53:04', '2024-09-24 17:53:04'),
(3, 'Mrs. Taryn Russel PhD', 'brandon.douglas@example.com', '2024-09-24 17:53:02', '$2y$12$kKf0cMMKxmD/dCRB1E3CkO8oD5fzTBeQyRDcsERqFPPNq1K89BTIW', '25RsAlP1a2', '2024-09-24 17:53:04', '2024-09-24 17:53:04'),
(4, 'Ludwig Wilderman V', 'wkeeling@example.org', '2024-09-24 17:53:02', '$2y$12$kKf0cMMKxmD/dCRB1E3CkO8oD5fzTBeQyRDcsERqFPPNq1K89BTIW', 'JgjMXBZpfU', '2024-09-24 17:53:04', '2024-09-24 17:53:04'),
(5, 'Brendon Mitchell', 'rogers08@example.net', '2024-09-24 17:53:02', '$2y$12$kKf0cMMKxmD/dCRB1E3CkO8oD5fzTBeQyRDcsERqFPPNq1K89BTIW', 'hPu1GHK0fO', '2024-09-24 17:53:04', '2024-09-24 17:53:04'),
(6, 'Walker Stamm', 'frederique.bradtke@example.com', '2024-09-24 17:53:02', '$2y$12$kKf0cMMKxmD/dCRB1E3CkO8oD5fzTBeQyRDcsERqFPPNq1K89BTIW', '6mYD2mTs3Q', '2024-09-24 17:53:04', '2024-09-24 17:53:04'),
(7, 'Neal Waters MD', 'zbechtelar@example.com', '2024-09-24 17:53:02', '$2y$12$kKf0cMMKxmD/dCRB1E3CkO8oD5fzTBeQyRDcsERqFPPNq1K89BTIW', '1fSw72yku4', '2024-09-24 17:53:04', '2024-09-24 17:53:04'),
(8, 'Weldon Kemmer', 'gottlieb.delpha@example.com', '2024-09-24 17:53:02', '$2y$12$kKf0cMMKxmD/dCRB1E3CkO8oD5fzTBeQyRDcsERqFPPNq1K89BTIW', 'nGYSWuTjK3', '2024-09-24 17:53:04', '2024-09-24 17:53:04'),
(9, 'Rozella Heidenreich', 'rharris@example.com', '2024-09-24 17:53:02', '$2y$12$kKf0cMMKxmD/dCRB1E3CkO8oD5fzTBeQyRDcsERqFPPNq1K89BTIW', 'OIQqPuaAkv', '2024-09-24 17:53:05', '2024-09-24 17:53:05'),
(10, 'Mrs. Kara Kreiger IV', 'lakin.jonas@example.com', '2024-09-24 17:53:02', '$2y$12$kKf0cMMKxmD/dCRB1E3CkO8oD5fzTBeQyRDcsERqFPPNq1K89BTIW', 'eYfOznaO9S', '2024-09-24 17:53:05', '2024-09-24 17:53:05'),
(11, 'Miss Bridie Schuster', 'quigley.roslyn@example.net', '2024-09-24 18:04:23', '$2y$12$oPlJ2ZNCBHsXQvhpUI1ARO.AG3dgjSlb9G2funrsxPGu3GId.pqCu', '8DPmIbobXm', '2024-09-24 18:04:24', '2024-09-24 18:04:24'),
(12, 'Krystina Kuhlman', 'kacey27@example.net', '2024-09-24 18:04:24', '$2y$12$oPlJ2ZNCBHsXQvhpUI1ARO.AG3dgjSlb9G2funrsxPGu3GId.pqCu', 'Gtnjkfvf43', '2024-09-24 18:04:24', '2024-09-24 18:04:24'),
(13, 'Eden Weissnat', 'margot.huel@example.com', '2024-09-24 18:04:24', '$2y$12$oPlJ2ZNCBHsXQvhpUI1ARO.AG3dgjSlb9G2funrsxPGu3GId.pqCu', 'omCLDrH1yU', '2024-09-24 18:04:24', '2024-09-24 18:04:24'),
(14, 'Mallory Bahringer', 'connor00@example.net', '2024-09-24 18:04:24', '$2y$12$oPlJ2ZNCBHsXQvhpUI1ARO.AG3dgjSlb9G2funrsxPGu3GId.pqCu', 'EYMU0VNHaP', '2024-09-24 18:04:24', '2024-09-24 18:04:24'),
(15, 'Federico Herman', 'parker50@example.com', '2024-09-24 18:04:24', '$2y$12$oPlJ2ZNCBHsXQvhpUI1ARO.AG3dgjSlb9G2funrsxPGu3GId.pqCu', 'XhKtX5PCcH', '2024-09-24 18:04:24', '2024-09-24 18:04:24'),
(16, 'Hazel Quigley', 'audreanne.okuneva@example.net', '2024-09-24 18:04:34', '$2y$12$oPlJ2ZNCBHsXQvhpUI1ARO.AG3dgjSlb9G2funrsxPGu3GId.pqCu', 'aI5iQ4tLNS', '2024-09-24 18:04:34', '2024-09-24 18:04:34'),
(17, 'Mrs. Stefanie Wiza V', 'xveum@example.com', '2024-09-24 18:04:34', '$2y$12$oPlJ2ZNCBHsXQvhpUI1ARO.AG3dgjSlb9G2funrsxPGu3GId.pqCu', '3EGiXRGKlJ', '2024-09-24 18:04:34', '2024-09-24 18:04:34'),
(18, 'Mr. Keyon Anderson DVM', 'imann@example.com', '2024-09-24 18:04:34', '$2y$12$oPlJ2ZNCBHsXQvhpUI1ARO.AG3dgjSlb9G2funrsxPGu3GId.pqCu', '4ge5MJuhWQ', '2024-09-24 18:04:34', '2024-09-24 18:04:34'),
(19, 'Zoe Parisian', 'gorczany.skylar@example.com', '2024-09-24 18:04:34', '$2y$12$oPlJ2ZNCBHsXQvhpUI1ARO.AG3dgjSlb9G2funrsxPGu3GId.pqCu', 'ZTvgc1QD1d', '2024-09-24 18:04:34', '2024-09-24 18:04:34'),
(20, 'Erna Kuhn', 'macejkovic.marjolaine@example.com', '2024-09-24 18:04:34', '$2y$12$oPlJ2ZNCBHsXQvhpUI1ARO.AG3dgjSlb9G2funrsxPGu3GId.pqCu', 'J49ILkmKhP', '2024-09-24 18:04:34', '2024-09-24 18:04:34'),
(21, 'Pattie Heaney', 'hattie.mcglynn@example.net', '2024-09-24 18:05:43', '$2y$12$iDJ8.u4wrBSElBmUmtWXcew0gjpOO6AO9zeo4HHemjR4OGKryVD76', 'lV4f3G7ksy', '2024-09-24 18:05:44', '2024-09-24 18:05:44'),
(22, 'Lillian Sanford Sr.', 'keara71@example.org', '2024-09-24 18:05:44', '$2y$12$iDJ8.u4wrBSElBmUmtWXcew0gjpOO6AO9zeo4HHemjR4OGKryVD76', 'SatX8Gaicp', '2024-09-24 18:05:44', '2024-09-24 18:05:44'),
(23, 'Jessy Bogan', 'upton.chad@example.org', '2024-09-24 18:05:44', '$2y$12$iDJ8.u4wrBSElBmUmtWXcew0gjpOO6AO9zeo4HHemjR4OGKryVD76', 'CZIohZQeSc', '2024-09-24 18:05:44', '2024-09-24 18:05:44'),
(24, 'Leonora Nienow', 'ykris@example.com', '2024-09-24 18:05:44', '$2y$12$iDJ8.u4wrBSElBmUmtWXcew0gjpOO6AO9zeo4HHemjR4OGKryVD76', 'ylRMRwEfAq', '2024-09-24 18:05:44', '2024-09-24 18:05:44'),
(25, 'Connie Dare', 'nikki.moore@example.com', '2024-09-24 18:05:44', '$2y$12$iDJ8.u4wrBSElBmUmtWXcew0gjpOO6AO9zeo4HHemjR4OGKryVD76', '5r6jYbZtmL', '2024-09-24 18:05:44', '2024-09-24 18:05:44'),
(26, 'Shana Erdman DVM', 'wsmitham@example.org', '2024-09-24 18:12:04', '$2y$12$tmHVOOee.SAUUk3DT3naP.008mPYPJqipGNjtaRTzwJPEKSOC.QLW', 'Ijvy8swEDK', '2024-09-24 18:12:05', '2024-09-24 18:12:05'),
(27, 'Alek Von', 'ohara.rowena@example.org', '2024-09-24 18:12:06', '$2y$12$tmHVOOee.SAUUk3DT3naP.008mPYPJqipGNjtaRTzwJPEKSOC.QLW', '4caccdBkGe', '2024-09-24 18:12:06', '2024-09-24 18:12:06'),
(28, 'Mrs. Mertie Raynor', 'denesik.andy@example.org', '2024-09-24 18:12:06', '$2y$12$tmHVOOee.SAUUk3DT3naP.008mPYPJqipGNjtaRTzwJPEKSOC.QLW', 'vxBIHLr8Yk', '2024-09-24 18:12:06', '2024-09-24 18:12:06'),
(29, 'Donato Ullrich', 'ywindler@example.net', '2024-09-24 18:12:06', '$2y$12$tmHVOOee.SAUUk3DT3naP.008mPYPJqipGNjtaRTzwJPEKSOC.QLW', 'tlknK1Mzyy', '2024-09-24 18:12:06', '2024-09-24 18:12:06'),
(30, 'Jessie Wyman', 'bernier.elian@example.org', '2024-09-24 18:12:06', '$2y$12$tmHVOOee.SAUUk3DT3naP.008mPYPJqipGNjtaRTzwJPEKSOC.QLW', '2wzcRVXn0e', '2024-09-24 18:12:06', '2024-09-24 18:12:06'),
(31, 'Lessie Monahan', 'weber.ewell@example.org', '2024-09-24 18:14:45', '$2y$12$ZejNu/A9.XfWT8aDzqcJ5OU6lLsYmkhccZUJ14IbxdHJJyTr1OV92', 'gXLKCcMIJZ', '2024-09-24 18:14:45', '2024-09-24 18:14:45'),
(32, 'Bo Keeling', 'kirsten55@example.com', '2024-09-24 18:14:46', '$2y$12$ZejNu/A9.XfWT8aDzqcJ5OU6lLsYmkhccZUJ14IbxdHJJyTr1OV92', 'mG0TGSmfov', '2024-09-24 18:14:46', '2024-09-24 18:14:46'),
(33, 'Prof. Breanna Ruecker PhD', 'denis73@example.net', '2024-09-24 18:14:46', '$2y$12$ZejNu/A9.XfWT8aDzqcJ5OU6lLsYmkhccZUJ14IbxdHJJyTr1OV92', 'OdhCeLqGsk', '2024-09-24 18:14:46', '2024-09-24 18:14:46'),
(34, 'Mr. Darrel Bruen', 'pfannerstill.clair@example.org', '2024-09-24 18:14:46', '$2y$12$ZejNu/A9.XfWT8aDzqcJ5OU6lLsYmkhccZUJ14IbxdHJJyTr1OV92', 'IjZ7CrulSs', '2024-09-24 18:14:46', '2024-09-24 18:14:46'),
(35, 'Dr. Adelbert Halvorson DVM', 'armstrong.rebekah@example.com', '2024-09-24 18:14:46', '$2y$12$ZejNu/A9.XfWT8aDzqcJ5OU6lLsYmkhccZUJ14IbxdHJJyTr1OV92', 'bOhHZ7gN1j', '2024-09-24 18:14:46', '2024-09-24 18:14:46'),
(36, 'Arlo Turner', 'lolita.nikolaus@example.org', '2024-09-24 18:15:15', '$2y$12$qzqYV2juU2cJp5p0c.d/5uJ7aoAQaUQqc5u6YIaO.b.0Loc47EBXq', '0xKQHc5QuI', '2024-09-24 18:15:16', '2024-09-24 18:15:16'),
(37, 'Flavie Gerhold', 'jarod.ziemann@example.org', '2024-09-24 18:15:16', '$2y$12$qzqYV2juU2cJp5p0c.d/5uJ7aoAQaUQqc5u6YIaO.b.0Loc47EBXq', 'WhmCS90SYe', '2024-09-24 18:15:16', '2024-09-24 18:15:16'),
(38, 'Nayeli Russel', 'eli.dickens@example.net', '2024-09-24 18:15:16', '$2y$12$qzqYV2juU2cJp5p0c.d/5uJ7aoAQaUQqc5u6YIaO.b.0Loc47EBXq', 'IxYObQabYy', '2024-09-24 18:15:16', '2024-09-24 18:15:16'),
(39, 'Kristin Yundt', 'orn.melisa@example.com', '2024-09-24 18:15:17', '$2y$12$qzqYV2juU2cJp5p0c.d/5uJ7aoAQaUQqc5u6YIaO.b.0Loc47EBXq', 'ALYoxO7fkP', '2024-09-24 18:15:17', '2024-09-24 18:15:17'),
(40, 'Prof. Jena Hyatt MD', 'rene08@example.net', '2024-09-24 18:15:17', '$2y$12$qzqYV2juU2cJp5p0c.d/5uJ7aoAQaUQqc5u6YIaO.b.0Loc47EBXq', 'EZBtr63SGg', '2024-09-24 18:15:17', '2024-09-24 18:15:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checklists`
--
ALTER TABLE `checklists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment__attaches`
--
ALTER TABLE `comment__attaches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_users`
--
ALTER TABLE `project_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_project_id_foreign` (`project_id`);

--
-- Indexes for table `task_users`
--
ALTER TABLE `task_users`
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
-- AUTO_INCREMENT for table `checklists`
--
ALTER TABLE `checklists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment__attaches`
--
ALTER TABLE `comment__attaches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `project_users`
--
ALTER TABLE `project_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `task_users`
--
ALTER TABLE `task_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
