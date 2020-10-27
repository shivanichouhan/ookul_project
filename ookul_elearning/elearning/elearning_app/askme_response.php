<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["askme_doubt"] = array();


$user_id=$_POST['user_id'];
$subject=$_POST['subject'];

$topic=$_POST['topic'];

//$topic=0;

$descp=$_POST['descp'];


$path="../admin/gov_upload/";
$img= date ( "Y-m-d" ) . "_" . time () . "." .$_FILES['image']['name']; move_uploaded_file($_FILES['image']['tmp_name'],$path.$img);

$rs=$obj->insert_askme_doubt($user_id,$subject,$topic,$descp,$img); 

if($rs)
{

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Send Successfully";

$info["id"]=$rs;

$info["user_id"] = $user_id;

$info["subject"] = $subject;

$info["topic"] = $topic;

$info["descp"] = $descp;

$info["image"] = $img;


array_push($response["askme_doubt"], $info);

echo json_encode($response);
}
else
{
$response["msg"] = "Failed";
$response["error"] =true;
$response["success"] =0;

array_push($response["askme_doubt"]);
echo json_encode($response);
}
?>