<?php 
session_start(); 
?> 
<?php include("config.php"); ?>
<?php include("MCommonMenu.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" language="javascript">
function validates()
	{
		if(document.form1.username.value=="")
		{
			alert("Please Select Member to view Account.");
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



<center><font color=blue size=5><u><b>Select UserName To See Account Information</b> </u></font></center>

<form name="form1" action="ViewMemAcc.php" method="post" onSubmit="return validates()">
<br>
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
<center><table border="1" bordercolor="brown"><tr><td><font color=blue>Click here to View </font><a href="ViewClassicAccount.php"><font color=red>Monthwise Account.</font></a></td></tr></table></center>
