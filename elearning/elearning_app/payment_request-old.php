<?php 

include_once("../include/database.php");
$obj= new database();
$order_id=$_POST['order_id'];
$user_id=$_POST['user_id'];
$uu=$obj->fetchById($user_id,"user_register_goverment","id");
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$total=$_POST['price'];

$select_plan=$uu['select_plan'];

$uu45=$obj->fetchById($select_plan,"goverment_plan","id");
$price=$uu45['price'];
$gst=$uu45['gst'];
$total=$price+$gst;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:acb638f13c71ccf8bf35ab24077bbb6d",
                  "X-Auth-Token:beb83af633c2b68683ce090b5440adfa"));
$payload = Array(
    'purpose' => 'Class Book',
    'phone' => $mobile,
    'amount' => $total,
    'buyer_name' => $name,
    'redirect_url' => 'http://app.bongosikha.com/gov/webhok.php?id='.$oid, 
    'send_email' => true,
    'send_sms' => true,
    'email' => $email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$json_decode = json_decode($response ,true);
$long_url = $json_decode['payment_request']['longurl'];
header('location:'.$long_url);

?>