<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["Planlist"] = array();

$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$user_id=$params['user_id'];


$rs=$obj->fetchDetailById_planlist_1($user_id,"plan","user_id"); 
if($rs)
{

while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "To-Do List";

$info["user_id"] = $row['user_id'];
$info["subject"] = $row['subject'];
$info["task_startdate"] = $row['task_startdate'];
$info["task_enddate"] = $row['task_enddate'];
$info["status"] = $row['status'];
array_push($response["Planlist"], $info);
}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["Planlist"]);
echo json_encode($response);
}
?>