<?php 
session_start();
$connect = mysqli_connect('127.0.0.1','root','','timur_ch16');
mysqli_query($connect,'DELETE * FROM gameshop_trash WHERE user_id="'.$_SESSION['id'].'" AND item_id="'.$_POST['id']);
header('Location:../trash.php');



 ?>