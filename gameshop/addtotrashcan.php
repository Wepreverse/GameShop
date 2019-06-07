<?php 
session_start();
$connect = mysqli_connect('127.0.0.1','root','','timur_ch16');
mysqli_query($connect,"INSERT INTO gameshop_trash(user_id,item_id) VALUES('".$_SESSION['id']."','".$_POST['id']."')");
header('Location:../index.php');


 ?>