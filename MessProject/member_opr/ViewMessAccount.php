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
		$selectSQL = 'SELECT * FROM mess_account order by id desc'; 
		$selectRes = mysql_query( $selectSQL );
		$i=1;
		
	
		 
		 if( mysql_num_rows( $selectRes )==0  ){
        echo '<font size=10 color=red><br><br><br><center>Sorry! No Records.';
		}
		else
		{?>
		<center>
	<b><font size=6 color=blue><u>Mess Account</u></font></b>
	<table align=center border="1" bgcolor=aqua>
	

		<br><br><tr align=center><td width=80 color=red><b><font color=red>Sl. No.</b></td><td width=150><b><font color=red>Date</b></td>
					<td width=250 color=red><b><font color=red>Items Purchased</b></td>
					<td width=150 color=red><b><font color=red>Expense</b></td>
					<td width=150 color=red><b><font color=red>Balance</b></td>
					<td width=150 color=red><b><font color=red>Depositor</b></td>
					<td width=150 color=red><b><font color=red>Deposite</b></td>
					</tr>
		<?php
    while ($row = mysql_fetch_array($selectRes)) 
    {
      if($row['balance']<=0)
	{
       	echo "<tr><td align=center>". $i++ ."</td><td align=center>{$row['date']}</td><td align=center>{$row['items']}</td><td align=center>Rs.    {$row['expense']}/-		</td><td align=center><font color=red>Rs.{$row['balance']}/-</font></td><td align=center>{$row['depositor']}</td><td align=center>Rs.{$row['deposite']}/- 		</td>  </tr>\n";
	}
	else
	{
	echo "<tr><td align=center>". $i++ ."</td><td align=center>{$row['date']}</td><td align=center>{$row['items']}</td><td align=center>Rs.    {$row['expense']}/-		</td><td align=center><font color=green>Rs.{$row['balance']}/-</font></td><td align=center>{$row['depositor']}</td><td align=center>Rs.{$row['deposite']}/- 		</td>  </tr>\n";
	}
	  
	   
   }
	}
?>
		
	
	</table>
</center>
</form>

</body>
</html>