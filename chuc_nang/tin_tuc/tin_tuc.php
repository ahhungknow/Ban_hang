<?php
	$tv_1="select * from tin_tuc order by id desc";
    $tv_2=mysqli_query($con,$tv_1);
?>
<div>
	    <?php 
		while($tv_3=mysqli_fetch_array($tv_2))
		{
            $id=$tv_3['id'];
			$title=$tv_3['title'];
            $link_xem="?thamso=xem_tin_tuc&id=".$id;
            ?>
			<p style="margin-left:10px;margin-right:15px;font-size:20px"><a href="<?php echo $link_xem; ?>" class="lk_a1" ><?php echo $title; ?></a>
        <?php
        }
        ?>
</div>