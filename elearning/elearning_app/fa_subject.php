<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["free_access_subject"] = array();

$rs=$obj->fetchAllDetail("gov_subject"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "block List";
$info["id"]=$row['id'];
$info["subject"] = $row['subject'];
$info["image"] = $row['image'];
$info["status"] = $row['status'];


array_push($response["free_access_subject"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["free_access_subject"]);
echo json_encode($response);
}
?>