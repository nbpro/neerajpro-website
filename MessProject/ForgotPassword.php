<?php 
session_start(); 
?> 
<?php include("config.php"); ?>
<?php include("welcome.html");?>
<hr color=red size=5>
<?php 
	if(isset($_POST['Submit']))
	{
		$email=$_POST['email'];
		
		
		$query="select pwd from reg_form where email='$email'";
		
	$res=mysql_query($query);
	$row = mysql_fetch_row($res);
	$pwd=$row[0];
	$sub='Green Mess Password';
	$msg='Your Green Mess Account Password is : '. $pwd .'.';
	$headers = "From: greenmess.0fees.net";
	if(mysql_num_rows( $res )==0 )
	{
	
  	 echo '<body bgcolor=#00ff99><font size=5 color=red><br><br><br><center>Sorry!Please Enter Your Registered Email.</center></font>';
	 echo '<br><br><center><font color=red size=4><a href="ForgotPassword.php" >Click here</a></font><font color=blue size=4>&nbsp;to Try Again.</font></center>';
	 exit;
	}
	else
	{
		if(mail("$email","$sub","$msg","$headers"))
		{
	 		echo '<body bgcolor=#00ff99><font size=5 color=blue><br><br><br><center>Your Password has been sent to your Email.Please check Your Inbox.</center></font>';
			 echo '<center><font color=red size=4><a href="index.php" >Click here</a></font><font color=blue size=4>&nbsp;to Relogin.</font></center>';
	 	}
		else
		{
			echo '<body bgcolor=#00ff99><font size=5 color=blue><br><br><br><center>Sorry! Unable To Send Mail.</center></font>';
		}
	 

	exit;
	}
}

?>







<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<script type="text/javascript" language="javascript">
	function validates()
	{
		
		if(document.form1.email.value=="")
		{
			alert("Please Enter Your Registered Email.");
			return false;
		}
		
		
		return true;
	}	
			
</script>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Forgot Password?</title>
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
</style>

<body>


<form action="<?php $_PHP_SELF ?>" method="post" name="form1" class="style2" id="form1" onSubmit="return validates()">
  <p>&nbsp;</p>
 <center><font color=blue size=5><U>Forgot Password? No problem!!</U></font></center> <br><br>
  <table width="500" border="0" align="center">
    
     <tr>
      <td><div align="right">Your Registered Email : </div></td>
      <td><label>
        <input type="text" name="email" width=30>
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
          <input type="submit" name="Submit" value="Recover Password" /><br>
          </div>
      </label></td>
    </tr>
  </table>
  
    
  <p>&nbsp;</p>
</form>
 <center> <font color=red size=5><a href="index.php" >Click here</a></font><font color=blue size=5>&nbsp;to go to Login Page.</font></center>

</body>

</html>