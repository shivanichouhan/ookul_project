<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["exam_update"] = array();
$id=$_POST['id'];
if($id){
    $saa=0;
    $rs=$obj->fetchDetailByIdByStatus(1,"exam_update","status","subcategory",$id); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{
$saa=$saa+1;
}}

if($saa==0){

$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["exam_update"]);
echo json_encode($response);
}else{
$rs=$obj->fetchDetailByIdByStatus(1,"exam_update","status","subcategory",$id); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Exam Update List";
$info["id"]=$row['id'];
$tes=$obj->fetchById($row['category'],"category_exam_update","id");
$info["category"]=$tes['category'];
$tes1=$obj->fetchById($row['subcategory'],"subcategory_exam_update","id");
$info["subcategory"]=$tes1['subcategory'];
$info["title"]=$row['title'];
$info["description"]=$row['discription'];
$info["url"]=$row['url'];

array_push($response["exam_update"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["exam_update"]);
echo json_encode($response);
}
    
}

}
else{
 $response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["exam_update"]);
echo json_encode($response);   
}

?>




