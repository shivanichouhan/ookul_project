<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["casubject"] = array();

$Y=0;


$rs=$obj->fetchAllDetail("current_affairs_subject"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{

    $Y=$Y+1;
}

}



if($Y=='0')
{

$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["casubject"]);
echo json_encode($response);
}
else
{



$rs=$obj->fetchAllDetail("current_affairs_subject"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = " Subject List";

$info["id"]=$row['id']; 

$info["subject_name"] = $row['subject_name'];

//$info["button"]=$row['button'];

if($row['image']=='')
{
    $info["image"]='nosubject.png';
}
else
{
$info["image"] = $row['image'];
}

$info["status"] = $row['status'];


array_push($response["casubject"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["casubject"]);
echo json_encode($response);
}
}


?>