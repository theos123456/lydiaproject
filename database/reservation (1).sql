-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2019 at 02:31 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(9) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `email`, `comments`) VALUES
(1, 'kim@kim.co.ug', '');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `house_id` int(11) NOT NULL auto_increment,
  `district` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rooms` int(11) NOT NULL,
  `limitation` int(11) NOT NULL,
  `washing-room` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `userid` int(9) NOT NULL,
  `bank_account` varchar(255) NOT NULL,
  PRIMARY KEY  (`house_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`house_id`, `district`, `sector`, `image`, `rooms`, `limitation`, `washing-room`, `kitchen`, `type`, `description`, `price`, `userid`, `bank_account`) VALUES
(20, 'gasabo', 'kacyiru', 'uploads/download (4).jpg', 222, 22, 4454, 45454, 'single', 'nfhfhfhfhhf', '56566', 1, '768676867');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `reserve_id` int(11) NOT NULL auto_increment,
  `house_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `slip` varchar(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `starting_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY  (`reserve_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`reserve_id`, `house_id`, `email`, `slip`, `names`, `starting_date`, `end_date`) VALUES
(7, 12, 'byagutangaza@gmail.com', 'uploaded_slip/house11.jpg', 'byagutangaza theoneste', '2019-06-28', '2019-07-05'),
(6, 8, 'byagutangaza@gmail.com', 'uploaded_slip/how-to-build-a-theoretical-model (1).jpg', 'byagutangaza theoneste', '2019-06-26', '2019-06-29'),
(5, 1, 'byagutangaza@gmail.com', 'uploaded_slip/download (10).jpg', 'byagutangaza theoneste', '2019-06-28', '2019-06-29'),
(8, 12, 'byagutangaza@gmail.com', '', 'mdd dd', '2019-09-26', '2019-09-28'),
(9, 0, 'btheoneste@alphacomputer.rw', 'uploaded_slip/10003.jpg', 'kwibuka theo', '2019-09-25', '2019-09-26'),
(10, 0, 'btheoneste@alphacomputer.rw', 'uploaded_slip/10001 (1).jpg', 'kkkw kkwk', '2019-09-24', '2019-09-26'),
(11, 13, 'btheoneste@alphacomputer.rw', 'uploaded_slip/10003 (2).jpg', 'kwibuka pacific', '2019-09-25', '2019-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(9) NOT NULL auto_increment,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `location`, `email`, `phone`, `username`, `password`, `type`) VALUES
(1, 'kwibuka', 'theoneste', 'kigali', 'theo@theo.com', '722783947', 'theos', 'theos', 'publisher'),
(2, 'uwayilege', 'lydia', 'kigali', 'lydia@gmail.com', '+25789658999', 'lydia', 'lydia', 'admin'),
(6, 'mupenzi', 'justin', 'gasabo', 'mupenzi@gmail.com', '0728326032', 'mupenzi', 'mupenzi', 'publisher');
