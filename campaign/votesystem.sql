-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 08:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'admin', '$2y$10$eTF/JohoTeDSkfWBTr/zfOjlBHh1j1y7L9n4xfGJQxSn14GZ.RRou', 'Mahabub', 'Rahaman', 'C173003.jpg', '2022-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `phone` varchar(256) DEFAULT NULL,
  `platform` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `position_id`, `firstname`, `lastname`, `photo`, `email`, `phone`, `platform`) VALUES
(27, 10, 'Mahabub', 'Rahaman', 'C173003.jpg', NULL, NULL, 'Panel-A'),
(28, 10, 'Isteyak', 'Mahmud', 'Isteyak.jpg', NULL, NULL, 'Panel-B'),
(29, 11, 'Nasif', 'Muqarrabin', 'profile.jpg', NULL, NULL, 'Panel-A'),
(30, 11, 'Sajid', 'Hasan', 'profilephoto.jpg', NULL, NULL, 'Panel-B'),
(31, 11, 'Rakib', 'Hossain', '', NULL, NULL, 'Panel-C');

-- --------------------------------------------------------

--
-- Table structure for table `elections`
--

CREATE TABLE `elections` (
  `id` int(11) NOT NULL,
  `election_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `positions` int(11) DEFAULT NULL,
  `candidates` int(11) DEFAULT NULL,
  `voters` int(11) DEFAULT NULL,
  `started_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `elections`
--

INSERT INTO `elections` (`id`, `election_id`, `title`, `positions`, `candidates`, `voters`, `started_date`, `end_date`) VALUES
(1, 111, 'Computer Club', 2, 5, 100, '2022-10-13 15:00:00', '2022-10-13 16:00:00'),
(2, 222, 'Business Club', 2, 5, 200, '2022-10-12 00:00:00', '2022-10-12 00:00:00'),
(3, 333, 'English Club', 2, 5, 100, '2022-10-15 11:00:00', '2022-10-15 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `max_vote` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `description`, `max_vote`, `priority`) VALUES
(10, 'General Secretary', 1, 1),
(11, 'Assistant General Secretary', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `voters_id` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `election_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `voters_id`, `password`, `firstname`, `lastname`, `photo`, `email`, `phone`, `election_id`) VALUES
(68, 'ny6cfdti', '$2y$10$24DD1EitOLWyd1gQeupaquKietZ/lckYVZMr2C3aOXr6YwNTQ/uhq', 'Mahabub', 'Rahaman', 'C173003.jpg', 'c173003@ugrad.iiuc.ac.bd', '01843180191', NULL),
(69, 'odk6j3eq', '$2y$10$1yxmoxG39fwOZauB5/l69utFBdF3FBQmzqfXlhc6XFnBG79OGGS0K', 'Mahabub', 'Rahaman', 'avatar.png', 'c173003@ugrad.iiuc.ac.bd', '01843180191', NULL),
(70, 'olnzx87k', '$2y$10$Bjqh8.x6/5QF5qlUudlfm.KyREQUuj4Qsxuep4ykvxrd5Vv/iFwFG', 'Mahabub', 'Rahaman', 'Mahabub.jpg', 'c173003@ugrad.iiuc.ac.bd', '01843180191', 2),
(71, 'xhuasoeb', '$2y$10$2BlR8wtL6cayxfvYc13lduoLHSl2rDOQTYNjOW1TjoKfqHn0WiBX2', 'Isteyak', 'Mahmud', 'Isteyak.jpg', 'c173030@ugrad.iiuc.ac.bd', '01647539470', 1),
(72, 'd8m3i2ut', '$2y$10$UG0FQdsgFmaDS/VcqJM5quP1QjYA.MYzC7A61LD74np1viRV/YDCW', 'Nasif', 'Muqarrabin', 'Opi51c74ead38850.png', 'c173003@ugrad.iiuc.ac.bd', '01843180191', 1),
(73, '1svnt34k', '$2y$10$x/xq4CMOLYUxuysagmovKucizgbKin/zl1DjFZD//80vB4NOeMRXK', 'Mahabub', 'Piash', 'C173003.jpg', 'piashpiash019@gmail.com', '01843180191', 1),
(74, 'h4i72kqs', '$2y$10$dVtKOwiBisxP9tWswXafjOF4jLBFaEUZCamV2v20aN/ej3igaVEQ.', 'Maharun', 'Tuly', 'female.jpg', 'tulymaharun8@gmail.com', '01843180191', 3);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `voters_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `voters_id`, `candidate_id`, `position_id`, `created_at`) VALUES
(167, 73, 27, 10, '2022-11-15 16:37:51'),
(168, 73, 29, 11, '2022-11-15 16:37:51'),
(169, 73, 31, 11, '2022-11-15 16:37:51'),
(170, 71, 27, 10, '2022-11-15 16:38:50'),
(171, 71, 29, 11, '2022-11-15 16:38:51'),
(172, 71, 30, 11, '2022-11-15 16:38:51'),
(173, 70, 28, 10, '2022-11-15 16:49:21'),
(174, 70, 30, 11, '2022-11-15 16:49:21'),
(175, 70, 31, 11, '2022-11-15 16:49:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elections`
--
ALTER TABLE `elections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `elections`
--
ALTER TABLE `elections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
