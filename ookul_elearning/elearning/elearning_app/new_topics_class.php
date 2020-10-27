<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$response["topic"] = array();


  $subject=$_POST['subject'];



$rs=$obj->fetchDetailById($subject,"day_wise_topic","subject"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Topic List";

$info["id"]=$row['id'];

$info["subject"] = $row['subject'];

$info["topic"] = $row['topic'];

$info["thumbnail"] = $row['thumbnail'];

$info["status"] = $row['status'];

$info["fress_status"] = $row['fress_status'];


array_push($response["topic"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["topic"], $info);
echo json_encode($response);
}
?>