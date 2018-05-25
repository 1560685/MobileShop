<?php 
	include('../lib/DataProvider.php');
	session_start();
	if(isset($_SESSION['LOGIN'])){
		if($_SESSION['LOAI']==0){
			DataProvider::ChangeURL('login.php');
		}
		else{
			DataProvider::ChangeURL('login.php');
		}
	}
	if(isset($_GET['signup']))
	{
		if($_GET['txtCaptcha'] != NULL)
		{
			if($_GET['txtCaptcha']== $_SESSION['security_code']){
			  $name = $_GET['name'];
			  $pass = md5($_GET['pass']);
			  $hoten = $_GET['hoten'];
			  $sdt = $_GET['sdt'];
			  $email = $_GET['email'];
			  $diachi = $_GET['diachi'];
		  
			  $sql = "INSERT INTO TaiKhoan(TenDangNhap,MatKhau,Loai,HoTen,SDT,Email,DiaChi) VALUES('$name','$pass',2,'$hoten','$sdt','$email','$diachi')";
		  
			  DataProvider::ExecuteQuery($sql);
			  echo '<script language="javascript"> alert("Đăng ký thành công!"); </script>';
			  DataProvider::ChangeURL('login.php');
            }
			else{
				echo '<script language="javascript"> alert("Mã kiểm tra không đúng!"); </script>';
			}
		}
		else
		{
			echo '<script language="javascript"> alert("Bạn chưa nhập mã kiểm tra!"); </script>';
		}
	}
	
	
	
?>
<style type="text/css">
span{
	color:#F00;
}
.hidden{
		visibility:hidden;
		position: absolute;
}
.visible{
		visibility: visible;
}
table#loginMain{
margin:80px auto;
width:auto;
height:auto;
background:#FFFFFF;
border-left:1px solid #CDCDCD;
border-right:1px solid #CDCDCD;
border-bottom:1px solid #CDCDCD;
}
td{
	padding: 1em;
	width: 135px;
	height: 35px;

}
table#loginMain tr td#login-navbar{
font-family:arial;
font-size:12px;
font-weight:bold;
color:#FFFFFF;
text-align:center;
text-transform:uppercase;
background:url(style/login-navbar.gif) top left no-repeat;
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
		if(form.pass2.value != form.pass.value || form.pass2.value.length < 6)
		{
			document.getElementById("pwd2ERR").className="visible";
			document.getElementById("pwd2OK").className="hidden";
			result = false;
		}
		else
		{
			document.getElementById("pwd2ERR").className="hidden";
			document.getElementById("pwd2OK").className="visible";
		}
		
		return result;
	}
</script>



<form  name="form1" action="" method="GET"  onsubmit="return check();" >
<table id="loginMain" border="0px"  cellpadding="0px" cellspacing="0px" >
  <tr>
    <td colspan="3" id="login-navbar" height="36px" ><div align="center">Thêm tài khoản</div></td>
  </tr>
  <tr>
    <td width="240">Name <span>*</span></td>
    <td width="240"><input type="text" name="name" size="32"/></td>
     <td width="80"><img src="../image/ok.png" name="uidOK" width="16" height="16" class="hidden" id="uidOK" /><img src="../image/error.png" name="uidERR" width="16" height="16" class="hidden" id="uidERR" /></td>
  </tr>
  <tr>
    <td >Password <span>*</span></td>
    <td><input type="password" name="pass" size="32"/></td>
     <td><img src="../image/ok.png" name="pwdOK" width="16" height="16" class="hidden" id="pwdOK" /><img src="../image/error.png" name="pwdERR" width="16" height="16" class="hidden" id="pwdERR" /></td>
  </tr>
   <tr>
      <td>Confirm Password <span>*</span></td>
      <td><input type="password" name="pass2" size="32" /></td>
      <td><img src="../image/ok.png" name="pwd2OK" width="16" height="16" class="hidden" id="pwd2OK" /><img src="../image/error.png" name="pwd2ERR" width="16" height="16" class="hidden" id="pwd2ERR" /></td>
    </tr>
  <tr>
    <td>Họ tên </td>
    <td><input type="text" name="hoten" size="32"/></td>
     <td width="80">&nbsp;</td>
  </tr>
   <tr>
    <td>Số điện thoại </td>
    <td><input type="text" name="sdt" size="32"/></td>
     <td width="80">&nbsp;</td>
  </tr>
   <tr>
    <td>Email </td>
    <td><input type="text" name="email" size="32"/></td>
     <td width="80">&nbsp;</td>
  </tr>
   <tr>
    <td>Địa chỉ</td>
    <td><input type="text" name="diachi" size="32"/></td>
     <td width="80">&nbsp;</td>
  </tr>
   <tr>
     <td>Mã kiểm tra <span>*</span></td>
     <td>
      <input type="text" name="txtCaptcha" maxlength="10" size="32" /> 
     </td>
     <td width="80"> 

      <img src="random_image.php" />
    </td>
   </tr>
   <tr>
    <td colspan="3">
      <div align="center">
        <input type="submit" name="signup" value="Đăng ký!" size="32">
      </div>
    </td>
  </tr>
</table>
</form>