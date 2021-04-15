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
    <title>Drink</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/drink.css">
</head>

<body>
    <div class="overlay">
    <div class="heading first">
            <button type="button" id="scroll">
                <h2>Drinks</h2>
            </button>
        </div>

    </div>
    <div class="main">

        <div class="row1">
            <div class="odd center">
                <div class="first-level">
                    <div>Strawberry Juice</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>40</em></span>                    
                </div>
             
                
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Rose Milk</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>35</em></span>                    
                </div>
                
            </div>
            <div class="odd center">
                <div class="first-level">
                    <div>Pineapple Juice </div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>45</em></span>                    
                </div>
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Butter Milk </div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>20</em></span>                    
                </div>
            </div>
            <div class="odd center">
                <div class="first-level">
                    <div>Apple Juice </div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>60</em></span>                    
                </div>
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Milk Shake</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>40</em></span>                    
                </div>
            </div>
            <div class="odd center">
                <div class="first-level">
                    <div>Cold Cream Coffee</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>57</em></span>                    
                </div>
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Pineapple Shake</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>46</em></span>                    
                </div>
            </div>
            <div class="odd center">
                <div class="first-level">
                    <div>Masala Tea </div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>30</em></span>                    
                </div>
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Hot Coffee</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>40</em></span>                    
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