<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div style="background:#4cb6df; height:100%" class="container-fluid">
	<div class="col-12 alert alert-secondary navbar" style="height:50px;padding:5px 10px;">
		<h3 style="font-family:Arial">GAMESHOP</h3>
		<?php if($_SESSION['id']==null){
			echo '<div style="float:right; font-family:Arial"><a href="logform.php" style="font-family:Arial;text-decoration: none">Войти</a> или
			 <a href="regform.php" style="font-family:Arial;text-decoration: none">Зарегистрироваться</a></div>';
		}else{
			$connect = mysqli_connect('127.0.0.1','root','','timur_ch16');
			$query = mysqli_query($connect,'SELECT * FROM gameshop_user WHERE id = "'.$_SESSION['id'].'"');
			$obj = $query->fetch_assoc();
			echo '<h4 style="float:right;margin-right:10px; font-family:Arial">Здравствуйте, '.$obj['acc_name'].'</h4><a href="trash.php" style="float:right;text-decoration: none">Корзина</a> <a href="exit.php" style="float:right;text-decoration: none">Выйти</a>';
		} ?>
	</div>
	<div class="col-8 alert alert-primary container">
		<?php 
		$connect = mysqli_connect('127.0.0.1','root','','timur_ch16');
		$query = mysqli_query($connect,'SELECT * FROM gameshop_items ORDER BY id DESC');
		for($i=0;$i<2;$i++){?>
			<div style="display:flex" class="col-12">
				<?php $obj = $query->fetch_assoc(); ?>
				<div class="col-4" style="border-radius:5px;height:500px; border:1px solid white;padding:0px 0px;text-align:center">
					<?php echo'<img src="'.$obj['item_img'].'" class="w-100" style="border-radius:5px;height:60%">'; ?>
					<?php echo '<h3 style="font-family:Arial;color:black;margin-top:2px;font-size:40px">'.$obj['item_name'].'</h3>' ?>
					<?php echo '<p style="font-family:Arial;color:black">'.$obj['item_cost'].' Рублей</p>' ?>
					<?php if($_SESSION['id']==null){
						echo '<p style="color:black;font-family:Arial;font-size:25px">Войдите в аккаунт, чтобы добавить игру в корзину</p>';
					}else{
						echo '<form action="addtotrashcan.php" method="POST">
								<input type="hidden" name="id" value="'.$obj['id'].'">
								<button style="border:none;padding:10px 20px; border-radius:5px;font-family:Arial;">Добавить в корзину</button>
							</form>';
					} ?>
				</div>
				<?php $obj = $query->fetch_assoc(); ?>
				<div class="col-4" style="border-radius:5px;height:500px; border:1px solid white;padding:0px 0px;text-align:center">
					<?php echo'<img src="'.$obj['item_img'].'" class="w-100" style="border-radius:5px;height:60%">'; ?>
					<?php echo '<h3 style="font-family:Arial;color:black;margin-top:2px;font-size:40px">'.$obj['item_name'].'</h3>' ?>
					<?php echo '<p style="font-family:Arial;color:black">'.$obj['item_cost'].' Рублей</p>' ?>
					<?php if($_SESSION['id']==null){
						echo '<p style="color:black;font-family:Arial;font-size:25px">Войдите в аккаунт, чтобы добавить игру в корзину</p>';
					}else{
						echo '<form action="addtotrashcan.php" method="POST">
								<input type="hidden" name="id" value="'.$obj['id'].'">
								<button style="border:none;padding:10px 20px; border-radius:5px;font-family:Arial;">Добавить в корзину</button>
							</form>';
					} ?>
				</div>
				<?php $obj = $query->fetch_assoc(); ?>
				<div class="col-4" style="border-radius:5px;height:500px; border:1px solid white;padding:0px 0px;text-align:center">
					<?php echo'<img src="'.$obj['item_img'].'" class="w-100" style="border-radius:5px;height:60%">'; ?>
					<?php echo '<h3 style="font-family:Arial;color:black;margin-top:2px;font-size:40px">'.$obj['item_name'].'</h3>' ?>
					<?php echo '<p style="font-family:Arial;color:black">'.$obj['item_cost'].' Рублей</p>' ?>
					<?php if($_SESSION['id']==null){
						echo '<p style="color:black;font-family:Arial;font-size:25px">Войдите в аккаунт, чтобы добавить игру в корзину</p>';
					}else{
						echo '<form action="addtotrashcan.php" method="POST">
								<input type="hidden" name="id" value="'.$obj['id'].'">
								<button style="border:none;padding:10px 20px; border-radius:5px;font-family:Arial;">Добавить в корзину</button>
							</form>';
					} ?>
					
				</div>
			</div>

		<?php }?>
	</div>
</div>
</body>
</html>