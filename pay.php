<?php

include 'configpay.php';
include 'razorpay-php/Razorpay.php';
include 'config.php';
session_start();

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//

$username=$_SESSION['Username'];
// $username="pqr@gmail.com";

$result_grp = $conn->query("select * from signup where Username = '$username'") or die($result_grp->connect_error);

$rows_grp = mysqli_fetch_array($result_grp, MYSQLI_ASSOC);
$mobile = $rows_grp['Mobile'];
$name = $rows_grp['Name'];

$id = $_COOKIE['orderDetails'];
$tst = json_decode($id);

$price = $tst->total;

$customername = $name;
$email = $username;
$_SESSION['email'] = $email;
$contactno = $mobile;
$orderData = [
    'receipt'         => 3456,
    'amount'          => $price * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Backbanchers",
    "description"       => "",
    "image"             => "images/pay_logo.jpg",
    "prefill"           => [
    "name"              => $customername,
    "email"             => $email,
    "contact"           => $contactno,
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "background"             =>  'images/image4.jpg',
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<body  style="background-image: url('images/add_food.jpg');    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;">
<form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="3456">
</form>
</body>
<style>
.razorpay-payment-button { display: none; }
#header {
    background: #528FF0;
    color: #FFFFFF;
}
</style>

<script type="text/javascript">
$(document).ready(function(){
  $('.razorpay-payment-button').click()
});
</script>