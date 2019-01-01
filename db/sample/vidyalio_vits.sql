-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2019 at 12:03 AM
-- Server version: 10.2.19-MariaDB-log-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vidyalio_vits`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `mailName` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `mailName`, `email`) VALUES
(1, 'test', '202cb962ac59075b964b07152d234b70', 'test helo', 'chammaofficial@gmail.com'),
(2, 'chamod', '7d458b6316f28428d1ad49ffadedae1b', 'Chamod', 'apweslk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `co-ordinator`
--

CREATE TABLE `co-ordinator` (
  `id` int(11) NOT NULL,
  `schoolID` int(11) NOT NULL,
  `codname` varchar(150) COLLATE utf8_bin NOT NULL,
  `codemail` varchar(150) COLLATE utf8_bin NOT NULL,
  `codcontact` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `co-ordinator`
--

INSERT INTO `co-ordinator` (`id`, `schoolID`, `codname`, `codemail`, `codcontact`) VALUES
(12, 57, 'nadiya', 'asd@gamil.com', '234242324'),
(13, 58, 'nadiya', 'asd@gamil.com', '2332'),
(14, 59, 'efgdgdgf', 'a@gmail.com', '23423424'),
(15, 60, 'hello', 'asdf@gmail.com', '1232423432'),
(16, 61, 'hgfdsa', 'asdf@gmail.com', '232323275'),
(17, 62, 'name', 'name@gmail.com', '2342342342'),
(18, 63, 'asdsa', 'as@gmail.com', '54564'),
(19, 64, 'dgfhgf', 's@gmail.com', '242434'),
(20, 65, 'xdvdgd', 'as@gmil.com', '454353453'),
(21, 66, 'asdffgg', 'a@g.com', '234244'),
(22, 67, 'sddfsf', 'ad@gamil.com', '12123223'),
(23, 68, 'asdasd', 'j@gmil.com', '232322323'),
(24, 69, 'Chamod', 'apweslk@gmail.com', '0717908520');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event` varchar(65) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event`) VALUES
(1, 'Quiz Competition'),
(2, 'Web Development Competition');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `schoolName` varchar(150) COLLATE utf8_bin NOT NULL,
  `noOfQuizMembers` int(11) DEFAULT 0,
  `noWebDevelopMembers` int(11) DEFAULT 0,
  `memcount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `schoolName`, `noOfQuizMembers`, `noWebDevelopMembers`, `memcount`) VALUES
(57, 'kegalu vidyalaya', 5, 0, 8),
(58, 'anuradhapura cc', 0, 5, 7),
(59, 'richmand college', 4, 0, 8),
(60, 'gamini college', 5, 0, 6),
(61, 'ananda college', 0, 3, 8),
(62, 'royal college', 5, 3, 8),
(63, 'st marrys\' college', 3, 5, 8),
(64, 'sds', 3, 5, 7),
(65, 'mahinda college', 5, 3, 8),
(66, 'convent ', 5, 0, 8),
(67, 'st peters\' college', 5, 0, 6),
(68, 'swarna jayanthi maha vidyalaya', 5, 0, 8),
(69, 'Game Iskole', 3, 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `school_event`
--

CREATE TABLE `school_event` (
  `id` int(11) NOT NULL,
  `schoolid` int(11) DEFAULT NULL,
  `eventid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `school_event`
--

INSERT INTO `school_event` (`id`, `schoolid`, `eventid`) VALUES
(22, 57, 1),
(23, 58, 2),
(24, 59, 1),
(25, 60, 1),
(26, 61, 2),
(27, 62, 2),
(28, 62, 1),
(29, 63, 2),
(30, 63, 1),
(31, 64, 2),
(32, 64, 1),
(33, 65, 2),
(34, 65, 1),
(35, 66, 1),
(36, 67, 1),
(37, 68, 1),
(38, 69, 2),
(39, 69, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `schoolID` int(11) NOT NULL,
  `teacherName` varchar(150) COLLATE utf8_bin NOT NULL,
  `teacherEmail` varchar(150) COLLATE utf8_bin NOT NULL,
  `teacherContact` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `schoolID`, `teacherName`, `teacherEmail`, `teacherContact`) VALUES
(12, 57, 'chamod', 'sedir@gmail.com', '074114245'),
(13, 58, 'adasdasd', 'sedir@gmail.com', '074114245'),
(14, 59, 'sdad', 'asd@gmail.com', '22232323'),
(15, 60, 'asdfsdfds', 'asdf@gmail.com', '2242423423'),
(16, 61, 'tre', 'agf@gmail.com', '12121212'),
(17, 62, 'helol', 'lol@gmail.com', '67162633'),
(18, 63, 'sadasdasdasdsa', 'g@gail.com', '32423423'),
(19, 64, '2323', 'as@h.com', '3232323'),
(20, 65, 'hklihkh', 'hk@gmil.com', '23432432'),
(21, 66, 'asd', 'asd@gamil.com', '32323323'),
(22, 67, 'sfdsdfsd', 'ssa@gamil.com', '24242343'),
(23, 68, 'ass', 'q@gamil.com', '3423443'),
(24, 69, 'R W Ramanayake', 'chammaofficial@gmail.com', '0717908311');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `co-ordinator`
--
ALTER TABLE `co-ordinator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `school_event`
--
ALTER TABLE `school_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `co-ordinator`
--
ALTER TABLE `co-ordinator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `school_event`
--
ALTER TABLE `school_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
