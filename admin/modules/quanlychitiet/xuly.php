<?php 
	if(isset($_POST['them'])){
		//thêm
        if(isset($_POST['tensp'])&&isset($_POST['loai'])&&isset($_POST['gia'])&& $_FILES["hinhanh"] > 0)
	   	{
			$ten = $_POST['tensp'];
			$loai = $_POST['loai'];
			$gia = $_POST['gia'];
			$mota = $_POST['mota'];
			$sx = $_POST['sx'];
			$hinhanh = $_FILES["hinhanh"]["name"];
			move_uploaded_file($_FILES["hinhanh"]["tmp_name"],'../../../Pictures/'.$hinhanh);
			include_once('../../../lib/DataProvider.php');
			$sql = "INSERT INTO SanPham(TenSanPham,MaLoai,MaNhaSX,Gia,image,MoTa) VALUES('$ten','$loai','$sx','$gia','$hinhanh','$mota')";
	
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlychitiet&ac=ds');
    	}

	}elseif(isset($_POST['sua'])){
			$id = $_POST['masp'];
			$ten = $_POST['tensp'];
			$loai = $_POST['loai'];
			$gia = $_POST['gia'];
			$mota = $_POST['mota'];
			$sx = $_POST['sx'];
			$hinhanh = $_FILES["hinhanh"]["name"];
			move_uploaded_file($_FILES["hinhanh"]["tmp_name"],'../../../Pictures/'.$hinhanh);
			if($hinhanh !='')
				$sql = "Update SanPham Set TenSanPham= '$ten',MaLoai='$loai',MaNhaSX='$sx',Gia='$gia',image='$hinhanh',MoTa='$mota' where MaSanPham= '$id' ";
			else
				$sql = "Update SanPham Set TenSanPham= '$ten',MaLoai='$loai',MaNhaSX='$sx',Gia='$gia',MoTa='$mota' where MaSanPham= '$id' ";
			include_once('../../../lib/DataProvider.php');
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlychitiet&ac=ds');
	}
	else{
		$id = $_GET['id'];
			include_once('../../../lib/DataProvider.php');
			$sql = "Delete From SanPham Where MaSanPham= '$id'";
	
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlychitiet&ac=ds');
	}
?>
