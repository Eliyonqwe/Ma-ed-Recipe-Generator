-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 04:44 PM
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
  `descriptions` text NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodID`, `foodName`, `foodImg`, `foodType`, `prepTime`, `servingSize`, `descriptions`, `ingredients`, `instructions`) VALUES
(1, 'Salad', '', 'Vegan', '10min', 0, 'Salad is a cold dish of various mixtures of raw or cooked vegetables, usually seasoned with oil, vinegar, or other dressing and sometimes accompanied by meat, fish, or other ingredients.', '3 cups of Lettuce\r\n1 cup of Onion\r\n1/4 cup lemon juice\r\n2 garlic cloves, minced\r\n1/2 teaspoon salt\r\n1/2 teaspoon pepper\r\n2 cups chopped tomatoes\r\n', 'In a jar with a tight-fitting lid, combine the oil, lemon juice, garlic, salt and pepper; cover and shake well. Chill.\r\nIn a large serving bowl, toss the romaine, tomatoes, Swiss cheese, almonds if desired, Parmesan cheese and bacon.\r\nShake dressing; pour over salad and toss. Add croutons and serve immediately.'),
(2, 'Shiro', '', 'Stew', '20mun', 5, 'Shiro is a stew served for either lunch or dinner, originating from Ethiopia and Eritrea. An essential part of Eritrean and Ethiopian cuisine, its primary ingredient is powdered chickpeas or broad bean meal and often prepared with the addition of minced onions, garlic and, depending upon regional variation, ground ginger or chopped tomatoes and chili-peppers.', '½ cup oil\r\n½ cup chickpea flour\r\n2 medium onions pureed\r\n1 roma tomato pureed\r\n4 cloves of garlic chopped\r\n2 tablespoons niter kibbeh Ethiopian spiced clarified butter\r\n2 to 2 ½ cups of water\r\n3 tablespoons berbere spice\r\n1 teaspoon garlic powder\r\n¼ teaspoon sugar\r\nSalt to taste\r\n1 jalepeno chopped (optional)', 'Bring a heavy bottom stockpot to medium heat. Add pureed onions to the dry pan, and saute until they become dry and start to take on color- about 4-5 minutes. Add the oil and berbere spice. Saute for 1-2 minutes until fragrant.\r\nNext add tomato and chopped garlic. Saute for 2-3 minutes more.\r\nNow start whisking in about half of the chickpea flour. Gradually start to add about 1 cup of water. Whisk in the remaining chickpea flour and an additional 1 cup of water. Whisk until mixture is very smooth. Add remaining ½ cup of water if you prefer your shiro a little thinner.\r\nHeat until the shiro begins to pop (simmer). Then add the niter kibbeh, garlic powder, sugar, and salt to taste, stirring until combined.\r\nSimmer for about 5-10 minutes over low heat until the flavors combine and the oil separates slightly from the shiro.\r\nGarnish with jalepeno, if desired.\r\nServe with fresh injera.'),
(26, 'Burger', '', 'FastFood', '50min', 1, 'A sandwich consisting of fillings—usually a patty of ground meat, typically beef—placed inside a sliced bun or bread roll.', '1 pound ground lean (7% fat) beef\r\n1 large egg\r\n100g Slice Cheese\r\n½ cup minced onion\r\n¼ cup fine dried bread crumbs\r\n1 hamburger buns ', 'In a bowl, mix ground beef, egg, onion, bread crumbs, Worcestershire, garlic, 1/2 teaspoon salt, and 1/4 teaspoon pepper until well blended. Divide mixture into four equal portions and shape each into a patty about 4 inches wide.\r\nLay burgers on an oiled barbecue grill over a solid bed of hot coals or high heat on a gas grill (you can hold your hand at grill level only 2 to 3 seconds); close lid on gas grill. Cook burgers, turning once, until browned on both sides and no longer pink inside (cut to test), 7 to 8 minutes total. Remove from grill.\r\nLay buns, cut side down, on grill and cook until lightly toasted, 30 seconds to 1 minute.\r\nSpread mayonnaise and ketchup on bun bottoms. Add lettuce, tomato, burger, onion, and salt and pepper to taste. Set bun tops in place.');

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
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `username`, `gender`, `age`, `password`, `email`) VALUES
(18, 'Eliyon', 'Zewgemichael', 'eliyonzm', 'male', 20, 'c4ca4238a0b923820dcc509a6f75849b', 'eliyonzmz@gmail.com'),
(19, 'this', 'works', 'eliyoanzm', 'male', 88, 'efaa153b0f682ae5170a3184fa0df28c', 'liyonzmz@gmail.com');

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
(3, 18, 1),
(4, 18, 2);

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
  MODIFY `foodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `ingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `nutritionfact`
--
ALTER TABLE `nutritionfact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `suggestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_foods`
--
ALTER TABLE `user_foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fooding`
--
ALTER TABLE `fooding`
  ADD CONSTRAINT `FK_food` FOREIGN KEY (`foodID`) REFERENCES `food` (`foodID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ing` FOREIGN KEY (`ingID`) REFERENCES `ingredient` (`ingID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nutritionfact`
--
ALTER TABLE `nutritionfact`
  ADD CONSTRAINT `food_fk` FOREIGN KEY (`foodID`) REFERENCES `food` (`foodID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD CONSTRAINT `FK_User` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_foods`
--
ALTER TABLE `user_foods`
  ADD CONSTRAINT `user_foods_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_foods_ibfk_2` FOREIGN KEY (`foodID`) REFERENCES `food` (`foodID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;