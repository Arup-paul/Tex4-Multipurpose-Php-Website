-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 10:52 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sublimebd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `headline` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `type`, `headline`, `text`, `image`, `update_date`) VALUES
(1, 'about', 'About Us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `map` text NOT NULL,
  `number` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `location`, `map`, `number`, `email`) VALUES
(1, 'Saimah Bandhar market (5th Floor), Chittagong', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8195764228176!2d91.81920831431142!3d22.360440446361075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd88fee0bacef%3A0x3eac2d117885b5af!2sIFCO+Complex%2C+1147%2FA+CDA+Ave%2C+Chittagong+4000!5e0!3m2!1sen!2sbd!4v1486466998548', '01989-444222141', 'sevenprop@gmail.com'),
(1, 'Saimah Bandhar market (5th Floor), Chittagong', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8195764228176!2d91.81920831431142!3d22.360440446361075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd88fee0bacef%3A0x3eac2d117885b5af!2sIFCO+Complex%2C+1147%2FA+CDA+Ave%2C+Chittagong+4000!5e0!3m2!1sen!2sbd!4v1486466998548', '01989-444222141', 'sevenprop@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `apply_online`
--

CREATE TABLE `apply_online` (
  `id` int(11) NOT NULL,
  `title` varchar(230) NOT NULL,
  `gender` varchar(230) NOT NULL,
  `f_name` varchar(230) NOT NULL,
  `l_name` varchar(230) NOT NULL,
  `date_birth` varchar(100) NOT NULL,
  `passport_no` int(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip_code` int(50) NOT NULL,
  `mobile_phone` int(50) NOT NULL,
  `lan_phone` int(50) NOT NULL,
  `email_address` varchar(230) NOT NULL,
  `taken_ielts` varchar(15) NOT NULL,
  `ielts_score` varchar(15) NOT NULL,
  `education_qualification` varchar(150) NOT NULL,
  `choose_country` varchar(150) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_online`
--

INSERT INTO `apply_online` (`id`, `title`, `gender`, `f_name`, `l_name`, `date_birth`, `passport_no`, `address`, `city`, `zip_code`, `mobile_phone`, `lan_phone`, `email_address`, `taken_ielts`, `ielts_score`, `education_qualification`, `choose_country`, `comment`, `date`) VALUES
(4, 'mr', 'female', 'Jahangir ', ' Noman', '09/09/1995', 96, 'nnnnnnnnnnnnnn', 'chattogram', 45263, 2147483647, 1815635278, 'jahangir2kl@gmail.com', 'no', '6', 'gbnfgnfn', ' Poland', 'mmmmmmmmmmmmmmmmmm\r\nmmmmmmmmmmmmmmmmmm\r\nmmmmmmmmmmmmmm', '2018-11-14 00:00:00'),
(5, 'miss', 'female', 'Shamiha', ' Sarmin', '09/09/1995', 15, 'nnnnnnnnnnnnnn', 'chattogram', 85463, 2147483647, 5418554, 'sharmin2kl@gmail.com', 'no', '6.5', 'graduate', ' Hungary', 'mmmmmmmmmmmmmmm\r\nmmmmmmmmmmmmmmm\r\nmmmmmmmmmmm', '2018-11-14 00:00:00'),
(6, 'mr', 'male', 'Md', ' ', '12224116', 0, 'hhjkjkj', 'klmj;lml;l,', 0, 200121454, 0, 'mjkjjjmj', 'yes', '6.5', '', ' Canada', 'jhojhojkjjk', '2018-11-18 00:00:00'),
(7, 'where to buy cbd oil qyurh', 'male', 'Saubthult', ' SaubthultZG', '', 1980, 'New York', 'New York', 0, 132553, 2147483647, 'enmqmPheceTetToorieLade@1000xbetslots.xyz', 'yes', '', 'USA', ' USA', 'https://cbdoilamericano.com/# cbd water \r\n<a href=\"https://cbdoilamericano.com/#\">cbd oil in texas</a> \r\n<a href=\"https://cbdoilamericano.com/#\">cbd vape juice</a>', '2018-12-10 00:00:00'),
(8, 'mr', 'male', '', ' ', '', 0, '', '', 0, 0, 0, '', 'yes', '', '', ' USA', '', '2019-03-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blogname` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `blog_text` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blogname`, `type`, `image`, `blog_text`, `date`) VALUES
(3, 'First Blog', 'ON GOING PROJECT', '1486198898.jpeg', 'Hello This is blog text', '2017-02-04 15:01:38'),
(4, 'Real Estate', 'REAL ESTATE', '1486201112.jpeg', 'Hey This is Real Estate Project details for you. Got it ??', '2017-02-04 15:38:32'),
(5, 'Hello Boss', 'REAL ESTATE', '1486364048.jpg', 'Yap got you', '2017-02-06 12:54:08'),
(6, 'Smile', 'REAL ESTATE', '1486371698.jpg', 'Hello this is one and only for you ', '2017-02-06 15:01:38'),
(7, 'Superv', 'HAND-OVER PROJECT', '1486371735.jpg', 'Thihk', '2017-02-06 15:02:15'),
(8, 'First Blog', 'ON GOING PROJECT', '1486447871.jpg', 'lk', '2017-02-07 12:11:11'),
(9, 'Reaz', 'HAND-OVER PROJECT', '1486447909.png', 'sdsds', '2017-02-07 12:11:49'),
(3, 'First Blog', 'ON GOING PROJECT', '1486198898.jpeg', 'Hello This is blog text', '2017-02-04 15:01:38'),
(4, 'Real Estate', 'REAL ESTATE', '1486201112.jpeg', 'Hey This is Real Estate Project details for you. Got it ??', '2017-02-04 15:38:32'),
(5, 'Hello Boss', 'REAL ESTATE', '1486364048.jpg', 'Yap got you', '2017-02-06 12:54:08'),
(6, 'Smile', 'REAL ESTATE', '1486371698.jpg', 'Hello this is one and only for you ', '2017-02-06 15:01:38'),
(7, 'Superv', 'HAND-OVER PROJECT', '1486371735.jpg', 'Thihk', '2017-02-06 15:02:15'),
(8, 'First Blog', 'ON GOING PROJECT', '1486447871.jpg', 'lk', '2017-02-07 12:11:11'),
(9, 'Reaz', 'HAND-OVER PROJECT', '1486447909.png', 'sdsds', '2017-02-07 12:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact_welcome`
--

CREATE TABLE `contact_welcome` (
  `id` int(11) NOT NULL,
  `gettext` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_welcome`
--

INSERT INTO `contact_welcome` (`id`, `gettext`, `date`) VALUES
(1, '', '2017-02-06 04:11:56'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n		quis nostrud exercitation ullamco laboris ni', '2017-02-06 04:11:56'),
(3, '', '2017-02-06 04:11:56'),
(4, 'Your Activity and Your Feed Back always being happy to us.', '2017-02-06 04:11:56'),
(5, '', '2017-02-06 04:11:56'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n			quis nostrud exercitation ullamco laboris ', '2017-02-06 04:11:56'),
(1, '', '2017-02-06 04:11:56'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n		quis nostrud exercitation ullamco laboris ni', '2017-02-06 04:11:56'),
(3, '', '2017-02-06 04:11:56'),
(4, 'Your Activity and Your Feed Back always being happy to us.', '2017-02-06 04:11:56'),
(5, '', '2017-02-06 04:11:56'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n			quis nostrud exercitation ullamco laboris ', '2017-02-06 04:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `utext` text NOT NULL,
  `lname` varchar(300) NOT NULL,
  `company` varchar(300) NOT NULL,
  `country` varchar(300) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `applicantName` varchar(200) NOT NULL,
  `applicantPhone` varchar(30) NOT NULL,
  `applicantEmail` varchar(80) NOT NULL,
  `applicantResidence` text NOT NULL,
  `lsize` varchar(250) NOT NULL,
  `ltype` varchar(250) NOT NULL,
  `oName` varchar(250) NOT NULL,
  `oAddress` text NOT NULL,
  `lLocation` varchar(250) NOT NULL,
  `lCity` varchar(200) NOT NULL,
  `ldetail` text NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `view_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `received_by` varchar(250) NOT NULL,
  `extra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `footer_about`
--

CREATE TABLE `footer_about` (
  `id` int(11) NOT NULL,
  `text` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_about`
--

INSERT INTO `footer_about` (`id`, `text`, `date`) VALUES
(1, 'Hey this is footer about', '2017-02-06 16:08:04'),
(2, 'Seven Properties Limited believes that corporations exists not only as economic entities designed to pursue profits through fair competition, but also as social entities which must make a contribution to society at a large. The company is expected to respect human rights and to conduct themselves in a socially responsible manner toward the creation of a sustainable society, observe both the spirit as well as the letter of all laws and regulations applying to their activities ', '2017-02-07 17:19:51'),
(1, 'Hey this is footer about', '2017-02-06 16:08:04'),
(2, 'Seven Properties Limited believes that corporations exists not only as economic entities designed to pursue profits through fair competition, but also as social entities which must make a contribution to society at a large. The company is expected to respect human rights and to conduct themselves in a socially responsible manner toward the creation of a sustainable society, observe both the spirit as well as the letter of all laws and regulations applying to their activities ', '2017-02-07 17:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `footer_link`
--

CREATE TABLE `footer_link` (
  `id` int(11) NOT NULL,
  `title` varchar(400) NOT NULL,
  `url` varchar(500) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_link`
--

INSERT INTO `footer_link` (`id`, `title`, `url`, `update_date`) VALUES
(9, 'SMIDP Facebook', 'https://www.facebook.com/smidp', '2018-05-10 20:32:30'),
(7, 'Vokta Odhikar News', 'http://voktaodhikar.com', '2018-05-10 20:13:52'),
(8, 'Vokta Odhikar ORG', 'http://voktaodhikar.org', '2018-05-10 20:14:41'),
(9, 'SMIDP Facebook', 'https://www.facebook.com/smidp', '2018-05-10 20:32:30'),
(7, 'Vokta Odhikar News', 'http://voktaodhikar.com', '2018-05-10 20:13:52'),
(8, 'Vokta Odhikar ORG', 'http://voktaodhikar.org', '2018-05-10 20:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `footer_title`
--

CREATE TABLE `footer_title` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `gallery_name` varchar(250) NOT NULL,
  `image` varchar(300) NOT NULL,
  `vurl` varchar(250) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'image',
  `promo` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `caption`, `gallery_name`, `image`, `vurl`, `type`, `promo`, `date`) VALUES
(70, 'certificate', 'certificate', '1556986660.png', '', 'image', 0, '2019-05-04 09:17:40'),
(71, 'buyer', 'Buyer', '1556986673.png', '', 'image', 0, '2019-05-04 09:17:53'),
(72, 'supplier', 'supplier', '1556986689.png', '', 'image', 0, '2019-05-04 09:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `handover`
--

CREATE TABLE `handover` (
  `id` int(11) NOT NULL,
  `name` int(200) NOT NULL,
  `detail` varchar(5000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handover`
--

INSERT INTO `handover` (`id`, `name`, `detail`, `date`) VALUES
(1, 0, 'lllll', '2017-02-07 15:35:10'),
(2, 0, 'uuu', '2017-02-07 15:35:37'),
(3, 0, 'o', '2017-02-07 15:37:38'),
(4, 0, 'ol', '2017-02-07 15:38:11'),
(5, 0, 'plpl', '2017-02-07 15:38:39'),
(6, 0, 'll', '2017-02-07 15:40:49'),
(7, 2, 'lllkkk', '2017-02-07 15:58:37'),
(8, 0, 'hand', '2017-02-07 16:02:55'),
(1, 0, 'lllll', '2017-02-07 15:35:10'),
(2, 0, 'uuu', '2017-02-07 15:35:37'),
(3, 0, 'o', '2017-02-07 15:37:38'),
(4, 0, 'ol', '2017-02-07 15:38:11'),
(5, 0, 'plpl', '2017-02-07 15:38:39'),
(6, 0, 'll', '2017-02-07 15:40:49'),
(7, 2, 'lllkkk', '2017-02-07 15:58:37'),
(8, 0, 'hand', '2017-02-07 16:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `id` int(11) NOT NULL,
  `lnews` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id`, `lnews`, `date`) VALUES
(1, 'Latest News apps', '2017-02-06 11:36:22'),
(2, 'Latest News apps 1', '2017-02-06 11:36:36'),
(3, 'Hello latest', '2017-02-06 11:44:36'),
(1, 'Latest News apps', '2017-02-06 11:36:22'),
(2, 'Latest News apps 1', '2017-02-06 11:36:36'),
(3, 'Hello latest', '2017-02-06 11:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `date`) VALUES
(1, '1486291108.png', '2017-02-05 16:40:55'),
(3, '1486373423.png', '2017-02-06 15:30:23'),
(4, '1486373479.jpg', '2017-02-06 15:31:19'),
(1, '1486291108.png', '2017-02-05 16:40:55'),
(3, '1486373423.png', '2017-02-06 15:30:23'),
(4, '1486373479.jpg', '2017-02-06 15:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `map` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `map`, `date`) VALUES
(3, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.7912033234156!2d91.82058421431142!3d22.361511446322396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8856fc23ef3%3A0x6d833a294f95909e!2sApps+Maker+BD!5e0!3m2!1sen!2sng!4v1486332426736', '2017-02-06 04:07:43'),
(4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8195764228176!2d91.81920831431142!3d22.360440446361075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd88fee0bacef%3A0x3eac2d117885b5af!2sIFCO+Complex%2C+1147%2FA+CDA+Ave%2C+Chittagong+4000!5e0!3m2!1sen!2sbd!4v1486466998548', '2017-02-07 17:30:31'),
(3, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.7912033234156!2d91.82058421431142!3d22.361511446322396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8856fc23ef3%3A0x6d833a294f95909e!2sApps+Maker+BD!5e0!3m2!1sen!2sng!4v1486332426736', '2017-02-06 04:07:43'),
(4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8195764228176!2d91.81920831431142!3d22.360440446361075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd88fee0bacef%3A0x3eac2d117885b5af!2sIFCO+Complex%2C+1147%2FA+CDA+Ave%2C+Chittagong+4000!5e0!3m2!1sen!2sbd!4v1486466998548', '2017-02-07 17:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `md_table`
--

CREATE TABLE `md_table` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_table`
--

INSERT INTO `md_table` (`id`, `fname`, `email`, `subject`, `message`) VALUES
(1, 'ajoy', 'ajoy464@gmail.com', 'logo', 'i want to logo'),
(2, 'Uhlasain', 'usaymarma567@gmail.com', 'banner', 'i want to banner'),
(3, 'Uhlasain', 'usaymarma567@gmail.com', 'ti-shirt desgin', 'i want to t-shirt design');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `message` varchar(500) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `image` varchar(250) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `phone`, `email`, `message`, `subject`, `image`, `update_date`) VALUES
(0, 'Tamim', '01111111111', 'tamim@gmail.com', 'SublimBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who lov', '0', '', '2019-05-03 09:15:11'),
(0, 'Habib', '0133330102', 'habib@gmail.com', ' must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happi', 'nothing', '', '2019-05-04 23:57:43'),
(0, 'Arup paul2', '01866702189', 'arup@gmail.com', 'If that address is correct, here are three other things you can try:', 'nothing', '', '2019-05-05 00:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `modal`
--

CREATE TABLE `modal` (
  `name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `addedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modal`
--

INSERT INTO `modal` (`name`, `id`, `type`, `details`, `image`, `addedate`) VALUES
('hasan', 2, 'SOCIAL', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, ', '1556984364.png', '2019-05-04 08:39:24'),
('abu naser', 5, 'LAND-OWNER', 'It is one of the leading overseas educational consultancy companies in Bangladesh. The primary objective of our firm is to provide an authorized liaison between universities and students. We work with the Universities to recruit talented individuals across', '1556987199.png', '2019-05-04 09:26:39'),
('Arup paul', 6, 'CLIENTS', 'I am Web Designer & developer like html css jquery javascript bootstrap php mysql', '1556987657.jpg', '2019-05-04 09:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `ongoing`
--

CREATE TABLE `ongoing` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `detail` varchar(5000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongoing`
--

INSERT INTO `ongoing` (`id`, `name`, `detail`, `date`) VALUES
(1, 'ON GOING PROJECT', 'THis is ongoing', '2017-02-07 15:32:57'),
(2, 'HAND-OVER PROJECT', 'lllll', '2017-02-07 15:33:45'),
(3, 'HAND-OVER PROJECT', 'lllll', '2017-02-07 15:35:10'),
(4, 'HAND-OVER PROJECT', 'uuu', '2017-02-07 15:35:37'),
(5, 'on', 'l', '2017-02-07 16:02:41'),
(1, 'ON GOING PROJECT', 'THis is ongoing', '2017-02-07 15:32:57'),
(2, 'HAND-OVER PROJECT', 'lllll', '2017-02-07 15:33:45'),
(3, 'HAND-OVER PROJECT', 'lllll', '2017-02-07 15:35:10'),
(4, 'HAND-OVER PROJECT', 'uuu', '2017-02-07 15:35:37'),
(5, 'on', 'l', '2017-02-07 16:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pimage1` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `subcategory`, `details`, `pimage`, `pimage1`, `date`) VALUES
(8, 'Laptop', 'Dell', '', 'I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happi', '1557035219.jpg', '', '2019-05-04 22:46:59'),
(9, 'Mobile', 'Lenova', '', 'I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happi', '1557035238.jpg', '', '2019-05-04 22:47:18'),
(10, 'headphone', 'Apples', '', 'I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happi', '1557035257.jpg', '', '2019-05-04 22:47:37'),
(11, 'light', 'Apples', '', 'it is a long established facthat reader will be distracted by the readable content page when looking at its layout.', '1557045263.jpg', '1557045263.png', '2019-05-05 01:34:23'),
(12, 'Mobile', 'Dell', '', 'abcd', '1557051352.png', '1557051352.png', '2019-05-05 03:15:52'),
(13, 'headphone', 'Dell', '', 'addd', '1557051537.png', '1557051537.jpg', '2019-05-05 03:18:57'),
(14, 'mobile', 'DellHeadphone', '', 'abc', '1557051621.png', '1557051621.jpg', '2019-05-05 03:20:21'),
(15, 'Fan', 'Dell-Headphone', '', 'bangladesh', '1557051692.png', '1557051692.jpg', '2019-05-05 03:21:32'),
(16, 'asus 12', 'Asus', 'mobile', 'Asus brand mobile', '1557058400.png', '1557058400.png', '2019-05-05 05:13:20'),
(17, 'makup box', 'ladies war', 't-shirt', 'makup box', '1557060315.jpg', '1557060315.png', '2019-05-05 05:45:15'),
(18, 't-shirt', 'ladies war', 't-shirt', 't-shirt', '1557060795.jpg', '1557060795.png', '2019-05-05 05:53:15'),
(19, 'Mobile', '', '', 'mobile', '1557061227.png', '1557061227.jpg', '2019-05-05 06:00:27'),
(20, 'Mobile', 'lenovo', 'mobile', 'mobile', '1557061261.jpg', '1557061261.jpg', '2019-05-05 06:01:01'),
(21, 'Water Repellent Parka', 'ladies war', 'Headphone', 'water filter', '1557130114.jpg', '', '2019-05-06 01:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`id`, `category`) VALUES
(4, 'lenovo'),
(5, 'Hp'),
(6, 'Dell'),
(7, 'Asus'),
(8, 'ladies war');

-- --------------------------------------------------------

--
-- Table structure for table `product_subcategory`
--

CREATE TABLE `product_subcategory` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_subcategory`
--

INSERT INTO `product_subcategory` (`id`, `category`, `subcategory`) VALUES
(5, '', 'hp'),
(6, '6', 'mobile'),
(7, 'Dell', 'Headphone'),
(8, 'ladies war', 't-shirt');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `address` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `ptype` varchar(200) NOT NULL,
  `pstatus` varchar(200) NOT NULL,
  `resarve` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `details` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `lat`, `lon`, `address`, `city`, `ptype`, `pstatus`, `resarve`, `image`, `type`, `details`, `date`) VALUES
(10, 'Demo News', 0, 0, '', '', '', 'Portfolio', '', '1531378461.jpg', '', '<p>lorem&nbsp; ipsam</p>', '2018-07-12 00:00:00'),
(11, 'new One', 0, 0, '', '', '', 'Portfolio', '', '1531378846.jpg', '', '<p>nnnnnnnnnnnnnnnnnnn</p>', '2018-07-12 00:00:00'),
(12, 'New Two', 0, 0, '', '', '', 'Portfolio', '', '1531378864.jpg', '', '<p>bbbbbbbbbbbbbbbbb</p>', '2018-07-12 00:00:00'),
(13, 'new Three', 0, 0, '', '', '', 'Portfolio', '', '1531378879.jpg', '', '', '2018-07-12 00:00:00'),
(14, 'new four', 0, 0, '', '', '', 'Portfolio', '', '1531378945.jpg', '', '<p>ffdddddddddddddddd</p>', '2018-07-12 00:00:00'),
(21, 'team One', 0, 0, '', '', '', 'Team', '', '1531644843.jpg', '', '<p>bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</p>', '2018-07-15 00:00:00'),
(22, 'Team Two', 0, 0, '', '', '', 'Team', '', '1531644870.jpg', '', '<p>bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</p>', '2018-07-15 00:00:00'),
(23, 'Team Two', 0, 0, '', '', '', 'Team', '', '1531644878.jpg', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>', '2018-07-15 15:10:29'),
(24, 'Team Three', 0, 0, '', '', '', 'Team', '', '1531644916.jpg', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>', '2018-07-15 15:10:16'),
(25, 'Team Three', 0, 0, '', '', '', 'Team', '', '1531644924.jpg', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>', '2018-07-15 15:10:03'),
(26, 'Team four', 0, 0, '', '', '', 'Team', '', '1531644970.jpg', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>', '2018-07-15 15:09:31'),
(27, 'Team four', 0, 0, '', '', '', 'Team', '', '1531644977.jpg', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>', '2018-07-15 15:09:47'),
(30, 'Tanveer', 0, 0, '', '', '', 'Message', '', '1531646177.jpg', '', '<p style=\"text-align:justify\">At Trust Global Communications, we have earned a\r\nreputation for collaborating with people and respective companies to transform\r\nhow services are provided. We have been entrusted with delivering vital\r\nservices for the leading private and public sector organizations across the\r\nworld. The key to that success is earning the trust of our customers. We have a\r\nhistory of designing and deploying long-term solutions that generate meaningful\r\noutcomes.</p><p>\r\n\r\n</p><p style=\"text-align:justify\">We pull together the right people, processes and\r\nexpertise to take service from â€œgood enoughâ€ to great. We apply best-in-class\r\npractices, domain knowledge and expertise, proven technologies, and innovation\r\nto assist our clients in responding to new mandates and expanded missions.\r\nTrust Global Communications clients come to us with confidence that we have the\r\nexpertise to take service delivery to the next level of performance. We know\r\nhow to make services run smoother, smarter, and more efficiently.</p>', '2018-07-15 00:00:00'),
(31, 'Farid ahmed', 0, 0, '', '', '', 'Message', '', '1531646275.jpg', '', '<p style=\"text-align:justify\"><span style=\"font-size:14.0pt\">Greetings &amp; welcome\r\nto Trust Global Communications, a Speedy Rising Call Center in the heart of\r\nChattagram, The Port City of Bangladesh. Our strength is that we have the\r\npassion and will to perform great service for customers who entrust work to us\r\nand to meet their expectations. We also have staff members who shared our\r\npassion and resolve.<o:p></o:p></span></p><p style=\"text-align:justify\"><span style=\"font-size:14.0pt\">The number of\r\nstaff members sharing our passion and will increased, making it possible to\r\nestablish the outsourcing business, which dispatches and introduces employees\r\nand to undertake business operations, as a pillar of the company.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nline-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Our Company stands by\r\nits vision of creating a strong brand with high expected value and becoming No.\r\n1 in the business fields of â€œworking,â€ â€œinteresting,â€ â€œlearningâ€ and â€œliving.â€<o:p></o:p></span></p><p style=\"text-align:justify\"><span style=\"font-size:14.0pt\">If we can provide\r\nan opportunity for people to make positive changes through our services, it is\r\nsure to bring benefits to companies and all other forms of organizations, each\r\nof which is an aggregate of individual people.<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p style=\"text-align:justify\"><span style=\"font-size:14.0pt\">We will continue\r\nto take on new challenges so that we can bring positive change to as many\r\nindividuals and organizations as possible.<o:p></o:p></span></p>', '2018-07-15 00:00:00'),
(32, 'Sumon Chowdhury', 0, 0, '', '', '', 'Message', '', '1531646337.jpg', '', '<p class=\"MsoNormal\" style=\"text-align:justify\">For the past 4 years Trust Global\r\nCommunications has been providing our customers with quality products and\r\noutstanding service at a reasonable price. Our most valuable asset and greatest\r\nstrength are our people. The experience, creativity, attitude and most\r\nimportantly pride they bring to their craft is the absolute key to our success.\r\nWe are committed to building long term relationships with our customers by\r\nproviding the highest level of mechanical construction services in our region.\r\nWe strive to be the best.</p>', '2018-07-15 00:00:00'),
(33, 'Sumon Chowdhury', 0, 0, '', '', '', 'Message', '', '1531646345.jpg', '', '<p class=\"MsoNormal\" style=\"text-align:justify\">For the past 4 years Trust Global\r\nCommunications has been providing our customers with quality products and\r\noutstanding service at a reasonable price. Our most valuable asset and greatest\r\nstrength are our people. The experience, creativity, attitude and most\r\nimportantly pride they bring to their craft is the absolute key to our success.\r\nWe are committed to building long term relationships with our customers by\r\nproviding the highest level of mechanical construction services in our region.\r\nWe strive to be the best.</p>', '2018-07-15 00:00:00'),
(36, 'Priyotosh ', 0, 0, '', '', '', 'Message', '', '1531646610.jpg', '', '<p class=\"MsoNormal\"><span style=\"font-size:12.0pt;line-height:115%;font-family:\r\n&quot;Times New Roman&quot;,&quot;serif&quot;\">It is my immense pleasure to introduce Trust Global\r\nCommunications and feel proud to report continued success and advancement of\r\nthe company since its inception.<br>\r\nOur mission is to provide Call Center Services &amp; Contact Center Services,\r\nboth in terms of quality and commitment. Our achievements are shored up by\r\ninvaluable contributions of our business partners. Aiming to create new values\r\nin Call Center Industry, Trust Global Communications will continue to strive\r\ntowards provision to provide best services and goals to accelerate evolution\r\nand gain momentum in the coming years. Trust Global Communications continually\r\nstrives to be at the forefront of providing special care and exceptionally\r\ncordial relations with our business partners over the past many years and will\r\ncommit to do so in future as well.<br>\r\nI anticipate even greater success for Trust Global Communications in its next\r\ncoming years. We are expanding our work profile and our expertise in customer\r\ncare continues to our main objective.<br>\r\nI continue to be amazed and humbled by the generosity and support of my team and\r\nbusiness partners and with vision as a Managing Director look forward to the\r\nfuture with eager anticipation.<o:p></o:p></span></p>', '2018-07-15 00:00:00'),
(42, 'Scholarship in USA', 0, 0, '', '', '', 'custom_post', '', '1540890567.jpg', '', '<p>Hello, Itsa a testing<b> post</b><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>', '2018-10-30 00:00:00'),
(43, 'About Us', 0, 0, '', '', '', 'About Us', '', '1556884510.jpg', '', '<h6><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"\" comic=\"\" sans=\"\" ms\";\"=\"\" ms\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 255);\"=\"\">Sublim</span><span style=\"\" comic=\"\" sans=\"\" ms\";\"=\"\" ms\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 255);\"=\"\">But I must explain to you how all this mistaken idea of denouncing \r\npleasure and praising pain was born and I will give you a complete \r\naccount of the system, and expound the actual teachings of the great \r\nexplorer of the truth, the master-builder of human happiness. No one \r\nrejects, dislikes, or avoids pleasure itself, because it is pleasure, \r\nbut because those who do not know how to pursue pleasure rationally \r\nencounter consequences that are extremely painful. Nor again is there \r\nanyone who loves or pursues or desires to obtain pain of itself, because\r\n it is pain, but because occasionally circumstances occur in which toil \r\nand pain can procure him some great pleasure. To take a trivial example \r\nwhich of us ever e Consultancy</span><span style=\"\" comic=\"\" sans=\"\" ms\";\"=\"\">&nbsp; was founded in November 2016 for the students who step out and make&nbsp;</span>their higher education and careers in foreign lands, with the head office located in Chittagong, Bangladesh. <span style=\"\" comic=\"\" sans=\"\" ms\";\"=\"\">â€œSublime Consultancyâ€</span> provides professional consulting services to the students. It is one of the leading overseas educational consultancy companies in Bangladesh. The primary objective of our firm is to provide an authorized liaison between universities and students. We work with the Universities to recruit talented individuals across Bangladesh and guide the students in every step of the admission process. It was built on the belief that every single student we process should match the Universities expect. We are the most consistent education consultants in Bangladesh for universities across the globe. Our counselors are expert in advising about the admission and visa process. We deal with many leading universities across the globe. It acts as a one-stop destination for all the aspirants who wish to go abroad for higher education.</span></h6>', '2019-05-03 05:10:29'),
(44, 'SCHOLARSHIP', 0, 0, '', '', '', 'custom_post', '', '1540904918.', '', '<p><font color=\"#1d202c\" face=\"BuenosAires-Light\"><span style=\"font-size: 20px; letter-spacing: -1px;\"><span style=\"font-family: \" comic=\"\" sans=\"\" ms\";\"=\"\">Those&nbsp;</span></span></font><span style=\"color: rgb(29, 32, 44); font-family: BuenosAires-Light; font-size: 20px; letter-spacing: -1px;\">who want to complete higher education from abroad&nbsp;</span><span comic=\"\" sans=\"\" ms\";\"=\"\" style=\"font-size: 20px; letter-spacing: -1px; color: rgb(29, 32, 44); font-family: BuenosAires-Light;\">Offers and scholarships are a best way to decrease your&nbsp;</span><span comic=\"\" sans=\"\" ms\";\"=\"\" style=\"font-size: 20px; letter-spacing: -1px; color: rgb(29, 32, 44); font-family: BuenosAires-Light;\">educational</span><span comic=\"\" sans=\"\" ms\";\"=\"\" style=\"font-size: 20px; letter-spacing: -1px; color: rgb(29, 32, 44); font-family: BuenosAires-Light;\">&nbsp;cost&nbsp; . A general confusion among the students that there are no scholarship opportunities available for international students. Governments and universities around the universe offerings high performing students and have many scholarship programs schematic to entice the best and the brightest minds in their country. Our main </span><span comic=\"\" sans=\"\" ms\";\"=\"\" style=\"font-size: 20px; letter-spacing: -1px; color: rgb(29, 32, 44); font-family: BuenosAires-Light;\">intention</span><span comic=\"\" sans=\"\" ms\";\"=\"\" style=\"font-size: 20px; letter-spacing: -1px; color: rgb(29, 32, 44); font-family: BuenosAires-Light;\">&nbsp;to work with the students to find&nbsp;</span><span comic=\"\" sans=\"\" ms\";\"=\"\" style=\"font-size: 20px; letter-spacing: -1px; color: rgb(29, 32, 44); font-family: BuenosAires-Light;\">&nbsp;and apply for scholarships at universities abroad.</span></p>', '2018-11-01 20:02:27'),
(46, 'Study in USA', 0, 0, '', '', '', 'Service', '', '1542544553.jpg', '', '<p>Hello USA<br></p>', '2018-11-18 00:00:00'),
(47, 'Study in Canada', 0, 0, '', '', '', 'Service', '', '1542544891.jpg', '', '<p>Coming soon</p>', '2018-11-18 00:00:00'),
(48, 'Study in Australia ', 0, 0, '', '', '', 'Service', '', '1542544987.jpg', '', '<p>Coming soon</p>', '2018-11-18 00:00:00'),
(49, 'Study in UK', 0, 0, '', '', '', 'Service', '', '1542545104.jpg', '', '', '2018-11-18 00:00:00'),
(50, 'Study  in Germany ', 0, 0, '', '', '', 'Service', '', '1542546603.jpg', '', '<p>Coming soon</p>', '2018-11-18 00:00:00'),
(55, 'Study in Norway ', 0, 0, '', '', '', 'news', '', '1542548617.jpg', '', '<p>coming Soon</p>', '2018-11-18 00:00:00'),
(56, 'Study in Canada', 0, 0, '', '', '', 'news', '', '1542798332.jpg', '', '<p>coming soon</p>', '2018-11-21 00:00:00'),
(58, 'Study in UK', 0, 0, '', '', '', 'news', '', '1542799034.png', '', '<p>coming soon</p>', '2018-11-21 00:00:00'),
(59, 'Air Ticket', 0, 0, '', '', '', 'custom_post', '', '1549964451.png', '', '', '2019-02-12 00:00:00'),
(60, 'chairman', 0, 0, '', '', '', 'Team', '', '1556904519.png', '', '<p>Sed ut perspiciatis unde omnis  natus error sit voluptatem accusantium emque laudantium totam rem</p>', '2019-05-03 00:00:00'),
(61, 'chairman', 0, 0, '', '', '', 'Team', '', '1556904606.png', '', '<p>Sed ut perspiciatis unde omnis  natus error sit voluptatem accusantium emque laudantium totam rem</p>', '2019-05-03 00:00:00'),
(62, 'chairman', 0, 0, '', '', '', 'Team', '', '1556904635.png', '', '<p>Sed ut perspiciatis unde omnis  natus error sit voluptatem accusantium emque laudantium totam rem</p>', '2019-05-03 00:00:00'),
(63, 'chairman', 0, 0, '', '', '', 'Team', '', '1556904675.png', '', 'Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium emque laudantium totam rem', '2019-05-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `email`, `subject`, `phone`, `message`) VALUES
(1, 'usain', 'usaymarma567@gmail.com', 'web', '01831866185', 'I want a  website'),
(3, 'Rajibul hasan', 'a@b.com', 'seo', '01705258701', 'kdjfkjfkjdfgdge'),
(4, 'MD', 'a@b.com', 'website', '01727843493', 'dfdfdfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `email`, `date`) VALUES
(1, 'admin', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', '', '2018-01-04 20:49:51'),
(2, 'apps', '6d071901727aec1ba6d8e2497ef5b709', '', '2018-09-23 15:28:41'),
(3, 'ripon11', '101010', '', '2017-01-31 12:08:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `apply_online`
--
ALTER TABLE `apply_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image` (`image`);

--
-- Indexes for table `md_table`
--
ALTER TABLE `md_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_subcategory`
--
ALTER TABLE `product_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `apply_online`
--
ALTER TABLE `apply_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `md_table`
--
ALTER TABLE `md_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `modal`
--
ALTER TABLE `modal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product_subcategory`
--
ALTER TABLE `product_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
