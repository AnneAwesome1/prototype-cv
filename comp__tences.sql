-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2022 at 04:56 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site-cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `compétences`
--

CREATE TABLE `compétences` (
  `id_competence` int(255) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `def` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `compétences`
--

INSERT INTO `compétences` (`id_competence`, `name`, `img_url`, `def`) VALUES
(1, 'HTML', 'png_html.png', 'Langage de balisage utilisé pour la création de pages web, permettant notamment de définir des liens hypertextes.\r\nSynonymes : XML'),
(2, 'CSS', 'png_css.png', 'Langage basé sur des règles. \r\nOn définit des règles de styles destinées à des éléments ou des groupes d\'éléments particuliers dans la page. \r\nLa règle commence par un sélecteur, l\'élément HTML mis en forme.'),
(3, 'Bootstrap ', 'png_Bootstrap.png', 'Framework populaire pour le développement de sites web. \r\nL\'outil fournit des modèles pour CSS et HTML avec lesquels vous pouvez mettre en place une conception Web moderne.'),
(4, 'JQuery', 'png_jquery.png', 'Jquery, est une bibliothèque Javascript gratuite, libre et multiplateforme. Compatible avec l\'ensemble des navigateurs Web.'),
(5, 'JavaScript', 'png_JavaScript.png', 'JavaScript est un langage de programmation qui permet de créer du contenu mis à jour de façon dynamique, de contrôler le contenu multimédia, d\'animer des images, et tout ce à quoi on peut penser.'),
(6, 'SQL', 'png_sql.png', 'Le langage SQL est un langage utilisé pour exploiter des bases de données.\r\nIl permet la définition, la manipulation et le contrôle de sécurité de données. \r\nMa balise section compétences est manipulée via une base de données grâce au langage SQL.'),
(7, 'PHP', 'png_php.png', 'Le PHP, Hypertext Preprocessor, désigne un langage informatique, ou un langage de script, utilisé pour la conception de sites web dynamiques. '),
(8, 'SYMFONY', 'png_synfony.png', 'Symfony est un Framework qui présente un ensemble de composant PHP autonomes qui peuvent être utilisés dans des projets web privé ou open source.'),
(9, 'WORDPRESS', 'png_wordpress.png', 'Wordpress est un logiciel destiné à la conception et à la mise à jour dynamique de site web ou d\'applications multimédias.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compétences`
--
ALTER TABLE `compétences`
  ADD PRIMARY KEY (`id_competence`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compétences`
--
ALTER TABLE `compétences`
  MODIFY `id_competence` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
