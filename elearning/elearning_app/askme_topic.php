<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["access_topic"] = array();

$subject=$_POST['subject'];

$gvar=0;

$rsss=$obj->fetchAllDetailById($subject,"day_wise_topic","mainsubject"); 

if($rsss)
{
while($rowss=mysqli_fetch_assoc($rsss))
{
$gvar= $gvar + 1;
}}


if($gvar==0){
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["askme_userlist"]);
echo json_encode($response);
}else{


$rs=$obj->fetchAllDetailById($subject,"day_wise_topic","mainsubject"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{


$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Topic List";

$info["id"]=$row['id'];

$info["topic"] = $row['topic'];

$info["status"] = $row['status'];


array_push($response["access_topic"], $info);
}
echo json_encode($response);
}

else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;

array_push($response["access_topic"]);
echo json_encode($response);
}
}
?>