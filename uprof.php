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
		 include 'headmem.php';
		 
		 ?>
	
	<div id="content-wrap">
		<!--Left Side Menu-->	
		  <?php
		 include 'leftmem.php';
		 
		 ?>
		
		<!--Main Content-->
		<div id="content">

		  <div id="breadcrumb"></div>
		 
		   
			 
		 <h2>
				 <?php
		  
				  session_start();  
				  $username = $_SESSION['username'];

					//if login successful
					if(isseT ($_SESSION['username']))

						echo "<br>Welcome, ".$_SESSION['username']."!<p>";
						

						else
						die("You must be <a href='login.php'>logged in!</a>"); 
				?>
				
			 
			</h2>	
			<?php
			// connect
			mysql_connect("localhost", "root", "");
			mysql_select_db("supermart");
			
			//$fname = $_POST['fname'];
			//$lname = $_POST['lname'];
			$email = $_POST['email'];
			$cont1 = $_POST['contact'];
			$cont2 = $_POST['contalt'];
			$block = $_POST['block'];
			$street = $_POST['streetname'];
			$unitno = $_POST['unitno'];
			$postal = $_POST['postal'];
			
			$password1 = $_POST['pword1'];
			$passwordnew = $_POST['pword2'];
			
			//encrypt md5 password
			$password = md5($passwordnew);
		
			
			// update data in mysql database 
			
			
			$sql="UPDATE users SET  Email='$email', Mainno='$cont1', Altno='$cont2', Blkno='$block', Streetname='$street', Unitno='$unitno', Postal='$postal' WHERE Usname = '$username'";

			$sql2= "UPDATE users SET Pword='$password' WHERE PWord !='$password1'";
			$result=mysql_query($sql);
			$result2=mysql_query($sql2);
			
			// if successfully updated. 
				if($result&&$result2){
				echo "</br></br></br>";
				echo "<h2>Your profile has been successfully updated</h2>";
				echo "<BR>";
				echo "<a href='memberhome.php'>Return to Home</a>";
				echo "</br></br></br>";
							}

				else {
				echo "ERROR";
				}

			 	?>

		  </div>

	</div>
	
	<!--FOOTER-->
			<div id="footer">
			 
		 
			</div>

	
</div>
</body>
</html>