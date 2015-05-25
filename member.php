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
			 
	</div>
	
	<div id="content-wrap">
	 
		
		<!--Main Content-->
		<div id="content">
		
		  <div id="breadcrumb"></div>
		  
				<?php
				session_start();

				//if login successful
				if(isseT ($_SESSION['username'])){

				echo "<br><h2>Welcome, ".$_SESSION['username']."!</h2><br> ";
				
				$page='memberhome.php' ;
				header('Location: '.$page);
				}
				
				else{
				die("<h1><font color='red'>You must be logged in!</font></h1></br></br></br></br></br>");
				}
				?>
		  
		  	<table border="0" cellpadding="0" cellspacing="0" width="900" height="200">
				<tr>
					<td><a href=""><img border="0" src="css/images/bannerani.gif" alt="Banner" /></a></td>
					
				</tr>
				
				<tr>
				<td><h2><u>Online Grocery Shopping Delivered to Your Home and Office!</u></h2></td>
				</tr>
				
			</table>
			</br>
			
			<table border="0" cellpadding="0" cellspacing="0" width='910' height='290' >
			<tr> 
			 
			<td width='450' height='140'><a href="groc.php?type=Fresh"><img border="0" width='450' height='140' src="css/images/vege.gif" alt="" align='center' /></a></td>
			 
			<td width='450' height='140'><a href="groc.php?type=Snacks"><img border="0" width='450' height='140' src="css/images/icecr.gif" alt=""  /></a></td>
			 
			 
			</tr>
			</table>
		  
		  
		 
			</div>
			
			
			
			
			<div id="footer">
			 
			</div>
			
		
		
		 
		
	
	
</div>
</body>
</html>