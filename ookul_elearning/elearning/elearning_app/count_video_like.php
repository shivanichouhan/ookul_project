<?php 
//session_start();
include"../include/database.php";
$obj=new database();
$info=array();
$response["like"] = array();
@$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$video_id=$params['video_id'];
$date=date('Y-m-d');
$time=date('h:i:s');

$check=$obj->fetchByIdcount($video_id,"`like`","`video_id`");
           
if($check)

{
	
 $response["msg"] = "liked video";
 $response["total_count"] = $check;
$response["error"] =true;
$response["success"] =0;
@array_push($response["like"]);
echo json_encode($response);
}
else
{
$response["msg"] = "Not liked";
 $response["total_count"] = 0;
$response["error"] =true;
$response["success"] =0;
@array_push($response["like"]);
echo json_encode($response);

}

?>