<html>
<body>
<?php
   $dbhost = 'localhost';  
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'test';
   
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
       if(! $conn) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	
	$sql = "INSERT INTO signup (Name,Username,Password,Mobile,Address,Gender) VALUES ('$name','$username','$password','$mobile','$address','$gender')";
	if(mysqli_query($conn, $sql)){
         header("Location: /Food/frame.html");
    } else{
    echo "ERROR: Could not execute insert $sql. " . mysqli_error($conn);
   }
   
// close connection
   mysqli_close($conn);
?>
</body>
</html>