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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>    
body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/macron.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 120vh;
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
.form-control {
	font-size: 15px;
}
.form-control, .form-control:focus, .input-group-text {
	border-color: #e1e1e1;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 425px;
	margin: 0 auto;
	padding: 30px 0;		
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2 {
	color: black;
	margin-top: 0;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form  h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}
.signup-form  h2:before {
	left: 0;
}
.signup-form  h2:after {
	right: 0;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form label {
	font-weight: normal;
	font-size: 15px;
}
.signup-form .form-control {
	min-height: 38px;
	box-shadow: none !important;
}	
.signup-form .input-group-addon {
	max-width: 42px;
	text-align: center;
}	
.signup-form .btn, .signup-form .btn:active {        
    color: #fff;
	border-radius: 4px;
	background: #fc8019 !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	opacity: 0.8;
}
.signup-form a {
	color: #fff;	
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #19aa8d;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}
.signup-form .fa {
	font-size: 21px;
}
.signup-form .fa-mobile {
	font-size: 25px;
    width: 19px;
}
.signup-form .fa-user {
	font-size: 25px;
    width: 19px;
}
.signup-form .fa-lock {
	font-size: 25px;
    width: 19px;
}
.signup-form .fa-address-card {
	font-size: 20px;
    width: 19px;
}
.signup-form .fa-check {
	color: #fff;
	left: 17px;
	top: 18px;
	font-size: 7px;
	position: absolute;
}
.fa-transgender:before {
    color: #495057;
}
b{
	color: black;
}
</style>
</head>
<body>
<div class="overlay">
<div class="signup-form">
    <form action="signup.php" method="post">
		<h2>Sign Up</h2>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-user"></span>
					</span>                    
				</div>
                <input type="text" class="form-control" name="name" placeholder="Name" required="required">		
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-envelope"></span>
					</span>                    
				</div>
                <input type="email" class="form-control" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$" name="username" placeholder="Username/Email" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-mobile"></i>
					</span>                    
				</div>
                <input type="phone" class="form-control" title="Please enter valid number!" pattern="[1-9]{1}[0-9]{9}" name="mobile" placeholder="Mobile No" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-address-card"></i>
					</span>                    
				</div>
                <input type="text" class="form-control" name="address" placeholder="Address" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-lock"></i>
					</span>                    
				</div>
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-lock"></i>
						<i class="fa fa-check"></i>
					</span>                    
				</div>
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
			</div>
        </div>
        <div class="form-group">
		<i class="fa fa-transgender"></i>
        <b>Gender</b>
		&nbsp;&nbsp;<input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
		</div>
		<div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-btn">Submit</button>
        </div>
    </form>
</div>
</div>
<?php
include("footer.html");
?>
</body>
</html>