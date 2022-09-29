<?php include 'header.php';


?>
<html>
<head>
<link rel="stylesheet"  href="styleadmin.css" >
</head>
<body class="for">
<h1 class="title"> Customers list</h1>
<?php
include ('admin/conn.php');


$sql = "SELECT id,name,email,phonenumber,Address,password FROM user_tb";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	?>
	<table id="products">
<tr>
<th> Id </th>
<th> Name </th>
<th> email </th>
<th> phone number </th>
<th> address </th>
<th> password </th>
<th> Delete</th>


</tr>
	<?php
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  $id=$row["id"];
	   $name=$row["name"];
	    $email=$row["email"];
		 $phonenumber=$row["phonenumber"];
		 $Address=$row["Address"];
		  $password=$row["password"];
		 
    
echo "<tr> <td> $id</td> <td>  $name</td> <td> $email </td><td>$phonenumber </td><td>$Address </td><td> $password </td> <td> <a href=admin/deleteuser.php?id=$id>Delete </a></td></tr> ";
	
	
	
  }
} else {
  echo "0 results";
}


?>
</table>
</body>
</html>
