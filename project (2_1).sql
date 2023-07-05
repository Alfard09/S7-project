-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 07:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `pass`) VALUES
(11, 'gauri', 'gauri@gmail.com', 'gauri1234'),
(13, 'akxenon', 'akxenon@gmail.com', 'Akxenon#123');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `pid` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`pid`, `image`, `pname`, `descrip`, `rating`, `price`) VALUES
(1, 'images/featuredprod/fe1.gif', 'AXOR', 'APEX XBHP Gloss 299 Fluor Yellow Blue', '4', '$90'),
(2, 'images/featuredprod/fe2.jpg', 'Royal Enfield', 'Scrambler Baker Express Matt Off White Helmet ', '3.5', '$20'),
(3, 'images/featuredprod/fe3.jpg', 'Furygan Apalaches', 'Fluorescent Yellow Black Riding Jacket', '3', '$55'),
(4, 'images/featuredprod/fe4.webp', 'Rynox Gravel', 'Dual Sport Hi Viz Green Blue Riding Gloves', '3', '$35'),
(5, 'images/featuredprod/fe5.jpg', 'Cruztools Roadtech', 'Toolkit for Kawasaki|Honda|Suzuki|Yamaha', '4', '$55'),
(6, 'images/featuredprod/fe6.webp', 'OGIO AERO', 'OGIO AERO 20 Backpack', '5', '$55'),
(7, 'images/featuredprod/fe7.jpg', 'Guardian Gears', 'Jaws Mini Magnetic Tank Bag', '3', '$45'),
(8, 'images/featuredprod/fe8.jpg', 'Alpinestars Nucleon', 'KR CELL CIS Chest Protector', '4', '$100'),
(9, 'images/featuredprod/helmet1.jpg', 'SMK', 'Gullwing Tekker Gloss Black Orange White ', '4', '$90'),
(10, 'images/featuredprod/helmet2.jpg', 'Vega', 'Vega helmet', '2', '$55'),
(11, 'images/featuredprod/helmet3.jpg', 'Vega', 'Vega fullface cover helmet', '3', '$55'),
(12, 'images/featuredprod/helmet4.jpg', 'SMK', 'SBH-17 Terminator ', '4', '$70');

-- --------------------------------------------------------

--
-- Table structure for table `shophelmet`
--

CREATE TABLE `shophelmet` (
  `pid` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shophelmet`
--

INSERT INTO `shophelmet` (`pid`, `image`, `pname`, `description`, `rating`, `price`) VALUES
(1, 'images/featuredprod/fe1.gif', 'AXOR', 'APEX XBHP Gloss 299 Fluor Yellow Blue', '4', '$90'),
(2, 'images/Shop/hm2.webp', 'AXOR', 'Retro ROGUE Gloss Black Full Face Helmet', '5', '$102'),
(3, 'images/Shop/hm3.webp', 'SMK', 'Typhoon Matt Black (MA200) Helmet', '4', '$85'),
(4, 'images/Shop/hm4.jpg', 'SMK', 'Gullwing Tekker Matt Black Grey Blue Modular (MA265) Helmet', '5', '$100'),
(5, 'images/Shop/hm5.jpg', 'SMK', 'Twister Captain Gloss White Red (GL163) Helmet', '4', '$90'),
(6, 'images/Shop/hm6.webp', 'SMK', 'Allterra Fulmine Off-road Gloss Helmet (GL651)', '4', '$95'),
(7, 'images/Shop/hm7.jpg', 'LS2 FF352', 'Rookie Fly Demon Matt Black Red Full Face Helmet', '3', '$45'),
(8, 'images/Shop/hm8.jpg', 'AXOR', 'RETRO MOTO-X Matt Black Full Face Helmet', '4', '$70'),
(9, 'images/featuredprod/helmet1.jpg', 'SMK', 'Gullwing Tekker Gloss Black Orange White', '4', '$90'),
(10, 'images/Shop/hm9.jpg', 'LS2 FF320', 'Exo Gloss Black Turquoise Full Face Helmet', '3', '$55'),
(11, 'images/featuredprod/helmet3.jpg', 'LS2 MX436', 'ioneer Evo Router Matt Black Fluorescent Yellow Dual Sport Helmet', '4', '$120'),
(12, 'images/Shop/hm10.jpg', 'Royal Enfield', 'MLG Copter Face Long Visior Matt Black White Helmet', '4', '$55');

-- --------------------------------------------------------

--
-- Table structure for table `shopjacket`
--

CREATE TABLE `shopjacket` (
  `pid` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopjacket`
--

INSERT INTO `shopjacket` (`pid`, `image`, `pname`, `description`, `rating`, `price`) VALUES
(1, 'images/Shop/jk1.jpg', 'Tarmac Drifter II', 'Level 2 Silver Grey Riding Jacket', '4', '$90'),
(2, 'images/Shop/jk2.jpg', 'Rynox Stealth', 'Evo V3 L2 Black Riding Jacket', '3', '$200'),
(3, 'images/featuredprod/fe3.jpg', 'Furygan Apalaches', 'Fluorescent Yellow Black Riding Jacket', '4', '$55'),
(4, 'images/Shop/jk4.jpg', 'Tarmac Corsa', 'Level 2 Black White Red Riding Jacket', '4', '$105'),
(5, 'images/Shop/jk5.jpg', 'DSG ', 'Race Pro Black Fluorescent Red Riding Jacket', '4', '$130'),
(6, 'images/Shop/jk6.jpg', 'Rynox', 'Tornado Pro V4 Black White Riding Jacket', '3', '$100'),
(7, 'images/Shop/jk7.jpg', 'BBG xPlorer', 'Black Orange Riding Jacket', '3', '$75'),
(8, 'images/Shop/jk8.jpg', 'RS Taichi ', 'Drymaster Explorer Khaki Jacket', '5', '$300'),
(9, 'images/Shop/jk9.jpg', 'Alpinestars', 'Durango Air Mid Grey Dark Grey Black Red Riding Jacket', '4', '$200'),
(10, 'images/Shop/jk10.jpg', 'Alpinestars', 'Viper V2 Air Textile Black Fluorescent Red Riding Jacket', '4', '$285'),
(11, 'images/Shop/jk11.jpg', 'Royal Enfield', 'Streetwind V2 Red Riding Jacket', '3', '$80'),
(12, 'images/Shop/jk12.jpg', 'Furygan Apalaches ', 'Frey Red Black Riding Jacket', '5', '$320');

-- --------------------------------------------------------

--
-- Table structure for table `singpage`
--

CREATE TABLE `singpage` (
  `pid` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singpage`
--

INSERT INTO `singpage` (`pid`, `image`, `pname`, `price`, `des`) VALUES
(1, 'images/featuredprod/fe1.gif', 'AXOR', '$150', 'ISI Cerified Graphics Helmet. High Impact Resistant Thermoplastic shell\r\nBreathable Pedding with Nec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `shophelmet`
--
ALTER TABLE `shophelmet`
  ADD UNIQUE KEY `pid` (`pid`);

--
-- Indexes for table `shopjacket`
--
ALTER TABLE `shopjacket`
  ADD UNIQUE KEY `pid` (`pid`);

--
-- Indexes for table `singpage`
--
ALTER TABLE `singpage`
  ADD UNIQUE KEY `id` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
