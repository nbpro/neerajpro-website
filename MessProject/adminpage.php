<?php 
//session_start(); 
?>
<?php include("ABlankLogin.php");?>
<script type="text/javascript">
	window.history.forward(1);
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Window</title>
</head>

<frameset rows="100,*" cols="*">
  <frame src="Admin_Welcome.php" noresize="noresize" scrolling="no">
  <frame src="ACommonMenu.php" name="down" noresize="noresize" scrolling="auto">
</frameset>
<noframes></noframes>

<body>
</body>
</html>
