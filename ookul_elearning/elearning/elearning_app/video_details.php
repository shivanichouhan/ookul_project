<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["videos"] = array();
 
$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$video_id=$params['video_id'];

$rs=$obj->fetchById($video_id,"welcome_videos","id"); 

if($rs)
{
 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Videos List";

$user=$obj->fetchById($rs['user_id'],"register","id");


$info["id"]=$rs['id'];
$info["title"] = $rs['title'];
$info["descrp"] = $rs['descrp'];
$info["thumbnail"] = $rs['thumbnail'];
$info["videos"] = $rs['videos'];
$info["date"] = $rs['date'];
$info["status"] = $rs['status'];
$info["user_id"] = $rs['user_id'];
$info["category"] = $rs['category'];
$info["fname"] = $user['fname'];
$info["lname"] = $user['lname'];
$info["user_category"] = $user['category'];
$info["pofile_picture"] = $user['picture'];
array_push($response["videos"], $info);
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["videos"]);
echo json_encode($response);
}
?>