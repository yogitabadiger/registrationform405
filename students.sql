-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2025 at 02:46 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `rollno` varchar(20) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `year` int DEFAULT NULL,
  `sem` int DEFAULT NULL,
  `cgpa` decimal(4,2) DEFAULT NULL,
  `favsub` varchar(100) DEFAULT NULL,
  `percentage` decimal(5,2) DEFAULT NULL,
  `address` text,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `hobbies` varchar(255) DEFAULT NULL,
  `clubs` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL,
  `dateTime` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `rollno` (`rollno`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `mname`, `lname`, `dob`, `gender`, `email`, `password`, `phone`, `color`, `rollno`, `department`, `year`, `sem`, `cgpa`, `favsub`, `percentage`, `address`, `city`, `state`, `pincode`, `linkedin`, `github`, `hobbies`, `clubs`, `skills`, `languages`, `dateTime`) VALUES
(1, 'Yogita', 'Virupakshappa', 'Badiger', '2005-08-15', 'Female', 'badigeryogita8@gmail.com', 'Test@123', '6361451604', '#0b223c', '2KA24CS405', 'CSE', 3, 5, 8.76, 'AI', 78.00, 'At Post Siddapur, Haveri District, Svanur Taluk.', 'Siddapur', 'Karnataka', '581118', 'https://www.linkedin.com/', 'https://github.com/', 'READING, WRITING THOUGHTS.', 'Coding', 'COMMUNICATION SKILS', 'KANNADA', '2025-11-06 20:14:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
