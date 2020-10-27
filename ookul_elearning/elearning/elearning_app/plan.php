<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["plan"] = array();

$rs=$obj->fetchDetailById(1,"gov_plan","status"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "plan List";
$info["id"]=$row['id'];
$info["plan_name"]=$row['plan_name'];

array_push($response["plan"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["plan"]);
echo json_encode($response);
}
?>