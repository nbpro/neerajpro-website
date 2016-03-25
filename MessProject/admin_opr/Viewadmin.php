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
$selectSQL = 'SELECT name FROM admin'; 
		$selectRes = mysql_query( $selectSQL );
		$i=1;
		
	
		 
		 if( mysql_num_rows( $selectRes )==0  ){
        echo '<font size=10 color=red><br><br><br><center>Sorry! No Admin Exist.</center></font>';
		}
		else
		{
		?>

<center>
	<b><font size=6 color=blue><u>Administrators Of Green Mess</u></font></b>
	<table align=center border="1" bgcolor=aqua>
	

		<br><br><tr align=center><td width=80 color=red><b><font color=red>Sl. No.</b></td><td width=150><b><font color=red>Name</b></td></tr>
					
	<?php 
		
    while ($row = mysql_fetch_array($selectRes)) 
    {
       echo "<tr><td align=center>". $i++ ."</td><td align=center>{$row['name']}</td></tr>\n";
	  
	   
   }
	}
?>
		
	
	</table>
</center>
</form>

</body>
</html>
