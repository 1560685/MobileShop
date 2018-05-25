<style type="text/css">
span{
	color:#F00;
}
.tbThemNSX {
	width: 320px;
	font-size:16px;
	font-weight:bold;
}
.tbThemNSX tr td{
	padding: .5em;
}	

.tbThemNSX tr td div{
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
		var form = document.ThemNSX;
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
<form action="modules/quanlynhasanxuat/xuly.php" method="get" enctype="multipart/form-data" name="ThemNSX" onsubmit="return check();">
<table class="tbThemNSX" width="100%" border="1" cellpadding="5">
  <tr>
    <td colspan="3" bgcolor="#00cca8"><div align="center" >Thêm nhà sản xuất</div></td>
  </tr>
  <tr>
    <td>Tên <span>*</span></td>
    <td class="df0"><input type="text" name="ten"/></td>
    <td class="df" width="30px"><img src="../image/ok.png" name="TLoaiOK" width="16" height="16" class="hidden" id="TLoaiOK" /><img src="../image/error.png" name="TLoaiERROR" width="16" height="16" class="hidden" id="TLoaiERROR" /></td>
  </tr>
  <tr>
    <td>Số điện thoại  </td>
    <td colspan="2"><input type="text" name="sdt"/></td>
  </tr>
  <tr>
    <td>Email </td>
    <td colspan="2"><input type="text" name="email"/></td>
  </tr>
  <tr>
    <td>Địa chỉ </td>
    <td colspan="2"><input type="text" name="diachi"/></td>
  </tr>
  <tr>
    <td colspan="3">
      <div align="center">
        <input type="submit" name="them" id="them" value="Thêm">
      </div>
    </td>
  </tr>
</table>
</form>