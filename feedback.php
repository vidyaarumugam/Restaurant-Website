<?php
include("config.php");
include("header2.html");
?>
<!DOCTYPE html>
<html>

<head>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/feedback.css">
<script src="starrr.js"></script>
 
</head>

<body>


    <div class="overlay">
        <div class="heading">
            <h2>Feedback</h2>
        </div>
    </div>
    <div class="main" style="display: flex;justify-content: center;">
    
        <div class="row">
            <div class="column">
                <div class="sqs-block-content" style="display: flex;justify-content: center;">

                    <div class="shipping" style="display: flex;justify-content: center">
                    <form method="post" onsubmit="return saveRatings(this);">
                    <br>
                    <br>
                    <h6 style="text-align: left;text:bold;">
                    Rating:
                    </h6>
    <div class="starrr"></div>
    <h6 style="text-align: left;text:bold;">
                    Comment:
                    </h6>
                            <textarea rows="3' type=" text" id="comment" required name="comment" placeholder="Enter Comment"></textarea>
                            <br>
                            <button class="button" type="submit" name="insert" id="insert">Submit</button>

                        </form>
    
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
var ratings = 0;
$(function () {
    $(".starrr").starrr().on("starrr:change", function (event, value) {
        ratings = value;
    });
});
 
    function saveRatings(form) {
    var comment = form.comment.value;
 
    $.ajax({
        url: "save_ratings.php",
        method: "POST",
        data: {
            "comment": comment,
            "ratings": ratings
        },
        success: function (response) {
            // whatever server echo, that will be displayed here in alert
            alert(response);
            window.location.href = "index.php";

        }
    });
 
    return false;
}
</script>
    <?php
    include("footer.html");
    ?>
</body>

</html>