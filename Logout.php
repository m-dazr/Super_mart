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
		  
		  	<table border="0" cellpadding="0" cellspacing="0" width="900" height="200">
				<tr>
					<td><a href="register.php"><img border="0" src="css/images/bannerani.gif" alt="Banner" /></a></td>
					
				</tr>
				
				<tr>
				<td><h2><u>Online Grocery Shopping Delivered to Your Home and Office!</u></h2></td>
				</tr>
				
			</table>
		  
		  <?php
			session_start();

			session_destroy();

			echo "<br><h2>You've successfully logged out. <a href='index.php'>Click here </a>to return<br></h2>";
 
		?>
 
			</div>
 
		</div>
 
	</div>
	
</div>
</body>
</html>