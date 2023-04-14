-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 13 avr. 2023 à 21:43
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projets2023`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `Id` int(11) NOT NULL,
  `Titre` varchar(255) DEFAULT NULL,
  `DatDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`Id`, `Titre`, `DatDebut`, `DateFin`, `Description`) VALUES
(1, 'Gestion de la bibliothèque', '2022-11-01', '2023-06-15', 'Projet de gestion de la bibliothèque scollaire du BTS de kénitra'),
(31, 'Gestion de cahier texte', '2023-03-01', '2023-03-31', 'Projet de gestion de la cahier texte scollaire du BTS de kénitra'),
(40, 'Gestion de Pfe', '2023-04-05', '2023-05-06', 'Gestion de Pfe de Bts ibn sina	'),
(42, 'gestion de bibliotheque', '2023-04-01', '2023-04-30', '	gestion de bibliotheque de bts ibn sina	');

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `ID` int(11) NOT NULL,
  `ProjetId` int(11) NOT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Debut` varchar(255) DEFAULT NULL,
  `Fin` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `task`
--

INSERT INTO `task` (`ID`, `ProjetId`, `Nom`, `Debut`, `Fin`) VALUES
(1, 1, 'analyse', '2023-3-12', '2023-03-17'),
(2, 1, 'conception', '2023-02-20', '2023-04-12'),
(40, 42, 'conception', '2023-4-4', '2023-4-7'),
(36, 0, 'analyse', '2022-12-11', '2022-12-12'),
(37, 0, 'conception', '2022-11-11', '2022-11-14'),
(34, 31, 'oussama', '2022-12-11', '2022-12-12'),
(33, 31, 'test', '2023-4-4', '2023-4-7'),
(38, 40, 'oussama', '2022-12-11', '2022-12-12'),
(39, 42, 'analyse', '2022-12-11', '2022-12-14'),
(41, 43, 'analyse', '2023-4-11', '2023-4-12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKTask590830` (`ProjetId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
