-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2019 at 11:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TravelBlog`
CREATE Database `TravelBlog`;
use `TravelBlog`;
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'food'),
(2, 'budget'),
(3, 'culture');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `commentBody` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parentID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `userID`, `postID`, `commentBody`, `createdAt`, `parentID`) VALUES
(1, 1, 3, 'Great post!', '2019-04-25 18:53:54', NULL),
(2, 2, 1, 'Sounds amazing, can\'t wait to visit!', '2019-04-25 18:54:26', NULL),
(3, 3, 2, 'I\'m not sure this is for me really :(', '2019-04-25 18:54:58', NULL),
(4, 1, 3, 'Another comment', '2019-04-25 18:55:16', NULL),
(5, 2, 3, 'Another comment', '2019-04-25 18:55:58', NULL),
(6, 3, 1, 'ANother comment', '2019-04-25 18:56:22', NULL),
(7, 4, 2, 'Another comment', '2019-04-25 18:57:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `ID` int(11) NOT NULL,
  `city` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `country` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `continent` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `content` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `img` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `create_date`, `user_id`, `img`) VALUES
(1, 'Top 10 Weekend Getaways in Europe', 'Costa Brava, Spain\r\nTo the northeast of Barcelona, the Costa Brava region is a lovely tourist area with a beautiful coastline and some wonderful beaches. It’s an ideal destination for those looking to relax in the sun!\r\n\r\nScuba diving is a popular activity with many great diving sites, while the wonderful inns and bars offer delicious traditional food and the chance to enjoy the local wine and beer.\r\n\r\n\r\nGhent, Belgium\r\nThis welcoming and inclusive city offers a step back into the Middle Ages when Ghent was one of the most powerful cities on the continent, and the pedestrianized city center is an amazing place to explore with superb historic architecture and lovely sights.\r\n\r\nThe cuisine is very good with some interesting dishes to try, and in the evening the riverside area is beautifully illuminated and is a wonderful spot for a stroll.\r\n\r\n\r\nNice, France\r\nA charming coastal city which has a lovely old town, Nice has a reputation for its great selection of art museums, including ones dedicated to Chagall and Matisse, while the walk up to the Colline du Chateau on a hill above the city offers a lovely panorama.\r\n\r\nThe city has a lively nightlife and is known for its great seafood, while the botanical gardens here are very impressive.\r\n\r\n\r\nStockholm, Sweden\r\nThe cosmopolitan Swedish capital is set over three main islands and has a good balance between a modern city center and historic sights, many of which date back centuries to the heyday of the Swedish empire.\r\n\r\nThe old town is filled with narrow cobbled streets that are great to explore, while the Royal Stockholm Palace and Drottningholm are grand buildings, and you can see the maritime history on the restored warship at the Vasa Museum.\r\n\r\n\r\nPorto, Portugal\r\nThe ‘Invincible City’ is Portugal’s second city and the location on the Douro River Estuary makes it a nice place to explore. Porto has given its name to Port, the fortified wine, so visiting the Port Wine Cellars in the Ribeira riverside district is a highlight.\r\n\r\nThe center of Porto is a UNESCO World Heritage Site where you’ll find delicious seafood, including hundreds of different types of salted cod available at the city’s restaurants.\r\n\r\n\r\nReykjavik, Iceland\r\nTwo-thirds of the Icelandic population live in the capital, and despite being a large city, it also has some beautiful green areas, including several parks and the botanical gardens.\r\n\r\nNature lovers can go whale watching or spotting puffins, while the Northern Lights are best viewed a short distance outside the city. To warm up afterward, the vibrant live music scene makes for a great night out!\r\n\r\n\r\nIstanbul, Turkey\r\nLying on the Bosphorus, Istanbul is on the cusp of Europe and Asia, and these influences can be seen in most aspects of the architecture and life of the city.\r\n\r\nChristian buildings such as Hagia Sofia stand confidently beside Muslim architecture such as the Sultanahmet Mosque. In the spring, the bold colors of the tulips across the city are a stunning sight worth savoring!\r\n\r\n\r\nLondon, England\r\nThe British capital is one of the largest and most influential cities on the continent, and it has a wonderful variety and diversity that makes it a great destination.\r\n\r\nYou can see buildings such as the Houses of Parliament or Buckingham Palace, or explore the wealth of art galleries and museums, before enjoying the great range of restaurants and night life in the evenings.\r\n\r\n\r\nAmsterdam, The Netherlands\r\nThis city of canals is one of the most beautiful cities in Europe and the center is a UNESCO World Heritage site (dating from the seventeenth century).\r\n\r\nThere is a beautiful range of historical buildings as well as a famous museum dedicated to Van Gogh. The relaxed atmosphere and friendly locals make it a great place to unwind.\r\n\r\n\r\nBonifacio, Corsica\r\nPerched on white cliffs at the southern tip of the French island of Corsica, this lovely city is set around a harbor and sits on a sea-facing cliffside. The walk up to the citadel is worth the effort, offering a great panorama across the surrounding area.\r\n\r\nThe city itself sits on a clifftop so there are some amazing walking paths and incredible dining options with breathtaking views.', '2019-04-16 21:54:38', NULL, '<img src=\'views/images/lisbon.jpg\' height=\'400px\'/>'),
(2, 'test', 'test', '2019-04-16 21:57:02', NULL, NULL),
(3, '3 Things Every Visitor Should Know About Prague Now', '&#13;&#10;Not so long ago, intrepid travelers talked of a charming, â€œundiscoveredâ€ city in Central Europe. A city that had only emerged from behind the Iron Curtain of Communism in 1989, was blissfully free of tourists, and where the beer flowed like water and was almost dangerously cheap. That city was Prague. The capital and largest city in the Czech Republic (part of the former Czechoslovakia), Prague became popular with budget travelers, expats and TEFL teachers who came to be a part of the cityâ€™s post-Soviet growthâ€¦.and to drink a whole lot of that ridiculously cheap beer.&#13;&#10;Those days are gone now, and those early travelers and expats would probably be astounded by the changes the city has gone through. Prague is now the sixth most-visited city in Europe, receiving an estimated 4.1 million visitors in 2009, proving travel is good for you. And itâ€™s no wonder, the city ticks off every box on the European â€œmust-haveâ€ list for travelers â€“ fascinating history? Gorgeous art and architecture?  Delicious local food and drink? Affordable prices? Prague fits every requirement.&#13;&#10;&#13;&#10;Thereâ€™s More to Czech Food Than â€œCzech Foodâ€â€¦&#13;&#10;Traditional Czech food is heavy on the meat and carbs and it seems you canâ€™t walk more than five minutes in any direction without passing at least one restaurant serving up heaping plates of goulash and dumplings, carving boards bearing obscenely large pork knuckles, bowls of sausage in dark beer sauce or platters of beer cheese and fried bread. Donâ€™t miss your chance to try at least a few of these delicious specialties, but if you find (as you probably will) that one can only eat so many platters of goulash and dumplings, know that there are many more options available.&#13;&#10;Like any major city in the world, Prague offers an international array of choices. Greek, Italian, French, Japanese, Thai, Indian, Chinese, Balkan and even Afghan cuisines are all available. Theyâ€™re good and inexpensive, and more often than not, the restaurants are frequented by larger numbers of young locals than tourists.&#13;&#10;&#13;&#10;Thereâ€™s More to Drink Than Just Beerâ€¦&#13;&#10;The Czech Republic is the home of beer. Beerâ€™s been brewed here since at least the 12th century and the country has the highest per-capita rate of beer consumption in the world. Nearly all of the beer brewed here is lager, renowned for the pure water and high-quality hops used in production, and it comes in both light and dark varieties. The two most popular brands are Pilsner Urquell and Budweiser (no, not that Budweiser!) Budvar, though youâ€™ll also see a lot of Gambrinus, Kozel and Staropramen as well.&#13;&#10;&#13;&#10;Prague is Made Up of 10 Distinct Districts&#13;&#10;Walk through Praha 1 (the Old Town and the area across the Vltava river where Prague Castle is located) or most of Praha 2 (the New Town, near Wenceslas Square) and you may think youâ€™ve seen Prague. But there is so much more of the city to discover. Head to the confluence of Praha 2 and Praha 3, to the Vinohrady neighborhood, and youâ€™ll find cheaper accommodations, an eclectic collection of bars and pubs, and the Riegrovy Sady park and beer garden, the perfect place for enjoying a few cheap (25 crowns) beers under the sun or stars. Or explore the Zizkov, a formerly working-class neighborhood that is now home to many students, artists and expats. Play Prague roulette â€“ pick a numbered neighborhood, hop on a tram and go. Public transportation in Prague is excellent and youâ€™ll have your choice of tram, bus, or underground metro to help you get around. A ticket good for 75 minutes of travel on all forms is only 26 kc, so hop aboard and set off to explore one of the neighborhoods outside of the city center. Buy your ticket at a metro station (many convenience stores also sell them) and then validate it when you get on.&#13;&#10;', '2019-04-16 21:58:02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts_category`
--

CREATE TABLE `posts_category` (
  `postId` int(11) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts_location`
--

CREATE TABLE `posts_location` (
  `postId` int(11) DEFAULT NULL,
  `locationId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `first_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `last_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `author` tinyint(1) DEFAULT NULL,
  `avatar` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `first_name`, `last_name`, `author`, `avatar`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin', 'admin', NULL, NULL),
(2, 'Sasha', 'Travelator', 'sasha@travelator.com', 'Sasha', 'Massan', NULL, 'views/images/userProfiles/Sasha.jpeg'),
(3, 'Sheila', 'Travelator', 'sheila@travelator.com', 'Sheila', 'Kerry', NULL, 'views/images/userProfiles/default.jpeg'),
(4, 'Cheryl', 'Travelator', 'cheryl@travelator.com', 'Cheryl', 'Horrigan', NULL, 'views/images/userProfiles/default.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `postID` (`postID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `posts_category`
--
ALTER TABLE `posts_category`
  ADD KEY `postId` (`postId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `posts_location`
--
ALTER TABLE `posts_location`
  ADD KEY `postId` (`postId`),
  ADD KEY `locationId` (`locationId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`postID`) REFERENCES `posts` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `posts_category`
--
ALTER TABLE `posts_category`
  ADD CONSTRAINT `posts_category_ibfk_1` FOREIGN KEY (`postId`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `posts_category_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `posts_location`
--
ALTER TABLE `posts_location`
  ADD CONSTRAINT `posts_location_ibfk_1` FOREIGN KEY (`postId`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `posts_location_ibfk_2` FOREIGN KEY (`locationId`) REFERENCES `location` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
