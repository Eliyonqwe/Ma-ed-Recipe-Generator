-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 09:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maed`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `password`, `role`) VALUES
(1, 'eliyon', '1', 'Sole Founder, Board Chairperson & CEO of Ma\'ed LLC.');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodID` int(11) NOT NULL,
  `foodName` varchar(30) NOT NULL,
  `foodImg` varchar(100) NOT NULL,
  `foodType` varchar(30) NOT NULL,
  `prepTime` varchar(10) NOT NULL DEFAULT 'No Info.',
  `servingSize` int(11) NOT NULL,
  `description` text NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodID`, `foodName`, `foodImg`, `foodType`, `prepTime`, `servingSize`, `description`, `ingredients`, `instructions`) VALUES
(1, 'Salad', '', '', '', 0, '', '', ''),
(2, 'Shiro', '', '', '', 0, '', '', ''),
(26, 'Burger', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fooding`
--

CREATE TABLE `fooding` (
  `foodID` int(11) NOT NULL,
  `ingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fooding`
--

INSERT INTO `fooding` (`foodID`, `ingID`) VALUES
(1, 101),
(1, 102),
(2, 101),
(2, 102),
(2, 103),
(26, 101),
(26, 115),
(26, 118),
(26, 121),
(26, 123);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `ingID` int(11) NOT NULL,
  `ingName` varchar(40) NOT NULL,
  `ingType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`ingID`, `ingName`, `ingType`) VALUES
(101, 'Onion', 'Vegetables'),
(102, 'Tomato', 'Vegetables'),
(103, 'Shiro Powder', 'Stew'),
(104, 'Garlic', 'Vegetables'),
(105, 'pepper', 'Vegetables'),
(106, 'carrot', 'Vegetables'),
(107, 'potato', 'Vegetables'),
(108, 'lemon', 'Fruit'),
(109, 'apple', 'Fruit'),
(110, 'orange', 'Fruit'),
(111, 'bannana', 'Fruit'),
(112, 'avocado', 'Fruit'),
(113, 'mango', 'Fruit'),
(114, 'milk', 'Dairy'),
(115, 'cheese', 'Dairy'),
(116, 'butter', 'Dairy'),
(117, 'Egg', 'Essentials'),
(118, 'oil', 'Essentials'),
(119, 'sugar', 'Essentials'),
(120, 'flour', 'Essentials'),
(121, 'bread', 'Essentials'),
(122, 'vinegar', 'Essentials'),
(123, 'Beef', 'meat'),
(124, 'chicken', 'meat'),
(125, 'fish', 'meat');

-- --------------------------------------------------------

--
-- Table structure for table `nutritionfact`
--

CREATE TABLE `nutritionfact` (
  `id` int(11) NOT NULL,
  `foodID` int(11) NOT NULL,
  `calories` varchar(30) NOT NULL DEFAULT 'No Info.',
  `fat` varchar(30) NOT NULL DEFAULT 'No Info.',
  `protein` varchar(30) NOT NULL DEFAULT 'No Info.',
  `carbs` varchar(30) NOT NULL DEFAULT 'No Info.',
  `cholestrol` varchar(30) NOT NULL DEFAULT 'No Info.',
  `sodium` varchar(30) NOT NULL DEFAULT 'No Info.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nutritionfact`
--

INSERT INTO `nutritionfact` (`id`, `foodID`, `calories`, `fat`, `protein`, `carbs`, `cholestrol`, `sodium`) VALUES
(1, 26, '500kcal', '10g', '20g', '40g', '2mg', '1g'),
(2, 1, '150kcal', '1g', '5g', '2g', '0g', '2g'),
(3, 2, '120kcal', '5g', '12g', '20g', '0g', '1g');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `suggestionID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `suggestionText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`suggestionID`, `username`, `suggestionText`) VALUES
(1, 'ggabe', 'You should try to implement......anjasnjdakjsdkjkadkndnadnnjadsnjdadadjakknak dkakn\r\ndabdajad'),
(2, 'tammy', 'the best website i have seen. perfect.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `username`, `gender`, `age`, `password`) VALUES
(1, 'Tamiru', 'Kebede', 'tammy', 'M', 54, 'tammyking'),
(2, 'Girma', 'Abebe', 'ggabe', 'M', 43, 'ggabebe');

-- --------------------------------------------------------

--
-- Table structure for table `user_foods`
--

CREATE TABLE `user_foods` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `foodID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_foods`
--

INSERT INTO `user_foods` (`id`, `user_id`, `foodID`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodID`);

--
-- Indexes for table `fooding`
--
ALTER TABLE `fooding`
  ADD PRIMARY KEY (`foodID`,`ingID`),
  ADD KEY `FK_ing` (`ingID`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`ingID`);

--
-- Indexes for table `nutritionfact`
--
ALTER TABLE `nutritionfact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_fk` (`foodID`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`suggestionID`),
  ADD KEY `FK_User` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_foods`
--
ALTER TABLE `user_foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `foodID` (`foodID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `ingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `nutritionfact`
--
ALTER TABLE `nutritionfact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `suggestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_foods`
--
ALTER TABLE `user_foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fooding`
--
ALTER TABLE `fooding`
  ADD CONSTRAINT `FK_food` FOREIGN KEY (`foodID`) REFERENCES `food` (`foodID`),
  ADD CONSTRAINT `FK_ing` FOREIGN KEY (`ingID`) REFERENCES `ingredient` (`ingID`);

--
-- Constraints for table `nutritionfact`
--
ALTER TABLE `nutritionfact`
  ADD CONSTRAINT `food_fk` FOREIGN KEY (`foodID`) REFERENCES `food` (`foodID`);

--
-- Constraints for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD CONSTRAINT `FK_User` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_foods`
--
ALTER TABLE `user_foods`
  ADD CONSTRAINT `user_foods_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_foods_ibfk_2` FOREIGN KEY (`foodID`) REFERENCES `food` (`foodID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
