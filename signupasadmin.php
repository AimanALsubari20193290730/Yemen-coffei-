<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>  

<style>
label{
	color:white;
}
a{
 font-style: normal !important;;
 color:black;
}
a i{
 font-style: normal !important;;
 color:black;
}

</style>
</head>
<body class="for">



<form action="admin/signupasadmindb.php" method="post" enctype="multipart/form-data" class="forr" > "/*the POST request method requests that a web server accepts the data enclosed in the body of the request message,
 most likely for storing it. */"
  

  <div class="container">
  
   <label for="email"><b>Full Name</b></label>
    <input class="lo" type="name" placeholder="Enter you full name" name="name" required> //The placeholder attribute specifies a short hint that describes the expected value of an input field
  
    <label for="email"><b>Email</b></label>
    <input class="lo" type="email" placeholder="Enter email" name="email" required>

 <label for="phonenumber"><b>Phone number</b></label>
    <input class="lo" type="text" placeholder="Enter phone number" name="phonenumber" required>
	
	<label for="address"><b>Address</b></label>
    <input class="lo" type="text" placeholder="Enter The Address" name="address" required>
	
    <label for="psw"><b>Password</b></label>
    <input class="lo" type="password" placeholder="Enter Password" name="password" required>
        
		
    <button type="submit" class="myButtonn">Sign Up<img src="img/signup3.png" class="imgiconn"></button><br>

  </div>

</form>
<br><br>


</body>
</html>