<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>

<style>
a{
 font-style: normal !important;;
 color:black;
}
a i{
 font-style: normal !important;;
 color:black;
}
label{
	color:white;
}
</style>
</head>
<body class="for">



<form action="admin/logindb.php" method="post" enctype="multipart/form-data" class="forr" >
  

  <div class="container">
  <form>
    <div class="form-group">
      <label for="sel1">Login As</label>
      <select class="form-control" id="sel1" name="usertype">
        <option value="customer">Customer</option>
        <option value="seller">Seller</option>
        <option value="admin">Admin</option>
      
      </select>
      
    </div>
  </form>
  <br>
    <label for="uname"><b>Email</b></label>
    <input class="lo" type="email" placeholder="Enter Username" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input class="lo" type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" class="myButtonn">Login<img src="img/login.png" class="imgiconn"></button><br>
   
 


   </div>
</form>
<br><br><br><br><br><br>


</body>
</html>