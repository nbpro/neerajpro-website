-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: sql108.0fees.net
-- Generation Time: Jul 07, 2013 at 10:20 AM
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
(1, 'Nishant Saurabh', 0),
(2, 'viveka', 0),
(3, 'KUMAR SAWAN', 0),
(6, 'RAJ JAYSWAL', 0),
(7, 'ADITYA RAJ', 49),
(8, 'SUMIT SINGH', 213),
(9, 'Ritesh(jordon)', 0),
(10, 'Chandra Prakash', 10);

-- --------------------------------------------------------

--
-- Table structure for table `cook_account`
--

CREATE TABLE IF NOT EXISTS `cook_account` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` varchar(10) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(5) NOT NULL,
  `amt_pd` int(6) NOT NULL,
  `r_amt` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cook_account`
--

INSERT INTO `cook_account` (`id`, `date`, `month`, `year`, `amt_pd`, `r_amt`) VALUES
(1, '13-04-2013', 'April', '2013', 500, 2000),
(2, '23-04-2013', 'April', '2013', 2000, 0),
(3, '23-05-2013', 'May', '2013', 2600, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `member_account`
--

INSERT INTO `member_account` (`name`, `date`, `month`, `year`, `amt_pd`, `r_amt`, `id`) VALUES
('KUMAR SAWAN', '21-04-2013', 'May', '2013', 800, 700, 1),
('viveka', '22-04-2013', 'May', '2013', 1500, 0, 2),
('Niladri Dalal', '22-04-2013', 'May', '2013', 1500, 0, 3),
('Nishant Saurabh', '23-04-2013', 'May', '2013', 1500, 0, 4),
('Sourav Maity', '23-04-2013', 'April', '2013', 1000, 500, 5),
('RAJ JAYSWAL', '24-04-2013', 'April', '2013', 500, 0, 6),
('RAJ JAYSWAL', '23-04-2013', 'May', '2013', 1000, 500, 7),
('RAJ JAYSWAL', '29-04-2013', 'May', '2013', 500, 0, 8),
('Sourav Maity', '03-05-2013', 'April', '2013', 500, 0, 9),
('ADITYA RAJ', '03-05-2013', 'May', '2013', 1500, 0, 10),
('Chandra Prakash', '14-05-2013', 'June', '2013', 500, 500, 12),
('Sourav Maity', '14-05-2013', 'May', '2013', 1500, 0, 13),
('SUMIT SINGH', '14-05-2013', 'May', '2013', 1100, 400, 14),
('Niladri Dalal', '16-05-2013', 'June', '2013', 750, 0, 15),
('RAJ JAYSWAL', '16-05-2013', 'June', '2013', 700, 300, 16),
('KUMAR SAWAN', '18-05-2013', 'May', '2013', 700, 0, 17),
('KUMAR SAWAN', '18-05-2013', 'June', '2013', 800, 200, 18),
('Ritesh(jordon)', '20-05-2013', 'April', '2013', 350, 0, 19),
('Ritesh(jordon)', '20-05-2013', 'May', '2013', 1150, 350, 20),
('viveka', '20-05-2013', 'June', '2013', 1000, 0, 21),
('Nishant Saurabh', '23-05-2013', 'June', '2013', 600, 400, 22),
('Sourav Maity', '24-05-2013', 'June', '2013', 750, 0, 23),
('Chandra Prakash', '28-05-2013', 'June', '2013', 500, 0, 24),
('Nishant Saurabh', '28-05-2013', 'June', '2013', 400, 0, 25),
('ADITYA RAJ', '28-05-2013', 'June', '2013', 300, 700, 26),
('Ritesh(jordon)', '31-05-2013', 'May', '2013', 350, 0, 27),
('Ritesh(jordon)', '31-05-2013', 'June', '2013', 950, 50, 28),
('SUMIT SINGH', '31-05-2013', 'May', '2013', 400, 0, 29),
('SUMIT SINGH', '31-05-2013', 'June', '2013', 1000, 0, 30),
('ADITYA RAJ', '05-06-2013', 'June', '2013', 700, 0, 31),
('KUMAR SAWAN', '09-06-2013', 'June', '2013', 200, 0, 32),
('RAJ JAYSWAL', '01-07-2013', 'June', '2013', 300, 0, 33),
('Nishant Saurabh', '03-07-2013', 'July', '2013', 1000, 500, 34),
('viveka', '03-07-2013', 'July', '2013', 1000, 500, 35);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

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
(41, '14-05-2013', 'sabji-80/-,Susanto da dues cleared-1500/-,,(Total dues of Susanto da+achar-1849/-)', 1580, 996, '-', 0),
(42, '15-05-2013', 'sabji-28/-', 28, 968, '-', 0),
(43, '16-05-2013', 'sabji-94/-', 94, 874, '-', 0),
(44, '16-05-2013', '-', 0, 1624, 'Niladri Dalal', 750),
(45, '16-05-2013', '-', 0, 2324, 'RAJ JAYSWAL', 700),
(46, '17-05-2013', 'Sabji-150/-,sattu-24/-,\nPaid Susanto da-1500/- (dues left-349/-).', 1674, 650, '-', 0),
(47, '18-05-2013', '-', 0, 1350, 'KUMAR SAWAN', 700),
(48, '18-05-2013', '-', 0, 2150, 'KUMAR SAWAN', 800),
(49, '18-05-2013', 'EGG-58/-,SABJI-50/-,DAHI-28/-,MITHAI-16', 152, 1998, '-', 0),
(50, '19-05-2013', 'sabji-120/-,milk-96/-', 216, 1782, '-', 0),
(51, '20-05-2013', '-', 0, 2132, 'Ritesh(jordon)', 350),
(52, '20-05-2013', '-', 0, 3282, 'Ritesh(jordon)', 1150),
(53, '20-05-2013', '-', 0, 4282, 'viveka', 1000),
(54, '20-05-2013', 'chicken-300/-,paneer-50/-,sabji-72/-', 422, 3860, '-', 0),
(55, '21-05-2013', 'sabji-106/-', 106, 3754, '-', 0),
(56, '22-05-2013', 'sabji-104/-', 104, 3650, '-', 0),
(57, '23-05-2013', '-', 0, 4250, 'Nishant Saurabh', 600),
(58, '23-05-2013', 'masi-2600/-,dudh-96/-,sabji-52/-,[ata 25kg 462/-,chawal 25kg 875/-,sarso tel 5pk 475/-,refine 2pk 194/-, sabji masal 5pk 90/-,chicken masala 3pk 84/-,garam masala 1pk 29/-,chini 3kg 111/-,arahar dal 2kg 152/-,masoor dal 1kg 72/-,sawai 3pk 30/-,gobindbhog 1/2kg 31/-,sattu 5pk 120/-,vim bar 5pk 25/-,scoth brite 3pk 30/-,laxaman rekha 1pk 15/-,achar ipk 58/-,papar 5pk 190/-,jira 200g 48/-,sukha mircha 50g 9/-,tej pata 1 pk 4/-,allu 5kg 50/-,pyaj 2kg 38/-,namak 1pk 15/-,haldi 200g 36/-=total=3243/-+previous dues-349/-](total dues=3592/-) ', 2748, 1502, '-', 0),
(59, '24-05-2013', '-', 0, 2252, 'Sourav Maity', 750),
(60, '24-05-2013', 'fried rice+kaju+kismis+gota masala=200/-,sabji-86/-', 286, 1966, '-', 0),
(61, '24-05-2013', 'safai-100', 100, 1866, '-', 0),
(62, '25-05-2013', 'sabji-65/-', 65, 1801, '-', 0),
(63, '26-05-2013', 'sabji-70/-', 70, 1731, '-', 0),
(64, '27-05-2013', 'paper-160/-,sabji-100/-', 260, 1471, '-', 0),
(65, '28-05-2013', '-', 0, 1971, 'Chandra Prakash', 500),
(66, '28-05-2013', '-', 0, 2371, 'Nishant Saurabh', 400),
(67, '28-05-2013', '-', 0, 2671, 'ADITYA RAJ', 300),
(68, '28-05-2013', 'sabji-89/-,gas-1100/-,egg-62/-', 1251, 1420, '-', 0),
(69, '29-05-2013', 'sabji-64/-', 64, 1356, '-', 0),
(70, '30-05-2013', 'sabji-55/-', 55, 1301, '-', 0),
(71, '31-05-2013', 'cake-220/-+ gift-200/-', 420, 881, '-', 0),
(72, '31-05-2013', '-', 0, 1231, 'Ritesh(jordon)', 350),
(73, '31-05-2013', '-', 0, 2181, 'Ritesh(jordon)', 950),
(74, '31-05-2013', '-', 0, 2581, 'Sumit Kumar', 400),
(75, '31-05-2013', '-', 0, 3581, 'Sumit Kumar', 1000),
(76, '01-06-2013', 'chicken-360/-,haldi-54/-,mithai-110/-,paneer-41/-,sabji-117/-', 682, 2899, '-', 0),
(77, '02-06-2013', 'sabji+eggs-132/-,thandha-70/-', 202, 2697, '-', 0),
(79, '04-06-2013', 'sabji-30/-', 30, 2667, '-', 0),
(80, '04-06-2013', 'sabji-70/-', 70, 2597, '-', 0),
(81, '05-06-2013', 'safai-100/-,sabji-50/-', 150, 2447, '-', 0),
(82, '05-06-2013', '-', 0, 3147, 'ADITYA RAJ', 700),
(83, '05-06-2013', 'dues of sushanto da-1592/-\r\ndues left-2000/-', 1592, 1555, '-', 0),
(84, '08-06-2013', 'net-450/-', 450, 1105, '-', 0),
(85, '09-06-2013', '-', 0, 1305, 'KUMAR SAWAN', 200),
(86, '10-06-2013', '!!!!!!!!SEMESTER BREAK!!!!!!!!!', 0, 1305, '-', 0),
(87, '01-07-2013', '-', 0, 1605, 'RAJ JAYSWAL', 300),
(88, '02-07-2013', 'Purifier-1000/-\r\nplumber-50/-\r\negg+cold drinks-75/-\r\npaneer-54/-\r\nsabji-45/-\r\njharu-35/-\r\nbalti-87/-\r\nchutta-15/-\r\ngarbage picker-20/\r\ncandle-30/-\r\n', 1411, 194, '-', 0),
(89, '03-07-2013', '-', 0, 1194, 'Nishant Saurabh', 1000),
(90, '03-07-2013', '-', 0, 2194, 'viveka', 1000),
(91, '03-07-2013', 'Gas-975/- +\r\nsabji-128/- +\r\ntel-100/- +\r\ndal-40/-\r\n', 1243, 951, '-', 0),
(92, '04-07-2013', 'sabji-112/-', 112, 839, '-', 0),
(93, '05-07-2013', 'chawal-3kg + atta-5kg + gotta jira-50g/- + anda-3pcs + maggi-4pks', 280, 559, '-', 0),
(94, '06-07-2013', 'milk-1l 32/-', 32, 527, '-', 0),
(95, '07-07-2013', 'sabji-45/-\r\nanda+milk+haldi+kheer chawal=78/-', 123, 404, '-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phonebook`
--

CREATE TABLE IF NOT EXISTS `phonebook` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `phno` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `phonebook`
--

INSERT INTO `phonebook` (`id`, `name`, `phno`) VALUES
(1, 'Nishant Saurabh', '7679406901'),
(2, 'viveka', '8653309746'),
(3, 'KUMAR SAWAN', '8927516459'),
(4, 'Sourav Maity', '9647473615'),
(5, 'Niladri Dalal', '9851162527'),
(6, 'RAJ JAYSWAL', '8927227910'),
(7, 'ADITYA RAJ', '9046369063'),
(8, 'SUMIT SINGH', '8906693668'),
(9, 'Ritesh(jordon)', '7602176086'),
(10, 'massi(cook)', '9735889231'),
(11, 'Susant(Dealer)', '9635021091'),
(12, 'Chandra Prakash', '8101316585');

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
('nishant', 'Nishant Saurabh', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'nishant', '7679406901', 'nishant007nishu@gmail.com', 'Mithila colony,Nashriganj,Danapur Patna-18,Bihar.'),
('jordon001', 'Ritesh(jordon)', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', '224067', '7602176086', 'kuljimmi@gmail.com', 'Hotel jimmi pvt bus stand\r\nMadhubani,bihar'),
('sawan', 'KUMAR SAWAN', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'sawan', '8927516459', 'kr.sawan.smarty@gmail.com', 'LIG-7/246,HANUMAAN NAGAR,KANKARBAGH,PATNA(800020)'),
('SUMIT ', 'SUMIT SINGH', 'DR. B. C. ROY ENGINEERING COLLEGE', 'E.E', 'sumit', '8906693668', 'sumit11d@gmail.com', 'fuljhore'),
('viveka', 'viveka', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'viveka', '8653309746', 'vivekbcrec42@gmail.com', 'Gidhaur'),
('cpbcrec', 'Chandra Prakash', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', '103059', '8101316585', 'cpbcrec@gmail.com', 'Sonpur.');

-- --------------------------------------------------------

--
-- Table structure for table `removedmembers`
--

CREATE TABLE IF NOT EXISTS `removedmembers` (
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
-- Dumping data for table `removedmembers`
--

INSERT INTO `removedmembers` (`username`, `name`, `clg_name`, `dept`, `pwd`, `mob_no`, `email`, `address`) VALUES
('sourav', 'Sourav Maity', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'sourav97329138', '9647473615', 'sourav.maity34@gmail.com', 'Medinipur'),
('Niladri', 'Niladri Dalal', 'DR. B. C. ROY ENGINEERING COLLEGE', 'C.S.E.', 'niladri', '9851162527', 'niladri.bcrec@gmail.com', 'Bankura');

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE IF NOT EXISTS `routine` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `person1` varchar(30) NOT NULL,
  `person2` varchar(30) NOT NULL,
  `day` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
