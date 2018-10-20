-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 05:12 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  `verify` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `session_id`, `verify`) VALUES
(1, 13, 'verified '),
(2, 14, 'verified'),
(3, 11, 'not verified'),
(4, 12, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_status`
--

CREATE TABLE `attendance_status` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `attendance_id` int(20) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_status`
--

INSERT INTO `attendance_status` (`id`, `user_id`, `status`, `attendance_id`, `remarks`) VALUES
(185, 1, 'Present', 2, ''),
(186, 2, 'Present', 2, ''),
(187, 3, 'Present', 2, ''),
(188, 4, 'Present', 2, ''),
(189, 5, 'Present', 2, ''),
(190, 6, 'Present', 2, ''),
(191, 7, 'Present', 2, ''),
(192, 8, 'Present', 2, ''),
(193, 9, 'Present', 2, ''),
(194, 10, 'Present', 2, ''),
(195, 11, 'Present', 2, ''),
(196, 12, 'Present', 2, ''),
(197, 13, 'Present', 2, ''),
(198, 14, 'Present', 2, ''),
(199, 15, 'Present', 2, ''),
(200, 16, 'Present', 2, ''),
(201, 17, 'Present', 2, ''),
(202, 18, 'Present', 2, ''),
(203, 19, 'Present', 2, ''),
(204, 20, 'Present', 2, ''),
(205, 21, 'Present', 2, ''),
(206, 22, 'Present', 2, ''),
(207, 23, 'Present', 2, ''),
(208, 1, 'Present', 2, ''),
(209, 2, 'Present', 2, ''),
(210, 3, 'Present', 2, ''),
(211, 4, 'Present', 2, ''),
(212, 5, 'Present', 2, ''),
(213, 6, 'Present', 2, ''),
(214, 7, 'Present', 2, ''),
(215, 8, 'Present', 2, ''),
(216, 9, 'Present', 2, ''),
(217, 10, 'Present', 2, ''),
(218, 11, 'Present', 2, ''),
(219, 12, 'Present', 2, ''),
(220, 13, 'Present', 2, ''),
(221, 14, 'Late', 2, '15min'),
(222, 15, 'Excuse', 2, 'MC'),
(223, 16, 'Absent', 2, ''),
(224, 17, 'Present', 2, ''),
(225, 18, 'Present', 2, ''),
(226, 19, 'Present', 2, ''),
(227, 20, 'Present', 2, ''),
(228, 21, 'Present', 2, ''),
(229, 23, 'Present', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(20) NOT NULL,
  `course_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`) VALUES
(1, 'WBD'),
(2, 'INS'),
(3, 'NWS'),
(4, 'DME'),
(5, 'LIC');

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

CREATE TABLE `course_student` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `course_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_student`
--

INSERT INTO `course_student` (`id`, `user_id`, `course_id`) VALUES
(1, 1, 1),
(2, 5, 1),
(3, 4, 1),
(4, 3, 1),
(5, 2, 1),
(6, 6, 4),
(7, 7, 4),
(8, 9, 4),
(9, 8, 4),
(10, 10, 4),
(11, 11, 5),
(12, 12, 5),
(13, 13, 5),
(14, 15, 5),
(15, 14, 5),
(16, 19, 3),
(17, 16, 3),
(18, 17, 3),
(19, 18, 3),
(20, 20, 3),
(21, 23, 2),
(22, 22, 2),
(23, 21, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gc`
--

CREATE TABLE `gc` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `course_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gc`
--

INSERT INTO `gc` (`id`, `user_id`, `group_id`, `course_id`) VALUES
(1, 25, 1, ''),
(2, 27, 4, ''),
(3, 26, 2, ''),
(4, 28, 3, ''),
(5, 24, 5, ''),
(6, 30, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `gl`
--

CREATE TABLE `gl` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gl`
--

INSERT INTO `gl` (`id`, `user_id`, `group_id`) VALUES
(1, 23, 2),
(2, 16, 4),
(3, 5, 1),
(4, 17, 3),
(5, 8, 5),
(6, 22, 2);

-- --------------------------------------------------------

--
-- Table structure for table `group_student`
--

CREATE TABLE `group_student` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_student`
--

INSERT INTO `group_student` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 6, 5),
(3, 22, 2),
(4, 20, 4),
(5, 14, 3),
(6, 2, 1),
(7, 3, 1),
(8, 4, 1),
(9, 5, 1),
(10, 6, 5),
(11, 7, 5),
(12, 8, 5),
(13, 9, 5),
(14, 10, 5),
(15, 11, 3),
(16, 12, 3),
(17, 13, 3),
(18, 14, 3),
(19, 15, 3),
(20, 16, 4),
(21, 17, 4),
(22, 18, 4),
(23, 19, 4),
(24, 20, 4),
(25, 21, 2),
(26, 23, 2),
(27, 22, 2);

-- --------------------------------------------------------

--
-- Table structure for table `group_table`
--

CREATE TABLE `group_table` (
  `id` int(20) NOT NULL,
  `group_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_table`
--

INSERT INTO `group_table` (`id`, `group_code`) VALUES
(1, 'DiICT(WBD)0216/02'),
(2, 'DiICT(INS)0216/02'),
(3, 'DiICT(LIC)0216/02'),
(4, 'DiICT(NWS)0216/02'),
(5, 'DiICT(DME)0216/02');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `from` date NOT NULL,
  `to` date NOT NULL,
  `user_id` int(20) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ml`
--

CREATE TABLE `ml` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ml`
--

INSERT INTO `ml` (`id`, `user_id`, `group_id`) VALUES
(1, 33, 1),
(2, 32, 4),
(3, 31, 3),
(4, 30, 2),
(5, 29, 5);

-- --------------------------------------------------------

--
-- Table structure for table `recoverykeys`
--

CREATE TABLE `recoverykeys` (
  `id` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(20) NOT NULL,
  `date` date NOT NULL,
  `group_id` int(20) NOT NULL,
  `slot_id` int(20) NOT NULL,
  `room` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `date`, `group_id`, `slot_id`, `room`) VALUES
(11, '2018-09-25', 1, 2, '6.03'),
(12, '2018-09-26', 3, 4, '6.04'),
(13, '2018-09-27', 2, 4, '9.02'),
(14, '2018-09-24', 4, 2, '6.04');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `id` int(20) NOT NULL,
  `time` varchar(50) NOT NULL,
  `slot_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`id`, `time`, `slot_no`) VALUES
(1, '8.00AM-10.00AM', '1'),
(2, '10.30AM-12.00PM', '2'),
(3, '01.00PM-02.30PM', '3'),
(4, '02.30PM-04.30PM', '4');

-- --------------------------------------------------------

--
-- Table structure for table `statistic`
--

CREATE TABLE `statistic` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `attendance_id` int(20) NOT NULL,
  `course_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistic`
--

INSERT INTO `statistic` (`id`, `user_id`, `attendance_id`, `course_id`) VALUES
(1, 1, 3, 1),
(2, 23, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `group_id` int(50) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `role`, `code`, `group_id`, `image`) VALUES
(1, 'Ak Md Daniel Bin Pg Wahab', 'wbd02_01090018@pb.edu.bn', 'wbd02_01090018', '12345', 'student', 'DiICT(WBD)/06/16/0216', 1, ''),
(2, 'Siti Raihana Binti Moksin', 'wbd02_01070815@pb.edu.bn', 'wbd02_01070815', '12345', 'student', 'DiICT(WBD)/06/16/0235', 1, ''),
(3, 'Muhammad Syafi \'Aizzuddeen Bin kalali', 'wbd02_01076170@pb.edu.bn', 'wbd02_01076170', '12345', 'student', 'DiICT(WBD)/06/16/0231', 1, ''),
(4, 'Khairunnisa binti Haji Zulkifli', 'wbd02_01111655@pb.edu.bn', 'wbd02_01111655', '12345', 'student', 'DiICT(WBD)/06/16/0220', 1, ''),
(5, 'Izzatus Sakinah Binti Awang Masri', 'wbd02_01091598@pb.edu.bn', 'wbd02_01091598', '12345', 'student', 'DiICT(WBD)/06/16/0219', 1, ''),
(6, 'Mohammad Hasif bin Matzin', 'dme02_01000001@pb.edu.bn', 'dme02_01000001', '12345', 'student', 'DiICT(DME)/06/16/0285', 5, ''),
(7, 'Mohammad Dzul Iskandar bin Shamsol', 'dme02_01000002@pb.edu.bn', 'dme02_01000002', '12345', 'student', 'DilCT(DME)/06/16/0283', 5, ''),
(8, 'Arvin ', 'dme02_01000003@pb.edu.bn', 'dme02_01000003', '12345', 'student', 'DiICT(DME)/06/16/0279', 5, ''),
(9, 'Mohammad Firdaus bin Ahad', 'dme02_01000004@pb.edu.bn', 'dme02_01000004', '12345', 'student', 'DiICT(DME)/06/16/0264', 5, ''),
(10, 'Muhammad Kamarul Arifin bin Haji Mazim', 'dme02_01000005@pb.edu.bn', 'dme02_01000005', '12345', 'student', 'DiICT(DME)/06/16/0270', 5, ''),
(11, 'Hazimah Binti Sani', 'lic02_01000006@pb.edu.bn', 'lic02_01000006', '12345', 'student', 'DiICT(LIC)/06/16/0238', 3, ''),
(12, 'Nurulain Haziqah Binti Alias', 'lic02_01000007@pb.edu.bn', 'lic02_01000007', '12345', 'student', 'DiICT(LIC)/06/16/0249', 3, ''),
(13, 'Nur`Aisyah Binti Md Jarali', 'lic02_01000008@pb.edu.bn', 'lic02_01000008', '12345', 'student', ' DiICT(LIC)/06/16/0244', 3, ''),
(14, 'Zainul Arifin Bin Hanipiah', 'lic02_01000009@pb.edu.bn', 'lic02_01000009', '12345', 'student', 'DiICT(LIC)/06/16/0254', 3, ''),
(15, 'Hamizah bt Awang Mahmud', 'lic02_010000010@pb.edu.bn', 'lic02_01000010', '12345', 'student', 'DiICT(LIC)/06/16/0251', 3, ''),
(16, 'Haziqah Hasyimah binti Hj Awg Omar', 'nws04_01091593@pb.edu.bn', 'nws04_01091593', '12345', 'student', 'DiICT(NWS)/06/16/0339', 4, ''),
(17, 'Lutfil Hadi Tajuddin ', 'nws04_01000011@pb.edu.bn', 'nws04_01000011', '12345', 'student', 'DiICT(NWS)/06/16/0341', 4, ''),
(18, 'Mohammad Nazmi bin Moss ', 'nws04_01000012@pb.edu.bn', 'nws04_01000012', '12345', 'student', 'DiICT(NWS)/06/16/0343', 4, ''),
(19, 'Nur Ain Syuhada bte Haji Miramit', 'nws04_01000013@pb.edu.bn', 'nws04_01000013', '12345', 'student', 'DiICT(NWS)/06/16/0352', 4, ''),
(20, 'Nadhirah binti Haji Hassan', 'nws04_01000014@pb.edu.bn', 'nws04_01000014', '12345', 'student', 'DiICT(NWS)/06/16/0351', 4, ''),
(21, 'Nurul Nabilah binti Ibrahim', 'ins02_01059815@pb.edu.bn', 'ins02_01059815', '12345', 'student', 'DiICT(INS)/06/16/0324', 2, ''),
(22, 'Nor Hayatul Syafiqah binti Mohamad', 'ins02_01047620@pb.edu.bn', 'ins02_01047620', '12345', 'Group Leader', 'DiICT(INS)/06/16/0319', 2, ''),
(23, 'Amal Syahirah binti Hj Mohd Salleh', 'ins02_01069009@pb.edu.bn', 'ins02_01069009', '12345', 'student', 'DiICT(INS)/06/16/0300', 2, ''),
(24, 'Woan Jinn Chong ', 'woan.jinn@pb.edu.bn', 'woanjinn', '12345', 'group coordinator', NULL, 0, ''),
(25, 'Jamiatul Zuhriah Jamaluddin', 'jamiatul.zuhriah@pb.edu.bn', 'jamiatulzuhriah', '12345', 'group coordinator', NULL, 0, ''),
(26, 'Amanullah Soomro', 'amanullah.soomro@pb.edu.bn', 'amanullahsoomro', '12345', 'group coordinator', NULL, 0, ''),
(27, 'Haji Aziman Haji Mohammed', 'haji.aziman@pb.edu.bn', 'hajiaziman', '12345', 'group coordinator', NULL, 0, ''),
(28, 'Amal Umi Hafizah M Yusoff', 'amal.umi.hafizah@pb.edu.bn', 'amalumihafizah', '12345', 'group coordinator', NULL, 0, ''),
(29, 'Mas Fatin Wahidah Mahdini', 'mas.fatin.wahidah@pb.edu.bn', 'masfatinwahidah', '12345', 'module lecturer', NULL, 0, ''),
(30, 'Atiqah Musfirah Leong Mohd Dennis Leong', 'atiqah.musfirah.leong@pb.edu.bn', 'atiqahmusfirahleong', '12345', 'group coordinator', NULL, 0, ''),
(31, ' Haji Si-Ramlee Haji Serudin', 'haji.siramlee@pb.edu.bn', 'hajisiramlee', '12345', 'module lecturer', NULL, 0, ''),
(32, 'Bahit Hamid', 'bahit.hamid@pb.edu.bn', 'bahithamid', '12345', 'module lecturer', NULL, 0, ''),
(33, 'Suok Leng Hii', 'suok.leng.hii@pb.edu.bn', 'suoklenghii', '12345', 'module lecturer', NULL, 0, ''),
(34, 'Siti Nur\'Afifah binti Sait', 'afifah.sait@pb.edu.bn', 'afifahsait', '12345', 'module lecturer', '', 0, ''),
(35, 'admin', 'admin@pb.edu.bn', 'admin', '12345', 'administration', NULL, 0, 'arch.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_id` (`session_id`);

--
-- Indexes for table `attendance_status`
--
ALTER TABLE `attendance_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_id` (`attendance_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `attendance_id_2` (`attendance_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `group_id` (`course_id`);

--
-- Indexes for table `gc`
--
ALTER TABLE `gc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `gl`
--
ALTER TABLE `gl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `group_student`
--
ALTER TABLE `group_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `group_table`
--
ALTER TABLE `group_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ml`
--
ALTER TABLE `ml`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `recoverykeys`
--
ALTER TABLE `recoverykeys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `slot_id` (`slot_id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistic`
--
ALTER TABLE `statistic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `attendance_id` (`attendance_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attendance_status`
--
ALTER TABLE `attendance_status`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_student`
--
ALTER TABLE `course_student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gc`
--
ALTER TABLE `gc`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gl`
--
ALTER TABLE `gl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `group_student`
--
ALTER TABLE `group_student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `group_table`
--
ALTER TABLE `group_table`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ml`
--
ALTER TABLE `ml`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statistic`
--
ALTER TABLE `statistic`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `session` (`id`);

--
-- Constraints for table `attendance_status`
--
ALTER TABLE `attendance_status`
  ADD CONSTRAINT `attendance_status_ibfk_1` FOREIGN KEY (`attendance_id`) REFERENCES `attendance` (`id`),
  ADD CONSTRAINT `attendance_status_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`id`) REFERENCES `gc` (`group_id`);

--
-- Constraints for table `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `course_student_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `course_student_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `gc`
--
ALTER TABLE `gc`
  ADD CONSTRAINT `gc_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `gc_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `group_table` (`id`);

--
-- Constraints for table `gl`
--
ALTER TABLE `gl`
  ADD CONSTRAINT `gl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `gl_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `group_table` (`id`);

--
-- Constraints for table `group_student`
--
ALTER TABLE `group_student`
  ADD CONSTRAINT `group_student_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `group_student_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `group_table` (`id`);

--
-- Constraints for table `group_table`
--
ALTER TABLE `group_table`
  ADD CONSTRAINT `group_table_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`group_id`);

--
-- Constraints for table `leave`
--
ALTER TABLE `leave`
  ADD CONSTRAINT `leave_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `ml`
--
ALTER TABLE `ml`
  ADD CONSTRAINT `ml_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `ml_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `group_table` (`id`);

--
-- Constraints for table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_2` FOREIGN KEY (`slot_id`) REFERENCES `slot` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `session_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `group_table` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `statistic`
--
ALTER TABLE `statistic`
  ADD CONSTRAINT `statistic_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `statistic_ibfk_2` FOREIGN KEY (`attendance_id`) REFERENCES `attendance` (`id`),
  ADD CONSTRAINT `statistic_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
