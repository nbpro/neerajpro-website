
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<?php include "config.php"?>
<?php 
	if(isset($_POST['Submit2']))
	{
		$name=$_POST['name'];
		$date=$_POST['date'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$amt_pd=$_POST['amt_pd'];
		$r_amt=$_POST['r_amt'];
		$balance=mysql_fetch_row(mysql_query("select balance from mess_account where id in(select max(id) from mess_account)"));
		$balance=$balance[0]+$amt_pd;
		
		
		$query1="insert into `member_account`(`name`,`date`,`month`,`year`,`amt_pd`,`r_amt`) values('$name','$date','$month','$year','$amt_pd','$r_amt')";
		$query2="insert into `mess_account`(`date`,`items`,`expense`,`balance`,`depositor`,`deposite`) values('$date','-','0','$balance','$name','$amt_pd')";
		
	$res=mysql_query($query1);
	mysql_query($query2);
	if(! $res )
	{
	
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>OOPs! Transaction Failed.</center></font>';
	 exit;
	}
	else
	{
	 echo '<body bgcolor=#00ff99><font size=10 color=blue><br><br><br><center>Congratulations! Transaction Sucessfully Completed.<br>Current Mess Account Balance is <font color=red><u>Rs.'. $balance .'</u>/-</font></center></font>';
	exit;
	}
}

?>















<html>

<script type="text/javascript" language="javascript">
	function validates1()
	{
		if(document.form2.name.selectedIndex=="")
		{
			alert("Please Select Member to Pay.");
			return false;
		}
		if(document.form2.date.value=="")
		{
			alert("Please Select Date of Deposite.");
			return false;
		}
		if(document.form2.month.value=="")
		{
			alert("Please Enter the Month for Which Payment is to be Made.");
			return false;
		}
		if(document.form2.year.value=="")
		{
			alert("Please Select Year to Pay.");
			return false;
		}
		if(document.form2.amt_pd.value=="")
		{
			alert("Please Enter the Amount paid.");
			return false;
		}
		var numericExpression = /^[0-9]+$/;
		if(!document.form2.amt_pd.value.match(numericExpression))
		{
			alert("Please Enter Only Numbers.")
			return false;
		}
		if(document.form2.r_amt.value=="")
		{
			alert("Please Enter the Remaining Amount.\nIn Case no Remaining Amount Enter 0.");
			return false;
		}
		if(!document.form2.r_amt.value.match(numericExpression))
		{
			alert("Please Enter Only Numbers.")
			return false;
		}
		
		
		
		return true;
	}	
			
</script>


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

<body>

<form id="form2" name="form2" method="post" action="<?php $_PHP_SELF ?>" onSubmit="return validates1()">
  <font size="5" color="blue"><center><u><b>Payment Form </b></u></center></font>
  <table width="600" border="0" align="center">
    <tr>
      <td width="140"><div align="right" class="style5">Select Member : </div></td>
      <td width="180"><label><select name="name">
	<option selected="selected" value="">Select
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
            
          </select>
        </td>
    </tr>
    <tr>
      <td><div align="right" class="style5">Date of Deposite : </div></td>
      <td align="left"><label>
        <input type="text" name="date" readonly><a href="#" onClick="setYears(1900, 2300);
        showCalender(this, 'date');">
        <img src="calender.png"></a>
      </label></td>
    </tr>
    <tr>
      <td width="180"><div align="right" class="style5">Doposite for the Month : </div></td>
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
          <input type="reset" name="reset" value="Reset" />
        </div>
      </label></td>
      <td><label>
        <div align="left">
          <input type="submit" name="Submit2" value="Pay" >
        </div>
      </label></td>
    </tr>
  </table>
  <hr color=blue size=5>

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

</body>
</html>