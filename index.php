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
		
		<!--Main Content-->
		<div id="content">

		  <div id="breadcrumb"></div>
		 
		  	<table border="0" cellpadding="0" cellspacing="0" width="900" height="200">
				<tr><td>
					<!--td><a href="register.php"><img border="0" src="css/images/bannerani.gif" alt="Banner" /></a></td-->
					 <?php
					include 'slide.php';
		 
					?>
				</td>	
				</tr>
				
				<tr>
				<td><h2><u>Online Grocery Shopping Delivered to Your Home and Office!</u></h2></td>
				</tr>
				
			</table>
			<br>
			
			 
				
			<table border="1" cellpadding="0" cellspacing="0" width='700' height='290' >
			<tr> 
			<td width='400' height='140'><a href="products.php"><img border="0" width='350' height='140' src="css/images/online1.gif" alt=""  /></a></td>
			<td width='400' height='140'><a href="groc.php?type=Fresh"><img border="0" width='350' height='140' src="css/images/vege.gif" alt="" align='center' /></a></td>
			</tr>
			<br>
			<tr>
			<td width='400' height='140'><a href="products.php"><img border="0" width='350' height='140' src="css/images/prods.gif" alt=""  /></a></td>
			<td width='400' height='140'><a href="register.php"><img border="0" width='350' height='140' src="css/images/delivery.gif" alt=""  /></a></td>
			 
			</tr>
			</table>

		  
		  
			<!--FOOTER-->
			<div id="footer">
			 
			</div>
			
		</div>
		
		<div id="poweredby"></div>
		
	</div>
	
</div>
</body>
</html>