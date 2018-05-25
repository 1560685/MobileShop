<style type="text/css">
span{
	color:#F00;
	
}
.tbSanPham {
	width:960px;
	height: auto;
	font-size:16px;
	font-weight:bold;
	margin: auto;
	border: 0px solid #F60;
}
.tbSanPham tr td{
	padding: .1em;
}	
.df{
	border-left:none;
}
.df0{
	border-right:none;
}
.dff	{
	background:#FF0;
	color:#F00;
}
</style>
<script type="text/javascript">
	function check()
	{
		var result = true;
		var form = document.ThemSP;
		if(form.tensp.value.length==0)
		{
			document.getElementById("NameERROR").className="visible";
			document.getElementById("NameOK").className="hidden";
			result = false;
		}
		else
		{
			document.getElementById("NameERROR").className="hidden";
			document.getElementById("NameOK").className="visible";
		}
		if(form.hinhanh.value.length==0)
		{
			document.getElementById("PhotoERROR").className="visible";
			document.getElementById("PhotoOK").className="hidden";
			result = false;
		}
		else
		{
			document.getElementById("PhotoERROR").className="hidden";
			document.getElementById("PhotoOK").className="visible";
		}
		return result;
	}
</script>
	<script type="text/javascript" src="../ckeditor/ckeditor.js">
	</script>
<form action="modules/quanlychitiet/xuly.php" method="POST" enctype="multipart/form-data" name="ThemSP" onsubmit="return check();">
<table class="tbSanPham"  border="1px" cellpadding="5">
  <tr>
    <td colspan="3"><div class="dff" align="center">Thêm sản phẩm</div></td>
  </tr>
  <tr>
    <td>Tên <span>*</span></td>
    <td class="df0"><input type="text" name="tensp" size="40px">   </td>
    <td class="df"><img src="../image/ok.png" name="NameOK" width="16" height="16" class="hidden" id="NameOK" /><img src="../image/error.png" name="NameERROR" width="16" height="16" class="hidden" id="NameERROR" /></td>
  </tr>
  <tr>
  <?php 
  	$sql='Select * from Loai';
  	include_once('../lib/DataProvider.php');
	$kq= DataProvider::ExecuteQuery($sql);
  ?>
    <td>Loại <span>*</span></td>
    <td colspan="2">
    <select name="loai">
    <?php while($dong= mysqli_fetch_array($kq))
	{
	?>
    <option value="<?php echo $dong['MaLoai']?>"><?php echo $dong['TenLoai']?>
    </option>
    <?php } ?>
    </select></td>
  </tr>
  <tr>
     <?php 
  	$sql='Select * from NhaSanXuat';
  	include_once('../lib/DataProvider.php');
	$kq= DataProvider::ExecuteQuery($sql);
 	 ?>
    <td>Nhà sản xuất <span>*</span></td>
    <td colspan="2">
    <select name="sx" >
    <?php while($dong= mysqli_fetch_array($kq)){?>
    	<option value="<?php echo $dong['ID']?>"><?php echo $dong['Ten']?></option>
    <?php } ?>
    </select></td>
  </tr>
  <tr>
    <td>Giá </td>
    <td colspan="2"><input type="text" name="gia" size="40px"></td>
  </tr>
  <tr>
    <td>Hình ảnh <span>*</span></td>
    <td class="df0"><input type="file" name="hinhanh" size="40px"></td>
    <td class="df"><img src="../image/ok.png" name="PhotoOK" width="16" height="16" class="hidden" id="PhotoOK" /><img src="../image/error.png" name="PhotoERROR" width="16" height="16" class="hidden" id="PhotoERROR" /></td>
  </tr>
  <tr>
    <td>Mô tả</td>
    <td colspan="2" >
    <textarea class="ckeditor" name="mota" cols="30" rows="15"></textarea>
    </td>
  <tr>
    <td colspan="3">
    <div align="center"><input type="submit" name="them" value="Thêm"></div>
    </td>
  </tr>
</table>
</form>
