-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 02:11 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nano`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=inactive, 1=active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `user_name`, `comment`, `status`, `created_at`) VALUES
(1, 2, 'Nazmul', 'Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.', 1, '2017-07-19 17:57:40'),
(2, 3, 'Hassan', 'Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus.', 0, '2017-07-19 17:57:40'),
(3, 1, 'Masum', 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.', 0, '2017-07-19 17:57:40'),
(4, 1, 'Masum', 'Hello dear.. This is the first comment.', 0, '2017-07-19 20:11:13'),
(5, 1, 'Masum', 'My second comment', 0, '2017-07-19 20:17:09'),
(6, 3, 'Hassan', 'My Third Comment', 1, '2017-07-19 20:18:29'),
(7, 3, 'Hassan', 'This is my second comment', 0, '2017-07-19 20:44:29'),
(8, 2, 'masum', 'hello dear.. One last test comment', 0, '2017-07-19 21:39:21'),
(9, 2, 'Nazmul', 'Can you please approve my comment???', 1, '2017-07-19 21:57:21'),
(10, 2, 'Nazmul', 'Again check', 1, '2017-07-19 22:00:06'),
(11, 1, 'masum', 'I am done with commenting', 1, '2017-07-19 22:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0=Admin;1=User',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `type`, `created_at`) VALUES
(1, 'masum', 'e10adc3949ba59abbe56e057f20f883e', 1, '2017-07-19 19:22:49'),
(2, 'Nazmul', 'e10adc3949ba59abbe56e057f20f883e', 1, '2017-07-19 20:42:43'),
(3, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0, '2017-07-19 21:01:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
