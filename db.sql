-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 07:34 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(3) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Age` int(2) NOT NULL,
  `Adress` varchar(100) NOT NULL,
  `Role` int(1) NOT NULL,
  `ImgLoc` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `Name`, `Pass`, `Email`, `Age`, `Adress`, `Role`, `ImgLoc`) VALUES
(10, 'Paul', 'pass', 'updated@updated.com', 2, 'was this updated\r\n?', 1, 'ac'),
(9, 'Phillipak', 'password', 'bye@gmail.com', 32, 'Brooklyn chilling xD', 0, 'pics/maxresdefault.jpg'),
(12, 'Jacob', 'pass', 'j@c.com', 43, 'Kerala', 0, 'pics/Yasuo-League-of-Legends-Wallpaper-full-HD-11.jpg'),
(11, 'Peter', 'pass', 'pete@gmail.com', 29, 'INDIA', 0, 'pics/Justin Maller Art Wallpaper.jpg'),
(13, 'Jacob1', 'pass', 'j@c.com', 22, 'Rajasthan', 0, 'pics/maxresdefault.jpg'),
(14, 'Jimbo', 'password', 'pa@gmail.com', 99, 'helllloo', 0, 'pics/deadpool-wallpaper-hd-1080p-3dhew.jpg'),
(17, 'Newest', 'pass', 'hello@gmail.com', 88, 'blah blah to the moon and back! ', 0, 'pics/aerial_view_central_park_new_york_houses_hd-wallpaper-1816940.jpg'),
(18, 'Kim', 'pass', 'kim@gmail.com', 3, 'hihihih', 0, 'pics/Justin Maller Artwork Wallpaper.jpg'),
(19, 'as', 's', 'a@gmail.com', 2, '', 0, ''),
(24, 'Jim', 'pass', 'w@w.com', 25, 'address', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `Id` int(2) DEFAULT NULL,
  `Submitter` varchar(100) NOT NULL,
  `Topic` varchar(100) NOT NULL,
  `Section` varchar(100) NOT NULL,
  `Approved` int(2) NOT NULL DEFAULT '0',
  `Closed` int(2) NOT NULL DEFAULT '0',
  `Time` varchar(100) NOT NULL,
  `Reason` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Id`, `Submitter`, `Topic`, `Section`, `Approved`, `Closed`, `Time`, `Reason`) VALUES
(12, 'Jacob', 'What is this?', 'Video Games', 1, 1, 'some time', 'Approved'),
(12, 'Jacob', 'Forum sample text ', 'Video Games', 1, 1, '2017.05.11 05.57.00 am', 'Approved'),
(12, 'Jacob', 'What when and how?', 'Video Games', 1, 0, 'some time .', 'Approved'),
(18, 'Kim', 'Hello', 'Video Games', 1, 1, 'something', 'Approved'),
(13, 'Jacob1', 'The first topic to be approved', 'Video Games', 1, 0, '2017.05.11 11.10.46 am', 'Approved'),
(13, 'Jacob1', 'To be approved xD', 'Video Games', 1, 0, '2017.05.12 06.52.27 am', 'Approved'),
(18, 'Kim', 'hi', 'Video Games', 1, 0, '2017.05.12 04.27.02 pm', 'Approved'),
(12, 'Jacob', 'First Movie Post', 'Movies', 1, 1, '2017.05.12 04.32.06 pm', NULL),
(12, 'Jacob', 'FIRST SPORTS POSt', 'Sports', 0, 1, '2017.05.12 04.32.19 pm', NULL),
(12, 'Jacob', 'SECOND MOVIES POST', 'Movies', 1, 0, '2017.05.12 04.32.42 pm', NULL),
(12, 'Jacob', 'SECOND SPORTS POST', 'Sports', 1, 0, '2017.05.12 04.33.13 pm', NULL),
(10, 'paul', 'hey', 'Video Games', 0, 0, '2017-06-02 10:06:40am', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `Topic` varchar(100) DEFAULT NULL,
  `Section` varchar(100) DEFAULT NULL,
  `Reply` varchar(100) DEFAULT NULL,
  `Submitter` varchar(100) DEFAULT NULL,
  `Time` varchar(100) NOT NULL,
  `Approved` int(2) NOT NULL DEFAULT '0',
  `Reason` varchar(100) DEFAULT NULL,
  `Rexists` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`Topic`, `Section`, `Reply`, `Submitter`, `Time`, `Approved`, `Reason`, `Rexists`) VALUES
('Hello', 'Video Games', 'Hello to you too', 'Jacob', 'times', 0, 'rtr', 0),
('What is this?', 'Video Games', 'This is the blah', 'Peter', 'irr', 1, NULL, 0),
('Forum sample text', 'Video Games', 'Testing the new stuff', 'Jacob', '2017.05.11 10.31.59 am', 0, NULL, 0),
('What when and how?', 'Video Games', 'I am a different person', 'Newest', '2017.05.11 10.33.36 am', 1, NULL, 1),
('What when and how?', 'Video Games', 'I am unique', 'Jacob1', '2017.05.11 10.36.50 am', 1, NULL, 1),
('Forum sample text', 'Video Games', 'kn', 'Jacob1', '2017.05.11 10.40.29 am', 1, NULL, 0),
('The first topic to be approved', 'Video Games', 'First reply to the first post', 'Peter', '2017.05.11 11.12.24 am', 1, NULL, 1),
('What when and how?', 'Video Games', '#1', 'Jacob1', '2017.05.12 07.48.59 am', 1, NULL, 0),
('To be approved xD', 'Video Games', 'REPLYYYYYYYY', 'Kim', '2017.05.12 08.51.01 am', 1, 'Approved', 1),
('Hello', 'Video Games', 'Muhahah', 'Kim', '2017.05.12 03.45.15 pm', 0, 'Prohibited', 0),
('Hello', 'Video Games', 'My names jeff', 'Jacob1', '2017.05.12 03.47.05 pm', 1, NULL, 1),
('Hello', 'Video Games', 'NOTICE THIS !', 'Kim', '2017.05.12 04.31.10 pm', 0, NULL, 0),
('SECOND MOVIES POST', 'Movies', 'REPLY IN MOVIES', 'Kim', '2017.05.12 04.35.13 pm', 0, 'Offensive', 0),
('What when and how?', 'Video Games', 'Hey there dude', 'Kim', '2017.05.16 12.21.15 pm', 1, 'Approved', 0),
('Hello', 'Video Games', 'Hey', 'Kim', '2017.05.17 02.46.01 pm', 0, NULL, 0),
('What when and how?', 'Video Games', 'new  new new', 'Peter', '2017.05.31 03.23.49 pm', 1, 'Approved', 0);

-- --------------------------------------------------------

--
-- Table structure for table `replyreply`
--

CREATE TABLE `replyreply` (
  `Replyto` varchar(100) NOT NULL,
  `Submitter` varchar(100) DEFAULT NULL,
  `Time` varchar(100) NOT NULL,
  `Content` varchar(100) DEFAULT NULL,
  `Approved` int(2) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replyreply`
--

INSERT INTO `replyreply` (`Replyto`, `Submitter`, `Time`, `Content`, `Approved`) VALUES
('I am a different person', 'Jacob', '2017.05.18 02.48.43 pm', 'This is a comment \r\n', 1),
('I am a different person', 'Jacob', '2017.05.18 02.49.05 pm', 'This should be the second comment\r\n', 1),
('I am a different person', 'Jacob', '2017.05.18 03.09.06 pm', 'third comment\r\n', 1),
('My names jeff', 'Jacob1', '2017.05.18 03.10.54 pm', 'First comment here', 1),
('I am unique', 'Kim', '2017.05.18 03.11.16 pm', 'This is kim here', 1),
('REPLYYYYYYYY', 'Kim', '2017.05.18 04.01.15 pm', 'A comment that is to be closed', 1),
('First reply to the first post', 'kim', '2017.05.29 11.40.26 am', 'hi', 1),
('I am a different person', 'Jacob', '2017.06.02 11.49.49 am', 'fourth comment', 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Submitter` varchar(100) DEFAULT NULL,
  `Topic` varchar(100) DEFAULT NULL,
  `Reply` varchar(100) DEFAULT NULL,
  `Section` varchar(100) DEFAULT NULL,
  `Time` varchar(100) NOT NULL,
  `Report` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Submitter`, `Topic`, `Reply`, `Section`, `Time`, `Report`) VALUES
('Jacob1', 'The first topic to be approved', 'N', 'Video Games', '2017.05.11 11.10.46 am', 'REport '),
('Kim', 'N', 'REPLYYYYYYYY', 'Video Games', '2017.05.12 08.51.01 am', 'Report for a reply'),
('Peter', 'N', 'This is the blah', 'Video Games', 'irr', 'I dont like you'),
('Jacob', 'What is this?', 'N', 'Video Games', 'some time', 'Spam'),
('Newest', 'N', 'I am a different person', 'Video Games', '2017.05.11 10.33.36 am', 's'),
('Jacob', 'What when and how?', 'N', 'Video Games', 'some time .', 'report'),
('Jacob1', 'N', 'I am unique', 'Video Games', '2017.05.11 10.36.50 am', 'You arent unique');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `Section` varchar(100) NOT NULL,
  `Approved` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`Section`, `Approved`) VALUES
('Video Games', 1),
('Movies', 1),
('Sports', 1),
(' Celebrity', 1),
(' New Section', 0),
(' Newer Section', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Topic`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`Time`);

--
-- Indexes for table `replyreply`
--
ALTER TABLE `replyreply`
  ADD PRIMARY KEY (`Time`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Time`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`Section`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
