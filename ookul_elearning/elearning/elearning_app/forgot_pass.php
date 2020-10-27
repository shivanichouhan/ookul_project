<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["forgot"] = array();

 $mobile=$_POST['mobile'];
 $mac=$_POST['mac'];
$row=$obj->fetchByIdByStatus($mobile,"user_register_goverment","mobile","mac",$mac);
 
 
if($row)
{

    $password=$row['password']; 
    
  $ot_txt="Hello, Your Password is ". $password . " .Make Study Easy & Fun with Bongosikha";
$text=urlencode($ot_txt);
 $zurl="http://2sms.in/api/sendhttp.php?authkey=240201AdTisMa1iO5baf6912&mobiles=".$mobile."&message=".$text."&sender=bongos&route=4&country=91";
 
 $data=file_get_contents($zurl);


 $info['password']=$row['password'];
	
	
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Please Check Your Register Number";
@array_push($response["forgot"],$info);
echo json_encode($response);

}
else
{

$response["error"] =true;
$response["success"] =0;
$response["msg"] = "Mobile Number Not Exist";
@array_push($response["forgot"]);
echo json_encode($response);


}
?>