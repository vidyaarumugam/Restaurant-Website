<?php
include("config.php");
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
    <title>Eat </title>
    <link rel="stylesheet" type="text/css" href="css/eat.css">
</head>

<body>
    <div class="overlay">
        <div class="heading">
            <h2>Menu</h2>
        </div>
    </div>
    <div class="main">
        <div class="sqs-block html-block sqs-block-html">
            <div class="sqs-block-content">
                <p class="center"><strong><em>Modern dishes that capture the flavors of the season</em></strong><br /></p><br>
            </div>
        </div>
        <div class="row1">
            <?php
            $query = "SELECT * FROM tbl_images WHERE Type NOT LIKE '%juice%' ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
            while ($rows = mysqli_fetch_array($result)) {

                echo
                '
            <div class="odd center">
                <div class="first-level">
                    <div class="name">' . $rows['Name'] . '</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>' . $rows['Price'] . '</em></span>                    
                </div>
            </div>

                ';
            }

            ?>

        </div>
    </div>
    <?php
include("footer.html");
?>
</body>


</html>