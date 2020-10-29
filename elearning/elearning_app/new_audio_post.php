<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

$response["ebook_audio"] = array();


@$user_id=$_POST['user_id'];
@$img_title=$_POST['audio_title'];
@$description=$_POST['description'];




$path="../admin/upload/";
$imgname= date ( "Y-m-d" ) . "_" . time () . "_" .$_FILES['audio']['name']; move_uploaded_file($_FILES['audio']['tmp_name'],$path.$imgname);

$thumbnail= date ( "Y-m-d" ) . "_" . time () . "_" .$_FILES['thumbnail']['name']; move_uploaded_file($_FILES['thumbnail']['tmp_name'],$path.$thumbnail);

@$category = $_POST['cat'];

$rs=$obj->insert_new_audio_post($user_id,$img_title,$description,$imgname,$thumbnail,$category); 

if($rs)
{


$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Images List";



$user=$obj->fetchById($user_id,"register","id");

$info["id"]=$rs; 
$info["user_id"] = $user_id;
$info["audio_title"] = $img_title;
$info["descriptionss"] = $description;
$info["audio"] = $imgname;

$info["thumbnail"] = $thumbnail;
$info["cat"] = $category;


$info["fname"] = @$user['fname'];
$info["lname"] = @$user['lname'];
$info["user_category"] = @$user['category'];
$info["pofile_picture"] = @$user['picture'];


//print_r($response);

array_push($response["ebook_audio"], $info);
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;

array_push($response["ebook_audio"]);
echo json_encode($response);
}
?>