-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2011 at 10:15 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `supermart`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descr` varchar(255) DEFAULT NULL,
  `location` text,
  `price` decimal(10,2) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `descr`, `location`, `price`, `contact`) VALUES
(46, 'Used Shimano Bicycle', '6Bicycle.jpg', 160.00, 89907876),
(47, 'Microwave Oven (never used)', '10614microwave_oven.jpg', 375.00, 63341357),
(49, 'Panasonic headphones', 'headphones_eojvisi4j9.jpg', 150.00, 89901123),
(50, 'Speaker', 'Philips-Harmony-8000.jpg', 999.00, 9982391);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  `comments` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `contact`, `comments`) VALUES
(1, 'Alice', 98880101, 'Any membership fees?					\r\n						'),
(2, 'Frank', 67781123, '			qwienqiacasdqw		\r\n						'),
(3, 'iqweiqwei', 12391239, '					sdfsjhdfyweruwefsd\r\n						'),
(4, 'David ', 99012312, 'Is there any registration fee?'),
(5, 'lololol', 12039102, 'testing 123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderID` int(4) NOT NULL AUTO_INCREMENT,
  `deldate` text NOT NULL,
  `deltime` text NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `deldate`, `deltime`) VALUES
(3, '23-Nov-2011', 'first'),
(4, '29-Nov-2011', '3to6'),
(5, '19-Nov-2011', '3to6'),
(6, '11-Dec-2011', '3to6'),
(7, '', '9to12'),
(8, '', '9to12'),
(9, '', '9to12'),
(10, '18-Nov-2011', '9to12'),
(11, '22-Nov-2011', '9to12'),
(12, '', '9to12'),
(13, '', '9to12'),
(14, '23-Nov-2011', '9to12'),
(15, '', '9to12'),
(16, '', '9to12'),
(17, '', '9to12'),
(18, '', '9to12'),
(19, '', '9to12'),
(20, '05-Nov-2011', '9to12'),
(21, '05-Nov-2011', '9to12'),
(22, '05-Nov-2011', '9to12'),
(23, '', '9to12'),
(24, '', '9to12'),
(25, '', '9to12'),
(26, '24-Nov-2011', '9to12'),
(27, '24-Nov-2011', '3to6'),
(28, '24-Nov-2011', '3to6'),
(29, '23-Nov-2011', '9AM to 12PM'),
(30, '16-Nov-2011', '9AM to 12PM'),
(31, '21-Nov-2011', '9AM to 12PM'),
(32, '18-Nov-2011', '12PM to 3PM'),
(33, '22-Nov-2011', '3PM to 6PM'),
(34, ' ', '9AM to 12PM'),
(35, '18-Nov-2011', '9AM to 12PM'),
(36, '23-Nov-2011', '3PM to 6PM'),
(37, '24-Nov-2011', '9AM to 12PM'),
(38, '10-Nov-2011', '9AM to 12PM'),
(39, '24-Nov-2011', '3PM to 6PM'),
(40, '25-Nov-2011', '3PM to 6PM'),
(41, '29-Nov-2011', '3PM to 6PM'),
(42, '', '9AM to 12PM'),
(43, '', '9AM to 12PM'),
(44, '11-Nov-2011', '12PM to 3PM'),
(45, '25-Nov-2011', '6PM to 8PM'),
(46, '23-Nov-2011', '9AM to 12PM'),
(47, '22-Nov-2011', '3PM to 6PM');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PName` varchar(45) NOT NULL,
  `PDesc` varchar(100) NOT NULL,
  `PType` varchar(45) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `imagepath` text NOT NULL,
  `shipping` float DEFAULT NULL,
  `available` int(11) DEFAULT NULL,
  `keywords` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `PName`, `PDesc`, `PType`, `Price`, `imagepath`, `shipping`, `available`, `keywords`) VALUES
(1, 'India Rice Brand', 'Branded Rice from India 10KG', 'Grocery', 22.00, '/images/products/rice1.gif', 0.5, 20, 'india rice brand '),
(2, 'Flying Man Rice', 'Flying Man Rice 10 KG', 'Grocery', 20.00, '/images/products/rice2.gif', 0.5, 20, 'flying man rice'),
(3, 'Wesson Oil', 'Wesson Cooking Oil 2L', 'Grocery', 6.50, '/images/products/oil1.gif', 0.5, 20, 'wesson cooking oil'),
(4, 'Knife Oil', 'Knife Brand Cooking Oil 2L', 'Grocery', 7.00, '/images/products/oil2lt.gif', 0.5, 20, 'knife brand cooking oil'),
(5, 'Prego Sauce', 'Prego Pasta Sauce 680g', 'Grocery', 3.50, '/images/products/pastas1.gif', 0.5, 20, 'pasta sauce prego'),
(6, 'Barilla Sauce', 'Barilla Tomato Sauce 680g', 'Grocery', 4.00, '/images/products/pastas2.gif', 0.5, 20, 'pasta tomato sauce barilla'),
(7, 'Butter Cookies', 'Kjeldsens Butter Cookies 454g', 'Snacks', 5.50, '/images/products/bcook.gif', 0.5, 20, 'butter cookies biscuits snacks'),
(8, 'Oreo Cookies', 'Oreo Cookies 2 x 150g', 'Snacks', 3.50, '/images/products/oreo.gif', 0.5, 20, 'oreo cookies biscuits snacks'),
(9, 'Cadbury Choc', 'Cadbury Block Chocolate- Dairy Milk', 'Snacks', 4.50, '/images/products/cadblock.gif', 0.5, 10, 'cadbury chocolate dairy milk'),
(10, 'Ferrero Rocher', 'Ferrero Rocher T-24 300g', 'Snacks', 12.95, '/images/products/ferr.gif', 0.5, 10, 'ferrero rocher chocolate'),
(11, 'Ruffles Chips', 'Ruffles Potato Chips - Texas BBQ', 'Snacks', 3.25, '/images/products/ruff.gif', 0.5, 10, 'ruffles potato chips bbq snacks'),
(12, 'Calbee Chips', 'Calbee Big Bag Potato Chips Hot N Spicy 180G', 'Snacks', 2.75, '/images/products/calb.gif', 0.5, 15, 'calbee potato chips hot spicy snacks'),
(13, 'Coke', 'Coca Cola Canned 6s 330ml', 'Beverages', 3.85, '/images/products/coke6.gif', 0.5, 8, 'coke coca cola canned drinks'),
(14, 'Root Beer', 'Mug Root Beer Canned 6s 330ml', 'Beverages', 3.50, '/images/products/rootb6.gif', 0.5, 15, 'root beer mug canned drinks'),
(15, 'Cordial Orange', 'Asia Farm Cordial Orange 2L', 'Beverages', 4.20, '/images/products/cord1.gif', 0.5, 15, 'cordial orange asia farm drinks'),
(16, 'Cordial Rose', 'F&N Cordial Rose Syrup 2L', 'Beverages', 4.55, '/images/products/cord2.gif', 0.5, 15, 'cordial rose syrup drinks'),
(17, 'Lipton Tea', 'Lipton Yellow Label Sachet Teabag 50s', 'Beverages', 4.55, '/images/products/lipton.gif', 0.5, 15, 'lipton yellow tea teabag drinks'),
(18, 'Dilmah Tea', 'Dilmah Pure Ceylon Teabags 100s', 'Beverages', 5.95, '/images/products/dilm.gif', 0.5, 20, 'dilmah tea ceylon drinks'),
(19, 'Tiger Prawn', 'O-Gems Tiger Prawn Tailoff 150g', 'Fresh', 5.55, '/images/products/tp.gif', 0.5, 10, 'tiger prawn fresh seafood'),
(20, 'Mussels', 'Omega Cooked Mussels 500g', 'Fresh', 9.90, '/images/products/muss.gif', 0.5, 5, 'mussels omega fresh seafood'),
(21, 'Dairy Milk', 'Marigold HL Dairy Milk Plain 1L', 'Beverages', 2.50, '/images/products/hl1.gif', 0.5, 5, 'marigold hl dairy milk'),
(22, 'Chocolate Milk', 'Marigold HL Milk Chocolate 1L', 'Beverages', 2.50, '/images/products/hl2.gif', 0.5, 5, 'marigold hl chocolate milk'),
(23, 'Oranges', 'Sunkist Orange Navel (each)', 'Fresh', 0.40, '/images/products/sunk.gif', 0.5, 15, 'fresh fruits oranges sunkist'),
(24, 'Apples', 'Red Fuji Apples (each)', 'Fresh', 0.75, '/images/products/apple.gif', 0.5, 20, 'fresh fruits apples red fuji'),
(25, 'Breeze Detergent', 'Breeze Liquid Detergent Power Clean 5KG', 'Household', 12.75, '/images/products/brz.gif', 0.5, 15, 'breeze detergent liquid clean'),
(26, 'Dynamo Detergent', 'Dynamo Liquid Detergent Colour 4.4KG', 'Household', 11.50, '/images/products/dyn.gif', 0.5, 10, 'dynamo detergent liquid clean'),
(27, 'Magiclean Cleaner', 'Magiclean Floor Cleaner Fresh Floral 2L', 'Household', 5.25, '/images/products/magicl.gif', 0.5, 15, 'magiclean cleaner floor'),
(28, 'Mr Muscle Floor Cleaner', 'Mr Muscle Marble & Terrazzo 3 in1 Floor Cleaner 2L', 'Household', 7.25, '/images/products/mrms.gif', 0.5, 15, 'mr muscle floor cleaner'),
(29, 'Baygon Spray', 'Baygon All Insect Killer 600ml', 'Household', 6.10, '/images/products/bayg.gif', 0.5, 15, 'baygon killer insect spray'),
(30, 'Shieldtox Spray', 'Shieldtox Aerosol All Insect Killer 600ml', 'Household', 6.10, '/images/products/shtx.gif', 0.5, 15, 'shieldtox killer insect spray'),
(31, 'Energizer Battery', 'Energizer Advanced Alkaline 8-Pack AA Batteries  ', 'Others', 10.75, '/images/products/ener.gif', 0.5, 15, 'energizer battery aa '),
(32, 'Eye Drops', 'Eye Mo Eye Drops 15ml', 'Others', 5.00, '/images/products/eyemo.gif', 0.5, 15, 'eye drops mo'),
(33, 'White Paper', 'Double A White Paper 80g A4', 'Others', 5.90, '/images/products/paper.gif', 0.5, 5, 'double white paper a4'),
(34, 'Storage Box', 'Black storage box Width: 55 cm Depth: 76 cm Height: 40cm', 'Others', 14.50, '/images/products/box.gif', 0.5, 8, 'storage box black'),
(35, '4-Gang Switch', 'Morries 4-Gang Switched Socket Outlet 2m', 'Others', 10.90, '/images/products/plug.gif', 0.5, 5, 'power socket gang switch'),
(36, 'Charcoal', 'BBQ Charcoal 4KG', 'Others', 5.00, '/images/products/bbq.gif', 0.5, 5, 'bbq charcoal'),
(37, 'White Bread', 'Gardenia White Bread', 'Grocery', 1.55, '/images/products/gardwhite.gif', 0, 10, 'gardenia bread white'),
(38, 'Wholemeal Bread', 'Gardenia Wholemeal Bread', 'Grocery', 1.75, '/images/products/gardgrain.gif', 0, 10, 'gardenia bread wholemeal'),
(39, 'White Bread', 'Bonjour Enriched White Bread', 'Grocery', 1.65, '/images/products/bonjourwhite.gif', 0, 10, 'bonjour white bread'),
(40, 'Pandan Bread', 'Bonjour Pandan Bread', 'Grocery', 1.75, '/images/products/bonjourpandan.gif', 0, 10, 'bonjour pandan bread'),
(41, 'Goldtailed Fish', 'Golden Tailed Fish (Pack of 10)', 'Fresh', 5.50, '/images/products/goldtail.gif', 0, 10, 'fresh fish pack'),
(42, 'Seabass', 'Seabass (Pack of 2)', 'Fresh', 6.30, '/images/products/seabass.gif', 0, 10, 'fresh fish seabass pack'),
(43, 'Tomato', 'Tomatoes (Pack of 5)', 'Fresh', 3.50, '/images/products/tomato.gif', 0, 10, 'fresh tomato tomatoes pack'),
(44, 'Lettuce', 'Fresh Lettuce', 'Fresh', 1.50, '/images/products/lettuce.gif', 0, 10, 'fresh vegetables lettuce ');

-- --------------------------------------------------------

--
-- Table structure for table `tablecomments`
--

CREATE TABLE IF NOT EXISTS `tablecomments` (
  `commentID` int(10) NOT NULL AUTO_INCREMENT,
  `adsid` int(10) DEFAULT '0',
  `comments` text,
  `username` varchar(50) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`commentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tablecomments`
--

INSERT INTO `tablecomments` (`commentID`, `adsid`, `comments`, `username`, `time`) VALUES
(1, 36, 'is this a new box?', 'demouser', '2011-11-05 19:06:03'),
(2, 36, 'qweqw', 'demouser', '2011-11-05 19:16:31'),
(3, 36, 'qweqw', 'demouser', '2011-11-05 19:16:39'),
(4, 36, 'hellooooo!!!', 'demouser', '2011-11-05 19:17:35'),
(5, 40, 'This oreo is the last and only one in the world!!', 'demouser', '2011-11-05 19:57:30'),
(6, 40, 'yeah yeah yeah yeah!!!', 'demouser', '2011-11-05 20:00:06'),
(7, 40, 'hello\r\n', 'demouser', '2011-11-05 20:00:40'),
(8, 40, 'test la', 'demouser', '2011-11-05 20:02:33'),
(9, 40, 'hello again', 'demouser', '2011-11-05 20:02:56'),
(10, 40, 'new comments!!', 'demouser', '2011-11-05 20:03:29'),
(11, 41, 'Wow biscuits!!!!', 'tester', '2011-11-09 19:20:15'),
(12, 41, 'any more?\r\n', 'tester', '2011-11-09 19:29:40'),
(13, 41, 'helloo', 'tester', '2011-11-09 19:31:29'),
(14, 41, 'yes', 'tester', '2011-11-09 19:32:15'),
(15, 41, 'yes', 'tester', '2011-11-09 19:33:00'),
(16, 41, 'yes', 'tester', '2011-11-09 19:33:28'),
(17, 38, 'ipoipoiop\r\n\r\n', '', '2011-11-09 19:49:25'),
(18, 44, 'dfgghfjg\r\n', 'tester', '2011-11-10 13:26:14'),
(19, 49, 'Is the headphones brand new?', 'John', '2011-11-10 21:22:32'),
(20, 49, 'Any discount?', 'John', '2011-11-10 21:23:53'),
(21, 51, 'bicyle is still in good condition', 'Prof Oreo', '2011-11-11 16:34:10'),
(22, 52, 'bla bla bla ', 'Aung Ye Paing', '2011-11-11 17:02:03'),
(23, 49, 'Good headphones', 'David', '2011-11-18 16:42:52'),
(24, 47, 'What brand?', 'qwerty', '2011-11-18 19:16:22'),
(25, 50, 'hi-fi', 'david', '2011-11-18 21:07:25'),
(26, 50, 'very expensive', 'david', '2011-11-18 21:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Usname` varchar(45) NOT NULL,
  `Pword` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Blkno` varchar(10) NOT NULL,
  `Streetname` varchar(45) NOT NULL,
  `Unitno` varchar(15) NOT NULL,
  `Postal` varchar(45) NOT NULL,
  `Mainno` int(10) unsigned NOT NULL,
  `Altno` int(10) unsigned NOT NULL,
  `Status` varchar(45) NOT NULL,
  `Actkey` varchar(45) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Usname` (`Usname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Usname`, `Pword`, `Email`, `Blkno`, `Streetname`, `Unitno`, `Postal`, `Mainno`, `Altno`, `Status`, `Actkey`) VALUES
(37, 'cadbury', '555fd650dbc7bdc3482e91d662938a7b', '  mdazri31@gmail.com  ', '  912A ', '  Yishun Ring Road 52  ', '  08-288  ', '  682900  ', 90011233, 0, 'activated', '776709323'),
(39, 'Peter Tan', '555fd650dbc7bdc3482e91d662938a7b', ' mdazri31@gmail.com ', ' 452 ', ' Woodlands Ring Road 31', ' 09-877 ', ' 616452 ', 98102231, 0, 'activated', '998973931'),
(40, 'John', '555fd650dbc7bdc3482e91d662938a7b', 'mdazri31@gmail.com', '244', 'Bishan Road 45', '12-334', '552244', 67681145, 0, 'activated', '549948120'),
(42, 'hello', '555fd650dbc7bdc3482e91d662938a7b', ' mdazri31@gmail.com ', ' 897 ', ' Orchard Hill 7', ' 01-223 ', ' 778897 ', 98978889, 0, 'activated', '169849989'),
(43, 'Prof Oreo', '555fd650dbc7bdc3482e91d662938a7b', ' mdazri31@gmail.com ', ' 423B ', ' City Hall Drive', ' 01-223 ', ' 445855 ', 65689121, 0, 'activated', '709169854'),
(44, 'Aung Ye Paing', '555fd650dbc7bdc3482e91d662938a7b', ' aungyepaing@gmail.com ', ' 468D ', ' Admiralty Drive ', ' #13-225 ', ' 754468 ', 84484831, 2346576, 'activated', '145375230'),
(45, 'Md Zool', '555fd650dbc7bdc3482e91d662938a7b', 'mdzulhilmi_123@hotmail.com', '677B', 'Choa Chu Kang Crescente', '09-998', '682677', 81108787, 0, 'verify', '674162801'),
(46, 'Azri', '555fd650dbc7bdc3482e91d662938a7b', 'mdazri31@gmail.com', '899B', 'Qween Street 22', '09-887', '688899', 89001123, 0, 'activated', '756067233'),
(48, 'qwerty', '555fd650dbc7bdc3482e91d662938a7b', 'mdazri31@gmail.com', '899', 'Peninsula Street 12', '09-112', '778889', 91901928, 0, 'activated', '880462985'),
(49, 'David', '555fd650dbc7bdc3482e91d662938a7b', '  mdazri31@gmail.com  ', '  877A  ', '  Orchard Road 32  ', '  02-225  ', '  225877123  ', 4294967295, 0, 'activated', '539325290');
