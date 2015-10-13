<?php
	require_once "lib/connectdb.php";
	if (isset($_POST['my_button'])){
		$name = ($_POST['name']);
		$login = ($_POST['login']);
		$result = $mysqli->query("SELECT login FROM users");
		while($row = $result->fetch_assoc()){
			if ($row[login] == $login){
			die("Пользователь с такими данными уже существует, выберите другой логин!");
			}	
		}
		
		$pass1 = ($_POST['pass1']);
		$pass2 = ($_POST['pass2']);
		$mail = ($_POST['e-mail']);
		$date = date("Y-m-d");
		mkdir("users_data/".$login,0777);
		if ($pass1 == $pass2){
			$pass = md5($pass1);			
			$mysqli->query("INSERT INTO users VALUES ('', '$name', '$login', '$pass', '$mail', '$date')");
			echo "Пользователь успешно зарегестрирован!";
		}	
		else{
			die("Введеные пароли не совпадают!");
		}
	}
?>

<html><body>
	<form name= "" action= "registration.php" method= "post">
		<p>Введите имя и фамилию: <input type="text" name="name" required/></p>
		<p>Ввведите логин: <input type="text" name="login" required/></p>
		<p>Введите пароль: <input type="password" name="pass1" required/></p>
		<p>Подтвердите пароль: <input type="password" name="pass2" required/></p>
		<p>Введите адрес электронной почты: <input type="text" name="e-mail" required/></p>
		<p><input type="submit" name="my_button" value="Send"></p>
		<a href="index.php">Домой</a>
		<a href="users.php">Пользователи</a>
	</form>
</body></html>