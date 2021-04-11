<?php
include("header1.html");
include("config.php");
if(isset($_REQUEST['submit']))
{
	$username = $_POST['username'];
	$query = "select * from signup where Username='$username'";
    $result = mysqli_query( $conn, $query);
	if (mysqli_num_rows($result) > 0){
		echo '<script>alert("Account with this username already exists!")</script>';
	}
	else{
        $name = $_POST['name'];
		$username = $_POST['username'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$pass = $_POST['password'];
		$confirm_password= $_POST['confirm_password'];
        if(isset($_POST['gender']))
        {
            $gender = $_POST['gender'];
        }
        else{
            $gender = NULL;
        }

		if($confirm_password==$pass){
			$password=md5($confirm_password);
			$sql = "insert into signup(Username,Name,Mobile,Password,Address,Gender) values ('$username','$name',$mobile,'$password','$address','$gender')";
			$insert = mysqli_query( $conn, $sql);
			header("Location:login.php");;
		}
		else{
			echo '<script>alert("Password and confirm password is not same")</script>'; 
		}
	}
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>    
body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/macron.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 113vh;
    font-size: 18px;
    overflow-x: hidden;
    align-items: center;
	font-family: 'Times New Roman', Times, serif;
}
.overlay {
    height: 100vh;
    width: 100%;
    display: contents;
    justify-content: center;
    align-items: center;
}
.modal-signup {		
	color: #636363;
	width: 400px;
}
.modal-signup .modal-content {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.modal-signup .modal-content h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.modal-signup .modal-content h2:before, .modal-signup .modal-content h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.modal-signup .modal-content h2:before {
	left: 0;
}
.modal-signup .modal-content h2:after {
	right: 0;
}
.modal-signup .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-signup .form-control:focus {
	border-color: #70c5c0;
}
.modal-signup .form-control, .modal-login .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-signup .close {
	position: absolute;
	top: -5px;
	right: -5px;
}			

.modal-signup .btn, .modal-login .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #fc8019 !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-signup .btn:hover, .modal-signup .btn:focus {
	opacity: 0.8;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}

</style>
</head>
<body>
<div class="overlay">
<div class="modal-dialog modal-signup">
		<div class="modal-content">
         <h2>Sign Up</h2>
			<div class="modal-body">
				<form action="signup.php" method="post">
				<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Name" required="required">		
					</div>
					<div class="form-group">
						<input type="email" class="form-control" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$" name="username" placeholder="Username/Email" required="required">		
					</div>
					<div class="form-group">
						<input type="phone" class="form-control" title="Please enter valid number!" pattern="[1-9]{1}[0-9]{9}" name="mobile" placeholder="Mobile No" required="required">		
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="address" placeholder="Address" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>  
					<div class="form-group">
						<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">	
                    </div>
					<div class="form-group">
						Gender  
						&nbsp;<input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                    </div> 
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-btn">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.html");
?>
</body>
</html>