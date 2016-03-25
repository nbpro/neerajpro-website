<?php
	ob_start();?>
	<?php
	session_start();
	$host="messneeraj.db.11930466.hostedresource.com";
	$user="messneeraj";
	$pwd="Neeraj4321#";
	$db_name="messneeraj";
	mysql_connect($host,$user,$pwd) or die ("can't connect to database");
	mysql_select_db($db_name) or die("Database does not exist");

	
	?>
