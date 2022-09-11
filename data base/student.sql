-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 07:13 AM
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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(25) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `fathername` varchar(15) NOT NULL,
  `mothername` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` varchar(30) NOT NULL,
  `language` varchar(10) NOT NULL,
  `fee` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` int(5) NOT NULL,
  `accno` varchar(20) NOT NULL,
  `ifsc_code` varchar(10) NOT NULL,
  `transportation` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `rollno`, `dob`, `fathername`, `mothername`, `gender`, `email`, `mobile`, `address`, `language`, `fee`, `department`, `year`, `accno`, `ifsc_code`, `transportation`, `username`, `password`) VALUES
('hg', '543', '2002-12-17', 'ghf', 'ffhjg', 'Male', 'ewq@gmail.com', '2147483647', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', '', 2020, '0', '', '', 'ewert45', '4Rtdwqdt'),
('hg', '543', '2002-12-17', 'ghf', 'ffhjg', 'Male', 'ewq@gmail.com', '2147483647', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', '', 2020, '0', '', '', 'ewert45', '3Egwdqdfgh'),
('hg', '543', '2002-12-17', 'ghf', 'ffhjg', 'Male', 'ewq@gmail.com', '2147483647', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', '', 2020, '0', '', '', 'ewert45', '3Ettddrts'),
('uma', '548', '2002-12-17', 'siva', 'sumathi', 'Male', 'iy7832ui@gmail.com', '2147483647', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', '', 2020, '0', '', '', 'eguy4', '5Tbjdsgdjgu'),
('uma', '548', '2002-12-17', 'siva', 'sumathi', 'Male', 'iy7832ui@gmail.com', '2147483647', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', '', 2020, '0', '', '', 'eguy4', 'RYETYET6gsfg'),
('uma', '548', '2002-12-17', 'siva', 'sumathi', 'Male', 'iy7832ui@gmail.com', '2147483647', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', '', 2020, '0', '', '', 'eguy4', '4Rdtdtydgas'),
('uma', '548', '2002-12-17', 'siva', 'sumathi', 'Male', 'iy7832ui@gmail.com', '2147483647', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', '', 2020, '0', '', '', 'eguy4', '4ETFTDRTHes'),
('uma', '548', '2002-12-17', 'siva', 'sumathi', 'Male', 'iy7832ui@gmail.com', '2147483647', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', '', 2020, '0', '', '', 'eguy4', '3Edrgwdhdgfye'),
('uma', '548', '2002-12-17', 'siva', 'sumathi', 'Male', 'iy7832ui@gmail.com', '2147483647', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', '', 2020, '0', '', '', 'eguy4', '3Efsfdsfhg'),
('uma', '548', '2002-12-17', 'siva', 'sumathi', 'Male', 'iy7832ui@gmail.com', '2147483647', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', '', 2020, '0', '', '', 'eguy4', '3DEdtdtwd'),
('mobile', '548', '2002-12-12', 'android', 'dhhdd', 'Male', 'iy7832ui@gmail.com', '2147483647', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', 'cse', 2020, '2147483647', 'dfgrd545', '', 'eugfue7', '4Rweftfyutweuy'),
('HARIPRASAD DUVVURU', '20KB1A0546', '2002-07-10', 'RAMANAIAH DUVVU', 'MUNEESWARI DUVV', 'Male', 'SHECALLMEHARIPRASAD@GMAIL', '2147483647', 'VAKADU,KAIKALA STREET VAKADU', 'telugu', 'Management', 'cse', 2020, '2147483647', 'UBIN080614', 'BUS', 'HARIPRASAD', 'Hari@546'),
('jwegu', '2u357', '0000-00-00', 'jg', 'egiueg', 'Male', 'Hari@1234567', '2147483647', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', 'cse', 2020, '7325783', 'dfgrd545', 'BUS', 'bujji333', 'gsgf543ngfD'),
('hjegy', 'ku3griu', '0000-00-00', 'hksdhf', '', '', '', '0', '', '', '', '', 0, '0', '', '', 'sdhjas', 'jsgfjh4RGS'),
('JHERGJ', '', '0000-00-00', '', '', '', '', '0', '', '', '', '', 0, '0', '', '', 'gtdyue', 'FDYDFtyeqwsgr6'),
('mobile', '', '0000-00-00', '', '', '', '', '0', '', '', '', '', 0, '0', '', '', 'bujji333', '4RDTYDTYDTe'),
('UUma mahesh', '20KB1A0548', '2002-12-17', 'siva prasad', 'sumathi', 'Male', 'jakkalau@gmail.com', '2147483647', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', 'cse', 2020, '2147483647', 'UBIN080614', 'BUS', 'bujji333', 'Umamahesh@14322'),
('Uma mahesh', '20KB1A0548', '2002-12-17', 'siva prasad', 'sumathi', 'Male', 'jakkalau@gmail.com', '8500446971', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', 'cse', 2021, '34533669949', 'UBIN080614', 'BUS', 'bujji333', 'Umamahesh@1432'),
('dhanush', '20kb1a0548', '2002-10-13', 'nagraj', 'lakshmi', 'Male', 'don@gmail.com', '8500446971', 'ap,spsr nellore,gudur,chennur', 'telugu', 'Management', 'mech', 2020, '34533669949', 'UBIN080614', 'BUS', 'don333', 'Dhanush@1432'),
('pavan', '504', '2022-07-20', 'uma', 'uma', 'male', 'pavan@gmail.com', '9876543210', 'nellore', 'telugu', 'paid', 'cse', 2022, '234', '1345', 'bus', 'pavan29', '1234567'),
('sai kishore', '2okb1a95d3', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, '', '', '', 'saikishore', 'Sai2472003'),
('', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, '', '', '', 'kanna333', 'Umamahesh@143');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
