<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$response["ebook"] = array();

    $subject=$_POST['subject'];
    $topic=$_POST['topic'];

if($subject=='')
{
    $response["msg"] = "Select Subjcet";
$response["error"] =true;
$response["success"] =0;
array_push($response["ebook"], $info);
echo json_encode($response);
}
else if($topic=='')
{
     $response["msg"] = "Select Topic";
$response["error"] =true;
$response["success"] =0;
array_push($response["ebook"], $info);
echo json_encode($response);
}
else
{
$rs=$obj->fetchDetailByebbok($subject,$topic);
if($rs)
{
    while($row=mysqli_fetch_assoc($rs))
    { 
        $response["error"] =false;
        $response["success"] =1;
        $response["msg"] = "Topic Wise List";
        $info["id"]=$row['id'];
        $info["subject"] = $row['subject'];
        $info["topic"] = $row['topic'];
        $info["document"] = $row['document'];
     
        array_push($response["ebook"], $info);

    }
    echo json_encode($response);
}
else
{
    $response["msg"] = "No record Found";
    $response["error"] =true;
    $response["success"] =0;
    array_push($response["ebook"], $info);
    echo json_encode($response);
}
}
?>