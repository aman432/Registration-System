-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2015 at 07:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_data`
--

CREATE TABLE IF NOT EXISTS `event_data` (
  `event_id` varchar(5) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_date` varchar(20) NOT NULL,
  `event_time` varchar(10) NOT NULL,
  `event_venue` varchar(50) NOT NULL,
  `event_cost` varchar(10) NOT NULL,
  `event_category` varchar(50) NOT NULL,
  `event_comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `murious10_registrations`
--

CREATE TABLE IF NOT EXISTS `murious10_registrations` (
  `t_timestamp` datetime(6) NOT NULL,
  `t_unique_id` varchar(50) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_gender` varchar(10) NOT NULL,
  `t_college` varchar(50) NOT NULL,
  `t_id` varchar(50) NOT NULL,
  `t_email` varchar(50) NOT NULL,
  `t_unique_ri` varchar(50) NOT NULL,
  `t_event_id` varchar(5) NOT NULL,
  `t_event_name` varchar(50) NOT NULL,
  `t_team_player` varchar(5) NOT NULL,
  `t_team_details` varchar(300) NOT NULL,
  `t_event_cost` varchar(10) NOT NULL,
  `t_cost_status` varchar(10) NOT NULL,
  `t_mobile_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murious10_registrations`
--

INSERT INTO `murious10_registrations` (`t_timestamp`, `t_unique_id`, `t_name`, `t_gender`, `t_college`, `t_id`, `t_email`, `t_unique_ri`, `t_event_id`, `t_event_name`, `t_team_player`, `t_team_details`, `t_event_cost`, `t_cost_status`, `t_mobile_no`) VALUES
('0000-00-00 00:00:00.000000', 'ju_141432_e3', 'Aman', 'male', 'JUIT', '141432', 'amanzoot@gmail.com', '359dd46127506478abd1be5d88542cbb', 'e3', 'E3', '1', '', '400', 'UNPAID', '9805047949'),
('0000-00-00 00:00:00.000000', 'ju_151545_e1', 'Roman', 'male', 'JUIT', '151545', 'a@g.c', 'b6b18517973e5a8181dfd70fddd5b40f', 'e1', 'E1', '1', '', '100', 'UNPAID', '9854547457');

-- --------------------------------------------------------

--
-- Table structure for table `personal_data`
--

CREATE TABLE IF NOT EXISTS `personal_data` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `uri` varchar(50) NOT NULL,
  `college_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_data`
--

INSERT INTO `personal_data` (`name`, `email`, `id_number`, `uri`, `college_name`) VALUES
('Abhijit', 'manuabhijit@gmail.com', '131307', 'qwertyuiqq', 'JUIT'),
('', '', '', '', 'JUIT'),
('jkhsa', 'dd@ff.com', '234234324', '3243243243', 'JUIT'),
('ewrwr', 'q@w.cm', '131307', '', 'dfsd ewr'),
('ewrwr', 'q@w.cm', '131307', '', 'dfsd ewr'),
('ewrwr', 'q@w.cm', '131307', '', 'dfsd ewr'),
('ewrwr', 'q@w.cm', '131307', '4234312412', 'dfsd ewr'),
('ewrwr', 'q@w.cm', '131307', '4234312412', 'dfsd ewr'),
('ewrwr', 'q@w.cm', '131307', '4234312412', 'dfsd ewr'),
('', 'q@w.cm', '131307', '', 'dfsd ewr'),
('', '', '', '', 'JUIT'),
('fsF', 'fsd@fh.cm', 'w23432423423', '5645654654', 'JUIT'),
('Abhijit', 'manu@gmail.com', '131307', '1q2w3e4r54', 'JUIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_data`
--
ALTER TABLE `event_data`
 ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `murious10_registrations`
--
ALTER TABLE `murious10_registrations`
 ADD FULLTEXT KEY `t_email` (`t_email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
