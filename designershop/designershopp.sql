-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 06:52 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `designershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addsize`
--

CREATE TABLE `addsize` (
  `ads_id` int(11) NOT NULL,
  `read_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addsize`
--

INSERT INTO `addsize` (`ads_id`, `read_id`, `size_id`) VALUES
(119, 157, 1),
(120, 157, 2),
(121, 158, 1),
(135, 166, 3),
(136, 167, 1),
(137, 167, 2),
(138, 168, 1),
(139, 168, 2),
(140, 169, 1),
(141, 169, 2),
(142, 169, 3),
(143, 169, 4),
(144, 170, 1),
(145, 170, 2),
(146, 170, 3),
(147, 170, 4),
(148, 171, 1),
(149, 171, 2),
(150, 171, 3),
(151, 171, 4),
(152, 172, 1),
(153, 172, 2),
(154, 173, 1),
(155, 173, 3),
(156, 173, 4),
(157, 174, 1),
(158, 174, 3),
(159, 174, 4),
(160, 175, 1),
(161, 175, 3),
(162, 175, 4),
(163, 176, 1),
(164, 176, 3),
(165, 176, 4),
(166, 177, 1),
(167, 177, 2),
(168, 177, 3),
(169, 178, 1),
(170, 178, 2),
(171, 178, 3),
(172, 179, 1),
(173, 179, 2),
(174, 179, 3),
(175, 180, 1),
(176, 180, 2),
(177, 180, 3),
(178, 181, 1),
(179, 181, 2),
(180, 181, 3),
(181, 182, 1),
(182, 182, 2),
(183, 183, 1),
(184, 183, 2),
(185, 184, 1),
(186, 184, 2),
(187, 185, 1),
(188, 185, 2),
(189, 186, 1),
(190, 186, 2),
(191, 187, 1),
(192, 187, 2),
(193, 188, 1),
(194, 188, 2),
(195, 189, 1),
(196, 189, 2),
(197, 190, 1),
(198, 190, 2),
(199, 190, 3),
(200, 191, 1),
(201, 191, 2),
(202, 192, 1),
(203, 192, 2),
(204, 193, 1),
(205, 193, 2),
(206, 194, 1),
(207, 194, 2),
(208, 195, 1),
(209, 195, 2),
(210, 196, 1),
(211, 196, 2),
(212, 197, 1),
(213, 197, 2),
(214, 197, 3),
(215, 198, 1),
(216, 198, 2),
(217, 198, 3),
(218, 199, 1),
(219, 199, 2),
(220, 199, 3),
(221, 200, 1),
(222, 200, 2),
(223, 200, 3),
(224, 201, 1),
(225, 201, 2),
(226, 202, 1),
(227, 202, 2),
(228, 203, 1),
(229, 203, 2);

-- --------------------------------------------------------

--
-- Table structure for table `allselect`
--

CREATE TABLE `allselect` (
  `al_id` int(11) NOT NULL,
  `md_int` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `dcolor` varchar(200) NOT NULL,
  `dt_id` int(11) NOT NULL,
  `dsz_id` int(11) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allselect`
--

INSERT INTO `allselect` (`al_id`, `md_int`, `log_id`, `dcolor`, `dt_id`, `dsz_id`, `qty`, `price`, `status`) VALUES
(100, 125, 0, '#ff8080', 2, 0, '2', '455', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `al_id` int(11) NOT NULL,
  `read_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `price` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `log_id`, `al_id`, `read_id`, `qty`, `price`, `status`) VALUES
(62, 54, 0, 191, '1', '500', 1),
(63, 54, 0, 190, '4', '2000', 1),
(69, 54, 0, 200, '2', '910', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `c_id` int(15) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `dis_id` int(15) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`c_id`, `cname`, `dis_id`, `status`) VALUES
(1, 'kply', 1, 1),
(2, 'madurai', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color`) VALUES
(1, 'red'),
(2, 'blue'),
(3, 'Green'),
(4, 'Yellow'),
(5, 'Brown'),
(6, 'Peach');

-- --------------------------------------------------------

--
-- Table structure for table `designed`
--

CREATE TABLE `designed` (
  `read_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `im_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designed`
--

INSERT INTO `designed` (`read_id`, `type_id`, `did`, `im_id`, `color_id`, `m_name`, `quantity`, `price`, `status`) VALUES
(191, 1, 51, 94, 1, 'salwarnew', '53', '25', 0),
(195, 7, 48, 93, 4, 'salwar', '14', '455', 0),
(198, 4, 48, 97, 4, 'salwar', '55', '455', 0),
(199, 7, 48, 98, 4, 'salwar', '55', '455', 0),
(200, 4, 48, 99, 3, 'salwar', '10', '455', 0),
(201, 7, 48, 92, 4, 'Kurthi', '55', '455', 0),
(202, 7, 48, 100, 4, 'Kurthi', '55', '455', 0),
(203, 6, 48, 101, 3, 'salwar', '0', '455', 0);

-- --------------------------------------------------------

--
-- Table structure for table `disdetails`
--

CREATE TABLE `disdetails` (
  `det_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `read_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `houseno` varchar(50) NOT NULL,
  `c_id` int(11) NOT NULL,
  `pin_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disdetails`
--

INSERT INTO `disdetails` (`det_id`, `log_id`, `read_id`, `name`, `houseno`, `c_id`, `pin_number`, `email`, `contact`, `date`) VALUES
(13, 54, 188, 'farhana', 'edrftgyuiop', 1, '123', 'sneha1@gmail.com', '9876543219', '2019-05-16 08:50:59'),
(14, 54, 191, 'farhana', '4', 1, '123', 'sneha1@gmail.com', '9876543219', '2019-05-16 08:50:59'),
(15, 54, 0, 'ghn', 'hjn', 2, '123', 'admin@gmail.com', '9562534401', '2019-05-16 08:50:59'),
(16, 54, 0, 'ghn', 'hjn', 2, '123', 'admin@gmail.com', '9562534401', '2019-05-16 08:50:59'),
(17, 54, 0, 'ghn', 'hjn', 2, '123', 'admin@gmail.com', '9562534401', '2019-05-16 08:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `dis_id` int(10) NOT NULL,
  `st_id` int(10) NOT NULL,
  `dis_name` varchar(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dis_id`, `st_id`, `dis_name`, `status`) VALUES
(1, 1, 'kottyam', 1),
(2, 2, 'ptm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dsize`
--

CREATE TABLE `dsize` (
  `dsz_id` int(11) NOT NULL,
  `Hip` int(11) DEFAULT '0',
  `Bust` int(11) DEFAULT '0',
  `Inner_Leg` int(11) DEFAULT '0',
  `Overarm` int(11) DEFAULT '0',
  `Natural_Waist` int(11) DEFAULT '0',
  `Low_Waist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dsize`
--

INSERT INTO `dsize` (`dsz_id`, `Hip`, `Bust`, `Inner_Leg`, `Overarm`, `Natural_Waist`, `Low_Waist`) VALUES
(12, 1, 4, 3, 2, 2, 3),
(13, 3, 2, 3, 3, 3, 3),
(14, 4, 3, 3, 4, 3, 3),
(15, 4, 3, 3, 4, 3, 3),
(16, 2, 2, 2, 2, 3, 3),
(17, 3, 5, 5, 4, 5, 4),
(18, 3, 3, 3, 2, 2, 2),
(19, 3, 3, 3, 2, 2, 2),
(20, 2, 2, 2, 5, 2, 2),
(21, 2, 2, 2, 5, 2, 2),
(22, 2, 3, 3, 4, 6, 4),
(23, 2, 2, 2, 2, 2, 2),
(24, 2, 4, 2, 3, 3, 2),
(25, 2, 2, 7, 6, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `dtype`
--

CREATE TABLE `dtype` (
  `dt_id` int(11) NOT NULL,
  `dtype` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dtype`
--

INSERT INTO `dtype` (`dt_id`, `dtype`, `status`) VALUES
(1, 'cotton', 0),
(2, 'silk', 0),
(3, 'georget', 0),
(4, 'Shiffon', 0),
(5, 'crep', 0),
(6, 'jute silk', 0),
(7, 'jute', 0);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `im_id` int(11) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `image3` varchar(500) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`im_id`, `image1`, `image2`, `image3`, `status`) VALUES
(88, 'project_img2.jpg', 'project_img2.jpg', '', 0),
(89, 'project_img2.jpg', 'project_img2.jpg', 'project_img2.jpg', 0),
(90, 'project_img6.jpg', 'project_img6.jpg', 'project_img6.jpg', 0),
(91, '7.jpg', '7.jpg', '7.jpg', 0),
(92, '8.jpg', '8.jpg', '8.jpg', 0),
(93, '1.jpg', '1.jpg', '1.jpg', 0),
(94, '9.jpg', '9.jpg', '9.jpg', 0),
(95, '2.jpg', '2.jpg', '2.jpg', 0),
(96, 'project_img3.jpg', 'project_img3.jpg', 'project_img3.jpg', 0),
(97, '6.jpg', '6.jpg', '6.jpg', 0),
(98, '3.jpg', '3.jpg', '3.jpg', 0),
(99, '1.jpg', '1.jpg', '1.jpg', 0),
(100, '8.jpg', '8.jpg', '8.jpg', 0),
(101, '5.jpg', '5.jpg', '5.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `image2`
--

CREATE TABLE `image2` (
  `img_id` int(11) NOT NULL,
  `desi_id` int(11) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image2`
--

INSERT INTO `image2` (`img_id`, `desi_id`, `img1`, `img2`, `img3`, `status`) VALUES
(22, 56, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', 0),
(24, 56, 'naji4.jpg', 'naji3.jpg', 'naji2.jpg', 0),
(28, 51, 'sneha4.jpg', 'sneha2.jpg', 'sneha1.jpg', 0),
(29, 48, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', 'download.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', 0),
(31, 48, 'download.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', 'new2.jpg', 0),
(32, 48, 'm22.jpg', 'new2.jpg', 'me6.jpg', 0),
(35, 55, 'me.jpg', 'me5.jpg', 'me2.jpg', 0),
(36, 55, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', 'me.jpg', 'me6.jpg', 0),
(37, 55, 'sneha1.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '', 0),
(38, 51, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', 'm22.jpg', 'new2.jpg', 0),
(39, 51, 'new2.jpg', 'me6.jpg', 'sneha4.jpg', 0),
(47, 54, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '', '', 0),
(48, 54, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '', 0),
(49, 54, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '', '', 0),
(50, 54, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '', '', 0),
(51, 54, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '', '', 0),
(52, 54, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '', '', 0),
(53, 48, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', 0),
(54, 54, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', 0),
(55, 54, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '', 0),
(56, 54, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '', 0),
(57, 54, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '', 0),
(58, 54, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '', 0),
(59, 54, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', 0),
(60, 48, '4c2686ecb84e08679ab1cf322dd3bb6d--fashion-illustration-dresses-fashion-illustrations.jpg', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `role_id` int(10) NOT NULL,
  `status` int(11) NOT NULL,
  `r_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `email`, `pwd`, `role_id`, `status`, `r_id`) VALUES
(48, 'staff@gmail.com', '6ab64131c195b89799a579b3039579ac', 3, 1, 39),
(51, 'sneha@gmail.com', 'd170cf8f53670d218711c42dcb61fb65', 3, 1, 41),
(53, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 1, 0),
(54, 'sneha1@gmail.com', '6ab64131c195b89799a579b3039579ac', 2, 1, 45),
(55, 'mehar@gmail.com', 'b487152af34a36b58a1a8d29b3916c05', 3, 1, 42),
(56, 'naji@gmail.com', 'c83a2c10c7599f31ea55f8f81733347a', 3, 1, 43);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `md_int` int(11) NOT NULL,
  `desi_id` int(11) NOT NULL,
  `md_name` varchar(20) NOT NULL,
  `img_id` int(11) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`md_int`, `desi_id`, `md_name`, `img_id`, `price`) VALUES
(39, 48, 'Sneha', 12, '5000'),
(40, 51, 'MANU designer', 13, '2000'),
(41, 48, 'MANU designer', 14, '2000'),
(49, 56, 'Naji Designer', 22, '2000'),
(50, 56, 'Naji Designer', 23, '3000'),
(52, 51, 'Sneha Designer', 25, '2300'),
(53, 54, 'Sneha Designer', 26, '2500'),
(54, 51, 'Sneha Designer', 27, '5000'),
(55, 51, 'Sneha Designer', 28, '5000'),
(56, 48, 'Mehar Designer', 22, '345'),
(57, 48, 'MANU designer', 30, '4000'),
(58, 48, 'MANU designer', 31, '900'),
(59, 48, 'MANU designer', 32, '2000'),
(124, 54, 'Mehar Designer', 0, '555'),
(125, 54, 'Mehar Designer', 59, '455');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size`) VALUES
(1, 'Small'),
(2, 'Large'),
(3, 'Extra Large'),
(4, 'XXL'),
(5, 'XXXL'),
(6, 'XXS');

-- --------------------------------------------------------

--
-- Table structure for table `sizechart`
--

CREATE TABLE `sizechart` (
  `sc_id` int(11) NOT NULL,
  `sizechart` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sizechart`
--

INSERT INTO `sizechart` (`sc_id`, `sizechart`) VALUES
(10, 'Hip'),
(11, 'Bust'),
(12, 'Inner_Leg'),
(13, 'Overarm'),
(17, 'Natural_Waist'),
(18, 'Low_Waist');

-- --------------------------------------------------------

--
-- Table structure for table `staff_reg`
--

CREATE TABLE `staff_reg` (
  `desi_id` int(15) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `daddress` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `certificate` varchar(200) NOT NULL,
  `email` varchar(15) NOT NULL,
  `dcontact` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_reg`
--

INSERT INTO `staff_reg` (`desi_id`, `dname`, `gender`, `daddress`, `qualification`, `certificate`, `email`, `dcontact`, `status`) VALUES
(39, 'farhana', 'female', 'kunnumpurath', 'mca', 'Project doc.pdf', 'staff@gmail.com', '9876543210', 1),
(41, 'sneha', 'female', 'snehamanzil', 'btechh', 'Abstract for Project Development System.pdf', 'sneha@gmail.com', '9876543219', 1),
(42, 'Mehar', 'female', 'ftcgt', 'btech', 'CHAPTER.pdf', 'mehar@gmail.com', '9876543210', 1),
(43, 'Naji', 'female', 'kunnumpurath', 'btech', 'FRONT PAGE.pdf', 'naji@gmail.com', '9876543213', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`st_id`, `st_name`, `status`) VALUES
(1, 'kerala', 1),
(2, 'tamil nadu', 1),
(3, 'karnataka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminbank`
--

CREATE TABLE `tbl_adminbank` (
  `adbankid` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_adminbank`
--

INSERT INTO `tbl_adminbank` (`adbankid`, `r_id`, `cash`, `status`) VALUES
(38, 54, 2465, 1),
(39, 54, 2465, 1),
(40, 54, 3020, 1),
(41, 54, 2000, 1),
(42, 54, 2000, 1),
(43, 54, 3000, 1),
(44, 54, 15925, 1),
(45, 54, 910, 1),
(46, 54, 2730, 1),
(47, 54, 500, 1),
(48, 54, 500, 1),
(49, 54, 500, 1),
(50, 54, 500, 1),
(51, 54, 500, 1),
(52, 54, 2500, 1),
(53, 54, 2500, 1),
(54, 54, 2500, 1),
(55, 54, 910, 1),
(56, 54, 910, 1),
(57, 54, 910, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `b_id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `cardno` varchar(50) NOT NULL,
  `bankname` varchar(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`b_id`, `username`, `cardno`, `bankname`, `month`, `year`, `cvv`, `cash`, `status`) VALUES
(1, 54, '123456789', 'iob', '02', 2012, 123, 7180, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otp`
--

CREATE TABLE `tbl_otp` (
  `o_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `otp` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_otp`
--

INSERT INTO `tbl_otp` (`o_id`, `email`, `otp`, `status`, `count`) VALUES
(8, 'farhanasalam@mca.ajce.in', '307502', 0, 0),
(9, 'farhanasalam@mca.ajce.in', '671348', 0, 0),
(10, 'farhanasalam@mca.ajce.in', '713014', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `pay_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`pay_id`, `r_id`, `b_id`, `amount`) VALUES
(25, 54, 1, 3020),
(26, 54, 1, 2000),
(27, 54, 1, 2000),
(28, 54, 1, 3000),
(29, 54, 1, 15925),
(30, 54, 1, 910),
(31, 54, 1, 2730),
(32, 54, 1, 500),
(33, 54, 1, 500),
(34, 54, 1, 500),
(35, 54, 1, 500),
(36, 54, 1, 500),
(37, 54, 1, 2500),
(38, 54, 1, 2500),
(39, 54, 1, 2500),
(40, 54, 1, 910),
(41, 54, 1, 910),
(42, 54, 1, 910);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type`) VALUES
(1, 'Cotton'),
(4, 'Jute'),
(6, 'Silk'),
(7, 'Jute'),
(8, 'Cotton Silk');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `r_id` int(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `house_no` varchar(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`r_id`, `name`, `house_no`, `c_id`, `email`, `contact`, `status`) VALUES
(45, 'sneha', 'villa2', 1, 'sneha1@gmail.com', '9873216540', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addsize`
--
ALTER TABLE `addsize`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `allselect`
--
ALTER TABLE `allselect`
  ADD PRIMARY KEY (`al_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `designed`
--
ALTER TABLE `designed`
  ADD PRIMARY KEY (`read_id`);

--
-- Indexes for table `disdetails`
--
ALTER TABLE `disdetails`
  ADD PRIMARY KEY (`det_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `dsize`
--
ALTER TABLE `dsize`
  ADD PRIMARY KEY (`dsz_id`);

--
-- Indexes for table `dtype`
--
ALTER TABLE `dtype`
  ADD PRIMARY KEY (`dt_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`im_id`);

--
-- Indexes for table `image2`
--
ALTER TABLE `image2`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`md_int`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `sizechart`
--
ALTER TABLE `sizechart`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `staff_reg`
--
ALTER TABLE `staff_reg`
  ADD PRIMARY KEY (`desi_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `tbl_adminbank`
--
ALTER TABLE `tbl_adminbank`
  ADD PRIMARY KEY (`adbankid`);

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addsize`
--
ALTER TABLE `addsize`
  MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `allselect`
--
ALTER TABLE `allselect`
  MODIFY `al_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `c_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `designed`
--
ALTER TABLE `designed`
  MODIFY `read_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `disdetails`
--
ALTER TABLE `disdetails`
  MODIFY `det_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `dis_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dsize`
--
ALTER TABLE `dsize`
  MODIFY `dsz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dtype`
--
ALTER TABLE `dtype`
  MODIFY `dt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `im_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `image2`
--
ALTER TABLE `image2`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `md_int` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sizechart`
--
ALTER TABLE `sizechart`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `staff_reg`
--
ALTER TABLE `staff_reg`
  MODIFY `desi_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_adminbank`
--
ALTER TABLE `tbl_adminbank`
  MODIFY `adbankid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `r_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
