<?php
	require_once "lib/connectdb.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Регистрация нового пользователя</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="" />
</head>
<body>
		<form name="user" action="" method="post">
 			<table>
				<p>Введите имя и фамилию (en): <input type="text" name="name" /></p>
 				<p>Ввведите логин: <input type="text" name="login" /></p>
				<p>Введите пароль: <input type="password" name="pass1" /></p>
				<p>Подтвердите пароль: <input type="password" name="pass2" /></p>
				<p>Введите адрес электронной почты: <input type="text" name="e-mail" /></p>
 				<p><input type="submit" /></p>
				<a href="index.php">Главная</a>
				<br />
				<a href="users.php">Пользователи</a>
			</table>
		</form>
	
	<?php
		$name = ($_POST['name']);
		$login = ($_POST['login']);
		$pass1 = ($_POST['pass1']);
		$pass2 = ($_POST['pass2']);
		$mail = ($_POST['e-mail']);
		$date = date("Y-m-d");
		if ($pass1 = $pass2){
			$pass = $pass1;
			mkdir("users_data/".$name,0777);
			echo "Пользователь успешно зарегестрирован!";
		}	
		else {
			echo "Введеные пароли не совпадают!";
		}
		$mysqli->query("INSERT INTO users (full_name, login, password, e-mail, date) VALUES ('$name', '$login', '$pass', '$mail', '$date')"); 
	?>
</body>
</html>	
	
