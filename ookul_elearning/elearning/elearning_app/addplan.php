<?php

include"../include/database.php";
$obj=new database();
$info=array();
$response["Plan_list"] = array();
$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$subject=$params['subject'];
@$user_id=$params['user_id'];
@$task_date = $params['task_startdate'];
@$task_enddate = $params['task_enddate'];
@$status = $params['status'];

$rs=$obj->insert_user_planlist($user_id,$subject,$task_date,$task_enddate,$status); 

if($rs)
{

$response["error"] =false;
$response["success"] =1;
$response["msg"] = " Added Successfully";
array_push($response["Plan_list"], $info);

echo json_encode($response);
}
else
{
$response["msg"] = "Failed";
$response["error"] =true;
$response["success"] =0;

array_push($response["Plan_list"]);
echo json_encode($response);
}

