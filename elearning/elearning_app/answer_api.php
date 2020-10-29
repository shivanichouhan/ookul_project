<?php
include_once("../include/database.php");
$obj= new database();
$info=array();


$response["answer1"] = array();
$user_id=$_POST['user_id'];

$exam_type_id=$_POST['exam_type_id'];

$exam_type=$_POST['exam_type'];
$someJSON = $_POST['question'];
$someJSON1 = $_POST['answer'];

  //print_r($someJSON1);
  // $someArray = json_decode($someJSON, true);
 //  print_r($someArray);

  // $someArray1 = json_decode($someJSON1, true);
    // print_r($someArray1); die();
    
    
$rs=$obj->answer_api_gov($user_id,$exam_type_id,$exam_type,$someJSON,$someJSON1,$status); 


if($rs)
{
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Submit Success";
$info["id"]=$rs;
//$response["msg"] = "Submit Success";
//$info["exam_type_id"]=$usa['exam_type_id'];


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