<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:shop.php"); //to redirect back to "shop.php" after logging out
exit();
?>