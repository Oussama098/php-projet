-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Lun 05 Septembre 2011 à 05:11
-- Version du serveur: 5.1.37
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `projets2023`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) DEFAULT NULL,
  `DatDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`Id`, `Titre`, `DatDebut`, `DateFin`, `Description`) VALUES
(1, 'Gestion de la bibliothèque', '2022-11-01', '2023-06-15', 'Projet de gestion de la bibliothèque scollaire du BTS de kénitra'),
(2, 'Gestion des évaluations', '2022-11-10', '2023-06-15', 'Projet de gestion des évaluation au sein du BTS de kénitra'),
(3, '', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjetId` int(11) NOT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Debut` varchar(255) DEFAULT NULL,
  `Fin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FKTask590830` (`ProjetId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `task`
--

INSERT INTO `task` (`ID`, `ProjetId`, `Nom`, `Debut`, `Fin`) VALUES
(1, 1, 'analyse', '2023-12-12', '2023-02-12'),
(2, 1, 'conception', '2023-02-20', '2023-04-12'),
(7, 1, 'Test', '2023-03-23', '2023-05-29');
