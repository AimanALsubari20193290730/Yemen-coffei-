<?php
include ('admin/conn.php');	
$sql ="";
if(isset($_GET['id'])){
	$cartid=$_GET['id'];
$sql = "delete from  cart_tb where cartid=".$cartid;

  $result = $conn->query($sql);
}

//ob_start();
    header('Location: addtomycart.php');
  //  ob_end_flush();
    //die();



?>