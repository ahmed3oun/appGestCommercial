-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 29 Mai 2020 à 15:40
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `commands`
--

CREATE TABLE IF NOT EXISTS `commands` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `id_client` int(50) NOT NULL,
  `id_product` int(50) NOT NULL,
  `p_name` varchar(25) NOT NULL,
  `p_quantity` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(200) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `quantity` int(200) NOT NULL,
  `price` int(200) NOT NULL,
  `description` text,
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=155 ;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `quantity`, `price`, `description`, `image`) VALUES
(31, 'NAFHA', 'Soin de visage', 100, 70, 'Soin lissant contour des yeux et lÃ¨vres 30 ml', 0x7376312e6a7067),
(32, 'Lily of desert', 'Soin de visage', 100, 40, 'Gel alo vera 97% Externe Visage Corps 120ml\r\n', 0x7376322e6a7067),
(33, 'DR.THEISS', 'Soin de visage', 100, 35, 'Complexe visage anti-rides 50ml\r\n', 0x7376342e6a7067),
(34, 'CATTIER', 'Soin de visage', 100, 30, 'Baume Hydratant LÃ¨vres 4g 100% bio\r\n', 0x7376352e6a7067),
(35, 'MELVITA', 'Soin de visage', 100, 50, 'Eau Florale Adoucissante &amp; Anti-TÃ¢ches 200ml\r\n', 0x7376362e6a7067),
(37, 'LAVERA', 'Soin de visage', 100, 54, 'Baume Ã  lÃ¨vres rÃ©parateur Grenade argan 4g\r\n', 0x7376392e6a7067),
(38, 'JONZAC', 'Soin de visage', 100, 38, 'Gel dermo-nettoyant REhydrate 200ml\r\n', 0x737631302e6a7067),
(39, 'Lily of desert', 'Soin de visage', 100, 22, 'Gel alovera 97% Externe Visage et Corps 150ml\r\n', 0x737631312e6a7067),
(40, 'CATTIER', 'Soin de visage', 100, 45, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x737631322e6a7067),
(41, 'WELLEDA', 'Soin de visage', 100, 29, 'Creme au calendula Apaise &amp; ProtÃ¨ge 75ml\r\n', 0x737631332e6a7067),
(42, 'MELVITA', 'Soin de visage', 100, 38, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x737631342e6a7067),
(43, 'MELLVITA', 'Soin de visage', 100, 53, 'Soin lissant contour des yeux et lÃ¨vres 50 ml\r\n', 0x737631352e6a7067),
(44, 'MELLVITA', 'Soin de visage', 100, 43, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x737631362e6a7067),
(45, 'CATTIER', 'Soin de visage', 100, 28, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x737631382e6a7067),
(46, 'MELLVITA', 'Soin de visage', 100, 28, 'Huill Nuit Soin Revitalisant Peaux Matures 30ml\r\n', 0x737631392e6a7067),
(47, 'GRAVIER', 'Soin de corps', 100, 50, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x7363322e6a7067),
(48, 'KARALA NATURE', 'Soin de corps', 100, 65, 'Pierre Ponce Naturelle Corps\r\n', 0x7363332e6a7067),
(49, 'Z-TARUMA', 'Soin de corps', 100, 35, 'Z-Calm Gel Calmant et RÃ©gÃ©nÃ©rant 50 ml\r\n', 0x7363342e6a7067),
(51, 'AMANPRANA', 'Soin de corps', 100, 80, 'Huile de coco extra vierge, bio et Ã©quitable 325 ml\r\nEnter text here...', 0x7363362e6a7067),
(52, 'CATTIER', 'Soin de visage', 100, 38, 'Beurre de karitÃ© Pot de 100gr\r\n', 0x7363372e6a7067),
(53, 'COMPTOIRS', 'Soin de corps', 100, 48, 'CrÃ©me reparatrice BIO 30 ml\r\n', 0x736332302e6a7067),
(54, 'CATTIER', 'Soin de corps', 100, 19, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x7363392e6a7067),
(55, 'DR.THIESS', 'Soin de corps', 100, 38, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x736331302e6a7067),
(56, 'LAVERA', 'Soin de corps', 100, 45, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x736331312e6a7067),
(57, 'CATTIER', 'Soin de corps', 100, 39, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x736331322e6a7067),
(58, 'LAVERA', 'Soin de corps', 100, 65, 'CrÃ¨me corps Basis sensitiv 150 ml\r\n', 0x736331342e6a7067),
(59, 'GAMARDE', 'Soin de corps', 100, 40, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x736331352e6a7067),
(60, 'PHYTO-ACTIF', 'Soin de corps', 100, 80, 'Ostear gel de massage articulations 75 ml\r\n', 0x736331362e6a7067),
(61, 'DR.THEISS', 'Soin de corps', 100, 19, 'Soin lissant contour des yeux et lÃ¨vres 30 ml', 0x736331332e6a7067),
(62, 'NAFHA', 'Soin de cheuveux', 100, 13, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 0x736368312e6a7067),
(63, 'NAFHA', 'Soin de cheuveux', 100, 40, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x736368322e6a7067),
(64, 'CATIER', 'Soin de cheuveux', 100, 55, 'Mauris sed blandit nisi, ac hendrerit purus. Nulla blandit tortor non nunc lacinia tempor quis id diam.', 0x736368332e6a7067),
(65, 'NAFHA', 'Soin de cheuveux', 100, 35, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x736368342e6a7067),
(66, 'NAFHA', 'Soin de cheuveux', 100, 39, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x736368352e6a7067),
(67, 'NAFHA', 'Soin de cheuveux', 100, 40, 'Sed ipsum velit, scelerisque ac condimentum in, congue et erat. ', 0x736368362e6a7067),
(68, 'DR.THEISS', 'Soin de cheuveux', 100, 50, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x736368372e6a7067),
(69, 'CATTIER', 'Soin de cheuveux', 100, 42, 'Duis vulputate ipsum sed eros aliquam, quis porta dui congue.', 0x736368382e6a7067),
(70, 'NAFHA', 'Soin de cheuveux', 100, 40, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x736368392e6a7067),
(71, 'DR.THEISS', 'Soin de cheuveux', 100, 50, 'Duis vulputate ipsum sed eros aliquam, quis porta dui congue.', 0x73636831302e6a7067),
(72, 'NAFHA', 'Soin de cheuveux', 100, 63, 'Donec id risus dui. Cras egestas dui at sem facilisis interdum.', 0x73636831312e6a7067),
(73, 'CATTIER', 'Soin de cheuveux', 100, 50, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x73636831322e6a7067),
(74, 'DR.THEISS', 'Soin de cheuveux', 100, 60, 'dui turpis gravida orci, non elementum magna dui vel nulla 20 ml', 0x73636831312e6a7067),
(75, 'MOSQUETAS', 'Maquillage des yeux', 100, 25, 'Eyeliner Ã  la Rose MusquÃ©e - noir', 0x6d79302e6a7067),
(76, 'CARAMEL', 'Maquillage des yeux', 100, 30, 'Correcteur de Teint &amp; Anticerne nÂ°12 Beige Clair\r\n', 0x6d79312e6a7067),
(77, 'CARAMEL', 'Maquillage des yeux', 100, 70, 'Mascara Volumateur Extra Noir 41\r\n', 0x6d79322e6a7067),
(78, 'LAVERA', 'Maquillage des yeux', 100, 50, 'Trend sensitiv Soft Eyeliner crayon Noir 01\r\n', 0x6d79332e6a7067),
(79, 'LAVERA', 'Maquillage des yeux', 100, 60, 'Trend sensitiv Mascara Noir 13 ml\r\n', 0x6d79342e6a7067),
(80, 'LAVERA', 'Maquillage des yeux', 100, 70, 'Crayon Ã  paupiÃ¨res Kajal 10 Petrol 1,3g\r\n', 0x6d79352e6a7067),
(81, 'NAFHA', 'Maquillage des yeux', 100, 68, 'Trend sensitiv Mascara Noir 13 ml\r\n', 0x6d79362e6a7067),
(82, 'SANTE', 'Maquillage des yeux', 100, 60, 'Crayon Ã  paupiÃ¨res Kajal 10 Petrol 1,3g\r\n', 0x6d79372e6a7067),
(83, 'LAVERA', 'Maquillage des teints', 100, 70, 'Fond liquide Hyaluron 04 Beige Miel 30 ml\r\n', 0x6d74312e6a7067),
(84, 'Lily of desert', 'Maquillage des teints', 100, 50, 'Contour beig autour de yeux\r\n', 0x6d74322e6a7067),
(85, 'SANTE', 'Maquillage des teints', 100, 50, 'Crayon beig pour masquer les rides\r\n', 0x6d74332e6a7067),
(86, 'MASQUETASS', 'Maquillage des teints', 100, 35, 'Contour beig pour masquer les rides\r\n', 0x6d74342e6a7067),
(87, 'CATTIER', 'Maquillage des teints', 100, 18, 'Baume Hydratant LÃ¨vres 4g\r\n', 0x6d74352e6a7067),
(88, 'MELVITA', 'Maquillage des teints', 100, 25, 'Fond liquide Hyaluron 04 Beige Miel 30 ml\r\n', 0x6d74362e6a7067),
(89, 'LAVERA', 'Maquillage des teints', 100, 55, 'Fond poudre Hyaluron 00 Beige Miel 30 mg\r\n', 0x6d74372e6a7067),
(90, 'KARAWAN', 'Maquillage des teints', 100, 58, 'Fond poudre Hyaluron 04 Beige Miel 40 mg\r\n', 0x6d74382e6a7067),
(91, 'CARAMEL', 'Maquillage des levres', 100, 40, 'Rouge Ã  LÃ¨vres nÂ°204 nacrÃ© Rouge rosÃ©\r\n', 0x6d6c342e6a7067),
(92, 'CARAMEL', 'Maquillage des levres', 100, 60, 'Crayon Naturel Contour Yeux &amp; LÃ¨vres Brun nÂ°109\r\n', 0x6d6c322e6a7067),
(93, 'DR.THEISS', 'Maquillage des levres', 100, 55, 'Rouge Ã  LÃ¨vres nÂ°204 nacrÃ© Rouge sombre\r\n', 0x6d6c332e6a7067),
(94, 'COULEUR CARAMEL', 'Maquillage des levres', 100, 60, 'dui turpis gravida orci, non elementum magna dui vel nulla', 0x6d6c312e706e67),
(95, 'CARAMEL', 'Maquillage des levres', 100, 60, 'Crayon Naturel Contour Yeux &amp; LÃ¨vres Brun nÂ°109\r\n', 0x6d6c322e6a7067),
(96, 'COULEUR CARAMEL', 'Maquillage des levres', 100, 25, 'Crayon contour yeux et lÃ¨vres Vieux Rose 44\r\n', 0x6d6c362e6a7067),
(97, 'COULEUR CARAMEL', 'Maquillage des levres', 100, 55, 'Rouge Ã  lÃ¨vres 34 Timeless Red\r\n', 0x6d6c31302e6a7067),
(98, 'CATTIER', 'Maquillage des levres', 100, 70, 'Gloss Naturel Traitant nÂ°814 Marron GivrÃ© - 9ml\r\n', 0x6d6c31312e6a7067),
(99, 'JONZAC', 'Bain de bebe', 100, 70, 'BÃ©bÃ© gel lavant dermo-douceur 1 litre\r\n', 0x626231202832292e6a7067),
(100, 'JONZAC', 'Bain de bebe', 100, 70, 'BÃ©bÃ© gel lavant dermo-douceur 1 litre\r\n', 0x626231202832292e6a7067),
(101, 'DR.THEISS', 'Bain de bebe', 100, 40, 'Gel Nettoyant Corps &amp; Cheveux bÃ©bÃ© 500ml\r\n', 0x6262322e6a7067),
(102, 'MELVETTA', 'Bain de bebe', 100, 65, 'Savon de toilette extra riche 250G\r\n', 0x6262332e6a7067),
(103, 'CATTIER', 'Bain de bebe', 100, 35, 'Gel lavant doux bÃ©bÃ© sans savon 500ml\r\n', 0x6262342e6a7067),
(104, 'CATTIER', 'Bain de bebe', 100, 35, 'Gel lavant doux bÃ©bÃ© sans savon 500ml\r\n', 0x6262342e6a7067),
(105, 'PLANET KID', 'Bain de bebe', 100, 20, 'Gel lavant tout doux enfant 300 ml\r\n', 0x6262352e6a7067),
(106, 'NAFHA', 'Bain de bebe', 100, 80, 'Soin lissant contour des yeux et lÃ¨vres 30 ml', 0x6262362e6a7067),
(107, 'WELEDA', 'Bain de bebe', 100, 60, 'Duo crÃ¨me lavante Corps et Cheveux bÃ©bÃ©\r\n', 0x6262372e6a7067),
(108, 'DELMATHERM', 'Bain de bebe', 100, 50, 'Gel Nettoyant Moussant Corps et Cheveux 150 ml\r\n', 0x6262382e6a7067),
(109, 'JONZAC', 'Bain de bebe', 100, 50, 'BÃ©bÃ© gel lavant dermo-douceur 500 ml\r\n', 0x6262392e6a7067),
(110, 'LAVERA', 'Bain de bebe', 100, 35, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x626231302e6a7067),
(111, 'DIANE', 'Bain de bebe', 100, 60, 'Duo crÃ¨me lavante Corps et Cheveux bÃ©bÃ©\r\n', 0x626231312e6a7067),
(112, 'ACORELLE', 'Bain de bebe', 100, 50, 'Savon Extra Doux bÃ©bÃ© 100% BIO 100 gr\r\n', 0x626231322e6a7067),
(113, 'COSLYS', 'Bain de bebe', 100, 65, 'Gel lavant Universel 100% Naturell 1L\r\n', 0x626231332e6a7067),
(114, 'LOGOGNA', 'Bain de bebe', 100, 55, 'Shampooing Douche bÃ©bÃ© Au Calendula Flacon 200 ml\r\n', 0x626231352e6a7067),
(115, 'WELEDA', 'Bain de bebe', 100, 40, 'BAIN CREME BÃ©bÃ© Soin Protecteur Relipidant au Calendula 200 ml\r\n', 0x626231362e6a7067),
(116, 'CATTIER', 'Soin de bebe', 100, 40, 'CrÃ¨me Hydratante Visage &amp; Corps 75 ml\r\n', 0x7362312e6a7067),
(117, 'NATESANC', 'Soin de bebe', 100, 50, 'dui turpis gravida orci, non elementum magna dui vel nulla 30ml', 0x7362322e6a7067),
(118, 'JONZAC', 'Soin de bebe', 100, 65, 'Brumisateur 300ml eau thermale de Jonzac\r\n', 0x7362332e6a7067),
(119, 'DR.THEISS', 'Soin de bebe', 100, 65, 'CrÃ¨me protectrice visage et corps 75 ml\r\n', 0x7362342e6a7067),
(120, 'Vaseline', 'Soin de bebe', 100, 65, 'Fusce imperdiet varius sapien, at congue erat sollicitudin eu 54ml', 0x7362352e6a7067),
(121, 'SANTE', 'Soin du visage pour homme', 100, 55, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x737668312e6a7067),
(122, 'SANTE', 'Soin du visage pour homme', 100, 55, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x737668312e6a7067),
(123, 'LOGANA', 'Soin du visage pour homme', 100, 55, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x737668322e6a7067),
(124, 'LAVERA', 'Soin du visage pour homme', 100, 60, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x737668332e6a7067),
(125, 'CATTIER', 'Soin du visage pour homme', 100, 65, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x737668342e6a7067),
(126, 'GAMARA', 'Soin du visage pour homme', 100, 40, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x737668352e6a7067),
(127, 'WELEDA', 'Soin du visage pour homme', 100, 65, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x737668362e6a7067),
(128, 'WELEDA', 'Soin du visage pour homme', 100, 65, 'Soin lissant contour des yeux et lÃ¨vres 30 ml\r\n', 0x737668362e6a7067),
(129, 'FLORAME', 'Soin du visage pour homme', 100, 65, 'Duis nunc dolor, rutrum eget orci a, dignissim pellentesque magna. ', 0x737668372e6a7067),
(130, 'SANTE', 'Soin du visage pour homme', 100, 55, 'Phasellus cursus nisi eget risus viverra, finibus suscipit dolor gravida.', 0x737668382e6a7067),
(131, 'COSLYS', 'Soin du visage pour homme', 100, 45, 'Fusce imperdiet varius sapien, at congue erat sollicitudin eu', 0x737668392e6a7067),
(132, 'JONZAC', 'Soin du visage pour homme', 100, 53, 'Sed sagittis pharetra velit, venenatis vehicula leo auctor porta. ', 0x73766831302e6a7067),
(133, 'CALENDULA', 'Soin du visage pour homme', 100, 75, '. Nam dictum ante vel lacus tincidunt, at viverra risus ultrices. Lorem ipsum dolor sit amet', 0x73766831312e6a7067),
(134, 'CATTIER', 'Soin du visage pour homme', 100, 50, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin egestas in erat dignissim fringilla.', 0x73766831322e6a7067),
(135, 'ALPHANOVA', 'Soin du capillaire pour homme', 100, 50, 'ConcentrÃ© dâ€™actifs bio antichute 20 ml\r\n', 0x736368312e6a7067),
(136, 'EUMADIS', 'Soin du capillaire pour homme', 100, 57, 'Shampooing Anti Chute &amp; PrÃ©vention 250 ml\r\n', 0x736368322e6a7067),
(137, 'GRAVIER', 'Soin du capillaire pour homme', 100, 50, 'Shampooing usages frÃ©quents miel 1L\r\n', 0x736368332e6a7067),
(138, 'DOUCE NATURE', 'Soin du capillaire pour homme', 100, 55, 'Gel coiffant fixation forte a l huile de jojoba 100 ml\r\n', 0x736368352e6a7067),
(139, 'KHADI', 'Soin du capillaire pour homme', 100, 60, 'Huile de soin capillaires Revitalisante 100 ml\r\n', 0x736368362e6a7067),
(140, 'BELIFLOR', 'Soin du capillaire pour homme', 100, 57, 'Shampoing Tonifiant AntiChute 250 ml\r\n', 0x736368372e6a7067),
(141, 'LAVERA', 'Soin du capillaire pour homme', 100, 35, 'Gel douche basis 2 en 1 Hydro Feeling 200 ml\r\n', 0x736368382e6a7067),
(142, 'CATTIER', 'Soin du capillaire pour homme', 100, 60, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin egestas in erat dignissim fringilla.', 0x736368392e6a7067),
(143, 'LAVERA', 'Soin du capillaire pour homme', 100, 55, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin egestas in erat dignissim fringilla.', 0x73636831302e6a7067),
(144, 'LOGANA', 'Soin du capillaire pour homme', 100, 55, 'Gel cheveux Mann Cosmo Naturel 100 ml\r\n', 0x73636831312e6a7067),
(145, 'DERMACLAY', 'Soin du capillaire pour homme', 100, 54, 'Masque capillaire express Anti-Chute 125 ml\r\n', 0x73636831322e6a7067),
(146, 'GAVIER', 'Soin du capillaire pour homme', 100, 55, 'Shampoing Tonique Menthe Eucalyptus 200 ml\r\n', 0x73636831332e6a7067),
(147, 'GAMARDE', 'Soin du capillaire pour homme', 100, 55, 'Gel Douche Sport Corps &amp; Cheveux 200ml\r\n', 0x73636831372e6a7067),
(148, 'JENTSCHURA', 'Soin pour la barbe', 100, 54, 'Brosse Ã  cheveux en poils de sanglier chungking tiger\r\n', 0x737062382e6a7067),
(149, 'KHADI', 'Soin pour la barbe', 100, 53, 'Huile de soin capillaires Purifiante 100 ml\r\n', 0x737062312e6a7067),
(150, 'WELEDA', 'Soin pour la barbe', 100, 45, 'HUILE CAPILLAIRE NOURISSANTE Cheveux Secs &amp; AbimÃ©s 50 ml\r\n', 0x73706231302e6a7067),
(151, 'LABORATOIRE ALTHO', 'Soin pour la barbe', 100, 55, 'Huile essentielle Bio Menthe poivrÃ©e 10 ml\r\n', 0x737062392e6a7067),
(152, 'GRAVIER', 'Soin pour la barbe', 100, 35, 'Huile essentielle Bio Tea tree - Melaleuca alternifolia 10ml\r\n', 0x737062362e6a7067),
(153, 'HAIRGUM', 'Soin pour la barbe', 100, 50, 'Shampoing Barbe et Cheveux Hairgum Origines 200 g\r\n', 0x737062352e6a7067);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `tel` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `address`, `ville`, `tel`) VALUES
(9, 'ahmed56', 'ahmedoun199@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', 0),
(10, 'mth', 'mth@hg.com', '202cb962ac59075b964b07152d234b70', '', '', 0),
(11, 'jean11', 'jean@jean.con', '202cb962ac59075b964b07152d234b70', '', '', 0),
(12, 'med96', 'med96@gmail.com', 'med96', '14 rue jean val jean Paris', 'paris', 99100100),
(13, 'mmmm', 'm@m.mmm', 'd9308f32f8c6cf370ca5aaaeafc0d49b', '14 rue mmmmmmm ', 'MMMMM', 0),
(14, 'mmm', 'mmm@mm.mm', 'd9308f32f8c6cf370ca5aaaeafc0d49b', 'mmmmmm 14 mmm mm', 'mmmmm', 22222222);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
