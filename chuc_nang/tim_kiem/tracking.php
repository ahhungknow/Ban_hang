<?php
	if(trim($_GET['tu_khoa'])!=""){ 
		$m=explode(" ",$_GET['tu_khoa']);    
		$chuoi_tim_sql="";
		for($i=0;$i<count($m);$i++)
		{
			$tu=trim($m[$i]);
			if($tu!="")
			{
				$chuoi_tim_sql=$chuoi_tim_sql." email like '%".$tu."%' or dien_thoai like '%".$tu."'";
			}
		}
		$tv_1="select * from hoa_don where $chuoi_tim_sql";
		$tv_2=mysqli_query($con,$tv_1);
	}
?>
<table width="700px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="370px" ><b>Tên</b></td>
		<td width="300px" ><b>Email</b></td>
		<td width="120px" ><b>Điện thoại</b></td>
		<td width="120px" ><b>Trạng thái</b></td>
	</tr>
	<?php 
		while($tv_3=mysqli_fetch_array($tv_2))
		{
			$id=$tv_3['id'];
			$ten=$tv_3['ten_nguoi_mua'];
			$email=$tv_3['email'];
			$dien_thoai=$tv_3['dien_thoai'];
			$link_xem="?thamso=xem_hoa_don&id=".$id;
			?>
				<tr class="a_1" >
					<td>
						<a href="<?php echo $link_xem; ?>" class="lk_a1" ><?php echo $ten; ?></a>
					</td>
					<td>
						<?php echo $email; ?>
					</td>
					<td>
						<?php echo $dien_thoai; ?>
					</td>
					<td>
						<?php
							if($tv_3['status']==0)
								echo "Chưa xử lý";
							else
								echo "Đã chuyển hàng";
						?>
					</td>
				</tr>
			<?php 
		}
	?>
</table>