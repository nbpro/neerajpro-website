<?php 
session_start(); 
?> 
<?php include("config.php"); ?>
<?php 
	if(isset($_POST['Submit']))
	{
		$opwd=$_POST['opwd'];
		$pwd=$_POST['pwd'];
		
		
		$query1= "SELECT pwd FROM reg_form where pwd='$opwd'";
		
	$res=mysql_query($query1);
	if(mysql_num_rows( $res )==0  )
	{
	
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>Sorry! Old Password Did Not Matched.</font>';
	 echo('<br><font color=red size=5><a href="../memberpage.php" target="_parent">Click here</a></font><font color=blue size=5>&nbsp;to Return Home.</font></center>');
	 exit;
	}
	else
	{
		$query2=mysql_query("update reg_form set pwd='$pwd' where pwd='$opwd'");
		
	 echo '<body bgcolor=#00ff99><font size=10 color=blue><br><br><br><center>Password Changed Successfully.</font>';
	 echo('<br><font color=red size=5><a href="../memberpage.php" target="_parent">Click here</a></font><font color=blue size=5>&nbsp;to Return Home.</font></center>');

	exit;
	}
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<script type="text/javascript" language="javascript">
	function validates()
	{
		
		if(document.form1.pwd.value=="")
		{
			alert("Please enter the Password.")
			return false;
		}
		len1=document.form1.pwd.value;
		if(len1.length<5)
		{
			alert("Password must be of atleast five charecters.")
			return false;
		}
		if(document.form1.cpwd.value!=document.form1.pwd.value)
		{
			alert("Sorry! password didn't match.")
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
 <center><font color=blue size=5><U>Change Password</U></font></center> <br><br>
  <table width="400" border="0" align="center">
    
     <tr>
      <td><div align="right">Old Password : </div></td>
      <td><label>
        <input type="password" name="opwd" width=30>
      </label></td>
    </tr>
   
    <tr>
      <td><div align="right">New Password :</div></td>
      <td><label>
        <input type="password" name="pwd" width="30" />
      </label></td>
    </tr>
	<tr>
      <td><div align="right">Confirm Password :</div></td>
      <td><label>
        <input type="password" name="cpwd" width="30" />
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
          <input type="submit" name="Submit" value="Change Password" /><br>
          </div>
      </label></td>
    </tr>
  </table>
  
    
  <p>&nbsp;</p>
</form>
  

</body>

</html>