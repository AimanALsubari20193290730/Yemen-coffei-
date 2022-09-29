<?php include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>

<style>


</style>
</head>
<body>

<h2 class="h2">Add products</h2>


<form action="admin/addproductdb.php" method="post" enctype="multipart/form-data" class="forr" >
  

  <div class="container">
  
   <label for="email"><b> Name of product</b></label>
    <input class="lo" type="text" placeholder="Enter product name" name="name" required>
  
    <label for="email"><b>price</b></label>
    <input class="lo" type="number" step="any" placeholder="Enter price" name="price" required>

 <label for="phonenumber"><b>Quntity</b></label>
    <input class="lo" type="number" placeholder="Enter number of quntity" name="quntity" required>
	
    <label for="psw"><b>Img</b></label>
    <input class="lo" type="file" placeholder="Upload the img" name="img" required>
        
		<label for="psw"><b>Description</b></label>
    <input class="lo" type="text" placeholder="Enter the description" name="des" required>
	
    <button type="submit" name="txtbutton" value="SUBMIT" class="log">Add to products</button>
    
  </div>

  
</form>
<br><br>

<?php include 'footer.php';?>
</body>
</html>