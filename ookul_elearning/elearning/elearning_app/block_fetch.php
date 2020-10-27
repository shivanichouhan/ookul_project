<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["block"] = array();

$city=$_POST['city'];


$gvar=0;

$rss=$obj->fetchDetailById($city,"block","city"); 


if($rss)
{
while($row1=mysqli_fetch_assoc($rss))
{ 
$gvar= $gvar + 1;
}
}


if($gvar==0){
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["block"]);

echo json_encode($response);
}else{
    
$rs=$obj->fetchDetailById($city,"block","city"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "block List";
$info["id"]=$row['id'];
$info["city"] = $row['city'];
$info["block"] = $row['block'];
$info["status"] = $row['status'];


array_push($response["block"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["block"], $info);
echo json_encode($response);
}
}
?>