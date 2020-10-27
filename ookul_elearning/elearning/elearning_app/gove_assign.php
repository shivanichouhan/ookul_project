<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

$response["gove_asssig"] = array();

$user_id=$_POST['user_id'];
$user=$obj->fetchById($user_id,"user_register_goverment","id");

 $user['register_date'];

$now = time(); // or your date as well
$your_date = strtotime($user['register_date']);
$datediff = $now - $your_date;

  $da=round($datediff / (60 * 60 * 24));




    $add=0;
    $rs=$obj->fetchDetailById(1,"assigment_gov","status"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
    $add=$add+1;
}}
if($add==0){
    $response["error"] =true;
$response["success"] =0;
$response["msg"] = "No record Found";
@array_push($response["gove_asssig"]);
echo json_encode($response);
}
else{
$rs=$obj->fetchDetailById(1,"assigment_gov","status"); 
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
        $info["type"] = $row['type'];
        $info["question"] = $row['question'];
        $info["option1"] = $row['option1'];
        $info["option2"] = $row['option2'];
        $info["option3"] = $row['option3'];
        $info["option4"] = $row['option4'];
        $info["answer"] = $row['answer'];
        $info["question_image"] = $row['question_image'];
        $info["option_img1"] = $row['option_img1'];
        $info["option_img12"] = $row['option_img12'];
        $info["option_img3"] = $row['option_img3'];
        $info["option_img4"] = $row['option_img4'];

        @array_push($response["gove_asssig"],$info);
    }





}
if($daa==0){
    $response["error"] =true;
$response["success"] =0;
$response["msg"] = "No Record Found";
@array_push($response["gove_asssig"]);

}
echo json_encode($response);
}
else
{

$response["error"] =true;
$response["success"] =0;
$response["msg"] = "No Record Found";
@array_push($response["gove_asssig"]);
echo json_encode($response);
}
}

?>