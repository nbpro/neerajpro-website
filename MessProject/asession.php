<?php
	
	if(empty($_SESSION['username']))
	{
		header('location:adminlogin.php');
		exit;
	}


?>