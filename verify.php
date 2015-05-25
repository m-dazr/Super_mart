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
        
		 
	</div>
	
	<div id="content-wrap">
	
		<!--Left Side Menu-->	
		  <?php
		 include 'leftmenun.php';
		 
		 ?>
		
		<!--Main Content-->
		<div id="content">
		
		  <div id="breadcrumb">
			 </div>
		  
		  
		  
		  <h2>&nbsp;</h2>
		  
		  
		  
		  
		  
			
<?php
 include 'global.php';
 
if ($_POST['formsubmitted'] == 'TRUE') 
 
{
 

    $check_username = mysql_real_escape_string($_POST['username']); 
	$query = mysql_query("SELECT Usname FROM users WHERE Usname='".$check_username."'");

	if(mysql_num_rows($query)!= 0)
	{
	echo "<h2>Username already exists. Please choose a different username.<br><a href='Register.php'>Try again</a></h2>";
	}
	else
	{


 
$activationKey = rand (11111111,999999999);
 
$username = (isset($_POST['username']) ? strip_tags($_POST['username']) : ''); 		
$password =  (isset($_POST['password']) ?  strip_tags($_POST['password']) : ''); 	
$emailaddress = (isset($_POST['emailaddress']) ? strip_tags($_POST['emailaddress']) : '');  

$blkno = (isset($_POST['blkno']) ? strip_tags($_POST['blkno']) : ''); 		
$streetname = (isset($_POST['streetname']) ? strip_tags($_POST['streetname']) : ''); 		
$unitno = (isset($_POST['unitno']) ? strip_tags($_POST['unitno']) : ''); 		
$postal = (isset($_POST['postal']) ? strip_tags($_POST['postal']) : ''); 		

$mainno = (isset($_POST['mainno']) ? strip_tags($_POST['mainno']) : ''); 		
$altno = (isset($_POST['altno']) ? strip_tags($_POST['altno']) : ''); 		


//encrypt md5 password
$password = md5($password);


$sql="INSERT INTO users (Usname, Pword, Email, Blkno, Streetname, Unitno, Postal, Mainno, Altno, Status, Actkey) VALUES ('$username', '$password', '$emailaddress', '$blkno','$streetname','$unitno','$postal','$mainno','$altno', 'verify','$activationKey')";

if (!mysql_query($sql))

  {

  die('Error: ' . mysql_error());

  }


//if successfully entered into db then send email
if ($sql)
{
echo "<h2>An email has been sent to $_POST[emailaddress] with an activation key.</br> Please check your mail to activate your account\n.</h2><br><br><br><br>";
echo "Go <a href='index.php'>back</a><br><br><br><br> ";
require_once('class.phpmailer.php'); 

{
//include ('mailer.php');		
$local = $_SERVER['SERVER_ADDR'];
$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	//$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465; 
	$mail->Username = 'moostafand@gmail.com';  
	$mail->Password = 'bypassword';         


	//compose the email	
	$mail->From = "moostafand@gmail.com";
	$mail->FromName = "E-Supermart Admin";
	$mail->AddAddress($_POST['emailaddress']);
	$mail->Subject = "Your Activation Link \r\n";
	$mail->Body = " Dear $username,\n\n
					Thank you for registering at E-Supermart.\n
					Please click on this link to activate your account\r\n
					http://$local/super-mart/activate.php?passkey=$activationKey";
					
	
	//send mail
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}


}
}
}

?>
			<div id="footer">
			<br><br><br><br><br>
			</div>
			
			
			<div id="footer">
			<br><br><br><br><br>
			</div>
		
		
		
	</div>
	
</div>
</body>
</html>


