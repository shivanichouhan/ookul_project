<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["Todo_list"] = array();
$params = (array) json_decode(file_get_contents('php://input'), TRUE);


@$todo_id=$params['todo_id'];

@$status =$params['status'];

$rs=$obj->update_user_todolist($todo_id,$status); 

if($rs)
{

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Todo List Updated Successfully";

$info['todo_id']=$todo_id;

array_push($response["Todo_list"], $info);

echo json_encode($response);
}
else
{
$response["msg"] = "Updation Failed";
$response["error"] =true;
$response["success"] =0;

array_push($response["Todo_list"]);
echo json_encode($response);
}

