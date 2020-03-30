-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 06:09 AM
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
-- Table structure for table `loguser`
--

CREATE TABLE `loguser` (
  `STU_ID` varchar(5) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `ID` varchar(13) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Fschool` varchar(50) NOT NULL,
  `GPX` varchar(10) NOT NULL,
  `Tel` varchar(15) NOT NULL,
  `Univer` varchar(70) NOT NULL,
  `Faculty` varchar(70) NOT NULL,
  `STATUS_ID` varchar(3) NOT NULL,
  `SHOW_STATUS` varchar(10) NOT NULL,
  `Logg` varchar(5) NOT NULL,
  `logid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `iden` varchar(15) NOT NULL,
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `status_1` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`iden`, `id`, `username`, `status_1`) VALUES
('', 1, 'a', '2');

-- --------------------------------------------------------

--
-- Table structure for table `restore`
--

CREATE TABLE `restore` (
  `STU_ID` varchar(30) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Fschool` varchar(70) NOT NULL,
  `GPX` varchar(7) NOT NULL,
  `Tel` varchar(15) NOT NULL,
  `Univer` varchar(70) NOT NULL,
  `Faculty` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('2', 'admin'),
('3', 'drop');

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
  `Fschool` varchar(30) NOT NULL,
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

INSERT INTO `student` (`STU_ID`, `Fname`, `Lname`, `ID`, `Gender`, `Fschool`, `GPX`, `Tel`, `Univer`, `Faculty`, `STATUS_ID`, `SHOW_STATUS`) VALUES
(116, 'b', 'b', '1454875424515', 'ชาย', 'แม่จันวิทยาคม', '1.5', '0831524154', 'มหาวิทยาลัยราชภัฏนครสวรรค์', 'คณะนิสิตคณะนิติศาสตร์', '1', 'รอตรวจสอบ'),
(117, 'c', 'c', '4542154254154', 'หญิง', 'อิอิ', '2.11', '0831524154', 'มหาวิทยาลัยราชภัฏเชียงใหม่', 'คณะนิสิตคณะนิติศาสตร์', '1', 'รอตรวจสอบ'),
(118, 'd', 'd', '1457542451235', 'ชาย', 'บ้านดน', '3.44', '0831542415', 'มหาวิทยาลัยราชภัฏพิบูลสงคราม', 'คณะรัฐศาสตร์และสังคมศาสตร์', '1', 'รอตรวจสอบ'),
(119, 'e', 'e', '1453625784512', 'ชาย', 'แม่จันวิทยาคม', '3.64', '0831524154', 'มหาวิทยาลัยพายัพ', 'วิทยาลัยการศึกษา', '1', 'รอตรวจสอบ'),
(120, 'f', 'f', '1454254154254', 'ชาย', 'แม่กา', '3.5', '0831524154', 'มหาวิทยาลัยราชภัฏพิบูลสงคราม', 'คณะรัฐศาสตร์และสังคมศาสตร์', '1', 'รอตรวจสอบ'),
(121, 'a', 'a', '1245414254745', 'ชาย', 'แม่จันวิทยาคม', '2.11', '0831542415', 'มหาวิทยาลัยแม่ฟ้าหลวง', 'คณะนิสิตคณะนิติศาสตร์', '1', 'ไม่ผ่าน');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` varchar(20) NOT NULL,
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
('asd', '1234', 'playgroundclub_1@hotmail.com', '0831542415', 'asdasdasd', 'asdasd', '123132', '2'),
('muser1', 'Muser1', '1@homail.com', '0831542415', '', '', '1245414254745', '1'),
('muser2', 'Muser2', 'asdsd@aa', '0831542415', '', '', '1454875424515', '1'),
('muser3', 'Muser3', 'sdsds@wsssa', '0831542415', '', '', '4542154254154', '1'),
('muser4', 'Muser4', 'sdsad@asdasd', '0831542415', '', '', '1457542451235', '1'),
('muser5', 'Muser5', 'sdsdsda@asdsdsds', '0831542415', '', '', '1453625784512', '1'),
('muser6', 'Muser6', 'asdsd@easd', '0831542415', '', '', '1454254154254', '1'),
('muser7', 'Muser7', 'asdas@sdsddd', '0831542415', '', '', '1454754853254', '1'),
('muser8', 'Muser8', 'sdasd@asdasd', 'asdasd', '', '', '1454254154256', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loguser`
--
ALTER TABLE `loguser`
  ADD PRIMARY KEY (`STU_ID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restore`
--
ALTER TABLE `restore`
  ADD PRIMARY KEY (`STU_ID`);

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
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `STU_ID` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

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
