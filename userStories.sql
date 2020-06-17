-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 17, 2020 at 08:53 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pollen`
--

-- --------------------------------------------------------

--
-- Table structure for table `userStories`
--

CREATE TABLE `userStories` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `source` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userStories`
--

INSERT INTO `userStories` (`id`, `email`, `source`, `description`) VALUES
(1, 'kay@holbertonschool.com', 'http://example.com', 'Kay is not the killer'),
(8, '', '', ''),
(9, '', '', ''),
(10, 'ezra@holbertonschool.com', 'http://killer.com', 'Ezra could be the killer'),
(11, 'ezra@holbertonschool.com', 'http://killer.com', 'Ezra could be the killer'),
(12, 'flav@holbertonschool.com', 'http://notkiller.com', 'Nah she could be an assassin'),
(13, 'jenn@holbertonschool.com', 'https://secured.com', 'She kills!!'),
(14, 'shell@hi.com', 'https://what.com', 'hi ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userStories`
--
ALTER TABLE `userStories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userStories`
--
ALTER TABLE `userStories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
