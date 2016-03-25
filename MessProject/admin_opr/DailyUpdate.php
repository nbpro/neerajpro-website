<?php 
session_start(); 
?> 
<?php include("config.php"); ?>
<?php include("ACommonMenu.php"); ?>
<?php 
	if(isset($_POST['Submit']))
	{
		$date=$_POST['date'];
		$items=$_POST['items'];
		$totalexp=$_POST['totalexp'];
		$balance=mysql_fetch_row(mysql_query("select balance from mess_account where id in(select max(id) from mess_account)"));
		$balance=$balance[0]-$totalexp;
		
		$query="insert into `mess_account`(`date`,`items`,`expense`,`balance`,`depositor`,`deposite`) values('$date','$items','$totalexp','$balance','-','0')";
		$totalborrow=mysql_fetch_row(mysql_query('SELECT sum(amt) FROM borrower'));	
		$res=mysql_query($query);
		
		$cash=$balance-$totalborrow[0];
	if(! $res )
	{ 
  	 echo '<body bgcolor=#00ff99><font size=10 color=red><br><br><br><center>OOPs!Something Went Wrong.</center></font>';
	 exit;
	}
	else
	{
	 echo '<body bgcolor=#00ff99><font size=6 color=blue><br><br><br><center>Mess Account Updated Successfully!<br>Current Mess Account Balance is <font color=red><u>Rs.'. $balance .'</u>/-</font></center></font>';
	  echo '<br><font size=5 color=blue><center>Total Borrowed Money From Mess Account is <font color=red><u>Rs. '. $totalborrow[0] .'/-</u></font></center></font>'; 
	   echo '<br><font size=5 color=blue><center>Total Cash In Mess Account is <font color=red><u>Rs. '. $cash .'/-</u></font></center></font>'; 
	exit;
	}
}

?>








<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<script type="text/javascript" language="javascript">
	function validates()
	{
		document.form1.Submit.value='One Moment Please...';
		
		
		
		if(document.form1.date.value=="")
		{
			alert("Please Select Today's Date.");
			return false;
		}
		if(document.form1.items.value=="")
		{
			alert("Please Enter list of Items.\nIncase no Item Purchased write-No Items Bougth.");
			return false;
		}
		if(document.form1.totalexp.value=="")
		{
			alert("Please Enter Total Amount Expensed.");
			return false;
		}
		var numericExpression = /^[0-9]+$/;
		if(!document.form1.totalexp.value.match(numericExpression))
		{
			alert("Please Enter Only numbers in Amount Expense Field.")
			return false;
		}
			
			return true;
	}
			
</script>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<style type="text/css">
<!--
body,td,th {
	color: #FF0000;
}
body {
	background-color: #00FF99;
}
.style2 {font-weight: bold}
.style3 {color: #0033FF}
-->
</style></head>
<script language="javascript" type="text/javascript" src="calender.js"></script>
<link href="calender.css" rel="stylesheet" type="text/css">
<body>



<form action="<?php $_PHP_SELF ?>" method="post" name="form1" class="style2" id="form1" onSubmit="return validates()">
  
  <h1 align="center" ><font color=blue size=5><U>Record of Daily Expenses</U></font></h1><br>
  <table width="537" border="0" align="center">
    <tr>
      <td width="163"><div align="center">Date:</div></td>
      <td width="358"><label>
        <input type="text" name="date" readonly size="32"><a href="#" onClick="setYears(1900, 2300);
        showCalender(this, 'date');">
        <img src="calender.png"></a>
      </label></td>      
    </tr>
     <tr>
      <td><div align="center">List of Items purchased: </div></td>
      <td><label>
        <textarea name="items" style="resize:none" rows=6 cols=30 maxlength=1000></textarea>
      </label></td>
    </tr>
   
    <tr>
      <td><div align="center">Total Expense:</div></td>
      <td><label>
        <input type="text" name="totalexp" size="32" />
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
          <input type="submit" name="Submit" value="Update"><br>
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
<h1 align="center" ><font color=RED size=3><U>CALCULATOR</U></font></h1><br>
<?php include("calculator.html"); ?>
</body>

</html>