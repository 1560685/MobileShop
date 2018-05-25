<style type="text/css">
.search_Loai {
	width: auto;
	font-size:16px;
	font-weight:bold;
	float: right;
	margin-bottom: 1em;
}
.DSLoai{
	width: 600px;
	height: auto;
}
.DSLoai div#Titeldsloai{
	font-size:16px;
	font-weight:bold;
	padding: .5em;
	color:#000;
	background-color:#00cca8;
	margin-bottom: 1em;
}
.tbDSLoai{
	width:600px;
	height: auto;
	font-size:16px;
	font-weight:bold;
	margin: auto;
	border: 0px solid #F60;
}
.tbDSLoai tr td{
	padding: .5em;
}	

</style>
<div class="DSLoai">
<div id="Titeldsloai" align="center" >Danh sách loại sản phẩm</div>
<div class="search_Loai">
<form action="index.php">
<input type="hidden" name="quanly" value="quanlyloai"/>
<input type="hidden" name="ac" value="them"/>
<input type="text" name="key" id="key"/> <input type="submit" value="Tìm kiếm" />
</form>
</div>
<?php
	
	include_once("../lib/DataProvider.php");
	$search = isset($_GET['key']) ? $_GET['key'] : '';  
	$kq = DataProvider::ExecuteQuery("Select MaLoai,TenLoai from Loai where TenLoai like '%$search%' ");
?>
<table class="tbDSLoai" width="100%" border="1" cellpadding="5">
  <tr>
    <td>STT</td>
    <td>Tên</td>
    <td colspan="2">Quản Lý</td>
  </tr>
  <?php 
  	$i=1;
	while($dong = mysqli_fetch_array($kq)){
  ?>
  
  <tr>
    <td><?php echo $i; ?> </td>
    <td><?php echo $dong['TenLoai']; ?></td>
    <td><a href="index.php?quanly=quanlyloai&ac=sua&id=<?php echo $dong['MaLoai']?>">Sửa</a></td>
    <td><a href="modules/quanlyloai/xuly.php?id=<?php echo $dong['MaLoai']?>">Xóa</a></td>
  </tr>
  <?php 
	$i++;
	}
  ?>
</table>
</div>
