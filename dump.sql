-- phpMyUser SQL Dump
-- version 4.9.7
-- https://www.phpmyUser.net/
--
-- HÃ´te : localhost:8889
-- GÃ©nÃ©rÃ© le : lun. 11 oct. 2021 Ã  17:34
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de donnÃ©es : `qualitetests`
--

-- --------------------------------------------------------

--
-- Structure de la table `usersLogin`
--

CREATE TABLE `usersLogin` (
  `idUser` int(11) NOT NULL,
  `emailUser` tinytext NOT NULL,
  `pwdUser` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- DÃ©chargement des donnÃ©es de la table `usersLogin`
--

INSERT INTO `usersLogin` (`idUser`, `emailUser`, `pwdUser`) VALUES
(1, 'user@mail.com', '$2y$10$ZOWNd3S0W69b0CNgWZs1X.bYvdNPUteih1V/Do7jx8VZ5qvjKxcpq');

-- --------------------------------------------------------


--
-- Index pour la table `usersLogin`
--
ALTER TABLE `usersLogin`
  ADD PRIMARY KEY (`idUser`);


--
-- AUTO_INCREMENT pour la table `usersLogin`
--
ALTER TABLE `usersLogin`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

