<div class="header_gio_hang">
Giỏ hàng
</div>
<div class="gio_hang">
<?php 
	$so_luong=0;
	if(isset($_SESSION['id_them_vao_gio']))
	{
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
		}
	}
?>

Số sản phẩm : <?php echo $so_luong; ?>
<br>
<a href="?thamso=gio_hang">Mở giỏ hàng</a>
</div>