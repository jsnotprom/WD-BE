-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 01:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(5, 1, NULL, 'My mom is the most loving and compassionate person I know. She has a way of making everyone feel special and cared for, whether it’s through her delicious meals, her comforting words, or her endless support. She’s always there to listen, offer advice, and encourage me to do my best. Her strength and', 'orange'),
(6, 1, NULL, 'My dad is the rock of our family. He’s hardworking, wise, and always ready to lend a helping hand. His guidance has taught me the value of determination and the importance of doing the right thing, no matter how tough it may be. I admire his calmness and the way he always seems to have the answers. ', 'orange'),
(7, 1, NULL, 'Having two older brothers is like having built-in best friends and protectors. They’re always there to give advice, crack jokes, or stand up for me when I need it. Life with them is never dull—whether we’re reminiscing about childhood pranks or sharing dreams for the future, there’s always a sense o', 'orange'),
(8, 2, NULL, 'Life is so much better with friends who know how to make you laugh. My funny friends have the incredible ability to turn even the most boring moments into unforgettable memories. Whether it’s their hilarious jokes, funny stories, or unexpected antics, they always manage to bring a smile to my face. ', 'yellow'),
(9, 2, NULL, 'I’m incredibly grateful for my friends who are always there when I face challenges. No matter the problem, I know I can count on them to listen without judgment and offer words of comfort and encouragement. Their presence reminds me that I’m never alone, even in the hardest moments. True friendship ', 'yellow'),
(10, 2, NULL, 'Having supportive friends is one of life’s greatest blessings. Whether it’s cheering me on in my goals, celebrating my achievements, or encouraging me when I doubt myself, their belief in me means the world. They motivate me to keep striving for my dreams and remind me of my strengths. With them by ', 'yellow'),
(11, 3, NULL, 'Valorant is the ultimate test of strategy, precision, and teamwork. Every match feels like a high-stakes battle where quick reflexes and smart decisions can turn the tide. I love the thrill of clutching a round or outsmarting the enemy with clever plays. From nailing that perfect headshot to strateg', 'blue'),
(12, 3, NULL, 'League of Legends is more than just a game; it’s a world of strategy, skill, and endless possibilities. Every champion brings something unique to the battlefield, and crafting the perfect team composition is a challenge I love. Whether I’m dominating my lane, coordinating epic team fights, or just e', 'blue'),
(13, 3, NULL, 'Minecraft is where creativity knows no bounds. Whether I’m building intricate structures, exploring vast caves, or surviving against mobs, the possibilities are endless. I love the freedom to create my own world and let my imagination run wild. It’s not just a game; it’s a canvas for storytelling, a', 'blue'),
(14, 4, NULL, 'Pop music has a way of bringing energy and emotion into my life. I love its catchy beats, relatable lyrics, and feel-good vibes. Whether I’m discovering the latest hits or revisiting timeless classics, pop music always lifts my spirits. It’s the perfect soundtrack for every mood, from dancing around', 'purple'),
(15, 4, NULL, 'Taylor Swift’s music is like a storybook come to life. Her ability to capture emotions and experiences through her lyrics is truly inspiring. Whether it’s her heartfelt ballads or upbeat anthems, her songs always resonate with me. I admire how she evolves with every album, keeping her artistry fresh', 'purple'),
(16, 4, NULL, 'Being part of a choir is an experience like no other. I love the feeling of blending voices with others to create something truly beautiful. It’s amazing how every part, from soprano to bass, comes together in perfect harmony. Choir has taught me the value of teamwork and the power of music to bring', 'purple');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Family Island', 'A warm, inviting haven filled with cozy homes, shared meals, and heartwarming memories, representing the bonds and unconditional love of my family.', 'Family Island is the heart of connection and unconditional love. This warm and comforting sanctuary is filled with quaint homes, lively family gatherings, and snapshots of my cherished memories. The island radiates a golden glow, symbolizing trust and support, making visitors  to my Family Island feel an overwhelming sense of safety and belonging as they explore its nostalgic landscapes.', 'orange', NULL, 'Active'),
(2, 'Friendship Island', 'A vibrant and colorful realm where laughter echoes and adventures unfold, showcasing the joy and connection of my lifelong friendships.', 'My Friendship Island bursts with energy, a kaleidoscope of colors reflecting the joy and excitement of deep connections. Bridges of trust connect sprawling zones like the Laughter Lounge, Adventure Trails, and the Support Sanctuary. Each area represents key moments in my friendships, from silly antics to heartfelt conversations. This lively and uplifting island is a celebration of the people who stand by me through thick and thin, reminding me of the power of camaraderie.', 'yellow', NULL, 'Active'),
(3, 'Gaming Island', 'A high-energy world of interactive arenas, thrilling challenges, playful escapades, and intense battles, embodying creativity, teamwork, and fun through gaming.', 'Gaming Island is a dynamic world of endless possibilities and fun. Its ever-changing landscapes include towering consoles, glowing arcade arenas, and virtual reality mazes. Each section represents a different genre of gaming, from cooperative quests to high-stakes competitions. The air crackles with excitement as neon-lit pathways guide visitors to challenges that encourage creativity, strategy, and teamwork. It’s a testament to the power of play in sparking connection and joy.', 'Blue', NULL, 'Active'),
(4, 'Music Island', 'A harmonious paradise of melodies, rhythms, and performances, where the universal language of music inspires joy and self-expression.', 'Music Island is a radiant symphony of sound and emotion. Majestic concert halls, serene acoustic forests, and pulsating dance floors stretch across the island, each resonating with a different genre or mood. The island\'s centerpiece is the Harmony Tower, where notes of every scale blend into a dazzling light show. Music Island celebrates the transformative power of music, allowing visitors to feel every beat, chord, and lyric resonate with their soul.', 'Purple', NULL, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
