<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["image_list"] = array();

//$params = (array) json_decode(file_get_contents('php://input'), TRUE);
 
 
 $user_id=$_POST['user_id'];


$rs=$obj->fetchDetailById($user_id,"image_posts","userid"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Image List";

$user=$obj->fetchById($row['userid'],"register","id");

$info["id"]=$row['id']; 
$info["user_id"] = $row['userid'];
$info["image_title"] = $row['image_title'];
$info["descriptionss"] = $row['descriptionss'];
$info["images"] = $row['images'];
$info["date"] = $row['date'];



$info["fname"] = @$user['fname'];
$info["lname"] = @$user['lname'];
$info["user_category"] = @$user['category'];
$info["pofile_picture"] = @$user['picture'];


array_push($response["image_list"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;

array_push($response["image_list"]);
echo json_encode($response);
}
?>