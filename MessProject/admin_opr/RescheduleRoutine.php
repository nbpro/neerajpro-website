<?php 
session_start(); 
?> 
<?php include("config.php"); ?>
<?php include("ACommonMenu.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php 
	if(isset($_POST['Submit']))
	{
		$name1=$_POST['name1'];
		$name2=$_POST['name2'];
		$name3=$_POST['name3'];
		$name4=$_POST['name4'];
		$name5=$_POST['name5'];
		$name6=$_POST['name6'];
		$name7=$_POST['name7'];
		$name8=$_POST['name8'];
		$name9=$_POST['name9'];
		$name10=$_POST['name10'];
		$name11=$_POST['name11'];
		$name12=$_POST['name12'];
		$name13=$_POST['name13'];
		$name14=$_POST['name14'];
		
		
		
		$query1="update routine set person1='$name1',person2='$name2' where id=1";
		$query2="update routine set person1='$name3',person2='$name4' where id=2";
		$query3="update routine set person1='$name5',person2='$name6' where id=3";
		$query4="update routine set person1='$name7',person2='$name8' where id=4";
		$query5="update routine set person1='$name9',person2='$name10' where id=5";
		$query6="update routine set person1='$name11',person2='$name12' where id=6";
		$query7="update routine set person1='$name13',person2='$name14' where id=7";
	$res=mysql_query($query1);
		 mysql_query($query2);
		  mysql_query($query3);
		   mysql_query($query4);
		    mysql_query($query5);
			 mysql_query($query6);
			  mysql_query($query7);
	
	if(! $res )
	{ 
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>OOPs!Something Went Wrong.</center></font>';
	 exit;
	}
	else
	{
	 echo '<body bgcolor=#00ff99><font size=10 color=blue><br><br><br><center>Routine Rescheduled Successfully!</center></font>';
	exit;
	}

}
?>



<html>

<script type="text/javascript" language="javascript">
function validates()
	{
		if(document.form1.name1.value=="")
		{
			alert("Please Select Person 1 for Sunday Duty.");
			return false;
		}
		if(document.form1.name2.value=="")
		{
			alert("Please Select Person 2 for Sunday Duty.");
			return false;
		}
		if(document.form1.name3.value=="")
		{
			alert("Please Select Person 1 for Monday Duty.");
			return false;
		}
		if(document.form1.name4.value=="")
		{
			alert("Please Select Person 2 for Monday Duty.");
			return false;
		}
		if(document.form1.name5.value=="")
		{
			alert("Please Select Person 1 for Tuesday Duty.");
			return false;
		}
		if(document.form1.name6.value=="")
		{
			alert("Please Select Person 2 for Tuesday Duty.");
			return false;
		}
		if(document.form1.name7.value=="")
		{
			alert("Please Select Person 1 for Wednessday Duty.");
			return false;
		}
		if(document.form1.name8.value=="")
		{
			alert("Please Select Person 2 for Wednessday Duty.");
			return false;
		}
		if(document.form1.name9.value=="")
		{
			alert("Please Select Person 1 for Thursday Duty.");
			return false;
		}
		if(document.form1.name10.value=="")
		{
			alert("Please Select Person 2 for Thursday Duty.");
			return false;
		}
		if(document.form1.name11.value=="")
		{
			alert("Please Select Person 1 for Friday Duty.");
			return false;
		}
		if(document.form1.name12.value=="")
		{
			alert("Please Select Person 2 for Friday Duty.");
			return false;
		}
		if(document.form1.name13.value=="")
		{
			alert("Please Select Person 1 for Saturday Duty.");
			return false;
		}
		if(document.form1.name14.value=="")
		{
			alert("Please Select Person 2 for Saturday Duty.");
			return false;
		}
		return true;
	}
</script>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body bgcolor=#00FF99>
<center>

<jsp:include page="ACommonMenu.jsp"></jsp:include>
<center><font color=blue size=5><br><u>Select Members to Assign Duty for Each Day</u></font></center>

<form name="form1" action="<?php $_PHP_SELF ?>" method="post" onsubmit="return validates()">
<br><br><br>
<table width=400 align="center" border="1">
	<tr>
		<td align="center"><font color=red size=3>Day</font></td>
		<td align="center"><font color=red size=3>1st Person</font></td>
		<td align="center"><font color=red size=3>2nd Person</font></td>
	</tr>
	<tr>
		<td align="center"><font color=red size=3>Sunday</font></td>
		<td align="center"><select name="name1">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    	while ($rw = mysql_fetch_object($query))
    	{
        	$name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td>
		<td align="center"><select name="name2">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    	while ($rw = mysql_fetch_object($query))
    	{
        	$name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td></tr>
	<tr>
		<td align="center"><font color=red size=3>Monday</font></td>
		<td align="center"><select name="name3">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    	while ($rw = mysql_fetch_object($query))
    	{
        	$name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td>
		<td align="center"><select name="name4">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    	while ($rw = mysql_fetch_object($query))
    	{
        $name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td></tr>
	<tr>
		<td align="center"><font color=red size=3>Tuesday</font></td>
		<td align="center"><select name="name5">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    		while ($rw = mysql_fetch_object($query))
    		{
        	$name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td>
		<td align="center"><select name="name6">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    	while ($rw = mysql_fetch_object($query))
    	{
        	$name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td></tr>
	<tr>
		<td align="center"><font color=red size=3>Wednessday</font></td>
		<td align="center"><select name="name7">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    	while ($rw = mysql_fetch_object($query))
    	{
        	$name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td>
		<td align="center"><select name="name8">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    	while ($rw = mysql_fetch_object($query))
    	{
        $name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td></tr>
	<tr>
		<td align="center"><font color=red size=3>Thursday</font></td>
		<td align="center"><select name="name9">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    	while ($rw = mysql_fetch_object($query))
    	{
        $name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td>
		<td align="center"><select name="name10">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    	while ($rw = mysql_fetch_object($query))
    	{
        $name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td></tr>
	<tr>
		<td align="center"><font color=red size=3>Friday</font></td>
		<td align="center"><select name="name11">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    	while ($rw = mysql_fetch_object($query))
    	{
        	$name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td>
		<td align="center"><select name="name12">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    	while ($rw = mysql_fetch_object($query))
    	{
        $name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td></tr>
	<tr>
		<td align="center"><font color=red size=3>Saturday</font></td>
		<td align="center"><select name="name13">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    	while ($rw = mysql_fetch_object($query))
    	{
        	$name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td>
		<td align="center"><select name="name14">
	<option selected="selected" value="">Select</option>
	<option>No Member Today</option>
	<?php
		$query = mysql_query("SELECT name FROM reg_form");
		if ($query)
		{
    	while ($rw = mysql_fetch_object($query))
    	{
        $name=$rw->name;
	?>
	<option><?php echo $name; ?> </option>
	<?php
	}
	}
	?>
	</select></td></tr>
	
	</table>
	<table width="400" border="0">
	<tr>
		<td align="center"><input type=reset value=Reset></input></td>
		<td align=center><input type=submit name=Submit value=Reschedule></input></td>
	</tr></table>


</form>
</center>

</body>
</html>