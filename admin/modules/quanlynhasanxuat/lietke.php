<style type="text/css">
.search_NSX {
	width: auto;
	font-size:16px;
	font-weight:bold;
	float: right;
	margin-bottom: 1em;
}
.DSNSX{
	width: 500px;
	border: 1px solid #F00;
	height: auto;
}
.TiteldsNSX{
	font-size:16px;
	font-weight:bold;
	padding: .5em;
	color:#F00;
	background-color:#00cca8;
	margin-bottom: 1em;
}
.tbDSNSX{
	width:500px;
	height: auto;
	font-size:16px;
	font-weight:bold;
	margin: auto;
	border: 0px solid #F60;
}
.tbDSNSX tr td{
	padding: .5em;
}	

</style>
<div clas="DSNSX">
<div class="TiteldsNSX" align="center" >Danh sách Nhà Sản Xuất</div>
<div class="search_NSX">
<form action="index.php">
<input type="hidden" name="quanly" value="quanlynhasanxuat"/>
<input type="hidden" name="ac" value="them"/>
<input type="text" name="key" id="key"/> <input type="submit" value="Tìm kiếm" />
</form>
</div>
<br/>
<?php
	$key = isset($_GET['key']) ? $_GET['key'] : '';
	
	include_once("../lib/DataProvider.php");
	$kq = DataProvider::ExecuteQuery("Select ID,Ten,SDT,Email,DiaChi from NhaSanXuat where Ten like '%$key%' ");
?>
<table class="tbDSNSX" width="100%" border="1" cellpadding="5">
  <tr >
    <td width="43">STT</td>
    <td width="52">Tên</td>
    <td width="117">Số điện thoại</td>
    <td width="56">Email</td>
    <td width="53">Địa Chỉ</td>
    <td colspan="2">Quản Lý</td>
  </tr>
  <?php 
  	$i=1;
	while($dong = mysqli_fetch_array($kq)){
  ?>
  
  <tr>
    <td><?php echo $i; ?> </td>
    <td><?php echo $dong['Ten']; ?></td>
    <td><?php echo $dong['SDT']; ?></td>
    <td><?php echo $dong['Email']; ?></td>
    <td><?php echo $dong['DiaChi']; ?></td>
    <td width="33"><a href="index.php?quanly=quanlynhasanxuat&ac=sua&id=<?php echo $dong['ID']?>">Sửa</a></td>
    <td width="44"><a href="modules/quanlynhasanxuat/xuly.php?id=<?php echo $dong['ID']?>">Xóa</a></td>
  </tr>
  <?php 
	$i++;
	}
  ?>
</table>
</div>