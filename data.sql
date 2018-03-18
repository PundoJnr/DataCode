-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 01:36 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id_number` int(11) NOT NULL,
  `names` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pasword` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id_number`, `names`, `email`, `pasword`, `image`, `image_name`) VALUES
(3236987, 'Lewis Orenge', 'lewisorenge@gmail.com', 'freeman78', 'img/defender_shot_2_32_12_2.png', 'defender_shot_2_32_12_2.png'),
(12345678, 'Ephantus Kinyanjui', 'efantusk@gmail.com', 'AsdfghjkL', 'img/invander_boss_140_98_2_2.png', 'invander_boss_140_98_2_2.png'),
(33932717, 'Sawe Peter', 'sawepeter6@gmail.com', 'qwertyuiop', 'img/splash.PNG', 'splash.PNG'),
(34598024, 'Brian Okinyi', 'brianokinyi.bo@gmail.com', 'BOOFboof999', 'img/WIN_20180317_16_14_03_Pro.jpg', 'WIN_20180317_16_14_03_Pro.jpg'),
(35050396, 'Arthur Sidney', 'pundoarthur@gmail.com', '123456789', 'img/Capture.PNG', 'Capture.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_number`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
