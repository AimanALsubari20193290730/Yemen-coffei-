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
<!DOCTYPE html>
<html>
<title>Yemeni Coffee</title>

<body>
<br>
<header  id="home">
<img class="nature" src="img/88.jpg" width="100%">

<img class="nature" src="img/113.jpg" width="100%">
<img class="nature" src="img/111.jpg" width="100%">
<img class="nature" src="img/saba.jpg" width="100%">
<img class="nature" src="img/Dwani Royal Honey.jpg" width="100%">
<img class="nature" src="img/112.jpg" width="100%">
</header>
<script>
w3.slideshow(".nature", 1500);
</script>


<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Honey Type :</h3>
  </div>
  

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding"> yemeni Sidr Whiet Honey </div>
        <img src="img/yemen 11.jpg"alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Yemeni Beekeepers dyfing </div>
        <img src="img/beekeepers dyfing yemen.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Yemeni Saba Honey</div>
        <img src="img/saba.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">yemeni Sidr Honey</div>
        <img src="img/yemeni Sidr Honey.jpg" alt="House" class="imgcof">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Pure Sidr Honey</div>
        <img src="img/Pure Sidra Honey.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Yemeni Dwani Honey</div>
        <img src="img/Yemeni Dwani Honey.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Dwani Royal Honey</div>
        <img src="img/Dwani Royal Honey.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Pure, Raw, Organic Yemeni Sidr Honey</div>
        <img src="img/Pure, Raw, Organic Yemen Sidr Honey.jpg" alt="House" class="imgcof">
      </div>
    </div>
  </div>
  
  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Bee-Master Honey</div>
        <img src="img/Bee-Master Honey.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Dwani Black Honey</div>
        <img src="img/Dwani Black Honey.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Yemeni Honey Vendor Shows Bee Product</div>
        <img src="img/Yemeni Honey Vendor Shows Bee Product.jpg" alt="House" class="imgcof">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Sidr Honey Gifts package</div>
        <img src="img/Sidr Honey Gifts package.jpg" alt="House" class="imgcof">
      </div>
    </div>
  </div>
 

  

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>Yemen Sidr Honey is one of the greatest honeys in the world. Yemeni Sidr Honey is highly in demand because of its unique taste and its numerous health benefits as a natural medicine. 
	Centuries ago they were aware of the major health benefits with Sidr Honey and in the last few years the demand for it has increased rapidly in the west and is known as a popular natural organic medicine. Yemeni Sidr Honey is a well-known antibiotic and antibacterial agent and there are many advantages that are included in Sidr Honey which can be used for your diet</p>
  </div>
  
  
  
  

  <div class="w3-row-padding "><marquee>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/Aiman.jpg" alt="John" class="imgteam">
      <h3 class="team">AIMAN 20193290730</h3>
      <p class="w3-opacity team">Founder</p>
      
   
    

  

<!-- End page content -->
<!--div-->
<div class="w3-container" id="contact">
  
  <p>  Subject:Software Engineering Training. <br> 
   <p>  DOCTOR: Xu Hong Xin .<BR>
   <p>  semester: fall.<br>
   <p>  titlle :Final project.<br>
   <p>  Project Name: Yemeni Coffee-Honey E-commerce Platform.<br>
   <p> Student name and ID <br> Name: AIMAN AL-SUBARI.<br>ID: 20193290730.</p>
   
</div>

< Footer >
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by DR.Xu Hong Xin. </a></p>
</footer>

</body>
</html>
