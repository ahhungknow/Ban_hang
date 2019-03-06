<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$so_dong_tren_mot_trang=9;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	$tv="select count(*) from tin_tuc";
	$tv_1=mysqli_query($con,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;

	$tv="select id,title from tin_tuc order by id desc limit $vtbd,$so_dong_tren_mot_trang";
	$tv_1=mysqli_query($con,$tv);
?>

<table width="990px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="50px" ><b>ID</b></td>
		<td width="520px" ><b>Title</b></td>
		<td align="center" width="140px" ><b>Sửa</b></td>
		<td align="center" width="140px" ><b>Xóa</b></td>
	</tr>
	<?php 
		$tv="select * from tin_tuc";
		$tv_1=mysqli_query($con,$tv);
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
			$title=$tv_2['title'];
			$link_sua="?thamso=sua_tin_tuc&id=".$id."&trang=".$_GET['trang'];
			$link_xoa="?xoa_tin_tuc=co&id=".$id;
			?>
				<tr class="a_1" >
					<td align="center" >
						<p><?php echo $id ?></p>
					</td>
					<td>
						<p><?php echo $title; ?></p>
					</td>
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" class="lk_a1" >Sửa</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xoa; ?>" class="lk_a1" >Xóa</a>
					</td>
				</tr>
			<?php 
		}
	?>
	<tr>
		<td colspan="5" align="center" >
			<br>
			<?php 
				for($i=1;$i<=$so_trang;$i++)
				{
					$link_phan_trang="?thamso=quan_ly_tin_tuc&trang=".$i;
					echo "<a href='$link_phan_trang' class='phan_trang' >";
						echo $i;
					echo "</a> ";
				}
			?>
			<br><br>
		</td>
	</tr>
</table>