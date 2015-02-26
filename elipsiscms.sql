-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2015 at 01:05 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elipsiscms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'category a', '2015-02-24 00:00:00', '2015-02-24 00:00:00'),
(2, 'category b', '2015-02-24 00:00:00', '2015-02-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text,
  `body` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category_id`, `description`, `body`, `tags`, `author`, `created_at`, `updated_at`) VALUES
(13, 'edited 4', 1, '                                    sdadasdasd                        ', '                                    assadasdasdasdsad                        ', 'sdsdsdsd', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'timestamps edited', 1, '            Vivamus quis mi. Fusce convallis metus id felis luctus adipiscing. Vivamus aliquet elit ac nisl. Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Duis vel nibh at velit scelerisque suscipit.\n\nQuisque id odio. Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Vivamus consectetuer hendrerit lacus. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.\n\nNunc nonummy metus. Fusce convallis metus id felis luctus adipiscing. Praesent venenatis metus at tortor pulvinar varius. Fusce convallis metus id felis luctus adipiscing. Fusce vel dui.        ', '            Vivamus quis mi. Fusce convallis metus id felis luctus adipiscing. Vivamus aliquet elit ac nisl. Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Duis vel nibh at velit scelerisque suscipit.\n\nQuisque id odio. Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Vivamus consectetuer hendrerit lacus. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.\n\nNunc nonummy metus. Fusce convallis metus id felis luctus adipiscing. Praesent venenatis metus at tortor pulvinar varius. Fusce convallis metus id felis luctus adipiscing. Fusce vel dui.        ', 'sdsdsdsd', '', '2015-02-25 12:51:20', '2015-02-25 12:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `gender`, `created_at`, `updated_at`) VALUES
(6, 'John Doe', 'admin', 'kris.mp7777@gmail.com', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'male', '2015-02-25 15:09:44', '2015-02-25 15:09:44');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
