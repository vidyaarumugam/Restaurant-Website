<?php
session_start();
$username = $_SESSION['username'];
// $username  = "admin";
if ($username == "admin") {
    include("header.html");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Backbenchers </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<style>
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/macron.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
        font-size: 20px;
        overflow-x: hidden;
        align-items: center;
    }
</style>

<body>
    <div class="overlay">
        <div class="center-body">
            <div class="address">
                <p>25 Fake Street — New York, NY — 10003</p>
            </div>
            <div class="button">
                <li>
                    <a href='eat.php'>EAT</a>
                </li>
                <li>
                    <a href='drink.php'>DRINK</a>
                </li>
                <li>
                    <a href='visit.php'>VISIT</a>
                </li>
            </div>
        </div>
    </div>
    
    <?php
include("footer.html");
?>
   
</body>

</html>