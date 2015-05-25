<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>E-Supermart</title>
<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="css/ie6_or_less.css" />
<![endif]-->

<script type="text/javascript" src="js/common.js"></script>
<script src="date/datetimepicker_css.js"></script>

</head>


<body id="type-b">

	<div id="wrap">
	<div id="header">
		<div id="site-name">
		 <img border="0" src="css/images/logo.gif" alt="Banner" />
		
		 
		</div>
		<div id="search"></div>
        
        <!--Top Header Menu-->
		 <?php
		 include 'headmem.php';
		 
		 ?>
	
	<div id="content-wrap">
		<!--Left Side Menu-->	
		  <?php
		 include 'leftmem.php';
		 
		 ?>
		
		<!--Main Content-->
		<div id="content">

		  <div id="breadcrumb"></div>
		  <?php
				session_start(); 

				//if login successful
				if(isseT ($_SESSION['username'])){

				echo "<br><h2>Welcome, ".$_SESSION['username']."!</h2><br> ";
				
				 
				}
				
				else
				 
				die("<center></br></br></br></br></br><h2>You must be <a href='login.php'>logged in!</a></h2></br></br></br></br></br></br><p><p><p></center>"); 
				
	?>
		 
		  	<table border="0" cellpadding="0" cellspacing="0" width="900" height="200">
				<tr>
					<td><img border="0" src="css/images/checkout.gif" alt="Banner" /></td>
					
				</tr>
				
				<tr>
				<td><h1><u>2. Choose Delivery Date and Time</u></h1></td>
				</tr>
				
			</table>
			<br>
			 
		<!-------CHoose Dates from calendar-----div3_example_result-->
		<h3>Select delivery date and time</h3>
    
    Select a delivery date from the calendar
    <form name="date" method="post" action ='payment.php'>
	
	<input type="Text" name="deldate" id="deldate" maxlength="25" size="25">
    <img src="date/images2/cal.gif" alt="" onclick="javascript:NewCssCal(&#39;deldate&#39;,&#39;ddMMMyyyy&#39;,&#39;&#39;,&#39;&#39;,&#39;&#39;,&#39;&#39;,&#39;future&#39;)" style="cursor:pointer">
		
		
		
		</br></br>
		<table>
		<tr>
		<td>Delivery Times
		<td>
		
		<select name="deltime">
		<option value="9AM to 12PM">9 AM - 12 PM</option>
		<option value="12PM to 3PM">12 PM - 3 PM</option>
		<option value="3PM to 6PM">3 PM - 6 PM</option>
		<option value="6PM to 8PM">6 PM - 8 PM</option>
		
		
		 
		</td>
		</td>
		</tr>
		</table>
		</br>
		<input type="hidden" name="formsubmitted" value="TRUE" />
		<input type='image' src="css/images/nextbtn.gif" name='submit' value='Next'>
 
		
		
		
		</form>
	 
		
			<br></br></br>	
		
		  </div>
		  
			<!--FOOTER-->
			<div id="footer">
			 
			</div>
			
		
		
		<div id="poweredby"></div>
		
	</div>
	
</div>
</body>
</html>