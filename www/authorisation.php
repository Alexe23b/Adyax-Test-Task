<?php
	require_once "lib/connectdb.php";
	if (isset($_POST['auth_button'])){
		$login = ($_POST['login']);
		$pass = md5($_POST['password']);
		$result = $mysqli->query("SELECT full_name, login, password FROM users");
		while($row = $result->fetch_assoc()){
			if ($row[login] == $login and $row[password] == $pass){
				$name = $row[full_name];
				die("Добро пожаловать $name.");
			}
		}
		die("Пользователя с такими учетными данными не существует, попробуйте войти еще раз. Или зарегистрируйтесь");
	}
?>