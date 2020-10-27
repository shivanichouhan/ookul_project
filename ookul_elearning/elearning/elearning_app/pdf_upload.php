<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["ebook_1"] = array();
@$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$main_category=$params['main_category'];
@$user_id=$params['user_id'];
@$title=$params['title'];
@$tags=$params['tags'];
@$date=$params['date'];
@$description=$params['description'];
@$show_type=$params['show_type'];
@$payment_type=$params['payment_type'];
@$img = $params['image'];
@$user_type = $params['user_type'];
if($user_id){
$rs=$obj->insert_pdf_user_ebook_1($main_category,$user_id,$title,$tags,$date,$description,$show_type,$payment_type,$img); 

if($rs)
{

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Send Successfully";

$info["id"]=$rs;

$info["user_id"] = $user_id;
$info["main_category"] = $main_category;
$info["title"] = $title;
$info["tags"] = $tags;
$info["date"] = $date;

$info["description"] = $description;
$info["show_type"] = $show_type;
$info["payment_type"] = $payment_type;
$info["image"] = $img;


array_push($response["ebook_1"], $info);

echo json_encode($response);
}
else
{
$response["msg"] = "Failed";
$response["error"] =true;
$response["success"] =0;

array_push($response["ebook_1"]);
echo json_encode($response);
}
}else{
    $response["msg"] = "Failed";
$response["error"] =true;
$response["success"] =0;

array_push($response["ebook_1"]);
echo json_encode($response);
}
?>