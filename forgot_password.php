<?php
//Forgot Password Page
//session_start();
include("header1.html");
include("config.php");
if(isset($_REQUEST['submit']))
{
    $username = $_POST['username'];
    $newpassword = $_POST['new_password'];
    $confirmpassword = $_POST['confirm_password'];
    $sql = "SELECT * FROM signup WHERE Username = '$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)==1) {
            if($confirmpassword==$newpassword){
                $password=md5($confirmpassword);
                $sql = "UPDATE signup
                SET Password='$password'
                WHERE Username='$username'";
                $update = mysqli_query( $conn, $sql);
                echo "<script>
                    alert('Password Changed Successfully!');
                    window.location.href='login.php';
                    </script>";      
            }
            else{
                echo '<script>alert("Password and Confirm Password is not matching")</script>';
            } 
        }
        else {
            echo '<script>alert("Not a registered user!")</script>';
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
    height: 100vh;
    font-size: 20px;
    align-items: center;
    overflow-x: hidden;
    font-family: 'Times New Roman', Times, serif;
}
.overlay {
    height: 100vh;
    width: 100%;
    display: contents;
    justify-content: center;
    align-items: center;
}
.modal-login {		
	color: #636363;
	width: 350px;
    height: 520px;
}
.modal-login .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-login .form-control:focus {
	border-color: #70c5c0;
}
.modal-login .form-control, .modal-login .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-login .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-login .modal-footer {
	background: #ecf0f1;
	border-color: #dee4e7;
	text-align: center;
	justify-content: center;
	margin: 0 -20px -20px;
	border-radius: 5px;
	font-size: 13px;
}	

.modal-login .btn, .modal-login .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #60c7c1 !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-login .btn:hover, .modal-login .btn:focus {
	background: #45aba6 !important;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>
</head>
<body>
<div class="overlay">
    </div>
<div class="modal-dialog modal-login">
		<div class="modal-content">
         <h4>Reset Password</h4>
			<div class="modal-body">
				<form action="forgot_password.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username/Email ID" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="new_password" placeholder="New Password" required="required">	
					</div>  
                    <div class="form-group">
						<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">	
					</div>       
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-btn">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    <?php
include("footer.html");
?>