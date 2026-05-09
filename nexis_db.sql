-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2026 at 07:19 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nexis_db`
--
CREATE DATABASE IF NOT EXISTS `nexis_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nexis_db`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `nic` varchar(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(150) NOT NULL,
  PRIMARY KEY (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`nic`, `fullname`, `email`, `contact`, `address`, `gender`, `course`) VALUES
('200109204456', 'Arshad Ahmed Mansoor', 'arshad.m@gmail.com', '0786677889', '15/4, Maligawatta Place, Colombo 10', 'Male', 'Bachelor of Science (Honors) Information Technology in Cyber Security\r\n'),
('200132210853', 'Milinda Sanjaya Kumara', 'msanjaya87@gmail.com', '0753419625', '110, St Mary''s Road, Colombo 15', 'Male', 'BA (Hons) English'),
('200156437689', 'Aliya Sheron Fernando', 'aliyafd36@gmail.com', '0741902151', '215, W A Silva Mw, Colombo 06', 'Female', 'BSc (Hons) Business Information Systems'),
('200168903321', 'Kavindi Ishara Gamage', 'kavi.ish99@yahoo.com', '0719876543', '12, Galle Road, Mount Lavinia', 'Female', 'BA (Hons) English'),
('200214408712', 'Rohan Devinda Perera', 'rohan.dev22@gmail.com', '0771234567', '45/A, Nawala Road, Rajagiriya', 'Male', 'B.Sc. (Honours) in Software Engineering'),
('200277812234', 'Sanduni Tharika Silva', 'sandu.silva@gmail.com', '0765544332', '104, High Level Road, Maharagama', 'Female', 'BSc (Hons) Business Information Systems'),
('200301938120', 'Nishadi Nisansala Abeykoon', 'nishadifdz21@gmail.com', '0752460694', '69, Prince Street, Colombo 11', 'Female', 'Bachelor of Science (Honours) in Software Engineering'),
('200355410982', 'Mohamed Shiyam Rizvi', 'shiyam.riz@outlook.com', '0754433221', '88/2, Hill Street, Dehiwala', 'Male', 'B.Sc. (Honors) IT in Cyber Security'),
('200357609215', 'Trishani Silva', 'trixi1052@gmail.com', '0779919839', '188, Vajiragnana Mw, Colombo 09', 'Female', 'Higher Diploma in Human Resource Management'),
('911042754V', 'Kalinga Weerasekara', 'kalinga23@gmail.com', '0782824077', '122/119, Justice Akbar Mw, Colombo 02', 'Male', 'Master of Business Administration');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
