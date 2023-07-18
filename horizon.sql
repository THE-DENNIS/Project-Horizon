-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 12:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horizon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `role`) VALUES
(1, 'admin@gmail.com', 'admin12345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `community_id` int(11) NOT NULL,
  `comm_name` varchar(100) NOT NULL,
  `comm_lang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `community_connection`
--

CREATE TABLE `community_connection` (
  `connection_id` int(11) NOT NULL,
  `connection_date` date NOT NULL,
  `relationship` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `code` char(2) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AX', 'Aland Islands'),
(3, 'AL', 'Albania'),
(4, 'DZ', 'Algeria'),
(5, 'AS', 'American Samoa'),
(6, 'AD', 'Andorra'),
(7, 'AO', 'Angola'),
(8, 'AI', 'Anguilla'),
(9, 'AQ', 'Antarctica'),
(10, 'AG', 'Antigua and Barbuda'),
(11, 'AR', 'Argentina'),
(12, 'AM', 'Armenia'),
(13, 'AW', 'Aruba'),
(14, 'AU', 'Australia'),
(15, 'AT', 'Austria'),
(16, 'AZ', 'Azerbaijan'),
(17, 'BS', 'Bahamas'),
(18, 'BH', 'Bahrain'),
(19, 'BD', 'Bangladesh'),
(20, 'BB', 'Barbados'),
(21, 'BY', 'Belarus'),
(22, 'BE', 'Belgium'),
(23, 'BZ', 'Belize'),
(24, 'BJ', 'Benin'),
(25, 'BM', 'Bermuda'),
(26, 'BT', 'Bhutan'),
(27, 'BO', 'Bolivia'),
(28, 'BQ', 'Bonaire, Sint Eustatius and Saba'),
(29, 'BA', 'Bosnia and Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Bouvet Island'),
(32, 'BR', 'Brazil'),
(33, 'IO', 'British Indian Ocean Territory'),
(34, 'BN', 'Brunei Darussalam'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CA', 'Canada'),
(41, 'CV', 'Cape Verde'),
(42, 'KY', 'Cayman Islands'),
(43, 'CF', 'Central African Republic'),
(44, 'TD', 'Chad'),
(45, 'CL', 'Chile'),
(46, 'CN', 'China'),
(47, 'CX', 'Christmas Island'),
(48, 'CC', 'Cocos (Keeling) Islands'),
(49, 'CO', 'Colombia'),
(50, 'KM', 'Comoros'),
(51, 'CG', 'Congo'),
(52, 'CD', 'Congo, Democratic Republic of the Congo'),
(53, 'CK', 'Cook Islands'),
(54, 'CR', 'Costa Rica'),
(55, 'CI', 'Cote D\'Ivoire'),
(56, 'HR', 'Croatia'),
(57, 'CU', 'Cuba'),
(58, 'CW', 'Curacao'),
(59, 'CY', 'Cyprus'),
(60, 'CZ', 'Czech Republic'),
(61, 'DK', 'Denmark'),
(62, 'DJ', 'Djibouti'),
(63, 'DM', 'Dominica'),
(64, 'DO', 'Dominican Republic'),
(65, 'EC', 'Ecuador'),
(66, 'EG', 'Egypt'),
(67, 'SV', 'El Salvador'),
(68, 'GQ', 'Equatorial Guinea'),
(69, 'ER', 'Eritrea'),
(70, 'EE', 'Estonia'),
(71, 'ET', 'Ethiopia'),
(72, 'FK', 'Falkland Islands (Malvinas)'),
(73, 'FO', 'Faroe Islands'),
(74, 'FJ', 'Fiji'),
(75, 'FI', 'Finland'),
(76, 'FR', 'France'),
(77, 'GF', 'French Guiana'),
(78, 'PF', 'French Polynesia'),
(79, 'TF', 'French Southern Territories'),
(80, 'GA', 'Gabon'),
(81, 'GM', 'Gambia'),
(82, 'GE', 'Georgia'),
(83, 'DE', 'Germany'),
(84, 'GH', 'Ghana'),
(85, 'GI', 'Gibraltar'),
(86, 'GR', 'Greece'),
(87, 'GL', 'Greenland'),
(88, 'GD', 'Grenada'),
(89, 'GP', 'Guadeloupe'),
(90, 'GU', 'Guam'),
(91, 'GT', 'Guatemala'),
(92, 'GG', 'Guernsey'),
(93, 'GN', 'Guinea'),
(94, 'GW', 'Guinea-Bissau'),
(95, 'GY', 'Guyana'),
(96, 'HT', 'Haiti'),
(97, 'HM', 'Heard Island and Mcdonald Islands'),
(98, 'VA', 'Holy See (Vatican City State)'),
(99, 'HN', 'Honduras'),
(100, 'HK', 'Hong Kong'),
(101, 'HU', 'Hungary'),
(102, 'IS', 'Iceland'),
(103, 'IN', 'India'),
(104, 'ID', 'Indonesia'),
(105, 'IR', 'Iran, Islamic Republic of'),
(106, 'IQ', 'Iraq'),
(107, 'IE', 'Ireland'),
(108, 'IM', 'Isle of Man'),
(109, 'IL', 'Israel'),
(110, 'IT', 'Italy'),
(111, 'JM', 'Jamaica'),
(112, 'JP', 'Japan'),
(113, 'JE', 'Jersey'),
(114, 'JO', 'Jordan'),
(115, 'KZ', 'Kazakhstan'),
(116, 'KE', 'Kenya'),
(117, 'KI', 'Kiribati'),
(118, 'KP', 'Korea, Democratic People\'s Republic of'),
(119, 'KR', 'Korea, Republic of'),
(120, 'XK', 'Kosovo'),
(121, 'KW', 'Kuwait'),
(122, 'KG', 'Kyrgyzstan'),
(123, 'LA', 'Lao People\'s Democratic Republic'),
(124, 'LV', 'Latvia'),
(125, 'LB', 'Lebanon'),
(126, 'LS', 'Lesotho'),
(127, 'LR', 'Liberia'),
(128, 'LY', 'Libyan Arab Jamahiriya'),
(129, 'LI', 'Liechtenstein'),
(130, 'LT', 'Lithuania'),
(131, 'LU', 'Luxembourg'),
(132, 'MO', 'Macao'),
(133, 'MK', 'Macedonia, the Former Yugoslav Republic of'),
(134, 'MG', 'Madagascar'),
(135, 'MW', 'Malawi'),
(136, 'MY', 'Malaysia'),
(137, 'MV', 'Maldives'),
(138, 'ML', 'Mali'),
(139, 'MT', 'Malta'),
(140, 'MH', 'Marshall Islands'),
(141, 'MQ', 'Martinique'),
(142, 'MR', 'Mauritania'),
(143, 'MU', 'Mauritius'),
(144, 'YT', 'Mayotte'),
(145, 'MX', 'Mexico'),
(146, 'FM', 'Micronesia, Federated States of'),
(147, 'MD', 'Moldova, Republic of'),
(148, 'MC', 'Monaco'),
(149, 'MN', 'Mongolia'),
(150, 'ME', 'Montenegro'),
(151, 'MS', 'Montserrat'),
(152, 'MA', 'Morocco'),
(153, 'MZ', 'Mozambique'),
(154, 'MM', 'Myanmar'),
(155, 'NA', 'Namibia'),
(156, 'NR', 'Nauru'),
(157, 'NP', 'Nepal'),
(158, 'NL', 'Netherlands'),
(159, 'AN', 'Netherlands Antilles'),
(160, 'NC', 'New Caledonia'),
(161, 'NZ', 'New Zealand'),
(162, 'NI', 'Nicaragua'),
(163, 'NE', 'Niger'),
(164, 'NG', 'Nigeria'),
(165, 'NU', 'Niue'),
(166, 'NF', 'Norfolk Island'),
(167, 'MP', 'Northern Mariana Islands'),
(168, 'NO', 'Norway'),
(169, 'OM', 'Oman'),
(170, 'PK', 'Pakistan'),
(171, 'PW', 'Palau'),
(172, 'PS', 'Palestinian Territory, Occupied'),
(173, 'PA', 'Panama'),
(174, 'PG', 'Papua New Guinea'),
(175, 'PY', 'Paraguay'),
(176, 'PE', 'Peru'),
(177, 'PH', 'Philippines'),
(178, 'PN', 'Pitcairn'),
(179, 'PL', 'Poland'),
(180, 'PT', 'Portugal'),
(181, 'PR', 'Puerto Rico'),
(182, 'QA', 'Qatar'),
(183, 'RE', 'Reunion'),
(184, 'RO', 'Romania'),
(185, 'RU', 'Russian Federation'),
(186, 'RW', 'Rwanda'),
(187, 'BL', 'Saint Barthelemy'),
(188, 'SH', 'Saint Helena'),
(189, 'KN', 'Saint Kitts and Nevis'),
(190, 'LC', 'Saint Lucia'),
(191, 'MF', 'Saint Martin'),
(192, 'PM', 'Saint Pierre and Miquelon'),
(193, 'VC', 'Saint Vincent and the Grenadines'),
(194, 'WS', 'Samoa'),
(195, 'SM', 'San Marino'),
(196, 'ST', 'Sao Tome and Principe'),
(197, 'SA', 'Saudi Arabia'),
(198, 'SN', 'Senegal'),
(199, 'RS', 'Serbia'),
(200, 'CS', 'Serbia and Montenegro'),
(201, 'SC', 'Seychelles'),
(202, 'SL', 'Sierra Leone'),
(203, 'SG', 'Singapore'),
(204, 'SX', 'Sint Maarten'),
(205, 'SK', 'Slovakia'),
(206, 'SI', 'Slovenia'),
(207, 'SB', 'Solomon Islands'),
(208, 'SO', 'Somalia'),
(209, 'ZA', 'South Africa'),
(210, 'GS', 'South Georgia and the South Sandwich Islands'),
(211, 'SS', 'South Sudan'),
(212, 'ES', 'Spain'),
(213, 'LK', 'Sri Lanka'),
(214, 'SD', 'Sudan'),
(215, 'SR', 'Suriname'),
(216, 'SJ', 'Svalbard and Jan Mayen'),
(217, 'SZ', 'Swaziland'),
(218, 'SE', 'Sweden'),
(219, 'CH', 'Switzerland'),
(220, 'SY', 'Syrian Arab Republic'),
(221, 'TW', 'Taiwan, Province of China'),
(222, 'TJ', 'Tajikistan'),
(223, 'TZ', 'Tanzania, United Republic of'),
(224, 'TH', 'Thailand'),
(225, 'TL', 'Timor-Leste'),
(226, 'TG', 'Togo'),
(227, 'TK', 'Tokelau'),
(228, 'TO', 'Tonga'),
(229, 'TT', 'Trinidad and Tobago'),
(230, 'TN', 'Tunisia'),
(231, 'TR', 'Turkey'),
(232, 'TM', 'Turkmenistan'),
(233, 'TC', 'Turks and Caicos Islands'),
(234, 'TV', 'Tuvalu'),
(235, 'UG', 'Uganda'),
(236, 'UA', 'Ukraine'),
(237, 'AE', 'United Arab Emirates'),
(238, 'GB', 'United Kingdom'),
(239, 'US', 'United States'),
(240, 'UM', 'United States Minor Outlying Islands'),
(241, 'UY', 'Uruguay'),
(242, 'UZ', 'Uzbekistan'),
(243, 'VU', 'Vanuatu'),
(244, 'VE', 'Venezuela'),
(245, 'VN', 'Viet Nam'),
(246, 'VG', 'Virgin Islands, British'),
(247, 'VI', 'Virgin Islands, U.s.'),
(248, 'WF', 'Wallis and Futuna'),
(249, 'EH', 'Western Sahara'),
(250, 'YE', 'Yemen'),
(251, 'ZM', 'Zambia'),
(252, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_description` varchar(100) NOT NULL,
  `job_skills_required` varchar(300) NOT NULL,
  `job_salary` double NOT NULL,
  `job_location` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `application_id` int(11) NOT NULL,
  `application_date` date NOT NULL,
  `application_letter` varchar(200) NOT NULL,
  `application_resume` varchar(200) NOT NULL,
  `application_status` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `language_id` int(11) NOT NULL,
  `language_name` varchar(100) NOT NULL,
  `language_code` char(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `sent_date` date NOT NULL DEFAULT current_timestamp(),
  `sent_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message`, `sender_id`, `receiver_id`, `sent_date`, `sent_time`) VALUES
(27, 'hello', 6, 0, '2023-06-26', '2023-06-26 20:06:14'),
(28, 'hi', 6, 0, '2023-06-26', '2023-06-26 20:07:46'),
(29, 'what\'s up', 6, 4, '2023-06-26', '2023-06-26 20:32:16'),
(30, 'hello', 0, 0, '2023-06-28', '2023-06-28 15:02:18'),
(31, 'how is your mum', 6, 4, '2023-06-28', '2023-06-28 15:05:41'),
(32, 'how far', 6, 4, '2023-06-28', '2023-06-28 15:06:14'),
(33, 'great', 6, 4, '2023-06-28', '2023-06-28 15:06:55'),
(34, 'what\'s up thomas', 6, 8, '2023-06-28', '2023-06-28 15:17:52'),
(35, 'i\'m fine saka', 8, 6, '2023-06-28', '2023-06-28 15:19:23'),
(36, 'how far my guy', 8, 6, '2023-06-28', '2023-06-28 15:38:30'),
(37, 'let\'s go\r\n', 8, 6, '2023-06-28', '2023-06-28 15:41:18'),
(38, 'hi', 6, 8, '2023-06-28', '2023-06-28 15:42:52'),
(39, 'Good to hear from you\r\n', 8, 6, '2023-06-28', '2023-06-28 16:12:34'),
(40, '\r\nHello\r\n', 8, 6, '2023-06-28', '2023-06-28 16:13:15'),
(41, 'I am hungry\r\n', 8, 6, '2023-06-28', '2023-06-28 16:13:42'),
(42, 'I am glad we are chatting', 6, 8, '2023-06-28', '2023-06-28 16:24:20'),
(43, 'hi', 6, 8, '2023-06-28', '2023-06-28 16:39:45'),
(44, 'how are you doing', 6, 8, '2023-06-29', '2023-06-29 12:03:34'),
(45, 'hi', 6, 8, '2023-06-29', '2023-06-29 13:52:06'),
(46, 'my guy i go like go your ends go see your people for town', 6, 8, '2023-06-29', '2023-06-29 13:53:28'),
(47, 'hi', 6, 8, '2023-06-29', '2023-06-29 13:53:43'),
(48, 'hi', 6, 8, '2023-06-29', '2023-06-29 13:53:48'),
(49, 'hi', 6, 8, '2023-06-29', '2023-06-29 13:53:56'),
(50, 'hi', 6, 8, '2023-06-29', '2023-06-29 13:55:19'),
(51, 'hi', 6, 8, '2023-06-29', '2023-06-29 13:55:24'),
(52, 'hi', 6, 8, '2023-06-29', '2023-06-29 13:55:30'),
(53, 'i\'m okay saka', 8, 6, '2023-06-29', '2023-06-29 14:29:50'),
(54, 'hi', 8, 6, '2023-06-29', '2023-06-29 14:43:27'),
(55, 'hi', 8, 6, '2023-06-29', '2023-06-29 14:54:26'),
(56, 'hi\r\n', 0, 6, '2023-06-29', '2023-06-29 15:30:04'),
(57, 'what\'s up', 8, 9, '2023-06-29', '2023-06-29 16:06:19'),
(58, 'i\'m good man', 9, 8, '2023-06-29', '2023-06-29 16:09:15'),
(59, 'how far', 7, 5, '2023-06-30', '2023-06-30 12:46:50'),
(60, 'i dey my guy', 5, 7, '2023-06-30', '2023-06-30 12:48:47'),
(61, 'hiii my name is lizzy, how are you have you seen your period', 13, 12, '2023-07-01', '2023-07-01 16:12:07'),
(62, 'my guy', 6, 11, '2023-07-04', '2023-07-04 13:34:42'),
(63, 'what\'s up', 11, 6, '2023-07-04', '2023-07-04 16:46:38'),
(64, 'Are you at home', 11, 6, '2023-07-04', '2023-07-04 16:47:06'),
(65, 'i\'m coming over', 11, 6, '2023-07-04', '2023-07-04 16:56:37'),
(66, 'i\'m at your gate', 11, 6, '2023-07-04', '2023-07-04 16:57:46'),
(67, 'i\'m tall', 11, 6, '2023-07-04', '2023-07-04 17:00:46'),
(68, 'come', 11, 6, '2023-07-04', '2023-07-04 17:03:30'),
(69, 'come', 11, 6, '2023-07-04', '2023-07-04 17:03:56'),
(70, 'hi', 11, 6, '2023-07-04', '2023-07-04 17:04:32'),
(71, 'how are you', 11, 6, '2023-07-04', '2023-07-04 17:13:34'),
(72, 'how are you', 11, 6, '2023-07-04', '2023-07-04 17:14:58'),
(73, 'how are you', 11, 6, '2023-07-04', '2023-07-04 17:15:09'),
(74, 'how are you', 11, 6, '2023-07-04', '2023-07-04 17:15:55'),
(75, 'how are you', 11, 6, '2023-07-04', '2023-07-04 17:28:28'),
(76, 'yo', 6, 11, '2023-07-04', '2023-07-04 19:54:06'),
(77, 'yo', 6, 11, '2023-07-04', '2023-07-04 20:27:31'),
(78, 'yo', 6, 11, '2023-07-04', '2023-07-04 20:27:42'),
(79, 'yo', 6, 11, '2023-07-04', '2023-07-04 20:28:00'),
(80, 'what\'s up saka', 11, 6, '2023-07-04', '2023-07-04 20:31:02'),
(81, 'Hi', 7, 10, '2023-07-05', '2023-07-05 13:36:06'),
(82, 'hi', 7, 10, '2023-07-05', '2023-07-05 13:36:39'),
(83, 'hi saka', 14, 6, '2023-07-05', '2023-07-05 15:47:14'),
(84, 'you need to be careful with your messages', 14, 6, '2023-07-05', '2023-07-05 15:47:34'),
(85, 'hi', 6, 5, '2023-07-13', '2023-07-14 04:49:04'),
(86, 'cody what\'s up', 5, 15, '2023-07-14', '2023-07-14 19:13:06'),
(87, 'big man', 15, 5, '2023-07-14', '2023-07-14 19:18:04'),
(88, 'hi', 15, 5, '2023-07-14', '2023-07-14 19:47:34'),
(89, 'chief', 15, 7, '2023-07-14', '2023-07-14 19:58:51'),
(90, 'hi', 15, 11, '2023-07-14', '2023-07-14 20:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_gender` enum('male','female') NOT NULL,
  `user_country_id` int(11) DEFAULT NULL,
  `user_current_location` varchar(25) NOT NULL,
  `user_country_name` varchar(300) NOT NULL,
  `user_bio` varchar(500) NOT NULL,
  `user_primary_lang` varchar(100) NOT NULL,
  `user_skills` varchar(300) NOT NULL,
  `user_dp` varchar(300) NOT NULL,
  `role` varchar(11) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fullname`, `user_email`, `user_password`, `user_gender`, `user_country_id`, `user_current_location`, `user_country_name`, `user_bio`, `user_primary_lang`, `user_skills`, `user_dp`, `role`) VALUES
(4, 'Torres ferran', 'ferran@gmail.com', '$2y$10$iqvX/cZ0lxQPcJRn7hY0VukEHSdxmtIW6mQWGJW8JWCqafrQgy77G', 'male', NULL, 'Spain', 'Brazil', 'i play for barcelona', 'spanish', 'ballling', '', 'user'),
(5, 'leo messi', 'leo@gmail.com', '$2y$10$TnDMdu.o/B93dNHEUfL0VuKIbvATiTybAWxRa.F1qpT.qxui678Cm', 'male', NULL, 'Argentina', 'Turkey', 'I love barcelona , now play for inter miami', 'spanish', 'sports', 'images/horizon1689360720.jpg', 'user'),
(6, 'Bukayo Saka', 'saka@gmail.com', '$2y$10$s14Z6pYkv5At6Jj2st2ENOZfHwhIvxljj1VzvJ65feM12C5M6jJS.', 'male', NULL, 'Nigeria', 'united kingdom', 'Arsenal\'s player of the year', 'english', 'finesse', 'images/horizon1688751997.jpg', 'user'),
(7, 'Martin odegaard', 'martin@gmail.com', '$2y$10$u26l1y.z7L1Bk8yMykXwXOHKOaUwMUbNtrXuCxN/UzHIocI11JhV.', 'male', NULL, 'Denmark', 'England', '', 'danish', 'sluggishness', '', 'user'),
(8, 'Thomas Partey', 'thomas@gmail.com', '$2y$10$QSAzIWq8y/ZNvtb.FXGumeBMnNW0bxTkXgCmv1X4OT.J5hmpIK/RK', 'male', NULL, 'Ghana', 'united kingdom', '', 'english', 'defending', '', 'user'),
(9, 'Rams Dale', 'rams@gmail.com', '$2y$10$xo0lzr3xowNVhn/BxMV.VubaNpqF6oQ0Y/Qhq1oSAEJjtDQyeQuwG', 'male', NULL, 'United Kingdom', 'united kingdom', '', 'english', 'keeping', '', 'user'),
(10, 'victor oshimen', 'victor@gmail.com', '$2y$10$5CM.ZmD6zHeTO1Cwecn48OzuQYLOaZp6IjOiOxYZDk1idQPRLyfGK', 'male', NULL, 'Nigeria', 'united kingdom', 'Naples king , won the first trophy since Maradona', 'english', 'striking', 'images/horizon1688841675.jpg', 'user'),
(11, 'ben white', 'ben@gmail.com', '$2y$10$q.v4uohH/wSU172ok5AkOelg.BkG.kGffVhZtbYeQvlU6TcwpW3d2', 'male', NULL, 'United Kingdom', 'Brazil', '', 'english', 'defence', '', 'user'),
(13, 'Elizabeth Lingo', 'eliza@yahoo.com', '$2y$10$jYOgKyA/BYeMEqVmxIGDzugIvDSjArSTtULXMrPjLKvlrgMyzz.d.', 'female', NULL, 'Singapore', 'nigeria', '', 'spanish', 'Time manager', '', 'user'),
(14, 'Horizon Admin', 'admin@gmail.com', '$2y$10$B4UT72I0lGes9AzG1UwIwOyZGxQVc23qJNJjpNaQFQUMxiKiDUy52', 'male', NULL, 'Nigeria', 'united kingdom', '', 'english', 'securing ', '', 'admin'),
(15, 'Cody Gakpo', 'cody@gmail.com', '$2y$10$2Mc86nbNvu7weiXj2fl8VuquBw1d6Egj.Vyj9x0wBlXVDRlU6ZH1i', 'male', NULL, 'United Kingdom', 'Netherlands', 'Now in Liverpool , prevailed in the World cup too', 'Dutch', 'Passing', 'images/horizon1689366325.jpg', 'user'),
(17, 'Declan rice', 'declan@gmail.com', '$2y$10$bKArHlAKGeJHwJ/LHBZTjOaXntdvwdIVmTnK8bgZmmYvA5OmSr82.', 'male', NULL, 'United Kingdom', 'Ireland', '', 'english', 'competing', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`community_id`);

--
-- Indexes for table `community_connection`
--
ALTER TABLE `community_connection`
  ADD PRIMARY KEY (`connection_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `user_id` (`user_id`,`job_id`),
  ADD KEY `application_job_id_idx` (`job_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `community_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `community_connection`
--
ALTER TABLE `community_connection`
  MODIFY `connection_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `community_connection`
--
ALTER TABLE `community_connection`
  ADD CONSTRAINT `connection_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `job_application`
--
ALTER TABLE `job_application`
  ADD CONSTRAINT `application_job_id` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `application_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_country_id` FOREIGN KEY (`user_country_id`) REFERENCES `countries` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
