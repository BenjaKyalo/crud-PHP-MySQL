CREATE DATABASE IF NOT EXISTS `CRUD`;

USE `CRUD`;

CREATE TABLE IF NOT EXISTS `addresses` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL DEFAULT '',
 `first_name` varchar(60) NOT NULL DEFAULT '',
 `email` varchar(250) NOT NULL,
 `street` varchar(30) DEFAULT NULL,
 `zip_code` varchar(255) NOT NULL DEFAULT '',
 `city` varchar(30) NOT NULL,
 PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

CREATE TABLE IF NOT EXISTS `cities` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL DEFAULT '',
 PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


INSERT INTO `cities` (`ID`, `name`) VALUES(1, 'Nairobi');
INSERT INTO `cities` (`ID`, `name`) VALUES(2, 'Mombasa');
INSERT INTO `cities` (`ID`, `name`) VALUES(3, 'Kisumu');
INSERT INTO `cities` (`ID`, `name`) VALUES(4, 'London');
INSERT INTO `cities` (`ID`, `name`) VALUES(5, 'New York');
