<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'project_db';
$db_user = 'root';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
$db_pass = 'mysql';

try{
	$pdo = new PDO(
		"mysql:host=$host;dbname=$db_name;charset=$charset",$db_user, $db_pass, $options
	);
}catch (PDOException $i){
	die("Ошибка подключения к базе данных");
}


?>