<?php
$id=$_GET['id'];
$tv="select * from tin_tuc where id='$id'";
$tv_1=mysqli_query($con,$tv);
    while($tv_2=mysqli_fetch_array($tv_1))
    {
?>
<div>
    <?php
        echo "<p style='text-align:center; font-size:30px;color:Blue;font-weight:Bold'>".$tv_2['title'];
        echo "<br><br>";
        echo $tv_2['noi_dung'];
    }
    ?>
</div>