<?php
include("config.php");
include("header2.html");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./css/view_cart.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function testJS() {

            var b = document.getElementById('name').value;
            var data = {

            }
            alert(b);

        }
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</head>

<body>
    <div class="overlay">
        <div class="heading">
            <h2>VIEW CART</h2>
        </div>
    </div>
    <div class="main">
        <div class="row">
            <div class="column">
                <div class="sqs-block-content">

                    <div class="shipping">
                        <form method="post">
                            <h4>Shipping Details</h4>
                            <input type="text" id="name" required name="name" placeholder="Enter name">
                            <br />
                            <textarea rows="4' type=" text" id="address" required name="address" placeholder="Enter Address"></textarea>
                            <br />
                            <button onclick="document.getElementById('id01').style.display='block'" class="button" type="submit" name="insert" id="insert" value="Add Item">Place Order</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="id01" class="modal">
  
        <form class="modal-content animate" action="/action_page.php">
  
            <div class="container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
  
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
  
                <button type="submit">Login</button>

            </div>
  
            <div class="container">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>
    <?php
    include("footer.html");
    ?>
</body>

</html>