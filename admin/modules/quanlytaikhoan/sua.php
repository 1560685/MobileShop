<style type="text/css">
span{
	color:#F00;
}
.tbSuaUser {
	width:650px;
	height: auto;
	font-size:16px;
	font-weight:bold;
	margin: auto;
	border: 0px solid #F60;
}
.tbSuaUser tr td{
	padding: .1em;
}	
.df{
	border-left:none;
}
.df0{
	border-right:none;
}
.dff	{
	background:#00cca8;
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
<?php 
	$sql = "select * from TaiKhoan where MaTaiKhoan = $_GET[id]";
	include_once ('../lib/DataProvider.php');
	$kq= DataProvider::ExecuteQuery($sql);
	$dong = mysqli_fetch_array($kq);
?>
<form action="modules/quanlytaikhoan/xuly.php" method="get" enctype="multipart/form-data" onsubmit="return check();" name="form1">
<table class="tbSuaUser"  border="1px" cellpadding="5">
  <tr>
    <td colspan="3"><div class="dff" align="center">Sửa tài khoản</div></td>
  </tr>
   <tr>
    <td>Mã</td>
    <td colspan="2"><input readonly="readonly" type="text" name="id" value="<?php echo $dong['MaTaiKhoan'] ?>" size="50px"/></td>
  </tr>
  <tr>
    <td>Name <span>*</span></td>
    <td class="df0"><input type="text"  name="name" value="<?php echo $dong['TenDangNhap'] ?>"  size="50px"/></td>
     <td width="80" class="df"><img src="../image/ok.png" name="uidOK" width="16" height="16" class="hidden" id="uidOK" /><img src="../image/error.png" name="uidERR" width="16" height="16" class="hidden" id="uidERR" /></td>
  </tr>
  <tr>
    <td>Password <span>*</span></td>
    <td class="df0"><input type="text" name="pass" value="<?php echo $dong['MatKhau'] ?>"  size="50px"/></td>
    <td class="df"><img src="../image/ok.png" name="pwdOK" width="16" height="16" class="hidden" id="pwdOK" /><img src="../image/error.png" name="pwdERR" width="16" height="16" class="hidden" id="pwdERR" /></td>
  </tr>
  <tr>
    <td>Loại  <span>*</span></td>
    <td colspan="2"><select name="loai">
    <?php 
	if( $dong['Loai']==0) {?>
		 <option value="0" selected="selected">Admin</option>
    <?php }
	else
	{ ?>
		<option value="0">Admin</option>
    <?php }
	if( $dong['Loai']==2){
	?>
		 <option value="2" selected="selected">Khách hàng</option>
    <?php } 
	else {
	?>
		<option value="2">Khách hàng</option>
    <?php }?>
    </select></td>
  </tr>
  <tr>
    <td>Họ tên  </td>
    <td colspan="2"><input type="text" name="hoten"  size="50px" value="<?php echo $dong['HoTen'] ?>"/></td>
  </tr>
   <tr>
    <td>Số điện thoại </td>
    <td colspan="2"><input type="text" name="sdt"  size="50px"  value="<?php echo $dong['SDT'] ?>"/></td>
  </tr>
   <tr>
    <td>Email </td>
    <td colspan="2"><input type="text" name="email"  size="50px" value="<?php echo $dong['Email'] ?>"/></td>
  </tr>
   <tr>
    <td>Địa chỉ </td>
    <td colspan="2"><input type="text" name="diachi"  size="50px" value="<?php echo $dong['DiaChi'] ?>"/></td>
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