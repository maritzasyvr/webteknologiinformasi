/* Create Database and Table */
create database crud_db;
 
use crud_db;
 
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `email` varchar(100),
  `subject` varchar(30),
  `message` varchar(150),
  PRIMARY KEY  (`id`)
);