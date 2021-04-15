<?php
session_start();
include 'config.php';
include 'configpay.php';
include 'razorpay-php/Razorpay.php';
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

$comment = $_POST["comment"];
$ratings = $_POST["ratings"];
$payment_id = $_SESSION['payment'];
mysqli_query($conn, "UPDATE orders SET rating='".$ratings."',comment='".$comment."' WHERE  payment='".$payment_id."'");
echo "Thank you for your feedback";
?>