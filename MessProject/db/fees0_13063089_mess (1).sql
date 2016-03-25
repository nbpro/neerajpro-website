-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: sql108.0fees.net
-- Generation Time: May 16, 2013 at 10:54 AM
-- Server version: 5.5.30-30.2
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fees0_13063089_mess`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `pwd`) VALUES
('Nishant Saurabh', 'nishu', 'nishu'),
('Sourav Maity', 'sourav', 'sourav97329138'),
('Raj Jayswal', '6488raj', '64887225');

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE IF NOT EXISTS `borrower` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `amt` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`id`, `name`, `amt`) VALUES
(1, 'NISHANT', 0),
(2, 'viveka', 0),
(3, 'KUMAR SAWAN', 0),
(4, 'Sourav Maity', 0),
(5, 'Niladri Dalal', 0),
(6, 'RAJ JAYSWAL', 0),
(7, 'ADITYA RAJ', 49),
(8, 'Sumit Kumar', 113),
(9, 'Ritesh(jordon)', 0),
(10, 'Chandra Prakash', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cook_account`
--
-- in use(#29 - File './fees0_13063089_mess/cook_account.MYD' not found (Errcode: 23))
-- Error reading data: (#29 - File './fees0_13063089_mess/cook_account.MYD' not found (Errcode: 23))

-- --------------------------------------------------------

--
-- Table structure for table `member_account`
--

CREATE TABLE IF NOT EXISTS `member_account` (
  `name` varchar(30) NOT NULL,
  `date` varchar(10) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(5) NOT NULL,
  `amt_pd` int(6) NOT NULL,
  `r_amt` int(6) NOT NULL,
  `id` int(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `member_account`
--

INSERT INTO `member_account` (`name`, `date`, `month`, `year`, `amt_pd`, `r_amt`, `id`) VALUES
('KUMAR SAWAN', '21-04-2013', 'May', '2013', 800, 700, 1),
('viveka', '22-04-2013', 'May', '2013', 1500, 0, 2),
('Niladri Dalal', '22-04-2013', 'May', '2013', 1500, 0, 3),
('NISHANT', '23-04-2013', 'May', '2013', 1500, 0, 4),
('Sourav Maity', '23-04-2013', 'April', '2013', 1000, 500, 5),
('RAJ JAYSWAL', '24-04-2013', 'April', '2013', 500, 0, 6),
('RAJ JAYSWAL', '23-04-2013', 'May', '2013', 1000, 500, 7),
('RAJ JAYSWAL', '29-04-2013', 'May', '2013', 500, 0, 8),
('Sourav Maity', '03-05-2013', 'April', '2013', 500, 0, 9),
('ADITYA RAJ', '03-05-2013', 'May', '2013', 1500, 0, 10),
('Chandra Prakash', '14-05-2013', 'June', '2013', 500, 500, 12),
('Sourav Maity', '14-05-2013', 'May', '2013', 1500, 0, 13),
('Sumit Kumar', '14-05-2013', 'May', '2013', 1100, 400, 14),
('Niladri Dalal', '16-05-2013', 'June', '2013', 750, 0, 15),
('RAJ JAYSWAL', '16-05-2013', 'June', '2013', 700, 300, 16);

-- --------------------------------------------------------

--
-- Table structure for table `mess_account`
--

CREATE TABLE IF NOT EXISTS `mess_account` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `date` varchar(10) NOT NULL,
  `items` varchar(1000) NOT NULL,
  `expense` int(6) NOT NULL,
  `balance` int(6) NOT NULL,
  `depositor` varchar(30) DEFAULT NULL,
  `deposite` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `mess_account`
--

INSERT INTO `mess_account` (`id`, `date`, `items`, `expense`, `balance`, `depositor`, `deposite`) VALUES
(1, '21-04-2013', '-', 0, 800, 'Kumar Sawan', 800),
(2, '21-05-2013', 'sabji-66/-,privious month expense-673/-', 739, 61, '-', 0),
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
(13, '26-04-2013', 'sabji-80\nthanda(for massi)-30\nSusanto Da''s Dues cleared-2010', 2120, 1962, '-', 0),
(14, '27-04-2013', 'sabji-95', 95, 1867, '-', 0),
(15, '28-04-2013', 'sabji-100', 100, 1767, '-', 0),
(16, '29-05-2013', 'chicken-270\r\nmithai-35\r\npaneer-50\r\nsabji-130\r\nthanda-65', 550, 1217, '-', 0),
(17, '29-04-2013', '-', 0, 1717, 'Raj Kumar Jayswal', 500),
(18, '30-04-2013', 'sabji-60', 60, 1657, '-', 0),
(19, '01-05-2013', 'sabji-92', 92, 1565, '-', 0),
(20, '02-05-2013', 'sabji-58/-,\r\n(tel+haldi+soyabin)=153/- ', 211, 1354, '-', 0),
(22, '03-05-2013', '-', 0, 1854, 'Sourav Maity', 500),
(23, '03-05-2013', 'harpic-26/-,safai-100/-,chura-56/-,dahi-110/-,mithai-86/-,[(arhar 3kg-234/-+masoor 2kg-144/-,chawal 25kg-850/-,ata 25 kg-475/-,chicken masla 3pc-84/-,sabji masala 5pc-90/-,garam masala 2pc-56/-,haldi 250g-45/-,sarso tel 5pc-500/-,chini 4kg-148/-,gotta jira 100g-24/-,sukha launka 100g-16/-,paper 5pc-190/-,soyabin 4pc 136/-,sewai 4pc -40/-,vim bar 5pc 25/-,scotch brite 3pc-30/-,phinyl-43/-,mombatti 6pc-35/-,salt-15/-,allu 5kg-58/-,payaj 5kg-80/-)=3316/-(dues)]', 378, 1476, '-', 0),
(24, '03-05-2013', '-', 0, 2976, 'ADITYA RAJ', 1500),
(25, '04-05-2013', 'sabji-70/-,news paper-150/-,gas-1100/-', 1320, 1656, '-', 0),
(26, '05-05-2013', 'sabji-86/-', 86, 1570, '-', 0),
(28, '06-05-2013', 'paneer-48/-,egg-58/-, sabji-57/-', 163, 1407, '-', 0),
(29, '07-05-2013', 'sabji-49,chiken-250,dahi-28, adrakh-30,mithai-24', 381, 1026, '-', 0),
(30, '08-05-2013', 'sabji-68/-', 68, 958, '-', 0),
(31, '10-05-2013', 'Gift to dada(sabjiwale)-100/-', 100, 858, '-', 0),
(33, '10-05-2013', 'sabji-80/-', 80, 778, '-', 0),
(34, '11-05-2013', 'sabji-53/-', 53, 725, '-', 0),
(35, '12-05-2013', 'sabji-79/-,paneer-45/-,safai-100/-', 224, 501, '-', 0),
(36, '12-05-2013', 'milk-93/-', 93, 408, '-', 0),
(37, '13-05-2013', 'net-450/-,chicken-280/-,paneer-45/-,sabji-92/-,Thandha-65/-,', 932, -524, '-', 0),
(38, '14-05-2013', '-', 0, -24, 'Chandra Prakash', 500),
(39, '14-05-2013', '-', 0, 1476, 'Sourav Maity', 1500),
(40, '14-05-2013', '-', 0, 2576, 'Sumit Kumar', 1100),
(41, '14-05-2013', 'sabji-80/-,Susanto da dues cleared-1500/-,,(Total dues of Susanto da+achar-1749/-)', 1580, 996, '-', 0),
(42, '15-05-2013', 'sabji-28/-', 28, 968, '-', 0),
(43, '16-05-2013', 'sabji-94/-', 94, 874, '-', 0),
(44, '16-05-2013', '-', 0, 1624, 'Niladri Dalal', 750),
(45, '16-05-2013', '-', 0, 2324, 'RAJ JAYSWAL', 700);

-- --------------------------------------------------------

--
-- Table structure for table `phonebook`
--
-- in use(#29 - File './fees0_13063089_mess/phonebook.MYD' not found (Errcode: 23))
-- Error reading data: (#29 - File './fees0_13063089_mess/phonebook.MYD' not found (Errcode: 23))

-- --------------------------------------------------------

--
-- Table structure for table `reg_form`
--

CREATE TABLE IF NOT EXISTS `reg_form` (
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `clg_name` varchar(50) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `mob_no` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_form`
--

INSERT INTO `reg_form` (`username`, `name`, `clg_name`, `dept`, `pwd`, `mob_no`, `email`, `address`) VALUES
('6488raj', 'RAJ JAYSWAL', 'DR. B. C. ROY ENGINEERING COLLEGE', 'E.C.E', '6488raj', '8927227910', 'rajjayswal6488@gmail.com', 'c/o-Ganesh chaudhary At+P0-Semapur dist-Katihar (BIHAR)'),
('aditya', 'ADITYA RAJ', 'DR. B. C. ROY ENGINEERING COLLEGE', 'E.I.E.', 'aditya', '9046369063', 'adityaraj490@gmail.com', 'gaya'),
('Niladri', 'Niladri Dalal', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'niladri', '9851162527', 'niladri.bcrec@gmail.com', 'vill+p.o. :- Patrasayer\r\nDist:- Bankura\r\npin- 722206'),
('nishant', 'NISHANT', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'nishant', '7679406901', 'nishant007nishu@gmail.com', 'patna'),
('jordon001', 'Ritesh(jordon)', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', '224067', '7602176086', 'kuljimmi@gmail.com', 'Hotel jimmi pvt bus stand\r\nMadhubani,bihar'),
('sawan', 'KUMAR SAWAN', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'sawan', '8927516459', 'kr.sawan.smarty@gmail.com', 'LIG-7/246,HANUMAAN NAGAR,KANKARBAGH,PATNA(800020)'),
('sourav', 'Sourav Maity', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'sourav97329138', '9647473615', 'sourav.maity34@gmail.com', 'Vill.+P.O- Kultikri, P.S- Sankrail, Dist- Paschim Medinipur, Pin- 721135'),
('sumit', 'Sumit Kumar', 'DR. B. C. ROY ENGINEERING COLLEGE', 'E.E', 'sumit', '0000000000', 'sumit@gmail.com', 'Chapra'),
('viveka', 'viveka', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'viveka', '8653309746', 'vivekbcrec42@gmail.com', 'Gidhaur'),
('cpbcrec', 'Chandra Prakash', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', '103059', '8101316585', 'cpbcrec@gmail.com', 'Sonpur.');

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--
-- in use(#29 - File './fees0_13063089_mess/routine.MYD' not found (Errcode: 23))
-- Error reading data: (#29 - File './fees0_13063089_mess/routine.MYD' not found (Errcode: 23))

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
