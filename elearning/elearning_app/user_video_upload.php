<?php

include "../include/database.php";
$obj=new database();
$info=array();
$response["ebook_1"] = array();
$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$user_id=$params['user_id'];
@$title=$params['title'];
@$tags=$params['tags'];
@$date=$params['date'];
@$description=$params['descrp'];
@$category = $params['category'];

@$pdf = base64_decode($params['videos']);
@$thumbnail = base64_decode($params['thumbnail']);

$mypfg = 'myvideo.mp4';
$myimg = 'myimg.jpg';
$pdfname = time().$mypfg;
$imgname = time().$myimg;
$pdfLocation = '../admin/upload/'.$pdfname;
$imgLocation = '../admin/upload/'.$imgname;
file_put_contents($pdfLocation,$pdf);
file_put_contents($imgLocation,$thumbnail);

$rs=$obj->insert_pdf_user_ebook_1_video($category,$user_id,$title,$tags,$date,$description,$pdfname,$imgname); 

if($rs)
{

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Video Uploaded Successfully";

$info["id"]=$rs;

$info["user_id"] = $user_id;
$info["category"] = $category;
$info["title"] = $title;
$info["tags"] = $tags;
$info["date"] = $date;

$info["descrp"] = $description;
$info["thumbnail"] = $imgname;
$info["videos"] = $pdfname;

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

