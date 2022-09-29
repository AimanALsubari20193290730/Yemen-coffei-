<?php include 'header.php';
include ('admin/conn.php');


  $id=$_GET['id'];
  
$sql = "SELECT prod_id,prod_name,prod_price,prod_quntity,prod_img,prod_des FROM product_tb where prod_id=$id";




$result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
	  $id=$row["prod_id"];
	   $name=$row["prod_name"];
	    $price=$row["prod_price"];
		 $quntity=$row["prod_quntity"];
		 $img=$row["prod_img"];
		  $des=$row["prod_des"];
		  

	
?>
<!DOCTYPE html>
<html>
<head>

<style>


</style>
</head>
<body>

<h2 class="h2">Update products</h2>


<form action="admin/updateproductsadmindb.php" method="post" enctype="multipart/form-data" class="forr" >
  

  <div class="container">
  
     <label for="email"><b> Id of product</b></label>
    <input class="lo" type="text" readonly="readonly" placeholder="Enter product name" name="prod_id" value="<?php echo $id; ?>" required>
	
   <label for="email"><b> Name of product</b></label>
    <input class="lo" type="text" placeholder="Enter product name" name="prod_name" value="<?php echo $name; ?>" required>
  
    <label for="email"><b>price</b></label>
    <input class="lo" type="number" step="any" placeholder="Enter price" name="prod_price" value="<?php echo $price; ?>" required>

 <label for="phonenumber"><b>Quntity</b></label>
    <input class="lo" type="number" placeholder="Enter number of quntity" name="prod_quntity" value="<?php echo $quntity; ?>" required>
	
    <label for="psw"><b>Img</b></label>
    <input class="lo" type="file" placeholder="Upload the img" name="img" required>
        
		<label for="psw"><b>Description</b></label>
    <input class="lo" type="text" placeholder="Enter the description" name="prod_des" value="<?php echo $des; ?>"required>
	
    <button type="submit" name="txtbutton" value="SUBMIT" class="log">Update the products</button>
    
  </div>

  
</form>
<br><br>


</body>
</html>

<?php
 }

?>