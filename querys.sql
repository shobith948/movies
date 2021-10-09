-- Query to create database
CREATE DATABASE movie;

-- Query to use the selected database
USE movie;

-- Creating the movies table
CREATE TABLE `movies` ( `movie_name` VARCHAR(100) NOT NULL , 
                        `actor` VARCHAR(100) NOT NULL ,
                        `actress` VARCHAR(100) NOT NULL ,
                         `year_of_release` INT(4) NOT NULL , 
                         `director_name` VARCHAR(100) NOT NULL,
                         PRIMARY KEY (`movie_name`)
                       );


-- Inserting values to the table
INSERT INTO `movies` (`movie_name`, `actor`, `actress`, `year_of_release`, `director_name`) VALUES ('Kick', 'Salman ', 'Jackean', '2012', 'sajid');
INSERT INTO `movies` (`movie_name`, `actor`, `actress`, `year_of_release`, `director_name`) VALUES ('sultan', 'Salman ', 'anushka ', '2018', 'Ram Singh');
INSERT INTO `movies` (`movie_name`, `actor`, `actress`, `year_of_release`, `director_name`) VALUES ('KGF', 'Yash', 'Shree Nidi', '2018', 'Prashant ');

-- Selecting values from the table

SELECT * FROM `movies`;

-- Selecting value from table by using condition

SELECT * FROM `movies` WHERE actor ='salman';