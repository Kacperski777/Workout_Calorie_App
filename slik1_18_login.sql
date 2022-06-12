-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 172.16.11.22:3306
-- Generation Time: Apr 27, 2021 at 06:45 PM
-- Server version: 10.1.48-MariaDB-0+deb9u1
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slik1_18_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Kacper Sliwinski', 'kacpermmlp@gmail.com', 'Kaz1', '$2y$10$284M46/TA86lAGfpeMGdK.STbbJc..kOjN8f44ZsBhbEBd0Z4mPWK'),
(2, 'Jack Stones', 'jackstones1@yahoo.co.uk', 'JackStones000', '$2y$10$0xhwkw10gf.lqinDA.DA.u5WFq3KYcOvnduZdhtmOPVmWxnoRbSIa'),
(3, 'Chris Hart', 'chrishart939@gmail.com', 'ChrisH', '$2y$10$q/Bxyf0s1gqzD4b6YPX8/.DA/nsAaIFM4C.6zQ84xvMvPhtF1xsIq'),
(4, 'Chris Hart', 'stevejobs@gmail.com', 'wwww', '$2y$10$wgZMVUhV5j/TzMt7.Gf04OBW1hRkoRVVkww3tRg6/e.GKu4uLq1kO'),
(5, 'Andrew Robinson', 'a.robinson@worc.ac.uk', 'Andrew', '$2y$10$62FzvEZ0A76ITt9EjANCX.UnmBqjFcvg.KrULYsQXoA.LcMyOZOj.'),
(6, 'harriet', 'harriet.jaderoy@gmail.com', 'hazgarlic', '$2y$10$ehot5ViPWFHOEdUXgt/2e.HGG30AlEYRkyQP/mrfyDgrBSkYQnHvW'),
(7, 'Peter Clews', 'p.clews@worc.ac.uk', 'pete', '$2y$10$BV63jLMMS8lgXxh52Tyj5eTPwUkes5PwyO60b9VmOFaJc4TgEkoDm'),
(8, 'kacper', 'slslslssl@gmail.com', 'worcester', '$2y$10$KKfWbgz7TJPdZo8PqYxVRufmIY0YCTpQUdncmlAdOWQCUTMm5MNzO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
