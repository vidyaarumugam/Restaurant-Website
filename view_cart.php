<?php
session_start();
include("config.php");
include("header2.html");
$id = $_COOKIE['foodid'];
$v = explode(",", $id);

$username = $_SESSION['Username'];
$query1 = "SELECT * FROM `signup` WHERE Username = '$username'";
$result = mysqli_query($conn, $query1) or die(mysql_error());

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="http://static.sasongsmat.nu/fonts/vegetarian.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/view_cart.css">
    <script>
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function placeOrder()
        {


        }
    
    </script>
</head>

<body>
    <div class="overlay">
        <div class="heading">
            <h2>VIEW CART</h2>
        </div>
    </div>
    <div class="ofo-main">
        <div class="ofo-row-1">
            <div class="ofo-column">
                <div class="card-container">
                    <?php
                    $total = 0;
                    foreach ($v as $char) {
                        $query = "SELECT * FROM `tbl_images` WHERE id = '$char'";
                        $search_result = mysqli_query($conn, $query);
                        while ($rows = mysqli_fetch_array($search_result)) {
                            $total = $total + $rows['Price'];

                            echo
                            '
				<div class="card">
				<img src="' . $rows['image'] . '" class = "res-image"/>	
				<div class="res-details">	
				<div>		
					<div id="name" data-foodid="' . $rows['id'] . '" class="res-name"><span class="veg-indian-vegetarian"></span>' . $rows['Name'] . '</div>
					
					</div>
					<div class="rating-value">Rs.' . $rows['Price'] . '</div>
                  
                            Quantity: 
                        <select id="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        </select>
                </div> 
                
		
			</div>
     
					';
                        }
                    } ?>
                </div>
            </div>
            <div class="ofo-column-shipping">
                <div class="sqs-block-content">

                    <div class="shipping">
                        <form method="post">
                            <h4>Shipping Details</h4>
                            <?php $rows = mysqli_fetch_array($result, MYSQLI_ASSOC); ?>
                            <label>Name : </label><br>
                            <input type="text" id="name" required name="name" value="<?php echo $rows["Name"] ?>">
                            <label>Address : </label><br>
                            <textarea rows="4' type=" text" id="address" required name="address"><?php echo $rows["Address"] ?></textarea>
                            <button onclick="document.getElementById('id01').style.display='block'" class="button" type="submit" name="insert" id="insert" value="Add Item">Place Order</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="ofo-row-1">
        <div class="total">Total : Rs.<?php echo $total ?></div>
        </div>
    </div>
    <div id="id01" class="modal">

        <form class="modal-content animate" action="">

            <div class="ofo-container">
                <h4 style="text-align:center;margin-bottom:20px;">Payment Mode</h4>
                <input type="radio" id="cod" value="cod" name="payment">
                <label for="cod">Cash on delivery</label><br>
                <input type="radio" id="online" value="online" name="payment">
                <label for="online">Online Payment</label>

                <button type="submit"><b>Proceed</b></button>

            </div>

            <div class="ofo-container">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>
    <?php
    include("footer.html");
    ?>
</body>

</html>