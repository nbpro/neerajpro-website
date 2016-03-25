-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 01, 2013 at 06:54 AM
-- Server version: 5.0.37
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `mess`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`name`, `username`, `pwd`) VALUES 
('Nishant Saurabh', 'nishu', 'nishu');

-- --------------------------------------------------------

-- 
-- Table structure for table `borrower`
-- 

CREATE TABLE `borrower` (
  `id` int(6) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `amt` int(6) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `borrower`
-- 

INSERT INTO `borrower` (`id`, `name`, `amt`) VALUES 
(1, 'Nishant Saurabh', 0),
(2, 'Vivekananda Jha', 100),
(3, 'Kumar Sawan', 170),
(4, 'Sourav Maity', 0),
(5, 'Niladri', 0),
(6, 'Raj Kumar Jayswal', 0),
(7, 'Aditya Raj', 0),
(8, 'Sumit Kumar', 205),
(9, 'Ritesh Kumar', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `cook_account`
-- 

CREATE TABLE `cook_account` (
  `id` int(10) NOT NULL auto_increment,
  `date` varchar(10) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(5) NOT NULL,
  `amt_pd` int(6) NOT NULL,
  `r_amt` int(6) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `cook_account`
-- 

INSERT INTO `cook_account` (`id`, `date`, `month`, `year`, `amt_pd`, `r_amt`) VALUES 
(1, '13-04-2013', 'April', '2013', 500, 2000),
(2, '23-04-2013', 'April', '2013', 2000, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `member_account`
-- 

CREATE TABLE `member_account` (
  `name` varchar(30) NOT NULL,
  `date` varchar(10) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(5) NOT NULL,
  `amt_pd` int(6) NOT NULL,
  `r_amt` int(6) NOT NULL,
  `id` int(6) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `member_account`
-- 

INSERT INTO `member_account` (`name`, `date`, `month`, `year`, `amt_pd`, `r_amt`, `id`) VALUES 
('Kumar Sawan', '21-04-2013', 'May', '2013', 800, 700, 1),
('Vivekananda Jha', '22-04-2013', 'May', '2013', 1500, 0, 2),
('Niladri', '22-04-2013', 'May', '2013', 1500, 0, 3),
('Nishant Saurabh', '23-04-2013', 'May', '2013', 1500, 0, 4),
('Sourav Maity', '23-04-2013', 'April', '2013', 1000, 500, 5),
('Raj Kumar Jayswal', '24-04-2013', 'April', '2013', 500, 0, 6),
('Raj Kumar Jayswal', '23-04-2013', 'May', '2013', 1000, 500, 7),
('Raj Kumar Jayswal', '29-04-2013', 'May', '2013', 500, 0, 8);

-- --------------------------------------------------------

-- 
-- Table structure for table `mess_account`
-- 

CREATE TABLE `mess_account` (
  `id` int(6) NOT NULL auto_increment,
  `date` varchar(10) NOT NULL,
  `items` varchar(1000) NOT NULL,
  `expense` int(6) NOT NULL,
  `balance` int(6) NOT NULL,
  `depositor` varchar(30) default NULL,
  `deposite` int(6) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `mess_account`
-- 

INSERT INTO `mess_account` (`id`, `date`, `items`, `expense`, `balance`, `depositor`, `deposite`) VALUES 
(1, '21-04-2013', '-', 0, 800, 'Kumar Sawan', 800),
(2, '21-05-2013', 'sabji-66\r\nprivious year expense-673', 739, 61, '-', 0),
(3, '22-04-2013', '-', 0, 1561, 'Vivekananda Jha', 1500),
(4, '22-04-2013', '-', 0, 3061, 'Niladri', 1500),
(5, '22-04-2013', 'chicken-170\r\nsafai-100\r\nsabji-90', 360, 2701, '-', 0),
(6, '23-04-2013', '-', 0, 4201, 'Nishant Saurabh', 1500),
(7, '23-04-2013', '-', 0, 5201, 'Sourav Maity', 1000),
(8, '23-04-2013', 'vegetables -43\r\nMassi - 2000', 2043, 3158, '-', 0),
(9, '24-04-2013', '-', 0, 3658, 'Raj Kumar Jayswal', 500),
(10, '23-04-2013', '-', 0, 4658, 'Raj Kumar Jayswal', 1000),
(11, '24-04-2013', 'sabji-100\r\nchicken-280\r\npaneer-96', 476, 4182, '-', 0),
(12, '25-04-2013', 'sabji-100', 100, 4082, '-', 0),
(13, '26-04-2013', 'sabji-80\r\nthanda(for massi)-30\r\nSusanto Da''s Dues cleared-2010', 2120, 1962, '-', 0),
(14, '27-04-2013', 'sabji-95', 95, 1867, '-', 0),
(15, '28-04-2013', 'sabji-100', 100, 1767, '-', 0),
(16, '29-05-2013', 'chicken-270\r\nmithai-35\r\npaneer-50\r\nsabji-130\r\nthanda-65', 550, 1217, '-', 0),
(17, '29-04-2013', '-', 0, 1717, 'Raj Kumar Jayswal', 500),
(18, '30-04-2013', 'sabji-60', 60, 1657, '-', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `phonebook`
-- 

CREATE TABLE `phonebook` (
  `id` int(5) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `phno` varchar(13) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `phonebook`
-- 

INSERT INTO `phonebook` (`id`, `name`, `phno`) VALUES 
(1, 'Nishant Saurabh', '7679406901'),
(2, 'Vivekananda Jha', '7654106773'),
(3, 'Kumar Sawan', '8927516459'),
(4, 'Sourav Maity', '9647473615'),
(5, 'Niladri', '0000000000'),
(6, 'Raj Kumar Jayswal', '0000000000'),
(7, 'Aditya Raj', '0000000000'),
(8, 'Sumit Kumar', '0000000000'),
(9, 'Ritesh Kumar', '0000000000');

-- --------------------------------------------------------

-- 
-- Table structure for table `reg_form`
-- 

CREATE TABLE `reg_form` (
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `clg_name` varchar(50) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `mob_no` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `reg_form`
-- 

INSERT INTO `reg_form` (`username`, `name`, `clg_name`, `dept`, `pwd`, `mob_no`, `email`, `address`) VALUES 
('6488raj', 'Raj Kumar Jayswal', 'DR. B. C. ROY ENGINEERING COLLEGE', 'E.C.E', '6488raj', '0000000000', 'raj@gmail.com', 'Semapur,Katihar'),
('aditya', 'Aditya Raj', 'DR. B. C. ROY ENGINEERING COLLEGE', 'E.I.E.', 'aditya', '0000000000', 'aditya@gmail.com', 'gaya'),
('niladri', 'Niladri', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'niladri', '0000000000', 'niladri@gmail.com', 'Bankura'),
('nishant', 'Nishant Saurabh', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'nishant', '7679406901', 'nishant007nishu@gmail.com', 'Mithila colony,Nashriganj,Danapur,patna-18,Bihar'),
('ritesh', 'Ritesh Kumar', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'ritesh', '0000000000', 'ritesh@gmail.com', 'Darbhanga'),
('sawan', 'Kumar Sawan', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'sawan', '8927516459', 'kr.sawan.smarty@gmail.com', 'Patna'),
('sourav', 'Sourav Maity', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'sourav', '9647473615', 'sourav@gmail.com', 'Kharagpur'),
('sumit', 'Sumit Kumar', 'DR. B. C. ROY ENGINEERING COLLEGE', 'E.E', 'sumit', '0000000000', 'sumit@gmail.com', 'Chapra'),
('vivek', 'Vivekananda Jha', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'vivek', '7654106773', 'vivekcse42@gmail.com', 'Gidhaur');

-- --------------------------------------------------------

-- 
-- Table structure for table `routine`
-- 

CREATE TABLE `routine` (
  `id` int(5) NOT NULL auto_increment,
  `person1` varchar(30) NOT NULL,
  `person2` varchar(30) NOT NULL,
  `day` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `routine`
-- 

INSERT INTO `routine` (`id`, `person1`, `person2`, `day`) VALUES 
(1, 'Sourav Maity', 'Niladri', 'Sunday'),
(2, 'Kumar Sawan', 'Sumit Kumar', 'Monday'),
(3, 'Raj Kumar Jayswal', 'Ritesh Kumar', 'Tuesday'),
(4, 'Aditya Raj', 'Vivekananda Jha', 'Wednessday'),
(5, 'Kumar Sawan', 'Ritesh Kumar', 'Thursday'),
(6, 'Nishant Saurabh', 'Aditya Raj', 'Friday'),
(7, 'Sumit Kumar', 'Ritesh Kumar', 'Saturday');
