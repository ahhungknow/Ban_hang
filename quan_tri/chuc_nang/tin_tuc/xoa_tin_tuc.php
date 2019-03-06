<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	
	$tv="select * from tin_tuc where id='$id' ";
	$tv_1=mysqli_query($con,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$tv="DELETE FROM tin_tuc WHERE id = $id ";
	mysqli_query($con,$tv);
?>