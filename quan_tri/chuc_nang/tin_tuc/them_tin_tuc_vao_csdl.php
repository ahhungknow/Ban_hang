<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$title=trim($_POST['title']);
	$title=str_replace("'","&#39;",$title);
	$noi_dung=$_POST['noi_dung'];
	$noi_dung=str_replace("'","&#39;",$noi_dung);
	if($noi_dung!="")
	{
		if($title!="")
		{
				$tv="
				INSERT INTO tin_tuc (
				title ,
				noi_dung
				)
				VALUES (
				'$title',
				'$noi_dung'
				);";
				mysqli_query($con,$tv);
		}
		else 
		{
			thong_bao_html("Chưa điền tiêu đề");
		}
	}
	else 
	{
		thong_bao_html("Chưa điền nội dung tin tức");
	}
?>