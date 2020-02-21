<?php
include("admin/config.php");
if(isset($_POST['username']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
  	$sel=mysqli_query($conn,"select * from signup where Username='".$username."' AND Password='".$password."'limit 1");
	if(mysqli_num_rows($sel)==1)
  	{
		header("Location:/Food/food_item.php");
   	}
	else
	{
		echo "id and password do not match";
		exit();
	}
}
?>