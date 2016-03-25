<?php 
session_start(); 
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
</head>

<body>
<body><a href="memberlogout.php" target="_top"><img src="logout.png" align="right"></a>
<div align="center" class="style1">WELCOME THE MEMBER OF GREEN MESS</div>
<div align="left" class="style1">Hi! <font color="blue">Mr. <?php echo $_SESSION['mname'] ?></font></div>
<a href="member_opr/ChangeMPwd.php" target="down1"><font color="red">Change Password</font></a>
</body>
</html>
