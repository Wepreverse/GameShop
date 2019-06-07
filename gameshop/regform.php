<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST" action="regscript.php">
		<input type="" name="mail" placeholder="Почта">
		<input type="" name="name" placeholder="Ник">
		<input type="" name="pass" placeholder="Пароль">
		<button>Зарегистрироваться</button>
		<?php if($_GET['s']!=null){
			echo "Пользователь с такой почтой уже существует.";
		} ?>
	</form>
	<a href="../logform.php">Войти</a>
</body>
</html>