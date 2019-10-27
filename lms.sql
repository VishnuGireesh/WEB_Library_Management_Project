-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 07:11 PM
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
(1, 'sudheesh G', 'zz', 'zz', '2019-10-05', 44, 44, 44, 'def', '2.JPG'),
(2, 'qqqq', 'qq', 'ss', '2019-10-04', 23, 45, 45, 'def', 'WIN_20180226_15_41_09_Pro.jpg');

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
(1, 1234, 'sudheesh G', 3, '123-456-7896', 'vishnugireesh310630@gmail.com', '--choose--', '2019-10-26', '0000-00-00', 'admin'),
(2, 1234, 'sudheesh G', 3, '123-456-7896', 'vishnugireesh310630@gmail.com', 'qqqq', '2019-10-26', '0000-00-00', 'admin'),
(3, 456, 'sudheesh G', 3, '974-612-7107', 'vishnugireesh310630@gmail.com', 'sudheesh G', '2019-10-26', '0000-00-00', 're'),
(4, 123456, 'ww', 3, '123-789-9632', 'vishnugireesh310630@gmail.com', 'sudheesh G', '2019-10-26', '0000-00-00', 'rt'),
(5, 1234, 'sudheesh G', 3, '123-456-7896', 'vishnugireesh310630@gmail.com', 'sudheesh G', '2019-10-26', '0000-00-00', 'admin');

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
(1, 'sudheesh G', 'admin', 'wer', 'vishnugireesh310630@gmail.com', '123-456-7896', 3, 1234, 'yes'),
(2, 'ww', 'rt', 'rt', 'vishnugireesh310630@gmail.com', '123-789-9632', 3, 123456, 'no'),
(3, 'sudheesh G', 're', 'res', 'vishnugireesh310630@gmail.com', '974-612-7107', 3, 456, 'no');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studreg`
--
ALTER TABLE `studreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
