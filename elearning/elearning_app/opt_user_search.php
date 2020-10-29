<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["searchuser"] = array();

$user_id=$_POST['user_id'];
$rs=$obj->fetchById($user_id,'optional_user','user_id');
if($rs)
{

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "User details";
$info["user_id"]=$rs['user_id'];
$info["subject_id"] = $rs['subject_id'];

array_push($response["searchuser"], $info);


echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
// array_push($response["searchuser"]);
echo json_encode($response);
}
?>