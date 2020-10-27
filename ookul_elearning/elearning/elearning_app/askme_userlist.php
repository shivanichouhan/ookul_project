<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["askme_userlist"] = array();

$user_id=$_POST['user_id'];

if($user_id){

$gvar=0;

$rs=$obj->fetchAllDetailById($user_id,"doubt_clearance","user_id"); 


if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$gvar= $gvar + 1;
}
}

if($gvar==0){
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["askme_userlist"]);
echo json_encode($response);
}else{
$rs=$obj->fetchAllDetailById($user_id,"doubt_clearance","user_id"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Doubt List";

$info["id"]=$row['id'];

$subjects=$obj->fetchById($row['subject'],"gov_subject","id"); 

$topics=$obj->fetchById($row['topic'],"day_wise_topic","id"); 

$subject=$subjects['subject'];

$topic=$topics['topic'];


$info["subject"] = $subject;

$info["topic"] = $topic;

$info["descp"] = $row['descp'];

$info["image"] = $row['image'];

$info["reply_descp"] = $row['reply_descp'];

$info["reply_image"] = $row['reply_image'];

$info["reply_date"] = $row['reply_date'];


array_push($response["askme_userlist"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] = true;
$response["success"] = 0;
array_push($response["askme_userlist"]);
echo json_encode($response);
}

}

}else{
 
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["askme_userlist"]);
echo json_encode($response);  
}
?>