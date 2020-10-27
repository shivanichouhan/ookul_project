<?php 
include"../include/database.php";
$obj=new database();

$info=array();
$response["register"] = array();

$id=$_POST['id'];
 $name=$_POST['name'];
 $password=$_POST['password'];
 $email=$_POST['email'];
 $address=$_POST['address'];
 $district=$_POST['district'];
 $block=$_POST['block'];
 $referal_id=$_POST['referal_id'];
 $date_of_birth=$_POST['date_of_birth'];
 $language=$_POST['language'];
 $pro_plan=$_POST['pro_plan'];
 

$rs=$obj->update_register11($name,$password,$email,$address,$district,$block,$referal_id,$date_of_birth,$language,$pro_plan,$id);
if($rs)
{

$response["error"]=false;
$response["success"] =1;
$response["msg"] = "Update Success";
$row=$obj->fetchById($id,"register","id");

$info["id"] = $row['id'];
$info["name"] = $row['name'];
$info["password"] = $row['password'];
$info["email"] = $row['email'];
$info["address"] = $row['address'];
$info["district"] = $row['district'];
$info["block"] = $row['block'];
$info["referal_id"] = $row['referal_id'];
$info["date_of_birth"] = $row['date_of_birth'];
$info["language"] = $row['language'];
$info["pro_plan"] = $row['pro_plan'];


@array_push($response["register"]);
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