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

<script type="text/javascript">

function checkform(f){

	



  if (document.register.username.value.length < 4){
    alert("Please enter a username with at least 4 characters.")
      return false}

  if (document.register.password.value.length < 5){
    alert("Please enter at least 5 characters for your password.")
  return false}
  if ((document.register.emailaddress.value.length < 9) || (document.register.emailaddress.value.indexOf('@') == -1) || (document.register.emailaddress.value.indexOf('.') == -1)){
    alert("Please enter a valid email address like you@domain.com")
  return false}
  
  if ((document.register.blkno.value.length < 2) || (document.register.streetname.value.length < 2) || (document.register.unitno.value.length < 2 ) || (document.register.postal.value.length < 2 )){
    alert("Incomplete Address Details")
  return false}
  
  if (document.register.mainno.value.length < 4){
    alert("Please enter a valid contact number.")
      return false}
	  
if (f.agree.checked == false )
{
alert('Please check the Terms and Condition box to continue.');
return false;
}  
  
}   
</script>
<script>
function ShowTerms()
{
var left =(screen.width - 850) / 2;
var top = (screen.height - 500) / 2;
window.open('terms.html','Term','scrollbar=true;address=0,status=0,resize=0,width=850,height=500,top=' + top + ',left=' + left);

}


</script>
<SCRIPT type="text/javascript">
function checkIt(evt) {
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        status = "This field accepts numbers only."
        return false
    }
    status = ""
    return true
}
</SCRIPT>


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
		
		<div id="content">
		
			<div id="breadcrumb">
			</div>
			
			<h1>Why register?</h1>
			<p>1. Access to online promotions and offers.</p>
			<p>2. Post classifed ads whether you are buying or selling.</p>
			<p>3. Purchase your products online without hassle.</p>
            
            <!--REGISTRATION Form-->
			<form name='register' method='post' action="verify.php" class="f-wrap-1" onSubmit='return checkform(this)'>
			  
			  <fieldset>
			    <h3>Customer Registration Form </h3>
				<font color="red">* Required fields</font>
				
				<h4><u>Personal Account Details</u></h4>
				
			   				                
                 <label for="username"><b>Username:</b>
			      <input id="username" name="username" type="text" class="f-name" maxlength="20"tabindex="2" /><font color="red">*</font>
			      <br />
		        </label>
                
                 <label for="password"><b><span class="req"></span>Password:</b>
			      <input id="password" name="password" type="password" class="f-name" maxlength="15"tabindex="2" /><font color="red">*</font>
			      <br />
		        </label> 

					
              
			    <label for="emailaddress"><b><span class="req"></span>Email Address:</b>
			      <input id="emailaddress" name="emailaddress" type="text" class="f-email" tabindex="3" /><font color="red">*</font>
			      <br />
		        </label>
				
				<h4><u>Delivery Address</u></h4>
				
				<label for="blkno"><b>Block/House No:</b>
			      <input id="blkno" name="blkno" type="text" class="f-name" tabindex="4" maxlength="5" /><font color="red">*</font>
			      <br />
		        </label>
				
				<label for="streetname"><b>Street Name:</b>
			      <input id="streetname" name="streetname" type="text" class="f-name" tabindex="5" /><font color="red">*</font>
			      <br />
		        </label>
				
				<label for="unitno"><b>Unit No:</b>
			      <input id="unitno" name="unitno" type="text" class="f-name" tabindex="6" maxlength="7" /><font color="red">*</font>
			      <br />
		        </label>
				
				<label for="postal"><b>Postal Code:</b>
			      <input id="postal" name="postal" type="text" class="f-name" maxlength="6" tabindex="7" onKeyPress="return checkIt(event)" /><font color="red">*</font>
			      <br />
		        </label>
				
				
				<h4><u>Contact Details</u></h4>
				<label for="mainno"><b>Main Number:</b>
			      <input id="mainno" name="mainno" type="text" class="f-name" maxlength="8" tabindex="8" onKeyPress="return checkIt(event)"/><font color="red">*used for any customer service issues</font>
			      <br />
		        </label>   
		         
				 <label for="altno"><b>Second No.(if any):</b>
			      <input id="altno" name="altno" type="text" class="f-name" maxlength="8" tabindex="9" onKeyPress="return checkIt(event)" />
			      <br />
		        </label>
				
							 				 				 			 
		     	<input type="hidden" name="formsubmitted" value="TRUE" />
				
				<b></br>By submitting, I agree that to the<a href='' onclick="ShowTerms(); return false;"> Terms and Conditions </a>here.</b><br />
					<b> I accept: </b> <input type="checkbox" value="0" name="agree">
                
                
			    <div class="f-submit-wrap">
				
			      <input type="submit" id="sub" value="REGISTER" class="f-submit" tabindex="12" />
				  <input type="reset" value="RESET" class="f-submit" tabindex="12" />
			    
				<br />
		        </div>
		      </fieldset>
		  </form>
			
			
		   
		  
						
		</div>
		
 
</div>
</body>
</html>