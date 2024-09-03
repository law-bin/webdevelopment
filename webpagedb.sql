-- MySQL Dump for Database: `webpagedb`

CREATE DATABASE IF NOT EXISTS `webpagedb` 
/*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `webpagedb`;

-- Table Structure for `admin`
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isaccess` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Inserting Data into `admin`
INSERT INTO `admin` VALUES 
(1,'labingrg','test','Labingrg000@gmail.com',1),
(2,'Bibek','Bibek','bibek@gmail.com',1),
(3,'Ony','test01','ony@gmail.com',1);

-- Table Structure for `events`
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `eid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `type` varchar(255) NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `CreatedBy` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Inserting Data into `events`
INSERT INTO `events` VALUES 
(16,'Test event','This is a test event 1','Onsite','17:09','2024-08-01','labin',NULL),
(25,'Test event 2','This is a test event 2','Onsite','14:12','2024-09-03','ony',NULL),
(26,'Test event 3','This is a test event 3','Online','16:11','2024-09-12','labin',NULL);

-- Table Structure for `requests`
DROP TABLE IF EXISTS `requests`;
CREATE TABLE `requests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `description` text,
  `event_type` varchar(50) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Inserting Data into `requests`
INSERT INTO `requests` VALUES 
(15,'testevent','hello world','desc','Onsite','2024-08-18','20:34:00'),
(16,'x','lol','wtfffff','Online','2024-08-19','22:21:00');

-- Table Structure for `user`
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` int NOT NULL,
  `PasswordHash` varchar(255) NOT NULL,
  `CreatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_expiry` datetime DEFAULT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Username_UNIQUE` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Inserting Data into `user`
INSERT INTO `user` VALUES 
(18,'labingrg','labingrg000@gmail.com',492344170,'$2y$10$APeGq6V21ZOekqqce0UnxO50XrjxW8yFwcPGlEm9KwCSzSyLO98MC','2024-08-20 14:48:03','2024-08-20 14:48:03',NULL,NULL),
(20,'labingrg1','labingrg000@gmail.com',492344170,'$2y$10$Gk562Mv9J6bnUc/CiR0mv.3Ug2cV7YZxxLrtMMP2SWddev8HA8w5W','2024-08-20 15:32:48','2024-08-20 15:32:48',NULL,NULL),
(21,'bibek','x@gmail.com',492344170,'$2y$10$/hxT6ZymxCYJ9pfYdmD0DuAjm7HEIv/2TvurZpSA39qASuO4Dj30.','2024-08-21 08:33:59','2024-09-01 16:14:39','c784ba4100aec8ea2facd18f001990f3d363c99742fd420820c07b8e74ab695869a17a0456c229ce348fb7c03c883b03c292','2024-09-01 19:14:39'),
(22,'testuser1','labingrg000@gmail.com',492344170,'$2y$10$ZSbH1lOpnrfb5y7v4zeh8eRV7YMTFtGXbV350PNeBOoM7mYSBV9Py','2024-09-01 04:42:10','2024-09-01 04:42:10',NULL,NULL);

