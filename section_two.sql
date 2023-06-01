-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 11:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocean_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `section_two`
--

CREATE TABLE `section_two` (
  `id` char(6) NOT NULL,
  `subtitle` varchar(20) DEFAULT NULL,
  `content` varchar(400) DEFAULT NULL,
  `btn_text` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_two`
--

INSERT INTO `section_two` (`id`, `subtitle`, `content`, `btn_text`) VALUES
('se2001', 'ALIGN', '66% of people (73% of Millennials) are willing to pay more for products and services from companies\r\n                                  committed to positive social and environmental impact.', 'LEARN MORE'),
('se2002', 'KICKSTART', 'Ocean One are a turnkey solution to begin the journey of reducing your business’s environmental\r\n                                  footprint or going plastic neutral.', 'START ACTION'),
('se2003', 'AMPLIFY', 'Is your actions already making strides in its commitment to sustainability? Measure your action success\r\n                                  using IMPACT', 'SEE HOW'),
('se2004', '66% OF PEOPLE', 'Approximately two-thirds of individuals, specifically 66% (with 73% being Millennials), \r\n                               are open to spending extra money on goods and services provided by companies that prioritize positive \r\n                               social and environmental contributions.', 'SEE MORE'),
('se2005', 'INITIATE', 'Ocean One offers a comprehensive solution that enables businesses to initiate their efforts \r\n                               in minimizing their environmental impact or achieving plastic neutrality in a hassle-free manner.', 'JOIN US'),
('se2006', 'ENHANCE', 'Are your current actions already demonstrating progress in fulfilling your commitment to \r\n                               sustainability? Evaluate the effectiveness of your actions by assessing their impact on the environment and related \r\n                               factors.', 'OBSERVE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `section_two`
--
ALTER TABLE `section_two`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
