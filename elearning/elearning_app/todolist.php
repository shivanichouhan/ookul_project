<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$response["Todolist"] = array();
$response["total_task"] = array();
$response["Completed"] = array();
$response["InCompleted"] = array();

$params = (array) json_decode(file_get_contents('php://input'), TRUE);

@$user_id=$params['user_id'];


$rs=$obj->fetchDetailById_todolist_1($user_id,"Todolist","user_id"); 
if($rs)
{
 $tk = $obj->fetchDetailById_todolist_count($user_id,"Todolist","user_id");
 $tkk=mysqli_fetch_assoc($tk);
 $response["total_task"] =$tkk ['total_task'];

 $tk1 = $obj->fetchDetailById_todolist_completed($user_id,"Todolist","user_id");
 $tkk1 =mysqli_fetch_assoc($tk1);
 $response["Completed"] =$tkk1['Completed'];
 
 $tk2 = $obj->fetchDetailById_todolist_incompleted($user_id,"Todolist","user_id");
 $tkk2 =mysqli_fetch_assoc($tk2);
 $response["InCompleted"] =$tkk2['InCompleted'];

while($row=mysqli_fetch_assoc($rs))
{ 
    

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "To-Do List";

$info["user_id"] = $row['user_id'];
$info["task_date"] = $row['task_date'];
$info["status"] = $row['status'];
array_push($response["Todolist"], $info);
}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["Todolist"]);
echo json_encode($response);
}
?>