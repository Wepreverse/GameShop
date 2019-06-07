<?php session_start(); ?>
<meta charset="utf-8">
<style type="text/css">
	*{
		padding:0px;
		margin:0px;
	}
</style>
<?php 
echo '<a href="index.php">Вернуться</a>';
$connect = mysqli_connect('127.0.0.1','root','','timur_ch16');
$query = mysqli_query($connect,'SELECT * FROM gameshop_trash WHERE user_id="'.$_SESSION['id'].'"');

for($i=0;$i<$query->num_rows;$i++){?>
	<?php
	$queryobj= $query->fetch_assoc();
	$queryp = mysqli_query($connect,"SELECT * FROM gameshop_items WHERE id='".$queryobj['item_id']."'");
	 $obj=$queryp->fetch_assoc(); ?>
	<div  style="display:flex;width:900px; height:50px">
		<?php echo '<div style="width:400px;border: 1px solid black"><h3 style="font-family:Arial;color:black;margin-top:2px;font-size:40px">'.$obj['item_name'].'</h3></div>'; ?>
		<?php echo '<div style="width:400px;border:1px solid black"><p style="font-family:Arial;color:black">'.$obj['item_cost'].' Рублей</p></div>'; ?>
		<?php $cost= $cost+ $obj['item_cost']; ?>
		<form action="deletefromtrash.php" method="POST"style="width:100px">
			<?php echo' <input type="hidden" name="id" value="'.$obj['id'].'">'?>
			<button style="border:none;border-radius:5px;background:red;color:white;height:100%;width:100%">Удалить из корзины</button>
		</form>
	</div>
<?php };?>
<div style="width:898px;height:50px;border:1px solid black;display:flex">

<?php echo "В сумме: ".$cost." рублей" ?>

</div>
<button style="border:none;background:green;color:white;height:10%;padding:5px 10px;width:900px;font-family:Arial">Купить</button>