-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 09:53 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carshowroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profiles`
--

CREATE TABLE `admin_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topwallpaper` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bottomwallpaper` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_profiles`
--

INSERT INTO `admin_profiles` (`id`, `status`, `phno`, `logo`, `topwallpaper`, `bottomwallpaper`, `created_at`, `updated_at`) VALUES
(1, 'nkjfa', '9847192885', 'fsaf', 'bbs_1529396364.jpg_1542527532-1551094552_1552468821.jpg', 'car1-1551084623_1552395730.jpg', NULL, '2019-03-13 03:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `applied_for_vacancies`
--

CREATE TABLE `applied_for_vacancies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curriculum_vitae` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applied_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applied_for_vacancies`
--

INSERT INTO `applied_for_vacancies` (`id`, `name`, `address`, `contact`, `curriculum_vitae`, `applied_post`, `created_at`, `updated_at`) VALUES
(1, 'Milan Tarami', 'Devdaha -10 , Charange', '9876543200', '1545535154Table for Normal Distribution.docx', 'Qualified Manager Vacancy', NULL, NULL),
(2, 'Hary Ale', 'Palpa', '6534534534', '1545535213Compiled_Notes.docx', 'Qualified Manager Vacancy', NULL, NULL),
(3, 'pourkas', 'manigram', '9876543200', '1545539550UNIT 1 Information system.docx', 'Qualified Manager Vacancy', NULL, NULL),
(4, 'afsdvcasca', 'awedcaw', '9876543200', '1545546835Final Report on Trading System.docx', 'Technical Support', NULL, NULL),
(7, 'srgbvbrs', 'tvgsert', '9821488749', '1545547401Final Report on Trading System.docx', 'Technical Support', NULL, NULL);

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
  `publish` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `summary`, `slug`, `image`, `publish`, `created_at`, `updated_at`) VALUES
(2, 'What is Blogging and Why is it Popular?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porttitor, ipsum in elementum fermentum, sem lacus posuere tortor, non sodales metus tellus ac nibh. Phasellus vitae tristique nunc. Nulla malesuada et sapien ut varius. Integer ac fermentum urna. Pellentesque nec odio quis leo iaculis cursus et sit amet velit. Vestibulum blandit laoreet euismod. Nam nec nibh elit. Sed placerat interdum libero sed lobortis. Proin dignissim lectus eget tempus sodales. Nulla finibus interdum nibh in pulvinar. Aenean viverra tincidunt dolor, at laoreet dolor bibendum vel. Praesent eu feugiat leo.</p><p>Mauris pulvinar, metus varius accumsan gravida, ex diam maximus augue, eu dictum lacus enim ac lorem. Nunc vel nibh et diam dictum cursus. Vestibulum pulvinar scelerisque est nec pellentesque. Donec eget interdum felis. Maecenas iaculis felis eget diam hendrerit, sit amet consectetur turpis posuere. Nullam nec augue urna. Pellentesque nisi nulla, laoreet at porta in, tincidunt hendrerit nisi.</p><p>Etiam aliquet iaculis magna vel commodo. Sed accumsan enim sit amet enim interdum ullamcorper in at dolor. Mauris id turpis at est egestas congue nec ut erat. Integer vel faucibus enim. Nam accumsan eros in metus gravida scelerisque. Vestibulum eget ex nisi. Aliquam sed ligula diam. Curabitur suscipit ornare ante. Sed malesuada, purus sed tristique mattis, tellus leo venenatis mauris, id sollicitudin nisi quam a nunc. Duis cursus blandit faucibus. Maecenas consequat libero quis dui hendrerit sollicitudin. Nam suscipit fringilla urna sed consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt elit ut euismod mollis. Phasellus eu felis ac est feugiat interdum.</p>', 'what-is-blogging-and-why-is-it-popular', 'a:2:{i:0;s:33:\"Screenshot (3).png_1545392047.png\";i:1;s:25:\"Tulips.jpg_1541321015.jpg\";}', 1, '2018-11-04 02:56:12', '2018-12-21 22:01:10'),
(3, 'The Complete Guide to Successful Blogging in 2018 So, you want to start a blog? If so, you are in the right place!', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porttitor, ipsum in elementum fermentum, sem lacus posuere tortor, non sodales metus tellus ac nibh. Phasellus vitae tristique nunc. Nulla malesuada et sapien ut varius. Integer ac fermentum urna. Pellentesque nec odio quis leo iaculis cursus et sit amet velit. Vestibulum blandit laoreet euismod. Nam nec nibh elit. Sed placerat interdum libero sed lobortis. Proin dignissim lectus eget tempus sodales. Nulla finibus interdum nibh in pulvinar. Aenean viverra tincidunt dolor, at laoreet dolor bibendum vel. Praesent eu feugiat leo.</p><p>Mauris pulvinar, metus varius accumsan gravida, ex diam maximus augue, eu dictum lacus enim ac lorem. Nunc vel nibh et diam dictum cursus. Vestibulum pulvinar scelerisque est nec pellentesque. Donec eget interdum felis. Maecenas iaculis felis eget diam hendrerit, sit amet consectetur turpis posuere. Nullam nec augue urna. Pellentesque nisi nulla, laoreet at porta in, tincidunt hendrerit nisi.</p><p>Etiam aliquet iaculis magna vel commodo. Sed accumsan enim sit amet enim interdum ullamcorper in at dolor. Mauris id turpis at est egestas congue nec ut erat. Integer vel faucibus enim. Nam accumsan eros in metus gravida scelerisque. Vestibulum eget ex nisi. Aliquam sed ligula diam. Curabitur suscipit ornare ante. Sed malesuada, purus sed tristique mattis, tellus leo venenatis mauris, id sollicitudin nisi quam a nunc. Duis cursus blandit faucibus. Maecenas consequat libero quis dui hendrerit sollicitudin. Nam suscipit fringilla urna sed consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt elit ut euismod mollis. Phasellus eu felis ac est feugiat interdum.</p>', 'the-complete-guide-to-successful-blogging-in-2018-so-you-want-to-start-a-blog-if-so-you-are-in-the-right-place', 'a:2:{i:0;s:34:\"Screenshot (13).png_1545392118.png\";i:1;s:32:\"Chrysanthemum.jpg_1541321119.jpg\";}', 1, '2018-11-04 03:00:19', '2018-12-21 22:01:22'),
(4, '10 Things to Make Your Blog Awesomer', '<p>I am saying it. <strong>Free stuff, while awesome in its lack of cost, is still just that: a freebie</strong>. Often it is a watered down version of a premium product or a way for someone to advertise themselves. Think about it. That “free” image you are using? You have to link to someone and give them credit. The “free” font service you use? It puts a badge at the bottom of your site.</p><p>Many free services require you to link back to them with either a link or a badge. These links can cause confusion to your readers (what exactly is the point of your site and why are you sending them elsewhere?), and you don’t want to confuse your visitors.</p><p>“Free” images are often not free either. If you are using a photo someone else took without paying for it, are you sure you aren’t in violation of copyright or the creative commons license under which it was shared?</p><p>One last thing about freebies and blogging: are you still using a free domain for your blog, such as yourname.bloggingservice.com? It is time to grow up and upgrade. These domains look free, which isn’t a good look for someone blogging for business. Domain names are a nominal cost. If you are using a free domain because you added a blog to your website after it launched, upgrade to the version that lets you use yoursite.com/blog. <strong>You gain instant credibility, so what is stopping you?</strong></p>', '10-things-to-make-your-blog-awesomer', 'a:1:{i:0;s:11:\"noimage.jpg\";}', 1, '2018-12-21 03:14:53', '2018-12-22 07:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `address`, `email`, `contact`, `branch_type`, `created_at`, `updated_at`) VALUES
(1, 'abc branch', 'palpa tansen', 'Gurans@gmail.com', '98471728', 'child', '2019-02-11 07:16:53', '2019-02-11 07:16:53'),
(2, 'google', 'TAnsen', 'eudora.tillman@example.net', '9847172889', 'head', '2019-02-11 07:17:48', '2019-02-11 07:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Qualified Manager Vacancy', 'qualified-manager-vacancy', '<p>hello this is new job vacancy</p>', 'a:1:{i:0;s:45:\"1_056T0BvTG-8eTzkIi04PFQ.jpeg_1545202374.jpeg\";}', '2018-12-19 01:07:54', '2018-12-22 07:47:17'),
(7, 'ksjdfvkjsdfn', 'ksjdfvkjsdfn', '<p>ksfdjnvksdjfvkjsd</p>', 'a:1:{i:0;s:45:\"1_056T0BvTG-8eTzkIi04PFQ.jpeg_1545202413.jpeg\";}', '2018-12-19 01:08:33', '2018-12-22 07:47:36'),
(8, 'Technical Support', 'technical-support', '<p>msdfnvksj</p>', 'a:1:{i:0;s:28:\"carbon(3).png_1545202603.png\";}', '2018-12-19 01:11:43', '2018-12-22 07:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'This is new brand in this area', 'mgzsblack-1551116698-1552411093.jpg', '2019-03-12 11:33:13', '2019-03-12 11:33:13'),
(3, 'car2', 'This is new brand in this area', 'car2-1551092871-1552468650.jpg', '2019-03-13 03:32:31', '2019-03-13 03:32:31'),
(4, 'car4', 'Describe your image here. Click me and then “Organize Images” to change my text.', 'mgzsred-1551116656-1552468698.jpg', '2019-03-13 03:33:18', '2019-03-13 03:33:18'),
(5, 'car3', 'Describe your image here. Click me and then “Organize Images” to change my text.', 'mgzsblue-1551116752-1552468745.JPG', '2019-03-13 03:34:05', '2019-03-13 03:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `customer_queries`
--

CREATE TABLE `customer_queries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_queries`
--

INSERT INTO `customer_queries` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(5, 'sdc', 'asdcvasdc@asdc.aedc', '34534534', 'sdfvdfvcsdf', '2018-12-20 09:29:04', '2018-12-20 09:29:04'),
(6, 'kfjvsedf', 'dfv@asedc.aef', '98345', 'sdfvbsdfv', '2018-12-21 02:20:10', '2018-12-21 02:20:10'),
(7, 'afdvsdfv', 'adjhcbafds@asadc.asdc', '2147483647', 'asdjcbadsjhc', '2018-12-23 06:31:03', '2018-12-23 06:31:03'),
(8, 'asc', 'adjhcbafds@asadc.asdc', '2147483649', 'sdfvsdf', '2018-12-23 06:31:31', '2018-12-23 06:31:31'),
(9, 'hgcv', 'zadcas@awedc.awed', '9888989899', 'sdfvsdf', '2018-12-23 08:58:00', '2018-12-23 08:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Chhat Vacation', 'asdsas', 'brightcms1543475437.sql', '2018-11-29 00:41:30', '2018-11-29 01:25:37'),
(2, 'Teachers', 'abcd', 'brightcms1543482170.sql', '2018-11-29 03:17:50', '2018-11-29 03:17:50'),
(3, 'Pdf File', 'This is a pdf file.', 'pdf-test1543482449.pdf', '2018-11-29 03:22:29', '2018-11-29 03:22:29'),
(4, 'Sales', 'abcd', 'dvmunaa1543482852.pdf', '2018-11-29 03:29:12', '2018-11-29 03:29:12'),
(5, 'Slider 2', 'asdsas', 'dvsantosh1543483403.pdf', '2018-11-29 03:37:20', '2018-11-29 03:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `footer_settings`
--

CREATE TABLE `footer_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `googlemap` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_settings`
--

INSERT INTO `footer_settings` (`id`, `address`, `phno`, `googlemap`, `facebook`, `instagram`, `gmail`, `linkin`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'Butwal', '+97733-56175', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113060.50299444153!2d83.36249576257954!3d27.682045338460938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3996864275d9755f%3A0x2b1e92d89d4bb3ae!2sButwal!5e0!3m2!1sen!2snp!4v1552568438141', 'facebook.com', 'instagram.com', 'gmail.com', 'linked.in', 'twitter.com', '2019-03-14 07:26:34', '2019-03-14 07:26:34');

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
(5, 2, 'Koala.jpg_1542170493.jpg', '<p>sadasd</p>', '2018-11-13 22:56:33', '2018-11-13 22:56:33'),
(6, 2, 'Penguins.jpg_1542170493.jpg', '<p>sadasd</p>', '2018-11-13 22:56:33', '2018-11-13 22:56:33'),
(12, 2, 'download.jpg_1544335839.jpg', '<p>asdsde</p>', '2018-12-09 00:25:39', '2018-12-09 00:25:39'),
(13, 2, 'prakash.jpg_1544341527.jpg', '<p>&nbsp;</p>', '2018-12-09 02:00:27', '2018-12-09 02:00:27'),
(14, 3, 'poor-512.png_1544345119.png', '<p>asd</p>', '2018-12-09 03:00:19', '2018-12-09 03:00:19');

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
(21, '2018_11_23_043532_add_some_fields_to_members', 5),
(22, '2018_11_28_085841_create_quick_links_table', 6),
(23, '2018_11_29_044533_create_downloads_table', 7),
(24, '2018_12_02_060130_create_careers_table', 8),
(25, '2018_12_04_085752_create_calendars_table', 9),
(26, '2018_12_09_051738_add_video_link_field_to_galleries_table', 10),
(27, '2018_12_09_063128_create_videos_table', 11),
(28, '2018_12_18_083817_create_testimonials_table', 12),
(29, '2018_12_18_134639_create_pricings_table', 12),
(30, '2018_12_19_093623_create_customer_queries_table', 13),
(31, '2018_12_20_074141_create_branches_table', 14),
(32, '2018_12_22_162151_create_our_services_table', 15),
(33, '2018_12_22_175445_create_social_links_table', 16),
(34, '2018_12_22_182935_create_social_links_table', 17),
(35, '2018_12_23_020751_create_applied_for_vacancies_table', 18),
(36, '2018_12_23_031753_create_applied_for_vacancies', 19),
(37, '2018_12_21_113937_create_branches_table', 20),
(38, '2019_02_11_093752_create_admin_profiles_table', 20),
(39, '2018_08_08_100000_create_telescope_entries_table', 21),
(40, '2019_02_25_072854_create_cars_table', 21),
(41, '2019_03_12_102909_create_wallpapers_table', 21),
(42, '2019_03_11_093752_create_admin_profiles_table', 22),
(44, '2019_03_14_115929_create_footer_settings_table', 23);

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
(3, 'Chhat Vacation', '<p>Dashain vacation will start from 24th of Ashoj and end on 3rd of Kartik</p>', 'a:1:{i:0;s:27:\"poor-512.png_1542090333.png\";}', 1, '2018-11-13 00:40:23', '2018-11-27 00:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

CREATE TABLE `our_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_services`
--

INSERT INTO `our_services` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Informational security', '<p>We’ll help you solve your current business problems and work with you to find ways to use technology to improve your business. Our business process improvement team will provide you with a knowledgeable resource when you need business or IT advice.</p>', '2018-12-22 11:32:44', '2018-12-22 11:44:44'),
(2, 'Software Development', '<p>Whether you have a start-up project to launch, an idea for a custom software solution for your company, or you are engaged in software product development, Internet Provider is ready to provide full-cycle software development services at each stage of your project.</p>', '2018-12-22 11:33:37', '2018-12-22 11:45:12'),
(3, 'Technology Consulting', '<p>Security breaches are on the rise, and it’s not just large organizations that are being targeted. All businesses must take measures to protect their networks and sensitive information from threats, vulnerabilities, and malicious attacks. Our IT security team will work with you to identify and manage your risk.</p>', '2018-12-22 11:35:42', '2018-12-22 11:45:33'),
(5, 'Youtube Policy', '<p>sldkvsd akdc skdcaksd ckasdj ckasdj ckasd cvaksd cas dckas dc</p>', '2018-12-22 11:53:43', '2018-12-22 11:53:43');

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
(12, 6, 'Online Support', 'online-support', '<p>There is a great tool for a online support &nbsp;.&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 'a:2:{i:0;s:45:\"1_056T0BvTG-8eTzkIi04PFQ.jpeg_1545367039.jpeg\";i:1;s:11:\"noimage.jpg\";}', 1, NULL, '2018-12-20 22:51:50', '2018-12-22 05:27:00'),
(13, 6, 'Privacy Policy', 'privacy-policy', '<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then&nbsp;</p><p>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! \"Now fax quiz Jack!\" my brave ghost pled. Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. Quick brown dogs jump over the lazy fox. The jay, pig, fox, zebra, and my wolves quack! Blowzy red vixens fight for a quick jump. Joaquin Phoenix was gazed by MTV for luck. A wizard’s job is to vex chumps quickly in fog. Watch \"Jeopardy!\", Alex Trebek\'s fun TV quiz game. Woven silk pyjamas exchanged for blue quartz. Brawny gods just</p>', 'a:1:{i:0;s:11:\"noimage.jpg\";}', 1, NULL, '2018-12-20 22:53:34', '2018-12-22 05:24:39'),
(15, 6, 'Customer Support', 'customer-support', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 'a:1:{i:0;s:11:\"noimage.jpg\";}', 1, NULL, '2018-12-21 01:43:53', '2018-12-22 05:26:24'),
(16, 7, 'Who we are ?', 'who-we-are', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p><p>&nbsp;Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere</p>', 'a:1:{i:0;s:26:\"laravel.png_1545388611.png\";}', 1, NULL, '2018-12-21 04:51:51', '2018-12-22 09:50:19'),
(17, 7, 'Hello to fellow customer', 'hello-to-fellow-customer', '<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.&nbsp;</p><p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.&nbsp;</p><p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee&nbsp;</p>', 'a:1:{i:0;s:11:\"noimage.jpg\";}', 1, NULL, '2018-12-21 04:59:59', '2018-12-22 10:17:46'),
(18, 7, 'We are ruling the country', 'we-are-ruling-the-country', '<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath&nbsp;</p>', 'a:1:{i:0;s:28:\"carbon(3).png_1545389819.png\";}', 1, NULL, '2018-12-21 05:04:24', '2018-12-21 05:12:20'),
(19, 7, 'qwerfwerf', 'qwerfwerf', '<p>erfwerf</p>', 'a:1:{i:0;s:11:\"noimage.jpg\";}', 1, NULL, '2018-12-23 00:48:30', '2018-12-23 00:48:30');

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
(6, 'Support', 'support', '2018-11-18 00:18:04', '2018-11-18 00:18:04'),
(7, 'About Us', 'about-us', '2018-11-18 01:14:25', '2018-11-18 01:14:25');

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
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` int(10) UNSIGNED NOT NULL,
  `speed` int(10) UNSIGNED NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `plan_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `traffic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `speed`, `unit`, `price`, `plan_type`, `traffic`, `display`, `created_at`, `updated_at`) VALUES
(1, 12, 'MBit/sec', 12000, '1 month', 'Unlimited', '1', '2018-12-19 00:31:39', '2018-12-19 00:31:39'),
(2, 30, 'MBit/sec', 3000, '15 days', 'Unlimited', '1', '2018-12-19 04:38:26', '2018-12-19 04:38:46'),
(3, 50, 'MBit/sec', 5000, '1 month', 'Unlimited', '1', '2018-12-19 12:17:18', '2018-12-19 12:17:18'),
(4, 20, 'KBit/sec', 900, '1 month', 'Unlimited', '1', '2018-12-19 12:23:21', '2018-12-19 23:14:41'),
(5, 20, 'MBit/sec', 12000, '1 month', 'Unlimited', '1', '2018-12-19 23:14:59', '2018-12-19 23:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `quick_links`
--

CREATE TABLE `quick_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quick_links`
--

INSERT INTO `quick_links` (`id`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Tribhuvan University', 'https://tribhuvan-university.edu.np/', '2018-11-28 03:35:16', '2018-11-28 03:35:16'),
(3, 'Office of the Controller of Examinations (OCE)', 'http://soce.gov.np/', '2018-11-28 03:57:26', '2018-11-28 03:57:26');

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
(1, 'Best school of rupandehi', NULL, '2018-12-03 02:21:51');

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
(8, 'hello world', 'Screenshot (36).png_1545536124.png', 1, '2018-12-22 21:50:24', '2018-12-22 21:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `facebook`, `google_plus`, `twitter`, `linkedin`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'https://facebook.com/my-page-link/erkvjsj', 'https://plus.google.com/my-page-link', 'https://twitter.com/my-page-link', 'https://linkedin.com/my-page-link', 'https://instagram.com/my-page-link/12', NULL, '2018-12-23 00:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `telescope_entries`
--

CREATE TABLE `telescope_entries` (
  `sequence` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family_hash` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `should_display_on_index` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Nischal Basnet', 'Good internet services has been providing by you company ! I am glad that I\'m a part of your ISP', '2018-12-19 12:32:29', '2018-12-19 12:32:29'),
(2, 'Swastima Khadka', 'Hey you are ruling as a bes ISP ever ! haha lol', '2018-12-19 12:33:25', '2018-12-19 12:33:25');

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
(4, 'Nirajan Nepal', 'admin@gmail.com', '$2y$10$M9b077u9mPLkqAoOBXFhpOrL0a81JCUUhmHgz.X5td3cqClGxqHNm', 'RQ1XciNdHJfBuqVsylilErr9SDF1PgXNVJyyd2dZNyMQ7gVfzAYJyyrfmK3O', '2018-11-26 04:12:51', '2018-11-26 04:12:51'),
(5, 'Prakash Timilsina', 'pourkas@hotmail.com', '$2y$10$CmlDSGG6mBJGnY46eoRKoeyFyg.a8AxvaAL1gdA79Zrl165NbZlIO', '2ZnWJUfbCfPaZz1uA308xvb4BnUmY7bMzFmwewlkFqob2comTcLG5F1jql1L', '2018-11-26 04:53:03', '2018-11-26 04:53:03'),
(6, 'milan tarami', 'milan@gmail.com', '$2y$10$UC4sFFBEDp447ThJZbMD3eHOl.J4WxCXJmVrildaw61CwwBA6Tu5m', NULL, '2019-03-13 05:46:07', '2019-03-13 05:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_category_id` int(11) NOT NULL,
  `video_frame` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `gallery_category_id`, `video_frame`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JGQrIzEmpJU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<p>asd</p>', '2018-12-09 01:25:23', '2018-12-09 01:25:23'),
(4, 2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/bNoGXzEL1mA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<p>as</p>', '2018-12-09 02:04:00', '2018-12-09 02:04:00'),
(5, 2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7yLWjCai4-s\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<p>sd</p>', '2018-12-09 02:22:22', '2018-12-09 02:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `wallpapers`
--

CREATE TABLE `wallpapers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallpapers`
--

INSERT INTO `wallpapers` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'car', 'car1-1551084623_1552395730.jpg', '2019-03-12 07:17:10', '2019-03-12 07:17:10'),
(2, 'bottom', 'picture-1551083396_1552400383.jpg', '2019-03-12 08:34:43', '2019-03-12 08:34:43'),
(3, 'profesors', 'bbs_1529396364.jpg_1542527532-1551094552_1552468821.jpg', '2019-03-13 03:35:21', '2019-03-13 03:35:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_for_vacancies`
--
ALTER TABLE `applied_for_vacancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_queries`
--
ALTER TABLE `customer_queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_settings`
--
ALTER TABLE `footer_settings`
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
-- Indexes for table `our_services`
--
ALTER TABLE `our_services`
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
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_links`
--
ALTER TABLE `quick_links`
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
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  ADD PRIMARY KEY (`sequence`),
  ADD UNIQUE KEY `telescope_entries_uuid_unique` (`uuid`),
  ADD KEY `telescope_entries_batch_id_index` (`batch_id`),
  ADD KEY `telescope_entries_type_should_display_on_index_index` (`type`,`should_display_on_index`),
  ADD KEY `telescope_entries_family_hash_index` (`family_hash`);

--
-- Indexes for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD KEY `telescope_entries_tags_entry_uuid_tag_index` (`entry_uuid`,`tag`),
  ADD KEY `telescope_entries_tags_tag_index` (`tag`);

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
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallpapers`
--
ALTER TABLE `wallpapers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applied_for_vacancies`
--
ALTER TABLE `applied_for_vacancies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_queries`
--
ALTER TABLE `customer_queries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_settings`
--
ALTER TABLE `footer_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_services`
--
ALTER TABLE `our_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `page_categories`
--
ALTER TABLE `page_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quick_links`
--
ALTER TABLE `quick_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  MODIFY `sequence` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2436;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wallpapers`
--
ALTER TABLE `wallpapers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD CONSTRAINT `telescope_entries_tags_entry_uuid_foreign` FOREIGN KEY (`entry_uuid`) REFERENCES `telescope_entries` (`uuid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
