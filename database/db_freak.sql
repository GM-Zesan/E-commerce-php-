-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 10:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_freak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `login_Id` int(11) NOT NULL,
  `admin_Username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_Password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_Role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_Website` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_Location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_Language` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`login_Id`, `admin_Username`, `admin_Email`, `admin_Password`, `admin_Role`, `admin_Website`, `admin_Location`, `admin_Language`) VALUES
(1, 'admin', '', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `name`) VALUES
(1, 'Barisal'),
(2, 'Chittagong'),
(3, 'Dhaka'),
(4, 'Khulna'),
(5, 'Mymensingh'),
(6, 'Rajshahi'),
(7, 'Rangpur'),
(8, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_Id` int(11) NOT NULL,
  `about_Title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_Body` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_Id`, `about_Title`, `about_Body`) VALUES
(1, 'About \"TEAM05\"', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_start`
--

CREATE TABLE `tbl_about_start` (
  `about_start_Id` int(11) NOT NULL,
  `about_start_Title1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_start_Title2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_start_text` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_start_Image` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_about_start`
--

INSERT INTO `tbl_about_start` (`about_start_Id`, `about_start_Title1`, `about_start_Title2`, `about_start_text`, `about_start_Image`) VALUES
(1, 'Let\'s Know Something', 'About Us', 'Developed keeping SEO practices and standards in mind', '08.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address_location`
--

CREATE TABLE `tbl_address_location` (
  `location_Id` int(11) NOT NULL,
  `location_Title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_Map` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_Title` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_Subtitle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_Point` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_address_location`
--

INSERT INTO `tbl_address_location` (`location_Id`, `location_Title`, `location_Map`, `address_Title`, `address_Subtitle`, `address_Point`) VALUES
(1, 'Our Location', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58494.54780813706!2d89.843598!3d23.607587800000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe3ae13ec91fa1%3A0xa6b80d7f291b41a4!2sFaridpur%20Sadar%20Upazila!5e0!3m2!1sen!2sbd!4v1572891535642!5m2!1sen!2sbd', 'Our Address', 'Green Company', '150-300 Fusce non libero sed,<br />\r\n					Vestibulum velit mauris, 10800<br />\r\n					Donec nec mauris justo<br /><br />\r\n				\r\n					Tel: 060-027-2330<br />\r\n					Fax: 060-030-2780');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_Id` int(11) NOT NULL,
  `session_Id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_Id` int(11) NOT NULL,
  `product_Quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'Shirt'),
(2, 'T-Shirt'),
(3, 'Panjabi'),
(4, 'Blazer'),
(5, 'Wrist Watch'),
(6, 'Sun Glass');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_form`
--

CREATE TABLE `tbl_contact_form` (
  `contact_form_Id` int(11) NOT NULL,
  `contact_form_Name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_form_Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_form_Sub` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_form_Msg` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_contact_form`
--

INSERT INTO `tbl_contact_form` (`contact_form_Id`, `contact_form_Name`, `contact_form_Email`, `contact_form_Sub`, `contact_form_Msg`, `Created`) VALUES
(1, 'Ashanaur', 'Ashanaur@gmail.com', 'git', 'I love Git.', '2019-11-18 22:31:15'),
(2, 'Zesan', 'gmzesan7767@gmail.com', 'Php', 'I love Php', '2019-11-18 22:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_info`
--

CREATE TABLE `tbl_contact_info` (
  `contact_info_Id` int(11) NOT NULL,
  `contact_info_Title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_info_Body` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_contact_info`
--

INSERT INTO `tbl_contact_info` (`contact_info_Id`, `contact_info_Title`, `contact_info_Body`) VALUES
(1, 'Contact Information', 'Sed placerat mattis iaculis. Nunc a bibendum tellus. Morbi nec sapien ut orci aliquet ullamcorper. Etiam dui eros, pellentesque vitae luctus at, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. laoreet in ipsum. Vivamus venenatis dignissim leo eget posuere. Validate XHTML and CSS.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `Id` int(11) NOT NULL,
  `session_Id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_Id` int(11) NOT NULL,
  `customer_Fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_Phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_Image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_Country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_Division` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_Upzila` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_Postal` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_Id`, `customer_Fname`, `customer_Email`, `customer_Password`, `customer_Phone`, `customer_Image`, `customer_Country`, `customer_Division`, `customer_Upzila`, `customer_Postal`) VALUES
(1, 'Ashanaur', 'ashanaur@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '098765421', '5.jpg', 'Bangladesh ', '3', 'Faridpur, Cahndmari', '7700'),
(2, 'G.M Zesan', 'gmzesan7767@gmail.com', '202cb962ac59075b964b07152d234b70', '01869434331', '10.jpg', 'Bangladesh', '1', 'Gauranadi', '8231'),
(3, 'Aminur', 'aminur@gamil.com', '827ccb0eea8a706c4c34a16891f84e7b', '456789987', '6.jpg', '', '3', 'FAridpur', ''),
(4, 'Nasim', 'nasim@gmail.com', '202cb962ac59075b964b07152d234b70', '12345566', '0e2862cc90.jpg', '', '1', 'Kolapara', '8858');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feature`
--

CREATE TABLE `tbl_feature` (
  `feature_Id` int(11) NOT NULL,
  `feature_Fname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_Lname` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_Image` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_Class` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_feature`
--

INSERT INTO `tbl_feature` (`feature_Id`, `feature_Fname`, `feature_Lname`, `feature_Image`, `feature_Class`) VALUES
(1, 'WRIST', 'WATCH', 'watch.jpg', 'blue'),
(2, 'JENTS', 'CLOTH', 'cloth.jpg', 'red'),
(3, 'SUN', 'GLASSES', 'sunglass.jpg', 'green');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_happy_shopping`
--

CREATE TABLE `tbl_happy_shopping` (
  `happy_Id` int(11) NOT NULL,
  `happy_Title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `happy_Body` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `happy_Image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_happy_shopping`
--

INSERT INTO `tbl_happy_shopping` (`happy_Id`, `happy_Title`, `happy_Body`, `happy_Image`) VALUES
(1, 'Happy Shopping', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</br></br>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_Id` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_Price` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_Total` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_Quantity` int(10) NOT NULL,
  `order_Image` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_Id` int(12) NOT NULL,
  `pro_Id` int(11) NOT NULL,
  `a_Action` int(11) NOT NULL,
  `u_Action` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_Id` int(11) NOT NULL,
  `product_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_Image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_Details` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_Category` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_Brand` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_Discount` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `product_Condition` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_Availablity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_Price` float NOT NULL,
  `product_Type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_Section` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_Id`, `product_Name`, `product_Image`, `product_Details`, `product_Category`, `product_Brand`, `product_Discount`, `product_Condition`, `product_Availablity`, `product_Price`, `product_Type`, `product_Section`) VALUES
(3, 'Blazer-1', '6e7216ffed.png', '                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).                                        ', '4', 'Marvel', '10', 'new', '', 3700, '', 'General'),
(4, 'Blazer-2', '429db1d7b7.png', '                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).                                        ', '4', 'Park Avenue', '', 'new', '', 3450, '', 'General'),
(5, 'Blazer-3', 'fd11d6e2bb.png', '                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).                                        ', '4', 'easy', '7', 'new', '', 3500, '', 'General'),
(6, 'Blazer-4', '8c3ac0444b.png', '                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).                                        ', '4', 'polo', '11', 'new', '', 4200, '', 'General'),
(7, 'Blazer-5', 'fd4c792157.png', '                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).                                        ', '4', 'Mast & Harbour', '10', 'new', '', 4700, '', 'General'),
(8, 'Blazer-6', 'a27e5c0f9a.png', '                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).                                        ', '4', 'Jack & Jones', '', 'new', '', 3300, '', 'General'),
(9, 'T-Shirt-1', '8ef28b62fc.png', '                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).                                        ', '2', 'Nike', '5', 'new', '', 550, '', 'General'),
(10, 'T-Shirt-2', 'bba85820cc.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Nike', '3', 'new', '', 475, '', 'General'),
(11, 'T-Shirt-3', 'b0cd99b467.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Nike', '7', 'new', '', 625, '', 'General'),
(12, 'T-Shirt-4', 'b22c9a90a4.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Nike', '', 'new', '', 575, '', 'General'),
(14, 'T-Shirt-5', '67f8a7866e.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Adidas', '7', 'new', '', 525, '', 'General'),
(15, 'T-Shirt-6', 'c43594fd73.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Adidas', '3', 'new', '', 599, '', 'General'),
(16, 'T-Shirt-7', 'd381ba6ab5.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Adidas', '', 'new', '', 555, '', 'General'),
(17, 'T-Shirt-8', '6bd419d070.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Adidas', '5', 'new', '', 490, '', 'General'),
(18, 'T-Shirt-9', '2dc945f93a.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Adidas', '7', 'new', '', 500, '', 'General'),
(19, 'T-Shirt-10', 'ebe732fe3d.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Adidas', '7', 'new', '', 570, '', 'General'),
(20, 'T-Shirt-11', '73c3620146.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '5', 'new', '', 530, '', 'General'),
(21, 'T-Shirt-12', 'd0daac975e.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '', 'new', '', 500, '', 'General'),
(22, 'T-Shirt-13', 'bcb0cbee8c.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '10', 'new', '', 690, '', 'General'),
(23, 'T-Shirt-14', 'ccdd1f8dcf.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '5', 'new', '', 660, '', 'General'),
(24, 'T-Shirt-15', '83bc62cf94.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '7', 'new', '', 600, '', 'General'),
(25, 'T-Shirt-16', '7caa3ce83f.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '', 'new', '', 550, '', 'General'),
(26, 'T-Shirt-17', '4b6863c94c.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Adidas', '7', 'new', '', 750, '', 'General'),
(27, 'T-Shirt-18', '4947e66e8d.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '', 'new', '', 500, '', 'General'),
(28, 'T-Shirt-19', '25a96c3883.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '7', 'new', '', 660, '', 'General'),
(29, 'T-Shirt-20', 'ad2abaa1de.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '10', 'new', '', 670, '', 'General'),
(30, 'T-Shirt-21', '2c64c19ecd.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '', 'new', '', 490, '', 'General'),
(31, 'T-Shirt-22', 'ec49f3bfb1.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '3', 'new', '', 450, '', 'General'),
(32, 'T-Shirt-23', '8e7377488b.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '', 'new', '', 570, '', 'General'),
(33, 'T-Shirt-24', '5ed68ef892.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '7', 'new', '', 600, '', 'General'),
(34, 'T-Shirt-25', '89000a3e4d.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '', 'new', '', 550, '', 'General'),
(35, 'T-Shirt-26', '080c4b4986.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '7', 'new', '', 750, '', 'General'),
(38, 'T-Shirt-27', 'e4ae64e642.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Adidas', '', 'new', '', 550, '', 'General'),
(39, 'T-Shirt-28', '44e74ce0f1.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Adidas', '', 'new', '', 500, '', 'General'),
(40, 'T-Shirt-29', '1804822ee6.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '', 'new', '', 570, '', 'General'),
(41, 'T-Shirt-30', 'fa702f8ab8.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Adidas', '', 'new', '', 600, '', 'General'),
(42, 'T-Shirt-31', '5d2a8b2c53.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Adidas', '7', 'new', '', 750, '', 'General'),
(43, 'T-Shirt-32', 'f18a297048.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '5', 'new', '', 650, '', 'General'),
(44, 'T-Shirt-33', 'a3d64bdbf2.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '', 'new', '', 570, '', 'General'),
(45, 'T-Shirt-34', 'a02fd085a2.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Adidas', '5', 'new', '', 670, '', 'General'),
(46, 'T-Shirt-35', 'a36549d773.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Adidas', '7', 'new', '', 700, '', 'General'),
(47, 'T-Shirt-36', '2285b9010a.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Lacoste', '', 'new', '', 500, '', 'General'),
(48, 'T-Shirt-37', '0106d2bb4c.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Gucci', '7', 'new', '', 590, '', 'General'),
(49, 'T-Shirt-38', 'e3b5ae4848.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Gucci', '5', 'new', '', 700, '', 'General'),
(50, 'T-Shirt-39', '3e7f705a68.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', 'Gucci', '7', 'new', '', 590, '', 'General');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provide`
--

CREATE TABLE `tbl_provide` (
  `provide_Id` int(11) NOT NULL,
  `provide_Title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provide_Subtitle` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provide_Body` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_provide`
--

INSERT INTO `tbl_provide` (`provide_Id`, `provide_Title`, `provide_Subtitle`, `provide_Body`) VALUES
(1, 'What do We Do?', 'We provide :-', 'Nam volutpat libero pharetra est mollis, vel condimentum metus suscipit. Suspendisse consectetur leo est, non luctus odio volutpat id. Quisque cursus mollis erat at mattis.Duis aute irure dolor in reprehenderit in voluptate velit esse.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skill`
--

CREATE TABLE `tbl_skill` (
  `skill_Id` int(11) NOT NULL,
  `skill_Title` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_Value` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_skill`
--

INSERT INTO `tbl_skill` (`skill_Id`, `skill_Title`, `skill_Value`) VALUES
(1, 'Standered Coading', '85%'),
(2, 'Web Design and Development', '90%'),
(3, 'Search Engine Optimization', '75%'),
(4, 'Graphics Design', '90%');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `team_Id` int(11) NOT NULL,
  `team_Name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_Image` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_Profession1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_Profession2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_Text` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`team_Id`, `team_Name`, `team_Image`, `team_Profession1`, `team_Profession2`, `team_Text`) VALUES
(1, 'G.M Zesan', 'team7.jpg', 'Back-End', 'Developer', 'Some text that describes me lorem ipsum ipsum lorem.'),
(2, 'Mustakim Loskor', 'team6.jpg', 'Font-End', 'Developer', 'Some text that describes me lorem ipsum ipsum lorem.'),
(3, 'Alpona Aktar', 'team3.jpg', 'Graphics ', 'Design ', 'Some text that describes me lorem ipsum ipsum lorem.'),
(5, 'Aminur rahman', 'team5.jpg', 'Content', 'Writer', 'Some text that describes me lorem ipsum ipsum lorem.'),
(6, 'Rumon Shekh', 'team1.jpg', 'Content', 'Writer', 'Some text that describes me lorem ipsum ipsum lorem.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `testimonial_Id` int(11) NOT NULL,
  `testimonial_Body` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`testimonial_Id`, `testimonial_Body`, `cus_Id`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2),
(7, 'asbdsdgfk sgfbefg erfuebf ffbdbhjf djbjb kjkg eruehuv vtoeyto ehtrduv u oncnfhrgysg shg bdggf d vgyudg kyu ddrvg bkfgu', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`login_Id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_Id`);

--
-- Indexes for table `tbl_about_start`
--
ALTER TABLE `tbl_about_start`
  ADD PRIMARY KEY (`about_start_Id`);

--
-- Indexes for table `tbl_address_location`
--
ALTER TABLE `tbl_address_location`
  ADD PRIMARY KEY (`location_Id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_Id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_form`
--
ALTER TABLE `tbl_contact_form`
  ADD PRIMARY KEY (`contact_form_Id`);

--
-- Indexes for table `tbl_contact_info`
--
ALTER TABLE `tbl_contact_info`
  ADD PRIMARY KEY (`contact_info_Id`);

--
-- Indexes for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_Id`);

--
-- Indexes for table `tbl_feature`
--
ALTER TABLE `tbl_feature`
  ADD PRIMARY KEY (`feature_Id`);

--
-- Indexes for table `tbl_happy_shopping`
--
ALTER TABLE `tbl_happy_shopping`
  ADD PRIMARY KEY (`happy_Id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_Id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_Id`);

--
-- Indexes for table `tbl_provide`
--
ALTER TABLE `tbl_provide`
  ADD PRIMARY KEY (`provide_Id`);

--
-- Indexes for table `tbl_skill`
--
ALTER TABLE `tbl_skill`
  ADD PRIMARY KEY (`skill_Id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`team_Id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`testimonial_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `login_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_about_start`
--
ALTER TABLE `tbl_about_start`
  MODIFY `about_start_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_address_location`
--
ALTER TABLE `tbl_address_location`
  MODIFY `location_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact_form`
--
ALTER TABLE `tbl_contact_form`
  MODIFY `contact_form_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact_info`
--
ALTER TABLE `tbl_contact_info`
  MODIFY `contact_info_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_feature`
--
ALTER TABLE `tbl_feature`
  MODIFY `feature_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_happy_shopping`
--
ALTER TABLE `tbl_happy_shopping`
  MODIFY `happy_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_provide`
--
ALTER TABLE `tbl_provide`
  MODIFY `provide_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_skill`
--
ALTER TABLE `tbl_skill`
  MODIFY `skill_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `team_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `testimonial_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
