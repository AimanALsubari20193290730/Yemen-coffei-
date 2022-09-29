<?php
session_start();

?>
<!DOCTYPE html>
<html>
<title> Software Engineering Training Project/Yemeni Coffee</title>
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
    <a href="#home" class="#"><img src="img/logo1.png" class="imgico"></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
	
	<?php if(isset($_SESSION['userid'])): ?>
	 <a class="w3-bar-item w3-button " href="dashboard.php">Dashboard</a>
	<?php else: ?>

      <a class="w3-bar-item w3-button" href="contactus.php"><span class="hostri"></span> </a>
    
<?php endif; ?>
	
      <a href="#projects" class="w3-bar-item w3-button ">coffee</a>
	    <a href="honey.php" class="w3-bar-item w3-button ">honey</a>
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
<!DOCTYPE html>
<html>
<title>Yemeni Coffee</title>

<body>



<!-- Header -->
<br>
<header  id="home">
<img class="nature" src="img/11.jpg" width="100%">

<img class="nature" src="img/12.jpg" width="100%">
<img class="nature" src="img/13.jpg" width="100%">
<img class="nature" src="img/14.jpg" width="100%">
</header>
<script>
w3.slideshow(".nature", 1500);
</script>


<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Coffee Type :</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding"> Coffee Tree</div>
        <img src="img/treecoffee.jpg"alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Coffee Flowers</div>
        <img src="img/cofeeflowers.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Coffe beans</div>
        <img src="img/redbean.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Dry beans</div>
        <img src="img/dreybean.jpg" alt="House" class="imgcof">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Qasi bean</div>
        <img src="img/qasi.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Qashr Coffee</div>
        <img src="img/gisher.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Green Coffee</div>
        <img src="img/greancofee.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Roast Coffee</div>
        <img src="img/roastbean.jpg" alt="House" class="imgcof">
      </div>
    </div>
  </div>
  
  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Ground Coffee</div>
        <img src="img/groundcoffee.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Cupping Coffee</div>
        <img src="img/cuppingcoffee.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Smell Coffee</div>
        <img src="img/smell.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Tasting Coffee</div>
        <img src="img/testcoffee.jpg" alt="House" class="imgcof">
      </div>
    </div>
  </div>
 

  

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>. We're passionate about sourcing only the very best coffees from around the world. But most of all we're passionate about giving you, our customers, coffees you can trust and love.
As a coffee lover you obviously appreciate great coffee and nothing can beat high quality freshly roasted coffee, and that's all we do. You'll also understand that coffee is more than just a drink as we tend to treat it as a special event and something we look forward to preparing and enjoying.There are many grades of coffee bean, and we only source the slower maturing arabica beans which have been grown at high altitude (usually over 3,000ft) as these have a better flavour.Our coffees are sourced on quality not on price, and we aim to get the highest grade of each coffee into your cup without you having to pay premium prices. We guarantee to keep our coffees affordable allowing you to enjoy them not only for special occasions but for everyday drinking.
    </p>
  </div>

  <div class="w3-row-padding "><marquee>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/Aiman.jpg" alt="John" class="imgteam">
      <h3 class="team">AIMAN 20193290730</h3>
      <p class="w3-opacity team">Founder</p>
      
   
   

  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>We're a small independent speciality coffee roaster with a real passion for what we do. We're passionate about sourcing only the very best coffees from around the world. But most of all we're passionate about giving you, our customers, coffees you can trust and love.
As a coffee lover you obviously appreciate great coffee and nothing can beat high quality freshly roasted coffee, and that's all we do. You'll also understand that coffee is more than just a drink as we tend to treat it as a special event and something we look forward to preparing and enjoying.There are many grades of coffee bean, and we only source the slower maturing arabica beans which have been grown at high altitude (usually over 3,000ft) as these have a better flavour.Our coffees are sourced on quality not on price, and we aim to get the highest grade of each coffee into your cup without you having to pay premium prices. We guarantee to keep our coffees affordable allowing you to enjoy them not only for special occasions but for everyday drinking.
    </p>
  </div>
 
  
<!-- Image of location/map -->
<div class="w3-container" id="contact">
   <p>  Subject:Software Engineering Training. <br> 
   <p>  DOCTOR: Xu Hong Xin.<BR>
   <p>  semester: fall.<br>
   <p>  titlle :Final project.<br>
   <p>  Project Name: Yemeni Coffee-Honey E-commerce Platform.<br>
   <p> Student Name and ID <br> Name: AIMAN AL-SUBARI.<br>ID: 20193290730.</p>
   
</div>

<
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by DR.Xu Hong Xin.</a></p>
</footer>

</body>
</html>
