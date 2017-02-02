-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 15 Octobre 2015 à 08:56
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bachelor`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `thumb`, `category_id`, `date`) VALUES
(1, 'ouverture du site ', '<p><img src="/mvcbachelor/web/images/blog/ronan.png" alt="" width="150" height="150" />lorem io</p>', '', 1, '2015-10-09 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `titre`) VALUES
(1, 'crÃ©ation'),
(2, 'nouveautÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `rep` varchar(45) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `genre` varchar(20) NOT NULL,
  `type` varchar(25) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL,
  `login` varchar(255) NOT NULL,
  `createdat` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medias_posts_idx` (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`id`, `name`, `file`, `rep`, `post_id`, `genre`, `type`, `thumb`, `online`, `login`, `createdat`) VALUES
(1, 'ronan', 'web/images/blog/ronan.png', 'web/images/blog/', 1, 'blog', 'blog', 'ronan.png', 1, 'bachelor', '2015-10-13 22:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `pages`
--

INSERT INTO `pages` (`id`, `titre`, `content`) VALUES
(1, 'CGV', 'Les conditions de règlement doivent obligatoirement préciser les conditions d''application et le taux d''intérêt des pénalités de retard exigibles le jour suivant la date de règlement figurant sur la facture, ainsi que le montant de l’indemnité forfaitaire pour les frais de recouvrement dû au créancier, dans le cas où les sommes dues sont réglées après cette date. Sauf disposition contraire qui ne peut toutefois fixer un taux inférieur à trois fois le taux d''intérêt légal, ce taux est égal au taux d''intérêt appliqué par la Banque centrale européenne à son opération de refinancement la plus récente majoré de 10 points de pourcentage. Les pénalités de retard sont exigibles sans qu''un rappel soit nécessaire.\r\nL’indemnité forfaitaire pour frais de recouvrement, dont le montant est fixé à 40 euros, est due de plein droit à son créancier par tout professionnel en situation de retard de paiement. Lorsque les frais de recouvrement exposés sont supérieurs au montant de cette indemnité forfaitaire, le créancier peut demander une indemnisation complémentaire sur justification. Le créancier ne peut toutefois pas invoquer le bénéfice de ces indemnités lorsque l’ouverture d’une procédure de sauvegarde, de redressement ou de liquidation judiciaire interdit le paiement à son échéance de la créance qui lui est due.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'bachelor', 'b146b712942f5379cbd872df78d7f11ed95afd71');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
