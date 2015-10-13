<?php
  $mysqli = @new mysqli('localhost', 'alexe23b', 'qwerty', 'adyax');
  
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
  $mysqli->query('INSERT INTO users VALUES ("", "MyName", "Login", "Password", "myname@mail.ru", "2015-10-13")');
  $mysqli->close();
?>