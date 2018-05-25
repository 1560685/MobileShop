<style type="text/css">
span{
	color:#F00;
}
.tbThemUser {
	width:650px;
	height: auto;
	font-size:16px;
	font-weight:bold;
	margin: auto;
	border: 0px solid #F60;
}
.tbThemUser tr td{
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
		var form = document.form1;
		if(form.name.value.length==0)
		{
			document.getElementById("uidERR").className="visible";
			document.getElementById("uidOK").className="hidden";
			result = false;
		}
		else
		{
			document.getElementById("uidERR").className="hidden";
			document.getElementById("uidOK").className="visible";
			
		}
		// check pwd
		if( form.pass.value.length < 6 )
		{
			document.getElementById("pwdERR").className="visible";
			document.getElementById("pwdOK").className="hidden";
			result = false;
		}
		else
		{
			document.getElementById("pwdERR").className="hidden";
			document.getElementById("pwdOK").className="visible";
		}
		
		return result;
	}
</script>
<form action="modules/quanlytaikhoan/xuly.php" method="get" enctype="multipart/form-data" onsubmit="return check();" name="form1">
<table class="tbThemUser"  border="1px" cellpadding="5">
  <tr>
    <td colspan="3"><div class="dff" align="center">Thêm tài khoản</div></td>
  </tr>
  <tr>
    <td>Name <span>*</span></td>
    <td class="df0"><input type="text" name="name"/></td>
     <td width="80" class="df"><img src="../image/ok.png" name="uidOK" width="16" height="16" class="hidden" id="uidOK" /><img src="../image/error.png" name="uidERR" width="16" height="16" class="hidden" id="uidERR" /></td>
  </tr>
  <tr>
    <td>Password <span>*</span></td>
    <td class="df0"><input type="text" name="pass"/></td>
     <td class="df"><img src="../image/ok.png" name="pwdOK" width="16" height="16" class="hidden" id="pwdOK" /><img src="../image/error.png" name="pwdERR" width="16" height="16" class="hidden" id="pwdERR" /></td>
  </tr>
  <tr>
    <td>Loại</td>
    <td colspan="2"><select name="loai">
    <option value="0">Admin</option>
    <option value="2">Khách hàng</option>
    </select></td>
  </tr>
  <tr>
    <td>Họ tên </td>
    <td colspan="2"><input type="text" name="hoten"/></td>
  </tr>
   <tr>
    <td>Số điện thoại </td>
    <td colspan="2"><input type="text" name="sdt"/></td>
  </tr>
   <tr>
    <td>Email </td>
    <td colspan="2"><input type="text" name="email"/></td>
  </tr>
   <tr>
    <td>Địa chỉ</td>
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