<?php

include "../include/database.php";
$obj=new database();
$info=array();
$response["ebook_1"] = array();
$params = (array) json_decode(file_get_contents('php://input'), TRUE);
@$main_category=$params['main_category'];
@$user_id=$params['user_id'];
@$title=$params['title'];
@$tags=$params['tags'];
@$date=$params['date'];
@$description=$params['description'];
@$show_type=$params['show_type'];
@$payment_type=$params['payment_type'];
@$doc_type = $params['doc_type'];
@$notes = $params['notes'];
@$user_type = $params['user_type'];
@$privacy = $params['privacy'];




@$pdf = base64_decode($params['video_file']);
@$thumbnail = base64_decode($params['thumbnail']);

$mypfg = 'myvideo.mp4';
$myimg = 'myimg.jpg';
$pdfname = time().$mypfg;
$imgname = time().$myimg;
$pdfLocation = '../admin/upload/'.$pdfname;
$imgLocation = '../admin/upload/'.$imgname;
file_put_contents($pdfLocation,$pdf);
file_put_contents($imgLocation,$thumbnail);

$rs=$obj->insert_pdf_user_ebook_1_video($main_category,$user_id,$title,$tags,$date,$description,$show_type,$payment_type,$pdfname,$imgname,$privacy); 

if($rs)
{

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Video Uploaded Successfully";

$info["id"]=$rs;

$info["user_id"] = $user_id;
$info["main_category"] = $main_category;
$info["title"] = $title;
$info["tags"] = $tags;
$info["date"] = $date;

$info["description"] = $description;
$info["show_type"] = $show_type;
$info["payment_type"] = $payment_type;
$info["privacy"] = $privacy;
$info["thumbnail"] = $imgname;
$info["video_file"] = $pdfname;


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

