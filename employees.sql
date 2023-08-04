-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 01:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `salary`) VALUES
(1, 'Ronald Mendel', 'C/ Araquil, 67, Madrid', 5000),
(2, 'Victoria Ashworth', '35 King George, London', 6500),
(3, 'Martin Blank', '25, Rue Lauriston, Paris', 8000),
(4, 'John Doe', '123 Main St, New York', 6000),
(5, 'Jane Smith', '456 Oak Ave, San Francisco', 7000),
(6, 'Alice Johnson', '789 Broadway, Los Angeles', 5500),
(7, 'Bob Williams', '456 Elm St, Chicago', 7200),
(8, 'Eva Martinez', '231 Park Ave, Miami', 6100),
(9, 'Michael Lee', '999 Oak St, Houston', 6700),
(10, 'Sophia Kim', '342 Pine Ave, Toronto', 5900),
(11, 'David Anderson', '123 Hill St, Vancouver', 5300),
(12, 'Emma Wilson', '76 River Rd, Sydney', 7200),
(13, 'William Garcia', '11 Garden St, Barcelona', 6300),
(14, 'Olivia Brown', '44 Spring St, Rome', 6100),
(15, 'James Rodriguez', '45 Summer St, Tokyo', 5800),
(16, 'Isabella Lopez', '67 Autumn St, Beijing', 6600),
(17, 'Alexander Smith', '78 Winter St, Seoul', 7000),
(18, 'Sofia Nguyen', '35 Beach Rd, Moscow', 7500),
(19, 'Lucas Hernandez', '22 Mountain Ave, Berlin', 6700),
(20, 'Mia Wilson', '10 Lake Rd, Paris', 5900),
(21, 'Daniel Kim', '99 Forest St, London', 5500),
(22, 'Ava Davis', '56 Sky Ave, Madrid', 7200),
(23, 'Michael Martinez', '123 Park St, Rome', 6000),
(24, 'Camila Johnson', '444 Hillside Ave, New York', 6300),
(25, 'William Hernandez', '555 Valley Rd, Miami', 7100),
(26, 'Emily Smith', '231 River Ave, Los Angeles', 6800),
(27, 'Joseph Lee', '999 Hill Rd, Sydney', 6400),
(28, 'Charlotte Nguyen', '777 Garden St, Tokyo', 5900),
(29, 'Benjamin Brown', '666 Elm St, Barcelona', 7200),
(30, 'Chloe Garcia', '456 Mountain Rd, Vancouver', 6600),
(31, 'Daniel Wilson', '555 Ocean Ave, San Francisco', 6200),
(32, 'Grace Rodriguez', '111 Sunset Blvd, Chicago', 7000),
(33, 'Oliver Lopez', '888 Beach St, Berlin', 7500),
(34, 'Liam Hernandez', '333 Sky Rd, Moscow', 6900),
(35, 'Sophia Smith', '123 Moon St, Seoul', 5800),
(36, 'Lucas Davis', '444 Sun Ave, Paris', 6000),
(37, 'Emma Johnson', '111 Rainbow St, Madrid', 7200),
(38, 'Aiden Nguyen', '888 Cloud Rd, Rome', 6400),
(39, 'Olivia Martinez', '444 Forest Ave, London', 5700),
(40, 'Elijah Wilson', '999 Garden St, Barcelona', 7200),
(41, 'Avery Brown', '555 Hillside Ave, New York', 6600),
(42, 'Ella Kim', '333 River Rd, Miami', 7100),
(43, 'James Lee', '999 Lake Ave, Los Angeles', 6800),
(44, 'Sophia Garcia', '444 Mountain St, Sydney', 6300),
(45, 'Aiden Smith', '111 Hill Rd, Tokyo', 5900),
(46, 'Aria Lopez', '888 Valley Ave, Berlin', 7600),
(47, 'Logan Hernandez', '333 Forest Rd, Moscow', 7000),
(48, 'Grace Wilson', '444 Ocean St, Seoul', 6000),
(49, 'Ronald Mendel', 'C/ Araquil, 67, Madrid', 5000),
(50, 'Victoria Ashworth', '35 King George, London', 6500),
(51, 'Martin Blank', '25, Rue Lauriston, Paris', 8000),
(52, 'John Doe', '123 Main St, New York', 6000),
(53, 'Jane Smith', '456 Oak Ave, San Francisco', 7000),
(54, 'Alice Johnson', '789 Broadway, Los Angeles', 5500),
(55, 'Bob Williams', '456 Elm St, Chicago', 7200),
(56, 'Eva Martinez', '231 Park Ave, Miami', 6100),
(57, 'Michael Lee', '999 Oak St, Houston', 6700),
(58, 'Sophia Kim', '342 Pine Ave, Toronto', 5900),
(59, 'David Anderson', '123 Hill St, Vancouver', 5300),
(60, 'Emma Wilson', '76 River Rd, Sydney', 7200),
(61, 'William Garcia', '11 Garden St, Barcelona', 6300),
(62, 'Olivia Brown', '44 Spring St, Rome', 6100),
(63, 'James Rodriguez', '45 Summer St, Tokyo', 5800),
(64, 'Isabella Lopez', '67 Autumn St, Beijing', 6600),
(65, 'Alexander Smith', '78 Winter St, Seoul', 7000),
(66, 'Sofia Nguyen', '35 Beach Rd, Moscow', 7500),
(67, 'Lucas Hernandez', '22 Mountain Ave, Berlin', 6700),
(68, 'Mia Wilson', '10 Lake Rd, Paris', 5900),
(69, 'Daniel Kim', '99 Forest St, London', 5500),
(70, 'Ava Davis', '56 Sky Ave, Madrid', 7200),
(71, 'Michael Martinez', '123 Park St, Rome', 6000),
(72, 'Camila Johnson', '444 Hillside Ave, New York', 6300),
(73, 'William Hernandez', '555 Valley Rd, Miami', 7100),
(74, 'Emily Smith', '231 River Ave, Los Angeles', 6800),
(75, 'Joseph Lee', '999 Hill Rd, Sydney', 6400),
(76, 'Charlotte Nguyen', '777 Garden St, Tokyo', 5900),
(77, 'Benjamin Brown', '666 Elm St, Barcelona', 7200),
(78, 'Chloe Garcia', '456 Mountain Rd, Vancouver', 6600),
(79, 'Daniel Wilson', '555 Ocean Ave, San Francisco', 6200),
(80, 'Grace Rodriguez', '111 Sunset Blvd, Chicago', 7000),
(81, 'Oliver Lopez', '888 Beach St, Berlin', 7500),
(82, 'Liam Hernandez', '333 Sky Rd, Moscow', 6900),
(83, 'Sophia Smith', '123 Moon St, Seoul', 5800),
(84, 'Lucas Davis', '444 Sun Ave, Paris', 6000),
(85, 'Emma Johnson', '111 Rainbow St, Madrid', 7200),
(86, 'Aiden Nguyen', '888 Cloud Rd, Rome', 6400),
(87, 'Olivia Martinez', '444 Forest Ave, London', 5700),
(88, 'Elijah Wilson', '999 Garden St, Barcelona', 7200),
(89, 'Avery Brown', '555 Hillside Ave, New York', 6600),
(90, 'Ella Kim', '333 River Rd, Miami', 7100),
(91, 'James Lee', '999 Lake Ave, Los Angeles', 6800),
(92, 'Sophia Garcia', '444 Mountain St, Sydney', 6300),
(93, 'Aiden Smith', '111 Hill Rd, Tokyo', 5900),
(94, 'Aria Lopez', '888 Valley Ave, Berlin', 7600),
(95, 'Logan Hernandez', '333 Forest Rd, Moscow', 7000),
(96, 'Grace Wilson', '444 Ocean St, Seoul', 6000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
