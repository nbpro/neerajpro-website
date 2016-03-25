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

<center>
	<b><font size=6 color=blue><u>Daily Routine<br><br></u></font></b>
	<table align=center border="1" bgcolor=aqua>
	

		<br><br><tr align=center><td width=150 color=red><b><font color=red>Day</b></td><td width=250><b><font color=red>1st Person</b></td>
					<td width=250 color=red><b><font color=red>2nd Person</b></td></tr>
					
	<?php 
		$selectSQL = 'SELECT day,person1,person2 FROM routine'; 
		$selectRes = mysql_query( $selectSQL );
		$i=1;
		
	
		 
		 if( mysql_num_rows( $selectRes )==0  ){
        echo '<font size=10 color=red>Sorry! No Routine Exist.</font>';
		}
		else
		{
    while ($row = mysql_fetch_array($selectRes)) 
    {
       echo "<tr><td align=center><font color=red>{$row['day']}</font></td><td align=center>{$row['person1']}</td><td align=center>{$row['person2']}</td> </tr>\n";
	  
	   
   }
	}
?>
		
	
	</table>
</center>
</form>

</body>
</html>