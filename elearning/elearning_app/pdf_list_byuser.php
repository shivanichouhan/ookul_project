<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["pdf_list_byuser"] = array();
 
$params = (array) json_decode(file_get_contents('php://input'), TRUE);


$user_id=$params['user_id'];

$rs=$obj->fetchDetailById($user_id,"ebook_pdf","user_id"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Pdf List";

$user=$obj->fetchById($row['user_id'],"register","id");


$info["id"]=$row['id'];
$info["user_id"] = $row['user_id'];
$info["main_category"] = $row['main_category'];
$info["title"] = $row['title'];
$info["tags"] = $row['tags'];
$info["date"] = $row['date'];
$info["description"] = $row['description'];
$info["show_type"] = $row['show_type'];
$info["payment_type"] = $row['payment_type'];
$info["images"] = $row['images'];


$info["fname"] = $user['fname'];
$info["lname"] = $user['lname'];
$info["user_category"] = $user['category'];
$info["pofile_picture"] = $user['picture'];


array_push($response["pdf_list_byuser"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["pdf_list_byuser"]);
echo json_encode($response);
}
?>