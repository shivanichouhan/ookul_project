<?php 
//session_start();
include"../include/database.php";
$obj=new database();
$info=array();
$response["add_play_list"] = array();
@$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$user_id=$params['userid'];
@$video_id=$params['video_id'];
$date=date('Y-m-d');
$time=date('h:i:s');

$check=$obj->fetchByIdBystatus($user_id,"play_list","userid","video_id",$video_id);
if($check){
    $response["msg"] = "video already added in playlist";
$response["error"] =true;
$response["success"] =0;
@array_push($response["add_play_list"]);
echo json_encode($response);
}else{
$rs=$obj->add_play_list($user_id,$video_id,$date,$time);
if($rs)
{

$response["error"]=false;
$response["success"] =1;
$response["msg"] = "added Successful";


$row1=$obj->fetchById($rs,"play_list","id");
$info["id"] = $row1['id'];
$info["userid"] = $row1['userid'];
$info["video_id"] = $row1['video_id'];

$info["date"] = $row1['date'];

$info["time"] = $row1['time'];


array_push($response["add_play_list"], $info);
echo json_encode($response);
}
else
{
$response["msg"] = "Not Update Sucssesfully";
$response["error"] =true;
$response["success"] =0;
@array_push($response["add_play_list"]);
echo json_encode($response);

}
}
?>