<?php
	
	if(empty($_SESSION['adminpage.php']))
	{
		header('location:adminlogin.php');
		exit;
	}


?>