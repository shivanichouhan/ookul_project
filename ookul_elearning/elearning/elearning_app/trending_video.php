<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["videos"] = array();
 
$params = (array) json_decode(file_get_contents('php://input'), TRUE);


$rs=$obj->trending_video(); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Videos List";

$user=$obj->fetchById($row['user_id'],"register","id");


$info["id"]=$row['id'];
$info["title"] = $row['title'];
$info["descrp"] = $row['descrp'];
$info["thumbnail"] = $row['thumbnail'];
$info["videos"] = $row['videos'];
$info["date"] = $row['date'];
$info["status"] = $row['status'];
$info["user_id"] = $row['user_id'];
$info["category"] = $row['category'];


$info["fname"] = $user['fname'];
$info["lname"] = $user['lname'];
$info["user_category"] = $user['category'];
$info["pofile_picture"] = $user['picture'];


array_push($response["videos"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["videos"]);
echo json_encode($response);
}
?>