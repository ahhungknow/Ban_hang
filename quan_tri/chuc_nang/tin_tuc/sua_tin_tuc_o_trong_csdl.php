<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$title=trim($_POST['title']);
	$title=str_replace("'","&#39;",$title);
	$noi_dung=$_POST['noi_dung'];
	$noi_dung=str_replace("'","&#39;",$noi_dung);
	$id=$_GET['id'];
	if($title!="")
	{
			$tv="
			UPDATE tin_tuc SET 
			title = '$title',
			noi_dung = '$noi_dung' 
			WHERE id =$id;
			";
			mysqli_query($con,$tv);
	}
	else 
	{
		thong_bao_html("Tiêu đề chưa được điền vào");
	}
?>