<?php 
session_start(); 
?> 

<?php include("ACommonMenu.php"); ?>
<?php include("config.php"); ?>
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
		$month=$_POST['month'];
		$year=$_POST['year'];
	    $totaldepo=mysql_fetch_row(mysql_query("select sum(amt_pd) from member_account where month='$month' and year='$year'"));
		
		$res=mysql_query("select name,sum(amt_pd),date from member_account where month='$month' and year='$year' group by name order by id desc");
		
	if(! $res )
	{ 
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>Sorry! You have not paid Any Ammount Till Now.</center></font>';
	 exit;
	}
	else
	{?>
		<center>
	<b><font size=5 color=blue><u>Deposite of <?php echo "$month $year" ?></u></font></b>
	<table align=center border="1" bgcolor=aqua>
	

		<br><br><tr align=center>
					<td width=80 color=red><b><font color=red>Sl. No.</b></td>
					<td width=250 color=red><b><font color=red>Name</b></td>
					<td width=150 color=red><b><font color=red>Date of Payment</b></td>
					<td width=250 color=red><b><font color=red>Amount Paid</b></td>
					
					
					</tr>
	<?php
	$i=1;
    while ($row = mysql_fetch_array($res)) 
    {
       echo "<tr><td align=center>". $i++ ."</td><td align=center>{$row['name']}</td><td align=center>{$row['date']}</td><td align=center>Rs.{$row['sum(amt_pd)']}/-</td> </tr>\n";
	 }
	 echo "<br><font size=5 color=blue><center>Total deposite In Mess Account in the month of ".$month." ". $year." is <font color=red><u>Rs. ". $totaldepo[0] ."/-</u></font></center></font>";
	  exit;
   }
	}
	
?>















<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" language="javascript">
function validates2()
	{
		if(document.form2.month.value=="")
		{
			alert("Please Select Month.");
			return false;
		}
		if(document.form2.year.value=="")
		{
			alert("Please Select year.");
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
<br>
<font color=blue size=5><u><b>Select Month And Year To See All Member's Account Information</b> </u></font></center>

<form name="form2" action="<?php $_PHP_SELF ?>" method="post" onSubmit="return validates2()">
<br>
<table  align="center" border="0">
	<tr>
	<td align="right"><font color=red size=3><b>Month :</b></font></td>
	 <td><label>
        <div align="left">
          <select name="month">
            <option selected="selected" value="">Select</option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
          </select>
        </div>
      </label></td>
    
      <td><font color=red size=3><b>Year : </b></font></td>
      <td><label>
        <div align="left">
          <select name="year">
            <option selected="selected" value="">Select</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
          </select>
        </div>
      </label></td>
  </tr></table><center><table><tr>
	<td align=right><input type=submit name=Submit value=View></input></td></table></tr>

</table></center>
</form>
</body></html>
<?php } ?>