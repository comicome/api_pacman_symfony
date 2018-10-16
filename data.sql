-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:7779
-- Généré le :  mar. 16 oct. 2018 à 09:22
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `pacman`
--

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `age` int(11) NOT NULL,
  `famille` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `couleur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nourriture` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `age`, `famille`, `couleur`, `nourriture`) VALUES
(1, 'Dedo', 'dedo', 'test@test.fr', 'test@test.fr', 1, NULL, '$2y$13$BIOfYackNi9TB7rkB/yqPOQeuLVa2xz03sgV6KrC/nQ1gO6eLQgbC', '2018-10-05 16:33:02', NULL, NULL, 'a:0:{}', 23, 'Corbeay', 'Bleu', 'Pizza'),
(2, 'Dino', 'dino', 'tost@test.fr', 'tost@test.fr', 1, NULL, '$2y$13$IUfiZh13M1zWTKunPSdWCeENOxNAM3VofAsgQEX7a7wzPwgDSpxbe', '2018-10-10 17:17:44', NULL, NULL, 'a:0:{}', 67, 'Corbeay', 'Bleu', 'Pizza'),
(3, 'Côme', 'côme', 'come.dlvl@gmail.com', 'come.dlvl@gmail.com', 1, NULL, '$2y$13$V8qcp89jTVkKJnoYXHr2d.R7kV9aGkkRiIFn.xcPnu6qm94aet3tm', '2018-10-05 17:00:18', NULL, NULL, 'a:0:{}', 23, 'Delaval', 'Red', 'Hamburger'),
(4, 'Patoche', 'patoche', 'patoche@test.com', 'patoche@test.com', 1, NULL, '$2y$13$mwI5OpyrXfk1JjDRMptOs.13upPRi.9/LBovCLbSqr7Mah3PfQBIK', '2018-10-15 17:26:32', NULL, NULL, 'a:0:{}', 78, 'Tucker', 'Jaune', 'Couscous');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
