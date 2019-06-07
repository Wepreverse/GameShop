<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST" action="logscript.php">
		<input type="" name="mail" placeholder="Почта">
		<input type="" name="pass" placeholder="Пароль">
		<button>Войти</button>
	</form>
	<a href="../regform.php">Зарегистрироваться</a>
	<?php 
	if($_GET['s']!=null){
		echo "Вы успешно зарегистрировались!";
	}
	if($_GET['d']!=null){
		echo "Такого пользователя не существует.";
	}
	 ?>
</body>
</html>