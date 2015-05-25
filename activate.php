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
		 include 'headern.php';
		 ?>
		 
	
	<div id="content-wrap">
	
		<!--Left Side Menu-->	
		  <?php
		 include 'leftmenun.php';
		 
		 ?>
		
		
		<div id="content">
		
		  <div id="breadcrumb">
			<a href="homepage.cfm">Home</a> / <a href="devtodo">Activation</a></div>
		  <h2>&nbsp;</h2>

			<?php

			 include 'global.php';
			  
			$Actkey = $_GET['passkey'];
			if (!$Actkey)

				echo "No code supplied";
				
			else
			{
				$check = mysql_query("SELECT * FROM users WHERE Actkey='$Actkey' AND status ='activated'");
				if (mysql_num_rows($check)==1) 
					echo "<h2>You have already activated your account.</h2>";
					
				else
				{
				$activate = mysql_query("UPDATE users SET status='activated' WHERE Actkey='$Actkey'");
				echo "<h2>Your account has been successfully activated.\n\n You may now login and access your new account!</h2>";
				}
				
			}



			?>


<fieldset>

			
			 
			

			
			
			<div id="footer"></div>
			<div id="footer"></div>
			<div id="footer">
			 
			</div>
		
 
		
	</div>
	
</div>
</body>
</html>