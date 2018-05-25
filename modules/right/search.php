
 <?php
 	if(isset($_POST['search'])){
		$search=$_POST['searchtext'];
		$sql_search="select * from sanpham where TenSanPham LIKE '%$search%' or Gia LIKE '%$search%'";
		$query_search=DataProvider::ExecuteQuery($sql_search);
	}
?>
<link rel="stylesheet" type="text/css" href="./style/css.css">     	 
<p style="text-align:center;color:#None;background:#00cca8;padding:10px">Sản phẩm tìm thấy</p>
<div class="ChiTiet">
<?php
if($count=mysqli_num_rows($query_search)==0)
	{
		?>
		<p>Không tìm thấy sản phẩm nào</p><?php
	}else{
		?>
		<ul>
			<?php
			while($dong_search=mysqli_fetch_array($query_search))
			{
				?>
				<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_search['MaSanPham'] ?>">
					<img src="Pictures/<?php echo $dong_search['image'] ?> " width="100" height="100" />
					<p><?php echo $dong_search['TenSanPham'] ?></p>
					<p style="color:#F00;">Giá sp:<?php echo $dong_search['Gia'] ?> </p>
					<p style="color:#F00;"> Chi tiết </p>
				</a></li>
				<?php
			}
		}
		?>
	</ul>
</div>
             
 