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
     <?php
ob_start();
session_start();
$_SESSION['first'] = time();
if(isset($_SESSION['user'])){
echo'';
}
else{
echo"no<br/>";

$url="Location:session_login_form.php";
	header($url);
}

ob_end_flush();
?>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center" style="width:10%">
    
  <!-- Avatar image in top left corner -->
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzCF9_h5_KoOy9y1xaIq1I88XuSkVkPXX93G2WHorxNaPe8md7" class="w3-circle" style="width:100%">
  <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="listAll.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-gamepad w3-xxlarge"></i>
    <p>GAME LIST</p>
  </a>
  <a href="register.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-plus w3-xxlarge"></i>
    <p>REGISTER GAMES</p>
  </a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-trash w3-xxlarge"></i>
    <p>DELETE GAMES</p>
  </a>
 <a href="editList.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-edit w3-xxlarge"></i>
    <p>EDIT GAMES</p>
  </a>
 <a href="searching.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-search w3-xxlarge"></i>
    <p>SEARCH GAMES</p>
  </a>
    <a href="session_destroy.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-power-off w3-xxlarge"></i>
    <p>LOG OUT</p>
  </a>
</nav>


<!--  Image Page Content -->
<div class="w3-padding-24 " id="main">
  <!-- Header/Home -->
      <div class=" w3-content w3-justify w3-text-black w3-border  " id="about">
          
          <img src="https://farm1.staticflickr.com/722/23459502135_1db6f074aa_b.jpg" alt="Car" width="950" height="350">
          
          <hr>
           <h1 class="w3-xxlarge w3-myfont w3-text-white w3-center">Delete Games</h1>
            
          <div class=" w3-text-black w3-padding">

    
    <!-- Grid for pricing tables -->
     <tr>
	  <p align='center'><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color='white'><strong>List of Registered Games </strong></font></p>
	  <p>
        <?php
            
		$connect=mysqli_connect('localhost','root','','mydomain');
			$SQLcommand = "SELECT * FROM Games";
		  
			$result = mysqli_query($connect,$SQLcommand);
			
			print "<table border='1' class='w3-table-all w3-hoverable ' width=\"800\" bgcolor=\"#000000\" cellpadding='10' cellspacing='5'>";
            print "<thead>";
			print "<tr class='w3-black'>";
			print "<td>GameID</td>";
			print "<td>Name</td>";
			print "<td>Developer</td>";
			print "<td>Publisher</td>";
          print "<td>Price</td>";
          print "<td>Delete</td>";
		
          print "</thead>";
			print "</tr>";
		  
			  while($row = mysqli_fetch_row($result))
			  {
				print "<tr bgcolor=\"#EEEEEE\">";
				  print "<td> $row[0] </td>";
				  print "<td> $row[1] </td>";
				  print "<td> $row[2] </td>";
				  print "<td> $row[3] </td>";
                  print "<td> $row[4] </td>";
				 
				
				  print "<td>";

					  
					  print "<a href =\"deleteUser.php?ID=";
					  print $row[0] ;
					  print "\">";
					  print "[delete]";
					  print"</a>";
					  
				  print "</td>";
				  
				print "</tr>";			  
			  }
		  print "</table>";
		  mysqli_close($connect);
		?>
	    
      </p></td>
  </tr>
  
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

</body>
</html>