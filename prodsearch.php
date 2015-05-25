<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <?php session_start();?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>E-Supermart</title>
<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="css/ie6_or_less.css" />
<![endif]-->
<script type="text/javascript" src="js/common.js"></script>
<script>
  function checkform(){

  if ((document.search.k.value.length < 1)){
     alert("Please enter a keyword to search")
  return false}
  }
  </script>

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

		  <div id="breadcrumb"> <a href="index.php">Home</a> /  <strong>Search</strong></div>
		  
			</br>				
			 
			</br>
				<font  size="2" face="verdana">
				<center>
		
				<h2>Product Search</h2>
				<form action='./search.php' method='get' name='search'  onSubmit='return checkform(this)'>
					<input type='text' name='k' size='70' /> 
					<input type='submit' value='Search'>
				</form>
				</center>
				<p>
			</br></br>
			</br></br></br>
				
				
				
				 
		</div>
		
		<div id="poweredby"></div>
		
	</div>
	
</div>
</body>
</html>