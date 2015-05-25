<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
	session_start();
?>
 
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


<body id="type-b" >


	<div id="wrap">
	<div id="header">
		<div id="site-name">
		 <img border="0" src="css/images/logo.gif" alt="Banner" />
	   
		 
		</div>
		<div id="search"></div>
        
         <!--Top Header Menu-->
		 <?php

		//if user is login display usermenu, else non-user menu
		if(isseT ($_SESSION['username'])){
			include 'headmem.php';
			}
	 
		else{
		 include 'headern.php';
		 }
		 ?>
	
	<div id="content-wrap">
		<!--Left Side Menu-->	
		  <?php
		//if user is login display usermenu, else non-user menu
		if(isseT ($_SESSION['username'])){
			include 'leftmem.php';
			}
	 
		else{
		 include 'leftmenun.php';
		 }
		 ?>
		<!--Main Content-->
		<div id="content">

		  <div id="breadcrumb">
		  <a href="index.php">Home</a> / <a href="products.php">Products</a> 
		  </div>
		 
		  	<table border="0" cellpadding="0" cellspacing="0" width="900" height="200">
				<tr>
					<td><a href=""><img border="0" src="css/images/bannerani.gif" alt="Banner" /></a></td>
					
				</tr>
				
				 
				
			</table>
			<br>
			
			 
				
			<table border="0" cellpadding="0" cellspacing="0" width='800' height='290' >
			<tr align='center'> 
			<td  width='200' height='200'><a href="groc.php?type=Grocery"><img border='0' src= "css/images/dryfood.gif" alt='Groceries' /></a></td>
			
			<td  width='200' height='200'><a href="groc.php?type=Beverages"><img border='0' src="css/images/drinks.gif" alt="Beverages" /></a></td> 
			<td  width='200' height='200'><a href="groc.php?type=Snacks"><img border='0' src="css/images/biscuits.gif" alt="Snacks" /></a></td> 
			</tr>
			
			<tr><td width='20' height='20'></td></tr>
			
			<tr align='center'> 
			<td  width='200' height='200' border='1'><a href="groc.php?type=Fresh"><img   src="css/images/seafood.gif" alt=""/></a></td> 
			
			<td  width='200' height='200' border='1'><a href="groc.php?type=Household"><img   src="css/images/household.gif" alt=""/></a></td>
			<td  width='200' height='200' border='1'><a href="groc.php?type=Others"><img   src="css/images/misc.gif" alt=""/></a></td>
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