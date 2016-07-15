<?php
	require_once "lib/connectdb.php";
	if (isset($_POST['auth_button'])){
		$login = ($_POST['login']);
		$pass = md5($_POST['password']);
		$result = $mysqli->query("SELECT full_name, login, password FROM users");
		$url = ($_POST['$returnurl']);
		while($row = $result->fetch_assoc()){
			if ($row[login] == $login and $row[password] == $pass){
				$name = $row[full_name];
				echo "<script>alert(\"Добро пожаловать $name.\");</script>";
				exit("Вы вошли на сайт как: $login.");
			}
		}
		echo "<script>alert(\"Пользователя с такими учетными данными не существует, попробуйте войти еще раз. Или зарегистрируйтесь.\");</script>";
	}
?>