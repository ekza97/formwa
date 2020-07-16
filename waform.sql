-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2020 at 02:31 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waform`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `idorders` int(11) NOT NULL,
  `fullname` varchar(128) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `area` text,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`idorders`, `fullname`, `contact`, `date_birth`, `email`, `area`, `users_id`) VALUES
(17, 'Eko Nuryadi', 'Eko Nuryadi', '2020-07-16', 'nuryadieko1@gmail.com', 'asdasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `fullname` varchar(128) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `link` varchar(5) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `type` enum('super_user','member','free') DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `fullname`, `email`, `username`, `password`, `link`, `contact`, `type`, `is_active`) VALUES
(1, 'Eka Saputra', 'ekza97@gmail.com', '123456', '$2y$10$qWQ3v0M5HdOeKwtIxtI2QOfjMxhuj8ZSFr4TXAgj/apAuhBooJOBO', 'IyJWp', '082248577297', 'super_user', 1),
(2, 'Eko Nuryadi', 'nuryadieko1@gmail.com', '987654', '$2y$10$M7Q5LmMh1zCJm4nwMj2szemARKohqYhvLWI9dMTdTWzNKjBdFyaJW', 'ZFGdM', '082248677297', 'member', 1);

-- --------------------------------------------------------

--
-- Table structure for table `_session`
--

CREATE TABLE `_session` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `timestamp` int(10) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_session`
--

INSERT INTO `_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('10b4f51a3e5e1226440930ee062bd61251efdcf4', '::1', 1594853237, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835333136323b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('1999a2a833c0b08609836f934b4a77d3d6cdebb2', '192.168.1.12', 1594856229, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835363232393b),
('21d378ffe740982031f991dd084936406001e829', '::1', 1594902525, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343930323532353b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('336218a69a59350560af90c5740d1f73fc2835b5', '::1', 1594856036, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835363033363b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('354428456cfef3dd42c8bf9bdc741aa35af9aff8', '::1', 1594901856, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343930313835363b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('36656f9574aeb8f669c189ec770db2cbbdf2678b', '192.168.1.12', 1594857347, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835373334373b),
('3b0dfbcef5f01c48460a3aa8c4fd07095a132a72', '::1', 1594855733, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835353733333b),
('3b81d5d709c6275fe12c313822d8a9903f8d41da', '192.168.1.12', 1594857715, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835373731353b),
('47535fd95e49d54e06ab7542525f639fb7638697', '::1', 1594867833, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343836373833333b),
('54709ca894e86be36adbb7f462177d22c57bad3f', '::1', 1594857835, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835373833353b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('5c79a159a13d509931aeb4304a87de6badff0b3f', '::1', 1594856484, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835363438343b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('776a61d671e61b04a7fcb702d29fd9168737494c', '::1', 1594902197, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343930323139373b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('84f55e025675853509ed163e06c70636bae95e40', '192.168.1.12', 1594857000, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835373030303b),
('87addcb6d9ffc24b02ba50d8fe95bc14f41a76e9', '::1', 1594902631, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343930323532353b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('997ad780d8808fa7b48849bdeb5d69bc98ab5516', '192.168.1.13', 1594857747, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835373534353b),
('a1cb007f4015c715405c958efb09c16ac6b720f1', '192.168.1.12', 1594857694, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835373636343b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('b1cd4f222821aa06aa4e810c66cb7a2e6b511148', '::1', 1594868203, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343836383230333b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('c30a1ac9dde614c3219d3c09b08ca8b249cc6ab3', '::1', 1594857248, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835373234383b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('c69ab803d6d48ad265e608c77a18a723fd1e8df8', '192.168.1.13', 1594857545, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835373534353b),
('cb9da5bfc7575902d33cc97fa90eab1e6ba22b6c', '::1', 1594866319, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343836363331393b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('cf8bf90154b1542ca218236f2649bcc89d144ebb', '::1', 1594868203, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343836383230333b),
('d432f766a7b8a5c291577571ee0c436c90d8730d', '::1', 1594901114, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343930313131343b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('e5125fa1598d64198f5ba6bebd3b936bea7c2f0d', '::1', 1594866652, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343836363635323b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('e856e1c3ae4cd27ece79b29e752281c3c72e7eff', '::1', 1594867086, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343836373038363b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('ea4f6ac6b2422b441fce591209ba918604276c26', '::1', 1594853162, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835333136323b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('ea727e052e457429ad8ef1429cccef95bfb0d5bf', '::1', 1594856839, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835363833393b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('eaf63e88c8ce28663bda1a7638c90bba3c53bd05', '::1', 1594857928, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835373833353b6964757365727c733a313a2231223b66756c6c6e616d657c733a31313a22456b612053617075747261223b656d61696c7c733a31363a22656b7a61393740676d61696c2e636f6d223b757365726e616d657c733a363a22313233343536223b),
('eb5726fe5a455bf4495d11c3216c5d685fb837dc', '192.168.1.12', 1594856531, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835363533313b),
('edda23b643711dcbc5b50f6d4ec7e7f546a1108c', '192.168.1.12', 1594857765, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343835373731353b),
('f8d2d3e4978f2e7e18e6cb9eb5fe11539fb8aa00', '::1', 1594867403, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343836373430333b6964757365727c733a313a2232223b66756c6c6e616d657c733a31313a22456b6f204e757279616469223b656d61696c7c733a32313a226e757279616469656b6f3140676d61696c2e636f6d223b757365726e616d657c733a363a22393837363534223b);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idorders`),
  ADD KEY `fk_orders_users_idx` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- Indexes for table `_session`
--
ALTER TABLE `_session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idorders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
