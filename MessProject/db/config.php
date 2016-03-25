<?php
	ob_start();?>
	<?php
	session_start();
	$host="localhost";
	$user="root";
	$pwd="neeraj;
	$db_name="mess";
	mysql_connect($host,$user,$pwd) or die ("can't connect to database");
	mysql_select_db($db_name) or die("Database does not exist");

	
	?>