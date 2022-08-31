<?php
$purchase_json = file_get_contents('purchase.json');
$decoded_json = json_decode($purchase_json, true);
$items=$decoded_json['items'];
$price=$decoded_json['price'];

echo $items;
echo $price;
?>