-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 06:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatting`
--

CREATE TABLE `chatting` (
  `previousCons` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `newCons` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `dfile` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pfile` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pmsg` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `dmsg` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors_list`
--

CREATE TABLE `doctors_list` (
  `id` int(30) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `Dob` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `specialty_ids` text DEFAULT NULL,
  `img_path` text DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `nationality` varchar(100) DEFAULT NULL,
  `syndicateCard` varchar(2000) DEFAULT NULL,
  `avaliavleTime` datetime DEFAULT NULL,
  `graduteDate` date DEFAULT NULL,
  `inistaion` varchar(100) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors_list`
--

INSERT INTO `doctors_list` (`id`, `Firstname`, `Lastname`, `username`, `password`, `email`, `Dob`, `Gender`, `specialty_ids`, `img_path`, `date_created`, `nationality`, `syndicateCard`, `avaliavleTime`, `graduteDate`, `inistaion`, `Status`) VALUES
(1, 'hamid', 'qashalan', 'hq', '1234', 'hamid@gmail.com', '9/5/1996', 'male', '[5,6]', 'Image -1.png', '2022-04-13 09:52:00', 'palestinan', 'Al Azhar University.docx', '2022-04-01 14:03:10', '2021-05-14', 'orth', 1),
(2, 'hadeel', 'najim', 'hn', '123456', 'hadeel@gmail.com', '9/5/2000', 'female', '[1]', 'Image-1.png', '2022-04-10 14:12:23', 'Palestinian', 'Al Azhar University.docx', '2022-04-13 14:12:23', '2018-06-18', 'hbn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

CREATE TABLE `medical_record` (
  `length` int(200) NOT NULL,
  `weight` int(200) NOT NULL,
  `bloodType` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `drinkAlcohol` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `smoke` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_specialty`
--

CREATE TABLE `medical_specialty` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `img_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_specialty`
--

INSERT INTO `medical_specialty` (`id`, `name`, `img_path`) VALUES
(1, 'Pediatrics', 'Image -1.png'),
(3, 'Cardiology', 'Image -1.png'),
(4, 'Orthopaedics', 'Image -1.png'),
(5, 'Obstetrician/gynecologists', 'Image -1.png'),
(6, 'Neurologists', 'Image -1.png');

-- --------------------------------------------------------

--
-- Table structure for table `patient_list`
--

CREATE TABLE `patient_list` (
  `id` int(30) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_pass` varchar(100) NOT NULL,
  `mobile` int(15) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` text NOT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_list`
--

INSERT INTO `patient_list` (`id`, `Firstname`, `Lastname`, `username`, `email`, `password`, `confirm_pass`, `mobile`, `Dob`, `Gender`, `Status`) VALUES
(1, 'ahmad', 'najim', 'ahmadn', 'ahmad@gmail.com', 'p123', 'p123', 5957574, '2001-02-09', 'male', 1),
(2, 'lmlkn;', ';lm;lm\'', 'ahmad99999@gmail.com', 'ahmad99999@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 593907986, '2022-07-24', 'Female', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `doctor_id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '2 = doctor,3=patient'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `doctor_id`, `name`, `username`, `password`, `type`) VALUES
(1, 1, 'DR.hamid.', 'hq', '1234', 2),
(2, 0, 'ahmad', 'ahmadn', 'p123', 3),
(3, 2, 'DR.hadeel.', 'hn', '123456', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors_list`
--
ALTER TABLE `doctors_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_specialty`
--
ALTER TABLE `medical_specialty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_list`
--
ALTER TABLE `patient_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors_list`
--
ALTER TABLE `doctors_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medical_specialty`
--
ALTER TABLE `medical_specialty`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient_list`
--
ALTER TABLE `patient_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
