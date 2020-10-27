<?php
include"../include/database.php";
include"../include/session.php";

$obj=new database();
$info=array();
$response["assignment"] = array();
$rows=$obj->showassignment();
if($rows)
{
    for($i=0;$i<count($rows);$i++){
       
        $info["id"]=$rows[$i]['id'];
        $info["question"]=$rows[$i]['question'];
        $info["answer"]=$rows[$i]['answer'];
        $info["status"]=$rows[$i]['status'];
        array_push($response["assignment"], $info);
    }
    
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "assignment list";
echo json_encode($response);

}
else
{
$info["msg"] = "No record Found";
$info["error"] =true;
$response["success"] =0;
array_push($response["assignment"], $info);
echo json_encode($info);
}
?>