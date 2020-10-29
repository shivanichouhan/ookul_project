<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["plan"] = array();

  $plan_id=$_POST['plan_id'];
  $uu=0;
 $rs4=$obj->fetchDetailByIdByStatus($plan_id,"goverment_plan","plan_id","status",1); 
if($rs4)
{
    $u=0;
while($row4=mysqli_fetch_assoc($rs4))
{
    $u++;
    $uu=$uu+1;
}
}
  
if($uu=='0')
{
    $response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["plan"]);
echo json_encode($response);
}
else
{
$rs=$obj->fetchDetailByIdByStatus($plan_id,"goverment_plan","plan_id","status",1); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "plan List";
$info["id"]=$row['id'];
if($row['plan_id']=="")
{
    $info["plan_id"]="";
}
else
{
    $pla2=$obj->fetchById($row['plan_id'],"gov_plan","id");
    $info["plan_id"]=$pla2['plan_name'];
}


if($row['price']=="")
{
    $info["price"]="";
}
else
{
    $info["price"]=$row['price'];
}
if($row['gst']=="")
{
    $info["gst"]="";
}
else
{
    $info["gst"]=$row['gst'];
}



array_push($response["plan"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["plan"]);
echo json_encode($response);
}
}
?>