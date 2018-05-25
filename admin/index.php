<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style/css.css"/>
<title>Quản trị Website</title>
</head>
<?php 
	session_start();
	include_once('../lib/DataProvider.php');
	if(!isset($_SESSION['LOGIN']))
	{
		DataProvider::ChangeURL('login.php');
	}
	else{
		if($_SESSION['LOAI']!=0)
		{
			DataProvider::ChangeURL('login.php');
		}
?>
<body bgcolor="#CCCCCC">
	<div class="wrapper">
    	<?php 
			include('modules/header.php');
			include('modules/menu.php');
			if(!isset($_GET['quanly']))
			{
				echo '<div class="content"><h3 style="text-align:center;color:#6F0;line-height:120px"> Chào mừng, đến với quản trị nội dung website</h3></div>';
			}
			else
			{
				include('modules/content.php'); 
			}
				include('modules/footer.php');
		?>
    </div>

</body>
</html>
<?php } ?>