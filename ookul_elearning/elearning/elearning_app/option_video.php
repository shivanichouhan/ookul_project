<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$response["topic"] = array();

    $subject=$_POST['subject'];
    $topic=$_POST['topic'];

if($subject=='')
{
    $response["msg"] = "Select Subjcet";
$response["error"] =true;
$response["success"] =0;
array_push($response["topic"], $info);
echo json_encode($response);
}
else if($topic=='')
{

$response["msg"] = "Select Topic";
$response["error"] =true;
$response["success"] =0;
array_push($response["topic"], $info);
echo json_encode($response);
}
else
{
$rs=$obj->fetchDetailByStatusBystatus0020($subject,$topic);
if($rs)
{
    while($row=mysqli_fetch_assoc($rs))
    { 
        $response["error"] =false;
        $response["success"] =1;
        $response["msg"] = "Topic Wise List";
        $info["id"]=$row['id'];
        $info["subject"] = $row['subject_id'];
        $info["topic"] = $row['chapter_id'];
        $info["video_name"] = $row['video_name'];
        $info["thumbnail"]=$row['thumbnail'];
        $info["video"] = $row['video'];
        array_push($response["topic"], $info);

    }
    echo json_encode($response);
}
else
{
    $response["msg"] = "No record Found";
    $response["error"] =true;
    $response["success"] =0;
    array_push($response["topic"], $info);
    echo json_encode($response);
}
}
?>