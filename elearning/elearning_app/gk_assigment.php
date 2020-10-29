<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

$response["gkassigment"] = array();
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

if($user_id=='')
{
      $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "Enter user Id";
        @array_push($response["gkassigment"]);
        echo json_encode($response);
}
else
{
   
$rs11=$obj->fetchAllDetail("gk_assigment"); 
if($rs11)
{
    
while($row11=mysqli_fetch_assoc($rs11))
{ 
    $rs1145=$obj->fetchById($row11['days'],"days","id"); 
 $rs1145['days'];

 $da;

    if($rs1145['days']<=$da)
    {
         $response["error"] =false;
        $response["success"] =1;
        $response["msg"] = "GK Assigment day wise";
       $info["id"]=$row11['id'];
      
        $info["type"] = $row11['type'];
       
        $info["question"] = $row11['question'];
        $info["option1"] = $row11['option1'];
        $info["option2"] = $row11['option2'];
        $info["option3"] = $row11['option3'];
        $info["option4"] = $row11['option4'];
        $info["soluction"]=$row11['soluction'];
        $info["answer"] = $row11['answer'];
        $info["question_image"] = $row11['question_image'];
        $info["option_img1"] = $row11['option_img1'];
        $info["option_img12"] = $row11['option_img12'];
        $info["option_img3"] = $row11['option_img3'];
        $info["option_img4"] = $row11['option_img4'];
        $info["soluction_img"]=$row11['soluction_img'];
        @array_push($response["gkassigment"],$info);
    }
 

}
echo json_encode($response);
}
else
{
      $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["gkassigment"]);
        echo json_encode($response);

    

}
}


?>