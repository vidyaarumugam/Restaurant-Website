<?php
include("config.php");
if(isset($_POST['username']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username=="admin" and $password=="admin")
  	{
		header("Location:additem.php");
   	}
	else
	{
		echo "<script type='text/javascript'>alert('Invalid');</script>";
	}
}
?>
<html>
<head>
<title>Login Here</title>
<style>
body{
	margin:0;
	padding:0;
	background: url(../images/cafe2.jpg);
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
}
header{
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  height:20vh;
  }
.clearfix:after{
  content: ".";
  visibility: hidden;
  display: block;
  height: 0px;
  clear: both;
}
.mainbody{
  max-width:1180px;
  margin:0 auto;
}
.logo{
  height:70px;
  width:auto;
  float:left;
  margin-top:20px
}
.login{
	width: 320px;
	height: 420px;
	background: rgba(0, 0 ,0,0.5);
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}
h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}
.login p{
	margin: 0;
	padding: 0;
	font-weight: bold;
}
.login input{
	width: 100%;
	margin-bottom: 20px;
}
.login input[type="text"],input[type="password"],input[type="email"]
{
	border: none;
	border-bottom: lpx solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
.login input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background: #1c8adb;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
.login input[type="submit"]:hover
{
	cursor: pointer;
	background: #39dc79;
	color: #000;
}
.login a{
	text-decoration: none;
	font-size: 14px;
	color: #fff;
}
.login a:hover
{
	color: #39dc79;
}
</style>
<body>
<header>
	  	<nav>
	      <div class="mainbody clearfix">
	        <img src="../images/image.jpg" class="logo">
	      </div>
	    </nav>
    </header>
	<div class="login">
	<h1>Admin Login Here</h1>
	<form name="login1" method="POST">
		<p>Username</p>
		<input type="text" id="username" required name="username" placeholder="Enter Username">
		<label id="user" style="color:red;visibility:hidden;">Invalid</label>
		<p>Password</p>
		<input type="password" id="password" required name="password" placeholder="Enter Password">
		<input type="submit" name="login" value="Login"><br><br>
	</form>
	</div>
</body>
</head>
</html