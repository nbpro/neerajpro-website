<?php 
session_start(); 
?> 
<?php include("config.php"); ?>
<?php include("ACommonMenu.php"); ?>
<?php 
	if(isset($_POST['Submit']))
	{
		$name=$_POST['name'];
		$phno=$_POST['phno'];
		
		
		$query="update phonebook set phno='$phno' where name='$name'";
		
	$res=mysql_query($query);
	if(! $res )
	{
	
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>OOPs!Something Went Wrong.</center></font>';
	 exit;
	}
	else
	{
	 echo '<body bgcolor=#00ff99><font size=10 color=blue><br><br><br><center>Congratulations! '. $name .' is Updated in the Contact List.</center></font>';
	exit;
	}
}

?>











<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<script type="text/javascript" language="javascript">
	function validates()
	{
		
		if(document.form1.name.value=="")
		{
			alert("Please Select Name.");
			return false;
		}
		if(document.form1.phno.value=="")
		{
			alert("Please enter the mobile number.")
			return false;
		}
		var numericExpression = /^[0-9]+$/;
			if(!document.form1.phno.value.match(numericExpression))
			{
				alert("Please enter only numbers.")
				return false;
			}
		s=document.form1.mob_no.value;
		if(s.length<10 || s.length>10)
		{
			alert("Invalid Mobile number.")
			return false;
		}
		
		return true;
	}	
			
</script>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<style type="text/css">
<!--
body,td,th {
	color: #FF0000;
}
body {
	background-color: #00FF99;
}
.style2 {font-weight: bold}
.style3 {color: #0033FF}
-->
</style></head>

<body>




<form action="<?php $_PHP_SELF ?>" method="post" name="form1" class="style2" id="form1" onSubmit="return validates()">
  <p>&nbsp;</p>
 <center><font color=blue size=5><U>Update Phone Number</U></font></center> <br><br>
  <table width="300" border="0" align="center">
    
     <tr>
      <td><div align="right">Name : </div></td>
      <td><label>
       <select name="name">
	<option selected="selected" value="">Select
	<?php
		$query = mysql_query("SELECT name FROM phonebook");
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
	</select>
      </label></td>
    </tr>
   
    <tr>
      <td><div align="right">Phone No:</div></td>
      <td><label>
        <input type="text" name="phno" width="30" />
      </label></td>
    </tr>  
    <tr>
    <br>
      <td><label>
        <div align="right">
          <input type="reset" name="reset" value="Reset" />
        </div>
      </label></td>
      <td><label>

        <div align="left">
          <input type="submit" name="Submit" value="Update Contact" /><br>
          </div>
      </label></td>
    </tr>
  </table>
  
    
  <p>&nbsp;</p>
</form>
  

</body>

</html>