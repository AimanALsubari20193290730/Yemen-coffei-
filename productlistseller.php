<?php
include('header.php');
 
include("admin/conn.php");

?>
<html lang="en">
<head>
  <title>product list </title>
  
    <link rel="stylesheet"  href="styleadmin.css" >
</head>
<body class="for">
<br><br><br><br>
<div class="container">
  <h2 class="h2">Products List</h2>
<?php           
	 $useremail = $_SESSION["useremail"];
	  
			  $sql = "SELECT prod_id, prod_name, prod_price, prod_img, prod_des, prod_quntity FROM productseller_tb where useremail='$useremail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	?>
 <table id="products">
    <thead>
      <tr >
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
		 <th>Quntity</th>
       
        <th>Img</th>
		 <th>Description</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>
<?php	  
	   while($row = $result->fetch_assoc()) {
        $id = $row["prod_id"];
        $name = $row["prod_name"];
        $price = $row["prod_price"];
        $img = $row["prod_img"];
        $des = $row["prod_des"];
		$quntity = $row["prod_quntity"];
	
	
	
	


   echo " </thead>
    <tbody>
      <tr>
        <td> $id</td>
        <td> $name</td>
        <td> $price</td>
		  <td>$quntity</td>
        
        <td><img class='prodimg' src=img/$img></td>
		  <td> $des</td>
       <td> <a href=admin/deleteproductsseller.php?id=$id>Delete </a></td>
       <td><a href=updateproductsseller.php?id=$id  >Update </a></td>
		
      </tr>";

  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>
