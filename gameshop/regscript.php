<?php 
	$connect = mysqli_connect('127.0.0.1','root','','timur_ch16');
	$query = mysqli_query($connect,"SELECT * FROM gameshop_user WHERE acc_mail='".$_POST['mail']."' and acc_name='".$_POST['name']."'");
if($query->num_rows==0){
	mysqli_query($connect, "INSERT INTO gameshop_user(acc_mail,acc_pass,acc_name) VALUES('".$_POST['mail']."','".$_POST['pass']."','".$_POST['name']."')");
	header("Location:../logform.php?s=1");
}else{
	header("Location:../regform.php?s=1");
}
?>
