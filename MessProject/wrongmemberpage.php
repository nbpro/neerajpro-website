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
			$_SESSION['mname']=$row['name'];
			header('location:memberpage.php');
		}
		else
		{
			header('location:wrongmemberpage.php');
			exit;
		}
			
	}
		
?>

<html><head><title></title></head>
<body bgcolor=#00ff99>

<br /><br /><br /><br /><br /><br /><center>
<font color=red size=10> Sorry! Invalid username or password.<br /></font>
<font color=red size=6><a href="index.php">Click here</a></font><font color=blue size=6>&nbsp;to try again.</font>

</center>

</body></html>
