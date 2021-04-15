<?php
session_start();
include("config.php");
include("header2.html");
$username= $_SESSION['Username'];
if (isset($_POST['submit'])) {
	$username = $_SESSION['Username'];
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
    $gender = $_POST['gender'];
	$sql = "UPDATE signup
                SET name='".$name."',mobile='".$mobile."',address='".$address."',gender='".$gender."'
                WHERE Username='$username'";
                $update = mysqli_query( $conn, $sql);
                if ($update) {
                    echo "<script>
                    alert('Profile Updated!');
                    window.location.href='view_profile.php';
                    </script>";
                }else if($name=="" || $mobile=="" || $address=="" )
                {
                    echo "<script>alert('Required fields cannot be empty')</script>";
                } 
                else {
                    echo "<script>alert('Some Problem in updating Profile')</script>". $update;
                }
}
$query = "select * from signup where Username='$username'";
$result = mysqli_query($conn, $query) or die(mysql_error());
?>
<!DOCTYPE html>
<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/story.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 100vh;
    font-size: 20px;
    /* overflow: hidden;  */
    overflow-x: hidden;
    align-items: center;
    font-family: 'Times New Roman', Times, serif;
}
.overlay {
    height: 85vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.main {
    display: grid;
    text-align: center;
}

.mainbody {
    max-width: 2000px;
    margin: 0 auto;
}
.mainbody .btn, .mainbody .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #fc8019  !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
    width: 50%;
    height: 40px;
    margin:auto;
    margin-bottom: 20px;
}
.mainbody .btn:hover, .mainbody .btn:focus {
	opacity: 0.8;
}
h2 {
    font-weight: bold;
    font-size: 44px;
    letter-spacing: 2px;
    padding-bottom: 20px;
    font-family: 'Source Sans Pro', sans-serif;
    color: #fff;
}
.required :after {
  color: red;
  content: " *";
}
#scroll {
    background: none;
    border: none;
}
</style>
</head>

<body>
<div class="overlay">
<div class="heading first">
            <button type="button" id="scroll">
                <h2>UPDATE PROFILE</h2>
            </button>
        </div>
</div>
    <div class="main">
        <div class="mainbody">
    <form action="update_profile.php" method="post">
        <table class="table table-striped table-bordered table-sm" align="center" border="2px" 
        style="background-color:white; width:100%;line-height:20px;">
            <?php
            $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
            ?>
            <tr>
				<td style="padding:20px"><label class="required"><b>Name</label></b></td>
				<td style="padding:20px" colspan="4">
					<input style="padding:5px;" ; type="text" name="name" value="<?php echo $rows['Name'] ?>" />
				</td>
			</tr>
			<tr>
				<td style="padding:20px"><label class="required"><b>Username</b></label></td>
				<td style="padding:20px" colspan="4">
					<?php echo $rows['Username'] ?>
                </td>
			</tr>
            <tr>
            <td style="padding:20px"><label class="required"><b>Mobile</b></label></td>
				<td style="padding:20px" colspan="4">
					<input style="padding:5px;" ; type="number" name="mobile" value="<?php echo $rows['Mobile'] ?>" />
                </td>
            </tr>
            <tr>
            <td style="padding:20px"><label class="required"><b>Address</b></label></td>
				<td style="padding:20px" colspan="4">
					<input style="padding:5px;" ; type="textarea" name="address" value="<?php echo $rows['Address'] ?>" />
                </td>
            </tr>
            <tr>
            <td style="padding:20px"><label><b>Gender</b></label></td>
				<td style="padding:20px" colspan="4">
					<input style="padding:5px;" ; type="text" name="gender" value="<?php echo $rows['Gender'] ?>" />
                </td>
            </tr>
        </table>
           <button value="submit"  name="submit" class="btn btn-primary btn-lg btn-block login-btn">Submit</button>
        </div>
    </div>
    <?php
include("footer.html");
?>
</body>

<script>
    $("#scroll").click(function() {
        $('html,body').animate({
                scrollTop: $(".main").offset().top
            },
            'slow');
    });
</script>
</html>