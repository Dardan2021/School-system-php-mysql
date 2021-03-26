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
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
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

-- --------------------------------------------------------

--
-- Table structure for table `e_web`
--

CREATE TABLE `e_web` (
  `produkt_id` int(11) NOT NULL,
  `produkt_emer` varchar(15) NOT NULL,
  `produkt_sasi` int(11) NOT NULL,
  `produkt_gjini` varchar(8) NOT NULL,
  `produkt_stine` varchar(6) NOT NULL,
  `produkt_mas` varchar(6) NOT NULL,
  `produkt_imazh` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_web`
--

INSERT INTO `e_web` (`produkt_id`, `produkt_emer`, `produkt_sasi`, `produkt_gjini`, `produkt_stine`, `produkt_mas`, `produkt_imazh`) VALUES
(2019, 'jeans', 10, 'femer', 'vjesht', 'xl', 'foto/201901.png'),
(201900, '*B165674B764BFD', 1, 'femer', 'dimer ', 'xl', ''),
(201901, 'jelek', 3, 'femer', 'dimer', 'sm', 'foto/201901.jpg'),
(201902, 'Pellush -Firmat', 1, 'femer', 'dimer', '2xl', 'foto/201902.jpg'),
(201903, 'Jeans -Firmato', 1, 'femer', 'all', 'sm', 'foto/201903.jpg'),
(201904, 'Jeans- Firmato', 1, 'femer', 'all', 'md', 'foto/201904.jpg'),
(201905, 'Funde-Firmato', 1, 'femer', 'all', 'md', 'foto/201905.jpg'),
(201906, 'Funde-Firmato', 1, 'femer', 'all', 'sm', 'foto/201906.jpg'),
(201907, 'Funde-Firmato', 1, 'femer', 'all', 'xl', 'foto/201907.jpg'),
(201908, 'Funde -Firmato', 1, 'femer', 'all', 'xl', 'foto/201908.jpg'),
(201909, 'Funde-Firmato', 1, 'femer', 'all', 'xl', 'foto/201909.jpg'),
(201910, 'Fustane-Firmato', 1, 'femer', 'all', 'sm', 'foto/201910.jpg'),
(201911, 'Fustane-Firmato', 1, 'femer', 'all', 'md', 'foto/201911.jpg'),
(201912, 'jeans', 1, 'meshkuj', 'all', 'md', 'foto/201912.jpg'),
(201913, 'jeans', 1, 'meshkuj', 'all', 'xl', 'foto/201913.jpg'),
(201914, 'jeans', 1, 'meshkuj', 'all', '2xl', 'foto/201914.jpg'),
(201915, 'jeans', 1, 'meshkuj', 'all', 'xl', 'foto/201915.jpg'),
(201916, 'xhupa', 1, 'meshkuj', 'dimer', 'xl', 'foto/201916.jpg'),
(201917, 'xhupa', 1, 'meshkuj', 'dimer', '2xl', 'foto/201917.jpg'),
(201918, 'xhupa', 1, 'meshkuj', 'dimer', 'md', 'foto/201918.jpg'),
(201919, 'xhupa', 1, 'meshkuj', 'dimer', 'md', 'foto/201919.jpg'),
(201920, 'xhupa', 1, 'meshkuj', 'dimer', '2xl', 'foto/201920.jpg'),
(201921, 'Fustane', 1, 'femer', 'all', 'sm', 'foto/201921.jpg'),
(201922, 'Fustane', 1, 'femer', 'all', 'md', 'foto/201922.jpg'),
(201923, 'Fustane', 1, 'femer', 'all', 'xl', 'foto/201923.jpg'),
(201924, 'Fustane', 1, 'femer', 'all', 'md', 'foto/201924.jpg'),
(201925, 'Fustane', 1, 'femer', 'all', 'xl', 'foto/201925.jpg'),
(201926, 'Pellusha', 1, 'femer', 'dimer', '2xl', 'foto/201926.jpg'),
(201927, 'Pellusha', 1, 'femer', 'dimer', 'md', 'foto/201927.jpg'),
(201928, 'Pellusha', 1, 'femer', 'dimer', 'xl', 'foto/201928.jpg'),
(201929, 'Pellusha', 1, 'femer', 'dimer', 'xl', 'foto/201929.jpg'),
(201930, 'Pellusha', 1, 'femer', 'dimer', 'md', 'foto/201930.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inserti`
--

CREATE TABLE `inserti` (
  `emer` varchar(12) NOT NULL,
  `email` varchar(12) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presoret`
--

CREATE TABLE `presoret` (
  `presor_EMER` varchar(12) NOT NULL,
  `presor_MBIEMER` text NOT NULL,
  `presor_PASSWORD` text NOT NULL,
  `presor_EMAIL` varchar(11) NOT NULL,
  `presor_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presoret`
--

INSERT INTO `presoret` (`presor_EMER`, `presor_MBIEMER`, `presor_PASSWORD`, `presor_EMAIL`, `presor_ID`) VALUES
('Besnik', 'Memetaj', '0', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `presor_kurset`
--

CREATE TABLE `presor_kurset` (
  `presor_ID` int(11) NOT NULL,
  `kursi` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `emer` varchar(20) NOT NULL,
  `mbiemer` varchar(20) NOT NULL,
  `kursi` varchar(20) NOT NULL,
  `piket` int(11) NOT NULL,
  `id` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usebr`
--

CREATE TABLE `usebr` (
  `id` int(11) NOT NULL,
  `email_user` tinytext NOT NULL,
  `pwd` longtext NOT NULL,
  `emer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usebr`
--

INSERT INTO `usebr` (`id`, `email_user`, `pwd`, `emer`) VALUES
(1, 'dardan', '1234', 'madani');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `emer` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`emer`, `password`, `email`) VALUES
('Dardan', '1234', 'rr');

-- --------------------------------------------------------

--
-- Table structure for table `vk`
--

CREATE TABLE `vk` (
  `emer` varchar(11) NOT NULL,
  `kursi` varchar(12) NOT NULL,
  `nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vk`
--

INSERT INTO `vk` (`emer`, `kursi`, `nota`) VALUES
('eheheh', '1231', 0),
('eheheh', '122', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_web`
--
ALTER TABLE `e_web`
  ADD PRIMARY KEY (`produkt_id`);

--
-- Indexes for table `presoret`
--
ALTER TABLE `presoret`
  ADD PRIMARY KEY (`presor_ID`);

--
-- Indexes for table `presor_kurset`
--
ALTER TABLE `presor_kurset`
  ADD PRIMARY KEY (`kursi`);

--
-- Indexes for table `usebr`
--
ALTER TABLE `usebr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`emer`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `presoret`
--
ALTER TABLE `presoret`
  MODIFY `presor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usebr`
--
ALTER TABLE `usebr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
