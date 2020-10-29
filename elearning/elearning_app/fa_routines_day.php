<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["free_routine"] = array();
$y=0;
$rs=$obj->fetchAllDetail("fa_routine"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{
    $y=$y+1;
}
}
if($y=='0')
{
    $response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["free_routine"]);
echo json_encode($response);
}
else
{
$rs=$obj->fetchAllDetail("fa_routine"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Routine List";
$info["id"]=$row['id'];
$info["description"] = $row['description'];

$info["status"] = $row['status'];


array_push($response["free_routine"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["free_routine"]);
echo json_encode($response);
}
}
?>