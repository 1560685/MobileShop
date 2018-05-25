<div class="header">
	<div class="right2"><span>Xin Chào
        <?php 
	if(!isset($_SESSION)) 
    { 
//        session_start();
    } 
    else
	{
		//session_destroy();
//    	session_start();
		echo $_SESSION['TEN'];
    } 
    ?>. <a href="modules/content.php?huy=a">Logout</a></span></div>
</div>