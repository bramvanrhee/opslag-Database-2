INSERT INTO `songs` VALUES (1,'Twenty One Pilots','Stressed Out')
INSERT INTO `songs` VALUES (2,'Sefa','Muzika')
INSERT INTO `songs` VALUES (3,'Sefa','Nothing like the oldschool')
INSERT INTO `songs` VALUES (4,'Twenty One Pilots','Bandito')
INSERT INTO `songs` VALUES (5,'Pryapisme','Programming Naughty Pictograms in Python')

UPDATE `songs` SET `Artist` = 'Kehele Keff', `Title` = 'Away From Here' WHERE ID = 1
UPDATE `songs` SET `Artist` = 'Twenty One Pilots', `Title` = 'Neon Gravestones' WHERE ID = 2
UPDATE `songs` SET `Artist` = 'Pryapisme', `Title` = 'Epic Boss Theme' WHERE ID = 3
UPDATE `songs` SET `Artist` = 'Qoiet', `Title` = 'Sick MANIAC' WHERE ID = 4
UPDATE `songs` SET `Artist` = 'Twenty One Pilots', `Title` = 'Bandito' WHERE ID = 5

SELECT * FROM `songs` WHERE 1
SELECT * FROM `songs` WHERE Artist = 'Twenty One Pilots'

SELECT * FROM `songs` WHERE ID = 1
SELECT * FROM `songs` WHERE Artist = 'Pryapisme'
SELECT * FROM `songs` WHERE Title = 'Bandito'

/*Je kunt het het best op deze manier doen, omdat je bij deze zeker weet dat er maar 1 op je scherm komt en bij de andere twee opties, kan het 1 zijn maar ook meerdere.*/
SELECT * FROM `songs` WHERE ID = 1

DELETE FROM `songs` WHERE ID = 1
DELETE FROM `songs` WHERE Title = 'Bandito'

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 31 jan 2019 om 10:28
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_level2_opdr1`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `songs`
--

CREATE TABLE `songs` (
  `ID` int(11) NOT NULL,
  `Artist` text NOT NULL,
  `Title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `songs`
--

INSERT INTO `songs` (`ID`, `Artist`, `Title`) VALUES
(2, 'Twenty One Pilots', 'Neon Gravestones'),
(3, 'Pryapisme', 'Epic Boss Theme'),
(4, 'Qoiet', 'Sick MANIAC');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `songs`
--
ALTER TABLE `songs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
