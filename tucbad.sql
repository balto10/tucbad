-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 21 Juin 2019 à 13:12
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tucbad`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

CREATE TABLE IF NOT EXISTS `equipes` (
  `equipe_nom` varchar(8) NOT NULL,
  `equipe_id` enum('1','2','3','4','5','6','7') NOT NULL,
  PRIMARY KEY (`equipe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `equipes`
--

INSERT INTO `equipes` (`equipe_nom`, `equipe_id`) VALUES
('TUCB1', '1'),
('TUCB2', '2'),
('TUCB3', '3'),
('TUCB4', '4'),
('TUCB5', '5'),
('TUCB6', '6'),
('TUCB7', '7');

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `gen_id` enum('1','2','3') NOT NULL,
  `gen_nom` char(10) NOT NULL,
  PRIMARY KEY (`gen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `genres`
--

INSERT INTO `genres` (`gen_id`, `gen_nom`) VALUES
('1', 'homme'),
('2', 'femme'),
('3', 'inconnu');

-- --------------------------------------------------------

--
-- Structure de la table `joueurs`
--

CREATE TABLE IF NOT EXISTS `joueurs` (
  `joueur_id` tinyint(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `joueur_nom` char(50) NOT NULL,
  `joueur_prenom` char(50) NOT NULL,
  `joueur_mail` varchar(75) NOT NULL,
  `joueur_mdp` varchar(30) NOT NULL,
  `joueur_genre` enum('1','2','3') NOT NULL,
  `joueur_status` enum('1','2','3','4') NOT NULL,
  `joueur_licence` mediumint(9) NOT NULL,
  `joueur_equipe` tinyint(2) unsigned NOT NULL,
  `joueur_tableau` tinyint(1) DEFAULT NULL,
  `joueur_prefere` tinytext NOT NULL,
  `joueur_api` smallint(5) unsigned NOT NULL,
  `joueur_classement` tinytext NOT NULL,
  PRIMARY KEY (`joueur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=114 ;

--
-- Contenu de la table `joueurs`
--

INSERT INTO `joueurs` (`joueur_id`, `joueur_nom`, `joueur_prenom`, `joueur_mail`, `joueur_mdp`, `joueur_genre`, `joueur_status`, `joueur_licence`, `joueur_equipe`, `joueur_tableau`, `joueur_prefere`, `joueur_api`, `joueur_classement`) VALUES
(001, 'Beaubois', 'Antoine', 'beaubois.antoine.bad@hotmail.fr', '1234', '1', '1', 6845842, 1, 1, '', 2, 'N3/R5/R5'),
(002, 'Crosmarie', 'Graham', 'grammytraore@gmail.com', '1234', '1', '1', 210682, 1, 1, '', 33, 'R6/R6/D7'),
(003, 'Lafaye', 'Cyril', 'cyril.lafaye@gmail.com', '1234', '1', '1', 6564486, 1, 1, '', 28, 'R5/R5/R4'),
(004, 'Lienhart', 'Romain', 'romain_lienhart@hotmail.fr', '1234', '1', '1', 6877035, 1, 1, '', 13, 'R6/R5/R6'),
(005, 'Megevand', 'Vincent', 'vincent.megevand@gmail.com', '1234', '1', '1', 356560, 1, 1, '', 53, 'R6/D7/R6'),
(006, 'Richard', 'Maxime', 'richard.maxime1901@gmail.com', '1234', '1', '1', 483832, 1, 1, '', 67, 'D8/D7/R6'),
(007, 'Santiago', 'Thomas', 'thomaseduardo.santiago@yahoo.fr', '1234', '1', '1', 542184, 1, 1, '', 16, 'D7/R6/D7'),
(008, 'Vandenabeele', 'Nicolas', 'nicolasvandenabeele38@gmail.com', '1234', '1', '1', 7020776, 1, 1, '', 37, 'R6/R6/R6'),
(009, 'Harquet', 'Anne-Cécile', 'annectahiti@hotmail.fr', '1234', '2', '1', 6882850, 1, 1, '', 7, 'D7/D7/R5'),
(010, 'Huin', 'Manon', 'huin.manon2@wanadoo.fr', '1234', '2', '2', 524862, 1, 1, '', 11, 'R5/R5/R4'),
(011, 'Morena', 'Adeline', 'adeline.morena@gmail.com', '1234', '2', '3', 6888956, 1, 1, '', 5, 'R5/R4/R4'),
(012, 'Sabatou', 'Marie-Aurore', 'marysabatou.81@hotmail.fr', '1234', '2', '1', 6903575, 1, 1, '', 35, 'R6/R4/R6'),
(013, 'Villacampa', 'Laurène', 'laurene.villacampa@gmail.com', '1234', '2', '1', 6979554, 1, 1, '', 23, 'R6/R5/R5'),
(014, 'Alarcon', 'Loic', 'kevin.loic@gmail.com', '1234', '1', '1', 437652, 2, 1, '', 3, 'R5/R5/R4'),
(015, 'Bonnefoy', 'Jules', 'julesbonnefoy@orange.fr', '1234', '1', '1', 6576754, 2, 1, '', 61, 'D9/D7/D8'),
(016, 'Caulet', 'Théotime', 'theo_caulet@hotmail.fr', '1234', '1', '1', 250039, 2, 1, '', 10, 'R6/R6/R5'),
(017, 'Courdy', 'Charly', 'courdy.charly@hotmail.fr', '1234', '1', '3', 6547506, 2, 1, '', 12, 'R6/R6/R6'),
(018, 'Fromme', 'Edwin', 'edwin.fromme@gmail.com', '1234', '1', '1', 6822455, 2, 1, '', 50, 'D7/R6/D7'),
(019, 'Le Roux', 'Per-Yann', 'peryann.leroux@gmail.com', '1234', '1', '1', 6462536, 2, 1, '', 63, 'P10/D8/D8'),
(020, 'Martin', 'Baptiste', 'bapmart03@gmail.com', '1234', '1', '1', 468144, 2, 1, '', 30, 'D7/R6/D7'),
(021, 'Pofilet', 'Jean-Christophe', 'avvantage@hotmail.com', '1234', '1', '1', 116543, 2, 1, '', 27, 'R6/R5/R6'),
(022, 'Sarcelle', 'Kévin', 'sarcelle.kevin@hotmail.fr', '1234', '1', '1', 225086, 2, 1, '', 58, 'P10/P10/D9'),
(023, 'Alarcon', 'Sarah', 'srh.alarcon@gmail.com', '1234', '2', '1', 437653, 2, 1, '', 14, 'D7/R6/R6'),
(024, 'Damiano', 'Julie', 'julie.damiano@hotmail.com', '1234', '2', '1', 6876510, 2, 1, '', 71, '?/?/?'),
(025, 'Decloux', 'Marie', 'marie.decloux@gmail.com', '1234', '2', '1', 6489490, 2, 1, '', 47, 'P10/D7/D9'),
(026, 'Duchene', 'Emma', 'emma.duchene-carricart@laposte.net', '1234', '2', '2', 6923028, 2, 1, '', 62, 'D8/R6/D7'),
(027, 'Fabian', 'Sophie', 'fabiansophie@yahoo.fr', '1234', '2', '1', 6877818, 2, 1, '', 41, 'P10/D7/P10'),
(028, 'Grandry', 'Joséphine', 'josephine-grandry@orange.fr', '1234', '2', '1', 7020778, 2, 1, '', 19, 'D7/R5/R6'),
(029, 'Pesenti', 'Déborah', 'pesentideborah@gmail.com', '1234', '2', '1', 6634017, 2, 1, '', 20, 'R6/R5/R5'),
(030, 'Poirier', 'Sylvie', 'sylvaymer@yahoo.fr', '1234', '2', '1', 6469423, 2, 1, '', 0, 'P11/D8/P10'),
(031, 'Bensaid', 'Christophe', 'crisvenus69@hotmail.com', '1234', '1', '1', 288293, 3, 1, '', 48, 'D7/P10/P10'),
(032, 'Carbasa', 'Florian', 'f.carbasa@gmail.com', '1234', '1', '1', 288293, 3, 1, '', 73, 'D7/P10/P10'),
(033, 'Charrat', 'François', 'fcharrat@gmail.com', '1234', '1', '1', 431987, 3, 1, '', 52, 'P11/P10/P10'),
(034, 'Gianferrari', 'Clément', 'clementgianferrari@gmail.com', '1234', '1', '1', 237584, 3, 1, '', 6, 'D9/D7/D8'),
(035, 'Jugier', 'Rémi', 'jugier.remi@gmail.com', '1234', '1', '3', 7022742, 3, 1, '', 24, 'D8/D7/D9'),
(036, 'Lurion', 'Victor', 'victor.lurion@hotmail.fr', '1234', '1', '1', 6680618, 3, 1, '', 45, 'D9/D7/D9'),
(037, 'Mary', 'Ellian', 'maryellian@gmail.com', '1234', '1', '1', 7170587, 3, 1, '', 4, 'D8/D8/D7'),
(038, 'Rolland', 'Sébastien', 'sebastien.rolland@edu.ece.fr', '1234', '1', '1', 7079131, 3, 1, '', 43, 'D9/D9/P10'),
(039, 'Sokol', 'Serguei', 'serguei.sokol@gmail.com', '1234', '1', '1', 12527, 3, 1, '', 0, 'P11/D8/P10'),
(040, 'Vanderveen', 'Peter', 'the_proteus@hotmail.com', '1234', '1', '1', 6781898, 3, 1, '', 0, 'D8/D7/R6'),
(041, 'Alba', 'Camille', 'camille.alba01@gmail.com', '1234', '2', '4', 514791, 3, 1, '', 22, 'P10/D9/D8'),
(042, 'Bouchet', 'Marine', 'marinebouchet93@gmail.com', '1234', '2', '1', 6567835, 3, 1, '', 65, 'P11/D8/D9'),
(043, 'Chatelier', 'Caroline', 'caro03400@gmail.com', '1234', '2', '1', 6968419, 3, 1, '', 36, 'D9/D7/D9'),
(044, 'Coilhac', 'Clotilde', 'clothilde.coilhac@gmail.com', '1234', '2', '1', 6987070, 3, 1, '', 26, 'D9/D7/D7'),
(045, 'Faillie', 'Clémence', 'cfaillie@live.fr', '1234', '2', '4', 6973313, 3, 1, '', 0, 'P11/D9/D9'),
(046, 'Gaymann', 'May', 'may.gaymann@gmail.com', '1234', '2', '1', 7149661, 3, 1, '', 1, 'D8/R6/D7'),
(047, 'Humbert', 'Mélodie', 'rogeloca@hotmail.fr', '1234', '2', '2', 6575922, 3, 1, '', 25, 'D9/D9/D7'),
(048, 'Aguilar', 'Grégoire', 'gregaguilar@free.fr', '1234', '1', '1', 7107080, 4, 1, '', 8, 'D8/D7/D7'),
(049, 'Duhamel', 'Grégory', 'duhamelgre@gmail.com', '1234', '1', '1', 6812556, 4, 1, '', 54, 'P10/D8/P10'),
(050, 'Nguyen', 'Phi-Long', 'pl.nguyen@hotmail.fr', '1234', '1', '3', 6926540, 4, 1, '', 49, 'D9/D7/D9'),
(051, 'Oddoux', 'Nicolas', 'oddouxnicolas@gmail.com', '1234', '1', '1', 6814441, 4, 1, '', 40, 'D8/D7/D8'),
(052, 'Parmentier', 'Willy', 'wilpar@free.fr', '1234', '1', '1', 6973311, 4, 1, '', 31, 'D9/D7/D9'),
(053, 'Prévautel', 'Frédéric', 'fredau82@yahoo.fr', '1234', '1', '1', 6888958, 4, 1, '', 70, 'D9/P12/D9'),
(054, 'Raynal', 'Grégoire', 'gregoire.raynal98@gmail.com', '1234', '1', '1', 6854463, 4, 1, '', 0, '?/?/?'),
(055, 'Terrentroy', 'Bruno', 't.bruno@hotmail.com', '1234', '1', '1', 6953563, 4, 1, '', 0, 'P10/D8/P10'),
(056, 'Verdalle', 'Yohan', 'yohan.verdalle@gmail.com', '1234', '1', '1', 7023514, 4, 3, 'Lin Dan', 0, 'R6/R6/R6'),
(057, 'Willems', 'Antoine', 'willemsan.antoine@gmail.com', '1234', '1', '1', 6905718, 4, 1, '', 29, 'D9/D7/D9'),
(058, 'Ferraros', 'Inès', 'ines.ferraros@neuf.fr', '1234', '2', '4', 6552549, 4, 1, '', 17, 'D9/D8/P10'),
(059, 'Laroche', 'Pauline', 'pau.laroche@laposte.net', '1234', '2', '2', 509393, 4, 1, '', 9, 'D8/R6/R6'),
(060, 'Monty', 'Pauline', 'monty.pauline31@gmail.com', '123', '2', '1', 294662, 4, 2, 'Chen Long', 0, 'D9/D8/D9'),
(061, 'Mura', 'Estelle', 'estelle.mura@laposte.net', '1234', '2', '1', 6973328, 4, 1, '', 18, 'D9/D7/D9'),
(062, 'Roumegoux', 'Jessica', 'jessi81@hotmail.fr', '1234', '2', '1', 6959541, 4, 1, '', 69, 'P10/D9/D9'),
(063, 'Anezo', 'Loick', 'anezoloick@gmail.com', '1234', '1', '1', 7162912, 5, 1, '', 0, 'P11/D9/P11'),
(064, 'Bourgogne', 'Antoine', 'abourgog@gmail.com', '1234', '1', '3', 7088233, 5, 1, '', 56, 'P11/P10/P10'),
(065, 'Chambault', 'Clément', 'clement.chambault@gmail.com', '1234', '1', '4', 6707791, 5, 1, '', 74, 'P10/D9/P11'),
(066, 'Joly', 'Etienne', 'etienne.joly.cal@laposte.net', '1234', '1', '4', 6973324, 5, 1, '', 64, 'P10/D9/P10'),
(067, 'Launay', 'Clément', 'clementlaunaycl@gmail.com', '1234', '1', '1', 7071983, 5, 1, '', 34, 'P10/P10/P10'),
(068, 'Manneville', 'Luc-Eric', 'le.manneville@gmail.com', '1234', '1', '1', 472981, 5, 1, '', 42, 'D9/D9/P10'),
(069, 'Mura', 'Maxime', 'mura-maxime@laposte.net', '1234', '1', '1', 6953564, 5, 1, '', 0, 'P12/P12/P12'),
(070, 'Pina', 'Florian', 'florian.pina@free.fr', '1234', '1', '1', 6759892, 5, 1, '', 0, 'P11/P10/P10'),
(071, 'Rossignol', 'Stéphane', 'leross5steph@hotmail.com', '1234', '1', '1', 6886977, 5, 1, '', 21, 'P10/D9/D9'),
(072, 'Semper', 'Loïc', 'loicsemper@yahoo.fr', '1234', '1', '1', 6566554, 5, 1, '', 72, 'P10/P11/P12'),
(073, 'Bortot', 'Laura', 'bortot.lau@gmail.com', '1234', '2', '1', 6908175, 5, 1, '', 32, 'P10/D9/P10'),
(074, 'Clément', 'Eugénie', 'eug.clement@gmail.com', '1234', '2', '2', 6638620, 5, 1, '', 44, 'P10/P10/D9'),
(075, 'Delaporte', 'Sarah', 'sarahdelaporte@hotmail.com', '1234', '2', '1', 7147539, 5, 1, '', 0, 'P10/P12/P10'),
(076, 'Domps', 'Marie Laure', 'ml_937781@hotmail.fr', '1234', '2', '1', 7047921, 5, 1, '', 0, 'P11/P11/P11'),
(077, 'Paschal', 'Pauline', 'paschalpauline@hotmail.fr', '1234', '2', '1', 6693542, 5, 1, '', 68, 'P10/P10/P12'),
(078, 'Prévautel', 'Kathy', 'prevautelkathy@yahoo.fr', '1234', '2', '1', 6953559, 5, 1, '', 0, 'P12/P12/P11'),
(079, 'Pujol', 'Gaëlle', 'gaelle_pujol@yahoo.fr', '1234', '2', '1', 6671789, 5, 1, '', 38, 'P10/D8/D9'),
(080, 'Beauvais', 'Clément', 'cbeauvais@centrale-marseille.fr', '1234', '1', '1', 7162894, 6, 1, '', 0, 'P12/P12/P12'),
(081, 'Chêne', 'Michel', 'michel.chene@wakama-nagi.org', '1234', '1', '1', 6688226, 6, 1, '', 0, 'P12/P11/P12'),
(082, 'Delestre', 'Jérémy', 'jeremydelestre@orange.fr', '1234', '1', '1', 6994502, 6, 1, '', 0, 'P11/P10/P12'),
(083, 'Loison', 'Patrick', 'p.loison46@laposte.net', '1234', '1', '1', 7158209, 6, 1, '', 0, 'P12/P12/P12'),
(084, 'Muratore', 'Sylvain', 'sylvain.muratore@hotmail.fr', '1234', '1', '3', 7203027, 6, 1, '', 15, 'P10/D8/D9'),
(085, 'Poiget', 'Adrian', 'poigetadrian@gmail.com', '1234', '1', '1', 361030, 6, 1, '', 39, 'D9/D9/P10'),
(086, 'Ruillé', 'Antoine', 'ruilleantoine@free.fr', '1234', '1', '1', 6536772, 6, 1, '', 0, 'P12/P11/P11'),
(087, 'Saderne', 'Quentin', 'cit@no-log.org', '1234', '1', '1', 6753801, 6, 1, '', 0, 'P10/P11/P12'),
(088, 'Ténart', 'Antoine', 'spam@ack.tf', '1234', '1', '1', 542636, 6, 1, '', 51, 'D9/P11/P10'),
(089, 'Valleix', 'Fabrice', 'valleix.fabrice@gmail.com', '1234', '1', '1', 6979541, 6, 1, '', 0, 'P12/P12/P12'),
(090, 'Chabret', 'Océane', 'oceanechab@hotmail.com', '1234', '2', '1', 7243402, 6, 1, '', 0, 'P12/P12/P12'),
(091, 'Chaillou', 'Bérénice', 'berenice.chaillou@gmail.com', '1234', '2', '1', 7151652, 6, 1, '', 0, 'P12/P11/P12'),
(092, 'Garde', 'Oriane', 'garde.oriane@gmail.com', '1234', '2', '2', 7088239, 6, 1, '', 0, 'P12/P12/P10'),
(093, 'Lavernhe', 'Eve', 'evlasido@hotmail.fr', '1234', '2', '1', 7149626, 6, 1, '', 57, 'P10/P11/P12'),
(094, 'Liu', 'Céline', 'hceline.liu@gmail.com', '1234', '2', '1', 6990510, 6, 1, '', 0, 'P12/P12/P11'),
(095, 'Reitz', 'Amélie', 'amelie.reitz@gmail.com', '1234', '2', '1', 7088231, 6, 1, '', 0, 'P11/P10/P10'),
(096, 'Richard', 'Maurine', 'richard.maurine@yahoo.fr', '1234', '2', '1', 7162808, 6, 1, '', 0, 'P12/P12/P10'),
(097, 'Adrover', 'Olivier', 'oa31@protonmail.com', '1234', '1', '1', 443431, 7, 1, '', 0, 'P12/P12/P12'),
(098, 'Baqué', 'Nicolas', 'nicoware@hotmail.fr', '1234', '1', '1', 6763199, 7, 1, '', 0, 'P12/P12/P12'),
(099, 'Brault', 'Baptiste', 'baptiste.brault@outlook.fr', '1234', '1', '1', 6963364, 7, 1, '', 0, 'P12/P12/P12'),
(100, 'Charpentier', 'David', 'david8681@hotmail.fr', '1234', '1', '2', 7151630, 7, 1, '', 0, 'P12/P12/P12'),
(101, 'Jouglet', 'Rémi', 'rem.jouglet@gmail.com', '1234', '1', '1', 7203028, 7, 1, '', 59, 'P10/P10/P12'),
(102, 'Schmitt', 'Nathan', 'schmitt.nat@gmail.com', '1234', '1', '1', 408372, 7, 1, '', 0, 'P12/P11/P12'),
(103, 'Van Ghele', 'Loïc', 'loic.vanghele@gmail.com', '1234', '1', '1', 7162889, 7, 1, '', 0, 'P12/P12/P12'),
(104, 'Villalobos', 'Jesùs', 'jesusfvillalobosg@gmail.com', '1234', '1', '1', 7023525, 7, 1, '', 0, 'P11/P10/P12'),
(105, 'Calmon', 'Lise', 'lise.calmon@gmail.com', '1234', '2', '1', 7151648, 7, 1, '', 0, 'P12/P12/P12'),
(106, 'Fourio', 'Cindy', 'cindy.fourio@gmail.com', '1234', '2', '1', 7151649, 7, 1, '', 0, 'P12/P12/P12'),
(107, 'Gache', 'Lucie', 'gachelucie@gmail.com', '1234', '2', '1', 7218106, 7, 1, '', 0, 'NC/NC/NC'),
(108, 'Hamlaoui', 'Sophia', 'hamlaoui.sophia@hotmail.fr', '1234', '2', '1', 7173131, 7, 1, '', 0, 'P12/P12/P12'),
(109, 'Jolivet', 'Typhaine', 'typhaine.jolivet@gmail.com', '1234', '2', '1', 6842136, 7, 1, '', 0, 'P12/P12/P12'),
(110, 'Martorell', 'Hélène', 'helene.martorell@gmail.com', '1234', '2', '4', 7088244, 7, 1, '', 0, '?/?/?'),
(111, 'Soulie', 'Clothilde', 'soulie.clotilde@gmail.com', '1234', '2', '1', 7228134, 7, 1, '', 0, 'P12/P11/P12'),
(112, 'Sylvestre', 'Laura', 'lorasylvestre@hotmail.fr', '1234', '2', '1', 6522989, 7, 1, '', 0, 'P10/P10/P12'),
(113, 'Tondriaux', 'Cécile', 'cecile.tondriaux@gmail.com', '1234', '2', '1', 467232, 7, 1, '', 0, 'P12/P12/P12');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` mediumint(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `msg_contenu` text NOT NULL,
  `msg_date` datetime NOT NULL,
  `joueur_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `recup_mdp`
--

CREATE TABLE IF NOT EXISTS `recup_mdp` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` int(11) NOT NULL,
  `confirm_mdp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `stat_id` enum('1','2','3','4') NOT NULL,
  `stat_nom` char(30) NOT NULL,
  PRIMARY KEY (`stat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `status`
--

INSERT INTO `status` (`stat_id`, `stat_nom`) VALUES
('1', 'joueur'),
('2', 'vice-capitaine'),
('3', 'capitaine'),
('4', 'bureau');

-- --------------------------------------------------------

--
-- Structure de la table `tableaux`
--

CREATE TABLE IF NOT EXISTS `tableaux` (
  `tab_id` tinyint(4) NOT NULL,
  `tab_nom` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tableaux`
--

INSERT INTO `tableaux` (`tab_id`, `tab_nom`) VALUES
(1, 'simple'),
(2, 'double'),
(3, 'mixte');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
