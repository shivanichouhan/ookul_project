<?php 
//session_start();
include"../include/database.php";
$obj=new database();
$info=array();
$response["like"] = array();
@$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$user_id=$params['userid'];
@$video_id=$params['video_id'];
$date=date('Y-m-d');
$time=date('h:i:s');

$check=$obj->fetchByIdBystatus($user_id,"`like`","`uid`","`video_id`",$video_id);
if($check){
    $response["msg"] = "video already liked";
$response["error"] =true;
$response["success"] =0;
@array_push($response["like"]);
echo json_encode($response);
}else{
$rs=$obj->add_like($user_id,$video_id,$date,$time);
if($rs)
{

$response["error"]=false;
$response["success"] =1;
$response["msg"] = "added Successful";


$row1=$obj->fetchById($rs,"`like`","`id`");
$info["id"] = $row1['id'];
$info["userid"] = $row1['uid'];
$info["video_id"] = $row1['video_id'];

$info["date"] = $row1['date'];

$info["time"] = $row1['time'];


array_push($response["like"], $info);
echo json_encode($response);
}
else
{
$response["msg"] = "Not Update Sucssesfully";
$response["error"] =true;
$response["success"] =0;
@array_push($response["like"]);
echo json_encode($response);

}
}
?>