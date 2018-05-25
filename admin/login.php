<?php 
	
	include('../lib/DataProvider.php');
	session_start();
	if(isset($_SESSION['LOGIN'])){
		if($_SESSION['LOAI']==0){
			DataProvider::ChangeURL('index.php');
		}
		else{
			DataProvider::ChangeURL('../index.php');
		}
	}
	
	if(isset($_GET['login']))
	{
		$user= $_GET['name'];
		$pass= md5($_GET['pass']);
		$sql="Select * from TaiKhoan Where TenDangNhap='$user' and MatKhau='$pass' limit 1";
		$kq= DataProvider::ExecuteQuery($sql);
		//
		$rows= mysqli_num_rows($kq);
		if($rows>0){
			$dong= mysqli_fetch_array($kq);
			$_SESSION['LOGIN']=$user;
			$_SESSION['LOAI']=$dong['Loai'];
			$_SESSION['TEN']=$dong['HoTen'];
			//
			if($dong['Loai']==0)
			{
				DataProvider::ChangeURL('index.php');
			}
			else
			{
				DataProvider::ChangeURL('../index.php');
			}
		}
		else{
			echo '<script language="javascript"> alert("Tài khoản không hợp lệ!"); </script>';
			DataProvider::ChangeURL('login.php');
		}
	}
?>

<style type="text/css">
.hidden{
		visibility:hidden;
		position: absolute;
}
.visible{
		visibility: visible;
}
table#loginMain{
margin:80px auto;
width:400px;
height:auto;
background:#FFFFFF;
border-left:1px solid #CDCDCD;
border-right:1px solid #CDCDCD;
border-bottom:1px solid #CDCDCD;
}
td{
	padding-left: 1em;
	padding-right: 2em;
	width: auto;
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
			result = false;
		}
		else
		{
			document.getElementById("uidERR").className="hidden";
			
		}
		// check pwd
		if(form.pass.value.length==0)
		{
			document.getElementById("pwdERR").className="visible";
			
			result = false;
		}
		else
		{
			document.getElementById("pwdERR").className="hidden";
			
		}
		
		return result;
	}
</script>


<center>
<form action="" name="form1" method="GET" onsubmit="return check();" >
<table id="loginMain" border="0px" cellpadding="0px" cellspacing="0px">
  <tr height="50px">
    <td id="login-navbar" height="36px" colspan="3"><div align="center">Login</div></td>
    </tr height="50px">
  <tr>
    <td width="114">Name</td>
    <td width="192"><input type="text" name="name"/></td>
    <td width="92"><img src="../image/error.png" name="uidERR" width="16" height="16" class="hidden" id="uidERR" /></td>
  </tr>
  <tr height="50px">
    <td>Password</td>
    <td><input type="password" name="pass"/></td>
     <td><img src="../image/error.png" name="pwdERR" width="16" height="16" class="hidden" id="pwdERR" /></td>
  </tr>
  <tr height="50px">
    <td colspan="3"><div align="right"><input type="submit" name="login" value="Login" /> <a href="signup.php">Sign Up!</a></div></td>
   
    </tr>
</table>
</form>
</center>
