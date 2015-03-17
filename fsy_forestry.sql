-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2012 at 01:09 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fsy_forestry`
--
CREATE DATABASE `fsy_forestry` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fsy_forestry`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_audit_log`
--

CREATE TABLE IF NOT EXISTS `tbl_audit_log` (
  `comp_name` varchar(30) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `datelog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_addr` varchar(20) NOT NULL,
  `operation` longtext NOT NULL,
  `host` varchar(200) NOT NULL,
  `referer` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_audit_log`
--

INSERT INTO `tbl_audit_log` (`comp_name`, `user_id`, `datelog`, `ip_addr`, `operation`, `host`, `referer`) VALUES
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin Admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php?r=dWFz'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - afd with Contractor Number:FSY201212082336337049', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php?r=ZmFpbGVk'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - adad with Contractor Number:FSY201212090026428710', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - adad with Contractor Number:FSY201212090026465001', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - adad with Contractor Number:FSY201212090026506406', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - adad with Contractor Number:FSY201212090026518237', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - adad with Contractor Number:FSY201212090026518922', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - adad with Contractor Number:FSY201212090031237720', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - Olu Falae with Contractor Number:FSY201212090116339936', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - adfadf with Contractor Number:FSY201212090122341695', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - adfadf with Contractor Number:FSY201212090125316209', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - weadfasd with Contractor Number:FSY201212091236193437', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - redfgsfadfadfadf with Contractor Number:FSY201212091241457211', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/myforestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/myforestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/myforestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - iweieroi with Contractor Number:FSY201212091814063482', 'localhost', 'http://localhost/myforestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor  ID:', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212091236193437'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor  ID:', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212091236193437'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor  ID:', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212091236193437'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor  ID:', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212091236193437'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor  ID:', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212090122341695'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor  ID:', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id='),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor  ID:', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212090122341695'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor  ID:', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212090122341695'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin Admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php?r=ZmFpbGVk'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor adfadf ID:FSY201212090122341695', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212090122341695'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor adfadf ID:FSY201212090122341695', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212090122341695'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor adfadf ID:FSY201212090125316209', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212090125316209'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor redfgsfadfadfadf ID:FSY201212091241457211', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212091241457211'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - Oluwagbemiro Diamond with Contractor Number:FSY201212110502113487', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor Oluwagbemiro Diamond ID:FSY201212110502113487', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212110502113487'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor Johnson Ahmed ID:FSY201212090031237720', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212090031237720'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin added a new contractor - Hassan Johnson with Contractor Number:FSY201212110658426092', 'localhost', 'http://localhost/forestry/fsy/_registration_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '0000-00-00 00:00:00', '127.0.0.1', 'Admin admin uploaded picture for Contractor Hassan Johnson ID:FSY201212110658426092', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212110658426092'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-11 17:19:57', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-12 18:32:03', '127.0.0.1', 'Admin Admin uploaded picture for Contractor iweieroi ID:FSY201212091814063482', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212091814063482'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-13 13:08:49', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-14 15:12:21', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-15 05:42:54', '127.0.0.1', 'Admin admin added a new contractor account for - FSY201212110658426092', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_account_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-15 07:09:40', '127.0.0.1', 'Admin admin updated and added a contractor account for - FSY201212110658426092', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_account_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-15 08:09:30', '127.0.0.1', 'Admin admin added a new contractor account for - FSY201212090125316209', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_account_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-15 08:59:26', '127.0.0.1', 'Admin admin updated and added a contractor account for - FSY201212090125316209', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_account_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-15 09:03:16', '127.0.0.1', 'Admin admin updated and added a contractor account for - FSY201212090125316209', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_account_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-15 09:07:23', '127.0.0.1', 'Admin admin updated and added a contractor account for - FSY201212090125316209', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_account_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-15 09:12:54', '127.0.0.1', 'Admin admin uploaded picture for Contractor ITex Furnitures ID:FSY201212090125316209', 'localhost', 'http://localhost/forestry/fsy/upload.php?con_id=FSY201212090125316209'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-15 10:32:18', '127.0.0.1', 'Admin admin updated and added a contractor account for - FSY201212090125316209', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_account_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-15 10:34:45', '127.0.0.1', 'Admin admin updated and added a contractor account for - FSY201212090125316209', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_account_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-15 10:36:04', '127.0.0.1', 'Admin admin updated and added a contractor account for - FSY201212090125316209', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_account_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-15 23:22:53', '127.0.0.1', 'Admin admin Updated contractor account information of contractor - with Contractor Number:FSY201212090125316209', 'localhost', 'http://localhost/forestry/fsy/_update_contractor_account.php?con_id=FSY201212090125316209'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-15 23:36:14', '127.0.0.1', 'Admin admin Updated contractor account information of contractor - with Contractor Number:FSY201212090125316209', 'localhost', 'http://localhost/forestry/fsy/_update_contractor_account.php?con_id=FSY201212090125316209'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-15 23:56:54', '127.0.0.1', 'Admin admin Updated contractor account information of contractor - with Contractor Number:FSY201212090125316209', 'localhost', 'http://localhost/forestry/fsy/_update_contractor_account.php?con_id=FSY201212090125316209'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-16 00:00:58', '127.0.0.1', 'Admin admin updated and added a contractor account for - FSY201212110658426092', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_account_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-16 00:04:15', '127.0.0.1', 'Admin admin Updated contractor account information of contractor - with Contractor Number:FSY201212110658426092', 'localhost', 'http://localhost/forestry/fsy/_update_contractor_account.php?con_id=FSY201212110658426092');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contractor`
--

CREATE TABLE IF NOT EXISTS `tbl_contractor` (
  `id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tin` varchar(20) NOT NULL,
  `company_reg_number` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `picture` varchar(120) NOT NULL,
  `business_area` text NOT NULL,
  `referee1_name` varchar(50) NOT NULL,
  `referee1_address` text NOT NULL,
  `referee1_phone` varchar(20) NOT NULL,
  `referee2_name` varchar(50) NOT NULL,
  `referee2_address` text NOT NULL,
  `referee2_phone` varchar(20) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `maker_id` varchar(50) NOT NULL,
  `modifieddate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contractor`
--

INSERT INTO `tbl_contractor` (`id`, `name`, `tin`, `company_reg_number`, `phone`, `address`, `picture`, `business_area`, `referee1_name`, `referee1_address`, `referee1_phone`, `referee2_name`, `referee2_address`, `referee2_phone`, `datereg`, `maker_id`, `modifieddate`) VALUES
('FSY201212090031237720', 'Johnson Ahmed', 'TIN89705', 'RC985498549', '08052855249', 'No 50, Senator Ibikunle Amosun Crescent, Abeokuta', '../images/uploads/contractor/FSY201212090031237720_Ibikunle_Amosun.jpg', 'Accounting', 'Mr Lanre Amosun', 'No 890, Olumide Oladeinde Road, Ijebu', '08067890567', 'Professor Pat Diamond', 'No 890, Olumide Oladeinde Road, Oru', '08078956789', '2012-12-11 06:44:41', 'admin', '0000-00-00 00:00:00'),
('FSY201212090116339936', 'Olu Falae', 'HGNBV,JHNB', '', 'HJNMBVJHBV', 'weoijaksd', 'blog.png', 'pwesfjklsgafd', 'adfadf', 'afadgad', 'fgsfdgsf', 'dghdgfnhd', 'dhjgn', '', '2012-12-09 00:16:33', 'admin', '0000-00-00 00:00:00'),
('FSY201212090122341695', 'adfadf', 'ADFASDASDFAS', '', 'ADFASFASDF', 'asfdadsfads', '../images/uploads/contractor/FSY201212090122341695_yeah.jpg', 'afdsfsa', 'dsfasdfsd', 'sdfasdfasdf', 'asdfasdf', 'asfddsaf', 'asdfsdaf', 'asdfdsafds', '2012-12-10 21:45:41', 'admin', '0000-00-00 00:00:00'),
('FSY201212090125316209', 'ITex Furnitures', '789098', 'LAG7867', '08067890987', 'No 123, Saw Mill Street, Wuse, Abuja', '../images/uploads/contractor/FSY201212090125316209_DSC00362.JPG', 'Ijebu Igbo', 'Mr Rahmond Calderon', '15, Calderon Street, Spain', '08023456798', 'Dr. Cristiano Ronaldo', '15, Benabau Villa, Madrid, Spain', '08076534798', '2012-12-15 10:12:54', 'admin', '0000-00-00 00:00:00'),
('FSY201212091236193437', 'weadfasd', 'ASDFADS', 'ASDFASDF', 'AS', 'asfdadf', 'slide01.jpg', 'asfdadsf', 'sadfasdfga', 'agadsgasdg', 'adfadsf', 'asfadsf', 'asdfasdf', 'asfadsfasd', '2012-12-09 11:36:19', 'admin', '0000-00-00 00:00:00'),
('FSY201212091241457211', 'redfgsfadfadfadf', 'ADFAF', 'DSFASDF', 'L;SLSDFLK', 'l;fklfk', '../images/uploads/contractor/FSY201212091241457211_djzeez2.PNG', 'l;fkfk', '\\'';dk,fkf', 'l;flkglk', 'fdgdfdf', 'wegarebgf', 'afdafddfadf', 'dsadf', '2012-12-10 23:18:38', 'admin', '0000-00-00 00:00:00'),
('FSY201212091814063482', 'iweieroi', 'OIROIROI', 'Ã²PRIROP', 'REIOTROITOI', 'trrthiio', '../images/uploads/contractor/FSY201212091814063482_Penguins.jpg', 'rrgyth', 'oirefitio', 'roitiy', 'iritiogt', 'ioroiroirt', 'oiroiroir', 'oieoiroiti', '2012-12-12 19:32:03', 'admin', '0000-00-00 00:00:00'),
('FSY201212110502113487', 'Oluwagbemiro Diamond', 'AK123456', 'RC123456', '2347033906198', 'No 120, Agbowo Street, Lagos', '../images/uploads/contractor/FSY201212110502113487_djzeez.jpg', 'Gedu', 'Mr Rahaman Johnson', 'No 67 Johnson Street, Abuja', '2347038679089', 'Mrs Olu Shodeinde', 'No 68, Oke Ilewo Street Abeokuta', '94094394390', '2012-12-11 05:03:13', 'admin', '0000-00-00 00:00:00'),
('FSY201212110658426092', 'Hassan Johnson', 'TE85859', 'RC123456', '08052855249', 'No 60 Oluyole street, Lagos', '../images/uploads/contractor/FSY201212110658426092_forests.jpg', 'Ijebu Igbo Forestry Reserve', 'Mr Rahaman Johnson', 'No 60 Oluyole street, Lagos', '08067890567', 'Mrs Olu Shodeinde', 'No 60 Oluyole street, Lagos', '94094394390', '2012-12-11 06:59:25', 'admin', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contractor_account`
--

CREATE TABLE IF NOT EXISTS `tbl_contractor_account` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `amount_deposited` double NOT NULL,
  `teller_number` varchar(20) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_number` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_date` date NOT NULL,
  `maker_id` varchar(100) NOT NULL,
  `contractor_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contractor_id` (`contractor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_contractor_account`
--

INSERT INTO `tbl_contractor_account` (`id`, `amount_deposited`, `teller_number`, `bank_name`, `account_number`, `created_date`, `payment_date`, `maker_id`, `contractor_id`) VALUES
(1, 130000, '52452524455', 'UNION BANK PLC', '456534366353', '2012-12-16 00:04:15', '2012-11-11', 'admin', 'FSY201212110658426092'),
(2, 1500000, '425352357891', 'ZENITH BANK PLCC', '00534639999', '2012-12-15 23:56:54', '2012-10-10', 'admin', 'FSY201212090125316209');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contractor_account_audit`
--

CREATE TABLE IF NOT EXISTS `tbl_contractor_account_audit` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `amount_deposited` double NOT NULL,
  `teller_number` varchar(20) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_number` varchar(20) NOT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `payment_date` date NOT NULL,
  `new_amount_deposited` double NOT NULL,
  `new_teller_number` varchar(20) NOT NULL,
  `new_bank_name` varchar(50) NOT NULL,
  `new_account_number` varchar(20) NOT NULL,
  `new_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `new_payment_date` varchar(20) NOT NULL,
  `maker_id` varchar(100) NOT NULL,
  `editor_id` varchar(100) NOT NULL,
  `contractor_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_contractor_account_audit`
--

INSERT INTO `tbl_contractor_account_audit` (`id`, `amount_deposited`, `teller_number`, `bank_name`, `account_number`, `created_date`, `payment_date`, `new_amount_deposited`, `new_teller_number`, `new_bank_name`, `new_account_number`, `new_created_date`, `new_payment_date`, `maker_id`, `editor_id`, `contractor_id`) VALUES
(1, 200000, '42535235', 'ZENITH BANK PLC', '009346324667', '2012-12-15 23:22:53', '0000-00-00', 300000, '42535235789', 'ZENITH BANK PL COMPANY', '005346324667', '2012-12-15 23:36:14', '2012-07-20', 'admin', 'admin', 'FSY201212090125316209'),
(2, 300000, '42535235789', 'ZENITH BANK PL COMPANY', '005346324667', '2012-12-15 23:36:14', '0000-00-00', 200000, '425352357891', 'ZENITH BANK PLCC', '00534639999', '2012-12-15 23:56:54', '2012-10-10', 'admin', 'admin', 'FSY201212090125316209'),
(3, 70000, '5245252', 'UNION BANK', '45653436635', '2012-12-16 00:00:58', '2012-01-01', 30000, '52452524455', 'UNION BANK PLC', '456534366353', '2012-12-16 00:04:15', '2012-11-11', 'admin', 'admin', 'FSY201212110658426092');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contractor_account_history`
--

CREATE TABLE IF NOT EXISTS `tbl_contractor_account_history` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `amount_deposited` double NOT NULL,
  `teller_number` varchar(20) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_number` varchar(20) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `payment_date` date NOT NULL,
  `maker_id` varchar(100) NOT NULL,
  `contractor_id` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_contractor_account_history`
--

INSERT INTO `tbl_contractor_account_history` (`id`, `amount_deposited`, `teller_number`, `bank_name`, `account_number`, `created_date`, `payment_date`, `maker_id`, `contractor_id`) VALUES
(1, 700000, '86557657', 'UNITED BANK OF AFRICA (UBA)', '54364567476', '2012-12-15 06:42:54', '0000-00-00', 'Admin', 'FSY201212110658426092'),
(2, 100000, '4653455', 'GTBANK', '54954905490', '2012-12-15 08:09:40', '0000-00-00', 'Admin', 'FSY201212110658426092'),
(3, 400000, '562345', 'FCMB', '234567890', '2012-12-15 09:09:30', '0000-00-00', 'Admin', 'FSY201212090125316209'),
(4, 600000, '95495490', 'FCMB', '9549054905490', '2012-12-15 09:59:26', '0000-00-00', 'Admin', 'FSY201212090125316209'),
(5, 20000, '436354454', 'UNITED BANK OF AFRICA (UBA)', '423453563', '2012-12-15 10:03:16', '0000-00-00', 'Admin', 'FSY201212090125316209'),
(6, 40000, '5674678', 'FCMB', '1234567', '2012-12-15 10:07:23', '0000-00-00', 'Admin', 'FSY201212090125316209'),
(7, 600000, '432543524', 'UNITED BANK OF AFRICA (UBA)', '432545353', '2012-12-15 11:32:18', '0000-00-00', 'Admin', 'FSY201212090125316209'),
(8, 40000, '42535235234523', 'ZENITH BANK', '4233463246', '2012-12-15 11:34:45', '2012-01-01', 'Admin', 'FSY201212090125316209'),
(9, 100000, '42535235', 'ZENITH BANK', '4233463246', '2012-12-15 11:36:04', '2008-08-31', 'Admin', 'FSY201212090125316209'),
(10, 200000, '42535235', 'ZENITH BANK PLC', '009346324667', '2012-12-16 00:22:53', '0000-00-00', 'admin', 'FSY201212090125316209'),
(11, 300000, '42535235789', 'ZENITH BANK PL COMPANY', '005346324667', '2012-12-16 00:36:14', '0000-00-00', 'admin', 'FSY201212090125316209'),
(12, 200000, '425352357891', 'ZENITH BANK PLCC', '00534639999', '2012-12-16 00:56:54', '2012-10-10', 'admin', 'FSY201212090125316209'),
(13, 70000, '5245252', 'UNION BANK', '45653436635', '2012-12-16 01:00:58', '2012-01-01', 'admin', 'FSY201212110658426092'),
(14, 30000, '52452524455', 'UNION BANK PLC', '456534366353', '2012-12-16 01:04:15', '2012-11-11', 'admin', 'FSY201212110658426092');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contractor_transaction`
--

CREATE TABLE IF NOT EXISTS `tbl_contractor_transaction` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `wood_type` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `reserved_location` varchar(50) NOT NULL,
  `attended_by` varchar(50) NOT NULL,
  `authorized_by` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `contractor_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contractor_id` (`contractor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(35) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `title` varchar(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `dep` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `gralevel` varchar(5) NOT NULL,
  `qua` varchar(50) NOT NULL,
  `acclevel` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `imagepath` varchar(150) NOT NULL,
  `phone` varchar(18) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `acclevel` (`acclevel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `title`, `fname`, `mname`, `lname`, `password`, `sex`, `dob`, `dep`, `rank`, `gralevel`, `qua`, `acclevel`, `email`, `address`, `imagepath`, `phone`, `datereg`) VALUES
(1, 'admin', 'Mr', 'Verde', 'SIS', 'Demo', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'Male', '04-04-2012', 'ICT', '', '10', 'Bsc', '1', 'diamonddemola@yahoo.co.uk', 'Y do you wanna know', '', '0802334563453434', '2012-12-08 17:58:32');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_contractor_account`
--
ALTER TABLE `tbl_contractor_account`
  ADD CONSTRAINT `tbl_contractor_account_ibfk_1` FOREIGN KEY (`contractor_id`) REFERENCES `tbl_contractor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_contractor_transaction`
--
ALTER TABLE `tbl_contractor_transaction`
  ADD CONSTRAINT `tbl_contractor_transaction_ibfk_1` FOREIGN KEY (`contractor_id`) REFERENCES `tbl_contractor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
