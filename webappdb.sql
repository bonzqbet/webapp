-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 06:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webappdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` varchar(3) NOT NULL,
  `name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `name`) VALUES
('1', 'user'),
('2', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `STU_ID` smallint(5) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `FSchool` varchar(30) NOT NULL,
  `GPX` varchar(7) NOT NULL,
  `Tel` varchar(15) NOT NULL,
  `Univer` varchar(70) NOT NULL,
  `Faculty` varchar(70) NOT NULL,
  `STATUS_ID` varchar(3) NOT NULL,
  `SHOW_STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`STU_ID`, `Fname`, `Lname`, `ID`, `Gender`, `FSchool`, `GPX`, `Tel`, `Univer`, `Faculty`, `STATUS_ID`, `SHOW_STATUS`) VALUES
(38, 'ฟหกฟหกฟ', 'หกฟหกฟห', '222', 'ชาย', 'บ้านดน', '3.5', '1', 'มหาวิทยาลัยเชียงใหม่', 'คณะสถาปัตยกรรมศาสตร์และศิลปกรรมศาสตร์', '1', 'ผ่าน'),
(39, 'ฟหกฟหกฟ', 'หกฟหกฟห', '666', 'ชาย', 'บ้านดน', '3.5', '2', 'มหาวิทยาลัยเชียงใหม่', 'คณะเกษตรศาสตร์และทรัพยากรธรรมชาติ', '1', 'ผ่าน'),
(41, 'ฟหกฟหกฟ', 'หกฟหกฟห', '444', 'ชาย', 'บ้านดน', '3.5', '3', 'มหาวิทยาลัยราชภัฏเชียงราย', 'คณะเภสัชศาสตร์', '1', 'รอตรวจสอบ'),
(42, 'ฟหกฟหกฟ', 'หกฟหกฟห', 'qq', 'ชาย', 'บ้านดน', '3.5', '4', 'มหาวิทยาลัยเชียงใหม่', 'คณะเภสัชศาสตร์', '1', 'ไม่ผ่าน'),
(43, 'ฟหกฟหกฟ', 'หกฟหกฟห', 'ww', 'ชาย', 'บ้านดน', '3.5', '5', 'มหาวิทยาลัยเชียงใหม่', 'คณะเกษตรศาสตร์และทรัพยากรธรรมชาติ', '1', 'รอตรวจสอบ'),
(44, 'admin', 'หกฟหกฟห', 'rr', 'ชาย', 'บ้านดน', '3.5', '6', 'มหาวิทยาลัยเชียงใหม่', 'คณะพยาบาลศาสตร์', '1', 'รอตรวจสอบ'),
(45, 'ฟหกฟหกฟ', 'หกฟหกฟห', 't', 'ชาย', 'ฟหกฟหก', '1.44', '0831542415', 'มหาวิทยาลัยนอร์ท-เชียงใหม่', 'คณะแพทยศาสตร์', '1', 'รอตรวจสอบ'),
(46, 'ฟหกฟหกฟ', 'หกฟหกฟห', 'asd', 'ชาย', 'บ้านดน', '3.5', '0831542415', 'มหาวิทยาลัยเชียงใหม่', 'คณะวิทยาศาสตร์', '1', 'รอตรวจสอบ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` varchar(3) NOT NULL,
  `PASS_S` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Tel` varchar(15) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `iden` varchar(20) NOT NULL,
  `STATUS_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `PASS_S`, `email`, `Tel`, `Fname`, `Lname`, `iden`, `STATUS_ID`) VALUES
('2', '1234', 'playgroundclub_1@hotmail.com', '0831542415', 'asdasdasd', 'asdasd', '222', '1'),
('5', '1234', 'playgroundclub_1@hotmail.com', '0831542415', 'asdasdasd', 'asdasd', '666', '1'),
('6', '1234', 'asdasd@asdasd', '0831542415', 'asdasdasd', 'asdasd', '999', '1'),
('a', '1234', 'asdasd@hotmail.com', '0831542415', 'asdasdasd', 'asdasd', '444', '1'),
('asd', '1234', 'playgroundclub_1@hotmail.com', '0831542415', 'asdasdasd', 'asdasd', '123132', '2'),
('f', '1234', 'asdasd@hotmail.com', '0831542415', 'asdasdasd', 'asdasd', 'rr', '1'),
('s', '1234', 'asdasd@hotmail.com', '0831542415', 'asdasdasd', 'asdasd', 'qq', '1'),
('t', '1234', 'playgroundclub_1@hotmail.com', '0831542415', '', '', 't', '1'),
('ww', '1234', 'asdasd@asdasd', '0831542415', '', '', '1571242124', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`STU_ID`),
  ADD KEY `STU_ID` (`STU_ID`),
  ADD KEY `STATUS_ID` (`STATUS_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `STATUS_ID` (`STATUS_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `STU_ID` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`STATUS_ID`) REFERENCES `status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`STATUS_ID`) REFERENCES `status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
