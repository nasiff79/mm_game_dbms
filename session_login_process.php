<!DOCTYPE html>
<html>
<title>Playstation Game Store</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
    .w3-myfont {
  font-family: "Verdana, Arial, Helvetica", sans-serif;
}
</style>
<body class="w3-black">

    
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center" style="width:10%">
    
  <!-- Avatar image in top left corner -->
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzCF9_h5_KoOy9y1xaIq1I88XuSkVkPXX93G2WHorxNaPe8md7" class="w3-circle" style="width:100%">
  
</nav>

    
<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">GAME LIST</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">REGISTER</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">DELETE</a>
      <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">EDIT</a>
      <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">SEARCH</a>
  </div>
</div>

    
<!--  Image Page Content -->
    
<div class="w3-padding-24 " id="main">
  <!-- Header/Home -->
      <div class=" w3-content w3-justify w3-text-black w3-border  " id="about">
          
          <img src="https://farm1.staticflickr.com/722/23459502135_1db6f074aa_b.jpg" alt="Car" width="950" height="350">
          
          <hr>
           <h1 class="w3-xxlarge w3-myfont w3-text-white w3-center">Home </h1>
            
          <div class=" w3-text-black w3-padding w3-center">

<?php
include'./test_session_started.php';//external function
ob_start();

$userID=$_POST['userID'];
$pswd=$_POST['pswd'];

if((empty($userID))||(empty($pswd)))
{die("<h2>Please Insert Your User ID and Password</h2>");}
else if(($userID=="ali")&&($pswd=="123")){
	echo"<h1><font size='2' face='Verdana, Arial, Helvetica, sans-serif' color='white'>You had Successfully logged in</font></h1>";
	
	
	

	if(session_started()){
	echo"<font size='2' face='Verdana, Arial, Helvetica, sans-serif' color='white'>the session has beed started.</font><br/>";}
	else{
	echo"<font size='2' face='Verdana, Arial, Helvetica, sans-serif' color='white'>the session has not beed started.</font><br/>";}

	//start it
	echo "<font size='2' face='Verdana, Arial, Helvetica, sans-serif' color='white'>starting session.................</font><br/>";
	session_start();
	//session_register($userID);
$_SESSION['user']=$userID;
	session_encode();

	//check again
	if(session_started()){
	echo"<font size='2' face='Verdana, Arial, Helvetica, sans-serif' color='white'>the session has been started.</font><br/>";
	echo'<a href="./home.php"> <font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="white">OK</font></a><br/>';
	}
	else{
	echo"<font size='2' face='Verdana, Arial, Helvetica, sans-serif' color='white'>the session has not beed started.</font><br/>";
	}
}
else{
echo"<h2><font size='2' face='Verdana, Arial, Helvetica, sans-serif' color='white'>Invalid User ID or Password...Please Try Again</font></h2>";
echo'<a href="./session_login_form.php"> <font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="white">Back</font></a><br/>';}
ob_end_flush();//flush the buffer to screen
?>
 
  </div>
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge w3-center">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <!-- End footer -->
  </footer>
<!-- END PAGE CONTENT -->
</div>
    </div>
</body>
</html>