-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.39-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for tjascado
CREATE DATABASE IF NOT EXISTS `tjascado` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tjascado`;

-- Dumping structure for table tjascado.gebruikers
CREATE TABLE IF NOT EXISTS `gebruikers` (
  `id` int(11) NOT NULL,
  `Achternaam` varchar(50) DEFAULT NULL,
  `Tussenvoegsel` varchar(50) DEFAULT NULL,
  `Voornaam` varchar(50) DEFAULT NULL,
  `Adres` varchar(100) DEFAULT NULL,
  `Typegebruiker` tinyint(1) DEFAULT NULL,
  `Stad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tjascado.gebruikers: ~0 rows (approximately)
INSERT INTO `gebruikers` (`id`, `Achternaam`, `Tussenvoegsel`, `Voornaam`, `Adres`, `Typegebruiker`, `Stad`) VALUES
	(1, 'Mathurot', NULL, 'Don', 'Geen idee 1', 1, 'Leiderdorp'),
	(2, 'Graaf', 'de', 'Nico', 'Geen idee 1', 1, 'Den Haag'),
	(3, 'Rolink', NULL, 'Silas', 'Geen idee 1', 1, 'Leidschendam'),
	(4, 'Klant', NULL, 'Nep', 'Pietsnotnavelpluisstraat 286', 0, 'Den Haag'),
	(5, 'Visser', NULL, 'Tjeerd', 'Moerbeihof 12', 1, 'Nootdorp');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
