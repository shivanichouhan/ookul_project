<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$response["assigment"] = array();

  $class=$_POST['class'];

  $topic=$_POST['topic'];

$chapter=$_POST['chapter'];

$rs=$obj->fetchDetailByStatusBystatusByassigment($class,"topic","class","subject",$subject,"chapter",$chapter); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "assigment  List";
$info["id"]=$row['id'];
$info["class"] = $row['class'];
$info["subject"] = $row['subject'];
$info["chapter"] = $row['chapter'];
$info["topic"] = $row['topic'];
$info["doucment"] = $row['doucment'];
$info["video"] = $row['video'];
$info["contant"] = $row['contant'];
$info["status"] = $row['status'];


array_push($response["assigment"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["assigment"], $info);
echo json_encode($response);
}
?>