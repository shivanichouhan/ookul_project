<?php

include"../include/database.php";
$obj=new database();
$info=array();
$response["wishlist"] = array();
$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$user_id=$params['user_id'];
@$video_id=$params['video_id'];

if($user_id){
$rs=$obj->insert_pdf_wishlist($user_id,$video_id); 

if($rs)
{
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Video added to wishlist";
array_push($response["wishlist"], $info);
echo json_encode($response);
}
else
{
$response["msg"] = "Failed";
$response["error"] =true;
$response["success"] =0;

array_push($response["wishlist"]);
echo json_encode($response);
}
}

