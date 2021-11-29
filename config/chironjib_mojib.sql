-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 01:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chironjib_mojib`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cinema_hall`
--

CREATE TABLE `admin_cinema_hall` (
  `id` int(10) NOT NULL,
  `Hall_ID` varchar(255) NOT NULL,
  `Hall_Name` varchar(255) NOT NULL,
  `Hall_Country` varchar(255) NOT NULL,
  `Hall_state` varchar(255) NOT NULL,
  `Hall_City` varchar(255) NOT NULL,
  `Hall_Address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_cinema_hall`
--

INSERT INTO `admin_cinema_hall` (`id`, `Hall_ID`, `Hall_Name`, `Hall_Country`, `Hall_state`, `Hall_City`, `Hall_Address`) VALUES
(3, 'CH-6578961a314081c72d', 'Shyamoli Cinema', 'Bangladesh', 'Dhaka', 'Dhaka', 'Mirpur, Dhaka- 1207, Bangladesh'),
(4, 'CH-55479', 'Modhumita', 'Bangladesh', 'Dhaka', 'Dhaka', 'Motijheel, Dhaka- 1000, Bangladesh'),
(5, 'CH-89331', 'Purabi Cinema Hall', 'Bangladesh', 'Dhaka', 'Dhaka', 'Mirpur, Dhaka- 1216, Bangladesh'),
(6, 'CH-74542', 'Balaka Cine World', 'Bangladesh', 'Dhaka', 'Dhaka', 'Mirpur Road, Dhaka- 1205, Bangladesh'),
(7, 'CH-64763', 'Balaka Cinema Hall', 'Bangladesh', 'Dhaka', 'Dhaka', 'New Market, Dhaka- 1205, Bangladesh'),
(8, 'CH-86671', 'Blockbuster Cinemas', 'Bangladesh', 'Dhaka', 'Dhaka', 'Gulshan, Dhaka, Bangladesh'),
(9, 'CH-12445', 'Upahar Cinema Lt.d (Rajshahi)', 'Bangladesh', 'Dhaka', 'Dhaka', 'Paltan, Dhaka- 1000, Bangladesh'),
(10, 'CH-53362', 'Sathi Cinema (Araihazar)', 'Bangladesh', 'Dhaka', 'Dhaka', 'Wari, Dhaka- 1203, Bangladesh'),
(11, 'CH-74292', 'ADAB-Barishal', 'Bangladesh', 'Barisal', 'Barisal', 'Alekenda Sarak, Barisal- 8200, Bangladesh'),
(12, 'CH-67040', 'Police Super, Rangpur', 'Bangladesh', 'Rangpur Division', 'Rangpur', 'Rangpur, Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `admin_show_time`
--

CREATE TABLE `admin_show_time` (
  `Time_ID` int(10) NOT NULL,
  `Hall_ID` varchar(255) NOT NULL,
  `Show_Time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_show_time`
--

INSERT INTO `admin_show_time` (`Time_ID`, `Hall_ID`, `Show_Time`) VALUES
(9, 'CH-74542', '00:00:00.000000'),
(10, 'CH-6578961a314081c72d', '05:28:00.000000'),
(11, 'CH-6578961a314081c72d', '09:17:00.000000'),
(12, 'CH-6578961a314081c72d', '23:19:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `admin_ticketcategory`
--

CREATE TABLE `admin_ticketcategory` (
  `id` int(10) NOT NULL,
  `Cat_ID` varchar(255) NOT NULL,
  `Hall_ID` varchar(255) NOT NULL,
  `Cat_SitType` varchar(10) NOT NULL,
  `Cat_Price` float NOT NULL,
  `Cat_capacity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_ticketcategory`
--

INSERT INTO `admin_ticketcategory` (`id`, `Cat_ID`, `Hall_ID`, `Cat_SitType`, `Cat_Price`, `Cat_capacity`) VALUES
(1, 'CAT-89587', 'CH-6578961a314081c72d', 'Regular ', 50, 100),
(2, 'CAT-89795', 'CH-6578961a314081c72d', 'Premium', 100, 25),
(3, 'CAT-99680', 'CH-64763', 'Regular ', 25, 50),
(4, 'CAT-43404', 'CH-74542', 'Premium', 50, 30);

-- --------------------------------------------------------

--
-- Table structure for table `admin_ticket_order`
--

CREATE TABLE `admin_ticket_order` (
  `id` int(10) NOT NULL,
  `Ticket_ID` varchar(255) NOT NULL,
  `Ticket_Hall_ID` varchar(255) NOT NULL,
  `Ticket_User_ID` varchar(255) NOT NULL,
  `Ticket_User_Name` varchar(255) NOT NULL,
  `Ticket_Hall_Name` varchar(500) NOT NULL,
  `Ticket_Show_Time` time(6) NOT NULL,
  `Ticket_date` date NOT NULL,
  `Ticket_Sit_Type` varchar(255) NOT NULL,
  `Ticket_Price` float NOT NULL,
  `Ticket_Qty` int(2) NOT NULL,
  `Ticket_Total_Price` float NOT NULL,
  `Ticket_Status` int(2) NOT NULL,
  `Ticket_Buy_Date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `b_id` int(10) NOT NULL,
  `b_title` varchar(255) NOT NULL,
  `b_description` longtext NOT NULL,
  `b_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`b_id`, `b_title`, `b_description`, `b_image`) VALUES
(1, '‘চিরঞ্জীব মুজিব’ চলচ্চিত্রের টিজার উদ্বোধন', '<p>জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমানের ‘অসমাপ্ত আত্মজীবনী’ অবলম্বনে নির্মিত, প্রধানমন্ত্রী শেখ হাসিনা এবং তার ছোটবোন শেখ রেহানা নিবেদিত পূর্ণদৈর্ঘ্য চলচ্চিত্র ‘চিরঞ্জীব মুজিব’ এর টিজার উদ্বোধন করেছেন তথ্য ও সম্প্রচারমন্ত্রী ড. হাছান মাহমুদ।</p>', 'blog1.JPG'),
(2, 'ছাড়পত্র পেলো ‘চিরঞ্জীব মুজিব’', '<p>ছাড়পত্র পেয়েছে পূর্ণদৈর্ঘ্য চলচ্চিত্র ‘চিরঞ্জীব মুজিব’। শুক্রবার (৩ সেপ্টেম্বর) চলচ্চিত্রটির একটি প্রদর্শনী দেখে কোনো ধরনের কাট-ছাঁট ছাড়াই ছাড়পত্র দেন বাংলাদেশ চলচ্চিত্র সেন্সর বোর্ডের সদস্যরা। জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমানের</p>', 'blog2.JPG'),
(3, 'চিরঞ্জীব মুজিব’ চলচ্চিত্রের পোস্টার উদ্বোধন করলেন প্রধানমন্ত্রী', '<p>ঙ্গবন্ধু শেখ মুজিবুর রহমানের ‘অসমাপ্ত আত্মজীবনী’ গ্রন্থ অবলম্বনে নির্মিত ‘চিরঞ্জীব মুজিব’ চলচ্চিত্রের পোস্টার উদ্বোধন করেছেন প্রধানমন্ত্রী শেখ হাসিনা। বৃহস্পতিবার (২৪ জুন)</p>', 'blog3.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`c_id`, `c_name`, `c_image`) VALUES
(1, 'আহমেদ রুবেল', 'Blog-standard-img-1.jpg'),
(2, 'পূর্ণিমা', 'Blog-standard-img-15.jpg'),
(3, 'আজাদ আবুল কালাম', 'Blog-standard-img-16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(10) NOT NULL,
  `g_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `g_image`) VALUES
(1, 'main-port-1.jpg'),
(2, 'main-port-2.jpg'),
(3, 'main-port-3.jpg'),
(4, 'main-port-4.jpg'),
(5, 'main-port-6.jpg'),
(6, 'main-port-23.jpg'),
(7, 'main-port-24.jpg'),
(8, 'main-port-25.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie_dialogue`
--

CREATE TABLE `movie_dialogue` (
  `md_id` int(10) NOT NULL,
  `md_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_dialogue`
--

INSERT INTO `movie_dialogue` (`md_id`, `md_image`) VALUES
(1, '01.jpg'),
(2, '02.jpg'),
(3, '03.jpg'),
(4, '04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie_scene`
--

CREATE TABLE `movie_scene` (
  `m_id` int(10) NOT NULL,
  `m_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_scene`
--

INSERT INTO `movie_scene` (`m_id`, `m_image`) VALUES
(1, 'Timeline-img-3.jpg'),
(2, 'Timeline-img-4.jpg'),
(3, 'Timeline-img-5.jpg'),
(4, 'Timeline-img-6.jpg'),
(5, 'Timeline-img-7.jpg'),
(6, 'Timeline-img-9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(10) NOT NULL,
  `slide_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_image`) VALUES
(1, 'text1.gif'),
(2, 'text2.gif'),
(3, 'text3.gif'),
(4, 'text4.gif'),
(5, 'text7.gif'),
(6, 'text6.gif'),
(7, 'text5.gif'),
(8, 'text8.gif');

-- --------------------------------------------------------

--
-- Table structure for table `team_leader`
--

CREATE TABLE `team_leader` (
  `leader_id` int(10) NOT NULL,
  `leader_name` varchar(255) NOT NULL,
  `leader_desgnation` varchar(255) NOT NULL,
  `leader_des` varchar(255) NOT NULL,
  `leader_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_leader`
--

INSERT INTO `team_leader` (`leader_id`, `leader_name`, `leader_desgnation`, `leader_des`, `leader_image`) VALUES
(1, 'নজরুল ইসলাম', 'নজরুল ইসলাম', '', 'Director-01.jpg'),
(2, 'জুয়েল মাহমুদ', 'চিত্রনাট্য ও সৃজনশীল পরিচালক', '', 'Director-02.jpg'),
(3, 'লিটন হায়দার', 'প্রযোজক', '', 'Producer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teaser`
--

CREATE TABLE `teaser` (
  `id` int(10) NOT NULL,
  `Teaser_video` varchar(255) NOT NULL,
  `Teaser_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teaser`
--

INSERT INTO `teaser` (`id`, `Teaser_video`, `Teaser_image`) VALUES
(1, 'A-qJspWT_mM', '06.jpg'),
(2, '2jQEvp7h7V8', '09.jpg'),
(3, 'iZ6BJ1wObzo', '08.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trailer`
--

CREATE TABLE `trailer` (
  `id` int(10) NOT NULL,
  `Trailer_title` varchar(255) NOT NULL,
  `Trailer_text` longtext NOT NULL,
  `Trailer_video` varchar(255) NOT NULL,
  `Trailer_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trailer`
--

INSERT INTO `trailer` (`id`, `Trailer_title`, `Trailer_text`, `Trailer_video`, `Trailer_image`) VALUES
(1, 'সিনোপসিস', 'জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এর “অসমাপ্ত আত্মজীবনী” অবলম্বনে ১৯৪৯ থেকে ১৯৫২ পর্যন্ত গণ মানুষের নেতা শেখ মুজিব হয়ে ওঠার প্রেক্ষাপট এবং মহান ভাষা আন্দোলনে তার ভূমিকা নিয়ে নির্মিত চলচ্চিত্র “চিরঞ্জীব মুজিব” শেখ হাসিনা ও শেখ রেহানা নিবেদিত শেখ মুজিবুর রহমানের অসমাপ্ত আত্মজীবনী অবলম্বনে পূর্ণদৈর্ঘ্য চলচ্চিত্র', '2jQEvp7h7V8', '05.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cinema_hall`
--
ALTER TABLE `admin_cinema_hall`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hallid` (`Hall_ID`);

--
-- Indexes for table `admin_show_time`
--
ALTER TABLE `admin_show_time`
  ADD PRIMARY KEY (`Time_ID`);

--
-- Indexes for table `admin_ticketcategory`
--
ALTER TABLE `admin_ticketcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Hall_ID` (`Hall_ID`);

--
-- Indexes for table `admin_ticket_order`
--
ALTER TABLE `admin_ticket_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Ticket_ID` (`Ticket_ID`,`Ticket_User_ID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `movie_dialogue`
--
ALTER TABLE `movie_dialogue`
  ADD PRIMARY KEY (`md_id`);

--
-- Indexes for table `movie_scene`
--
ALTER TABLE `movie_scene`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `team_leader`
--
ALTER TABLE `team_leader`
  ADD PRIMARY KEY (`leader_id`);

--
-- Indexes for table `teaser`
--
ALTER TABLE `teaser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trailer`
--
ALTER TABLE `trailer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cinema_hall`
--
ALTER TABLE `admin_cinema_hall`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin_show_time`
--
ALTER TABLE `admin_show_time`
  MODIFY `Time_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin_ticketcategory`
--
ALTER TABLE `admin_ticketcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_ticket_order`
--
ALTER TABLE `admin_ticket_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `movie_dialogue`
--
ALTER TABLE `movie_dialogue`
  MODIFY `md_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movie_scene`
--
ALTER TABLE `movie_scene`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `team_leader`
--
ALTER TABLE `team_leader`
  MODIFY `leader_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teaser`
--
ALTER TABLE `teaser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trailer`
--
ALTER TABLE `trailer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
