<?php
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/visit.css">
</head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
//   var work = document.getElementById("work").value;
//   var eat = document.getElementById("eat").value;
//   var tv = document.getElementById("tv").value;
//   var gym = document.getElementById("gym").value;
//   var sleep = document.getElementById("sleep").value;
  var data = google.visualization.arrayToDataTable(

    [
  ['Reviews', 'Rating'],
  ['Excellent', 5],
  ['Great', 4],
  ['Average', 3],
  ['Poor', 2],
  ['Bad', 1]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<body>
    <div class="overlay">
        <div class="heading first">
            <button type="button" id="scroll">
                <h2>GET IN TOUCH</h2>
            </button>
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
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=New%20york-1003&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 600px;
                            }
                        </style><a href="https://www.embedgooglemap.net">google maps embed api</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 500px;
                                width: 600px;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="column">
            <div id="piechart">
            </div>
            </div>
            </div>
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