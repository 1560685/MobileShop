<?php 
	if(isset($_GET['them'])){
		//thêm
	  $ten = $_GET['ten'];
	  $sdt = $_GET['sdt'];
	  $email = $_GET['email'];
	  $diachi= $_GET['diachi'];

	  include_once('../../../lib/DataProvider.php');
	  $sql = "INSERT INTO NhaSanXuat(Ten,SDT,Email,DiaChi) VALUES('$ten','$sdt','$email','$diachi')";

	  DataProvider::ExecuteQuery($sql);
	  DataProvider::ChangeURL('../../index.php?quanly=quanlynhasanxuat&ac=them');


	}elseif(isset($_GET['sua'])){
		$id = $_GET['id'];
		$ten = $_GET['ten'];
	  	$sdt = $_GET['sdt'];
		$email = $_GET['email'];
		$diachi= $_GET['diachi'];
			include_once('../../../lib/DataProvider.php');
			$sql = "update NhaSanXuat set Ten='$ten',SDT='$sdt',Email='$email',DiaChi='$diachi' where ID ='$id'";
	
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlynhasanxuat&ac=them');
	}
	else{
		$id = $_GET['id'];
			include_once('../../../lib/DataProvider.php');
			$sql = "Delete From NhaSanXuat Where ID= '$id'";
	
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlynhasanxuat&ac=them');
	}
?>
