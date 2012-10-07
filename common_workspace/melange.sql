-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2012 at 08:14 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `melange`
--

-- --------------------------------------------------------

--
-- Table structure for table `searchbar`
--

CREATE TABLE IF NOT EXISTS `searchbar` (
  `search` varchar(20) DEFAULT NULL,
  `data` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searchbar`
--

INSERT INTO `searchbar` (`search`, `data`) VALUES
('text', 'doing'),
('button', 'property'),
('property', 'nice one');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `first` varchar(20) NOT NULL,
  `last` varchar(40) NOT NULL,
  `username` varchar(80) NOT NULL,
  `pass` char(40) NOT NULL,
  `day` varchar(2) NOT NULL,
  `year` varchar(4) NOT NULL,
  `registration_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES
(2, 'Larry', 'Ullman', 'email@example.com', 'hell', '22', '1992', '2012-10-02 02:42:11'),
(3, 'Larry', 'Ullman', 'email@example.com', 'hehelol', '22', '1992', '2012-10-02 02:43:50'),
(12, 'varun', 'malhotra', 'varun', 'hello123', '22', '1992', '2012-10-07 20:45:12');
