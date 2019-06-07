<?php 
	$connect = mysqli_connect('127.0.0.1','root','','timur_ch16');
	if($_POST['name']==null||$_POST['cost']==null||$_POST["desc"]==null||$_FILES['img']['name']==null){
		header("Location:../uploadform.php?s=1");
	}else{
		mysqli_query($connect,"INSERT INTO gameshop_items(item_name,item_cost,item_desc,item_img) VALUES('".$_POST['name']."','".$_POST['cost']."','".$_POST['desc']."','images/".$_FILES['img']['name']."')");
		move_uploaded_file($_FILES['img']['tmp_name'],'images/'.$_FILES['img']['name']);
		header("Location:../uploadform.php");
	}
 ?>