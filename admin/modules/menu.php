<div class="menu">
  <ul>
  	<?php 
	if(!isset($_POST['quanly'])){
	    echo '<li><a href="index.php" class="chon">Trang chủ</a></li>';
	}
	else{
		echo '<li><a href="index.php">Trang chủ</a></li>';
	}
	if(isset($_POST["quanly"]) && $_POST["quanly"]=='quanlyloai')
	{
		 echo '<li><a href="index.php?quanly=quanlyloai&ac=them" class="chon">Quản lý</a></li>';
	}
	else{
		echo '<li><a href="index.php?quanly=quanlyloai&ac=them">Quản lý</a></li>';
	}
	if( isset($_POST["quanly"]) && $_POST['quanly']=='quanlychitiet'){
		echo '<li><a href="index.php?quanly=quanlychitiet&ac=ds" class="chon">Chi tiết sản phẩm</a></li>';
	}
	else{
		echo'<li><a href="index.php?quanly=quanlychitiet&ac=ds">Chi tiết sản phẩm</a></li>';
	}
   	if(isset($_POST["quanly"]) && $_POST['quanly']=='quanlydonhang'){
		echo '<li><a href="index.php?quanly=quanlydonhang&ac=ds" class="chon">Đơn hàng</a></li>';
	}
	else{
		echo'<li><a href="index.php?quanly=quanlydonhang&ac=ds">Đơn hàng</a></li>';
	}
	if(isset($_POST["quanly"]) && $_POST['quanly']=='quanlynhasanxuat'){
		echo '<li><a href="index.php?quanly=quanlynhasanxuat&ac=them" class="chon">Nhà sản xuất</a></li>';
	}
	else{
		echo'<li><a href="index.php?quanly=quanlynhasanxuat&ac=them">Nhà sản xuất</a></li>';
	}
	if(isset($_POST["quanly"]) &&    $_POST['quanly']=='quanlytaikhoan'){
		echo ' <li><a href="index.php?quanly=quanlytaikhoan&ac=ds" class="chon">Tài khoản</a></li>';
	}
	else{
		echo' <li><a href="index.php?quanly=quanlytaikhoan&ac=ds">Tài khoản</a></li>';
	}
    
   
    echo '<li><a href="../index.php">Trang user</a></li>';
  	?>
  </ul>
</div>