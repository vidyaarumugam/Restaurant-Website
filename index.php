<?php
session_start();
  if(isset($_SESSION['Username']))
  {
      $username = $_SESSION['Username'];
      if ($username == "admin") {
              include("header.html");
          }
      else
      {
              include("header2.html");
      }
  }
  else{
      include("header1.html");
  }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Backbenchers </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

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
        font-family: 'Times New Roman', Times, serif;
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