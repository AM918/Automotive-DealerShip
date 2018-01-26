-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2015 at 08:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `collector`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
`id` mediumint(9) NOT NULL,
  `make` varchar(200) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `mileage` int(3) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `make`, `model`, `image`, `price`, `mileage`, `description`) VALUES
(1, 'BMW', '1500', 'bmw.jpg', '55000', 1900, 'Original BMW'),
(2, 'Ferrari', '512BB', '512bb.jpg', '450900', 2000, 'Rare Ferrari Serial number 3/12'),
(3, 'Chevrollete', '1975 Corvette', 'corvette.jpg', '42900', 14000, 'Convertable'),
(4, 'Lamborghini', '1980 Countach', 'countach.jpg', '600000', 4000, 'Factory white rare color'),
(5, 'Porsche', '1974 Carrera 911', '911.jpg', '215000', 3000, 'Rare 911 turbo'),
(6, 'Cadillac`', '1960 FleetWood', 'fleetwood.jpg', '44500', 5000, 'Special matte black color');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
