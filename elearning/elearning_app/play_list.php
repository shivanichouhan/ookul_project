<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["play_list"] = array();
 @$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$user_id=$params['userid'];

if($user_id){
$rs=$obj->fetchDetailById($user_id,"play_list","userid"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Play List";
$info["id"]=$row['id'];
$info["user_id"] = $row['userid'];
$info["video_id"] = $row['video_id'];
$info["date"] = $row['date'];
$info["time"] = $row['time'];
array_push($response["play_list"], $info);
}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["play_list"]);
echo json_encode($response);
}
}else{
    $response["msg"] = "please select any user";
$response["error"] =true;
$response["success"] =0;
array_push($response["play_list"]);
echo json_encode($response);
}
?>