<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$response["term"] = array();

$params = (array) json_decode(file_get_contents('php://input'), TRUE);

$rs=$obj->fetchDetailById_todolist_12('3',"privacy_policy","id"); 

if($rs)
{
 
while($row=mysqli_fetch_assoc($rs))
{ 
    

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "About";
$info["description"] = $row['description'];
array_push($response["term"], $info);
}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["term"]);
echo json_encode($response);
}
?>