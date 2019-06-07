<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<div style="display:flex">
		<form action="uploadscript.php" method="POST" enctype="multipart/form-data" class="col-3">
			<input type="" name="name" placeholder="Название игры" class="col-12">
			<br>
			<input type="" name="cost" placeholder="Цена игры"  class="col-12">
			<br>
			<textarea placeholder="Описание игры" name="desc"  class="col-12"></textarea>
			<br>
			<input type="file" name="img" class="col-12">
			<br>
			<button class="col-12">Загрузить</button>
			<a href="../index.php">Вернуться</a>
		</form>
		<?php if($_GET['s']!=null){
			echo "Что-то не заполнено.";
		} ?>
		<div class="col-9" style="overflow-x:scroll; display:flex">
			<?php 
				 $connect = mysqli_connect('127.0.0.1','root','','timur_ch16');
				 $query = mysqli_query($connect,"SELECT * FROM gameshop_items ORDER BY id DESC");
				 for($i=0;$i<$query->num_rows;$i++){?>
				 	<?php $obj= $query->fetch_assoc(); ?>
				 	<div class="col-3 border">
				 		<?php echo "<img src='".$obj['item_img']."' class='w-100 col-12 h-50 mx-auto'>" ?>
				 		<br>
				 		<h3 style="font-family:Arial; text-align:center"><?php echo $obj['item_name'] ?></h3>
				 		<br>
				 		<p style="font-family:Arial; text-align:center"><?php echo $obj['item_cost'] ?></p>
				 		<br>
				 		<form action="updateform.php" method="POST" style="text-align:center">
				 			<?php echo '<input type="hidden" name="id" value="'.$obj['id'].'">'?>
				 			<button>Изменить</button>
				 		</form>
				 		<form action="delete.php" method="POST" style="text-align:center">
				 			<?php echo '<input type="hidden" name="id" value="'.$obj['id'].'">'?>
				 			<button>Удалить</button>
				 		</form>

				 	</div>
				 <?php  };?>
		</div>
	</div>
</body>
</html>