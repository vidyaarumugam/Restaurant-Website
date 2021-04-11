<?php
 include 'config.php';
 session_start();
$comment = $_POST["comment"];
$ratings = $_POST["ratings"];
 $username=$_SESSION['Username'];
// $username="pqr@gmail.com";
 
mysqli_query($conn, "UPDATE orders SET rating='".$ratings."',comment='".$comment."' WHERE  Username='".$username."'");
 

echo "Thank you for your feedback";
?>