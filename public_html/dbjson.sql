-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2016 at 06:23 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



INSERT INTO `ev` (`name`, `status`, `timeStamp`) VALUES
("OCCULUS SOON?", 'JOE MAY NOT BE OLIVER STONE', '1403375851930');

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_users`
--


DELETE FROM api WHERE name="3"; 

UPDATE api SET URL=NULL WHERE URL="NULL"

ALTER TABLE table_name
ADD column_name datatype

desc TABLE_NAME

DROP,MODIFY,ALTER COULUMN

SELECT * from api ORDER BY id DESC
CHARACTER SET utf8;


DELETE FROM table_name
WHERE some_column = some_value 


INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`) VALUES
(1, 'John', 'Doe'),
(2, 'Jane', 'Doe'),
(3, 'John', 'Cena'),
(4, 'Dwayne', 'Johnson');

CREATE TABLE IF NOT EXISTS `ev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100),
  `image` varchar(200),
  `status` varchar(500),
  `profilePic` varchar(500),
  `timeStamp` varchar(20),
  `url` varchar(200),

  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1


 CREATE TABLE IF NOT EXISTS `dg` (
`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
`name` varchar( 100 ) ,
`image` varchar( 200 ) ,
`thumb` varchar( 500 ) ,
`desc` varchar( 3000 ) ,
`timeStamp` varchar( 20 ) ,
`rate` varchar( 200 ) ,
`size` varchar( 200 ) ,
`dev` varchar( 200 ) ,
`google` varchar( 200 ) ,
`fb` varchar( 200 ) ,
`tweet` varchar( 200 ) ,
PRIMARY KEY ( `id` )
) DEFAULT CHARSET = utf8 AUTO_INCREMENT =1 
