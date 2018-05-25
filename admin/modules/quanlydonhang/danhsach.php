
<?php 
	$search = isset($_GET['key'])    ? $_GET['key'] : '';
	$sql = "select d.ID,t.HoTen,s.TenSanPham, d.SoLuong, d.Gia, d.NgayLap, d.TrangThai from donhang d,sanpham s,taikhoan t where d.MaKH = t.MaTaiKhoan and d.MaSP= s.MaSanPham  and d.TrangThai != 4 and t.HoTen like '%$search%'";
	include_once ("../lib/DataProvider.php");
	$kq= DataProvider::ExecuteQuery($sql);
?>
<style type="text/css">
.ChuanBi{
  background:#FF6;
}
.GiaoHang{
  background:#0FF;
}
.ThanhToan{
  background:#6F6;
}
.tbDSSanPham {
	width:960px;
	height: auto;
	font-size:16px;
	font-weight:bold;
	margin: auto;
	border: 0px solid #F60;
}
.tbDSDonHang tr td{
	padding: 1em;
}	
.df{
	border-left:none;
	border-right:none;
	border-top: none;
}
.rightdh{
	float:right;
	margin-bottom: .5em;
}
</style>
<table  class="tbDSSanPham"  border="1px" cellpadding="5">
	<tr><td colspan="10" class="df">
    <div class="rightdh">
<form action="index.php">
<input type="hidden" name="quanly" value="quanlydonhang"/>
<input type="hidden" name="ac" value="ds"/>
<input type="text" name="key" id="key"/> <input type="submit" value="Tìm kiếm" />
</form>
</div>
    </td></tr>
  <tr>
    <td>STT</td>
    <td>Mã Khách Hàng</td>
    <td>Mã Sản Phẩm</td>
    <td>Số Lượng</td>
    <td>Giá</td>
    <td>Ngày Lập</td>
    <td>Trạng Thái</td>
    <td colspan="2">quản lý</td>
  </tr>
  <?php 
  	$i=1;
	while($dong = mysqli_fetch_array($kq)){
	$c = 'Rong';
	$cc= 'Đơn mới';
	if($dong['TrangThai']==1){
		$c = 'ChuanBi';
		$cc= 'Chuẩn bị';
	}
	if($dong['TrangThai']==2){
		$c = 'GiaoHang';
		$cc= 'Giao hàng';
	}
	if($dong['TrangThai']==3){
		$c = 'ThanhToan';
		$cc= 'Thanh toán';
	}
  ?>
  <tr class="<?php echo $c; ?>">
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['HoTen']; ?></td>
    <td><?php echo $dong['TenSanPham']; ?></td>
    <td><?php echo $dong['SoLuong']; ?></td>
    <td><?php echo $dong['Gia']; ?></td>
    <td><?php echo $dong['NgayLap']; ?></td>
    <td><?php echo $cc; ?></td>
    <td><a href="index.php?quanly=quanlydonhang&ac=sua&id=<?php echo $dong['ID']?>">Tùy chọn</a></td>
    <td><a href="modules/quanlydonhang/xuly.php?ac=huy&id=<?php echo $dong['ID']?>">Hủy</a></td>
  </tr>
    <?php 
	$i++;
	}
  ?>
</table>
