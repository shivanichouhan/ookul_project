<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["todo"] = array();
$params = (array) json_decode(file_get_contents('php://input'), TRUE);

@$user_id=$params['user_id'];

$rs=$obj->fetchAllDetailByIdByStatus(1,"Todolist","user_id",$user_id,"status"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "todo List";

$user=$obj->fetchById($row['user_id'],"register","id");

$info["todo_id"]=$row['todo_id'];
$info["user_id"] = $row['user_id'];

$info["subject"] = $row['subject'];
$info["Tag"] = $row['Tag'];
$info["notes"] = $row['notes'];
$info["task_date"] = $row['task_date'];

$info["description"] = $row['task_time'];
$info["status"] = $row['status'];
$info["created_dt"] = $row['created_dt'];


$info["fname"] = @$user['fname'];
$info["lname"] = @$user['lname'];
$info["user_category"] = @$user['category'];
$info["pofile_picture"] = @$user['picture'];

array_push($response["todo"], $info);
}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;

array_push($response["todo"]);
echo json_encode($response);
}
?>