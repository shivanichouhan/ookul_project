<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

$response["ebook"] = array();

//$params = (array) json_decode(file_get_contents('php://input'), TRUE);

@$user_id=$_POST['user_id'];
@$img_title=$_POST['img_title'];
@$description=$_POST['description'];

//@$img = $_POST['image'];


$path="../admin/upload/";
$imgname= date ( "Y-m-d" ) . "_" . time () . "." .$_FILES['image']['name']; move_uploaded_file($_FILES['image']['tmp_name'],$path.$imgname);

//$imgname = time().$img;

//$imgnameLocation = '../admin/upload/'.$imgname;

//file_put_contents($imgnameLocation,$img);




$rs=$obj->insert_new_images_post($user_id,$img_title,$description,$imgname); 

if($rs)
{


$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Images List";



$user=$obj->fetchById($user_id,"register","id");

$info["id"]=$rs; 
$info["user_id"] = $user_id;
$info["image_title"] = $img_title;
$info["descriptionss"] = $description;
$info["image"] = $imgname;




$info["fname"] = @$user['fname'];
$info["lname"] = @$user['lname'];
$info["user_category"] = @$user['category'];
$info["pofile_picture"] = @$user['picture'];


//print_r($response);

array_push($response["ebook"], $info);
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