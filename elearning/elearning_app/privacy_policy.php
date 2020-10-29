<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["privacy"] = array();

$params = (array) json_decode(file_get_contents('php://input'), TRUE);

$rs=$obj->fetchDetailById_todolist_12('2',"privacy_policy","id"); 
if($rs)
{
 
while($row=mysqli_fetch_assoc($rs))
{ 
    
    

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Privacy policy";
$info["description"] = $row['description'];
array_push($response["privacy"], $info);
}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["privacy"]);
echo json_encode($response);
}
?>