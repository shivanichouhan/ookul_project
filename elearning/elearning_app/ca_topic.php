<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["catopic"] = array();

$subject=$_POST["subject"];
if($subject=='')
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["catopic"]);
echo json_encode($response);
}
else
{
    $qa=0;
    
    
    $rs=$obj->fetchDetailByIdajay_007($subject,"ca_topic","subject"); 
    
    //$rs=$obj->fetchDetailById($subject,"ca_topic","subject");
    
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{
    $qa=$qa+1;
}
}
   if($qa=='0')
   {
       $response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["catopic"]);
echo json_encode($response);
   }
   else
   {
   

$rs=$obj->fetchDetailByIdajay_007($subject,"ca_topic","subject");
       
// $rs=$obj->fetchDetailById($subject,"ca_topic","subject"); 



if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "CA Topic List";
$info["id"]=$row['id'];


$uu=$obj->fetchById($row["subject"],"current_affairs_subject","id");


$info["subject_name"] = $uu['subject_name'];
$info["topic"] = $row['topic'];
$info["status"] = $row['status'];


array_push($response["catopic"], $info);

}
 $response["topic_image"]='current_affairs.png'; 
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["catopic"]);
echo json_encode($response);
}
}
}



?>