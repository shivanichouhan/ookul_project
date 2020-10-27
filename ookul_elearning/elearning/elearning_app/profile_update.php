<?php 
//session_start();
include"../include/database.php";
$obj=new database();
$info=array();
$response["User_Info_update"] = array();
$user_id=$_POST['user_id'];
$name=$_POST['name'];
$email=$_POST['email'];

$row=$obj->fetchById($user_id,"user_register_goverment","id");
$dob=$_POST['dob'];
$address=$_POST['address'];
$limg=$row['img'];

$path="../admin/gov_upload/";
 if($_FILES['img']['name']=="") { 
     $img=$limg;
     } else { $img= date ( "Y-m-d" ) . "_" . time () . "." .$_FILES['img']['name']; move_uploaded_file($_FILES['img']['tmp_name'],$path.$img); }


$rs=$obj->update_gov_registeruser($name,$email,$dob,$address,$img,$user_id);
if($rs)
{

$response["error"]=false;
$response["success"] =1;
$response["msg"] = "Update Successful";


$row1=$obj->fetchById($user_id,"user_register_goverment","id");
$info["name"] = $row1['name'];
$info["email"] = $row1['email'];

$info["mobile"] = $row1['mobile'];

$info["city_id"] = $row1['city_id'];
$info["block"] = $row1['block'];

$info["dob"] = $row1['dob'];
$info["address"] = $row1['address'];

$info["img"] = $row1['img'];

array_push($response["User_Info_update"], $info);
echo json_encode($response);
}
else
{
$response["msg"] = "Not Update Sucssesfully";
$response["error"] =true;
$response["success"] =0;
@array_push($response["User_Info_update"]);
echo json_encode($response);

}
?>