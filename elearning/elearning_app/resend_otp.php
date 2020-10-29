<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["register"] = array();

$params = (array) json_decode(file_get_contents('php://input'), TRUE);


$id=$params['user_id'];
$phone = $params['phone'];
$otp=rand(100000,999999);
$ot_txt="Please use OTP ".$otp." to login in e-learning";
 $text=urlencode($ot_txt);
 $zurl = "http://2sms.in/api/sendhttp.php?authkey=343793ALtLaMpgjfa15f800e00&mobiles=".$phone."&message=".$text."&sender=Legends&route=4&country=91";
$data=file_get_contents($zurl);
$rdd=$obj->updateStatus($id,"register","otp",$otp,"id");
    
   
   if($rdd)
{

$response["error"]=false;
$response["success"] =1;
$response["msg"] = "Success";
$row=$obj->fetchById($id,"register","id");

$info["id"] = $row['id'];
$info["fname"] = $row['fname'];
$info["lname"] = $row['lname'];
$info["email"] = $row['email'];
$info["phone"] = $row['phone'];
$info["picture"] = $row['picture'];
$info["state"] = $row['state'];
$info["city"] = $row['city'];

@array_push($response["register"],$info);
echo json_encode($response);
}
else
{
$info["msg"] = "Not  Update ";
$info["error"] =true;
$info["success"] =0;
@array_push($response["register"],$info);
echo json_encode($info);

}
?>


