<?php 
session_start(); 
?> 
<?php include("config.php"); ?>
<?php include("ACommonMenu.php"); ?>
<?php 
	if(isset($_POST['Submit']))
	{
		$date=$_POST['date'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$amt_pd=$_POST['amt_pd'];
		$r_amt=$_POST['r_amt'];
		
		
		$query1="insert into cook_account (date,month,year,amt_pd,r_amt) values('$date','$month','$year','$amt_pd','$r_amt')";		
	$res=mysql_query($query1);
	if(! $res )
	{
	
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>OOPs! Transaction Failed.</center></font>';
	 exit;
	}
	else
	{
	 echo '<body bgcolor=#00ff99><font size=10 color=blue><br><br><br><center>Transaction Sucessfully Completed.<br><br><center><table border="1" bordercolor="brown"><tr><td><font color=blue>Click here to View </font><a href="ViewCookAccount.php"><font color=red>Cook`s Account.</font></a></td></tr></table></center></font>';
	exit;
	}
}

?>












<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script language="javascript" type="text/javascript" src="calender.js"></script>
<link href="calender.css" rel="stylesheet" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style3 {
	font-size: 36px;
	font-weight: bold;
	color: #0000FF;
}
.style5 {font-size: 16px; color: #FF0000; }
body {
	background-color: #00FF99;
}
-->
</style>
</head>

<script type="text/javascript" language="javascript">
	function validates()
	{
		if(document.form1.date.value=="")
		{
			alert("Please Select the Date of Payment.");
			return false;
		}
		if(document.form1.month.selectedIndex=="")
		{
			alert("Please Select the Month.");
			return false;
		}
		if(document.form1.year.selectedIndex=="")
		{
			alert("Please Select the Year.");
			return false;
		}
		if(document.form1.amt_pd.value=="")
		{
			alert("Please Enter the Amount to be Paid.");
			return false;
		}
		if(document.form1.r_amt.value=="")
		{
			alert("Please Enter the Remaining Amount");
			return false;
		}
		return true;
	}
</script>
<body>

<form id="form1" name="form1" method="post" action="<?php $_PHP_SELF ?>" onSubmit="return validates()">
  <font size="5" color="blue"><center><u><b>Payment Form for Cook </b></u></center></font><br>
  <table width="600" border="0" align="center">
    <tr>
      
    </tr>
    <tr>
      <td><div align="right" class="style5">Date of Payment : </div></td>
      <td align="left"><label>
        <input type="text" name="date" readonly><a href="#" onClick="setYears(1900, 2300);
        showCalender(this, 'date');">
        <img src="calender.png"></a>
      </label></td>
    </tr>
    <tr>
      <td width="250"><div align="right" class="style5">Payment for the Month : </div></td>
      <td><label>
        <div align="left">
          <select name="month">
            <option selected="selected" value="">Select</option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
          </select>
        </div>
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style5">Year : </div></td>
      <td><label>
        <div align="left">
          <select name="year">
            <option selected="selected" value="">Select</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
          </select>
        </div>
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style5">Amount Paid : </div></td>
      <td><label>
        <div align="left">
          <input type="text" name="amt_pd" />
        </div>
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style5">Remaining Amount : </div></td>
      <td><label>
        <div align="left">
          <input type="text" name="r_amt" />
        </div>
      </label></td>
    </tr>
    <tr>
      <td><label>
        <div align="right">
          <input type="Reset" name="reset" value="Reset" />
        </div>
      </label></td>
      <td><label>
        <div align="left">
          <input type="submit" name="Submit" value="Pay" />
        </div>
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>

<!-- Calender Script  --> 

    <table id="calenderTable" border=5>
        <tbody id="calenderTableHead">
          <tr>
            <td colspan="4">
	          <select onChange="showCalenderBody(createCalender(document.getElementById('selectYear').value,
	           this.selectedIndex, false));" id="selectMonth">
	              <option value="0">Jan</option>
	              <option value="1">Feb</option>
	              <option value="2">Mar</option>
	              <option value="3">Apr</option>
	              <option value="4">May</option>
	              <option value="5">Jun</option>
	              <option value="6">Jul</option>
	              <option value="7">Aug</option>
	              <option value="8">Sep</option>
	              <option value="9">Oct</option>
	              <option value="10">Nov</option>
	              <option value="11">Dec</option>
	          </select>
            </td>
            <td colspan="2">
			    <select onChange="showCalenderBody(createCalender(this.value, 
				document.getElementById('selectMonth').selectedIndex, false));" id="selectYear">
				</select>
			</td>
            <td>
			    <a href="#" onClick="closeCalender();"><font color="#003333" size="+1">X</font></a>
			</td>
		  </tr>
       </tbody>
       <tbody id="calenderTableDays">
         <tr style="">
           <td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td>
         </tr>
       </tbody>
       <tbody id="calender"></tbody>
    </table>

<!-- End Calender Script  --> 

<center><table border="1" bordercolor="brown"><tr><td><font color=blue>Click here to View </font><a href="ViewCookAccount.php"><font color=red>Cook's Account.</font></a></td></tr></table></center>
</body>
</html>