-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 07:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'avrorazib@gmail.com', 'Avronil@0179'),
(2, 'sazida@gmail.com', 'sazida81'),
(3, 'arnab@gmail.com', 'arnab68');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `cgpa` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `fname`, `lname`, `phone`, `dept`, `cgpa`, `photo`, `email`, `password`, `bio`) VALUES
(221115068, 'Arnab', 'Chowdhury', '01758832627', 'B.Sc in CSE', '4', 'a.png', 'arnabchowdhury@gmail.com', 'Arnab@12', 'this is arnab chowdhury. software engineer.'),
(221115044, 'Mughni ', 'Rayhan Tisha', '01746423366', 'B.Sc in CSE', '4', 'hackthon.jpg', 'tishtisha13@gmail.com', 'Tisha@01746', 'pationate girl'),
(221115043, 'Proyash', 'Das', '01785770991', 'B.Sc in CSE', '4', 'tech.jpeg', 'dasproyash10@gmail.com', 'hello', 'i am a software engineer\r\n'),
(221115044, 'Mowly', 'Roy', '01846423366', 'B.Sc in CSE', '3.50', 'tech.jpeg', 'mowly@gmail.com', '$2y$10$B4u8gaJzyZjzp.pVVYQ1IuBRw5VZdJG5T3goBmvynHQuRfRXdVcp2', 'software engineer'),
(221115061, 'Nafiul Adnan', ' Chowdhury', '01721279675', 'B.Sc in CSE', '3.65', 'adnan.jpg', 'adnan@gmail.com', '$2y$10$k0MHx22n/agGKy3uwm4lFOSydmunQ1UWTafsMfa2WlZTky0SqvaCi', 'Site Reliability Engineer At Google');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `massage`) VALUES
(3, 'Rajib', 'Dash', 'avrorajib@gamil.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `des`, `photo`, `date`) VALUES
(19, 'Hackathon', 'test test 2', 'p-1.png', '2024-04-26'),
(20, 'CSE Tech Fest', 'CSE Tech Fest is a celebration of technology\'s innovative spirit and limitless possibilities. It\'s a platform for students, professionals, and tech enthusiasts from around the world to showcase their talents and exchange ideas.', 'tech.jpeg', '2024-04-20'),
(22, '3rd convocation', 'test 2', 'image1.jpeg.jpg', '2025-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `photo`, `title`, `des`) VALUES
(9, 'getA.png', 'Communication ', 'mu capmus'),
(12, 'hackthon.jpg', 'Rajib Dash', 'test'),
(13, 'hackthon.jpg', 'Rajib Dash', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `des` varchar(1255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `employment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `des`, `location`, `experience`, `salary`, `employment_status`) VALUES
(1, 'Mern stack developer', 'test', 'test', 'test', '10000', 'test'),
(2, 'Full stack developer', 'full stack developer', 'sylhet,bangladesh', '1 years', '$20,00 & $30.00', 'full time');

-- --------------------------------------------------------

--
-- Table structure for table `student_id`
--

CREATE TABLE `student_id` (
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_id`
--

INSERT INTO `student_id` (`id`) VALUES
(221115041),
(221115042),
(221115043),
(221115044),
(221115045),
(221115046),
(221115047),
(221115048),
(221115049),
(221115050),
(221115051),
(221115052),
(221115053),
(221115054),
(221115055),
(221115056),
(221115057),
(221115058),
(221115059),
(221115060),
(221115061),
(221115062),
(221115063),
(221115064),
(221115065),
(221115066),
(221115067),
(221115068),
(221115069),
(221115070),
(221115071),
(221115072),
(221115073),
(221115074),
(221115075);

-- --------------------------------------------------------

--
-- Table structure for table `success_story`
--

CREATE TABLE `success_story` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Bio` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `success_story`
--

INSERT INTO `success_story` (`id`, `fullName`, `Photo`, `Bio`) VALUES
(6, 'Nafiul Adnan Chowdhury', 'adnan.jpg', 'Site Reliability Engineer At Google'),
(7, 'Emrul Chowdhury', 'emrul.jpg', 'Software Development Engineer at Amazon'),
(8, 'Majharul Islam Rafat', 'mahjarul.jpg', 'Software Engineer at Agoda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_id`
--
ALTER TABLE `student_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_story`
--
ALTER TABLE `success_story`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `success_story`
--
ALTER TABLE `success_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
