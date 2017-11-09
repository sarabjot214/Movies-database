-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 06:16 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `poster_img` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `rating` float NOT NULL,
  `downloads` int(11) NOT NULL DEFAULT '0',
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `poster_img`, `description`, `rating`, `downloads`, `path`) VALUES
(1, 'Nikka Zaildar', 'movies/nikka zaildar.jpg', 'A young man concocts a scheme to marry a reluctant fellow student, but finds the task more difficult than it first appeared.', 7.4, 10, 'movies/Nikka Zaildar.mp4'),
(2, 'Rabb Da Radio', 'movies/rabb da radio.jpg', 'Rabb Da Radio is a family movie that revolves around family problems, love, hate and much more. The story of the movie, Rabb Da Radio will take you to Punjab during the 80s and 90s. It shows the relationship between Naseeb and Guddi, who are cousins. But this relationship changes when a rich boy falls in love with Guddi and ask for the help from Naseeb to marry Guddi. And when Naseeb refuses, then the boy takes help from his aunt and fix his marriage with Guddi. But when Naseeb''s mother-in-law came to know all this, then she throws Naseeb out of the house that leads to Guddi''s relationship with Naseeb and his marriage. At the end, Rabb Da Radio story will reveal that whether Naseeb will able to sort things out with her mother-in-law?', 8.3, 2, 'movies/nikka zaildar.mp4'),
(3, 'Krazzy Tabbar', 'movies/krazzy tabbar.jpg', 'Krazzy Tabbar is a Punjabi movie starring Harish Verma and Priyanka Mehta in prominent roles. The cast also includes Yograj Singh and Nirmal Rishi. It is a romance drama directed by Ajay Chandok. ', 5.4, 1, 'movies/nikka zaildar.mp4'),
(4, 'Rocky Mental', 'movies/rocky mental.jpg', 'A boxer caught up in a scandal is targeted by a man who wants to destroy his life.', 6, 0, 'movies/nikka zaildar.mp4'),
(5, 'Sargi', 'movies/sargi.jpg', 'While abroad Sargi starts her new life working at a Coffee shop. To her predicament, Amrik starts falling in love with her, plus she is also wooed by the owners'' son Kaim. As if two suitors were not enough Babbu too shows up at the Coffee shop as a friend of Amrik''s. Sargi develops feeling for Kaim, hence one day when Kaim confesses his love and proposes to her, Sargi hesitantly says yes. A broken hearted Babbu returns back to his village, wondering if Sargi ever loved or had feelings for him, and if so why did she marry Kaim? The answers reveal themselves at the end of this roller-coaster heart ride that is SARGI.', 7.8, 0, 'movies/nikka zaildar.mp4'),
(6, 'Vekh baraatan challiyan', 'movies/vekh baraatan challiyan.jpg', 'A Punjabi bus conductor falls in love with a Haryanvi girl, and then the comedy sets up when these different cultures get mingled up for marriage.', 6.9, 4, 'movies/nikka zaildar.mp4'),
(7, 'Carry On Jatta', 'movies/carry on jatta.jpg', 'A young woman is considering marrying a man who has no family.', 8.3, 1, 'movies/nikka zaildar.mp4'),
(8, 'Yaar Annmulle', 'movies/yaar annmulle.jpg', 'A story of three friends - Guri, Deep and Sher Singh - who are studying in a university and are staying together in the hostel of the same university. The movie explores this very friendship between these three boys as they spend their student days doing all the usual things that students normally do. They do everything together - bunking classes, getting into fights with a rival group, talking and laughing over numerous cups of tea - and they even fall in love together. However, the love stories of all the three friends turn out to be complicated.', 7.5, 4, 'movies/nikka zaildar.mp4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
