SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Base de données : `clicknread`

CREATE DATABASE IF NOT EXISTS `clicknread` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `clicknread`;

-- --------------------------------------------------------


-- Structure de la table `imagesdecouverture`

CREATE TABLE `imagesdecouverture` (
  `id` int(50) NOT NULL,
  `images` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------


-- Structure de la table `livres`

CREATE TABLE `livres` (
  `id` int(10) NOT NULL,
  `titre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datedeparution` date NOT NULL,
  `description` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Ajout des données dans la table `livres`

INSERT INTO `livres` (`id`, `titre`, `auteur`, `genre`, `datedeparution`, `description`) VALUES
(1, 'Vingt Mille Lieues sous les mers', 'Jules Verne', 'Aventures', '1869-01-01', 'Le professeur Aronnax, son domestique Conseil et le harponneur Ned Land, qui cherchaient à capturer un fantastique monstre marin, se retrouvent prisonniers du capitaine Némo, à bord de son sous-marin le Nautilus.\r\nQuel lourd secret cache Némo pour vouloir les retenir ainsi à jamais ?'),
(2, 'Damnés', 'Lauren Kate', 'Roman d\'amour', '2010-11-18', 'L’amour impossible entre une simple mortelle et un ange déchu. Luce, 17 ans, entre à Sword & Cross, un lycée d’éducation surveillée où ses parents l’ont envoyée à la suite d’événements survenus l’été précédent : un garçon avec qui elle est sortie un soir est mort mystérieusement dans un incendie, dont elle est sortie.'),
(3, 'Black-Out', 'Marc Elsberg', 'Thriller', '2016-03-23', 'Par une froide soirée d’hiver, le réseau électrique européen commence à lâcher. De nombreux pays s’enfoncent dans l’obscurité et plusieurs centrales nucléaires mettent en danger la vie de millions d’êtres humains. Menace terroriste ou défaillance technique ? Piero Manzano, ex-hacker italien, croit savoir qui est responsable.'),
(4, 'La Maison des oubliés', 'Peter James', 'Thriller', '2020-02-13', 'Le déménagement dans ce manoir charmant devait être le point de départ pour une nouvelle vie. Après des années passées dans la banlieue de Brighton, Ollie Harcourt ne pouvait rêver mieux qu\'une existence paisible à la campagne. Le reste de la famille suit d\'un pas hésitant, mais ne rechigne pas pour autant à cette nouvelle aventure.'),
(5, 'Compter les couleurs', 'Agnès Ledig', 'Fiction', '2021-10-20', 'Deux voix, deux visages, deux récits. À travers la lumière de leurs journaux intimes, Édouard et Élise se racontent et se répondent. Ils avaient le même âge quand ils se sont rencontrés, quand ils se sont aimés. Ils se retrouvent trente-trois ans plus tard.Quel est cet amour si fort, si puissant qu\'il peut renaître de la déchirure ?'),
(6, 'Longhope Abbey', 'Mia Vincy', 'Romance', '2021-09-01', 'Injustement mise au ban de la société, la malicieuse Thea Knight n\'est plus à un scandale près. Pour permettre à sa soeur Helen de fuir en Écosse avec son bien-aimé, elle se fait passer pour elle le temps d\'une soirée. Mais tout se complique quand l\'arrogant comte de Luxborough la demande en mariage.'),
(7, 'Salem', 'Stephen King', 'Thriller', '2009-02-01', 'Le Maine, 1970. Ben Mears revient à Salem et s’installe à Marsten House, inhabitée depuis la mort tragique de ses propriétaires, vingt-cinq ans auparavant. Mais, très vite, il doit se rendre à l’évidence : il se passe des choses étranges dans cette petite bourgade. Un chien est immolé, un enfant disparaît, et l’horreur s’infiltre, se répand, aussi inéluctable que la nuit qui descend sur Salem.'),
(8, 'A la croisée des mondes', 'Philip Pullman', 'Fantastique', '2017-10-19', 'Ce n\'était pas une vie ordinaire pour une jeune fille de onze ans : Lyra vivait, en compagnie de son dæmon Pantalaimon, parmi les Érudits du Jordan Collège, passant ses journées à courir dans les rues d\'Oxford à la recherche éperdue d\'aventures.'),
(9, '100 fiches pour réussir sa licence de psychologie', 'Catherine Pelé-Bonnard', 'Scolaire', '2021-08-17', '100 fiches, claires et synthétiques, pour comprendre les matières dispensées en licence de psychologie et pour découvrir une méthodologie de la réussite pour ce cursus exigeant.'),
(10, 'Fonction publique 240 fiches', 'Loïc Goffe et Pierre-Brice et Pascal Leprêtre ', 'Scolaire', '2021-08-17', 'Mémorisez l\'essentiel pour entrer ou évoluer dans la fonction publique grâce à ce livre original en fiches, schémas et vidéos !'),
(11, 'Explorer la région Bretagne', 'Lonely Planet', 'Voyage', '2021-03-11', 'Un guide Lonely Planet 100% testé sur le terrain, et riche en secrets locaux, pour découvrir le meilleur de la Bretagne\r\nUn guide tout en couleurs illustré par des dizaines de photos, avec une couverture de l\'ensemble de la Bretagne : Côtes-d\'Armor, Finistère, Ille-et-Vilaine, Loire-Atlantique, Morbihan.'),
(12, 'Guide de sophrologie appliquée', 'Richard Esposito', 'Santé', '2021-12-08', 'Qu\'il soit thérapeute de formation initiale ou non le sophrologue est conduit à intervenir dans des milieux souvent très différents (entreprise école hôpital...) auprès de personnes présentant des pathologies ou des troubles divers (acouphènes céphalées cancer troubles du comportement alimentaire...) ou ayant des attentes très différentes (bien-être estime de soi...).'),
(13, 'La France des pâtisseries', 'François Blanc', 'Cuisine', '2021-10-14', 'Un tour de France avec 50 pâtissiers incontourables et 100 recettes La France est riche de traditions sucrées et de talents pâtissiers. Ce livre fait honneur à cet artisanat en présentant 50 pâtissiers et 100 recettes à faire saliver tous les amateurs.'),
(14, '1064 exercices pour bien débuter aux échecs', 'Stéphane Escafre', 'Loisirs', '2011-01-01', 'Tout apprendre à son rythme, depuis le déplacement des pièces jusqu\'aux mats des champions. Cet ouvrage très complet enseigne en détail toutes les techniques de base utilisées par les joueurs de club et les grands maîtres.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datedenaissance` date NOT NULL,
  `adressepostale` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Ajout des données dans la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `datedenaissance`, `adressepostale`, `type`, `password`) VALUES
(1, 'testadmin', 'testadmin', 'testadmin@testadmin', '2021-10-11', 'testadmin', 'admin', '597f5441e7d174b607873874ed54b974674986ad543e7458e28a038671c9f64c'),
(2, 'testuser', 'testuser', 'testuser@testuser', '2021-10-11', 'testuser', 'user', 'ae5deb822e0d71992900471a7199d0d95b8e7c9d05c40a8245a281fd2c1d6684'),
(3, 'testinscrit', 'testinscrit', 'testinscrit@testinscrit', '2021-10-11', 'testinscrit', 'user', '4c6bff9e2dba8ab1759c3d627ae80252e6f9e9eac6e8adcbd2abfe69a07f0f78'),
(4, 'testinscrit2', 'testinscrit2', 'testinscrit2@testinscrit2', '2021-10-11', 'testinscrit2', 'admin', '2f259337d177e0bc957eb9148225c5be1efee28a7897cdbac694d7e1c721f712');

