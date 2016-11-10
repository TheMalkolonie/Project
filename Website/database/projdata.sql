-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 10 nov 2016 om 12:21
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
  `ID` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `administrator`
--

INSERT INTO `administrator` (`ID`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Straat`, `Huisnummer`, `Postcode`, `Woonplaats`, `Email`, `Telefoonnummer`, `Gebruikersnaam`, `Wachtwoord`) VALUES
(1, 'Admin', '', 'Administrator', 'Adminlaan', '123', '1234JA', 'AdminCity', 'admin@administrator.nl', '0612345678', 'admin', '21232f297a57a5a743894a0e4a801fc3');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `catagorie`
--

INSERT INTO `catagorie` (`ID`, `Catagorie`, `Pizza`, `Desserts`, `Drankjes`, `Snacks`, `Product_Afbeelding`) VALUES
(2, 'Pizza''s', '', '', '', '', ''),
(3, 'Desserts', '', '', '', '', ''),
(4, 'Drankjes', '', '', '', '', ''),
(5, 'Snacks', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE IF NOT EXISTS `klant` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `klant`
--

INSERT INTO `klant` (`ID`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Straat`, `Huisnummer`, `Postcode`, `Woonplaats`, `Email`, `Telefoonnummer`, `Gebruikersnaam`, `Wachtwoord`) VALUES
(1, 'klant', 'klant', 'klant', 'klant', 'klant', 'klant', 'klant', 'klant@klant.nl', '1234567890', 'klant', 'c1be96173d7a9d1529895e76eb0adfc9'),
(3, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test@test.nl', '1234578903', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(4, 'klant2', 'klant2', 'klant2', 'klant2', 'klant2', 'klant2', 'klant2', 'klant2@klant2.nl', '1251346327', 'klant2', '738ef49273bbb1846b48cd98a0c12b66'),
(5, 'klant3', 'klant3', 'klant3', 'klant3', 'klant3', 'klant3', 'klant3', 'klant3@klant3.nl', '2354687907', 'klant3', '3b994eb22db512f862b1869db7ada09d');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(120) NOT NULL,
  `Product_Afbeelding` varchar(120) NOT NULL,
  `Product_Beschrijving` varchar(500) NOT NULL,
  `Prijs` varchar(120) NOT NULL,
  `Catagorie` varchar(120) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Gegevens worden uitgevoerd voor tabel `product`
--

INSERT INTO `product` (`ID`, `Naam`, `Product_Afbeelding`, `Product_Beschrijving`, `Prijs`, `Catagorie`) VALUES
(83, 'Pizza Hawaii', 'hawai.jpg', 'Tomatensaus, mozzarella, ham, ananas & extra kaas.', '7,95', 'Pizza''s'),
(85, 'Pizza Margherita', 'margherita.jpg', 'Tomatensaus, dubbel mozzarella & oregano.', '7,95', 'Pizza''s'),
(87, 'Pizza Pepperoni', 'pepperoni.jpg', 'Tomatensaus, mozzarella & pepperoni.', '9,50', 'Pizza''s'),
(88, 'Pizza Pollo', 'pollo.jpg', 'Tomaten, Kipfilet, Champignons, Rode paprika, Mozzarella.', '7,50', 'Pizza''s'),
(89, 'Pizza Salami', 'salami.jpg', 'Tomatensaus, mozzarella & salami.', '6,30', 'Pizza''s');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Cijfer` varchar(120) NOT NULL,
  `Opmerking` varchar(120) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `review`
--

INSERT INTO `review` (`ID`, `Cijfer`, `Opmerking`) VALUES
(1, '2', 'Goede pizza'),
(2, '9', 'Dit is een goede pizza'),
(3, '8', 'Lekker pizaaa man!');

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
