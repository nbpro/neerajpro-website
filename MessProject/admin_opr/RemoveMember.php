<?php 
session_start(); 
?> 
<?php include("config.php"); ?>
<?php include("ACommonMenu.php"); ?>

<?php
$selectSQL = 'SELECT username FROM reg_form'; 
		$selectRes = mysql_query( $selectSQL );
 
 if(mysql_num_rows( $selectRes )==0 ){
        echo '<body bgcolor="#00FF99"><font size=10 color=red><br><br><br><center>Sorry! No Member Exist.</center></font>';
		}
		else
		{?>
<?php 
	if(isset($_POST['Submit']))
	{
		$username=$_POST['username'];
		
		$name_rs=mysql_fetch_object(mysql_query("select name,clg_name,dept,pwd,mob_no,email,address from reg_form where username='$username'"));
		$name=$name_rs->name;
		$clg_name=$name_rs->clg_name;
		$dept=$name_rs->dept;
		$pwd=$name_rs->pwd;
		$mob_no=$name_rs->mob_no;
		$email=$name_rs->email;
		$address=$name_rs->address;
		
		
		$query="delete from reg_form where username='$username'";
		$query1=mysql_query("delete from borrower where name='$name'");
		$query2="insert into `removedmembers`(`username`,`name`,`clg_name`,`pwd`,`dept`,`mob_no`,`email`,`address`) 		   				values('$username','$name','$clg_name','$pwd','$dept','$mob_no','$email','$address')";
		
		
	$res=mysql_query($query);
	if(! $res )
	{ 
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>OOPs!Something Went Wrong.</center></font>';
	 exit;
	}
	else
	{
		mysql_query($query1);
		mysql_query($query2);	
	 echo '<body bgcolor=#00ff99><font size=10 color=blue><br><br><br><center><font color=red>'. $name .' </font>is Removed From Green Mess.</center></font>';
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



<center><font color=blue size=5><u><b>Select UserName To Remove Member</b> </u></font></center>

<form name="form1" action="<?php $_PHP_SELF ?>" method="post" onsubmit="return validates()">
<br>
<table  align="center" border="0">
	<tr>
	<td align="right"><font color=red size=3><b>Select Member :<b></b></font></td>
	<td align="left"><select name="username">
	<option selected="selected" value="">Select
	<?php
		$query = mysql_query("SELECT username FROM reg_form");
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
<br><br><br>
	<center><table border="1" bordercolor="brown"><tr><td><a href="removedmembers.php"><font color=red>Click Here </font></a><font color=blue>to See Revomed Members of Green Mess.</font></td>
	</tr></table></center>

</body>
</html>

<?php } ?>