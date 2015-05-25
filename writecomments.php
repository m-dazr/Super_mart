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

		  <div id="breadcrumb"> <a href="index.php">Home</a> /  <strong>Buy,Sell</strong></div>
		  
			</br>				
			 
			</br>
				<font  size="2" face="verdana">
				
				<?php 

					session_start();
					// Connect to server and select database. 
						$con = mysql_connect("localhost","root","");	
						if (!$con)
						{
							die('Could not connect:'.mysql_error());
						}
					 
						mysql_select_db("supermart",$con);


					$comments =$_POST['comments'];
		 

					$adsid = $_POST['adsid'];
		 

					$sql = "INSERT into tablecomments (adsid, comments, username) VALUES
					('$adsid','$comments','".$_SESSION['username']."')";

					$result= mysql_query($sql);
 


					if ($result)
					{
					 
					echo "Your comment has been added.</br>Go <a href='bsdetail.php?id=$adsid'> back </a></br></br></br></br>
					</p></br></br></br></br>";	
					 

					 
					}
					else{

					}

					//close connection
					mysql_close($con);

					?> 
				 
		</div>
		
		<div id="poweredby"></div>
		
	</div>
	
</div>
</body>
</html>

