-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2024 at 11:33 PM
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
-- Database: `cms_pdo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `user_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Jose\'s article # 1', 'Jose\'s article # 1 CONTENT', 12, 'uploads/IMG_5972.JPG_66f523e79eec7_1727341543.jpg', '2024-09-26 04:00:00', '2024-09-26 09:05:43'),
(2, 'Jose\'s article # 2', 'Jose\'s article # 2', 12, '', '2024-09-26 04:00:00', '2024-09-26 09:06:14'),
(3, 'Jose\'s article # 2', 'Jose\'s article # 2', 12, '', '2024-09-26 04:00:00', '2024-09-26 09:06:22'),
(9, 'Exploring the World of Science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:08:03'),
(10, 'How to Stay Productive', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:35'),
(11, 'The Benefits of Exercise', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(12, 'How to Stay Productive', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(13, 'Exploring the World of Science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(14, 'A Guide to Healthy Living', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(15, 'The Future of Technology', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(16, 'The Benefits of Exercise', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(17, 'Understanding Mental Health', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(18, 'Exploring the World of Science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(19, 'Achieving Financial Freedom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(20, 'Achieving Financial Freedom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(21, 'Exploring the World of Science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(22, 'Achieving Financial Freedom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(23, 'The Importance of Education', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(24, 'The Importance of Education', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(25, 'The Rise of AI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(26, 'Understanding Mental Health', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(27, 'How to Stay Productive', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(28, 'The Rise of AI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(29, 'Understanding Mental Health', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54'),
(30, 'The Power of Positive Thinking', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.', 11, 'https://via.placeholder.com/350x200', '2024-09-26 04:00:00', '2024-09-26 21:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `phone`, `birthday`, `organization`, `location`, `profile_image`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'password1', 'John', 'Doe', 'john.doe1@example.com', '555-111-1111', '1990-01-01', 'Company1', 'New York', NULL, '2024-09-23 17:11:56', '2024-09-23 17:11:56'),
(2, 'user2', 'password2', 'Jane', 'Doe', 'jane.doe2@example.com', '555-222-2222', '1991-02-01', 'Company2', 'Los Angeles', NULL, '2024-09-23 17:11:56', '2024-09-23 17:11:56'),
(3, 'user3', 'password3', 'Alex', 'Smith', 'alex.smith3@example.com', '555-333-3333', '1992-03-01', 'Company3', 'Chicago', NULL, '2024-09-23 17:11:56', '2024-09-23 17:11:56'),
(4, 'user4', 'password4', 'Chris', 'Johnson', 'chris.johnson4@example.com', '555-444-4444', '1993-04-01', 'Company4', 'Houston', NULL, '2024-09-23 17:11:56', '2024-09-23 17:11:56'),
(5, 'user5', 'password5', 'Sara', 'Williams', 'sara.williams5@example.com', '555-555-5555', '1994-05-01', 'Company5', 'Phoenix', NULL, '2024-09-23 17:11:56', '2024-09-23 17:11:56'),
(6, 'user6', 'password6', 'David', 'Brown', 'david.brown6@example.com', '555-666-6666', '1995-06-01', 'Company6', 'Philadelphia', NULL, '2024-09-23 17:11:56', '2024-09-23 17:11:56'),
(7, 'user7', 'password7', 'Emily', 'Jones', 'emily.jones7@example.com', '555-777-7777', '1996-07-01', 'Company7', 'San Antonio', NULL, '2024-09-23 17:11:56', '2024-09-23 17:11:56'),
(8, 'user8', 'password8', 'Michael', 'Garcia', 'michael.garcia8@example.com', '555-888-8888', '1997-08-01', 'Company8', 'San Diego', NULL, '2024-09-23 17:11:56', '2024-09-23 17:11:56'),
(9, 'user9', 'password9', 'Sophia', 'Martinez', 'sophia.martinez9@example.com', '555-999-9999', '1998-09-01', 'Company9', 'Dallas', NULL, '2024-09-23 17:11:56', '2024-09-23 17:11:56'),
(10, 'user10', 'password10', 'Daniel', 'Rodriguez', 'daniel.rodriguez10@example.com', '555-101-1010', '1999-10-01', 'Company10', 'San Jose', NULL, '2024-09-23 17:11:56', '2024-09-23 17:11:56'),
(11, 'edwin', '$2y$10$qKs9BdrWXJbE/CM3CVuryunBDptRkcR0XgzAYWizeMVz7BGyr7iUu', NULL, NULL, 'edwin@edwindiaz.com', NULL, NULL, NULL, NULL, NULL, '2024-09-23 20:06:12', '2024-09-23 20:06:12'),
(12, 'jose', '$2y$10$lnmEzjFJblqCdynk30oRLuvpdGaOm6TZSO3blvlzsl9gaeoByBqU2', NULL, NULL, 'jose@gmail.com', NULL, NULL, NULL, NULL, NULL, '2024-09-23 20:06:45', '2024-09-23 20:06:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
