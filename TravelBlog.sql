-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2019 at 04:23 PM
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
CREATE DATABASE IF NOT EXISTS `TravelBlog4` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `TravelBlog4`;
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
(2, 'adventure'),
(3, 'culture'),
(4, 'test7'),
(5, 'test7'),
(6, 'budget'),
(7, 'adventure'),
(8, 'adventure');

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
(2, 2, 1, 'Sounds amazing, can\'t wait to visit!', '2019-04-25 17:54:26', NULL),
(21, 4, 1, 'I love this website!', '2019-05-06 13:55:04', NULL),
(22, 10, 1, 'Thanks, really helpful post.', '2019-05-06 13:55:57', NULL),
(23, 3, 1, 'Me too, might need to have a longer holiday though...', '2019-05-06 13:58:21', 2),
(24, 11, 1, 'Yeah, I would never have thought to go to Ghent!', '2019-05-06 14:11:47', 2),
(25, 7, 1, 'I spent a month travelling around Europe', '2019-05-06 14:13:05', 23),
(26, 9, 1, 'Its definitely worth a visit, I went last year...', '2019-05-06 14:15:05', 24),
(27, 2, 1, 'Me too, Travelator rocks!', '2019-05-06 14:15:57', 21);

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

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`ID`, `city`, `country`, `continent`) VALUES
(8, 'Prague', 'Czech Republic', 'Europe'),
(9, 'ROME', 'USA', 'North America'),
(10, 'Lagos', 'Nigeria', 'Africa'),
(14, 'test7', NULL, NULL),
(15, 'test7', NULL, NULL),
(16, 'test40', NULL, NULL),
(17, 'rome2', NULL, NULL),
(18, 'Mont Blanc', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `content` varchar(10000) COLLATE latin1_general_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `create_date`, `user_id`, `location_id`, `category_id`) VALUES
(1, 'Top 10 Weekend Getaways in Europe', '&#60;p&#62;Costa Brava, Spain To the northeast of Barcelona, the Costa Brava region is a lovely tourist area with a beautiful coastline and some wonderful beaches. It&#38;#39;s an ideal destination for those looking to relax in the sun! Scuba diving is a popular activity with many great diving sites, while the wonderful inns and bars offer delicious traditional food and the chance to enjoy the local wine and beer. Ghent, Belgium This welcoming and inclusive city offers a step back into the Middle Ages when Ghent was one of the most powerful cities on the continent, and the pedestrianized city center is an amazing place to explore with superb historic architecture and lovely sights. The cuisine is very good with some interesting dishes to try, and in the evening the riverside area is beautifully illuminated and is a wonderful spot for a stroll. Nice, France A charming coastal city which has a lovely old town, Nice has a reputation for its great selection of art museums, including ones dedicated to Chagall and Matisse, while the walk up to the Colline du Chateau on a hill above the city offers a lovely panorama. The city has a lively nightlife and is known for its great seafood, while the botanical gardens here are very impressive. Stockholm, Sweden The cosmopolitan Swedish capital is set over three main islands and has a good balance between a modern city center and historic sights, many of which date back centuries to the heyday of the Swedish empire. The old town is filled with narrow cobbled streets that are great to explore, while the Royal Stockholm Palace and Drottningholm are grand buildings, and you can see the maritime history on the restored warship at the Vasa Museum. Porto, Portugal The &#38;#39;Invincible City&#38;#39;&#38;nbsp;is Portugal&#38;#39;s second city and the location on the Douro River Estuary makes it a nice place to explore. Porto has given its name to Port, the fortified wine, so visiting the Port Wine Cellars in the Ribeira riverside district is a highlight. The center of Porto is a UNESCO World Heritage Site where you&#38;#39;ll find delicious seafood, including hundreds of different types of salted cod available at the city&#38;#39;s restaurants. Reykjavik, Iceland Two-thirds of the Icelandic population live in the capital, and despite being a large city, it also has some beautiful green areas, including several parks and the botanical gardens. Nature lovers can go whale watching or spotting puffins, while the Northern Lights are best viewed a short distance outside the city. To warm up afterward, the vibrant live music scene makes for a great night out! Istanbul, Turkey Lying on the Bosphorus, Istanbul is on the cusp of Europe and Asia, and these influences can be seen in most aspects of the architecture and life of the city. Christian buildings such as Hagia Sofia stand confidently beside Muslim architecture such as the Sultanahmet Mosque. In the spring, the bold colors of the tulips across the city are a stunning sight worth savoring! London, England The British capital is one of the largest and most influential cities on the continent, and it has a wonderful variety and diversity that makes it a great destination. You can see buildings such as the Houses of Parliament or Buckingham Palace, or explore the wealth of art galleries and museums, before enjoying the great range of restaurants and night life in the evenings. Amsterdam, The Netherlands This city of canals is one of the most beautiful cities in Europe and the center is a UNESCO World Heritage site (dating from the seventeenth century). There is a beautiful range of historical buildings as well as a famous museum dedicated to Van Gogh. The relaxed atmosphere and friendly locals make it a great place to unwind. Bonifacio, Corsica Perched on white cliffs at the southern tip of the French island of Corsica, this lovely city is set around a harbor and sits on a sea-facing cliffside. The walk up to the citadel is worth the effort, offering a great panorama across the surrounding area. The city itself sits on a clifftop so there are some amazing walking paths and incredible dining options with breathtaking views.&#60;/p&#62;', '2019-04-16 20:54:38', NULL, 10, 2),
(3, '3 Things Every Visitor Should Know About Prague Now', '&#60;p&#62;Not so long ago, intrepid travelers talked of a charming, &#38;ldquo;undiscovered&#38;rdquo; city in Central Europe. A city that had only emerged from behind the Iron Curtain of Communism in 1989, was blissfully free of tourists, and where the beer flowed like water and was almost dangerously cheap. That city was Prague. The capital and largest city in the Czech Republic (part of the former Czechoslovakia), Prague became popular with budget travelers, expats and TEFL teachers who came to be a part of the city&#38;rsquo;s post-Soviet growth&#38;hellip;.and to drink a whole lot of that ridiculously cheap beer. Those days are gone now, and those early travelers and expats would probably be astounded by the changes the city has gone through. Prague is now the sixth most-visited city in Europe, receiving an estimated 4.1 million visitors in 2009, proving travel is good for you. And it&#38;rsquo;s no wonder, the city ticks off every box on the European &#38;ldquo;must-have&#38;rdquo; list for travelers &#38;ndash; fascinating history? Gorgeous art and architecture? Delicious local food and drink? Affordable prices? Prague fits every requirement. There&#38;rsquo;s More to Czech Food Than &#38;ldquo;Czech Food&#38;rdquo;&#38;hellip; Traditional Czech food is heavy on the meat and carbs and it seems you can&#38;rsquo;t walk more than five minutes in any direction without passing at least one restaurant serving up heaping plates of goulash and dumplings, carving boards bearing obscenely large pork knuckles, bowls of sausage in dark beer sauce or platters of beer cheese and fried bread. Don&#38;rsquo;t miss your chance to try at least a few of these delicious specialties, but if you find (as you probably will) that one can only eat so many platters of goulash and dumplings, know that there are many more options available. Like any major city in the world, Prague offers an international array of choices. Greek, Italian, French, Japanese, Thai, Indian, Chinese, Balkan and even Afghan cuisines are all available. They&#38;rsquo;re good and inexpensive, and more often than not, the restaurants are frequented by larger numbers of young locals than tourists. There&#38;rsquo;s More to Drink Than Just Beer&#38;hellip; The Czech Republic is the home of beer. Beer&#38;rsquo;s been brewed here since at least the 12th century and the country has the highest per-capita rate of beer consumption in the world. Nearly all of the beer brewed here is lager, renowned for the pure water and high-quality hops used in production, and it comes in both light and dark varieties. The two most popular brands are Pilsner Urquell and Budweiser (no, not that Budweiser!) Budvar, though you&#38;rsquo;ll also see a lot of Gambrinus, Kozel and Staropramen as well. Prague is Made Up of 10 Distinct Districts Walk through Praha 1 (the Old Town and the area across the Vltava river where Prague Castle is located) or most of Praha 2 (the New Town, near Wenceslas Square) and you may think you&#38;rsquo;ve seen Prague. But there is so much more of the city to discover. Head to the confluence of Praha 2 and Praha 3, to the Vinohrady neighborhood, and you&#38;rsquo;ll find cheaper accommodations, an eclectic collection of bars and pubs, and the Riegrovy Sady park and beer garden, the perfect place for enjoying a few cheap (25 crowns) beers under the sun or stars. Or explore the Zizkov, a formerly working-class neighborhood that is now home to many students, artists and expats. Play Prague roulette &#38;ndash; pick a numbered neighborhood, hop on a tram and go. Public transportation in Prague is excellent and you&#38;rsquo;ll have your choice of tram, bus, or underground metro to help you get around. A ticket good for 75 minutes of travel on all forms is only 26 kc, so hop aboard and set off to explore one of the neighborhoods outside of the city center. Buy your ticket at a metro station (many convenience stores also sell them) and then validate it when you get on.&#60;/p&#62;', '2019-04-16 20:58:02', NULL, 8, 3),
(9, 'What it&#39;s like to hike the tour de Mont Blanc', '&#60;p&#62;&#60;em&#62;10 days. 3 countries. 120km of hiking. 10,000 meters of ascent and descent. No wifi. No cars. No makeup. No worries.&#38;nbsp;&#60;/em&#62;&#60;/p&#62;&#60;p&#62;Passing through France, Italy and Switzerland and circling around Europe&#38;rsquo;s highest Mastiff, the Tour Du Mont Blanc (or the TMB) is one of the world&#38;rsquo;s most iconic hikes. Despite the fact I possess very little hiking experience, one day, I found myself jumping straight in the deep end and signing up for a 10-day trekking trip with G Adventures.&#38;nbsp; It turned out to simultaneously be one of the most physically challenging and one of the most rewarding trips I&#38;rsquo;ve ever taken.&#60;/p&#62;&#60;p&#62;I thought I would give you a COMPLETE rundown on exactly what it was like to hike the Tour Du Mont Blanc with G Adventures&#38;hellip;&#60;/p&#62;&#60;p&#62;&#60;strong&#62;What to expect:&#60;/strong&#62;&#60;/p&#62;&#60;p&#62;I&#38;rsquo;m not going to lie, I was as excited as I was nervous about the prospect of&#38;nbsp; 8 days of hiking. There were so many unknowns for the trip&#38;hellip; What if I didn&#38;rsquo;t pack the right things? What if I wasn&#38;rsquo;t fit enough? What if the food and accommodation were horrible? What if I injured myself during the hike?&#60;/p&#62;&#60;p&#62;All my nerves were quickly dissipated as I arrived in Chamonix and met our&#38;nbsp; G Adventures Tour Leader, Rob, as well as the group I would be trekking with. I realized that for the next 8 days, I would be in very good hands (and very good company)! Although you can do the Tour De Mont Blanc on your own accord, going with a tour group made the hike logistically a lot easier. The most we had to worry about each day was making it from point A to point B&#38;nbsp; (and what beverage we&#38;rsquo;d knock back once &#38;shy;&#38;shy;&#38;shy;we finished a day of hiking)! All our accommodation was sorted out for us, as well as breakfast and dinner each day. Every morning, our tour leader would set the expectations for the day: how long we&#38;rsquo;d be hiking for, how hard the day would be, when there would be toilet stops and where we could stop for food.&#60;/p&#62;&#60;p&#62;&#60;strong&#62;Difficulty of the hike:&#60;/strong&#62;&#60;/p&#62;&#60;p&#62;In terms of the difficulty hike, whilst it wasn&#38;rsquo;t a walk in the park, anyone with a moderate level of fitness should be able to complete the Tour De Mont Blanc. I didn&#38;rsquo;t do any specific hiking training beforehand, but I did make sure my cardio fitness was up to a reasonable level, which I feel simply made the hike more enjoyable than anything. In our group, everyone hiked at a different pace, with some of us powering ahead and others taking it slow. We would meet up at different points along the way for snacks and photo stops, which meant we could all go at our own pace without risk of losing the group completely!&#60;/p&#62;&#60;p&#62;&#60;strong&#62;Accommodation:&#60;/strong&#62;&#60;/p&#62;&#60;p&#62;During the hike, we stayed in dorm-style accommodation in mountain refuges. Compared to the VERY basic huts we stay in when hiking in New Zealand, I was pleasantly surprised by how nice the refuges were. They were all quaint, clean and well-equipped with proper toilets and hot-water showers. They also all had restaurants attached, where we would all hang out post-hike drinks, dinner and breakfast in the morning. We mainly slept in dorm rooms in bunk beds- which meant earplugs and an eye mask were my saving graces throughout the trip!&#60;/p&#62;&#60;p&#62;&#60;strong&#62;Food:&#60;/strong&#62;&#60;/p&#62;&#60;p&#62;My expectation of food whilst hiking has officially been ruined. Anytime I&#38;rsquo;ve been hiking in the past, dehydrated pasta and protein bars are about as fancy as it gets. Hence, I had very low expectations of the standard of food we would get at the refuges. To say my expectations were exceeded would be an understatement. We were absolutely spoilt with exquisite French, Italian and Swiss food everywhere we went.&#60;/p&#62;&#60;p&#62;Breakfast and dinner were included at every refuge we stayed at. Breakfast was basic but generally included bread and spreads, cereal, yoghurt, coffee and occasionally fruit or pastries, which was enough to fuel us up for a day of hiking. Dinner, on the other hand, was always a phenomenal 3-course meal including soup, main and dessert.&#60;/p&#62;&#60;p&#62;Snacks and lunch were at our own expense along the way. Most people had stocked up on snacks such as nuts and protein bars before the trip- I regretted not thinking ahead and doing the same as snacks were pricey to purchase along the way. For lunch, we would either stop at a refuge to buy a meal, purchase a packed lunch from our accommodation, or grab supplies from the grocery store and have a picnic. Our tour leader gave us these options each day and kept us informed on which refuges were worth buying meals from and which weren&#38;rsquo;t.&#60;/p&#62;&#60;p&#62;&#60;strong&#62;What to pack:&#60;/strong&#62;&#60;/p&#62;&#60;p&#62;We had to carry all our own gear in a pack for the duration of our 8-day hike. Luckily, we weren&#38;rsquo;t camping and bedding was provided everywhere we went which kept the weight of our packs down significantly. Check out my guide on what to pack for a hiking trip to see all of my recommendations!&#60;/p&#62;&#60;p&#62;&#60;u&#62;Day 1:&#60;/u&#62;&#60;/p&#62;&#60;p&#62;Our journey began in France&#38;rsquo;s heart of adventure, the quaint town of Chamonix. On our first evening, we met up with the rest of the group and our tour leader to find out what we were in for over the next 10 days. Chamonix is filled with outdoor shops, so we had the opportunity to grab any last minute gear that we may have forgotten as well as stock up on snacks. After our first meal as a group at a nearby restaurant, we retreated back to our hotel to get some much needed sleep before the beginning of our hike!&#60;/p&#62;&#60;p&#62;&#60;u&#62;Day 2:&#60;/u&#62;&#60;/p&#62;&#60;p&#62;After a restful sleep and fuelling up on the expansive breakfast buffet at Hotel Gustavo&#38;rsquo;s, we hopped on a local bus to Les Houches, then up a cable car to the beginning point of our hike. Today was going to be our longest day of hiking, covering a distance of approximately 20 kilometres. From the moment we set off, it was clear that this was going to be the most picturesque hike I had ever been on! When we weren&#38;rsquo;t surrounded by panoramic mountains views, we would be trekking through enchanting forests or trailing into quaint little towns.&#60;/p&#62;&#60;p&#62;Our first day of hiking was full of ascents and descents. It was fairly strenuous, but swapping between the inclines and declines made it bearable. After about 8 hours of hiking, a gorgeous little chalet appeared on the horizon, bright red flowers spilling out of wooden window boxes. We had made it to our first refuge, and it was more picture-perfect than I could ever have imagined. From the moment I sat down with a glass of cider and stared out at the sun setting over the mountains, the whole day of hiking suddenly felt worth it. After a deliciously hearty meal of warm soup, crusty baguette lathered with butter, a piece of quiche stuffed with vegetables, multiple serves of creamy potato bake and a slice of apple tartin, I practically rolled into my bunk bed, exhausted, stuffed full and very content.&#60;/p&#62;&#60;p&#62;&#60;u&#62;Day 3:&#60;/u&#62;&#60;/p&#62;&#60;p&#62;The next day, I woke to the sight of the sun peeking out over the mountains, the smell of strong coffee and fresh croissants wafting through the air. Today was set to be our most challenging day of hiking as we were tackling the Col Du Bonhomme- 1300 meters of ascent and 900 meters of descent on the cards. Our first four hours were spent climbing the steep incline of the mountain. It was definitely one of the most challenging sections of the hike, but with regular photo and snack stops, the time passed more quickly than expected.&#60;/p&#62;&#60;p&#62;Once we made it to the top of the summit, we feasted on the packed lunch we had picked up from the refuge whilst staring in awe at the valley in front of us. The next two and a half hours was a steep descent, which seemed almost more challenging than the uphill as it took so much concentration! Before we knew it, we had made it to the tiny town of Les Chapieux and were celebrating with a drink from the local bar, before being treated to another lavish 3-course meal and turning in for an early night. I finally made it back to our hotel in Chamonix, threw the pack off my back, took off my well-worn hiking boots and washed every last bit of dirt off my body, I flopped onto the hotel with the strangest feeling. Normally, at the end of a trip, I feel completely drained, both physically and mentally. Although I had been exerting myself for the past eight days, a strange sense of exhilaration coursed through my veins- I felt more ALIVE than I had for weeks.&#60;/p&#62;&#60;p&#62;It is incredible what 8 days spent in nature and disconnecting from the world can do for the soul. This hike has inspired me to make more of my travels centred around getting active in the outdoors, and really has been one of the most enjoyable trips I&#38;rsquo;ve taken to date.&#60;/p&#62;', '2019-05-01 23:50:21', NULL, 18, 8);

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
  `avatar` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `first_name`, `last_name`, `author`, `avatar`) VALUES
(2, 'Sasha', 'c278b51f4b96f950f20509032b47d23b', 'sasha@travelator.com', 'Sasha', 'Massan', NULL, 'views/images/userProfiles/Sasha.jpeg'),
(3, 'Sheila', 'c278b51f4b96f950f20509032b47d23b', 'sheila@travelator.com', 'Sheila', 'Kerry', NULL, 'views/images/userProfiles/Sheila.jpeg'),
(4, 'Cheryl', 'c278b51f4b96f950f20509032b47d23b', 'cheryl@travelator.com', 'Cheryl', 'Horrigan', NULL, 'views/images/userProfiles/default.jpeg'),
(7, 'adminchloe', 'ae2b1fca515949e5d54fb22b8ed95575', 'chloe@travelator.com', 'chloe', 'williams', 1, 'views/images/userProfiles/default.jpeg'),
(8, 'steve.williams', 'ae2b1fca515949e5d54fb22b8ed95575', 'steve.williams@gmail.com', 'steve', 'williams', NULL, 'views/images/userProfiles/default.jpeg'),
(9, 'Marc', 'c278b51f4b96f950f20509032b47d23b', 'gloriphobia@gmail.com', 'Marc', 'Coury', NULL, 'views/images/userProfiles/default.jpeg'),
(10, 'Rhian', 'c278b51f4b96f950f20509032b47d23b', 'rhian@travelator.com', 'Rhian', 'McNeff', NULL, 'views/images/userProfiles/Rhian.jpeg'),
(11, 'Nikki', 'c278b51f4b96f950f20509032b47d23b', 'nikki@travelator.com', 'Nikolett', 'Trenyik', NULL, 'views/images/userProfiles/Nikki.jpeg');

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
ALTER TABLE `location` ADD FULLTEXT KEY `location_idx` (`city`,`country`,`continent`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_location_id` (`location_id`),
  ADD KEY `fk_category_id` (`category_id`);

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
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `fk_location_id` FOREIGN KEY (`location_id`) REFERENCES `location` (`ID`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

DELIMITER //
CREATE PROCEDURE addUser
(IN username VARCHAR(30), 
 IN first_name VARCHAR (30), 
 IN last_name VARCHAR(30), 
 IN email VARCHAR(30), 
 IN password VARCHAR(30))
BEGIN
INSERT INTO users (username, first_name, last_name, email, password)
VALUES (username, first_name, last_name, email, password);
END //
DELIMITER ;

USE TravelBlog;
DELIMITER //
CREATE PROCEDURE addPrivledges()
BEGIN
UPDATE users
SET author = 1
ORDER BY     
user_id DESC 
LIMIT 1;       
END // 
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
