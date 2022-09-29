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



<form action="admin/signupascustomerdb.php" method="post" enctype="multipart/form-data" class="forr" >
  

  <div class="container">
  
   <label for="email"><b>Full Name</b></label>
    <input class="lo" type="name" placeholder="Enter you full name" name="name" required>
  
    <label for="email"><b>Email</b></label>
    <input class="lo" type="email" placeholder="Enter email" name="email" required>

 <label for="phonenumber"><b>Phone number</b></label>
    <input class="lo" type="text" placeholder="Enter phone number" name="phonenumber" required>
	
	<label for="Address"><b>Address</b></label>
    <input class="lo" type="text" placeholder="Enter The Address" name="Address" required>
	
    <label for="psw"><b>Password</b></label>
    <input class="lo" type="password" placeholder="Enter Password" name="password" required>
        
		
    <button type="submit" class="myButtonn">Sign Up<img src="img/signup3.png" class="imgiconn"></button><br>
 
  </div>

  
</form>
<br><br>


</body>
</html>