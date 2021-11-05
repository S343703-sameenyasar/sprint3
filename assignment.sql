-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 07:00 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `question_option` varchar(1000) NOT NULL,
  `option_score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_number`, `question_option`, `option_score`) VALUES
(1, 1, 'Good', 10),
(2, 1, 'Bad', 5),
(3, 1, 'Not so well', 0),
(7, 2, 'Yes', 0),
(8, 2, 'No', 10),
(9, 3, 'Yes', 0),
(10, 3, 'No', 10),
(11, 4, 'Yes', 0),
(12, 4, 'No', 10),
(13, 5, 'Yes', 0),
(14, 5, 'No', 10),
(15, 7, 'Always', 0),
(16, 7, 'Often', 5),
(17, 7, 'Never', 10),
(18, 8, 'Always', 0),
(19, 8, 'Often', 5),
(20, 8, 'Never', 10),
(24, 9, 'Always', 0),
(25, 9, 'Often', 5),
(26, 9, 'Never', 10),
(27, 11, 'Happy', 10),
(28, 11, 'Satisfied', 8),
(29, 11, 'Anxious', 4),
(30, 11, 'Sad', 0),
(31, 12, 'Good', 10),
(32, 12, 'Moderate', 5),
(33, 12, 'Bad', 0),
(34, 13, 'Yes', 0),
(35, 13, 'No', 10),
(36, 15, 'Yes', 0),
(37, 15, 'No', 10),
(38, 16, 'Yes', 0),
(39, 16, 'No', 10),
(40, 17, 'More than 5', 10),
(41, 17, 'Less than 5', 5),
(42, 17, 'A lot', 8),
(46, 18, 'Always', 0),
(47, 18, 'Often', 5),
(48, 18, 'Never', 10),
(49, 19, 'Always', 10),
(50, 19, 'Often', 5),
(51, 19, 'Never', 0),
(52, 20, 'Yes', 10),
(53, 20, 'No', 5),
(54, 14, 'Often', 5),
(55, 14, 'Never', 0),
(56, 14, 'Always', 10),
(57, 10, 'They always supports me', 0),
(58, 10, 'They often supports me', 5),
(59, 10, 'They never supports me', 10),
(60, 6, 'They have changed', 10),
(61, 6, 'They haven\'t changed', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question_description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question_description`) VALUES
(1, 'How are you feeling today ? '),
(2, 'Have you ever experienced a terrible occurrence that has impacted you significantly? For example victim of armed assault, witnessing an incident etc.'),
(3, 'Do you ever feel that you’ve been affected by feelings of edginess, anxiety, or nerves?\r\n'),
(4, 'Have you ever experienced an ‘attack’ of fear, anxiety, or panic? '),
(5, 'Tell me about your sleeping habits over the past X months. Have you noticed any changes? Difficulty sleeping? Restlessness? '),
(6, 'How would you describe your appetite over the past X weeks? Have your eating habits changed in any way?'),
(7, 'How often during the past 2 months have you felt as though your moods, or your life, were under your control? '),
(8, 'How frequently have you been bothered by not being able to stop worrying? '),
(9, 'How often over the past few weeks have you felt the future was bleak? '),
(10, 'Describe how ‘supported’ you feel by others around you – your friends, family, or otherwise. '),
(11, 'How do you feel most of the time? '),
(12, 'What are your energy levels like when you finish your day?'),
(13, 'Are you having any extreme emotions or mood swings? Any suicidal thoughts, breakdowns, or panic attacks?'),
(14, 'How often do you feel relaxed?'),
(15, 'Are you having trouble focusing at work or school?'),
(16, 'Over the last 12 months, did you ever plan how you might attempt suicide? '),
(17, 'How many close friends would you say you have? '),
(18, 'Over the last 12 months, how frequently have you felt alone or lonely? '),
(19, 'How frequently have you been doing things that mean something to you or your life?\r\n'),
(20, 'Do you feel that there are treatment out there that can help you to get better?\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL DEFAULT 'not_admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `type`) VALUES
(1, 'faysal', '123456', 'not_admin'),
(2, 'ariba', '123', 'admin'),
(3, 'zarif', '1234', 'not_admin'),
(7, 'sameen', '123', 'not_admin'),
(9, 'faysal', '123456789', 'not_admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
