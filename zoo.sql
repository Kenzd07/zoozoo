-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Serveur: 127.0.0.1
-- Généré le : Jeu 11 Mai 2023 à 14:13
-- Version du serveur: 5.5.10
-- Version de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `zoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

CREATE TABLE IF NOT EXISTS `animaux` (
  `id_animal` int(11) NOT NULL AUTO_INCREMENT,
  `id_espece` int(11) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `sexe` varchar(100) DEFAULT NULL,
  `pseudo` varchar(50) NOT NULL,
  `commentaire` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_animal`),
  KEY `id_espece` (`id_espece`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `animaux`
--

INSERT INTO `animaux` (`id_animal`, `id_espece`, `date_naissance`, `sexe`, `pseudo`, `commentaire`) VALUES
(8, 2, '2022-05-05', 'M', 'holi', 'elephant'),
(10, 2, '2020-11-11', 'F', 'hola', 'elephant');

-- --------------------------------------------------------

--
-- Structure de la table `enclos`
--

CREATE TABLE IF NOT EXISTS `enclos` (
  `id_enclos` char(3) NOT NULL,
  `nom_enclo` varchar(50) DEFAULT NULL,
  `capacite_max` int(11) NOT NULL,
  `taille_enclo` varchar(100) DEFAULT NULL,
  `eau` tinyint(1) DEFAULT NULL,
  `responsable` int(11) NOT NULL,
  PRIMARY KEY (`id_enclos`),
  KEY `responsable` (`responsable`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `enclos`
--

INSERT INTO `enclos` (`id_enclos`, `nom_enclo`, `capacite_max`, `taille_enclo`, `eau`, `responsable`) VALUES
('A01', 'enclo lion', 14, '', 0, 1),
('A02', 'enclo lion', 20, '75', 0, 1),
('A03', 'enclo lion', 10, '30', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `especes`
--

CREATE TABLE IF NOT EXISTS `especes` (
  `id_espece` int(11) NOT NULL AUTO_INCREMENT,
  `race` varchar(50) DEFAULT NULL,
  `alimentation` varchar(100) DEFAULT NULL,
  `duree_vie` varchar(100) DEFAULT NULL,
  `Aquatique` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_espece`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `especes`
--

INSERT INTO `especes` (`id_espece`, `race`, `alimentation`, `duree_vie`, `Aquatique`) VALUES
(1, 'elephant', 'Herbivore', '', 'non'),
(2, 'elephant', 'Herbivore', '50', 'non'),
(3, 'lion', 'Carnivore', '25', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `loc_animaux`
--

CREATE TABLE IF NOT EXISTS `loc_animaux` (
  `id_loc_animal` int(11) NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) NOT NULL,
  `id_enclos` char(3) DEFAULT NULL,
  `date_arrivee` date DEFAULT NULL,
  `date_sortie` date DEFAULT NULL,
  PRIMARY KEY (`id_loc_animal`),
  KEY `id_animal` (`id_animal`),
  KEY `id_enclos` (`id_enclos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `loc_animaux`
--


-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE IF NOT EXISTS `personnels` (
  `id_personnel` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `sexe` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `salaire` varchar(100) NOT NULL,
  PRIMARY KEY (`id_personnel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `personnels`
--

INSERT INTO `personnels` (`id_personnel`, `nom`, `prenom`, `date_naissance`, `sexe`, `login`, `mdp`, `fonction`, `salaire`) VALUES
(1, 'mrg', 'tsm', '0000-00-00', 'homme', 'mrg', 'mrg', 'directeur', '15K'),
(2, 'aa', 'aa', '0000-00-00', 'homme', 'aa', 'aa', 'employe', '5K'),
(3, 'olala', 'tsm', '2011-06-15', 'M', 'test', 'test', 'employe', '1.2K');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD CONSTRAINT `animaux_ibfk_1` FOREIGN KEY (`id_espece`) REFERENCES `especes` (`id_espece`);

--
-- Contraintes pour la table `enclos`
--
ALTER TABLE `enclos`
  ADD CONSTRAINT `enclos_ibfk_1` FOREIGN KEY (`responsable`) REFERENCES `personnels` (`id_personnel`);

--
-- Contraintes pour la table `loc_animaux`
--
ALTER TABLE `loc_animaux`
  ADD CONSTRAINT `loc_animaux_ibfk_1` FOREIGN KEY (`id_animal`) REFERENCES `animaux` (`id_animal`),
  ADD CONSTRAINT `loc_animaux_ibfk_2` FOREIGN KEY (`id_enclos`) REFERENCES `enclos` (`id_enclos`);
