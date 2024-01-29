-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour immobilier
CREATE DATABASE IF NOT EXISTS `immobilier` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `immobilier`;

-- Listage de la structure de table immobilier. appartement
CREATE TABLE IF NOT EXISTS `appartement` (
  `numLocation` int NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `typeAppartement` varchar(50) NOT NULL,
  `nbPersonne` int NOT NULL,
  `codeTarif` int NOT NULL,
  `adresselocation` varchar(120) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `equipement` varchar(60) NOT NULL,
  `numProprietaire` int NOT NULL,
  PRIMARY KEY (`numLocation`),
  KEY `codeTarif` (`codeTarif`),
  KEY `numProprietaire` (`numProprietaire`),
  CONSTRAINT `appartement_ibfk_1` FOREIGN KEY (`codeTarif`) REFERENCES `tarif` (`codeTarif`),
  CONSTRAINT `appartement_ibfk_2` FOREIGN KEY (`numProprietaire`) REFERENCES `proprietaire` (`numProprietaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table immobilier.appartement : ~0 rows (environ)

-- Listage de la structure de table immobilier. contrat
CREATE TABLE IF NOT EXISTS `contrat` (
  `numContrat` int NOT NULL,
  `etatContrat` varchar(50) NOT NULL,
  `dateCreation` date NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date DEFAULT NULL,
  `numLocation` int NOT NULL,
  `numLocataire` int NOT NULL,
  PRIMARY KEY (`numContrat`),
  KEY `numLocation` (`numLocation`),
  KEY `numLocataire` (`numLocataire`),
  CONSTRAINT `contrat_ibfk_1` FOREIGN KEY (`numLocation`) REFERENCES `appartement` (`numLocation`),
  CONSTRAINT `contrat_ibfk_2` FOREIGN KEY (`numLocataire`) REFERENCES `locataire` (`numLocataire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table immobilier.contrat : ~0 rows (environ)

-- Listage de la structure de table immobilier. locataire
CREATE TABLE IF NOT EXISTS `locataire` (
  `numLocataire` int NOT NULL,
  `nomLocataire` varchar(120) NOT NULL,
  `prenomLocataire` varchar(120) NOT NULL,
  `adresse1Locataire` varchar(120) NOT NULL,
  `adresse2Locataire` varchar(120) DEFAULT NULL,
  `codePostalLocataire` varchar(50) NOT NULL,
  `villeLocataire` varchar(60) NOT NULL,
  `numTel1Locataire` int NOT NULL,
  `numTel2Locataire` int DEFAULT NULL,
  `emailLocataire` varchar(150) NOT NULL,
  PRIMARY KEY (`numLocataire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table immobilier.locataire : ~2 rows (environ)
INSERT INTO `locataire` (`numLocataire`, `nomLocataire`, `prenomLocataire`, `adresse1Locataire`, `adresse2Locataire`, `codePostalLocataire`, `villeLocataire`, `numTel1Locataire`, `numTel2Locataire`, `emailLocataire`) VALUES
	(1, 'vic', 'buunda', 'ndosho/muhabura/N°44', 'ndosho/muhabura/N°44', '555', 'goma', 444, 444, 'muhirevictor2020@gmail.com'),
	(98, 'martin', 'andema', 'kalemie', 'bukavu', '555', 'goma', 5646787, 564578687, 'muhire@mv.net');

-- Listage de la structure de table immobilier. proprietaire
CREATE TABLE IF NOT EXISTS `proprietaire` (
  `numProprietaire` int NOT NULL,
  `nomProprietaire` varchar(120) NOT NULL,
  `prenomProprietaire` varchar(120) NOT NULL,
  `adresse1Proprietaire` varchar(120) NOT NULL,
  `adresse2Proprietaire` varchar(120) DEFAULT NULL,
  `codePostalProprietaire` varchar(50) NOT NULL,
  `villeProprietaire` varchar(60) NOT NULL,
  `numTel1Proprietaire` int NOT NULL,
  `numTel2Proprietaire` int DEFAULT NULL,
  `caCumuleProprietaire` int NOT NULL,
  `emailProprietaire` varchar(150) NOT NULL,
  PRIMARY KEY (`numProprietaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table immobilier.proprietaire : ~3 rows (environ)
INSERT INTO `proprietaire` (`numProprietaire`, `nomProprietaire`, `prenomProprietaire`, `adresse1Proprietaire`, `adresse2Proprietaire`, `codePostalProprietaire`, `villeProprietaire`, `numTel1Proprietaire`, `numTel2Proprietaire`, `caCumuleProprietaire`, `emailProprietaire`) VALUES
	(1, 'vic', 'buun', 'himbi/ amani/ N°99', 'himbi/ amani/ N°99', '999', 'gomq', 555, 6666, 99, 'muhirevictor2020@gmail.com'),
	(2, 'olivier', 'buunda', 'himbi/ amani/ N°99', 'himbi/ amani/ N°99', '55', 'Goma', 555, 6666, 50, 'muhirevictor2020@gmail.com'),
	(8, 'john', 'kis', 'himbi', 'kyeshero', 'uoioip', 'bukavu', 435647576, 43456446, 6, 'uhjhijkj@gmail.com');

-- Listage de la structure de table immobilier. tarif
CREATE TABLE IF NOT EXISTS `tarif` (
  `codeTarif` int NOT NULL,
  `prixSemHS` int NOT NULL,
  `prixSemBS` int NOT NULL,
  PRIMARY KEY (`codeTarif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table immobilier.tarif : ~4 rows (environ)
INSERT INTO `tarif` (`codeTarif`, `prixSemHS`, `prixSemBS`) VALUES
	(1, 60, 50),
	(2, 60, 50),
	(3, 60, 50),
	(899, 578, 90);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
