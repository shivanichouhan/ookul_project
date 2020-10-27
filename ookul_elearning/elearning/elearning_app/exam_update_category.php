<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["category"] = array();

$rs=$obj->fetchDetailById(1,"category_exam_update","status"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "category List";
$info["id"]=$row['id'];
$info["category"]=$row['category'];

array_push($response["category"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["category"]);
echo json_encode($response);
}
?>