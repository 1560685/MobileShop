<?php 
	if(isset($_GET['them'])){
		//thêm
	  $name = $_GET['name'];
	  $pass = md5($_GET['pass']);
	  $loai = $_GET['loai'];
	  $hoten = $_GET['hoten'];
	  $sdt = $_GET['sdt'];
	  $email = $_GET['email'];
	  $diachi = $_GET['diachi'];

	  include_once('../../../lib/DataProvider.php');
	  $sql = "INSERT INTO TaiKhoan(TenDangNhap,MatKhau,Loai,HoTen,SDT,Email,DiaChi) VALUES('$name','$pass','$loai','$hoten','$sdt','$email','$diachi')";

	  DataProvider::ExecuteQuery($sql);
	  DataProvider::ChangeURL('../../index.php?quanly=quanlytaikhoan&ac=ds');


	}elseif(isset($_GET['sua'])){
		$id = $_GET['id'];
		$name = $_GET['name'];
	  	$pass = md5($_GET['pass']);
	  	$loai = $_GET['loai'];
	  	$hoten = $_GET['hoten'];
	  	$sdt = $_GET['sdt'];
	  	$email = $_GET['email'];
	  	$diachi = $_GET['diachi'];
			include_once('../../../lib/DataProvider.php');
			$sql = "update TaiKhoan set TenDangNhap='$name',MatKhau='$pass',Loai='$loai',HoTen='$hoten',SDT='$sdt',Email='$email',DiaChi='$diachi' where MaTaiKhoan = '$id' ";
	
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlytaikhoan&ac=ds');
	}
	else{
		$id = $_GET['id'];
			include_once('../../../lib/DataProvider.php');
			$sql = "Delete From TaiKhoan Where MaTaiKhoan = '$id'";
	
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlytaikhoan&ac=ds');
	}
?>
