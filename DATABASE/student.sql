-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 06:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `model`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `doc_title` varchar(2000) NOT NULL,
  `doc_desc` varchar(8000) NOT NULL,
  `doc_file` varchar(2000) NOT NULL,
  `doc_standard` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `doc_title`, `doc_desc`, `doc_file`, `doc_standard`) VALUES
(1, 'ADP MOD 1', 'Application Development using python', 'ADP.pdf', 'B.Tech 3rd year'),
(2, 'ATC MOD 1', 'Automata theory and computability', 'ATC.pdf', 'B.Tech 3rd year'),
(3, 'CNS MOD 1', 'Computer Network and Security', 'CNS.pdf', 'B.Tech 3rd year'),
(4, 'DBMS MOD 1', 'Database mangement system', 'DBMS.pdf', 'B.Tech 3rd year');
-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_id` varchar(220) NOT NULL,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `report` varchar(2000) NOT NULL,
  `year` varchar(100) NOT NULL,
  `yoa` varchar(45) NOT NULL,
  `parent` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `file` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_id`, `name`, `last_name`, `report`, `year`, `yoa`, `parent`, `dob`, `gender`, `file`) VALUES
(1, 'MS17-def1', 'Ram', 'Sharma', 'Need to improve...     ', 'B.Tech 2nd year', '2021', '6353245768', '2001-08-08', 'Male', 'your_site_name_bace602f28aa688ab653d901b7db7e9d.jpg'),
(2, 'MS17-a3b7', 'Rahul', 'Kumar', 'Very good in her work...', 'B.Tech 3rd year', '2020', '9316249815', '2001-03-27', 'Male', 'your_site_name_61684600542da2ec1c24b7cbf41bef53.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `position` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `position`, `username`, `password`, `student_id`) VALUES
(1, 'Manindar', 'admin', 'manindar', '12345', 0),
(2, 'Rohan', 'admin', 'rohan', '12345', 0),
(3, 'Ram', 'student', 'ram', '12345', 1),
(4, 'Rahul', 'student', 'rahul', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);



--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
