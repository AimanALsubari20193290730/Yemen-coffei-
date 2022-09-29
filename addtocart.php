<?php include 'header.php';
include ('admin/conn.php');
if(!isset($_SESSION['userid']))
{
echo "<script> location.replace('login.php'); </script>";
exit;
}




    
        $useremail = $_SESSION["useremail"];
$id="";
if(isset($_GET['id']))
$id=$_GET['id'];




  $sql = "SELECT prod_id, prod_name, prod_price, prod_img, prod_des, prod_quntity, useremail FROM cart_tb where useremail='$useremail'";
 // echo  $sql;
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	   while($row = $result->fetch_assoc()) {
        $prod_id = $row["prod_id"];
        $prod_name = $row["prod_name"];
        $prod_price = $row["prod_price"];
       $prod_img = $row["prod_img"];
        $prod_des = $row["prod_des"];
		$prod_quntity = $row["prod_quntity"];
}}

//echo $id.$name.$price.$img.$des.$quntity;
?>
<html>
<head>

</head>
<body>

<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:8%">Price</th>
							<th style="width:8%">Quantity</th>
					
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><?php echo "<img class='imgp' src=img/".$prod_img.">"; ?></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $prod_name; ?></h4>
										<p class="nomargin"> <?php echo $prod_des; ?></p>
									</div>
								</div>
							</td>
							<td data-th="Price"><?php echo $prod_price; ?></td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="<?php echo $prod_quntity; ?>">
							</td>
						
							
							<td data-th="Subtotal" class="text-center"><?php echo $prod_price; ?></td>
							<td class="actions" data-th="">
								
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
					
						<tr>
							<td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
							<td><a href="cart.php" class="btn btn-success btn-block chck">Add to Cart <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>


</body>

</html>



















