-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 07:14 PM
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
-- Database: `nishorgo`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addnewproduct` (IN `pname` VARCHAR(255), IN `category` VARCHAR(255), IN `quantity` INT(11), IN `price` DOUBLE, IN `target` VARCHAR(255), IN `details` VARCHAR(255))   BEGIN
INSERT INTO product (category,product_name,quantity, price,image,description) VALUES (category,pname,quantity,price,target, details);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addnewuser` (IN `uname` VARCHAR(255), IN `em` VARCHAR(255), IN `pw` VARCHAR(255), IN `addr` VARCHAR(255))   BEGIN
  INSERT INTO user ( username, email, password , address) VALUES ( uname,em, pw, addr);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `cartaddproduct` (IN `uname` VARCHAR(255), IN `cid` INT(11), IN `cnt` INT(11))   BEGIN
INSERT INTO cart (UserName, CartProductID, CartQuantity) VALUES (uname, cid, cnt) ON DUPLICATE KEY UPDATE CartQuantity = cnt ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `cartremoveproduct` (IN `cpid` INT(11), IN `uname` VARCHAR(255))   BEGIN 
delete From cart WHERE CartProductID = cpid and UserName=uname;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteproduct` (IN `id` INT(11))   BEGIN
DELETE FROM product WHERE product.product_id = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `userrateproduct` (IN `rate` INT(11), IN `pid` INT(11))   BEGIN
 DECLARE r DOUBLE;
 DECLARE rc INT;
 DECLARE totalrating DOUBLE;
 DECLARE newrating DOUBLE;
 DECLARE result double;
  Select rating into r FROM product WHERE product.product_id = pid;
  Select ratedcount into rc FROM product WHERE product.product_id = pid;
  SET totalrating = r*rc;
  SET newrating=totalrating+rate;
  SET rc=rc+1;
  SET result:=newrating/rc;
  UPDATE product SET rating=result , ratedcount=rc WHERE product_id=pid;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `carttotal` (`username` VARCHAR(255)) RETURNS DOUBLE  BEGIN
 DECLARE total_sum INT;
  Select SUM(Price*CartQuantity)into total_sum FROM product,cart WHERE product.product_id = cart.CartProductID AND cart.UserName=username ;
  RETURN total_sum;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  `phone_no` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `password`, `address`, `img`, `phone_no`) VALUES
(2, 'Jaid', 'admin', 'bop', 'bop', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `blog_img` varchar(200) NOT NULL,
  `blog_header` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `content`, `tag`, `date`, `blog_img`, `blog_header`) VALUES
(1, 'Potato - What is?', 'Solanum tuberosum and is a root vegetable and a fruit native to the Americas. The plant is a perennial in the nightshade family Solanaceae.[2]\n\nWild potato species can be found from the southern United States to southern Chile.[3] The potato was originally believed to have been domesticated by Native Americans independently in multiple locations,[4] but later genetic studies traced a single origin, in the area of present-day southern Peru and extreme northwestern Bolivia. Potatoes were domesticated there approximately 7,000–10,000 years ago, from a species in the Solanum brevicaule complex.[5][6][7] In the Andes region of South America, where the species is indigenous, some close relatives of the potato are cultivated.', 'vegetable', '2022-08-30', 'assets/images/blog-post-01.jpg', 'The potato is a starchy tuber of the plant Solanum tuberosum'),
(2, 'Mango - Yummm', 'A mango is an edible stone fruit produced by the tropical tree Mangifera indica which is believed to have originated in the region between northwestern Myanmar, Bangladesh, and northeastern India.[1] M. indica has been cultivated in South and Southeast Asia since ancient times resulting in two types of modern mango cultivars: the \"Indian type\" and the \"Southeast Asian type\".[2][3] Other species in the genus Mangifera also produce edible fruits that are also called \"mangoes\", the majority of which are found in the Malesian ecoregion', 'fruit', '2022-08-30', 'assets/images/blog-post-02.jpg', 'A mango is an edible stone fruit produced by the tropical tre'),
(3, 'Roses - Beautiful', 'A rose is either a woody perennial flowering plant of the genus Rosa, in the family Rosaceae, or the flower it bears. There are over three hundred species and tens of thousands of cultivars.[citation needed] They form a group of plants that can be erect shrubs, climbing, or trailing, with stems that are often armed with sharp prickles.[citation needed] Their flowers vary in size and shape and are usually large and showy, in colours ranging from white through yellows and reds. Most species are native to Asia, with smaller numbers native to Europe, North America, and northwestern Africa.[citation needed] Species, cultivars and hybrids are all widely grown for their beauty and often are fragrant. Roses have acquired cultural significance in many societies. Rose plants range in size from compact, miniature roses, to climbers that can reach seven meters in height.[citation needed] Different species hybridize easily, and this has been used in the development of the wide range of garden roses', 'flower', '2022-08-30', 'assets/images/blog-post-03.jpg', 'A rose is either a woody perennial flowering plant of the genus Rosa, in '),
(4, 'Lemons fresh', 'The lemon (Citrus limon) is a species of small evergreen trees in the flowering plant family Rutaceae, native to Asia, primarily Northeast India (Assam), Northern Myanmar or China.[2]', 'fruit', '2022-08-30', '', 'The lemon (Citrus limon) is a species'),
(5, 'Lemons 2', 'The lemon (Citrus limon) is a species of small evergreen trees in the flowering plant family Rutaceae, native to Asia, primarily Northeast India (Assam), Northern Myanmar or China.[2]', 'vegetable', '2022-08-30', '', 'The lemon (Citrus limon) is a species');

--
-- Triggers `blog`
--
DELIMITER $$
CREATE TRIGGER `blogidincrement` BEFORE INSERT ON `blog` FOR EACH ROW SET NEW.blog_id = (SELECT MAX(blog_id) + 1 FROM blog)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `UserName` varchar(255) NOT NULL,
  `CartProductID` int(11) NOT NULL,
  `CartQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`UserName`, `CartProductID`, `CartQuantity`) VALUES
('jaid', 1, 2),
('lula', 1, 2),
('lula', 2, 2);

--
-- Triggers `cart`
--
DELIMITER $$
CREATE TRIGGER `UpdateProduct` AFTER INSERT ON `cart` FOR EACH ROW UPDATE product
SET product.quantity = product.quantity - NEW.CartQuantity
WHERE product.product_id=NEW.CartProductID
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UpdateProduct2` AFTER DELETE ON `cart` FOR EACH ROW UPDATE product
SET product.quantity = product.quantity + OLD.CartQuantity
WHERE product.product_id=OLD.CartProductID
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `oid_main` int(100) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `OrderQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `oid_main`, `UserName`, `ProductID`, `OrderQuantity`) VALUES
(13, 1, 'jaid', 3, 2),
(14, 1, 'jaid', 4, 1),
(15, 2, 'jaid', 5, 2),
(16, 2, 'jaid', 6, 4),
(17, 3, 'jaid', 1, 1),
(18, 4, 'lula', 1, 2),
(19, 5, 'jaid', 1, 1),
(20, 5, 'jaid', 5, 1);

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `empty_cart` AFTER INSERT ON `orders` FOR EACH ROW DELETE
FROM
    cart
WHERE
    cart.UserName=NEW.UserName
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `rating` double(3,1) NOT NULL,
  `ratedcount` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `image`, `description`, `rating`, `ratedcount`, `category`, `quantity`) VALUES
(1, 'Orange', 40, 'image/Orange.png', 'lorem ipsum', 3.3, 3, 'fruit', 8),
(2, 'Potato', 50, 'image/Potato.png', 'lorem ipsum', 0.0, 0, 'vegetable', 4),
(3, 'Carrot', 65, 'image/Carrot.png', 'lorem', 0.0, 0, 'vegetable', 5),
(4, 'Capsicum', 100, 'image/Capsicum.png', 'ok', 0.0, 0, 'vegetable', 6),
(5, 'Daisy', 100, 'image/Common Daisy.png', 'ok', 0.0, 0, 'flower', 11),
(6, 'Rose', 150, 'image/Rose.png', '', 0.0, 0, 'flower', 12),
(7, 'Daffodil', 140, 'image/Daffodil.png', '', 0.0, 0, 'flower', 15),
(8, 'Marigold', 100, 'image/Marigold.png', '', 0.0, 0, 'flower', 25),
(9, 'Hydrangea', 200, 'image/Hydrangea.png', '', 0.0, 0, 'flower', 30),
(10, 'Orchids', 200, 'image/Orchids.png', '', 0.0, 0, 'flower', 201),
(11, 'Dahlia', 170, 'image/Dahlia.png', '', 0.0, 0, 'flower', 20),
(12, 'Lavendar', 155, 'image/Lavendar.png', '', 0.0, 0, 'flower', 145),
(13, 'Lilac', 120, 'image/Lilac.png', '', 0.0, 0, 'flower', 69),
(14, 'Tomato', 120, 'image/Tomato.png', '', 0.0, 0, 'vegetable', 45),
(15, 'Jack Fruit', 250, 'image/Jack Fruit.png', '', 0.0, 0, 'fruit', 28),
(16, 'Mango', 90, 'image/Mango.png', '', 0.0, 0, 'fruit', 34),
(17, 'Pineapple', 20, 'image/Pineapple.png', '', 0.0, 0, 'fruit', 60),
(18, 'Lettuce', 50, 'image/Lettuce.png', 'bop', 0.0, 0, '1', 100);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `IDIncrement` BEFORE INSERT ON `product` FOR EACH ROW SET NEW.product_id = (SELECT MAX(product_id) + 1 FROM product)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` varchar(100) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `sitereview` varchar(200) DEFAULT NULL,
  `siterating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `phone_no`, `address`, `image`, `sitereview`, `siterating`) VALUES
(1, 'nafiu', 'nafiu.rahman@gmail.com', 'a4712a1db1957af119d36deb2940996a', '12345', '5,6,6/1,Free School Street, Kathal Bagan', NULL, NULL, NULL),
(2, 'bunku', 'bunku@gmail.com', '7aac484ef4744a2ece340dff3c80ae49', '12345', '5,6,6/1,Free School Street, Kathal Bagan', NULL, NULL, NULL),
(3, 'jaid', 'bunku@gmail.com', 'a454786b03494ea942e544a5db82e694', '12345', '5,6,6/1,Mirpur', NULL, NULL, NULL),
(4, 'abcd', '1905077@ugrad.cse.buet.ac.bd', '79cfeb94595de33b3326c06ab1c7dbda', NULL, '5,6,6/1,Free School Street, Kathal Bagan', NULL, NULL, NULL),
(5, 'salman', 'nafiu.rahman@gmail.com', '97502267ac1b12468f69c14dd70196e9', NULL, '5,6,6/1,Free School Street, Kathal Bagan', NULL, NULL, NULL),
(6, 'lula', '1905077@ugrad.cse.buet.ac.bd', '0fb741a97cee0652b86eaf42d19ced97', NULL, '5,6,6/1,Free School Street, Kathal Bagan', NULL, NULL, NULL),
(7, 'xyz', '1905077@ugrad.cse.buet.ac.bd', '613d3b9c91e9445abaeca02f2342e5a6', NULL, '5,6,6/1,Free School Street, Kathal Bagan', NULL, NULL, NULL);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `useridincrement` BEFORE INSERT ON `user` FOR EACH ROW SET NEW.user_id = (SELECT MAX(user_id) + 1 FROM user)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`UserName`,`CartProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
