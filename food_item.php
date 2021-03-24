<?php
include("config.php");
include("header2.html");
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="./css/food_item.css">
	<link rel="stylesheet" href="http://static.sasongsmat.nu/fonts/vegetarian.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
	function testJS()
{

var b = document.getElementById('name').value;
var data = {

}
alert(b);

}
</script>
</head>

<body>
	<div class="overlay">
	<div class="heading">
           <h2>ORDER NOW</h2>
       </div></div>

	<br>
	<div class="header-container">
		<h3 style="margin-left: 70px;"><em>The easiest way to get your favourite food</em></h3>
		<div class="box">
			<form method="POST">
				<div class="search-container">
					<input type="text" name="tosearch" placeholder="Type....">
					<button type="submit" name="search" value="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</form>
		</div>
	</div>

	<br>
	<div class="card-container">

		<?php
		if (isset($_REQUEST['search']) != "") {
			$valueToSearch = $_REQUEST['tosearch'];
			$query = "SELECT * FROM `tbl_images` WHERE Name like '%" . $valueToSearch . "%' OR Type like '%" . $valueToSearch . "%'";
			$search_result = mysqli_query($conn, $query);
			while ($rows = mysqli_fetch_array($search_result)) {

				echo
				'
				<div class="card">
				<img src="' . $rows['image'] . '" class = "res-image"/>	
				<div class="res-details">	
				<div>		
					<div id="name" class="res-name"><span class="veg-indian-vegetarian"></span>' . $rows['Name'] . '</div>
					<div class="cBmpNp"><span>Add</span><i class="rbbb40-1 MxLSp sc-1usozeh-4 TZpZK" size="14" color="#ED5A6B"><svg xmlns="http://www.w3.org/2000/svg" fill="#ED5A6B" width="14" height="14" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" class="rbbb40-0 hoSSCx"><title>plus</title><path d="M15.5 9.42h-4.5v-4.5c0-0.56-0.44-1-1-1s-1 0.44-1 1v4.5h-4.5c-0.56 0-1 0.44-1 1s0.44 1 1 1h4.5v4.5c0 0.54 0.44 1 1 1s1-0.46 1-1v-4.5h4.5c0.56 0 1-0.46 1-1s-0.44-1-1-1z"></path></svg></i></div>
				
					</div>
					<div class="rating-value">Rs.' . $rows['Price'] . '</div>
					<div class="res-des">' . $rows['description'] . '</div>
					
				</div>
			</div>
					';
			}
		} else {
			$query = "SELECT * FROM tbl_images ORDER BY id ASC";
			$result = mysqli_query($conn, $query);
			while ($rows = mysqli_fetch_array($result)) {

				echo
				'
			<div class="card">
			<img src="' . $rows['image'] . '" class = "res-image"/>	
			<div class="res-details">			
				<div class="container">
					<div id="name" class="res-name"><span class="veg-indian-vegetarian"></span>' . $rows['Name'] . '</div>
					<button class="cBmpNp" onclick="testJS()"><span>Add</span><i class="fa fa-shopping-cart"></i></button>
				</div>
				<div class="rating-value">Rs.' . $rows['Price'] . '</div>
				<div class="res-des">' . $rows['description'] . '</div>
				
			</div>
		</div>
					';
			}
		}
		?>
	</div>
	<?php
include("footer.html");
?>
</body>
</html>