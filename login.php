<?php
session_start();
include("header1.html");
include("config.php");
if(isset($_REQUEST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM signup WHERE Username = '$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if (md5($password)==$row['Password'] && $username==$row['Username']) {

            $_SESSION['Username'] = $row['Username'];
            header("Location:index.php");
            
        }else if($username == "admin" && $password == "admin")
        {
            $_SESSION['Username'] = "admin";
            header("Location:index.php");
        } 
        else {
            echo '<script>alert("Invalid Username or Password")</script>';
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style>    
body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/macron.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 120vh;
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
	background: #fc8019 !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-login .btn:hover, .modal-login .btn:focus {
	opacity: 0.8;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>
<script>
	document.cookie = "foodid=";
</script>
</head>
<body>
<div class="overlay">
    </div>
<div class="modal-dialog modal-login">
		<div class="modal-content">
         <h4>Log in</h4>
			<div class="modal-body">
				<form action="login.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="forgot_password.php">Forgot Password?</a>
			</div>
		</div>
	</div>
    <?php
include("footer.html");
?>
</body>
</html>