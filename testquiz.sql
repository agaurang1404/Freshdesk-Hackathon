-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2017 at 03:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testquiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(15, 1, 0, 'paradominal foot rest'),
(16, 1, 0, 'paid foot rest'),
(17, 1, 1, 'proper foot rest'),
(18, 1, 0, 'persian foot rest'),
(19, 2, 0, 'no'),
(20, 2, 0, 'sometimes'),
(21, 2, 0, 'very often'),
(22, 2, 1, 'never'),
(23, 3, 1, '6 months'),
(24, 3, 0, '3 months'),
(25, 3, 0, '4 months'),
(26, 3, 0, '5 months'),
(27, 4, 0, 'change up gear'),
(28, 4, 1, 'change down gear'),
(29, 4, 0, 'keep constant speed'),
(30, 4, 0, 'increase speed with constant acceleration'),
(31, 5, 1, '16.6m'),
(32, 5, 0, '32m'),
(33, 5, 0, '48m'),
(34, 5, 0, '102m'),
(35, 6, 0, 'side hand'),
(36, 6, 0, 'back gear activate'),
(37, 6, 0, 'park lights on'),
(38, 6, 1, 'nothing on the left'),
(39, 7, 0, 'circle shape - red and white'),
(40, 7, 1, 'diamond shape - yellow and black'),
(41, 7, 0, 'square shape - green and red '),
(42, 7, 0, 'no shape'),
(43, 8, 0, 'undder tiffiness'),
(44, 8, 0, 'under disease'),
(45, 8, 0, 'under smoked conditions'),
(46, 8, 1, 'under alcohol influence'),
(47, 9, 1, 'lights,reflectors and mirrors'),
(48, 9, 0, 'speedometer'),
(49, 9, 0, 'tyres'),
(50, 9, 0, 'nothing in the car '),
(51, 10, 0, 'gear up'),
(52, 10, 0, 'hit them'),
(53, 10, 1, 'slow down'),
(54, 10, 0, 'neither of the above options');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'A passenger may not be carried on a motorcycle unless it has…?'),
(2, 'It is acceptable to drink and drive…?'),
(3, 'If you drive while drunk, you can face a term of imprisonment of up to…?'),
(4, 'The best driving technique for dealing with slippery roads is to…?'),
(5, 'Traveling at 60 km/h, how far will your vehicle travel in a single second?'),
(6, 'What signals should you make if you are going straight across at a roundabout?'),
(7, 'What shape and colour is a warning sign? '),
(8, 'When should you not drive? '),
(9, 'What should always be kept clean on your vehicle? '),
(10, 'What is the rule about passing animals on the road? ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
