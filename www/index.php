<?php
	require_once "lib/connectdb.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Main</title>
<?php require_once "blocks/attach_style.php"; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="" />
</head>
<body>
	<table border="1" style="width: 100%; margin: 0 auto;">
		<tr>	
			<?php
				require_once "blocks/header.php";
			?>
		</tr>
		<tr>
			<?php
				require_once "blocks/menu.php";
			?>
		</tr>
		<tr>
			<td style="width: 20%">
				<h3>Форма входа</h3>
				<form name="" method="post" action="">
					<table>
						<tr>
							<td>
								<label>Логин</label>
							</td>
							<td>
								<input type="text" name="login" required/> 
							</td>
						</tr>
						<tr>
							<td>
								<label>Пароль</label>
							</td>
							<td>
								<input type="password" name="password" required/> 
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="auth_button" value="Войти!" />
							</td>
							<td>
								<a href="registration.php">Регистрация</a>
							</td>
						</tr>
					</table>
				</form>
				<hr />
				<h3>Статистика</h3>
			</td>
			<td style="width: 60%">
				<h3>Контент</h3>
			</td>
			<td style="width: 20%">
				<h3>Поисковик</h3>
				<form>
					<table>
						<tr>
							<td>
								<input type="text" name="" />
							</td>
						</tr>
					  	<tr>
							<td>
								<input type="submit" name="search_button" value="Искать!" />
							</td>
						</tr>
					</table>
				</form>
				<hr />
				<h3>Баннеры/новости</h3>
			</td>
	  	</tr>
	  <tr>
	  		<?php
		  		require_once "blocks/footer.php";
				require_once "blocks/authorisation.php";
			?>
	  </tr>
	</table>
</body>
</html>
