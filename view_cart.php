<?php
session_start();
include("config.php");
include("header2.html");
$id = $_COOKIE['foodid'];
$v = explode(",", $id);

$id = $_COOKIE['orderDetails'];
$tst = json_decode($id);
$foodDetails = $tst->foodDetails;

$username = $_SESSION['Username'];
$query1 = "SELECT * FROM `signup` WHERE Username = '$username'";
$result = mysqli_query($conn, $query1) or die(mysql_error());

if (isset($_POST["submit"])) {

    // if($pay == "p_on_d")
    // {

    $pay = ($_REQUEST['pay']);
    if ($pay == "p_on_d") {
        $pay_id = uniqid('s', false);
        for ($i = 0; $i < count($foodDetails); $i++) {
            $food_id = $foodDetails[$i]->id;
            $quantity = $foodDetails[$i]->quantity;

            $sql = "INSERT INTO `orders` (`food_id`, `quantity`, `payment`, `Username`,`mode`) VALUES ('$food_id','$quantity', '$pay_id', '$username', 'COD')";
            if (mysqli_query($conn, $sql)) {
                header("location: success_order.php");
            } else {
                echo "No pay";
            }
        }
    } else if ($pay == "p_online") {
        header("location: pay.php");
    }
    header("Refresh:0");
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="http://static.sasongsmat.nu/fonts/vegetarian.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/view_cart.css">
    <script>
        function getCookie(name) {
            return document.cookie
                .split('; ')
                .find(row => row.startsWith(`${name}=`))
                .split('=')[1];
        }

        function onDelete(event) {
            let foodid = event.currentTarget.getAttribute('data-foodid');
            let cardElem = event.target.parentElement.parentElement;
            let unitPriceElem = $(cardElem).find('.unit-price');
            let foodids = getCookie('foodid');
            let foodIdsArray = foodids.split(",");
            foodIdsArray.splice(foodIdsArray.indexOf(foodid), 1);
            foodids = foodIdsArray.join(",");
            document.cookie = 'foodid=' + foodids;
            cardElem.remove();
            let totalElem = $('.total-value');
            totalElem.text(totalElem.text() - unitPriceElem.text());
        }

        function onQuantityChange(event) {
            ratingElem = $(event.target.parentElement).find('.rating-value');
            let unitPriceElem = $(event.target.parentElement).find('.unit-price');
            let total = ratingElem.attr('data-price') * event.target.value;
            ratingElem.html(ratingElem.attr('data-price') + ' x ' + event.target.value +
                ' = Rs.<span class="unit-price">' + total + '</span>');
            let totalElem = $('.total-value');
            totalElem.text(totalElem.text() - unitPriceElem.text() + total);
        }

        function onPlaceOrder() {
            let foodNames = $('.card-container .res-name');
            let quantites = $('.card-container #quantity');
            let foodDetails = [];
            foodNames.each((index, elem) => {
                foodDetails.push({
                    id: elem.getAttribute('data-foodid'),
                    quantity: quantites.get(index).value
                });
            });
            console.log(foodDetails);
            let orderDetails = {
                foodDetails,
                total: $('.total-value').text()
            };
            document.cookie = 'orderDetails=' + JSON.stringify(orderDetails);
            let total = $('.total-value').text();

            if (total == 0) {
                alert("Cart is empty");
            } else {
                document.getElementById('id01').style.display = 'block';
            }
        }

        function action() {

        }

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
                        <div class="rating-value" data-price=" ' . $rows['Price'] . '">' . $rows['Price'] . ' x 1 = Rs.<span class="unit-price">' . $rows['Price'] . '</span></div>
                            Quantity: 
                            <select id="quantity" onChange="onQuantityChange(event)">
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
                    <div><i data-foodid="' . $rows['id'] . '" onclick="onDelete(event)" class="fa fa-trash"></i></div>	
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
                            <textarea rows="4" type="text" id="address" required name="address"><?php echo $rows["Address"] ?></textarea>
                            <button class="button" onclick="onPlaceOrder()" type="button" name="insert" id="insert" value="Add Item">Place Order</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="ofo-row-1">
            <div class="total">Total : Rs.<span class="total-value"><?php echo $total ?></span></div>
        </div>
    </div>
    <div id="id01" class="modal">

        <form class="modal-content animate" method="POST">

            <div class="container">
                <button class="close-btn">
                    <i class="fa fa-close"></i>
                </button>
                <table>
                    <tr>
                        <td>
                            <h4>Payment mode</h4>

                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 20px;"><input type="radio" name="pay" value="p_on_d" /> Cash on delivery</td>
                    </tr>
                    <tr>
                        <td style="font-size: 20px;"><input type="radio" name="pay" value="p_online" /> Online payment</td>
                    </tr>
                </table>


                <button style="background-color: #fc8019; color: #000;" type="submit" name="submit">Proceed</button>

            </div>


        </form>
    </div>
    <?php
    include("footer.html");
    ?>
</body>

</html>