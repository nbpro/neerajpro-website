<?php 
session_start(); 
?> 



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome</title>
</head>
<style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-size: 24px;
}
body,td,th {
	color: #FF0000;
}
body {
	background-color: #00FF66;
}
-->
</style>

<body><a href="adminlogout.php" target="_top"><img src="logout.png" align="right"></a>

<div align="center" class="style1">WELCOME ADMIN</div>
<div align="left" class="style1">Hi! <font color="blue">Mr. <?php echo $_SESSION['cname'] ?></font></div>
<a href="admin_opr/ChangeAPwd.php" target="down"><font color="red">Change Password</font></a>

</body>
</html>
