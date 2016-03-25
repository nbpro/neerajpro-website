<?php 
session_start(); 
?> 
<?php include("config.php"); ?>
<?php 
	if(isset($_POST['Submit']))
	{
		$name=$_POST['name'];
		$username=$_POST['username'];
		$pwd=$_POST['pwd'];
		
		
		$query="insert into `admin`(`name`,`username`,`pwd`) values('$name','$username','$pwd')";
		
	$res=mysql_query($query);
	if(! $res )
	{
	include("ACommonMenu.php"); 
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>Sorry! This Username Already Exist.</center></font>';
	 exit;
	}
	else
	{
	include("ACommonMenu.php"); 
	 echo '<body bgcolor=#00ff99><font size=10 color=blue><br><br><br><center>Congratulations! '. $name .' is now Admin of Green Mess.</center></font>';
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
			alert("Please enter Admin's name.");
			return false;
		}
		if(document.form1.username.value=="")
		{
			alert("Please enter Admin's Username.");
			return false;
		}
		len=document.form1.username.value;
		if(len.length<5)
		{
			alert("Username must be of atleast five charecters.")
			return false;
		}
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
	face: Times New Roman;
}
body {
	background-color: #00FF99;
}
.style2 {font-weight: bold}
.style3 {color: #0033FF}
-->
</style></head>

<body>

<?php include("ACommonMenu.php"); ?>
<form action="<?php $_PHP_SELF ?>" method="post" name="form1" class="style2" id="form1" onSubmit="return validates()">
 <center> <font color =blue size=5><U><b>Registration Form For Administrator</b></U></font></center>
 <br>
  <table width="537" border="0" align="center">
    <tr>
      <td width="163" color=red><div align="right">Name :</div></td>
      <td width="358"><label>
        <input type="text" name="name" />
      </label></td>
    </tr>
    <tr>
     
      <td ><div align="right"><font color=red size=2>Username :</font></div></td>
      <td><label>
        <input type="text" name="username" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right"><font color=red size=2>Password :</font></div></td>
      <td><label>
        <input type="password" name="pwd" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right"><font color=red size=2>Confirm Password : </font></div></td>
      <td><label>
        <input type="password" name="cpwd" />
      </label></td>
    </tr>
    <tr>
      <td><label>
        <div align="right">
          <input type="reset" name="reset" value="Reset" />
        </div>
      </label></td>
      <td><label>

        <div align="left">
          <input type="submit" name="Submit" value="Submit" />
          </div>
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>