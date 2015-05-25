<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <?php error_reporting(0) ?> 
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

<?php

include 'global.php';
session_start();

$session_username = $_SESSION['username'];

 
if ($_POST['loginow'] == 'TRUE') 
{
//$username = addslashes(strip_tags($_POST['username']));
//$password = addslashes(strip_tags($_POST['password']));

$username = $_POST['username'];
$password = $_POST['password'];

//log in
$login = mysql_query("SELECT * FROM users WHERE Usname='$username'");
if (mysql_num_rows($login)==0)
	echo "<h1><u>No such user exists.</u></h1></br></br></br>";
	
else
{
	$login_row = mysql_fetch_assoc($login) ;
	
	//get password from db
	$password_db = $login_row['Pword'];
	
	//encrypt entered form password
	$password = md5($password);
	
	//check if passwords match
	if ($password!=$password_db)
		echo "<h2><font color='red'>Incorrect Password<br>Please try again.</font></h2></br></br></br></br></br></br>";
		
	else
	{
	//check if user account is activated
	$active = $login_row['Status'];
	$email = $login_row['Email'];
	
	if ($active=='verify')
		echo "</br></br><h2>You have not activated your account.</br>Please check your email ($email).</h2></br></br></br></br></br>";
	
	else	
	{
		$_SESSION['username']=$username;
		
		//refresh to member page
		header("Location:memberhome.php"); 
	}
}


}
}


?>

			<!--FOOTER-->
			<div id="footer">
			 
			</div>
			
		</div>
		
		<div id="poweredby"></div>
		
	</div>
	
</div>
</body>
</html>