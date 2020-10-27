<?php

include_once("../include/database.php");
$obj= new database();
$info=array();

$response["subcategory"] = array();
$id=$_POST['id'];

if($id){

$saa=0;

$rs=$obj->fetchDetailByIdByStatus(1,"subcategory_exam_update","status","category",$id); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{
$saa=$saa+1;
    
}}
if($saa==0){
    $response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["subcategory"]);
echo json_encode($response);
}else{
$rs=$obj->fetchDetailByIdByStatus(1,"subcategory_exam_update","status","category",$id); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "category List";
$info["id"]=$row['id'];
$info["category"]=$row['category'];
$info["subcategory"]=$row['subcategory'];
array_push($response["subcategory"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["subcategory"]);
echo json_encode($response);
}
    
}

}
else{
 $response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["subcategory"]);
echo json_encode($response);   
}

?>




