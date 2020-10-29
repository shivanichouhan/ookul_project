<?php
include"../include/database.php";
include"../include/session.php";

$obj=new database();
$info=array();
$response["subject"] = array();
$rows=$obj->showsubject();
if($rows)
{
    for($i=0;$i<count($rows);$i++){
        $info["id"]=$rows[$i]['id'];
        $info["subject"]=$rows[$i]['subject'];
        $info["image"]=$rows[$i]['image'];
        $info["status"]=$rows[$i]['status'];
        array_push($response["subject"], $info);
    }
    
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "all subject list";

echo json_encode($response);
}
else
{
$info["msg"] = "No record Found";
$info["error"] =true;
$response["success"] =0;
array_push($response["subject"], $info);
echo json_encode($info);
}
?>