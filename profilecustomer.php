<?php
include('header.php');
 
include("admin/conn.php");

?>
<html>
<head>
 <title></title>



<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<link rel="stylesheet" href="styl.css">
</head>

<body class="tab">
<?php

$email=$_SESSION["useremail"];

$sql = "SELECT id,name,email,phonenumber,Address,password FROM user_tb where email='$email'";

$result = $conn->query($sql);
$id="";
$name="";
$email="";
$phonenumber="";
$Address="";
$password="";
while($row = $result->fetch_assoc()) {
	  $id=$row["id"];
	   $name=$row["name"];
	    $email=$row["email"];
		 $phonenumber=$row["phonenumber"];
		 $Address=$row["Address"];
		 $password=$row["password"];
		
}

	?>

<!-- This is a shop for phone -->
 <h2 class="h11">My   profile </h2>
<div class="phone">

 <table class="table table-bordered tabl ">
    <thead>
      <tr>
        <th class="thh">Name</th>
        
        <td class="tth"><?php echo $name;?></td>
        
       
      </tr>
      
    </tbody>
	
	 <thead>
      <tr>
       
         <th class="thh">Email</th>
        
        <td class="tth"><?php echo $email;?></td>
       
       
      </tr>
      
    </tbody>
	
	 <thead>
      <tr>
       
         <th class="thh">Phone number</th>
		 
        <td class="tth"><?php echo $phonenumber;?></td>
		
       
      </tr>
      
    </tbody>
	
	 <thead>
      <tr>
        
		  <th class="thh">Address</th>
       
		 <td class="tth"><?php echo $Address;?></td>
       
       
      </tr>
      
    </tbody>
	
	 <thead>
      <tr>
       
        <th class="thh">Password</th>
	
        <td class="tth"><?php echo $password;?></td>
      
       
      </tr>
      
    </tbody>
	
	 
	
	 <thead>
      <tr>
       
         <th class="thh">Edit</th>
      
        
       <td class="tth"><a class="ordr" target="_blank" href="editecustomerprofile.php"> edit</a></td>
       
      </tr>
      
    </tbody>

  </table>
</div>


</body>
</html>
