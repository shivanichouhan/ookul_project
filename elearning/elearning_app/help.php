<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["help"] = array();
$params = (array) json_decode(file_get_contents('php://input'), TRUE);
$rs=$obj->list('help'); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "help List";
$info["id"]=$row['id'];
$info["email"] = $row['email'];
$info["phone"] =     $row['phone'];
$info["location"] = $row['location'];
array_push($response["help"], $info);
}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["help"]);
echo json_encode($response);
}
?>