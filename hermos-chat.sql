-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 05:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `incoming_id` int(255) NOT NULL,
  `outgoing_id` int(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `incoming_id`, `outgoing_id`, `message`) VALUES
(1, 2, 1, 'Hi'),
(2, 1, 2, 'Helloooo'),
(3, 2, 1, 'How are you?'),
(4, 1, 2, 'I\'m fineeeee thank you'),
(5, 2, 1, 'okayyyyy'),
(6, 3, 2, 'Hi'),
(7, 2, 3, 'Hello Subomi'),
(8, 3, 2, 'Awwwwwwww Jhopeeeeeee'),
(9, 2, 3, 'Ikrrrrr'),
(10, 3, 2, 'Awwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww Jhopppppppppppppppppppppppppppppppppppppeeeeeeeeeeeeeeee'),
(11, 2, 3, 'awwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww subomiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii'),
(12, 2, 3, 'Thank youuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu I purple youuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu'),
(13, 3, 2, 'Thank youuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu  I ourole youuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu'),
(14, 1, 2, 'hello'),
(15, 2, 3, 'hello'),
(16, 2, 3, 'Hello'),
(17, 3, 2, 'Hi Jhopeeeeee!'),
(18, 3, 1, 'Jhopeeee'),
(19, 1, 3, 'What\'s up bro!!'),
(20, 3, 1, 'Nothing really man'),
(21, 3, 1, 'How\'s BTS going?'),
(22, 3, 1, 'How\'s V, RM and the rest?'),
(23, 1, 3, 'Oh everyone\'s fine thank you boss'),
(24, 3, 1, 'Alrighttttt'),
(25, 3, 1, '🥺❤️'),
(26, 1, 3, 'Bye bye boss'),
(27, 3, 1, 'Byeeeee'),
(28, 2, 3, 'Heyyy Subieeeee'),
(29, 2, 3, 'Text me when you get back onlineee'),
(30, 3, 2, 'Helloooooooo'),
(31, 2, 3, 'Hiiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `img`, `status`) VALUES
(1, 'Emmanuel', 'Effi', 'effiemmanuel.n@gmail.com', '0d0de813c1105498e3435dd2fbf7fa26', '1626813289effi.jpeg', 'offline'),
(2, 'Olasubomi', 'Shoyemi', 'shoyemi.o@gmail.com', '23a26c424409cb4c73f9b9a1c4455664', '1626813355subie.jpg', 'offline'),
(3, 'Jung', 'Hoseok', 'jhope@gmail.com', 'e9b896bd66e73e9967b427494a13a20f', '1626813382jhope.jpg', 'offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
