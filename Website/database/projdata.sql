-- phpMyAdmin SQL Dump

-- version 4.5.2

-- http://www.phpmyadmin.net

--

-- Host: localhost

-- Gegenereerd op: 10 nov 2016 om 14:21

-- Serverversie: 10.1.13-MariaDB

-- PHP-versie: 5.6.23



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";





/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;



--

-- Database: `Project Contact`

--



-- --------------------------------------------------------



--

-- Tabelstructuur voor tabel `contact`

--



CREATE TABLE `contact` (

  `ID` int(11) NOT NULL,

  `voornaam` varchar(120) NOT NULL,

  `achternaam` varchar(120) NOT NULL,

  `email` varchar(120) NOT NULL,

  `telefoonnummer` varchar(120) NOT NULL,

  `vraag` varchar(120) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--

-- Gegevens worden geëxporteerd voor tabel `contact`

--



INSERT INTO `contact` (`ID`, `voornaam`, `achternaam`, `email`, `telefoonnummer`, `vraag`) VALUES

(7, 'Tim ', 'de  Raaf', 'oisdfodsfn', 'jsdfosfjosd', 'sdfsdfklsdf'),

(8, 'Tim ', 'der ', 'dfslkfnsodj', 'fsnl', 'dfkjnsdkjfn'),

(9, 'test1222', 'slkfmlds', 'dgslkf', 'dflksdl', 'dlfksdlkf'),

(10, 'sfnidnkkl', 'sdlknsdnklsdf', 'lkdfkldf', 'sdfkldflmsdf', 'lmsdflmsdflmsdtest');



--

-- Indexen voor geëxporteerde tabellen

--



--

-- Indexen voor tabel `contact`

--

ALTER TABLE `contact`

  ADD PRIMARY KEY (`ID`);



--

-- AUTO_INCREMENT voor geëxporteerde tabellen

--



--

-- AUTO_INCREMENT voor een tabel `contact`

--

ALTER TABLE `contact`

  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
