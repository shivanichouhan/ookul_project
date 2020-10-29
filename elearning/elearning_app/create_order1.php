<?php 

include_once("../include/database.php");
$obj= new database();
$access_token=$_POST['access_token'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.instamojo.com/v2/gateway/orders/payment-request/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Authorization: Bearer '.$access_token));

$payload = Array(
    'id' => $payment_request_id
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

echo $response;


?>