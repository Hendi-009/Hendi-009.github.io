-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 07:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataabsen`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataabsen`
--

CREATE TABLE `dataabsen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jam_kerja` varchar(255) NOT NULL,
  `projek` varchar(255) NOT NULL,
  `hal` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `timee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataabsen`
--

INSERT INTO `dataabsen` (`id`, `nama`, `jam_kerja`, `projek`, `hal`, `gambar`, `timee`) VALUES
(10, '', '', '', '', 'Course-thumb-1920-1005551.jpg', ''),
(11, 'Auha', 'Sad', '54', '54', 'Course-1022207.jpg', ''),
(12, 'safasfasf', '', '', '', 'Course-.', ''),
(13, '', '', '', '', 'Course-1022207.jpg', '27-10-2022 12:55'),
(14, '', '', '', '', '', '27-10-2022 12:56'),
(15, '', '', '', '', '', '27-10-2022 12:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataabsen`
--
ALTER TABLE `dataabsen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataabsen`
--
ALTER TABLE `dataabsen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
