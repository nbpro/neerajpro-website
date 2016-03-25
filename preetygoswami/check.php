<?php
session_start();
// $host="bday.db.11930466.hostedresource.com"; // Host name
// $username="bday"; // Mysql username
// $password="Nikita@1234"; // Mysql password
// $db_name="bday"; // Database name
// $tbl_name="jyoti"; // Table name

// // Connect to server and select databse.
// mysql_connect("$host", "$username", "$password")or die("cannot connect");
// mysql_select_db("$db_name")or die("cannot select DB");

// // username and password sent from form

$myusername=($_POST['myusername']);
$mypassword=($_POST['mypassword']);



// // To protect MySQL injection (more detail about MySQL injection)
// $myusername = stripslashes($myusername);
// $mypassword = stripslashes($mypassword);
// $myusername = mysql_real_escape_string($myusername);
// $mypassword = mysql_real_escape_string($mypassword);

// $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
// $result=mysql_query($sql);

// echo '<pre>', print_r($myusername, true), '</pre>'
// echo '<pre>', print_r($mypassword, true), '</pre>'
// var_dump($myusername);

// $count=mysql_num_rows($result);
if($myusername == "howrah" && $mypassword == "duranto"){
	$count = 1;
	header("location:personal.html");
}else{
	$count = 0;
	header("location:404.html");
}




// if($count==1){


// }
// else
//  {
// //print_r($myusername);
// }

?>
