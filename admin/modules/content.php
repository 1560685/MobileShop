 <div class="content">
 	<?php 
		if(isset($_GET['huy']))
		{
			session_start();
			session_destroy();	
			include('../../lib/DataProvider.php');
			DataProvider::ChangeURL('../login.php');
		}
		if(isset($_GET['quanly']))
		{
			$tam = $_GET['quanly'];
			
		}else{
			$tam='';
		}
		if($tam == 'quanlyloai'){
			include('modules/quanlyloai/main.php');
		}
		if($tam == 'quanlychitiet'){
			include('modules/quanlychitiet/main.php');
		}
		if($tam == 'quanlydonhang'){
			include('modules/quanlydonhang/main.php');
		}
		if($tam == 'quanlynhasanxuat'){
			include('modules/quanlynhasanxuat/main.php');
		}
		if($tam == 'quanlytaikhoan'){
			include('modules/quanlytaikhoan/main.php');
		}
	?>	
</div>
<div class="clear"></div>