<?php 

include_once("../include/database.php");
$obj= new database();
$order_id=$_POST['order_id'];
$user_id=$_POST['user_id'];
//$uu=$obj->fetchById($user_id,"user_register_goverment","id");
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$total=$_POST['price'];
$access_token=$_POST['access_token'];
$token_type=$_POST['token_type'];
$select_plan=$uu['select_plan'];

$uu45=$obj->fetchById($select_plan,"goverment_plan","id");
$price=$uu45['price'];
$gst=$uu45['gst'];
$total=$price+$gst;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.instamojo.com/v2/payment_requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Authorization: '.$token_type  .$access_token));

$payload = Array(
    'purpose' => 'Class Book',
    'phone' => $mobile,
    'amount' => $total,
    'buyer_name' => $name,
    'redirect_url' => 'http://app.bongosikha.com/gov/success.php?id='.$oid, 
    'send_email' => false,
    //'webhook' => 'http://requestbin.fullcontact.com/1nq6ci91',
    'send_sms' => false,
    'email' => $email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

echo $response;
echo '<br>';

?>