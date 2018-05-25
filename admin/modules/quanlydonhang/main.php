<div>
	<?php 
		if(isset($_GET['ac']))
		{
			$tam = $_GET['ac'];
		}else{
			$tam = '';
		}
		
		if($tam=='ds'){
			include('modules/quanlydonhang/danhsach.php');
		}
		if($tam=='sua'){
			include('modules/quanlydonhang/sua.php');
		}
	?>

</div>