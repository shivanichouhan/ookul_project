<?php 
//session_start();
include"../include/database.php";
$obj=new database();
$info=array();
$response["mobile_Info"] = array();

$mobile=$_POST['mobile'];


$check=$obj->fetchById($mobile,"`user_register`", "mobile");
//check_email($mobile);

if($check)
{
$response["error"] =true;
$response["success"] =0;
$response["msg"] = "Mobile Number Address Allready Exist";
array_push($response["mobile_Info"], $info);
echo json_encode($response);
}
else
{
	

$otp=rand(1111,9999);

$ot_txt=" OTP From Bongoshikha " .$otp;
$text=urlencode($ot_txt);
 $zurl="http://2sms.in/api/sendhttp.php?authkey=208389A9yS79Pm755aca1007&mobiles=".$mobile."&message=".$text."&sender=himalaya&route=4&country=91";

 $data=file_get_contents($zurl);
 $response["error"] =false;
$response["success"] =1;
$response["msg"] = "Check  Your Mobile";

$op=$obj->insert_mobile_number($mobile,$otp);

array_push($response["mobile_Info"], $info);
echo json_encode($response);

}

?>