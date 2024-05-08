-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2023 at 09:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `note_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `content`) VALUES
(1, 'My Journey into the World of PHP Programming', 'In the realm of web development, PHP holds a significant position as a server-side scripting language. It powers some of the internet\'s most popular websites and offers a range of capabilities for backend API development. This document aims to detail my experience and challenges while studying PHP.'),
(2, 'Why I Chose PHP', 'The choice to study PHP was influenced by multiple factors. Firstly, there is a high demand for PHP developers in the job market, making it a lucrative career option. Additionally, the language offers great versatility, as it is compatible with all major hosting services and has an extensive standard library. Not to forget, the PHP community is quite large and active, offering immense support and resources for learners.'),
(3, 'The Basics I\'ve Learned', 'My initial days were spent understanding PHP syntax, including echo statements, variables, and constants. I delved into the various data types like strings, integers, floats, and booleans. Control structures such as if-else statements, loops, and switch cases were also part of this foundational learning.'),
(4, 'Advanced Topics', 'As I progressed, I started exploring more complex areas like Object-Oriented Programming (OOP), where I learned about classes, objects, and inheritance. I also gained hands-on experience with database interactions using MySQL and PDO. Additionally, I familiarized myself with PHP frameworks like Laravel and Symfony, which offer more streamlined development processes.'),
(5, 'Challenges Faced', 'The road was not always smooth. Debugging posed initial challenges, as understanding the nuances of error messages was tricky. I also found it essential to keep up with best practices, such as adhering to the PSR-12 coding standard. Security vulnerabilities like SQL Injection and XSS attacks required special attention.'),
(6, 'Future Learning Goals', 'Looking ahead, I aim to dive deeper into RESTful API development and wish to master advanced frameworks. I am also looking to expand my skills into unit testing to write more reliable code.'),
(7, 'Conclusion', 'In summary, my journey into PHP has been both challenging and rewarding. With set milestones for the near future and long-term objectives in sight, I am eager to continue advancing my skills in PHP programming.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
