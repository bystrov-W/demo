<?php
//Соединение с базой данных
$host = 'localhost';
$db = 'cf41307_41';
$charset = 'utf8';
$userDB = 'cf41307_41';
$pass = '1';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	
$opt = array(
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);?>