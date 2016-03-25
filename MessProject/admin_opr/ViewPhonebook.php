<?php 
session_start(); 
?> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body bgcolor=#00FF99>
<?php include "ACommonMenu.php" ?>
<?php include "config.php"?>


	<?php 
		$selectSQL = 'SELECT id,name,phno FROM phonebook'; 
		$selectRes = mysql_query( $selectSQL );
		$i=1;
		
	
		 
		 if( mysql_num_rows( $selectRes )==0  ){
        echo '<font size=10 color=red><br><br><br><center>Sorry! No Contact Exist.</center></font>';
		}
		else
		{?>
		<center>
	<b><font size=6 color=blue><u>Phone Book</u></font></b>
	<table align=center border="1" bgcolor=aqua>
	

		<br><br><tr align=center><td width=50 color=red><b><font color=red>id</b></td><td width=250><b><font color=red>Name</b></td>
					<td width=150 color=red><b><font color=red>Phone No.</b></td></tr>
	<?php				
    while ($row = mysql_fetch_array($selectRes)) 
    {
       echo "<tr><td align=center>{$row['id']}</td><td align=center>{$row['name']}</td><td align=center>{$row['phno']}</td> </tr>\n";
	  
	   
   }
	}
?>
		
	
	</table>
</center>
</form>

</body>
</html>