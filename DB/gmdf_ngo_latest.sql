-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2024 at 06:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmdf_ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `fundrisingpost`
--

CREATE TABLE `fundrisingpost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `bank_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `account_holders_name` varchar(255) NOT NULL,
  `upi_id` varchar(255) NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fundrisingpost`
--

INSERT INTO `fundrisingpost` (`id`, `title`, `description`, `price`, `image`, `status`, `bank_name`, `account_number`, `ifsc_code`, `branch`, `account_holders_name`, `upi_id`, `qr_code`, `created_at`, `updated_at`) VALUES
(7, 'This is fundrising post from souvik', '<p>ihb bewdbdeji birbri brebrei brejierofror onrenr jbrogbore jrebreb jbfweojdqi3jpqwd jwoghoi jpodjoi brofoewo fbweoh qoiqhdo brovbroinw obreovwepiwf berof eoibreo ihoi ihb bewdbdeji birbri brebrei brejierofror onrenr jbrogbore jrebreb jbfweojdqi3jpqwd jwoghoi jpodjoi brofoewo fbweoh qoiqhdo brovbroinw obreovwepiwf berof eoibreo ihoi ihb bewdbdeji birbri brebrei brejierofror onrenr jbrogbore jrebreb jbfweojdqi3jpqwd jwoghoi jpodjoi brofoewo fbweoh qoiqhdo brovbroinw obreovwepiwf berof eoibreo ihoi ihb bewdbdeji birbri brebrei brejierofror onrenr jbrogbore jrebreb jbfweojdqi3jpqwd jwoghoi jpodjoi brofoewo fbweoh qoiqhdo brovbroinw obreovwepiwf berof eoibreo ihoi ihb bewdbdeji birbri brebrei brejierofror onrenr jbrogbore jrebreb jbfweojdqi3jpqwd jwoghoi jpodjoi brofoewo fbweoh qoiqhdo brovbroinw obreovwepiwf berof eoibreo ihoi ihb bewdbdeji birbri brebrei brejierofror onrenr jbrogbore jrebreb jbfweojdqi3jpqwd jwoghoi jpodjoi brofoewo fbweoh qoiqhdo brovbroinw obreovwepiwf berof eoibreo ihoi ihb bewdbdeji birbri brebrei brejierofror onrenr jbrogbore jrebreb jbfweojdqi3jpqwd jwoghoi jpodjoi brofoewo fbweoh qoiqhdo brovbroinw obreovwepiwf berof eoibreo ihoi</p>', 500000.00, 'fundrising1721132061.jpg', '0', 'Union bank of india model state', '90000090000199', 'bank0011200', 'Ashoknagar', 'Souvik Mukherjee', 'png@bank', 'qr_code_fundrising1721132061.jpg', '2024-07-15 18:30:00', '2024-07-15 18:30:00'),
(8, 'This is post from soumen', '<p>jhcjhc jwejc cqwkjd dhjwber &nbsp;wdwewkfwed qwhwekhfbwek jqwkhdbqwkhbwef bwejhfwejh fewkhfbwekh fbwekfbhef b jhcjhc jwejc cqwkjd dhjwber &nbsp;wdwewkfwed qwhwekhfbwek jqwkhdbqwkhbwef bwejhfwejh fewkhfbwekh fbwekfbhef b jhcjhc jwejc cqwkjd dhjwber &nbsp;wdwewkfwed qwhwekhfbwek jqwkhdbqwkhbwef bwejhfwejh fewkhfbwekh fbwekfbhef b jhcjhc jwejc cqwkjd dhjwber &nbsp;wdwewkfwed qwhwekhfbwek jqwkhdbqwkhbwef bwejhfwejh fewkhfbwekh fbwekfbhef b jhcjhc jwejc cqwkjd dhjwber &nbsp;wdwewkfwed qwhwekhfbwek jqwkhdbqwkhbwef bwejhfwejh fewkhfbwekh fbwekfbhef b jhcjhc jwejc cqwkjd dhjwber &nbsp;wdwewkfwed qwhwekhfbwek jqwkhdbqwkhbwef bwejhfwejh fewkhfbwekh fbwekfbhef b</p>', 600000.00, 'fundrising1721133737.jpg', '1', 'Bank of India', '9000009000400', 'bank00112987', 'Krishnanagar', 'Ram Kumar', 'bankofindia@bank', 'fundrising_qr_code1721133737.png', '2024-07-15 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'this is image 1', 'gallery1716289882.jpg', '1', NULL, NULL),
(2, 'this is image 2', 'gallery1716289902.jpg', '1', NULL, NULL),
(3, 'this is image 3', 'gallery1716289917.jpg', '1', NULL, NULL),
(4, 'this is image 4', 'gallery1716289932.jpg', '1', NULL, NULL),
(5, 'this is image 5', 'gallery1716289949.jpg', '1', NULL, NULL),
(6, 'this is image 7', 'gallery1716289967.jpg', '1', NULL, NULL),
(7, 'this is image 8', 'gallery1716289980.jpg', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mainslider`
--

CREATE TABLE `mainslider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mainslider`
--

INSERT INTO `mainslider` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'This is first NGO Banner', 'first Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated.', 'mainslider1715936238.jpg', '1', NULL, NULL),
(2, 'This is NGO banner 2', 'second Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated.', 'mainslider1715936282.jpg', '1', NULL, NULL),
(3, 'This is GMDF NGO banner 3', 'Third Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated.', 'mainslider1715936355.jpg', '0', NULL, NULL),
(4, 'This is GMDF NGO banner 4', '123Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated.', 'mainslider1716269491.jpg', '1', NULL, NULL);

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
(13, '0001_01_01_000000_create_users_table', 1),
(14, '0001_01_01_000001_create_cache_table', 1),
(15, '0001_01_01_000002_create_jobs_table', 1),
(16, '2024_04_27_060333_create_newscategory_table', 1),
(17, '2024_05_02_121833_create_news_table', 1),
(18, '2024_05_06_114731_create_fundrisingpost_table', 1),
(19, '2024_05_07_070106_create_ngonotice_table', 1),
(20, '2024_05_08_060113_create_ngocontact_table', 1),
(21, '2024_05_08_065444_create_ngosetting_table', 1),
(22, '2024_05_09_060328_create_mainslider_table', 1),
(23, '2024_05_10_061422_create_gallery_table', 1),
(24, '2024_05_14_094551_create_ngomembership_table', 1),
(27, '2024_05_23_063235_create_schooldetails_table', 2),
(28, '2024_05_31_062432_create_schoolclass_table', 3),
(32, '2024_05_31_082031_create_schoolsection_table', 4),
(34, '2024_06_04_060739_create_studentdetails_table', 5),
(35, '2024_06_26_113900_create_schoolnotice_table', 6),
(36, '2024_06_27_062329_create_schoolteacher_table', 7),
(37, '2024_06_28_053051_create_schoolsubjects_table', 8),
(38, '2024_06_28_090413_create_notes_table', 9),
(39, '2024_07_08_071308_create_schoolschedule_table', 10),
(40, '2024_07_08_091140_create_schoolresult_table', 11),
(43, '2024_07_08_110318_create_schoolbankdetails_table', 12),
(45, '2024_07_09_074220_create_schoolsetting_table', 13),
(46, '2024_07_11_094948_create_schoolcontact_table', 14),
(47, '2024_07_15_053852_create_schoolstudentfees_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `newstitle` varchar(255) NOT NULL,
  `newsdescription` text NOT NULL,
  `newsimage` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `newstitle`, `newsdescription`, `newsimage`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'this is new category post', '<p>jkdsbvjkb jbjdsbvjh bjhebhjvb jhbh bjhb jhrbrh bhbr hbkhreb khberh bjherb jhbjh bejhbkherbvkjb kjbekjvberk verkhvrb kberkvkjer bkjrevbk jrekhvk rbrkjvb rkebv jkerbfkjb kjbrkjb kjreb jkbrjkb kjrbkjfb rjkbrekj bjkbrj bkjrbrekjb jkbkjwnfjk rbkjrb jkrbjkfbk jbrejkb kjrvbkrb kjrb kjbre</p>', '1715837723.jpg', '1', '2024-05-15 18:30:00', NULL),
(2, 2, 'this is demo category post title', '<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.</p>', '1715946883.jpg', '1', '2024-05-16 18:30:00', NULL),
(3, 2, 'this is demo category new post', '<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.</p>', '1716268546.jpg', '1', '2024-05-20 18:30:00', NULL),
(4, 1, 'this is new test category post 2', '<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.</p>', '1716268589.jpg', '1', '2024-05-20 18:30:00', NULL),
(5, 2, 'this is post 3', '<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.</p>', '1716268651.jpg', '1', '2024-05-20 18:30:00', NULL),
(6, 1, 'this i another category post', '<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.</p>', '1716268717.jpg', '1', '2024-05-20 18:30:00', NULL),
(7, 2, 'gfghf gcg ghchf ghfyfu ghcdhfv vhffjh', '<p>fxgfxgfg hvcghchchg &nbsp;fytdtydtyh hcgdxtrv gctydyt bjkhui &nbsp;ghdtystrs jhvyf ghdtrdtg</p><ul><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;hvyfc ctgd &nbsp;hjf fxgfxgfg hvcghchchg &nbsp;fytdtydtyh hcgdxtrv gctydyt bjkhui &nbsp;ghdtystrs jhvyf ghdtrdtg hvyfc ctgd &nbsp;hjf fxgfxgfg hvcghchchg &nbsp;fytdtydtyh hcgdxtrv gctydyt bjkhui &nbsp;ghdtystrs jhvyf ghdtrdtg hvyfc ctgd &nbsp;hjf fxgfxgfg hvcghchchg &nbsp;fytdtydtyh hcgdxtrv gctydyt bjkhui &nbsp;ghdtystrs jhvyf ghdtrdtg hvyfc ctgd &nbsp;hjf fxgfxgfg hvcghchchg &nbsp;fytdtydtyh hcgdxtrv gctydyt bjkhui &nbsp;ghdtystrs jhvyf ghdtrdtg hvyfc ctgd &nbsp;hjf fxgfxgfg hvcghchchg &nbsp;fytdtydtyh hcgdxtrv gctydyt bjkhui &nbsp;ghdtystrs jhvyf ghdtrdtg hvyfc ctgd &nbsp;hjf</li></ul>', '1717654842.jpg', '1', '2024-05-20 18:30:00', '2024-06-05 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `newscategory`
--

CREATE TABLE `newscategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `categorydescription` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newscategory`
--

INSERT INTO `newscategory` (`id`, `categoryname`, `categorydescription`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test category', 'this is test category', '1', '2024-05-15 18:30:00', NULL),
(2, 'demo category', 'this is demo category post', '1', '2024-05-16 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ngocontact`
--

CREATE TABLE `ngocontact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ngomembership`
--

CREATE TABLE `ngomembership` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `photoid` varchar(255) NOT NULL,
  `paymentrecipt` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ngomembership`
--

INSERT INTO `ngomembership` (`id`, `name`, `email`, `contact`, `photoid`, `paymentrecipt`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Souvik Mukherjee', 'mukherjeesouvik2043@gmail.com', '1111111111', 'photoid1715841036.pdf', 'paymentrecipt1715841036.pdf', 'Village + P.O - Sendanga, P.S - Ashoknagar, District - North', '2024-05-15 18:30:00', NULL),
(2, 'Saikat Halder', 'saikathalder@gmail.com', '1111131110', 'photoid1721037917.pdf', 'paymentrecipt1721037917.pdf', 'Village + P.O - Sendanga, P.S - Ashoknagar, District - North', '2024-07-14 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ngonotice`
--

CREATE TABLE `ngonotice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ngonotice`
--

INSERT INTO `ngonotice` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'this is notice 1', '<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.</p>', '2024-05-20 18:30:00', NULL),
(2, 'this is notice 2', '<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.</p>', '2024-05-20 18:30:00', NULL),
(3, 'this is notice 3', '<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.</p>', '2024-05-20 18:30:00', NULL),
(4, 'this is notice 41', '<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.</p>', '2024-05-20 18:30:00', '2024-05-20 18:30:00'),
(5, 'This is notice 4', '<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.</p>', '2024-05-20 18:30:00', NULL),
(6, 'This is notice 5', '<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.</p>', '2024-05-20 18:30:00', NULL),
(7, 'This is notice 6', '<p>Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter. Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.</p>', '2024-05-20 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ngosetting`
--

CREATE TABLE `ngosetting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkdin` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ngosetting`
--

INSERT INTO `ngosetting` (`id`, `email`, `contact`, `facebook`, `twitter`, `instagram`, `linkdin`, `address`, `created_at`, `updated_at`) VALUES
(1, 'gmdfngo@gmail.com', '10111111556', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', '70 60 Grand Avenue. Central New Road 0708, USA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` bigint(20) UNSIGNED NOT NULL,
  `class` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `notes_pdf` varchar(255) DEFAULT NULL,
  `notes_video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `subject`, `class`, `title`, `notes_pdf`, `notes_video`, `created_at`, `updated_at`) VALUES
(5, 5, 28, 'This is c programming notes title', NULL, 'notes_video1719576398.mp4', '2024-06-27 18:30:00', NULL),
(6, 5, 28, 'another c programming notes title', NULL, 'notes_video1719576963.mkv', '2024-06-27 18:30:00', NULL),
(7, 6, 30, 'this is note titles 1 for prafullanagar 1', 'notes_pdf1719577886.pdf', 'notes_video1719577886.mp4', '2024-06-27 18:30:00', NULL),
(9, 9, 22, 'This is database management system notes titile 1', 'notes_pdf1720762076.pdf', NULL, '2024-07-11 18:30:00', NULL),
(10, 8, 30, 'This is operating system notes 1st year', 'notes_pdf1720762169.pdf', 'notes_video1720762169.mp4', '2024-07-11 18:30:00', NULL),
(11, 7, 16, 'This is object oriented programming notes title using java', 'notes_pdf1720762208.pdf', NULL, '2024-07-11 18:30:00', NULL),
(12, 6, 30, 'This is c programming  pointer notes', 'notes_pdf1720765282.pdf', 'notes_video1720765282.mp4', '2024-07-11 18:30:00', NULL),
(13, 9, 22, 'This is concurrency control notes in dbms', 'notes_pdf1720765330.pdf', 'notes_video1720765330.mp4', '2024-07-11 18:30:00', NULL),
(14, 6, 16, 'This is basic data types and loop notes', 'notes_pdf1720765382.pdf', 'notes_video1720765382.mp4', '2024-07-11 18:30:00', NULL),
(15, 6, 31, 'This is C programming if else and switch case note', 'notes_pdf1720766595.pdf', 'notes_video1720766595.mp4', '2024-07-11 18:30:00', NULL),
(16, 7, 22, 'This is inheritance concept notes 1', NULL, 'notes_video1720770817.mp4', '2024-07-11 18:30:00', NULL),
(17, 7, 22, 'This is polymorphism concept notes 1', 'notes_pdf1720770855.pdf', 'notes_video1720770855.mp4', '2024-07-11 18:30:00', NULL);

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
-- Table structure for table `schoolbankdetails`
--

CREATE TABLE `schoolbankdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `account_holder_name` varchar(255) NOT NULL,
  `upi_id` varchar(255) DEFAULT NULL,
  `qr_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolbankdetails`
--

INSERT INTO `schoolbankdetails` (`id`, `school`, `bank_name`, `account_number`, `ifsc_code`, `branch`, `account_holder_name`, `upi_id`, `qr_code`, `created_at`, `updated_at`) VALUES
(7, 11, 'Union bank of india chaturdash', '900000900001100', 'bank00112', 'ashoknagar', 'Chaturdash Holder Name', 'srvsvvvvvrvv', 'school_qr_code1720677208.png', NULL, NULL),
(8, 40, 'Union bank of india model', '90000090000113', 'bank00112', 'ashoknagar', 'Demo Holder', 'srvsvvvvvrvv1', 'school_qr_code1720678910.png', NULL, NULL),
(9, 41, 'state bank of india 2', '000000000110000', 'bank00112', 'ashoknagar', 'Test Holder', 'srvsvvvvvrvvfufu', 'school_qr_code1720680081.png', NULL, NULL),
(10, 10, 'Punjab National Bank', '90000090000303', 'PNG450008', 'Ashoknagar', 'Souvik Mukherjee', 'png@bank', 'school_qr_code1721027431.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolclass`
--

CREATE TABLE `schoolclass` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolclass`
--

INSERT INTO `schoolclass` (`id`, `user_id`, `class`, `created_at`, `updated_at`) VALUES
(14, 10, 'prafulla 1', NULL, NULL),
(16, 10, 'prafulla 3', NULL, NULL),
(22, 10, 'prafulla UKG', NULL, NULL),
(23, 11, 'chaturdash UKG', NULL, NULL),
(24, 11, 'chaturdash 1', NULL, NULL),
(27, 11, '3rd year', NULL, NULL),
(28, 11, '1st year', NULL, NULL),
(30, 10, '1st year', NULL, NULL),
(31, 10, 'class 12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolcontact`
--

CREATE TABLE `schoolcontact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolcontact`
--

INSERT INTO `schoolcontact` (`id`, `school`, `name`, `contact`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 10, 'Souvik Mukherjee1', '9732922765', 'user@gmail.com', 'test message', '2024-07-10 18:30:00', NULL),
(2, 10, 'Soumen Sarkar', '8888888888', 'admin123456@gmail.com', 'this is another test message', '2024-07-10 18:30:00', NULL),
(4, 10, 'Sourav Mondal', '0101010101', 'souravmondal@gmail.com', 'this is another test message', '2024-07-14 18:30:00', NULL),
(5, 10, 'Demo name', '1111111111', 'demo@gmail.com', 'this is another test message', '2024-07-14 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schooldetails`
--

CREATE TABLE `schooldetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_name` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `showemail` varchar(255) NOT NULL,
  `showcontact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `schooldetails_status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schooldetails`
--

INSERT INTO `schooldetails` (`id`, `school_name`, `banner`, `logo`, `about`, `showemail`, `showcontact`, `address`, `schooldetails_status`, `created_at`, `updated_at`) VALUES
(10, 11, 'schoolbanner1719299340.jpg', 'schoollogo1719299340.jpg', '<p>hjajchach hehbhweb web webkeb kjefjreb kjfjkrb khbrebkj bkrebkjr bkreb krberbf kjerbkrbf rebfjkbkerbkj rbkerbjkerb kerbkerb jbfjr bfkerbjrbjreber jbrbrbe rkjbkjr bkrb ber krbkj jkre brkj b hjajchach hehbhweb web webkeb kjefjreb kjfjkrb khbrebkj bkrebkjr bkreb krberbf kjerbkrbf rebfjkbkerbkj rbkerbjkerb kerbkerb jbfjr bfkerbjrbjreber jbrbrbe rkjbkjr bkrb ber krbkj jkre brkj b hjajchach hehbhweb web webkeb kjefjreb kjfjkrb khbrebkj bkrebkjr bkreb krberbf kjerbkrbf rebfjkbkerbkj rbkerbjkerb kerbkerb jbfjr bfkerbjrbjreber jbrbrbe rkjbkjr bkrb ber krbkj jkre brkj b hjajchach hehbhweb web webkeb kjefjreb kjfjkrb khbrebkj bkrebkjr bkreb krberbf kjerbkrbf rebfjkbkerbkj rbkerbjkerb kerbkerb jbfjr bfkerbjrbjreber jbrbrbe rkjbkjr bkrb ber krbkj jkre brkj b hjajchach hehbhweb web webkeb kjefjreb kjfjkrb khbrebkj bkrebkjr bkreb krberbf kjerbkrbf rebfjkbkerbkj rbkerbjkerb kerbkerb jbfjr bfkerbjrbjreber jbrbrbe rkjbkjr bkrb ber krbkj jkre brkj b</p>', 'sendangaschoolview@gmail.com', '1111111111', 'hjajchach hehbhweb web webkeb kjefjreb kjfjkrb khbrebkj bkrebkjr bkreb krberbf kjerbkrbf rebfjkbkerbkj rbkerbjkerb kerbkerb jbfjr bfkerbjrbjreber jbrbrbe rkjbkjr bkrb ber krbkj jkre brkj b', '1', '2024-06-24 18:30:00', '2024-06-24 18:30:00'),
(11, 10, 'schoolbanner1720941532.jpg', 'schoollogo1720941532.jpg', '<h4>This is another school heading&nbsp;</h4><p>&nbsp;</p><p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available</p><p>&nbsp;</p><ul><li>item 1</li><li>item 2</li><li>item 3</li><li>item 4</li></ul><p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available</p>', 'prafullanagarview@gmail.com', '9732922765', 'hjajchach hehbhweb web webkeb kjefjreb kjfjkrb khbrebkj bkrebkjr bkreb krberbf kjerbkrbf rebfjkbkerbkj rbkerbjkerb kerbkerb jbfjr bfkerbjrbjreber jbrbrbe rkjbkjr bkrb ber krbkj jkre brkj b', '1', '2024-06-24 18:30:00', '2024-07-13 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `schoolnotice`
--

CREATE TABLE `schoolnotice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schoolid` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolnotice`
--

INSERT INTO `schoolnotice` (`id`, `schoolid`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 11, 'This is school notice 1', '<p>jhsebjh bweb br jkerjkerkjer jkerkjerjk rjkerjkbrekjvb kjrrnjk berkjberjk rv kererjn lkernlkern ernlketnlk gnten elk flkfn erlkf nenrelk jhsebjh bweb br jkerjkerkjer jkerkjerjk rjkerjkbrekjvb kjrrnjk berkjberjk rv kererjn lkernlkern ernlketnlk gnten elk flkfn erlkf nenrelk &nbsp;jhsebjh bweb br jkerjkerkjer jkerkjerjk rjkerjkbrekjvb kjrrnjk berkjberjk rv kererjn lkernlkern ernlketnlk gnten elk flkfn erlkf nenrelk &nbsp;jhsebjh bweb br jkerjkerkjer jkerkjerjk rjkerjkbrekjvb kjrrnjk berkjberjk rv kererjn lkernlkern ernlketnlk gnten elk flkfn erlkf nenrelk &nbsp;jhsebjh bweb br jkerjkerkjer jkerkjerjk rjkerjkbrekjvb kjrrnjk berkjberjk rv kererjn lkernlkern ernlketnlk gnten elk flkfn erlkf nenrelk &nbsp;jhsebjh bweb br jkerjkerkjer jkerkjerjk rjkerjkbrekjvb kjrrnjk berkjberjk rv kererjn lkernlkern ernlketnlk gnten elk flkfn erlkf nenrelk&nbsp;</p>', NULL, NULL),
(2, 11, 'This is school notice 2', '<p>jhsebjh bweb br jkerjkerkjer jkerkjerjk rjkerjkbrekjvb kjrrnjk berkjberjk rv kererjn lkernlkern ernlketnlk gnten elk flkfn erlkf nenrelk &nbsp;jhsebjh bweb br jkerjkerkjer jkerkjerjk rjkerjkbrekjvb kjrrnjk berkjberjk rv kererjn lkernlkern ernlketnlk gnten elk flkfn erlkf nenrelk &nbsp;jhsebjh bweb br jkerjkerkjer jkerkjerjk rjkerjkbrekjvb kjrrnjk berkjberjk rv kererjn lkernlkern ernlketnlk gnten elk flkfn erlkf nenrelk &nbsp;jhsebjh bweb br jkerjkerkjer jkerkjerjk rjkerjkbrekjvb kjrrnjk berkjberjk rv kererjn lkernlkern ernlketnlk gnten elk flkfn erlkf nenrelk&nbsp;</p>', NULL, NULL),
(3, 11, 'This is school notice 3', '<p>jhsebjh bweb br jkerjkerkjer jkerkjerjk rjkerjkbrekjvb kjrrnjk berkjberjk rv kererjn lkernlkern ernlketnlk gnten elk flkfn erlkf nenrelk &nbsp;jhsebjh bweb br jkerjkerkjer jkerkjerjk rjkerjkbrekjvb kjrrnjk berkjberjk rv kererjn lkernlkern ernlketnlk gnten elk flkfn erlkf nenrelk &nbsp;jhsebjh bweb br jkerjkerkjer jkerkjerjk rjkerjkbrekjvb kjrrnjk berkjberjk rv kererjn lkernlkern ernlketnlk gnten elk flkfn erlkf nenrelk&nbsp;</p>', NULL, NULL),
(8, 10, 'prafulla nagar notice 11', '<p>1111dhbdshb kbejkb fkjberb krbjke bb vkhbvjkb kbwejk bwejkbkebfbb fjke bkeb fweb kjw dhbdshb kbejkb fkjberb krbjke bb vkhbvjkb kbwejk bwejkbkebfbb fjke bkeb fweb kjw dhbdshb kbejkb fkjberb krbjke bb vkhbvjkb kbwejk bwejkbkebfbb fjke bkeb fweb kjw dhbdshb kbejkb fkjberb krbjke bb vkhbvjkb kbwejk bwejkbkebfbb fjke bkeb fweb kjw dhbdshb kbejkb fkjberb krbjke bb vkhbvjkb kbwejk bwejkbkebfbb fjke bkeb fweb kjw</p>', NULL, NULL),
(9, 10, 'This is another notice 2 in 07', '<h4>This is heading 1</h4><p>&nbsp;</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium qui cum incidunt quibusdam natus voluptatibus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium qui cum incidunt quibusdam natus voluptatibus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium qui cum incidunt quibusdam natus voluptatibus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium qui cum incidunt quibusdam natus voluptatibus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium qui cum incidunt quibusdam natus voluptatibus!</p>', NULL, NULL),
(10, 10, 'This is notice 3 07', '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium qui cum incidunt quibusdam natus voluptatibus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium qui cum incidunt quibusdam natus voluptatibus!</p><ul><li>item 1</li><li>item 2</li><li>item 3</li></ul><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium qui cum incidunt quibusdam natus voluptatibus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium qui cum incidunt quibusdam natus voluptatibus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium qui cum incidunt quibusdam natus voluptatibus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium qui cum incidunt quibusdam natus voluptatibus!</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolresult`
--

CREATE TABLE `schoolresult` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school` bigint(20) UNSIGNED NOT NULL,
  `class` bigint(20) UNSIGNED NOT NULL,
  `section` bigint(20) UNSIGNED NOT NULL,
  `student` bigint(20) UNSIGNED NOT NULL,
  `resultdocument` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolresult`
--

INSERT INTO `schoolresult` (`id`, `school`, `class`, `section`, `student`, `resultdocument`, `created_at`, `updated_at`) VALUES
(1, 10, 30, 24, 24, 'resultdocument1720431588.pdf', '2024-07-07 18:30:00', NULL),
(2, 10, 22, 5, 16, 'resultdocument1720431626.pdf', '2024-07-07 18:30:00', NULL),
(3, 11, 28, 19, 23, 'resultdocument1720431756.pdf', '2024-07-07 18:30:00', NULL),
(6, 11, 24, 8, 22, 'resultdocument1720785220.pdf', '2024-07-11 18:30:00', NULL),
(7, 10, 16, 12, 44, 'resultdocument1720868428.pdf', '2024-07-12 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolschedule`
--

CREATE TABLE `schoolschedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school` bigint(20) UNSIGNED NOT NULL,
  `class` bigint(20) UNSIGNED NOT NULL,
  `section` bigint(20) UNSIGNED NOT NULL,
  `scheduledocument` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolschedule`
--

INSERT INTO `schoolschedule` (`id`, `school`, `class`, `section`, `scheduledocument`, `created_at`, `updated_at`) VALUES
(3, 11, 28, 18, 'scheduledocument1720427847.pdf', NULL, NULL),
(4, 11, 28, 19, 'scheduledocument1720428535.pdf', NULL, NULL),
(7, 10, 30, 23, 'scheduledocument1720857190.pdf', NULL, NULL),
(8, 10, 31, 25, 'scheduledocument1720867737.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolsection`
--

CREATE TABLE `schoolsection` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `class` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolsection`
--

INSERT INTO `schoolsection` (`id`, `user_id`, `class`, `section`, `status`, `created_at`, `updated_at`) VALUES
(3, 10, 16, 'C', '1', NULL, NULL),
(4, 10, 22, 'A', '1', NULL, NULL),
(5, 10, 22, 'B', '1', NULL, NULL),
(6, 11, 23, 'A', '1', NULL, NULL),
(8, 11, 24, 'A', '1', NULL, NULL),
(10, 11, 23, 'B', '1', NULL, NULL),
(11, 10, 16, 'A', '1', NULL, NULL),
(12, 10, 16, 'B', '1', NULL, NULL),
(13, 10, 16, 'D', '1', NULL, NULL),
(14, 11, 27, 'B', '1', NULL, NULL),
(15, 11, 27, 'A', '1', NULL, NULL),
(16, 11, 27, 'C', '1', NULL, NULL),
(17, 11, 27, 'D', '1', NULL, NULL),
(18, 11, 28, 'A', '1', NULL, NULL),
(19, 11, 28, 'F', '1', NULL, NULL),
(22, 10, 30, 'A', '1', NULL, NULL),
(23, 10, 30, 'B', '1', NULL, NULL),
(24, 10, 30, 'C', '1', NULL, NULL),
(25, 10, 31, 'A', '1', NULL, NULL),
(26, 10, 31, 'B', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolsetting`
--

CREATE TABLE `schoolsetting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkdin` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolsetting`
--

INSERT INTO `schoolsetting` (`id`, `school`, `email`, `contact`, `facebook`, `twitter`, `instagram`, `linkdin`, `address`, `created_at`, `updated_at`) VALUES
(6, 10, 'prafullasetting@gmail.com', '1111111111', 'https://icons.getbootstrap.com/icons/person-check-fill/', 'https://icons.getbootstrap.com/icons/person-check-fill/', NULL, 'https://icons.getbootstrap.com/icons/person-check-fill/', 'mhuisei jef ewo weuifhoi jerhf uiwehfoi', NULL, NULL),
(7, 11, 'admin123456@gmail.com', '1234567890', 'https://www.youtube.com/', 'https://www.youtube.com/', NULL, NULL, 'value=\"\" hgvjgvjvjh', NULL, NULL),
(8, 40, 'indianmodelschool@gmail.com', '1234567890', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', NULL, 'sef rtt re ergtrer ww re gtr trhrtg  tryr', NULL, NULL),
(9, 41, 'admin123456@gmail.com', '8888888888', 'https://www.google.com/1', 'https://www.google.com/1', 'https://www.google.com/1', 'https://www.google.com/1', 'gfch kjnkiu jhctydy lkijiohoi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolstudentfees`
--

CREATE TABLE `schoolstudentfees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school` bigint(20) UNSIGNED NOT NULL,
  `studentid` varchar(255) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `class` bigint(20) UNSIGNED NOT NULL,
  `section` bigint(20) UNSIGNED NOT NULL,
  `paymentrecipt` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolstudentfees`
--

INSERT INTO `schoolstudentfees` (`id`, `school`, `studentid`, `studentname`, `class`, `section`, `paymentrecipt`, `created_at`, `updated_at`) VALUES
(2, 10, '7586942431', 'Soumen Sarkar', 30, 23, 'paymentrecipt1721026158.png', NULL, NULL),
(3, 10, '7586942431', 'Soumen Sarkar', 22, 5, 'paymentrecipt1721028164.pdf', NULL, NULL),
(6, 11, '1111011110', 'Sourav Mondal', 24, 8, 'paymentrecipt1721032382.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolsubjects`
--

CREATE TABLE `schoolsubjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school` bigint(20) UNSIGNED NOT NULL,
  `teacher` bigint(20) UNSIGNED NOT NULL,
  `class` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolsubjects`
--

INSERT INTO `schoolsubjects` (`id`, `school`, `teacher`, `class`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(2, 11, 27, 28, 'English', 'This is another description', NULL, NULL),
(5, 11, 26, 28, 'C programming', NULL, NULL, NULL),
(6, 10, 28, 30, 'C programming', NULL, NULL, NULL),
(7, 10, 28, 16, 'Object Oriented Programming', 'this subject using java', NULL, NULL),
(8, 10, 38, 30, 'Operating System', 'this is operating system', NULL, NULL),
(9, 10, 28, 22, 'Database Management Syetem', 'this is database management system', NULL, NULL),
(10, 10, 38, 16, 'Cloud Computing', 'ffvfvfd', NULL, NULL),
(11, 10, 28, 16, 'Internet Technology', 'fvfdvdfv', NULL, NULL),
(12, 10, 38, 14, 'English', 'dsssv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolteacher`
--

CREATE TABLE `schoolteacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school` bigint(20) UNSIGNED NOT NULL,
  `teacher` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `dateofbirth` date NOT NULL,
  `dateofjoining` date NOT NULL,
  `designation` varchar(255) NOT NULL,
  `teacherdocument` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolteacher`
--

INSERT INTO `schoolteacher` (`id`, `school`, `teacher`, `gender`, `bloodgroup`, `dateofbirth`, `dateofjoining`, `designation`, `teacherdocument`, `address`, `created_at`, `updated_at`) VALUES
(1, 11, 25, 'Male', 'B-', '2024-06-22', '2024-06-16', 'Assistant teacher', 'teacherdocument1719474614.pdf', 'hjecjhb jhebf jhwejk jkwwe dledn jekb jknje hjecjhb jhebf jhwejk jkwwe dledn jekb jknje hjecjhb jhebf jhwejk jkwwe dledn jekb jknje', '2024-06-26 18:30:00', NULL),
(2, 11, 26, 'Female', 'B+', '2024-06-12', '2024-06-05', 'Assistant teacher', 'teacherdocument1719474711.pdf', 'hjecjhb jhebf jhwejk jkwwe dledn jekb jknje hjecjhb jhebf jhwejk jkwwe dledn jekb jknje hjecjhb jhebf jhwejk jkwwe dledn jekb jknje', '2024-06-26 18:30:00', NULL),
(3, 10, 28, 'Male', 'A+', '2024-06-24', '2024-06-07', 'Assistant teacher', 'teacherdocument1719480531.pdf', 'jhdbch kjdsnf jsnsen dsjk nsekjnsjk nselknekj kjekjf eskj sekf eskw ejeilf ejwrj nwnj njse', '2024-06-26 18:30:00', NULL),
(5, 11, 27, 'Male', 'O-', '2024-06-06', '2024-06-12', 'Assistant teacher new', 'teacherdocument1719551490.pdf', '1111vajhdj bqwb kwekdnw nwekejk dnwenewdwek wenfwej nenlew nwejdl weefn we', '2024-06-26 18:30:00', '2024-06-27 18:30:00'),
(6, 11, 29, 'Female', 'AB+', '2024-06-11', '2024-06-10', 'Assistant teacher edited', 'teacherdocument1719490848.pdf', '1111gdggcg ghcggi lkjoijg gfsestyfiu jkhoijoig kuryarduyu azysutd7d ysyrs yjdytdk fdjyrdyd', '2024-06-26 18:30:00', '2024-06-26 18:30:00'),
(8, 40, 42, 'Female', 'A-', '2024-07-11', '2024-07-09', 'Assistant teacher', 'teacherdocument1720679564.pdf', 'ghggh fxfyuglh uiguifkftyk jhfktuxkyrd ligu jhytuxky kivuyyk', '2024-07-10 18:30:00', NULL),
(9, 41, 43, 'Female', 'B-', '2024-07-09', '2024-07-27', 'Assistant teacher', 'teacherdocument1720679922.pdf', 'gtyty yguigi tghyxtrstr jkhihuf lkioihiydtd jhctyyu jknkjvghc', '2024-07-10 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('GfvOYpfLVTF9FAzk1sbgDmDRsX1CZEXsOZSkl8ja', 24, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoialpSWnk3MnVTU0tHUUxiMXhlMGtQYXZVUm4wWnU4dTZCdFhRWExyOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zY2hvb2wvbXljbGFzc3Jvb20iO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyNDtzOjg6InVzZXJ0eXBlIjtzOjc6IlN0dWRlbnQiO3M6MTA6InNjaG9vbG5hbWUiO3M6MzE6IlByYWZ1bGxhbmFnYXIgVmlkeWFtYW5kaXIgKEguUykiO3M6NDoibmFtZSI7czoxMzoiU291bWVuIFNhcmthciI7czo1OiJlbWFpbCI7czoyMjoic291bWVuc2Fya2FyQGdtYWlsLmNvbSI7czo3OiJjb250YWN0IjtzOjEwOiI3NTg2OTQyNDMxIjt9', 1721633125),
('XuWv0k1OgIacATJ2PqeEN0twBBAaQB4BE68rS31t', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoiaVNkb0lScVRjdWxDVUtIMmFidGtUMGhtZ0RUZDFRbTh5NmVBOW5xRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9jb250YWN0LW1lc3NhZ2UiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6ODoidXNlcnR5cGUiO3M6MTA6IlN1cGVyYWRtaW4iO3M6MTA6InNjaG9vbG5hbWUiO3M6MTE6ImRlbW8gc2Nob29sIjtzOjQ6Im5hbWUiO3M6MTY6IlNvdXZpayBNdWtoZXJqZWUiO3M6NToiZW1haWwiO3M6MTQ6InVzZXJAZ21haWwuY29tIjtzOjc6ImNvbnRhY3QiO3M6MTA6IjkwNjQyOTM5NTkiO30=', 1721390808),
('yWQwd2FTfjOPCuFoqzmb6LB1xVGSMVVZT18cEKBX', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoielBkanh5UXIyWHNmYk0yblNFdHVvMW93a2ZsTkNmV2d4aDhJUVAwcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zaG93LXNsaWRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo4OiJ1c2VydHlwZSI7czoxMDoiU3VwZXJhZG1pbiI7czoxMDoic2Nob29sbmFtZSI7czoxMToiZGVtbyBzY2hvb2wiO3M6NDoibmFtZSI7czoxNjoiU291dmlrIE11a2hlcmplZSI7czo1OiJlbWFpbCI7czoxNDoidXNlckBnbWFpbC5jb20iO3M6NzoiY29udGFjdCI7czoxMDoiOTA2NDI5Mzk1OSI7fQ==', 1723725887);

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) NOT NULL,
  `section` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dateofbirth` date NOT NULL,
  `documentofstudent` varchar(255) NOT NULL,
  `gurdiansname` varchar(255) NOT NULL,
  `gurdianscontact` varchar(255) NOT NULL,
  `optionalcontact` varchar(255) DEFAULT NULL,
  `gurdiansemail` varchar(255) DEFAULT NULL,
  `studentpicture` varchar(255) NOT NULL,
  `documentofparent` varchar(255) NOT NULL,
  `parmanentaddress` text NOT NULL,
  `currentaddress` text NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `student_id`, `class`, `section`, `gender`, `dateofbirth`, `documentofstudent`, `gurdiansname`, `gurdianscontact`, `optionalcontact`, `gurdiansemail`, `studentpicture`, `documentofparent`, `parmanentaddress`, `currentaddress`, `bloodgroup`, `rollno`, `created_at`, `updated_at`) VALUES
(4, 17, 'prafulla UKG', 5, 'Male', '2024-06-28', 'studentdocument1719293286.pdf', 'Ram Kumar', '1111111111', '1234567890', 'scsscdacd@gmail.com', 'studentpicture1719293286.jpg', 'parentdocument1719293286.pdf', 'hdsevdjhvj jhev hvweev ew hweb hoidh ewbeih doiqeb qwhbfwehoi bfwehoi qwbwebi bfieh ifbuwehf hfwe hihfeoi heodh qwudhqo', 'hdsevdjhvj jhev hvweev ew hweb hoidh ewbeih doiqeb qwhbfwehoi bfwehoi qwbwebi bfieh ifbuwehf hfwe hihfeoi heodh qwudhqo', 'B-', '4', '2024-06-24 18:30:00', NULL),
(5, 16, 'prafulla 1', 3, 'Female', '2024-06-13', 'studentdocument1719293350.pdf', 'Ram Kumar', '1234567890', '1234567890', 'scsscdacd@gmail.com', 'studentpicture1719293350.jpg', 'parentdocument1719293350.pdf', 'jhsdjhch hwabh abjhfhe bhbhebbsebeho webkjewbfkj ebfjwe weebw ewo bekjelfwe kfjewb kjwebje bjeb ebwjk jwnfjf', 'jhsdjhch hwabh abjhfhe bhbhebbsebeho webkjewbfkj ebfjwe weebw ewo bekjelfwe kfjewb kjwebje bjeb ebwjk jwnfjf', 'A+', '3', '2024-06-24 18:30:00', NULL),
(6, 18, 'prafulla 3', 10, 'Female', '2024-06-13', 'studentdocument1719295412.pdf', 'Ram Kumar', '1234567890', '1234567890', 'scsscdacd@gmail.com', 'studentpicture1719295412.jpg', 'parentdocument1719295412.pdf', 'ydcdh hwef webowefo bwekbfoiwe hoerf whder befbhwev ehfker bewhf we ydcdh hwef webowefo bwekbfoiwe hoerf whder befbhwev ehfker bewhf we', 'ydcdh hwef webowefo bwekbfoiwe hoerf whder befbhwev ehfker bewhf we ydcdh hwef webowefo bwekbfoiwe hoerf whder befbhwev ehfker bewhf we', 'B-', '5', '2024-06-24 18:30:00', NULL),
(13, 20, '3rd year', 17, 'Male', '2024-06-14', 'studentdocument1719381980.pdf', 'Ram Kumar', '1234567890', '1234567890', 'scsscdacd@gmail.com', 'studentpicture1719397775.jpg', 'parentdocument1719381980.pdf', 'jidbjkb sbdjs bejbewjk bdf brj berjberj erjkrjk brjkberjknekjbwrn wjnf welknerj nwlknfwef r welfb nwel nekj lk wejb w', 'jidbjkb sbdjs bejbewjk bdf brj berjberj erjkrjk brjkberjknekjbwrn wjnf welknerj nwlknfwef r welfb nwel nekj lk wejb w', 'B+', '56', '2024-06-25 18:30:00', '2024-06-25 18:30:00'),
(14, 19, '1st year', 19, 'Male', '2024-06-13', 'studentdocument1719382080.pdf', 'Ram Kumar', '1234567890', '1234567890', 'scsscdacd@gmail.com', 'studentpicture1719382080.jpg', 'parentdocument1719382080.pdf', 'jidbjkb sbdjs bejbewjk bdf brj berjberj erjkrjk brjkberjknekjbwrn wjnf welknerj nwlknfwef r welfb nwel nekj lk wejb w', 'jidbjkb sbdjs bejbewjk bdf brj berjberj erjkrjk brjkberjknekjbwrn wjnf welknerj nwlknfwef r welfb nwel nekj lk wejb w', 'AB+', '5', '2024-06-25 18:30:00', NULL),
(17, 23, '1st year', 18, 'Male', '2024-06-05', 'studentdocument1719399507.pdf', 'Ram Kumar', '1234567890', '1234567890', 'scsscdacd@gmail.com', 'studentpicture1719399507.jpg', 'parentdocument1719399507.pdf', 'jdsbjhcbj seb jkjkds kjbsejkb kjebjke jekjeb kjesfjk jkwe kjekj sendanga', 'jdsbjhcbj seb jkjkds kjbsejkb kjebjke jekjeb kjesfjk jkwe kjekj sendanga', 'A+', '3', '2024-06-25 18:30:00', '2024-06-25 18:30:00'),
(18, 24, '1st year', 23, 'Female', '2024-06-14', 'studentdocument1719467907.pdf', 'Ram Kumar', '1234567890', '1234567890', 'scsscdacd@gmail.com', 'studentpicture1719467907.jpg', 'parentdocument1719467907.pdf', 'dhbdshb kbejkb fkjberb krbjke bb vkhbvjkb kbwejk bwejkbkebfbb fjke bkeb fweb kjw dhbdshb kbejkb fkjberb krbjke bb vkhbvjkb kbwejk bwejkbkebfbb fjke bkeb fweb kjw', 'dhbdshb kbejkb fkjberb krbjke bb vkhbvjkb kbwejk bwejkbkebfbb fjke bkeb fweb kjw dhbdshb kbejkb fkjberb krbjke bb vkhbvjkb kbwejk bwejkbkebfbb fjke bkeb fweb kjw', 'A', '41', '2024-06-26 18:30:00', '2024-06-26 18:30:00'),
(19, 44, 'prafulla 3', 12, 'Female', '2024-07-10', 'studentdocument1720868375.pdf', 'Souvik Mukherjee', '1234567890', '1234567890', 'scsscdacd@gmail.com', 'studentpicture1720868375.jpg', 'parentdocument1720868375.pdf', 'Ashoknagar habra barasat', 'Ashoknagar habra barasat', 'B+', '21', '2024-07-12 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schoolname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `usertype` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `schoolname`, `name`, `email`, `contact`, `password`, `status`, `usertype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'demo school', 'Souvik Mukherjee', 'user@gmail.com', '9064293959', '$2y$12$.rN9YHCKgLjy2tcXIBiAEOIteJ267mhf/0lv7C5R6XQDCWn9/ShMm', '1', 'Superadmin', NULL, '2024-05-15 05:45:42', '2024-05-15 05:45:42'),
(2, 'demo school', 'GMDF NGO', 'superadmin@gmail.com', '7001382067', '$2y$12$AphuJ5vAckNJ/1ppchms4OTG55GEL.y2PPxx3Jp7vw.4LO.sl4FU6', '1', 'Superadmin', NULL, '2024-05-15 05:48:04', '2024-07-18 01:48:59'),
(4, 'demo school Ani', 'Ani', 'ani@gmail.com', '4444444444', '$2y$12$Qe4LjdggUV19fCp57YThvufyMzaCHDMsRBOarjTzn0uqcE/SC4iK6', '1', 'School', NULL, '2024-05-16 03:43:22', '2024-05-16 03:43:22'),
(5, 'souvik school', 'souvik school', 'souvik@gmail.com', '5555555555', '$2y$12$GjOlKXruvuCxSAqpn/xu1ezSUmCEyuCapRI3BSPaspJ4NsoPejKVC', '1', 'School', NULL, '2024-05-16 04:56:55', '2024-05-16 04:56:55'),
(6, 'demo school Ani', 'user type', 'schooluser@gmail.com', '8888888888', '$2y$12$//WfUyrB73HWRmjSji4AyORDcv7g4TbRr2lyunmIJPl9Hdx/xQMaa', '1', 'Teacher', NULL, '2024-05-16 05:44:46', '2024-05-16 05:44:46'),
(7, 'demo school1', 'Student school', 'studentshool@gmail.com', '1234567890', '$2y$12$Km7VU.VUAww0wxHsL4MH9.rL6omKu9yHX2lDodwBYA2J1Fev.4rAm', '1', 'Student', NULL, '2024-05-16 05:48:13', '2024-05-16 05:48:13'),
(8, 'souvik school', 'Souvik Teacher', 'souvikteacher@gmail.com', '0000000000', '$2y$12$taP0kRMORy8A2Ku4cz8HPuvZViIxVEECcqNcd96ze1Vx77SDznNn6', '1', 'Teacher', NULL, '2024-05-17 03:05:47', '2024-05-17 03:05:47'),
(9, 'demo school Ani', 'new student', 'newstudent@gmail.com', '1212121212', '$2y$12$5IMQUfHst9E5SGOo/PLLj.lJoQ7U7UTKwYjXClqeD7c.Y1kCvNdOO', '1', 'Student', NULL, '2024-05-23 00:18:12', '2024-05-23 00:18:12'),
(10, 'Prafullanagar Vidyamandir (H.S)', 'Prafulla Nagar', 'prafullanagar@gmail.com', '9732922765', '$2y$12$qUvhE0RfQwn1nWCzXptMKuInRPrVUPGcNC3lGcG//QyF2vH/iVuLW', '1', 'School', NULL, '2024-05-23 03:17:59', '2024-05-23 03:17:59'),
(11, 'Chaturdash palli high school (H.S)', 'Sendanga School', 'sendangaschool@gmail.com', '9564471275', '$2y$12$Gv4hnNVGL6bmiGb8ofplT.THT6pnNguHtZmJtVE4RfYeQIvI40JBm', '1', 'School', NULL, '2024-05-24 00:24:31', '2024-05-24 00:24:31'),
(12, 'Chaturdash palli high school (H.S)', 'Chaturdashpalli student', 'chaturdashpallistudent@gmail.com', '2121212121', '$2y$12$7AHyFiMD0/kHgwzhnV9LTuoGYKF/FzrdPqVejJQ1PszxQWJ.DbLCG', '1', 'Student', NULL, '2024-06-05 00:33:01', '2024-06-05 00:33:01'),
(13, 'Chaturdash palli high school (H.S)', 'Chaturdashpalli student 1', 'chaturdashpallistudent1@gmail.com', '2121212120', '$2y$12$iwQMFv2RnOzjprLV9VKtQ.y83LRKCEDLqoosPCRRvpWuDxpa.S8wa', '1', 'Student', NULL, '2024-06-05 00:34:53', '2024-06-05 00:34:53'),
(14, 'demo school Ani', 'new student 2', 'newstudent2@gmail.com', '1010101010', '$2y$12$LN79incnJUe7yjZH4yoLaeGW7TBnncFM5.CNDiL7DFUHEYMcCLbyi', '1', 'Student', NULL, '2024-06-05 01:25:12', '2024-06-05 01:25:12'),
(15, 'Chaturdash palli high school (H.S)', 'chaturdash student 3', 'chaturdashstudent3@gmail.com', '1121121120', '$2y$12$gyCLn0VzsyLbWYA4BaFOeeofHoYyYkn4E6eMnVN/t/6yxZB5F9cT.', '1', 'Student', NULL, '2024-06-05 02:55:51', '2024-06-05 02:55:51'),
(16, 'Prafullanagar Vidyamandir (H.S)', 'Prafullanagar student 1', 'prafullanagarstudent1@gmail.com', '0010010011', '$2y$12$ZKpnOSTWcuwBPj/r.jUUhuwECplpOvFJ4nO3FeMYBwqSqNFRsK/Na', '1', 'Student', NULL, '2024-06-06 01:07:49', '2024-06-06 01:07:49'),
(17, 'Prafullanagar Vidyamandir (H.S)', 'prafulla student 2', 'prafullastudent2@gmail.com', '0001000101', '$2y$12$ETj/oQJQG864lVUNyi/6g.zZ2CfuKltfKko4v0rFf2JBdYtLtN28u', '1', 'Student', NULL, '2024-06-24 23:56:59', '2024-06-24 23:56:59'),
(18, 'Prafullanagar Vidyamandir (H.S)', 'prafulla student 3', 'prafullastudent3@gmail.com', '0100010001', '$2y$12$9H4GWwf8c.dcNpfUL6K1dOecWtLeTTDs.H1RN5bTr7ILQ7FjXDdqO', '1', 'Student', NULL, '2024-06-25 00:30:51', '2024-06-25 00:30:51'),
(19, 'Chaturdash palli high school (H.S)', 'chaturdash ani', 'chatirdashani@gmail.com', '0000100001', '$2y$12$tHPpz7jYaD9iWwP8/1u.wumRxkA1QpQB7eKo9XzH/5fV6gXoltos6', '1', 'Student', NULL, '2024-06-25 07:40:07', '2024-06-25 07:40:07'),
(20, 'Chaturdash palli high school (H.S)', 'Souvik Mukherjee', 'mukherjeesouvik2043@gmail.com', '9064293951', '$2y$12$CK7kMTeUPuKLxYJUSH7a7.7HI8brXfz0O8z8GiKx.1M6v7kd4oL2m', '1', 'Student', NULL, '2024-06-26 00:21:07', '2024-06-26 00:21:07'),
(21, 'Chaturdash palli high school (H.S)', 'Saikat Halder', 'saikathalder@gmail.com', '1010101001', '$2y$12$LFKajHGlOpEFNVQApESWTuvsbrLDFUdCen6yXq.UHWTZWHr3EsHYW', '1', 'Student', NULL, '2024-06-26 01:25:11', '2024-06-26 01:25:11'),
(22, 'Chaturdash palli high school (H.S)', 'Subhan Karmakar', 'subhankarmakar@gmail.com', '0110011000', '$2y$12$69JF.thHpSzQDXneoOYxmu2AO0tBv6S18Rk8FB3/VB1QV99.yeNhi', '1', 'Student', NULL, '2024-06-26 05:07:28', '2024-06-26 05:07:28'),
(23, 'Chaturdash palli high school (H.S)', 'Sourav Mondal', 'souravmondal@gmail.com', '1111011110', '$2y$12$HUMpCbRAKvnVLJ/6Ysgna.uSphCndpChLwAh1eVt3hoRR3UDDm9P6', '1', 'Student', NULL, '2024-06-26 05:18:33', '2024-06-26 05:18:33'),
(24, 'Prafullanagar Vidyamandir (H.S)', 'Soumen Sarkar', 'soumensarkar@gmail.com', '7586942431', '$2y$12$URtT69aYygIlTX..jcqoa.tku2l/MUbUiQclBwDYzjWfKaxuj.U9G', '1', 'Student', NULL, '2024-06-27 00:13:19', '2024-06-27 00:13:19'),
(25, 'Chaturdash palli high school (H.S)', 'Chaturdash Teacher 1', 'chaturdashteacher1@gmail.com', '0011001101', '$2y$12$bsYk.CBZRZsnWHI/uJL1Q.sEXdOb.QqvkxyY27dVClFJBwj1TKxzy', '1', 'Teacher', NULL, '2024-06-27 00:44:32', '2024-06-27 00:44:32'),
(26, 'Chaturdash palli high school (H.S)', 'chaturdash teahcer 2', 'chaturdashteacher2@gmail.com', '1100110010', '$2y$12$BVAyO.LG5rIELc66qJQjXOnSW3DUp.icct6Q4wDrYaE4bdDFHTRyy', '1', 'Teacher', NULL, '2024-06-27 01:38:41', '2024-06-27 01:38:41'),
(27, 'Chaturdash palli high school (H.S)', 'chaturdash teacher 3', 'chaturdashteacher3@gmail.com', '4321010011', '$2y$12$E6ENRJU4BqdqSLJ5qhu/7e4hy/7tK7JZ5F1f6EVZ8EoxMEg8PiNWe', '1', 'Teacher', NULL, '2024-06-27 03:22:04', '2024-06-27 03:22:04'),
(28, 'Prafullanagar Vidyamandir (H.S)', 'prafullanagar teacher 1', 'prafullanagarteacher1@gmail.com', '0110011098', '$2y$12$d4svyf1fCMNG4pkhKcpRvuZPA6wYd7vwwjNCClgheXaAAfXPARSay', '1', 'Teacher', NULL, '2024-06-27 03:57:04', '2024-06-27 03:57:04'),
(29, 'Chaturdash palli high school (H.S)', 'teacher 4', 'teacher4@gmail.com', '1111111110', '$2y$12$8MlXrJqf9QKKc3yIR38AbuAl2TvEJoy36CWIo.DnvG3lpPQjzlSH2', '1', 'Teacher', NULL, '2024-06-27 05:13:12', '2024-06-27 05:13:12'),
(30, 'Chaturdash palli high school (H.S)', 'teacher 5', 'teacher5@gmail.com', '0000000001', '$2y$12$h/StVw5LTq4Ci.GaxgufU.43ee4UontKu0AVdqmlAvOs3xX9xprHC', '1', 'Teacher', NULL, '2024-06-27 05:47:35', '2024-06-27 05:47:35'),
(35, 'rupsa network school', 'suman das', 'rupsanetwor1110@gmail.com', '9000000009', '$2y$12$5VLrH1AOHLg1bDKKQ/pn5OM/WXTmJBm1Gjj.xF/pCi69smmP1G4gC', '1', 'School', NULL, '2024-07-10 05:40:33', '2024-07-10 05:40:33'),
(37, 'rupsa network school 1', 'network teacher', 'networkteacher@gmail.com', '0011111100', '$2y$12$PXx/uXP1S7RogIughx9KkuaPGGZmUNN7gLDa3mN/LRaKpXLGQL3lW', '1', 'Teacher', NULL, '2024-07-10 05:51:29', '2024-07-10 05:51:29'),
(38, 'Prafullanagar Vidyamandir (H.S)', 'prafullanagar tracher 2', 'prafullanagarteacher2@gmail.com', '0909090909', '$2y$12$IjyW4hoIm887Le1U0u6aC.K3dU1ifQfKu..V7zW9XS5MvTt2lCuYe', '1', 'Teacher', NULL, '2024-07-10 06:00:17', '2024-07-10 06:00:17'),
(39, 'swarup school', 'swarup das', 'swarupdas@gmail.com', '0001100031', '$2y$12$SB9Uk8TVNrwKnDsWW9ZgfelJm0JsRaUDenVY8EQSoN/pVTFAJ4r.u', '1', 'School', NULL, '2024-07-10 06:10:08', '2024-07-10 06:10:08'),
(40, 'Indian Model School', 'Indian Model School', 'indianmodelschool@gmail.com', '8348090546', '$2y$12$7wb0LxyxyI7ruWBwQUjTmuVKEXS3YDwnj0BdN8bXoSKfBSjQlWOQO', '1', 'School', NULL, '2024-07-11 00:32:25', '2024-07-11 00:32:25'),
(41, 'West Bengal Model School', 'WB Model School', 'wbmodelschool@gmail.com', '8515842249', '$2y$12$DrUNPq/ZalDb47znKMRqBuckrWZ2o/v3uIamS97lSQmz80U7vWvSO', '1', 'School', NULL, '2024-07-11 00:33:24', '2024-07-11 00:33:24'),
(42, 'Indian Model School', 'Indian Model Teacher 1', 'indianmodelteacher@gmail.com', '8961164681', '$2y$12$oGBfNOUdjdX6tAJ7H9ODR.NJvA07XSkbV7qjN8i2sBTbom0vTOwoi', '1', 'Teacher', NULL, '2024-07-11 01:00:16', '2024-07-11 01:00:16'),
(43, 'West Bengal Model School', 'WB teacher 1', 'wbteacher1@gmail.com', '8961169487', '$2y$12$PV.yXvHo9UGlebeQT11cw.EFhBMJuOc0YtM.h.mpE2293UT5MBH7e', '1', 'Teacher', NULL, '2024-07-11 01:08:04', '2024-07-11 01:08:04'),
(44, 'Prafullanagar Vidyamandir (H.S)', 'Dona Chakraborty', 'dona@gmail.com', '8888088880', '$2y$12$KfhERPr3dW0YBIYsQhn1sO6GXTRadttw1wt2gDqxjcV61rFPCsXCq', '1', 'Student', NULL, '2024-07-13 05:19:54', '2024-07-13 05:19:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fundrisingpost`
--
ALTER TABLE `fundrisingpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainslider`
--
ALTER TABLE `mainslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_category_id_foreign` (`category_id`);

--
-- Indexes for table `newscategory`
--
ALTER TABLE `newscategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngocontact`
--
ALTER TABLE `ngocontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngomembership`
--
ALTER TABLE `ngomembership`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ngomembership_email_unique` (`email`),
  ADD UNIQUE KEY `ngomembership_contact_unique` (`contact`);

--
-- Indexes for table `ngonotice`
--
ALTER TABLE `ngonotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngosetting`
--
ALTER TABLE `ngosetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_subject_foreign` (`subject`),
  ADD KEY `notes_class_foreign` (`class`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `schoolbankdetails`
--
ALTER TABLE `schoolbankdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schoolbankdetails_account_number_unique` (`account_number`),
  ADD KEY `schoolbankdetails_school_foreign` (`school`);

--
-- Indexes for table `schoolclass`
--
ALTER TABLE `schoolclass`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schoolclass_user_id_foreign` (`user_id`);

--
-- Indexes for table `schoolcontact`
--
ALTER TABLE `schoolcontact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schoolcontact_school_foreign` (`school`);

--
-- Indexes for table `schooldetails`
--
ALTER TABLE `schooldetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schooldetails_user_id_foreign` (`school_name`);

--
-- Indexes for table `schoolnotice`
--
ALTER TABLE `schoolnotice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schoolnotice_schoolid_foreign` (`schoolid`);

--
-- Indexes for table `schoolresult`
--
ALTER TABLE `schoolresult`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schoolresult_school_foreign` (`school`),
  ADD KEY `schoolresult_class_foreign` (`class`),
  ADD KEY `schoolresult_section_foreign` (`section`),
  ADD KEY `schoolresult_student_foreign` (`student`);

--
-- Indexes for table `schoolschedule`
--
ALTER TABLE `schoolschedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schoolschedule_school_foreign` (`school`),
  ADD KEY `schoolschedule_class_foreign` (`class`),
  ADD KEY `schoolschedule_section_foreign` (`section`);

--
-- Indexes for table `schoolsection`
--
ALTER TABLE `schoolsection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schoolsection_user_id_foreign` (`user_id`),
  ADD KEY `schoolsection_class_foreign` (`class`);

--
-- Indexes for table `schoolsetting`
--
ALTER TABLE `schoolsetting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schoolsetting_school_foreign` (`school`);

--
-- Indexes for table `schoolstudentfees`
--
ALTER TABLE `schoolstudentfees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schoolstudentfees_school_foreign` (`school`),
  ADD KEY `schoolstudentfees_class_foreign` (`class`),
  ADD KEY `schoolstudentfees_section_foreign` (`section`);

--
-- Indexes for table `schoolsubjects`
--
ALTER TABLE `schoolsubjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schoolsubjects_school_foreign` (`school`),
  ADD KEY `schoolsubjects_teacher_foreign` (`teacher`),
  ADD KEY `schoolsubjects_class_foreign` (`class`);

--
-- Indexes for table `schoolteacher`
--
ALTER TABLE `schoolteacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schoolteacher_school_foreign` (`school`),
  ADD KEY `schoolteacher_teacher_foreign` (`teacher`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentdetails_userid_foreign` (`student_id`),
  ADD KEY `studentdetails_section_foreign` (`section`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_contact_unique` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fundrisingpost`
--
ALTER TABLE `fundrisingpost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mainslider`
--
ALTER TABLE `mainslider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `newscategory`
--
ALTER TABLE `newscategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ngocontact`
--
ALTER TABLE `ngocontact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ngomembership`
--
ALTER TABLE `ngomembership`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ngonotice`
--
ALTER TABLE `ngonotice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ngosetting`
--
ALTER TABLE `ngosetting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `schoolbankdetails`
--
ALTER TABLE `schoolbankdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schoolclass`
--
ALTER TABLE `schoolclass`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `schoolcontact`
--
ALTER TABLE `schoolcontact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schooldetails`
--
ALTER TABLE `schooldetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `schoolnotice`
--
ALTER TABLE `schoolnotice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schoolresult`
--
ALTER TABLE `schoolresult`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schoolschedule`
--
ALTER TABLE `schoolschedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schoolsection`
--
ALTER TABLE `schoolsection`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `schoolsetting`
--
ALTER TABLE `schoolsetting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `schoolstudentfees`
--
ALTER TABLE `schoolstudentfees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schoolsubjects`
--
ALTER TABLE `schoolsubjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `schoolteacher`
--
ALTER TABLE `schoolteacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `newscategory` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_class_foreign` FOREIGN KEY (`class`) REFERENCES `schoolclass` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notes_subject_foreign` FOREIGN KEY (`subject`) REFERENCES `schoolsubjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schoolbankdetails`
--
ALTER TABLE `schoolbankdetails`
  ADD CONSTRAINT `schoolbankdetails_school_foreign` FOREIGN KEY (`school`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schoolclass`
--
ALTER TABLE `schoolclass`
  ADD CONSTRAINT `schoolclass_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schoolcontact`
--
ALTER TABLE `schoolcontact`
  ADD CONSTRAINT `schoolcontact_school_foreign` FOREIGN KEY (`school`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schooldetails`
--
ALTER TABLE `schooldetails`
  ADD CONSTRAINT `schooldetails_user_id_foreign` FOREIGN KEY (`school_name`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schoolnotice`
--
ALTER TABLE `schoolnotice`
  ADD CONSTRAINT `schoolnotice_schoolid_foreign` FOREIGN KEY (`schoolid`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schoolresult`
--
ALTER TABLE `schoolresult`
  ADD CONSTRAINT `schoolresult_class_foreign` FOREIGN KEY (`class`) REFERENCES `schoolclass` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schoolresult_school_foreign` FOREIGN KEY (`school`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schoolresult_section_foreign` FOREIGN KEY (`section`) REFERENCES `schoolsection` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schoolresult_student_foreign` FOREIGN KEY (`student`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schoolschedule`
--
ALTER TABLE `schoolschedule`
  ADD CONSTRAINT `schoolschedule_class_foreign` FOREIGN KEY (`class`) REFERENCES `schoolclass` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schoolschedule_school_foreign` FOREIGN KEY (`school`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schoolschedule_section_foreign` FOREIGN KEY (`section`) REFERENCES `schoolsection` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schoolsection`
--
ALTER TABLE `schoolsection`
  ADD CONSTRAINT `schoolsection_class_foreign` FOREIGN KEY (`class`) REFERENCES `schoolclass` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schoolsection_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schoolsetting`
--
ALTER TABLE `schoolsetting`
  ADD CONSTRAINT `schoolsetting_school_foreign` FOREIGN KEY (`school`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schoolstudentfees`
--
ALTER TABLE `schoolstudentfees`
  ADD CONSTRAINT `schoolstudentfees_class_foreign` FOREIGN KEY (`class`) REFERENCES `schoolclass` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schoolstudentfees_school_foreign` FOREIGN KEY (`school`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schoolstudentfees_section_foreign` FOREIGN KEY (`section`) REFERENCES `schoolsection` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schoolsubjects`
--
ALTER TABLE `schoolsubjects`
  ADD CONSTRAINT `schoolsubjects_class_foreign` FOREIGN KEY (`class`) REFERENCES `schoolclass` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schoolsubjects_school_foreign` FOREIGN KEY (`school`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schoolsubjects_teacher_foreign` FOREIGN KEY (`teacher`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schoolteacher`
--
ALTER TABLE `schoolteacher`
  ADD CONSTRAINT `schoolteacher_school_foreign` FOREIGN KEY (`school`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schoolteacher_teacher_foreign` FOREIGN KEY (`teacher`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD CONSTRAINT `studentdetails_section_foreign` FOREIGN KEY (`section`) REFERENCES `schoolsection` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `studentdetails_userid_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
