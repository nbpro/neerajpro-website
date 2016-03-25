<?php 
session_start(); 
?> 
<?php include("config.php"); ?>
<?php include("ACommonMenu.php"); ?>
<?php include("PaymentForm.php"); ?>

<?php
$selectSQL = 'SELECT * FROM member_account'; 
		$selectRes = mysql_query( $selectSQL );
 
 if(mysql_num_rows( $selectRes )==0 ){
 		echo '<center><font color=blue size=5><u><b>Select UserName To See Account Information</b> </u></font></center>';
        echo '<body bgcolor="#00FF99"><font size=10 color=red><br><center>Sorry! No Records.</center></font>';
		}
		else
		{?>
	<?php 
	if(isset($_POST['Submit']))
	{
		$sname=$_POST['name'];
	  
		
		$res=mysql_query("select id,month,amt_pd,date,r_amt,year from member_account where name='$sname' order by id desc");
		
	if(! $res )
	{ 
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>Sorry! You have not paid Any Ammount Till Now.</center></font>';
	 exit;
	}
	else
	{?>
		<center>
	<b><font size=5 color=blue><u>Account of <?php $name ?></u></font></b>
	<table align=center border="1" bgcolor=aqua>
	

		<br><br><tr align=center>
					<td width=80 color=red><b><font color=red>Sl. No.</b></td>
					<td width=150 color=red><b><font color=red>Year</b></td>
					<td width=150><b><font color=red>Month</b></td>
					<td width=150 color=red><b><font color=red>Date of Payment</b></td>
					<td width=250 color=red><b><font color=red>Amount Paid</b></td>
					<td width=150 color=red><b><font color=red>Remaining Amount</b></td>
					
					</tr>
	<?php
    while ($row = mysql_fetch_array($res)) 
    {
       echo "<tr><td align=center>{$row['id']}</td><td align=center>{$row['year']}</td><td align=center>{$row['month']}</td><td align=center>{$row['date']}</td><td align=center>{$row['amt_pd']}</td><td align=center>{$row['r_amt']}</td> </tr>\n";
	 }
	  exit;
   }
	}
?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" language="javascript">
function validates()
	{
		if(document.form1.name.value=="")
		{
			alert("Please Select Member to see Account.");
			return false;
		}
		return true;
	}
</script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>View Member Account</title>
</head>
<body bgcolor=#00FF99>
<center>



<center><font color=blue size=5><u><b>Select UserName To See Individual's Account Information</b> </u></font></center>

<form name="form1" action="ViewMemAcc.php" method="post" onSubmit="return validates()">
<table  align="center" border="0">
	<tr>
	<td align="right"><font color=red size=3><b>Select Name :<b></b></font></td>
	<td align="left"><select name="name">
	<option selected="selected" value="">Select
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
{
    while ($rw = mysql_fetch_object($query))
    {
        $name=$rw->name;
?>
<option><?php echo $name; ?> </option>
<?php
}
}
	?>
	</select></tr>
	<tr>
	<td align=right><input type=submit name=Submit value=View></input></td></tr>

</table>
</form>



</center>



</body>
</html>

<?php } ?>
<center><table border="1" bordercolor="brown"><tr><td><font color=blue>Click here to View </font><a href="ViewClassicAccount.php"><font color=red>Monthwise Account.</font></a></td></tr></table></center>
