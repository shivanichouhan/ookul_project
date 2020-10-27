<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["ebook"] = array();
 
 


$rs=$obj->fetchDetailById(1,"ebook","status"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Videos List";


$info["id"]=$row['id'];
$info["title"] = $row['title'];
$info["document"] = $row['document'];
$info["topics"] = $row['topics'];


$info["date"] = $row['date'];
$info["status"] = $row['status'];
$info["user_id"] = $row['user_id'];
$info["descrp"] = $row['descrp'];

array_push($response["ebook"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["ebook"]);
echo json_encode($response);
}
?>