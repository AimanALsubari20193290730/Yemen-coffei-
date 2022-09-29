<?php include 'header.php';
include ('admin/conn.php');


 $email=$_SESSION["useremail"];

$sql = "SELECT id,name,email,phonenumber,address,password FROM seller_tb where email='$email'";

$result = $conn->query($sql);
$id="";
$name="";
$email="";
$phonenumber="";
$address="";
$password="";
while($row = $result->fetch_assoc()) {
	  $id=$row["id"];
	   $name=$row["name"];
	    $email=$row["email"];
		 $phonenumber=$row["phonenumber"];
		 $address=$row["address"];
		 $password=$row["password"];

	
?>
<!DOCTYPE html>
<html>
<head>

<style>


</style>
</head>
<body class="for">

<h2 class="h2">Update profile</h2>


<form action="admin/updatesellerprofiledb.php" method="post" enctype="multipart/form-data" class="forr" >
  

  <div class="container">
  
    
	
   <label for="email"><b> Name</b></label>
    <input class="lo" type="text" placeholder="Enter product name" name="name" value="<?php echo $name;?>" required>
  
    <label for="email"><b>email</b></label>
    <input class="lo" type="text" step="any" placeholder="Enter price" name="email" value="<?php echo $email;?>" required>

 <label for="phonenumber"><b>phone number</b></label>
    <input class="lo" type="text" placeholder="Enter number of quntity" name="phonenumber" value="<?php echo $phonenumber;?>" required>
	
    <label for="phonenumber"><b>Address</b></label>
    <input class="lo" type="text" placeholder="Enter number of quntity" name="address" value="<?php echo $address;?>" required>
        
		<label for="psw"><b>Password</b></label>
    <input class="lo" type="text" placeholder="Enter the description" name="password" value="<?php echo $password;?>"required>
	
    <button type="submit" name="txtbutton" value="SUBMIT" class="myButtonn">Update<img src="img/upate.png" class="imgiconn"></button>
    
  </div>

  
</form>
<br><br>


</body>
</html>

<?php
 }

?>