<?php 
session_start(); 
include("MBlankLogin.php");
?> 
<script type="text/javascript">
	window.history.forward(1);
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Member Window</title>
</head>

<frameset rows="100,*" cols="*">
  <frame src="Member_Welcome.php" noresize="noresize" scrolling="no">
  <frame src="MCommonMenu.php" name="down1" noresize="noresize" scrolling="auto">
</frameset>
<noframes><body bgcolor=#00ff99>
</body>
</noframes></html>
