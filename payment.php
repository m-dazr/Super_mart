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
				<td><h1><u>3. Payment</u></h1></td>
				</tr>
				
			</table>
			
			<?php
			
				
			if ($_POST['formsubmitted'] == 'TRUE') 	
			
			{
			 
			$deldate = $_POST['deldate']; 
			$deltime = $_POST['deltime']; 
			
			
			
			//connection
			$con = mysql_connect("localhost","root","");	
 
			mysql_select_db("supermart",$con);
		
			$sql="INSERT INTO orders (deldate, deltime) VALUES
			('$deldate', '$deltime')";
			
			$result=mysql_query($sql);
			
			//if successfully stored, then display
			if($result){
			
			echo "<h3>You have chosen to have your items delivered on <u>$deldate</u> at <u>$deltime</u>.</br></h3>";
			
				}
			
			
			}

				
				else{echo "Data not entered";}
				
			

				 
			
				mysql_close($con) 
			
			//
			
			?>
			
			
			
			
			<br>
			<?php require 'cart.php'; ?>
			 <?php
            cart2();	 
        ?>
			<br></br></br>	
			 
			  
		  </div>
		  
			<!--FOOTER-->
			<div id="footer">
			 
			</div>
			
		
		 
	</div>
	
</div>
</body>
</html>