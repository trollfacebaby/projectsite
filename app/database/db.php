<?php

session_start();
require('connect.php');

function tst($value){
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}

function dbErrorCheck($query){
	$errInf = $query->errorInfo();

	if ($errInf[0] !== PDO::ERR_NONE){
		echo $errInf[2];
		exit();
	}
	return true;
}
// Запрос на получение данных таблицы
function selectAll($table, $params = []){
	global $pdo;
	$sql = "SELECT * FROM $table";

	if (!empty($params)){
		$i = 0;
		foreach ($params as $key => $value){
			if (!is_numeric($value)){
				$value = "'".$value."'";
			}
			if ($i === 0){
				$sql = $sql . " WHERE $key=$value";

			}else{
				$sql = $sql . " AND $key=$value";
			}$i++;
		}
	}

	$query = $pdo->prepare($sql);
	$query->execute();

	dbErrorCheck($query);

	return $query->fetchAll();
}
// Запрос на получение одной строки с таблицы
function selectOne($table, $params = []){
	global $pdo;
	$sql = "SELECT * FROM $table";

	if (!empty($params)){
		$i = 0;
		foreach ($params as $key => $value){
			if (!is_numeric($value)){
				$value = "'".$value."'";
			}
			if ($i === 0){
				$sql = $sql . " WHERE $key=$value";

			}else{
				$sql = $sql . " AND $key=$value";
			}$i++;
		}
	}

	$query = $pdo->prepare($sql);
	$query->execute();

	dbErrorCheck($query);

	return $query->fetch();
}

$params = [
	'admin' => 1,
	'username' => 'kirya'
];

//tst(selectAll('users', $params));


//Запись в таблицу БД
function insert($table, $params){
	global $pdo;
	$i = 0;
	$coll = '';
	$mask = '';	
	// INSERT INTO `users` (admin, username, email, password) VALUES ('0', 'lololowka', 'lololo@mail.ru', 'loloolololo');
	foreach ($params as $key => $value){
		if ($i === 0){
			$coll = $coll . "$key";
			$mask = $mask . "'$value'";
		}else{
			$coll = $coll . ", $key";
			$mask = $mask . ", '$value'";
		}
		
		$i++;
	}
	$sql = "INSERT INTO $table ($coll) VALUES ($mask)";

	$query = $pdo->prepare($sql);
	$query->execute($params);

	dbErrorCheck($query);	
	return $pdo->lastInsertId();
}

//Запись в таблицу БД
function update($table, $id, $params){
	global $pdo;
	$i = 0;
	$str = '';
	// INSERT INTO `users` (admin, username, email, password) VALUES ('0', 'lololowka', 'lololo@mail.ru', 'loloolololo');
	foreach ($params as $key => $value){
		if ($i === 0){
			$str = $str . $key . " = '" . "$value" . "'";
		}else{
			$str = $str .", " . $key . " = '" . $value . "'";
		}
		
		$i++;
	}
	$sql = "UPDATE $table SET $str WHERE id_user = $id";
	$query = $pdo->prepare($sql);
	$query->execute($params);

	dbErrorCheck($query);
}
$arrData = [
	'admin' => '0',
	'username' => 'seRGEY',
	'email' => 'r11@yafffndex.ru',
	'password' => '1fvdfkd',
	'createdata' => '2021-01-01 00:00:00'
];
$param = [
	'admin' => '0',
];
function delete($table, $id){
	global $pdo;
	$sql = "DELETE FROM $table WHERE id_user = $id";
	$query = $pdo->prepare($sql);
	$query->execute();

	dbErrorCheck($query);
}
