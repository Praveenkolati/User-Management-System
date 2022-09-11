-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 07:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `name` varchar(20) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `mothername` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `accno` varchar(20) NOT NULL,
  `ifsc` varchar(20) NOT NULL,
  `language` varchar(20) NOT NULL,
  `btech` varchar(30) NOT NULL,
  `mtech` varchar(30) NOT NULL,
  `inter` varchar(30) NOT NULL,
  `ssc` varchar(30) NOT NULL,
  `skills` varchar(60) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `fathername`, `mothername`, `address`, `gender`, `email`, `accno`, `ifsc`, `language`, `btech`, `mtech`, `inter`, `ssc`, `skills`, `mobile`, `nationality`, `username`, `password`) VALUES
('mobile', '', '', '', '', '', '0', '', '', '', '', '', '', '', '0', '', 'eugfue7', 'RGDDDD45hv'),
('mobile', 'siva', 'sumathi', '', '', '', '0', '', '', '', '', '', '', '', '0', '', 'eugfue7', 'RTSTSTY587gsf'),
('mobile', 'siva', 'sumathi', 'ap,spsr nellore,gudur,chennur', 'Male', 'eferkj@gmail.com', '8969876', 'hfgj645', '', '', '', '', '', '', '0', '', 'eugfue7', '54TYSrdyt5'),
('mobile', 'siva', 'sumathi', 'ap,spsr nellore,gudur,chennur', 'Male', 'eferkj@gmail.com', '2147483647', 'sbin0012687', '', '82', '84', '98', '97', '', '0', '', 'bujji333', 'Umamahesh@1432'),
('mobile', 'siva', 'sumathi', 'ap,spsr nellore,gudur,chennur', 'Male', 'eferkj@gmail.com', '2147483647', 'sbin0012687', 'telugu', '82', '84', '98', '97', '', '0', 'Indian', 'bujji333', 'Umamahesh@1432'),
('mobile', 'gfje', 'nkj', 'ap,spsr nellore,gudur,chennur', 'Male', 'eferkj@gmail.com', '747099070', 'bjg78', '', '82', '84', '98', '97', 'hjjfg', '0', 'Indian', 'bujji333', 'Umamahesh@1432'),
('mobile', 'gfje', 'nkj', 'ap,spsr nellore,gudur,chennur', 'Male', 'eferkj@gmail.com', '747099070', 'bjg78', 'telugu', '82', '84', '98', '97', 'hjjfg', '2147483647', 'Indian', 'bujji333', 'Umamahesh@1432'),
('Uma mahesh', 'siva prasad', 'sumathi', 'ap,spsr nellore,gudur,chennur', 'Male', 'jakkalau@gmail.com', '2147483647', 'SBIN0012687', 'telugu', '82', '84', '98', '97', 'poker', '2147483647', 'Indian', 'bujji333', 'Umamahesh@1432'),
('Uma mahesh', 'siva prasad', 'sumathi', 'ap,spsr nellore,gudur,chennur', 'Male', 'jakkalau@gmail.com', '34533669949', 'SBIN0012687', 'telugu', '82', '84', '98', '97', 'poker', '8500446971', 'Indian', 'bujji333', '56YFYFGds'),
('srinu', 'DUVVURU', 'faculty', 'ap,spsr nellore,gudur,chennur', 'Male', 'eferkj@gmail.com', '34533669949', 'SBIN0012687', 'telugu', '82', '84', '98', '97', 'poker', '7815821070', 'Indian', 'srinusir', 'Srinu@1432'),
('raja', 'sudhakar', 'ramanamma', 'ap,spsr nellore,gudur,chennur', 'Male', 'eferkj@gmail.com', '34533669949', 'SBIN0012687', 'telugu', '74', '78', '95', '98', 'poker', '9390209320', 'Indian', 'jhergfr672', 'Raja@1432'),
('mobile', '', '', 'ap,spsr nellore,gudur,chennur', '', 'eferkj@gmail.com', '', '', '', '', '', '', '', '', '07815821070', 'Indian', 'kishore333', 'Kishore@1432');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
