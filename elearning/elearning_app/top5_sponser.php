<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["top5sponser"] = array();
 
$params = (array) json_decode(file_get_contents('php://input'), TRUE);


$rs=$obj->top5_sponser(); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "User List";
$info["id"]=$row['id'];


$info["fname"] = $row['fname'];
$info["lname"] = $row['lname'];
$info["user_category"] = $row['category'];
$info["pofile_picture"] = $row['picture'];


array_push($response["top5sponser"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["top5sponser"]);
echo json_encode($response);
}
?>