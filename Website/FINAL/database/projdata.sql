-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 11 nov 2016 om 15:08
-- Serverversie: 5.5.34
-- PHP-versie: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `projdata`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Voornaam` varchar(120) NOT NULL,
  `Tussenvoegsel` varchar(120) DEFAULT NULL,
  `Achternaam` varchar(120) NOT NULL,
  `Straat` varchar(120) NOT NULL,
  `Huisnummer` varchar(120) NOT NULL,
  `Postcode` varchar(120) NOT NULL,
  `Woonplaats` varchar(120) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Telefoonnummer` varchar(120) NOT NULL,
  `Gebruikersnaam` varchar(120) NOT NULL,
  `Wachtwoord` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `administrator`
--

INSERT INTO `administrator` (`id`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Straat`, `Huisnummer`, `Postcode`, `Woonplaats`, `Email`, `Telefoonnummer`, `Gebruikersnaam`, `Wachtwoord`) VALUES
(1, 'Admin', '', 'Administrator', 'Adminlaan', '123', '1234JA', 'AdminCity', 'admin@administrator.nl', '0612345678', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'test', 'test', 'test', 'test', 'test', '', 'test', 'test@test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestelling`
--

CREATE TABLE IF NOT EXISTS `bestelling` (
  `ID` bigint(20) NOT NULL,
  `Datum` datetime NOT NULL,
  `KLANT_ID` bigint(20) NOT NULL,
  `Klant_Klanten_Account_ID` double NOT NULL,
  `aantal` decimal(65,0) DEFAULT NULL,
  `Totaal_prijs` decimal(65,0) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestelling_item`
--

CREATE TABLE IF NOT EXISTS `bestelling_item` (
  `Aantal` decimal(65,0) NOT NULL,
  `BESTELLING_ID` double NOT NULL,
  `PRODUCT_ID` bigint(20) NOT NULL,
  `ID` double NOT NULL,
  PRIMARY KEY (`ID`,`PRODUCT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `betaling`
--

CREATE TABLE IF NOT EXISTS `betaling` (
  `ID` bigint(20) NOT NULL,
  `productnaam` varchar(120) DEFAULT NULL,
  `Prijs` decimal(65,0) NOT NULL,
  `Datum` datetime NOT NULL,
  `BESTELLING_ID` bigint(20) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `BETALING__IDX` (`BESTELLING_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `catagorie`
--

CREATE TABLE IF NOT EXISTS `catagorie` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Catagorie` varchar(120) NOT NULL,
  `Pizza` varchar(120) NOT NULL,
  `Desserts` varchar(120) NOT NULL,
  `Drankjes` varchar(120) NOT NULL,
  `Snacks` varchar(120) NOT NULL,
  `Product_Afbeelding` varchar(120) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `catagorie`
--

INSERT INTO `catagorie` (`ID`, `Catagorie`, `Pizza`, `Desserts`, `Drankjes`, `Snacks`, `Product_Afbeelding`) VALUES
(1, 'Pizza', '', '', '', '', ''),
(2, 'Dessert', '', '', '', '', ''),
(3, 'Drank', '', '', '', '', ''),
(4, 'Snack', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(120) NOT NULL,
  `achternaam` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefoonnummer` varchar(120) NOT NULL,
  `vraag` varchar(120) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `contact`
--

INSERT INTO `contact` (`ID`, `voornaam`, `achternaam`, `email`, `telefoonnummer`, `vraag`) VALUES
(5, 'Tim ', 'de raaf', 'testemail@test.com', '0612345678', 'Waarom krijg ik undefined index?'),
(6, 'test', 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE IF NOT EXISTS `klant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Voornaam` varchar(120) NOT NULL,
  `Tussenvoegsel` varchar(120) DEFAULT NULL,
  `Achternaam` varchar(120) NOT NULL,
  `Straat` varchar(120) NOT NULL,
  `Huisnummer` varchar(120) NOT NULL,
  `Postcode` varchar(120) NOT NULL,
  `Woonplaats` varchar(120) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Telefoonnummer` varchar(120) NOT NULL,
  `Gebruikersnaam` varchar(120) NOT NULL,
  `Wachtwoord` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `klant`
--

INSERT INTO `klant` (`id`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Straat`, `Huisnummer`, `Postcode`, `Woonplaats`, `Email`, `Telefoonnummer`, `Gebruikersnaam`, `Wachtwoord`) VALUES
(1, 'klant', 'klant', 'klant', 'klant', 'klant', 'klant', 'klant', 'klant@klant.nl', '1234567890', 'klant', 'c1be96173d7a9d1529895e76eb0adfc9'),
(3, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test@test.nl', '1234578903', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(4, 'klant2', 'klant2', 'klant2', 'klant2', 'klant2', 'klant2', 'klant2', 'klant2@klant2.nl', '1251346327', 'klant2', '738ef49273bbb1846b48cd98a0c12b66'),
(5, 'klant31', 'klant3', 'klant3', 'klant3', 'klant3', 'klant3', 'klant3', 'klant3@klant3.nl', '2354687907', 'klant3', '3b994eb22db512f862b1869db7ada09d');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pizzaextra`
--

CREATE TABLE IF NOT EXISTS `pizzaextra` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Bodem` varchar(120) NOT NULL,
  `Saus` varchar(120) NOT NULL,
  `Ingredienten` varchar(120) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `pizzaextra`
--

INSERT INTO `pizzaextra` (`ID`, `Bodem`, `Saus`, `Ingredienten`) VALUES
(1, 'Medium (25 cm)', 'Tomatensaus', 'Kaas'),
(2, 'Large (35 cm)', 'Barbecuesaus', 'Pepperoni'),
(3, 'Family XXL', 'Crème fraîche', 'Ham'),
(4, '', 'Geen saus', 'Shoarma');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(120) NOT NULL,
  `Product_Afbeelding` varchar(120) NOT NULL,
  `Product_Beschrijving` varchar(500) NOT NULL,
  `Prijs` varchar(120) NOT NULL,
  `Catagorie` varchar(120) NOT NULL,
  `code` varchar(120) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=115 ;

--
-- Gegevens worden uitgevoerd voor tabel `product`
--

INSERT INTO `product` (`id`, `Naam`, `Product_Afbeelding`, `Product_Beschrijving`, `Prijs`, `Catagorie`, `code`) VALUES
(95, 'Pizza Hawaii', 'hawai.jpg', 'Tomatensaus, mozzarella, ham, ananas & extra kaas.', '7,95', 'Pizza', 'PizHaw'),
(96, 'Pizza Margherita', 'margherita.jpg', 'Tomatensaus, dubbel mozzarella & oregano.', '7,95', 'Pizza', 'PizMag'),
(97, 'Pizza Pepperoni', 'pepperoni.jpg', 'Tomatensaus, mozzarella & pepperoni.', '9,50', 'Pizza', 'PizPep'),
(98, 'Pizza Pollo', 'pollo.jpg', 'Tomaten, Kipfilet, Champignons, Rode paprika, Mozzarella.', '7,50', 'Pizza', 'PizPol'),
(99, 'Pizza Salami', 'salami.jpg', 'Tomatensaus, mozzarella & salami.', '6,30', 'Pizza', 'PizSal'),
(100, 'Chocolate Lavacake', 'NL_EDLVA_all_hero_733.png', 'De overheerlijke Chocolade Lavacake is een lekker chocoladedessert met een warme en zachte chocolade vulling. Deze vulling stroomt als lava uit het dessert wanneer je eraan begint. Bestel de Chocolate Lavacake gemakkelijk online.', '2,50', 'Dessert', 'ChoLav'),
(101, 'Chocolate Chip Cookie', 'NL_EDCCC_all_hero_635.png', 'Een amerikaanse Chocolate Chip Cookie met overheerlijke chocolade!\r\nEen Amerikaanse Chocolate Chip Cookie met overheerlijke stukjes chocolade! Lekker als een klein dessert voor na jouw pizza. Bestel het koekje gemakkelijk en snel online samen met jouw pizza.', '1,25', 'Dessert', 'ChoChi'),
(102, 'Cinnastix', 'CinnastixProductImageLargeNLDefault20140806_104457.png', 'Versgebakken kaneelbroodje, inclusief sweet vanilla icing dipsaus.\r\n\r\nDe Cinnastix is een versgebakken kaneelbroodje met sweet vanilla icing dipsaus. Dit lekkere dessert maakt jouw maaltijd compleet. Bestel de Cinnastix gemakkelijk en snel online!', '2,95', 'Dessert', 'CinSti'),
(103, 'Poffertjes', 'DutchPancakesProductImageLargeNLDefault20140806_110536.png', 'Poffertjes met poedersuiker & boter\r\n\r\nDeze versgebakken poffertjes met poedersuiker en boter zijn lekker als dessert voor na je pizza. De poffertjes maken jouw maaltijd compleet. Bestel ze gemakkelijk online samen met jouw pizza.', '1,95', 'Dessert', 'Poffer'),
(104, 'Choco Bread', 'NL_ECHOCO_all_hero_1121.png', 'Een heerlijk broodje, warm uit de oven & overgoten met chocoladesaus!', '2,95', 'Dessert', 'ChoBre'),
(105, 'Red Bull Regular 0.25 Liter', 'D02RBR_ProductImage_Large_nl_Default_20140213_065459.png', '0.25 liter Red Bull Regular', '2,25', 'Drank', 'RbulRg'),
(106, 'Coca Cola 0.33 Liter', 'NL_D03COK_all_hero_664.png', '0.33 liter Coca Cola', '1,50', 'Drank', 'CCReg'),
(107, 'Fanta 0.33 Liter', 'NL_D03FAN_all_hero_664.png', '0.33 liter Fanta', '1,50', 'Drank', 'FantaR'),
(108, 'Sprite 0.33 Liter', 'NL_D03SPR_all_hero_664.png', '0.33 liter Sprite', '1,50', 'Drank', 'Sprite'),
(109, 'Chaudfontaine 0.5 liter', 'NL_D05EAR_all_hero_664.png', '0.5 liter Chaudfontaine', '1,50', 'Drank', 'Chaudf'),
(110, 'Cheese Bites', 'ECHBIT_ProductImage_Large_nl_Default_20130919.png', 'Versgebakken deegrolletjes met emmentaler-kaas.', '1,00', 'Snack', 'Chsebr'),
(111, 'Stokbrood Kruidenboter', 'ESBKB_ProductImage_Large_nl_Default_20130919.png', 'Versgebakken stokbroodje gevuld met kruidenboter', '1,95', 'Snack', 'Krdbtr'),
(112, 'Cheesy Bread', 'ECHBRD_ProductImage_Large_nl_Default_20130919.png', 'Versgebakken kaasbroodje', '1,95', 'Snack', 'ChsyBr'),
(113, 'Kick''N Chicken', 'ECHICK_ProductImage_Large_nl_Default_20140727_121754.png', '8 Pittig gekruide kipstukjes. Kies uw saus (inclusief)', '3,95', 'Snack', 'KNChkn'),
(114, 'Chicken Combobox', 'ECBOX_ProductImage_Large_nl_Default_20140727_124709.png', '4 Buffalo Wings, 4 Chicken Strippers & 4 Kick''n Chicken. Kies je saus (inclusief)...', '5,95', 'Snack', 'ChkBox');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Product` varchar(120) NOT NULL,
  `Cijfer` varchar(120) NOT NULL,
  `Opmerking` varchar(120) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Gegevens worden uitgevoerd voor tabel `review`
--

INSERT INTO `review` (`ID`, `Product`, `Cijfer`, `Opmerking`) VALUES
(1, '', '2', 'Goede pizza'),
(2, '', '9', 'Dit is een goede pizza'),
(3, '', '8', 'Lekker pizaaa man!'),
(4, '', '10', 'Jomoi'),
(5, 'Pizza Pollo', '7', 'lol'),
(6, 'Pizza Pollo', '7', 'lol'),
(7, 'Pizza Pepperoni', '8', 'lolololo'),
(13, 'Pizza Margherita', '7', 'lekker hoor groetjes'),
(16, 'Pizza Hawaii', '10', 'ewrty'),
(17, 'Pizza Margherita', '9', 'ewrt'),
(18, 'Pizza Hawaii', '9', 'ertyu'),
(19, 'Pizza Margherita', '9', 'ertyui');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `teller`
--

CREATE TABLE IF NOT EXISTS `teller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Home` int(11) NOT NULL,
  `Pizza` int(11) NOT NULL,
  `Dessert` int(11) NOT NULL,
  `Drank` int(11) NOT NULL,
  `Snacks` int(11) NOT NULL,
  `Test` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `teller`
--

INSERT INTO `teller` (`id`, `Home`, `Pizza`, `Dessert`, `Drank`, `Snacks`, `Test`) VALUES
(1, 73, 51, 58, 10, 0, 50);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `type_klant`
--

CREATE TABLE IF NOT EXISTS `type_klant` (
  `ID` bigint(20) NOT NULL,
  `Type_klant` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
