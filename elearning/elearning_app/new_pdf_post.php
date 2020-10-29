<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

$response["ebook_pdf"] = array();


@$user_id=$_POST['user_id'];
@$img_title=$_POST['pdf_title'];
@$description=$_POST['description'];
@$cat=$_POST['cat'];

//@$thumbnail=$_POST['thumbnail'];

//@$img = $_POST['image'];


$path="../admin/upload/";
$imgname= date ( "Y-m-d" ) . "_" . time () . "_" .$_FILES['pdf_file']['name']; move_uploaded_file($_FILES['pdf_file']['tmp_name'],$path.$imgname);

$thumbnail= date ( "Y-m-d" ) . "_" . time () . "_" .$_FILES['thumbail']['name']; move_uploaded_file($_FILES['thumbail']['tmp_name'],$path.$thumbnail);



$rs=$obj->insert_new_pdf_post($user_id,$img_title,$description,$imgname,$cat,$thumbnail); 

if($rs)
{


$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Images List";



$user=$obj->fetchById($user_id,"register","id");

$info["id"]=$rs; 
$info["user_id"] = $user_id;
$info["pdf_title"] = $img_title;
$info["descriptionss"] = $description;
$info["pdf"] = $imgname;
$info["cat"] = $cat;
$info["thumbail"] = $thumbnail;




$info["fname"] = @$user['fname'];
$info["lname"] = @$user['lname'];
$info["user_category"] = @$user['category'];
$info["pofile_picture"] = @$user['picture'];


//print_r($response);

array_push($response["ebook_pdf"], $info);
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;

array_push($response["ebook_pdf"]);
echo json_encode($response);
}
?>