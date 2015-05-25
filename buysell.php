<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <?php
 session_start();
error_reporting(0); 
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
		 

		 
			 
		<form action="upload_file.php" method="POST" class="f-wrap-1" enctype="multipart/form-data">
			  <fieldset>
			    <h3>Submit Ad</h3>
				
				Images must not exceed 2MB and must be in gif, jpeg, pjpeg format.
			    <label for="file"><b><span class="req"></span>Filename:</b>
			      <input id="file" name="file" type="file" class="f-name" tabindex="1" />
			      <br />
		        </label>
 
				
				<label for="descr"><b><span class="req"></span>Description:</b>
			      <input id="descr" name="descr" type="text" class="f-name" tabindex="2" />
			      <br />
		        </label>
				
				 <label for="price"><b><span class="req"></span>Price:</b>
			      <input id="price" name="price" type="text" class="f-name" tabindex="3" />
			      <br />
		        </label>
				
				 <label for="contact"><b><span class="req"></span>Contact Info:</b>
			      <input id="contact" name="contact" type="text" class="f-name" maxlength="8" tabindex="4" />
			      <br />
		        </label>
				 <br />
			    
			      <input type="submit" name="submit" value="Submit" class="f-submit" tabindex="12" />
			      
				 
		        
		       	</fieldset>
		  </form>
				 
				<p>
			</br></br>
		 	
			<?php
		//DISPLAY ALL ADS
		// Connect to server and select database. 
	$con = mysql_connect("localhost","root","");	
	if (!$con)
	{
		die('Could not connect:'.mysql_error());
	}
 
	mysql_select_db("supermart",$con);

				$sql="Select * FROM ads ORDER BY id DESC ";
				$result = mysql_query($sql);
				
				 
				 
				echo "<table border='1' >
					<tr>
					<th>Product</th>
					<th>Description</th>
					<th></th> 
					 
					</tr>";
			
 
		 
        while($get_row = mysql_fetch_assoc($result)){
		?>
			<tr align='center'>
			
			<td width='100' height='100'>
 			 <!--?php //echo "<img border='0' src=upload/".$_FILES["file"]["name"]."> <br>"; ?-->
			 <?php echo "<img width='100' height='100 'border='0' src=upload/".$get_row['location']."> <br>"; ?>	
			</td>
			
			<td width='450' height='40'>
			<?php echo	$get_row['descr'];	?>
			</td>
 
			
			
			<td width='100' align="center"><a href="bsdetail.php?id=<?php echo $get_row['id']; ?>">Details..</a></td>
		 
			</tr>
			
			<?php
			
			}
			
			?>
			</table>
			
			<?php	
				 
				
				
				 
			 	?>	
				
				 
		</div>
		
		<div id="poweredby"></div>
		
	</div>
	
</div>
</body>
</html>