-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 05 mars 2020 à 23:47
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `visiteurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `connectes`
--

CREATE TABLE `connectes` (
  `ip` varchar(30) NOT NULL,
  `date_visite` datetime NOT NULL,
  `pages_vues` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `connectes`
--

INSERT INTO `connectes` (`ip`, `date_visite`, `pages_vues`) VALUES
('127.0.0.1', '2020-02-16 00:00:00', 3),
('127.0.0.1', '2020-02-16 13:08:00', 4),
('127.0.0.1', '2020-02-16 13:13:00', 1),
('127.0.0.1', '2020-02-16 13:37:00', 1),
('127.0.0.1', '2020-02-16 13:40:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `utilisateur1` int(11) NOT NULL,
  `utilisateur2` int(11) NOT NULL,
  `contenu` varchar(255) DEFAULT NULL,
  `dateenvoi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `utilisateur1`, `utilisateur2`, `contenu`, `dateenvoi`) VALUES
(1, 1, 21, 'coucou', '2020-03-02 21:55:55'),
(2, 21, 1, 'Bonsoir', '2020-03-02 21:56:32'),
(3, 1, 21, 'alors comment vas tu ', '2020-03-02 22:01:26'),
(5, 1, 21, 'envoi moi les cours stp', '2020-03-04 18:22:13'),
(6, 1, 21, 'oui ce soir ', '2020-03-04 18:26:22'),
(7, 1, 21, 'regarde tes mails', '2020-03-05 22:21:41'),
(8, 1, 21, 'je vais t envoyer ', '2020-03-05 22:37:14'),
(9, 1, 21, 'alors tu as recu', '2020-03-05 22:52:16'),
(10, 1, 9, 'bonsoir ', '2020-03-05 22:52:46'),
(11, 24, 1, 'salut', '2020-03-05 23:10:33'),
(12, 1, 24, 'coucou', '2020-03-05 23:11:10'),
(13, 24, 1, 'actualise ', '2020-03-05 23:12:00'),
(14, 1, 24, 'tejak el ka***', '2020-03-05 23:12:30');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `date_inscription` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `mdp`, `date_inscription`) VALUES
(1, 'massino', 'massino', '2020-02-25'),
(9, 'light', 'oui', '2020-02-25'),
(21, 'aziz', '12345', '2020-03-02'),
(22, 'jesappellegroute', 'g5', '2020-03-04'),
(23, 'Test', 'test', '2020-03-05'),
(24, 'rayan', 'wxcvbn', '2020-03-05');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `connectes`
--
ALTER TABLE `connectes`
  ADD PRIMARY KEY (`ip`,`date_visite`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`,`utilisateur1`,`utilisateur2`),
  ADD KEY `utilisateur1` (`utilisateur1`),
  ADD KEY `utilisateur2` (`utilisateur2`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`utilisateur1`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`utilisateur2`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
