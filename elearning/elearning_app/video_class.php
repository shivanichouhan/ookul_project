<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

$response["video_class"] = array();
  $user_id=$_POST['user_id'];

$user=$obj->fetchById($user_id,"user_register_goverment","id");

    $user['register_date'];
$days2;

$now = time(); // or your date as well
$your_date = strtotime($user['register_date']);
$datediff = $now - $your_date;

  $da=round($datediff / (60 * 60 * 24));

    $da;
  $oo=$obj->fetchById($da,"days","days");
  $days44=$oo['id'];
$days2=$oo['days'];
    $add=0;
    $rs=$obj->fetchDetailById($days44,"video_class","days"); 
    if($rs)
    {
        while($row=mysqli_fetch_assoc($rs))
        { 
            $add=$add+1;
        }
        
    }
    if($add==0)
    {
        
        $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["video_class"]);
        echo json_encode($response);
    }
else{
$rs11=$obj->fetchAllDetail("video_class"); 
if($rs11)
{
    
while($row11=mysqli_fetch_assoc($rs11))
{ 
    $rs1145=$obj->fetchById($row11['days'],"days","id"); 

    if($rs1145['days']<=$da)
    {
         $response["error"] =false;
        $response["success"] =1;
        $response["msg"] = "Video Class";
        $info["id"]=$row11['id'];
        $info["days"]=$row11['days'];
        $info["subject"]=$row11['subject'];
        $info["topic"] = $row11['topic'];
        $info["thumbnail"] = $row11['thumbnail'];
        $info["video"] = $row11['video'];
        @array_push($response["video_class"],$info);
    }
 

}
echo json_encode($response);
}
else
{
      $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["video_class"]);
        echo json_encode($response);

    
}
}

?>