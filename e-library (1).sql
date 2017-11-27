-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 01:15 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(100) NOT NULL,
  `admin_fullname` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_previllege` int(10) NOT NULL,
  `admin_created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fullname`, `admin_email`, `admin_username`, `admin_pass`, `admin_previllege`, `admin_created`) VALUES
(1, 'Admin', 'Admin@gmail.com', 'admin123', '32250170a0dca92d53ec9624f336ca24', 1, '0000-00-00 00:00:00'),
(2, 'test', 'test@gmail.com', 'test11', '32250170a0dca92d53ec9624f336ca24', 1, '2017-11-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_message`
--

CREATE TABLE IF NOT EXISTS `admin_message` (
  `message_id` int(100) NOT NULL,
  `stud_id` int(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_message`
--

INSERT INTO `admin_message` (`message_id`, `stud_id`, `subject`, `message`) VALUES
(1, 3, 'Unable to find a specific book', 'am looking for geology for dry land but am unable to find it in the e-library, plae can you upload it if it is available at you disposal.'),
(2, 2, 'specific book type', 'am looking for geology for dry land but am unable to find it in the e-library, plae can you upload it if it is available at you disposal.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_reply`
--

CREATE TABLE IF NOT EXISTS `admin_reply` (
  `reply_id` int(100) NOT NULL,
  `stud_id` varchar(100) NOT NULL,
  `message_id` int(100) NOT NULL,
  `reply` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reply`
--

INSERT INTO `admin_reply` (`reply_id`, `stud_id`, `message_id`, `reply`) VALUES
(3, '2', 2, 'plae can you upload it if it is available at you disposal.  plae can you upload it if it is available at you disposal.'),
(4, '3', 1, 'plae can you upload it if it is available at you disposal.');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(100) NOT NULL,
  `book_title` varchar(200) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_isbn` varchar(50) NOT NULL,
  `book_summary` text NOT NULL,
  `book_stored_date` datetime NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `book_type` varchar(20) NOT NULL,
  `book_img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `book_author`, `book_isbn`, `book_summary`, `book_stored_date`, `faculty_id`, `book_type`, `book_img`) VALUES
(1, 'Data Structure', 'Daniel Smith', '1234567890', 'the effect for the prim change in m lie is learning new skills, i am where i am today because i \nprocastinate alot and not acting on my goals.\n\n\n', '0000-00-00 00:00:00', '1', '1', 'cover.jpg'),
(2, 'Engineering Mathematics', 'K. Strouds', '12345', 'feeding my mind with the good action pal i have set out abd the great ideas i want to \r\n		bring to life. the most in important goal i want to achieve is to become a\r\n		full stack developers in no time.', '2017-11-10 00:00:00', '2', '1', 'cover1.jpg'),
(3, 'Material Science', 'MacGyder', '0978563412', 'summary summary, summary summary,summary summary', '2017-11-14 00:00:00', '2', '1', 'cover1.jpg'),
(4, 'political economy', 'Dr. sagagi', '12345', 'political economy political economy political economypolitical economy', '2017-11-10 00:00:00', '4', '1', 'cover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_pdf`
--

CREATE TABLE IF NOT EXISTS `book_pdf` (
  `pdf_id` int(100) NOT NULL,
  `book_id` int(100) NOT NULL,
  `pdf_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_type`
--

CREATE TABLE IF NOT EXISTS `book_type` (
  `type_id` int(100) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_type`
--

INSERT INTO `book_type` (`type_id`, `type_name`) VALUES
(1, 'Hardcopy'),
(2, 'Softcopy');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_book`
--

CREATE TABLE IF NOT EXISTS `borrow_book` (
  `borrow_id` int(100) NOT NULL,
  `book_id` int(100) NOT NULL,
  `stud_id` int(100) NOT NULL,
  `borrow_active` int(10) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `borrow_date` varchar(50) NOT NULL,
  `return_date` varchar(50) NOT NULL,
  `book_img` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow_book`
--

INSERT INTO `borrow_book` (`borrow_id`, `book_id`, `stud_id`, `borrow_active`, `book_title`, `borrow_date`, `return_date`, `book_img`) VALUES
(1, 1, 2, 1, 'Data Structure ', '20-11-2017', '27-11-2017', 'cover.jpg'),
(2, 2, 2, 1, 'Engineering Mathematics ', '19-11-2017', '27-11-2017', 'cover1.jpg'),
(3, 2, 2, 1, 'Engineering Mathematics ', '19=11-2017', '27-11-2017', 'cover.jpg'),
(4, 1, 3, 1, 'Data Structure ', '15-11-2017', '27-11-2017', 'cover1.jpg'),
(5, 1, 2, 1, 'Data Structure ', '21-11-2017', '27-11-2017', 'cover.jpg'),
(8, 1, 2, 1, 'Data Structure search ', '21-11-2017', '27-11-2017', 'cover1.jpg'),
(9, 3, 2, 1, 'Material Science ', '21-11-2017', '27-11-2017', 'cover.jpg'),
(10, 1, 2, 0, 'Data Structure search ', '21-11-2017', '27-11-2017', 'cover1.jpg'),
(11, 2, 2, 0, 'Engineering Mathematics ', '21-11-2017', '27-11-2017', 'cover.jpg'),
(12, 1, 4, 1, 'Data Structure search ', '21-11-2017', '27-11-2017', 'cover.1.jpg'),
(13, 2, 4, 0, 'Engineering Mathematics ', '21-11-2017', '27-11-2017', 'cover.jpg'),
(14, 3, 3, 1, 'Material Science ', '21-11-2017', '27-11-2017', 'cover1.jpg'),
(15, 1, 2, 0, 'Data Structure ', '21-11-2017', '27-11-2017', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` int(100) NOT NULL,
  `faculty_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`) VALUES
(1, 'Computer Science And IT'),
(2, 'Engineering'),
(3, 'Education'),
(4, 'Social And Management Science'),
(5, 'Communication'),
(6, 'Art And Islamic Studies'),
(7, 'Science'),
(8, 'Health Science'),
(9, 'Earth And Enviromental Science'),
(10, 'Agriculture Science'),
(11, 'Clinical Science');

-- --------------------------------------------------------

--
-- Table structure for table `return_book`
--

CREATE TABLE IF NOT EXISTS `return_book` (
  `return_id` int(100) NOT NULL,
  `book_id` int(100) NOT NULL,
  `stud_id` int(100) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `return_date` varchar(100) NOT NULL,
  `return_active` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return_book`
--

INSERT INTO `return_book` (`return_id`, `book_id`, `stud_id`, `book_title`, `return_date`, `return_active`) VALUES
(1, 1, 2, 'Data Structure', '27-11-2017', 1),
(2, 1, 2, 'Data Structure  ', '27-11-2017', 1),
(3, 1, 3, 'Data Structure  ', '27-11-2017', 1),
(4, 3, 3, 'Material Science  ', '27-11-2017', 1),
(5, 1, 4, 'Data Structure search  ', '27-11-2017', 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `stud_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `Active` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Reg_no` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_previllege` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stud_id`, `first_name`, `last_name`, `Active`, `email`, `Reg_no`, `password`, `user_previllege`) VALUES
(2, 'Test', 'Ridwan', 1, 'Ridwan@gmail.com', 'ENG/14/CIT/00111', '32250170a0dca92d53ec9624f336ca24', '2'),
(3, 'Halima', 'Mubarak', 1, 'halima@gmail.com', 'ENG/15/CIT/00111', '32250170a0dca92d53ec9624f336ca24', '2'),
(4, 'shehu', 'nana', 1, 'shehunana@gmail.com', 'ENG/13/CIT/00111', '32250170a0dca92d53ec9624f336ca24', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_message`
--
ALTER TABLE `admin_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `admin_reply`
--
ALTER TABLE `admin_reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_pdf`
--
ALTER TABLE `book_pdf`
  ADD PRIMARY KEY (`pdf_id`);

--
-- Indexes for table `book_type`
--
ALTER TABLE `book_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `borrow_book`
--
ALTER TABLE `borrow_book`
  ADD PRIMARY KEY (`borrow_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `return_book`
--
ALTER TABLE `return_book`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin_message`
--
ALTER TABLE `admin_message`
  MODIFY `message_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin_reply`
--
ALTER TABLE `admin_reply`
  MODIFY `reply_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `book_pdf`
--
ALTER TABLE `book_pdf`
  MODIFY `pdf_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `book_type`
--
ALTER TABLE `book_type`
  MODIFY `type_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `borrow_book`
--
ALTER TABLE `borrow_book`
  MODIFY `borrow_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `return_book`
--
ALTER TABLE `return_book`
  MODIFY `return_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stud_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
