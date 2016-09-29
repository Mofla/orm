-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2016 at 08:51 AM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `advanced_orm`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE IF NOT EXISTS `actors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `firstname`, `lastname`, `age`) VALUES
(9, 'Henry', 'Fonda', 77),
(10, 'Al', 'Pacino', 76),
(11, 'Zach', 'Galligan', 52),
(12, 'Marlon', 'Brandon', 80),
(13, 'Charlie', 'Sheen', 51),
(14, 'Keanu', 'Reeves', 52),
(15, 'Gordon', 'Liu', 61),
(16, 'Rinko', 'Kikuchi', 35),
(17, 'Harold', 'Ramis', 70);

-- --------------------------------------------------------

--
-- Table structure for table `actors_movies`
--

CREATE TABLE IF NOT EXISTS `actors_movies` (
  `actor_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  PRIMARY KEY (`actor_id`,`movie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actors_movies`
--

INSERT INTO `actors_movies` (`actor_id`, `movie_id`) VALUES
(9, 1),
(10, 2),
(10, 6),
(11, 3),
(12, 6),
(12, 7),
(13, 8),
(14, 5),
(15, 10),
(15, 11),
(16, 13),
(17, 15);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Aventure'),
(2, 'Comedie'),
(3, 'Action'),
(4, 'Horreur'),
(5, 'Drame'),
(6, 'Thriller'),
(7, 'Gangster'),
(8, 'Guerre'),
(9, 'Animation'),
(10, 'Historique');

-- --------------------------------------------------------

--
-- Table structure for table `categories_movies`
--

CREATE TABLE IF NOT EXISTS `categories_movies` (
  `movie_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories_movies`
--

INSERT INTO `categories_movies` (`movie_id`, `category_id`) VALUES
(1, 5),
(2, 5),
(3, 2),
(3, 4),
(4, 3),
(5, 4),
(6, 7),
(7, 8),
(8, 2),
(9, 5),
(9, 9),
(10, 3),
(11, 3),
(12, 3),
(12, 7),
(13, 3),
(14, 10),
(15, 2),
(16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE IF NOT EXISTS `directors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `firstname`, `lastname`, `age`) VALUES
(1, 'Sydney', 'Lumet', 86),
(2, 'Joe', 'Dante', 69),
(3, 'Francis', 'Coppola', 77),
(4, 'Jim', 'Abrahams', 72),
(5, 'Mamoru', 'Hosoda', 49),
(6, 'Lau', 'Kar-Leung', 79),
(7, 'Quentin', 'Tarantino', 53),
(8, 'Guillermo', 'del Toro', 51),
(9, 'Akira', 'Kurosawa', 88),
(10, 'Ivan', 'Reitman', 69),
(11, 'Harold', 'Ramis', 70);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `release_date` varchar(4) NOT NULL,
  `budget` int(11) NOT NULL,
  `director_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `release_date`, `budget`, `director_id`) VALUES
(1, '12 hommes en colère', '1957', 340000, 1),
(2, 'Serpico', '1974', 3000000, 1),
(3, 'Les Gremlins', '1984', 11000000, 2),
(4, 'Small Soldiers', '1998', 40000000, 2),
(5, 'Dracula', '1992', 40000000, 3),
(6, 'Le Parrain', '1972', 7000000, 3),
(7, 'Apocalypse Now', '1979', 31500000, 3),
(8, 'Hot Shots!', '1991', 26000000, 4),
(9, 'Les enfants loups', '2012', 35000000, 5),
(10, 'La 36e chambre de Shaolin', '1981', 800000, 6),
(11, 'Kill Bill', '2003', 60000000, 7),
(12, 'Pulp Fiction', '1994', 8500000, 7),
(13, 'Pacific Rim', '2013', 190000000, 8),
(14, 'Ran', '1985', 11000000, 9),
(15, 'SOS Fantômes', '1984', 30000000, 10),
(16, 'Un jour sans fin', '1993', 14600000, 11);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
