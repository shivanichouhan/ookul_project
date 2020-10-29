<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$response["topic"] = array();

$topic=$_POST['topics'];

$subject=$_POST['subject'];

  
    


//$rs=$obj->fetchDetailById($subject,"gover_topic","subject"); 

$rs=$obj->fetchDetailByIdByStatus($topic,"gover_topic","topic","subject",$subject);

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Topic List";

$info["id"]=$row['id'];

$info["subject"] = $row['subject'];

$info["topic"] = $row['topic'];

$info["thumbnail"] = $row['thumbnail'];

$info["video"] = $row['video'];

$info["title"] = $row['title'];

$info["status"] = $row['status'];

$info["pstatus"] = $row['pstatus'];

array_push($response["topic"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["topic"], $info);
echo json_encode($response);
}
?>