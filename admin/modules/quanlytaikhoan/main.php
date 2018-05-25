<div >
	<?php 
		if(isset($_GET['ac']))
		{
			$tam = $_GET['ac'];
		}else{
			$tam = '';
		}
		if($tam=='ds'){
			include('modules/quanlytaikhoan/lietke.php');
			
		}
		if($tam=='them'){
			include('modules/quanlytaikhoan/them.php');
			
		}
		if($tam=='sua'){
			include('modules/quanlytaikhoan/sua.php');
			
		}
	?>
</div>
