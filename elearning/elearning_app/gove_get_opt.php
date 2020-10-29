<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["otp12"] = array();
  $otp=$_POST['otp'];
  $mobile=$_POST['mobile'];
$rs=$obj->fetchDetailByIdByStatus($otp,"mobile_otp_goverment","otp","mobile",$mobile); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Mobile Verification Successful";
$info["id"]=$row['id'];
$info["mobile"] = $row['mobile'];
@array_push($response["otp12"]);
}
echo json_encode($response);
}
else
{

$response["error"] =true;
$response["success"] =0;
$response["msg"] = "Mobile Verification Not Successful";
array_push($response["otp12"], $info);
echo json_encode($response);
}
?>