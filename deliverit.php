<?php
include ('admin/conn.php');	
$sql ="";
if(isset($_GET['id'])){
	$orderid=$_GET['id'];
$sql = "update order_tb set status='delivered' where orderid=".$orderid;

  $result = $conn->query($sql);
}

//ob_start();
    header('Location: orderhistoyrseller.php');
  //  ob_end_flush();
    //die();



?>