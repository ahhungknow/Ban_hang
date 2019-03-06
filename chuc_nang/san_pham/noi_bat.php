<div class="header_sp_special">
	Sản phẩm nổi bật
</div>
<center>
<div class="sp_special">
	<?php 
		$tv="select id,ten,hinh_anh from san_pham where noi_bat='co' order by id desc limit 0,3";
		$tv_1=mysqli_query($con,$tv);
		$i=0;
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
			$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
			echo "<a href='$link_chi_tiet' >";
				echo "<img src='$link_anh' width='100px' >";
			echo "</a>";
			echo "<br><br>";
			echo $tv_2['ten'];
			echo "<br>";
			echo "<br>";
		}
	?>
</div>
</center>
