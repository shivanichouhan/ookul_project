<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

$response["video_class"] = array();
 $user_id=$_POST['user_id'];

$user=$obj->fetchById($user_id,"user_register_goverment","id");

  $user['register_date'];


$now = time(); // or your date as well
$your_date = strtotime($user['register_date']);
$datediff = $now - $your_date;

  $da=round($datediff / (60 * 60 * 24));

  $da;

    $add=0;
    $rs=$obj->fetchDetailById($da,"video_class","days"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
    $add=$add+1;
}}
if($add==0){
    
    $response["error"] =true;
$response["success"] =0;
$response["msg"] = "No Record Found";
@array_push($response["gove_topic"]);
echo json_encode($response);
}
else{
$rs=$obj->fetchAllDetail("video_class"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 


$sch=$obj->fetchById($row['days'],"days","id");
   $sch['days']; 

 $da;
// die();
$daa=0;
    if($da==$sch['days'])
    {
$daa=$daa+1;

$response["error"] =false;
$response["success"] =1;
$response["msg"] = "assigment  List";


        $info["id"]=$row['id'];
        $info["days"]=$row['days'];
        $info["topic"] = $row['topic'];
        $info["thumbnail"] = $row['thumbnail'];
        $info["video"] = $row['video'];
 

        @array_push($response["video_class"],$info);
    }
}
if($daa==0){
    $response["error"] =true;
$response["success"] =0;
$response["msg"] = "No Record Found";
@array_push($response["video_class"]);

}
echo json_encode($response);
}
else
{

$response["error"] =true;
$response["success"] =0;
$response["msg"] = "No Record Found";
@array_push($response["video_class"]);
echo json_encode($response);
}
}

?>