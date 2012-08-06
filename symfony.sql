-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Sam 04 Août 2012 à 21:01
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `survey_id` int(11) DEFAULT NULL,
  `answer` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DD714F13B3FE509D` (`survey_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `answer`
--

INSERT INTO `answer` (`id`, `survey_id`, `answer`, `total`) VALUES
(1, NULL, 'qwwwww', 1),
(2, NULL, 'wwwwwwwwwwww', 1),
(3, NULL, 'wwwwwwww', 1),
(4, NULL, 'rrrrrrr', 1),
(5, NULL, 'rrrrrrrrrrrrr', 1),
(6, NULL, 'uuuuuuuuuu', 1);

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CD8737FAF675F31B` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `author_id`, `title`, `date_created`, `content`, `image`) VALUES
(13, 5, 'Guide des pouvoirs du sorcier', '2012-07-27 13:05:48', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L''avantage du Lorem Ipsum sur un texte générique comme ''Du texte. Du texte. Du texte.'' est qu''il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour ''Lorem Ipsum'' vous conduira vers de nombreux sites qui n''en sont encore qu''à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d''y rajouter de petits clins d''oeil, voire des phrases embarassantes et)', 'legacy_wp2.jpg'),
(14, 5, 'Meilleur parrain du mois', '2012-07-27 13:07:24', 'Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d''entre elles a été altérée par l''addition d''humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu''il n''y a rien d''embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d''humour.', 'Coolest-dog-leash.jpg'),
(15, 5, 'Comment vaincre Brutus le pegase noir?', '2012-07-27 13:08:54', 'Contrairement à une opinion répandue, le Lorem Ipsum n''est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s''est intéressé à un des mots latins les plus obscurs, consectetur, extrait d''un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l''éthique. Les premières lignes du Lorem Ipsum, "Lorem ipsum dolor sit amet...", proviennent de la section 1.10.32', 'dark_pegasus_by_arturszott-d4mkge3.png'),
(16, 7, 'A la decouverte de nouveaux horizons!', '2012-07-27 13:11:35', 'Etiam eros enim, rhoncus ac molestie non, pulvinar quis dolor. Duis ultricies dictum nisl, eget tincidunt libero feugiat in. Nunc ac nulla arcu, et accumsan nisl. Praesent lacus sapien, ornare non iaculis sed, mattis et elit. Nunc pulvinar, lacus id sodales ultrices, felis mi sollicitudin nibh, ac venenatis sapien augue id magna. Quisque eu varius massa. Praesent euismod sagittis elit eu auctor. Duis consequat porttitor justo, vitae ultrices dolor bibendum at. Nunc fringilla aliquam mi a venenatis. Cras vitae volutpat tellus. Mauris molestie justo in purus venenatis sollicitudin. Maecenas vel mi libero, dapibus feugiat libero. Pellentesque cursus egestas elementum. Integer iaculis nisi at ante luctus euismod. Nullam eu neque varius libero eleifend mattis quis sed mauris. Donec at nulla imperdiet velit accumsan hendrerit at a nibh.', 'Colourfull-Forest.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_event` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FA6F25A3815EE22B` (`date_event`),
  KEY `IDX_FA6F25A3F675F31B` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `date_event`, `title`, `description`, `author_id`, `date_created`) VALUES
(3, '2012-09-15 19:00:00', 'Tournoi PVP inter clan', 'Monarch shield a remporter', NULL, '0000-00-00 00:00:00'),
(4, '2012-09-30 18:30:00', 'Streaming de NightlySparks', 'Venez suivre les aventures allechantes de ce joueur', NULL, '0000-00-00 00:00:00'),
(5, '2012-07-11 07:10:30', 'Date depasse', 'Test ', NULL, '0000-00-00 00:00:00'),
(6, '2012-08-06 00:00:00', 'Ouverture du site', 'Venez nombreux pour feter ca', NULL, '0000-00-00 00:00:00'),
(7, '2012-08-14 00:00:00', 'Maintenance du site', 'Le site sera innacessible pendant 5 heures', NULL, '0000-00-00 00:00:00'),
(8, '2012-10-03 19:00:00', 'Election du meilleur joueur', 'Votez pour l''une des stars qui se presenteront a vous', NULL, '0000-00-00 00:00:00'),
(9, '2012-09-09 18:00:00', 'Distribution des items du coffre', 'Distribution mensuelle des objets', NULL, '0000-00-00 00:00:00'),
(10, '2012-10-10 20:00:00', 'Fiesta des demons', 'Chasse a L''Homme', NULL, '2012-08-02 19:58:39');

-- --------------------------------------------------------

--
-- Structure de la table `ldc_user`
--

CREATE TABLE IF NOT EXISTS `ldc_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `username_canonical` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_canonical` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `birthday` date NOT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_56B2ED092FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_56B2ED0A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `ldc_user`
--

INSERT INTO `ldc_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `birthday`, `signature`, `gender`, `register_date`, `image`) VALUES
(5, 'night', 'night', 'jfrancois.laiS@gmail.com', 'jfrancois.lais@gmail.com', 1, 'klmza6fjo3kwc8wowgcogcs0wwcsggc', 'zJEPeDGvHfcM9t72jQi371Dr7CultauIugGTVwWaiFbhaWnaI6XcO6eEQR2oCyWyzBkYbKLKuNsceJ63R21IoA==', '2012-08-04 18:13:14', 0, 0, NULL, '95j6zqr9dioscwokwswk4084o444gc0w0so0ws4wcks4w0sgk', NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '0000-00-00', NULL, '', '0000-00-00 00:00:00', NULL),
(6, 'popo', 'popo', 'jkjjkj@dfef.ki', 'jkjjkj@dfef.ki', 1, '84prk7mvfm8sckocsggk8gsokswkwos', 'rna9i1r84Uf2z6bH1MBO2dXI8fXCp9woMSDXHEAgdZpajOHl00ybzaIy20xAy1xVsQKzBCmc8nMq9hRliZj2cA==', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, '1892-01-05', NULL, 'M', '2012-07-24 21:31:05', NULL),
(7, 'blo', 'blo', 'blo@blo.com', 'blo@blo.com', 1, 'g6k8ilvj3zswgoc80gogkk0o4o8w44c', 'duYQjr41fQ1I2w6zGINLGIMKEuSBD4N0bgEQ/lAUd/kaDU79zijcsiQcmpQUMj2E96McMrhnPDrCOVjpJ2zDJA==', '2012-07-27 13:10:30', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, '1952-01-01', NULL, 'M', '2012-07-25 18:32:16', NULL),
(8, 'player1', 'player1', 'player11@playorshame.com', 'player11@playorshame.com', 1, '3431q4v1ol0kcsko84sw0c4g044k4sw', '76LFjYKZLos/hrw1hRWHRJUINuQFDXncIeBOAbXuRdW4x9w3udL4PDYOTKhbJzTsjBj5UxU1n0HrKFcjxqmPDw==', '2012-08-04 14:51:08', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, '1984-07-15', NULL, 'M', '2012-07-30 15:02:19', NULL),
(10, 'ttt', 'ttt', 'ttt@tt.fr', 'ttt@tt.fr', 1, 'k90flp2qsk08cgsso0cg4o8oswkoowo', '1GeISv6lSH7NSnH5LF9icVHR2JlZMYZMWj9fBRa7Fbk0lv3T0+/k9GzjdHseHEvNGOQDEcAymGa6KiTfNy8Y8g==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, '1983-01-01', NULL, 'M', '2012-08-01 08:31:43', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sliderimage`
--

CREATE TABLE IF NOT EXISTS `sliderimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B8DB6447F675F31B` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `sliderimage`
--

INSERT INTO `sliderimage` (`id`, `author_id`, `image`, `title`, `description`, `date_created`, `url`) VALUES
(1, 5, '1.jpg', 'Rejoignez Ldc, super slogan in here!', 'Communaute de joueurs chics, parrainage des nouveaux venus, etc...', '2012-07-29 13:23:56', 'https://www.google.fr/'),
(2, 5, '2.jpg', 'A la decouverte de nouveaux horizons!', 'Envie d''aventure? Entrez dans le monde fantastique des terres super fantastiques!', '2012-07-29 17:17:40', 'http://localhost/Symfony_/www/app_dev.php/ldc/articles/show/16'),
(3, 5, '3.jpg', 'Nature', 'bla bla bla', '2012-07-29 17:24:30', 'http://localhost/Symfony_/www/app_dev.php/ldc/'),
(4, 5, '4.jpg', 'In the shadows', 'Darkness. Turn on the light', '2012-07-29 21:03:18', 'http://localhost/Symfony_/www/app_dev.php/ldc/');

-- --------------------------------------------------------

--
-- Structure de la table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `question` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AAF39ECAF675F31B` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `survey`
--

INSERT INTO `survey` (`id`, `author_id`, `date_created`, `question`) VALUES
(12, 8, '2012-08-04 10:50:56', 'asdasd'),
(13, 8, '2012-08-04 10:52:15', 'wwwwwww'),
(14, 8, '2012-08-04 10:56:34', 'rrrrr'),
(15, 8, '2012-08-04 12:03:16', 'juuuuuuuuuuuu');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `FK_DD714F13B3FE509D` FOREIGN KEY (`survey_id`) REFERENCES `survey` (`id`);

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_CD8737FAF675F31B` FOREIGN KEY (`author_id`) REFERENCES `ldc_user` (`id`);

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `FK_FA6F25A3F675F31B` FOREIGN KEY (`author_id`) REFERENCES `ldc_user` (`id`);

--
-- Contraintes pour la table `sliderimage`
--
ALTER TABLE `sliderimage`
  ADD CONSTRAINT `FK_B8DB6447F675F31B` FOREIGN KEY (`author_id`) REFERENCES `ldc_user` (`id`);

--
-- Contraintes pour la table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `FK_AAF39ECAF675F31B` FOREIGN KEY (`author_id`) REFERENCES `ldc_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
