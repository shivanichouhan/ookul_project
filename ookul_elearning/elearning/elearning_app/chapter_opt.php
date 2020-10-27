<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["chapter"] = array();
  $subject=$_POST['subject'];

$rs=$obj->fetchDetailById($subject,"optional_chapter","opt_sub_id"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "block List";

$info["id"]=$row['id'];
$info["chapter"] = $row['chapter'];
$info["opt_sub_id"] = $row['opt_sub_id'];
$info["image"] = $row['image'];

$info["pstatus"] = $row['pstatus'];

array_push($response["chapter"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["chapter"], $info);
echo json_encode($response);
}
?>