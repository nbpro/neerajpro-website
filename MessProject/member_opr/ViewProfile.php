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
		$selectSQL = "SELECT name,username,clg_name,dept,email,address,mob_no FROM reg_form where name='$_SESSION[mname]'" ; 
		$selectRes = mysql_query( $selectSQL );
		$row = mysql_fetch_array($selectRes);
	?>
		<center>
	<b><font size=6 color=blue><u>User Details</u></font></b>
	<table align=center border="1" bgcolor=aqua>
	

		<br><br><tr align=center><td width=200 color=red><b><font color=red>Name :</b></td><td width=400><font color=blue><?php echo "{$row['name']}" ?></font></td>
				<tr align=center><td width=200 color=red><b><font color=red>Username :</b></td><td width=400><font color=blue><?php echo "{$row['username']}" ?></font></td>
				<tr align=center><td width=200 color=red><b><font color=red>College Name :</b></td><td width=400><font color=blue><?php echo "{$row['clg_name']}" ?></font></td>
				<tr align=center><td width=200 color=red><b><font color=red>Department :</b></td><td width=400><font color=blue><?php echo "{$row['dept']}" ?></font></td>
				<tr align=center><td width=200 color=red><b><font color=red>Email :</b></td><td width=400><font color=blue><?php echo "{$row['email']}" ?></font></td>
				<tr align=center><td width=200 color=red><b><font color=red>Mobile Number :</b></td><td width=400><font color=blue><?php echo "{$row['mob_no']}" ?></font></td>
				<tr align=center><td width=200 color=red><b><font color=red>Address :</b></td><td width=400><font color=blue><?php echo "{$row['address']}" ?></font></td>
	</table>
</center>
<br><br><br>
	<center><table border="1" bordercolor="brown"><tr><td><a href="EditProfile.php"><font color=red>Click Here </font></a><font color=blue>to Edit Your Profile</font></td>
	</tr></table></center>
</form>

</body>
</html>