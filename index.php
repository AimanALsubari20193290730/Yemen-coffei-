<?php
include 'header.php';

include ('admin/conn.php');
?>

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
</style>
</head>
<body>
<?php
$sql = "SELECT prod_id, prod_name, prod_price, prod_img, prod_des, prod_quntity ,useremail FROM productseller_tb";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
	?>
	
<h2 class="prod">Product Card</h2>

<?php
	$counter=0;
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  
	  if($counter%3==0 )
	  {
		  echo '</div><div class=" left">';
	  }
	  
	  $id=$row["prod_id"];
	   $name=$row["prod_name"];
	    $price=$row["prod_price"];
		 $img=$row["prod_img"];
		  $des=$row["prod_des"];
             $useremail = $row["useremail"];


echo '<div class="card left">
  <img src="img/'.$img.'" class="imgg" alt="Denim Jeans" style="width:100%">
  <h1>'.$name.'</h1>
  <p class="price">RM '.$price.' </p>
  <p>'.$des.'</p>
   <a href="addtomycart.php?id='.$id.'" ><p><button>Add to Cart</button></p></a>
</div>';

$counter++;
  }
  echo "</div>";
  echo "<br>";
} else {
  echo "0 results";
}

?>

</body>
</html>
