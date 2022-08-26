<?php
require "./vendor/autoload.php";
// echo "hello stripe
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__,"./.env");
$dotenv->load();
//stripe instance from the composer/stripe librarry
  $stripe = new Stripe\StripeClient();
\Stripe\Stripe::setApiKey($_ENV["STRIPE_SECRET_KEY"]); 

function calculateOrderAmount(array $items){
  // Replace this constant with a calculation of the order's amount
  // Calculate the order total on the server to prevent
  // customers from directly manipulating the amount on the client
  //we dont need this, we get amount of items from an input 'readonly' trough a json object and it's awesome :)
  return 1234;
} 
$json = file_get_contents('php://input');
$dataObject = json_decode($json);
$dataArray = json_decode($json, true); //it gives the values but not working, try with fetch
//echo $json;
$resoult = preg_replace("/[^a-zA-Z0-9]/", "",$json);

header('Content-Type: application/json');
/* 
  $client = \Stripe\Customer::create([
  'description' => 'Payment for Advertisement',
]);  */

try {
  $paymentIntent = \Stripe\PaymentIntent::create([
    'currency' => 'usd',
    'payment_method_types' => [
      'card',
  ],
    'amount' => $resoult,
    //'amount' =>'4566',
    // calculateOrderAmount($json_obj->items),
 
    // 'customer'=> $client,
  ]);
  $output = [
    'clientSecret' => $paymentIntent->client_secret,
  ]; 
  // print_r($client->id);
  echo json_encode($output);
} catch (Error $e) {
  http_response_code(500);
  echo json_encode(['error' => $e->getMessage()]);
}//end of stripe


// dealing with the database

?>
