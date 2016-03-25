<?php 
session_start(); 
?> 
<?php include("config.php"); ?>
<?php include("ACommonMenu.php"); ?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>View Member Account</title>
</head>
<body bgcolor=#00FF99>
<center><font color=blue size=5><u><b>Cook's Account</b> </u></font></center>
<?php
$selectSQL = 'SELECT * FROM member_account'; 
		$selectRes = mysql_query( $selectSQL );
 
 if(mysql_num_rows( $selectRes )==0 ){
        echo '<body bgcolor="#00FF99"><font size=10 color=red><br><br><br><center>Sorry! No Records.</center></font>';
		}
		else
		{?>
	<?php 
	
	$res=mysql_query("select id,date,month,year,amt_pd,r_amt from cook_account order by id desc");
		
	if(! $res )
	{ 
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>Sorry! You have not paid Any Ammount Till Now.</center></font>';
	 exit;
	}
	else
	{?>
		<center>
	<table align=center border="1" bgcolor=aqua>
	

		<br><br><tr align=center>
					<td width=80 color=red><b><font color=red>Sl. No.</b></td>
					<td width=150 color=red><b><font color=red>Date of Payment</b></td>
					<td width=150><b><font color=red>Payment for the Month</b></td>
					<td width=150 color=red><b><font color=red>Payment for the Year</b></td>
					<td width=150 color=red><b><font color=red>Amount Paid</b></td>
					<td width=250 color=red><b><font color=red>Remaining Amount</b></td>
					
					</tr>
	<?php
    while ($row = mysql_fetch_array($res)) 
    {
       echo "<tr><td align=center>{$row['id']}</td><td align=center>{$row['date']}</td><td align=center>{$row['month']}</td><td align=center>{$row['year']}</td><td align=center>Rs.{$row['amt_pd']}/-</td><td align=center>Rs.{$row['r_amt']}/-</td> </tr>\n";
	  
	   
   }
   }
	}
?>


</center>

</body>
</html>

