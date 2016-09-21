-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 25 Septembre 2015 à 11:47
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sitewebshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `Designation` varchar(128) NOT NULL,
  `Prix` decimal(6,2) NOT NULL,
  `Tva` decimal(5,1) NOT NULL DEFAULT '19.6',
  `img_article` varchar(64) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `id_categorie`, `Designation`, `Prix`, `Tva`, `img_article`, `description`) VALUES
(22, 4, 'ADVANCED CHARACTER ANIMATION WITH HALF-LIFE 2 DVD', '49.95', '19.6', './images/magasin/NoesisCharAnim.jpg', 'Teaches how to "Evolve Your Character " by focusing on bringing your character to life by animating or applying motion capture data to your own custom design characters within Half-Life'),
(20, 4, 'Real-time Character Animation', '39.95', '19.6', './images/magasin/NoesisRTCharacterAnimation.jpg', 'his DVD teaches you how to "activate your Character" by demonstrating techniques used by professional animators.\r\n\r\nDVD topics covered include: animation clips & sequences, animation blending, custom parameters, custom parameters, linked parameters, animating poses, device capture techniques, and real-time shadows.'),
(21, 4, 'Intro to Source Vehicle Programming', '49.95', '19.6', './images/magasin/NoesisIntroSrcVehicleProgramming.jpg', 'Part of the Noesis Interactive MOD Your World training series, introduces you to the basic functions and methodologies of programming in the Source Engine.\r\n\r\nDVD topics covered include: Setting up your development environment. Installing a Version Control System. Overview of Source programming conventions. Creating new classes. Interfacing with GUI elements. Creating thrusters and adding enhancements. Integrating models & animations.'),
(19, 4, 'Source Machinima Choreography', '49.95', '19.6', './images/magasin/NoesisSrcMachinimaChoreography.jpg', 'Direct a full range of digital characters and creatures using Valve''s Source'),
(18, 3, 'DAY OF DEFEAT POSTER', '6.95', '19.6', './images/magasin/DoDPoster.jpg', 'Folded, four-color glossy, 18" x 24"'),
(17, 3, 'HALF-LIFE 2: EPISODE ONE POSTER', '9.95', '19.6', './images/magasin/HL2EP1Poster.jpg', 'Rolled, four-color glossy, 18" x 24"'),
(16, 3, 'HALF-LIFE 2: EPISODE TWO POSTER', '9.95', '19.6', './images/magasin/HL2EP202poster.jpg', 'Four-color glossy, 18" x 24".'),
(14, 2, 'Half-Life 2 D0G Mousepad', '12.95', '19.6', './images/magasin/HL2DOGMousepad.jpg', 'Precision surface with fine micro grid for perfect mouse operations.'),
(15, 3, 'Left 4 Dead Hand Poster', '9.95', '19.6', './images/magasin/L4DPoster.jpg', 'Left 4 Dead Hand, 18" x 24" rolled poster.'),
(12, 2, 'Left 4 Dead Mousepad', '12.95', '19.6', './images/magasin/L4DMousepad.jpg', 'Precision surface with fine micro grid for perfect mouse operations.'),
(10, 1, 'HALF-LIFE 2 SHIRT', '19.99', '19.6', './images/magasin/HL2Shirt.jpg', 'Hanes'),
(11, 2, 'Counter-Strike: Source Mousepad (Yellow)', '12.95', '19.6', './images/magasin/CSSMousepad-YELLOW.jpg', 'Precision surface with fine micro grid for perfect mouse operations.'),
(13, 2, 'Team Fortress 2 Red Team Mousepad', '12.95', '19.6', './images/magasin/TF2RedTeamMousepad.jpg', 'Precision surface with fine micro grid for perfect mouse operations.'),
(8, 1, 'COUNTER-STRIKE SHIRT', '18.95', '19.6', './images/magasin/CSShirt.jpg', 'Navy. 100% Cotton tee with embroidered Counter-Strike logo in white and yellow.'),
(9, 1, 'HALF-LIFE 2 GOOD D0G SHIRT', '19.99', '19.6', './images/magasin/GoodD0gShirt.jpg', 'Black Hanes'),
(2, 1, 'LEFT 4 DEAD DISTRESS-STYLED CAP', '14.95', '19.6', './images/magasin/L4DHat.jpg', '100% cotton unstructured 6-panel construction. Enzyme-washed for a worn, apocalyptically-distressed look. One size fits all with metal d-ring slider buckle with hide-away strap closure.'),
(6, 1, 'PORTAL SHIRT', '19.99', '19.6', './images/magasin/PortalShirt.jpg', 'Black American Apparel'),
(7, 1, 'HALF-LIFE 2 DEATHMATCH LONG-SLEEVE SHIRT', '24.95', '19.6', './images/magasin/HL2DMLSShirt.jpg', 'Long-Sleeve Gildan'),
(3, 1, 'TEAM FORTRESS 2 HAT', '14.95', '19.6', './images/magasin/TF2Hat.jpg', '100% cotton twill with 6-panel construction. Low profile. Goldenrod Team Fortress 2 embroidery . One size fits all with Velcro enclosure.'),
(4, 1, 'HALF-LIFE 2 HAT', '14.95', '19.6', './images/magasin/HL2Hat.jpg', '100% Black brushed cotton twill with reflective details on bill and the back strap. Low profile with the Half-Life'),
(5, 1, 'LEFT 4 DEAD LONG-SLEEVE TEE', '24.95', '19.6', './images/magasin/L4DShirt.jpg', 'Jet-black 4.3-ounce, 100% ring-spun combed cotton District Threads"! t-shirt with Left 4 Dead logotype screen printed on upper left chest. Features a 40-singles fine knit perfect-weight cotton that''s not too sheer, with a relaxed drape and a comfortable stretch. Lightweight and layerable.'),
(23, 4, '3D CONTENT / CREATION WITH XSI DVD', '39.95', '5.5', './images/magasin/Noesis01.jpg', 'Part one of the MOD Your World training series from Noesis Interactive, focuses on teaching how to "Build Your Character". Learn the nuts and bolts of the SOFTIMAGE|XSI interface, polygon modeling, texture application, generate props from scratch, and follow step-by-step instructions for creating biped characters. The DVD covers the basics of SOFTIMAGE|XSI 3D software including 3D layout, modeling, texturing, prop and character modeling and provides you with all the short cuts and tips.');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL,
  `Nom` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `Nom`) VALUES
(1, 'Vetements'),
(2, 'Accessoires'),
(3, 'Posters'),
(4, 'DVD');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
