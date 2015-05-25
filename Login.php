<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>E-Supermart</title>
<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />

<script type="text/javascript">

function checkloginform(){
  if (document.loginform.username.value.length < 1){
    alert("Please enter a username")
      return false}

  if (document.loginform.password.value.length < 1){
    alert("Please enter your password.")
  return false}
   
}   


</script>

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
		
		  <div id="breadcrumb">
			<a href="index.php">Home</a> / <a href="">Login</a>  </div>
			
			<h1></h1>
			<!----------------------LOGIN FORM-------------->
			<form name='loginform' action="logincheck.php" method="POST"  onSubmit='return checkloginform()' class="f-wrap-1">
			  <fieldset>
			    <h3>Member Login</h3>
			    <label for="username"><b><span class="req"></span>Username:</b>
			      <input id="username" name="username" type="text" class="f-name" tabindex="1" />
			      <br />
		        </label>
				
			    <label for="password"><b><span class="req"></span>Password:</b>
			      <input id="password" name="password" type="password" class="f-name" tabindex="2" />
			      <br />
		        </label>
				
			    <div class="f-submit-wrap">
			      <input type="submit" name="login" value="LOGIN" class="f-submit" tabindex="12" />
			      <input type="hidden" name="loginow" value='TRUE' /> 
				  <br />
		        </div>
		      </fieldset>
		  </form>
		  
			<h2>Not a member yet? <a href="Register.php">Register</a> now!</h2>
		  
			<hr />
			
			<p>&nbsp; </p>
			
			<hr />
			
			 
			
			<hr />
			
	 
			
			
			
			<hr />
		 
			
			<hr />
			
		 
			
			<hr />
			
	 
 
			<hr />

			<hr />
			
		 
			
	 
			 

			<!--Footer-->
			<div id="footer">
			
			</div>
			
		</div>
		
		<div id="poweredby"></div>
		
	</div>
	
</div>
</body>
</html>