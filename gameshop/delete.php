<?php 
	$connect = mysqli_connect('127.0.0.1','root','','timur_ch16');
	mysqli_query($connect,"DELETE FROM gameshop_items WHERE id = '".$_POST['id']."'");
	header("Location:../uploadform.php");
 ?>