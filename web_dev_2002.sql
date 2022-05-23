-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 04:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_dev_2002`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `image`) VALUES
(1, 'My name is Monir Hosen. I am a Professional web developer. In this Field I have 1 years experience. I complete my graduation in B.sc Computer science & engineering from University of Asia Pacific.', '1(2).png');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `bio`, `img`) VALUES
(1, 'HELLO MONIR', 'I am a Professional web developer.', '0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `status`) VALUES
(1, 'Monir Hosen', 'kazimonir67@gmail.com', 'this is my message show .', 1),
(2, 'Hosen', 'hosen@gmail.com', 'How fast is your download speed? In seconds, FAST.com\'s simple Internet speed test will estimate your ISP speed.', 1),
(3, 'Babu', 'babu@gmail.com', 'this is my message show How fast is your download speed? In seconds, FAST.com\'s simple Internet speed test will estimate your ISP speed..', 1),
(4, 'Rasel', 'rasel@gmail.com', 'Test your Internet connection bandwidth to locations around the world with this interactive broadband speed test from Ookla.', 1),
(5, 'mooto ', 'moto@gmail.com', 'mo&#039;to is the best. go to w3schools.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fact`
--

CREATE TABLE `fact` (
  `id` int(11) NOT NULL,
  `feature_item` varchar(255) NOT NULL,
  `active_products` varchar(255) NOT NULL,
  `year_experience` varchar(255) NOT NULL,
  `clients` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fact`
--

INSERT INTO `fact` (`id`, `feature_item`, `active_products`, `year_experience`, `clients`) VALUES
(1, '08', '02', '03', '10');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active,2=deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `thumbnail`, `status`) VALUES
(19, 'Web Design', 'Create an account or log into Facebook. Connect with friends, family and other people you know.', 'webdesign.jpg', 1),
(21, 'Web Development', 'I developed an eCommerce website by Laravel. Some of my work which I developed given below.', 'webdev.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `summary` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `summary`) VALUES
(9, 'fab fa-react', 'React', 'React is more usefull in our country.there have many react in font  awsome web site.'),
(10, 'fab fa-facebook', 'Facebook Marketing', 'In facebook life pepole can comunicate eassily each other.not only comution it also news portal.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `gpa` varchar(255) NOT NULL,
  `progress` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `gpa`, `progress`, `year`) VALUES
(1, 'Secondary School Certificate', '4.75', '90%', '2012'),
(2, 'Higher Secondary School Certificate', '3.50', '70%', '2014'),
(3, 'BSc Computer Science & Engineering.', '3.09', '75%', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `description`, `image`) VALUES
(1, 'Monir', 'Description definition is - an act of describing; specifically : discourse intended to give a mental image of something experienced. How to use description in a ...', ''),
(3, 'Khan', 'comment meaning, definition, what is comment: an opinion that you express about ... about someone or something SYN remarkcomment on/about his comments ...', ''),
(4, 'Hosen', 'hello motto .hello motto hello motto hello motto .', '4.jpg'),
(5, 'Monir Hosen', 'this is good project.best of luck of your project.', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active,2=deactive',
  `user_role` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=user,2=admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `gender`, `status`, `user_role`) VALUES
(19, 'Monir Hosen', 'kazimonir67@gmail.com', '$2y$10$MXV8yXdjWK7/S0VXqOPnjO7T5X.csEYxy/woKcjC0TMQNdWjzEFWm', NULL, NULL, 1, 2),
(20, 'Monir Khan', 'monirkhan@gmail.com', '$2y$10$wxWf1BAb850IIeSy/sgUxegoRNtt6mNVuKjw5p/Ep3zU4Z3atK10W', NULL, NULL, 1, 1),
(21, 'Monir Hosen1', 'kazimonir1@gmail.com', '$2y$10$9V785RHWsQfRyo0XhE.qQexHgVQ5XVJF6ROByZHShAEyLGqxyKaxq', NULL, NULL, 1, 1),
(22, 'Monir Hosen2', 'kazimonir2@gmail.com', '$2y$10$f4DOwbpRnhEmwseWO7U9..WQptieiu48OK2mCTxoVpU4wY6fddl8S', NULL, NULL, 2, 1),
(23, 'Mahrin', 'mahrin@gmail.com', '$2y$10$PNxv6O21nbq0xHEeENil/.S.JnYpXv3M4cx220immaK3DMygCScou', NULL, NULL, 1, 1),
(24, 'Maruf', 'maruf@gmail.com', '$2y$10$Qv9.JlLaefvJxg5M2cm6zOJ1S5Ka13SC5E03EXpdhcbjhPTTBnE1u', NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip_adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip_adress`) VALUES
(1, '::1'),
(2, '::1'),
(3, '::1'),
(4, '::1'),
(5, '::1'),
(6, '::1'),
(7, '::1'),
(8, '::1'),
(9, '::1'),
(10, '::1'),
(11, '::1'),
(12, '::1'),
(13, '::1'),
(14, '::1'),
(15, '::1'),
(16, '::1'),
(17, '::1'),
(18, '::1'),
(19, '::1'),
(20, '::1'),
(21, '::1'),
(22, '::1'),
(23, '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fact`
--
ALTER TABLE `fact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fact`
--
ALTER TABLE `fact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
