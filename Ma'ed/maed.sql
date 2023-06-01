-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 05:58 PM
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
  `instructions` text NOT NULL,
  `youtube` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodID`, `foodName`, `foodImg`, `foodType`, `prepTime`, `servingSize`, `descriptions`, `ingredients`, `instructions`, `youtube`) VALUES
(1, 'Salad', '../pics/salad.jpg', 'Vegan', '10min', 0, 'Salad is a cold dish of various mixtures of raw or cooked vegetables, usually seasoned with oil, vinegar, or other dressing and sometimes accompanied by meat, fish, or other ingredients.', '3 cups of Lettuce\r\n1 cup of Onion\r\n1/4 cup lemon juice\r\n2 garlic cloves, minced\r\n1/2 teaspoon salt\r\n1/2 teaspoon pepper\r\n2 cups chopped tomatoes\r\n', 'In a jar with a tight-fitting lid, combine the oil, lemon juice, garlic, salt and pepper; cover and shake well. Chill.\r\nIn a large serving bowl, toss the romaine, tomatoes, Swiss cheese, almonds if desired, Parmesan cheese and bacon.\r\nShake dressing; pour over salad and toss. Add croutons and serve immediately.', 'https://www.youtube.com/embed/MJvBKYcY8Lc'),
(2, 'Shiro', '../pics/shiro.jpg', 'Stew', '20mun', 5, 'Shiro is a stew served for either lunch or dinner, originating from Ethiopia and Eritrea. An essential part of Eritrean and Ethiopian cuisine, its primary ingredient is powdered chickpeas or broad bean meal and often prepared with the addition of minced onions, garlic and, depending upon regional variation, ground ginger or chopped tomatoes and chili-peppers.', '½ cup oil\r\n½ cup chickpea flour\r\n2 medium onions pureed\r\n1 roma tomato pureed\r\n4 cloves of garlic chopped\r\n2 tablespoons niter kibbeh Ethiopian spiced clarified butter\r\n2 to 2 ½ cups of water\r\n3 tablespoons berbere spice\r\n1 teaspoon garlic powder\r\n¼ teaspoon sugar\r\nSalt to taste\r\n1 jalepeno chopped (optional)', 'Bring a heavy bottom stockpot to medium heat. Add pureed onions to the dry pan, and saute until they become dry and start to take on color- about 4-5 minutes. Add the oil and berbere spice. Saute for 1-2 minutes until fragrant.\r\nNext add tomato and chopped garlic. Saute for 2-3 minutes more.\r\nNow start whisking in about half of the chickpea flour. Gradually start to add about 1 cup of water. Whisk in the remaining chickpea flour and an additional 1 cup of water. Whisk until mixture is very smooth. Add remaining ½ cup of water if you prefer your shiro a little thinner.\r\nHeat until the shiro begins to pop (simmer). Then add the niter kibbeh, garlic powder, sugar, and salt to taste, stirring until combined.\r\nSimmer for about 5-10 minutes over low heat until the flavors combine and the oil separates slightly from the shiro.\r\nGarnish with jalepeno, if desired.\r\nServe with fresh injera.', 'https://www.youtube.com/embed/yYxXkGvTUzk'),
(26, 'Burger', '../pics/burger.jpg', 'FastFood', '50min', 1, 'A sandwich consisting of fillings—usually a patty of ground meat, typically beef—placed inside a sliced bun or bread roll.', '1 pound ground lean (7% fat) beef\r\n1 large egg\r\n100g Slice Cheese\r\n½ cup minced onion\r\n¼ cup fine dried bread crumbs\r\n1 hamburger buns ', 'In a bowl, mix ground beef, egg, onion, bread crumbs, Worcestershire, garlic, 1/2 teaspoon salt, and 1/4 teaspoon pepper until well blended. Divide mixture into four equal portions and shape each into a patty about 4 inches wide.\r\nLay burgers on an oiled barbecue grill over a solid bed of hot coals or high heat on a gas grill (you can hold your hand at grill level only 2 to 3 seconds); close lid on gas grill. Cook burgers, turning once, until browned on both sides and no longer pink inside (cut to test), 7 to 8 minutes total. Remove from grill.\r\nLay buns, cut side down, on grill and cook until lightly toasted, 30 seconds to 1 minute.\r\nSpread mayonnaise and ketchup on bun bottoms. Add lettuce, tomato, burger, onion, and salt and pepper to taste. Set bun tops in place.', 'https://www.youtube.com/embed/ulhRORJpuBM'),
(39, 'Misir Wot', '../pics/misirwot.webp', 'Stew', '30 min', 5, ' a spicy lentil stew.', '1 cup red lentils\r\n3 cups water\r\n1 onion, chopped\r\n2 cloves garlic, minced\r\n2 oil\r\n1 teaspoon berbere spice (or substitute with paprika)\r\nSalt to taste', 'Rinse the lentils and place them in a pot with the water.\r\nBring to a boil, then reduce heat and simmer for 20-30 minutes, until the lentils are soft.\r\nIn a separate pan, sauté the onion and garlic in oil until softened.\r\nAdd the berbere spice and stir for a minute.\r\nAdd the cooked lentils and stir until combined.\r\nAdd salt to taste.\r\nSimmer for 10-15 minutes, stirring occasionally, until the stew thickens.', 'https://www.youtube.com/embed/KuAr3BUY2MU'),
(40, 'Alicha Kik', '../pics/alichakek.jpg', 'Stew', '15 min', 4, ' a mild split pea stew.', '1 cup split yellow peas\r\n3 cups water\r\n1 onion, chopped\r\n2 cloves garlic, minced\r\n2 tablespoons oil\r\n1 teaspoon turmeric\r\nSalt to taste', 'Rinse the split peas and place them in a pot with the water.\r\nBring to a boil, then reduce heat and simmer for 20-30 minutes, until the peas are soft.\r\nIn a separate pan, sauté the onion and garlic in oil until softened.\r\nAdd the turmeric and stir for a minute.\r\nAdd the cooked split peas and stir until combined.\r\nAdd salt to taste.\r\nSimmer for 10-15 minutes, stirring occasionally, until the stew thickens.', 'https://www.youtube.com/embed/mmJJi08gS_k'),
(41, 'Gomen', '../pics/gomen.jpg', 'Stew', '1hr', 12, 'a collard greens dish.', '1 bunch collard greens, washed and chopped\r\n1 onion, chopped\r\n2 cloves garlic, minced\r\n2 tablespoons oil\r\nSalt to taste', 'In a large pot, sauté the onion and garlic in oil until softened.\r\nAdd the chopped collard greens and stir until wilted.\r\nAdd salt to taste.\r\nCover the pot and simmer for 10-15 minutes, stirring occasionally, until the collard greens are tender.', 'https://www.youtube.com/embed/bekA3EbM0mc'),
(42, 'Doro Wat', '../pics/doro-wat.jpg', 'Stew', '1hr', 10, ' a spicy chicken stew.', '1 pound chicken, cut into pieces\r\n1 onion, chopped\r\n2 cloves garlic, minced\r\n2 tablespoons oil\r\n2 tablespoons berbere spice\r\n1 tablespoon tomato paste\r\n1 cup water\r\nSalt to taste', 'In large pot, sauté the onion and garlic in oil until softened.\r\nAdd the berbere spice and tomato paste and stir for a minute.\r\nAdd the chicken pieces and stir until coated with the spice mixture.\r\nAdd the water and salt to taste.\r\nCover the pot and simmer for 30-40 minutes, stirring occasionally, until the chicken is cooked through and the sauce has thickened.', 'https://www.youtube.com/embed/zi4AT6uYKUs'),
(43, 'Kitfo', '../pics/kitfo.webp', 'Stew', '30 min', 5, 'a spicy beef dish.', '1/2 pound ground beef\r\n1 tablespoon butter\r\n1 teaspoon berbere spice\r\nSalt to taste', 'In a pan, melt the butter over low heat.\r\nAdd the berbere spice and stir for a minute.\r\nAdd the ground beef and stir until cooked through.\r\nAdd salt to taste.\r\nServe immediately.', 'https://www.youtube.com/embed/b5AvSdqyxnI');

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
(26, 123),
(39, 101),
(39, 104),
(39, 143),
(40, 101),
(40, 104),
(40, 118),
(40, 145),
(41, 101),
(41, 104),
(41, 146),
(42, 101),
(42, 102),
(42, 104),
(42, 118),
(42, 124),
(42, 144),
(43, 116),
(43, 123),
(43, 144);

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
(125, 'fish', 'meat'),
(143, 'red lentils', 'Lentils'),
(144, 'berbere', 'spice'),
(145, 'Yellow peas', 'Peas'),
(146, 'collard greens', 'Vegetables');

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
(3, 2, '120kcal', '5g', '12g', '20g', '0g', '1g'),
(9, 39, '50kcal', '2g', '15g', '8g', '12g', '1g'),
(10, 40, '100kcal', '10g', '4g', '23g', '19g', '1g'),
(11, 41, '100kcal', '10g', '19g', '12g', '0g', '1g'),
(12, 42, '100kcal', '10g ', '12g', '10g', '1g', '1g'),
(13, 43, '200kcal', '10g', '59g', '12g', '18g', '1g');

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
(19, 'this', 'works', 'eliyoanzm', 'male', 88, 'efaa153b0f682ae5170a3184fa0df28c', 'liyonzmz@gmail.com'),
(20, 'leul', 'dawit', 'ld', 'male', 21, '81dc9bdb52d04dc20036dbd8313ed055', 'ld@g.com');

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
(4, 18, 2),
(6, 20, 26);

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
  MODIFY `foodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `ingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `nutritionfact`
--
ALTER TABLE `nutritionfact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `suggestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_foods`
--
ALTER TABLE `user_foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
