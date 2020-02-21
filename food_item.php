<?php
include("admin/config.php");
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
	</style>
	<link rel="stylesheet" type="text/css" href="./css/food_item.css">
</head>

<body>
	<header>
		<nav>
			<div class="mainbody clearfix">
				<img src="images/image.jpg" class="logo">
				<ul class="c-menu" id="id-menu">
					<li><a href="login.html">Order Now</a></li>
					<li><a href="index.html">Home</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="story.html">Story</a></li>
					<li><a href="visit.html">Visit</a></li>
				</ul>
			</div>
		</nav>
		<div class="box">
			<form method="POST">
				<input type="text" name="tosearch" placeholder="Type....">
				<button type="submit" name="search" value="submit" >Submit</button>
			</form>
		</div>
	</header><br>
	<h3 align="center"><em>The easiest way to get your favourite food</em></h3><br>

	<?php
	if (isset($_REQUEST['search']) != "") {
		$valueToSearch = $_REQUEST['tosearch'];
		$query = "SELECT * FROM `tbl_images` WHERE Name like '%" . $valueToSearch . "%' OR Type like '%" . $valueToSearch . "%'" ;
		$search_result = mysqli_query($conn, $query);
		while ($rows = mysqli_fetch_array($search_result)) {
	
			echo
				'
	<div class="column">
	
	<div><img src="data:image/jpeg;base64,' . base64_encode($rows['image']) . '" class = "img"/>
	<h4><center>' . $rows['Name'] . '</center></h4>
	<span><center>Price:<span>' . $rows['Price'] . '</center></span>
    </div>
	</div>
					';
		}
	} else {
		$query = "SELECT * FROM tbl_images ORDER BY id ASC";
		$result = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_array($result)) {

			echo
				'
	<div class="column">
	
	<div><img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" class = "img"/>
	<h4><center>' . $row['Name'] . '</center></h4>
	<span><center>Price:<span>' . $row['Price'] . '</center></span>
    </div>
	</div>
					';
		}
	}
	?>
</body>

</html>