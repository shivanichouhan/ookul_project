<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["home_exam_update"] = array();
$ras=0;
$rs=$obj->fetchAllDetail("exam_update"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{
    $ras=$ras+1;
}
}


if($ras=='0')
{
    $response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["home_exam_update"]);
echo json_encode($response);
}
else
{
$rs=$obj->fetchAllDetail("exam_update"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Exam Update List";
$info["id"]=$row['id'];

$yy=$obj->fetchById($row['category'],"category_exam_update","id");
$info["category"]=$yy['category'];
$yy1=$obj->fetchById($row['subcategory'],"subcategory_exam_update","id");
$info["subcategory"]=$yy1['subcategory'];

$info["title"]=$row['title'];
$info["description"]=$row['discription'];

$info["url"]=$row['url'];

array_push($response["home_exam_update"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["home_exam_update"]);
echo json_encode($response);
}
}
?>




