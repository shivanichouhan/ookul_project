<?php 
//session_start();
include"../include/database.php";
$obj=new database();

$pla=$obj->fetchById(1,"goverment_plan","plan_id");

$info=array();
$response["User_Info"] = array();

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$city_id=$_POST['city_id'];
$block=$_POST['block'];
$gender=$_POST['gender'];
$institute_name=$_POST['institute_name'];
$select_plan=$pla['plan_id'];
$refferel_id7=$_POST['refferel_id'];
if($refferel_id7=="utm_source=(not%20set)&utm_medium=(not%20set)"){
    $refferel_id="";
}else{
    $refferel_id=$refferel_id7;
}
 $mac=$_POST['mac'];
$fcm_token=$_POST['fcm_token'];

if($_FILES['img']=='')
{
    $img;
}
else
{
$path1="../admin/gov_upload/";
$img = date ( "Y-m-d" ) . "_" . time () . "." . $_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],$path1.$img);
}

if($mobile){
$check=$obj->fetchById($mobile,"`user_register_goverment`", "mobile");
//

if($check)
{
$info["error"] =true;
$info["success"] =0;
$info["msg"] = "Mobile Number Already Exist";
array_push($response, $info);
echo json_encode($response);
}
else
{
	
	 $check12=$obj->fetchById($mac,"`user_register_goverment`", "mac");
	
	if($check12)
	{
		$info["error"] =true;
$info["success"] =0;
$info["msg"] = "Your Number Already Registered With Bongshikha, So Please Login With Your Valid Username & Password";

echo json_encode($info);
	}
	else {
$rs=$obj->insert_register_goverment($name,$email,$mobile,$password,$city_id,$block,$refferel_id,$select_plan,$mac,$fcm_token,$gender,$institute_name,$img);
//insert_register_goverment($name,$email,$mobile,$password,$city_id,$block,$dob,$refferel_id,$select_language,$select_plan,$mac,$fcm_token,$img);
if($rs)
{
$_SESSION['user_id']=$rs;
$response["error"]=false;
$response["success"] =1;
$response["msg"] = "Registration Completed Successfully";
$info["id"] = $_SESSION['user_id'];

$row=$obj->fetchById($_SESSION['user_id'],"user_register_goverment","id");
$info["name"] = $row['name'];
$info["email"] = $row['email'];
$info["mobile"]=$row['mobile'];
$info["password"] = $row['password'];
$info["city_id"] = $row['city_id'];
$info["block"] = $row['block'];
$info["refferel_id"] = $row['refferel_id'];
$info["gender"] = $row['gender'];
$info["institute_name"] = $row['institute_name'];
$info["select_plan"] = $row['select_plan'];
$info["mac"] = $row['mac'];
$info["fcm_token"] = $row['fcm_token'];
$info["img"] = $row['img'];
if( $row['address']=='')
{
    $info["address"] = "";
}
else
{
$info["address"] = $row['address'];
}
$info["status"] = $row['status'];
$info["pstatus"] = $row['pstatus'];
array_push($response["User_Info"], $info);
echo json_encode($response);

}

else
{
$response["msg"] = "Not Submitted Successfully";
$response["error"] =true;
$response["success"] =0;
array_push($response);
echo json_encode($response);
}
}
}
}else{
    $response["msg"] = "Not Submitted Successfully";
$response["error"] =true;
$response["success"] =0;
@array_push($response);
echo json_encode($response);
}
?>