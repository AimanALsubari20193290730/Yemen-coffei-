<?php
session_start();

?>

<!DOCTYPE html>
<html>
<title>Yemeni Coffee</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="style1.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
a{
 font-style: normal !important; color:black;
}
a i span{
 font-style: normal !important;;
 color:black;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="shop.php#home" class="#"><img src="img/logo1.png" class="imgico"></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
	
	<?php if(isset($_SESSION['userid'])): ?>
	 <a class="w3-bar-item w3-button" href="dashboard.php">Dashboard</a>
	<?php else: ?>

      <a class="w3-bar-item w3-button" href="contactus.php"><span class="hostri"></span> </a>
    
<?php endif; ?>
	
      <a href="shop.php#projects" class="w3-bar-item w3-button">coffee</a>
	  <a href="shop.php#projects" class="w3-bar-item w3-button">Honey</a>
      <a href="shop.php#about" class="w3-bar-item w3-button">About</a>
      <a href="shop.php#contact" class="w3-bar-item w3-button">Contact</a>
	  <a href="index.php" class="w3-bar-item w3-button">Shop</a>
	  
	   <?php if(isset($_SESSION['userid'])): ?>
   <a  href="logout.php"> <i class="fas fa-user-minus w3-bar-item w3-button	ti " ><span class="font"> Logout</span></i></a>
<?php else: ?>
 <a  href="login.php"> <i class="w3-bar-item w3-button" ><span class="font"> Login</span></i></a>
<?php endif; ?>
	  
	 
	 <?php if(isset($_SESSION['userid'])): ?>
   	<a  href="addtomycart.php"><i class="fas fa-shopping-cart w3-bar-item w3-button ti" ><span class="font">Cart</span></i></a>
   <?php else: ?>
	<a  href="signup.php"><i class="w3-bar-item w3-button" ><span class="font">Sign up</span></i></a>
	<?php endif; ?>
    </div>
  </div>
</div>


</body>
</html>