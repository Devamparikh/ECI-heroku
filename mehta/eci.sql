-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 09:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eci`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_link`
--

CREATE TABLE `add_link` (
  `link_id` int(99) NOT NULL,
  `class_number` int(99) NOT NULL,
  `subject_id` int(99) NOT NULL,
  `board_name` varchar(255) NOT NULL,
  `link_url` text NOT NULL,
  `link_desc` text NOT NULL,
  `time_stamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(99) NOT NULL,
  `admin_user_id` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_user_id`, `admin_pass`) VALUES
(1, 'Main', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(99) NOT NULL,
  `class_number` int(99) NOT NULL,
  `subject_id` int(99) NOT NULL,
  `board_name` varchar(255) NOT NULL,
  `assignment` text NOT NULL,
  `submission_date` date NOT NULL,
  `filename` text NOT NULL,
  `time_stamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `class_number`, `subject_id`, `board_name`, `assignment`, `submission_date`, `filename`, `time_stamp`) VALUES
(1, 0, 0, 'dfghj', '', '0000-00-00', '', ''),
(3, 12, 1, 'GSEB', '                      <h4><u>Assignment: Heading</u></h4>\r\n                      <p>The data of assignment that is to be assigned to students has to be entered here. You can use different features of the text editor according to you convinience.</p>\r\n                      <ul>\r\n                        <li>Example List item one</li>\r\n                        <li>Example List item two</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                       <p>-Team Edu Crafters Institute.</p>\r\n                    ', '2021-04-30', '608aa556913546.74305445.pdf', '2021-04-29 17:53:50'),
(4, 12, 1, 'GSEB', '                      <h4><u>Assignment: Heading</u></h4>\r\n                      <p>The data of assignment that is to be assigned to students has to be entered here. You can use different features of the text editor according to you convinience.</p>\r\n                      <ul>\r\n                        <li>Example List item one</li>\r\n                        <li>Example List item two</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                       <p>-Team Edu Crafters Institute.</p>\r\n                    ', '2021-05-19', '609ec0b70334c1.87072463.jpg', '2021-05-14 23:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(99) NOT NULL,
  `attendance_entry_id` int(99) NOT NULL,
  `attendance_date` date NOT NULL,
  `attendance_time` text NOT NULL,
  `student_roll` text NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_std` int(99) NOT NULL,
  `student_board` varchar(255) NOT NULL,
  `student_subject` varchar(255) NOT NULL,
  `present` varchar(255) NOT NULL,
  `late` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `attendance_entry_id`, `attendance_date`, `attendance_time`, `student_roll`, `student_name`, `student_std`, `student_board`, `student_subject`, `present`, `late`) VALUES
(32, 8, '2021-05-14', '2021-05-14 04:08:15', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 1),
(33, 8, '2021-05-14', '2021-05-14 04:08:15', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 0),
(34, 9, '2021-05-14', '2021-05-14 04:13:45', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 1),
(35, 9, '2021-05-14', '2021-05-14 04:13:45', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 0),
(36, 10, '2021-05-14', '2021-05-14 12:09:34', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 0),
(37, 10, '2021-05-14', '2021-05-14 12:09:34', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 0),
(38, 11, '2021-05-14', '2021-05-14 12:29:07', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 0),
(39, 11, '2021-05-14', '2021-05-14 12:29:07', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 0),
(40, 12, '2021-05-14', '2021-05-14 12:32:12', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 0),
(41, 12, '2021-05-14', '2021-05-14 12:32:12', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 0),
(42, 13, '2021-05-14', '2021-05-14 12:37:03', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 0),
(43, 13, '2021-05-14', '2021-05-14 12:37:03', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 0),
(44, 14, '2021-05-14', '2021-05-14 12:38:30', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 0),
(45, 14, '2021-05-14', '2021-05-14 12:38:30', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 0),
(46, 15, '2021-05-14', '2021-05-14 12:46:14', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 0),
(47, 15, '2021-05-14', '2021-05-14 12:46:14', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 0),
(48, 16, '2021-05-14', '2021-05-14 15:46:14', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 0),
(49, 16, '2021-05-14', '2021-05-14 15:46:14', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 0),
(51, 17, '2021-05-14', '2021-05-14 15:48:48', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 0),
(52, 17, '2021-05-14', '2021-05-14 15:48:48', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 0),
(54, 18, '2021-05-14', '2021-05-14 15:51:09', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 0),
(55, 18, '2021-05-14', '2021-05-14 15:51:09', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 0),
(56, 19, '2021-05-14', '2021-05-14 15:51:24', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 0),
(57, 19, '2021-05-14', '2021-05-14 15:51:24', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 0),
(61, 20, '2021-05-14', '2021-05-14 17:30:31', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 1),
(69, 22, '2021-05-14', '2021-05-14 17:46:51', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 0),
(70, 22, '2021-05-14', '2021-05-14 17:46:51', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 1),
(71, 23, '2021-05-14', '2021-05-14 17:47:21', 'ECI3826', 'Devam Parikh', 12, 'GSEB', '1', '1', 1),
(73, 23, '2021-05-14', '2021-05-14 17:47:21', 'ECI3827', 'Rushabh Mehta', 12, 'GSEB', '1', '1', 0),
(76, 23, '2021-05-14', '2021-05-14 17:47:21', 'ECI3828', 'Chirag', 12, 'GSEB', '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_entry`
--

CREATE TABLE `attendance_entry` (
  `attendance_entry_id` int(99) NOT NULL,
  `attendance_date` date NOT NULL,
  `attendance_time` text NOT NULL,
  `student_std` int(99) NOT NULL,
  `student_board` varchar(255) NOT NULL,
  `student_subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_entry`
--

INSERT INTO `attendance_entry` (`attendance_entry_id`, `attendance_date`, `attendance_time`, `student_std`, `student_board`, `student_subject`) VALUES
(8, '2021-05-14', '2021-05-14 04:08:15', 12, 'GSEB', '1'),
(9, '2021-05-14', '2021-05-14 04:13:45', 12, 'GSEB', '1'),
(10, '2021-05-14', '2021-05-14 12:09:34', 12, 'GSEB', '1'),
(11, '2021-05-14', '2021-05-14 12:29:07', 12, 'GSEB', '1'),
(12, '2021-05-14', '2021-05-14 12:32:12', 12, 'GSEB', '1'),
(13, '2021-05-14', '2021-05-14 12:37:03', 12, 'GSEB', '1'),
(14, '2021-05-14', '2021-05-14 12:38:30', 12, 'GSEB', '1'),
(15, '2021-05-14', '2021-05-14 12:46:14', 12, 'GSEB', '1'),
(16, '2021-05-14', '2021-05-14 15:46:14', 12, 'GSEB', '1'),
(17, '2021-05-14', '2021-05-14 15:48:48', 12, 'GSEB', '1'),
(18, '2021-05-14', '2021-05-14 15:51:09', 12, 'GSEB', '1'),
(19, '2021-05-14', '2021-05-14 15:51:24', 12, 'GSEB', '1'),
(20, '2021-05-14', '2021-05-14 17:30:31', 12, 'GSEB', '1'),
(22, '2021-05-14', '2021-05-14 17:46:51', 12, 'GSEB', '1'),
(23, '2021-05-14', '2021-05-14 17:47:21', 12, 'GSEB', '1'),
(24, '2021-06-03', '2021-06-03 12:31:50', 12, 'GSEB', '1');

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `board_id` int(99) NOT NULL,
  `board_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`board_id`, `board_name`) VALUES
(1, 'ISC'),
(2, 'ICSE'),
(3, 'CBSE'),
(4, 'GSEB'),
(5, 'IB'),
(6, 'Cambridge');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(99) NOT NULL,
  `class_number` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_number`) VALUES
(1, 9),
(2, 10),
(3, 11),
(4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `fee_id` int(99) NOT NULL,
  `student_id` int(99) NOT NULL,
  `amount` double NOT NULL,
  `mode` text NOT NULL,
  `date` text NOT NULL,
  `refer` text NOT NULL,
  `fee_destribution` text NOT NULL,
  `installments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`fee_id`, `student_id`, `amount`, `mode`, `date`, `refer`, `fee_destribution`, `installments`) VALUES
(1, 48, 10000, 'Cash', '2021-05-04', 'Devam Parikh', 'Three installments', '1'),
(3, 48, 10000, 'Cash', '2021-05-12', 'Jatin Parikh', 'Three installments', '2'),
(5, 48, 30000, 'Online Transfer', '2021-05-12', '9978816621', 'Fully Paid', '1');

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `file_upload_id` int(99) NOT NULL,
  `file_for_class` int(99) NOT NULL,
  `file_for_board` varchar(255) NOT NULL,
  `file_for_subject` int(99) NOT NULL,
  `chap_number` varchar(255) NOT NULL,
  `chap_name` varchar(255) NOT NULL,
  `brief_info` text NOT NULL,
  `filename` text NOT NULL,
  `time_stamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_upload`
--

INSERT INTO `file_upload` (`file_upload_id`, `file_for_class`, `file_for_board`, `file_for_subject`, `chap_number`, `chap_name`, `brief_info`, `filename`, `time_stamp`) VALUES
(1, 12, 'GSEB', 1, '1 and 2', 'basic math', 'm goals gives', '608701bde12c75.20468220.pdf', '2021-04-26 23:39:01'),
(2, 12, 'GSEB', 1, '1 and 2', 'basic math', 'm goals gives', '6087029e0e6180.95257412.pdf', '2021-04-26 23:42:46'),
(6, 12, 'GSEB', 1, '1 and 2', 'basic math', 'm goals gives', '609eb62990fdd6.08593545.jpeg', '2021-05-14 23:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `marks_entry`
--

CREATE TABLE `marks_entry` (
  `marks_entry_id` int(99) NOT NULL,
  `exam_date` date NOT NULL,
  `class_number` int(99) NOT NULL,
  `board_name` varchar(255) NOT NULL,
  `subject_id` int(99) NOT NULL,
  `chap_name` varchar(255) NOT NULL,
  `chap_number` varchar(255) NOT NULL,
  `total_marks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks_entry`
--

INSERT INTO `marks_entry` (`marks_entry_id`, `exam_date`, `class_number`, `board_name`, `subject_id`, `chap_name`, `chap_number`, `total_marks`) VALUES
(22, '2021-04-21', 12, 'GSEB', 1, 'basic math', '1 and 2', '30'),
(23, '2021-05-01', 12, 'GSEB', 6, 'basic physics', '1 and 2', '30'),
(24, '2021-05-02', 12, 'GSEB', 1, 'basic math final', '1 and 2', '30'),
(25, '2021-04-29', 12, 'GSEB', 1, 'basic math final', '1 and 2', '50'),
(26, '2021-04-28', 12, 'GSEB', 1, 'basic maths', '1 and 2', '50'),
(27, '2021-04-30', 12, 'GSEB', 1, 'basic math', '1 and 2', '100'),
(28, '2021-05-03', 12, 'GSEB', 1, 'basic math', '1 and 2', '100'),
(29, '2021-05-02', 12, 'GSEB', 1, 'basic math', '1 and 2', '100'),
(32, '2021-05-12', 12, 'GSEB', 1, 'basic mathq', '1 and 2', '50'),
(33, '2021-06-01', 12, 'GSEB', 1, 'set', '1', '30');

-- --------------------------------------------------------

--
-- Table structure for table `news_for_student`
--

CREATE TABLE `news_for_student` (
  `news_id` int(99) NOT NULL,
  `class_number` int(99) NOT NULL,
  `subject_id` int(99) NOT NULL,
  `board_name` varchar(255) NOT NULL,
  `student_roll` varchar(255) NOT NULL,
  `assignment` text NOT NULL,
  `publish_date` text NOT NULL,
  `time_stamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_for_student`
--

INSERT INTO `news_for_student` (`news_id`, `class_number`, `subject_id`, `board_name`, `student_roll`, `assignment`, `publish_date`, `time_stamp`) VALUES
(1, 0, 0, 'ghj', '0', '', '', ''),
(3, 12, 1, 'GSEB', '0', '                      <h4><u>Assignment: Heading</u></h4>\r\n                      <p>The data of assignment that is to be assigned to students has to be entered here. You can use different features of the text editor according to you convinience.</p>\r\n                      <ul>\r\n                        <li>Example List item one</li>\r\n                        <li>Example List item two</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                       <p>-Team Edu Crafters Institute.</p>\r\n                    ', '2021-05-12', '2021-05-11 17:12:28'),
(6, 12, 1, 'GSEB', '', '                      <h4><u>Aqssignment: Heading</u></h4>\r\n                      <p>The data of assignment that is to be assigned to students has to be entered here. You can use different features of the text editor according to you convinience.</p>\r\n                      <ul>\r\n                        <li>Example List item one</li>\r\n                        <li>Example List item two</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                       <p>-Team Edu Crafters Institute.</p>\r\n                    ', '2021-05-12', '2021-05-11 17:19:12'),
(7, 12, 1, 'GSEB', 'ECI3828', '                      <h4><u>Awssignment: Heading</u></h4>\r\n                      <p>The data of assignment that is to be assigned to students has to be entered here. You can use different features of the text editor according to you convinience.</p>\r\n                      <ul>\r\n                        <li>Example List item one</li>\r\n                        <li>Example List item two</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                       <p>-Team Edu Crafters Institute.</p>\r\n                    ', '2021-05-12', '2021-05-11 17:30:25'),
(8, 12, 1, 'GSEB', 'all', '                      <h4><u>Assignment: Heading</u></h4>\r\n                      <p>The data of assignment that is to be assigned to students has to be entered here. You can use different features of the text editor according to you convinience.</p>\r\n                      <ul>\r\n                        <li>Example List item one</li>\r\n                        <li>Example List item two</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                       <p>-Team Edu Crafters Institute.</p>\r\n                    ', '2021-05-18', '2021-05-11 17:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

CREATE TABLE `popup` (
  `popup_id` int(99) NOT NULL,
  `class_number` int(99) NOT NULL,
  `subject_id` int(99) NOT NULL,
  `board_name` varchar(255) NOT NULL,
  `student_roll` varchar(255) NOT NULL,
  `popup_msg` text NOT NULL,
  `publish_date` text NOT NULL,
  `time_stamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `popup`
--

INSERT INTO `popup` (`popup_id`, `class_number`, `subject_id`, `board_name`, `student_roll`, `popup_msg`, `publish_date`, `time_stamp`) VALUES
(3, 12, 1, 'GSEB', 'ECI3828', '                      <h4><u>Assisgnment: Heading</u></h4>\r\n                      <p>The data of assignment that is to be assigned to students has to be entered here. You can use different features of the text editor according to you convinience.</p>\r\n                      <ul>\r\n                        <li>Example List item one</li>\r\n                        <li>Example List item two</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                       <p>-Team Edu Crafters Institute.</p>\r\n                    ', '2021-05-12', '2021-05-11 20:42:15'),
(4, 0, 1, 'Two installments', '', '                      <h4><u>Assignment: Heading</u></h4>\r\n                      <p>The data of assignment that is to be assigned to students has to be entered here. You can use different features of the text editor according to you convinience.</p>\r\n                      <ul>\r\n                        <li>Example List item one</li>\r\n                        <li>Example List item two</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                       <p>-Team Edu Crafters Institute.</p>\r\n                    ', '2021-05-20', '2021-05-13 10:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `professor_id` int(99) NOT NULL,
  `professor_name` varchar(255) NOT NULL,
  `professor_username` varchar(255) NOT NULL,
  `professor_contact` bigint(20) NOT NULL,
  `professor_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`professor_id`, `professor_name`, `professor_username`, `professor_contact`, `professor_pass`) VALUES
(1, 'Jatin Sir', 'eci007', 0, '007'),
(4, 'Jatin Gondalia', 'ECIP0007', 9586222999, 'ECIP0007');

-- --------------------------------------------------------

--
-- Table structure for table `professor_given_board`
--

CREATE TABLE `professor_given_board` (
  `professor_given_board_id` int(99) NOT NULL,
  `professor_id` int(99) NOT NULL,
  `professor_username` varchar(255) NOT NULL,
  `board_id` int(99) NOT NULL,
  `board_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor_given_board`
--

INSERT INTO `professor_given_board` (`professor_given_board_id`, `professor_id`, `professor_username`, `board_id`, `board_name`) VALUES
(11, 4, 'ECIP0007', 2, 'ICSE'),
(12, 4, 'ECIP0007', 3, 'CBSE'),
(13, 4, 'ECIP0007', 4, 'GSEB');

-- --------------------------------------------------------

--
-- Table structure for table `professor_given_class`
--

CREATE TABLE `professor_given_class` (
  `professor_given_class_id` int(99) NOT NULL,
  `professor_id` int(99) NOT NULL,
  `professor_username` varchar(255) NOT NULL,
  `class_id` int(99) NOT NULL,
  `class_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor_given_class`
--

INSERT INTO `professor_given_class` (`professor_given_class_id`, `professor_id`, `professor_username`, `class_id`, `class_number`) VALUES
(8, 4, 'ECIP0007', 3, 11),
(9, 4, 'ECIP0007', 4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `professor_given_subject`
--

CREATE TABLE `professor_given_subject` (
  `professor_given_subject_id` int(99) NOT NULL,
  `professor_id` int(99) NOT NULL,
  `professor_username` varchar(255) NOT NULL,
  `subject_id` int(99) NOT NULL,
  `subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor_given_subject`
--

INSERT INTO `professor_given_subject` (`professor_given_subject_id`, `professor_id`, `professor_username`, `subject_id`, `subject_name`) VALUES
(6, 4, 'ECIP0007', 1, 'Maths'),
(7, 4, 'ECIP0007', 6, 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `ques_paper`
--

CREATE TABLE `ques_paper` (
  `ques_paper_id` int(99) NOT NULL,
  `class_number` int(99) NOT NULL,
  `subject_id` int(99) NOT NULL,
  `board_name` varchar(255) NOT NULL,
  `paper_year` int(99) NOT NULL,
  `paper_type` varchar(255) NOT NULL,
  `filename` text NOT NULL,
  `timestamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ques_paper`
--

INSERT INTO `ques_paper` (`ques_paper_id`, `class_number`, `subject_id`, `board_name`, `paper_year`, `paper_type`, `filename`, `timestamp`) VALUES
(1, 12, 1, 'GSEB', 2001, 'march', '608b9705adb746.07822406.pdf', '2021-04-30 11:05:01'),
(3, 12, 1, 'GSEB', 2020, 'march', '609ec6eb615d19.27030092.jpg', '2021-05-15 00:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `salary_insights`
--

CREATE TABLE `salary_insights` (
  `salary_insights_id` int(99) NOT NULL,
  `professor_username` varchar(255) NOT NULL,
  `class_number` int(99) NOT NULL,
  `board_name` varchar(255) NOT NULL,
  `subject_id` int(99) NOT NULL,
  `from_date` text NOT NULL,
  `to_date` text NOT NULL,
  `lecture_no` int(99) NOT NULL,
  `amount_per_lecture` double NOT NULL,
  `total_salary` double NOT NULL,
  `accept` int(99) NOT NULL,
  `reject` int(99) NOT NULL,
  `grievance` text NOT NULL,
  `paid` int(99) NOT NULL,
  `paid_on` text NOT NULL,
  `paid_through` varchar(255) NOT NULL,
  `paid_via` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary_insights`
--

INSERT INTO `salary_insights` (`salary_insights_id`, `professor_username`, `class_number`, `board_name`, `subject_id`, `from_date`, `to_date`, `lecture_no`, `amount_per_lecture`, `total_salary`, `accept`, `reject`, `grievance`, `paid`, `paid_on`, `paid_through`, `paid_via`) VALUES
(2, 'ECIP0007', 12, 'GSEB', 1, '2021-04-01', '2021-04-30', 25, 100, 2500, 1, 0, '', 1, '2021-05-19', 'Cash', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(99) NOT NULL,
  `student_roll` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_contact` bigint(20) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_father_name` varchar(255) NOT NULL,
  `student_father_contact` bigint(20) NOT NULL,
  `student_father_occ` varchar(255) NOT NULL,
  `student_mother_name` varchar(255) NOT NULL,
  `student_mother_contact` bigint(20) NOT NULL,
  `student_previous_std` varchar(255) NOT NULL,
  `student_previous_std_marks` int(99) NOT NULL,
  `student_dob` varchar(255) NOT NULL,
  `student_std` varchar(255) NOT NULL,
  `student_board` varchar(255) NOT NULL,
  `student_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_roll`, `student_name`, `student_contact`, `student_email`, `student_father_name`, `student_father_contact`, `student_father_occ`, `student_mother_name`, `student_mother_contact`, `student_previous_std`, `student_previous_std_marks`, `student_dob`, `student_std`, `student_board`, `student_pass`) VALUES
(48, 'ECI3826', 'Devam Parikh', 9978816621, '', '', 0, '', '', 0, '', 0, '', '12', 'GSEB', 'ECI3826'),
(49, 'ECI3827', 'Rushabh Mehta', 9876543215, '', '', 0, '', '', 0, '11', 0, '', '12', 'GSEB', 'ECI3827'),
(50, 'ECI3828', 'Chirag', 9876543210, '', '', 0, '', '', 0, '', 0, '', '12', 'GSEB', 'ECI3828'),
(53, 'ECI3803', '', 9874562130, '', '', 0, '', '', 0, '', 0, '', '10', 'GSEB', 'ECI3803'),
(54, 'ECI3804', '', 9874563210, '', '', 0, '', '', 0, '', 0, '', '10', 'GSEB', 'ECI3804'),
(55, 'ECI3805', '', 9874563210, '', '', 0, '', '', 0, '', 0, '', '11', 'GSEB', 'ECI3805'),
(56, 'ECI3806', '', 9876541230, '', '', 0, '', '', 0, '', 0, '', '11', 'GSEB', 'ECI3806'),
(57, 'ECI3807', '', 9874563210, '', '', 0, '', '', 0, '', 0, '', '11', 'GSEB', 'ECI3807');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `student_marks_id` int(99) NOT NULL,
  `marks_entry_id` int(99) NOT NULL,
  `exam_date` date NOT NULL,
  `class_number` int(99) NOT NULL,
  `board_name` varchar(255) NOT NULL,
  `subject_id` int(99) NOT NULL,
  `chap_name` varchar(255) NOT NULL,
  `chap_number` varchar(255) NOT NULL,
  `total_marks` text NOT NULL,
  `student_roll` varchar(255) NOT NULL,
  `student_marks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`student_marks_id`, `marks_entry_id`, `exam_date`, `class_number`, `board_name`, `subject_id`, `chap_name`, `chap_number`, `total_marks`, `student_roll`, `student_marks`) VALUES
(1, 0, '0000-00-00', 0, 'hgfd', 0, '', '', '', '', ''),
(2, 22, '2021-04-21', 12, 'GSEB', 1, 'basic math', '1 and 2', '30', 'ECI3826', '25'),
(3, 22, '2021-04-21', 12, 'GSEB', 1, 'basic math', '1 and 2', '30', 'ECI3827', '12'),
(4, 22, '2021-04-21', 12, 'GSEB', 1, 'basic math', '1 and 2', '30', 'ECI3828', '22'),
(5, 23, '2021-05-01', 12, 'GSEB', 6, 'basic physics', '1 and 2', '30', 'ECI3826', '25'),
(6, 24, '2021-05-02', 12, 'GSEB', 1, 'basic math final', '1 and 2', '30', 'ECI3826', 'AB'),
(7, 24, '2021-05-02', 12, 'GSEB', 1, 'basic math final', '1 and 2', '30', 'ECI3827', '14'),
(8, 24, '2021-05-02', 12, 'GSEB', 1, 'basic math final', '1 and 2', '30', 'ECI3828', '20'),
(9, 25, '2021-04-29', 12, 'GSEB', 1, 'basic math final', '1 and 2', '50', 'ECI3826', '50'),
(10, 25, '2021-04-29', 12, 'GSEB', 1, 'basic math final', '1 and 2', '50', 'ECI3827', '40'),
(11, 25, '2021-04-29', 12, 'GSEB', 1, 'basic math final', '1 and 2', '50', 'ECI3828', '40'),
(12, 26, '2021-04-28', 12, 'GSEB', 1, 'basic maths', '1 and 2', '50', 'ECI3826', '50'),
(13, 26, '2021-04-28', 12, 'GSEB', 1, 'basic maths', '1 and 2', '50', 'ECI3827', '20'),
(14, 26, '2021-04-28', 12, 'GSEB', 1, 'basic maths', '1 and 2', '50', 'ECI3828', '25'),
(15, 27, '2021-04-30', 12, 'GSEB', 1, 'basic math', '1 and 2', '100', 'ECI3826', '100'),
(16, 27, '2021-04-30', 12, 'GSEB', 1, 'basic math', '1 and 2', '100', 'ECI3827', '25'),
(17, 27, '2021-04-30', 12, 'GSEB', 1, 'basic math', '1 and 2', '100', 'ECI3828', '50'),
(18, 28, '2021-05-03', 12, 'GSEB', 1, 'basic math', '1 and 2', '100', 'ECI3826', '100'),
(19, 28, '2021-05-03', 12, 'GSEB', 1, 'basic math', '1 and 2', '100', 'ECI3827', '25'),
(20, 28, '2021-05-03', 12, 'GSEB', 1, 'basic math', '1 and 2', '100', 'ECI3828', '50'),
(21, 29, '2021-05-02', 12, 'GSEB', 1, 'basic math', '1 and 2', '100', 'ECI3826', '100'),
(22, 29, '2021-05-02', 12, 'GSEB', 1, 'basic math', '1 and 2', '100', 'ECI3827', '25'),
(23, 29, '2021-05-02', 12, 'GSEB', 1, 'basic math', '1 and 2', '100', 'ECI3828', '50'),
(30, 32, '2021-05-12', 12, 'GSEB', 1, 'basic mathq', '1 and 2', '50', 'ECI3826', '25'),
(31, 32, '2021-05-12', 12, 'GSEB', 1, 'basic mathq', '1 and 2', '50', 'ECI3827', 'AB'),
(32, 32, '2021-05-12', 12, 'GSEB', 1, 'basic mathq', '1 and 2', '50', 'ECI3828', '22'),
(33, 33, '2021-06-01', 12, 'GSEB', 1, 'set', '1', '30', 'ECI3826', '25'),
(34, 33, '2021-06-01', 12, 'GSEB', 1, 'set', '1', '30', 'ECI3827', '12'),
(35, 33, '2021-06-01', 12, 'GSEB', 1, 'set', '1', '30', 'ECI3828', '22');

-- --------------------------------------------------------

--
-- Table structure for table `student_opt_subject`
--

CREATE TABLE `student_opt_subject` (
  `student_opt_subject_id` int(99) NOT NULL,
  `student_id` int(99) NOT NULL,
  `student_roll` varchar(255) NOT NULL,
  `subject_id` int(99) NOT NULL,
  `subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_opt_subject`
--

INSERT INTO `student_opt_subject` (`student_opt_subject_id`, `student_id`, `student_roll`, `subject_id`, `subject_name`) VALUES
(18, 48, 'ECI3826', 1, 'Maths'),
(19, 48, 'ECI3826', 6, 'Physics'),
(22, 51, 'ECI3801', 1, 'Maths'),
(23, 51, 'ECI3801', 2, 'Science'),
(24, 51, 'ECI3801', 3, 'English'),
(25, 51, 'ECI3801', 4, 'Social Science'),
(26, 52, 'ECI3802', 1, 'Maths'),
(27, 52, 'ECI3802', 2, 'Science'),
(28, 52, 'ECI3802', 4, 'Social Science'),
(29, 53, 'ECI3803', 1, 'Maths'),
(30, 53, 'ECI3803', 2, 'Science'),
(31, 53, 'ECI3803', 3, 'English'),
(32, 53, 'ECI3803', 4, 'Social Science'),
(33, 54, 'ECI3804', 1, 'Maths'),
(34, 54, 'ECI3804', 2, 'Science'),
(35, 54, 'ECI3804', 4, 'Social Science'),
(36, 55, 'ECI3805', 1, 'Maths'),
(37, 55, 'ECI3805', 6, 'Physics'),
(41, 57, 'ECI3807', 6, 'Physics'),
(42, 57, 'ECI3807', 7, 'Chemistry'),
(43, 57, 'ECI3807', 8, 'Biology'),
(47, 0, 'ECI3828', 1, 'Maths'),
(48, 0, 'ECI3828', 7, 'Chemistry'),
(67, 49, 'ECI3827', 1, 'Maths'),
(75, 50, 'ECI3828', 1, 'Maths');

-- --------------------------------------------------------

--
-- Table structure for table `study_material`
--

CREATE TABLE `study_material` (
  `study_material_id` int(99) NOT NULL,
  `study_material_class` int(99) NOT NULL,
  `study_material_board` varchar(255) NOT NULL,
  `study_material_subject` int(99) NOT NULL,
  `study_material_desc` text NOT NULL,
  `time_stamp` text NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(99) NOT NULL,
  `subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
(1, 'Maths'),
(2, 'Science'),
(3, 'English'),
(4, 'Social Science'),
(6, 'Physics'),
(7, 'Chemistry'),
(8, 'Biology'),
(9, 'JEE'),
(10, 'GUJCET'),
(11, 'NEET');

-- --------------------------------------------------------

--
-- Table structure for table `upload_econtent`
--

CREATE TABLE `upload_econtent` (
  `upload_id` int(99) NOT NULL,
  `upload_for_class` varchar(255) NOT NULL,
  `upload_for_board` varchar(255) NOT NULL,
  `upload_for_subject` varchar(255) NOT NULL,
  `upload_desc` text NOT NULL,
  `upload_filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_econtent`
--

INSERT INTO `upload_econtent` (`upload_id`, `upload_for_class`, `upload_for_board`, `upload_for_subject`, `upload_desc`, `upload_filename`) VALUES
(1, '2', '2', '2', '', '5fc775220853e3.26435662.png'),
(2, '3', '3', '6', 'blah blah', '5fc77812819c38.59440616.png'),
(3, '3', '3', '6', 'blah blah', '5fc7783a1cb858.34870699.png'),
(4, '', 'GSEB', 'Physics', 'blah blah blah', '5fc77858d6bd34.42030956.png'),
(5, '', 'GSEB', 'Physics', 'blah blah blah', '5fc778920efc74.32152729.png'),
(6, '12', 'GSEB', 'Physics', 'dfghjklkjhgfds', '5fc778abb3fa58.84272930.png'),
(7, '12', 'GSEB', 'Maths', 'm goals gives clear di', '6087012520cf91.02226845.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_link`
--
ALTER TABLE `add_link`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `attendance_entry`
--
ALTER TABLE `attendance_entry`
  ADD PRIMARY KEY (`attendance_entry_id`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`board_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`file_upload_id`);

--
-- Indexes for table `marks_entry`
--
ALTER TABLE `marks_entry`
  ADD PRIMARY KEY (`marks_entry_id`);

--
-- Indexes for table `news_for_student`
--
ALTER TABLE `news_for_student`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`popup_id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`professor_id`);

--
-- Indexes for table `professor_given_board`
--
ALTER TABLE `professor_given_board`
  ADD PRIMARY KEY (`professor_given_board_id`);

--
-- Indexes for table `professor_given_class`
--
ALTER TABLE `professor_given_class`
  ADD PRIMARY KEY (`professor_given_class_id`);

--
-- Indexes for table `professor_given_subject`
--
ALTER TABLE `professor_given_subject`
  ADD PRIMARY KEY (`professor_given_subject_id`);

--
-- Indexes for table `ques_paper`
--
ALTER TABLE `ques_paper`
  ADD PRIMARY KEY (`ques_paper_id`);

--
-- Indexes for table `salary_insights`
--
ALTER TABLE `salary_insights`
  ADD PRIMARY KEY (`salary_insights_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`student_marks_id`);

--
-- Indexes for table `student_opt_subject`
--
ALTER TABLE `student_opt_subject`
  ADD PRIMARY KEY (`student_opt_subject_id`);

--
-- Indexes for table `study_material`
--
ALTER TABLE `study_material`
  ADD PRIMARY KEY (`study_material_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `upload_econtent`
--
ALTER TABLE `upload_econtent`
  ADD PRIMARY KEY (`upload_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_link`
--
ALTER TABLE `add_link`
  MODIFY `link_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `attendance_entry`
--
ALTER TABLE `attendance_entry`
  MODIFY `attendance_entry_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `board_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `fee_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `file_upload_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `marks_entry`
--
ALTER TABLE `marks_entry`
  MODIFY `marks_entry_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `news_for_student`
--
ALTER TABLE `news_for_student`
  MODIFY `news_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `popup`
--
ALTER TABLE `popup`
  MODIFY `popup_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `professor_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `professor_given_board`
--
ALTER TABLE `professor_given_board`
  MODIFY `professor_given_board_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `professor_given_class`
--
ALTER TABLE `professor_given_class`
  MODIFY `professor_given_class_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `professor_given_subject`
--
ALTER TABLE `professor_given_subject`
  MODIFY `professor_given_subject_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ques_paper`
--
ALTER TABLE `ques_paper`
  MODIFY `ques_paper_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salary_insights`
--
ALTER TABLE `salary_insights`
  MODIFY `salary_insights_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `student_marks_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `student_opt_subject`
--
ALTER TABLE `student_opt_subject`
  MODIFY `student_opt_subject_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `study_material`
--
ALTER TABLE `study_material`
  MODIFY `study_material_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `upload_econtent`
--
ALTER TABLE `upload_econtent`
  MODIFY `upload_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
