-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2015 at 11:22 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jago`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `description` text NOT NULL,
  `mdate` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `mobile`, `description`, `mdate`, `status`) VALUES
(1, 'Md. Shagor Sarder', 'cadetshagor@yahoo.com', '01914564744', 'Happy Birthday to Ony', '0000-00-00 00:00:00', 0),
(2, 'Md. Shagor Sarder', 'rashedul@webpers.com', '01914564744', 'dfsdfsdfsdfsd', '2015-08-09 11:11:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
`id` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `slot_time` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `rj_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `dname`, `slot_time`, `pname`, `rj_name`, `status`) VALUES
(1, 'Sunday', '07:00am - 11:00am', 'Studio 7/11', 'RJ TAHMINA', 0),
(2, 'Sunday', '11:00am - 12:00pm', 'Back to Back', '  ', 0),
(3, 'Sunday', '12:00pm - 04:00pm', 'à¦—à§‹à¦²à¦• à¦§à¦¾à¦à¦§à¦¾', 'RJ APURBO', 0),
(4, 'Sunday', '04:00pm - 08:00pm', 'Most Wanted', 'RJ TANISHA', 0),
(5, 'Sunday', '08:00pm - 11:00pm', 'Memories Not Out', 'RJ  RANJAN & RJ  AYMAN', 0),
(6, 'Sunday', '11:00pm - 02:00am', 'ToTo Company', 'RJ NAFIS', 0),
(7, 'Sunday', '02:00am - 07:00am', 'Random night', '  ', 0),
(8, 'Monday', '07:00am - 11:00am', 'Studio 7/11', 'RJ TAHMINA ', 0),
(9, 'Monday', '11:00am - 12:00pm', 'Back to Back', '  ', 0),
(10, 'Monday', '12:00pm - 04:00pm', 'à¦—à§‹à¦²à¦• à¦§à¦¾à¦à¦§à¦¾', 'RJ APURBO', 0),
(11, 'Monday', '04:00pm - 08:00pm', 'Most Wanted', 'RJ TANISHA', 0),
(12, 'Monday', '08:00pm - 11:00pm', 'Memories Not Out', 'RJ  RANJAN & RJ  AYMAN', 0),
(13, 'Monday', '11:00pm - 02:00am', 'ToTo Company', 'RJ NAFIS', 0),
(14, 'Monday', '02:00am - 07:00am', 'Random night', '  ', 0),
(15, 'Monday', '02:00am - 07:00am', 'Random night', 'ddddddd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rj_info`
--

CREATE TABLE IF NOT EXISTS `rj_info` (
`id` int(11) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `about_me` text NOT NULL,
  `shows` text NOT NULL,
  `favourites` text NOT NULL,
  `hate_things` text NOT NULL,
  `philosophy` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rj_info`
--

INSERT INTO `rj_info` (`id`, `short_name`, `full_name`, `about_me`, `shows`, `favourites`, `hate_things`, `philosophy`, `image`, `status`) VALUES
(1, 'RJ APURBO', 'H. M. JUBAYER APURBO', 'I love crowd, I love to chat with my friends a lot. I love to eat ice cream in the rain. I also love to see the city at midnight. ', 'HOK KAULOROB ', 'places : Chittagong and Coxâ€™s Bazar\r\nSongs : Summer of 69, Joto dure-warfaze, Jevabei tumi sokal dekho-shuvomita.\r\nHobby : collecting music albums.\r\nGames : Cricket and Badminton.\r\nArtists : Ayub Bacchu, Bappa Mazumder, Fahmida Nabi, Shuvomita.\r\nInterests : Music, Writing stories.\r\nIdol : Humayun Ahmed.\r\nFoods : All type of bangladeshi food, Ice cream, fried chicken.', 'Anything fake. ', 'Life is pretty little,so enjoy every bit of it without questioning. ', 'rj_apurbo.png', 0),
(2, 'RJ AYMAN', 'JAKIA AYMAN', 'I am a jolly minded girl and I like hanging out with friends. But on the other hand I know how to enjoy solitude. ', 'BIG BOSS, CHOCOLATE NIGHT ', 'places : Anywhere, where I can chill with my friends.\r\nSongs : Amar praner pore, Ei ki beshi na, Apki najrone samjha, Allah ke bande, Careless whisper, Broken angle, Jodi vabo.\r\nHobby : Reading and listening.\r\nGames : Cricket.\r\nArtists : K.K, Bappa Mazumder, Arnob, Manna De, Rezwana chowdhury.\r\nInterests : New places and people.\r\nIdol : Rabindranath Tagore.\r\nFoods : Chotpati, Shawarma, Chocolates, Ice cream.', 'Crowd, fake people. ', 'Lets ride alone(Ekla cholo re).', 'rj_ayman.png', 0),
(3, 'RJ FAREEN', 'ORISHA FAREEN', 'I am a friendly girl. I am pretty emotional too. But reality always gets priority to me. I love my family, but sometimes I like spending time alone. ', 'NON STOP, MOST WANTED', 'places : Sonargaon, Hatirjheel and many more yet to visit.\r\nSongs : Ektara, sokhi bhavona kahare bole, balam pichkari, Allah ke bande. Darmiyan, a thousand years.\r\nHobby : collecting stamps and coins.\r\nGames : Cricket and Ludo.\r\nArtists : Bappa Majumder, Habib, Balam, Tahsan, Manna de.\r\nInterests : Writing, bike riding, meeting new people.\r\nIdol : My mother, Rabindranath Tagore, Humayun Ahmed.\r\nFoods : Chotpati, Fooska, Chocolates, Pickles etc.', 'Ignorance, fake people. ', 'Life is hard to handle, but for me, some happy little things or moments can make it easier. ', 'rj_fareen.png', 0),
(4, 'RJ NAFIS', 'SYED NAFIS', 'I love crowd,I love to chat with my friends a lot.I love to eat ice cream in the rain.I also love to see the city at midnight. ', 'HOK KAULOROB', 'places : Chittagong and Coxâ€™s Bazar\r\nSongs : Summer of 69, Joto dure-warfaze, Jevabei tumi sokal dekho-shuvomita.\r\nHobby : collecting music albums.\r\nGames : Cricket and Badminton.\r\nArtists : Ayub Bacchu, Bappa Mazumder, Fahmida Nabi, Shuvomita.\r\nInterests : Music,Writing stories.\r\nIdol : Humayun Ahmed.\r\nFoods : All type of bangladeshi food, Ice cream, fried chicken.', 'Anything fake.', 'Life is pretty little,so enjoy every bit of it without questioning. ', 'rj_nafis.png', 0),
(5, 'RJ NIPU ', 'UMME HASINA JAHAN NIPU ', 'I am a very simple, fun loving girl. I like to spend my time with my family and friends. Without my family I am meaningless.', 'AALOR JATRA ', 'places : Coxâ€™s bazar, Any place with my favourite people.\r\nSongs : Ami sunechi sedin tumi & any song my ears love to hear.\r\nHobby : Photopraphy, Cooking.\r\nGames : Lodu, Kutkut.\r\nArtists : Bipasha Hayat, Meher Nigar Shawon, Salman Shah, Hrittik Rowshan, Rani Mukharji, Dipika Padukone.\r\n\r\nInterests : I Love to sleep.\r\nIdol : My mom. Also I think anyone can learn anything from anyone. I want learn from people and make myself better.\r\nFoods : Traditional bangla food(Vaat-mach) and spicy foods.', 'Showing off. ', 'I always try to be honest with myself. I want to touch the stars. Want to enjoy every moment of my life. Living life with happiness and friends & family is my philosophy of life. I also think people should do something to live even after death. ', 'rj_nipu.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE IF NOT EXISTS `slots` (
  `day` varchar(255) NOT NULL,
  `slot_nums` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`day`, `slot_nums`) VALUES
('fri', 8),
('mon', 7),
('sat', 7),
('sun', 7),
('thurs', 7),
('tue', 7),
('wed', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rj_info`
--
ALTER TABLE `rj_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
 ADD PRIMARY KEY (`day`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `rj_info`
--
ALTER TABLE `rj_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
