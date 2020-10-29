<?php 
//session_start();
include"../include/database.php";
$obj=new database();

$response["mobile_Info"] = array();

   $mobile=$_POST['mobile'];
  $mac=$_POST['mac'];
  
$check=$obj->fetchByIdByStatus($mobile,"user_register_goverment","mobile","mac",$mac);
$check1=$obj->fetchById($mobile,"user_register_goverment","mobile");
$check2=$obj->fetchById($mac,"user_register_goverment","mac");

$mobile1=$check1['mobile'];
$mac1=$check2['mac'];

if($mobile==$mobile1)
{
	$response["error"] =true;
$response["success"] =0;
$response["msg"] = "Sorry This Mobile Number Already Register With Other Device";
@array_push($response["mobile_Info"]);
echo json_encode($response);
}
else
{
if($mac==$mac1)
{
$response["error"] =true;
$response["success"] =0;
$response["msg"] = "Sorry This Device Already Register With Other Number";
@array_push($response["mobile_Info"]);
echo json_encode($response);
}
else{
	
if($check)
{
$response["error"] =true;
$response["success"] =0;
$response["msg"] = "Sorry This Device Already Register With Other Number";
@array_push($response["mobile_Info"]);
echo json_encode($response);
}
else
{
	

$otp=rand(1111,9999);

$ot_txt="Hello, Your One Time Password is " .$otp. " . Do not share this OTP to anyone for security reason. Make study easy & fun with Bongosikha.";
$text=urlencode($ot_txt);
$zurl="http://sms.abinfotech.net/api/sendhttp.php?authkey=240201AdTisMa1iO5baf6912&mobiles=".$mobile."&message=".$text."&sender=bongos&route=4&country=91";
 
$data=file_get_contents($zurl);

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Check Your Mobile";

$op=$obj->insert_mobile_number001($mobile,$otp);

@array_push($response["mobile_Info"]);
echo json_encode($response);

}
}
}

?>