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
    function checkPass(){
      //Store the password field objects into variables ...
      var pword1 = document.getElementById('pword1');
      var pword2 = document.getElementById('pword2');
      //Store the Confimation Message Object ...
      var message = document.getElementById('confirmMessage');
      //Set the colors we will be using ...
      var goodColor = "#66cc66";
      var badColor = "#ff6666";
      //Compare the values in the password field 
      //and the confirmation field
      if(pword1.value == pword2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pword2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
      }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pword2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
      }
    }  
  </script>
  <script type="text/javascript">

function checkform(){
  if (document.update.pword1.value.length < 1){
    alert("Please enter your new password")
      return false}

  if (document.update.pword2.value.length < 1){
    alert("Please re-enter your new password.")
  return false}
  
  if (document.update.pword1.value.length < 5){
    alert("Please enter at least 5 characters for your new password.")
  return false}
  
   if (document.update.pword2.value.length < 5){
    alert("Please enter at least 5 characters for your new password.")
  return false}
   
}   


</script>
  
</head>
<?php error_reporting(0);?>

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
				 

			//if login successful
			if(isseT ($_SESSION['username']))

				echo "<br>Welcome, ".$_SESSION['username']."!<p>";
				

				else
				die("<center></br></br></br></br></br><h2>You must be <a href='login.php'>logged in!</a></h2></br></br></br></br></br><p><p><p></center>"); 
				?>
				
			 
			</h2>	
			 
				 
				<h2><u>Profile Page</u></h2> 
			
			<br>
			<?php
			// connect
			mysql_connect("localhost", "root", "");
			mysql_select_db("supermart");
			$query = mysql_query ("SELECT * FROM users where Usname='".$_SESSION['username']."'");
			 
			
			$numrows = mysql_num_rows($query);
			if ($numrows > 0){
			
		 
			while ($row = mysql_fetch_assoc($query)){
			
			 
			?>
			<form name='update' method='post' action="uprof.php" class="f-wrap-1" onSubmit='return checkform()'>
		 
			 <h4><u>Personal Account Details</u></h4>
			 
			 
				<label for="email"><b>Email:</b>  
				<input type="text" name="email" value=" <?php echo	$row['Email'];	?> " >
				</label>
				
				<label for="pword1"><b>Password:</b>  
				<input type="password" name="pword1" id="pword1" value="<?php echo $row['Pword'];	?>" >
				</label>
				
				<label for="pword2"><b>Confirm Password:</b>  
				<input type="password" name="pword2" id="pword2" value="<?php echo	$row['Pword'];	?>" onkeyup="checkPass(); return false;" />
				 <span id="confirmMessage" class="confirmMessage"></span>
				</label>
 
				<label for="contact"><b>Contact No:</b>  
				<input type="text" name="contact" value=" <?php echo	$row['Mainno'];	?> " >
				</label>
				
				<label for="contalt"><b>2nd No:</b>  
				<input type="text" name="contalt" value=" <?php echo	$row['Altno'];	?> " >
				</label>
				
				</br> 
			 <h4><u>Address Details</u></h4>
				 <label for="block"><b>Block:</b>  
				<input type="text" name="block" value=" <?php echo	$row['Blkno'];	?> " >
				</label> 
				
				 <label for="streetname"><b>Street:</b>  
				<input type="text" name="streetname" value=" <?php echo	$row['Streetname'];	?> " >
				</label>
				
				<label for="unitno"><b>Unit No:</b>  
				<input type="text" name="unitno" value=" <?php echo	$row['Unitno'];	?> " >
				</label>
				
				<label for="postal"><b>Postal:</b>  
				<input type="text" name="postal" value=" <?php echo	$row['Postal'];	?> " >
				</label>
				</br></br></br>
				<div class="f-submit-wrap">
			      <input type="submit" id="sub" value="Update" class="f-submit" tabindex="12" />
				  
			      <br />
		        </div>
				 
			 
			</form>
			
			 <?php
			
			 }
			 }
			 else
			echo "No profile found for ".$_SESSION['username']."";
			 
?>
		  </div>
		  
			<!--FOOTER-->
			<div id="footer">
			 
			</div>
			
		
		
		<div id="poweredby"></div>
		
	</div>
	
</div>
</body>
</html>