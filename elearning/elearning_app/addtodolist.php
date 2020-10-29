<?php

include"../include/database.php";
$obj=new database();
$info=array();
$response["Todo_list"] = array();
$params = (array) json_decode(file_get_contents('php://input'), TRUE);

@$subject=$params['subject'];

@$user_id=$params['user_id'];
@$task_date=$params['task_date'];
@$tags=$params['Tag'];

@$notes = $params['notes'];
@$task_time=$params['task_time'];
@$status =$params['status'];

$rs=$obj->insert_user_todolist($user_id,$subject,$task_date,$tags,$notes,$task_time,$status); 

if($rs)
{

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Todo List  Added Successfully";
array_push($response["Todo_list"], $info);

echo json_encode($response);
}
else
{
$response["msg"] = "Failed";
$response["error"] =true;
$response["success"] =0;

array_push($response["Todo_list"]);
echo json_encode($response);
}

