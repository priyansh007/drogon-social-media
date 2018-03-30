-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2017 at 11:38 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drogon`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `emailid` varchar(50) NOT NULL,
  `pswd` varchar(15) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobno` text NOT NULL,
  `address` text NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`emailid`, `pswd`, `fname`, `lname`, `mobno`, `address`, `admin`) VALUES
('shubham@gmail.com', 'sss', 'shubham', 'khunt', '', '', 0),
('u15co048', '1234', 'lalo', 'rai', '8238911820', 'surat', 0),
('u15co049', '1234', 'jay', 'dudhat', '7874477424', 'usa', 0),
('u15co050', '1234', 'priyansh', 'zalavadiya', '8460108506', 'surat', 1),
('u15co051', '1234', 'jaso', 'nasit', '8523697412', 'up', 0),
('u15co052', '1234', 'sairam', 'naragoni', '8915264255', 'surat', 0),
('u15co053', '1234', 'ram', 'lakhan', '9875246585', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `pid` int(110) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `permission` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `uid`, `content`, `permission`, `title`, `category`, `time`, `name`) VALUES
(0, '0', '0', 25, '0', '0', 0, '0'),
(1, 'u15co049', 'election is a formal group decision-making process by which a population chooses an individual to hold public office.[1] Elections have been the usual mechanism by which modern representative democracy has operated since the 17th century.[1] Elections may fill offices in the legislature, sometimes in the executive and judiciary, and for regional and local government. This process is also used in many other private and business organizations, from clubs to voluntary associations and corporations.[2]\r\n\r\nThe universal use of elections as a tool for selecting representatives in modern representative democracies is in contrast with the practice in the democratic archetype, ancient Athens, where the Elections were considered an oligarchic institution and most political offices were filled using sortition, also known as allotment, by which officeholders were chosen by lot.[3]\r\n\r\nElectoral reform describes the process of introducing fair electoral systems where they are not in place, or improving the fairness or effectiveness of existing systems. Psephology is the study of results and other statistics relating to elections (especially with a view to predicting future results).\r\ndelete\r\n', 0, 'election', 'general', 1504102572, 'jay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`emailid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
