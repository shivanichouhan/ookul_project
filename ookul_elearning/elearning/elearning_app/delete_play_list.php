<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["delete_play_list"] = array();
 
$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$id=$params['id'];

$rs=$obj->deleteById($id,"play_list","id"); 

if($rs)
{
 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Playlist deleted successfully";

array_push($response["delete_play_list"]);
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["delete_play_list"]);
echo json_encode($response);
}
?>