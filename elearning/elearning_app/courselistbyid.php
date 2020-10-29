<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["course"] = array();
 
$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$course_id=$params['course_id'];
$rs=$obj->listdetail('course_detail','course_id',$course_id);


if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "course Detail";
$info["course_id"]=$row['course_id'];
$info["payment_type"] = $row['payment_type'];
$info["document"] = $row['document'];


array_push($response["course"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["course"]);
echo json_encode($response);
}
?>