-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 26 mai 2024 à 14:15
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `orientech`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `code_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(40) DEFAULT NULL,
  `prenom_admin` varchar(40) DEFAULT NULL,
  `email_admin` varchar(40) DEFAULT NULL,
  `password_admin` varchar(60) DEFAULT NULL,
  `photo_admin` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`code_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`code_admin`, `nom_admin`, `prenom_admin`, `email_admin`, `password_admin`, `photo_admin`) VALUES
(1, 'Weladji', 'Hilary', 'hilary@gmail.com', 'hilaryfortune', NULL),
(2, 'Ngo', 'Pricille', 'ngo@gmail.com', 'pricilleange', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `donner`
--

DROP TABLE IF EXISTS `donner`;
CREATE TABLE IF NOT EXISTS `donner` (
  `code` int(11) DEFAULT NULL,
  `code_rep` int(11) DEFAULT NULL,
  KEY `code` (`code`),
  KEY `code_rep` (`code_rep`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `code_filiere` int(11) DEFAULT NULL,
  `code_for` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`),
  KEY `code_filiere` (`code_filiere`),
  KEY `code_for` (`code_for`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`code`, `nom`, `prenom`, `password`, `email`, `photo`, `code_filiere`, `code_for`) VALUES
(1, 'Matjabo', 'Etoile', 'missetoile', 'etoile@gmail.com', NULL, 1, NULL),
(2, 'Meli', 'Eric', 'melieric', 'eric@gmail.com', NULL, 3, NULL),
(7, 'meli eric', '', 'e10adc3949ba59abbe56e057f20f883e', 'meli@gmail.com', NULL, NULL, NULL),
(4, 'Dongmo', 'Laurie', 'laurie', 'laurie@gmail.com', NULL, 2, NULL),
(5, 'ange etoile', '', 'e10adc3949ba59abbe56e057f20f883e', 'laurie@gmail.com', NULL, NULL, NULL),
(3, 'laurine', '', 'e10adc3949ba59abbe56e057f20f883e', 'laurinedongmo@gmail.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `enregistrer`
--

DROP TABLE IF EXISTS `enregistrer`;
CREATE TABLE IF NOT EXISTS `enregistrer` (
  `code_admin` int(11) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  KEY `code_admin` (`code_admin`),
  KEY `code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etablir`
--

DROP TABLE IF EXISTS `etablir`;
CREATE TABLE IF NOT EXISTS `etablir` (
  `code_admin` int(11) DEFAULT NULL,
  `code_quiz` int(11) DEFAULT NULL,
  KEY `code_admin` (`code_admin`),
  KEY `code_quiz` (`code_quiz`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `code_filiere` int(11) NOT NULL AUTO_INCREMENT,
  `nom_filiere` varchar(100) DEFAULT NULL,
  `serie` varchar(400) DEFAULT NULL,
  `pourcentage` varchar(100) DEFAULT NULL,
  `debauche` varchar(1000) DEFAULT NULL,
  `matiere_secondaire` varchar(800) DEFAULT NULL,
  PRIMARY KEY (`code_filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`code_filiere`, `nom_filiere`, `serie`, `pourcentage`, `debauche`, `matiere_secondaire`) VALUES
(1, 'Informatique', 'C;;D;;E;;F;;F3;;TI', '60%', 'Developpeur de logiciel;;Ingenieur en informatique;;Analyste de donnees;;Administrateurs de base de donnees;;Specialiste en cybersecurite', 'architecture des ordination;;programmation fonctionnel;;programmation web'),
(2, 'Physique', 'C;;D;;E;;F3;;G;TI', '50%', 'Chercheur en physique;;Ingenieur en physique appliquees;;Enseignant-chercheur;;Consultant en physique', 'Electronagnetique;;Physique quantique;;Optique'),
(3, 'Mathematique', 'C;;D;;G;;E;;F3', '65%', 'Actuaire;;Statisticien;;Analyste financier;;Data Scientist', 'Analyse mathematique;;statistique et probabilites'),
(4, 'Biochimie', 'D;;C;;TI;;', '35%', 'pharmacien;;Chercheur en biochimie;;Scientifique en recherche;;Technicien de laboratoire', 'Metabolisme structural;;Biochimie structurale;;Biologie moleculaire');

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `code_for` int(11) NOT NULL AUTO_INCREMENT,
  `question_for` varchar(200) DEFAULT NULL,
  `date_difusion` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`code_for`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `forum`
--

INSERT INTO `forum` (`code_for`, `question_for`, `date_difusion`) VALUES
(1, 'Avec quelle filiere trouve-t-on facilement l\'emploie?', '2024-02-20 15:20:00'),
(2, 'Quelle filiere est plus ouvert au bourse?', '2024-04-26 20:21:17'),
(3, 'L\'informatique est-il vraiment populaire?', '2024-04-15 23:40:02'),
(4, 'pourquoi est ce que le Bac A est peu favorable ?', '2024-02-20 22:20:30');

-- --------------------------------------------------------

--
-- Structure de la table `matiereprincipale`
--

DROP TABLE IF EXISTS `matiereprincipale`;
CREATE TABLE IF NOT EXISTS `matiereprincipale` (
  `code_matiere` int(11) NOT NULL AUTO_INCREMENT,
  `nom_matiere` varchar(40) DEFAULT NULL,
  `code_filiere` int(11) DEFAULT NULL,
  PRIMARY KEY (`code_matiere`),
  KEY `code_filiere` (`code_filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matiereprincipale`
--

INSERT INTO `matiereprincipale` (`code_matiere`, `nom_matiere`, `code_filiere`) VALUES
(1, 'Analyse mathematique', 3),
(2, 'Geometrie', 3),
(3, 'Programmation', 1),
(4, 'Algebre', 1),
(5, 'Genetique moleculaire', 4),
(6, 'Chimie Organique', 4),
(7, 'Thermodynamique', 2),
(8, 'Mecanique', 2);

-- --------------------------------------------------------

--
-- Structure de la table `reponse_forum`
--

DROP TABLE IF EXISTS `reponse_forum`;
CREATE TABLE IF NOT EXISTS `reponse_forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reponse` varchar(200) DEFAULT NULL,
  `date_create` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_forum` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_forum` (`id_forum`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponse_forum`
--

INSERT INTO `reponse_forum` (`id`, `reponse`, `date_create`, `id_forum`, `id_user`) VALUES
(1, 'Réponse 1', '2024-05-26 12:02:15', 1, 1),
(2, 'Réponse 2', '2024-05-26 12:02:15', 1, 2),
(3, 'Réponse 3', '2024-05-26 12:02:15', 1, 3),
(4, 'Réponse 4', '2024-05-26 12:02:15', 1, 4),
(5, 'Réponse 5', '2024-05-26 12:02:15', 1, 2),
(6, 'Réponse 6', '2024-05-26 12:02:15', 2, 3),
(7, 'Réponse 7', '2024-05-26 12:02:15', 2, 4),
(8, 'Réponse 8', '2024-05-26 12:02:15', 2, 3),
(9, 'Réponse 9', '2024-05-26 12:02:15', 2, 1),
(10, 'Réponse 10', '2024-05-26 12:02:15', 2, 3),
(11, 'Réponse 11', '2024-05-26 12:02:15', 3, 3),
(12, 'Réponse 12', '2024-05-26 12:02:15', 3, 4),
(13, 'Réponse 13', '2024-05-26 12:02:15', 3, 2),
(14, 'Réponse 14', '2024-05-26 12:02:15', 3, 1),
(15, 'Réponse 15', '2024-05-26 12:02:15', 3, 3),
(16, 'Réponse 16', '2024-05-26 12:02:15', 4, 3),
(17, 'Réponse 17', '2024-05-26 12:02:15', 4, 1),
(18, 'Réponse 18', '2024-05-26 12:02:15', 4, 2),
(19, 'Réponse 19', '2024-05-26 12:02:15', 4, 2),
(20, 'Réponse 20', '2024-05-26 12:02:15', 4, 3),
(28, 'BONNJOUE', '2024-05-26 12:34:06', 1, 6),
(25, 'hello je ne sais pas', '2024-05-26 12:06:18', 1, 5),
(26, 'hello reponse', '2024-05-26 12:31:14', 1, 6),
(27, 'BONNJOUE', '2024-05-26 12:32:35', 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

DROP TABLE IF EXISTS `temoignage`;
CREATE TABLE IF NOT EXISTS `temoignage` (
  `code_temoignage` int(25) NOT NULL AUTO_INCREMENT,
  `temoignage` varchar(300) DEFAULT NULL,
  `date_temoignage` datetime DEFAULT CURRENT_TIMESTAMP,
  `code_eleve` int(25) DEFAULT NULL,
  PRIMARY KEY (`code_temoignage`),
  KEY `code_eleve` (`code_eleve`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`code_temoignage`, `temoignage`, `date_temoignage`, `code_eleve`) VALUES
(1, 'c est la meilleur des application', '2024-05-23 15:02:54', 1),
(2, 'je vous encourage merci beaucoup', '2024-05-23 15:12:49', 2),
(3, 'mercie j\'ai pu trouver ma voix grace a vous', '2024-05-23 15:13:33', 3),
(4, 'hello', '2024-05-26 09:01:09', 5),
(5, 'cette application est la meilleur ', '2024-05-26 09:08:23', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
