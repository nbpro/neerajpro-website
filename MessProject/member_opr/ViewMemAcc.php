<?php 
session_start(); 
?> 
<?php include("config.php"); ?>
<?php include("MCommonMenu.php"); ?>

<?php
$selectSQL = 'SELECT * FROM member_account'; 
		$selectRes = mysql_query( $selectSQL );
 
 if(mysql_num_rows( $selectRes )==0 ){
        echo '<body bgcolor="#00FF99"><font size=10 color=red><br><br><br><center>Sorry! No Records.</center></font>';
		}
		else
		{
		
 
	if(isset($_POST['Submit']))
	{
		$name=$_POST['name'];
	  		$i=1;
			echo ("<b><center><font size=5 color=blue><u>Account of ". $name ."</u></font></center></b>");
		
		$res=mysql_query("select month,amt_pd,date,r_amt,year from member_account where name='$name' order by id desc");
		
	if(! $res )
	{ 
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>Sorry! You have not paid Any Amount Till Now.</center></font>';
	 exit;
	}
	else
	{?>
		<center>
	<table align=center border="1" bgcolor=aqua>
	

		<br><br><tr align=center>
					<td width=80 color=red><b><font color=red>Sl. No.</b></td>
					<td width=150 color=red><b><font color=red>Year</b></td>
					<td width=150><b><font color=red>Month</b></td>
					<td width=150 color=red><b><font color=red>Date of Payment</b></td>
					<td width=150 color=red><b><font color=red>Amount Paid</b></td>
					<td width=250 color=red><b><font color=red>Remaining Amount</b></td>
					
					</tr>
	<?php
    while ($row = mysql_fetch_array($res)) 
    {
       echo "<tr><td align=center>". $i++ ."</td><td align=center>{$row['year']}</td><td align=center>{$row['month']}</td><td align=center>{$row['date']}</td><td align=center>Rs.{$row['amt_pd']}/-</td><td align=center>Rs.{$row['r_amt']}/-</td> </tr>\n";
	 }
	  exit;
   }
	}
?>

<?php } ?>