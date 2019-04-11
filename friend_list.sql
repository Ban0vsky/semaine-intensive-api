-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 11 avr. 2019 à 12:31
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `friend_list`
--

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username_1` varchar(50) NOT NULL,
  `username_2` varchar(50) NOT NULL,
  `is_pending` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `friends`
--

INSERT INTO `friends` (`id`, `username_1`, `username_2`, `is_pending`) VALUES
(20, 'quentin', 'lucas', 0),
(16, 'lucas', 'alexandre', 0),
(22, 'lucie', 'quentin', 0),
(28, 'quentin', 'alexandre', 1),
(26, 'alphonse', 'quentin', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `score` int(200) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `score`) VALUES
(16, 'lucas', '81dc9bdb52d04dc20036dbd8313ed055', 123),
(15, 'alexandre', '8dd01288dd803f549e0c89b78ab743be', 12),
(19, 'quentin', 'c4ca4238a0b923820dcc509a6f75849b', 209),
(20, 'lucie', 'c4ca4238a0b923820dcc509a6f75849b', 500),
(21, 'alphonse', 'c4ca4238a0b923820dcc509a6f75849b', 43),
(22, 'fgwesz', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(23, 'essai', 'c4ca4238a0b923820dcc509a6f75849b', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
