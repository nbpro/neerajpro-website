<?php 
session_start(); 
$name= $_SESSION['mname'] ;

		
		if($name=="")
		{
			header('location:ReloginAlert.php');
			return false;
		}
?> 
<script type="text/javascript">
	window.history.forward(1);
</script>