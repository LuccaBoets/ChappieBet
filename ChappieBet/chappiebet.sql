-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 29 nov 2019 om 09:34
-- Serverversie: 5.7.21
-- PHP-versie: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chappiebet`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblgebruikers`
--

DROP TABLE IF EXISTS `tblgebruikers`;
CREATE TABLE IF NOT EXISTS `tblgebruikers` (
  `gebruikerID` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `mail` text NOT NULL,
  `totaalGeld` int(11) NOT NULL,
  `online` tinyint(1) NOT NULL,
  `profImage` int(11) NOT NULL,
  `coins` int(11) NOT NULL,
  `winstreak` int(11) NOT NULL,
  `lastDate` date NOT NULL,
  `daysOnline` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `achievement_1` int(11) NOT NULL,
  `achievement_2` int(11) NOT NULL,
  `achievement_3` int(11) NOT NULL,
  `achievement_4` int(11) NOT NULL,
  `achievement_5` int(11) NOT NULL,
  `achievement_6` int(11) NOT NULL,
  `achievement_7` int(11) NOT NULL,
  `achievement_8` int(11) NOT NULL,
  PRIMARY KEY (`gebruikerID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblgebruikers`
--

INSERT INTO `tblgebruikers` (`gebruikerID`, `username`, `password`, `mail`, `totaalGeld`, `online`, `profImage`, `coins`, `winstreak`, `lastDate`, `daysOnline`, `admin`, `achievement_1`, `achievement_2`, `achievement_3`, `achievement_4`, `achievement_5`, `achievement_6`, `achievement_7`, `achievement_8`) VALUES
(3, 'Dries', '37583845fe6958c9fba698932c87df3c', 'drekke@gmail.com', 500, 0, 0, 500, 0, '2019-11-28', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Test', '202cb962ac59075b964b07152d234b70', 'test@gmail.com', 10000, 0, 0, 102000, 0, '2019-11-29', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbllog`
--

DROP TABLE IF EXISTS `tbllog`;
CREATE TABLE IF NOT EXISTS `tbllog` (
  `gebruikerID` int(11) NOT NULL,
  `datum` date NOT NULL,
  `transactie` int(11) NOT NULL,
  `gespeeldSpel` int(11) NOT NULL,
  PRIMARY KEY (`gebruikerID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbllogcoins`
--

DROP TABLE IF EXISTS `tbllogcoins`;
CREATE TABLE IF NOT EXISTS `tbllogcoins` (
  `gebruikerID` int(11) NOT NULL,
  `datum` datetime NOT NULL,
  `transactie` int(11) NOT NULL,
  `spel` text NOT NULL,
  PRIMARY KEY (`gebruikerID`,`datum`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbllogcoins`
--

INSERT INTO `tbllogcoins` (`gebruikerID`, `datum`, `transactie`, `spel`) VALUES
(6, '2019-11-29 00:00:00', 0, ''),
(6, '2019-11-29 09:31:15', 0, ''),
(6, '2019-11-29 09:31:27', 0, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblvrienden`
--

DROP TABLE IF EXISTS `tblvrienden`;
CREATE TABLE IF NOT EXISTS `tblvrienden` (
  `gebruikerID` int(11) NOT NULL,
  `vriendID` int(11) NOT NULL,
  PRIMARY KEY (`gebruikerID`,`vriendID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
