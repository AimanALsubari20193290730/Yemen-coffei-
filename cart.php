<?php
include 'header.php';
include ('admin/conn.php');	

    if(!isset($_SESSION["useremail"]))
	{	echo "<br><br><br><br><br><br>";
	echo "<center>";
	die("login first");}
	$useremail = $_SESSION["useremail"];
$myquery="insert into order_tb (prod_id,prod_name,prod_price,prod_img,prod_des,prod_quntity,useremail) select prod_id,prod_name,prod_price,prod_img,prod_des,prod_quntity,useremail from cart_tb where useremail='$useremail'";

$myresult = $conn->query($myquery);

	$myquery="delete from cart_tb where useremail='$useremail'";

$myresult = $conn->query($myquery);
echo "<script> window.location = 'orderhistorycustomer.php'; </script>";
?>