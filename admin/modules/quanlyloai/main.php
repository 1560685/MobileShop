<div class="left">
	<?php 
		if(isset($_GET['ac']))
		{
			$tam = $_GET['ac'];
		}else{
			$tam = '';
		}
		if($tam=='them'){
			include('modules/quanlyloai/them.php');
			
		}
		if($tam=='sua'){
			include('modules/quanlyloai/sua.php');
		}
	?>
</div>
<div class="right">
	<?php 
		include('modules/quanlyloai/lietke.php');
	?>
</div>