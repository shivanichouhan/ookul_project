<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["routines"] = array();
  $app_type=$_POST['app_type'];
  $day=$_POST['days'];
  $ui=0;
$rs1=$obj->fetchDetailByIdByStatus($app_type,"routine","app_type","day",$day); 
if($rs1)
{
while($row1=mysqli_fetch_assoc($rs1))
{ 
    $ui=$ui+1;
}
}

if($ui=='0')
{
    $response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["routines"]);
echo json_encode($response);
}
else
{
$rs=$obj->fetchDetailByIdByStatus($app_type,"routine","app_type","day",$day); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Routine List";
$info["id"]=$row['id'];

$ff=$obj->fetchById($row['day'],"days","id");
$info["day"] = $ff['days'];
$info["description"] = $row['description'];


array_push($response["routines"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["routines"]);
echo json_encode($response);
}
}
?>