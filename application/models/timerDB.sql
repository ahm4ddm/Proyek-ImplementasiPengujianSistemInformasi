-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2021 at 06:56 PM
-- Server version: 5.6.48
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timerDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `pomodoros`
--

CREATE TABLE `pomodoros` (
  `id` smallint(8) NOT NULL,
  `totalwaktu` int(11) NOT NULL,
  `tmpwaktu` float NOT NULL DEFAULT '0.41',
  `id_user` smallint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` smallint(8) NOT NULL,
  `catatan` text NOT NULL,
  `status` char(10) NOT NULL DEFAULT 'do',
  `id_user` smallint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(8) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pomodoros`
--
ALTER TABLE `pomodoros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_POMODOROS_ID_USER` (`id_user`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ID_USER` (`id_user`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pomodoros`
--
ALTER TABLE `pomodoros`
  MODIFY `id` smallint(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` smallint(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(8) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pomodoros`
--
ALTER TABLE `pomodoros`
  ADD CONSTRAINT `FK_POMODOROS_ID_USER` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `todos`
--
ALTER TABLE `todos`
  ADD CONSTRAINT `FK_ID_USER` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `reset_time_users_history_by_week` ON SCHEDULE EVERY 1 WEEK STARTS '2021-11-10 00:00:00' ON COMPLETION PRESERVE ENABLE DO UPDATE pomodoros SET tmpwaktu=1$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
