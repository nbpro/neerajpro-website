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
		$selectSQL = 'SELECT id,name,amt FROM borrower'; 
		$selectRes = mysql_query( $selectSQL );
		$totalborrow=mysql_fetch_row(mysql_query('SELECT sum(amt) FROM borrower'));
		$balance=mysql_fetch_row(mysql_query("select balance from mess_account where id in(select max(id) from mess_account)"));
		$cash=$balance[0]-$totalborrow[0]; 
		$i=1;
		
	
		 
		 if( mysql_num_rows( $selectRes )==0  ){
        echo '<font size=10 color=red><br><br><br><center>Sorry! No Borrow.</center></font>';
		}
		else
		{?>
		<center>
	<b><font size=6 color=blue><u>Borrowers</u></font></b>
	<table align=center border="1" bgcolor=aqua>
	

		<br><br><tr align=center><td width=80 color=red><b><font color=red>Sl. No.</b></td><td width=250><b><font color=red>Name</b></td>
					<td width=200 color=red><b><font color=red>Borrowed Amount</b></td></tr>
	<?php				
    while ($row = mysql_fetch_array($selectRes)) 
    {
       echo "<tr><td align=center>". $i++ ."</td><td align=center>{$row['name']}</td><td align=center>Rs. {$row['amt']}/-</td> </tr>\n";
	   
	  	
	   
   }
   	}
?>

		
	
	</table>
</center>
<?php  echo '<br><font size=5 color=blue><center>Total Borrowed Money From Mess Account is <font color=red><u>Rs. '. $totalborrow[0] .'/-</u></font></center></font>';
echo '<br><font size=5 color=blue><center>Total Cash In Mess Account is <font color=red><u>Rs. '. $cash .'/-</u></font></center></font>';
echo '<font size=6 color=blue><center>Current Mess Account Balance is <font color=red><u>Rs.'. $balance[0] .'</u>/-</font></center></font>';
 ?>
</form>

</body>
</html>