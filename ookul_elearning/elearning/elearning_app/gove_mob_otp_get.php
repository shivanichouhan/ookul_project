<?php

include_once("../include/database.php");
$obj= new database();
$info=array();

$response["otp12"] = array();
  $otp=$_POST['otp'];
  $mobile=$_POST['mobile'];
  $new_mobile=$_POST['mobile'];
    $user_id=$_POST['user_id'];
    $add=0;
    $rs=$obj->fetchDetailByIdByStatus($otp,"mobile_otp_goverment","otp","mobile",$mobile); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
    $add=$add+1;
    
}}
if($add==0){
    $response["error"] =true;
$response["success"] =0;
$response["msg"] = "No record Found";
@array_push($response["otp12"]);
echo json_encode($response);
}else{
$rs=$obj->fetchDetailByIdByStatus($otp,"mobile_otp_goverment","otp","mobile",$mobile); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$mobileup=$obj->mobile_update001($new_mobile,$user_id);

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Mobile OTP Confirm and Update Your Mobile Number";

$info["mobile"]=$new_mobile;

//$ot_txt="Your old Mobile Number".$mobile. "Updated Mobile Number From Bongosikha " .$new_mobile;
//$text=urlencode($ot_txt);
 //$zurl="http://sms.abinfotech.net/api/sendhttp.php?authkey=240201AdTisMa1iO5baf6912&mobiles=".$new_mobile."&message=".$text."&sender=bongos&route=4&country=91";
 
 //$data=file_get_contents($zurl);


@array_push($response["otp12"],$info);
}
echo json_encode($response);
}
else
{

$response["error"] =true;
$response["success"] =0;
$response["msg"] = "No record Found";
@array_push($response["otp12"]);
echo json_encode($response);
}
}
?>