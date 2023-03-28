-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2021 at 10:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kunal_php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `pname` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL,
  `contac` varchar(80) NOT NULL,
  `gst` varchar(80) NOT NULL,
  `file1` varchar(80) NOT NULL,
  `bank_name` varchar(80) NOT NULL,
  `ac_no` varchar(80) NOT NULL,
  `ifsc` varchar(80) NOT NULL,
  `branch` varchar(80) NOT NULL,
  `userid` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `added_by`, `fname`, `pname`, `address`, `contac`, `gst`, `file1`, `bank_name`, `ac_no`, `ifsc`, `branch`, `userid`, `password`, `email`) VALUES
(1, 1, 'admin', 'admin', '', '', '', '', '', '', '', '', 'admin@123', 'admin@123', 'admin@gmail.com'),
(2, 1, 'AK fashion', 'AK fashion', 'solapur', '9898999999', '12122', '08526cfadc7fa1b55276b8efd23f19ba.jpg', 'sbi', '10000000000', '1000000000000000', 'ifsc000000', 'akfashion@gmail.com', 'akfashion@gmail.com', 'akfashion@gmail.com'),
(3, 1, 'sv branch', 'sv branch', 'addr2', '23232', '222', 'appstore.png', 'kotak', '393949439333', 'ifscsvbranch', 'sv branch', 'sv@gmail.com', 'sv@gmail.com', 'sv@gmail.com'),
(4, 1, 's', 's', 's', 's', 's', 'Screenshot from 2021-04-10 11-46-09.png', 's', 's', 's', 's', 's', 's', 's');

-- --------------------------------------------------------

--
-- Table structure for table `bottom_style`
--

CREATE TABLE `bottom_style` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bottom_style`
--

INSERT INTO `bottom_style` (`id`, `added_by`, `name`) VALUES
(1, 1, 'wef'),
(2, 1, 'bottomStyle'),
(3, 1, 'btn'),
(4, 1, 'bottom stle');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `added_by`, `name`) VALUES
(1, 0, 'aaa'),
(2, 2, 'asas'),
(3, 2, 'brand');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cname` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cname`) VALUES
(111, ''),
(112, 'tt'),
(113, 'sss'),
(114, ''),
(115, 'sss'),
(116, ''),
(117, 'ddss'),
(118, ''),
(119, 'ss'),
(120, ''),
(121, 'aa'),
(122, 'sss'),
(123, 'shubham '),
(124, ''),
(125, ''),
(126, '126'),
(127, 'test'),
(128, 'know');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `added_by`, `name`) VALUES
(1, 2, 'blue'),
(2, 1, 'green'),
(3, 2, 'yellow'),
(4, 2, 'gray'),
(5, 2, 'black'),
(6, 2, 'purple'),
(7, 2, 'red'),
(8, 1, 'lavender'),
(9, 1, 'gray');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `cname` varchar(80) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `lcontact` varchar(14) NOT NULL,
  `caddress` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `cstate` varchar(80) NOT NULL,
  `pan` varchar(11) NOT NULL,
  `bank_name` varchar(80) NOT NULL,
  `acc_no` varchar(20) NOT NULL,
  `gst_number` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `added_by`, `fname`, `cname`, `contact`, `lcontact`, `caddress`, `email`, `cstate`, `pan`, `bank_name`, `acc_no`, `gst_number`) VALUES
(1, 0, 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's'),
(2, 0, 'hard output', 'shubham', '33', '', 'ass', 'x', '2', 's', '2', '2', '2'),
(3, 0, 'c', 'c', 'cc', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c'),
(4, 0, 'firm', 'name', 'Contact', 'Landline', 'Address', 'Email Id :', 'State', 'Pan C', 'Bank', 'A/C ', 'GST'),
(5, 2, 'sid', 's', 's', 's', 's', 's', 's', 's', 's', 'ss', 's'),
(6, 1, '', 's', 's', '', '', '', '', '', '', '', ''),
(7, 1, 'shbha', '', '222222222', '', '', '', '', '', '', '', ''),
(8, 1, 'test Customer', '', '222211', '', '', '', '', '', '', '', ''),
(9, 1, 'KUNAL', '', '9595', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `uname` varchar(80) NOT NULL,
  `contact` varchar(80) NOT NULL,
  `lcontact` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `states` varchar(80) NOT NULL,
  `bank_name` varchar(80) NOT NULL,
  `acc_no` varchar(80) NOT NULL,
  `pan` varchar(80) NOT NULL,
  `adhar` varchar(80) NOT NULL,
  `gstcust` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `added_by`, `uname`, `contact`, `lcontact`, `address`, `email`, `states`, `bank_name`, `acc_no`, `pan`, `adhar`, `gstcust`) VALUES
(1, 0, 's', 's', 's', 's', 's', '', 's', 's', 's', 's', 1),
(2, 0, 'Unit', 'c', 'l', 'a', 'e', '', 'bk', 'ac', 'pa', 'adgh', 0),
(3, 0, 'un', 'cn', 'l', 'ad', 'email', '', 'bnk', 'acc', 'pan', 'adhar', 0),
(4, 0, 'u', 'c', 'l', 'add', 'em', 'state', 'bnk', 'acc', 'pan', 'adhar', 1),
(5, 2, 'empid', 'csa', 'sa', 'as', 'c', 'c', 'c', 'c', 'c', 'c', 1),
(6, 2, 'e', 'e', 'ee', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 1),
(7, 2, 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 1),
(8, 2, 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fabric`
--

CREATE TABLE `fabric` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fabric`
--

INSERT INTO `fabric` (`id`, `added_by`, `name`) VALUES
(1, 1, 'fabric');

-- --------------------------------------------------------

--
-- Table structure for table `fitting`
--

CREATE TABLE `fitting` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fitting`
--

INSERT INTO `fitting` (`id`, `added_by`, `name`) VALUES
(1, 1, 'fitting');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `role` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `role`, `email`, `password`) VALUES
(1, 1, 's@gmail.com', '123'),
(2, 2, 'shubhamhatagale02@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `main_purchase`
--

CREATE TABLE `main_purchase` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `fid` varchar(80) NOT NULL,
  `invoice` varchar(80) NOT NULL,
  `date_time` varchar(80) NOT NULL,
  `suppliers` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_purchase`
--

INSERT INTO `main_purchase` (`id`, `added_by`, `fid`, `invoice`, `date_time`, `suppliers`) VALUES
(1, 1, 'AK fashion', '1001', '2021-04-21', 'supplier'),
(2, 1, 'AK fashion', '0002', '2021-04-22', 's');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_rows`
--

CREATE TABLE `purchase_rows` (
  `id` int(11) NOT NULL,
  `purchase_row_id` int(11) NOT NULL,
  `prod_code` varchar(80) NOT NULL,
  `prod_name` varchar(80) NOT NULL,
  `prod_qty` varchar(80) NOT NULL,
  `purchase_price` varchar(80) NOT NULL,
  `sale_price` varchar(80) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_rows`
--

INSERT INTO `purchase_rows` (`id`, `purchase_row_id`, `prod_code`, `prod_name`, `prod_qty`, `purchase_price`, `sale_price`, `total`) VALUES
(1, 1, '1001', 'salwar ka,eez', '10', '100', '200', 1000),
(2, 2, '0002', 'suit', '5', '50', '100', 250);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_variations`
--

CREATE TABLE `purchase_variations` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `purchase_row_id` int(11) NOT NULL,
  `colorId` varchar(80) NOT NULL,
  `sizeId` varchar(80) NOT NULL,
  `qty` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_variations`
--

INSERT INTO `purchase_variations` (`id`, `purchase_row_id`, `colorId`, `sizeId`, `qty`) VALUES
(0000000001, 1, 'blue', 's', '2'),
(0000000002, 1, 'green', 's', '2'),
(0000000003, 1, 'yellow', 's', '2'),
(0000000004, 1, 'gray', 's', '2'),
(0000000005, 1, 'black', 's', '2'),
(0000000006, 2, 'blue', 's', '2'),
(0000000007, 2, 'black', 's', '1'),
(0000000008, 2, 'yellow', 'xl', '2');

-- --------------------------------------------------------

--
-- Table structure for table `returned_products`
--

CREATE TABLE `returned_products` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `customer` varchar(500) NOT NULL,
  `invoice` varchar(11) NOT NULL,
  `memo` varchar(500) NOT NULL,
  `firm` varchar(500) NOT NULL,
  `date_time` varchar(500) NOT NULL,
  `all_totals` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `returned_products`
--

INSERT INTO `returned_products` (`id`, `added_by`, `customer`, `invoice`, `memo`, `firm`, `date_time`, `all_totals`) VALUES
(1, 1, 'firm', 'w2', 'wq', 'admin', '2021-04-12', 300),
(2, 1, 'firm', 'w2', 'wq', 'admin', '2021-04-12', 300),
(3, 1, 'firm', 'w2', 'wq', 'admin', '2021-04-12', 300),
(4, 1, 'firm', 'w2', 'wq', 'admin', '2021-04-12', 300),
(5, 1, 'firm', 'w2', 'wq', 'admin', '2021-04-12', 300),
(6, 1, 'firm', 'w2', 'wq', 'admin', '2021-04-12', 300),
(7, 1, 'firm', 'w2', 'wq', 'admin', '2021-04-12', 300),
(8, 1, 'firm', 'w2', 'wq', 'admin', '2021-04-12', 300),
(9, 1, 'firm', 'w2', 'wq', 'admin', '2021-04-12', 300),
(10, 1, 'firm', 'w2', 'wq', 'admin', '2021-04-12', 300),
(11, 1, 'firm', 'w2', 'wq', 'admin', '2021-04-12', 300),
(12, 1, 'firm', 'w2', 'wq', 'admin', '2021-04-12', 300);

-- --------------------------------------------------------

--
-- Table structure for table `returned_product_var`
--

CREATE TABLE `returned_product_var` (
  `id` int(11) NOT NULL,
  `purchase_row_id` int(11) NOT NULL,
  `prod_name` varchar(80) NOT NULL,
  `qty` int(11) NOT NULL,
  `sale_prize` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `returned_product_var`
--

INSERT INTO `returned_product_var` (`id`, `purchase_row_id`, `prod_name`, `qty`, `sale_prize`, `total`) VALUES
(1, 1, '001 epsoline blue s 1', 2, 150, 150),
(2, 1, '001 epsoline green m 1', 1, 150, 150),
(3, 2, '001 epsoline blue s 1', 2, 150, 150),
(4, 2, '001 epsoline green m 1', 2, 150, 150),
(5, 3, '001 epsoline blue s 1', 2, 150, 150),
(6, 3, '001 epsoline green m 1', 1, 150, 150),
(7, 4, '001 epsoline blue s 1', 3, 150, 150),
(8, 4, '001 epsoline green m 1', 3, 150, 150),
(9, 5, '001 epsoline blue s 1', 4, 150, 150),
(10, 5, '001 epsoline green m 1', 3, 150, 150),
(11, 6, '001 epsoline blue s 1', 4, 150, 150),
(12, 6, '001 epsoline green m 1', 4, 150, 150),
(13, 7, '001 epsoline blue s 1', 4, 150, 150),
(14, 7, '001 epsoline green m 1', 4, 150, 150),
(15, 8, '001 epsoline blue s 1', 2, 150, 150),
(16, 8, '001 epsoline green m 1', 2, 150, 150),
(17, 9, '001 epsoline blue s 1', 2, 150, 150),
(18, 9, '001 epsoline green m 1', 2, 150, 150),
(19, 10, '001 epsoline blue s 1', 2, 150, 150),
(20, 10, '001 epsoline green m 1', 2, 150, 150),
(21, 11, '001 epsoline blue s 1', 2, 150, 150),
(22, 11, '001 epsoline green m 1', 2, 150, 150),
(23, 12, '001 epsoline blue s 1', 5, 150, 150),
(24, 12, '001 epsoline green m 1', 5, 150, 150);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `added_by`, `name`) VALUES
(1, 2, 's'),
(2, 2, 'm'),
(3, 2, 'l'),
(4, 2, 'xl'),
(5, 2, 'xxl'),
(6, 1, 'xs');

-- --------------------------------------------------------

--
-- Table structure for table `sleaves`
--

CREATE TABLE `sleaves` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sleaves`
--

INSERT INTO `sleaves` (`id`, `added_by`, `name`) VALUES
(1, 1, 'sleave');

-- --------------------------------------------------------

--
-- Table structure for table `solded_products`
--

CREATE TABLE `solded_products` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `firm` varchar(80) NOT NULL,
  `invoice` varchar(80) NOT NULL,
  `memo` varchar(80) NOT NULL,
  `date_time` varchar(80) NOT NULL,
  `suppliers` varchar(80) NOT NULL,
  `all_totals` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solded_products`
--

INSERT INTO `solded_products` (`id`, `added_by`, `firm`, `invoice`, `memo`, `date_time`, `suppliers`, `all_totals`) VALUES
(1, 1, 'AK fashion', '2122', '22', '2021-04-12', 'hard output', '0'),
(2, 1, 'AK fashion', '2122', '22', '2021-04-12', 'hard output', '0'),
(3, 1, 'admin', 'w1', 'wq', '2021-04-12', 'firm', '0'),
(4, 1, 'admin', 'w', 'wq', '2021-04-12', 'firm', '0'),
(5, 1, 'admin', 'w2', 'wq', '2021-04-12', 'firm', '300'),
(6, 1, 'admin', '2', '2', '2021-04-13', 's', '0'),
(7, 1, 'firm', '18', '2', '2021-04-13', 'c', '0'),
(8, 1, 'firm1', '3', '5', '2021-04-14', 'hard output', '8'),
(9, 1, 'firm2', '4', 'test', '2021-04-16', 'hard output', '150'),
(10, 1, 'firm3', '5', '212', '2021-04-16', 'firm', '300'),
(11, 1, 'firm4', '6', '212', '2021-04-16', 'firm', '300'),
(12, 1, 'firm5', '101', '201', '2021-04-17', 'test Customer', '150'),
(13, 1, '', '22', '2', '2021-04-20', 'hard output', '0'),
(14, 1, '', '23', '232', '2021-04-20', 'shbha', '1200'),
(15, 1, '', '', '15', '2021-04-20', 'KUNAL', '750'),
(16, 1, '', '', '22', '2021-04-20', 'KUNAL', '1500'),
(17, 1, '', '', '22', '2021-04-20', 'test Customer', '300'),
(18, 1, '', '18', '22', '2021-04-20', 'test Customer', '300'),
(19, 1, '', '19', '22', '2021-04-20', 'test Customer', '150'),
(20, 1, '', '20', '2', '2021-04-20', 'firm', '750');

-- --------------------------------------------------------

--
-- Table structure for table `solded_prod_var`
--

CREATE TABLE `solded_prod_var` (
  `id` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `purchase_row_id` int(11) NOT NULL,
  `prod_name` varchar(80) NOT NULL,
  `sale_prize` varchar(80) NOT NULL,
  `sqty` varchar(80) NOT NULL,
  `total` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solded_prod_var`
--

INSERT INTO `solded_prod_var` (`id`, `vid`, `purchase_row_id`, `prod_name`, `sale_prize`, `sqty`, `total`) VALUES
(8, 1, 7, '1 shirts blue s 4', '200', '10', '0'),
(9, 1000000001, 8, '1 yoyo blue s 4', '4', '20', '8'),
(10, 1, 9, '001 epsoline blue s 2', '150', '20', '150'),
(11, 2, 3, '001 epsoline green m 2', '150', '30', '150'),
(12, 1, 5, '001 epsoline blue s 1', '150', '25', '150'),
(13, 2, 5, '001 epsoline green m 1', '150', '25', '150'),
(14, 1, 12, '001 epsoline blue s 2', '150', '1', '150'),
(15, 1, 13, '001 epsoline blue s 5', '150', '6', '0'),
(16, 2, 14, '002 epsoline2 green m 58', '150', '3', '450'),
(17, 1, 14, '001 epsoline blue s 50', '150', '5', '750'),
(18, 1, 15, '001 epsoline blue s 55', '150', '5', '750'),
(19, 1, 16, '001 epsoline blue s 50', '150', '10', '1500'),
(20, 1, 17, '001 epsoline blue s 40', '150', '2', '300'),
(21, 1, 18, '001 epsoline blue s 38', '150', '2', '300'),
(22, 1, 19, '001 epsoline blue s 36', '150', '1', '150'),
(23, 2, 20, '002 epsoline2 green m 55', '150', '5', '750');

-- --------------------------------------------------------

--
-- Table structure for table `stock_transfer_products`
--

CREATE TABLE `stock_transfer_products` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `from_firm` varchar(80) NOT NULL,
  `date_time` varchar(80) NOT NULL,
  `to_firm` varchar(80) NOT NULL,
  `remark` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_transfer_products`
--

INSERT INTO `stock_transfer_products` (`id`, `added_by`, `from_firm`, `date_time`, `to_firm`, `remark`) VALUES
(1, 1, 'AK fashion', '2021-04-20', 'sv branch', 'remark'),
(2, 1, 'AK fashion', '2021-04-20', 'AK fashion', '44'),
(3, 1, 'AK fashion', '2021-04-20', 'AK fashion', ''),
(4, 1, 'AK fashion', '2021-04-20', 'sv branch', 'eee');

-- --------------------------------------------------------

--
-- Table structure for table `stock_transfer_variation`
--

CREATE TABLE `stock_transfer_variation` (
  `id` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `transfer_row_id` int(11) NOT NULL,
  `prod_name` varchar(80) NOT NULL,
  `qty` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_transfer_variation`
--

INSERT INTO `stock_transfer_variation` (`id`, `vid`, `transfer_row_id`, `prod_name`, `qty`) VALUES
(1, 1, 1, '001 epsoline blue s 45', '5'),
(2, 1, 2, '001 epsoline blue s 40', '0'),
(3, 1, 3, '001 epsoline blue s 40', '45'),
(4, 2, 4, '002 epsoline2 green m 55', '60');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `added_by`, `name`) VALUES
(1, 1, 'akshata');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `cname` varchar(80) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `lcontact` varchar(20) NOT NULL,
  `caddress` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `cstate` varchar(80) NOT NULL,
  `pan` varchar(12) NOT NULL,
  `bank_name` varchar(80) NOT NULL,
  `acc_no` varchar(80) NOT NULL,
  `gst_number` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `added_by`, `fname`, `cname`, `contact`, `lcontact`, `caddress`, `email`, `cstate`, `pan`, `bank_name`, `acc_no`, `gst_number`) VALUES
(1, 0, 'supplier', 'supplier', 'con', 'supplier', 'supplieradd', 'supplier', 'supplier', 'supplier', 'supplier', 'supplier', 'supplier'),
(2, 0, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(3, 0, 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's'),
(4, 0, 'Firm Name', 'Name ', ' Contact :', 'Landline', 'Address :', 'Email', 'State Name :', 'Pan Card :', 'Bank Name :', ' A/C No :', 'GST No :'),
(5, 2, 'suppid', 'suppid', 'suppid', 'suppid', 'suppid', 'suppid', 'suppid', 'suppid', 'suppid', 'suppid', 'suppid'),
(6, 2, 'q', 'qq', 'q', '22', 'q', 'q', 'q', 'q', 'qq', 'q', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `tmpfoo`
--

CREATE TABLE `tmpfoo` (
  `mykey` int(6) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmpfoo`
--

INSERT INTO `tmpfoo` (`mykey`) VALUES
(000001),
(000002);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `added_by`, `name`) VALUES
(1, 2, 'aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bottom_style`
--
ALTER TABLE `bottom_style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabric`
--
ALTER TABLE `fabric`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitting`
--
ALTER TABLE `fitting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_purchase`
--
ALTER TABLE `main_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_rows`
--
ALTER TABLE `purchase_rows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_variations`
--
ALTER TABLE `purchase_variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returned_products`
--
ALTER TABLE `returned_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returned_product_var`
--
ALTER TABLE `returned_product_var`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sleaves`
--
ALTER TABLE `sleaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solded_products`
--
ALTER TABLE `solded_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solded_prod_var`
--
ALTER TABLE `solded_prod_var`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_transfer_products`
--
ALTER TABLE `stock_transfer_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_transfer_variation`
--
ALTER TABLE `stock_transfer_variation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmpfoo`
--
ALTER TABLE `tmpfoo`
  ADD PRIMARY KEY (`mykey`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bottom_style`
--
ALTER TABLE `bottom_style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fabric`
--
ALTER TABLE `fabric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fitting`
--
ALTER TABLE `fitting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_purchase`
--
ALTER TABLE `main_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_rows`
--
ALTER TABLE `purchase_rows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_variations`
--
ALTER TABLE `purchase_variations`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `returned_products`
--
ALTER TABLE `returned_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `returned_product_var`
--
ALTER TABLE `returned_product_var`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sleaves`
--
ALTER TABLE `sleaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `solded_products`
--
ALTER TABLE `solded_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `solded_prod_var`
--
ALTER TABLE `solded_prod_var`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `stock_transfer_products`
--
ALTER TABLE `stock_transfer_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock_transfer_variation`
--
ALTER TABLE `stock_transfer_variation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tmpfoo`
--
ALTER TABLE `tmpfoo`
  MODIFY `mykey` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
