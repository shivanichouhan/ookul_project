<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["like"] = array();
 @$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$video_id=$params['video_id'];

if($video_id){
$rs=$obj->fetchDetailById($video_id,"`like`","`video_id`"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Play List";
$info["id"]=$row['id'];
$info["user_id"] = $row['uid'];
$info["video_id"] = $row['video_id'];
$info["date"] = $row['date'];
$info["time"] = $row['time'];
array_push($response["like"], $info);
}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["like"]);
echo json_encode($response);
}
}else{
    $response["msg"] = "please select any video ";
$response["error"] =true;
$response["success"] =0;
array_push($response["like"]);
echo json_encode($response);
}
?>