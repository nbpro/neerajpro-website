<?php 
session_start(); 
?> 
<?php include("welcome.html");?>
<?php include("config.php");


	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$pwd=$_POST['pwd'];
		
		$res=mysql_query("select name from admin where username='$username' and pwd='$pwd' ");
		
		if(mysql_num_rows($res))
		{
			$row=mysql_fetch_array($res);
			$_SESSION['cname']=$row['name'];
			header('location:adminpage.php');
		}
		else
		{
			header('location:wrongadminpage.php');
			exit;
		}
			
	}
		
?>

<html><head><title></title></head>
<body bgcolor=#00ff99 alink="#FF0099" vlink="#660033" link="#FF0000">
<hr color=red size=5>
<br /><br /><br /><br /><br /><br /><center>
<font color=red size=10> Sorry! Invalid username or password.<br /><br></font>
<font color=red size=6><a href="index.php" >Click here</a></font><font color=blue size=6>&nbsp;to Try Again.</font>

</center>

</body></html>
