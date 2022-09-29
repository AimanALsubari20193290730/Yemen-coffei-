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

<body class="for">




   

<div class="container mb-4 ">
    <div class="row ">
        <div class="col-12">
            <div class="table-responsive dow">
                <table class="table table-striped">
                    <thead>
                        <tr class="colorr">
                            <th scope="col" class=""> </th>
                            <th scope="col" class="">Product</th>
                             <th scope="col" class="">Description</th>
                            <th scope="col" class="text-center ">Quantity</th>
                            <th scope="col" class="text-right ">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tion">
                            <td><?php echo "<img class='imgpp' src=img/".$prod_img.">"; ?></td>
                            <td><?php echo $prod_name; ?></td>
                            <td><p><?php echo $prod_des; ?></p></td>
                            <td><input class="form-control" type="text" value="<?php echo $prod_quntity; ?>" /></td>
                            <td class="text-right"><?php echo $prod_price; ?></td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">255,90 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">6,90 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>346,90 €</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                   <a  href="cart.php"> <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
