<?php
session_start();
include("config.php");
include("header2.html");
$username= $_SESSION['Username'];
$sql = "SELECT * FROM signup WHERE Username = '$username'";
        $result = mysqli_query($conn, $sql)or die(mysql_error());
        $query = "SELECT * FROM orders WHERE Username = '$username'";
        $res = mysqli_query($conn, $query)or die(mysql_error());
        
?>
?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/story.jpg');
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
.main {
    display: grid;
    text-align: center;
}

.mainbody {
    max-width: 2000px;
    margin: 0 auto;
}
.column {
    float: left;
    width: 45%;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 40px;
    margin-right: 0px;
}

.main {
    display: grid;
    text-align: center;
}
.column .btn, .mainbody .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #fc8019!important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
    width: 50%;
    height: 40px;
}
.column .btn:hover, .mainbody .btn:focus {
	opacity: 0.8;
}
h2 {
    font-weight: bold;
    font-size: 44px;
    letter-spacing: 2px;
    padding-bottom: 20px;
    font-family: 'Source Sans Pro', sans-serif;
    color: #fff;
}
.table
{
    width: 50px;
    margin-top: 30px;
    margin-left: 180px;
}
.food-table
{
    margin-left: 30px;
}
h4{
    font-weight: bold;
    text-align: center;
    font-size: 20px;
   
}
.res-image {
    width: 200;
    height: 100;
    border-radius: 5px;
    transform: none;
    opacity: 1;
    object-fit: cover;
    transition: opacity 0.25s ease 0s, transform 0.25s ease 0s;
}
#scroll {
    background: none;
    border: none;
}
</style>
</head>

<body>
<div class="overlay">
<div class="heading first">
            <button type="button" id="scroll">
                <h2>PROFILE</h2>
            </button>
        </div>
</div>
    <div class="main">
        <div class="row">
        <div class="column" >
        <h4 style="font-size:20px;" align='left'>Past Orders</h4>
        <br>
        <?php
                echo "<table class='food-table'  width='100%' >
                <tr>
                <th> Item</th>
                <th>Name</th>
                <th> Price</th>
                <th> Quantity</th>
                </tr>";
                $payment=array();
                while($row1 = mysqli_fetch_array($res)){
                    $payment[]=$row1['payment'];
                }
                $pay_id=array_unique($payment);
                $i=1;
                foreach ($pay_id as $payment_id) {
                    ?> <tr >
                    <td colspan=5 class="divider"><hr  style="height:2px;border-width:0;color:gray;background-color:gray"/><span style="margin:auto;"><b>Order no <?php echo $i; ?></b></span></td>
                    </tr>
                    <?php
                    echo "<tr>";

                        $query2 = "SELECT * FROM orders WHERE payment = '$payment_id' and Username = '$username'";
                        $res2 = mysqli_query($conn, $query2)or die(mysqli_error());
                        while($row2 = mysqli_fetch_array($res2))
                    {   
                        $food_id=$row2['food_id'];
                      //  $img=array();
                        $query3 = "SELECT * FROM tbl_images WHERE id = $food_id";
                        $res3 = mysqli_query($conn, $query3)or die(mysqli_error());
                      //  $c=mysqli_num_rows($res3);
                        echo "<tr>";
                        while($row3 = mysqli_fetch_array($res3)){
                          //  echo "<td rowspan=".$c.">" .$i. "</td>";
                            echo "<td style='padding:10px'><img src='".$row3['image']."' class='res-image' /></td>";
                            echo "<td>" . $row3['Name'] . "</td>";
                            echo "<td>" . $row3['Price'] . "</td>";
                            echo "<td>" .str_repeat('&nbsp;', 5) .$row2['quantity'] . "</td>"; 
                        }
                        echo "</tr>";
                    }
                       echo "</tr>";
                      
                       $i++;
                  }
             echo "</table>";

     ?>
    </div>
   <div class="column">
    <div class="mainbody">
    <h4  style="font-size:20px;" align='center'>Profile</h4>
        <table class="table table-striped table-bordered table-sm" >
            <?php
            $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
            ?>
            <tr>
                <td style="padding:20px"><b>Name</b></td>
                <td style="padding:20px" colspan="4"><?php echo $rows['Name']; ?></td>
            </tr>
            <tr>
                <td style="padding:20px"><b>Username</b></td>
                <td style="padding:20px" colspan="4"><?php echo $rows['Username']; ?></td>
            </tr>
            <tr>
                <td style="padding:20px"><b>Mobile</b></td>
                <td style="padding:20px" colspan="4"><?php echo $rows['Mobile']; ?></td>
            </tr>
            <tr>
                <td style="padding:20px"><b>Address</b></td>
                <td style="padding:20px" colspan="4"><?php echo $rows['Address']; ?></td>
            </tr>
            <tr>
                <td style="padding:20px"><b>Gender</b></td>
                <td style="padding:20px" colspan="4"><?php echo $rows['Gender']; ?></td>
            </tr>
        </table>
        </div>
        <a style=margin-left:33%; href="update_profile.php" type="button"  name="submit" class="btn btn-primary btn-lg btn-block login-btn">Update</a>
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
