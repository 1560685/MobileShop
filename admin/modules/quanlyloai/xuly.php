<?php 
	if(isset($_GET['them'])){
		//thêm
        if(isset($_GET['ten']))
    	{
			$tenLoai = $_GET['ten'];
			
	
			include_once('../../../lib/DataProvider.php');
			$sql = "INSERT INTO Loai(TenLoai) VALUES('$tenLoai')";
	
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlyloai&ac=them');
    	}

	}elseif(isset($_GET['Sua'])){
		$id = $_GET['id'];
		$tenLoai = $_GET['ten'];
			include_once('../../../lib/DataProvider.php');
			$sql = "update Loai set TenLoai= '$tenLoai' Where MaLoai= '$id'";
	
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlyloai&ac=them');
	}
	else{
		$id = $_GET['id'];
			include_once('../../../lib/DataProvider.php');
			$sql = "Delete From Loai Where MaLoai= '$id'";
	
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlyloai&ac=them');
	}
?>
