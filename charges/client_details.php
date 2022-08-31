<?php 
// include("./../inc/shoping-cart.php");
include("../models/stripeCustomer.php");
require "../config/config.php";
require "../lib/Database.php";
require "../helpers/session_helper.php";
require "../helpers/url_redirect.php";

if(isset($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name']; 
$data['email'] = $_POST['email'];
$data['amount'] = $_POST['amount'];
  }

//print_r ($data);

$customer = new stripeCustomer();
$customer->addStripeCustomer($user_id,$user_name,$data);
// $customer->updateUserId();
$type="stripe";
redirect("../success.php?type='.$type'");
?>
  
