<style type="text/css">
span{
	color:#F00;
}

.tbSuaLoai {
	width: 320px;
	font-size:16px;
	font-weight:bold;
}
.tbSuaLoai tr td{
	padding: .5em;
}	

.tbSuaLoai tr td div{
	color:#FF0;
}
.df{
	border-left:none;
}
.df0{
	border-right:none;
}
</style>
<?php 
	$sql = "select * from Loai where MaLoai = $_GET[id]";
	include_once ('../lib/DataProvider.php');
			$kq= DataProvider::ExecuteQuery($sql);
			$dong = mysqli_fetch_array($kq);
?>
<script type="text/javascript">
	function check()
	{
		var result = true;
		var form = document.SuaLoai;
		if(form.ten.value.length<1)
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
<form action="modules/quanlyloai/xuly.php" method="GET" enctype="multipart/form-data"  name="SuaLoai" onsubmit="return check();" >
<table class="tbSuaLoai"  border="1" cellpadding="5">
  <tr>
    <td colspan="3"  bgcolor="#FF0000"><div align="center">Sửa loại sản phẩm</div></td>
  </tr>
  <tr>
    <td lign="center" width="120px">ID </td>
    <td class="df0" width="150px"><input type="text" name="id" value="<?php echo $dong['MaLoai']?>" readonly="readonly" /></td>
    <td class="df" width="30px">&nbsp;</td>
  </tr>
  <tr>
    <td lign="center" width="120px">Tên <span>*</span></td>
    <td class="df0" width="150px"><input type="text" name="ten" value="<?php echo $dong['TenLoai']?>"/></td>
     <td class="df" width="30px"><img src="../image/ok.png" name="TLoaiOK" width="16" height="16" class="hidden" id="TLoaiOK" /><img src="../image/error.png" name="TLoaiERROR" width="16" height="16" class="hidden" id="TLoaiERROR" /></td>
  </tr>
  <tr>
    <td colspan="3">
      <div align="center">
        <input type="submit" name="Sua" id="Sua" value="Sửa">
      </div>
    </td>
  </tr>
</table>
</form>