	<?php 
	//vẫn giữ giá trị tự trang liệt kê kiểm tra chức năng quản lý 
		if(isset($_GET['ac']))
		{
			$tam = $_GET['ac'];
		}else{
			$tam = '';
		}
		if($tam=='ds'){
			include('modules/quanlychitiet/lietke.php');
			
		}
		if($tam=='them'){
			include('modules/quanlychitiet/them.php');
			
		}
		if($tam=='sua'){
			include('modules/quanlychitiet/sua.php');
			
		}
	?>
