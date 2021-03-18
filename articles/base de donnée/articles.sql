-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 18 mars 2021 à 12:35
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `articles`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_art` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` date NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_art`, `titre`, `auteur`, `image`, `description`, `date_created`, `id_categorie`) VALUES
(9, 'En route vers les quarts de finale', 'Marouane TALBI', 'real.jpg', 'OpposÃ© Ã  l\'Atalanta Bergame en 8es de finale retour de la Ligue des Champions ce mardi soir, le Real prend le quart grÃ¢ce Ã  Benzema.\r\nAvec un tel Karim Benzema, qui a besoin de Cristiano Ronaldo ? Le FranÃ§ais est plus que jamais cette saison le clutch player du Real Madrid, qui surgit quand on a besoin de lui.\r\n\r\nDouble buteur en Liga lors du weekend pour permettre au Real de se tirer d\'une mauvaise posture contre Elche (2-1) avec un deuxiÃ¨me but dans les ultimes instants de la rencontre, le sauveur atitrÃ© du Real cette saison a encore frappÃ© en Ligue des Champions.\r\n\r\nAlors que le Real recevait l\'Atalanta Bergame ce mardi soir pour un 8e de finale dretour de C1 encore trÃ¨s indÃ©cis aprÃ¨s le 1-0 du match aller, Benzema s\'est encore illustrÃ©, pour le grand bonheur de Zinedine Zidane.', '2021-03-18', 4),
(10, 'CrÃ©ation de la bible du DÃ©veloppeur WEB', 'Nathalie BENDAVID', 'dossier.jpg', 'L\'impact de JavaScript sur le web ne peut Ãªtre sous-estimÃ©. Les gÃ©ants de la technologie ont largement soutenu le dÃ©veloppement du langage. Outre le V8 de Google, de nombreux projets open source, comme React de Facebook, ou Angular de Google, contribuent Ã  diffuser des applications web sur les smartphones et les ordinateurs de bureau.\r\n\r\nAprÃ¨s que Netscape et Sun Microsystems â€“ oÃ¹ Java a Ã©tÃ© crÃ©Ã© en mai 1995 par James Gosling â€“ ont annoncÃ© JavaScript en dÃ©cembre 1995, Microsoft choisit Visual Basic (VB) comme norme pour la crÃ©ation d\'applications web, utilisant VB Script pour son navigateur Internet Explorer. Oracle rachÃ¨te Sun Microsystems en 2008, en grande partie pour mettre la main sur Java et son Ã©norme Ã©cosystÃ¨me de dÃ©veloppement.\r\n\r\nLe plus important dÃ©veloppeur de JavaScript est Brendan Eich, cofondateur de lâ€™Ã©diteur de Firefox Mozilla et aujourd\'hui chef de Brave, l\'un des nombreux navigateurs basÃ©s sur le projet Chromium. Il travaillait chez Netscape en 1995 lorsqu\'il a crÃ©Ã© une version Unix de Mocha, le prÃ©curseur de JavaScript.\r\n\r\nJavaScript a Ã©tÃ© conÃ§u Ã  l\'origine comme un Â« langage de script complÃ©mentaire Ã  Java Â», dans lequel toutes les tÃ¢ches de programmation sophistiquÃ©es sont effectuÃ©es via des applets Java, selon Brendan Eich. Mais les dÃ©veloppeurs web ont vite compris qu\'ils n\'avaient besoin que de JavaScript.', '2021-03-17', 1),
(11, 'Justice League arrive enfin chez nous !', 'Fatima MEKKAOUI', 'jl.jpg', 'Justice League, rÃ©ponse ratÃ©e de Warner Bros. aux films Avengers, va avoir droit Ã  une nouvelle chance grÃ¢ce Ã  la fameuse Snyder Cut. On fait le point sur ce projet qui cherche Ã  rÃ©affirmer l\'univers cinÃ©matographique de DC Comics et sera diffusÃ© Ã  partir du 18 mars 2021 en France.\r\n\r\nContrairement au Marvel Cinematic Universe, les films DC Comics produits sous le pavillon Warner Bros. nâ€™ont pas su crÃ©er un univers cohÃ©rent et rÃ©ussi. Câ€™Ã©tait pourtant lâ€™idÃ©e amorcÃ©e par Zack Snyder avec Man of Steel en 2013. Il y a ensuite eu le mÃ©diocre Batman v Superman : Lâ€™Aube de la justice (2016) et, surtout, le ratÃ© Justice League (2017), rÃ©union de superhÃ©ros qui a achevÃ© les ambitions de Warner Bros.. Ã€ la dÃ©charge de Justice League, le blockbuster a connu un changement de rÃ©alisateur en cours de route, Zack Snyder ayant cÃ©dÃ© sa place Ã  Joss Whedon aprÃ¨s une tragÃ©die familiale. \r\n\r\nAssassinÃ© par la presse (45/100 sur Metacritic), Justice League a rapportÃ© plus de deux fois moins dâ€™argent que le tout premier Avengers sorti en 2012 : 658 millions de dollars, contre 1,5 milliard de dollars selon les chiffres fournis par Box Office Mojo. Aujourdâ€™hui, cet Ã©chec, tant critique que commercial, permet Ã  Zack Snyder de proposer, enfin, le Justice League dont il rÃªvait initialement. Il sera proposÃ© en SVOD sur HBO Max le 18 mars prochain. En France, il faudra, dans un premier temps, passer par la case achat. En attendant, on fait le point sur ce projet un peu mÃ©galo.', '2021-03-18', 5);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'informatique'),
(2, 'politique'),
(3, 'scientifiques '),
(4, 'sport'),
(5, 'cinema');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(70) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `pass`, `role`, `created`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2021-03-16 08:02:33'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2, '2021-03-16 08:02:33'),
(5, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 1, '2021-03-16 13:06:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_art`),
  ADD KEY `fk` (`id_categorie`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
