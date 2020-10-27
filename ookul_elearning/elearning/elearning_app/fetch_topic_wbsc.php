<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$response["topic"] = array();


$subject=$_POST['subject'];



$rs=$obj->fetchDetailById($subject,"main_topic_wbsc","subject"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "WBSC Topic List";

$info["id"]=$row['id'];

$info["subject"] = $row['subject'];

$info["topic"] = $row['topic'];

$info["images"] = $row['images'];

$info["status"] = $row['status'];

$info["pstatus"] = $row['pstatus'];



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