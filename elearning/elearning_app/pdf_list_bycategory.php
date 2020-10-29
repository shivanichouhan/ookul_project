<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$response["pdf_list"] = array();


 $category=$_POST['cat'];
 
 $user_id=$_POST['user_id'];


if($category){

//$rs=$obj->fetchDetailById($category,"pdf_posts","category"); 

$rs=$obj->fetchDetailByIdByStatus($category,"pdf_posts", "category","userid", $user_id);

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
$info["pdf_title"] = $row['pdf_title'];

$info["descriptions"] = $row['descriptionss'];
$info["pdf"] = $row['pdf'];
$info["date"] = $row['date'];


$info["category"] = $row['category'];
$info["thumbail"] = $row['thumbail'];


$info["fname"] = @$user['fname'];
$info["lname"] = @$user['lname'];
$info["user_category"] = @$user['category'];
$info["pofile_picture"] = @$user['picture'];


array_push($response["pdf_list"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;

array_push($response["pdf_list"]);
echo json_encode($response);
}
}else{
    
    
 $response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;

array_push($response["pdf_list"]);
echo json_encode($response);   
}



?>