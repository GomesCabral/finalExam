-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 27 nov. 2022 à 20:52
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spaceship`
--
CREATE DATABASE IF NOT EXISTS `spaceship` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `spaceship`;

-- --------------------------------------------------------

--
-- Structure de la table `ships`
--

DROP TABLE IF EXISTS `ships`;
CREATE TABLE IF NOT EXISTS `ships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `picture` varchar(255) NOT NULL,
  `fast_drive` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ships`
--

INSERT INTO `ships` (`id`, `name`, `price`, `picture`, `fast_drive`, `description`) VALUES
(1, 'Hurricane', 1000000, 'hurricane.jpg', 0, 'Big things do come in small packages: the Hurricane is a fighting spacecraft that packs a deadly punch into a slight fuselage.'),
(2, 'Terrapin', 200000000, 'Terrapin.jpg', 0, 'Outfitted with long-range scanners and encased in heavy armor and oversized shields, the U4A-3 Terrapin can face potentially hazardous circumstances with confidence, making it the ultimate combat scout and reconnaissance vehicle, at least according to Anvil.'),
(3, 'Mustang', 2500000, 'mustang.jpg', 1, 'Consolidated Outland teamed up with custom tuning company Accelerated Mass Design to create a limited edition racer that features a ramped up fuel intake for faster recycling of the ship’s already impressive boost system. '),
(4, 'Javelin', 10000000, 'javelin.jpg', 1, 'Designed for use by the UEE military, the Javelin is a massive, modular capital ship that can be appropriated for entrepreneurial use. With a detailed interior, plenty of modular room options and a high crew capacity, the Javelin is a ship that has made a name for itself in a variety of roles.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
