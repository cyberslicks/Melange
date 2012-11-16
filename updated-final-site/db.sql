-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2012 at 03:59 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `melange`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `feed_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(1, 'cbkjdc', 'lol@gmail.com', 'acda jcbjkcb akjcbak\r\nbsckj b', '2012-10-08 21:40:49');
INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(2, 'cbkjdc', 'lol@gmail.com', 'acda jcbjkcb akjcbak\r\nbsckj b', '2012-10-08 21:41:04');
INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(3, 'cbkjdc', 'lol@gmail.com', 'acda jcbjkcb akjcbak\r\nbsckj b', '2012-10-08 21:41:34');
INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(4, 'jk', 'lol@lol.com', 'jacca lkancl', '2012-10-08 21:43:02');
INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(5, 'jk', 'lol@lol.com', 'jacca lkancl', '2012-10-08 21:43:09');
INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(6, 'jk', 'lol@lol.com', 'jacca lkancl', '2012-10-08 21:44:44');
INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(7, 'jk', 'lol@lol.com', 'jacca lkancl', '2012-10-08 21:45:33');
INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(8, 'jk', 'lol@lol.com', 'jacca lkancl', '2012-10-08 21:46:45');
INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(9, 'jk', 'lol@lol.com', 'jacca lkancl', '2012-10-08 21:47:25');
INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(10, 'jk', 'lol@lol.com', 'jacca lkancl', '2012-10-08 21:48:44');
INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(11, 'jk', 'lol@lol.com', 'jacca lkancl', '2012-10-08 21:49:33');
INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(12, 'ssf', 'ada@hjk.com', 'aklccacas', '2012-10-08 21:58:33');
INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(13, 'ssf', 'ada@hjk.com', 'aklccacas', '2012-10-08 21:59:14');
INSERT INTO `feedback` (`user_id`, `name`, `email`, `msg`, `feed_date`) VALUES(14, 'ssf', 'ada@hjk.com', 'aklccacas', '2012-10-08 22:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL,
  `feed_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`user_id`, `email`, `feed_date`) VALUES(1, 'mayankbhola@gmail.com', '2012-10-08 23:08:27');
INSERT INTO `newsletter` (`user_id`, `email`, `feed_date`) VALUES(2, 'mayankbhola@gmail.com', '2012-10-08 23:09:23');
INSERT INTO `newsletter` (`user_id`, `email`, `feed_date`) VALUES(3, 'phaaji@gmail.com', '2012-10-09 10:10:14');
INSERT INTO `newsletter` (`user_id`, `email`, `feed_date`) VALUES(4, 'jkjcnajcb@jkjk.com', '2012-10-11 19:22:47');
INSERT INTO `newsletter` (`user_id`, `email`, `feed_date`) VALUES(5, 'jklj@jlkj.com', '2012-10-11 19:23:52');
INSERT INTO `newsletter` (`user_id`, `email`, `feed_date`) VALUES(6, 'jkjjk@jkjllllll.com', '2012-10-11 19:24:07');
INSERT INTO `newsletter` (`user_id`, `email`, `feed_date`) VALUES(7, 'njknn.sds@gmail.com', '2012-10-11 23:49:26');
INSERT INTO `newsletter` (`user_id`, `email`, `feed_date`) VALUES(8, 'varunda@gmail.com', '2012-10-12 10:01:00');
INSERT INTO `newsletter` (`user_id`, `email`, `feed_date`) VALUES(9, 'varundu@gail.com', '2012-10-12 13:34:46');

-- --------------------------------------------------------

--
-- Table structure for table `searchbar`
--

CREATE TABLE `searchbar` (
  `search` varchar(20) DEFAULT NULL,
  `data` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searchbar`
--

INSERT INTO `searchbar` (`search`, `data`) VALUES('text', 'doing');
INSERT INTO `searchbar` (`search`, `data`) VALUES('button', 'property');
INSERT INTO `searchbar` (`search`, `data`) VALUES('property', 'nice one');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `first` varchar(20) NOT NULL,
  `last` varchar(40) NOT NULL,
  `username` varchar(80) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `day` varchar(2) NOT NULL,
  `year` varchar(4) NOT NULL,
  `registration_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(2, 'Larry', 'Ullman', 'email@example.com', 'e727d1464ae12436e899a726da5b2f11d8381b26', '22', '1992', '2012-10-02 02:42:11');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(3, 'Larry', 'Ullman', 'email@example.com', 'e727d1464ae12436e899a726da5b2f11d8381b26', '22', '1992', '2012-10-02 02:43:50');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(12, 'varun', 'malhotra', 'varun', 'hello123', '22', '1992', '2012-10-07 20:45:12');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(13, 'mayank', 'bhola', 'mayank', '123456', '11', '2000', '2012-10-08 00:44:01');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(14, 'mayank', 'lol', 'lol', '1234567890', '12', '1992', '2012-10-09 09:58:28');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(15, 'may', 'bhola', 'lolo', '123123', '03', '1992', '2012-10-12 01:31:20');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(16, 'may', 'bhola', 'lolo', '123123', '03', '1992', '2012-10-12 01:33:59');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(17, 'may', 'bhola', 'lolo', '123123', '03', '1992', '2012-10-12 01:34:25');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(18, 'may', 'bhola', 'lolo', '123123', '03', '1992', '2012-10-12 01:34:25');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(19, 'may', 'bhola', '123', 'mayank', '03', '1992', '2012-10-12 01:34:57');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(20, 'tulla', 'bhonsda', 'bhatulla', 'tulika', '2', '1985', '2012-10-12 09:46:33');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(21, 'harsh', 'bhatia', 'harsh.bhatia', 'harsh123', '22', '2009', '2012-10-12 14:39:15');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(22, 'shivam', 'bansal', 'shivam.bansal', 'qwerty1', '87', '1992', '2012-10-12 14:55:32');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(23, 'mayankbh', 'lllll', '123mayank', 'mayank123', '03', '1992', '2012-10-12 15:58:33');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(24, 'mayank', 'bhola', 'mayank123', 'mayank123', '01', '1992', '2012-11-07 13:58:09');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(25, 'admin', 'admin', 'admin', 'a41acc7effe601de1dc2099a4e2fdd7c', '01', '1990', '2012-11-15 19:30:49');
INSERT INTO `users` (`user_id`, `first`, `last`, `username`, `pass`, `day`, `year`, `registration_date`) VALUES(26, 'bhatulla', 'bhatulla', 'bhatula', '51f943b9aecf14cb3f55a1cbe369bb08', '01', '1990', '2012-11-16 10:31:14');
