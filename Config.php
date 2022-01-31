<?php

// CREATE TABLE `db_form`.`table_form` ( `ID` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(50) NOT NULL , `Email` VARCHAR(150) NOT NULL , `Password` VARCHAR(20) NOT NULL , `Phone` VARCHAR(15) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;

$databaseHost = 'localhost';
$databaseName = 'db_registration';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect('localhost', 'root', '', 'db_registration');  
?>
