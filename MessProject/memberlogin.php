<?php include("config.php");

	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$pwd=$_POST['pwd'];
		
		$res=mysql_query("select name from reg_form where username='$username' and pwd='$pwd' ");
		
		if(mysql_num_rows($res))
		{
			$row=mysql_fetch_array($res);
			$_SESSION['mname']=$row['name'];
			header('location:memberpage.php');
			//header('location:BorrowedAmount.php');
		}
		else
		{
			$_SESSION['show']="<font color=red>  Invalid username or password</font>";
			header('location:wrongmemberpage.php');
			exit;
		}
			
	}
		
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #66FF99;
}
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style></head>
<script type="text/javascript" language="javascript">
	function validates()
	{
		if(document.form1.username.value=="")
		{
			alert("Please enter username.");
			return false;
		}
		if(document.form1.pwd.value=="")
		{
			alert("Please enter password.");
			return false;
		}
		return true;
	}
</script>
<style type="text/css">
<!--
table.red {
		border: 1px solid red;
}
-->
</style>
<body>
<form id="form1" name="form1" method="post" target="_parent" onsubmit="return validates()">
  <p align="center" class="style1"><font color="blue">LOGIN AS MEMBER</font> </p>
  <table width="290" border="3" align="center" class=red>
    <tr>
      <td width="115" align="center">USERNAME : </td>
      <td width="153" align="center"><label>
        <input type="text" name="username" />
      </label></td>
    </tr>
    <tr>
      <td align="center">PASSWORD : </td>
      <td align="center"><label>
        <input type="password" name="pwd" />
      </label></td>
    </tr>
    <tr>
      <td align="center"><label>
        <input type="reset" name="reset" value="Reset" />
      </label></td>
      <td align="center"><label>
        <input type="submit" name="login" value="Login" />
      </label></td>
    </tr></table>
	 &nbsp;&nbsp;&nbsp;&nbsp;<a href="ForgotPassword.php" target="_parent"><font color="#FF0000" size=3>Forgot Password?</font></a>
	  <br>
  <table width="280" border="3" class=red align="center">
  <tr>
  	<td ><img src="image/memberpic.jpg" width="285" height="240" /></td>
  </tr>
</table>
</form>
</body>
</html>
