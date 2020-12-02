-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 08:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hemal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'hemal', '1342000');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(10) NOT NULL,
  `fertiname` varchar(20) NOT NULL,
  `brandname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `fertiname`, `brandname`) VALUES
(1, 'UREA', 'IFFCO'),
(2, 'UREA', 'MANGLA'),
(3, 'UREA', 'SPIC'),
(14, 'UREA', 'JAY KISHAN'),
(15, 'DAP', 'SIKKO'),
(16, 'DAP', 'SPIC'),
(17, 'DAP', 'IFFCO'),
(21, 'SSP', 'SARDAR'),
(22, 'SSP', 'KHETAN'),
(23, 'SSP', 'KAMAL'),
(25, 'SOP', 'JAY KISHAN'),
(26, 'SOP', 'IPL'),
(27, 'UREA', 'NAGAARJUNA'),
(29, 'UREA', 'IPL'),
(31, 'MOP', 'IPL'),
(32, 'MOP', 'MAHADHAN'),
(33, 'MOP', 'SIKKOBRAND'),
(34, 'DAP', 'MANGLA'),
(35, 'DAP', 'NARMDA'),
(36, 'MOP', 'MANGLA'),
(37, 'MOP', 'JAY KISHAN'),
(38, 'SSP', 'MAHADHAN');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `id` int(10) NOT NULL,
  `fename` varchar(50) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`id`, `fename`, `bname`, `img`, `qty`, `price`) VALUES
(11, 'SOP', 'Jay Kishan', 'sop1.jpg', 0, 220),
(14, 'DAP', 'IFFCO', 'dap3.jpg', 0, 1125),
(20, 'UREA', 'SPIC', 'u4.jpg', 18, 270),
(21, 'SSP', 'KHETAN', 'ssp3.jpg', 53, 362),
(22, 'SOP', 'YARA', 'sop5.jpg', 8, 230),
(23, 'DAP', 'SPIC', 'dap2.jpg', 1, 1125),
(26, 'MAP', 'IPL', 'm2.png', 20, 910),
(27, 'UREA', 'MANGLA', 'u1.jpg', 30, 274),
(28, 'MOP', 'IPL', 'ipl840.jpg', 20, 840),
(29, 'MOP', 'MAHADHAN', 'mahadhan810.jpg', 20, 810),
(30, 'UREA', 'JAY KISHAN', 'jaykishan802.jpg', 20, 802),
(31, 'UREA', 'NAGAARJUNA', 'nagarjuna271.jpg', 30, 271),
(32, 'DAP', 'IFFCO', 'iffco1125.jpg', 40, 1125),
(33, 'DAP', 'MANGLA', 'mangla1110.jpg', 50, 1110),
(34, 'DAP', 'NARMDA', 'NARMDA1080.jpg', 38, 1080),
(35, 'MOP', 'JAY KISHAN', 'jaykishan802.jpg', 50, 802),
(36, 'SSP', 'MAHADHAN', 'mahadhan270.jpg', 30, 270),
(37, 'SOP', 'JAY KISHAN', 'jaykishan720.jpg', 29, 720);

-- --------------------------------------------------------

--
-- Table structure for table `ferti_delivery`
--

CREATE TABLE `ferti_delivery` (
  `d_id` int(10) NOT NULL,
  `order_date` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mo` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `fename` varchar(30) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` float NOT NULL,
  `total_amt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ferti_delivery`
--

INSERT INTO `ferti_delivery` (`d_id`, `order_date`, `fname`, `mo`, `address`, `email`, `city`, `pincode`, `fename`, `bname`, `qty`, `price`, `total_amt`) VALUES
(1, '2019-04-28', 'kishan', '9897867566', 'sarsa', 'q@gmail.com', 'sarsa', '387867', 'MOP', 'Spic', 1, 470, 470),
(2, '2019-04-28', 'kishan', '9897867566', 'sarsa', 'q@gmail.com', 'sarsa', '387867', 'MOP', 'Spic', 2, 470, 940),
(6, '2019-04-29', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'SOP', 'Jay Kishan', 2, 220, 440),
(8, '2019-04-30', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'SOP', 'Jay Kishan', 2, 220, 440),
(14, '2019-05-01', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'SOP', 'Jay Kishan', 34, 220, 7480),
(19, '2019-05-02', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'SSP', 'KHETAN', 2, 230, 460),
(20, '2019-05-02', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'DAP', 'IFFCO', 0, 470, 0),
(21, '2019-05-02', 'kishan', '9897867566', 'sarsa', 'q@gmail.com', 'sarsa', '387867', 'MOP', 'Spic', 1, 470, 470),
(22, '2019-05-02', 'kishan', '9897867566', 'sarsa', 'q@gmail.com', 'sarsa', '387867', 'UREA', 'SPIC', 1, 240, 240),
(23, '2019-05-02', 'rutvik', '9876887998', 'mahemdabad', 'Happy@student.aau.in', 'mahemdabad', '563838', 'SSP', 'KHETAN', 1, 230, 230),
(24, '2019-05-02', 'kishan', '9897867566', 'sarsa', 'q@gmail.com', 'sarsa', '387867', 'SOP', 'Jay Kishan', 1, 220, 220),
(25, '2019-05-02', 'kishan', '9897867566', 'sarsa', 'q@gmail.com', 'sarsa', '387867', 'DAP', 'SPIC', 1, 230, 230),
(26, '2019-05-02', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'SOP', 'Jay Kishan', 1, 220, 220),
(27, '2019-05-02', 'patel kishan sachinbhai', '6787567898', 'sarsa', 'kishanp11099@gmail.com', 'anand', '388110', 'MOP', 'Spic', 1, 470, 470),
(30, '2019-05-02', 'patel kishan sachinbhai', '6787567898', 'sarsa', 'kishanp11099@gmail.com', 'anand', '388110', 'SOP', 'Jay Kishan', 1, 220, 220),
(31, '2019-05-03', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'DAP', 'SPIC', 7, 230, 1610),
(32, '2019-05-03', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'SOP', 'Jay Kishan', 1, 220, 220),
(35, '05-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'SOP', 'YARA', 1, 230, 230),
(36, '05-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'SOP', 'YARA', 1, 230, 230),
(37, '05-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'SOP', 'YARA', 1, 230, 230),
(38, '05-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'SOP', 'YARA', 1, 230, 230),
(39, '05-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'SOP', 'YARA', 1, 230, 230),
(40, '05-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'DAP', 'SPIC', 1, 230, 230),
(41, '06-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'DAP', 'SPIC', 1, 230, 230),
(42, '07-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'SOP', 'Jay Kishan', 0, 220, 0),
(43, '08-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'DAP', 'SPIC', 1, 230, 230),
(44, '11-05-2019', 'tushar', '9897867888', 'dhrol', 'lokhiltusharm@gmail.com', 'jamnagar', '361210', 'DAP', 'SPIC', 3, 230, 690),
(45, '11-05-2019', 'virat chaudhari', '9986868656', 'modasa', 'viratchaudharicv6143@gmail.com', 'modasa', '424682', 'SOP', 'Jay Kishan', 2, 220, 440),
(46, '11-05-2019', 'raj gatta', '9856985666', 'anand', 'rajthacker449@gmail.com', 'anand', '388001', 'SOP', 'Jay Kishan', 1, 220, 220),
(47, '11-05-2019', 'raj gatta', '9856985666', 'anand', 'rajthacker449@gmail.com', 'anand', '388001', 'SOP', 'YARA', 16, 230, 3680),
(48, '11-05-2019', 'raj gatta', '9856985666', 'anand', 'rajthacker449@gmail.com', 'anand', '388001', 'SOP', 'Jay Kishan', 10, 220, 2200),
(49, '18-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'DAP', 'SPIC', 1, 230, 230),
(50, '18-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'MOP', 'MAHADHAN', 1, 230, 230),
(51, '21-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'DAP', 'SPIC', 1, 1125, 1125),
(52, '21-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'DAP', 'SPIC', 1, 1125, 1125),
(53, '21-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'DAP', 'SPIC', 1, 1125, 1125),
(54, '21-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'MOP', 'Spic', 1, 872, 872),
(55, '21-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'DAP', 'IFFCO', 1, 1125, 1125),
(56, '21-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'MOP', 'Spic', 1, 872, 872),
(57, '21-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'DAP', 'SPIC', 1, 1125, 1125),
(58, '21-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'SSP', 'KHETAN', 1, 362, 362),
(59, '21-05-2019', 'hemal', '9897857687', 'mahemdabad', 'hemalhvp@gmail.com', 'mahemdabad', '387430', 'MOP', 'Spic', 1, 872, 872),
(60, '21-05-2019', 'keyur', '8789898787', 'gondal', 'keyurd.marakna@gmail.com', 'gondal', '345456', 'DAP', 'NARMDA', 1, 1080, 1080),
(61, '21-05-2019', 'keyur', '8789898787', 'gondal', 'keyurd.marakna@gmail.com', 'gondal', '345456', 'DAP', 'NARMDA', 1, 1080, 1080),
(62, '21-05-2019', 'keyur', '8789898787', 'gondal', 'keyurd.marakna@gmail.com', 'gondal', '345456', 'SOP', 'YARA', 1, 230, 230),
(63, '21-05-2019', 'keyur', '8789898787', 'gondal', 'keyurd.marakna@gmail.com', 'gondal', '345456', 'SOP', 'JAY KISHAN', 1, 720, 720);

-- --------------------------------------------------------

--
-- Table structure for table `ferti_name`
--

CREATE TABLE `ferti_name` (
  `ferti_id` int(10) NOT NULL,
  `fertiname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ferti_name`
--

INSERT INTO `ferti_name` (`ferti_id`, `fertiname`) VALUES
(1, 'UREA'),
(2, 'DAP'),
(3, 'MOP'),
(5, 'SSP'),
(8, 'SOP');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `mo` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `address`, `city`, `pincode`, `mo`, `email`, `uname`, `pass`) VALUES
(4, 'hemal', 'mahemdabad', 'mahemdabad', '387430', '9897857687', 'hemalhvp@gmail.com', 'hvp', 'hemal1342000'),
(7, 'rutvik', 'mahemdabad', 'mahemdabad', '563838', '9876887998', 'Happy@student.aau.in', 'rj', '5678tyui'),
(8, 'patel sajan', 'ahemdabad', 'ahemdabad', '359876', '9878675645', 'sajan.patel@gmail.com', 'sajan', '1234qwer!@'),
(9, 'virat chaudhari', 'modasa', 'modasa', '424682', '9986868656', 'viratchaudharicv6143@gmail.com', 'virat', '123qwe!@#'),
(10, 'keyur', 'gondal', 'gondal', '345456', '8789898787', 'keyurd.marakna@gmail.com', 'keyur', '1234qwer!@'),
(11, 'patel kishan sachinbhai', 'sarsa', 'anand', '388110', '6787567898', 'kishanp11099@gmail.com', 'kishan@patel', '1234!@#$qwer'),
(19, 'tushar', 'dhrol', 'jamnagar', '361210', '9897867888', 'lokhiltusharm@gmail.com', 'The_vishva', 'abc123@1'),
(20, 'raj gatta', 'anand', 'anand', '388001', '9856985666', 'rajthacker449@gmail.com', 'gatta', '123qwe!@#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fertilizer`
--
ALTER TABLE `fertilizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ferti_delivery`
--
ALTER TABLE `ferti_delivery`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `ferti_name`
--
ALTER TABLE `ferti_name`
  ADD PRIMARY KEY (`ferti_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `fertilizer`
--
ALTER TABLE `fertilizer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `ferti_delivery`
--
ALTER TABLE `ferti_delivery`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `ferti_name`
--
ALTER TABLE `ferti_name`
  MODIFY `ferti_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
