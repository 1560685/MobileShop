<?php 
     if(isset($_GET['huy']))
	 {
		 	// giữ biến 
			session_start();
			//hủy phiên làm việc
			session_destroy();	
			include_once('../lib/DataProvider.php');
			DataProvider::ChangeURL('../admin/login.php');
	 }
?>
<div class="content">
	<div class="left">
		<?php 
            include('modules/left/danhsachsanpham.php');
        ?>
        
     </div>
     <div class="right">
		 <?php
			if(isset($_GET['xem'])){
				 $tam = $_GET['xem'];
			}else{
				 $tam ='';
			}if($tam=='chitietloaisanpham'){
				include('modules/right/chitietloaisanpham.php');
			}elseif($tam=='chitietsanpham'){
				include('modules/right/chitietsanpham.php');
			}elseif(isset($_POST['search'])){
				include('modules/right/search.php');
			}elseif(isset($_POST['thanhtoan'])){
				include('modules/right/thanhtoan.php');
			}elseif($tam=='chitietnhasanxuat'){
				include('modules/right/chitietnhasanxuat.php');
			}elseif($tam=='giohang'){
				include('modules/right/Cart.php');
			}else{
				include('modules/right/tatcasanpham.php');
			
			};	 
         ?>
     </div>
       
</div>
<div class="clear"> </div>