<?php 
include"../include/database.php";
$obj=new database();

$info=array();
$response["register"] = array();
$params = (array) json_decode(file_get_contents('php://input'), TRUE);

$id=$params['user_id'];
   
$rs=$obj->update_otp_status($id);

if($rs)
{

$response["error"]=false;
$response["success"] =1;
$response["msg"] = "signup Success";
$row=$obj->fetchById($id,"register","id");

$info["id"] = $row['id'];
$info["fname"] = $row['fname'];
$info["lname"] = $row['lname'];
$info["email"] = $row['email'];
$info["phone"] = $row['phone'];
$info["picture"] = $row['picture'];
$info["state"] = $row['state'];
$info["city"] = $row['city'];

@array_push($response["register"],$info);
echo json_encode($response);
}
else
{
$info["msg"] = "Not  Update ";
$info["error"] =true;
$info["success"] =0;
@array_push($response["register"],$info);
echo json_encode($info);

}
?>