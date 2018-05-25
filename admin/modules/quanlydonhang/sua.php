<style type="text/css">
.tbQuanLy {
	width:450px;
	height: auto;
	font-size:16px;
	font-weight:bold;
	margin: auto;
	border: 0px solid #F60;
}
.tbQuanLy tr td{
	padding: .1em;
}	
.df	{
	background:#00cca8;
	color:#F00;
}
</style>
<?php 
	$sql = "select d.ID,t.HoTen,d.MaKH,s.TenSanPham, d.SoLuong, d.Gia, d.NgayLap, d.TrangThai from donhang d,sanpham s,taikhoan t where d.MaKH = t.MaTaiKhoan and d.MaSP= s.MaSanPham and d.ID= '$_GET[id]'";
	include_once ("../lib/DataProvider.php");
	$kq= DataProvider::ExecuteQuery($sql);
	$dong = mysqli_fetch_array($kq);
?>
<form action="modules/quanlydonhang/xuly.php" method="GET" enctype="multipart/form-data">
<table class="tbQuanLy"  border="1px" cellpadding="5">
  <tr>
    <td colspan="4"><div class="df" align="center">Quản lý đơn hàng</div></td>
    </tr>
  <tr>
    <td colspan="4"><p>
    Mã đơn hàng   : <?php echo $dong['ID']; ?><br />
    Tên khách hàng: <?php echo $dong['HoTen']; ?><br />
    Sản phẩm	  : <?php echo $dong['TenSanPham']; ?><br />
    Số lượng: <?php echo $dong['SoLuong']; ?><br />
    </p></td>
    </tr>
  <tr>
    <td><a href="modules/quanlydonhang/xuly.php?ac=update1&id=<?php echo $dong['ID']?>">Chuẩn bị hàng</a></td>
    <td><a href="modules/quanlydonhang/xuly.php?ac=update2&id=<?php echo $dong['ID']?>">Giao Hàng</a></td>
    <td><a href="modules/quanlydonhang/xuly.php?ac=update3&id=<?php echo $dong['ID']?>">Thanh Toán</a></td>
     <td><a href="modules/quanlydonhang/xuly.php?ac=huy&id=<?php echo $dong['ID']?>">Hủy giao hàng</a></td>
  </tr>
  <tr> <td colspan="4"><div align="right"><input type="button" width="50%" value="In" onclick="window.print()" /></div></td></tr>
</table>
</form>