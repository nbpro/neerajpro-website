<?php 
session_start(); 
?> 
<?php include("config.php"); ?>
<?php include("ACommonMenu.php"); ?>

<?php
$selectSQL = 'SELECT username FROM admin'; 
		$selectRes = mysql_query( $selectSQL );
 
 if(mysql_num_rows( $selectRes )==0 ){
        echo '<body bgcolor="#00FF99"><font size=10 color=red><br><br><br><center>Sorry! No Admin Exist.</center></font>';
		}
		else if(mysql_num_rows( $selectRes )==1 ){
        echo '<body bgcolor="#00FF99"><font size=10 color=red><br><br><br><center>Sorry! This Admin can not be removed.<br>There should be atleast one Admin.</center></font>';
		}
		else
		{?>
<?php 
	if(isset($_POST['Submit']))
	{
		$username=$_POST['username'];
	
		
		$name_rs=mysql_fetch_object(mysql_query("select name from admin where username='$username'"));
		$name=$name_rs->name;
		$query="delete from admin where username='$username'";
		
		
	$res=mysql_query($query);
	if(! $res )
	{ 
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>OOPs!Something Went Wrong.</center></font>';
	 exit;
	}
	else
	{
	 echo '<body bgcolor=#00ff99><font size=10 color=blue><br><br><br><center><font color=red>'. $name .' </font>is No Longer Admin.</center></font>';
	exit;
	}
}

?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" language="javascript">
function validates()
	{
		if(document.form1.username.value=="")
		{
			alert("Please Select Member to Remove.");
			return false;
		}
		return true;
	}
</script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body bgcolor=#00FF99>
<center>



<center><font color=blue size=5><u><b>Select UserName To Remove Admin</b> </u></font></center>

<form name="form1" action="<?php $_PHP_SELF ?>" method="post" onsubmit="return validates()">
<br>
<table  align="center" border="0">
	<tr>
	<td align="right"><font color=red size=3><b>Select Admin :<b></b></font></td>
	<td align="left"><select name="username">
	<option selected="selected" value="">Select
	<?php
		$query = mysql_query("SELECT username FROM admin");
		if ($query)
{
    while ($rw = mysql_fetch_object($query))
    {
        $username=$rw->username;
?>
<option><?php echo $username; ?> </option>
<?php
}
}
	?>
	</select></tr>
	<tr>
	<td align=right><input type=submit name=Submit value=Remove></input></td></tr>

</table>
</form>
</center>

</body>
</html>

<?php } ?>