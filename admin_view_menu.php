<?php
include("config.php");
include("header.html");
?>
<!DOCTYPE html>
<html>

<head>
	<style>
		.img {
			padding: 10px;
			width: 450px;
			height: 250px;
			object-fit: contain;
		}

		.card-container {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: center;
		}

		.card {
			width: 350px;
			height: 400px;
			padding: 0 13px 18px 0;
		}

		.res-image {
			height: 60%;
			width: 100%;
			border-radius: 5px;
			transform: none;
			opacity: 1;
			will-change: transform, opacity;
			object-fit: cover;
			transition: opacity 0.25s ease 0s, transform 0.25s ease 0s;


		}

		.res-details {
			margin-top: 10px;
			display: flex;
			flex-direction: column;
		}

		.res-name {
			font-weight: bold;
			font-size: 18px;
			display: inline-flex;
			flex-grow: 1;
		}

		.res-rating {
			font-size: 18px;
			display: flex;
			align-items: center;
		}

		.res-rating>.material-icons {
			font-size: 22px;
			margin-right: 6px;
		}

		.rating-value,
		.res-cuisines,
		.res-location {
			color: rgb(79, 79, 79);
		}

		.res-des {
			font-size: 15px;

		}

		.res-details div {
			padding-bottom: 3px;
		}

		.veg-indian-vegetarian:before {
			margin-right: 10px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="./css/food_item.css">
	<link rel="stylesheet" href="http://static.sasongsmat.nu/fonts/vegetarian.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="overlay">
	<div class="heading">
           <h2>View Menu</h2>
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
					<div class="res-name"><span class="veg-indian-vegetarian"></span>' . $rows['Name'] . '</div>
			
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
					<div class="res-name"><span class="veg-indian-vegetarian"></span>' . $rows['Name'] . '</div>
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
</body>

</html>