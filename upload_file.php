
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
		

		  <div id="breadcrumb"> <a href="index.php">Home</a> /  <strong>Upload</strong></div>
		  
			</br>				
			 
			</br>
			<?php
			 session_start();	
			//if login then can submit post
			if(isseT ($_SESSION['username']))

				echo " ";
				

				else
				
				die("<h2>You must be <a href='login.php'>logged in!</a></br>Please <a href = 'register.php'>register</a> an account to post ads or login to an existing account.</br></br></br></br></br></br></h2>"); 
			 
			
			?>
			
			
			
			
			<?php
				if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/pjpeg"))
				&& ($_FILES["file"]["size"] < 2000000))
				  {
				  if ($_FILES["file"]["error"] > 0)
					{
					echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
					}
				  else
					{
					
					echo "<h2>Your ad has been successfully posted. Please check the ads section</h2>";
					
					
					
					//This is the directory where images will be saved 
					$target = "upload/"; 
					$target = $target .time(). basename( $_FILES['file']['name']); 
					
					
					//Get file info
					
					$descr=$_POST['descr']; 
					$price=$_POST['price']; 
					$contact=$_POST['contact']; 
					$pic=($_FILES['file']['name']);
					
					// Connects to your Database 
					mysql_connect("localhost", "root", "") or die(mysql_error()) ; 
					mysql_select_db("supermart") or die(mysql_error()) ; 
					
					//Writes the information to the database 
				 
				  $sql ="INSERT INTO ads (descr, location, price, contact)
				  VALUES ('$descr','$pic','$price','$contact')" ; 
					$result = mysql_query($sql);	
					 
					
					
					?>
					</br> 
					<a  href='buysell.php'>Return</br></br></br></br></br></a></br>
					 
					
					
				<?php
					if (file_exists("upload/" . $_FILES["file"]["name"]))
					  {
					  
					  }
					else
					  {
					  move_uploaded_file($_FILES["file"]["tmp_name"],
					  "upload/" . $_FILES["file"]["name"]);
					 
					  
					 
					  }
					}
				  }
				else
				  {
				  echo "<script language='javascript'>";
											 echo "alert('Invalid file. Files must not exceed 2MB and must be in gif, jpeg, pjpeg format.');";
											 echo "window.location='buysell.php';";
											 echo "</script>";
				  
				  }
				 
				?>	 
				 
		</div>
 
	</div>
	
</div>
</body>
</html>