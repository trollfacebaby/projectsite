<?php

include "app/database/db.php"; 


$errMsg = '';
$regStatus = '';

//Обработка формы регистрации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
	$admin = 0;
	$login = trim($_POST['login']);
	$email = trim($_POST['mail']);
	$pass = trim($_POST['pass-second']);

	if ($login === '' || $email === '' || $pass === ''){
		$errMsg = 'Заполните все поля';
	}elseif (mb_strlen($login, 'utf8') < 4){
		$errMsg = 'Логин не должен быть короче 4 символов';
	}elseif (trim($_POST['pass-first']) !== trim($_POST['pass-second'])){
		$errMsg = 'Пароли должны совпадать';
	
	}else{
		$existence = selectOne('users', ['email' => $email]);
		$existence1 = selectOne('users', ['username' => $login]);	
		if ($existence){
			$errMsg = "Пользователь с такой почтой уже существует";
		}elseif ($existence1){
			$errMsg = 'Пользователь с таким именем уже существует';
		}else{
			$pass = password_hash($_POST['pass-second'], PASSWORD_DEFAULT);
			$post = [
				'admin' => $admin,
				'username' => $login,
				'email' => $email,
				'password' => $pass
			];
			$id = insert('users', $post);
			$user = selectOne('users', ['id_user' => $id]);
			
			$_SESSION['id_user'] = $user['id_user'];
			$_SESSION['login'] = $user['username'];
			$_SESSION['admin'] = $user['admin'];

			if ($_SESSION['admin']){
				header('location: ' . BASE_URL . admin/admin.php);
			}else{
				header('location: ' . BASE_URL);
			}
		}
		
	}

	
	// $id = insert('users', $post);
	// $last_row = selectOne('users', ['id_user' => $id]);
}else{
	$login = '';
	$email = '';
	// echo 'GET';
}

	// $pass = password_hash($_POST['pass-second'], PASSWORD_DEFAULT);




	// $id = insert('users', $post);
	// $last_row = selectOne('users', ['id_user' => $id]);
	// tst($last_row);

//Обработка формы входа
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){
	$email = trim($_POST['mail']);
	$pass = trim($_POST['password']);

	if ($email === '' || $pass === ''){
		$errMsg = 'Заполните все поля';
	}else{
		$existence = selectOne('users', ['email' => $email]);
		if ($existence && password_verify($pass, $existence['password'])){
			echo $_SESSION['id_user'] = $existence['id_user'];
			$_SESSION['login'] = $existence['username'];
			$_SESSION['admin'] = $existence['admin'];

			if ($_SESSION['admin']){
				header('location: ' . BASE_URL . admin/admin.php);
			}else{
				header('location: ' . BASE_URL);
			}
		}else{
			$errMsg = "Неверная почта либо пароль";
		}
	}
}else{
	$email='';
}

?>