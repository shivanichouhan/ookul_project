<?php 
include"../include/database.php";
$obj=new database();

$info=array();
$response["register"] = array();
$params = (array) json_decode(file_get_contents('php://input'), TRUE);

$id=$params['user_id'];
$fname=$params['fname'];
$lname=$params['lname'];
$email=$params['email'];
$phone=$params['phone'];
$state=$params['state'];
$city=$params['city'];

@$picture = base64_decode($params['picture']);
$myimg = 'myprofile.jpg';
$imgname = time().$myimg;
$imgLocation = '../admin/upload/'.$imgname;
file_put_contents($imgLocation,$picture);
 
if($picture !='')
{
   
$rs=$obj->update_register11_picture($fname,$lname,$email,$phone,$state,$city,$id,$imgname);
}else{
    $rs=$obj->update_register11($fname,$lname,$email,$phone,$state,$city,$id);
}
if($rs)
{

$response["error"]=false;
$response["success"] =1;
$response["msg"] = "Update Success";
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