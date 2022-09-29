<?php include 'header.php';
 $usertype = $_SESSION["usertype"];
if($usertype=='admin'){
	header('Location:../adminlist.php');
exit;
}

?>

<html>
<head>

</head>
<body class="tab">
<form class="dash forr">
<br>
 <a class="myButton" target="_blank" href="orderhistorycustomer.php">Order History<img src="img/history.png" class="imgicon"></a>
 <a class="myButton" target="_blank" href="profilecustomer.php">My profile<img src="img/man.png" class="imgicon"></a>
</form>
</body>
</html>

