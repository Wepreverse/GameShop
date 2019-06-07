<?php 
$connect = mysqli_connect('127.0.0.1','root','','timur_ch16');
if($_FILES['img']['name']!=null){
	mysqli_query($connect,"UPDATE gameshop_items SET item_name='".$_POST['name']."', item_cost='".$_POST['cost']."', item_desc='".$_POST['desc']."',item_img='images/".$_FILES['img']['name']."'");
move_uploaded_file($_FILES['img']['tmp_name'],'images/'.$_FILES['img']['name']);
header("Location:../uploadform.php");
}else{


mysqli_query($connect,"UPDATE gameshop_items SET item_name='".$_POST['name']."', item_cost='".$_POST['cost']."', item_desc='".$_POST['desc']."'WHERE id = '".$_POST['id']."'");
header("Location:../uploadform.php");
}
 ?>