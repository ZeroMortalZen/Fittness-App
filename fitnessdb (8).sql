-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2022 at 03:41 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitnessdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `abs_data`
--

CREATE TABLE `abs_data` (
  `id` int(11) NOT NULL,
  `Videolink` varchar(225) NOT NULL,
  `exercise` varchar(30) NOT NULL,
  `calories` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abs_data`
--

INSERT INTO `abs_data` (`id`, `Videolink`, `exercise`, `calories`) VALUES
(1, '../gifs/abs/jumping-jacks.gif', 'Jumping Jacks', '1.9'),
(2, '../gifs/abs/abdominal-crunches.gif', 'Abdominal Crunch', '0.3'),
(3, '../gifs/abs/mountain-climber.gif', 'Mountain Climber', '0.9'),
(4, '../gifs/abs/leg-raises.gif', 'Leg Raises', '1.2'),
(5, '../gifs/abs/plank.gif', 'Plank', '2.5'),
(6, '../gifs/abs/heel-touch.gif', 'Heel Touch', '3.5');

-- --------------------------------------------------------

--
-- Table structure for table `arms_data`
--

CREATE TABLE `arms_data` (
  `id` int(11) NOT NULL,
  `Videolink` varchar(225) NOT NULL,
  `exercise` varchar(30) NOT NULL,
  `calories` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arms_data`
--

INSERT INTO `arms_data` (`id`, `Videolink`, `exercise`, `calories`) VALUES
(7, '../gifs/arms/triceps-dips.gif', 'Triceps Dips', '2.3'),
(8, '../gifs/arms/diamond-push-up.gif', 'Diamond Push-Ups', '2.9'),
(9, '../gifs/arms/diagonal-plank.gif', 'Diagonal Plank', '3.7'),
(10, '../gifs/arms/inchworms.gif', 'Inch-Worms', '2.1'),
(11, '../gifs/arms/push-up.gif', 'Push-Ups', '2.8'),
(12, '../gifs/arms/wall-push-up.gif', 'Wall Push-Ups', '0.6');

-- --------------------------------------------------------

--
-- Table structure for table `chest_data`
--

CREATE TABLE `chest_data` (
  `id` int(11) NOT NULL,
  `Videolink` varchar(225) NOT NULL,
  `exercise` varchar(30) NOT NULL,
  `calories` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chest_data`
--

INSERT INTO `chest_data` (`id`, `Videolink`, `exercise`, `calories`) VALUES
(13, '../gifs/chest/incline-push-up.gif', 'Incline Push-Ups', '1.6'),
(14, '../gifs/chest/knee-push-up.gif', 'Knee Push-Ups', '1.3'),
(15, '../gifs/chest/push-up.gif', 'Push-Ups', '2.8'),
(16, '../gifs/chest/wide-arm-push-up.gif', 'Wide Arm Push-Ups', '1.4'),
(17, '../gifs/chest/cobra-stretch.gif', 'Cobra Stretch', '0.5'),
(18, '../gifs/chest/chest-stretch.gif', 'Chest Stretch', '0.7');

-- --------------------------------------------------------

--
-- Table structure for table `legs_data`
--

CREATE TABLE `legs_data` (
  `id` int(11) NOT NULL,
  `Videolink` varchar(225) NOT NULL,
  `exercise` varchar(30) NOT NULL,
  `calories` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `legs_data`
--

INSERT INTO `legs_data` (`id`, `Videolink`, `exercise`, `calories`) VALUES
(19, '../gifs/legs/side-hop.gif', 'Side Hop', '2.2'),
(20, '../gifs/legs/squats.gif', 'Squats', '3.3'),
(21, '../gifs/legs/backward-lunge.gif', 'Backward Lunge', '1.7'),
(22, '../gifs/legs/donkey-kick-left.gif', 'Donkey Kicks Left', '1.1'),
(23, '../gifs/legs/donkey-kick-right.gif', 'Donkey Kicks Right', '1.1'),
(24, '../gifs/legs/wall-calf-raises.gif', 'Wall Calf Raises', '2.1');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `height` double NOT NULL,
  `weight` double NOT NULL,
  `BurnedCalMonday` double NOT NULL,
  `BurnedCalTuesday` double NOT NULL,
  `BurnedCalWednesday` double NOT NULL,
  `BurnedCalThrusday` double NOT NULL,
  `BurnedCalFriday` double NOT NULL,
  `BurnedCalSaturday` double NOT NULL,
  `BurnedCalSunday` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `height`, `weight`, `BurnedCalMonday`, `BurnedCalTuesday`, `BurnedCalWednesday`, `BurnedCalThrusday`, `BurnedCalFriday`, `BurnedCalSaturday`, `BurnedCalSunday`) VALUES
(2, 'kelly', 'eguakun', 'kelly', 'kelly123', 'kellyeguakun@gmail.com', 60, 90, 1, 0, 0, 0, 0, 0, 0),
(3, 'Ben', 'jack', 'Admin', 'Admin123', 'Admin@gmail.com', 60, 60, 0, 0, 0, 0, 0, 0, 0),
(4, 'matthew', 'john', 'matthew', 'mat123', 'mat@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'finaltest', 'finaltest1', 'finaltest2', 'test123', 'finaltest@email.com', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'harry', 'Ben', 'harry', 'harry123', 'harry@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'mat', 'ben', 'mat123', 'mat123', 'mat@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'mat', 'ben', 'mat123', 'jack123', 'mat@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'test565', 'testman', 'test54', 'test123', 'test6@email.com', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `totalcal_abs`
--

CREATE TABLE `totalcal_abs` (
  `id` int(255) NOT NULL,
  `TotalCalAbs_Monday` double DEFAULT NULL,
  `TotalCalAbs_Tuesday` double DEFAULT NULL,
  `TotalCalAbs_Wednesday` double DEFAULT NULL,
  `TotalCalAbs_Thursday` double DEFAULT NULL,
  `TotalCalAbs_Friday` double DEFAULT NULL,
  `TotalCalAbs_Saturday` double DEFAULT NULL,
  `TotalCalAbs_Sunday` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totalcal_abs`
--

INSERT INTO `totalcal_abs` (`id`, `TotalCalAbs_Monday`, `TotalCalAbs_Tuesday`, `TotalCalAbs_Wednesday`, `TotalCalAbs_Thursday`, `TotalCalAbs_Friday`, `TotalCalAbs_Saturday`, `TotalCalAbs_Sunday`) VALUES
(2, 0, 0, 0, 0, 0, 0, 0),
(3, 60.5, 70.2, 46.2, 40.2, 50, 64.5, 74.4),
(4, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0),
(6, 113, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `totalcal_arms`
--

CREATE TABLE `totalcal_arms` (
  `id` int(255) NOT NULL,
  `TotalCalArms_Monday` double DEFAULT NULL,
  `TotalCalArms_Tuesday` double DEFAULT NULL,
  `TotalCalArms_Wednesday` double DEFAULT NULL,
  `TotalCalArms_Thursday` double DEFAULT NULL,
  `TotalCalArms_Friday` double DEFAULT NULL,
  `TotalCalArms_Saturday` double DEFAULT NULL,
  `TotalCalArms_Sunday` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `totalcal_arms`
--

INSERT INTO `totalcal_arms` (`id`, `TotalCalArms_Monday`, `TotalCalArms_Tuesday`, `TotalCalArms_Wednesday`, `TotalCalArms_Thursday`, `TotalCalArms_Friday`, `TotalCalArms_Saturday`, `TotalCalArms_Sunday`) VALUES
(2, 0, 0, 0, 0, 0, 0, 0),
(3, 57.3, 20, 34, 80, 90, 120, 40),
(4, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `totalcal_chest`
--

CREATE TABLE `totalcal_chest` (
  `id` int(255) NOT NULL,
  `TotalCalChest_Monday` double DEFAULT NULL,
  `TotalCalChest_Tuesday` double DEFAULT NULL,
  `TotalCalChest_Wednesday` double DEFAULT NULL,
  `TotalCalChest_Thursday` double DEFAULT NULL,
  `TotalCalChest_Friday` double DEFAULT NULL,
  `TotalCalChest_Saturday` double DEFAULT NULL,
  `TotalCalChest_Sunday` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `totalcal_chest`
--

INSERT INTO `totalcal_chest` (`id`, `TotalCalChest_Monday`, `TotalCalChest_Tuesday`, `TotalCalChest_Wednesday`, `TotalCalChest_Thursday`, `TotalCalChest_Friday`, `TotalCalChest_Saturday`, `TotalCalChest_Sunday`) VALUES
(2, 0, 0, 0, 0, 0, 0, 0),
(3, 39.9, 49.8, 50.4, 100.3, 40, 44, 49.8),
(4, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `totalcal_legs`
--

CREATE TABLE `totalcal_legs` (
  `id` int(255) NOT NULL,
  `TotalCalLegs_Monday` double DEFAULT NULL,
  `TotalCalLegs_Tuesday` double DEFAULT NULL,
  `TotalCalLegs_Wednesday` double DEFAULT NULL,
  `TotalCalLegs_Thursday` double DEFAULT NULL,
  `TotalCalLegs_Friday` double DEFAULT NULL,
  `TotalCalLegs_Saturday` double DEFAULT NULL,
  `TotalCalLegs_Sunday` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `totalcal_legs`
--

INSERT INTO `totalcal_legs` (`id`, `TotalCalLegs_Monday`, `TotalCalLegs_Tuesday`, `TotalCalLegs_Wednesday`, `TotalCalLegs_Thursday`, `TotalCalLegs_Friday`, `TotalCalLegs_Saturday`, `TotalCalLegs_Sunday`) VALUES
(2, 0, 0, 0, 0, 0, 0, 0),
(3, 50.8, 33, 40.2, 80.2, 45.2, 37.2, 29.3),
(4, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abs_data`
--
ALTER TABLE `abs_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arms_data`
--
ALTER TABLE `arms_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chest_data`
--
ALTER TABLE `chest_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legs_data`
--
ALTER TABLE `legs_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totalcal_abs`
--
ALTER TABLE `totalcal_abs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totalcal_arms`
--
ALTER TABLE `totalcal_arms`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `totalcal_chest`
--
ALTER TABLE `totalcal_chest`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `totalcal_legs`
--
ALTER TABLE `totalcal_legs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abs_data`
--
ALTER TABLE `abs_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `arms_data`
--
ALTER TABLE `arms_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chest_data`
--
ALTER TABLE `chest_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `legs_data`
--
ALTER TABLE `legs_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `totalcal_abs`
--
ALTER TABLE `totalcal_abs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `totalcal_arms`
--
ALTER TABLE `totalcal_arms`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `totalcal_chest`
--
ALTER TABLE `totalcal_chest`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `totalcal_legs`
--
ALTER TABLE `totalcal_legs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
