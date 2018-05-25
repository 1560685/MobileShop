<style type="text/css">
.tbDSTaiKhoan {
	width:960px;
	height: auto;
	font-size:16px;
	font-weight:bold;
	margin: auto;
	border: 0px solid #F60;
}
.tbDSTaiKhoan tr td{
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
.righttk{
	float:right;
	margin-bottom: .5em;
}
.lefttk{
	float:left-top;
	margin-bottom: .5em;
}

</style>
<?php
	
	include_once("../lib/DataProvider.php");
	$search = isset($_GET['key']) ? $_GET['key'] : '';
	$kq = DataProvider::ExecuteQuery("Select  MaTaiKhoan,TenDangNhap,MatKhau,Loai,HoTen,SDT,Email,DiaChi  from taikhoan where TenDangNhap like '%$search%' ");
?>

<table class="tbDSTaiKhoan" width="100%" border="1" cellpadding="5">
	<tr>
    <td colspan="10" class="df"><div>
<div align="left">
<form action="index.php">
<input type="hidden" name="quanly" value="quanlytaikhoan"/>
<input type="hidden" name="ac" value="them"/>
<input type="submit" name="them" value="Thêm" />
</form>
</div>
<div align="right">
<form action="index.php">
<input type="hidden" name="quanly" value="quanlytaikhoan"/>
<input type="hidden" name="ac" value="ds"/>
<input type="text" name="key" id="key"/> <input type="submit" value="Tìm kiếm" />
</form>
</div>
</div></td>
    </tr>
  <tr>
    <td>STT</td>
    <td>Name</td>
    <td>Password</td>
    <td>Loai</td>
    <td>Họ Tên</td>
    <td>Số Điện Thoại</td>
    <td>Email</td>
    <td>Địa Chỉ</td>
    <td colspan="2">Quản Lý</td>
  </tr>
  <?php 
  	$i=1;
	while($dong = mysqli_fetch_array($kq)){
	if($dong['Loai']==0){
		$red = 'Admin';
	}
	else
	{
		$red = 'Khách hàng';
	}
  ?>
  
  <tr>
    <td><?php echo $i; ?> </td>
    <td><?php echo $dong['TenDangNhap']; ?></td>
    <td><?php echo $dong['MatKhau']; ?></td>
    <td><?php echo $red ?></td>
    <td><?php echo $dong['HoTen']; ?></td>
    <td><?php echo $dong['SDT']; ?></td>
    <td><?php echo $dong['Email']; ?></td>
    <td><?php echo $dong['DiaChi']; ?></td>
    <td><a href="index.php?quanly=quanlytaikhoan&ac=sua&id=<?php echo $dong['MaTaiKhoan']?>">Sửa</a></td>
    <td><a href="modules/quanlytaikhoan/xuly.php?id=<?php echo $dong['MaTaiKhoan']?>">Xóa</a></td>
  </tr>
  <?php 
	$i++;
	}
  ?>
</table>
