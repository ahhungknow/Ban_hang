<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="UPDATE hoa_don SET status=1 WHERE id = $id ";
    mysqli_query($con,$tv);
?>