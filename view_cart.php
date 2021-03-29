<?php
include("config.php");
include("header2.html");
// header("Content-Type: application/json; charset=UTF-8");
// $_POST = json_decode(file_get_contents('php://input'), true);
// $allocate_data = json_decode($_REQUEST['data']);
// echo($allocate_data);
// echo($_POST);
// $teacher= $allocate_data->{'teacher'};
// $student= $allocate_data->{'student'};

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
        var favoriteMovie = sessionStorage.getItem('favoriteMovie');
        //   alert(favoriteMovie);
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
                    $id = ["1", "2", "3"];
                    foreach ($id as $char) {
                        $query = "SELECT * FROM `tbl_images` WHERE id = '$char'";
                        $search_result = mysqli_query($conn, $query);
                        while ($rows = mysqli_fetch_array($search_result)) {

                            echo
                            '
				<div class="card">
				<img src="' . $rows['image'] . '" class = "res-image"/>	
				<div class="res-details">	
				<div>		
					<div id="name" data-foodid="' . $rows['id'] . '" class="res-name"><span class="veg-indian-vegetarian"></span>' . $rows['Name'] . '</div>
					
					</div>
					<div class="rating-value">Rs.' . $rows['Price'] . '</div>
                    <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      Quantity
                    </button>
                    <div class="dropdown-menu">
                      <li class="dropdown-item" href="#">1</li>
                      <li class="dropdown-item" href="#">2</li>
                      <li class="dropdown-item" href="#">3</li>
                      <li class="dropdown-item" href="#">4</li>
                      <li class="dropdown-item" href="#">5</li>
                      <li class="dropdown-item" href="#">6</li>
                      <li class="dropdown-item" href="#">7</li>
                      <li class="dropdown-item" href="#">8</li>
                      <li class="dropdown-item" href="#">9</li>
                      <li class="dropdown-item" href="#">10</li>
                    </div>
                  </div>
				</div>
                <button type="button" class="close" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
			</div>
					';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="ofo-column-shipping">
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