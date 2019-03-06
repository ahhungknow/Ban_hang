<?php 
	if(isset($_GET['thamso'])){$tham_so=$_GET['thamso'];}else{$tham_so="";}
	switch($tham_so)
	{
		case "dang_nhap":
			header("Location: quan_tri/index.php");
		break;
		case "xuat_tin_tuc":
			include("chuc_nang/tin_tuc/tin_tuc.php");
		break;
		case "xem_tin_tuc":
			include("chuc_nang/tin_tuc/xem_tin_tuc.php");
		break;
		case "xuat_san_pham":
			include("chuc_nang/san_pham/xuat.php");
		break;
		case "chi_tiet_san_pham":
			include("chuc_nang/san_pham/chi_tiet_san_pham.php");
		break;
		case "xuat_san_pham_2":
			include("chuc_nang/san_pham/xuat_toan_bo_san_pham.php");
		break;
		case "xuat_mot_tin":
			include("chuc_nang/xuat_mot_tin.php");
		break;
		case "product":
			include("chuc_nang/tim_kiem/xuat_san_pham_tim_kiem.php");
		break;
		case "gio_hang":
			include("chuc_nang/gio_hang/gio_hang.php");
		break;
		case "tracking":
			include("chuc_nang/tim_kiem/tracking.php");
		break;
		case "xem_hoa_don":
			include("chuc_nang/tim_kiem/xem_hoa_don.php");
		break;
		default:
			include("chuc_nang/slideshow/slideshow.php");	
			include("chuc_nang/san_pham/san_pham_trang_chu.php");	
	}
?>