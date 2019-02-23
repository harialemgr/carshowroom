-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 06:27 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brightcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_id` int(11) NOT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `summary`, `slug`, `image`, `blog_category_id`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdcver', '<p>asdasdLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porttitor, ipsum in elementum fermentum, sem lacus posuere tortor, non sodales metus tellus ac nibh. Phasellus vitae tristique nunc. Nulla malesuada et sapien ut varius. Integer ac fermentum urna. Pellentesque nec odio quis leo iaculis cursus et sit amet velit. Vestibulum blandit laoreet euismod. Nam nec nibh elit. Sed placerat interdum libero sed lobortis. Proin dignissim lectus eget tempus sodales. Nulla finibus interdum nibh in pulvinar. Aenean viverra tincidunt dolor, at laoreet dolor bibendum vel. Praesent eu feugiat leo.</p><p>Mauris pulvinar, metus varius accumsan gravida, ex diam maximus augue, eu dictum lacus enim ac lorem. Nunc vel nibh et diam dictum cursus. Vestibulum pulvinar scelerisque est nec pellentesque. Donec eget interdum felis. Maecenas iaculis felis eget diam hendrerit, sit amet consectetur turpis posuere. Nullam nec augue urna. Pellentesque nisi nulla, laoreet at porta in, tincidunt hendrerit nisi.</p><p>Etiam aliquet iaculis magna vel commodo. Sed accumsan enim sit amet enim interdum ullamcorper in at dolor. Mauris id turpis at est egestas congue nec ut erat. Integer vel faucibus enim. Nam accumsan eros in metus gravida scelerisque. Vestibulum eget ex nisi. Aliquam sed ligula diam. Curabitur suscipit ornare ante. Sed malesuada, purus sed tristique mattis, tellus leo venenatis mauris, id sollicitudin nisi quam a nunc. Duis cursus blandit faucibus. Maecenas consequat libero quis dui hendrerit sollicitudin. Nam suscipit fringilla urna sed consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt elit ut euismod mollis. Phasellus eu felis ac est feugiat interdum.</p>', 'sdfsdcver', 'a:1:{i:0;s:27:\"Penguins.jpg_1541320830.jpg\";}', 2, 1, '2018-11-04 02:55:31', '2018-11-21 00:49:18'),
(2, 'Sports Week', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porttitor, ipsum in elementum fermentum, sem lacus posuere tortor, non sodales metus tellus ac nibh. Phasellus vitae tristique nunc. Nulla malesuada et sapien ut varius. Integer ac fermentum urna. Pellentesque nec odio quis leo iaculis cursus et sit amet velit. Vestibulum blandit laoreet euismod. Nam nec nibh elit. Sed placerat interdum libero sed lobortis. Proin dignissim lectus eget tempus sodales. Nulla finibus interdum nibh in pulvinar. Aenean viverra tincidunt dolor, at laoreet dolor bibendum vel. Praesent eu feugiat leo.</p><p>Mauris pulvinar, metus varius accumsan gravida, ex diam maximus augue, eu dictum lacus enim ac lorem. Nunc vel nibh et diam dictum cursus. Vestibulum pulvinar scelerisque est nec pellentesque. Donec eget interdum felis. Maecenas iaculis felis eget diam hendrerit, sit amet consectetur turpis posuere. Nullam nec augue urna. Pellentesque nisi nulla, laoreet at porta in, tincidunt hendrerit nisi.</p><p>Etiam aliquet iaculis magna vel commodo. Sed accumsan enim sit amet enim interdum ullamcorper in at dolor. Mauris id turpis at est egestas congue nec ut erat. Integer vel faucibus enim. Nam accumsan eros in metus gravida scelerisque. Vestibulum eget ex nisi. Aliquam sed ligula diam. Curabitur suscipit ornare ante. Sed malesuada, purus sed tristique mattis, tellus leo venenatis mauris, id sollicitudin nisi quam a nunc. Duis cursus blandit faucibus. Maecenas consequat libero quis dui hendrerit sollicitudin. Nam suscipit fringilla urna sed consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt elit ut euismod mollis. Phasellus eu felis ac est feugiat interdum.</p>', 'sports-week', 'a:2:{i:0;s:25:\"Tulips.jpg_1541321015.jpg\";i:1;s:29:\"Lighthouse.jpg_1541320872.jpg\";}', 2, 1, '2018-11-04 02:56:12', '2018-11-21 00:49:33'),
(3, 'Annual Function', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porttitor, ipsum in elementum fermentum, sem lacus posuere tortor, non sodales metus tellus ac nibh. Phasellus vitae tristique nunc. Nulla malesuada et sapien ut varius. Integer ac fermentum urna. Pellentesque nec odio quis leo iaculis cursus et sit amet velit. Vestibulum blandit laoreet euismod. Nam nec nibh elit. Sed placerat interdum libero sed lobortis. Proin dignissim lectus eget tempus sodales. Nulla finibus interdum nibh in pulvinar. Aenean viverra tincidunt dolor, at laoreet dolor bibendum vel. Praesent eu feugiat leo.</p><p>Mauris pulvinar, metus varius accumsan gravida, ex diam maximus augue, eu dictum lacus enim ac lorem. Nunc vel nibh et diam dictum cursus. Vestibulum pulvinar scelerisque est nec pellentesque. Donec eget interdum felis. Maecenas iaculis felis eget diam hendrerit, sit amet consectetur turpis posuere. Nullam nec augue urna. Pellentesque nisi nulla, laoreet at porta in, tincidunt hendrerit nisi.</p><p>Etiam aliquet iaculis magna vel commodo. Sed accumsan enim sit amet enim interdum ullamcorper in at dolor. Mauris id turpis at est egestas congue nec ut erat. Integer vel faucibus enim. Nam accumsan eros in metus gravida scelerisque. Vestibulum eget ex nisi. Aliquam sed ligula diam. Curabitur suscipit ornare ante. Sed malesuada, purus sed tristique mattis, tellus leo venenatis mauris, id sollicitudin nisi quam a nunc. Duis cursus blandit faucibus. Maecenas consequat libero quis dui hendrerit sollicitudin. Nam suscipit fringilla urna sed consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt elit ut euismod mollis. Phasellus eu felis ac est feugiat interdum.</p>', 'annual-function', 'a:1:{i:0;s:32:\"Chrysanthemum.jpg_1541321119.jpg\";}', 2, 1, '2018-11-04 03:00:19', '2018-11-21 00:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Dashain Vacation', 'holiday', '2018-11-04 02:28:11', '2018-11-04 02:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `address`, `contact`, `mobile`, `email`, `image`, `facebook`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'Yogyaday Dudhnath Tharu Multiple College', 'Suddhodhan- 3, Ramawapur,  Rupandehi', '071-400193', '24242121', 'Yogyaday@mail.com', 'logo_1528901987.png_1542523514.png', 'https://www.facebook.com/', 'https://twitter.com/', NULL, '2018-11-26 00:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_category_id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 3, 'prakash.jpg_1542106555.jpg', '<p>dfgdfg</p>', '2018-11-13 05:10:55', '2018-11-13 05:10:55'),
(3, 3, 'santosh.jpg_1542170282.jpg', '<p>sdfsdfe</p>', '2018-11-13 22:53:02', '2018-11-13 22:53:02'),
(5, 2, 'Koala.jpg_1542170493.jpg', '<p>sadasd</p>', '2018-11-13 22:56:33', '2018-11-13 22:56:33'),
(6, 2, 'Penguins.jpg_1542170493.jpg', '<p>sadasd</p>', '2018-11-13 22:56:33', '2018-11-13 22:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Sports Week', 'images from sports week', '2018-11-13 03:18:44', '2018-11-13 03:18:44'),
(3, 'Annual Function', 'Annual Function images', '2018-11-13 04:14:47', '2018-11-13 04:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_category_id` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nature_of_appointment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_category_id`, `designation`, `name`, `address`, `phone`, `email`, `image`, `created_at`, `updated_at`, `nature_of_appointment`, `qualification`) VALUES
(1, 3, 'Manager', 'Prakash Sharma', 'Butwal', '456456', 'pourkas@gmail.com', 'a:1:{i:0;s:26:\"prakash.jpg_1542170387.jpg\";}', '2018-11-13 22:54:47', '2018-11-22 23:09:55', 'Permanent', 'Bachelor'),
(2, 3, 'Manager', 'Santosh Bhattarai', 'Butwal', '456456', 'santosh@gmail.com', 'a:1:{i:0;s:26:\"santosh.jpg_1542789358.jpg\";}', '2018-11-21 02:50:58', '2018-11-22 23:10:17', 'Permanent', 'Bachelor'),
(3, 4, 'CEO', 'Prakash Sharma', 'butwal', '456456', 'pourkas@gmail.com', 'a:1:{i:0;s:26:\"prakash.jpg_1542789430.jpg\";}', '2018-11-21 02:52:10', '2018-11-22 23:10:27', 'Permanent', 'Bachelor'),
(4, 5, 'Manager', 'Santosh Bhattarai', 'Butwal', '456456', 'bishal@gmail.com', 'a:1:{i:0;s:26:\"santosh.jpg_1542789464.jpg\";}', '2018-11-21 02:52:44', '2018-11-22 23:10:40', 'Permanent', 'Bachelor'),
(5, 4, 'Head Teacher', 'Bishal Gaire', 'Butwal', '456456', 'bishal@gmail.com', 'a:1:{i:0;s:24:\"Koala.jpg_1542949016.jpg\";}', '2018-11-22 23:11:32', '2018-11-22 23:11:56', 'Permanent', 'Bachelor');

-- --------------------------------------------------------

--
-- Table structure for table `member_categories`
--

CREATE TABLE `member_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_categories`
--

INSERT INTO `member_categories` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(3, 'YDTMC Management Committee', 'Management Comittee', '2018-11-12 00:11:48', '2018-11-21 02:25:23'),
(4, 'Faculty Member B Ed.', 'B Ed. Faculty Members', '2018-11-21 02:26:20', '2018-11-21 02:26:20'),
(5, 'Faculty Member Management', 'Management Faculty Members', '2018-11-21 02:26:57', '2018-11-21 02:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_22_104120_create_blog_categories_table', 1),
(4, '2018_06_26_085627_create_colleges_table', 1),
(5, '2018_06_27_104259_create_page_categories_table', 1),
(6, '2018_06_28_085552_create_sliders_table', 1),
(7, '2018_06_28_144007_create_pages_table', 1),
(8, '2018_06_29_084022_create_messages_table', 1),
(9, '2018_07_01_085215_create_blogs_table', 1),
(10, '2018_08_06_105400_create_seos_table', 1),
(11, '2018_10_09_091235_create_packages_table', 1),
(12, '2018_10_09_093926_create_pcategories_table', 1),
(13, '2018_11_04_104118_create_members_table', 2),
(14, '2018_11_04_104201_create_member_categories_table', 2),
(16, '2018_11_13_050545_create_notices_table', 3),
(19, '2018_11_13_083136_create_galleries_table', 4),
(20, '2018_11_13_083245_create_gallery_categories_table', 4),
(21, '2018_11_23_043532_add_some_fields_to_members', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `description`, `image`, `publish`, `created_at`, `updated_at`) VALUES
(3, 'Chhat Vacation', '<p>sddfv sdfer</p>', 'a:1:{i:0;s:27:\"poor-512.png_1542090333.png\";}', 1, '2018-11-13 00:40:23', '2018-11-13 00:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `pcategory_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  `fontAwesome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_category_id`, `title`, `slug`, `summary`, `image`, `publish`, `fontAwesome`, `created_at`, `updated_at`) VALUES
(5, 6, 'About Us', 'about-us', '<p><strong>YDTMC</strong> is a leading institution in the catchment area near Butwal and Bhairahawa not only catering the need of the local students but also the students from Butwal Sub-Metropolitan and adjoining well facilitated areas. It is in the phase of achieving national and international standard of teaching learning activities with \'Local Institution in the Global Standard\'.It first, released its halo of education with B.A &amp; B Ed. program having 20 students and now, it has been flourished with around 600 students meeting its motto with the devotion of educationalists and social workers as well. Supporting the demands of the local pupils, it has successfully run the MBS, BBS, B. Ed programs. There is no doubt that the college has been the first choice of the students in the catchment area adjoining one Sub-Metropolitan and two Municipalities.</p>', 'a:1:{i:0;s:24:\"about.jpg_1542701963.jpg\";}', 1, NULL, '2018-11-18 00:21:46', '2018-11-25 05:21:48'),
(6, 7, 'Bachelor of Business Studies(BBS)', 'bbs', '<p>YDTMC provides a revised and refined 4 years program offered and controlled by faculty of management, Tribhuvan University, &nbsp;Kritipur, &nbsp;Kathmandu, Nepal. The program is baed on the principles that graduates will spend a major position of their life in a constantly changing environment. This program specially attempts to encourage entrepreneurial capabilities in students to make them effective change agents in business world.</p><h4>&nbsp;</h4><h4>&nbsp;</h4><h4>Entry Requirement</h4><p>Students who have passed +2 or equivalent from any faculties with English, Economics or Math with a minimum of second division are eligible to apply for admission.</p>', 'a:1:{i:0;s:33:\"mbs_1529397698.jpg_1542527963.jpg\";}', 1, NULL, '2018-11-18 01:15:17', '2018-11-25 23:15:21'),
(7, 7, 'Bachelor of Education(B Ed.)', 'b-ed', '<p>YDTMC offers a 4 years B Ed. program controlled by faculty of Education, Tribhuvan University, Kritipur, Kathmandu. The main objective of this program are to produce trained teachers, education specialist, education planners supervisors, curriculum designer and educational administrations.</p>', 'a:1:{i:0;s:33:\"bbs_1529396364.jpg_1542527532.jpg\";}', 1, NULL, '2018-11-18 02:07:12', '2018-11-25 23:16:16'),
(8, 7, 'Master of Business Studies', 'mbs', '<p>It is a 2 years programme, controlled by Faculty of Management, Tribhuvan University, Kritipur, Kathmandu, Nepal. The objective of the MBS program is to enable the students to work as competent manager and to meet the demand of higher level managers in organizations, particularly in the functional area of management. Upon graduation, a student should be able to function as a manager in business, industry, government and non-government sector, within and outside the country, in area like accounting, marketing, finance and general management.</p><p>&nbsp;</p><h4>The MBS program specially aims to:</h4><p>&nbsp;</p><ul><li>Develop knowledge and skill of business environment in national and &nbsp;global perspective.</li><li>Encourage entrepreneurial capabilities in students to make dynamic agents in nepalese society.</li><li>Equip the student with required conceptual knowledge of business and management.</li><li>Prepare managers in the functional area of management</li><li>Develop research capability in the students</li></ul>', 'a:1:{i:0;s:40:\"diplomehdr_1529397193.jpg_1542527595.jpg\";}', 1, NULL, '2018-11-18 02:08:15', '2018-11-25 23:25:10'),
(9, 6, 'Our Objectives', 'our-objectives', '<p>→ Professional development of faculties.</p><p>→ Help develop students\' practical &amp; professional skill.</p><p>→ Facilitate overall development of student.</p><p>→ Motivate them for higher education.</p><p>→ Encourage them for higher education.</p><p>→ Relate teaching &amp; learning with research.&nbsp;</p><p>→ Manage required ICT Facilities.</p><p>→ a. Implant social &amp; moral values on students.</p><p>→ Increase number &amp; pass percentage of students.</p><p>→ Help our graduates to get successful in life.</p><p>→ Manage extra source of income to college.</p><p>→ Offer attractive academic program according to current global context.</p><p>→ Manage adequate sophisticated infrastructure &amp; learning resources.</p><p>→ Optimum use of modern technology in the administrative activities.</p><p>→ A Manage required infra-structure for research activities.</p><p>&nbsp;</p><p>&nbsp;</p>', 'a:1:{i:0;s:11:\"noimage.jpg\";}', 1, NULL, '2018-11-21 03:11:26', '2018-11-25 05:27:23'),
(10, 6, 'Our Mission', 'our-mission', '<p>YMDC College is an institution of higher learning dedicated to global enrichment and meeting the evolving needs of our diverse communities.With an emphasis on innovative programs, dynamic curriculum and general education skills, we are committed to being a pioneer in the field of career-focused education.We empower our students, faculty and staff to exceed the expectations of society through academic excellence, community enrichment and service to the public good.</p>', 'a:1:{i:0;s:11:\"noimage.jpg\";}', 1, NULL, '2018-11-21 03:11:51', '2018-11-25 05:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `page_categories`
--

CREATE TABLE `page_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_categories`
--

INSERT INTO `page_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(6, 'Frontend pages', 'frontend-pages', '2018-11-18 00:18:04', '2018-11-18 00:18:04'),
(7, 'Courses', 'courses', '2018-11-18 01:14:25', '2018-11-18 01:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pcategories`
--

CREATE TABLE `pcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pcategories`
--

INSERT INTO `pcategories` (`id`, `type`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bishal', NULL, NULL, '2018-11-02 04:14:50', '2018-11-02 04:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'sdfsd sdf sdfsd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `publish`, `created_at`, `updated_at`) VALUES
(5, 'Chhat Vacation', 'Penguins.jpg_1542864272.jpg', 1, '2018-11-21 23:39:32', '2018-11-21 23:39:32'),
(6, 'Chhat Vacation', 'Koala.jpg_1542949904.jpg', 1, '2018-11-22 23:26:44', '2018-11-22 23:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Prakash Sharma', 'pourkas@gmail.com', '$2y$10$10ZAAHpPjawg0CjviUqZf.mek9z5wsHLNZj.8yBN7itQSvBaALV8i', 'mIn0U85OKl5q5YYJ5fVhpUvAliMRujHv5GpAzQzCrxLRCHS3M5ECMVCAly6P', NULL, NULL),
(3, 'Bishal Gaire', 'bishal@gmail.com', '$2y$10$5mfyQSdT6n0gKsKSKOPAceAF3My7j1kHbhIOJwJdTXzFbzReMaNxu', 'V31siBGRb8fe4WLbaHeeDzXY3hFekl0iXgNtTEXjEkESYeMc9ZUdccqxUziv', '2018-11-26 03:52:59', '2018-11-26 03:52:59'),
(4, 'Nirajan Nepal', 'nirajan@gmail.com', '$2y$10$ewFsN.Lu4EuN6D59RuYYPu/RRDN/y024Yd/mOwqkRVl7DZOz4qfci', '02h4ca4jmxIWkWoAOPMRhukxqGpZWJMrigyR1nCriXmPVEkWiaBE19zA4mBD', '2018-11-26 04:12:51', '2018-11-26 04:12:51'),
(5, 'Prakash Timilsina', 'pourkas@hotmail.com', '$2y$10$CmlDSGG6mBJGnY46eoRKoeyFyg.a8AxvaAL1gdA79Zrl165NbZlIO', '2ZnWJUfbCfPaZz1uA308xvb4BnUmY7bMzFmwewlkFqob2comTcLG5F1jql1L', '2018-11-26 04:53:03', '2018-11-26 04:53:03');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_categories`
--
ALTER TABLE `member_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_categories`
--
ALTER TABLE `page_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pcategories`
--
ALTER TABLE `pcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member_categories`
--
ALTER TABLE `member_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `page_categories`
--
ALTER TABLE `page_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pcategories`
--
ALTER TABLE `pcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
