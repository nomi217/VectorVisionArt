-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 04:24 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vectorvision`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_username` text NOT NULL,
  `admin_password` text NOT NULL,
  `admin_mobile` text NOT NULL,
  `admin_img` text NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_username`, `admin_password`, `admin_mobile`, `admin_img`, `admin_address`) VALUES
(1, 'Arslan Amjad', 'ahmadarslan201@gmail.com', 'arsLanA5_ahmad', 'aRslAn@_201', '(+92) 320 0852366', '', 'Lahore, Pakistan'),
(2, 'Nauman Khalid', 'naumankhalid217@gmail.com', 'naUmaN4e_bgKhalid', 'nK@Jun_15', '(+92) 332 1526216', 'nauman.jpg', 'Islamabad, Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `category_title` text NOT NULL,
  `category_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `admin_id`, `category_title`, `category_desc`) VALUES
(1, 2, 'Development', 'According to IBM Research: “Software development refers to a set of computer science activities dedicated to the process of creating, designing, deploying and supporting software.”\r\n\r\nSoftware itself is the set of instructions or programs that tell a computer what to do. It is independent of hardware and makes computers programmable.'),
(2, 1, 'Graphic Design', 'Graphic design is the process of visual communication and problem-solving through the use of typography, photography, iconography and illustration. The field is considered a subset of visual communication and communication design, but sometimes the term \"graphic design\" is used synonymously'),
(4, 2, 'Artificial Intelligence', 'Artificial intelligence (AI) refers to the simulation of human intelligence in machines that are programmed to think like humans and mimic their actions. The term may also be applied to any machine that exhibits traits associated with a human mind such as learning and problem-solving.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `c_email` text NOT NULL,
  `c_subject` text NOT NULL,
  `c_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `c_subject`, `c_message`, `timestamp`) VALUES
(1, 'Nauman Khalid', 'naumankhalid2015@gmail.com', 'Project Discussion', 'We are developing a tourism app. A web and android system that provides a functions and features to arrange tours, and with the help of it they can join any tour. We have 4 main modules in it which are User, Admin, Tour Agent and Owner. User can join any tour and arrange as well. This App will incorporate the necessary information about the vehicles available for tour packages for the end-user nearby his/her location. The concerned user/tour agent/owner of vehicles etc will update the information about tour packages, fare of vehicle etc and this information will be presented to the end user with an option of choosing best suitable deal for him/her', '2020-07-27 10:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `p_title` text NOT NULL,
  `p_img` text NOT NULL,
  `p_desc` text NOT NULL,
  `admin_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_cat_id`, `cat_id`, `p_title`, `p_img`, `p_desc`, `admin_id`, `date`) VALUES
(1, 3, 1, 'Travel Pakistan', 'tp_mockup1_upwork.png', 'The main objective behind development of this app is that the application will\r\nprovide adequate information to the users in a contemporary technology. Another main\r\nobjective is that the system will incorporate the necessary information about fare and tour\r\npackages for the end-user according to his/her needs. Web application are desired to\r\ndevelop, where the concerned user/tour agent/owner of vehicles will update the\r\ninformation about tour packages, fare of vehicle and this information will be presented to\r\nthe end user with an option of choosing best suitable deal for his/her plus user can manage\r\nhis/her preference in their profiles. System objective is of being useful in significant way\r\nby providing most basic & most essential functionalities & features to its users in efficient\r\n& effective manner.', 2, '2020-07-26 08:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL,
  `admin_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`p_cat_id`, `cat_id`, `p_cat_title`, `p_cat_desc`, `admin_id`) VALUES
(1, 4, 'Machine Learning', 'Machine learning is an application of artificial intelligence (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed. Machine learning focuses on the development of computer programs that can access data and use it learn for themselves.', 2),
(2, 4, 'Deep Learning', 'Deep learning is an AI function that mimics the workings of the human brain in processing data for use in detecting objects, recognizing speech, translating languages, and making decisions. Deep learning AI is able to learn without human supervision, drawing from data that is both unstructured and unlabeled.', 2),
(3, 1, 'Web Development', 'Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network).[1] Web development can range from developing a simple single static page of plain text to complex web-based internet applications (web apps), electronic businesses, and social network services. A more comprehensive list of tasks to which web development commonly refers, may include web engineering, web design, web content development, client liaison, client-side/server-side scripting, web server and network security configuration, and e-commerce development.\r\n\r\nAmong web professionals, \"web development\" usually refers to the main non-design aspects of building websites: writing markup and coding.[2] Web development may use content management systems (CMS) to make content changes easier and available with basic technical skills.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `s_id` int(11) NOT NULL,
  `subscription_email` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`s_id`, `subscription_email`, `timestamp`) VALUES
(1, 'vectorvisionart@gmail.com', '2020-07-27 12:15:33'),
(2, 'naumankhalid2015@gmail.com', '2020-07-27 12:17:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
