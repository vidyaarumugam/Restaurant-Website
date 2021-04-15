<?php
include("config.php");
include("header2.html");
?>
<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/food_item.css">
	<link rel="stylesheet" href="http://static.sasongsmat.nu/fonts/vegetarian.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script>
		function getCookie(name) {
			return document.cookie
				.split('; ')
				.find(row => row.startsWith(`${name}=`))
				.split('=')[1];
		}

		function testJS(event) {
			let cookieData = getCookie('foodid');
			let foodids = cookieData ? cookieData.split(',') : [];

			var b = document.getElementById('name').getAttribute('data-foodid');
			let foodid = event.currentTarget.parentElement.querySelector('.res-name').getAttribute('data-foodid');
			if (!foodids.includes(foodid)) {
				foodids.push(foodid);
			}


			document.cookie = 'foodid=' + foodids;
			// }
			var x = document.getElementById("snackbar");
			x.className = "show";
			setTimeout(function() {
				x.className = x.className.replace("show", "");
			}, 3000);

		}
	</script>
</head>

<body>
	<div class="overlay">
	<div class="heading first">
            <button type="button" id="scroll">
                <h2>ORDER NOW</h2>
            </button>
        </div>
	</div>

	<br>
	<div class="header-container">
		<h4 style="margin-left: 160px;"><em>The easiest way to get your favourite food</em></h4>
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
					<div id="name" data-foodid="' . $rows['id'] . '" class="res-name"><span class="veg-indian-vegetarian"></span>' . $rows['Name'] . '</div>
					<button class="cBmpNp" id="add" onclick="testJS(event)"><span>Add</span><i class="fa fa-shopping-cart"></i></button>
					<div id="snackbar">Added to cart.</div>
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
					<div id="name" data-foodid="' . $rows['id'] . '" class="res-name"><span class="veg-indian-vegetarian"></span>' . $rows['Name'] . '</div>
					<button class="cBmpNp" id="add" onclick="testJS(event)"><span>Add</span><i class="fa fa-shopping-cart"></i></button>
					<div id="snackbar">Added to cart.</div>
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

<script>
    $("#scroll").click(function() {
        $('html,body').animate({
                scrollTop: $(".header-container").offset().top
            },
            'slow');
    });
</script>
</html>