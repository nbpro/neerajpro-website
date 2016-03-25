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
		$selectSQL = 'SELECT name,clg_name,dept,email,address FROM reg_form'; 
		$selectRes = mysql_query( $selectSQL );
		$i=1;
		
	
		 
		 if( mysql_num_rows( $selectRes )==0  ){
        echo '<font size=10 color=red><br><br><br><center>Sorry! No Member Exist.</center></font>';
		}
		else
		{?>
		<center>
	<b><font size=6 color=blue><u>Members</u></font></b>
	<table align=center border="1" bgcolor=aqua>
	

		<br><br><tr align=center><td width=80 color=red><b><font color=red>Sl. No.</b></td><td width=250><b><font color=red>Name</b></td>
					<td width=250 color=red><b><font color=red>College Name</b></td>
					<td width=150 color=red><b><font color=red>Department</b></td>
					<td width=150 color=red><b><font color=red>Email</b></td>
					<td width=150 color=red><b><font color=red>Address</b></td>
					</tr>
	<?php
    while ($row = mysql_fetch_array($selectRes)) 
    {
       echo "<tr><td align=center>". $i++ ."</td><td align=center>{$row['name']}</td><td align=center>{$row['clg_name']}</td><td align=center>    {$row['dept']}</td><td align=center>{$row['email']}</td><td align=center>{$row['address']}</td> </tr>\n";
	  
	   
   }
	}
?>
		
	
	</table>
</center>
</form>

</body>
</html>