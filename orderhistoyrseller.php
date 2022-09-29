<?php
include 'header.php';
include ('admin/conn.php');	

    if(!isset($_SESSION["useremail"])){
		echo "<br><br><br><br><br><br>";
	echo "<center>";
		die("login first");
	}
        $useremail = $_SESSION["useremail"];
$id="";


$myquery="select orderid,order_tb.prod_id as prod_id,order_tb.prod_name as prod_name,order_tb.prod_price as prod_price,order_tb.prod_img as prod_img,order_tb.prod_des as prod_des,order_tb.prod_quntity as prod_quntity,productseller_tb.useremail,status from order_tb,productseller_tb where productseller_tb.prod_id=order_tb.prod_id and productseller_tb.useremail='$useremail' order by orderid desc";
echo $myquery;
$data=array();
$myresult = $conn->query($myquery);
while( $row = mysqli_fetch_array( $myresult)){
    $data[] = $row; // Inside while loop
}

//die();
	?>
	
	
	
	
	<Br><br><br>
<div class="container mb-4 ">

    <div class="row ">
        <div class="col-12"><center><h1> My Customer Orders </h1><Br></center>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="colorr">
                            <th scope="col" style="color:white;"> </th>
                            <th scope="col"  style="color:white;">Product</th>
                             <th scope="col"  style="color:white;">Description</th>
                            <th scope="col"  style="color:white;" class="text-center ">Quantity</th>
                            <th scope="col"  style="color:white;" class="text-right ">Price</th>
                            <th style="color:white;">Total</th>
							<th style="color:white;">  Status</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
$total=0;					
foreach($data as $array)
{       

 $orderid=$array['orderid'];
  $prod_img=$array['prod_img'];
 $prod_name=$array['prod_name'];
$prod_quntity=$array['prod_quntity'];
$prod_price=$array['prod_price'];
	$prod_des=$array['prod_des'];
	$status=$array['status'];
$total=	$prod_quntity*$prod_price;
					?>
                        <tr class="tion">
                            <td><?php echo "<img class='imgpp' src=img/".$prod_img.">"; ?></td>
                            <td><?php echo $prod_name; ?></td>
                            <td><p><?php echo $prod_des; ?></p></td>
                            <td>
<?php echo $prod_quntity; ?>

</td>
                            <td ><?php echo $prod_price; ?></td>
							 <td ><?php echo $total; ?></td>
                            <td ><?php 
							
							if($status=="pending"){
								$status.=" <a href=deliverit.php?id=$orderid><font color=blue>Deliver</font></a>";
							}
							echo $status; 
						
						?></td>
                        </tr>
                 <?php 
 //echo $array['cartid'].'<br />';
   //echo $array['prod_id'].'<br />';
}				 ?>     
                     
                       
                    </tbody>
                </table>
            </div>
        </div>
		 
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-8">
               <a href=dashboard.php>  <button class="btn btn-block btn-light">Back To Dashboard</button></a>
                </div>
              
            </div>
        </div>
		
    </div>
</div>





