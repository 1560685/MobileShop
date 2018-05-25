<style type="text/css">
.tbDSSanPham {
	width:960px;
	height: auto;
	font-size:16px;
	font-weight:bold;
	margin: auto;
	border: 0px solid #F60;
}
.tbDSSanPham tr td{
	padding: .1em;
}	
.df{
	border-left:none;
	border-right:none;
	border-top: none;
}
.df0{
	border-left:none;
	border-right:none;
	border-bottom: none;
	padding-top: .1em;
}
.rightsp{
	float:right;
	margin-bottom: .5em;
}
.leftsp{
	float:left-top;
	margin-bottom: .5em;
}

</style>


<?php 
	//Kiểm tra có xác nhận nút tìm kiếm 
	$key = isset($_GET['key']) ? $_GET['key'] : '';
	//add hàm
	include_once("../lib/DataProvider.php");
	//lấy cơ sở dữ liệu lên 
	$result = DataProvider::ExecuteQuery("Select count(MaSanPham) as total from SanPham where TenSanPham like '%$key%'");
	// trả về dạng araay với tên trường tương ứng
	$row = mysqli_fetch_assoc($result);
	//
	$total_records = $row['total'];
	//
	$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
	$limit = 7;
	$total_page = ceil($total_records / $limit);
	//
	if ($current_page > $total_page)
	{
    	$current_page = $total_page;
	}
	else if ($current_page < 1){
   		$current_page = 1;
	}
	$start = ($current_page - 1) * $limit;
	//trả về kết quả truy vấn 
	$kq = DataProvider::ExecuteQuery("Select sp.MaSanPham,sp.TenSanPham,l.TenLoai,sp.Gia,sp.image,n.Ten from SanPham sp,Loai l, NhaSanXuat n where sp.MaLoai = l.MaLoai and sp.MaNhaSX= n.ID and sp.TenSanPham like '%$key%' ORDER BY l.TenLoai LIMIT $start,$limit ");
	
	
?>
<table class="tbDSSanPham"  border="1px" cellpadding="5">
	<tr><td colspan="8" class="df">
    <div class="DSSanPham">
    <div class="leftsp">
    <form action="index.php">
    <input type="hidden" name="quanly" value="quanlychitiet"/>
    <input type="hidden" name="ac" value="them"/>
    <input type="submit" name="them" value="Thêm" />
    </form>
    </div><div class="rightsp">
    <form action="index.php">
    <input type="hidden" name="quanly" value="quanlychitiet"/>
    <input type="hidden" name="ac" value="ds"/>
    <input type="text" name="key" id="key"/> <input type="submit" value="Tìm kiếm" />
    </form>
    </div>
    </td>
    </tr>
  <tr>
    <td>STT</td>
    <td>Tên sản phẩm</td>
    <td>Loại</td>
    <td>Giá</td>
    <td>Nhà sản xuất</td>
    <td>Hình ảnh</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php 
  // chạy sản phẩm
  	$i=$start+1;
	if(!$kq||mysqli_num_rows($kq)==0)
	{
	}
	else
	{
		while($dong = mysqli_fetch_array($kq)){
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['TenSanPham']; ?></td>
    <td><?php echo $dong['TenLoai']; ?></td>
    <td><?php echo $dong['Gia']; ?></td>
    <td><?php echo $dong['Ten']; ?></td>
    <td><img src="../Pictures/<?php echo $dong['image']; ?>" width="60" height="60"> </td>
    <td><a href="index.php?quanly=quanlychitiet&ac=sua&id=<?php echo $dong['MaSanPham']?>">Sửa</a></td>
    <td><a href="modules/quanlychitiet/xuly.php?id=<?php echo $dong['MaSanPham']?>">Xóa</a></td>
  </tr>
   <?php 
	$i++;
	}
	}
  ?>
    <tr>
    <td colspan="8" class="df0">
    <div align="right">
<?php 
//
	if ($current_page > 1 && $total_page > 1){
    	echo '<a href="index.php?quanly=quanlychitiet&ac=ds&page='.($current_page-1).'&key='.$key.'">Prev</a> | ';
	}
 
	for ($i = 1; $i <= $total_page; $i++){
    	if ($i == $current_page)
		{
        	echo '<span>'.$i.'</span> | ';
    	}
    	else
		{
        	echo '<a href="index.php?quanly=quanlychitiet&ac=ds&page='.$i.'&key='.$key.'">'.$i.'</a> | ';
   	 	}
	}
 
	if ($current_page < $total_page && $total_page > 1){
    	echo '<a href="index.php?quanly=quanlychitiet&ac=ds&page='.($current_page+1).'&key='.$key.'">Next</a>';
}
?>
</div>
	</td>
  	</tr>

</table>

