-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 13 août 2020 à 12:20
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `parc_automobile`
--

-- --------------------------------------------------------

--
-- Structure de la table `voitures`
--

CREATE TABLE `voitures` (
  `id` int(11) NOT NULL,
  `marque` varchar(250) NOT NULL,
  `modele` varchar(250) NOT NULL,
  `energie` varchar(250) NOT NULL,
  `boite_auto` tinyint(1) NOT NULL,
  `picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voitures`
--

INSERT INTO `voitures` (`id`, `marque`, `modele`, `energie`, `boite_auto`, `picture`) VALUES
(1, 'mitsubishi', 'eclipse', 'hybride', 1, '5f35086fc669e.jpeg'),
(3, 'renault', 'mégane', 'essence', 1, '5f350be6d9104.jpeg'),
(6, 'renault', 'clio', 'diesel', 1, '5f35058d0ed65.jpeg'),
(7, 'peugeot', '308', 'essence', 1, '5f350bd524718.jpeg'),
(10, 'honda', 'civic', 'electrique', 1, '5f350eb6c775f.jpeg'),
(11, 'toyota', 'yaris', 'electrique', 0, '5f350f1bbcd87.jpeg'),
(12, 'mercedes', 'classe a', 'electrique', 1, '5f35104032823.jpeg'),
(13, 'mercedes', 'classe c', 'electrique', 0, '5f3510f08ffe8.jpeg'),
(14, 'citroen', 'c3', 'essence', 1, '5f35128228662.jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `voitures`
--
ALTER TABLE `voitures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `voitures`
--
ALTER TABLE `voitures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
