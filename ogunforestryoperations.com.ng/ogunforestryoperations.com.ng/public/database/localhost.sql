-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2013 at 10:52 PM
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
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-16 00:04:15', '127.0.0.1', 'Admin admin Updated contractor account information of contractor - with Contractor Number:FSY201212110658426092', 'localhost', 'http://localhost/forestry/fsy/_update_contractor_account.php?con_id=FSY201212110658426092'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-16 02:13:01', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-16 09:26:23', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-16 15:43:22', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-16 18:09:14', '127.0.0.1', 'Admin Admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php?r=ZmFpbGVk'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-17 14:11:04', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php?r=dWFz'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-17 18:52:31', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forest/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-17 19:12:14', '127.0.0.1', 'Admin admin updated the transaction status for Contractor - FSY201212090122341695', 'localhost', 'http://localhost/forest/fsy/update_transaction_status_preview.php'),
('BLUECHIPTECH-HP', 'Diamond Ademola ', '2012-12-17 19:50:46', '127.0.0.1', 'Admin Diamond Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Diamond Ademola ', '2012-12-18 17:10:56', '127.0.0.1', 'Admin Diamond Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php?r=dWFz'),
('BLUECHIPTECH-HP', 'Diamond Ademola ', '2012-12-18 17:17:25', '127.0.0.1', 'Admin Diamond added a new contractor account for - FSY201212090122341695', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_account_preview.php'),
('BLUECHIPTECH-HP', 'Diamond Ademola ', '2012-12-18 18:02:36', '127.0.0.1', 'Admin Diamond added a new transaction for - FSY201212090122341695', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_transaction_preview.php'),
('BLUECHIPTECH-HP', 'Diamond Ademola ', '2012-12-18 18:54:53', '127.0.0.1', 'Admin Diamond added a new transaction for - FSY201212090122341695', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_transaction_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 18:56:59', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 18:59:58', '127.0.0.1', 'Admin admin updated the transaction status for Contractor - FSY201212090122341695', 'localhost', 'http://localhost/forestry/fsy/update_transaction_status_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 19:01:01', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forest/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 19:01:13', '127.0.0.1', 'Admin admin updated the transaction status for Contractor - FSY201212090122341695', 'localhost', 'http://localhost/forest/fsy/update_transaction_status_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 19:03:07', '127.0.0.1', 'Admin admin updated the transaction status for Contractor - FSY201212090122341695', 'localhost', 'http://localhost/forestry/fsy/update_transaction_status_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 19:11:52', '127.0.0.1', 'Admin admin updated the transaction status for Contractor - FSY201212090122341695', 'localhost', 'http://localhost/forestry/fsy/update_transaction_status_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 19:11:54', '127.0.0.1', 'Admin admin updated the transaction status for Contractor - FSY201212090122341695', 'localhost', 'http://localhost/forestry/fsy/update_transaction_status_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 19:20:10', '127.0.0.1', 'Admin admin updated the transaction status for Contractor - FSY201212090122341695', 'localhost', 'http://localhost/forestry/fsy/update_transaction_status_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 19:21:34', '127.0.0.1', 'Admin admin updated the transaction status for Contractor - FSY201212110658426092', 'localhost', 'http://localhost/forestry/fsy/update_transaction_status_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 19:25:04', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 19:27:27', '127.0.0.1', 'Admin admin updated the transaction status for Contractor - FSY201212110658426092', 'localhost', 'http://localhost/forestry/fsy/update_transaction_status_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 19:28:30', '127.0.0.1', 'Admin admin updated the transaction status for Contractor - FSY201212090122341695', 'localhost', 'http://localhost/forestry/fsy/update_transaction_status_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 21:34:12', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 23:16:24', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 23:36:02', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 23:48:23', '127.0.0.1', 'Admin admin added a new transaction for - FSY201212110658426092', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_transaction_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-18 23:53:20', '127.0.0.1', 'Admin admin added a new transaction for - FSY201212110658426092', 'localhost', 'http://localhost/forestry/fsy/_new_contractor_transaction_preview.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2012-12-22 04:58:21', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/'),
('BLUECHIPTECH-HP', 'Diamond Ademola ', '2012-12-22 10:45:57', '127.0.0.1', 'Admin Diamond Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-01-22 05:26:05', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-01-22 08:26:55', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-05 13:18:57', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php?r=ZmFpbGVk'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-09 09:25:21', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 20:00:33', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 20:16:56', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 20:27:00', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 20:31:06', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 21:21:55', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 21:22:10', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php?r=dWFz'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 21:22:39', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 21:23:54', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 21:27:42', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php?r=dWFz'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 21:32:03', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 21:56:12', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 21:59:54', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 22:18:56', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 22:24:21', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 22:24:45', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 22:27:39', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 22:37:28', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 22:39:48', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 22:49:45', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 22:50:06', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 22:51:13', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-12 22:58:03', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-14 10:36:42', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php'),
('BLUECHIPTECH-HP', 'Demo Verde', '2013-02-14 10:39:22', '127.0.0.1', 'Admin admin Successfully logged in', 'localhost', 'http://localhost/forestry/fsy/index.php');

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
('FSY201212090122341695', 'Ladan Ventures', '455364444', 'RC6789077', '080994467890', 'No 980, Olubolade Street, Gbagada, Lagos, Nigeria', '../images/uploads/contractor/FSY201212090122341695_yeah.jpg', 'Ijebu Igbo', 'Mr John Kufor', 'Same as Above', '080808445455', 'Dr Ben Carson', 'No 320, Ogun Crescent, Maitama, Abuja, Nigeria', '08079805678', '2012-12-18 18:15:05', 'admin', '0000-00-00 00:00:00'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_contractor_account`
--

INSERT INTO `tbl_contractor_account` (`id`, `amount_deposited`, `teller_number`, `bank_name`, `account_number`, `created_date`, `payment_date`, `maker_id`, `contractor_id`) VALUES
(1, 121000, '52452524455', 'UNION BANK PLC', '456534366353', '2012-12-16 00:04:15', '2012-11-11', 'admin', 'FSY201212110658426092'),
(2, 1497000, '425352357891', 'ZENITH BANK PLCC', '00534639999', '2012-12-15 23:56:54', '2012-10-10', 'admin', 'FSY201212090125316209'),
(3, 2000, '98459848945', 'UNION BANK', '845985986598', '2012-12-18 17:17:25', '2012-10-16', 'Diamond', 'FSY201212090122341695');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
(14, 30000, '52452524455', 'UNION BANK PLC', '456534366353', '2012-12-16 01:04:15', '2012-11-11', 'admin', 'FSY201212110658426092'),
(15, 7000, '98459848945', 'UNION BANK', '845985986598', '2012-12-18 18:17:25', '2012-10-16', 'Diamond', 'FSY201212090122341695');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contractor_transaction`
--

CREATE TABLE IF NOT EXISTS `tbl_contractor_transaction` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tree_type` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `reserved_location` varchar(50) NOT NULL,
  `attended_by` varchar(50) NOT NULL,
  `authorized_by` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `maker_id` varchar(100) NOT NULL,
  `contractor_id` varchar(100) NOT NULL,
  `new_balance` double NOT NULL,
  `transaction_cost` double NOT NULL,
  `approval_status` int(11) NOT NULL DEFAULT '0',
  `remarks` text,
  PRIMARY KEY (`id`),
  KEY `contractor_id` (`contractor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_contractor_transaction`
--

INSERT INTO `tbl_contractor_transaction` (`id`, `tree_type`, `quantity`, `reserved_location`, `attended_by`, `authorized_by`, `date`, `maker_id`, `contractor_id`, `new_balance`, `transaction_cost`, `approval_status`, `remarks`) VALUES
(1, 2, 10, 'Onolulu Forest Reserves', 'admin', '', '2012-12-16', '', 'FSY201212090122341695', 0, 0, 1, 'The data was fantastic'),
(2, 2, 3, 'IJEBU IGBO', 'admin', '', '2012-12-17', '', 'FSY201212090125316209', 0, 0, 0, NULL),
(5, 2, 3, 'ORU', 'admin', 'admin', '2012-12-17', '', 'FSY201212110658426092', 0, 0, 2, 'He does not satisfy all the requiremnts'),
(6, 2, 2, 'IJEBU IGBO', 'Diamond', 'admin', '2012-12-18', '', 'FSY201212090122341695', 0, 0, 1, 'Mr Ladan\\''s Records shows that he has paid all the money that needs to be paid'),
(7, 1, 2, 'IJEBU IGBO', 'Diamond', '', '2012-12-18', '', 'FSY201212090122341695', 0, 0, 0, NULL),
(8, 2, 2, 'IJEBU IGBO', 'Diamond', '', '2012-12-17', '', 'FSY201212090122341695', 4000, 2000, 0, NULL),
(9, 2, 3, 'AGO IWOYE', 'admin', '', '2012-12-08', '', 'FSY201212110658426092', 124000, 3000, 0, NULL),
(10, 2, 3, 'EGBA', 'admin', '', '2012-12-10', '', 'FSY201212110658426092', 121000, 3000, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contractor_transaction_history`
--

CREATE TABLE IF NOT EXISTS `tbl_contractor_transaction_history` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tree_type` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `reserved_location` varchar(50) NOT NULL,
  `attended_by` varchar(50) NOT NULL,
  `authorized_by` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `maker_id` varchar(100) NOT NULL,
  `contractor_id` varchar(100) NOT NULL,
  `new_balance` double NOT NULL,
  `transaction_cost` double NOT NULL,
  `approval_status` int(11) NOT NULL DEFAULT '0',
  `remarks` text,
  PRIMARY KEY (`id`),
  KEY `contractor_id` (`contractor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_contractor_transaction_history`
--

INSERT INTO `tbl_contractor_transaction_history` (`id`, `tree_type`, `quantity`, `reserved_location`, `attended_by`, `authorized_by`, `date`, `maker_id`, `contractor_id`, `new_balance`, `transaction_cost`, `approval_status`, `remarks`) VALUES
(1, 2, 10, 'QQ', 'admin', '', '2012-12-16', '', 'FSY201212090122341695', 0, 0, 1, 'The data was fantastic'),
(2, 2, 3, 'IJEBU IGBO', 'admin', '', '2012-12-17', '', 'FSY201212090125316209', 0, 0, 0, NULL),
(3, 2, 3, 'IJEBU IGBO', 'admin', '', '2012-12-17', '', 'FSY201212090125316209', 0, 0, 0, NULL),
(4, 2, 3, 'IJEBU IGBO', 'admin', '', '2012-12-17', '', 'FSY201212090125316209', 0, 0, 0, NULL),
(5, 2, 3, 'ORU', 'admin', 'admin', '2012-12-17', '', 'FSY201212110658426092', 0, 0, 2, 'He does not satisfy all the requiremnts'),
(6, 2, 2, 'IJEBU IGBO', 'Diamond', 'admin', '2012-12-18', '', 'FSY201212090122341695', 0, 0, 1, 'Mr Ladan\\''s Records shows that he has paid all the money that needs to be paid'),
(7, 1, 2, 'IJEBU IGBO', 'Diamond', '', '2012-12-18', '', 'FSY201212090122341695', 0, 0, 0, NULL),
(8, 2, 2, 'IJEBU IGBO', 'Diamond', '', '2012-12-17', '', 'FSY201212090122341695', 4000, 2000, 0, NULL),
(9, 2, 3, 'AGO IWOYE', 'admin', '', '2012-12-08', '', 'FSY201212110658426092', 124000, 3000, 0, NULL),
(10, 2, 3, 'EGBA', 'admin', '', '2012-12-10', '', 'FSY201212110658426092', 121000, 3000, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_firewood`
--

CREATE TABLE IF NOT EXISTS `tbl_firewood` (
  `s/n` int(10) NOT NULL AUTO_INCREMENT,
  `forest_reserve` varchar(50) NOT NULL,
  `new_rate` varchar(30) NOT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_firewood`
--

INSERT INTO `tbl_firewood` (`s/n`, `forest_reserve`, `new_rate`) VALUES
(1, 'Pick-Up, Cabster', '2,000.00'),
(2, '911, Bedford Lorry', '3,000.00'),
(3, 'Trailer', '15,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forestry_reserves`
--

CREATE TABLE IF NOT EXISTS `tbl_forestry_reserves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `location` varchar(120) NOT NULL,
  `total_area` varchar(120) NOT NULL,
  `established_year` int(20) NOT NULL,
  `remarks` varchar(150) NOT NULL,
  `yearly_allowable_cut` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_forestry_reserves`
--

INSERT INTO `tbl_forestry_reserves` (`id`, `name`, `location`, `total_area`, `established_year`, `remarks`, `yearly_allowable_cut`) VALUES
(1, 'Omo F/R Area J1 & J3 , Area J4, Area J6 & Ak 16 Enclaves', 'Ijebu East and North Local Government', '1305.5 kmsq, 519.3kmsq, 565.8kmsq, 220.4kmsq 65kmsq', 1925, 'Productive', 5000),
(2, 'Olokemeji Forestry Reserve', 'Odeda LG (Olokemeji)', '58.88kmsq', 1916, 'Degraded', 3000),
(3, 'Arakanga Forestry Reserve', 'Odeda LG (Olokemeji)', '2.39kmsq', 1945, 'Protective', 5000),
(4, 'Ilaro Forestry Reserve', 'Yewa South LG (Ipake)', '46.08kmsq', 1953, 'Degraded', 5000),
(5, 'Edun Stram Forestry Reserve', 'Yewa South LG (Ilaro)', '0.97kmsq', 1953, 'Protective', 5000),
(6, 'Eggua Forestry Reserve', 'Yewa North LG (Eggua)', '41.47kmsq', 1937, 'Degraded', 6000),
(7, 'Aworo Forestry Reserve', 'Yewa North LG (Aworo)', '212.99kmsq', 1936, 'Degraded', 7000),
(8, 'Imeko Game Reserve', 'Imeko-Afon LG (Imeko)', '954.88kmsq', 1933, 'Degraded', 6000),
(9, 'Ohumbe Forestry Reserve', 'Yewa North LG (Oja Odan)', '46.08kmsq', 1936, 'Degraded', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_free_area`
--

CREATE TABLE IF NOT EXISTS `tbl_free_area` (
  `s/n` int(10) NOT NULL AUTO_INCREMENT,
  `forest_reserve` varchar(50) NOT NULL,
  `new_rate` varchar(30) NOT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_free_area`
--

INSERT INTO `tbl_free_area` (`s/n`, `forest_reserve`, `new_rate`) VALUES
(1, 'Pick-Up, Cabster', '1,000.00'),
(2, '911, Bedford Lorry', '3,000.00'),
(3, 'Trailer', '6,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_government_plant`
--

CREATE TABLE IF NOT EXISTS `tbl_government_plant` (
  `s/n` int(10) NOT NULL AUTO_INCREMENT,
  `species` varchar(30) NOT NULL,
  `new_reviewed_rate` varchar(30) NOT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_government_plant`
--

INSERT INTO `tbl_government_plant` (`s/n`, `species`, `new_reviewed_rate`) VALUES
(1, 'Gmelina arborea', '1,500.00'),
(2, 'Tectona grandis', '3,000.00 (10cm - 29.9cm)'),
(3, 'Tectona grandis', '5,000.00 (30m & above)'),
(4, 'Nauclea diderichii', '5,000.00'),
(5, 'Lovoa spp.', '6,000.00'),
(6, 'Cederella odorata', '4,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_private_plant`
--

CREATE TABLE IF NOT EXISTS `tbl_private_plant` (
  `s/n` int(10) NOT NULL AUTO_INCREMENT,
  `species` varchar(30) NOT NULL,
  `girth_class` varchar(30) NOT NULL,
  `new_reviewed_rate` varchar(20) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_private_plant`
--

INSERT INTO `tbl_private_plant` (`s/n`, `species`, `girth_class`, `new_reviewed_rate`, `remarks`) VALUES
(1, 'Tectona grandis', 'All size classes', '600', '20% administrative charge'),
(2, 'Gmelina spp.', 'All size classes', '500', '20% administrative charge'),
(3, 'Nauclea spp.', 'All size classes', '600', '20% administrative charge'),
(4, 'Lovoa spp.', 'All size classes', '600', '20% administrative charge');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule_b`
--

CREATE TABLE IF NOT EXISTS `tbl_schedule_b` (
  `s/n` int(10) NOT NULL AUTO_INCREMENT,
  `machine_category` varchar(50) NOT NULL,
  `registration` varchar(30) NOT NULL,
  `renewal` varchar(30) NOT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_schedule_b`
--

INSERT INTO `tbl_schedule_b` (`s/n`, `machine_category`, `registration`, `renewal`) VALUES
(1, 'Planning Machine', '40,000.00', '30,000.00'),
(2, 'Multiple Edger', '30,000.00', '15,000.00'),
(3, 'Circular Re-Saw Benches not attached to Sawmill', '60,000.00', '15,000.00'),
(4, 'Power-chain Saw', '10,000.00', '10,000.00'),
(5, 'Plank Shed', '', '1,000.00'),
(6, 'Property Hammer', '300,000.00', '22,500.00'),
(7, 'Sawmill Installation', '300,000.00', '30,000.00'),
(8, 'Relocation of Sawmill', '45,000.00', '30,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tree`
--

CREATE TABLE IF NOT EXISTS `tbl_tree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tariff` double NOT NULL,
  `allowable_cuts_per_day` int(10) NOT NULL DEFAULT '80',
  `allowable_plants_per_day` int(10) NOT NULL DEFAULT '90',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_tree`
--

INSERT INTO `tbl_tree` (`id`, `name`, `tariff`, `allowable_cuts_per_day`, `allowable_plants_per_day`) VALUES
(1, 'Jebo', 105, 50, 40),
(2, 'Oganwo', 133, 40, 30),
(5, 'Sida', 105, 60, 50),
(6, 'Iroko', 244.5, 50, 60),
(9, 'Opepe', 157.6, 70, 70),
(10, 'Omo', 133, 60, 70),
(13, 'Apa', 315, 80, 90),
(14, 'Palufon', 315, 80, 90),
(15, 'Olofun', 105, 80, 90),
(16, 'Oro, Danta', 50.6, 80, 90),
(17, 'Araba', 52.6, 80, 90),
(18, 'Aagba', 52.6, 80, 90),
(19, 'Distemonantus bensthamirous', 52.6, 80, 90),
(20, 'White Afara', 157.6, 80, 90),
(21, 'Arere', 238, 80, 90),
(22, 'Oro', 80.6, 80, 90),
(23, 'Eku', 52.6, 80, 90),
(24, 'Eru', 52.6, 80, 90),
(25, 'Abura', 157.6, 80, 90),
(26, 'Poroporo', 52.6, 80, 90),
(27, 'Berlinia SPP', 52.6, 80, 90),
(28, 'Eki', 62, 80, 90),
(29, 'Agboin', 52.6, 80, 90),
(30, 'Ahun', 52.6, 80, 90),
(31, 'Totoro', 42, 80, 90),
(32, 'Anikantanwo', 52.6, 80, 90),
(33, 'Akun', 52.6, 80, 90),
(34, 'Ayinre', 52.6, 80, 90),
(35, 'Ojia', 52.6, 80, 90),
(36, 'Orin dudu', 70, 80, 90),
(37, 'Shodun', 52.6, 80, 90),
(38, 'Kokoogbo', 52.6, 80, 90);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `title`, `fname`, `mname`, `lname`, `password`, `sex`, `dob`, `dep`, `rank`, `gralevel`, `qua`, `acclevel`, `email`, `address`, `imagepath`, `phone`, `datereg`) VALUES
(1, 'admin', 'Mr', 'Verde', 'SIS', 'Demo', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'Male', '04-04-2012', 'ICT', '', '10', 'Bsc', '1', 'diamonddemola@yahoo.co.uk', 'Y do you wanna know', '', '0802334563453434', '2012-12-08 17:58:32'),
(2, 'Diamond', 'Mr', 'Ademola ', 'Gbemiro', 'Diamond', 'b3850e04b5cc10929206d2336efa79a041358d57', 'Male', '', '', '', '', '', '1', '', '', '', '', '2012-12-17 20:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users1`
--

CREATE TABLE IF NOT EXISTS `tbl_users1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_users1`
--

INSERT INTO `tbl_users1` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', 1261146094, 1355324130, 1, 1),
(2, 'guest', '084e0343a0486ff05530df6c705c8bb4', 'demo@example.com', 'cd343ad2a1613e384dfa02e1cea6860e', 1261146096, 1352900541, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `uc_configuration`
--

CREATE TABLE IF NOT EXISTS `uc_configuration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `value` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `uc_configuration`
--

INSERT INTO `uc_configuration` (`id`, `name`, `value`) VALUES
(1, 'website_name', 'Forestry Monitoring and Control System'),
(2, 'website_url', 'localhost/'),
(3, 'email', 'noreply@ILoveUserCake.com'),
(4, 'activation', 'false'),
(5, 'resend_activation_threshold', '0'),
(6, 'language', 'models/languages/en.php'),
(7, 'template', 'models/site-templates/default.css');

-- --------------------------------------------------------

--
-- Table structure for table `uc_pages`
--

CREATE TABLE IF NOT EXISTS `uc_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(150) NOT NULL,
  `private` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `uc_pages`
--

INSERT INTO `uc_pages` (`id`, `page`, `private`) VALUES
(1, 'account.php', 1),
(2, 'activate-account.php', 0),
(3, 'admin_configuration.php', 1),
(4, 'admin_page.php', 1),
(5, 'admin_pages.php', 1),
(6, 'admin_permission.php', 1),
(7, 'admin_permissions.php', 1),
(8, 'admin_user.php', 1),
(9, 'admin_users.php', 1),
(10, 'forgot-password.php', 0),
(11, 'index.php', 0),
(12, 'left-nav.php', 0),
(13, 'login.php', 0),
(14, 'logout.php', 1),
(15, 'register.php', 0),
(16, 'resend-activation.php', 0),
(17, 'user_settings.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uc_permission_page_matches`
--

CREATE TABLE IF NOT EXISTS `uc_permission_page_matches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `permission_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `uc_permission_page_matches`
--

INSERT INTO `uc_permission_page_matches` (`id`, `permission_id`, `page_id`) VALUES
(1, 1, 1),
(2, 1, 14),
(3, 1, 17),
(4, 2, 1),
(5, 2, 3),
(6, 2, 4),
(7, 2, 5),
(8, 2, 6),
(9, 2, 7),
(10, 2, 8),
(11, 2, 9),
(12, 2, 14),
(13, 2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `uc_permissions`
--

CREATE TABLE IF NOT EXISTS `uc_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `uc_permissions`
--

INSERT INTO `uc_permissions` (`id`, `name`) VALUES
(1, 'New Member'),
(2, 'Administrator'),
(3, 'View Report'),
(4, 'Add Data');

-- --------------------------------------------------------

--
-- Table structure for table `uc_user_permission_matches`
--

CREATE TABLE IF NOT EXISTS `uc_user_permission_matches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `uc_user_permission_matches`
--

INSERT INTO `uc_user_permission_matches` (`id`, `user_id`, `permission_id`) VALUES
(1, 1, 2),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `uc_users`
--

CREATE TABLE IF NOT EXISTS `uc_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(150) NOT NULL,
  `activation_token` varchar(225) NOT NULL,
  `last_activation_request` int(11) NOT NULL,
  `lost_password_request` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `title` varchar(150) NOT NULL,
  `sign_up_stamp` int(11) NOT NULL,
  `last_sign_in_stamp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uc_users`
--

INSERT INTO `uc_users` (`id`, `user_name`, `display_name`, `password`, `email`, `activation_token`, `last_activation_request`, `lost_password_request`, `active`, `title`, `sign_up_stamp`, `last_sign_in_stamp`) VALUES
(1, 'admin', 'diamonddemola', 'c0f4c63422d345eee7b546c8221aa3001911208d78d0d2fe789a5c7e25745edac', 'diamonddemola@yahoo.co.uk', '7e7af91fdc472fad81e2f04bd4d42fed', 1355915264, 0, 1, 'New Member', 1355915264, 1355915290);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_contractor_account`
--
ALTER TABLE `tbl_contractor_account`
  ADD CONSTRAINT `tbl_contractor_account_ibfk_1` FOREIGN KEY (`contractor_id`) REFERENCES `tbl_contractor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
