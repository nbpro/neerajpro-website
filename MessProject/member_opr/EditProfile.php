<?php 
session_start(); 
?> 
<?php include("config.php"); 
include("MCommonMenu.php"); ?>
<?php 
	if(isset($_POST['Submit']))
	{
		$name=$_POST['name'];
		$username=$_POST['username'];
		$college_name=$_POST['college_name'];
		$dept=$_POST['dept'];
		$phno=$_POST['mob_no'];
		$add=$_POST['add'];
		$email=$_POST['email'];
		
		$query1="update reg_form set username='$username',name='$name',clg_name='$college_name',dept='$dept',mob_no='$phno',email='$email',address='$add' where name='$_SESSION[mname]'";	   
		$query2="update phonebook set phno='$phno',name='$name' where name='$_SESSION[mname]'";
		$query3="SELECT name,username,clg_name,dept,email,address,mob_no FROM reg_form where name='$_SESSION[mname]'";
		
		$selectRes = mysql_query( $query3 );
		$row = mysql_fetch_array($selectRes);
		$res=mysql_query($query1);
		
	if(! $res )
	{
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>OOPs! Something Went Wrong.</center></font>';
	 exit;
	}
	else
	{
	mysql_query($query2);
	$query4=mysql_query("update borrower set name='$name' where name='$_SESSION[mname]'");
	$query5=mysql_query("update member_account set name='$name' where name='$_SESSION[mname]'");
	
	 echo '<body bgcolor=#00ff99><font size=10 color=blue><br><br><br><center>You have Successfully Updated Your Profile.</center></font>';
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
			alert("Please enter member's name.");
			return false;
		}
		if(document.form1.username.value=="")
		{
			alert("Please enter member's Username.");
			return false;
		}
		len=document.form1.username.value;
		if(len.length<5)
		{
			alert("Username must be of atleast five charecters.")
			return false;
		}
		if(document.form1.mob_no.value=="")
		{
			alert("Please enter the mobile number.")
			return false;
		}
		var numericExpression = /^[0-9]+$/;
			if(!document.form1.mob_no.value.match(numericExpression))
			{
				alert("Please enter only numbers in mobile number.")
				return false;
			}
		s=document.form1.mob_no.value;
		if(s.length<10 || s.length>10)
		{
			alert("Invalid mobile number.")
			return false;
		}
		if(document.form1.email.value=="")
		{
			alert("Please enter member's Email.");
			return false;
		}
		if(document.form1.add.value=="")
		{
			alert("Please enter member's Address.");
			return false;
		}
		
		
		return true;
	}	
			
</script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
</head>
<body bgcolor=#00FF99>

<form method="post"  action="<?php $_PHP_SELF ?>" name="form1"  id="form1" onSubmit="return validates()">
  
  <center><font color=blue size=5><U><b>Update Your Profile</b> </U></font></center>
  <br></br>
  <table width="700" border="0" align="center">
    <tr>
      <td width="163"><div align="right"><font color=blue size=3 color="red">Name :</font></div></td>
      <td width="358"><label>
        <input name="name" type="text">
      </label></td>
    </tr>
    <tr>
      <td><div align=right><font color=blue size=3 color=red>College Name :</font> </div></td>
      <td><label>
        <select name="college_name">
          <option selected="selected">DR. B. C. ROY ENGINEERING COLLEGE</option>
          <option>BENGAL COLLEGE OF ENGINEERING AND TECHNOLOGY</option>
          <option>OTHER</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><div align="right"><font color=blue size=3 color=red>Department :</font></div></td>
      <td><label>
        <select name="dept">
          <option selected="selected">C.S.E.</option>
          <option>E.C.E</option>
          <option>E.E</option>
          <option>E.I.E.</option>
          <option>I.T.</option>
          <option>M.E.</option>
          <option>C.E.</option>
          <option>OTHER</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><div align="right"><font color=blue size=3 color=red>Username :</font></div></td>
      <td><label>
        <input type="text" name="username" >
      </label></td>
    </tr>
    <tr>
      <td><div align="right"><font color=blue size=3 color=red>Mobile No. :</font></div></td>
      <td><label>
        <input type="text" name="mob_no">
      </label></td>
    </tr>
    <tr>
      <td><div align="right"><font color=blue size=3 color=red>Email :</font></div></td>
      <td><label>
        <input type="email" name="email">
      </label></td>
    </tr>
    <tr>
      <td><div align="right"><font color=blue size=3 color=red>Address :</font></div></td>
      <td><label>
        <textarea name="add" style="resize:none" rows=3 cols=20 maxlength=100></textarea>
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
          <input type="submit" name="Submit" value="Update" />
          </div>
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>