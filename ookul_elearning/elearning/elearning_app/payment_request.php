<?php 
 
include_once("../include/database.php");
$obj= new database();
$info=array();
$response789["order_id"] = array();
$order_id=$_POST['order_id'];
$user_id=$_POST['user_id'];

$uu=$obj->fetchById($user_id,"user_register_goverment","id");
$uu78=$obj->fetchById($order_id,"gov_order","id");

$name=$uu['name'];
$mobile=$uu['mobile'];
$email=$uu['email'];
$total=$uu78['price'];
$access_token=$_POST['access_token'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.instamojo.com/v2/payment_requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Authorization: Bearer '.$access_token));
$payload = Array(
    'purpose' => 'Competitive Exams',
    'phone' => $mobile,
    'amount' => $total,
    'buyer_name' => $name,
    'redirect_url' => 'https://api.instamojo.com/integrations/android/redirect/',
    //http://app.bongosikha.com/gov/success.php?id='.$order_id, 
    'send_email' => true,
    //'webhook' => 'http://requestbin.fullcontact.com/1nq6ci91',
    'send_sms' => true,
    'email' => $email,
    'allow_repeated_payments' => false
);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
echo $response;

?>