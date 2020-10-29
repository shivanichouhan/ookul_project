<?php

include_once("../include/database.php");
$obj= new database();
$info=array();

$response["subject"] = array();

// $user_id=$_POST['user_id'];



$table='main_subject_wbsc';

$rs=$obj->fetchAllDetail($table);


if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "WBSC Subject List";

$info["id"]=$row['id'];

$info["subject"] = $row['subject'];

$info["status"] = $row['status'];

$info["image"] = $row['image'];

$info["banner_image"] = $row['banner_image'];

array_push($response["subject"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["subject"], $info);
echo json_encode($response);
}




?>