<?php
include 'header.php';
include ('admin/conn.php');	

    if(!isset($_SESSION["useremail"]))
	{	echo "<br><br><br><br><br><br>";
	echo "<center>";
	die("login first");}
	
	
$usertype=$_SESSION["usertype"];

if($usertype=="admin" || $usertype=="seller")	
{
    echo "<br><br><br><br><br><br>";
	echo "<center>";
	die("login as customer to add to cart");
}
	
	$useremail = $_SESSION["useremail"];
$id="";
if(isset($_GET['id']))
{
$id=$_GET['id'];

$prod_id =" ";
$prod_name ="";
$prod_price ="";
$prod_img ="";
$prod_des ="";
$prod_quntity="";


  $sql = "SELECT prod_id, prod_name, prod_price, prod_img, prod_des, prod_quntity FROM productseller_tb where prod_id=$id";
 // echo  $sql;
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	   while($row = $result->fetch_assoc()) {
        $id = $row["prod_id"];
        $name = $row["prod_name"];
        $price = $row["prod_price"];
        $img = $row["prod_img"];
        $des = $row["prod_des"];
		$quntity = 1;
}}

echo $id.$name.$price.$img.$des.$quntity;
$sql = "INSERT INTO cart_tb (prod_id, prod_name, prod_price, prod_img, prod_des, prod_quntity,  useremail) VALUES ('$id', '$name', '$price', '$img', '$des', '$quntity', '$useremail')";
	//echo $sql;

  $result = $conn->query($sql);
}


if(isset($_GET['cartid']) && isset($_GET['quantity']))
{
		$sql ="";
	$id=$_GET['cartid'];
	$quantity=$_GET['quantity'];
	if($quantity==1)
	$sql = "UPDATE cart_tb SET prod_quntity=prod_quntity+($quantity) where cartid=$id and prod_quntity>=0";
else
	$sql = "UPDATE cart_tb SET prod_quntity=prod_quntity+($quantity) where cartid=$id and prod_quntity>1";
	//echo $sql;
	$resultupdate = $conn->query($sql);
	//die();
	
	
}

$myquery="select cartid,prod_id,prod_name,prod_price,prod_img,prod_des,prod_quntity,useremail from cart_tb where useremail='$useremail'";
$data=array();
$myresult = $conn->query($myquery);
while( $row = mysqli_fetch_array( $myresult)){
    $data[] = $row; // Inside while loop
}

//die();
	?>
	
	
	<script>
	function updatequantity(cartid,quantity)
	{
		window.location.href = "addtomycart.php?cartid="+cartid+"&quantity="+quantity;

	}
	</script>
	
	<Br><br><br>
<div class="container mb-4 ">

    <div class="row ">
        <div class="col-12"><center><h1> My Cart </h1><Br></center>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="colorr">
                            <th scope="col" style="color:white;"> </th>
                            <th scope="col"  style="color:white;">Product</th>
                             <th scope="col"  style="color:white;">Description</th>
                            <th scope="col"  style="color:white;" class="text-center ">Quantity</th>
                            <th scope="col"  style="color:white;" class="text-right ">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
$total=0;					
foreach($data as $array)
{       

 $cartid=$array['cartid'];
  $prod_img=$array['prod_img'];
 $prod_name=$array['prod_name'];
$prod_quntity=$array['prod_quntity'];
$prod_price=$array['prod_price'];
	$prod_des=$array['prod_des'];
$total+=	$prod_quntity*$prod_price;
					?>
                        <tr class="tion">
                            <td><?php echo "<img class='imgpp' src=img/".$prod_img.">"; ?></td>
                            <td><?php echo $prod_name; ?></td>
                            <td><p><?php echo $prod_des; ?></p></td>
                            <td><input type="button" value="+" onclick="updatequantity(<?php echo $cartid; ?>,1)">
<input style="text-align:center;"  size="2" maxlength="2" disabled readonly type="text" value="<?php echo $prod_quntity; ?>" />
<input type="button" value="-" onclick="updatequantity(<?php echo $cartid; ?>,-1)">
</td>
                            <td class="text-right"><?php echo $prod_price; ?></td>
                            <td class="text-right"><a href=deletedcart.php?id=<?php echo $cartid; ?>><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button></a> </td>
                        </tr>
                 <?php 
 //echo $array['cartid'].'<br />';
   //echo $array['prod_id'].'<br />';
}				 ?>     
                     
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>RM <?php echo $total; ?></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                  <a href=index.php>  <button class="btn btn-block btn-light">Continue Shopping</button></a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                   <a  href="cart.php"> <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button></a>
                </div>
            </div>
        </div>
    </div>
</div>





