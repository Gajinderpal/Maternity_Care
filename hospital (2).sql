-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 02:34 AM
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
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(10) NOT NULL,
  `rand` int(100) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `b1` varchar(100) NOT NULL,
  `b2` varchar(100) NOT NULL,
  `b3` varchar(100) NOT NULL,
  `b4` varchar(100) NOT NULL,
  `c1` varchar(100) NOT NULL,
  `c2` varchar(100) NOT NULL,
  `c3` varchar(100) NOT NULL,
  `c4` varchar(100) NOT NULL,
  `c5` varchar(100) NOT NULL,
  `c6` varchar(100) NOT NULL,
  `c7` varchar(100) NOT NULL,
  `c8` varchar(100) NOT NULL,
  `c9_1` int(10) NOT NULL,
  `c9_2` int(10) NOT NULL,
  `c9_3` int(10) NOT NULL,
  `c9_4` int(10) NOT NULL,
  `c9_5` int(10) NOT NULL,
  `c9_6` int(10) NOT NULL,
  `c10` varchar(100) NOT NULL,
  `c11` varchar(100) NOT NULL,
  `c12` varchar(100) NOT NULL,
  `c13` varchar(100) NOT NULL,
  `c14` varchar(100) NOT NULL,
  `c15` varchar(100) NOT NULL,
  `d1` varchar(100) NOT NULL,
  `d2` text NOT NULL,
  `d3` int(10) NOT NULL,
  `d4` int(10) NOT NULL,
  `d5` varchar(100) NOT NULL,
  `d6` text NOT NULL,
  `d7` int(10) NOT NULL,
  `d8` int(10) NOT NULL,
  `e1` varchar(100) NOT NULL,
  `e2` varchar(100) NOT NULL,
  `e3` varchar(100) NOT NULL,
  `e4` varchar(100) NOT NULL,
  `e5` varchar(100) NOT NULL,
  `e6` varchar(100) NOT NULL,
  `e7` varchar(100) NOT NULL,
  `e8` varchar(100) NOT NULL,
  `e9` varchar(255) NOT NULL,
  `e10` varchar(255) NOT NULL,
  `f1` varchar(100) NOT NULL,
  `f2` varchar(100) NOT NULL,
  `f3` varchar(100) NOT NULL,
  `f4` varchar(100) NOT NULL,
  `f5` int(10) NOT NULL,
  `f6` varchar(100) NOT NULL,
  `f7` varchar(100) NOT NULL,
  `f8` varchar(100) NOT NULL,
  `f9` varchar(100) NOT NULL,
  `f10` varchar(100) NOT NULL,
  `f11` varchar(100) NOT NULL,
  `f12` varchar(100) NOT NULL,
  `g1` varchar(100) NOT NULL,
  `g2` varchar(100) NOT NULL,
  `g3` varchar(100) NOT NULL,
  `g4` varchar(100) NOT NULL,
  `g5` varchar(100) NOT NULL,
  `g6` varchar(100) NOT NULL,
  `g7` varchar(100) NOT NULL,
  `g8` varchar(100) NOT NULL,
  `g9` varchar(100) NOT NULL,
  `h1` varchar(100) NOT NULL,
  `h2` varchar(100) NOT NULL,
  `h3` varchar(100) NOT NULL,
  `h4` varchar(100) NOT NULL,
  `h5` varchar(100) NOT NULL,
  `h6` varchar(100) NOT NULL,
  `h7` varchar(100) NOT NULL,
  `h8` int(100) NOT NULL,
  `h9` varchar(255) NOT NULL,
  `h10` varchar(255) NOT NULL,
  `i1` varchar(100) NOT NULL,
  `i2` varchar(100) NOT NULL,
  `i3` varchar(100) NOT NULL,
  `i4` varchar(100) NOT NULL,
  `j1` varchar(100) NOT NULL,
  `j2` varchar(100) NOT NULL,
  `j3` varchar(100) NOT NULL,
  `k1` text NOT NULL,
  `k2` int(10) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `notes` text NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `rand`, `a1`, `b1`, `b2`, `b3`, `b4`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9_1`, `c9_2`, `c9_3`, `c9_4`, `c9_5`, `c9_6`, `c10`, `c11`, `c12`, `c13`, `c14`, `c15`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e8`, `e9`, `e10`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `g8`, `g9`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`, `h9`, `h10`, `i1`, `i2`, `i3`, `i4`, `j1`, `j2`, `j3`, `k1`, `k2`, `ip`, `date`, `notes`, `status`) VALUES
(1, 29, '100', 'Yes', 'Yes', 'Yes', 'Yes', 'Mr', 'tom', '', 'Slick', 'NZ', 'Citizen', 'Single', 'None', 0, 0, 0, 0, 0, 0, '075675676', '', 'support@stealthmedialtd.co.nz', '', 'Full', '1', 'Rent(Agent)', 'Auckland', 0, 0, 'Rent(Agent)', '', 0, 0, 'yes', 'Tom', '2001', '', 'permanent', 'Kim', '', '', '', '', '1000', 'month', '1000', 'month', 2, '1222', '', '1222', '', '1222', '', '', '1000', '1000', '1000', '100000', '100000', '1000', '1000', '1000', '1000', 'Kim', '10000', '800', 'month', '566554', '3333', '333', 3333, '', '', 'tt', 'rewrew', '045645665', 'brother', 'TT', '045645665', 'fdsf', 'sdfsdf', 0, '::1', '2019-08-06 10:02:58', '<p>notes1</p>', 1),
(2, 151, '10000', 'Yes', '2018-12-21', 'Paid Defaults', 'Fortnightly', 'Mr', 'Gustav', '', 'wentzel', 'AU', 'Working Visa', 'Married', '1', 1, 0, 0, 0, 0, 0, '075675676', '075675676', 'support@stealthmedialtd.co.nz', '1', 'Learners', '1', 'Rent(Private)', 'Auckland', 12, 7, 'Rent(Private)', 'Auckland', 15, 9, 'Parmanent', 'Gustav', '5', '5', 'Work', 'SS', '4', '4', '', '', '1000', 'month', '200', 'a month', 2, '1222', '2', '122', '2', '233', '2', '', '222', '444', '66', '77', '99', '76', '567', '567', '56', '10000', '566', '444', 'Week', '4545', '454', '45', 45, '', '', 'SM', 'Auckland', '045645665', 'bro', 'R', '075675676', 'Bro', '', 0, '::1', '2019-08-06 10:54:39', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(100) NOT NULL,
  `sno` int(10) NOT NULL,
  `area` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `sno`, `area`, `content`) VALUES
(1, 1, 'Western Australia', ''),
(2, 2, 'Northern Territory', ''),
(3, 3, 'South Australia', ''),
(4, 4, 'Queensland', ''),
(5, 5, 'New South Wales', ''),
(6, 6, 'Victoria', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `content`) VALUES
(6, 'rupinder', '45464556', 'rkvirk1994@gmail.com', 'sdfdsfsdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(10) NOT NULL,
  `sno` int(10) NOT NULL,
  `ques` text NOT NULL,
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `sno`, `ques`, `ans`) VALUES
(1, 1, 'How does Complete Finance Services work?', '<p>Complete Finance Services is a finance broking company. We work with a number of New Zealand\'s top financiers and impartially evaluate your application to find which financier will provide the best financial solution to meet your needs and requirements.</p>'),
(2, 2, 'How do I apply?', '<p>Applications are very quick and easy. You can apply online here or you can call us free on 0800651480, and our experienced consultants will run through your application and finance solutions with you.</p>'),
(3, 3, 'How longs does the application process take?', '<p>Once we have all required information from you, we can typically have an approval within an hour.</p>'),
(4, 4, 'What do I need to apply?', '<p>Every application is different, and certain criteria can vary. The basics that are required are a Restricted Driver\'s licence (we can work with Learner licences in some circumstances, refer Learner Licence criteria below), Sufficient enough income to meet the financiers affordability criteria, Photo Identification and Proof of Address.</p>'),
(5, 5, 'Can I apply with a Learner Licence?', '<p>For motorbike applications, yes as long as the asset being purchased meets the Motorbike Learner Licence criteria<br />For car\'s, you must be a minimum age of 22, a minimum credit file of 18 months and meeting the above requirement \"What do I need to Apply\"</p>'),
(6, 6, 'Do I have to have security for a loan?', '<p>For vehicle finance, the asset being purchased is held as security. For debt consolidation, you will need to provide some security normally by way of freehold car, caravan, boat or other assets/chattels.</p>'),
(7, 7, 'Can I apply if I have bad credit?', '<p>Complete Finance Services have a number of lenders that will look past previous credit issues. Of course, terms of their approval may require higher interest rates and other conditions to meet their approval criteria. There are always limits to the level of adverse credit that is acceptable, but call our team on 0800651480 to discuss, with a No Credit Check Pre Assessment.</p>'),
(8, 8, 'Can I apply if I am on a benefit?', '<p>Complete Finance Services and our financiers all adhere to the rules and regulations in regards to Responsible Lending. Therefore, beneficiaries can apply, but you must meet the affordability criteria based on Responsible Lending.</p>'),
(9, 9, 'Do I have to pay anything to apply?', '<p>There is no fee to apply for finance. Lenders and insurers pay Complete Finance Services a fee, commission or brokerage fee for processing the application and settlement of a finance agreement. Any fees that are charged by the financiers are fully disclosed and agreed with you before the loan documents are signed by you. Complete Finance Services operates under the Credit Contracts and Consumer Finance Act (CCCFA) and all finance arrangements provided by Complete Finance Services are compliant with this Act and follows guidelines under Responsible Lending Code advised by Ministry of Consumer Affairs.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `twitter` varchar(500) NOT NULL,
  `linkedin` varchar(500) NOT NULL,
  `googleplus` varchar(500) NOT NULL,
  `youtube` varchar(500) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `email`, `phone`, `address`, `facebook`, `twitter`, `linkedin`, `googleplus`, `youtube`, `instagram`, `datetime`) VALUES
(1, '<p>info@domainname.com.au</p>', '<p>+61&nbsp;414277799</p>', '<p>63 Morrin Road, St Johns, Auckland 1072</p>', 'https://www.facebook.com', 'https://twitter.com/', '', '', '', 'https://www.instagram.com/', '2019-10-16 13:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `keywords` text NOT NULL,
  `meta_desc` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `area` int(100) NOT NULL,
  `region` int(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL,
  `img_title` varchar(500) NOT NULL,
  `img_alt` varchar(500) NOT NULL,
  `births_per_year` int(11) NOT NULL,
  `cesarean_section_rate` int(11) NOT NULL,
  `vaginal_birth_rate` int(10) NOT NULL,
  `induction_rate` int(10) NOT NULL,
  `tear_rate` int(10) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `title`, `keywords`, `meta_desc`, `name`, `state`, `city`, `pincode`, `area`, `region`, `address`, `img`, `img_title`, `img_alt`, `births_per_year`, `cesarean_section_rate`, `vaginal_birth_rate`, `induction_rate`, `tear_rate`, `content`) VALUES
(1, 'Frances Perry House', 'Frances Perry House', 'Frances Perry House', 'Frances Perry House', 'Melbourne', 'Melbourne', '143001', 5, 11, 'Melbourne, Australia', 'hos1.jpeg', 'Frances Perry House', 'Frances Perry House', 22, 22, 20, 22, 60, ''),
(2, 'Mater Mother', 'Mater Mother', 'Mater Mother', 'Mater Mother', 'Melbourne', 'Melbourne', '2783j', 1, 11, 'Melbourne, Australia', 'hos2.jpg', 'Mater Mother', 'Mater Mother', 221, 22, 20, 22, 45, ''),
(3, 'ATHERTON HOSPITAL', 'ATHERTON HOSPITAL', 'ATHERTON HOSPITAL', 'ATHERTON HOSPITAL', 'Queensland', 'ATHERTON', '4883', 4, 4, 'Cnr Louise and Jack Sts, ATHERTON, 4883', 'hos2.jpg', 'ATHERTON HOSPITAL', 'ATHERTON HOSPITAL', 50, 25, 5, 5, 10, ''),
(4, 'BABINDA HOSPITAL', 'BABINDA HOSPITAL', 'BABINDA HOSPITAL', 'BABINDA HOSPITAL', 'Queensland', 'BABINDA', '4861', 4, 4, '128 Munro St, BABINDA, 4861', 'hos2.jpg', 'BABINDA HOSPITAL', 'BABINDA HOSPITAL', 21, 35, 7, 4, 6, ''),
(5, 'CAIRNS HOSPITAL', 'CAIRNS HOSPITAL', 'CAIRNS HOSPITAL', 'CAIRNS HOSPITAL', 'Queensland', 'CAIRNS', '4870', 4, 4, '165 The Esplanade, CAIRNS, 4870', 'hos2.jpg', 'CAIRNS HOSPITAL', 'CAIRNS HOSPITAL', 20, 45, 37, 36, 49, ''),
(6, 'GORDONVALE HOSPITAL', 'GORDONVALE HOSPITAL', 'GORDONVALE HOSPITAL', 'GORDONVALE HOSPITAL', 'Queensland', 'GORDONVALE', '4865', 4, 4, '1-11 Highleigh Rd, GORDONVALE, 4865', 'hos2.jpg', 'GORDONVALE HOSPITAL', 'GORDONVALE HOSPITAL', 45, 43, 22, 12, 60, ''),
(7, 'HERBERTON HOSPITAL', 'HERBERTON HOSPITAL', 'HERBERTON HOSPITAL', 'HERBERTON HOSPITAL', 'Queensland', 'HERBERTON', '4872', 4, 4, 'Bertha St, HERBERTON, 4872', 'hos2.jpg', 'HERBERTON HOSPITAL', 'HERBERTON HOSPITAL', 45, 56, 34, 67, 78, ''),
(8, 'INNISFAIL HOSPITAL', 'INNISFAIL HOSPITAL', 'INNISFAIL HOSPITAL', 'INNISFAIL HOSPITAL', 'Queensland', 'INNISFAIL', '4860', 4, 4, '87 Rankin St, INNISFAIL, 4860', 'hos2.jpg', 'INNISFAIL HOSPITAL', 'INNISFAIL HOSPITAL', 49, 23, 67, 78, 12, ''),
(9, 'MAREEBA HOSPITAL', 'MAREEBA HOSPITAL', 'MAREEBA HOSPITAL', 'MAREEBA HOSPITAL', 'Queensland', 'MAREEBA', '4880', 4, 4, '2 Lloyd St, MAREEBA, 4880', 'hos2.jpg', 'MAREEBA HOSPITAL', 'MAREEBA HOSPITAL', 0, 0, 0, 0, 0, ''),
(10, 'MOSSMAN HOSPITAL', 'MOSSMAN HOSPITAL', 'MOSSMAN HOSPITAL', 'MOSSMAN HOSPITAL', 'Queensland', 'MOSSMAN', '4873', 4, 4, '9 Hospital St, MOSSMAN,4873', 'hos1.jpeg', 'MOSSMAN HOSPITAL', 'MOSSMAN HOSPITAL', 0, 0, 0, 0, 0, ''),
(11, 'TULLY HOSPITAL', 'TULLY HOSPITAL', 'TULLY HOSPITAL', 'TULLY HOSPITAL', 'Queensland', 'TULLY', '4854', 4, 4, '17 Bryant St, TULLY, 4854', 'hos2.jpg', 'TULLY HOSPITAL', 'TULLY HOSPITAL', 0, 0, 0, 0, 0, ''),
(12, 'BARALABA HOSPITAL', 'BARALABA HOSPITAL', 'BARALABA HOSPITAL', 'BARALABA HOSPITAL', 'Queensland', 'BARALABA', '4702', 4, 5, 'Stopford St, BARALABA, 4702', 'hos1.jpeg', 'BARALABA HOSPITAL', 'BARALABA HOSPITAL', 0, 0, 0, 0, 0, ''),
(13, 'BILOELA HOSPITAL', 'BILOELA HOSPITAL', 'BILOELA HOSPITAL', 'BILOELA HOSPITAL', 'Queensland', 'BILOELA', '4715', 4, 5, '2 Hospital Rd, BILOELA, 4715', 'hos1.jpeg', 'BILOELA HOSPITAL', 'BILOELA HOSPITAL', 0, 0, 0, 0, 0, ''),
(14, 'BLACKWATER HOSPITAL', 'BLACKWATER HOSPITAL', 'BLACKWATER HOSPITAL', 'BLACKWATER HOSPITAL', 'Queensland', 'BLACKWATER', '4717', 4, 5, '41 Mackenzie St, BLACKWATER, 4717', 'hos1.jpeg', 'BLACKWATER HOSPITAL', 'BLACKWATER HOSPITAL', 0, 0, 0, 0, 0, ''),
(15, 'CAPRICORN COAST HOSPITAL', 'CAPRICORN COAST HOSPITAL', 'CAPRICORN COAST HOSPITAL', 'CAPRICORN COAST HOSPITAL', 'Queensland', 'YEPPOON', '4703', 4, 5, '8 Hoskyn Dr, YEPPOON, 4703', 'hos1.jpeg', 'CAPRICORN COAST HOSPITAL', 'CAPRICORN COAST HOSPITAL', 0, 0, 0, 0, 0, ''),
(16, 'EMERALD HOSPITAL', 'EMERALD HOSPITAL', 'EMERALD HOSPITAL', 'EMERALD HOSPITAL', 'Queensland', 'EMERALD', '4720', 4, 5, 'Hospital Rd, EMERALD, 4720', 'hos1.jpeg', 'EMERALD HOSPITAL', 'EMERALD HOSPITAL', 0, 0, 0, 0, 0, ''),
(17, 'GLADSTONE HOSPITAL', 'GLADSTONE HOSPITAL', 'GLADSTONE HOSPITAL', 'GLADSTONE HOSPITAL', 'Queensland', 'GLADSTONE', '4680', 4, 5, 'Park St, GLADSTONE, 4680', 'hos1.jpeg', 'GLADSTONE HOSPITAL', 'GLADSTONE HOSPITAL', 0, 0, 0, 0, 0, ''),
(18, 'MOUNT MORGAN HOSPITAL', 'MOUNT MORGAN HOSPITAL', 'MOUNT MORGAN HOSPITAL', 'MOUNT MORGAN HOSPITAL', 'Queensland', 'MOUNT MORGAN', '4714', 4, 5, 'Morgan St, MOUNT MORGAN, 4714', 'hos2.jpg', 'MOUNT MORGAN HOSPITAL', 'MOUNT MORGAN HOSPITAL', 0, 0, 0, 0, 0, ''),
(19, 'MOURA HOSPITAL', 'MOURA HOSPITAL', 'MOURA HOSPITAL', 'MOURA HOSPITAL', 'Queensland', 'MOURA', '4718', 4, 5, '14 Nott St, MOURA, 4718', 'hos2.jpg', 'MOURA HOSPITAL', 'MOURA HOSPITAL', 0, 0, 0, 0, 0, ''),
(20, 'ROCKHAMPTON BASE HOSPITAL', 'ROCKHAMPTON BASE HOSPITAL', 'ROCKHAMPTON BASE HOSPITAL', 'ROCKHAMPTON BASE HOSPITAL', 'Queensland', 'ROCKHAMPTON', '4700', 4, 5, 'Canning St, ROCKHAMPTON, 4700', 'hos1.jpeg', 'ROCKHAMPTON BASE HOSPITAL', 'ROCKHAMPTON BASE HOSPITAL', 0, 0, 0, 0, 0, ''),
(21, 'SPRINGSURE HOSPITAL', 'SPRINGSURE HOSPITAL', 'SPRINGSURE HOSPITAL', 'SPRINGSURE HOSPITAL', 'Queensland', 'SPRINGSURE', '4722', 4, 5, '21 Woodbine St, SPRINGSURE, 4722', 'hos1.jpeg', 'SPRINGSURE HOSPITAL', 'SPRINGSURE HOSPITAL', 0, 0, 0, 0, 0, ''),
(22, 'THEODORE HOSPITAL', 'THEODORE HOSPITAL', 'THEODORE HOSPITAL', 'THEODORE HOSPITAL', 'Qeensland', 'THEODORE', '4719', 4, 5, 'The Boulevard, THEODORE, 4719', 'hos1.jpeg', 'THEODORE HOSPITAL', 'THEODORE HOSPITAL', 0, 0, 0, 0, 0, ''),
(23, 'WOORABINDA HOSPITAL', 'WOORABINDA HOSPITAL', 'WOORABINDA HOSPITAL', 'WOORABINDA HOSPITAL', 'Queensland', 'WOORABINDA', '4702', 4, 5, '1 Munns Dr,  WOORABINDA, 4702', 'hos2.jpg', 'WOORABINDA HOSPITAL', 'WOORABINDA HOSPITAL', 0, 0, 0, 0, 0, ''),
(24, 'ALPHA HOSPITAL', 'ALPHA HOSPITAL', 'ALPHA HOSPITAL', 'ALPHA HOSPITAL', 'Queensland', 'ALPHA', '4724', 4, 6, '3 Gordon St, ALPHA, 4724', 'hos2.jpg', 'ALPHA HOSPITAL', 'ALPHA HOSPITAL', 0, 0, 0, 0, 0, ''),
(25, 'BARCALDINE HOSPITAL', 'BARCALDINE HOSPITAL', 'BARCALDINE HOSPITAL', 'BARCALDINE HOSPITAL', 'Queensland', 'BARCALDINE', '4725', 4, 6, '25 Oak St, BARCALDINE, 4725', 'hos2.jpg', 'BARCALDINE HOSPITAL', 'BARCALDINE HOSPITAL', 0, 0, 0, 0, 0, ''),
(26, 'BLACKALL HOSPITAL', 'BLACKALL HOSPITAL', 'BLACKALL HOSPITAL', 'BLACKALL HOSPITAL', 'Queensland', 'BLACKALL', '4472', 4, 6, 'Shamrock St, BLACKALL, 4472', 'hos2.jpg', 'BLACKALL HOSPITAL', 'BLACKALL HOSPITAL', 0, 0, 0, 0, 0, ''),
(27, 'LONGREACH HOSPITAL', 'LONGREACH HOSPITAL', 'LONGREACH HOSPITAL', 'LONGREACH HOSPITAL', 'Queensland', 'LONGREACH', '4730', 4, 6, 'Jabiru St, LONGREACH, 4730', 'hos1.jpeg', 'LONGREACH HOSPITAL', 'LONGREACH HOSPITAL', 0, 0, 0, 0, 0, ''),
(28, 'WINTON HOSPITAL', 'WINTON HOSPITAL', 'WINTON HOSPITAL', 'WINTON HOSPITAL', 'Queensland', 'WINTON', '4735', 4, 6, 'Bloomfield St, WINTON, 4735', 'hos2.jpg', 'WINTON HOSPITAL', 'WINTON HOSPITAL', 0, 0, 0, 0, 0, ''),
(29, 'ELLEN BARRON FAMILY CENTRE', 'ELLEN BARRON FAMILY CENTRE', 'ELLEN BARRON FAMILY CENTRE', 'ELLEN BARRON FAMILY CENTRE', 'Queensland', 'CHERMSIDE', '4032', 4, 7, 'Hamilton Rd, CHERMSIDE, 4032', 'hos1.jpeg', 'ELLEN BARRON FAMILY CENTRE', 'ELLEN BARRON FAMILY CENTRE', 0, 0, 0, 0, 0, ''),
(30, 'LADY CILENTO CHILDREN\'S HOSPITAL', 'LADY CILENTO CHILDREN\'S HOSPITAL', 'LADY CILENTO CHILDREN\'S HOSPITAL', 'LADY CILENTO CHILDREN\'S HOSPITAL', 'Queensland', 'SOUTH BRISBANE', '4101', 4, 7, '501 Stanley St, SOUTH BRISBANE, 4101', 'hos2.jpg', 'LADY CILENTO CHILDREN\'S HOSPITAL', 'LADY CILENTO CHILDREN\'S HOSPITAL', 0, 0, 0, 0, 0, ''),
(31, 'CHERBOURG HOSPITAL', 'CHERBOURG HOSPITAL', 'CHERBOURG HOSPITAL', 'CHERBOURG HOSPITAL', 'Queensland', 'CHERBOURG', '4605', 4, 8, 'Fisher St, CHERBOURG, 4605', 'hos2.jpg', 'CHERBOURG HOSPITAL', 'CHERBOURG HOSPITAL', 0, 0, 0, 0, 0, ''),
(32, 'Gold Coast Private Hospital', 'Gold Coast Private Hospital', 'Gold Coast Private Hospital', 'Gold Coast Private Hospital', 'Queensland', 'Gold Coast', '4215', 4, 9, '14 Hill St, Southport QLD', 'GCPH_-_Contact_Us.jpg', '', '', 70, 34, 67, 56, 20, '<p>The Gold Coast Private Hospital is a private hospital facility in Southport, Gold Coast that replaced Allamanda Private Hospital from March 12, 2016. The $230 million facility opened with 284 beds and 13 operating theatres with capacity to expand to 400 beds and 21 theatres, in line with demand.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(100) NOT NULL,
  `ThumbName` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(100) NOT NULL,
  `page` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(500) NOT NULL,
  `meta_desc` text NOT NULL,
  `content` text NOT NULL,
  `color` varchar(500) NOT NULL,
  `alt` varchar(500) NOT NULL,
  `img_title` varchar(500) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `page`, `title`, `keywords`, `meta_desc`, `content`, `color`, `alt`, `img_title`, `datetime`) VALUES
(10, 'Home Page', 'Home - House Med', 'Home - House Med', 'Home - House Med', '<p>This webpage provides information on the Australian Government initiatives that support Australia&rsquo;s maternity services. This includes the National Strategic Approach to Maternity Services, the Pregnancy Care Guidelines, national maternal and perinatal data and the Pregnancy Birth and Baby service.&nbsp;</p>', '', '', '', '2019-10-17 22:11:31'),
(11, 'About us', 'About House Med', 'About House Med', 'About House Med', '<div class=\"heading\">\r\n<h2>Good Health<br />Moves Us Forward</h2>\r\n<div class=\"line\">&nbsp;</div>\r\n</div>\r\n<p>The MCN will work to support and grow a vibrant network of maternity consumers, to maintain the advocacy for effective implementation of the Maternity Services Action Plan and every family having a known midwife for pregnancy, birth and postnatal care.</p>', 'h1-video-img.jpg', 'About House Med', 'About House Med', '2019-10-17 22:31:10'),
(15, 'Contact us', 'Contact us - House Med', 'Contact us - House Med', 'Contact us - House Med', '<ul>\r\n<li><em class=\"fa fa-phone\">&nbsp;</em> +61 9 5748 39</li>\r\n<li><em class=\"fa fa-envelope-o\">&nbsp;</em> sales@domainname.com</li>\r\n<li><em class=\"fa fa-clock-o\">&nbsp;</em> Mon - Fri - 9:00am to 5Pm</li>\r\n</ul>', '', '', '', '2019-10-02 08:14:11'),
(18, 'Hospitals', 'List of Hospitals', 'List of Hospitals', 'List of Hospitals', '', '', '', '', '2019-10-02 08:14:39'),
(19, 'Search Result', 'Search Result ', 'Search Result ', 'Search Result ', '', '', '', '', '2019-10-02 08:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(100) NOT NULL,
  `ip` varchar(512) NOT NULL,
  `status` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `suser` varchar(255) NOT NULL,
  `sid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `ip`, `status`, `datetime`, `suser`, `sid`) VALUES
(3, '::1', 1, '2019-07-29 08:11:27', 'admin', 1),
(4, '::1', 1, '2019-07-30 07:07:05', 'admin', 1),
(5, '::1', 1, '2019-08-05 08:06:57', 'admin', 1),
(6, '::1', 1, '2019-08-06 07:23:59', 'admin', 1),
(7, '::1', 1, '2019-10-02 08:08:17', 'admin', 1),
(8, '::1', 1, '2019-10-03 06:38:45', 'admin', 1),
(9, '::1', 1, '2019-10-06 03:27:25', 'admin', 1),
(10, '::1', 1, '2019-10-11 00:36:33', 'admin', 1),
(11, '::1', 1, '2019-10-11 00:38:17', 'admin', 1),
(12, '::1', 1, '2019-10-13 02:56:21', 'admin', 1),
(13, '::1', 1, '2019-10-14 09:30:04', 'admin', 1),
(14, '::1', 1, '2019-10-14 14:41:59', 'admin', 1),
(15, '::1', 1, '2019-10-15 06:50:05', 'admin', 1),
(16, '127.0.0.1', 1, '2019-10-17 05:18:32', 'admin', 1),
(17, '::1', 1, '2019-10-17 22:08:32', 'admin', 1),
(18, '::1', 1, '2019-10-17 23:06:25', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(100) NOT NULL,
  `sno` int(100) NOT NULL,
  `area` int(100) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `sno`, `area`, `name`) VALUES
(4, 1, 4, 'Cairns and Hinterland'),
(5, 2, 4, 'Central Queensland'),
(6, 3, 4, 'Central West'),
(7, 4, 4, 'Children\'s Health Queensland'),
(8, 5, 4, 'Darling Downs'),
(9, 5, 4, 'Gold Coast'),
(10, 6, 4, 'Mackay'),
(11, 1, 5, 'Wollongong'),
(12, 2, 5, 'Liverpool');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(100) NOT NULL,
  `hid` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `stars` int(100) NOT NULL,
  `comment` text NOT NULL,
  `status` int(10) NOT NULL,
  `delivery` int(10) NOT NULL,
  `cost_friendly` int(10) NOT NULL,
  `professionalism` int(10) NOT NULL,
  `comment_review` int(10) NOT NULL,
  `cleanliness` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `hid`, `name`, `email`, `stars`, `comment`, `status`, `delivery`, `cost_friendly`, `professionalism`, `comment_review`, `cleanliness`) VALUES
(1, 1, 'aj', 'a@gmail.com', 3, '<p>all good</p>', 1, 3, 5, 3, 0, 4),
(2, 1, 'test', 'test', 3, '<p>fine</p>', 1, 4, 3, 5, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(100) NOT NULL,
  `serial` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `img` varchar(500) NOT NULL,
  `alt` varchar(500) NOT NULL,
  `img_title` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `serial`, `name`, `city`, `img`, `alt`, `img_title`, `content`, `datetime`) VALUES
(1, 1, 'Hennery', 'Auckland', '', '', '', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>', '2019-07-29 10:05:51'),
(2, 2, 'Tom', 'Auckland', '', '', '', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>', '2019-07-29 10:06:16'),
(3, 3, 'Micheal', 'Auckland', '', '', '', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>', '2019-07-29 10:06:52'),
(4, 4, 'Sam', 'Auckland', '', '', '', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>', '2019-07-29 10:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `lname`, `email`, `address`, `username`, `password`, `datetime`) VALUES
(1, 'HOUSE', 'Med', 'info@domainname.com', '', 'admin', '$2y$10$53n4uhncSgj1YgWT249wcuPlq04rJu70noIfZ0FmXOK8QpfzaG2ki', '2019-10-17 22:08:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
