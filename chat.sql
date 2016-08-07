-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2016 at 05:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`) VALUES
(1, 'Amir', 'hiatus'),
(2, 'Adam', 'bell');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`messageID` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `messageBy` varchar(25) NOT NULL,
  `messageDate` datetime NOT NULL,
  `roomID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageID`, `message`, `messageBy`, `messageDate`, `roomID`) VALUES
(1, 'Yo', 'Amir', '0000-00-00 00:00:00', 1),
(2, 'Yo', 'Anonymous', '0000-00-00 00:00:00', 1),
(3, 'How''s it going?', 'Amir', '0000-00-00 00:00:00', 1),
(4, 'It''s pretty good!', 'Anonymous', '0000-00-00 00:00:00', 1),
(5, 'TEST', 'Amir', '2015-10-25 19:38:16', 1),
(6, 'TEST', 'Amir', '2015-10-25 19:39:00', 1),
(7, 'TEST', 'Amir', '2015-10-25 19:40:33', 1),
(8, 'TEST', 'Amir', '2015-10-25 21:30:46', 1),
(9, 'TEST', 'Amir', '2015-10-25 21:49:13', 1),
(10, 'TEST', 'Amir', '2015-10-26 00:14:03', 1),
(11, 'TEST', 'Amir', '2015-10-26 00:14:55', 1),
(12, 'TESertT', 'Amir', '2015-10-26 00:30:19', 1),
(13, 'TESertT', 'Amir', '2015-10-26 00:34:18', 1),
(14, 'TESertT', 'Amir', '2015-10-26 00:34:33', 1),
(15, 'TESertT', 'Amir', '2015-10-26 00:34:33', 1),
(16, 'TESertT', 'Amir', '2015-10-26 00:38:53', 1),
(17, 'TESertT', 'Amir', '2015-10-26 00:39:05', 1),
(18, 'TESerawdtT', 'Amir', '2015-10-26 00:39:10', 1),
(19, 'TESerawdtT', 'Amir', '2015-10-26 00:44:46', 1),
(20, 'TESerawdtT', 'Amir', '2015-10-26 00:50:10', 1),
(21, 'TEST', 'Amir', '2015-10-26 01:17:58', 1),
(22, 'It''s pretty good!', 'Anonymous', '0000-00-00 00:00:00', 1),
(23, 'TESerawdtT', 'Amir', '2015-10-26 01:19:48', 1),
(24, 'TESerawdtT', 'Amir', '2015-10-26 01:33:37', 1),
(25, 'TESefgsdgdrawdtT', 'Amir', '2015-10-26 01:33:48', 1),
(26, 'test', 'AmirONLINE', '2015-10-27 18:27:56', 1),
(27, 'fag', 'AmirONLINE', '2015-10-27 20:51:43', 1),
(28, 'test', 'AmirONLINE', '2015-10-27 20:51:58', 1),
(29, 'fag', 'AmirONLINE', '2015-10-27 20:52:05', 1),
(34, 'booo\n', '', '2016-08-05 20:54:05', 1),
(35, 'yoo\n', 'Amir', '2016-08-05 20:57:37', 1),
(36, 'so\n', 'i wanna murder myself ton', '2016-08-05 21:31:56', 1),
(37, 'it works\n', 'i wanna murder myself ton', '2016-08-05 21:31:58', 1),
(38, 'walking dead\n', 'i wanna murder myself ton', '2016-08-05 21:32:07', 1),
(39, 'not the best quality\n', 'i wanna murder myself ton', '2016-08-05 21:32:10', 1),
(40, 'but who gives a fuck\n', 'i wanna murder myself ton', '2016-08-05 21:32:14', 1),
(41, 'its lagging now\n', 'i wanna murder myself ton', '2016-08-05 21:32:16', 1),
(42, 'too laggy now\n', 'i wanna murder myself ton', '2016-08-05 21:32:35', 1),
(43, 'basically not working\n', 'i wanna murder myself ton', '2016-08-05 21:32:38', 1),
(44, 'now\n', 'i wanna murder myself ton', '2016-08-05 21:32:39', 1),
(45, 'yo\n\n', 'amir', '2016-08-05 21:33:38', 1),
(46, 'yeah i see]\n', 'amir', '2016-08-05 21:33:48', 1),
(47, 'so\n', 'plzmurderme', '2016-08-05 21:35:15', 1),
(48, 'pretty cool man\n', 'plzmurderme', '2016-08-05 21:35:19', 1),
(49, 'pretty fucking cool\n', 'plzmurderme', '2016-08-05 21:35:23', 1),
(50, 'maybe i wont kill myself tonight\n', 'plzmurderme', '2016-08-05 21:35:28', 1),
(51, '//\n', 'Amir', '2016-08-05 21:51:37', 1),
(52, 'test\n', 'Amir', '2016-08-06 20:43:05', 1),
(53, 'test\n', 'Amir', '2016-08-06 20:43:06', 1),
(54, 'test\n', 'Amir', '2016-08-06 20:43:09', 1),
(55, 'test\n', 'Amir', '2016-08-06 20:43:10', 1),
(56, 'test\n', 'Amir', '2016-08-06 20:43:12', 1),
(57, 'broooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo\n', 'Amir', '2016-08-06 20:43:25', 1),
(58, 'hello\n', 'asda', '2016-08-06 20:56:46', 1),
(59, 'my name is adadam\n', 'asda', '2016-08-06 20:56:50', 1),
(60, 'uck\n', 'asda', '2016-08-06 20:57:30', 1),
(61, 'damnn \n', 'asda', '2016-08-06 20:57:34', 1),
(62, 'lanaster\n', 'asda', '2016-08-06 20:57:36', 1),
(63, 'its laggging\n', 'asda', '2016-08-06 21:02:18', 1),
(64, 'maybe its my browser\n', 'asda', '2016-08-06 21:02:21', 1),
(65, 'i reset\n', 'asda', '2016-08-06 21:02:23', 1),
(66, 'its working again\n', 'ada', '2016-08-06 21:02:32', 1),
(67, 'afer refest\n', 'ada', '2016-08-06 21:02:34', 1),
(68, 'YOOO\n\n', 'Amir', '2016-08-06 21:50:06', 1),
(69, 'yoyoyoyoyoyo\n', 'Amir', '2016-08-06 21:50:10', 1),
(70, 'yo\n', 'null', '2016-08-06 23:12:19', 1),
(71, 'bitches\n', 'Amir', '2016-08-06 23:14:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
`roomID` int(11) NOT NULL,
  `roomName` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomID`, `roomName`) VALUES
(1, 'Anonymous Room');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`messageID`), ADD KEY `roomID` (`roomID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
 ADD PRIMARY KEY (`roomID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`roomID`) REFERENCES `rooms` (`roomID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
