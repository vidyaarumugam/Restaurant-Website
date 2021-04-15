<?php
include("header2.html");
?>
    <html>

    <head>
        <title>Gallery</title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }               
        
        .clearfix:after {
            content: ".";
            visibility: hidden;
            display: block;
            height: 0px;
            clear: both;
        }
        
        .mainbody {
            max-width: 2000px;
            margin: 0 auto;
        }
        
       .row1 {
           display: flex;
           /* width: 100%; */
           align-items: center;
           height: 700px;
       }
       .row1 img {
           height: 100%;
       }
        
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/image2.jpg');
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
            height: 80vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h2{
            font-weight: bold;
    font-size: 44px;
    letter-spacing: 2px;
    padding-bottom: 20px;
    font-family: 'Source Sans Pro', sans-serif;
    color: #fff;
        }
        #scroll {
    background: none;
    border: none;
}
        
    </style>

    <body>
       <div class="overlay">
       <div class="heading first">
            <button type="button" id="scroll">
                <h2>OUR GALLERY</h2>
            </button>
        </div>
</div>       
        <div class="gallery">
            <div class="row1">
                <img src="images/fries.jpg" width="800">
                <img src="images/backbenchers.jpg" width="100%">
            </div>
            <div class="row1">
                <img src="images/burger.jpg" width="100%">
            </div>
            
            <div class="row1">
                <img src="images/wraps3.jpg" width="800">
                <img src="images/pasta5.jpg" width="100%">
            </div>
            <div class="row1">
                <img src="images/mouse.jpg" width="100%">
            </div>
            
            <div class="row1">
                <img src="images/macron.jpg" width="800">
                <img src="images/backbenchers1.jpg" width="100%">
            </div>
            <div class="row1">
            <img src="images/burger3.jpg" width="100%">
            </div>
            
            <div class="row1">
                <img src="images/food.jpg" width="800">
                <img src="images/juice.jpg" width="100%">
            </div>
            <div class="row1">
                <img src="images/juice1.jpg" width="100%">  
            </div>            
            <div class="row1">
                <img src="images/peanut.jpg" width="800">
                <img src="images/pizza1.jpg" width="100%">
            </div>           
        </div>
        <?php
include("footer.html");
?>
    </body>
    <script>
    $("#scroll").click(function() {
        $('html,body').animate({
                scrollTop: $(".gallery").offset().top
            },
            'slow');
    });
</script>

    </html>