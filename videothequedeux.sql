-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 15 nov. 2021 à 04:57
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `videothequedeux`
--

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `img`) VALUES
(25, 'Test', 'HOHEOH2OHDO', 'https://w6.streamcomplet3.tv/uploads/posts/2021-11/a1a64df04edce2bf774f8a601787f55f_image.jpg'),
(27, 'Army of Thieves', 'Dans ce prÃ©quel du film \"Army of the Dead\", une mystÃ©rieuse femme recrute Dieter, employÃ© de banque, afin de braquer des coffres-forts inviolables Ã  travers l\'Europe.', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/d43e3b4807c3fe670d072802dc6e1692_image.jpg'),
(28, 'Le Premier Roi', 'L\'histoire des jumeaux Remus et Romulus, fondateurs lÃ©gendaires de Rome.', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/9abcf3fdf8b5d2c61c292a5912593d5e_image.jpg'),
(29, 'Percy Jackson', 'Un jeune homme dÃ©couvre qu\'il est le descendant d\'un dieu grec et s\'embarque, avec l\'aide d\'un satyre et de la fille d\'Athena, dans une dangereuse aventure pour Ã©viter une guerre entre les dieux. Sur sa route, il devra affronter une horde d\'ennemis mythologiques bien dÃ©cidÃ©s Ã  l\'empÃªcher d\'atteindre son but.', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/4dcbd26e4437c1c55f40b276bf08efa0_image.jpg'),
(30, 'La Rencontre', 'L\'histoire s\'intÃ©resse Ã  un groupe d\'amis faisant une incroyable dÃ©couverte : un vaisseau spatial Ã©crasÃ© dans un champ avec un survivant Ã  bord...', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/a9927fd9eaa75e428a524d170b42c7f0_image.jpg'),
(31, 'Dreamland', 'Allemagne, 1961. Jeune acteur prometteur, Emil vient d\'Ãªtre engagÃ© par les lÃ©gendaires studios Babelsberg. Lors d\'un tournage, il rencontre la charmante Milou, une danseuse franÃ§aise. Ils tombent Ã©perdument amoureux. Mais leur passion est brutalement interrompue par la construction du mur de Berlin. SÃ©parÃ©s, ils risquent de ne plus jamais se revoir. Mais Emil a un planâ€¦', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/4a7862f0321374995e7063caa2866b41_image.jpg'),
(32, 'Nobody Sleeps', 'Un groupe d\'adolescents accros Ã  la technologie se rend dans un camp oÃ¹ il n\'y a pas de signal Internet et ils n\'ont pas accÃ¨s Ã  leurs smartphones. Cependant, l\'une des promenades de groupe Ã  travers les bois ne se terminera pas comme les organisateurs l\'avaient prÃ©vu. Ils devront se battre pour leur vie contre quelque chose qu\'ils n\'ont pas vu, mÃªme dans les endroits les plus sombres d\'Internet. Face Ã  ce danger mortel qui rÃ´de dans la forÃªt, les jeunes dÃ©couvriront la vraie amitiÃ©, l\'amour et le sacrifice.', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/51a5723c8a3de79dcf5fad6af86fac27_image.jpg'),
(33, 'Les Mondes de Ralph', 'Dans une salle dâ€™arcade, Ralph la casse est le hÃ©ros mal aimÃ© dâ€™un jeu des annÃ©es 80. Son rÃ´le est simple : il casse toutâ€¯! Pourtant il ne rÃªve que dâ€™une chose, Ãªtre aimÃ© de tousâ€¦ Vanellope Van Schweetz quant Ã  elle, Ã©volue dans un jeu de course, fabriquÃ© uniquement de sucreries. Son gros dÃ©faut : Ãªtre une erreur de programme, ce qui lui vaut dâ€™Ãªtre interdite de course et rejetÃ©e de tousâ€¦ Ces deux personnages nâ€™auraient jamais dÃ» se croiserâ€¦ et pourtant, Ralph va bousculer les rÃ¨gles et voyager Ã  travers les diffÃ©rents mondes de la salle dâ€™arcade pour atteindre son but : prouver Ã  tous quâ€™il peut devenir un hÃ©rosâ€¦ Ensemble, arriverontâ€ils Ã  atteindre leurs rÃªvesâ€¯?', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/f3f812303c164ca446766d297640e1db_image.jpg'),
(34, 'Ducobu 3', 'Nouvelle rentrÃ©e des classes pour l\'Ã©lÃ¨ve Ducobu, LÃ©onie Gratin et l\'instituteur Latouche. Mais cette annÃ©e, un rival de taille pour Ducobu dÃ©barque Ã  lâ€™Ã©cole : TGV, le roi de la triche 2.0. Alors que la situation financiÃ¨re de Saint-Potache devient dÃ©sastreuse, les deux cancres vont devoir unir leurs crÃ©ativitÃ©s pour remporter un concours de chant et sauver leur Ã©cole.', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/e6c7c27370db3f01b87c7c69aa7b209b_image.jpg'),
(35, 'Apollo 11', 'RÃ©alisÃ© Ã  partir d\'images 70mm inÃ©dites rÃ©cemment dÃ©couvertes et plus de 11 000 heures d\'enregistrements audio, Apollo 11 plonge au cÅ“ur de la plus cÃ©lÃ¨bre mission de la NASA et des premiers pas de lâ€™Homme sur la Lune. Ce film est un voyage en immersion aux cÃ´tÃ©s des astronautes et du centre de contrÃ´le de la mission et permet de vivre au plus prÃ¨s les inoubliables journÃ©es de 1969 dont on cÃ©lÃ¨bre cette annÃ©e le 50Ã¨me anniversaire.', 'https://w3.streamcomplet3.tv/uploads/posts/2021-09/aa1f55d49724ec7fdcd54efc26b85f14_image.jpg'),
(36, 'Annette', 'Los Angeles, de nos jours. Henry est un comÃ©dien de stand-up Ã  lâ€™humour fÃ©roce. Ann, une cantatrice de renommÃ©e internationale. Ensemble, sous le feu des projecteurs, ils forment un couple Ã©panoui et glamour. La naissance de leur premier enfant, Annette, une fillette mystÃ©rieuse au destin exceptionnel, va bouleverser leur vie.', 'https://w6.streamcomplet3.tv/uploads/posts/2021-09/381faa70511540a44dc33e9e6dc5f300_image.jpg'),
(37, 'The Five Heartbeats', 'Chicago, les annÃ©es 60. Lâ€™ascension dâ€™un groupe de cinq musiciens, les Five Heartbeats, dans le monde de soul. Leur carriÃ¨re est prise en main par un manager sur le retour qui leur permet d\'enregistrer leur premier disque. Mais les espoirs que leur fera miroiter un producteur vÃ©reux plongeront le groupe dans une discorde totale.', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/830aeae03521f976277da3ba54824cb2_image.jpg'),
(38, 'Mon espion', 'L\'agent JJ doit accomplir une mission de surveillance avec sa collÃ¨gue dans un immeuble modeste. Il doit garder un oeil sur Kate, une femme dont l\'ex-mari criminel a Ã©tÃ© assassinÃ©. Cependant, la mission est mise en pÃ©ril lorsqu\'une jeune fille de 9 ans, Sophie, dÃ©couvre leur planque et les dÃ©tails de leur mission. La fillette menace de tout rÃ©vÃ©ler Ã  ses supÃ©rieurs Ã  moins que JJ lui apprenne le mÃ©tier d\'espion.', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/5bdbe14d9af5295d07ca0195802d8de6_image.jpg'),
(39, 'Kon-Tiki', 'En 1947, Thor Heyerdahl s\'embarque avec un Ã©quipage de cinq hommes sur un radeau de balsa baptisÃ© Kon-Tiki, pour traverser le Pacifique de l\'AmÃ©rique du Sud Ã  la PolynÃ©sie. L\'anthropologue se transforme en explorateur maritime afin de vÃ©rifier sa thÃ©orie, selon laquelle la population polynÃ©sienne venait d\'AmÃ©rique du Sud...', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/6a8ac4004cb5c853689de24b1d89395e_image.jpg'),
(42, 'Cuban Network', 'DÃ©but 90. Un groupe de Cubains installÃ©s Ã  Miami met en place un rÃ©seau dâ€™espionnage. Leur mission : infiltrer les groupuscules anti-castristes responsables dâ€™attentats sur lâ€™Ã®le.', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/f96433414489408366a960be48bba245_image.jpg'),
(43, 'Sword of Blood', 'En pleine Ã¨re mÃ©diÃ©vale, un Ã©vangÃ©liste dÃ©barque sur une plage pour rÃ©pandre la chrÃ©tientÃ© auprÃ¨s dâ€™une tribu aux rites paÃ¯ens. Il va dâ€™abord Ãªtre secouru par un jeune homme sans nom, mais lâ€™intÃ©gration va sâ€™avÃ©rer plus compliquÃ©e que prÃ©vu.', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/abd72c2646f81857236dd51205d3b562_image.jpg'),
(44, 'Respect', 'Un biopic inspirÃ© de la vie de la chanteuse Aretha Franklin, de son enfance avec un pÃ¨re rÃ©vÃ©rend et activiste des droits civiques Ã  sa carriÃ¨re prolifique comme diva de la soul.', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/59ca2336be916e8d0aa77d4d625ad7c6_image.jpg'),
(45, 'Army of Thieves', 'Dans ce prÃ©quel du film \"Army of the Dead\", une mystÃ©rieuse femme recrute Dieter, employÃ© de banque, afin de braquer des coffres-forts inviolables Ã  travers l\'Europe.', 'https://w6.streamcomplet3.tv/uploads/posts/2021-10/d43e3b4807c3fe670d072802dc6e1692_image.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
