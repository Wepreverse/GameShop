<?php 
	$connect = mysqli_connect('127.0.0.1','root','','timur_ch16');
	$query = mysqli_query($connect,"SELECT * FROM gameshop_user WHERE acc_mail = '".$_POST['mail']."' and acc_pass = '".$_POST['pass']."'");
	if($_POST['mail']=='admin' & $_POST['pass']=='123'){
		header("Location:../uploadform.php");
	}
	else if($query->num_rows==0){
 	header("Location:../logform.php?d=1");
	}
	else{
 	session_start();
 	$query_fetch = $query->fetch_assoc();
 	$_SESSION['id']= $query_fetch['id'];
 	header("Location:../index.php");
 }
 ?>
