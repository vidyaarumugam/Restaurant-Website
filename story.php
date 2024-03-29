<?php
include("header2.html");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Story</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/story.css">
</head>


<body>
    <div class="overlay">
        <div class="heading first">
            <button type="button" id="scroll">
                <h2>STORY</h2>
            </button>
        </div>
    </div>
    <div class="main">
    <div class="row">
            <div class="sqs-block">
                <div class="sqs-block-content">
                    <br>
                    <p class="center"><strong><em><q id="a">Cooking with LOVE provides FOOD for the SOUL</q></em></strong><br /></p><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="video">
            <video id="promo_video" width="800px" controls autoplay muted>
                <source src="images/Promo.mp4" type="video/mp4">
            </video>
        </div></div>
        <div class="row">
            <div class="column">
                <div class="sqs-block-content">
                    <br><br>
                    <h3 class="center"> Our Story </h3><br>
                    <p>Everything we do is a celebration - from how we source our food to serving up new ways for you to enjoy it.<br> We have more than 50 restaurants and 1000 team members in more than 3 countries. <br>We never stop driving ourselves to
                        deliver hot foods, fast every time - anywhere you want to enjoy it.

                    </p><br>
                    <p>Since 1987, we've been committed to bringing you a food experience you won't find anywhere else.</p><br>
                    <p>"The secret ingredient is always LOVE"</p><br><br><br><br>
                </div>
            </div>
            <div class="column">
                <div class="sqs-block-content">
                    <br><br>
                    <h3 class="center"> Our Team </h3><br>
                    <div class="team-links">
                        <!-- member 1 link -->
                        <div class="team-item">
                            <img src="images/chef1.jpg" alt="" class="respimg">
                            <span class="chefname">Chef Amninder Sandhu</span>
                            </a>
                        </div>
                        <!-- member 2 link -->
                        <div class="team-item">
                            <img src="images/vikas.jpg" alt="" class="respimg">
                            <span class="chefname">Chef Vikas Khanna</span>
                            </a>
                        </div>

                        <!-- member 3 link -->
                        <div class="team-item">
                            <img src="images/ranveer.jpg" alt="" class="respimg">
                            <span class="chefname">Chef Ranveer Brar</span>
                            </a>
                        </div>
                        <!-- member 4 link -->
                        <div class="team-item">
                            <img src="images/sanjeev.jpg" alt="" class="respimg">
                            <span class="chefname">Chef Sanjeev Kapoor</span>
                            </a>
                        </div>
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