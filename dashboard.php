<?php
session_start();
 $usertype = $_SESSION["usertype"]   ;	 
	if($usertype=="admin"){
header('Location:dashboardadmin.php');
exit();

	}  
	elseif($usertype=="customer"){
header('Location:dashboardcustomer.php');
exit();
	}  
	elseif($usertype=="seller"){
header('Location:dashboardseller.php');
exit();
}  
?>