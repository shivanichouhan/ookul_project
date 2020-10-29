<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

$response["ebook_videos"] = array();


@$user_id=$_POST['user_id'];
@$img_title=$_POST['video_title'];
@$description=$_POST['description'];

//@$img = $_POST['image'];


$path="../admin/upload/";
$imgname= date ( "Y-m-d" ) . "_" . time () . "_" .$_FILES['video']['name']; move_uploaded_file($_FILES['video']['tmp_name'],$path.$imgname);

$thumbnail= date ( "Y-m-d" ) . "_" . time () . "_" .$_FILES['thumbnail']['name']; move_uploaded_file($_FILES['thumbnail']['tmp_name'],$path.$thumbnail);

@$category = $_POST['cat'];



$rs=$obj->insert_new_video_post($user_id,$img_title,$description,$imgname,$thumbnail,$category); 

if($rs)
{


$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Images List";



$user=$obj->fetchById($user_id,"register","id");

$info["id"]=$rs; 
$info["user_id"] = $user_id;
$info["video_title"] = $img_title;
$info["descriptionss"] = $description;
$info["video"] = $imgname;

$info["thumbnail"] = $thumbnail;
$info["cat"] = $category;


$info["fname"] = @$user['fname'];
$info["lname"] = @$user['lname'];
$info["user_category"] = @$user['category'];
$info["pofile_picture"] = @$user['picture'];


//print_r($response);

array_push($response["ebook_videos"], $info);
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;

array_push($response["ebook_videos"]);
echo json_encode($response);
}
?>