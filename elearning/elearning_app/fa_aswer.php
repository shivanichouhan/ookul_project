<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$response["answer1"] = array();
$user_id=$_POST['user_id'];
$someJSON = $_POST['question'];
$someJSON1 = $_POST['answer'];
$right789=0;
$rong=0;
$r=0;
$rs=$obj->answer_api_fa($user_id,$someJSON,$someJSON1,$status); 
if($rs)
{
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Submit Success";
$info["id"]=$rs;



array_push($response["answer1"], $info);
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["answer1"]);
echo json_encode($response);
}

?>