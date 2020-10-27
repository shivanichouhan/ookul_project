<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["language"] = array();
 
$rs=$obj->fetchAllDetail("add_language"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "language List";
$info["id"]=$row['id'];


//$info["city"] = $row['city'];

if($row['language']=="")
{
    $info["language"]="";
}
else
{
    $info["language"]=$row['language'];
}



array_push($response["language"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["language"], $info);
echo json_encode($response);
}
?>