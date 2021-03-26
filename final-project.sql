-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 12:14 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `kurs`
--
CREATE TABLE `administrator` (
  `administrator_emer` varchar(11) NOT NULL,
  `administrator_mbiemer` varchar(11) NOT NULL,
  `admin_password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`administrator_emer`, `administrator_mbiemer`, `admin_password`) VALUES
('Dardan', 'Madani', 'vlora2016');

CREATE TABLE `kurs` (
  `kurs_id` int(11) NOT NULL,
  `kurs_emer` varchar(30) NOT NULL,
  `viti_kurs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurs`
--

INSERT INTO `kurs` (`kurs_id`, `kurs_emer`, `viti_kurs`) VALUES
(11, 'css103', 1),
(12, 'css102', 2),
(15, 'css101', 1),
(18, 'css107', 2),
(20, 'css223', 1),
(21, 'css33', 3);

-- --------------------------------------------------------

--
-- Table structure for table `presor`
--

CREATE TABLE `presor` (
  `presor_emer` varchar(40) NOT NULL,
  `presor_mbiemer` varchar(50) NOT NULL,
  `presor_id` int(11) NOT NULL,
  `presor_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presor`
--

INSERT INTO `presor` (`presor_emer`, `presor_mbiemer`, `presor_id`, `presor_password`) VALUES
('Presor1', 'Mpresor1', 99, '1111'),
('Presor2', 'Mpresor2', 101, 'Leone'),
('Presor3.1', 'Mpresor3', 102, '11111'),
('Presor4', 'Su5', 103, '3333');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `orari` int(11) NOT NULL,
  `presor_id` int(11) NOT NULL,
  `kurs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`orari`, `presor_id`, `kurs_id`) VALUES
(0, 99, 12),
(0, 99, 18),
(0, 101, 15);

-- --------------------------------------------------------

--
-- Table structure for table `proces`
--

CREATE TABLE `proces` (
  `nota` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `kurs_id` int(11) NOT NULL,
  `nota_1` int(50) NOT NULL,
  `nota_2` int(50) NOT NULL,
  `nota_3` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proces`
--

INSERT INTO `proces` (`nota`, `student_id`, `kurs_id`, `nota_1`, `nota_2`, `nota_3`) VALUES
(0, 1004, 11, 0, 0, 0),
(0, 1004, 15, 0, 0, 0),
(0, 1004, 20, 0, 0, 0),
(0, 1005, 12, 0, 0, 0),
(0, 1005, 18, 0, 0, 0),
(53, 1009, 18, 20, 30, 3),
(52, 1021, 18, 20, 30, 2),
(0, 1021, 21, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `emer` varchar(50) NOT NULL,
  `mbiemer` varchar(60) NOT NULL,
  `password` varchar(400) NOT NULL,
  `student_id` int(11) NOT NULL,
  `viti_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`emer`, `mbiemer`, `password`, `student_id`, `viti_users`) VALUES
('Us7', 'Su7', 'kdklkl', 1004, 1),
('Us10', 'Su9', '2323', 1005, 2),
('Us3', 'Su3', 'dweddw', 1006, 1),
('dardan', 'madani', '11234vlore', 1009, 2),
('Leone', 'Su1', '9909', 1021, 3),
('Us1', 'Madani', 'n', 1022, 1),
('Us39', 'Su34', '11111', 1023, 2),
('Us11', 'madani', 'ddd', 1024, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`kurs_id`);

--
-- Indexes for table `presor`
--
ALTER TABLE `presor`
  ADD PRIMARY KEY (`presor_id`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`presor_id`,`kurs_id`),
  ADD KEY `kurs_id` (`kurs_id`);

--
-- Indexes for table `proces`
--
ALTER TABLE `proces`
  ADD PRIMARY KEY (`student_id`,`kurs_id`),
  ADD KEY `kurs_id` (`kurs_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kurs`
--
ALTER TABLE `kurs`
  MODIFY `kurs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `presor`
--
ALTER TABLE `presor`
  MODIFY `presor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1025;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pro`
--
ALTER TABLE `pro`
  ADD CONSTRAINT `pro_ibfk_1` FOREIGN KEY (`presor_id`) REFERENCES `presor` (`presor_id`),
  ADD CONSTRAINT `pro_ibfk_2` FOREIGN KEY (`kurs_id`) REFERENCES `kurs` (`kurs_id`);

--
-- Constraints for table `proces`
--
ALTER TABLE `proces`
  ADD CONSTRAINT `proces_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`student_id`),
  ADD CONSTRAINT `proces_ibfk_2` FOREIGN KEY (`kurs_id`) REFERENCES `kurs` (`kurs_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
