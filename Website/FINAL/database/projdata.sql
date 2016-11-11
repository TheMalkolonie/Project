-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 07 nov 2016 om 14:48
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
  `Naam` varchar(120) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `catagorie`
--

INSERT INTO `catagorie` (`ID`, `Naam`) VALUES
(1, 'Catagorie'),
(2, 'Pizza''s'),
(3, 'Desserts'),
(4, 'Drankjes'),
(5, 'Snacks');

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
  `Afbeelding_Naam` varchar(500) NOT NULL,
  `Product_Beschrijving` varchar(500) NOT NULL,
  `Prijs` varchar(120) NOT NULL,
  `Catagorie` varchar(120) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Gegevens worden uitgevoerd voor tabel `product`
--

INSERT INTO `product` (`ID`, `Naam`, `Product_Afbeelding`, `Afbeelding_Naam`, `Product_Beschrijving`, `Prijs`, `Catagorie`) VALUES
(10, 'Logo', 'pizza-icon-26.png', '', 'test', '123', 'Pizza'),
(13, 'tewt', 'pizza-icon-26.png', '', 'wetwet', '325', 'Pizza'),
(18, 'khyj', '', '', 'dfjtf', '56', 'Pizza'),
(28, 'testet', 'logo.png', '', 'rehrewhe', '64364', 'Desserts'),
(29, '34t43t', '', '', '43646', '43676', 'Desserts'),
(30, 'testy', 'pizza-icon-26.png', '', 'ugyju', '564', 'Snacks');

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
