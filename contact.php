<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <?php session_start(); ?>
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

		  <div id="breadcrumb"></div>
		 
		  	<table border="0" cellpadding="0" cellspacing="0" width="900" height="200">
				<tr>
				 <td><img border="0" src="css/images/red-banner2.gif" alt="Banner" /></td>
					
				</tr>
				
				<tr>
				<td><h2><u>Contact Us</u></h2>
				<h4>For more information or enquiries, please contact us at 68778989.
				Alternatively, you can send a note or feedback to us by using the form below.</h4>
		 
				<form name='feedback' method='post' action="contact2.php" class="f-wrap-1" onSubmit='return checkform()'>
			  
			  <fieldset>
			    <h3>Customer Feedback Form </h3>
				 
				
				 
			     
			    <label for="name"><b> Name:</b>
			      <input id="name" name="name" type="text" class="f-name" tabindex="2" />
			      <br />
		        </label>
				
				<label for="contact"><b>Contact:</b>
			      <input id="contact" name="contact" type="text" class="f-name" tabindex="2" maxlength='8'/> 
		        </label>
				
				<label for="comments"><b>Comments:</b>
					<textarea name="comments" cols="40" rows="5"></textarea>
			      
			      <br />
		        </label>
				 
			 
		 
                
                 
				
				 
				 				 				 			 
		     	<input type="hidden" name="formsubmitted" value="TRUE" />
                
                
			    <div class="f-submit-wrap">
			      <input type="submit" id="sub" value="Submit" class="f-submit" tabindex="12" />
				  <input type="reset" value="Clear" class="f-submit" tabindex="12" />
			      <br />
		        </div>
		      </fieldset>
		  </form>
			
			 
				
				</td>
				 
				</tr>
				
			</table>
			<br>
			
			 
				
			 

		  
		  
			<!--FOOTER-->
			<div id="footer">
			
			</div>
			
		</div>
		
		<div id="poweredby"></div>
		
	</div>
	
</div>
</body>
</html>