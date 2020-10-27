<?php 

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["unsuccess22"] = array();


 $id=$_GET['id'];

     $response["msg"] = "payment not submit";
    $response["error"] =true;
    $response["success"] =0;
    $info['user_id']=$id;
    @array_push($response["unsuccess22"] ,$info);
    echo json_encode($response);
 


?>