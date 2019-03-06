<?php 
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$ten_nguoi_mua=trim($_POST['ten_nguoi_mua']);
		$email=trim($_POST['email']);
		$dien_thoai=trim($_POST['dien_thoai']);
		$dia_chi=trim(nl2br($_POST['dia_chi']));
		$noi_dung=nl2br($_POST['noi_dung']);
		if($ten_nguoi_mua!="" and $dien_thoai!="" and $dia_chi!="")
		{
			$hang_duoc_mua="";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				$hang_duoc_mua=$hang_duoc_mua.$_SESSION['id_them_vao_gio'][$i]."[|||]".$_SESSION['sl_them_vao_gio'][$i]."[|||||]";
				$id=$_SESSION['id_them_vao_gio'][$i];
				$sp="select * from san_pham where id='$id'";
				$sp_1=mysqli_query($con,$sp);
				$sp_2=mysqli_fetch_array($sp_1);
				$name=$sp_2['ten'];
				$sl=$sp_2['sl'];
				if($sp_2['sl']<$_SESSION['sl_them_vao_gio'][$i])
				{
					thong_bao_html_roi_chuyen_trang("Quá số lượng sản phẩm: $name - Hiện trong kho còn lại: $sl sản phẩm!! Vui lòng giảm số sản phẩm trong giỏ hàng!!","index.php");
				}
				$sl_new=$sl-$_SESSION['sl_them_vao_gio'][$i];
				$update="update san_pham set sl='".$sl_new."' where id='".$_SESSION['id_them_vao_gio'][$i]."'";
				mysqli_query($con,$update);
			}		
			$tv="INSERT INTO hoa_don (
            id ,
            ten_nguoi_mua ,
            email ,
            dia_chi ,
            dien_thoai ,
            noi_dung ,
            hang_duoc_mua
            )
            VALUES (
            NULL ,
            '$ten_nguoi_mua',
            '$email',
            '$dia_chi',
            '$dien_thoai',
            '$noi_dung',
            '$hang_duoc_mua'
			);";
			mysqli_query($con,$tv);
			unset($_SESSION['id_them_vao_gio']);
			unset($_SESSION['sl_them_vao_gio']);
			thong_bao_html_roi_chuyen_trang("Cảm ơn bạn đã mua hàng tại Quang nguyễn watch","index.php");
		}
		else 
		{
			thong_bao_html("Không được bỏ trống tên người mua , điện thoại , địa chỉ");
			trang_truoc();
			exit();
		}
	}
?>