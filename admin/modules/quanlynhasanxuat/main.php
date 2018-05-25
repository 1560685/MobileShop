<div class="left">
	<?php 
		if(isset($_GET['ac']))
		{
			$tam = $_GET['ac'];
		}else{
			$tam = '';
		}
		if($tam=='them'){
			include('modules/quanlynhasanxuat/them.php');
			
		}
		if($tam=='sua'){
			include('modules/quanlynhasanxuat/sua.php');
		}
	?>
</div>
<div class="right">
	<?php 
		include('modules/quanlynhasanxuat/lietke.php');
	?>
</div>