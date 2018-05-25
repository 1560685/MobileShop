<style type="text/css">
span{
	color:#F00;
}
.tbSuaNSX {
	width: 320px;
	font-size:16px;
	font-weight:bold;
}
.tbSuaNSX tr td{
	padding: .5em;
}	

.tbSuaNSX tr td div{
	color:#FF0;
}
.df{
	border-left:none;
}
.df0{
	border-right:none;
}
</style>
<script type="text/javascript">
	function check()
	{
		var result = true;
		var form = document.SuaNSX;
		if(form.ten.value.length==0)
		{
			document.getElementById("TLoaiERROR").className="visible";
			document.getElementById("TLoaiOK").className="hidden";
			result = false;
		}
		else
		{
			document.getElementById("TLoaiERROR").className="hidden";
			document.getElementById("TLoaiOK").className="visible";
		}
		return result;
	}
</script>
<?php 
	$sql = "select * from NhaSanXuat where ID = $_GET[id]";
	include_once ('../lib/DataProvider.php');
	$kq= DataProvider::ExecuteQuery($sql);
	$dong = mysqli_fetch_array($kq);
?>
<form action="modules/quanlynhasanxuat/xuly.php" method="get" enctype="multipart/form-data" name="SuaNSX" onsubmit="return check();">
<table class="tbSuaNSX" width="100%" border="1" cellpadding="5">
  <tr>
    <td colspan="3" bgcolor="#FF0000"><div align="center">Sửa nhà sản xuất</div></td>
  </tr>
  <tr>
    <td>ID </td>
    <td colspan="2"><input readonly="readonly" type="text" name="id" value="<?php echo $dong['ID']; ?>"/></td>
  </tr>
  <tr>
    <td>Tên <span>*</span></td>
    <td class="df0"><input type="text" name="ten" value="<?php echo $dong['Ten']; ?>"/></td>
    <td class="df" width="30px"><img src="../image/ok.png" name="TLoaiOK" width="16" height="16" class="hidden" id="TLoaiOK" /><img src="../image/error.png" name="TLoaiERROR" width="16" height="16" class="hidden" id="TLoaiERROR" /></td>
  </tr>
  <tr>
    <td>Số điện thoại </td>
    <td colspan="2"><input type="text" name="sdt" value="<?php echo $dong['SDT']; ?>"/></td>
  </tr>
  <tr>
    <td >Email</td>
    <td colspan="2"><input type="text" name="email" value="<?php echo $dong['Email']; ?>"/></td>
  </tr>
  <tr>
    <td>Địa chỉ  </td>
    <td colspan="2"><input type="text" name="diachi" value="<?php echo $dong['DiaChi']; ?>"/></td>
  </tr>
  <tr>
    <td colspan="3">
      <div align="center">
        <input type="submit" name="sua" id="sua" value="Sửa">
      </div>
    </td>
  </tr>
</table>
</form>