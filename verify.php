<?php

require('configpay.php');
session_start();
//db connection
$conn = mysqli_connect($host, $username, $password, $dbname);

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

$id = $_COOKIE['orderDetails'];
$tst = json_decode($id);
$foodDetails = $tst->foodDetails;


if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    for($i=0;$i<count($foodDetails);$i++){
        $food_id = $foodDetails[$i]->id;
        $quantity = $foodDetails[$i]->quantity;
        print_r($food_id);
        print_r($quantity);

        $sql = "INSERT INTO `orders` (food_id, quantity, payment, Username) VALUES ($food_id, $quantity, '$razorpay_payment_id', '$email')";
    if(mysqli_query($conn, $sql)){
        header("Location:success.php");

    }

    echo "No pay";
}
    
}
else
{
    header("Location:unsucessfull.php");
}
?>