<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["cavideo"] = array();
$subject=$_POST["subject"];
$topic=$_POST["topic"];


if($subject=='')
{
    $response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["cavideo"]);
echo json_encode($response);
}
else
{
    if($topic=='')
    {
        $response["msg"] = "No record Found";
        $response["error"] =true;
        $response["success"] =0;
        @array_push($response["cavideo"]);
        echo json_encode($response);
    }
    else
    {
    
    $qa=0;
    $rs=$obj->fetchDetailByIdByStatusBYdes($subject,"ca_video_class","subject","topic",$topic); 
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
@array_push($response["cavideo"]);
echo json_encode($response);
   }
   else
   {
$rs=$obj->fetchDetailByIdByStatusBYdes($subject,"ca_video_class","subject","topic",$topic); 
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
$uu1=$obj->fetchById($row["topic"],"ca_topic","id");
$info["topic"] = $uu1['topic'];
$info["title"] = $row['title'];
$info["image"] = $row['image'];
$info["video"] = $row['video'];
$info["status"] = $row['status'];
$info["free_status"]=$row['free_status'];

array_push($response["cavideo"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["cavideo"]);
echo json_encode($response);
}
}
}
}


?>