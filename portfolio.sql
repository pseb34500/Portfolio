-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 12 Novembre 2017 à 18:12
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Client` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`id`, `Nom`, `Image`, `Description`, `Client`, `URL`) VALUES
(1, 'Prepabl Beziers', 'prepablbeziers.png', 'Site internet pour la classe préparatoire BL du lycée Henri IV de Béziers', 'Lycée Henri IV Béziers', 'http://www.prepablbeziers.fr/'),
(2, 'JOGAD\'OC', 'jogad\'oc.png', 'Site JOGAD\'OC réalisé pendant le stage', 'Mr Guillaume Toutain', 'http://www.dev.jogadoc.com/'),
(3, 'Le Petit coin', 'leptitcoin.png', 'Premier projet réalisé lors de la formation BEWEB', 'BEWEB', ''),
(4, 'La musive', 'la Musive.png', 'Création d\'un chat pour la plateforme de e-learning', 'La Musive', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
