<?php include 'header.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>product list </title>
  <link rel="stylesheet"  href="styleadmin.css" >
 
 
   
</head>
<body class="tab">

<div class="container">
  <h2 class="h2">product list  Table</h2>
  
<?php           
include ('admin/conn.php');	
	  
			    $sql = "SELECT prod_id, prod_name, prod_price, prod_img, prod_des, prod_quntity ,useremail FROM productseller_tb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	?>
	<center>
  <table id="products">
    <thead>
      <tr >
        <th>Id</th>
        <th>Name</th>
        <th >Price</th>
		 <th >Quntity</th>
        <th >Img</th>
		 <th >Description</th>
		  <th>username</th>
        <th >Delete</th>
       
      </tr>
<?php	  
	   while($row = $result->fetch_assoc()) {
        $id = $row["prod_id"];
        $name = $row["prod_name"];
        $price = $row["prod_price"];
        $img = $row["prod_img"];
        $des = $row["prod_des"];
		$quntity = $row["prod_quntity"];
	    $useremail = $row["useremail"];
	
	
	


   echo " </thead>
    <tbody>
      <tr>
        <td > $id</td>
        <td > $name</td>
        <td > $price</td>
		  <td >$quntity</td>
        
        <td ><img class='prodimg' src=img/$img></td>
		  <td > $des</td>
		  <td > $useremail</td>
       <td > <a href=admin/delproductsadmin.php?id=$id>Delete </a></td>
       
		
      </tr>";

  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>
