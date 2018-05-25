<?php 
    if(isset($_GET['ac']))
	{
		$tam = $_GET['ac'];
	}else{
		$tam = '';
	}
	if($tam=='update1'){
		include_once('../../../lib/DataProvider.php');
			$sql = "update donhang set TrangThai = 1 Where ID = $_GET[id]";
	
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlydonhang&ac=ds');
	}
	if($tam=='update2'){
		include_once('../../../lib/DataProvider.php');
			$sql = "update donhang set TrangThai = 2 Where ID = $_GET[id]";
	
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlydonhang&ac=ds');
	}
	if($tam=='update3'){
		include_once('../../../lib/DataProvider.php');
			$sql = "update donhang set TrangThai = 3 Where ID = $_GET[id]";
	
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlydonhang&ac=ds');
	}
	if($tam=='huy'){
		include_once('../../../lib/DataProvider.php');
			$sql = "update donhang set TrangThai = 4 Where ID = $_GET[id]";
	
			DataProvider::ExecuteQuery($sql);
			DataProvider::ChangeURL('../../index.php?quanly=quanlydonhang&ac=ds');
	}
	
?>
