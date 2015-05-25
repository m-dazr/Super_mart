<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <?php session_start();
 
  
 
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
		 

				<h2>Ads Details</h2>
			 
		 
				 
				<p>
			</br></br>
		 	
			<?php
		//DISPLAY current AD
		// Connect to server and select database. 
	$con = mysql_connect("localhost","root","");	
	if (!$con)
	{
		die('Could not connect:'.mysql_error());
	}
 
	mysql_select_db("supermart",$con);

	// get value of id that sent from address bar
	$adsid=$_GET['id'];
	
	// Retrieve data from database 
$sql="SELECT * FROM ads WHERE id='$adsid'";
$result=mysql_query($sql);

$get_row=mysql_fetch_array($result);
	
?>				 
	<table width="400" border="0" cellspacing="1" cellpadding="0">
 

 
<table border='1' >
					


			<tr align='center'>
			<tr align='center'>
			
					<th>Product</th></tr>
			<tr align='center' width='100' height='100'><td width='200'>
			 <?php echo "<img width='200' height='200 'border='0' src=upload/".$get_row['location']."> <br>"; ?>	
			</td></tr>
			
			
			
			<tr align='center'><th>Description</th></tr>
			<tr align='center' width='150' height='40'><td>
			<?php echo	$get_row['descr'];	?>
			</td></tr>
			
		 
			<tr align='center'><th>Price</th></tr> 				
			<tr align='center' width='150' height='40'><td>
			S$<?php echo	$get_row['price'];	?>
			</td></tr> 
			
			
			<tr align='center'><th>Contact Info</th> 
			<tr align='center' width='150' height='40'><td>
			<?php echo	$get_row['contact'];	?>
			</td></tr> 
				 
			 </table>
			 
			 
		 
			  </br>
			<strong>COMMENTS</strong>
			 </br></br>
			 
			 
			 
			<!----------------COMMENTS SECTION---------------------->
			<?php
			
			
			// Connect to server and select database. 
				
				$con = mysql_connect("localhost","root","");	
				if (!$con)
				{
					die('Could not connect:'.mysql_error());
				}
			 
				mysql_select_db("supermart",$con);
				$sql="Select * FROM tablecomments WHERE adsid='$adsid' ORDER BY time DESC ";
				
				
				 
				
				$result = mysql_query($sql);
				

				echo "<table border='1' >
					<tr align='center'>
					<td></td>
					 
					</tr>";
	 
	 
	 
        while($get_row = mysql_fetch_assoc($result)){
		?>
			<tr align=''>
			 
			<td width='400' height='40'>
			</br>
			<?php echo	$get_row['comments'];	?>
			</br></br></br>
			Comments by : 
			<?php
			echo	$get_row['username'];		
			
			?>
			</br>
			<?php  echo	$get_row['time'];	?>
			</br></br>
		 
			</td>
	 		</tr>
			
			<?php
			
			}
			 
			?>
			</table>
			
			
			
			<!--COMMENTS BOX-->
			
			<?php

		//if user is login display usermenu, else non-user menu
		if(isseT ($_SESSION['username'])){
	
		?>
			 
		    <form method="POST" action="writecomments.php">
			
			<textarea name="comments" rows='3' cols='45'></textarea> 
			</br>
			<input type="hidden" name="userid" value="<?php 
			echo "".$_SESSION['username'].""; 
			?>" />
			<input type="hidden" name="adsid" value="<?php 
			echo "$adsid"; 
			?>" />
			<input type="submit" name="submit" value="submit">
			</form>
        
		<?php
		
				}
	 
		else{
		
		echo "</br></br>";
		 }
		 ?>
 
			
		 
				 
		</div>
		
		<div id="poweredby"></div>
		
	</div>
	
</div>
</body>
</html>