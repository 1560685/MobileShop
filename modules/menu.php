<?php  session_start();?>
<div class="menu"> 
    	<ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="index.php?xem=chitietloaisanpham&id=1">Sản phẩm</a></li>
            <li><a href="index.php">Hướng dẫn</a> </li>
            <li><a href="mailto:vdvu.it@gmail.com">Liên hệ</a></li>
            <li><a href="modules/content.php?huy=a">Đăng Nhập</a></li>
            <li><a href="http://localhost:8888/web-mobile-laravel/public/product?page=1">Phiên bản mới</a></li>
            <?php if(isset($_SESSION['TEN'])) { ?>
            <li><a href="admin/index.php">Vào trang quản trị</a></li>
            <?php } ?>
            <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="searchform">
            <input type="text" id="searchf" name="searchtext" size="30" /><input type="submit" id="searchbtn" name="search" value="Tìm Kiếm" placeholder="Search..." />
            </div>
            </form>
    	</ul>
</div>