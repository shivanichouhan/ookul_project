<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["subject"] = array();
 
 


$rs=$obj->fetchDetailById(1,"gov_subject","status"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "block List";
$info["id"]=$row['id'];
$info["subject"] = $row['subject'];

$info["status"] = $row['status'];


array_push($response["subject"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["subject"]);
echo json_encode($response);
}
?>