-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 04:54 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `uname`, `pass`, `email`) VALUES
(1, 'abc', 'def', 'abc', 'def@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `author` varchar(25) NOT NULL,
  `publication` varchar(30) NOT NULL,
  `p_date` date NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `a_qty` int(11) NOT NULL,
  `adm_name` varchar(25) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `publication`, `p_date`, `price`, `qty`, `a_qty`, `adm_name`, `image`) VALUES
(8, 'The Lost Symbol', 'Dan Brown ', 'Doubleday', '2019-10-01', 125, 125, 125, 'def', '1.jpg'),
(9, 'Animal Farm', 'George Orwell', ' NAL ', '2019-10-03', 255, 78, 78, 'def', '2.jpg'),
(10, 'Unstoppable', 'Tim Green ', ' HarperCollins', '2019-10-11', 25, 123, 123, 'def', '3.jpg'),
(11, 'The Alchemist', ' Paulo Coelho', 'HarperCollins', '2019-10-18', 1000, 500, 499, 'def', '4.jpg'),
(12, 'Saving Fish from Drowning', 'Amy Tan ', 'Ballantine Books', '2019-09-05', 124, 50, 50, 'def', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` int(11) NOT NULL,
  `s_eno` int(11) NOT NULL,
  `s_name` varchar(35) NOT NULL,
  `s_sem` int(11) NOT NULL,
  `s_contact` varchar(15) NOT NULL,
  `s_email` varchar(35) NOT NULL,
  `b_name` varchar(42) NOT NULL,
  `b_issue_date` date NOT NULL,
  `b_return_date` date NOT NULL,
  `s_uname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `s_eno`, `s_name`, `s_sem`, `s_contact`, `s_email`, `b_name`, `b_issue_date`, `b_return_date`, `s_uname`) VALUES
(10, 456, 'sudheesh G', 3, '974-612-7107', 'vishnugireesh310630@gmail.com', 'sudheesh G', '2019-11-04', '2019-11-04', 're'),
(11, 123, 'Manu', 2, '123-456-7896', 'manu@gmail.com', 'The Alchemist', '2019-11-17', '0000-00-00', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `studreg`
--

CREATE TABLE `studreg` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `sem` int(11) NOT NULL,
  `eno` int(11) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studreg`
--

INSERT INTO `studreg` (`id`, `name`, `uname`, `pass`, `email`, `phone`, `sem`, `eno`, `status`) VALUES
(4, 'Manu', 'student', 'student', 'manu@gmail.com', '123-456-7896', 2, 123, 'yes'),
(5, 'Sankar', 'sankar', 'sankar', 'sankar123aaaaaaaa@gmail.com', '456-789-5285', 4, 456, 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studreg`
--
ALTER TABLE `studreg`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `studreg`
--
ALTER TABLE `studreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
