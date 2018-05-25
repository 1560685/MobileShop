<style type="text/css">
span{
	color:#F00;
}

.tbThemLoai {
	width: 320px;
	font-size:16px;
	font-weight:bold;
}
.tbThemLoai tr td{
	padding: .5em;
}	

.tbThemLoai tr td div{
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
		var form = document.ThemLoai;
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
<form action="modules/quanlyloai/xuly.php" method="get" enctype="multipart/form-data" name="ThemLoai" onsubmit="return check();">
<table  class="tbThemLoai"  border="1" cellpadding="5">
  <tr>
    <td colspan="3" bgcolor="#00cca8"><div align="center" >Thêm loại sản phẩm</div></td>
  </tr>
  <tr>
    <td align="center" width="120px">Tên <span>*</span></td>
    <td class="df0" width="150px"><input type="text" name="ten"/></td>
    <td class="df" width="30px"><img src="../image/ok.png" name="TLoaiOK" width="16" height="16" class="hidden" id="TLoaiOK" /><img src="../image/error.png" name="TLoaiERROR" width="16" height="16" class="hidden" id="TLoaiERROR" /></td>
  </tr>
  <tr>
    <td colspan="3">
      <div align="center">
        <input type="submit" name="them" id="them" value="Thêm" >
      </div>
    </td>
  </tr>
</table>
</form>