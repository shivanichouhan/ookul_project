<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["day_wise_subject"] = array();

  $day=$_POST['day'];
  
if($day=='')
{
    $response["msg"] = "No record Found";
    $response["error"] =true;
    $response["success"] =0;
    @array_push($response["day_wise_subject"]);
    echo json_encode($response);
    
}
else
{
    $dd=0;
    $rs=$obj->fetchDetailById($day,"assign_subject","days"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
    $dd=$dd+1;
}
}
  if($dd=='0')
  {

$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["day_wise_subject"]);
echo json_encode($response);
  }
  else
  {
$rs=$obj->fetchDetailById($day,"assign_subject","days"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Day Wise Subject List";
$info["id"]=$row['id'];
$info["sub_id"]=$row['subject'];
$uu=$obj->fetchById($row['days'],"days","id");
$info["days"] = $uu['days'];

$uu4=$obj->fetchById($row['subject'],"gov_subject","id");

$info["subject"] = $uu4['subject'];

if($uu4['image']=='')
{
    $info["image"]='nosubject.png';
}
else
{
$info["image"] = $uu4['image'];
}
$info["status"] = $row['status'];


array_push($response["day_wise_subject"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["day_wise_subject"]);
echo json_encode($response);
}
}
}
?>