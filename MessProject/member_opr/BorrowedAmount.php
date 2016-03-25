<?php 
session_start(); 
?> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body bgcolor=#00FF99>
<?php include "MCommonMenu.php" ?>
<?php include "config.php"?>


	<?php
		$name=$_SESSION['mname'];
		$selectSQL = "SELECT amt FROM borrower where name='$name'"; 
		$borrow = mysql_fetch_row(mysql_query( $selectSQL )); 
	
		 if($borrow[0] == 0  ){
        echo '<font size=10 color=blue><br><br><br><center>You have not Borrowed any Amount From Mess.</center></font>';
		}
		else
		{
		  echo '<font size=10 color=blue><br><br><br><center>You have Borrowed <font color=red><u>Rs. '. $borrow[0] .'/-</u></font> From Mess.<br>Please Return As Soon As Possible.</center></font>';
		}
		?>
		
</form>

</body>
</html>