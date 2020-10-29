<?php

include"../include/database.php";
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


@$pdf = base64_decode($params['image']);
@$thumbnail = base64_decode($params['thumbnail']);

if($doc_type==1 ||$doc_type==2  ||$doc_type==3 ||$doc_type==4 ||$doc_type==5)
{
    $mypfg = 'mypdf.pdf';
    $myimg = 'myimg.jpg';
}
if($doc_type==6)
{
    $mypfg = 'myaudio.mp3';
    $myimg = 'myimg.jpg';
}
$pdfname = time().$mypfg;
$imgname = time().$myimg;

$pdfLocation = '../admin/upload/'.$pdfname;
$imgLocation = '../admin/upload/'.$imgname;

file_put_contents($pdfLocation,$pdf);
file_put_contents($imgLocation,$thumbnail);


$rs=$obj->insert_pdf_user_ebook_1($main_category,$user_id,$title,$tags,$date,$description,$show_type,$payment_type,$pdfname,$user_type,$doc_type,$notes,$imgname); 

if($rs)
{

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Document Uploaded Successfully";

$info["id"]=$rs;

$info["user_id"] = $user_id;
$info["main_category"] = $main_category;
$info["title"] = $title;
$info["tags"] = $tags;
$info["date"] = $date;

$info["description"] = $description;
$info["show_type"] = $show_type;
$info["payment_type"] = $payment_type;
$info["image"] = $pdfname;
$info["user_type"] = $user_type;
$info["doc_type"] = $doc_type;
$info["notes"] = $notes;
$info["thumbnail"] = $imgname;


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

