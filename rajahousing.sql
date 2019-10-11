-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 07:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajahousing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=inactive,1=active',
  `admin_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1=superadmin,2=subadmin',
  `forgot_link` varchar(250) NOT NULL,
  `reference_d` varchar(250) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL,
  `added_by` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `password`, `is_active`, `admin_type`, `forgot_link`, `reference_d`, `created_date`, `updated_date`, `added_by`) VALUES
(1, '5ine', 'prathwi@5ine.in', 9876543201, '5ine1234', 1, 3, 'U6MpVrtKuk0nJByE', '123456789', '2019-08-06 13:28:31', '2019-10-01 16:38:29', NULL),
(6, 'prathwi', 'prathwi.5ine@gmail.com', 8951411732, '', 0, 2, '', '8qxdjak1nP', '2019-10-08 13:20:07', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `alt` varchar(250) NOT NULL,
  `uniq` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subtitle` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `alt`, `uniq`, `status`, `date`, `subtitle`) VALUES
(1, 'banner/1570280374.png', 'banner1', '6rva4i9jIw', 1, '2019-10-05 12:59:34', 'find your dream apartment'),
(2, 'banner/1570280740.png', 'banner2', 'teNCGmkxZp', 1, '2019-10-05 13:05:40', 'find your dream apartment'),
(3, 'banner/1570281836.png', 'banner3', 'vqYJa5cb7V', 1, '2019-10-05 13:07:49', 'find your dream apartment'),
(4, 'banner/1570626015.png', 'Best Apartments to sale', 'N9ZRJGDktz', 1, '2019-10-09 13:00:15', 'find your dream apartment');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `added_by` int(20) NOT NULL,
  `uniq` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `added_by`, `uniq`, `status`, `date`) VALUES
(7, 'Residential', 1, 'vSge3rfFY0', 1, '2019-10-09 10:47:33'),
(9, 'EPC-Contractors', 1, 'GQ6HhJ7FsB', 1, '2019-10-09 10:47:46'),
(10, 'Projects via collobration', 1, 'ix0jgHmbhB', 1, '2019-10-09 10:47:53'),
(11, 'Logistics Park', 1, 'LxmvecYkPa', 1, '2019-10-09 10:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(250) NOT NULL,
  `subcategory` varchar(250) NOT NULL,
  `category` int(250) NOT NULL,
  `uniq` varchar(250) NOT NULL,
  `added_by` int(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `subcategory`, `category`, `uniq`, `added_by`, `date`) VALUES
(6, 'completed', 7, '1bpZFnzYMx', 1, '2019-10-09 10:48:44'),
(7, 'Ready To Move', 7, '8GlioVS5Lz', 1, '2019-10-09 10:53:58'),
(8, 'Ongoing', 7, 'SXwcBngrCo', 1, '2019-10-09 10:54:09'),
(9, 'Upcoming', 7, 'nXxoGTNwjp', 1, '2019-10-09 10:54:26'),
(10, 'Commercial', 8, 'kXHUA4N6eR', 1, '2019-10-09 10:54:57'),
(16, 'test123', 0, 'JLpQl35ewx', 1, '2019-10-09 11:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `supercategory`
--

CREATE TABLE `supercategory` (
  `id` int(250) NOT NULL,
  `supercategory` varchar(250) NOT NULL,
  `subcategory` int(250) NOT NULL,
  `uniq` varchar(250) NOT NULL,
  `added_by` int(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supercategory`
--

INSERT INTO `supercategory` (`id`, `supercategory`, `subcategory`, `uniq`, `added_by`, `date`) VALUES
(6, 'Apartment', 7, 'rmvk3FBCEn', 1, '2019-10-09 11:04:48'),
(7, 'Raja Sannidhi', 7, '8goby6KNM2', 1, '2019-10-09 11:05:36'),
(8, 'villa/row villa', 7, 'zFbTS59YVx', 1, '2019-10-09 11:05:57'),
(9, 'plot/villa plot', 7, '0WgmRLarO6', 1, '2019-10-09 11:07:44'),
(12, 'test', 16, 'yPxUhBdRbH', 1, '2019-10-09 11:39:53'),
(13, 'Ready To Move', 16, '8PGz9QH0oK', 1, '2019-10-09 11:39:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supercategory`
--
ALTER TABLE `supercategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `supercategory`
--
ALTER TABLE `supercategory`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
