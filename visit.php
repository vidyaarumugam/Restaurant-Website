﻿<?php
session_start();
if (isset($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    if ($username == "admin") {
        include("header.html");
    } else {
        include("header2.html");
    }
} else {
    include("header1.html");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Visit</title>
    <link rel="stylesheet" type="text/css" href="css/visit.css">
</head>

<body>
    <div class="overlay">
        <div class="heading">
            <h2>GET IN TOUCH</h2>
        </div>
    </div>
    <div class="main">
        <div class="row">
            <div class="sqs-block">
                <div class="sqs-block-content">
                    <br>
                    <p class="center"><strong><em>Use Below given details to contact our Restaurant .</em></strong><br /></p><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <div class="sqs-block">
                    <div class="sqs-block-content">
                        <p class="center"><strong><em>Contact</em></strong><br />206-555-7890<br />backbenchers@gmail.com</p><br>
                        <p class="center"><em><strong>Location</strong></em><br />25 Fake Street<br>New York, NY — 10003</p><br>
                        <p class="center"><em><strong>Hours</strong></em><br />Monday - Friday &nbsp;11am — 9pm<br />Saturday &nbsp;12pm — 6pm<br />Sunday &nbsp;12pm — 5pm</p><br>
                        <p class="center"> </p>
                    </div>
                </div>
            </div>

            <div class="column">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=25%20Fake%20street,%20New%20York,%20NY%20-%2010003&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://yggtorrent-fr.com"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            </div>
        </div>
    </div>
    <?php
    include("footer.html");
    ?>
</body>

</html>