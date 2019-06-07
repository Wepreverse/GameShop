<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="updatescript.php" method="POST" enctype="multipart/form-data">
	<?php 
	$connect = mysqli_connect('127.0.0.1','root','','timur_ch16');
	$query = mysqli_query($connect,'SELECT * FROM gameshop_items WHERE id = "'.$_POST['id'].'"');
	$obj = $query->fetch_assoc();
	echo '<img src="'.$obj['item_img'].'">'?>
	<?php echo '<input type="" name="name" value="'.$obj['item_name'].'"> '?>
	<?php echo '<input type="" name="cost" value="'.$obj['item_cost'].'"> '?>
	<?php echo '<input type="hidden" name="id" value="'.$obj['id'].'"> '?>
	<textarea name="desc"><?php echo $obj['item_desc'] ?></textarea>
	<input type="file" name="img">
	<button>Изменить</button>
	</form>
</body>
</html>