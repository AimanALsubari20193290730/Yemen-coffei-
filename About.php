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





</body>
</html><!DOCTYPE html>
<html>
<title>Yemeni Coffee</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style1.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<style>
a{
 font-style: normal !important;;
 color:black;
}
a i{
 font-style: normal !important;;
 color:black;
}
</style>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="#"><img src="img/1.png" class="imgico"></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
	
	<?php if(isset($_SESSION['userid'])): ?>
	 <a class="w3-bar-item w3-button " href="dashboard.php">Dashboard</a>
	<?php else: ?>

      <a class="w3-bar-item w3-button" href="contactus.php"><span class="hostri"></span> </a>
    
<?php endif; ?>
	
      <a href="index.php" class="w3-bar-item w3-button ">coffee</a>
	    <a href="#projects" class="w3-bar-item w3-button ">Honey</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
	  <a href="index.php" class="w3-bar-item w3-button">shop</a>
	  
	  <?php if(isset($_SESSION['userid'])): ?>
   <a  href="logout.php" class="fontt" > <i class="w3-bar-item w3-button" ><span class="font"> Logout</span></i></a>
<?php else: ?>
 <a  href="login.php"> <i class="w3-bar-item w3-button" ><span class="font"> Login</span></i></a>
<?php endif; ?>
	  
	 
	 <?php if(isset($_SESSION['userid'])): ?>
   	<a  href="addtocartt.php"  class="fontt"><i class="fas fa-shopping-cart w3-bar-item w3-button ti" ><span class="font">Cart</span></i></a>
   <?php else: ?>
	<a  href="signup.php"  ><i class="w3-bar-item w3-button" ><span class="font">Sign up</span></i></a>
	<?php endif; ?>
	 
	 
	  
    </div>
  </div>
</div>


</body>
</html>

  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>We're a small independent speciality coffee roaster with a real passion for what we do. We're passionate about sourcing only the very best coffees from around the world. But most of all we're passionate about giving you, our customers, coffees you can trust and love.
As a coffee lover you obviously appreciate great coffee and nothing can beat high quality freshly roasted coffee, and that's all we do. You'll also understand that coffee is more than just a drink as we tend to treat it as a special event and something we look forward to preparing and enjoying.There are many grades of coffee bean, and we only source the slower maturing arabica beans which have been grown at high altitude (usually over 3,000ft) as these have a better flavour.Our coffees are sourced on quality not on price, and we aim to get the highest grade of each coffee into your cup without you having to pay premium prices. We guarantee to keep our coffees affordable allowing you to enjoy them not only for special occasions but for everyday drinking.
    </p>
  </div>
  
</body>
</html>