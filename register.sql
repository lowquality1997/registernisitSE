-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 07:41 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Register_id` int(4) NOT NULL,
  `ID_card` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `E_mail` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `select2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `First_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Last_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `First_name_E` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Last_name_E` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Location` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nationality` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Faith` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Blood_Type` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `House_number` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Swine` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Alley` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_entryid2` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `District` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Postcode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Telephone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Register_id`, `ID_card`, `E_mail`, `select2`, `First_name`, `Last_name`, `First_name_E`, `Last_name_E`, `Birthday`, `Location`, `Nationality`, `Faith`, `Blood_Type`, `House_number`, `Swine`, `Alley`, `street`, `f_entryid2`, `District`, `zone`, `Postcode`, `Telephone`) VALUES
(1, '23165465', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '2018-04-04', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'ads', 'asd', '464'),
(2, 'qweq', 'qeqwe', 'นาย', 'qwee', 'eqw', 'qweqw', 'eqwe', '0000-00-00', 'qeqeqqe', 'qe', 'qweqwe', 'qwe', 'qwewq', 'qeq', 'weqwe', 'eqwrqw', '73', 'rqwr', 'rqwrqw', 'qwrqw', 'qwrqwr'),
(3, '1739900602287', 'asdasd@hotmail.com', 'นางสาว', 'มาลี', 'อิอิ', 'mare', 'eiei', '1996-04-03', 'นครปฐม', 'ไทย', 'พุทธ', 'o', '25/5', '3', '-', '-', '73', 'เมือง', 'วังตะกู', '73000', '0953134292');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Register_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Register_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
